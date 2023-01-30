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

/* @Tax/Set/list.twig */
class __TwigTemplate_6c50c91b8d9c52aea84a295b8c766735589c5842cc08e478428b65f54236d3e7 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Tax/Set/list.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview of Tax Sets"), "html", null, true);
    }

    // line 6
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/tax/set/create", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Tax Set")]);
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
        $this->loadTemplate("@Tax/Set/list.twig", "@Tax/Set/list.twig", 12, "561087462")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of tax sets")]));
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Tax/Set/list.twig";
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

{% block section_title 'Overview of Tax Sets' | trans %}

{% block action %}
    {{ createActionButton('/tax/set/create', 'Create Tax Set' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'List of tax sets' | trans } %}

        {% block widget_content %}
            {{ taxSetTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Tax/Set/list.twig", "/data/vendor/spryker/tax/src/Spryker/Zed/Tax/Presentation/Set/list.twig");
    }
}


/* @Tax/Set/list.twig */
class __TwigTemplate_6c50c91b8d9c52aea84a295b8c766735589c5842cc08e478428b65f54236d3e7___561087462 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Tax/Set/list.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "            ";
        echo (isset($context["taxSetTable"]) || array_key_exists("taxSetTable", $context) ? $context["taxSetTable"] : (function () { throw new RuntimeError('Variable "taxSetTable" does not exist.', 15, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@Tax/Set/list.twig";
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

{% block section_title 'Overview of Tax Sets' | trans %}

{% block action %}
    {{ createActionButton('/tax/set/create', 'Create Tax Set' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'List of tax sets' | trans } %}

        {% block widget_content %}
            {{ taxSetTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Tax/Set/list.twig", "/data/vendor/spryker/tax/src/Spryker/Zed/Tax/Presentation/Set/list.twig");
    }
}
