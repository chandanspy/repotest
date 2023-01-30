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

/* @ProductManagement/Edit/variant.twig */
class __TwigTemplate_03ff1761526b84b2b704e2bedd575dd632f79e66db478c1a9866c6fbb7a7caf9 extends Template
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
            'head_css' => [$this, 'block_head_css'],
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => "@ProductManagement/_partials/no-label-checkbox-theme.twig", 1 => "@ProductManagement/_partials/product-image-set-theme.twig", 2 => "@ProductManagement/_partials/product-image-collection-theme.twig"], true);
        // line 9
        if ( !array_key_exists("widget_title", $context)) {
            // line 10
            $context["widget_title"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Product Concrete") . ": ") . twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 10, $this->source); })()), "sku", [], "any", false, false, false, 10));
        }
        // line 13
        if ( !array_key_exists("submit_title", $context)) {
            // line 14
            $context["submit_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save");
        }
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductManagement/Edit/variant.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 18, $this->source); })())), "html", null, true);
    }

    // line 21
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/product-management", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List Products")]);
        echo "

    ";
        // line 24
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 24, $this->source); })()), "is_active", [], "any", false, false, false, 24), 0))) {
            // line 25
            echo "        ";
            echo call_user_func_array($this->env->getFunction('viewActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-management/variant/activate-product-variant", ["id-product" =>             // line 27
(isset($context["idProduct"]) || array_key_exists("idProduct", $context) ? $context["idProduct"] : (function () { throw new RuntimeError('Variable "idProduct" does not exist.', 27, $this->source); })()), "id-product-abstract" =>             // line 28
(isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 28, $this->source); })())]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activate")]);
            echo "
    ";
        } else {
            // line 30
            echo "        ";
            echo call_user_func_array($this->env->getFunction('removeActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-management/variant/deactivate-product-variant", ["id-product" =>             // line 32
(isset($context["idProduct"]) || array_key_exists("idProduct", $context) ? $context["idProduct"] : (function () { throw new RuntimeError('Variable "idProduct" does not exist.', 32, $this->source); })()), "id-product-abstract" =>             // line 33
(isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 33, $this->source); })())]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deactivate")]);
            echo "
     ";
        }
        // line 35
        echo "
    ";
        // line 36
        echo call_user_func_array($this->env->getFunction('editActionButton')->getCallable(), [("/product-attribute-gui/view/product?id-product=" . (isset($context["idProduct"]) || array_key_exists("idProduct", $context) ? $context["idProduct"] : (function () { throw new RuntimeError('Variable "idProduct" does not exist.', 36, $this->source); })())), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage Attributes")]);
        echo "

    ";
        // line 38
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [("/product-management/edit?id-product-abstract=" . (isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 38, $this->source); })())), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Product Abstract")]);
        echo "
";
    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "
    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start', ["attr" => ["class" => "kv_autocomplete_form"]]);
        echo "

        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'errors');
        echo "

        ";
        // line 47
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["productConcreteFormEditTabs"]) || array_key_exists("productConcreteFormEditTabs", $context) ? $context["productConcreteFormEditTabs"] : (function () { throw new RuntimeError('Variable "productConcreteFormEditTabs" does not exist.', 47, $this->source); })()), ["form" =>         // line 48
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "currentLocale" =>         // line 49
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 49, $this->source); })()), "localeCollection" =>         // line 50
(isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 50, $this->source); })()), "attributeLocaleCollection" =>         // line 51
(isset($context["attributeLocaleCollection"]) || array_key_exists("attributeLocaleCollection", $context) ? $context["attributeLocaleCollection"] : (function () { throw new RuntimeError('Variable "attributeLocaleCollection" does not exist.', 51, $this->source); })()), "submit_title" =>         // line 52
(isset($context["submit_title"]) || array_key_exists("submit_title", $context) ? $context["submit_title"] : (function () { throw new RuntimeError('Variable "submit_title" does not exist.', 52, $this->source); })()), "idProduct" =>         // line 53
(isset($context["idProduct"]) || array_key_exists("idProduct", $context) ? $context["idProduct"] : (function () { throw new RuntimeError('Variable "idProduct" does not exist.', 53, $this->source); })()), "idProductAbstract" =>         // line 54
(isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 54, $this->source); })()), "bundledProductTable" =>         // line 55
(isset($context["bundledProductTable"]) || array_key_exists("bundledProductTable", $context) ? $context["bundledProductTable"] : (function () { throw new RuntimeError('Variable "bundledProductTable" does not exist.', 55, $this->source); })()), "currentProduct" =>         // line 56
(isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 56, $this->source); })()), "priceDimension" =>         // line 57
(isset($context["priceDimension"]) || array_key_exists("priceDimension", $context) ? $context["priceDimension"] : (function () { throw new RuntimeError('Variable "priceDimension" does not exist.', 57, $this->source); })()), "priceTypeTabs" => ((        // line 58
array_key_exists("priceTypeTabs", $context)) ? (_twig_default_filter((isset($context["priceTypeTabs"]) || array_key_exists("priceTypeTabs", $context) ? $context["priceTypeTabs"] : (function () { throw new RuntimeError('Variable "priceTypeTabs" does not exist.', 58, $this->source); })()), null)) : (null)), "tablesByPriceType" => ((        // line 59
array_key_exists("tablesByPriceType", $context)) ? (_twig_default_filter((isset($context["tablesByPriceType"]) || array_key_exists("tablesByPriceType", $context) ? $context["tablesByPriceType"] : (function () { throw new RuntimeError('Variable "tablesByPriceType" does not exist.', 59, $this->source); })()), [])) : ([]))]]);
        // line 60
        echo "

    ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        echo "

