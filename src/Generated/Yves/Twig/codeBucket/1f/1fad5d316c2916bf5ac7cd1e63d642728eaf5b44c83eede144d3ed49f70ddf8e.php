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

/* @ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig */
class __TwigTemplate_2c0c651fef5c91310f4c71f8ec645f5ec02d718da7217bf526a540c7e450fc1d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["breadcrumb-step", "@SprykerShop:ShopUi"]), "@ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["stepNumber" => null], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "stepNumber", [], "any", false, false, false, 8))) {
            // line 9
            echo "       <span class=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9) . "__number"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "stepNumber", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
    ";
        }
        // line 12
        if ((isset($context["isLink"]) || array_key_exists("isLink", $context) ? $context["isLink"] : (function () { throw new RuntimeError('Variable "isLink" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "<a class=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13) . "__link"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "url", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "label", [], "any", false, false, false, 14), "html", null, true);
            // line 15
            echo "</a>";
        }
        // line 18
        if ((isset($context["isFormElement"]) || array_key_exists("isFormElement", $context) ? $context["isFormElement"] : (function () { throw new RuntimeError('Variable "isFormElement" does not exist.', 18, $this->source); })())) {
            // line 19
            $this->displayBlock('form', $context, $blocks);
        }
        // line 27
        if (( !(isset($context["isLink"]) || array_key_exists("isLink", $context) ? $context["isLink"] : (function () { throw new RuntimeError('Variable "isLink" does not exist.', 27, $this->source); })()) &&  !(isset($context["isFormElement"]) || array_key_exists("isFormElement", $context) ? $context["isFormElement"] : (function () { throw new RuntimeError('Variable "isFormElement" does not exist.', 27, $this->source); })()))) {
            $this->displayBlock("label", $context, $blocks);
        }
        // line 28
        echo "
    ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "withChevron", [], "any", false, false, false, 29)) {
            // line 30
            echo "        <span class=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30) . "__separator"), "html", null, true);
            echo "\">/</span>
    ";
        }
    }

    // line 19
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "            <form class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "__form\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "formName", [], "any", false, false, false, 20), "html", null, true);
        echo "\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "url", [], "any", false, false, false, 20), "html", null, true);
        echo "\">
                <input name=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "tokenFieldName", [], "any", false, false, false, 21), "html", null, true);
        echo "\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "formName", [], "any", false, false, false, 21)), "html", null, true);
        echo "\">
                <button class=\"";
        // line 22
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22) . "__link"), "html", null, true);
        echo "\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</button>
            </form>
        ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 22,  111 => 21,  102 => 20,  98 => 19,  90 => 30,  88 => 29,  85 => 28,  81 => 27,  78 => 19,  76 => 18,  73 => 15,  71 => 14,  65 => 13,  63 => 12,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('breadcrumb-step', '@SprykerShop:ShopUi') %}

{% define data = {
    stepNumber: null,
} %}

{% block body %}
    {% if data.stepNumber is not empty %}
       <span class=\"{{ config.name ~ '__number' }}\">{{ data.stepNumber }}</span>
    {% endif %}

    {%- if isLink -%}
        <a class=\"{{ config.name ~ '__link' }}\" href=\"{{ data.url }}\">
            {{- data.label -}}
        </a>
    {%- endif -%}

    {%- if isFormElement -%}
        {% block form %}
            <form class=\"{{ config.name }}__form\" name=\"{{ data.formName }}\" method=\"post\" action=\"{{ data.url }}\">
                <input name=\"{{ data.tokenFieldName }}\" type=\"hidden\" value=\"{{ csrf_token(data.formName) }}\">
                <button class=\"{{ config.name ~ '__link' }}\">{{ block('label') }}</button>
            </form>
        {% endblock %}
    {%- endif -%}

    {% if not isLink and not isFormElement %}{{ block('label') }}{% endif %}

    {% if data.withChevron %}
        <span class=\"{{ config.name ~ '__separator' }}\">/</span>
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/breadcrumb-step/breadcrumb-step.twig");
    }
}
