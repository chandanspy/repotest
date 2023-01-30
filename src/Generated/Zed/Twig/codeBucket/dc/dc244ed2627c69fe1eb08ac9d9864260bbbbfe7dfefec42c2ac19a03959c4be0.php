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

/* @Glossary/Index/index.twig */
class __TwigTemplate_af592d36d333267f53cc71e16f18a784d261645c8c0ede582bf966b56199960f extends Template
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
        $context["widget_title"] = "List of translations";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Glossary/Index/index.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview of Translations"), "html", null, true);
    }

    // line 8
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/glossary/add", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Translation")]);
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("@Glossary/Index/index.twig", "@Glossary/Index/index.twig", 14, "1537576493")->display($context);
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Glossary/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  84 => 14,  81 => 13,  77 => 12,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'List of translations' %}

{% block head_title widget_title %}
{% block section_title 'Overview of Translations' | trans %}

{% block action %}
    {{ createActionButton('/glossary/add', 'Create Translation' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ glossaryTable | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Glossary/Index/index.twig", "/data/vendor/spryker/glossary/src/Spryker/Zed/Glossary/Presentation//Index/index.twig");
    }
}


/* @Glossary/Index/index.twig */
class __TwigTemplate_af592d36d333267f53cc71e16f18a784d261645c8c0ede582bf966b56199960f___1537576493 extends Template
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
        // line 14
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Glossary/Index/index.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
            ";
        // line 18
        echo (isset($context["glossaryTable"]) || array_key_exists("glossaryTable", $context) ? $context["glossaryTable"] : (function () { throw new RuntimeError('Variable "glossaryTable" does not exist.', 18, $this->source); })());
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@Glossary/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 18,  171 => 17,  167 => 16,  156 => 14,  86 => 23,  84 => 14,  81 => 13,  77 => 12,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'List of translations' %}

{% block head_title widget_title %}
{% block section_title 'Overview of Translations' | trans %}

{% block action %}
    {{ createActionButton('/glossary/add', 'Create Translation' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ glossaryTable | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Glossary/Index/index.twig", "/data/vendor/spryker/glossary/src/Spryker/Zed/Glossary/Presentation//Index/index.twig");
    }
}
