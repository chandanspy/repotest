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

/* @@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig */
class __TwigTemplate_50d72c029b5eadcc0b44f45d9e94fb1a71003070f61577ab8b7edf09bf6d1eba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'originalPrice' => [$this, 'block_originalPrice'],
            'originalPriceInner' => [$this, 'block_originalPriceInner'],
            'defaultPrice' => [$this, 'block_defaultPrice'],
            'defaultPriceNoText' => [$this, 'block_defaultPriceNoText'],
            'defaultPriceInner' => [$this, 'block_defaultPriceInner'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "money-price", "tag" => "span"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["amount" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "originalAmount" => null, "noPriceText" => "---", "currencyIsoCode" => null, "parentJsName" => ""], $context['data']);        // line 17
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["itemscope" => "", "itemprop" => "offers", "itemtype" => "https://schema.org/Offer"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        $this->displayBlock('originalPrice', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('defaultPrice', $context, $blocks);
    }

    // line 24
    public function block_originalPrice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "        ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "originalAmount", [], "any", false, false, false, 25)) && (1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "originalAmount", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "amount", [], "any", false, false, false, 25))))) {
            // line 26
            $this->displayBlock('originalPriceInner', $context, $blocks);
        }
    }

    public function block_originalPriceInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                ";
        $context["originalPriceJsName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "parentJsName", [], "any", false, false, false, 27)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "parentJsName", [], "any", false, false, false, 27) . "__original-price")) : (""));
        // line 28
        echo "
                ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "originalAmount", [], "any", false, false, false, 29)) {
            // line 30
            echo "                    <span class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "__amount ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "__amount--original ";
            echo twig_escape_filter($this->env, (isset($context["originalPriceJsName"]) || array_key_exists("originalPriceJsName", $context) ? $context["originalPriceJsName"] : (function () { throw new RuntimeError('Variable "originalPriceJsName" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\">";
            // line 31
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "originalAmount", [], "any", false, false, false, 31), true, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "currencyIsoCode", [], "any", false, false, false, 31)]), "html", null, true);
            // line 32
            echo "</span>
                ";
        }
        // line 34
        echo "            ";
    }

    // line 38
    public function block_defaultPrice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "        ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "amount", [], "any", false, false, false, 39))) {
            // line 40
            $this->displayBlock('defaultPriceNoText', $context, $blocks);
        } else {
            // line 44
            $this->displayBlock('defaultPriceInner', $context, $blocks);
        }
    }

    // line 40
    public function block_defaultPriceNoText($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "noPriceText", [], "any", false, false, false, 41), "html", null, true);
        echo "
            ";
    }

    // line 44
    public function block_defaultPriceInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                ";
        $context["defaultPriceJsName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "parentJsName", [], "any", false, false, false, 45)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "parentJsName", [], "any", false, false, false, 45) . "__default-price")) : (""));
        // line 46
        echo "
                <span class=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "__amount\">
                    ";
        // line 48
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", 48)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 49
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49) . "__tag"), "data" => ["name" => "tag"]]));
        // line 54
        echo "                    <span itemprop=\"price\" content=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('moneyRaw')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), "amount", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["defaultPriceJsName"]) || array_key_exists("defaultPriceJsName", $context) ? $context["defaultPriceJsName"] : (function () { throw new RuntimeError('Variable "defaultPriceJsName" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\">
                        <meta itemprop=\"priceCurrency\" content=\"";
        // line 55
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CurrencyIsoCodeWidget")) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", 55, 1358957530)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        echo "\">";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "amount", [], "any", false, false, false, 56), true, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "currencyIsoCode", [], "any", false, false, false, 56)]), "html", null, true);
        // line 57
        echo "</span>
                </span>
            ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 57,  165 => 56,  160 => 55,  153 => 54,  151 => 49,  150 => 48,  146 => 47,  143 => 46,  140 => 45,  136 => 44,  129 => 41,  125 => 40,  120 => 44,  117 => 40,  114 => 39,  110 => 38,  106 => 34,  102 => 32,  100 => 31,  92 => 30,  90 => 29,  87 => 28,  84 => 27,  76 => 26,  73 => 25,  69 => 24,  65 => 38,  62 => 37,  59 => 24,  55 => 23,  51 => 1,  50 => 17,  49 => 10,  48 => 9,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'money-price',
    tag: 'span',
} %}

