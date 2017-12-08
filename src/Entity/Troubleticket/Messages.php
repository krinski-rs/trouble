<?php

namespace App\Entity\Troubleticket;

/**
 * Messages
 */
class Messages
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $referenceRepository;

    /**
     * @var string
     */
    private $referenceId;

    /**
     * @var integer
     */
    private $viewedBy;

    /**
     * @var \App\Entity\Troubleticket\Reports
     */
    private $report;


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
     * Set message
     *
     * @param string $message
     *
     * @return Messages
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Messages
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Messages
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set referenceRepository
     *
     * @param string $referenceRepository
     *
     * @return Messages
     */
    public function setReferenceRepository($referenceRepository)
    {
        $this->referenceRepository = $referenceRepository;

        return $this;
    }

    /**
     * Get referenceRepository
     *
     * @return string
     */
    public function getReferenceRepository()
    {
        return $this->referenceRepository;
    }

    /**
     * Set referenceId
     *
     * @param string $referenceId
     *
     * @return Messages
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;

        return $this;
    }

    /**
     * Get referenceId
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * Set viewedBy
     *
     * @param integer $viewedBy
     *
     * @return Messages
     */
    public function setViewedBy($viewedBy)
    {
        $this->viewedBy = $viewedBy;

        return $this;
    }

    /**
     * Get viewedBy
     *
     * @return integer
     */
    public function getViewedBy()
    {
        return $this->viewedBy;
    }

    /**
     * Set report
     *
     * @param \App\Entity\Troubleticket\Reports $report
     *
     * @return Messages
     */
    public function setReport(\App\Entity\Troubleticket\Reports $report = null)
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Get report
     *
     * @return \App\Entity\Troubleticket\Reports
     */
    public function getReport()
    {
        return $this->report;
    }
}

