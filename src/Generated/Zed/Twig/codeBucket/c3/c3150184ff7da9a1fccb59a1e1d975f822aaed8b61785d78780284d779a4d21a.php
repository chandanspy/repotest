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

/* @CustomerGroup/Index/index.twig */
class __TwigTemplate_72a959a0e8addfb2e4008e52c6d1ec5ede67d0b830b1911dfb9b4f46e7a2381e extends Template
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
        $context["widget_title"] = "Customer groups";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@CustomerGroup/Index/index.twig", 1);
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
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/customer-group/add", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Customer Group")]);
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
    ";
        // line 15
        $this->loadTemplate("@CustomerGroup/Index/index.twig", "@CustomerGroup/Index/index.twig", 15, "185494918")->display($context);
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CustomerGroup/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  84 => 15,  81 => 14,  77 => 13,  70 => 10,  66 => 9,  59 => 7,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Customer groups' %}

{% block head_title widget_title | trans %}

{% block section_title widget_title | trans %}

{% block action %}
    {{ createActionButton('/customer-group/add', 'Add Customer Group' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ customerGroupTable | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@CustomerGroup/Index/index.twig", "/data/vendor/spryker/customer-group/src/Spryker/Zed/CustomerGroup/Presentation/Index/index.twig");
    }
}


/* @CustomerGroup/Index/index.twig */
class __TwigTemplate_72a959a0e8addfb2e4008e52c6d1ec5ede67d0b830b1911dfb9b4f46e7a2381e___185494918 extends Template
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
        // line 15
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CustomerGroup/Index/index.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
            ";
        // line 19
        echo (isset($context["customerGroupTable"]) || array_key_exists("customerGroupTable", $context) ? $context["customerGroupTable"] : (function () { throw new RuntimeError('Variable "customerGroupTable" does not exist.', 19, $this->source); })());
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@CustomerGroup/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 19,  172 => 18,  168 => 17,  157 => 15,  86 => 24,  84 => 15,  81 => 14,  77 => 13,  70 => 10,  66 => 9,  59 => 7,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Customer groups' %}

{% block head_title widget_title | trans %}

{% block section_title widget_title | trans %}

{% block action %}
    {{ createActionButton('/customer-group/add', 'Add Customer Group' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ customerGroupTable | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@CustomerGroup/Index/index.twig", "/data/vendor/spryker/customer-group/src/Spryker/Zed/CustomerGroup/Presentation/Index/index.twig");
    }
}
