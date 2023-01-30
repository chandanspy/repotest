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

/* @ProductReviewWidget/components/organisms/review-summary/review-summary.twig */
class __TwigTemplate_5a3e5450bbf03f11265f80c96da051f8f6ba98f3e9cc51d30c2d77de582ce8b8 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ProductReviewWidget/components/organisms/review-summary/review-summary.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "review-summary", "tag" => "section"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["reviews" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "summary" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "ratingMaxValue" =>         // line 11
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 11, $this->source); })()), "hasCustomer" =>         // line 12
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 12, $this->source); })()), "idProductAbstract" =>         // line 13
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 13, $this->source); })()), "reviewForm" =>         // line 14
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 14, $this->source); })()), "action" =>         // line 15
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 15, $this->source); })()), "pagination" => ["parameters" =>         // line 17
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 17, $this->source); })()), "currentPage" =>         // line 18
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 18, $this->source); })()), "paginationPath" =>         // line 19
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 19, $this->source); })()), "maxPage" =>         // line 20
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 20, $this->source); })()), "showAlwaysFirstAndLast" => true, "anchor" => "product-reviews"]], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    <h2 class=\"title title--mobile-toggler-section js-pdp-section__trigger\" data-toggle-target='.js-pdp-section__target-reviews'>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.summary.title"), "html", null, true);
        echo " <span class=\"is-hidden-lg-xxl\">(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "summary", [], "any", false, false, false, 27), "totalReview", [], "any", false, false, false, 27), "html", null, true);
        echo ")</span></h2>

    <div class=\"grid grid--justify grid--gap js-pdp-section__target-reviews is-hidden-sm-md\">
        <div class=\"col col--sm-12 col--lg-6 col--xl-5\">
            <h3 class=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
        echo "__sub-title is-hidden-sm-md\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.product_ratings"), "html", null, true);
        echo "</h3>

            <div class=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "__rating-box text-center\">
                <div class=\"grid grid--justify\">
                    <div class=\"col col-sm-12 col--md-auto\">
                        ";
        // line 36
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["review-average-display", "ProductReviewWidget"]), "@ProductReviewWidget/components/organisms/review-summary/review-summary.twig", 36)->display(twig_to_array(["data" => ["summary" => twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "summary", [], "any", false, false, false, 38), "ratingMaxValue" => twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "ratingMaxValue", [], "any", false, false, false, 39)]]));
        // line 42
        echo "                    </div>

                    <div class=\"col col--sm-12 col--md-auto\">
                        ";
        // line 45
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["review-distribution-display", "ProductReviewWidget"]), "@ProductReviewWidget/components/organisms/review-summary/review-summary.twig", 45)->display(twig_to_array(["data" => ["summary" => twig_get_attribute($this->env, $this->source,         // line 47
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "summary", [], "any", false, false, false, 47)]]));
        // line 50
        echo "                    </div>
                </div>
                ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 53
            echo "                    <button class=\"button button--hollow button--expand-sm-only spacing-top spacing-top--big ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "jsName", [], "any", false, false, false, 53), "html", null, true);
            echo "__new-review-form-open\">
                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.submit.add_a_review"), "html", null, true);
            echo "
                    </button>
                ";
        } else {
            // line 57
            echo "                    <a class=\"button button--hollow button--expand-sm-only spacing-top spacing-top--big\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
                        ";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.submit.add_a_review"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 61
        echo "            </div>

            ";
        // line 63
        $context["togglerClickData"] = [0 => ["triggerClass" => (twig_get_attribute($this->env, $this->source,         // line 65
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 65, $this->source); })()), "jsName", [], "any", false, false, false, 65) . "__new-review-form-open"), "targetClass" => (twig_get_attribute($this->env, $this->source,         // line 66
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 66, $this->source); })()), "jsName", [], "any", false, false, false, 66) . "__new-review-form"), "triggerClassToToggle" => "is-hidden"], 1 => ["triggerClass" => (twig_get_attribute($this->env, $this->source,         // line 70
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 70, $this->source); })()), "jsName", [], "any", false, false, false, 70) . "__new-review-form-close"), "targetClass" => (twig_get_attribute($this->env, $this->source,         // line 71
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 71, $this->source); })()), "jsName", [], "any", false, false, false, 71) . "__new-review-form")], 2 => ["triggerClass" => (twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 74, $this->source); })()), "jsName", [], "any", false, false, false, 74) . "__new-review-form-close"), "targetClass" => (twig_get_attribute($this->env, $this->source,         // line 75
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 75, $this->source); })()), "jsName", [], "any", false, false, false, 75) . "__new-review-form-open")]];
        // line 78
        echo "
            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["togglerClickData"]) || array_key_exists("togglerClickData", $context) ? $context["togglerClickData"] : (function () { throw new RuntimeError('Variable "togglerClickData" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["componentData"]) {
            // line 80
            echo "                ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-click"]), "@ProductReviewWidget/components/organisms/review-summary/review-summary.twig", 80)->display(twig_to_array(["attributes" => ["trigger-class-name" => twig_get_attribute($this->env, $this->source,             // line 82
$context["componentData"], "triggerClass", [], "any", false, false, false, 82), "target-class-name" => twig_get_attribute($this->env, $this->source,             // line 83
$context["componentData"], "targetClass", [], "any", false, false, false, 83), "trigger-class-to-toggle" => (((twig_get_attribute($this->env, $this->source,             // line 84
$context["componentData"], "triggerClassToToggle", [], "any", true, true, false, 84) &&  !(null === twig_get_attribute($this->env, $this->source, $context["componentData"], "triggerClassToToggle", [], "any", false, false, false, 84)))) ? (twig_get_attribute($this->env, $this->source, $context["componentData"], "triggerClassToToggle", [], "any", false, false, false, 84)) : (""))]]));
            // line 87
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['componentData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
            ";
        // line 89
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-hash"]), "@ProductReviewWidget/components/organisms/review-summary/review-summary.twig", 89)->display(twig_to_array(["attributes" => ["trigger-hash" => "#review", "target-class-name" => (twig_get_attribute($this->env, $this->source,         // line 92
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 92, $this->source); })()), "jsName", [], "any", false, false, false, 92) . "__new-review-form"), "add-class-when-hash-in-url" => false]]));
        // line 96
        echo "
            ";
        // line 97
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 98
            echo "                <a id=\"review\"></a>

                <div class=\"";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 100, $this->source); })()), "name", [], "any", false, false, false, 100), "html", null, true);
            echo "__new-review-form ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 100, $this->source); })()), "jsName", [], "any", false, false, false, 100), "html", null, true);
            echo "__new-review-form\">
                    ";
            // line 101
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["new-review-form", "ProductReviewWidget"]), "@ProductReviewWidget/components/organisms/review-summary/review-summary.twig", 101)->display(twig_to_array(["data" => ["form" => twig_get_attribute($this->env, $this->source,             // line 103
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 103, $this->source); })()), "reviewForm", [], "any", false, false, false, 103), "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source,             // line 104
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "action", [], "any", false, false, false, 104), ["idProductAbstract" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 104)])]]));
            // line 107
            echo "                </div>
            ";
        }
        // line 109
        echo "
        </div>

        <div class=\"col col--sm-12 col--lg-6\">
            <h3 class=\"title title--review-subtitle\">";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.product_reviews"), "html", null, true);
        echo " <span class=\"is-hidden-lg-xxl\">(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 113, $this->source); })()), "summary", [], "any", false, false, false, 113), "totalReview", [], "any", false, false, false, 113), "html", null, true);
        echo ")</span></h3>

            ";
        // line 115
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 115, $this->source); })()), "reviews", [], "any", false, false, false, 115))) {
            // line 116
            echo "                <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 116, $this->source); })()), "name", [], "any", false, false, false, 116), "html", null, true);
            echo "__no-review\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.no_reviews"), "html", null, true);
            echo "</div>
            ";
        } else {
            // line 118
            echo "                ";
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 118, $this->source); })()), "summary", [], "any", false, false, false, 118), "totalReview", [], "any", false, false, false, 118), 0))) {
                // line 119
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 119, $this->source); })()), "reviews", [], "any", false, false, false, 119));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 120
                    echo "                        ";
                    $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["review", "ProductReviewWidget"]), "@ProductReviewWidget/components/organisms/review-summary/review-summary.twig", 120)->display(twig_to_array(["data" => ["summary" => twig_get_attribute($this->env, $this->source,                     // line 122
$context["review"], "summary", [], "any", false, false, false, 122), "ratingValue" => twig_get_attribute($this->env, $this->source,                     // line 123
$context["review"], "rating", [], "any", false, false, false, 123), "ratingMaxValue" => twig_get_attribute($this->env, $this->source,                     // line 124
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 124, $this->source); })()), "ratingMaxValue", [], "any", false, false, false, 124), "nickname" => twig_get_attribute($this->env, $this->source,                     // line 125
$context["review"], "nickname", [], "any", false, false, false, 125), "createdAt" => $this->extensions['Spryker\Service\UtilDateTime\Plugin\Twig\DateTimeFormatterTwigPlugin']->formatDateTime(twig_get_attribute($this->env, $this->source,                     // line 126
$context["review"], "createdAt", [], "any", false, false, false, 126)), "description" => twig_get_attribute($this->env, $this->source,                     // line 127
$context["review"], "description", [], "any", false, false, false, 127)]]));
                    // line 130
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "
                    ";
                // line 132
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["pagination"]), "@ProductReviewWidget/components/organisms/review-summary/review-summary.twig", 132)->display(twig_to_array(["data" => twig_get_attribute($this->env, $this->source,                 // line 133
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 133, $this->source); })()), "pagination", [], "any", false, false, false, 133)]));
                // line 135
                echo "                ";
            }
            // line 136
            echo "            ";
        }
        // line 137
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@ProductReviewWidget/components/organisms/review-summary/review-summary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 137,  241 => 136,  238 => 135,  236 => 133,  235 => 132,  232 => 131,  226 => 130,  224 => 127,  223 => 126,  222 => 125,  221 => 124,  220 => 123,  219 => 122,  217 => 120,  212 => 119,  209 => 118,  201 => 116,  199 => 115,  192 => 113,  186 => 109,  182 => 107,  180 => 104,  179 => 103,  178 => 101,  172 => 100,  168 => 98,  166 => 97,  163 => 96,  161 => 92,  160 => 89,  157 => 88,  151 => 87,  149 => 84,  148 => 83,  147 => 82,  145 => 80,  141 => 79,  138 => 78,  136 => 75,  135 => 74,  134 => 71,  133 => 70,  132 => 66,  131 => 65,  130 => 63,  126 => 61,  120 => 58,  115 => 57,  109 => 54,  104 => 53,  102 => 52,  98 => 50,  96 => 47,  95 => 45,  90 => 42,  88 => 39,  87 => 38,  86 => 36,  80 => 33,  73 => 31,  63 => 27,  59 => 26,  55 => 1,  54 => 20,  53 => 19,  52 => 18,  51 => 17,  50 => 15,  49 => 14,  48 => 13,  47 => 12,  46 => 11,  45 => 10,  44 => 9,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'review-summary',
    tag: 'section',
} %}

