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

/* @Customer/Index/index.twig */
class __TwigTemplate_785cb1990e1224ed129ca3c10550606e9950e7cd9f63022b6c03fdea81d73abf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'section_title' => [$this, 'block_section_title'],
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
        $context["widget_title"] = "Customers";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Customer/Index/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })())), "html", null, true);
    }

    // line 7
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 7, $this->source); })())), "html", null, true);
    }

    // line 9
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/customer/add", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Customer")]);
        echo "
    ";
        // line 11
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/customer/download", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download as CSV")]);
        echo "
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
    ";
        // line 16
        $this->loadTemplate("@Customer/Index/index.twig", "@Customer/Index/index.twig", 16, "430561267")->display($context);
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Customer/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  88 => 16,  85 => 15,  81 => 14,  75 => 11,  70 => 10,  66 => 9,  59 => 7,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Customers' %}

{% block head_title widget_title | trans %}

{% block section_title widget_title | trans %}

{% block action %}
    {{ createActionButton('/customer/add', 'Add Customer' | trans) }}
    {{ createActionButton('/customer/download', 'Download as CSV' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ customerTable | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Customer/Index/index.twig", "/data/vendor/spryker/customer/src/Spryker/Zed/Customer/Presentation//Index/index.twig");
    }
}


/* @Customer/Index/index.twig */
class __TwigTemplate_785cb1990e1224ed129ca3c10550606e9950e7cd9f63022b6c03fdea81d73abf___430561267 extends Template
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
        // line 16
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Customer/Index/index.twig", 16);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "
            ";
        // line 20
        echo (isset($context["customerTable"]) || array_key_exists("customerTable", $context) ? $context["customerTable"] : (function () { throw new RuntimeError('Variable "customerTable" does not exist.', 20, $this->source); })());
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@Customer/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 20,  177 => 19,  173 => 18,  162 => 16,  90 => 25,  88 => 16,  85 => 15,  81 => 14,  75 => 11,  70 => 10,  66 => 9,  59 => 7,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Customers' %}

{% block head_title widget_title | trans %}

{% block section_title widget_title | trans %}

{% block action %}
    {{ createActionButton('/customer/add', 'Add Customer' | trans) }}
    {{ createActionButton('/customer/download', 'Download as CSV' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ customerTable | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Customer/Index/index.twig", "/data/vendor/spryker/customer/src/Spryker/Zed/Customer/Presentation//Index/index.twig");
    }
}
