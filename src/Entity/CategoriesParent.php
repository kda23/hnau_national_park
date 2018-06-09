<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoriesParentRepository")
 */
class CategoriesParent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cat_id;

    /**
     * @ORM\Column(type="text")
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\CategoriesChild", mappedBy="category_parent")
     */
    private $categories_child;

    public function __construct()
    {
        $this->categories_child = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCatId(): ?string
    {
        return $this->cat_id;
    }

    public function setCatId(string $cat_id): self
    {
        $this->cat_id = $cat_id;

        return $this;
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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
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

    /**
     * @return Collection|CategoriesChild[]
     */
    public function getCategoriesChild(): Collection
    {
        return $this->categories_child;
    }

    public function addCategoriesChild(CategoriesChild $categoriesChild): self
    {
        if (!$this->categories_child->contains($categoriesChild)) {
            $this->categories_child[] = $categoriesChild;
            $categoriesChild->setCategoryParent($this);
        }

        return $this;
    }

    public function removeCategoriesChild(CategoriesChild $categoriesChild): self
    {
        if ($this->categories_child->contains($categoriesChild)) {
            $this->categories_child->removeElement($categoriesChild);
            // set the owning side to null (unless already changed)
            if ($categoriesChild->getCategoryParent() === $this) {
                $categoriesChild->setCategoryParent(null);
            }
        }

        return $this;
    }
}
