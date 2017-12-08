<?php

namespace App\Entity\Troubleticket;

/**
 * Subcases
 */
abstract class Subcases
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $team;

    /**
     * @var \DateTime
     */
    private $forecast;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $listOfMaterials;

    /**
     * @var integer
     */
    private $idActivity;

    /**
     * @var string
     */
    private $activityType;

    /**
     * @var integer
     */
    private $provider;

    /**
     * @var integer
     */
    private $maintainer;

    /**
     * @var string
     */
    private $maintainerContact;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $ticket;

    /**
     * @var string
     */
    private $element;

    /**
     * @var string
     */
    private $cause;

    /**
     * @var string
     */
    private $problem;

    /**
     * @var string
     */
    private $solution;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var integer
     */
    private $openingUser;

    /**
     * @var integer
     */
    private $closingUser;

    /**
     * @var integer
     */
    private $tmeCounter;

    /**
     * @var integer
     */
    private $pausedCounter;

    /**
     * @var integer
     */
    private $thirdTeamCounter;

    /**
     * @var integer
     */
    private $displacementCounter;

    /**
     * @var integer
     */
    private $infraCounter;

    /**
     * @var integer
     */
    private $fieldCounter;

    /**
     * @var integer
     */
    private $clientCounter;

    /**
     * @var integer
     */
    private $tmrCounter;

    /**
     * @var \DateTime
     */
    private $initialDate;

    /**
     * @var \DateTime
     */
    private $finalDate;

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
     * Set team
     *
     * @param string $team
     *
     * @return Subcases
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set forecast
     *
     * @param \DateTime $forecast
     *
     * @return Subcases
     */
    public function setForecast($forecast)
    {
        $this->forecast = $forecast;

        return $this;
    }

    /**
     * Get forecast
     *
     * @return \DateTime
     */
    public function getForecast()
    {
        return $this->forecast;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Subcases
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Subcases
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set listOfMaterials
     *
     * @param string $listOfMaterials
     *
     * @return Subcases
     */
    public function setListOfMaterials($listOfMaterials)
    {
        $this->listOfMaterials = $listOfMaterials;

        return $this;
    }

    /**
     * Get listOfMaterials
     *
     * @return string
     */
    public function getListOfMaterials()
    {
        return $this->listOfMaterials;
    }

    /**
     * Set idActivity
     *
     * @param integer $idActivity
     *
     * @return Subcases
     */
    public function setIdActivity($idActivity)
    {
        $this->idActivity = $idActivity;

        return $this;
    }

    /**
     * Get idActivity
     *
     * @return integer
     */
    public function getIdActivity()
    {
        return $this->idActivity;
    }

    /**
     * Set activityType
     *
     * @param string $activityType
     *
     * @return Subcases
     */
    public function setActivityType($activityType)
    {
        $this->activityType = $activityType;

        return $this;
    }

    /**
     * Get activityType
     *
     * @return string
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * Set provider
     *
     * @param integer $provider
     *
     * @return Subcases
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return integer
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set maintainer
     *
     * @param integer $maintainer
     *
     * @return Subcases
     */
    public function setMaintainer($maintainer)
    {
        $this->maintainer = $maintainer;

        return $this;
    }

    /**
     * Get maintainer
     *
     * @return integer
     */
    public function getMaintainer()
    {
        return $this->maintainer;
    }

    /**
     * Set maintainerContact
     *
     * @param string $maintainerContact
     *
     * @return Subcases
     */
    public function setMaintainerContact($maintainerContact)
    {
        $this->maintainerContact = $maintainerContact;

        return $this;
    }

    /**
     * Get maintainerContact
     *
     * @return string
     */
    public function getMaintainerContact()
    {
        return $this->maintainerContact;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Subcases
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Subcases
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set ticket
     *
     * @param string $ticket
     *
     * @return Subcases
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return string
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set element
     *
     * @param string $element
     *
     * @return Subcases
     */
    public function setElement($element)
    {
        $this->element = $element;

        return $this;
    }

    /**
     * Get element
     *
     * @return string
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Set cause
     *
     * @param string $cause
     *
     * @return Subcases
     */
    public function setCause($cause)
    {
        $this->cause = $cause;

        return $this;
    }

    /**
     * Get cause
     *
     * @return string
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Set problem
     *
     * @param string $problem
     *
     * @return Subcases
     */
    public function setProblem($problem)
    {
        $this->problem = $problem;

        return $this;
    }

    /**
     * Get problem
     *
     * @return string
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * Set solution
     *
     * @param string $solution
     *
     * @return Subcases
     */
    public function setSolution($solution)
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get solution
     *
     * @return string
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Subcases
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set openingUser
     *
     * @param integer $openingUser
     *
     * @return Subcases
     */
    public function setOpeningUser($openingUser)
    {
        $this->openingUser = $openingUser;

        return $this;
    }

    /**
     * Get openingUser
     *
     * @return integer
     */
    public function getOpeningUser()
    {
        return $this->openingUser;
    }

    /**
     * Set closingUser
     *
     * @param integer $closingUser
     *
     * @return Subcases
     */
    public function setClosingUser($closingUser)
    {
        $this->closingUser = $closingUser;

        return $this;
    }

    /**
     * Get closingUser
     *
     * @return integer
     */
    public function getClosingUser()
    {
        return $this->closingUser;
    }

    /**
     * Set tmeCounter
     *
     * @param integer $tmeCounter
     *
     * @return Subcases
     */
    public function setTmeCounter($tmeCounter)
    {
        $this->tmeCounter = $tmeCounter;

        return $this;
    }

    /**
     * Get tmeCounter
     *
     * @return integer
     */
    public function getTmeCounter()
    {
        return $this->tmeCounter;
    }

    /**
     * Set pausedCounter
     *
     * @param integer $pausedCounter
     *
     * @return Subcases
     */
    public function setPausedCounter($pausedCounter)
    {
        $this->pausedCounter = $pausedCounter;

        return $this;
    }

    /**
     * Get pausedCounter
     *
     * @return integer
     */
    public function getPausedCounter()
    {
        return $this->pausedCounter;
    }

    /**
     * Set thirdTeamCounter
     *
     * @param integer $thirdTeamCounter
     *
     * @return Subcases
     */
    public function setThirdTeamCounter($thirdTeamCounter)
    {
        $this->thirdTeamCounter = $thirdTeamCounter;

        return $this;
    }

    /**
     * Get thirdTeamCounter
     *
     * @return integer
     */
    public function getThirdTeamCounter()
    {
        return $this->thirdTeamCounter;
    }

    /**
     * Set displacementCounter
     *
     * @param integer $displacementCounter
     *
     * @return Subcases
     */
    public function setDisplacementCounter($displacementCounter)
    {
        $this->displacementCounter = $displacementCounter;

        return $this;
    }

    /**
     * Get displacementCounter
     *
     * @return integer
     */
    public function getDisplacementCounter()
    {
        return $this->displacementCounter;
    }

    /**
     * Set infraCounter
     *
     * @param integer $infraCounter
     *
     * @return Subcases
     */
    public function setInfraCounter($infraCounter)
    {
        $this->infraCounter = $infraCounter;

        return $this;
    }

    /**
     * Get infraCounter
     *
     * @return integer
     */
    public function getInfraCounter()
    {
        return $this->infraCounter;
    }

    /**
     * Set fieldCounter
     *
     * @param integer $fieldCounter
     *
     * @return Subcases
     */
    public function setFieldCounter($fieldCounter)
    {
        $this->fieldCounter = $fieldCounter;

        return $this;
    }

    /**
     * Get fieldCounter
     *
     * @return integer
     */
    public function getFieldCounter()
    {
        return $this->fieldCounter;
    }

    /**
     * Set clientCounter
     *
     * @param integer $clientCounter
     *
     * @return Subcases
     */
    public function setClientCounter($clientCounter)
    {
        $this->clientCounter = $clientCounter;

        return $this;
    }

    /**
     * Get clientCounter
     *
     * @return integer
     */
    public function getClientCounter()
    {
        return $this->clientCounter;
    }

    /**
     * Set tmrCounter
     *
     * @param integer $tmrCounter
     *
     * @return Subcases
     */
    public function setTmrCounter($tmrCounter)
    {
        $this->tmrCounter = $tmrCounter;

        return $this;
    }

    /**
     * Get tmrCounter
     *
     * @return integer
     */
    public function getTmrCounter()
    {
        return $this->tmrCounter;
    }

    /**
     * Set initialDate
     *
     * @param \DateTime $initialDate
     *
     * @return Subcases
     */
    public function setInitialDate($initialDate)
    {
        $this->initialDate = $initialDate;

        return $this;
    }

    /**
     * Get initialDate
     *
     * @return \DateTime
     */
    public function getInitialDate()
    {
        return $this->initialDate;
    }

    /**
     * Set finalDate
     *
     * @param \DateTime $finalDate
     *
     * @return Subcases
     */
    public function setFinalDate($finalDate)
    {
        $this->finalDate = $finalDate;

        return $this;
    }

    /**
     * Get finalDate
     *
     * @return \DateTime
     */
    public function getFinalDate()
    {
        return $this->finalDate;
    }

    /**
     * Set report
     *
     * @param \App\Entity\Troubleticket\Reports $report
     *
     * @return Subcases
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

