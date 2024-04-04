<?php

namespace App\Entity;

use App\Repository\MultipleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MultipleRepository::class)]
class Multiple
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\ManyToMany(targetEntity: Choix::class, inversedBy: 'multiples')]
    private $Choix;

    public function __construct()
    {
        $this->Choix = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Choix>
     */
    public function getChoix(): Collection
    {
        return $this->Choix;
    }

    public function addChoix(Choix $choix): self
    {
        if (!$this->Choix->contains($choix)) {
            $this->Choix[] = $choix;
        }

        return $this;
    }

    public function removeChoix(Choix $choix): self
    {
        $this->Choix->removeElement($choix);

        return $this;
    }
}
