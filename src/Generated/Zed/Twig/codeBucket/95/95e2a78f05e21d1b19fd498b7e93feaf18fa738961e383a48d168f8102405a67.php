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

/* @CompanyUnitAddressGui/ListCompanyUnitAddress/index.twig */
class __TwigTemplate_95a4bcb85da162cbf5765875d8cb463f1f8031a1985c4bb1087b1c60bab8b699 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@CompanyUnitAddressGui/_layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview of Company Unit Addresses");
        // line 1
        $this->parent = $this->loadTemplate("@CompanyUnitAddressGui/_layout/layout.twig", "@CompanyUnitAddressGui/ListCompanyUnitAddress/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/company-unit-address-gui/add-company-unit-address", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Company Unit Address")]);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("@CompanyUnitAddressGui/ListCompanyUnitAddress/index.twig", "@CompanyUnitAddressGui/ListCompanyUnitAddress/index.twig", 10, "1658358392")->display($context);
    }

    public function getTemplateName()
    {
        return "@CompanyUnitAddressGui/ListCompanyUnitAddress/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  61 => 9,  54 => 6,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@CompanyUnitAddressGui/_layout/layout.twig' %}

{% set widget_title = 'Overview of Company Unit Addresses' | trans %}

{% block action %}
    {{ createActionButton('/company-unit-address-gui/add-company-unit-address', 'Create Company Unit Address' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_title -%}
            <h5>{{ 'List of Company Unit Addresses' | trans }}</h5>
        {%- endblock %}

        {% block widget_content %}
            {{ addresses | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CompanyUnitAddressGui/ListCompanyUnitAddress/index.twig", "/data/vendor/spryker/company-unit-address-gui/src/Spryker/Zed/CompanyUnitAddressGui/Presentation//ListCompanyUnitAddress/index.twig");
    }
}


/* @CompanyUnitAddressGui/ListCompanyUnitAddress/index.twig */
class __TwigTemplate_95a4bcb85da162cbf5765875d8cb463f1f8031a1985c4bb1087b1c60bab8b699___1658358392 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CompanyUnitAddressGui/ListCompanyUnitAddress/index.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_widget_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<h5>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of Company Unit Addresses"), "html", null, true);
        echo "</h5>";
    }

    // line 15
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "            ";
        echo (isset($context["addresses"]) || array_key_exists("addresses", $context) ? $context["addresses"] : (function () { throw new RuntimeError('Variable "addresses" does not exist.', 16, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@CompanyUnitAddressGui/ListCompanyUnitAddress/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 16,  151 => 15,  145 => 12,  141 => 11,  65 => 10,  61 => 9,  54 => 6,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@CompanyUnitAddressGui/_layout/layout.twig' %}

{% set widget_title = 'Overview of Company Unit Addresses' | trans %}

{% block action %}
    {{ createActionButton('/company-unit-address-gui/add-company-unit-address', 'Create Company Unit Address' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_title -%}
            <h5>{{ 'List of Company Unit Addresses' | trans }}</h5>
        {%- endblock %}

        {% block widget_content %}
            {{ addresses | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CompanyUnitAddressGui/ListCompanyUnitAddress/index.twig", "/data/vendor/spryker/company-unit-address-gui/src/Spryker/Zed/CompanyUnitAddressGui/Presentation//ListCompanyUnitAddress/index.twig");
    }
}
