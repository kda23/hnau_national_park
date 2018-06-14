<?php

namespace App\Entity;

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
    private $cart_id_products;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cart_price;

    /**
     * @ORM\Column(type="integer")
     */
    private $cart_count;

    /**
     * @ORM\Column(type="datetime")
     */
    private $cart_datatime;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $user_name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $adress;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $post_index;

    public function getId()
    {
        return $this->id;
    }

    public function getCartIdProducts(): ?int
    {
        return $this->cart_id_products;
    }

    public function setCartIdProducts(int $cart_id_products): self
    {
        $this->cart_id_products = $cart_id_products;

        return $this;
    }

    public function getCartPrice(): ?int
    {
        return $this->cart_price;
    }

    public function setCartPrice(?int $cart_price): self
    {
        $this->cart_price = $cart_price;

        return $this;
    }

    public function getCartCount(): ?int
    {
        return $this->cart_count;
    }

    public function setCartCount(int $cart_count): self
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

    public function setUserName(string $user_name): self
    {
        $this->user_name = $user_name;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(?string $adress): self
    {
        $this->adress = $adress;

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
}
