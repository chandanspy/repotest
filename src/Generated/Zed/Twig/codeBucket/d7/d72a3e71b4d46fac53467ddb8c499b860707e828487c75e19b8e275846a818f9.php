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

/* @CompanyUserGui/ListCompanyUser/index.twig */
class __TwigTemplate_1b077c9aec6dc6c9d0999fe7a8bb3374ebf60357708bb66795473aef76dbd76d extends Template
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
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview of Company Users");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@CompanyUserGui/ListCompanyUser/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })()), "html", null, true);
    }

    // line 6
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 6, $this->source); })()), "html", null, true);
    }

    // line 8
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/company-user-gui/create-company-user", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add User")]);
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $this->loadTemplate("@CompanyUserGui/ListCompanyUser/index.twig", "@CompanyUserGui/ListCompanyUser/index.twig", 13, "1168330005")->display($context);
    }

    public function getTemplateName()
    {
        return "@CompanyUserGui/ListCompanyUser/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 13,  77 => 12,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Overview of Company Users' | trans %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}
    {{ createActionButton('/company-user-gui/create-company-user', 'Add User' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_title -%}
            <h5>{{ 'List of Company Users' | trans}}</h5>
        {%- endblock %}
        {% block widget_content %}
            {{ companyUserTable | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CompanyUserGui/ListCompanyUser/index.twig", "/data/vendor/spryker/company-user-gui/src/Spryker/Zed/CompanyUserGui/Presentation/ListCompanyUser/index.twig");
    }
}


/* @CompanyUserGui/ListCompanyUser/index.twig */
class __TwigTemplate_1b077c9aec6dc6c9d0999fe7a8bb3374ebf60357708bb66795473aef76dbd76d___1168330005 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_title' => [$this, 'block_widget_title'],
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CompanyUserGui/ListCompanyUser/index.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_widget_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<h5>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of Company Users"), "html", null, true);
        echo "</h5>";
    }

    // line 17
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        echo (isset($context["companyUserTable"]) || array_key_exists("companyUserTable", $context) ? $context["companyUserTable"] : (function () { throw new RuntimeError('Variable "companyUserTable" does not exist.', 18, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@CompanyUserGui/ListCompanyUser/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 18,  169 => 17,  163 => 15,  159 => 14,  81 => 13,  77 => 12,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Overview of Company Users' | trans %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}
    {{ createActionButton('/company-user-gui/create-company-user', 'Add User' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_title -%}
            <h5>{{ 'List of Company Users' | trans}}</h5>
        {%- endblock %}
        {% block widget_content %}
            {{ companyUserTable | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CompanyUserGui/ListCompanyUser/index.twig", "/data/vendor/spryker/company-user-gui/src/Spryker/Zed/CompanyUserGui/Presentation/ListCompanyUser/index.twig");
    }
}
