<?php

namespace Werd\ThingsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ElementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('atomicNumber')
            ->add('alias')
            ->add('atomicMass')
            ->add('boilingPoint')
            ->add('meltingPoint')
            ->add('vanderwaalsRadius')
            ->add('ionicRadius')
            ->add('density')
            ->add('elGroup')
            ->add('elBlock')
            ->add('elPeriod')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Werd\ThingsBundle\Entity\Element'
        ));
    }
}
