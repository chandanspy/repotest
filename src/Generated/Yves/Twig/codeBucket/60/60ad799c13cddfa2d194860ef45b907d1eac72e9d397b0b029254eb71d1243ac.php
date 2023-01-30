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

/* @ProductGroupWidget/components/molecules/product-detail-color-selector/product-detail-color-selector.twig */
class __TwigTemplate_632c15a03b86310ed7da38a48a1613e6ebb9864577594eb3bd81ae2819b18966 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["color-selector", "ProductGroupWidget"]), "@ProductGroupWidget/components/molecules/product-detail-color-selector/product-detail-color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "product-detail-color-selector", "tag" => "product-detail-color-selector"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["image-carousel-class-name" => "js-image-carousel"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_selection($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $context["firstImage"] = _twig_default_filter(twig_first($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 13, $this->source); })()), "images", [], "any", false, false, false, 13)), null);
        // line 14
        echo "    ";
        $context["dataAttributesList"] = ["data-product-image-src" => ((        // line 15
(isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 15, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["firstImage"]) || array_key_exists("firstImage", $context) ? $context["firstImage"] : (function () { throw new RuntimeError('Variable "firstImage" does not exist.', 15, $this->source); })()), "externalUrlSmall", [], "any", false, false, false, 15)) : ("")), "href" => ((twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "url", [], "any", false, false, false, 16)) ? (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 16, $this->source); })()), "url", [], "any", false, false, false, 16)) : ("")), "data-product-sku" => twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "sku", [], "any", false, false, false, 17)];
        // line 19
        echo "
    ";
        // line 20
        $this->displayParentBlock("selection", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductGroupWidget/components/molecules/product-detail-color-selector/product-detail-color-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  61 => 19,  59 => 17,  58 => 16,  57 => 15,  55 => 14,  52 => 13,  48 => 12,  44 => 1,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('color-selector', 'ProductGroupWidget') %}

{% define config = {
    name: 'product-detail-color-selector',
    tag: 'product-detail-color-selector',
} %}

{% define attributes = {
    'image-carousel-class-name': 'js-image-carousel',
} %}

{% block selection %}
    {% set firstImage = item.images | first | default(null) %}
    {% set dataAttributesList = {
        'data-product-image-src': firstImage ? firstImage.externalUrlSmall,
        href: item.url ? item.url,
        'data-product-sku': item.sku,
    } %}

    {{ parent() }}
{% endblock %}
", "@ProductGroupWidget/components/molecules/product-detail-color-selector/product-detail-color-selector.twig", "/data/vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/components/molecules/product-detail-color-selector/product-detail-color-selector.twig");
    }
}
