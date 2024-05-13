<?php

namespace App\Entity\Translation;

use App\Entity\Meta;
use Gedmo\Translatable\Entity\MappedSuperclass\AbstractPersonalTranslation;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: 'meta_translation')]
#[ORM\UniqueConstraint(name: "meta_translation_idx", columns: ['locale','object_id','field'])]
class MetaTranslation extends AbstractPersonalTranslation
{
    #[ORM\ManyToOne(targetEntity: Meta::class, inversedBy: 'translations')]
    #[ORM\JoinColumn(name: "object_id", onDelete: 'cascade')]
    protected $object;
}