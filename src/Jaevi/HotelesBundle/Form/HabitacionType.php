<?php

namespace Jaevi\HotelesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HabitacionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripcion')
            ->add('noPersonas')
            ->add('precio')
            //->add('hotel')
            ->add('hotel', 'entity', array(
                'class' => 'JaeviHotelesBundle:Hotel',
                'property' => 'id',
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaevi\HotelesBundle\Entity\Habitacion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jaevi_hotelesbundle_habitacion';
    }
}
