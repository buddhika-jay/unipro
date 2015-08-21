<?php

namespace UniproBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Job
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UniproBundle\Entity\JobRepository")
 */
class Job
{
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
     * @ORM\Column(name="category_id", type="integer")
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="budget", type="integer")
     */
    private $budget;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="job_date", type="datetime")
     */
    private $jobDate;


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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return Job
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Job
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
     * Set budget
     *
     * @param integer $budget
     * @return Job
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return integer 
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set jobDate
     *
     * @param \DateTime $jobDate
     * @return Job
     */
    public function setJobDate($jobDate)
    {
        $this->jobDate = $jobDate;

        return $this;
    }

    /**
     * Get jobDate
     *
     * @return \DateTime 
     */
    public function getJobDate()
    {
        return $this->jobDate;
    }
}
