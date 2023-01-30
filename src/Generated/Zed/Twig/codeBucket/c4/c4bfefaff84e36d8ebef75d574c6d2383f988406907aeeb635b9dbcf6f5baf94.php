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

/* @ConfigurableBundleGui/Template/index.twig */
class __TwigTemplate_382faa5f7151b5c526c690f3dbbb0f1834509afdc9a35d0ef173f1eff0b95e2e extends Template
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
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configurable Bundle Templates");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ConfigurableBundleGui/Template/index.twig", 1);
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
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/configurable-bundle-gui/template/create", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create New Template")]);
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $this->loadTemplate("@ConfigurableBundleGui/Template/index.twig", "@ConfigurableBundleGui/Template/index.twig", 13, "1310596046")->display($context);
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Template/index.twig";
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

{% set widget_title = 'Configurable Bundle Templates' | trans %}

{% block head_title widget_title | trans %}
{% block section_title widget_title | trans %}

{% block action %}
    {{ createActionButton('/configurable-bundle-gui/template/create', 'Create New Template' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_content %}
            {{ configurableBundleTemplateTable | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ConfigurableBundleGui/Template/index.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Template/index.twig");
    }
}


/* @ConfigurableBundleGui/Template/index.twig */
class __TwigTemplate_382faa5f7151b5c526c690f3dbbb0f1834509afdc9a35d0ef173f1eff0b95e2e___1310596046 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ConfigurableBundleGui/Template/index.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "            ";
        echo (isset($context["configurableBundleTemplateTable"]) || array_key_exists("configurableBundleTemplateTable", $context) ? $context["configurableBundleTemplateTable"] : (function () { throw new RuntimeError('Variable "configurableBundleTemplateTable" does not exist.', 15, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Template/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 15,  155 => 14,  81 => 13,  77 => 12,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Configurable Bundle Templates' | trans %}

{% block head_title widget_title | trans %}
{% block section_title widget_title | trans %}

{% block action %}
    {{ createActionButton('/configurable-bundle-gui/template/create', 'Create New Template' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_content %}
            {{ configurableBundleTemplateTable | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ConfigurableBundleGui/Template/index.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Template/index.twig");
    }
}
