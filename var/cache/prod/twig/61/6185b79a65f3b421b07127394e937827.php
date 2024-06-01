<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* revisiones/revisiones_clase.html.twig */
class __TwigTemplate_4751c93ba6b0f7bdce0e27f69bae65a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "revisiones/revisiones_clase.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "

<div class=\"lista_revisiones\">
    <h1>Revisiones de las Clases</h1>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["revisiones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 9
            echo "    <div class=\"elemento_revisiones\">
        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revision"], "img", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
        <h2>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["revision"], "Nombre", [], "any", false, false, false, 11), "html", null, true);
            echo "</h2>
        <div>
            <button onclick=\"location.href='";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comprobar_clase", ["id" => twig_get_attribute($this->env, $this->source, $context["revision"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "'\" class=\"btn btn-info\">Ver más</button>
            <button onclick=\"location.href='";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_validar_clase", ["id" => twig_get_attribute($this->env, $this->source, $context["revision"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "'\" class=\"btn btn-success\">Validar clase</button>
            <button onclick=\"location.href='";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_eliminar_clase", ["id" => twig_get_attribute($this->env, $this->source, $context["revision"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "'\" class=\"btn btn-danger\">Eliminar clase</button>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "revisiones/revisiones_clase.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  90 => 19,  80 => 15,  76 => 14,  72 => 13,  67 => 11,  63 => 10,  60 => 9,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revisiones/revisiones_clase.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\revisiones\\revisiones_clase.html.twig");
    }
}
