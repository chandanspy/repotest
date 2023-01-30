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

/* @@SprykerShop:ProductReviewWidget/views/pdp-review-rating/pdp-review-rating.twig */
class __TwigTemplate_e1913219def356bcd50214957cb9e4b17164c9638aac88749c49b2b22bada504 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@@SprykerShop:ProductReviewWidget/views/pdp-review-rating/pdp-review-rating.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["idProductAbstract" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 5), "value" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["_widget"] ?? null), "productReviewStorageTransfer", [], "any", false, true, false, 6), "averageRating", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "productReviewStorageTransfer", [], "any", false, true, false, 6), "averageRating", [], "any", false, false, false, 6), 0)) : (0)), "maxValue" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 7, $this->source); })()), "maximumRating", [], "any", false, false, false, 7)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <hr>
    <section itemscope itemtype=\"http://schema.org/AggregateRating\" itemprop=\"aggregateRating\">
        <meta itemprop=\"ratingValue\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "value", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
        <meta itemprop=\"bestRating\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "maxValue", [], "any", false, false, false, 14), "html", null, true);
        echo "\">

        ";
        // line 16
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["rating-selector", "ProductReviewWidget"]), "@@SprykerShop:ProductReviewWidget/views/pdp-review-rating/pdp-review-rating.twig", 16)->display(twig_to_array(["modifiers" => [0 => "expand"], "data" => ["value" => twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "value", [], "any", false, false, false, 19), "maxValue" => twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "maxValue", [], "any", false, false, false, 20)], "attributes" => ["readonly" => true]]));
        // line 26
        echo "    </section>
";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductReviewWidget/views/pdp-review-rating/pdp-review-rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  69 => 20,  68 => 19,  67 => 16,  62 => 14,  58 => 13,  54 => 11,  50 => 10,  46 => 1,  45 => 7,  44 => 6,  43 => 5,  42 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{# @deprecated property \"idProductAbstract\" is deprecated #}
{% define data = {
    idProductAbstract: _widget.idProductAbstract,
    value: _widget.productReviewStorageTransfer.averageRating | default(0),
    maxValue: _widget.maximumRating,
} %}

{% block body %}
    <hr>
    <section itemscope itemtype=\"http://schema.org/AggregateRating\" itemprop=\"aggregateRating\">
        <meta itemprop=\"ratingValue\" content=\"{{ data.value }}\">
        <meta itemprop=\"bestRating\" content=\"{{ data.maxValue }}\">

        {% include molecule('rating-selector', 'ProductReviewWidget') with {
            modifiers: ['expand'],
            data: {
                value: data.value,
                maxValue: data.maxValue,
            },
            attributes: {
                readonly: true,
            },
        } only %}
    </section>
{% endblock %}
", "@@SprykerShop:ProductReviewWidget/views/pdp-review-rating/pdp-review-rating.twig", "/data/vendor/spryker-shop/product-review-widget/src/SprykerShop/Yves/ProductReviewWidget/Theme/default/views/pdp-review-rating/pdp-review-rating.twig");
    }
}
