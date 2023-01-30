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

/* @ProductReviewWidget/views/pdp-review-rating/pdp-review-rating.twig */
class __TwigTemplate_4df1063853fa72ef568cf342cbebbef305f145949ef300ee74fad8f1f4ebcd74 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["pdp-review-rating", "@SprykerShop:ProductReviewWidget"]), "@ProductReviewWidget/views/pdp-review-rating/pdp-review-rating.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["rating-selector", "ProductReviewWidget"]), "@ProductReviewWidget/views/pdp-review-rating/pdp-review-rating.twig", 4)->display(twig_to_array(["modifiers" => [0 => "pdp"], "data" => ["value" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
($context["_widget"] ?? null), "productReviewStorageTransfer", [], "any", false, true, false, 7), "averageRating", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "productReviewStorageTransfer", [], "any", false, true, false, 7), "averageRating", [], "any", false, false, false, 7), 0)) : (0)), "maxValue" => twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 8, $this->source); })()), "maximumRating", [], "any", false, false, false, 8), "reviewCount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
($context["_widget"] ?? null), "productReviewStorageTransfer", [], "any", false, true, false, 9), "reviewCount", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "productReviewStorageTransfer", [], "any", false, true, false, 9), "reviewCount", [], "any", false, false, false, 9))) : (""))], "attributes" => ["readonly" => true]]));
    }

    public function getTemplateName()
    {
        return "@ProductReviewWidget/views/pdp-review-rating/pdp-review-rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  52 => 8,  51 => 7,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('pdp-review-rating', '@SprykerShop:ProductReviewWidget') %}

{% block body %}
    {% include molecule('rating-selector', 'ProductReviewWidget') with {
        modifiers: ['pdp'],
        data: {
            value: _widget.productReviewStorageTransfer.averageRating | default(0),
            maxValue: _widget.maximumRating,
            reviewCount: _widget.productReviewStorageTransfer.reviewCount | default,
        },
        attributes: {
            readonly: true,
        },
    } only %}
{% endblock %}
", "@ProductReviewWidget/views/pdp-review-rating/pdp-review-rating.twig", "/data/src/Pyz/Yves/ProductReviewWidget/Theme/default/views/pdp-review-rating/pdp-review-rating.twig");
    }
}
