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

/* @PriceProductVolumeWidget/components/molecules/volume-price/volume-price.twig */
class __TwigTemplate_2de59c5ac85c7bc00b7a6dfe090f561f1b4472d5e466b489091c3b3dcda8e2fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'priceMode' => [$this, 'block_priceMode'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["money-price"]), "@PriceProductVolumeWidget/components/molecules/volume-price/volume-price.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "volume-price", "tag" => "volume-price"], $context['config']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $context["amountClassName"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 9, $this->source); })()), "originalAmount", [], "any", false, false, false, 9))) ? ("text-alt") : (""));
        // line 10
        echo "
    <span class=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "__amount ";
        echo twig_escape_filter($this->env, (isset($context["amountClassName"]) || array_key_exists("amountClassName", $context) ? $context["amountClassName"] : (function () { throw new RuntimeError('Variable "amountClassName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\">
        <span itemprop=\"price\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('moneyRaw')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "amount", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 12, $this->source); })()), "jsName", [], "any", false, false, false, 12), "html", null, true);
        echo "__price ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "__price\">
            <meta itemprop=\"priceCurrency\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('currencyIsoCode')->getCallable(), []), "html", null, true);
        echo "\">
            ";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "amount", [], "any", false, false, false, 14)]), "html", null, true);
        echo "
        </span>
    </span>

    ";
        // line 18
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "originalAmount", [], "any", false, false, false, 18)) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "originalAmount", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "amount", [], "any", false, false, false, 18))))) {
            // line 19
            echo "<span class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
            echo "__amount ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
            echo "__amount--original\">
            ";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "originalAmount", [], "any", false, false, false, 20)]), "html", null, true);
            echo "
        </span>";
        }
        // line 24
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "amount", [], "any", false, false, false, 24))) {
            // line 25
            echo "        ";
            $this->displayBlock('priceMode', $context, $blocks);
            // line 28
            echo "    ";
        }
    }

    // line 25
    public function block_priceMode($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "            ";
        $this->displayParentBlock("priceMode", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PriceProductVolumeWidget/components/molecules/volume-price/volume-price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 26,  107 => 25,  102 => 28,  99 => 25,  97 => 24,  92 => 20,  85 => 19,  83 => 18,  76 => 14,  72 => 13,  64 => 12,  58 => 11,  55 => 10,  52 => 9,  48 => 8,  44 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('money-price') %}

{% define config = {
    name: 'volume-price',
    tag: 'volume-price',
} %}

{% block body %}
    {% set amountClassName = data.originalAmount is not empty ? 'text-alt' %}

    <span class=\"{{ config.name }}__amount {{ amountClassName }}\">
        <span itemprop=\"price\" content=\"{{ data.amount | moneyRaw }}\" class=\"{{ config.jsName }}__price {{ config.name }}__price\">
            <meta itemprop=\"priceCurrency\" content=\"{{ currencyIsoCode() }}\">
            {{ data.amount | money }}
        </span>
    </span>

    {% if data.originalAmount is not empty and data.originalAmount > data.amount -%}
        <span class=\"{{ config.name }}__amount {{ config.name }}__amount--original\">
            {{ data.originalAmount | money }}
        </span>
    {%- endif -%}

    {% if data.amount is not empty %}
        {% block priceMode %}
            {{ parent() }}
        {% endblock %}
    {% endif %}
{% endblock %}
", "@PriceProductVolumeWidget/components/molecules/volume-price/volume-price.twig", "/data/src/Pyz/Yves/PriceProductVolumeWidget/Theme/default/components/molecules/volume-price/volume-price.twig");
    }
}
