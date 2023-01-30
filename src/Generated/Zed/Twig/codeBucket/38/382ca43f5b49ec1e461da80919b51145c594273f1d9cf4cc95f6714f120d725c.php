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

/* @ProductListGui/Index/index.twig */
class __TwigTemplate_9a8f35131cb3a3ceb9c4651afcc2170119c413f721d2ae94344178bb51194e45 extends Template
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
        $context["widget_title"] = "Overview of Product lists";
        // line 4
        $context["widget_subtitle"] = "List of Product lists";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductListGui/Index/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
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
        $this->displayParentBlock("action", $context, $blocks);
        echo "
    ";
        // line 10
        $this->loadTemplate("@ProductListGui/_partials/button-collection.twig", "@ProductListGui/Index/index.twig", 10)->display(twig_to_array(["buttonCollection" =>         // line 11
(isset($context["topButtons"]) || array_key_exists("topButtons", $context) ? $context["topButtons"] : (function () { throw new RuntimeError('Variable "topButtons" does not exist.', 11, $this->source); })())]));
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
    ";
        // line 17
        $this->loadTemplate("@ProductListGui/Index/index.twig", "@ProductListGui/Index/index.twig", 17, "1945821540")->display($context);
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductListGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  81 => 17,  78 => 16,  74 => 15,  70 => 11,  69 => 10,  64 => 9,  60 => 8,  53 => 6,  48 => 1,  46 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Overview of Product lists' %}
{% set widget_subtitle = 'List of Product lists' %}

{% block section_title widget_title | trans %}

{% block action %}
    {{ parent() }}
    {% include '@ProductListGui/_partials/button-collection.twig' with {
        buttonCollection: topButtons
    } only %}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_title -%}

            <h5>{{ widget_subtitle | trans }}</h5>

        {%- endblock %}

        {% block widget_content %}

            {{ productListTable | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@ProductListGui/Index/index.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//Index/index.twig");
    }
}


/* @ProductListGui/Index/index.twig */
class __TwigTemplate_9a8f35131cb3a3ceb9c4651afcc2170119c413f721d2ae94344178bb51194e45___1945821540 extends Template
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
        // line 17
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductListGui/Index/index.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_widget_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<h5>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_subtitle"]) || array_key_exists("widget_subtitle", $context) ? $context["widget_subtitle"] : (function () { throw new RuntimeError('Variable "widget_subtitle" does not exist.', 21, $this->source); })())), "html", null, true);
        echo "</h5>";
    }

    // line 25
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
            ";
        // line 27
        echo (isset($context["productListTable"]) || array_key_exists("productListTable", $context) ? $context["productListTable"] : (function () { throw new RuntimeError('Variable "productListTable" does not exist.', 27, $this->source); })());
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@ProductListGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 27,  188 => 26,  184 => 25,  178 => 21,  174 => 19,  163 => 17,  83 => 32,  81 => 17,  78 => 16,  74 => 15,  70 => 11,  69 => 10,  64 => 9,  60 => 8,  53 => 6,  48 => 1,  46 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Overview of Product lists' %}
{% set widget_subtitle = 'List of Product lists' %}

{% block section_title widget_title | trans %}

{% block action %}
    {{ parent() }}
    {% include '@ProductListGui/_partials/button-collection.twig' with {
        buttonCollection: topButtons
    } only %}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_title -%}

            <h5>{{ widget_subtitle | trans }}</h5>

        {%- endblock %}

        {% block widget_content %}

            {{ productListTable | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@ProductListGui/Index/index.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//Index/index.twig");
    }
}
