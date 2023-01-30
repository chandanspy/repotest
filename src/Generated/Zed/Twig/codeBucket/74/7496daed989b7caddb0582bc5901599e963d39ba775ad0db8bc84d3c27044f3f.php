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

/* @ConfigurableBundleGui/Slot/create.twig */
class __TwigTemplate_1874723c3677c08064dd79b861e62e4c77fbe45c93f2cd207bcfa466e3e0f1e7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_title' => [$this, 'block_section_title'],
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
        $context["widget_title"] = "Slot details";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ConfigurableBundleGui/Slot/create.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Slot for") . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configurableBundleTemplate"]) || array_key_exists("configurableBundleTemplate", $context) ? $context["configurableBundleTemplate"] : (function () { throw new RuntimeError('Variable "configurableBundleTemplate" does not exist.', 6, $this->source); })()), "translations", [], "any", false, false, false, 6), 0, [], "array", false, false, false, 6), "name", [], "any", false, false, false, 6)), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 10, $this->source); })())), "html", null, true);
        echo "
";
    }

    // line 13
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/configurable-bundle-gui/template/edit", ["id-configurable-bundle-template" => twig_get_attribute($this->env, $this->source, (isset($context["configurableBundleTemplate"]) || array_key_exists("configurableBundleTemplate", $context) ? $context["configurableBundleTemplate"] : (function () { throw new RuntimeError('Variable "configurableBundleTemplate" does not exist.', 14, $this->source); })()), "idConfigurableBundleTemplate", [], "any", false, false, false, 14)]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back")]);
        echo "
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        $this->loadTemplate("@ConfigurableBundleGui/Slot/create.twig", "@ConfigurableBundleGui/Slot/create.twig", 18, "295401563")->display($context);
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Slot/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  85 => 17,  78 => 14,  74 => 13,  67 => 10,  63 => 9,  56 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Slot details' %}

{% block section_title %}
    {{ 'Create Slot for' | trans ~ ' ' ~ configurableBundleTemplate.translations[0].name }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton(url('/configurable-bundle-gui/template/edit', {'id-configurable-bundle-template' : configurableBundleTemplate.idConfigurableBundleTemplate }),'Back' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_content %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {% set tips %}
                {% include '@ConfigurableBundleGui/Slot/_partials/slot-tips.twig' %}
            {% endset %}

            {{ tabs(tabs, {
                form: form,
                currentLocale: currentLocale,
                tips: tips
            }) }}

            {{ form_end(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ConfigurableBundleGui/Slot/create.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Slot/create.twig");
    }
}


/* @ConfigurableBundleGui/Slot/create.twig */
class __TwigTemplate_1874723c3677c08064dd79b861e62e4c77fbe45c93f2cd207bcfa466e3e0f1e7___295401563 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ConfigurableBundleGui/Slot/create.twig", 18);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

            ";
        // line 22
        ob_start();
        // line 23
        echo "                ";
        $this->loadTemplate("@ConfigurableBundleGui/Slot/_partials/slot-tips.twig", "@ConfigurableBundleGui/Slot/create.twig", 23)->display($context);
        // line 24
        echo "            ";
        $context["tips"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 25
        echo "
            ";
        // line 26
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 26, $this->source); })()), ["form" =>         // line 27
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "currentLocale" =>         // line 28
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 28, $this->source); })()), "tips" =>         // line 29
(isset($context["tips"]) || array_key_exists("tips", $context) ? $context["tips"] : (function () { throw new RuntimeError('Variable "tips" does not exist.', 29, $this->source); })())]]);
        // line 30
        echo "

            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Slot/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 32,  206 => 30,  204 => 29,  203 => 28,  202 => 27,  201 => 26,  198 => 25,  195 => 24,  192 => 23,  190 => 22,  184 => 20,  180 => 19,  89 => 18,  85 => 17,  78 => 14,  74 => 13,  67 => 10,  63 => 9,  56 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Slot details' %}

{% block section_title %}
    {{ 'Create Slot for' | trans ~ ' ' ~ configurableBundleTemplate.translations[0].name }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton(url('/configurable-bundle-gui/template/edit', {'id-configurable-bundle-template' : configurableBundleTemplate.idConfigurableBundleTemplate }),'Back' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_content %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {% set tips %}
                {% include '@ConfigurableBundleGui/Slot/_partials/slot-tips.twig' %}
            {% endset %}

            {{ tabs(tabs, {
                form: form,
                currentLocale: currentLocale,
                tips: tips
            }) }}

            {{ form_end(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ConfigurableBundleGui/Slot/create.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Slot/create.twig");
    }
}
