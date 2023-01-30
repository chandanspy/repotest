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

/* @ProductReviewWidget/components/molecules/review-average-display/review-average-display.twig */
class __TwigTemplate_479ed37511aea2698c034f896650222815edeedf8eebad10a01cf265ab8c8041 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ProductReviewWidget/components/molecules/review-average-display/review-average-display.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "review-average-display", "tag" => "section"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["summary" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "ratingMaxValue" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })())], $context['data']);        // line 13
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["itemscope" => "", "itemtype" => "http://schema.org/AggregateRating", "itemprop" => "aggregateRating"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <div class=\"review-average-display__average-rating\">
        ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "summary", [], "any", false, false, false, 21), "averageRating", [], "any", false, false, false, 21), "html", null, true);
        echo "
    </div>

    <meta itemprop=\"ratingValue\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "summary", [], "any", false, false, false, 24), "averageRating", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
    <meta itemprop=\"bestRating\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "summary", [], "any", false, false, false, 25), "maximumRating", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
    <meta itemprop=\"reviewCount\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "summary", [], "any", false, false, false, 26), "totalReview", [], "any", false, false, false, 26), "html", null, true);
        echo "\">

    ";
        // line 28
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["rating-selector", "ProductReviewWidget"]), "@ProductReviewWidget/components/molecules/review-average-display/review-average-display.twig", 28)->display(twig_to_array(["modifiers" => [0 => "pdp"], "class" => (twig_get_attribute($this->env, $this->source,         // line 30
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30) . "__rating-selector"), "data" => ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "summary", [], "any", false, false, false, 32), "averageRating", [], "any", false, false, false, 32), "maxValue" => twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "ratingMaxValue", [], "any", false, false, false, 33), "useHalfSteps" => true], "attributes" => ["readonly" => true]]));
        // line 40
        echo "
    ";
        // line 41
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "summary", [], "any", false, false, false, 41), "totalReview", [], "any", false, false, false, 41), 0))) {
            // line 42
            echo "        <div class=\"review-average-display__total-review\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "summary", [], "any", false, false, false, 43), "totalReview", [], "any", false, false, false, 43), "html", null, true);
            echo "

            ";
            // line 45
            $context["amount"] = (((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "summary", [], "any", false, false, false, 45), "totalReview", [], "any", false, false, false, 45), 1))) ? ("multiple") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "summary", [], "any", false, false, false, 45), "totalReview", [], "any", false, false, false, 45)));
            // line 46
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 47, $this->source); })()), ["1" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.summary.review"), "multiple" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.summary.reviews")]), "html", null, true);
            // line 51
            echo "</div>
    ";
        } else {
            // line 53
            echo "        <div class=\"review-average-display__total-review is-hidden-sm-only\">
            ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.no_reviews"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductReviewWidget/components/molecules/review-average-display/review-average-display.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 57,  108 => 54,  105 => 53,  101 => 51,  99 => 47,  96 => 46,  94 => 45,  89 => 43,  87 => 42,  85 => 41,  82 => 40,  80 => 33,  79 => 32,  78 => 30,  77 => 28,  72 => 26,  68 => 25,  64 => 24,  58 => 21,  55 => 20,  51 => 19,  47 => 1,  46 => 13,  45 => 10,  44 => 9,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'review-average-display',
    tag: 'section',
} %}

{% define data = {
    summary: required,
    ratingMaxValue: required,
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'http://schema.org/AggregateRating',
    itemprop: 'aggregateRating',
} %}

{% block body %}
    <div class=\"review-average-display__average-rating\">
        {{ data.summary.averageRating }}
    </div>

    <meta itemprop=\"ratingValue\" content=\"{{ data.summary.averageRating }}\">
    <meta itemprop=\"bestRating\" content=\"{{ data.summary.maximumRating }}\">
    <meta itemprop=\"reviewCount\" content=\"{{ data.summary.totalReview }}\">

    {% include molecule('rating-selector', 'ProductReviewWidget') with {
        modifiers: ['pdp'],
        class: config.name ~ '__rating-selector',
        data: {
            value: data.summary.averageRating,
            maxValue: data.ratingMaxValue,
            useHalfSteps: true,
        },
        attributes: {
            readonly: true,
        },
    } only %}

    {% if data.summary.totalReview > 0 %}
        <div class=\"review-average-display__total-review\">
            {{- data.summary.totalReview }}

            {% set amount = data.summary.totalReview > 1 ? 'multiple' : data.summary.totalReview %}

            {{ amount | trans({
                '1' : 'product_review.summary.review' | trans,
                'multiple': 'product_review.summary.reviews' | trans,
            }) -}}
        </div>
    {% else %}
        <div class=\"review-average-display__total-review is-hidden-sm-only\">
            {{ 'product_review.no_reviews' | trans }}
        </div>
    {% endif %}

{% endblock %}
", "@ProductReviewWidget/components/molecules/review-average-display/review-average-display.twig", "/data/src/Pyz/Yves/ProductReviewWidget/Theme/default/components/molecules/review-average-display/review-average-display.twig");
    }
}
