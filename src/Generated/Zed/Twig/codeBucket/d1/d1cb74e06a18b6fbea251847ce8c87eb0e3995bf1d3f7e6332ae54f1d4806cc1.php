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

/* @ProductManagement/Add/index.twig */
class __TwigTemplate_450adc4cf57428d4b88fa8790523c9bdea9cf6954fae709d4febfa37d79e7420 extends Template
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
            $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create a Product");
        }
        // line 13
        if ( !array_key_exists("submit_title", $context)) {
            // line 14
            $context["submit_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save");
        }
        // line 17
        if ( !array_key_exists("idProduct", $context)) {
            // line 18
            $context["idProduct"] = 0;
        }
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductManagement/Add/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 21, $this->source); })()), "html", null, true);
    }

    // line 23
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/product-management", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List Products")]);
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
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["productFormAddTabs"]) || array_key_exists("productFormAddTabs", $context) ? $context["productFormAddTabs"] : (function () { throw new RuntimeError('Variable "productFormAddTabs" does not exist.', 33, $this->source); })()), ["form" =>         // line 34
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "currentLocale" =>         // line 35
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 35, $this->source); })()), "concreteProductCollection" =>         // line 36
(isset($context["concreteProductCollection"]) || array_key_exists("concreteProductCollection", $context) ? $context["concreteProductCollection"] : (function () { throw new RuntimeError('Variable "concreteProductCollection" does not exist.', 36, $this->source); })()), "localeCollection" =>         // line 37
(isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 37, $this->source); })()), "attributeLocaleCollection" =>         // line 38
(isset($context["attributeLocaleCollection"]) || array_key_exists("attributeLocaleCollection", $context) ? $context["attributeLocaleCollection"] : (function () { throw new RuntimeError('Variable "attributeLocaleCollection" does not exist.', 38, $this->source); })()), "submit_title" =>         // line 39
(isset($context["submit_title"]) || array_key_exists("submit_title", $context) ? $context["submit_title"] : (function () { throw new RuntimeError('Variable "submit_title" does not exist.', 39, $this->source); })()), "type" =>         // line 40
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })())]]);
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
        return "@ProductManagement/Add/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 54,  142 => 53,  138 => 52,  132 => 49,  127 => 48,  123 => 47,  116 => 43,  112 => 41,  110 => 40,  109 => 39,  108 => 38,  107 => 37,  106 => 36,  105 => 35,  104 => 34,  103 => 33,  98 => 31,  93 => 29,  90 => 28,  86 => 27,  79 => 24,  75 => 23,  68 => 21,  63 => 1,  60 => 18,  58 => 17,  55 => 14,  53 => 13,  50 => 10,  48 => 9,  46 => 3,  39 => 1,);
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
    {% set widget_title = 'Create a Product' | trans %}
{% endif %}

{% if submit_title is not defined %}
    {% set submit_title = 'Save' | trans %}
{% endif %}

{% if idProduct is not defined %}
    {% set idProduct = 0 %}
{% endif %}

{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ backActionButton('/product-management', 'List Products' | trans) }}
{% endblock %}

{% block content %}

    {{ form_start(form, { 'attr': {'class': 'kv_autocomplete_form'} }) }}

    {{ form_errors(form) }}

    {{ tabs(productFormAddTabs, {
        'form': form,
        'currentLocale': currentLocale,
        'concreteProductCollection': concreteProductCollection,
        'localeCollection': localeCollection,
        'attributeLocaleCollection': attributeLocaleCollection,
        'submit_title': submit_title,
        'type' : type
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
", "@ProductManagement/Add/index.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Add/index.twig");
    }
}
