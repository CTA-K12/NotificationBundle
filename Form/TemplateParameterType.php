<?php

namespace Mesd\NotificationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TemplateParameterType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('value')
            ->add('valueType')
            ->add('template')
            ->add('parameterType')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mesd\NotificationBundle\Entity\TemplateParameter'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mesd_notificationbundle_templateparameter';
    }
}
