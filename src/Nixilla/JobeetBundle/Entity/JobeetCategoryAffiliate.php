<?php

namespace Nixilla\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nixilla\JobeetBundle\Entity\JobeetCategoryAffiliate
 */
class JobeetCategoryAffiliate
{
    /**
     * @var integer $id
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}