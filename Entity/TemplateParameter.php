<?php

namespace Mesd\NotificationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemplateParameter
 */
class TemplateParameter
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $valueType;

    /**
     * @var \Mesd\NotificationBundle\Entity\Template
     */
    private $template;

    /**
     * @var \Mesd\NotificationBundle\Entity\ParameterType
     */
    private $parameterType;


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
     * Set name
     *
     * @param string $name
     * @return TemplateParameter
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return TemplateParameter
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
     * Set valueType
     *
     * @param string $valueType
     * @return TemplateParameter
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;
    
        return $this;
    }

    /**
     * Get valueType
     *
     * @return string 
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * Set template
     *
     * @param \Mesd\NotificationBundle\Entity\Template $template
     * @return TemplateParameter
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
     * Set parameterType
     *
     * @param \Mesd\NotificationBundle\Entity\ParameterType $parameterType
     * @return TemplateParameter
     */
    public function setParameterType(\Mesd\NotificationBundle\Entity\ParameterType $parameterType = null)
    {
        $this->parameterType = $parameterType;
    
        return $this;
    }

    /**
     * Get parameterType
     *
     * @return \Mesd\NotificationBundle\Entity\ParameterType 
     */
    public function getParameterType()
    {
        return $this->parameterType;
    }
}
