<?php

namespace Nixilla\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nixilla\JobeetBundle\Entity\JobeetCategory
 */
class JobeetCategory
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;


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
    /**
     * @var Nixilla\JobeetBundle\Entity\JobeetJob
     */
    private $JobeetJobs;

    public function __construct()
    {
        $this->JobeetJobs = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add JobeetJobs
     *
     * @param Nixilla\JobeetBundle\Entity\JobeetJob $jobeetJobs
     */
    public function addJobeetJob(\Nixilla\JobeetBundle\Entity\JobeetJob $jobeetJobs)
    {
        $this->JobeetJobs[] = $jobeetJobs;
    }

    /**
     * Get JobeetJobs
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getJobeetJobs()
    {
        return $this->JobeetJobs;
    }
}