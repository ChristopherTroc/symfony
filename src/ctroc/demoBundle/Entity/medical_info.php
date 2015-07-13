<?php

namespace ctroc\demoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * medical_info
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ctroc\demoBundle\Entity\medical_infoRepository")
 */

class medical_info
{

  /**
   * @ORM\ManyToOne(targetEntity="family", inversedBy="medical_info")
   * @ORM\JoinColumn(name="id_family", referencedColumnName="id")
  */
    protected $medical_info;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_family", type="integer")
     */
    private $idFamily;

    /**
     * @var string
     *
     * @ORM\Column(name="info", type="text")
     */
    private $info;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateincome", type="datetime")
     */
    private $dateincome;


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
     * Set idFamily
     *
     * @param integer $idFamily
     * @return medical_info
     */
    public function setIdFamily($idFamily)
    {
        $this->idFamily = $idFamily;

        return $this;
    }

    /**
     * Get idFamily
     *
     * @return integer 
     */
    public function getIdFamily()
    {
        return $this->idFamily;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return medical_info
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set dateincome
     *
     * @param \DateTime $dateincome
     * @return medical_info
     */
    public function setDateincome($dateincome)
    {
        $this->dateincome = $dateincome;

        return $this;
    }

    /**
     * Get dateincome
     *
     * @return \DateTime 
     */
    public function getDateincome()
    {
        return $this->dateincome;
    }
}
