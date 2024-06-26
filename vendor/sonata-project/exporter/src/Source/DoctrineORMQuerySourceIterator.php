<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Exporter\Source;

use Doctrine\ORM\Query;

final class DoctrineORMQuerySourceIterator extends AbstractPropertySourceIterator
{
    protected Query $query;

    /**
     * @param array<string> $fields Fields to export
     */
    public function __construct(
        Query $query,
        array $fields,
        string $dateTimeFormat = 'r',
        private int $batchSize = 100
    ) {
        $this->query = clone $query;
        $this->query->setParameters($query->getParameters());
        foreach ($query->getHints() as $name => $value) {
            $this->query->setHint($name, $value);
        }

        parent::__construct($fields, $dateTimeFormat);
    }

    /**
     * @return array<string, mixed>
     */
    public function current(): array
    {
        $current = $this->getIterator()->current();

        $data = $this->getCurrentData($current);

        if (0 === ($this->getIterator()->key() % $this->batchSize)) {
            $this->query->getEntityManager()->clear();
        }

        return $data;
    }

    public function rewind(): void
    {
        $this->iterator = $this->iterableToIterator($this->query->toIterable());
        $this->iterator->rewind();
    }

    /**
     * @param iterable<mixed> $iterable
     */
    private function iterableToIterator(iterable $iterable): \Iterator
    {
        if ($iterable instanceof \Iterator) {
            return $iterable;
        }
        if (\is_array($iterable)) {
            return new \ArrayIterator($iterable);
        }

        return new \ArrayIterator(iterator_to_array($iterable));
    }
}
