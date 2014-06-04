<?php

namespace Mesd\NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 */
class Notification
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $shortTitle;

    /**
     * @var string
     */
    private $longTitle;

    /**
     * @var string
     */
    private $body;

    /**
     * @var boolean
     */
    private $bodyRaw;

    /**
     * @var boolean
     */
    private $userModifiable;

    /**
     * @var integer
     */
    private $sticky;

    /**
     * @var \DateTime
     */
    private $createdOn;

    /**
     * @var \DateTime
     */
    private $postedOn;

    /**
     * @var \DateTime
     */
    private $expiredOn;

    /**
     * @var \Mesd\NotificationBundle\Entity\Template
     */
    private $template;

    /**
     * @var \Mesd\NotificationBundle\Entity\Status
     */
    private $status;

    /**
     * @var \Mesd\ORCase\AppBundle\Entity\OrcaseUser
     */
    private $user;


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
     * Set shortTitle
     *
     * @param string $shortTitle
     * @return Notification
     */
    public function setShortTitle($shortTitle)
    {
        $this->shortTitle = $shortTitle;
    
        return $this;
    }

    /**
     * Get shortTitle
     *
     * @return string 
     */
    public function getShortTitle()
    {
        return $this->shortTitle;
    }

    /**
     * Set longTitle
     *
     * @param string $longTitle
     * @return Notification
     */
    public function setLongTitle($longTitle)
    {
        $this->longTitle = $longTitle;
    
        return $this;
    }

    /**
     * Get longTitle
     *
     * @return string 
     */
    public function getLongTitle()
    {
        return $this->longTitle;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return Notification
     */
    public function setBody($body)
    {
        $this->body = $body;
    
        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set bodyRaw
     *
     * @param boolean $bodyRaw
     * @return Notification
     */
    public function setBodyRaw($bodyRaw)
    {
        $this->bodyRaw = $bodyRaw;
    
        return $this;
    }

    /**
     * Get bodyRaw
     *
     * @return boolean 
     */
    public function getBodyRaw()
    {
        return $this->bodyRaw;
    }

    /**
     * Set userModifiable
     *
     * @param boolean $userModifiable
     * @return Notification
     */
    public function setUserModifiable($userModifiable)
    {
        $this->userModifiable = $userModifiable;
    
        return $this;
    }

    /**
     * Get userModifiable
     *
     * @return boolean 
     */
    public function getUserModifiable()
    {
        return $this->userModifiable;
    }

    /**
     * Set sticky
     *
     * @param integer $sticky
     * @return Notification
     */
    public function setSticky($sticky)
    {
        $this->sticky = $sticky;
    
        return $this;
    }

    /**
     * Get sticky
     *
     * @return integer 
     */
    public function getSticky()
    {
        return $this->sticky;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return Notification
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    
        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set postedOn
     *
     * @param \DateTime $postedOn
     * @return Notification
     */
    public function setPostedOn($postedOn)
    {
        $this->postedOn = $postedOn;
    
        return $this;
    }

    /**
     * Get postedOn
     *
     * @return \DateTime 
     */
    public function getPostedOn()
    {
        return $this->postedOn;
    }

    /**
     * Set expiredOn
     *
     * @param \DateTime $expiredOn
     * @return Notification
     */
    public function setExpiredOn($expiredOn)
    {
        $this->expiredOn = $expiredOn;
    
        return $this;
    }

    /**
     * Get expiredOn
     *
     * @return \DateTime 
     */
    public function getExpiredOn()
    {
        return $this->expiredOn;
    }

    /**
     * Set template
     *
     * @param \Mesd\NotificationBundle\Entity\Template $template
     * @return Notification
     */
    public function setTemplate(\Mesd\NotificationBundle\Entity\Template $template = null)
    {
        $this->template = $template;
    
        return $this;
    }

    /**
     * Get template
     *
     * @return \Mesd\NotificationBundle\Entity\Template 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set status
     *
     * @param \Mesd\NotificationBundle\Entity\Status $status
     * @return Notification
     */
    public function setStatus(\Mesd\NotificationBundle\Entity\Status $status = null)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return \Mesd\NotificationBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set user
     *
     * @param \Mesd\ORCase\AppBundle\Entity\OrcaseUser $user
     * @return Notification
     */
    public function setUser(\Mesd\ORCase\AppBundle\Entity\OrcaseUser $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Mesd\ORCase\AppBundle\Entity\OrcaseUser 
     */
    public function getUser()
    {
        return $this->user;
    }
}
