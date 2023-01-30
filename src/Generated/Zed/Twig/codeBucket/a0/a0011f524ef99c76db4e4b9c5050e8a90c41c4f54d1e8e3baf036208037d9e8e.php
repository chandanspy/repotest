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

/* @ContentGui/ListContent/index.twig */
class __TwigTemplate_a4a17b55db4fac3e9575ecb6b646a4e8d58c089b714e18b3448a8f2eb4bdbe35 extends Template
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
        return "@Gui/layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview of Content Items");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/layout/layout.twig", "@ContentGui/ListContent/index.twig", 1);
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
        $context["linksData"] = [];
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["termKeys"]) || array_key_exists("termKeys", $context) ? $context["termKeys"] : (function () { throw new RuntimeError('Variable "termKeys" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["termKey"]) {
            // line 11
            echo "        ";
            $context["linksData"] = twig_array_merge((isset($context["linksData"]) || array_key_exists("linksData", $context) ? $context["linksData"] : (function () { throw new RuntimeError('Variable "linksData" does not exist.', 11, $this->source); })()), [$context["termKey"] => ["url" => ("/content-gui/create-content?term-key=" . $context["termKey"]), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["termKey"])]]);
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['termKey'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    ";
        echo call_user_func_array($this->env->getFunction('groupActionButtons')->getCallable(), [(isset($context["linksData"]) || array_key_exists("linksData", $context) ? $context["linksData"] : (function () { throw new RuntimeError('Variable "linksData" does not exist.', 13, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Content Item")]);
        echo "
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $this->loadTemplate("@ContentGui/ListContent/index.twig", "@ContentGui/ListContent/index.twig", 17, "1412703793")->display($context);
    }

    public function getTemplateName()
    {
        return "@ContentGui/ListContent/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 17,  94 => 16,  87 => 13,  81 => 12,  78 => 11,  73 => 10,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/layout/layout.twig' %}

{% set widget_title = 'Overview of Content Items' | trans %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}
    {% set linksData = {} %}
    {% for termKey in termKeys %}
        {% set linksData = linksData | merge({(termKey): {'url' : '/content-gui/create-content?term-key='~termKey, 'title' : termKey | trans}}) %}
    {% endfor %}
    {{ groupActionButtons(linksData,'Add Content Item' | trans)}}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_title -%}
            <h5>{{ 'List of Content Items' | trans }}</h5>
        {%- endblock %}
        {% block widget_content %}
            {{ contents | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ContentGui/ListContent/index.twig", "/data/vendor/spryker/content-gui/src/Spryker/Zed/ContentGui/Presentation//ListContent/index.twig");
    }
}


/* @ContentGui/ListContent/index.twig */
class __TwigTemplate_a4a17b55db4fac3e9575ecb6b646a4e8d58c089b714e18b3448a8f2eb4bdbe35___1412703793 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ContentGui/ListContent/index.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_widget_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "<h5>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of Content Items"), "html", null, true);
        echo "</h5>";
    }

    // line 21
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "            ";
        echo (isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 22, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@ContentGui/ListContent/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 22,  190 => 21,  184 => 19,  180 => 18,  98 => 17,  94 => 16,  87 => 13,  81 => 12,  78 => 11,  73 => 10,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/layout/layout.twig' %}

{% set widget_title = 'Overview of Content Items' | trans %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}
    {% set linksData = {} %}
    {% for termKey in termKeys %}
        {% set linksData = linksData | merge({(termKey): {'url' : '/content-gui/create-content?term-key='~termKey, 'title' : termKey | trans}}) %}
    {% endfor %}
    {{ groupActionButtons(linksData,'Add Content Item' | trans)}}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_title -%}
            <h5>{{ 'List of Content Items' | trans }}</h5>
        {%- endblock %}
        {% block widget_content %}
            {{ contents | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ContentGui/ListContent/index.twig", "/data/vendor/spryker/content-gui/src/Spryker/Zed/ContentGui/Presentation//ListContent/index.twig");
    }
}
