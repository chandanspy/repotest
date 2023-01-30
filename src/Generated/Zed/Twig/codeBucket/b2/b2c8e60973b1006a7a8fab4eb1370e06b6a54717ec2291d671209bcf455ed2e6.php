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

/* @StoreGui/List/index.twig */
class __TwigTemplate_c5dac8cc990b80c91832cd447722081ab1f15b5f754095d15616437a03b54b25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_title' => [$this, 'block_section_title'],
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
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@StoreGui/List/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage Stores"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("@StoreGui/List/index.twig", "@StoreGui/List/index.twig", 7, "1140466741")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stores")]));
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "@StoreGui/List/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block section_title %}{{ 'Manage Stores' | trans }}{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Stores' | trans } %}

        {% block widget_content %}
            {{ storeTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@StoreGui/List/index.twig", "/data/vendor/spryker/store-gui/src/Spryker/Zed/StoreGui/Presentation/List/index.twig");
    }
}


/* @StoreGui/List/index.twig */
class __TwigTemplate_c5dac8cc990b80c91832cd447722081ab1f15b5f754095d15616437a03b54b25___1140466741 extends Template
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
        // line 7
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@StoreGui/List/index.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            ";
        echo (isset($context["storeTable"]) || array_key_exists("storeTable", $context) ? $context["storeTable"] : (function () { throw new RuntimeError('Variable "storeTable" does not exist.', 10, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@StoreGui/List/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 10,  135 => 9,  124 => 7,  63 => 14,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block section_title %}{{ 'Manage Stores' | trans }}{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Stores' | trans } %}

        {% block widget_content %}
            {{ storeTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@StoreGui/List/index.twig", "/data/vendor/spryker/store-gui/src/Spryker/Zed/StoreGui/Presentation/List/index.twig");
    }
}
