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

/* @ProductSetGui/Edit/index.twig */
class __TwigTemplate_e263993d6f7574b7a08a0e7e420f0bc066cebffbbf82b2a202dc5437e958705f extends Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 3, $this->source); })()), [0 => "@ProductSetGui/_template/product-image-set-theme.twig", 1 => "@ProductSetGui/_template/product-image-collection-theme.twig"], true);
        // line 8
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product Sets");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductSetGui/Edit/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 9, $this->source); })()), "html", null, true);
    }

    // line 11
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        echo call_user_func_array($this->env->getFunction('viewActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-set-gui/view", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 12, $this->source); })()), "general_form", [], "any", false, false, false, 12), "id_product_set", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "data", [], "any", false, false, false, 12)]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View")]);
        echo "
    ";
        // line 13
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-set-gui"]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of Sets")]);
        echo "
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 19, $this->source); })()), 'errors');
        echo "

    ";
        // line 21
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["productSetFormTabs"]) || array_key_exists("productSetFormTabs", $context) ? $context["productSetFormTabs"] : (function () { throw new RuntimeError('Variable "productSetFormTabs" does not exist.', 21, $this->source); })()), ["productSetForm" =>         // line 22
(isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 22, $this->source); })()), "localeCollection" =>         // line 23
(isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 23, $this->source); })()), "productTable" =>         // line 24
(isset($context["productTable"]) || array_key_exists("productTable", $context) ? $context["productTable"] : (function () { throw new RuntimeError('Variable "productTable" does not exist.', 24, $this->source); })()), "productAbstractSetTable" =>         // line 25
(isset($context["productAbstractSetTable"]) || array_key_exists("productAbstractSetTable", $context) ? $context["productAbstractSetTable"] : (function () { throw new RuntimeError('Variable "productAbstractSetTable" does not exist.', 25, $this->source); })())]]);
        // line 26
        echo "

    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 28, $this->source); })()), 'form_end');
        echo "

";
    }

    // line 32
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-productset-main.css"]);
        echo "\" />
";
    }

    // line 37
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 39
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-productset-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/Edit/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 39,  129 => 38,  125 => 37,  119 => 34,  114 => 33,  110 => 32,  103 => 28,  99 => 26,  97 => 25,  96 => 24,  95 => 23,  94 => 22,  93 => 21,  88 => 19,  84 => 18,  81 => 17,  77 => 16,  71 => 13,  66 => 12,  62 => 11,  55 => 9,  50 => 1,  48 => 8,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% form_theme productSetForm with [
    '@ProductSetGui/_template/product-image-set-theme.twig',
    '@ProductSetGui/_template/product-image-collection-theme.twig',
]%}

{% set widget_title = 'Product Sets' | trans %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ viewActionButton(url('/product-set-gui/view', {'id': productSetForm.general_form.id_product_set.vars.data}), 'View' | trans) }}
    {{ backActionButton(url('/product-set-gui'), 'List of Sets' | trans) }}
{% endblock %}

{% block content %}

    {{ form_start(productSetForm) }}
    {{ form_errors(productSetForm) }}

    {{ tabs(productSetFormTabs, {
        'productSetForm': productSetForm,
        'localeCollection': localeCollection,
        'productTable': productTable,
        'productAbstractSetTable': productAbstractSetTable
    }) }}

    {{ form_end(productSetForm) }}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-productset-main.css') }}\" />
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-productset-main.js') }}\"></script>
{% endblock %}
", "@ProductSetGui/Edit/index.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//Edit/index.twig");
    }
}
