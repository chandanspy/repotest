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

/* @@SprykerShop:ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig */
class __TwigTemplate_3952e200ee7da2f6a34847957418e632cdd8f315c6e7d99544fadc041d8173d3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'selection' => [$this, 'block_selection'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["color-selector", "ProductGroupWidget"]), "@@SprykerShop:ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "product-item-color-selector", "tag" => "product-item-color-selector"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["parentJsName" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })())], $context['data']);        // line 12
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["product-item-class-name" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "parentJsName", [], "any", false, false, false, 13)], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_selection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $context["labels"] = ((array_key_exists("labels", $context)) ? (_twig_default_filter((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 17, $this->source); })()), [])) : ([]));
        // line 18
        echo "
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "labels", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 20
            echo "        ";
            $context["labels"] = twig_array_merge((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 20, $this->source); })()), [0 => ["text" => ((twig_get_attribute($this->env, $this->source,             // line 21
$context["label"], "key", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["label"], "key", [], "any", false, false, false, 21))) : ("")), "type" => _twig_default_filter(twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 22
$context["label"], "frontEndReference", [], "any", false, false, false, 22)), [" " => "-"]))]]);
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    ";
        // line 26
        $context["productSku"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 26, $this->source); })()), "sku", [], "any", false, false, false, 26);
        // line 27
        echo "    ";
        $context["isAvailable"] = (((isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 27, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "available", [], "any", false, false, false, 27)) && twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 27, $this->source); })()), "idProductConcrete", [], "any", false, false, false, 27));
        // line 28
        echo "
    ";
        // line 29
        $context["dataAttributesList"] = ["type" => "button", "data-product-image-src" => ((twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "images", [], "any", false, false, false, 31)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "images", [], "any", false, false, false, 31), 0, [], "array", false, false, false, 31), "externalUrlSmall", [], "any", false, false, false, 31)) : ("")), "data-product-labels" => json_encode(        // line 32
(isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 32, $this->source); })())), "data-product-name" => ((twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33)) ? (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33)) : ("")), "data-product-rating" => ((twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "rating", [], "any", false, false, false, 34)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 34, $this->source); })()), "rating", [], "any", false, false, false, 34), "averageRating", [], "any", false, false, false, 34)) : ("")), "data-product-default-price" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["item"] ?? null), "prices", [], "any", false, true, false, 35), "DEFAULT", [], "array", true, true, false, 35)) ? (call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 35, $this->source); })()), "prices", [], "any", false, false, false, 35), "DEFAULT", [], "array", false, false, false, 35)])) : ("")), "data-product-original-price" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["item"] ?? null), "prices", [], "any", false, true, false, 36), "ORIGINAL", [], "array", true, true, false, 36)) ? (call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 36, $this->source); })()), "prices", [], "any", false, false, false, 36), "ORIGINAL", [], "array", false, false, false, 36)])) : ("")), "data-product-detail-page-url" => ((twig_get_attribute($this->env, $this->source,         // line 37
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "url", [], "any", false, false, false, 37)) ? (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "url", [], "any", false, false, false, 37)) : ("")), "data-product-add-to-cart-url" => ((        // line 38
(isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 38, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart/add", ["sku" => (isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 38, $this->source); })())])) : ("")), "data-product-ajax-add-to-cart-url" => ((        // line 39
(isset($context["isAvailable"]) || array_key_exists("isAvailable", $context) ? $context["isAvailable"] : (function () { throw new RuntimeError('Variable "isAvailable" does not exist.', 39, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart/add-ajax", ["sku" => (isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 39, $this->source); })())])) : ("")), "data-product-add-to-cart-form-action" => ((        // line 40
(isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 40, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart/add", ["sku" => (isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 40, $this->source); })())])) : ("")), "data-product-sku" =>         // line 41
(isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 41, $this->source); })())];
        // line 43
        echo "
    ";
        // line 44
        $this->displayParentBlock("selection", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 44,  100 => 43,  98 => 41,  97 => 40,  96 => 39,  95 => 38,  94 => 37,  93 => 36,  92 => 35,  91 => 34,  90 => 33,  89 => 32,  88 => 31,  87 => 29,  84 => 28,  81 => 27,  79 => 26,  76 => 25,  70 => 24,  68 => 22,  67 => 21,  65 => 20,  61 => 19,  58 => 18,  55 => 17,  51 => 16,  47 => 1,  46 => 13,  45 => 12,  44 => 9,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('color-selector', 'ProductGroupWidget') %}

{% define config = {
    name: 'product-item-color-selector',
    tag: 'product-item-color-selector',
} %}

{% define data = {
    parentJsName: required,
} %}

{% define attributes = {
    'product-item-class-name': data.parentJsName,
} %}

{% block selection %}
    {% set labels = labels | default([]) %}

    {% for label in item.labels %}
        {% set labels = labels | merge([{
            text: label.key | default,
            type: (label.frontEndReference | lower | replace({' ': '-'})) | default,
        }]) %}
    {% endfor %}

    {% set productSku = item.sku %}
    {% set isAvailable = productSku and item.available and item.idProductConcrete %}

    {% set dataAttributesList = {
        type: 'button',
        'data-product-image-src': item.images ? item.images[0].externalUrlSmall,
        'data-product-labels': labels | json_encode,
        'data-product-name': item.name ?: '',
        'data-product-rating': item.rating ? item.rating.averageRating,
        'data-product-default-price': item.prices['DEFAULT'] is defined ? (item.prices['DEFAULT'] | money),
        'data-product-original-price': item.prices['ORIGINAL'] is defined ? (item.prices['ORIGINAL'] | money),
        'data-product-detail-page-url': item.url ?: '',
        'data-product-add-to-cart-url': productSku ? path('cart/add', {sku: productSku}),
        'data-product-ajax-add-to-cart-url': isAvailable ? path('cart/add-ajax', {sku: productSku}),
        'data-product-add-to-cart-form-action': productSku ? path('cart/add', {sku: productSku}),
        'data-product-sku': productSku,
    } %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig", "/data/vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/product-item-color-selector/product-item-color-selector.twig");
    }
}
