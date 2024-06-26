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

namespace Sonata\BlockBundle\Block\Service;

use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Twig\Environment;

/**
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
abstract class AbstractBlockService implements BlockServiceInterface
{
    public function __construct(private Environment $twig)
    {
    }

    /**
     * Returns a Response object than can be cacheable.
     *
     * @param array<string, mixed> $parameters
     */
    public function renderResponse(string $view, array $parameters = [], ?Response $response = null): Response
    {
        $response ??= new Response();

        $response->setContent($this->twig->render($view, $parameters));

        return $response;
    }

    /**
     * Returns a Response object that cannot be cacheable, this must be used if the Response is related to the user.
     * A good solution to make the page cacheable is to configure the block to be cached with javascript ...
     *
     * @deprecated since sonata-project/block-bundle 4.12 and will be removed in 5.0.
     *
     * NEXT_MAJOR: remove
     *
     * @param array<string, mixed> $parameters
     */
    public function renderPrivateResponse(string $view, array $parameters = [], ?Response $response = null): Response
    {
        @trigger_error(
            sprintf(
                'Method "%s" is deprecated since sonata-project/block-bundle 4.12 and will be removed in 5.0.',
                __METHOD__
            ),
            \E_USER_DEPRECATED
        );

        return $this->renderResponse($view, $parameters, $response)
            ->setTtl(0)
            ->setPrivate();
    }

    /**
     * Define the default options for the block.
     */
    public function configureSettings(OptionsResolver $resolver): void
    {
    }

    public function getCacheKeys(BlockInterface $block): array
    {
        $updatedAt = $block->getUpdatedAt();

        return [
            'block_id' => $block->getId(),
            'updated_at' => null !== $updatedAt ? $updatedAt->format('U') : null,
        ];
    }

    public function load(BlockInterface $block): void
    {
    }

    public function execute(BlockContextInterface $blockContext, ?Response $response = null): Response
    {
        $template = $blockContext->getTemplate();
        \assert(null !== $template);

        return $this->renderResponse($template, [
            'block_context' => $blockContext,
            'block' => $blockContext->getBlock(),
        ], $response);
    }

    public function getTwig(): Environment
    {
        return $this->twig;
    }
}
