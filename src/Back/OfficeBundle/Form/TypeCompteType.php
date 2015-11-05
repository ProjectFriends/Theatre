<?php

namespace Back\OfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TypeCompteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('typefr', null, array('label' => false, 'required' => true))
            ->add('typean', null, array('label' => false, 'required' => true))
            ->add('typeesp', null, array('label' => false, 'required' => true))


            ->add('prix', 'number', array('label' => false, 'required' => true))
            ->add('nbrprod', null, array('label' => false, 'required' => true))


        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Back\OfficeBundle\Entity\TypeCompte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'back_officebundle_typecompte';
    }
}
