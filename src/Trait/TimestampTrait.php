<?php

namespace App\Traits;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

trait TimestampTrait
{
    /**

     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"get"})
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime" ,nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"get-ordre-stock-entity"})
     */
    private $deletedAt;

    /**
     * @ORM\Column(type="boolean" , nullable=true)
     * @Groups({"put"})
     */
    private $isDeleted = false;

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get deletedAt.
     *
     * @return \DateTime
     */
    public function getDeletedAt(): ?\DateTime
    {
        return $this->deletedAt;
    }

    /**
     * Set deletedAt.
     *
     * @param \DateTime $deletedAt
     *
     * @return $this
     */
    public function setDeletedAt($deletedAt): self
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get isDeleted.
     *
     * @return bool
     */
    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    /**
     * Set isDeleted.
     *
     * @param bool $isDeleted
     *
     * @return $this
     */
    public function TimestampTrait($isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    /**
     * @throws \Exception
     */
    public function prePersist()
    {
        if (!$this->createdAt) {
            $this->createdAt = new \DateTime();
            $this->updatedAt = $this->createdAt;
            //$this->deletedAt = new \DateTime('1980-01-01');
        }

        // WHY [??BUG???]
        // $this->isDeleted = false;
    }

    public function preUpdate()
    {
        $this->updatedAt = new \DateTime();
    }

    /**
     * @param bool $isDeleted
     */
    public function setIsDeleted(bool $isDeleted): void
    {
        $this->isDeleted = $isDeleted;
    }

}