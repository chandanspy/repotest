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

/* @CustomerGroup/View/index.twig */
class __TwigTemplate_2b9aa2ed665337506d84f0f9bca690a7dbbd6ee4994eb5fe70fed5be034643a4 extends Template
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
        $context["widget_title"] = "View customer group";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@CustomerGroup/View/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })())), "html", null, true);
    }

    // line 6
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 6, $this->source); })())), "html", null, true);
    }

    // line 8
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/customer-group", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List Customer Groups")]);
        echo "
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('editActionButton')->getCallable(), [("/customer-group/edit?id-customer-group=" . (isset($context["idCustomerGroup"]) || array_key_exists("idCustomerGroup", $context) ? $context["idCustomerGroup"] : (function () { throw new RuntimeError('Variable "idCustomerGroup" does not exist.', 10, $this->source); })())), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Customer Group")]);
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
        $this->loadTemplate("@CustomerGroup/View/index.twig", "@CustomerGroup/View/index.twig", 15, "1074454218")->display($context);
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CustomerGroup/View/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 38,  88 => 15,  85 => 14,  81 => 13,  75 => 10,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'View customer group' %}

{% block head_title widget_title | trans %}
{% block section_title widget_title | trans %}

{% block action %}
    {{ backActionButton('/customer-group', 'List Customer Groups' | trans) }}
    {{ editActionButton('/customer-group/edit?id-customer-group=' ~ idCustomerGroup, 'Edit Customer Group' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

    <div>
        <h1>{{ customerGroup.name }}</h1>

        <table class=\"table\">
            <thead></thead>
            <tbody>
            <tr>
                <th>{{ 'Description' | trans }}</th>
                <td>{{ customerGroup.description }}</td>
            </tr>
            </tbody>
        </table>

        {{ customerTable | raw }}
    </div>

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@CustomerGroup/View/index.twig", "/data/vendor/spryker/customer-group/src/Spryker/Zed/CustomerGroup/Presentation/View/index.twig");
    }
}


/* @CustomerGroup/View/index.twig */
class __TwigTemplate_2b9aa2ed665337506d84f0f9bca690a7dbbd6ee4994eb5fe70fed5be034643a4___1074454218 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CustomerGroup/View/index.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
    <div>
        <h1>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customerGroup"]) || array_key_exists("customerGroup", $context) ? $context["customerGroup"] : (function () { throw new RuntimeError('Variable "customerGroup" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</h1>

        <table class=\"table\">
            <thead></thead>
            <tbody>
            <tr>
                <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        echo "</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customerGroup"]) || array_key_exists("customerGroup", $context) ? $context["customerGroup"] : (function () { throw new RuntimeError('Variable "customerGroup" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>

        ";
        // line 32
        echo (isset($context["customerTable"]) || array_key_exists("customerTable", $context) ? $context["customerTable"] : (function () { throw new RuntimeError('Variable "customerTable" does not exist.', 32, $this->source); })());
        echo "
    </div>

        ";
    }

    public function getTemplateName()
    {
        return "@CustomerGroup/View/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 32,  207 => 27,  203 => 26,  194 => 20,  190 => 18,  186 => 17,  175 => 15,  90 => 38,  88 => 15,  85 => 14,  81 => 13,  75 => 10,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'View customer group' %}

{% block head_title widget_title | trans %}
{% block section_title widget_title | trans %}

{% block action %}
    {{ backActionButton('/customer-group', 'List Customer Groups' | trans) }}
    {{ editActionButton('/customer-group/edit?id-customer-group=' ~ idCustomerGroup, 'Edit Customer Group' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

    <div>
        <h1>{{ customerGroup.name }}</h1>

        <table class=\"table\">
            <thead></thead>
            <tbody>
            <tr>
                <th>{{ 'Description' | trans }}</th>
                <td>{{ customerGroup.description }}</td>
            </tr>
            </tbody>
        </table>

        {{ customerTable | raw }}
    </div>

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@CustomerGroup/View/index.twig", "/data/vendor/spryker/customer-group/src/Spryker/Zed/CustomerGroup/Presentation/View/index.twig");
    }
}
