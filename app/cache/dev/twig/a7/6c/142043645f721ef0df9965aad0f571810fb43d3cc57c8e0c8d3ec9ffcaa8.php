<?php

/* JaeviHotelesBundle:Default:listadoReservas.html.twig */
class __TwigTemplate_a76c142043645f721ef0df9965aad0f571810fb43d3cc57c8e0c8d3ec9ffcaa8 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["reservas"]) ? $context["reservas"] : $this->getContext($context, "reservas")));
        foreach ($context['_seq'] as $context["_key"] => $context["reserva"]) {
            // line 4
            echo "    <section>
        <b>Referencia:</b> ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "id"), "html", null, true);
            echo "<br>
        <b>Fecha de realización de la reserva:</b> ";
            // line 6
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "fechaReserva"), "d/M/Y"), "html", null, true);
            echo "<br>
        <b>Fecha inicio:</b> ";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "fechaInicio"), "d/M/Y"), "html", null, true);
            echo "<br>
        <b>Fecha fin:</b> ";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "fechaFin"), "d/M/Y"), "html", null, true);
            echo "<br>
        <b>Referencia habitación:</b> ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reserva"]) ? $context["reserva"] : $this->getContext($context, "reserva")), "habitacion"), "id"), "html", null, true);
            echo "<br>
        <br>
    </section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "JaeviHotelesBundle:Default:listadoReservas.html.twig";
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