";
    }

    // line 66
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 68
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-productmanagement-main.css"]);
        echo "\" />
";
    }

    // line 71
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 73
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-productmanagement-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Edit/variant.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 73,  174 => 72,  170 => 71,  164 => 68,  159 => 67,  155 => 66,  148 => 62,  144 => 60,  142 => 59,  141 => 58,  140 => 57,  139 => 56,  138 => 55,  137 => 54,  136 => 53,  135 => 52,  134 => 51,  133 => 50,  132 => 49,  131 => 48,  130 => 47,  125 => 45,  120 => 43,  117 => 42,  113 => 41,  107 => 38,  102 => 36,  99 => 35,  94 => 33,  93 => 32,  91 => 30,  86 => 28,  85 => 27,  83 => 25,  81 => 24,  75 => 22,  71 => 21,  67 => 18,  63 => 17,  58 => 1,  55 => 14,  53 => 13,  50 => 10,  48 => 9,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% form_theme form with [
    '@ProductManagement/_partials/no-label-checkbox-theme.twig',
    '@ProductManagement/_partials/product-image-set-theme.twig',
    '@ProductManagement/_partials/product-image-collection-theme.twig',
]%}

{% if widget_title is not defined %}
    {% set widget_title = ('Edit Product Concrete' | trans) ~ ': ' ~ currentProduct.sku %}
{% endif %}

{% if submit_title is not defined %}
    {% set submit_title = 'Save' | trans %}
{% endif %}

{% block head_title -%}
    {{ widget_title | trans }}
{%- endblock %}

{% block action %}
    {{ backActionButton('/product-management', 'List Products' | trans) }}

    {% if currentProduct.is_active == 0 %}
        {{ viewActionButton(
             url('/product-management/variant/activate-product-variant', {
                    'id-product': idProduct,
                    'id-product-abstract': idProductAbstract}), 'Activate' | trans) }}
    {% else %}
        {{ removeActionButton(
            url('/product-management/variant/deactivate-product-variant', {
                'id-product': idProduct,
                'id-product-abstract': idProductAbstract}), 'Deactivate' | trans) }}
     {% endif %}

    {{ editActionButton('/product-attribute-gui/view/product?id-product=' ~ idProduct, 'Manage Attributes' | trans) }}

    {{ backActionButton('/product-management/edit?id-product-abstract=' ~ idProductAbstract, 'Edit Product Abstract' | trans) }}
{% endblock %}

{% block content %}

    {{ form_start(form, { 'attr': {'class': 'kv_autocomplete_form'} }) }}

        {{ form_errors(form) }}

        {{ tabs(productConcreteFormEditTabs, {
            'form': form,
            'currentLocale': currentLocale,
            'localeCollection': localeCollection,
            'attributeLocaleCollection': attributeLocaleCollection,
            'submit_title': submit_title,
            'idProduct': idProduct,
            'idProductAbstract': idProductAbstract,
            'bundledProductTable' : bundledProductTable,
            'currentProduct' : currentProduct,
            'priceDimension': priceDimension,
            'priceTypeTabs': priceTypeTabs | default(null),
            'tablesByPriceType': tablesByPriceType | default([]),
        }) }}

    {{ form_end(form) }}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-productmanagement-main.css') }}\" />
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-productmanagement-main.js') }}\"></script>
{% endblock %}
", "@ProductManagement/Edit/variant.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Edit/variant.twig");
    }
}
