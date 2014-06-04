<?php

namespace Mesd\NotificationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NotificationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('shortTitle')
            ->add('longTitle')
            ->add('body')
            ->add('bodyRaw')
            ->add('userModifiable')
            ->add('sticky')
            ->add('createdOn')
            ->add('postedOn')
            ->add('expiredOn')
            ->add('template')
            ->add('status')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mesd\NotificationBundle\Entity\Notification'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mesd_notificationbundle_notification';
    }
}
