<?php

namespace Front\OfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException('.');
        }
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $role = $user->getRoles();
        if($this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')){
        //    echo'admin';exit;
            return $this->redirect($this->generateUrl('back_office_pays'));
        }else{

            return $this->redirect($this->generateUrl('front_office_event'));


            }
       
        return $this->render('FrontOfficeBundle:Default:index.html.twig');
    }
}