{# @deprecated property \"noPriceText\" is deprecate: kept for BC reasons, will be removed in next major. #}
{% define data = {
    amount: required,
    originalAmount: null,
    noPriceText: '---',
    currencyIsoCode: null,
    parentJsName: '',
} %}

{% define attributes = {
    itemscope: '',
    itemprop: 'offers',
    itemtype: 'https://schema.org/Offer',
} %}

{% block body %}
    {% block originalPrice %}
        {% if data.originalAmount is not empty and data.originalAmount > data.amount -%}
            {% block originalPriceInner %}
                {% set originalPriceJsName = data.parentJsName ? data.parentJsName ~ '__original-price' %}

                {% if data.originalAmount %}
                    <span class=\"{{ config.name }}__amount {{ config.name }}__amount--original {{ originalPriceJsName }}\">
                        {{- data.originalAmount | money(true, data.currencyIsoCode) -}}
                    </span>
                {% endif %}
            {% endblock %}
        {%- endif -%}
    {% endblock %}

    {% block defaultPrice %}
        {% if data.amount is empty -%}
            {% block defaultPriceNoText %}
                {{ data.noPriceText }}
            {% endblock %}
        {%- else -%}
            {% block defaultPriceInner %}
                {% set defaultPriceJsName = data.parentJsName ? data.parentJsName ~ '__default-price' %}

                <span class=\"{{ config.name }}__amount\">
                    {% include atom('icon') with {
                        class: config.name ~ '__tag',
                        data: {
                            name: 'tag',
                        },
                    } only %}
                    <span itemprop=\"price\" content=\"{{ data.amount | moneyRaw }}\" class=\"{{ defaultPriceJsName }}\">
                        <meta itemprop=\"priceCurrency\" content=\"{% widget 'CurrencyIsoCodeWidget' only %}{% endwidget %}\">
                        {{- data.amount | money(true, data.currencyIsoCode) -}}
                    </span>
                </span>
            {% endblock %}
        {%- endif -%}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/money-price/money-price.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig */
class __TwigTemplate_50d72c029b5eadcc0b44f45d9e94fb1a71003070f61577ab8b7edf09bf6d1eba___1358957530 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 55
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 55, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", 55);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 55,  167 => 57,  165 => 56,  160 => 55,  153 => 54,  151 => 49,  150 => 48,  146 => 47,  143 => 46,  140 => 45,  136 => 44,  129 => 41,  125 => 40,  120 => 44,  117 => 40,  114 => 39,  110 => 38,  106 => 34,  102 => 32,  100 => 31,  92 => 30,  90 => 29,  87 => 28,  84 => 27,  76 => 26,  73 => 25,  69 => 24,  65 => 38,  62 => 37,  59 => 24,  55 => 23,  51 => 1,  50 => 17,  49 => 10,  48 => 9,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'money-price',
    tag: 'span',
} %}

{# @deprecated property \"noPriceText\" is deprecate: kept for BC reasons, will be removed in next major. #}
{% define data = {
    amount: required,
    originalAmount: null,
    noPriceText: '---',
    currencyIsoCode: null,
    parentJsName: '',
} %}

{% define attributes = {
    itemscope: '',
    itemprop: 'offers',
    itemtype: 'https://schema.org/Offer',
} %}

{% block body %}
    {% block originalPrice %}
        {% if data.originalAmount is not empty and data.originalAmount > data.amount -%}
            {% block originalPriceInner %}
                {% set originalPriceJsName = data.parentJsName ? data.parentJsName ~ '__original-price' %}

                {% if data.originalAmount %}
                    <span class=\"{{ config.name }}__amount {{ config.name }}__amount--original {{ originalPriceJsName }}\">
                        {{- data.originalAmount | money(true, data.currencyIsoCode) -}}
                    </span>
                {% endif %}
            {% endblock %}
        {%- endif -%}
    {% endblock %}

    {% block defaultPrice %}
        {% if data.amount is empty -%}
            {% block defaultPriceNoText %}
                {{ data.noPriceText }}
            {% endblock %}
        {%- else -%}
            {% block defaultPriceInner %}
                {% set defaultPriceJsName = data.parentJsName ? data.parentJsName ~ '__default-price' %}

                <span class=\"{{ config.name }}__amount\">
                    {% include atom('icon') with {
                        class: config.name ~ '__tag',
                        data: {
                            name: 'tag',
                        },
                    } only %}
                    <span itemprop=\"price\" content=\"{{ data.amount | moneyRaw }}\" class=\"{{ defaultPriceJsName }}\">
                        <meta itemprop=\"priceCurrency\" content=\"{% widget 'CurrencyIsoCodeWidget' only %}{% endwidget %}\">
                        {{- data.amount | money(true, data.currencyIsoCode) -}}
                    </span>
                </span>
            {% endblock %}
        {%- endif -%}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/money-price/money-price.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/money-price/money-price.twig");
    }
}
