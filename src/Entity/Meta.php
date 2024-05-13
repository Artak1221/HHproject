<?php

namespace App\Entity;

use App\Entity\Trait\MainTranslationTrait;
use App\Entity\Translation\MetaTranslation;
use App\Repository\MetaRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;

#[Gedmo\TranslationEntity(class: self::TRANSLATION_ENTITY)]
#[ORM\Entity(repositoryClass: MetaRepository::class)]
class Meta implements Translatable
{
    use MainTranslationTrait;
    const TRANSLATION_ENTITY = MetaTranslation::class;

    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Gedmo\Translatable]
    private ?string $title = null;

    #[ORM\Column(length: 500, nullable: true)]
    #[Gedmo\Translatable]
    private ?string $description = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Gedmo\Translatable]
    private ?string $keyword = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    public function setKeyword(?string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }
}
