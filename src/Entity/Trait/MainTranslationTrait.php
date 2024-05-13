<?php

namespace App\Entity\Trait;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
trait MainTranslationTrait
{
    #[ORM\OneToMany(mappedBy: 'object', targetEntity: self::TRANSLATION_ENTITY, cascade: ["persist", "remove"])]
    protected Collection $translations;

    #[Gedmo\Locale]
    protected ?string $locale = null;
}