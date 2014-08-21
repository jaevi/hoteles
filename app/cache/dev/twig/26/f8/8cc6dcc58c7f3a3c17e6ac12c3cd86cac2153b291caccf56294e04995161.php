<?php

/* JaeviHotelesBundle:Default:header.html.twig */
class __TwigTemplate_26f88cc6dcc58c7f3a3c17e6ac12c3cd86cac2153b291caccf56294e04995161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header>
    <center>
        [<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("home");
        echo "\">Inicio</a>]
        [<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("listadoHoteles");
        echo "\">Listado de Hoteles</a>]
        ";
        // line 6
        echo "        [<a href=\"";
        echo $this->env->getExtension('routing')->getUrl("hotel");
        echo "\">CRUD Hotel</a>]
        [<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("listadoHabitaciones");
        echo "\">Listado de Habitaciones</a>]
        ";
        // line 9
        echo "        [<a href=\"";
        echo $this->env->getExtension('routing')->getUrl("habitacion");
        echo "\">CRUD Habitacion</a>]
        [<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("listadoReservas");
        echo "\">Listado de Reservas</a>]
        ";
        // line 12
        echo "        [<a href=\"";
        echo $this->env->getExtension('routing')->getUrl("reserva");
        echo "\">CRUD Reserva</a>]

    </center>
</header>
<br><br>";
    }

    public function getTemplateName()
    {
        return "JaeviHotelesBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  45 => 10,  40 => 9,  36 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
