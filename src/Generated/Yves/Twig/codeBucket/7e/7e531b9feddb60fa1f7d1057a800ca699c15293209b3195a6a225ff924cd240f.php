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

/* @ProductReviewWidget/components/molecules/review-distribution-display/review-distribution-display.twig */
class __TwigTemplate_75a5bd967ad3bc58e0587ea45e5bb7875991c2e97506869b4214f8e4b52c0619 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ProductReviewWidget/components/molecules/review-distribution-display/review-distribution-display.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "review-distribution-display", "tag" => "table"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["summary" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })())], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "summary", [], "any", false, false, false, 13), "ratingAggregation", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["rating"] => $context["ratingReview"]) {
            // line 14
            echo "
        ";
            // line 15
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "summary", [], "any", false, false, false, 15), "totalReview", [], "any", false, false, false, 15), 0))) {
                // line 16
                echo "            ";
                $context["ratingReviewPercent"] = 100;
                // line 17
                echo "        ";
            } else {
                // line 18
                echo "            ";
                $context["ratingReviewPercent"] = (100 - (($context["ratingReview"] / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "summary", [], "any", false, false, false, 18), "totalReview", [], "any", false, false, false, 18)) * 100));
                // line 19
                echo "        ";
            }
            // line 20
            echo "
        <tr>
            <td class=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
            echo "__summary-stars\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $context["rating"], "html", null, true);
            echo "

                ";
            // line 25
            $context["amount"] = (((1 === twig_compare($context["rating"], 1))) ? ("multiple") : ($context["rating"]));
            // line 26
            echo "
                ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 27, $this->source); })()), ["1" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.summary.star"), "multiple" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_review.summary.stars")]), "html", null, true);
            // line 30
            echo "
            </td>
            <td>
                <div class=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "__progress\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "summary", [], "any", false, false, false, 33), "totalReview", [], "any", false, false, false, 33), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $context["ratingReview"], "html", null, true);
            echo "\">
                    <div class=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "__progress-active\" style=\"left: -";
            echo twig_escape_filter($this->env, (isset($context["ratingReviewPercent"]) || array_key_exists("ratingReviewPercent", $context) ? $context["ratingReviewPercent"] : (function () { throw new RuntimeError('Variable "ratingReviewPercent" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "%;\"></div>
                </div>
            </td>
            <td class=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "__rating-review\">
                ";
            // line 38
            echo twig_escape_filter($this->env, $context["ratingReview"], "html", null, true);
            echo "
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rating'], $context['ratingReview'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@ProductReviewWidget/components/molecules/review-distribution-display/review-distribution-display.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 38,  116 => 37,  108 => 34,  100 => 33,  95 => 30,  93 => 27,  90 => 26,  88 => 25,  83 => 23,  79 => 22,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  61 => 15,  58 => 14,  53 => 13,  49 => 12,  45 => 1,  44 => 9,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'review-distribution-display',
    tag: 'table',
} %}

{% define data = {
    summary: required,
} %}

{% block body %}
    {% for rating, ratingReview in data.summary.ratingAggregation %}

        {% if data.summary.totalReview == 0  %}
            {% set ratingReviewPercent = 100 %}
        {% else %}
            {% set ratingReviewPercent =  100 - (ratingReview / data.summary.totalReview * 100) %}
        {% endif %}

        <tr>
            <td class=\"{{ config.name }}__summary-stars\">
                {{ rating }}

                {% set amount = rating > 1 ? 'multiple' : rating %}

                {{ amount | trans({
                    '1' : 'product_review.summary.star' | trans,
                    'multiple': 'product_review.summary.stars' | trans,
                }) }}
            </td>
            <td>
                <div class=\"{{ config.name }}__progress\" max=\"{{ data.summary.totalReview }}\" value=\"{{ ratingReview }}\">
                    <div class=\"{{ config.name }}__progress-active\" style=\"left: -{{ ratingReviewPercent }}%;\"></div>
                </div>
            </td>
            <td class=\"{{ config.name }}__rating-review\">
                {{ ratingReview }}
            </td>
        </tr>
    {% endfor %}
{% endblock %}
", "@ProductReviewWidget/components/molecules/review-distribution-display/review-distribution-display.twig", "/data/src/Pyz/Yves/ProductReviewWidget/Theme/default/components/molecules/review-distribution-display/review-distribution-display.twig");
    }
}
