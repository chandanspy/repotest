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

/* @ConfigurableBundleGui/Template/create.twig */
class __TwigTemplate_dbd140ba986a4b83c58e9a693d9820eb4353aecdf8d53c735f4c3e42654361d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_title' => [$this, 'block_section_title'],
            'head_title' => [$this, 'block_head_title'],
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["widget_title"] = "Template details";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ConfigurableBundleGui/Template/create.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Configurable Bundle Template"), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "
";
    }

    // line 13
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/configurable-bundle-gui/template", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Template list")]);
        echo "
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        $this->loadTemplate("@ConfigurableBundleGui/Template/create.twig", "@ConfigurableBundleGui/Template/create.twig", 18, "1141344880")->display($context);
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Template/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  85 => 17,  78 => 14,  74 => 13,  67 => 10,  63 => 9,  56 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Template details' %}

{% block section_title %}
    {{ 'Create Configurable Bundle Template' | trans }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/configurable-bundle-gui/template', 'Back to Template list' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_content %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {% set tips = 'At first create Configurable bundle Template, after that you will be redirected to the page where you can create slots, and define products per each of them.' | trans %}

            {{ tabs(tabs, {
                form: form,
                currentLocale: currentLocale,
                tips: tips
            }) }}

            {{ form_end(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ConfigurableBundleGui/Template/create.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Template/create.twig");
    }
}


/* @ConfigurableBundleGui/Template/create.twig */
class __TwigTemplate_dbd140ba986a4b83c58e9a693d9820eb4353aecdf8d53c735f4c3e42654361d3___1141344880 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ConfigurableBundleGui/Template/create.twig", 18);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

            ";
        // line 22
        $context["tips"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("At first create Configurable bundle Template, after that you will be redirected to the page where you can create slots, and define products per each of them.");
        // line 23
        echo "
            ";
        // line 24
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 24, $this->source); })()), ["form" =>         // line 25
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "currentLocale" =>         // line 26
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 26, $this->source); })()), "tips" =>         // line 27
(isset($context["tips"]) || array_key_exists("tips", $context) ? $context["tips"] : (function () { throw new RuntimeError('Variable "tips" does not exist.', 27, $this->source); })())]]);
        // line 28
        echo "

            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Template/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 30,  198 => 28,  196 => 27,  195 => 26,  194 => 25,  193 => 24,  190 => 23,  188 => 22,  182 => 20,  178 => 19,  89 => 18,  85 => 17,  78 => 14,  74 => 13,  67 => 10,  63 => 9,  56 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Template details' %}

{% block section_title %}
    {{ 'Create Configurable Bundle Template' | trans }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/configurable-bundle-gui/template', 'Back to Template list' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_content %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {% set tips = 'At first create Configurable bundle Template, after that you will be redirected to the page where you can create slots, and define products per each of them.' | trans %}

            {{ tabs(tabs, {
                form: form,
                currentLocale: currentLocale,
                tips: tips
            }) }}

            {{ form_end(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ConfigurableBundleGui/Template/create.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Template/create.twig");
    }
}
