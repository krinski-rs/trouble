<?php

namespace App\Entity\Toa;

/**
 * RequestLog
 */
class RequestLog
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var integer
     */
    private $idActivity;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $technician;

    /**
     * @var \DateTime
     */
    private $createdAt = '2017-08-21 17:53:39.501828';

    /**
     * @var \DateTime
     */
    private $updatedAt = '2017-08-21 17:53:39.501828';

    /**
     * @var string
     */
    private $xmlData;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var integer
     */
    private $messageId;


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
     * Set action
     *
     * @param string $action
     *
     * @return RequestLog
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return RequestLog
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
     * Set idActivity
     *
     * @param integer $idActivity
     *
     * @return RequestLog
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
     * Set userName
     *
     * @param string $userName
     *
     * @return RequestLog
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set technician
     *
     * @param string $technician
     *
     * @return RequestLog
     */
    public function setTechnician($technician)
    {
        $this->technician = $technician;

        return $this;
    }

    /**
     * Get technician
     *
     * @return string
     */
    public function getTechnician()
    {
        return $this->technician;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return RequestLog
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return RequestLog
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set xmlData
     *
     * @param string $xmlData
     *
     * @return RequestLog
     */
    public function setXmlData($xmlData)
    {
        $this->xmlData = $xmlData;

        return $this;
    }

    /**
     * Get xmlData
     *
     * @return string
     */
    public function getXmlData()
    {
        return $this->xmlData;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return RequestLog
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set messageId
     *
     * @param integer $messageId
     *
     * @return RequestLog
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get messageId
     *
     * @return integer
     */
    public function getMessageId()
    {
        return $this->messageId;
    }
}

