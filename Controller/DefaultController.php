<?php

namespace Mesd\NotificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MesdNotificationBundle:Default:index.html.twig');
    }
}