{% define data = {
    reviews: required,
    summary: required,
    ratingMaxValue: required,
    hasCustomer: required,
    idProductAbstract: required,
    reviewForm: required,
    action: required,
    pagination: {
        parameters: required,
        currentPage: required,
        paginationPath: required,
        maxPage: required,
        showAlwaysFirstAndLast: true,
        anchor: 'product-reviews',
    },
} %}

{% block body %}
    <h2 class=\"title title--mobile-toggler-section js-pdp-section__trigger\" data-toggle-target='.js-pdp-section__target-reviews'>{{ 'product_review.summary.title' | trans }} <span class=\"is-hidden-lg-xxl\">({{ data.summary.totalReview }})</span></h2>

    <div class=\"grid grid--justify grid--gap js-pdp-section__target-reviews is-hidden-sm-md\">
        <div class=\"col col--sm-12 col--lg-6 col--xl-5\">
            <h3 class=\"{{ config.name }}__sub-title is-hidden-sm-md\">{{ 'product_review.product_ratings' | trans }}</h3>

            <div class=\"{{ config.name }}__rating-box text-center\">
                <div class=\"grid grid--justify\">
                    <div class=\"col col-sm-12 col--md-auto\">
                        {% include molecule('review-average-display', 'ProductReviewWidget') with {
                            data: {
                                summary: data.summary,
                                ratingMaxValue: data.ratingMaxValue,
                            },
                        } only %}
                    </div>

                    <div class=\"col col--sm-12 col--md-auto\">
                        {% include molecule('review-distribution-display', 'ProductReviewWidget') with {
                            data: {
                                summary: data.summary,
                            },
                        } only %}
                    </div>
                </div>
                {% if is_granted('ROLE_USER') %}
                    <button class=\"button button--hollow button--expand-sm-only spacing-top spacing-top--big {{ config.jsName }}__new-review-form-open\">
                        {{ 'product_review.submit.add_a_review' | trans }}
                    </button>
                {% else %}
                    <a class=\"button button--hollow button--expand-sm-only spacing-top spacing-top--big\" href=\"{{ path('login') }}\">
                        {{ 'product_review.submit.add_a_review' | trans }}
                    </a>
                {% endif %}
            </div>

            {% set togglerClickData = [
                {
                    triggerClass: config.jsName ~ '__new-review-form-open',
                    targetClass: config.jsName ~ '__new-review-form',
                    triggerClassToToggle: 'is-hidden',
                },
                {
                    triggerClass: config.jsName ~ '__new-review-form-close',
                    targetClass: config.jsName ~ '__new-review-form',
                },
                {
                    triggerClass: config.jsName ~ '__new-review-form-close',
                    targetClass: config.jsName ~ '__new-review-form-open',
                },
            ] %}

            {% for componentData in togglerClickData %}
                {% include molecule('toggler-click') with {
                    attributes: {
                        'trigger-class-name': componentData.triggerClass,
                        'target-class-name': componentData.targetClass,
                        'trigger-class-to-toggle': componentData.triggerClassToToggle ?? '',
                    },
                } only %}
            {% endfor %}

            {% include molecule('toggler-hash') with {
                attributes: {
                    'trigger-hash': '#review',
                    'target-class-name': config.jsName ~ '__new-review-form',
                    'add-class-when-hash-in-url': false,
                },
            } only %}

            {% if is_granted('ROLE_USER') %}
                <a id=\"review\"></a>

                <div class=\"{{ config.name }}__new-review-form {{ config.jsName }}__new-review-form\">
                    {% include molecule('new-review-form', 'ProductReviewWidget') with {
                        data: {
                            form: data.reviewForm,
                            action: url(data.action, {idProductAbstract: data.idProductAbstract}),
                        },
                    } only %}
                </div>
            {% endif %}

        </div>

        <div class=\"col col--sm-12 col--lg-6\">
            <h3 class=\"title title--review-subtitle\">{{ 'product_review.product_reviews' | trans }} <span class=\"is-hidden-lg-xxl\">({{ data.summary.totalReview }})</span></h3>

            {% if data.reviews is empty %}
                <div class=\"{{ config.name }}__no-review\">{{ 'product_review.no_reviews' | trans }}</div>
            {% else %}
                {% if data.summary.totalReview > 0 %}
                    {% for review in data.reviews %}
                        {% include molecule('review', 'ProductReviewWidget') with {
                            data: {
                                summary: review.summary,
                                ratingValue: review.rating,
                                ratingMaxValue: data.ratingMaxValue,
                                nickname: review.nickname,
                                createdAt: review.createdAt | formatDateTime,
                                description: review.description,
                            },
                        } only %}
                    {% endfor %}

                    {% include molecule('pagination') with {
                        data: data.pagination,
                    } only %}
                {% endif %}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "@ProductReviewWidget/components/organisms/review-summary/review-summary.twig", "/data/src/Pyz/Yves/ProductReviewWidget/Theme/default/components/organisms/review-summary/review-summary.twig");
    }
}
