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

/* @Acl/Role/index.twig */
class __TwigTemplate_0f25fae363e64b1e2d3fd40629ca1f5c0fc5594972e807c5402c08f97b3ee83d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $context["widget_title"] = "Role list";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Acl/Role/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })())), "html", null, true);
    }

    // line 7
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/acl/role/create", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new Role")]);
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    ";
        // line 13
        $this->loadTemplate("@Acl/Role/index.twig", "@Acl/Role/index.twig", 13, "201729927")->display($context);
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Acl/Role/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  76 => 13,  73 => 12,  69 => 11,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Role list' %}

{% block head_title widget_title | trans %}

{% block action %}
    {{ createActionButton('/acl/role/create', 'Add new Role' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ roleTable | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}

", "@Acl/Role/index.twig", "/data/vendor/spryker/acl/src/Spryker/Zed/Acl/Presentation/Role/index.twig");
    }
}


/* @Acl/Role/index.twig */
class __TwigTemplate_0f25fae363e64b1e2d3fd40629ca1f5c0fc5594972e807c5402c08f97b3ee83d___201729927 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Acl/Role/index.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
            ";
        // line 17
        echo (isset($context["roleTable"]) || array_key_exists("roleTable", $context) ? $context["roleTable"] : (function () { throw new RuntimeError('Variable "roleTable" does not exist.', 17, $this->source); })());
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@Acl/Role/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 17,  163 => 16,  159 => 15,  148 => 13,  78 => 22,  76 => 13,  73 => 12,  69 => 11,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Role list' %}

{% block head_title widget_title | trans %}

{% block action %}
    {{ createActionButton('/acl/role/create', 'Add new Role' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ roleTable | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}

", "@Acl/Role/index.twig", "/data/vendor/spryker/acl/src/Spryker/Zed/Acl/Presentation/Role/index.twig");
    }
}
