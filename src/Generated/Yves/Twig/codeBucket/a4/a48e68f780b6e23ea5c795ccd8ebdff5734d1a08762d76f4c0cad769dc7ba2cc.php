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

/* @ShopUi/components/molecules/form/form.twig */
class __TwigTemplate_14426734f77754dfc55ddc091a14c4d1ebfde216d9a7ee48798e417b17c48770 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
            'errors' => [$this, 'block_errors'],
            'fieldset' => [$this, 'block_fieldset'],
            'message' => [$this, 'block_message'],
            'actions' => [$this, 'block_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form", "@SprykerShop:ShopUi"]), "@ShopUi/components/molecules/form/form.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["shouldRequireMessage" => false], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "enableStart", [], "any", false, false, false, 12)) {
            // line 13
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "form", [], "any", false, false, false, 13), 'form_start', twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "options", [], "any", false, false, false, 13));
            echo "
    ";
        }
        // line 15
        echo "
    <div class=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "__container\">
        ";
        // line 17
        $this->displayBlock('errors', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('fieldset', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $this->displayBlock('message', $context, $blocks);
        // line 32
        echo "
        <div class=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "__actions\">
            ";
        // line 34
        $this->displayBlock('actions', $context, $blocks);
        // line 37
        echo "        </div>
    </div>

    ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "enableEnd", [], "any", false, false, false, 40)) {
            // line 41
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "form", [], "any", false, false, false, 41), 'form_end');
            echo "
    ";
        }
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "        ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    ";
    }

    // line 17
    public function block_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        $this->displayParentBlock("errors", $context, $blocks);
        echo "
        ";
    }

    // line 21
    public function block_fieldset($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "            ";
        $this->displayParentBlock("fieldset", $context, $blocks);
        echo "
        ";
    }

    // line 25
    public function block_message($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "shouldRequireMessage", [], "any", false, false, false, 26)) {
            // line 27
            echo "                <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "__require-message\">
                    <small class=\"text-secondary\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required_fields.text"), "html", null, true);
            echo "</small>
                </div>
            ";
        }
        // line 31
        echo "        ";
    }

    // line 34
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                ";
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/form/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 35,  168 => 34,  164 => 31,  158 => 28,  153 => 27,  150 => 26,  146 => 25,  139 => 22,  135 => 21,  128 => 18,  124 => 17,  117 => 9,  113 => 8,  105 => 41,  103 => 40,  98 => 37,  96 => 34,  92 => 33,  89 => 32,  87 => 25,  84 => 24,  82 => 21,  79 => 20,  77 => 17,  73 => 16,  70 => 15,  64 => 13,  62 => 12,  59 => 11,  56 => 8,  52 => 7,  48 => 1,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('form', '@SprykerShop:ShopUi') %}

{% define data = {
    shouldRequireMessage: false,
} %}

{% block body %}
    {% block title %}
        {{ parent() }}
    {% endblock %}

    {% if data.enableStart %}
        {{ form_start(data.form, data.options) }}
    {% endif %}

    <div class=\"{{config.name}}__container\">
        {% block errors %}
            {{ parent() }}
        {% endblock %}

        {% block fieldset %}
            {{ parent() }}
        {% endblock %}

        {% block message %}
            {% if data.shouldRequireMessage %}
                <div class=\"{{ config.name }}__require-message\">
                    <small class=\"text-secondary\">{{ 'general.required_fields.text' | trans }}</small>
                </div>
            {% endif %}
        {% endblock %}

        <div class=\"{{config.name}}__actions\">
            {% block actions %}
                {{ parent() }}
            {% endblock %}
        </div>
    </div>

    {% if data.enableEnd %}
        {{ form_end(data.form) }}
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/form/form.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form/form.twig");
    }
}
