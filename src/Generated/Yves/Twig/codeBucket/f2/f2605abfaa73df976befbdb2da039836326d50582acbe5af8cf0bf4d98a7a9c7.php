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

/* @@SprykerShop:ProductReviewWidget/views/product-abstract-review-display/product-abstract-review-display.twig */
class __TwigTemplate_1325c7ec920b9bbd3687dd22dd3a58a96ff7c4ad1842e78fb80decaeb2a69069 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@@SprykerShop:ProductReviewWidget/views/product-abstract-review-display/product-abstract-review-display.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["value" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["_widget"] ?? null), "productReviewStorageTransfer", [], "any", false, true, false, 4), "averageRating", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "productReviewStorageTransfer", [], "any", false, true, false, 4), "averageRating", [], "any", false, false, false, 4), 0)) : (0)), "maxValue" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "maximumRating", [], "any", false, false, false, 5), "parentJsName" => ""], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <p itemscope itemprop=\"aggregateRating\" itemtype=\"https://schema.org/AggregateRating\">
        <meta itemprop=\"ratingValue\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "value", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
        <meta itemprop=\"bestRating\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "maxValue", [], "any", false, false, false, 12), "html", null, true);
        echo "\">

        ";
        // line 14
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["rating-selector", "ProductReviewWidget"]), "@@SprykerShop:ProductReviewWidget/views/product-abstract-review-display/product-abstract-review-display.twig", 14)->display(twig_to_array(["modifiers" => [0 => "expand"], "data" => ["value" => twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "value", [], "any", false, false, false, 17), "maxValue" => twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "maxValue", [], "any", false, false, false, 18), "useHalfSteps" => true, "parentJsName" => twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "parentJsName", [], "any", false, false, false, 20)], "attributes" => ["readonly" => true]]));
        // line 26
        echo "    </p>
";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductReviewWidget/views/product-abstract-review-display/product-abstract-review-display.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  68 => 20,  67 => 18,  66 => 17,  65 => 14,  60 => 12,  56 => 11,  53 => 10,  49 => 9,  45 => 1,  44 => 5,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    value: _widget.productReviewStorageTransfer.averageRating | default(0),
    maxValue: _widget.maximumRating,
    parentJsName: '',
} %}

{% block body %}
    <p itemscope itemprop=\"aggregateRating\" itemtype=\"https://schema.org/AggregateRating\">
        <meta itemprop=\"ratingValue\" content=\"{{ data.value }}\">
        <meta itemprop=\"bestRating\" content=\"{{ data.maxValue }}\">

        {% include molecule('rating-selector', 'ProductReviewWidget') with {
            modifiers: ['expand'],
            data: {
                value: data.value,
                maxValue: data.maxValue,
                useHalfSteps: true,
                parentJsName: data.parentJsName,
            },
            attributes: {
                readonly: true,
            },
        } only %}
    </p>
{% endblock %}
", "@@SprykerShop:ProductReviewWidget/views/product-abstract-review-display/product-abstract-review-display.twig", "/data/vendor/spryker-shop/product-review-widget/src/SprykerShop/Yves/ProductReviewWidget/Theme/default/views/product-abstract-review-display/product-abstract-review-display.twig");
    }
}
