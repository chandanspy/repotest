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

/* @ProductRelationGui/List/index.twig */
class __TwigTemplate_3f5cb9a217311174dbc15c6faf0855bb77a1af16da89105a0e5a6421e6a913e3 extends Template
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
            'footer_js' => [$this, 'block_footer_js'],
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
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of Product Relations");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductRelationGui/List/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product Relations"), "html", null, true);
    }

    // line 6
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product Relations"), "html", null, true);
    }

    // line 8
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/product-relation-gui/create/index", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Product Relation")]);
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "   ";
        $this->loadTemplate("@ProductRelationGui/List/index.twig", "@ProductRelationGui/List/index.twig", 13, "953259743")->display($context);
    }

    // line 20
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductRelationGui/List/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 21,  87 => 20,  82 => 13,  78 => 12,  71 => 9,  67 => 8,  60 => 6,  53 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'List of Product Relations' | trans %}

{% block section_title 'Product Relations' | trans %}
{% block head_title 'Product Relations' | trans %}

{% block action %}
    {{ createActionButton('/product-relation-gui/create/index', 'Create Product Relation' | trans) }}
{% endblock %}

{% block content %}
   {% embed '@Gui/Partials/widget.twig' %}
     {% block widget_content %}
         {{ productRelationTable | raw }}
     {% endblock %}
   {% endembed %}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
{% endblock %}
", "@ProductRelationGui/List/index.twig", "/data/vendor/spryker/product-relation-gui/src/Spryker/Zed/ProductRelationGui/Presentation//List/index.twig");
    }
}


/* @ProductRelationGui/List/index.twig */
class __TwigTemplate_3f5cb9a217311174dbc15c6faf0855bb77a1af16da89105a0e5a6421e6a913e3___953259743 extends Template
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
        // line 13
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductRelationGui/List/index.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "         ";
        echo (isset($context["productRelationTable"]) || array_key_exists("productRelationTable", $context) ? $context["productRelationTable"] : (function () { throw new RuntimeError('Variable "productRelationTable" does not exist.', 15, $this->source); })());
        echo "
     ";
    }

    public function getTemplateName()
    {
        return "@ProductRelationGui/List/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 15,  172 => 14,  161 => 13,  91 => 21,  87 => 20,  82 => 13,  78 => 12,  71 => 9,  67 => 8,  60 => 6,  53 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'List of Product Relations' | trans %}

{% block section_title 'Product Relations' | trans %}
{% block head_title 'Product Relations' | trans %}

{% block action %}
    {{ createActionButton('/product-relation-gui/create/index', 'Create Product Relation' | trans) }}
{% endblock %}

{% block content %}
   {% embed '@Gui/Partials/widget.twig' %}
     {% block widget_content %}
         {{ productRelationTable | raw }}
     {% endblock %}
   {% endembed %}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
{% endblock %}
", "@ProductRelationGui/List/index.twig", "/data/vendor/spryker/product-relation-gui/src/Spryker/Zed/ProductRelationGui/Presentation//List/index.twig");
    }
}
