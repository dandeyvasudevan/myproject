<?php

namespace Acme\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        //return $this->render('AcmeTestBundle:Admin:index.html.twig', array(
                // ...
          //  ));    
        
        return $this->redirect($this->generateUrl("symptom"));
    }

    
}
