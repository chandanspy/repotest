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

/* @CustomerAccessGui/Index/index.twig */
class __TwigTemplate_35d178c2a16370ce51790cc015d08a89015f5da867542cb523a6b12f6589154c extends Template
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
        $context["widget_title"] = "Customer Access";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@CustomerAccessGui/Index/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 4, $this->source); })()), "html", null, true);
    }

    // line 5
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })()), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("@CustomerAccessGui/Index/index.twig", "@CustomerAccessGui/Index/index.twig", 9, "477130427")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hide the following information from not logged in users:")]));
    }

    public function getTemplateName()
    {
        return "@CustomerAccessGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  69 => 8,  65 => 7,  58 => 5,  51 => 4,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Customer Access' %}
{% block head_title widget_title %}
{% block section_title widget_title %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Hide the following information from not logged in users:' | trans } %}

        {% block widget_content %}
            {{ form_start(form) }}

            {{ form_label(form.contentTypeAccess) }}
            <div class=\"country-select-box\">
                {{ form_widget(form.contentTypeAccess) }}
                {{ form_errors(form.contentTypeAccess) }}
            </div>

            <div>
                {{ form_widget(form.contentTypeAccessNonManageable) }}
            </div>

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            {{ form_end(form) }}
        {% endblock %}

    {% endembed %}
{% endblock %}
", "@CustomerAccessGui/Index/index.twig", "/data/src/Pyz/Zed/CustomerAccessGui/Presentation/Index/index.twig");
    }
}


/* @CustomerAccessGui/Index/index.twig */
class __TwigTemplate_35d178c2a16370ce51790cc015d08a89015f5da867542cb523a6b12f6589154c___477130427 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CustomerAccessGui/Index/index.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "contentTypeAccess", [], "any", false, false, false, 14), 'label');
        echo "
            <div class=\"country-select-box\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "contentTypeAccess", [], "any", false, false, false, 16), 'widget');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "contentTypeAccess", [], "any", false, false, false, 17), 'errors');
        echo "
            </div>

            <div>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "contentTypeAccessNonManageable", [], "any", false, false, false, 21), 'widget');
        echo "
            </div>

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@CustomerAccessGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 25,  188 => 24,  182 => 21,  175 => 17,  171 => 16,  166 => 14,  160 => 12,  156 => 11,  72 => 9,  69 => 8,  65 => 7,  58 => 5,  51 => 4,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Customer Access' %}
{% block head_title widget_title %}
{% block section_title widget_title %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Hide the following information from not logged in users:' | trans } %}

        {% block widget_content %}
            {{ form_start(form) }}

            {{ form_label(form.contentTypeAccess) }}
            <div class=\"country-select-box\">
                {{ form_widget(form.contentTypeAccess) }}
                {{ form_errors(form.contentTypeAccess) }}
            </div>

            <div>
                {{ form_widget(form.contentTypeAccessNonManageable) }}
            </div>

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            {{ form_end(form) }}
        {% endblock %}

    {% endembed %}
{% endblock %}
", "@CustomerAccessGui/Index/index.twig", "/data/src/Pyz/Zed/CustomerAccessGui/Presentation/Index/index.twig");
    }
}
