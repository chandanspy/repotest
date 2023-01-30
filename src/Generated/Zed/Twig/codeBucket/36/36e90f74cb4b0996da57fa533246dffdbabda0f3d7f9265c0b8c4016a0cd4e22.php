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

/* @ConfigurableBundleGui/Template/edit.twig */
class __TwigTemplate_3cb85ec5ec7c1d7b05cdefd9fcbd2a9834b3ff0ec5b2eabdad1e9d39bcc386f5 extends Template
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
            'footer_js' => [$this, 'block_footer_js'],
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
        $context["widget_title"] = "Template details";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ConfigurableBundleGui/Template/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Configurable Bundle Template") . ": ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "data", [], "any", false, false, false, 6), "idConfigurableBundleTemplate", [], "any", false, false, false, 6)), "html", null, true);
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
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/configurable-bundle-gui/template", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Template list")]);
        echo "
    ";
        // line 15
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/configurable-bundle-gui/slot/create", ["id-configurable-bundle-template" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "vars", [], "any", false, false, false, 15), "data", [], "any", false, false, false, 15), "idConfigurableBundleTemplate", [], "any", false, false, false, 15)]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Slot")]);
        echo "
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->loadTemplate("@ConfigurableBundleGui/Template/edit.twig", "@ConfigurableBundleGui/Template/edit.twig", 19, "1409510552")->display($context);
    }

    // line 40
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"/assets/js/spryker-zed-configurable-bundle-template.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Template/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  99 => 40,  94 => 19,  90 => 18,  84 => 15,  79 => 14,  75 => 13,  68 => 10,  64 => 9,  57 => 6,  53 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Template details' %}

{% block section_title %}
    {{ 'Edit Configurable Bundle Template' | trans ~ ': ' ~ form.vars.data.idConfigurableBundleTemplate }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/configurable-bundle-gui/template', 'Back to Template list' | trans) }}
    {{ createActionButton(url('/configurable-bundle-gui/slot/create', {'id-configurable-bundle-template' : form.vars.data.idConfigurableBundleTemplate }), 'Add Slot' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_content %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {% set tips = 'You can change name and define locals on this page.' | trans %}

            {{ tabs(tabs, {
                form: form,
                currentLocale: currentLocale,
                slotTable: slotTable,
                slotProductsTable: slotProductsTable,
                tips: tips
            }) }}

            {{ form_end(form) }}

            <input type=\"hidden\" id=\"selected-id-configurable-bundle-template-slot\" value=\"{{ idConfigurableBundleTemplateSlot }}\">
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"/assets/js/spryker-zed-configurable-bundle-template.js\"></script>
{% endblock %}
", "@ConfigurableBundleGui/Template/edit.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Template/edit.twig");
    }
}


/* @ConfigurableBundleGui/Template/edit.twig */
class __TwigTemplate_3cb85ec5ec7c1d7b05cdefd9fcbd2a9834b3ff0ec5b2eabdad1e9d39bcc386f5___1409510552 extends Template
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
        // line 19
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ConfigurableBundleGui/Template/edit.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

            ";
        // line 23
        $context["tips"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can change name and define locals on this page.");
        // line 24
        echo "
            ";
        // line 25
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 25, $this->source); })()), ["form" =>         // line 26
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "currentLocale" =>         // line 27
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 27, $this->source); })()), "slotTable" =>         // line 28
(isset($context["slotTable"]) || array_key_exists("slotTable", $context) ? $context["slotTable"] : (function () { throw new RuntimeError('Variable "slotTable" does not exist.', 28, $this->source); })()), "slotProductsTable" =>         // line 29
(isset($context["slotProductsTable"]) || array_key_exists("slotProductsTable", $context) ? $context["slotProductsTable"] : (function () { throw new RuntimeError('Variable "slotProductsTable" does not exist.', 29, $this->source); })()), "tips" =>         // line 30
(isset($context["tips"]) || array_key_exists("tips", $context) ? $context["tips"] : (function () { throw new RuntimeError('Variable "tips" does not exist.', 30, $this->source); })())]]);
        // line 31
        echo "

            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end');
        echo "

            <input type=\"hidden\" id=\"selected-id-configurable-bundle-template-slot\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["idConfigurableBundleTemplateSlot"]) || array_key_exists("idConfigurableBundleTemplateSlot", $context) ? $context["idConfigurableBundleTemplateSlot"] : (function () { throw new RuntimeError('Variable "idConfigurableBundleTemplateSlot" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\">
        ";
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Template/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 35,  232 => 33,  228 => 31,  226 => 30,  225 => 29,  224 => 28,  223 => 27,  222 => 26,  221 => 25,  218 => 24,  216 => 23,  210 => 21,  206 => 20,  195 => 19,  103 => 41,  99 => 40,  94 => 19,  90 => 18,  84 => 15,  79 => 14,  75 => 13,  68 => 10,  64 => 9,  57 => 6,  53 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Template details' %}

{% block section_title %}
    {{ 'Edit Configurable Bundle Template' | trans ~ ': ' ~ form.vars.data.idConfigurableBundleTemplate }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/configurable-bundle-gui/template', 'Back to Template list' | trans) }}
    {{ createActionButton(url('/configurable-bundle-gui/slot/create', {'id-configurable-bundle-template' : form.vars.data.idConfigurableBundleTemplate }), 'Add Slot' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_content %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {% set tips = 'You can change name and define locals on this page.' | trans %}

            {{ tabs(tabs, {
                form: form,
                currentLocale: currentLocale,
                slotTable: slotTable,
                slotProductsTable: slotProductsTable,
                tips: tips
            }) }}

            {{ form_end(form) }}

            <input type=\"hidden\" id=\"selected-id-configurable-bundle-template-slot\" value=\"{{ idConfigurableBundleTemplateSlot }}\">
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"/assets/js/spryker-zed-configurable-bundle-template.js\"></script>
{% endblock %}
", "@ConfigurableBundleGui/Template/edit.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Template/edit.twig");
    }
}
