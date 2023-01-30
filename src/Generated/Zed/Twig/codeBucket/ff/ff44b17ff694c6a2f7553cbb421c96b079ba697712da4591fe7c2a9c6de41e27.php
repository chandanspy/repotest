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

/* @StockGui/Warehouse/list.twig */
class __TwigTemplate_f4bc2f302a9d3509f7ec23a429ce30db03c6b40e00e98f14f7d14397ed8dad0a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $context["widget_title"] = "Warehouses";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@StockGui/Warehouse/list.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 4, $this->source); })())), "html", null, true);
    }

    // line 6
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/stock-gui/create-warehouse", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Warehouse")]);
        echo "
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    ";
        // line 12
        $this->loadTemplate("@StockGui/Warehouse/list.twig", "@StockGui/Warehouse/list.twig", 12, "1527323237")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 12, $this->source); })()))]));
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "@StockGui/Warehouse/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  76 => 12,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  51 => 4,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Warehouses' %}
{% block section_title %}{{ widget_title | trans }}{% endblock %}

{% block action %}
    {{ createActionButton('/stock-gui/create-warehouse', 'Create Warehouse' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: widget_title | trans } %}

        {% block widget_content %}
            {{ stockTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@StockGui/Warehouse/list.twig", "/data/vendor/spryker/stock-gui/src/Spryker/Zed/StockGui/Presentation//Warehouse/list.twig");
    }
}


/* @StockGui/Warehouse/list.twig */
class __TwigTemplate_f4bc2f302a9d3509f7ec23a429ce30db03c6b40e00e98f14f7d14397ed8dad0a___1527323237 extends Template
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
        // line 12
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@StockGui/Warehouse/list.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "            ";
        echo (isset($context["stockTable"]) || array_key_exists("stockTable", $context) ? $context["stockTable"] : (function () { throw new RuntimeError('Variable "stockTable" does not exist.', 15, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@StockGui/Warehouse/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 15,  155 => 14,  144 => 12,  78 => 19,  76 => 12,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  51 => 4,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Warehouses' %}
{% block section_title %}{{ widget_title | trans }}{% endblock %}

{% block action %}
    {{ createActionButton('/stock-gui/create-warehouse', 'Create Warehouse' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: widget_title | trans } %}

        {% block widget_content %}
            {{ stockTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@StockGui/Warehouse/list.twig", "/data/vendor/spryker/stock-gui/src/Spryker/Zed/StockGui/Presentation//Warehouse/list.twig");
    }
}
