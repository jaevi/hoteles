<?php

/* JaeviHotelesBundle:Default:listadoHabitaciones.html.twig */
class __TwigTemplate_a201522b9a79e6869895b874e0b2efd80993b481983dd762da7d38f1603cbd47 extends Twig_Template
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
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["habitaciones"]) ? $context["habitaciones"] : $this->getContext($context, "habitaciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["habitacion"]) {
            // line 4
            echo "    <section>
        <b>Referencia:</b> ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["habitacion"]) ? $context["habitacion"] : $this->getContext($context, "habitacion")), "id"), "html", null, true);
            echo "<br>
        <b>Descripción:</b> ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["habitacion"]) ? $context["habitacion"] : $this->getContext($context, "habitacion")), "descripcion"), "html", null, true);
            echo "<br>
        <b>Nº de personas:</b> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["habitacion"]) ? $context["habitacion"] : $this->getContext($context, "habitacion")), "noPersonas"), "html", null, true);
            echo "<br>
        <b>Precio:</b> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["habitacion"]) ? $context["habitacion"] : $this->getContext($context, "habitacion")), "precio"), "html", null, true);
            echo "<br>
        <b>Hotel:</b> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["habitacion"]) ? $context["habitacion"] : $this->getContext($context, "habitacion")), "hotel"), "nombre"), "html", null, true);
            echo "<br>
        <br>
    </section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitacion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "JaeviHotelesBundle:Default:listadoHabitaciones.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
