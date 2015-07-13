<?php

namespace ctroc\formBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class productsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('required'  => true, 'attr' => array('class' => 'form-control') ))
            ->add('price', 'text', array('required' => true, 'attr' => array('class' => 'form-control') ))
            ->add('save',  'submit', array('attr' => array('class' => 'btn btn-default') ));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ctroc\formBundle\Entity\products'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ctroc_formbundle_products';
    }
}
