<?php

namespace App\Entity\Troubleticket;

/**
 * CircuitsCache
 */
class CircuitsCache
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $designation;

    /**
     * @var string
     */
    private $finalClient;

    /**
     * @var string
     */
    private $ufPontaA;

    /**
     * @var integer
     */
    private $clientId;

    /**
     * @var string
     */
    private $sla;

    /**
     * @var string
     */
    private $city;


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
     * Set designation
     *
     * @param string $designation
     *
     * @return CircuitsCache
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
     * Set finalClient
     *
     * @param string $finalClient
     *
     * @return CircuitsCache
     */
    public function setFinalClient($finalClient)
    {
        $this->finalClient = $finalClient;

        return $this;
    }

    /**
     * Get finalClient
     *
     * @return string
     */
    public function getFinalClient()
    {
        return $this->finalClient;
    }

    /**
     * Set ufPontaA
     *
     * @param string $ufPontaA
     *
     * @return CircuitsCache
     */
    public function setUfPontaA($ufPontaA)
    {
        $this->ufPontaA = $ufPontaA;

        return $this;
    }

    /**
     * Get ufPontaA
     *
     * @return string
     */
    public function getUfPontaA()
    {
        return $this->ufPontaA;
    }

    /**
     * Set clientId
     *
     * @param integer $clientId
     *
     * @return CircuitsCache
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return integer
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set sla
     *
     * @param string $sla
     *
     * @return CircuitsCache
     */
    public function setSla($sla)
    {
        $this->sla = $sla;

        return $this;
    }

    /**
     * Get sla
     *
     * @return string
     */
    public function getSla()
    {
        return $this->sla;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return CircuitsCache
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
}

