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

/* @ProductListGui/Create/index.twig */
class __TwigTemplate_9a8d702adcbc18df978da1e56f6ce9c215012a542827177cfafd07f1330d6fdb extends Template
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
            $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create a Product List");
        }
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductListGui/Create/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 8, $this->source); })()), "html", null, true);
    }

    // line 11
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 11, $this->source); })()), "html", null, true);
    }

    // line 13
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        $this->displayParentBlock("action", $context, $blocks);
        echo "
    ";
        // line 15
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-list-gui"]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Product Lists")]);
        echo "
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["aggregateForm"]) || array_key_exists("aggregateForm", $context) ? $context["aggregateForm"] : (function () { throw new RuntimeError('Variable "aggregateForm" does not exist.', 19, $this->source); })()), 'form_start');
        echo "

    ";
        // line 21
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env,         // line 22
(isset($context["productListAggregationTabs"]) || array_key_exists("productListAggregationTabs", $context) ? $context["productListAggregationTabs"] : (function () { throw new RuntimeError('Variable "productListAggregationTabs" does not exist.', 22, $this->source); })()), ["aggregateForm" =>         // line 24
(isset($context["aggregateForm"]) || array_key_exists("aggregateForm", $context) ? $context["aggregateForm"] : (function () { throw new RuntimeError('Variable "aggregateForm" does not exist.', 24, $this->source); })()), "productListForm" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["aggregateForm"]) || array_key_exists("aggregateForm", $context) ? $context["aggregateForm"] : (function () { throw new RuntimeError('Variable "aggregateForm" does not exist.', 25, $this->source); })()), "productList", [], "any", false, false, false, 25), "productListCategoryRelationForm" => twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["aggregateForm"]) || array_key_exists("aggregateForm", $context) ? $context["aggregateForm"] : (function () { throw new RuntimeError('Variable "aggregateForm" does not exist.', 26, $this->source); })()), "productListCategoryRelation", [], "any", false, false, false, 26), "productListProductConcreteRelationForm" => twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["aggregateForm"]) || array_key_exists("aggregateForm", $context) ? $context["aggregateForm"] : (function () { throw new RuntimeError('Variable "aggregateForm" does not exist.', 27, $this->source); })()), "productListProductConcreteRelation", [], "any", false, false, false, 27), "availableProductConcreteRelationTabs" =>         // line 28
(isset($context["availableProductConcreteRelationTabs"]) || array_key_exists("availableProductConcreteRelationTabs", $context) ? $context["availableProductConcreteRelationTabs"] : (function () { throw new RuntimeError('Variable "availableProductConcreteRelationTabs" does not exist.', 28, $this->source); })()), "assignedProductConcreteRelationTabs" =>         // line 29
(isset($context["assignedProductConcreteRelationTabs"]) || array_key_exists("assignedProductConcreteRelationTabs", $context) ? $context["assignedProductConcreteRelationTabs"] : (function () { throw new RuntimeError('Variable "assignedProductConcreteRelationTabs" does not exist.', 29, $this->source); })()), "availableProductConcreteTable" =>         // line 30
(isset($context["availableProductConcreteTable"]) || array_key_exists("availableProductConcreteTable", $context) ? $context["availableProductConcreteTable"] : (function () { throw new RuntimeError('Variable "availableProductConcreteTable" does not exist.', 30, $this->source); })()), "assignedProductConcreteTable" =>         // line 31
(isset($context["assignedProductConcreteTable"]) || array_key_exists("assignedProductConcreteTable", $context) ? $context["assignedProductConcreteTable"] : (function () { throw new RuntimeError('Variable "assignedProductConcreteTable" does not exist.', 31, $this->source); })()), "productListUsedByTable" => ((        // line 32
array_key_exists("productListUsedByTable", $context)) ? (_twig_default_filter((isset($context["productListUsedByTable"]) || array_key_exists("productListUsedByTable", $context) ? $context["productListUsedByTable"] : (function () { throw new RuntimeError('Variable "productListUsedByTable" does not exist.', 32, $this->source); })()))) : (""))]]);
        // line 34
        echo "

    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["aggregateForm"]) || array_key_exists("aggregateForm", $context) ? $context["aggregateForm"] : (function () { throw new RuntimeError('Variable "aggregateForm" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
";
    }

    // line 39
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-product-list-main.css"]);
        echo "\" />
";
    }

    // line 44
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 46
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-product-list-assign.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductListGui/Create/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 46,  138 => 45,  134 => 44,  128 => 41,  123 => 40,  119 => 39,  113 => 36,  109 => 34,  107 => 32,  106 => 31,  105 => 30,  104 => 29,  103 => 28,  102 => 27,  101 => 26,  100 => 25,  99 => 24,  98 => 22,  97 => 21,  91 => 19,  87 => 18,  81 => 15,  76 => 14,  72 => 13,  65 => 11,  61 => 8,  57 => 7,  52 => 1,  49 => 4,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% if widget_title is not defined %}
    {% set widget_title = 'Create a Product List' | trans %}
{% endif %}

{% block head_title -%}
    {{ widget_title }}
{%- endblock %}

{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ parent() }}
    {{ backActionButton(url('/product-list-gui'), 'Back to Product Lists' | trans) }}
{% endblock %}

{% block content %}
    {{ form_start(aggregateForm) }}

    {{ tabs(
        productListAggregationTabs,
        {
            'aggregateForm': aggregateForm,
            'productListForm': aggregateForm.productList,
            'productListCategoryRelationForm': aggregateForm.productListCategoryRelation,
            'productListProductConcreteRelationForm': aggregateForm.productListProductConcreteRelation,
            'availableProductConcreteRelationTabs': availableProductConcreteRelationTabs,
            'assignedProductConcreteRelationTabs': assignedProductConcreteRelationTabs,
            'availableProductConcreteTable': availableProductConcreteTable,
            'assignedProductConcreteTable': assignedProductConcreteTable,
            'productListUsedByTable': productListUsedByTable | default
        }
    ) }}

    {{ form_end(aggregateForm) }}
{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-product-list-main.css') }}\" />
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-product-list-assign.js') }}\"></script>
{% endblock %}


", "@ProductListGui/Create/index.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//Create/index.twig");
    }
}
