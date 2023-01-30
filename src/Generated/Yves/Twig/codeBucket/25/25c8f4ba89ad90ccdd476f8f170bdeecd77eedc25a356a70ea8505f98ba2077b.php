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

/* @ProductReviewWidget/components/molecules/review/review.twig */
class __TwigTemplate_7bdac69cd00b21e3eea5e878ab452f2c740fed17e2959aa4c130070cc42bae2d extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["review", "@SprykerShop:ProductReviewWidget"]), "@ProductReviewWidget/components/molecules/review/review.twig", 1);
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
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "__summary\">
        <span itemprop=\"name\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "summary", [], "any", false, false, false, 5), "html");
        echo "</span>

        ";
        // line 7
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["rating-selector", "ProductReviewWidget"]), "@ProductReviewWidget/components/molecules/review/review.twig", 7)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8) . "__stars"), "data" => ["value" => twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "ratingValue", [], "any", false, false, false, 10), "maxValue" => twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "ratingMaxValue", [], "any", false, false, false, 11), "useHalfSteps" => true], "attributes" => ["readonly" => true]]));
        // line 18
        echo "    </div>
    <div class=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "__author\">
        <span itemprop=\"author\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "nickname", [], "any", false, false, false, 20), "html");
        echo "</span> -
        <span itemprop=\"datePublished\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "createdAt", [], "any", false, false, false, 21), "html", null, true);
        echo "</span>
    </div>
    <div itemprop=\"reviewBody\" class=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "__description\">
        ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html");
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@ProductReviewWidget/components/molecules/review/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  80 => 23,  75 => 21,  71 => 20,  67 => 19,  64 => 18,  62 => 11,  61 => 10,  60 => 8,  59 => 7,  54 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('review', '@SprykerShop:ProductReviewWidget') %}

{% block body %}
    <div class=\"{{ config.name }}__summary\">
        <span itemprop=\"name\">{{ data.summary | e('html') }}</span>

        {% include molecule('rating-selector', 'ProductReviewWidget') with {
            class: config.name ~ '__stars',
            data: {
                value: data.ratingValue,
                maxValue: data.ratingMaxValue,
                useHalfSteps: true,
            },
            attributes: {
                readonly: true,
            },
        } only %}
    </div>
    <div class=\"{{ config.name }}__author\">
        <span itemprop=\"author\">{{ data.nickname | e('html')}}</span> -
        <span itemprop=\"datePublished\">{{ data.createdAt }}</span>
    </div>
    <div itemprop=\"reviewBody\" class=\"{{ config.name }}__description\">
        {{ data.description | e('html')}}
    </div>
{% endblock %}
", "@ProductReviewWidget/components/molecules/review/review.twig", "/data/src/Pyz/Yves/ProductReviewWidget/Theme/default/components/molecules/review/review.twig");
    }
}
