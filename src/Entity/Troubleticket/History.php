<?php

namespace App\Entity\Troubleticket;

/**
 * History
 */
class History
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var string
     */
    private $supportLevel;

    /**
     * @var integer
     */
    private $reportStatus;

    /**
     * @var string
     */
    private $usuario;

    /**
     * @var \App\Entity\Troubleticket\Reports
     */
    private $report;

    /**
     * @var \App\Entity\Troubleticket\Subcases
     */
    private $subcase;


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
     * Set comment
     *
     * @param string $comment
     *
     * @return History
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return History
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set reason
     *
     * @param string $reason
     *
     * @return History
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set supportLevel
     *
     * @param string $supportLevel
     *
     * @return History
     */
    public function setSupportLevel($supportLevel)
    {
        $this->supportLevel = $supportLevel;

        return $this;
    }

    /**
     * Get supportLevel
     *
     * @return string
     */
    public function getSupportLevel()
    {
        return $this->supportLevel;
    }

    /**
     * Set reportStatus
     *
     * @param integer $reportStatus
     *
     * @return History
     */
    public function setReportStatus($reportStatus)
    {
        $this->reportStatus = $reportStatus;

        return $this;
    }

    /**
     * Get reportStatus
     *
     * @return integer
     */
    public function getReportStatus()
    {
        return $this->reportStatus;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return History
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set report
     *
     * @param \App\Entity\Troubleticket\Reports $report
     *
     * @return History
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

    /**
     * Set subcase
     *
     * @param \App\Entity\Troubleticket\Subcases $subcase
     *
     * @return History
     */
    public function setSubcase(\App\Entity\Troubleticket\Subcases $subcase = null)
    {
        $this->subcase = $subcase;

        return $this;
    }

    /**
     * Get subcase
     *
     * @return \App\Entity\Troubleticket\Subcases
     */
    public function getSubcase()
    {
        return $this->subcase;
    }
}

