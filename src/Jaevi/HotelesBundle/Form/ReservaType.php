<?php

namespace Jaevi\HotelesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReservaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaReserva')
            ->add('fechaInicio')
            ->add('fechaFin')
            //->add('habitacion')
            ->add('habitacion', 'entity', array(
                'class' => 'JaeviHotelesBundle:Habitacion',
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
            'data_class' => 'Jaevi\HotelesBundle\Entity\Reserva'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jaevi_hotelesbundle_reserva';
    }
}
