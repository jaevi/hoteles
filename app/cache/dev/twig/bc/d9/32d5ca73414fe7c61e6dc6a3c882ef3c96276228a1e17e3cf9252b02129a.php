<?php

/* JaeviHotelesBundle:Default:annadirHotel.html.twig */
class __TwigTemplate_bcd932d5ca73414fe7c61e6dc6a3c882ef3c96276228a1e17e3cf9252b02129a extends Twig_Template
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
Hotel añadido con éxito.<br>
<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("listadoHoteles");
        echo "\">Ir a listado</a>";
    }

    public function getTemplateName()
    {
        return "JaeviHotelesBundle:Default:annadirHotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }
}
