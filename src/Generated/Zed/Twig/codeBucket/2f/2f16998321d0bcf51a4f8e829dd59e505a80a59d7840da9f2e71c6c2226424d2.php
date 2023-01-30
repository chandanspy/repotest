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

/* @ProductManagement/_partials/product_volume_price_action_button.twig */
class __TwigTemplate_77ea23ae88fd66955b372af2f4da512dd969684361a5d487bcd2c7b872b2c080 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["volumePrices"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["moneyValueFormViewCollection"] ?? null), "vars", [], "any", false, true, false, 1), "volumePrices", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["moneyValueFormViewCollection"] ?? null), "vars", [], "any", false, true, false, 1), "volumePrices", [], "any", false, false, false, 1), [])) : ([]));
        // line 2
        $context["volumePriceType"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["volumePrices"] ?? null), (isset($context["storeName"]) || array_key_exists("storeName", $context) ? $context["storeName"] : (function () { throw new RuntimeError('Variable "storeName" does not exist.', 2, $this->source); })()), [], "array", false, true, false, 2), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 2, $this->source); })()), [], "array", false, true, false, 2), (isset($context["priceType"]) || array_key_exists("priceType", $context) ? $context["priceType"] : (function () { throw new RuntimeError('Variable "priceType" does not exist.', 2, $this->source); })()), [], "array", true, true, false, 2) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["volumePrices"] ?? null), (isset($context["storeName"]) || array_key_exists("storeName", $context) ? $context["storeName"] : (function () { throw new RuntimeError('Variable "storeName" does not exist.', 2, $this->source); })()), [], "array", false, true, false, 2), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 2, $this->source); })()), [], "array", false, true, false, 2), (isset($context["priceType"]) || array_key_exists("priceType", $context) ? $context["priceType"] : (function () { throw new RuntimeError('Variable "priceType" does not exist.', 2, $this->source); })()), [], "array", false, false, false, 2)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["volumePrices"] ?? null), (isset($context["storeName"]) || array_key_exists("storeName", $context) ? $context["storeName"] : (function () { throw new RuntimeError('Variable "storeName" does not exist.', 2, $this->source); })()), [], "array", false, true, false, 2), (isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 2, $this->source); })()), [], "array", false, true, false, 2), (isset($context["priceType"]) || array_key_exists("priceType", $context) ? $context["priceType"] : (function () { throw new RuntimeError('Variable "priceType" does not exist.', 2, $this->source); })()), [], "array", false, false, false, 2)) : (null));
        // line 3
        echo "
";
        // line 4
        if (( !(null === (isset($context["volumePriceType"]) || array_key_exists("volumePriceType", $context) ? $context["volumePriceType"] : (function () { throw new RuntimeError('Variable "volumePriceType" does not exist.', 4, $this->source); })())) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "get", [0 => "price-dimension"], "method", false, false, false, 4))) {
            // line 5
            echo "    ";
            echo call_user_func_array($this->env->getFunction('viewActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('urldecode')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), [twig_get_attribute($this->env, $this->source,             // line 6
(isset($context["volumePriceType"]) || array_key_exists("volumePriceType", $context) ? $context["volumePriceType"] : (function () { throw new RuntimeError('Variable "volumePriceType" does not exist.', 6, $this->source); })()), "url", [], "array", false, false, false, 6), ["id-product-abstract" =>             // line 7
(isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 7, $this->source); })()), "id-product-concrete" =>             // line 8
(isset($context["idProduct"]) || array_key_exists("idProduct", $context) ? $context["idProduct"] : (function () { throw new RuntimeError('Variable "idProduct" does not exist.', 8, $this->source); })()), "store-name" =>             // line 9
(isset($context["storeName"]) || array_key_exists("storeName", $context) ? $context["storeName"] : (function () { throw new RuntimeError('Variable "storeName" does not exist.', 9, $this->source); })()), "currency-code" =>             // line 10
(isset($context["currencyIsoCode"]) || array_key_exists("currencyIsoCode", $context) ? $context["currencyIsoCode"] : (function () { throw new RuntimeError('Variable "currencyIsoCode" does not exist.', 10, $this->source); })()), "price-dimension" =>             // line 11
(isset($context["priceDimension"]) || array_key_exists("priceDimension", $context) ? $context["priceDimension"] : (function () { throw new RuntimeError('Variable "priceDimension" does not exist.', 11, $this->source); })()), "sku" => twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 12, $this->source); })()), "sku", [], "any", false, false, false, 12)]])]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["volumePriceType"]) || array_key_exists("volumePriceType", $context) ? $context["volumePriceType"] : (function () { throw new RuntimeError('Variable "volumePriceType" does not exist.', 15, $this->source); })()), "title", [], "array", false, false, false, 15))]);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@ProductManagement/_partials/product_volume_price_action_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  54 => 12,  53 => 11,  52 => 10,  51 => 9,  50 => 8,  49 => 7,  48 => 6,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set volumePrices = moneyValueFormViewCollection.vars.volumePrices | default([]) %}
{% set volumePriceType = volumePrices[storeName][currencyIsoCode][priceType] ?? null %}

{% if volumePriceType is not null and not app.request.query.get('price-dimension') %}
    {{ viewActionButton(
        urldecode(url(volumePriceType['url'], {
            'id-product-abstract': idProductAbstract,
            'id-product-concrete': idProduct,
            'store-name': storeName,
            'currency-code': currencyIsoCode,
            'price-dimension': priceDimension,
            'sku': currentProduct.sku,
        })
    ),
    volumePriceType['title'] | trans) }}
{% endif %}
", "@ProductManagement/_partials/product_volume_price_action_button.twig", "/data/src/Pyz/Zed/ProductManagement/Presentation//_partials/product_volume_price_action_button.twig");
    }
}
