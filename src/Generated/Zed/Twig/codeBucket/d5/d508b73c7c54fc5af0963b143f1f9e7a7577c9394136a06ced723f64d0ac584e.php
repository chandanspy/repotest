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

/* @Storage/Maintenance/index.twig */
class __TwigTemplate_ec2d071efc11659a848d6b4fe6f1393a6a4fa5529799add19bcc778afa252ab3 extends Template
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
        $context["widget_title"] = "Storage overview";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Storage/Maintenance/index.twig", 1);
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
        echo "    ";
        $this->loadTemplate("@Storage/Maintenance/index.twig", "@Storage/Maintenance/index.twig", 8, "1838079569")->display($context);
    }

    public function getTemplateName()
    {
        return "@Storage/Maintenance/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  57 => 7,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Storage overview' %}

{% block head_title widget_title | trans %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_content %}
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <dl class=\"row\">
                        <dt class=\"col-xs-3\">{{ \"Number of entries:\" | trans }}</dt>
                        <dd class=\"col-xs-9\"><a href=\"/storage/maintenance/list\">{{ totalCount }}</a></dd>
                    </dl>
                </div>
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@Storage/Maintenance/index.twig", "/data/vendor/spryker/storage/src/Spryker/Zed/Storage/Presentation/Maintenance/index.twig");
    }
}


/* @Storage/Maintenance/index.twig */
class __TwigTemplate_ec2d071efc11659a848d6b4fe6f1393a6a4fa5529799add19bcc778afa252ab3___1838079569 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Storage/Maintenance/index.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            <div class=\"row\">
                <div class=\"col-md-12\">
                    <dl class=\"row\">
                        <dt class=\"col-xs-3\">";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Number of entries:"), "html", null, true);
        echo "</dt>
                        <dd class=\"col-xs-9\"><a href=\"/storage/maintenance/list\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["totalCount"]) || array_key_exists("totalCount", $context) ? $context["totalCount"] : (function () { throw new RuntimeError('Variable "totalCount" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</a></dd>
                    </dl>
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@Storage/Maintenance/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 14,  146 => 13,  141 => 10,  137 => 9,  61 => 8,  57 => 7,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Storage overview' %}

{% block head_title widget_title | trans %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_content %}
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <dl class=\"row\">
                        <dt class=\"col-xs-3\">{{ \"Number of entries:\" | trans }}</dt>
                        <dd class=\"col-xs-9\"><a href=\"/storage/maintenance/list\">{{ totalCount }}</a></dd>
                    </dl>
                </div>
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@Storage/Maintenance/index.twig", "/data/vendor/spryker/storage/src/Spryker/Zed/Storage/Presentation/Maintenance/index.twig");
    }
}
