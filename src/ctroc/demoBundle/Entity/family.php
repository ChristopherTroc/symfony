<?php

namespace ctroc\demoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * family
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ctroc\demoBundle\Entity\familyRepository")

 */
class family
{
  
  /**
   * @ORM\OneToMany(targetEntity="medical_info", mappedBy="family")
  */
  protected $family;
  
  public function __construct(){
    $this->family = new ArrayCollection();
  }
  

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=200)
     */
    private $sex;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=200)
     */
    private $color;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="born_date", type="datetime")
     */
    private $bornDate;


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
     * @return family
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
     * Set sex
     *
     * @param string $sex
     * @return family
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return family
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set bornDate
     *
     * @param \DateTime $bornDate
     * @return family
     */
    public function setBornDate($bornDate)
    {
        $this->bornDate = $bornDate;

        return $this;
    }

    /**
     * Get bornDate
     *
     * @return \DateTime 
     */
    public function getBornDate()
    {
        return $this->bornDate;
    }


}
