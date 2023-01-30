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

/* @ProductReviewWidget/views/product-abstract-review-display/product-abstract-review-display.twig */
class __TwigTemplate_a45bbb74d5e45f2a32d1e6b1b1d575051c5bba969a4d9df8a9cf05840119a053 extends Template
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
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["product-abstract-review-display", "@SprykerShop:ProductReviewWidget"]), "@ProductReviewWidget/views/product-abstract-review-display/product-abstract-review-display.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["reviewCount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["_widget"] ?? null), "productReviewStorageTransfer", [], "any", false, true, false, 4), "reviewCount", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "productReviewStorageTransfer", [], "any", false, true, false, 4), "reviewCount", [], "any", false, false, false, 4))) : ("")), "parentJsName" => ""], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["rating-selector", "ProductReviewWidget"]), "@ProductReviewWidget/views/product-abstract-review-display/product-abstract-review-display.twig", 9)->display(twig_to_array(["modifiers" => [0 => "expand"], "data" => ["value" => twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "value", [], "any", false, false, false, 12), "maxValue" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "maxValue", [], "any", false, false, false, 13), "useHalfSteps" => true, "reviewCount" => twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "reviewCount", [], "any", false, false, false, 15), "parentJsName" => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "parentJsName", [], "any", false, false, false, 16)], "attributes" => ["readonly" => true]]));
    }

    public function getTemplateName()
    {
        return "@ProductReviewWidget/views/product-abstract-review-display/product-abstract-review-display.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  56 => 15,  55 => 13,  54 => 12,  52 => 9,  48 => 8,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('product-abstract-review-display', '@SprykerShop:ProductReviewWidget') %}

{% define data = {
    reviewCount: _widget.productReviewStorageTransfer.reviewCount | default,
    parentJsName: '',
} %}

{% block body %}
    {% include molecule('rating-selector', 'ProductReviewWidget') with {
        modifiers: ['expand'],
        data: {
            value: data.value,
            maxValue: data.maxValue,
            useHalfSteps: true,
            reviewCount: data.reviewCount,
            parentJsName: data.parentJsName,
        },
        attributes: {
            readonly: true,
        },
    } only %}
{% endblock %}
", "@ProductReviewWidget/views/product-abstract-review-display/product-abstract-review-display.twig", "/data/src/Pyz/Yves/ProductReviewWidget/Theme/default/views/product-abstract-review-display/product-abstract-review-display.twig");
    }
}
