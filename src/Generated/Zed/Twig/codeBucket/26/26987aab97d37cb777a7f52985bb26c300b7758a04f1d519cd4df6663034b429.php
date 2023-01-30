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

/* @ProductManagement/View/index.twig */
class __TwigTemplate_6499f8008904bc20c6edf01da6a68fc9dee2c71cbf3813cf13a211cfc061de53 extends Template
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
        if ( !array_key_exists("widget_title", $context)) {
            // line 4
            $context["widget_title"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View Product Abstract") . ": ") . twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 4, $this->source); })()), "sku", [], "any", false, false, false, 4));
        }
        // line 7
        if ( !array_key_exists("submit_title", $context)) {
            // line 8
            $context["submit_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save");
        }
        // line 11
        if ( !array_key_exists("idProductAbstract", $context)) {
            // line 12
            $context["idProductAbstract"] = 0;
        }
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductManagement/View/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 16, $this->source); })()), "html", null, true);
    }

    // line 19
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 19, $this->source); })()), "html", null, true);
    }

    // line 21
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-management"]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List Products")]);
        echo "
    ";
        // line 23
        echo call_user_func_array($this->env->getFunction('editActionButton')->getCallable(), [("/product-attribute-gui/view/product-abstract?id-product-abstract=" . (isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 23, $this->source); })())), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage Attributes")]);
        echo "
    ";
        // line 24
        echo call_user_func_array($this->env->getFunction('editActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-management/edit", ["id-product-abstract" => (isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 24, $this->source); })())]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit")]);
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
        $this->loadTemplate("@ProductManagement/View/_partials/info-general.twig", "@ProductManagement/View/index.twig", 29)->display($context);
        // line 30
        echo "    ";
        $this->loadTemplate("@ProductManagement/View/_partials/info-price-tax.twig", "@ProductManagement/View/index.twig", 30)->display($context);
        // line 31
        echo "    ";
        $this->loadTemplate("@ProductManagement/View/_partials/info-attribute.twig", "@ProductManagement/View/index.twig", 31)->display($context);
        // line 32
        echo "    ";
        $this->loadTemplate("@ProductManagement/View/_partials/info-seo.twig", "@ProductManagement/View/index.twig", 32)->display($context);
        // line 33
        echo "    ";
        $this->loadTemplate("@ProductManagement/View/_partials/info-image.twig", "@ProductManagement/View/index.twig", 33)->display($context);
        // line 34
        echo "    ";
        $this->loadTemplate("@ProductManagement/View/_partials/info-variant.twig", "@ProductManagement/View/index.twig", 34)->display($context);
        // line 35
        echo "    ";
        $this->loadTemplate("@ProductManagement/View/_partials/info-product-group.twig", "@ProductManagement/View/index.twig", 35)->display($context);
        // line 36
        echo "    ";
        $this->loadTemplate("@ProductManagement/View/_partials/info-categories.twig", "@ProductManagement/View/index.twig", 36)->display($context);
        // line 37
        echo "    ";
        $this->loadTemplate("@ProductManagement/View/_partials/info-plugins.twig", "@ProductManagement/View/index.twig", 37)->display($context);
        // line 38
        echo "
";
    }

    // line 41
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-productmanagement-main.css"]);
        echo "\" />
";
    }

    // line 46
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 48
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-productmanagement-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 48,  158 => 47,  154 => 46,  148 => 43,  143 => 42,  139 => 41,  134 => 38,  131 => 37,  128 => 36,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  110 => 30,  108 => 29,  105 => 28,  101 => 27,  95 => 24,  91 => 23,  86 => 22,  82 => 21,  75 => 19,  71 => 16,  67 => 15,  62 => 1,  59 => 12,  57 => 11,  54 => 8,  52 => 7,  49 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% if widget_title is not defined %}
    {% set widget_title = ('View Product Abstract' | trans) ~ ': ' ~ currentProduct.sku %}
{% endif %}

{% if submit_title is not defined %}
    {% set submit_title = 'Save' | trans %}
{% endif %}

{% if idProductAbstract is not defined %}
    {% set idProductAbstract = 0 %}
{% endif %}

{% block head_title -%}
    {{ widget_title }}
{%- endblock %}

{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ backActionButton(url('/product-management'), 'List Products' | trans) }}
    {{ editActionButton('/product-attribute-gui/view/product-abstract?id-product-abstract=' ~ idProductAbstract, 'Manage Attributes' | trans) }}
    {{ editActionButton(url('/product-management/edit', {'id-product-abstract': idProductAbstract}), 'Edit' | trans) }}
{% endblock %}

{% block content %}

    {% include '@ProductManagement/View/_partials/info-general.twig' %}
    {% include '@ProductManagement/View/_partials/info-price-tax.twig' %}
    {% include '@ProductManagement/View/_partials/info-attribute.twig' %}
    {% include '@ProductManagement/View/_partials/info-seo.twig' %}
    {% include '@ProductManagement/View/_partials/info-image.twig' %}
    {% include '@ProductManagement/View/_partials/info-variant.twig' %}
    {% include '@ProductManagement/View/_partials/info-product-group.twig' %}
    {% include '@ProductManagement/View/_partials/info-categories.twig' %}
    {% include '@ProductManagement/View/_partials/info-plugins.twig' %}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-productmanagement-main.css') }}\" />
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-productmanagement-main.js') }}\"></script>
{% endblock %}
", "@ProductManagement/View/index.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/index.twig");
    }
}
