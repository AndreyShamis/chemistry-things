<?php

namespace Werd\ThingsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Element
 *
 * @ORM\Table(name="element")
 * @ORM\Entity(repositoryClass="Werd\ThingsBundle\Repository\ElementRepository")
 */
class Element
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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="atomicNumber", type="integer")
     */
    private $atomicNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=10, unique=true)
     */
    private $alias;

    /**
     * @var float
     *
     * @ORM\Column(name="atomicMass", type="float")
     */
    private $atomicMass;

    /**
     * @var float
     *
     * @ORM\Column(name="boilingPoint", type="float")
     */
    private $boilingPoint;

    /**
     * @var float
     *
     * @ORM\Column(name="meltingPoint", type="float")
     */
    private $meltingPoint;

    /**
     * @var float
     *
     * @ORM\Column(name="vanderwaalsRadius", type="float")
     */
    private $vanderwaalsRadius;

    /**
     * @var float
     *
     * @ORM\Column(name="ionicRadius", type="float")
     */
    private $ionicRadius;

    /**
     * @var float
     *
     * @ORM\Column(name="density", type="float")
     */
    private $density;

    /**
     * @var int
     *
     * @ORM\Column(name="el_group", type="integer")
     */
    private $elGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="el_block", type="string", length=255)
     */
    private $elBlock;

    /**
     * @var int
     *
     * @ORM\Column(name="el_period", type="integer")
     */
    private $elPeriod;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Element
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
     * Set atomicNumber
     *
     * @param integer $atomicNumber
     *
     * @return Element
     */
    public function setAtomicNumber($atomicNumber)
    {
        $this->atomicNumber = $atomicNumber;

        return $this;
    }

    /**
     * Get atomicNumber
     *
     * @return int
     */
    public function getAtomicNumber()
    {
        return $this->atomicNumber;
    }

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return Element
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set atomicMass
     *
     * @param float $atomicMass
     *
     * @return Element
     */
    public function setAtomicMass($atomicMass)
    {
        $this->atomicMass = $atomicMass;

        return $this;
    }

    /**
     * Get atomicMass
     *
     * @return float
     */
    public function getAtomicMass()
    {
        return $this->atomicMass;
    }

    /**
     * Set boilingPoint
     *
     * @param float $boilingPoint
     *
     * @return Element
     */
    public function setBoilingPoint($boilingPoint)
    {
        $this->boilingPoint = $boilingPoint;

        return $this;
    }

    /**
     * Get boilingPoint
     *
     * @return float
     */
    public function getBoilingPoint()
    {
        return $this->boilingPoint;
    }

    /**
     * Set meltingPoint
     *
     * @param float $meltingPoint
     *
     * @return Element
     */
    public function setMeltingPoint($meltingPoint)
    {
        $this->meltingPoint = $meltingPoint;

        return $this;
    }

    /**
     * Get meltingPoint
     *
     * @return float
     */
    public function getMeltingPoint()
    {
        return $this->meltingPoint;
    }

    /**
     * Set vanderwaalsRadius
     *
     * @param float $vanderwaalsRadius
     *
     * @return Element
     */
    public function setVanderwaalsRadius($vanderwaalsRadius)
    {
        $this->vanderwaalsRadius = $vanderwaalsRadius;

        return $this;
    }

    /**
     * Get vanderwaalsRadius
     *
     * @return float
     */
    public function getVanderwaalsRadius()
    {
        return $this->vanderwaalsRadius;
    }

    /**
     * Set ionicRadius
     *
     * @param float $ionicRadius
     *
     * @return Element
     */
    public function setIonicRadius($ionicRadius)
    {
        $this->ionicRadius = $ionicRadius;

        return $this;
    }

    /**
     * Get ionicRadius
     *
     * @return float
     */
    public function getIonicRadius()
    {
        return $this->ionicRadius;
    }

    /**
     * Set density
     *
     * @param float $density
     *
     * @return Element
     */
    public function setDensity($density)
    {
        $this->density = $density;

        return $this;
    }

    /**
     * Get density
     *
     * @return float
     */
    public function getDensity()
    {
        return $this->density;
    }

    /**
     * Set elGroup
     *
     * @param integer $elGroup
     *
     * @return Element
     */
    public function setElGroup($elGroup)
    {
        $this->elGroup = $elGroup;

        return $this;
    }

    /**
     * Get elGroup
     *
     * @return int
     */
    public function getElGroup()
    {
        return $this->elGroup;
    }

    /**
     * Set elBlock
     *
     * @param string $elBlock
     *
     * @return Element
     */
    public function setElBlock($elBlock)
    {
        $this->elBlock = $elBlock;

        return $this;
    }

    /**
     * Get elBlock
     *
     * @return string
     */
    public function getElBlock()
    {
        return $this->elBlock;
    }

    /**
     * Set elPeriod
     *
     * @param integer $elPeriod
     *
     * @return Element
     */
    public function setElPeriod($elPeriod)
    {
        $this->elPeriod = $elPeriod;

        return $this;
    }

    /**
     * Get elPeriod
     *
     * @return int
     */
    public function getElPeriod()
    {
        return $this->elPeriod;
    }
}
