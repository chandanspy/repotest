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

/* @Storage/Maintenance/list.twig */
class __TwigTemplate_5f9c97998e73a9249496e3d3eb729f475590a853bc8232545570770f96cfc723 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
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
        $context["widget_title"] = "Storage keys";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Storage/Maintenance/list.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })())), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("@Storage/Maintenance/list.twig", "@Storage/Maintenance/list.twig", 9, "896834722")->display($context);
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Storage/Maintenance/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  64 => 9,  61 => 8,  57 => 7,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Storage keys' %}

{% block head_title widget_title | trans %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ table | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Storage/Maintenance/list.twig", "/data/vendor/spryker/storage/src/Spryker/Zed/Storage/Presentation/Maintenance/list.twig");
    }
}


/* @Storage/Maintenance/list.twig */
class __TwigTemplate_5f9c97998e73a9249496e3d3eb729f475590a853bc8232545570770f96cfc723___896834722 extends Template
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
        // line 9
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Storage/Maintenance/list.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
            ";
        // line 13
        echo (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 13, $this->source); })());
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@Storage/Maintenance/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 13,  146 => 12,  142 => 11,  131 => 9,  66 => 18,  64 => 9,  61 => 8,  57 => 7,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Storage keys' %}

{% block head_title widget_title | trans %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ table | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Storage/Maintenance/list.twig", "/data/vendor/spryker/storage/src/Spryker/Zed/Storage/Presentation/Maintenance/list.twig");
    }
}
