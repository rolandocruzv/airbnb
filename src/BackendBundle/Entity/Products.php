<?php

namespace BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="BackendBundle\Repository\ProductsRepository")
 * @UniqueEntity("name")
 */
class Products
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
     *
    * @Assert\Length(
    *      min = "6",
    *      max = "255",
    * )
    * @Assert\NotBlank()
    * @Assert\NotNull()
    *
    *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, unique=true)
     */
    private $name;
    
    /**
    * @var \DateTime
    * @Assert\NotNull()
    * @ORM\Column(name="date", type="datetime", nullable=false)
    */
    private $regDate;
    
    /**
    * @var boolean
    *
    * @ORM\Column(name="published", type="boolean", nullable=true)
    */
    private $published;
    
    /**
    * @var boolean
    *
    * @ORM\Column(name="approved", type="boolean", nullable=true)
    */
    private $approved;
    
    
    /**
    * @var integer
    *
    * @Assert\Length(
    *      min = "1",
    *      max = "2",
    * )
    * @Assert\NotBlank()
    * @Assert\NotNull()
    *
    * @ORM\Column(name="capacity", type="integer", length=2)
    */
    private $capacity;




    /**
    * @ORM\ManyToOne(targetEntity="User", inversedBy="products", cascade={"persist"})
    * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
    */
    protected $user;
    
    /**
    * @ORM\OneToMany(targetEntity="Favorites", mappedBy="product", cascade={"persist"})
    */
    protected $favorites;

    /**
    * Constructor
    */
    public function __construct()
    {
       $this->regDate = new \DateTime(); 
       $this->favorites = new \Doctrine\Common\Collections\ArrayCollection();
    }



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
     * Set name
     *
     * @param string $name
     * @return Products
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     * @return Products
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
     * Add favorites
     *
     * @param \BackendBundle\Entity\Favorites $favorites
     * @return Products
     */
    public function addFavorite(\BackendBundle\Entity\Favorites $favorites)
    {
        $this->favorites[] = $favorites;

        return $this;
    }

    /**
     * Remove favorites
     *
     * @param \BackendBundle\Entity\Favorites $favorites
     */
    public function removeFavorite(\BackendBundle\Entity\Favorites $favorites)
    {
        $this->favorites->removeElement($favorites);
    }

    /**
     * Get favorites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFavorites()
    {
        return $this->favorites;
    }

    /**
     * Set regDate
     *
     * @param \DateTime $regDate
     * @return Products
     */
    public function setRegDate($regDate)
    {
        $this->regDate = $regDate;

        return $this;
    }

    /**
     * Get regDate
     *
     * @return \DateTime 
     */
    public function getRegDate()
    {
        return $this->regDate;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Products
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set approved
     *
     * @param boolean $approved
     * @return Products
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return boolean 
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     * @return Products
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer 
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
}
