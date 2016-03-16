<?php

namespace MairieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MairieBundle:Default:index.html.twig');
    }
}
