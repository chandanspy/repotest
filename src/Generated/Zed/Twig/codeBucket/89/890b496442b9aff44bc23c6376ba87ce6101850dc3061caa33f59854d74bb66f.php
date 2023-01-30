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

/* @ProductRelationGui/Edit/index.twig */
class __TwigTemplate_c1ce6637eeecac3d69c609e575108df3b843e8816ea0434721c7d8d8c5d60957 extends Template
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
        $context["widget_title"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Product Relation") . ": ") . twig_get_attribute($this->env, $this->source, (isset($context["productRelation"]) || array_key_exists("productRelation", $context) ? $context["productRelation"] : (function () { throw new RuntimeError('Variable "productRelation" does not exist.', 3, $this->source); })()), "productRelationKey", [], "any", false, false, false, 3));
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductRelationGui/Edit/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })())), "html", null, true);
    }

    // line 6
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 6, $this->source); })())), "html", null, true);
    }

    // line 8
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
    ";
        // line 10
        $context["redirectUrl"] = call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-relation-gui/edit/index", ["id-product-relation" => twig_get_attribute($this->env, $this->source, (isset($context["productRelation"]) || array_key_exists("productRelation", $context) ? $context["productRelation"] : (function () { throw new RuntimeError('Variable "productRelation" does not exist.', 10, $this->source); })()), "idProductRelation", [], "any", false, false, false, 10)]]);
        // line 11
        echo "
    ";
        // line 12
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/product-relation-gui/list/index", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List Product relations")]);
        echo "

";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $this->loadTemplate("@ProductRelationGui/_partial/tabs-product-relation.twig", "@ProductRelationGui/Edit/index.twig", 17)->display($context);
    }

    // line 20
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-product-relation-gui.css"]);
        echo "\" />
";
    }

    // line 25
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 27
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-product-relation-gui.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductRelationGui/Edit/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 27,  115 => 26,  111 => 25,  105 => 22,  100 => 21,  96 => 20,  91 => 17,  87 => 16,  80 => 12,  77 => 11,  75 => 10,  72 => 9,  68 => 8,  61 => 6,  54 => 5,  49 => 1,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Edit Product Relation' | trans ~ ': ' ~ productRelation.productRelationKey %}

{% block section_title widget_title | trans %}
{% block head_title widget_title | trans %}

{% block action %}

    {% set redirectUrl = url('/product-relation-gui/edit/index', {'id-product-relation' : productRelation.idProductRelation}) %}

    {{ backActionButton('/product-relation-gui/list/index', 'List Product relations' | trans) }}

{% endblock %}

{% block content %}
    {% include '@ProductRelationGui/_partial/tabs-product-relation.twig' %}
{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-product-relation-gui.css') }}\" />
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-product-relation-gui.js') }}\"></script>
{% endblock %}
", "@ProductRelationGui/Edit/index.twig", "/data/vendor/spryker/product-relation-gui/src/Spryker/Zed/ProductRelationGui/Presentation//Edit/index.twig");
    }
}
