<?php

namespace App\Entity\Troubleticket;

/**
 * Reports
 */
abstract class Reports
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $circuitId;

    /**
     * @var string
     */
    private $designation;

    /**
     * @var \DateTime
     */
    private $initialDate;

    /**
     * @var \DateTime
     */
    private $finalDate;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $stack;

    /**
     * @var string
     */
    private $operatorReportIdentifier;

    /**
     * @var string
     */
    private $responsible;

    /**
     * @var string
     */
    private $requesterName;

    /**
     * @var string
     */
    private $requesterPhone;

    /**
     * @var string
     */
    private $requesterEmail;

    /**
     * @var string
     */
    private $cause;

    /**
     * @var string
     */
    private $failure;

    /**
     * @var string
     */
    private $failureLocal;

    /**
     * @var string
     */
    private $problem;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var string
     */
    private $solution;

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
    private $solvedCounter;

    /**
     * @var integer
     */
    private $tmrCounter;

    /**
     * @var integer
     */
    private $nocCounter;

    /**
     * @var integer
     */
    private $sn1Counter;

    /**
     * @var integer
     */
    private $sn2Counter;

    /**
     * @var integer
     */
    private $cocCounter;

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
    private $sn1;

    /**
     * @var integer
     */
    private $sn2;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $closeReason;

    /**
     * @var integer
     */
    private $symptom;

    /**
     * @var string
     */
    private $stretch;

    /**
     * @var integer
     */
    private $sn3;

    /**
     * @var integer
     */
    private $sn3Counter;

    /**
     * @var integer
     */
    private $voz;

    /**
     * @var integer
     */
    private $vozCounter;

    /**
     * @var \DateTime
     */
    private $lastUpdate;

    /**
     * @var string
     */
    private $issue = '0';

    /**
     * @var boolean
     */
    private $createdByClient;

    /**
     * @var integer
     */
    private $serviceChannel;

    /**
     * @var integer
     */
    private $closedSymptom;

    /**
     * @var string
     */
    private $structure;

    /**
     * @var string
     */
    private $element;

    /**
     * @var integer
     */
    private $popId;

    /**
     * @var integer
     */
    private $providerId;

    /**
     * @var string
     */
    private $incident;

    /**
     * @var integer
     */
    private $createdBySystem;

    /**
     * @var integer
     */
    private $mantainerCounter;

    /**
     * @var \DateTime
     */
    private $firstCombat;

    /**
     * @var \DateTime
     */
    private $reopenDate;

    /**
     * @var string
     */
    private $attendanceProtocol;

    /**
     * @var integer
     */
    private $openingClassification;

    /**
     * @var integer
     */
    private $serviceType;

    /**
     * @var integer
     */
    private $monitoringCounter;

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
    private $biCounter;

    /**
     * @var \App\Entity\Troubleticket\Reports
     */
    private $parent;


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
     * Set circuitId
     *
     * @param integer $circuitId
     *
     * @return Reports
     */
    public function setCircuitId($circuitId)
    {
        $this->circuitId = $circuitId;

        return $this;
    }

    /**
     * Get circuitId
     *
     * @return integer
     */
    public function getCircuitId()
    {
        return $this->circuitId;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Reports
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set initialDate
     *
     * @param \DateTime $initialDate
     *
     * @return Reports
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
     * @return Reports
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
     * Set description
     *
     * @param string $description
     *
     * @return Reports
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
     * Set stack
     *
     * @param integer $stack
     *
     * @return Reports
     */
    public function setStack($stack)
    {
        $this->stack = $stack;

        return $this;
    }

    /**
     * Get stack
     *
     * @return integer
     */
    public function getStack()
    {
        return $this->stack;
    }

    /**
     * Set operatorReportIdentifier
     *
     * @param string $operatorReportIdentifier
     *
     * @return Reports
     */
    public function setOperatorReportIdentifier($operatorReportIdentifier)
    {
        $this->operatorReportIdentifier = $operatorReportIdentifier;

        return $this;
    }

    /**
     * Get operatorReportIdentifier
     *
     * @return string
     */
    public function getOperatorReportIdentifier()
    {
        return $this->operatorReportIdentifier;
    }

    /**
     * Set responsible
     *
     * @param string $responsible
     *
     * @return Reports
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;

        return $this;
    }

    /**
     * Get responsible
     *
     * @return string
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * Set requesterName
     *
     * @param string $requesterName
     *
     * @return Reports
     */
    public function setRequesterName($requesterName)
    {
        $this->requesterName = $requesterName;

        return $this;
    }

    /**
     * Get requesterName
     *
     * @return string
     */
    public function getRequesterName()
    {
        return $this->requesterName;
    }

    /**
     * Set requesterPhone
     *
     * @param string $requesterPhone
     *
     * @return Reports
     */
    public function setRequesterPhone($requesterPhone)
    {
        $this->requesterPhone = $requesterPhone;

        return $this;
    }

    /**
     * Get requesterPhone
     *
     * @return string
     */
    public function getRequesterPhone()
    {
        return $this->requesterPhone;
    }

    /**
     * Set requesterEmail
     *
     * @param string $requesterEmail
     *
     * @return Reports
     */
    public function setRequesterEmail($requesterEmail)
    {
        $this->requesterEmail = $requesterEmail;

        return $this;
    }

    /**
     * Get requesterEmail
     *
     * @return string
     */
    public function getRequesterEmail()
    {
        return $this->requesterEmail;
    }

    /**
     * Set cause
     *
     * @param string $cause
     *
     * @return Reports
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
     * Set failure
     *
     * @param string $failure
     *
     * @return Reports
     */
    public function setFailure($failure)
    {
        $this->failure = $failure;

        return $this;
    }

    /**
     * Get failure
     *
     * @return string
     */
    public function getFailure()
    {
        return $this->failure;
    }

    /**
     * Set failureLocal
     *
     * @param string $failureLocal
     *
     * @return Reports
     */
    public function setFailureLocal($failureLocal)
    {
        $this->failureLocal = $failureLocal;

        return $this;
    }

    /**
     * Get failureLocal
     *
     * @return string
     */
    public function getFailureLocal()
    {
        return $this->failureLocal;
    }

    /**
     * Set problem
     *
     * @param string $problem
     *
     * @return Reports
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
     * Set status
     *
     * @param integer $status
     *
     * @return Reports
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
     * Set solution
     *
     * @param string $solution
     *
     * @return Reports
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
     * Set tmeCounter
     *
     * @param integer $tmeCounter
     *
     * @return Reports
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
     * @return Reports
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
     * Set solvedCounter
     *
     * @param integer $solvedCounter
     *
     * @return Reports
     */
    public function setSolvedCounter($solvedCounter)
    {
        $this->solvedCounter = $solvedCounter;

        return $this;
    }

    /**
     * Get solvedCounter
     *
     * @return integer
     */
    public function getSolvedCounter()
    {
        return $this->solvedCounter;
    }

    /**
     * Set tmrCounter
     *
     * @param integer $tmrCounter
     *
     * @return Reports
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
     * Set nocCounter
     *
     * @param integer $nocCounter
     *
     * @return Reports
     */
    public function setNocCounter($nocCounter)
    {
        $this->nocCounter = $nocCounter;

        return $this;
    }

    /**
     * Get nocCounter
     *
     * @return integer
     */
    public function getNocCounter()
    {
        return $this->nocCounter;
    }

    /**
     * Set sn1Counter
     *
     * @param integer $sn1Counter
     *
     * @return Reports
     */
    public function setSn1Counter($sn1Counter)
    {
        $this->sn1Counter = $sn1Counter;

        return $this;
    }

    /**
     * Get sn1Counter
     *
     * @return integer
     */
    public function getSn1Counter()
    {
        return $this->sn1Counter;
    }

    /**
     * Set sn2Counter
     *
     * @param integer $sn2Counter
     *
     * @return Reports
     */
    public function setSn2Counter($sn2Counter)
    {
        $this->sn2Counter = $sn2Counter;

        return $this;
    }

    /**
     * Get sn2Counter
     *
     * @return integer
     */
    public function getSn2Counter()
    {
        return $this->sn2Counter;
    }

    /**
     * Set cocCounter
     *
     * @param integer $cocCounter
     *
     * @return Reports
     */
    public function setCocCounter($cocCounter)
    {
        $this->cocCounter = $cocCounter;

        return $this;
    }

    /**
     * Get cocCounter
     *
     * @return integer
     */
    public function getCocCounter()
    {
        return $this->cocCounter;
    }

    /**
     * Set displacementCounter
     *
     * @param integer $displacementCounter
     *
     * @return Reports
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
     * @return Reports
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
     * @return Reports
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
     * @return Reports
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
     * Set sn1
     *
     * @param integer $sn1
     *
     * @return Reports
     */
    public function setSn1($sn1)
    {
        $this->sn1 = $sn1;

        return $this;
    }

    /**
     * Get sn1
     *
     * @return integer
     */
    public function getSn1()
    {
        return $this->sn1;
    }

    /**
     * Set sn2
     *
     * @param integer $sn2
     *
     * @return Reports
     */
    public function setSn2($sn2)
    {
        $this->sn2 = $sn2;

        return $this;
    }

    /**
     * Get sn2
     *
     * @return integer
     */
    public function getSn2()
    {
        return $this->sn2;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Reports
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
     * Set closeReason
     *
     * @param string $closeReason
     *
     * @return Reports
     */
    public function setCloseReason($closeReason)
    {
        $this->closeReason = $closeReason;

        return $this;
    }

    /**
     * Get closeReason
     *
     * @return string
     */
    public function getCloseReason()
    {
        return $this->closeReason;
    }

    /**
     * Set symptom
     *
     * @param integer $symptom
     *
     * @return Reports
     */
    public function setSymptom($symptom)
    {
        $this->symptom = $symptom;

        return $this;
    }

    /**
     * Get symptom
     *
     * @return integer
     */
    public function getSymptom()
    {
        return $this->symptom;
    }

    /**
     * Set stretch
     *
     * @param string $stretch
     *
     * @return Reports
     */
    public function setStretch($stretch)
    {
        $this->stretch = $stretch;

        return $this;
    }

    /**
     * Get stretch
     *
     * @return string
     */
    public function getStretch()
    {
        return $this->stretch;
    }

    /**
     * Set sn3
     *
     * @param integer $sn3
     *
     * @return Reports
     */
    public function setSn3($sn3)
    {
        $this->sn3 = $sn3;

        return $this;
    }

    /**
     * Get sn3
     *
     * @return integer
     */
    public function getSn3()
    {
        return $this->sn3;
    }

    /**
     * Set sn3Counter
     *
     * @param integer $sn3Counter
     *
     * @return Reports
     */
    public function setSn3Counter($sn3Counter)
    {
        $this->sn3Counter = $sn3Counter;

        return $this;
    }

    /**
     * Get sn3Counter
     *
     * @return integer
     */
    public function getSn3Counter()
    {
        return $this->sn3Counter;
    }

    /**
     * Set voz
     *
     * @param integer $voz
     *
     * @return Reports
     */
    public function setVoz($voz)
    {
        $this->voz = $voz;

        return $this;
    }

    /**
     * Get voz
     *
     * @return integer
     */
    public function getVoz()
    {
        return $this->voz;
    }

    /**
     * Set vozCounter
     *
     * @param integer $vozCounter
     *
     * @return Reports
     */
    public function setVozCounter($vozCounter)
    {
        $this->vozCounter = $vozCounter;

        return $this;
    }

    /**
     * Get vozCounter
     *
     * @return integer
     */
    public function getVozCounter()
    {
        return $this->vozCounter;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     *
     * @return Reports
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set issue
     *
     * @param string $issue
     *
     * @return Reports
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Get issue
     *
     * @return string
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * Set createdByClient
     *
     * @param boolean $createdByClient
     *
     * @return Reports
     */
    public function setCreatedByClient($createdByClient)
    {
        $this->createdByClient = $createdByClient;

        return $this;
    }

    /**
     * Get createdByClient
     *
     * @return boolean
     */
    public function getCreatedByClient()
    {
        return $this->createdByClient;
    }

    /**
     * Set serviceChannel
     *
     * @param integer $serviceChannel
     *
     * @return Reports
     */
    public function setServiceChannel($serviceChannel)
    {
        $this->serviceChannel = $serviceChannel;

        return $this;
    }

    /**
     * Get serviceChannel
     *
     * @return integer
     */
    public function getServiceChannel()
    {
        return $this->serviceChannel;
    }

    /**
     * Set closedSymptom
     *
     * @param integer $closedSymptom
     *
     * @return Reports
     */
    public function setClosedSymptom($closedSymptom)
    {
        $this->closedSymptom = $closedSymptom;

        return $this;
    }

    /**
     * Get closedSymptom
     *
     * @return integer
     */
    public function getClosedSymptom()
    {
        return $this->closedSymptom;
    }

    /**
     * Set structure
     *
     * @param string $structure
     *
     * @return Reports
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;

        return $this;
    }

    /**
     * Get structure
     *
     * @return string
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * Set element
     *
     * @param string $element
     *
     * @return Reports
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
     * Set popId
     *
     * @param integer $popId
     *
     * @return Reports
     */
    public function setPopId($popId)
    {
        $this->popId = $popId;

        return $this;
    }

    /**
     * Get popId
     *
     * @return integer
     */
    public function getPopId()
    {
        return $this->popId;
    }

    /**
     * Set providerId
     *
     * @param integer $providerId
     *
     * @return Reports
     */
    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;

        return $this;
    }

    /**
     * Get providerId
     *
     * @return integer
     */
    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * Set incident
     *
     * @param string $incident
     *
     * @return Reports
     */
    public function setIncident($incident)
    {
        $this->incident = $incident;

        return $this;
    }

    /**
     * Get incident
     *
     * @return string
     */
    public function getIncident()
    {
        return $this->incident;
    }

    /**
     * Set createdBySystem
     *
     * @param integer $createdBySystem
     *
     * @return Reports
     */
    public function setCreatedBySystem($createdBySystem)
    {
        $this->createdBySystem = $createdBySystem;

        return $this;
    }

    /**
     * Get createdBySystem
     *
     * @return integer
     */
    public function getCreatedBySystem()
    {
        return $this->createdBySystem;
    }

    /**
     * Set mantainerCounter
     *
     * @param integer $mantainerCounter
     *
     * @return Reports
     */
    public function setMantainerCounter($mantainerCounter)
    {
        $this->mantainerCounter = $mantainerCounter;

        return $this;
    }

    /**
     * Get mantainerCounter
     *
     * @return integer
     */
    public function getMantainerCounter()
    {
        return $this->mantainerCounter;
    }

    /**
     * Set firstCombat
     *
     * @param \DateTime $firstCombat
     *
     * @return Reports
     */
    public function setFirstCombat($firstCombat)
    {
        $this->firstCombat = $firstCombat;

        return $this;
    }

    /**
     * Get firstCombat
     *
     * @return \DateTime
     */
    public function getFirstCombat()
    {
        return $this->firstCombat;
    }

    /**
     * Set reopenDate
     *
     * @param \DateTime $reopenDate
     *
     * @return Reports
     */
    public function setReopenDate($reopenDate)
    {
        $this->reopenDate = $reopenDate;

        return $this;
    }

    /**
     * Get reopenDate
     *
     * @return \DateTime
     */
    public function getReopenDate()
    {
        return $this->reopenDate;
    }

    /**
     * Set attendanceProtocol
     *
     * @param string $attendanceProtocol
     *
     * @return Reports
     */
    public function setAttendanceProtocol($attendanceProtocol)
    {
        $this->attendanceProtocol = $attendanceProtocol;

        return $this;
    }

    /**
     * Get attendanceProtocol
     *
     * @return string
     */
    public function getAttendanceProtocol()
    {
        return $this->attendanceProtocol;
    }

    /**
     * Set openingClassification
     *
     * @param integer $openingClassification
     *
     * @return Reports
     */
    public function setOpeningClassification($openingClassification)
    {
        $this->openingClassification = $openingClassification;

        return $this;
    }

    /**
     * Get openingClassification
     *
     * @return integer
     */
    public function getOpeningClassification()
    {
        return $this->openingClassification;
    }

    /**
     * Set serviceType
     *
     * @param integer $serviceType
     *
     * @return Reports
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;

        return $this;
    }

    /**
     * Get serviceType
     *
     * @return integer
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Set monitoringCounter
     *
     * @param integer $monitoringCounter
     *
     * @return Reports
     */
    public function setMonitoringCounter($monitoringCounter)
    {
        $this->monitoringCounter = $monitoringCounter;

        return $this;
    }

    /**
     * Get monitoringCounter
     *
     * @return integer
     */
    public function getMonitoringCounter()
    {
        return $this->monitoringCounter;
    }

    /**
     * Set openingUser
     *
     * @param integer $openingUser
     *
     * @return Reports
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
     * @return Reports
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
     * Set biCounter
     *
     * @param integer $biCounter
     *
     * @return Reports
     */
    public function setBiCounter($biCounter)
    {
        $this->biCounter = $biCounter;

        return $this;
    }

    /**
     * Get biCounter
     *
     * @return integer
     */
    public function getBiCounter()
    {
        return $this->biCounter;
    }

    /**
     * Set parent
     *
     * @param \App\Entity\Troubleticket\Reports $parent
     *
     * @return Reports
     */
    public function setParent(\App\Entity\Troubleticket\Reports $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \App\Entity\Troubleticket\Reports
     */
    public function getParent()
    {
        return $this->parent;
    }
}

