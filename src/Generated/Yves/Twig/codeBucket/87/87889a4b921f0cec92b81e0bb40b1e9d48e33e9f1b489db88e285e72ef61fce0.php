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

/* @ProductCategoryWidget/views/product-detail-page-breadcrumb/product-detail-page-breadcrumb.twig */
class __TwigTemplate_43d730c72284db098fbe1c552a063d84b7c7f57eda073392bfbf7a778ac2c927 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ProductCategoryWidget/views/product-detail-page-breadcrumb/product-detail-page-breadcrumb.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["categories" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "categories", [], "any", false, false, false, 6), "product" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 7, $this->source); })()), "product", [], "any", false, false, false, 7)], $context['data']);        // line 10
        $context["steps"] = [];
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "categories", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            $context["steps"] = twig_array_merge((isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 12, $this->source); })()), [0 => ["url" => twig_get_attribute($this->env, $this->source,             // line 13
$context["category"], "url", [], "any", false, false, false, 13), "label" => twig_get_attribute($this->env, $this->source,             // line 14
$context["category"], "name", [], "any", false, false, false, 14), "itemProp" => "category"]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        $context["steps"] = twig_array_merge((isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 18, $this->source); })()), [0 => ["label" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "product", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "itemProp" => "product", "withChevron" => false]]);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["breadcrumb"]), "@ProductCategoryWidget/views/product-detail-page-breadcrumb/product-detail-page-breadcrumb.twig", 25)->display(twig_to_array(["data" => ["steps" =>         // line 27
(isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 27, $this->source); })())]]));
    }

    public function getTemplateName()
    {
        return "@ProductCategoryWidget/views/product-detail-page-breadcrumb/product-detail-page-breadcrumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  70 => 25,  66 => 24,  62 => 3,  60 => 19,  59 => 18,  53 => 14,  52 => 13,  51 => 12,  47 => 11,  45 => 10,  44 => 7,  43 => 6,  42 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var category \\Generated\\Shared\\Transfer\\ProductCategoryStorage #}

{% extends template('widget') %}

{% define data = {
    categories: _widget.categories,
    product: _widget.product
} %}

{% set steps = [] %}
{% for category in data.categories %}
    {% set steps = steps | merge([{
        url: category.url,
        label: category.name,
        itemProp: 'category'
    }]) %}
{% endfor %}
{% set steps = steps | merge([{
    label: data.product.name,
    itemProp: 'product',
    withChevron: false
}]) %}

{% block body %}
    {% include molecule('breadcrumb') with {
        data: {
            steps: steps
        }
    } only %}
{% endblock %}
", "@ProductCategoryWidget/views/product-detail-page-breadcrumb/product-detail-page-breadcrumb.twig", "/data/vendor/spryker-shop/product-category-widget/src/SprykerShop/Yves/ProductCategoryWidget/Theme/default/views/product-detail-page-breadcrumb/product-detail-page-breadcrumb.twig");
    }
}
