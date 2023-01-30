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

/* @ShopUi/models/template.twig */
class __TwigTemplate_23c4ef2ac304fc2ced5a3e67392ff21a1b18ac2cfc4b5b502ca695fc15da151b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'template' => [$this, 'block_template'],
            'body' => [$this, 'block_body'],
            'getTemplateMacros' => [$this, 'block_getTemplateMacros'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo " 
";
        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["isVisible" => true], $context['data']);        // line 11
        $this->displayBlock('template', $context, $blocks);
        // line 17
        $this->displayBlock('getTemplateMacros', $context, $blocks);
    }

    // line 11
    public function block_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "isVisible", [], "any", false, false, false, 12)) {
            // line 13
            $this->displayBlock('body', $context, $blocks);
        }
    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_getTemplateMacros($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function macro_getTemplate($__templateType__ = null, $__templateName__ = null, $__moduleName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "templateType" => $__templateType__,
            "templateName" => $__templateName__,
            "moduleName" => $__moduleName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 19
            echo "        ";
            if ((0 === twig_compare((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 19, $this->source); })()), "atom"))) {
                // line 20
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('atom')->getCallable(), [(isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 20, $this->source); })()), (isset($context["moduleName"]) || array_key_exists("moduleName", $context) ? $context["moduleName"] : (function () { throw new RuntimeError('Variable "moduleName" does not exist.', 20, $this->source); })())]), "html", null, true);
                echo "
        ";
            }
            // line 22
            echo "
        ";
            // line 23
            if ((0 === twig_compare((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 23, $this->source); })()), "molecule"))) {
                // line 24
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('molecule')->getCallable(), [(isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 24, $this->source); })()), (isset($context["moduleName"]) || array_key_exists("moduleName", $context) ? $context["moduleName"] : (function () { throw new RuntimeError('Variable "moduleName" does not exist.', 24, $this->source); })())]), "html", null, true);
                echo "
        ";
            }
            // line 26
            echo "
        ";
            // line 27
            if ((0 === twig_compare((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 27, $this->source); })()), "organism"))) {
                // line 28
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('organism')->getCallable(), [(isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 28, $this->source); })()), (isset($context["moduleName"]) || array_key_exists("moduleName", $context) ? $context["moduleName"] : (function () { throw new RuntimeError('Variable "moduleName" does not exist.', 28, $this->source); })())]), "html", null, true);
                echo "
        ";
            }
            // line 30
            echo "
        ";
            // line 31
            if ((0 === twig_compare((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 31, $this->source); })()), "view"))) {
                // line 32
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('view')->getCallable(), [(isset($context["templateName"]) || array_key_exists("templateName", $context) ? $context["templateName"] : (function () { throw new RuntimeError('Variable "templateName" does not exist.', 32, $this->source); })()), (isset($context["moduleName"]) || array_key_exists("moduleName", $context) ? $context["moduleName"] : (function () { throw new RuntimeError('Variable "moduleName" does not exist.', 32, $this->source); })())]), "html", null, true);
                echo "
        ";
            }
            // line 34
            echo "    ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@ShopUi/models/template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 34,  123 => 32,  121 => 31,  118 => 30,  112 => 28,  110 => 27,  107 => 26,  101 => 24,  99 => 23,  96 => 22,  90 => 20,  87 => 19,  72 => 18,  66 => 17,  56 => 13,  54 => 12,  50 => 11,  46 => 17,  44 => 11,  43 => 7,  40 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 #
 #
 # Template API
 #}
 
{% define data = {
    isVisible: true,
} %}

{%- block template -%}
    {% if data.isVisible %}
        {%- block body -%}{%- endblock -%}
    {% endif %}
{%- endblock -%}

{%- block getTemplateMacros -%}
    {% macro getTemplate(templateType, templateName, moduleName) %}
        {% if templateType == 'atom' %}
            {{ atom(templateName, moduleName) }}
        {% endif %}

        {% if templateType == 'molecule' %}
            {{ molecule(templateName, moduleName) }}
        {% endif %}

        {% if templateType == 'organism' %}
            {{ organism(templateName, moduleName) }}
        {% endif %}

        {% if templateType == 'view' %}
            {{ view(templateName, moduleName) }}
        {% endif %}
    {% endmacro %}
{%- endblock -%}
", "@ShopUi/models/template.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/models/template.twig");
    }
}
