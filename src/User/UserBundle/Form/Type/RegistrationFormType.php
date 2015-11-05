<?php

#src/Uae/UserBundle/Form/Type/RegistrationType.php

namespace User\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
          parent::buildForm($builder, $options);
        $builder
                ->add('email', 'email', array('label' => false, 'attr' => array('class' => 'form-control')))
                ->add('username', null, array('label' => false, 'attr' => array('class' => 'form-control')))
                ->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                    'options' => array('translation_domain' => 'FOSUserBundle'),
                    'first_options' => array('label' => false, 'max_length' => 20, 'attr' => array('class' => 'form-control')),
                    'second_options' => array('label' => false, 'attr' => array('class' => 'form-control')),
                    'invalid_message' => 'fos_user.password.mismatch',
                ))
                ->add('nom', 'text', array('label' => false,'attr' => array('class' => 'form-control')))
                ->add('prenom','text', array('label' => false,'attr' => array('class' => 'form-control')))
                ->add('pays')
                ->add('activite')
                ->add('structure', 'text', array('label' => false,'attr' => array('class' => 'form-control')))
                ->add('fonction', 'text', array('label' => false,'attr' => array('class' => 'form-control')))
                ->add('adresse', 'text', array('label' => false,'attr' => array('class' => 'form-control')))
                ->add('postal', 'text', array('label' => false,'attr' => array('class' => 'form-control')))
                ->add('ville', 'text', array('label' => false,'attr' => array('class' => 'form-control')))
                ->add('tel', 'text', array('label' => false,'attr' => array('class' => 'form-control')))
              
               
                 ->add('roles', 'choice', array('label' => false,
                    'choices' => array(
                        'ROLE_SUPER_ADMIN' => 'Admin', 'ROLE_CLIENT' => 'Client','ROLE_ENTREPRISE' => 'Entreprise',
                    ), 'multiple'  => true,
        ));   
    }

    public function getName() {
        return 'bizshare_user_registration';
    }

    public function getParent() {


        return 'fos_user_registration';
    }

}
