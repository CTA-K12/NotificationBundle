<?php

namespace Mesd\NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NotificationParameter
 */
class NotificationParameter
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $value;

    /**
     * @var \Mesd\NotificationBundle\Entity\Notification
     */
    private $notification;

    /**
     * @var \Mesd\NotificationBundle\Entity\ParameterType
     */
    private $paramterType;


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
     * Set key
     *
     * @param string $key
     * @return NotificationParameter
     */
    public function setKey($key)
    {
        $this->key = $key;
    
        return $this;
    }

    /**
     * Get key
     *
     * @return string 
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return NotificationParameter
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set notification
     *
     * @param \Mesd\NotificationBundle\Entity\Notification $notification
     * @return NotificationParameter
     */
    public function setNotification(\Mesd\NotificationBundle\Entity\Notification $notification = null)
    {
        $this->notification = $notification;
    
        return $this;
    }

    /**
     * Get notification
     *
     * @return \Mesd\NotificationBundle\Entity\Notification 
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Set paramterType
     *
     * @param \Mesd\NotificationBundle\Entity\ParameterType $paramterType
     * @return NotificationParameter
     */
    public function setParamterType(\Mesd\NotificationBundle\Entity\ParameterType $paramterType = null)
    {
        $this->paramterType = $paramterType;
    
        return $this;
    }

    /**
     * Get paramterType
     *
     * @return \Mesd\NotificationBundle\Entity\ParameterType 
     */
    public function getParamterType()
    {
        return $this->paramterType;
    }
}
