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

/* @Tax/Rate/list.twig */
class __TwigTemplate_69ea238c1e89cb422753500e05e70c220d69971c8e96be4b8fb25b2e8f592810 extends Template
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
        // line 2
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Tax/Rate/list.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview of Tax Rates"), "html", null, true);
    }

    // line 6
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/tax/rate/create", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Tax Rate")]);
        echo "
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
     ";
        // line 12
        $this->loadTemplate("@Tax/Rate/list.twig", "@Tax/Rate/list.twig", 12, "798447659")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of tax rates")]));
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Tax/Rate/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  73 => 12,  70 => 11,  66 => 10,  59 => 7,  55 => 6,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Gui/Layout/layout.twig' %}

{% block section_title 'Overview of Tax Rates' | trans %}

{% block action %}
    {{ createActionButton('/tax/rate/create', 'Create Tax Rate' | trans) }}
{% endblock %}

{% block content %}

     {% embed '@Gui/Partials/widget.twig' with { widget_title: 'List of tax rates' | trans } %}

        {% block widget_content %}
            {{ taxRateTable | raw }}
        {% endblock %}

     {% endembed %}

{% endblock %}
", "@Tax/Rate/list.twig", "/data/vendor/spryker/tax/src/Spryker/Zed/Tax/Presentation/Rate/list.twig");
    }
}


/* @Tax/Rate/list.twig */
class __TwigTemplate_69ea238c1e89cb422753500e05e70c220d69971c8e96be4b8fb25b2e8f592810___798447659 extends Template
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
        // line 12
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Tax/Rate/list.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "            ";
        echo (isset($context["taxRateTable"]) || array_key_exists("taxRateTable", $context) ? $context["taxRateTable"] : (function () { throw new RuntimeError('Variable "taxRateTable" does not exist.', 15, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@Tax/Rate/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 15,  152 => 14,  141 => 12,  75 => 19,  73 => 12,  70 => 11,  66 => 10,  59 => 7,  55 => 6,  48 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Gui/Layout/layout.twig' %}

{% block section_title 'Overview of Tax Rates' | trans %}

{% block action %}
    {{ createActionButton('/tax/rate/create', 'Create Tax Rate' | trans) }}
{% endblock %}

{% block content %}

     {% embed '@Gui/Partials/widget.twig' with { widget_title: 'List of tax rates' | trans } %}

        {% block widget_content %}
            {{ taxRateTable | raw }}
        {% endblock %}

     {% endembed %}

{% endblock %}
", "@Tax/Rate/list.twig", "/data/vendor/spryker/tax/src/Spryker/Zed/Tax/Presentation/Rate/list.twig");
    }
}
