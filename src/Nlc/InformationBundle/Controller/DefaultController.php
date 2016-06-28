<?php

namespace Nlc\InformationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NlcInformationBundle:Default:index.html.twig');
    }

    public function loginAction()
    {
        return $this->render('NlcInformationBundle:Information:login.html.twig');
    }

    public function adminAction()
    {
        return $this->render('NlcInformationBundle:Information:admin.html.twig');
    }
}
