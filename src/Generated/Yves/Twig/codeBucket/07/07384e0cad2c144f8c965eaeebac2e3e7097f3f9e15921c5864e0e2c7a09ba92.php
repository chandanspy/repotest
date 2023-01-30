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

/* @ShopUi/components/molecules/money-price/money-price.twig */
class __TwigTemplate_83add133b4aae46688b8f9c1ad217d5650273f7688897b04a9fb2e88ef430685 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'defaultPrice' => [$this, 'block_defaultPrice'],
            'originalPrice' => [$this, 'block_originalPrice'],
            'originalPriceInner' => [$this, 'block_originalPriceInner'],
            'priceMode' => [$this, 'block_priceMode'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["money-price", "@SprykerShop:ShopUi"]), "@ShopUi/components/molecules/money-price/money-price.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["priceMode" => call_user_func_array($this->env->getFunction('getPriceMode')->getCallable(), [])], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $this->displayBlock('defaultPrice', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('originalPrice', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "amount", [], "any", false, false, false, 31))) {
            // line 32
            echo "        ";
            $this->displayBlock('priceMode', $context, $blocks);
            // line 43
            echo "    ";
        }
    }

    // line 9
    public function block_defaultPrice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "        ";
        $context["amountClassName"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "originalAmount", [], "any", false, false, false, 10))) ? ("text-alt") : (""));
        // line 11
        echo "        ";
        $context["defaultPriceJsName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "parentJsName", [], "any", false, false, false, 11)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "parentJsName", [], "any", false, false, false, 11) . "__default-price")) : (""));
        // line 12
        echo "
        <span itemprop=\"price\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('moneyRaw')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "amount", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13) . "__amount"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 13, $this->source); })())], 13, $context, $this->getSourceContext());
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["amountClassName"]) || array_key_exists("amountClassName", $context) ? $context["amountClassName"] : (function () { throw new RuntimeError('Variable "amountClassName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["defaultPriceJsName"]) || array_key_exists("defaultPriceJsName", $context) ? $context["defaultPriceJsName"] : (function () { throw new RuntimeError('Variable "defaultPriceJsName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\">
            <meta itemprop=\"priceCurrency\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('currencyIsoCode')->getCallable(), []), "html", null, true);
        echo "\">
            ";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "amount", [], "any", false, false, false, 15), true, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "currencyIsoCode", [], "any", false, false, false, 15)]), "html", null, true);
        echo "
        </span>
    ";
    }

    // line 19
    public function block_originalPrice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "        ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "originalAmount", [], "any", false, false, false, 20)) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "originalAmount", [], "any", false, false, false, 20), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "amount", [], "any", false, false, false, 20))))) {
            // line 21
            $this->displayBlock('originalPriceInner', $context, $blocks);
        }
    }

    public function block_originalPriceInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                ";
        $context["originalPriceJsName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "parentJsName", [], "any", false, false, false, 22)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "parentJsName", [], "any", false, false, false, 22) . "__original-price")) : (""));
        // line 23
        echo "
                <span class=\"";
        // line 24
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24) . "__amount"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 24, $this->source); })())], 24, $context, $this->getSourceContext());
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "__amount--original ";
        echo twig_escape_filter($this->env, (isset($context["originalPriceJsName"]) || array_key_exists("originalPriceJsName", $context) ? $context["originalPriceJsName"] : (function () { throw new RuntimeError('Variable "originalPriceJsName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "originalAmount", [], "any", false, false, false, 25), true, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "currencyIsoCode", [], "any", false, false, false, 25)]), "html", null, true);
        echo "
                </span>
            ";
    }

    // line 32
    public function block_priceMode($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "            <span class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33) . "__mode"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 33, $this->source); })())], 33, $context, $this->getSourceContext());
        echo "\">
                ";
        // line 34
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "priceMode", [], "any", false, false, false, 34), "GROSS_MODE"))) {
            // line 35
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("price.mode.incl_vat"), "html", null, true);
            echo "
                ";
        }
        // line 37
        echo "
                ";
        // line 38
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "priceMode", [], "any", false, false, false, 38), "NET_MODE"))) {
            // line 39
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("price.mode.excl_vat"), "html", null, true);
            echo "
                ";
        }
        // line 41
        echo "            </span>
        ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/money-price/money-price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 41,  170 => 39,  168 => 38,  165 => 37,  159 => 35,  157 => 34,  152 => 33,  148 => 32,  141 => 25,  133 => 24,  130 => 23,  127 => 22,  119 => 21,  116 => 20,  112 => 19,  105 => 15,  101 => 14,  91 => 13,  88 => 12,  85 => 11,  82 => 10,  78 => 9,  73 => 43,  70 => 32,  68 => 31,  65 => 30,  63 => 19,  60 => 18,  57 => 9,  53 => 8,  49 => 1,  48 => 4,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('money-price', '@SprykerShop:ShopUi') %}
{% import _self as component %}

{% define data = {
    priceMode: getPriceMode(),
} %}

{% block body %}
    {% block defaultPrice %}
        {% set amountClassName = data.originalAmount is not empty ? 'text-alt' %}
        {% set defaultPriceJsName = data.parentJsName ? data.parentJsName ~ '__default-price' %}

        <span itemprop=\"price\" content=\"{{ data.amount | moneyRaw }}\" class=\"{{ component.renderClass(config.name ~ '__amount', modifiers) }} {{ amountClassName }} {{ defaultPriceJsName }}\">
            <meta itemprop=\"priceCurrency\" content=\"{{ currencyIsoCode() }}\">
            {{ data.amount | money(true, data.currencyIsoCode) }}
        </span>
    {% endblock %}

    {% block originalPrice %}
        {% if data.originalAmount is not empty and data.originalAmount > data.amount -%}
            {% block originalPriceInner %}
                {% set originalPriceJsName = data.parentJsName ? data.parentJsName ~ '__original-price' %}

                <span class=\"{{ component.renderClass(config.name ~ '__amount', modifiers) }} {{ config.name }}__amount--original {{ originalPriceJsName }}\">
                    {{ data.originalAmount | money(true, data.currencyIsoCode) }}
                </span>
            {% endblock %}
        {%- endif -%}
    {% endblock %}

    {% if data.amount is not empty %}
        {% block priceMode %}
            <span class=\"{{ component.renderClass(config.name ~ '__mode', modifiers) }}\">
                {% if data.priceMode == 'GROSS_MODE' %}
                    {{ 'price.mode.incl_vat' | trans }}
                {% endif %}

                {% if data.priceMode == 'NET_MODE' %}
                    {{ 'price.mode.excl_vat' | trans }}
                {% endif %}
            </span>
        {% endblock %}
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/money-price/money-price.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/money-price/money-price.twig");
    }
}
