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

/* @ConfigurableBundleGui/Slot/edit.twig */
class __TwigTemplate_615b14ba80f8d31ab990fe1c6f07b3ff96e1208306d530b1fde931251b83c409 extends Template
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
        $context["widget_title"] = "Slot details";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ConfigurableBundleGui/Slot/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, (((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Slot") . ": ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "data", [], "any", false, false, false, 6), "configurableBundleTemplateSlot", [], "any", false, false, false, 6), "idConfigurableBundleTemplateSlot", [], "any", false, false, false, 6)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("for")) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configurableBundleTemplate"]) || array_key_exists("configurableBundleTemplate", $context) ? $context["configurableBundleTemplate"] : (function () { throw new RuntimeError('Variable "configurableBundleTemplate" does not exist.', 6, $this->source); })()), "translations", [], "any", false, false, false, 6), 0, [], "array", false, false, false, 6), "name", [], "any", false, false, false, 6)), "html", null, true);
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
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [(call_user_func_array($this->env->getFunction('url')->getCallable(), ["/configurable-bundle-gui/template/edit", ["id-configurable-bundle-template" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "data", [], "any", false, false, false, 16), "configurableBundleTemplateSlot", [], "any", false, false, false, 16), "fkConfigurableBundleTemplate", [], "any", false, false, false, 16), "id-configurable-bundle-template-slot" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "data", [], "any", false, false, false, 17), "configurableBundleTemplateSlot", [], "any", false, false, false, 17), "idConfigurableBundleTemplateSlot", [], "any", false, false, false, 17)]]) . "#tab-content-slots"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back")]);
        // line 19
        echo "
";
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $this->loadTemplate("@ConfigurableBundleGui/Slot/edit.twig", "@ConfigurableBundleGui/Slot/edit.twig", 23, "128156195")->display($context);
    }

    // line 52
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"/assets/js/spryker-zed-configurable-bundle-template-slot.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Slot/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 53,  98 => 52,  93 => 23,  89 => 22,  84 => 19,  82 => 17,  81 => 16,  79 => 14,  75 => 13,  68 => 10,  64 => 9,  57 => 6,  53 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Slot details' %}

