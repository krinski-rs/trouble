<?php

namespace App\Entity\Toa;

/**
 * CreateActivity
 */
class CreateActivity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $activityId;

    /**
     * @var integer
     */
    private $originId;

    /**
     * @var request_type
     */
    private $origin;

    /**
     * @var string
     */
    private $jsonActivity;

    /**
     * @var string
     */
    private $jsonRequest;

    /**
     * @var integer
     */
    private $creatorUser;

    /**
     * @var \DateTime
     */
    private $dateCreate = 'now()';

    /**
     * @var \DateTime
     */
    private $reportDate;


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
     * Set activityId
     *
     * @param integer $activityId
     *
     * @return CreateActivity
     */
    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;

        return $this;
    }

    /**
     * Get activityId
     *
     * @return integer
     */
    public function getActivityId()
    {
        return $this->activityId;
    }

    /**
     * Set originId
     *
     * @param integer $originId
     *
     * @return CreateActivity
     */
    public function setOriginId($originId)
    {
        $this->originId = $originId;

        return $this;
    }

    /**
     * Get originId
     *
     * @return integer
     */
    public function getOriginId()
    {
        return $this->originId;
    }

    /**
     * Set origin
     *
     * @param request_type $origin
     *
     * @return CreateActivity
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return request_type
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set jsonActivity
     *
     * @param string $jsonActivity
     *
     * @return CreateActivity
     */
    public function setJsonActivity($jsonActivity)
    {
        $this->jsonActivity = $jsonActivity;

        return $this;
    }

    /**
     * Get jsonActivity
     *
     * @return string
     */
    public function getJsonActivity()
    {
        return $this->jsonActivity;
    }

    /**
     * Set jsonRequest
     *
     * @param string $jsonRequest
     *
     * @return CreateActivity
     */
    public function setJsonRequest($jsonRequest)
    {
        $this->jsonRequest = $jsonRequest;

        return $this;
    }

    /**
     * Get jsonRequest
     *
     * @return string
     */
    public function getJsonRequest()
    {
        return $this->jsonRequest;
    }

    /**
     * Set creatorUser
     *
     * @param integer $creatorUser
     *
     * @return CreateActivity
     */
    public function setCreatorUser($creatorUser)
    {
        $this->creatorUser = $creatorUser;

        return $this;
    }

    /**
     * Get creatorUser
     *
     * @return integer
     */
    public function getCreatorUser()
    {
        return $this->creatorUser;
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     *
     * @return CreateActivity
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set reportDate
     *
     * @param \DateTime $reportDate
     *
     * @return CreateActivity
     */
    public function setReportDate($reportDate)
    {
        $this->reportDate = $reportDate;

        return $this;
    }

    /**
     * Get reportDate
     *
     * @return \DateTime
     */
    public function getReportDate()
    {
        return $this->reportDate;
    }
}

