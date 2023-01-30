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

/* @@SprykerShop:ProductReviewWidget/components/molecules/review/review.twig */
class __TwigTemplate_20f6d1aae5ec8350b0bec858e97df484a0385bd0ce6c14b8e771da3cd839c9cc extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:ProductReviewWidget/components/molecules/review/review.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "review", "tag" => "article"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["summary" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "ratingValue" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "ratingMaxValue" =>         // line 11
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 11, $this->source); })()), "nickname" =>         // line 12
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 12, $this->source); })()), "createdAt" =>         // line 13
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 13, $this->source); })()), "description" =>         // line 14
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 14, $this->source); })())], $context['data']);        // line 17
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["itemscope" => "", "itemtype" => "https://schema.org/Review", "itemprop" => "review"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <h3 itemprop=\"name\" class=\"title--h5\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "summary", [], "any", false, false, false, 24), "html");
        echo "</h3>

    ";
        // line 26
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["rating-selector", "ProductReviewWidget"]), "@@SprykerShop:ProductReviewWidget/components/molecules/review/review.twig", 26)->display(twig_to_array(["data" => ["value" => twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "ratingValue", [], "any", false, false, false, 28), "maxValue" => twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "ratingMaxValue", [], "any", false, false, false, 29), "useHalfSteps" => true], "attributes" => ["readonly" => true]]));
        // line 36
        echo "
    <ul class=\"list spacing-y text-secondary\">
        <li class=\"list__item\">
            <small>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.by"), "html", null, true);
        echo "</small> <span itemprop=\"author\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "nickname", [], "any", false, false, false, 39), "html");
        echo "</span>
        </li>
        <li class=\"list__item\">
            <small>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.on"), "html", null, true);
        echo "</small> <span itemprop=\"datePublished\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "createdAt", [], "any", false, false, false, 42), "html", null, true);
        echo "</span>
        </li>
    </ul>

    <span itemprop=\"reviewBody\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), "html");
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductReviewWidget/components/molecules/review/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 46,  82 => 42,  74 => 39,  69 => 36,  67 => 29,  66 => 28,  65 => 26,  59 => 24,  55 => 23,  51 => 1,  50 => 17,  49 => 14,  48 => 13,  47 => 12,  46 => 11,  45 => 10,  44 => 9,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'review',
    tag: 'article'
} %}

{% define data = {
    summary: required,
    ratingValue: required,
    ratingMaxValue: required,
    nickname: required,
    createdAt: required,
    description: required,
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Review',
    itemprop: 'review',
} %}

{% block body %}
    <h3 itemprop=\"name\" class=\"title--h5\">{{ data.summary | e('html') }}</h3>

    {% include molecule('rating-selector', 'ProductReviewWidget') with {
        data: {
            value: data.ratingValue,
            maxValue: data.ratingMaxValue,
            useHalfSteps: true
        },
        attributes: {
            readonly: true
        }
    } only %}

    <ul class=\"list spacing-y text-secondary\">
        <li class=\"list__item\">
            <small>{{ 'page.product.by' | trans }}</small> <span itemprop=\"author\">{{ data.nickname | e('html') }}</span>
        </li>
        <li class=\"list__item\">
            <small>{{ 'product_review.on' | trans }}</small> <span itemprop=\"datePublished\">{{ data.createdAt }}</span>
        </li>
    </ul>

    <span itemprop=\"reviewBody\">{{ data.description | e('html') }}</span>
{% endblock %}
", "@@SprykerShop:ProductReviewWidget/components/molecules/review/review.twig", "/data/vendor/spryker-shop/product-review-widget/src/SprykerShop/Yves/ProductReviewWidget/Theme/default/components/molecules/review/review.twig");
    }
}
