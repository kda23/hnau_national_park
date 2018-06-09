<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CartRepository")
 */
class Cart
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $cart_id_product;

    /**
     * @ORM\Column(type="integer")
     */
    private $cart_price;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cart_count;

    /**
     * @ORM\Column(type="datetime")
     */
    private $cart_datatime;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $user_name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $post_index;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Product", mappedBy="cart")
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCartIdProduct(): ?int
    {
        return $this->cart_id_product;
    }

    public function setCartIdProduct(int $cart_id_product): self
    {
        $this->cart_id_product = $cart_id_product;

        return $this;
    }

    public function getCartPrice(): ?int
    {
        return $this->cart_price;
    }

    public function setCartPrice(int $cart_price): self
    {
        $this->cart_price = $cart_price;

        return $this;
    }

    public function getCartCount(): ?int
    {
        return $this->cart_count;
    }

    public function setCartCount(?int $cart_count): self
    {
        $this->cart_count = $cart_count;

        return $this;
    }

    public function getCartDatatime(): ?\DateTimeInterface
    {
        return $this->cart_datatime;
    }

    public function setCartDatatime(\DateTimeInterface $cart_datatime): self
    {
        $this->cart_datatime = $cart_datatime;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->user_name;
    }

    public function setUserName(?string $user_name): self
    {
        $this->user_name = $user_name;

        return $this;
    }

    public function getPostIndex(): ?int
    {
        return $this->post_index;
    }

    public function setPostIndex(?int $post_index): self
    {
        $this->post_index = $post_index;

        return $this;
    }

    /**
     * @return Collection|Product[]
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->setCart($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->contains($product)) {
            $this->products->removeElement($product);
            // set the owning side to null (unless already changed)
            if ($product->getCart() === $this) {
                $product->setCart(null);
            }
        }

        return $this;
    }
}
