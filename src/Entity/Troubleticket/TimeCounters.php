<?php

namespace App\Entity\Troubleticket;

/**
 * TimeCounters
 */
class TimeCounters
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $initialDate;

    /**
     * @var \DateTime
     */
    private $finalDate;

    /**
     * @var integer
     */
    private $stack;

    /**
     * @var integer
     */
    private $subcaseStatus;

    /**
     * @var integer
     */
    private $reportStatus = '0';

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
     * Set initialDate
     *
     * @param \DateTime $initialDate
     *
     * @return TimeCounters
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
     * @return TimeCounters
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
     * Set stack
     *
     * @param integer $stack
     *
     * @return TimeCounters
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
     * Set subcaseStatus
     *
     * @param integer $subcaseStatus
     *
     * @return TimeCounters
     */
    public function setSubcaseStatus($subcaseStatus)
    {
        $this->subcaseStatus = $subcaseStatus;

        return $this;
    }

    /**
     * Get subcaseStatus
     *
     * @return integer
     */
    public function getSubcaseStatus()
    {
        return $this->subcaseStatus;
    }

    /**
     * Set reportStatus
     *
     * @param integer $reportStatus
     *
     * @return TimeCounters
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
     * Set report
     *
     * @param \App\Entity\Troubleticket\Reports $report
     *
     * @return TimeCounters
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
     * @return TimeCounters
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

