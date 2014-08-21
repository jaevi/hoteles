<?php

namespace Jaevi\HotelesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template("JaeviHotelesBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        //$hoteles=$em->getRepository("JaeviHotelesBundle:Hotel")->findAll();
        //$hoteles=$em->createQuery("select h from JaeviHotelesBundle:Hotel h order by h.id")->getResult();
        $hoteles=$em->getRepository("JaeviHotelesBundle:Hotel")->prueba();
        return array('hoteles' => $hoteles);
    }
    
    /**
     * @Route("/listadoHoteles", name="listadoHoteles")
     * @Template()
     */
    public function listadoHotelesAction()
    {
        $em=$this->getDoctrine()->getManager();
        //$hoteles=$em->getRepository("JaeviHotelesBundle:Hotel")->findAll();
        //$hoteles=$em->createQuery("select h from JaeviHotelesBundle:Hotel h order by h.id")->getResult();
        $hoteles=$em->getRepository("JaeviHotelesBundle:Hotel")->prueba();
        return array('hoteles' => $hoteles);
    }
    
    /**
     * @Route("/annadirHotel", name="annadirHotel")
     * @Template()
     */
    public function annadirHotelAction()
    {
        $em=$this->getDoctrine()->getManager();
        $hotel=new \Jaevi\HotelesBundle\Entity\Hotel();
        $hotel->setNombre("Nombre del hotel");
        $hotel->setDescripcion("hotel de prueba");
        $em->persist($hotel);
        $em->flush();
        //return $this->redirect($this->generateUrl("listadoHoteles"));
        return array();
    }

    /**
     * @Route("/listadoHabitaciones", name="listadoHabitaciones")
     * @Template()
     */
    public function listadoHabitacionesAction()
    {
        $em=$this->getDoctrine()->getManager();
        //$habitaciones=$em->getRepository("JaeviHotelesBundle:Habitacion")->findAll();
        $habitaciones=$em->getRepository("JaeviHotelesBundle:Habitacion")->todosOrdenadosPorHotel();
        return array('habitaciones' => $habitaciones);
    }
    
    /**
     * @Route("/annadirHabitacion", name="annadirHabitacion")
     * @Template()
     */
    public function annadirHabitacionAction()
    {
        $em=$this->getDoctrine()->getManager();
        //hotel de prueba
        $hotel=$em->getRepository("JaeviHotelesBundle:Hotel")->find(5);
        $habitacion=new \Jaevi\HotelesBundle\Entity\Habitacion();
        $habitacion->setDescripcion("Habitación de prueba");
        $habitacion->setPrecio(80.50);
        $habitacion->setNoPersonas(4);
        $habitacion->setHotel($hotel);
        $em->persist($habitacion);
        $em->flush();
        //return $this->redirect($this->generateUrl("listadoHabitaciones"));
        return array('hotel' => $hotel);
    }

    /**
     * @Route("/listadoReservas", name="listadoReservas")
     * @Template()
     */
    public function listadoReservasAction()
    {
        $em=$this->getDoctrine()->getManager();
        $reservas=$em->getRepository("JaeviHotelesBundle:Reserva")->findAll();
        return array('reservas' => $reservas);
    }
    
    /**
     * @Route("/annadirReserva", name="annadirReserva")
     * @Template()
     */
    public function annadirReservaAction()
    {
        $em=$this->getDoctrine()->getManager();
        //habitacion de prueba
        $habitacion=$em->getRepository("JaeviHotelesBundle:Habitacion")->find(5);
        $reserva=new \Jaevi\HotelesBundle\Entity\Reserva();
        $fechaReserva=new DateTime();
        $reserva->setFechaReserva($fechaReserva);
        $reserva->setFechaInicio($fechaReserva);
        $reserva->setFechaFin($fechaReserva);
        $reserva->setHabitacion($habitacion);
        $em->persist($reserva);
        $em->flush();
        //return $this->redirect($this->generateUrl("listadoReservas"));
        return array('habitacion' => $habitacion);
    }
}
