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

/* @PriceProductVolumeWidget/views/volume-price-product-widget/volume-price-product.twig */
class __TwigTemplate_e1ce565af58697d9d2a40a18626c7e9e43030fc3bd63801d4b1fd72cd4a76fbf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'priceTable' => [$this, 'block_priceTable'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@PriceProductVolumeWidget/views/volume-price-product-widget/volume-price-product.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["amount" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "product", [], "any", false, false, false, 4), "price", [], "any", false, false, false, 4), "originalAmount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["_widget"] ?? null), "product", [], "any", false, true, false, 5), "prices", [], "any", false, true, false, 5), "ORIGINAL", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "product", [], "any", false, true, false, 5), "prices", [], "any", false, true, false, 5), "ORIGINAL", [], "any", false, false, false, 5))) : ("")), "volumeProductPrices" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "volumeProductPrices", [], "any", false, false, false, 6)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $context["jsonVolumeProductPrices"] = [0 => ["price" => call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "amount", [], "any", false, false, false, 10)]), "count" => 1]];
        // line 11
        echo "
    ";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "volumeProductPrices", [], "any", false, true, false, 12), "volumePrices", [], "any", true, true, false, 12) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "volumeProductPrices", [], "any", false, false, false, 12), "volumePrices", [], "any", false, false, false, 12)))) {
            // line 13
            echo "        ";
            $this->displayBlock('priceTable', $context, $blocks);
            // line 20
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "volumeProductPrices", [], "any", false, false, false, 20), "volumePrices", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["volumePrice"]) {
                // line 21
                echo "            ";
                $context["jsonVolumeProductPrices"] = twig_array_merge((isset($context["jsonVolumeProductPrices"]) || array_key_exists("jsonVolumeProductPrices", $context) ? $context["jsonVolumeProductPrices"] : (function () { throw new RuntimeError('Variable "jsonVolumeProductPrices" does not exist.', 21, $this->source); })()), [0 => ["price" => call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source,                 // line 22
$context["volumePrice"], "price", [], "any", false, false, false, 22)]), "count" => twig_get_attribute($this->env, $this->source, $context["volumePrice"], "quantity", [], "any", false, false, false, 22)]]);
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['volumePrice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
            // line 28
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["volume-price", "PriceProductVolumeWidget"]), "@PriceProductVolumeWidget/views/volume-price-product-widget/volume-price-product.twig", 28)->display(twig_to_array(["attributes" => ["data-json" => json_encode(            // line 30
(isset($context["jsonVolumeProductPrices"]) || array_key_exists("jsonVolumeProductPrices", $context) ? $context["jsonVolumeProductPrices"] : (function () { throw new RuntimeError('Variable "jsonVolumeProductPrices" does not exist.', 30, $this->source); })()))], "data" => ["amount" => twig_get_attribute($this->env, $this->source,             // line 33
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "amount", [], "any", false, false, false, 33), "originalAmount" => twig_get_attribute($this->env, $this->source,             // line 34
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "originalAmount", [], "any", false, false, false, 34)]]));
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.access.cannot_see_price"), "html", null, true);
            echo "
    ";
        }
        // line 40
        echo "
";
    }

    // line 13
    public function block_priceTable($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["volume-price-table", "PriceProductVolumeWidget"]), "@PriceProductVolumeWidget/views/volume-price-product-widget/volume-price-product.twig", 14)->display(twig_to_array(["data" => ["volumePrices" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "volumeProductPrices", [], "any", false, false, false, 16), "volumePrices", [], "any", false, false, false, 16)]]));
        // line 19
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@PriceProductVolumeWidget/views/volume-price-product-widget/volume-price-product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 19,  115 => 16,  113 => 14,  109 => 13,  104 => 40,  98 => 38,  95 => 37,  93 => 34,  92 => 33,  91 => 30,  89 => 28,  87 => 27,  84 => 26,  81 => 25,  75 => 24,  73 => 22,  71 => 21,  66 => 20,  63 => 13,  61 => 12,  58 => 11,  55 => 10,  51 => 9,  47 => 1,  46 => 6,  45 => 5,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    amount: _widget.product.price,
    originalAmount: _widget.product.prices.ORIGINAL | default,
    volumeProductPrices: _widget.volumeProductPrices,
} %}

{% block body %}
    {% set jsonVolumeProductPrices = [{\"price\": data.amount|money, \"count\": 1}] %}

    {% if data.volumeProductPrices.volumePrices is defined and data.volumeProductPrices.volumePrices is not empty %}
        {% block priceTable %}
            {% include molecule('volume-price-table', 'PriceProductVolumeWidget') with {
                data: {
                    volumePrices: data.volumeProductPrices.volumePrices,
                }
            } only %}
        {% endblock %}
        {% for volumePrice in data.volumeProductPrices.volumePrices %}
            {% set jsonVolumeProductPrices = jsonVolumeProductPrices|merge(
                [{\"price\": volumePrice.price|money, \"count\": volumePrice.quantity}]
            ) %}
        {% endfor %}
    {% endif %}

    {% if can('SeePricePermissionPlugin') %}
        {% include molecule('volume-price', 'PriceProductVolumeWidget') with {
            attributes: {
                'data-json': jsonVolumeProductPrices|json_encode()
            },
            data: {
                amount: data.amount,
                originalAmount: data.originalAmount
            }
        } only %}
    {% else %}
        {{ 'customer.access.cannot_see_price' | trans }}
    {% endif %}

{% endblock %}
", "@PriceProductVolumeWidget/views/volume-price-product-widget/volume-price-product.twig", "/data/vendor/spryker-shop/price-product-volume-widget/src/SprykerShop/Yves/PriceProductVolumeWidget/Theme/default/views/volume-price-product-widget/volume-price-product.twig");
    }
}
