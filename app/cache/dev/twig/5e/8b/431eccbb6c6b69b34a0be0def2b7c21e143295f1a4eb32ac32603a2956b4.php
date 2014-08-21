<?php

/* JaeviHotelesBundle:Default:index.html.twig */
class __TwigTemplate_5e8b431eccbb6c6b69b34a0be0def2b7c21e143295f1a4eb32ac32603a2956b4 extends Twig_Template
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
Bienvenido<br>
Búsqueda:<br>
<br>

TODO

<br><br>
<h1>EJERCICIO 2</h1>
<br>
1 - Daily sales report.<br>
Consultar la tabla reservas y habitaciones, filtrando por fecha hoy, y sumar los precios de las habitaciones
<br>
2 - Best performer hotels of the day.<br>
Sobre la consulta anterior, agrupar por hoteles y ordenar por el precio más alto
<br>
3 - Weekly accumulated sales.<br>
Sobre la primera consulta, ampliar el rango de fechas a la semana actual
<br>

<br><br>
<h1>EJERCICIO PARÉNTESIS</h1>
<br>

<pre>
/** CLASE **/
class Cadena {

\tvar \$cadena;

\tfunction get_cadena(){
\t\treturn \$this->cadena;
\t}

\tfunction set_cadena(\$cadena){
\t\t\$this->cadena=\$cadena;
\t}

\tfunction comprobar_parentesis(\$cadena) {
\t\treturn (substr_count(\$cadena, \"(\") != substr_count(\$cadena, \")\")) ? \"Exception Mismatched Parenthesis\" : \"Successful\";
\t}

\tfunction comprobar_cadena() {
\t\techo \"Entrada: \".\$this->cadena;
\t\techo \"Salida: \".\$this->comprobar_parentesis(\$this->cadena);
\t}
}
/** FIN CLASE **/


/** COMPROBACIÓN **/

\$cadena= new Cadena();

\$cadena->set_cadena(\"Hello (my name) is (Josh\");
\$cadena->comprobar_cadena();

\$cadena->set_cadena(\"Hello (my name) is (())Josh\");
\$cadena->comprobar_cadena();
/** FIN COMPROBACIÓN **/
</pre>";
    }

    public function getTemplateName()
    {
        return "JaeviHotelesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
