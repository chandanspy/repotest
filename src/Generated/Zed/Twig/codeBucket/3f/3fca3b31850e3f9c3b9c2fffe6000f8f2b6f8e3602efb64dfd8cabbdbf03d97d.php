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

/* @ProductManagement/AddVariant/index.twig */
class __TwigTemplate_10991774690cb0a1fb8dd5ad395bbc6ccf60b001e900b65485f41c69ff470e58 extends Template
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
            $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Product Concrete");
        }
        // line 13
        if ( !array_key_exists("submit_title", $context)) {
            // line 14
            $context["submit_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save");
        }
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductManagement/AddVariant/index.twig", 1);
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
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [("/product-management/edit?id-product-abstract=" . twig_get_attribute($this->env, $this->source, (isset($context["productAbstract"]) || array_key_exists("productAbstract", $context) ? $context["productAbstract"] : (function () { throw new RuntimeError('Variable "productAbstract" does not exist.', 24, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 24)), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Product Abstract")]);
        echo "
";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "
    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "kv_autocomplete_form"]]);
        echo "

    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'errors');
        echo "

    ";
        // line 33
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["productConcreteFormAddTabs"]) || array_key_exists("productConcreteFormAddTabs", $context) ? $context["productConcreteFormAddTabs"] : (function () { throw new RuntimeError('Variable "productConcreteFormAddTabs" does not exist.', 33, $this->source); })()), ["form" =>         // line 34
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "currentLocale" =>         // line 35
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 35, $this->source); })()), "localeCollection" =>         // line 36
(isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 36, $this->source); })()), "attributeLocaleCollection" =>         // line 37
(isset($context["attributeLocaleCollection"]) || array_key_exists("attributeLocaleCollection", $context) ? $context["attributeLocaleCollection"] : (function () { throw new RuntimeError('Variable "attributeLocaleCollection" does not exist.', 37, $this->source); })()), "submit_title" =>         // line 38
(isset($context["submit_title"]) || array_key_exists("submit_title", $context) ? $context["submit_title"] : (function () { throw new RuntimeError('Variable "submit_title" does not exist.', 38, $this->source); })()), "idProductAbstract" => twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["productAbstract"]) || array_key_exists("productAbstract", $context) ? $context["productAbstract"] : (function () { throw new RuntimeError('Variable "productAbstract" does not exist.', 39, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 39), "bundledProductTable" =>         // line 40
(isset($context["bundledProductTable"]) || array_key_exists("bundledProductTable", $context) ? $context["bundledProductTable"] : (function () { throw new RuntimeError('Variable "bundledProductTable" does not exist.', 40, $this->source); })())]]);
        // line 41
        echo "

    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "

";
    }

    // line 47
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 49
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-productmanagement-main.css"]);
        echo "\" />
";
    }

    // line 52
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 54
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-productmanagement-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/AddVariant/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 54,  143 => 53,  139 => 52,  133 => 49,  128 => 48,  124 => 47,  117 => 43,  113 => 41,  111 => 40,  110 => 39,  109 => 38,  108 => 37,  107 => 36,  106 => 35,  105 => 34,  104 => 33,  99 => 31,  94 => 29,  91 => 28,  87 => 27,  81 => 24,  75 => 22,  71 => 21,  67 => 18,  63 => 17,  58 => 1,  55 => 14,  53 => 13,  50 => 10,  48 => 9,  46 => 3,  39 => 1,);
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
    {% set widget_title = ('Add Product Concrete' | trans) %}
{% endif %}

{% if submit_title is not defined %}
    {% set submit_title = 'Save' | trans %}
{% endif %}

{% block head_title -%}
    {{ widget_title | trans }}
{%- endblock %}

{% block action %}
    {{ backActionButton('/product-management', 'List Products' | trans) }}

    {{ backActionButton('/product-management/edit?id-product-abstract=' ~ productAbstract.idProductAbstract, 'Edit Product Abstract' | trans) }}
{% endblock %}

{% block content %}

    {{ form_start(form, { 'attr': {'class': 'kv_autocomplete_form'} }) }}

    {{ form_errors(form) }}

    {{ tabs(productConcreteFormAddTabs, {
        'form': form,
        'currentLocale': currentLocale,
        'localeCollection': localeCollection,
        'attributeLocaleCollection': attributeLocaleCollection,
        'submit_title': submit_title,
        'idProductAbstract': productAbstract.idProductAbstract,
        'bundledProductTable' : bundledProductTable
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
", "@ProductManagement/AddVariant/index.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//AddVariant/index.twig");
    }
}
