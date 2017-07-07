<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favorites
 *
 * @ORM\Table(name="favorites")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\FavoritesRepository")
 */
class Favorites
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @var string
    * @ORM\Column(name="description", type="text", nullable=true)
    */
    private $description;
    
    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="favorites", cascade={"persist"})
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    protected $user;
    
    
    /**
    * @ORM\ManyToOne(targetEntity="Products", inversedBy="favorites", cascade={"persist"})
    * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
    */
    protected $products;


    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Favorites
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     * @return Favorites
     */
    public function setUser(\BackendBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BackendBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set products
     *
     * @param \BackendBundle\Entity\Products $products
     * @return Favorites
     */
    public function setProducts(\BackendBundle\Entity\Products $products = null)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return \BackendBundle\Entity\Products 
     */
    public function getProducts()
    {
        return $this->products;
    }
}