{% block section_title %}
    {{ 'Edit Slot' | trans ~ ': ' ~ form.vars.data.configurableBundleTemplateSlot.idConfigurableBundleTemplateSlot ~ ' ' ~ 'for' | trans ~ ' ' ~ configurableBundleTemplate.translations[0].name }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton(
        url('/configurable-bundle-gui/template/edit', {
            'id-configurable-bundle-template' : form.vars.data.configurableBundleTemplateSlot.fkConfigurableBundleTemplate,
            'id-configurable-bundle-template-slot': form.vars.data.configurableBundleTemplateSlot.idConfigurableBundleTemplateSlot
        }) ~ '#tab-content-slots',
        'Back' | trans) }}
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
                productListCategoryRelationForm: form.productListCategoryRelation,
                productListProductConcreteRelationForm: form.productListProductConcreteRelation,
                availableProductConcreteRelationTabs: availableProductConcreteRelationTabs,
                assignedProductConcreteRelationTabs: assignedProductConcreteRelationTabs,
                availableProductConcreteTable: availableProductConcreteTable,
                assignedProductConcreteTable: assignedProductConcreteTable,
                currentLocale: currentLocale,
                tips: tips
            }) }}

            {{ form_row(form.assignedProductIds, { 'id': 'productListAggregate_assignedProductIds'}) }}
            {{ form_row(form.productIdsToBeAssigned, { 'id': 'productListAggregate_productIdsToBeAssigned'}) }}
            {{ form_row(form.productIdsToBeDeAssigned, { 'id': 'productListAggregate_productIdsToBeDeAssigned'}) }}

            {{ form_end(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"/assets/js/spryker-zed-configurable-bundle-template-slot.js\"></script>
{% endblock %}
", "@ConfigurableBundleGui/Slot/edit.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Slot/edit.twig");
    }
}


/* @ConfigurableBundleGui/Slot/edit.twig */
class __TwigTemplate_615b14ba80f8d31ab990fe1c6f07b3ff96e1208306d530b1fde931251b83c409___128156195 extends Template
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
        // line 23
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ConfigurableBundleGui/Slot/edit.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

            ";
        // line 27
        ob_start();
        // line 28
        echo "                ";
        $this->loadTemplate("@ConfigurableBundleGui/Slot/_partials/slot-tips.twig", "@ConfigurableBundleGui/Slot/edit.twig", 28)->display($context);
        // line 29
        echo "            ";
        $context["tips"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
            ";
        // line 31
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 31, $this->source); })()), ["form" =>         // line 32
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "productListCategoryRelationForm" => twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "productListCategoryRelation", [], "any", false, false, false, 33), "productListProductConcreteRelationForm" => twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "productListProductConcreteRelation", [], "any", false, false, false, 34), "availableProductConcreteRelationTabs" =>         // line 35
(isset($context["availableProductConcreteRelationTabs"]) || array_key_exists("availableProductConcreteRelationTabs", $context) ? $context["availableProductConcreteRelationTabs"] : (function () { throw new RuntimeError('Variable "availableProductConcreteRelationTabs" does not exist.', 35, $this->source); })()), "assignedProductConcreteRelationTabs" =>         // line 36
(isset($context["assignedProductConcreteRelationTabs"]) || array_key_exists("assignedProductConcreteRelationTabs", $context) ? $context["assignedProductConcreteRelationTabs"] : (function () { throw new RuntimeError('Variable "assignedProductConcreteRelationTabs" does not exist.', 36, $this->source); })()), "availableProductConcreteTable" =>         // line 37
(isset($context["availableProductConcreteTable"]) || array_key_exists("availableProductConcreteTable", $context) ? $context["availableProductConcreteTable"] : (function () { throw new RuntimeError('Variable "availableProductConcreteTable" does not exist.', 37, $this->source); })()), "assignedProductConcreteTable" =>         // line 38
(isset($context["assignedProductConcreteTable"]) || array_key_exists("assignedProductConcreteTable", $context) ? $context["assignedProductConcreteTable"] : (function () { throw new RuntimeError('Variable "assignedProductConcreteTable" does not exist.', 38, $this->source); })()), "currentLocale" =>         // line 39
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 39, $this->source); })()), "tips" =>         // line 40
(isset($context["tips"]) || array_key_exists("tips", $context) ? $context["tips"] : (function () { throw new RuntimeError('Variable "tips" does not exist.', 40, $this->source); })())]]);
        // line 41
        echo "

            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "assignedProductIds", [], "any", false, false, false, 43), 'row', ["id" => "productListAggregate_assignedProductIds"]);
        echo "
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "productIdsToBeAssigned", [], "any", false, false, false, 44), 'row', ["id" => "productListAggregate_productIdsToBeAssigned"]);
        echo "
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "productIdsToBeDeAssigned", [], "any", false, false, false, 45), 'row', ["id" => "productListAggregate_productIdsToBeDeAssigned"]);
        echo "

            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Slot/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 47,  261 => 45,  257 => 44,  253 => 43,  249 => 41,  247 => 40,  246 => 39,  245 => 38,  244 => 37,  243 => 36,  242 => 35,  241 => 34,  240 => 33,  239 => 32,  238 => 31,  235 => 30,  232 => 29,  229 => 28,  227 => 27,  221 => 25,  217 => 24,  206 => 23,  102 => 53,  98 => 52,  93 => 23,  89 => 22,  84 => 19,  82 => 17,  81 => 16,  79 => 14,  75 => 13,  68 => 10,  64 => 9,  57 => 6,  53 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Slot details' %}

{% block section_title %}
    {{ 'Edit Slot' | trans ~ ': ' ~ form.vars.data.configurableBundleTemplateSlot.idConfigurableBundleTemplateSlot ~ ' ' ~ 'for' | trans ~ ' ' ~ configurableBundleTemplate.translations[0].name }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton(
        url('/configurable-bundle-gui/template/edit', {
            'id-configurable-bundle-template' : form.vars.data.configurableBundleTemplateSlot.fkConfigurableBundleTemplate,
            'id-configurable-bundle-template-slot': form.vars.data.configurableBundleTemplateSlot.idConfigurableBundleTemplateSlot
        }) ~ '#tab-content-slots',
        'Back' | trans) }}
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
                productListCategoryRelationForm: form.productListCategoryRelation,
                productListProductConcreteRelationForm: form.productListProductConcreteRelation,
                availableProductConcreteRelationTabs: availableProductConcreteRelationTabs,
                assignedProductConcreteRelationTabs: assignedProductConcreteRelationTabs,
                availableProductConcreteTable: availableProductConcreteTable,
                assignedProductConcreteTable: assignedProductConcreteTable,
                currentLocale: currentLocale,
                tips: tips
            }) }}

            {{ form_row(form.assignedProductIds, { 'id': 'productListAggregate_assignedProductIds'}) }}
            {{ form_row(form.productIdsToBeAssigned, { 'id': 'productListAggregate_productIdsToBeAssigned'}) }}
            {{ form_row(form.productIdsToBeDeAssigned, { 'id': 'productListAggregate_productIdsToBeDeAssigned'}) }}

            {{ form_end(form) }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"/assets/js/spryker-zed-configurable-bundle-template-slot.js\"></script>
{% endblock %}
", "@ConfigurableBundleGui/Slot/edit.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Slot/edit.twig");
    }
}
