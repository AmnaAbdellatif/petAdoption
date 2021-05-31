<?php

namespace App\Entity;

use App\Repository\PetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PetRepository::class)
 */
class Pet
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_pet;

    /**
     * @ORM\Column(type="integer")
     */
    private $age_pet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sex_pet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address_pet;

    /**
     * @ORM\Column(type="blob")
     */
    private $image_pet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_owner;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamePet(): ?string
    {
        return $this->name_pet;
    }

    public function setNamePet(string $name_pet): self
    {
        $this->name_pet = $name_pet;

        return $this;
    }

    public function getAgePet(): ?int
    {
        return $this->age_pet;
    }

    public function setAgePet(int $age_pet): self
    {
        $this->age_pet = $age_pet;

        return $this;
    }

    public function getSexPet(): ?string
    {
        return $this->sex_pet;
    }

    public function setSexPet(string $sex_pet): self
    {
        $this->sex_pet = $sex_pet;

        return $this;
    }

    public function getAddressPet(): ?string
    {
        return $this->address_pet;
    }

    public function setAddressPet(string $address_pet): self
    {
        $this->address_pet = $address_pet;

        return $this;
    }
    private $rawPhoto;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    public function getImagePet()
    {
        $this->rawPhoto = "data:image/png;base64," . base64_encode(stream_get_contents($this->image_pet));
    return $this->rawPhoto;
        //return $this->image_pet;
        
    }

    public function setImagePet($image_pet): self
    {
        $this->image_pet = $image_pet;

        return $this;
    }
    //private $rawPhoto;

    public function displayPhoto()
    {
        if(null === $this->rawPhoto) {
             $this->rawPhoto = "data:image/png;base64," . base64_encode(stream_get_contents($this->getImagePet()));
    }

    return $this->rawPhoto;
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

    public function getIdOwner(): ?int
    {
        return $this->id_owner;
    }

    public function setIdOwner(int $id_owner): self
    {
        $this->id_owner = $id_owner;

        return $this;
    }
    public function toArray() 
    {
        return ['id'=>$this->id, 'name_pet' => $this->name_pet, 'age_pet' => $this->age_pet, 'sex_pet' => $this->sex_pet, 'address_pet' => $this->address_pet, 'image_pet' => $this->getImagePet(),  'description' => $this->description , 'id_owner' => $this->id_owner, 'status' => $this->status, 'type' => $this->type ];
       
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

}
