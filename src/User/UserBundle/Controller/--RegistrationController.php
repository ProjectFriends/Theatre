<?php

namespace User\UserBundle\Controller;


use FOS\UserBundle\Controller\RegistrationController as BaseController;


use Symfony\Component\HttpFoundation\Request;



class RegistrationController extends BaseController
{
    public function registerAction(Request $request)
    {
        $response = parent::registerAction($request);

        // ... do custom stuff
        return $response;
    }
}