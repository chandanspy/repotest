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

/* @ProductManagement/Edit/index.twig */
class __TwigTemplate_69026321dc359246e97a6e1e57179ebeee96c5ae29725f399f6f586198e7a473 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
            'footer_js' => [$this, 'block_footer_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ProductManagement/Add/index.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["submit_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save");
        // line 3
        $context["widget_title"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Product Abstract") . ": ") . twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 3, $this->source); })()), "sku", [], "any", false, false, false, 3));
        // line 4
        $context["variant_tpl"] = "@ProductManagement/Product/_partials/variant-tab-editing.twig";
        // line 1
        $this->parent = $this->loadTemplate("@ProductManagement/Add/index.twig", "@ProductManagement/Edit/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 7, $this->source); })()), "html", null, true);
    }

    // line 10
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $this->displayParentBlock("action", $context, $blocks);
        echo "
    ";
        // line 12
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/product-management/add", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Product")]);
        echo "
    ";
        // line 13
        if ((1 === twig_compare((isset($context["superAttributesCount"]) || array_key_exists("superAttributesCount", $context) ? $context["superAttributesCount"] : (function () { throw new RuntimeError('Variable "superAttributesCount" does not exist.', 13, $this->source); })()), 0))) {
            // line 14
            echo "        ";
            echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), [("/product-management/add-variant?id-product-abstract=" . (isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 14, $this->source); })())), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Variant")]);
            echo "
    ";
        }
        // line 16
        echo "    ";
        echo call_user_func_array($this->env->getFunction('editActionButton')->getCallable(), [("/product-attribute-gui/view/product-abstract?id-product-abstract=" . (isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 16, $this->source); })())), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage Attributes")]);
        echo "
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 18
            echo "        ";
            echo $context["action"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["class" => "kv_autocomplete_form"]]);
        echo "

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'errors');
        echo "

        ";
        // line 28
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["productFormEditTabs"]) || array_key_exists("productFormEditTabs", $context) ? $context["productFormEditTabs"] : (function () { throw new RuntimeError('Variable "productFormEditTabs" does not exist.', 28, $this->source); })()), ["form" =>         // line 29
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "currentLocale" =>         // line 30
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 30, $this->source); })()), "concreteProductCollection" =>         // line 31
(isset($context["concreteProductCollection"]) || array_key_exists("concreteProductCollection", $context) ? $context["concreteProductCollection"] : (function () { throw new RuntimeError('Variable "concreteProductCollection" does not exist.', 31, $this->source); })()), "localeCollection" =>         // line 32
(isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 32, $this->source); })()), "attributeLocaleCollection" =>         // line 33
(isset($context["attributeLocaleCollection"]) || array_key_exists("attributeLocaleCollection", $context) ? $context["attributeLocaleCollection"] : (function () { throw new RuntimeError('Variable "attributeLocaleCollection" does not exist.', 33, $this->source); })()), "submit_title" =>         // line 34
(isset($context["submit_title"]) || array_key_exists("submit_title", $context) ? $context["submit_title"] : (function () { throw new RuntimeError('Variable "submit_title" does not exist.', 34, $this->source); })()), "currentProduct" =>         // line 35
(isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 35, $this->source); })()), "variantTable" =>         // line 36
(isset($context["variantTable"]) || array_key_exists("variantTable", $context) ? $context["variantTable"] : (function () { throw new RuntimeError('Variable "variantTable" does not exist.', 36, $this->source); })()), "idProduct" => null, "idProductAbstract" =>         // line 38
(isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 38, $this->source); })()), "priceDimension" =>         // line 39
(isset($context["priceDimension"]) || array_key_exists("priceDimension", $context) ? $context["priceDimension"] : (function () { throw new RuntimeError('Variable "priceDimension" does not exist.', 39, $this->source); })()), "priceTypeTabs" => ((        // line 40
array_key_exists("priceTypeTabs", $context)) ? (_twig_default_filter((isset($context["priceTypeTabs"]) || array_key_exists("priceTypeTabs", $context) ? $context["priceTypeTabs"] : (function () { throw new RuntimeError('Variable "priceTypeTabs" does not exist.', 40, $this->source); })()), null)) : (null)), "tablesByPriceType" => ((        // line 41
array_key_exists("tablesByPriceType", $context)) ? (_twig_default_filter((isset($context["tablesByPriceType"]) || array_key_exists("tablesByPriceType", $context) ? $context["tablesByPriceType"] : (function () { throw new RuntimeError('Variable "tablesByPriceType" does not exist.', 41, $this->source); })()), [])) : ([])), "merchant" => ((        // line 42
array_key_exists("merchant", $context)) ? (_twig_default_filter((isset($context["merchant"]) || array_key_exists("merchant", $context) ? $context["merchant"] : (function () { throw new RuntimeError('Variable "merchant" does not exist.', 42, $this->source); })()))) : (""))]]);
        // line 43
        echo "

    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "

";
    }

    // line 49
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 51
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-productmanagement-edit.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Edit/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 51,  152 => 50,  148 => 49,  141 => 45,  137 => 43,  135 => 42,  134 => 41,  133 => 40,  132 => 39,  131 => 38,  130 => 36,  129 => 35,  128 => 34,  127 => 33,  126 => 32,  125 => 31,  124 => 30,  123 => 29,  122 => 28,  117 => 26,  112 => 24,  109 => 23,  105 => 22,  94 => 18,  90 => 17,  85 => 16,  79 => 14,  77 => 13,  73 => 12,  68 => 11,  64 => 10,  60 => 7,  56 => 6,  51 => 1,  49 => 4,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ProductManagement/Add/index.twig' %}
{% set submit_title = 'Save' | trans %}
{% set widget_title = ('Edit Product Abstract' | trans) ~ ': ' ~ currentProduct.sku %}
{% set variant_tpl = '@ProductManagement/Product/_partials/variant-tab-editing.twig' %}

{% block head_title -%}
    {{ widget_title }}
{%- endblock %}

{% block action %}
    {{ parent() }}
    {{ createActionButton('/product-management/add', 'Create Product' | trans) }}
    {% if superAttributesCount > 0 %}
        {{ createActionButton('/product-management/add-variant?id-product-abstract=' ~ idProductAbstract, 'Add Variant' | trans) }}
    {% endif %}
    {{ editActionButton('/product-attribute-gui/view/product-abstract?id-product-abstract=' ~ idProductAbstract, 'Manage Attributes' | trans) }}
    {% for action in actions %}
        {{ action | raw }}
    {% endfor %}
{% endblock %}

{% block content %}

    {{ form_start(form, { 'attr': {'class': 'kv_autocomplete_form'} }) }}

        {{ form_errors(form) }}

        {{ tabs(productFormEditTabs, {
            'form': form,
            'currentLocale': currentLocale,
            'concreteProductCollection': concreteProductCollection,
            'localeCollection': localeCollection,
            'attributeLocaleCollection': attributeLocaleCollection,
            'submit_title': submit_title,
            'currentProduct': currentProduct,
            'variantTable': variantTable,
            'idProduct': null,
            'idProductAbstract': idProductAbstract,
            'priceDimension': priceDimension,
            'priceTypeTabs': priceTypeTabs | default(null),
            'tablesByPriceType': tablesByPriceType | default([]),
            'merchant': merchant | default(),
        }) }}

    {{ form_end(form) }}

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-productmanagement-edit.js') }}\"></script>
{% endblock %}
", "@ProductManagement/Edit/index.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Edit/index.twig");
    }
}
