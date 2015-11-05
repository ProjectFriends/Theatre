<?phpnamespace User\UserBundle\Controller;use Symfony\Component\HttpFoundation\RedirectResponse;use FOS\UserBundle\Controller\RegistrationController as BaseController;use Symfony\Component\HttpFoundation\Request;use Symfony\Component\HttpFoundation\File\UploadedFile;use Symfony\Component\HttpFoundation\File\File;use FOS\UserBundle\FOSUserEvents;use FOS\UserBundle\Event\FormEvent;use FOS\UserBundle\Event\GetResponseUserEvent;use FOS\UserBundle\Event\FilterUserResponseEvent;use Symfony\Bundle\FrameworkBundle\Controller\Controller;use \DateTime;use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;use Symfony\Component\Security\Core\Exception\AccessDeniedException;use FOS\UserBundle\Model\UserInterface;use User\UserBundle\Entity\User;use Symfony\Component\Security\Core\Security;use Symfony\Component\Security\Core\SecurityContextInterface;use Symfony\Component\Security\Core\Exception\AuthenticationException;class RegistrationController extends BaseController {    public function deleteAction($id) {        $userManager = $this->container->get('fos_user.user_manager');        $om = $this->container->get('doctrine.orm.entity_manager');        $user = $userManager->findUserBy(array('id' => $id));        $om->remove($user);        $om->flush();        $url = $this->container->get('router')->generate('users');        $response = new RedirectResponse($url);        return $response;    }    public function editAction(Request $request, $id) {        $userManager = $this->container->get('fos_user.user_manager');        //$user = new User();        $om = $this->container->get('doctrine.orm.entity_manager');        $user = $userManager->findUserBy(array('id' => $id));        $formFactory = $this->container->get('fos_user.registration.form.factory');        $form = $formFactory->createForm();        $form->setData($user);        if ('POST' === $request->getMethod()) {            $form->bind($request);            if ($form->isValid()) {                $userManager->updateUser($user);                $om->flush();                $url = $this->container->get('router')->generate('users');                $response = new RedirectResponse($url);                return $response;            }        }        return $this->container->get('templating')->renderResponse(                        'UserUserBundle:Registration:edit.html.twig', array('form' => $form->createView(), 'id' => $id)        );    }    public function newUserAction(Request $request) {         $user = new User();        $formFactory = $this->container->get('fos_user.registration.form.factory');        $form = $formFactory->createForm();        $form->setData($user);        if ('POST' === $request->getMethod()) {            $form->bind($request);            $om = $this->container->get('doctrine.orm.entity_manager');            if ($form->isValid()) {                $userManager = $this->container->get('fos_user.user_manager');                $event = new FormEvent($form, $request);                $role = $user->getRoles();                      $userManager->createUser($user);                $user->setUsername($form->getData()->getUsername());                $user->setUsernameCanonical($form->getData()->getUsername());                $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);                $user->setPassword($encoder->encodePassword($form->getData()->getPassword(), $user->getSalt()));                $user->setEmail($form->getData()->getEmail());                $user->setNom($form->getData()->getNom());                $user->setPrenom($form->getData()->getPrenom());                $user->setRoles($form->get('roles')->getData());                //$user->addRole((string)$tabroles[0]);                $user->setEnabled(true);                $om->persist($user);                $om->flush();                             $url = $this->container->get('router')->generate('users');		                     $response = new RedirectResponse($url);                return $response;            }        }        return $this->container->get('templating')->renderResponse(                        'UserUserBundle:Registration:edit.html.twig', array('form' => $form->createView())        );    }    public function registerAction(Request $request) {        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */        $formFactory = $this->get('fos_user.registration.form.factory');        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */        $userManager = $this->get('fos_user.user_manager');        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */        $dispatcher = $this->get('event_dispatcher');        $user = $userManager->createUser();        $user->setEnabled(true);        $event = new GetResponseUserEvent($user, $request);        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);        if (null !== $event->getResponse()) {            return $event->getResponse();        }        $form = $formFactory->createForm();        $form->setData($user);        $form->handleRequest($request);        if ($form->isValid()) {            $event = new FormEvent($form, $request);            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);             $rolesArr = array('ROLE_USER');        $user->setRoles($rolesArr);            $userManager->updateUser($user);            if (null === $response = $event->getResponse()) {                $url = $this->generateUrl('fos_user_registration_confirmed');                $response = new RedirectResponse($url);            }            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));            return $response;        }        /** @var $session \Symfony\Component\HttpFoundation\Session\Session */        $session = $request->getSession();        if (class_exists('\Symfony\Component\Security\Core\Security')) {            $authErrorKey = Security::AUTHENTICATION_ERROR;            $lastUsernameKey = Security::LAST_USERNAME;        } else {            // BC for SF < 2.6            $authErrorKey = SecurityContextInterface::AUTHENTICATION_ERROR;            $lastUsernameKey = SecurityContextInterface::LAST_USERNAME;        }        // get the error if any (works with forward and redirect -- see below)        if ($request->attributes->has($authErrorKey)) {            $error = $request->attributes->get($authErrorKey);        } elseif (null !== $session && $session->has($authErrorKey)) {            $error = $session->get($authErrorKey);            $session->remove($authErrorKey);        } else {            $error = null;        }        if (!$error instanceof AuthenticationException) {            $error = null; // The value does not come from the security component.        }        // last username entered by the user        $lastUsername = (null === $session) ? '' : $session->get($lastUsernameKey);        if ($this->has('security.csrf.token_manager')) {            $csrfToken = $this->get('security.csrf.token_manager')->getToken('authenticate')->getValue();        } else {            // BC for SF < 2.4            $csrfToken = $this->has('form.csrf_provider')                ? $this->get('form.csrf_provider')->generateCsrfToken('authenticate')                : null;        }        return $this->render('UserUserBundle:Registration:register.html.twig', array(                    'form' => $form->createView(),            'last_username' => $lastUsername,            'error' => $error,            'csrf_token' => $csrfToken,        ));  /*return $this->render('FOSUserBundle:Registration:register.html.twig', array(                    'form' => $form->createView(),        ));*/    }      public function registerIndexAction(Request $request) {        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */        $formFactory = $this->get('fos_user.registration.form.factory');        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */        $userManager = $this->get('fos_user.user_manager');        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */        $dispatcher = $this->get('event_dispatcher');        $user = $userManager->createUser();        $user->setEnabled(true);        $event = new GetResponseUserEvent($user, $request);        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);        if (null !== $event->getResponse()) {            return $event->getResponse();        }        $form = $formFactory->createForm();        $form->setData($user);        $form->handleRequest($request);        if ($form->isValid()) {            $event = new FormEvent($form, $request);            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);             $rolesArr = array('ROLE_CLIENT');   if($user->getProfil()=='Client')        {        $user->setRoles($rolesArr);        }        else{            $rolesArr = array('ROLE_ENTREPRISE');           $user->setRoles($rolesArr);         }                    $userManager->updateUser($user);            if (null === $response = $event->getResponse()) {                 $request = $this->get('request');         $request->getSession()->getFlashBag()->add('Inscription', "inscription terminer , Une mailde  confirmer a été envoyer.");                $url = $this->generateUrl('front_office_homepage');                $response = new RedirectResponse($url);            }            $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));            return $response;        }        return $this->render('FOSUserBundle:Registration:register.html.twig', array(                    'form' => $form->createView(),        ));    }}