<?php

namespace Front\OfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;


class EventController extends Controller{
    
    // get listes evenements 
     public function eventAction()
     {
         return $this->render('FrontOfficeBundle:Event:event.html.twig');
     }
    
}
