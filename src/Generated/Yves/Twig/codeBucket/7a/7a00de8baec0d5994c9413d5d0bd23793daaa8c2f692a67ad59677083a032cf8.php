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

/* @ProductReviewWidget/views/pdp-review/pdp-review.twig */
class __TwigTemplate_a7f3dbd5ce4323951abac974176d8fbf61ae671b0811904a6bc6c88775677890 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'rating' => [$this, 'block_rating'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ProductReviewWidget/views/pdp-review/pdp-review.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["idProductAbstract" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 4), "form" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "form", [], "any", false, false, false, 5), "showSuccessMessage" => false, "action" => "product-review/create", "reviews" => twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 8, $this->source); })()), "productReviews", [], "any", false, false, false, 8), "summary" => twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 9, $this->source); })()), "summary", [], "any", false, false, false, 9), "ratingMaxValue" => twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 10, $this->source); })()), "maximumRating", [], "any", false, false, false, 10), "hasCustomer" => twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 11, $this->source); })()), "hasCustomer", [], "any", false, false, false, 11), "pagination" => ["parameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "all", [], "method", false, false, false, 14), "currentPage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 15, $this->source); })()), "pagination", [], "any", false, false, false, 15), "currentPage", [], "any", false, false, false, 15), "paginationPath" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "getPathInfo", [], "method", false, false, false, 16), "maxPage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 17, $this->source); })()), "pagination", [], "any", false, false, false, 17), "maxPage", [], "any", false, false, false, 17), "showAlwaysFirstAndLast" => true, "anchor" => "product-reviews"]], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["rating-selector", "ProductReviewWidget"]), "@ProductReviewWidget/views/pdp-review/pdp-review.twig", 24)->display(twig_to_array(["modifiers" => [0 => "expand", 1 => "pdp"], "data" => ["value" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["_widget"] ?? null), "productReviewStorageTransfer", [], "any", false, true, false, 27), "averageRating", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "productReviewStorageTransfer", [], "any", false, true, false, 27), "averageRating", [], "any", false, false, false, 27), 0)) : (0)), "maxValue" => twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 28, $this->source); })()), "maximumRating", [], "any", false, false, false, 28)], "attributes" => ["readonly" => true]]));
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["review-summary", "ProductReviewWidget"]), "@ProductReviewWidget/views/pdp-review/pdp-review.twig", 37)->display(twig_to_array(["data" => ["reviews" => twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "reviews", [], "any", false, false, false, 39), "summary" => twig_get_attribute($this->env, $this->source,         // line 40
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "summary", [], "any", false, false, false, 40), "ratingMaxValue" => twig_get_attribute($this->env, $this->source,         // line 41
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "ratingMaxValue", [], "any", false, false, false, 41), "hasCustomer" => twig_get_attribute($this->env, $this->source,         // line 42
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "hasCustomer", [], "any", false, false, false, 42), "pagination" => twig_get_attribute($this->env, $this->source,         // line 43
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "pagination", [], "any", false, false, false, 43), "idProductAbstract" => twig_get_attribute($this->env, $this->source,         // line 44
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 44), "action" => twig_get_attribute($this->env, $this->source,         // line 45
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "action", [], "any", false, false, false, 45), "reviewForm" => twig_get_attribute($this->env, $this->source,         // line 46
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), "form", [], "any", false, false, false, 46)]]));
    }

    public function getTemplateName()
    {
        return "@ProductReviewWidget/views/pdp-review/pdp-review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 46,  81 => 45,  80 => 44,  79 => 43,  78 => 42,  77 => 41,  76 => 40,  75 => 39,  73 => 37,  69 => 36,  65 => 28,  64 => 27,  62 => 24,  58 => 23,  54 => 1,  53 => 17,  52 => 16,  51 => 15,  50 => 14,  49 => 11,  48 => 10,  47 => 9,  46 => 8,  45 => 5,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    idProductAbstract: _widget.idProductAbstract,
    form: _widget.form,
    showSuccessMessage: false,
    action: 'product-review/create',
    reviews: _widget.productReviews,
    summary: _widget.summary,
    ratingMaxValue: _widget.maximumRating,
    hasCustomer: _widget.hasCustomer,

    pagination: {
        parameters: app.request.query.all(),
        currentPage: _widget.pagination.currentPage,
        paginationPath: app.request.getPathInfo(),
        maxPage: _widget.pagination.maxPage,
        showAlwaysFirstAndLast: true,
        anchor: 'product-reviews'
    }
} %}

{% block rating %}
    {% include molecule('rating-selector', 'ProductReviewWidget') with {
        modifiers: ['expand', 'pdp'],
        data: {
            value: _widget.productReviewStorageTransfer.averageRating | default(0),
            maxValue: _widget.maximumRating
        },
        attributes: {
            readonly: true
        }
    } only %}
{% endblock %}

{% block body %}
    {% include organism('review-summary', 'ProductReviewWidget') with {
        data: {
            reviews: data.reviews,
            summary: data.summary,
            ratingMaxValue: data.ratingMaxValue,
            hasCustomer: data.hasCustomer,
            pagination: data.pagination,
            idProductAbstract: data.idProductAbstract,
            action: data.action,
            reviewForm: data.form
        }
    } only %}
{% endblock %}
", "@ProductReviewWidget/views/pdp-review/pdp-review.twig", "/data/src/Pyz/Yves/ProductReviewWidget/Theme/default/views/pdp-review/pdp-review.twig");
    }
}
