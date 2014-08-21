<?php

/* JaeviHotelesBundle:Default:annadirHabitacion.html.twig */
class __TwigTemplate_814f846275c2acf9c7e06b2260394d5db7b3e86b47a5cf3a3decb10474ae4612 extends Twig_Template
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
        $this->env->loadTemplate("JaeviHotelesBundle:Default:header.html.twig")->display($context);
        // line 2
        echo "
Habitación añadida con éxito al hotel ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "nombre"), "html", null, true);
        echo "<br>
<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("listadoHabitaciones");
        echo "\">Ir a listado</a>";
    }

    public function getTemplateName()
    {
        return "JaeviHotelesBundle:Default:annadirHabitacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
