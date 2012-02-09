<?php

namespace Nixilla\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nixilla\JobeetBundle\Entity\JobeetCategory
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Nixilla\JobeetBundle\Entity\JobeetCategoryRepository")
 */
class JobeetCategory
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="JobeetJob", mappedBy="category")
     */
    protected $jobs;

    public function __construct()
    {
      $this->jobs = new ArrayCollection();
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
     */
    public function setName($name)
    {
        $this->name = $name;
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
}
