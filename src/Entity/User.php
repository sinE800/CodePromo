<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


#[ORM\Entity(repositoryClass: UserRepository::class)]
/**
 * @ORM\Entity
 * @UniqueEntity("mail",
 *     message="L'adresse mail est déjà utilisé.")
 */

class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 100)]
    private $name;

    #[ORM\Column(type: 'string', length: 100)]
    private $firstname;


    #[ORM\Column(type: 'string', length: 100, unique: true)]
    private $mail;

    #[ORM\Column(type: 'string', length: 10)]
    private $code;

    #[ORM\Column(type: 'string', length: 10)]
    private $codeActivated;

    #[ORM\Column(type: 'datetime')]
    private $creationTime;

    #[ORM\Column(type: 'string', length: 100)]
    private $Gain;

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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getCodeActivated(): ?string
    {
        return $this->codeActivated;
    }

    public function setCodeActivated(string $codeActivated): self
    {
        $this->codeActivated = $codeActivated;

        return $this;
    }

    public function getCreationTime(): ?\DateTimeInterface
    {
        return $this->creationTime;
    }

    public function setCreationTime(\DateTimeInterface $creationTime): self
    {
        $this->creationTime = $creationTime;

        return $this;
    }

    public function getGain(): ?string
    {
        return $this->Gain;
    }

    public function setGain(string $Gain): self
    {
        $this->Gain = $Gain;

        return $this;
    }
}
