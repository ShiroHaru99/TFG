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

/* buscador/formularios/subclases.html.twig */
class __TwigTemplate_0921649309f607acf48c7682d8e9b25a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "buscador/formularios/subclases.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"formulario center-h center-v\">
<d class=\"formulario2 \">
    <h1 class=\"titulo\">Subclases</h1>
 ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form2"] ?? null), 'form_start');
        echo " 
    <div class=\"row\">
        <div class=\"C\">
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "Nombre", [], "any", false, false, false, 11), 'row');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "Requisitos", [], "any", false, false, false, 15), 'row');
        echo "
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "Autor", [], "any", false, false, false, 20), 'row');
        echo "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "clase_id", [], "any", false, false, false, 24), 'row');
        echo "
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
          
        </div>
        <span class=\"E\"></span>
        <div class=\"A\"><br>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "Enviar", [], "any", false, false, false, 33), 'row');
        echo "
        </div>
    </div>
 ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form2"] ?? null), 'form_end');
        echo "
    </div>
 </div>



";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "buscador/formularios/subclases.html.twig";
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
        return array (  101 => 36,  95 => 33,  83 => 24,  76 => 20,  68 => 15,  61 => 11,  55 => 8,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "buscador/formularios/subclases.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\buscador\\formularios\\subclases.html.twig");
    }
}
