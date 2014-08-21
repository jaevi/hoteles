<?php

/* JaeviHotelesBundle:Default:listadoHoteles.html.twig */
class __TwigTemplate_bf599d2bc1e38fe63293819d03f6dc6db8349b20ec858c7dfbd7b4f6398e6a67 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["hoteles"]) ? $context["hoteles"] : $this->getContext($context, "hoteles")));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 4
            echo "    <section>
        <b>Referencia:</b> ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "id"), "html", null, true);
            echo "<br>
        <b>Nombre:</b> ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "nombre"), "html", null, true);
            echo "<br>
        <b>Descripción:</b> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "descripcion"), "html", null, true);
            echo "<br>
        <b>Nº Habitaciones:</b> ";
            // line 8
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "habitaciones")), "html", null, true);
            echo "<br>
        <br>
    </section>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "JaeviHotelesBundle:Default:listadoHoteles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  35 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
