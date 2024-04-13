<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $FirstName = null;

    #[ORM\Column(length: 255)]
    private ?string $LastName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $PatronymicName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Description = null;

    public function getId() : ?int
    {
        return $this->id;
    }

    public function getFirstName() : ?string
    {
        return $this->FirstName;
    }

    public function setFirstName(string $FirstName) : static
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getLastName() : ?string
    {
        return $this->LastName;
    }

    public function setLastName(string $LastName) : static
    {
        $this->LastName = $LastName;

        return $this;
    }

    public function getPatronymicName() : ?string
    {
        return $this->PatronymicName;
    }

    public function setPatronymicName(?string $PatronymicName) : static
    {
        $this->PatronymicName = $PatronymicName;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }
}
