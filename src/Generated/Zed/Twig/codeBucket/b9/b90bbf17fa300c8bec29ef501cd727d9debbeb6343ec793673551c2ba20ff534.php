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

/* @ProductLabelGui/Create/index.twig */
class __TwigTemplate_57d2426b28a0ba95f00a0611a07e450f3febd5cd29f1d6d8876bb93270eda1aa extends Template
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
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create a Product Label");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductLabelGui/Create/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 4, $this->source); })()), "html", null, true);
    }

    // line 6
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/product-label-gui", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Product Labels")]);
        echo "
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["aggregateForm"]) || array_key_exists("aggregateForm", $context) ? $context["aggregateForm"] : (function () { throw new RuntimeError('Variable "aggregateForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

    ";
        // line 13
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env,         // line 14
(isset($context["productLabelFormTabs"]) || array_key_exists("productLabelFormTabs", $context) ? $context["productLabelFormTabs"] : (function () { throw new RuntimeError('Variable "productLabelFormTabs" does not exist.', 14, $this->source); })()), ["productLabelForm" => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["aggregateForm"]) || array_key_exists("aggregateForm", $context) ? $context["aggregateForm"] : (function () { throw new RuntimeError('Variable "aggregateForm" does not exist.', 16, $this->source); })()), "productLabel", [], "any", false, false, false, 16), "relatedProductForm" => twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["aggregateForm"]) || array_key_exists("aggregateForm", $context) ? $context["aggregateForm"] : (function () { throw new RuntimeError('Variable "aggregateForm" does not exist.', 17, $this->source); })()), "productAbstractRelations", [], "any", false, false, false, 17), "availableProductTable" =>         // line 18
(isset($context["availableProductTable"]) || array_key_exists("availableProductTable", $context) ? $context["availableProductTable"] : (function () { throw new RuntimeError('Variable "availableProductTable" does not exist.', 18, $this->source); })()), "assignedProductTable" =>         // line 19
(isset($context["assignedProductTable"]) || array_key_exists("assignedProductTable", $context) ? $context["assignedProductTable"] : (function () { throw new RuntimeError('Variable "assignedProductTable" does not exist.', 19, $this->source); })())]]);
        // line 21
        echo "

    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["aggregateForm"]) || array_key_exists("aggregateForm", $context) ? $context["aggregateForm"] : (function () { throw new RuntimeError('Variable "aggregateForm" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
";
    }

    // line 26
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
";
    }

    // line 30
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 32
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-product-label-form.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductLabelGui/Create/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  113 => 31,  109 => 30,  102 => 27,  98 => 26,  92 => 23,  88 => 21,  86 => 19,  85 => 18,  84 => 17,  83 => 16,  82 => 14,  81 => 13,  75 => 11,  71 => 10,  64 => 7,  60 => 6,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Create a Product Label' | trans %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ backActionButton('/product-label-gui', 'Back to Product Labels' | trans) }}
{% endblock %}

{% block content %}
    {{ form_start(aggregateForm, {attr: {novalidate: 'novalidate'}}) }}

    {{ tabs(
        productLabelFormTabs,
        {
            'productLabelForm': aggregateForm.productLabel,
            'relatedProductForm': aggregateForm.productAbstractRelations,
            'availableProductTable': availableProductTable,
            'assignedProductTable': assignedProductTable
        }
    ) }}

    {{ form_end(aggregateForm) }}
{% endblock %}

{% block head_css %}
    {{ parent() }}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-product-label-form.js') }}\"></script>
{% endblock %}

", "@ProductLabelGui/Create/index.twig", "/data/vendor/spryker/product-label-gui/src/Spryker/Zed/ProductLabelGui/Presentation//Create/index.twig");
    }
}
