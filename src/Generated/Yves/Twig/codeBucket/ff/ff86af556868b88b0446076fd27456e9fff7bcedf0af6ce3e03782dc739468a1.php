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

/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'colors' => [$this, 'block_colors'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "product-configurator", "tag" => "section"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["product" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "maxQuantity" => 10, "isBundle" => null, "bundleItems" => []], $context['data']);        // line 15
        $context["options"] = [];
        // line 16
        $context["brand"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 16), "attributes", [], "any", false, true, false, 16), "brand", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 16), "attributes", [], "any", false, true, false, 16), "brand", [], "any", false, false, false, 16))) : (""));
        // line 17
        $context["sku"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "product", [], "any", false, false, false, 17), "sku", [], "any", false, false, false, 17);
        // line 18
        $context["availabilityWidget"] = "";
        // line 19
        $context["isProductConcrete"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "product", [], "any", false, false, false, 19), "idProductConcrete", [], "any", false, false, false, 19));
        // line 20
        $context["isDisabled"] = (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "product", [], "any", false, false, false, 20), "idProductConcrete", [], "any", false, false, false, 20)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "product", [], "any", false, false, false, 20), "price", [], "any", false, false, false, 20)));
        // line 21
        $context["isProductAvailable"] = true;
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "maxQuantity", [], "any", false, false, false, 23)));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 24
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 24, $this->source); })()), [0 => ["label" =>             // line 25
$context["index"], "value" =>             // line 26
$context["index"]]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        $context["isAvailable"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "product", [], "any", false, false, false, 30), "idProductConcrete", [], "any", false, false, false, 30) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "product", [], "any", false, false, false, 30), "available", [], "any", false, false, false, 30));
        // line 31
        $context["isDisabled"] = ( !(isset($context["isAvailable"]) || array_key_exists("isAvailable", $context) ? $context["isAvailable"] : (function () { throw new RuntimeError('Variable "isAvailable" does not exist.', 31, $this->source); })()) || (isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 31, $this->source); })()));
        // line 33
        $context["productDiscontinuedNoteWidget"] = call_user_func_array($this->env->getFunction('findWidget')->getCallable(), ["ProductDiscontinuedNoteWidget", [0 => (isset($context["sku"]) || array_key_exists("sku", $context) ? $context["sku"] : (function () { throw new RuntimeError('Variable "sku" does not exist.', 33, $this->source); })())]]);
        // line 34
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["productDiscontinuedNoteWidget"]) || array_key_exists("productDiscontinuedNoteWidget", $context) ? $context["productDiscontinuedNoteWidget"] : (function () { throw new RuntimeError('Variable "productDiscontinuedNoteWidget" does not exist.', 34, $this->source); })()), "isDiscontinued", [], "any", false, false, false, 34))) {
            // line 35
            $context["isDisabled"] = (twig_get_attribute($this->env, $this->source, (isset($context["productDiscontinuedNoteWidget"]) || array_key_exists("productDiscontinuedNoteWidget", $context) ? $context["productDiscontinuedNoteWidget"] : (function () { throw new RuntimeError('Variable "productDiscontinuedNoteWidget" does not exist.', 35, $this->source); })()), "isDiscontinued", [], "any", false, false, false, 35) || (isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 35, $this->source); })()));
            // line 36
            $context["isProductAvailable"] =  !twig_get_attribute($this->env, $this->source, (isset($context["productDiscontinuedNoteWidget"]) || array_key_exists("productDiscontinuedNoteWidget", $context) ? $context["productDiscontinuedNoteWidget"] : (function () { throw new RuntimeError('Variable "productDiscontinuedNoteWidget" does not exist.', 36, $this->source); })()), "isDiscontinued", [], "any", false, false, false, 36);
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "
    <div class=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "__top-block\">
        ";
        // line 42
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductDetailPageReviewWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "product", [], "any", false, false, false, 42), "idProductAbstract", [], "any", false, false, false, 42)])) {
            $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 42, 532442154)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget, call_user_func_array($this->env->getFunction('view')->getCallable(), ["pdp-review-rating", "ProductReviewWidget"]))));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 43
        echo "        <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
        echo "__brand-sku-wrapper\">
            ";
        // line 44
        if ( !twig_test_empty((isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 44, $this->source); })()))) {
            // line 45
            echo "                <div itemprop=\"brand\" class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "__brand-name\">";
            echo twig_escape_filter($this->env, (isset($context["brand"]) || array_key_exists("brand", $context) ? $context["brand"] : (function () { throw new RuntimeError('Variable "brand" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "</div>
            ";
        }
        // line 47
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "__sku\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.attribute.sku"), "html", null, true);
        echo ": <span itemprop=\"sku\">";
        echo twig_escape_filter($this->env, (isset($context["sku"]) || array_key_exists("sku", $context) ? $context["sku"] : (function () { throw new RuntimeError('Variable "sku" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "</span></div>
        </div>
    </div>

    ";
        // line 51
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
            // line 52
            echo "        ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CurrentProductPriceVolumeWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 52, $this->source); })()), "product", [], "any", false, false, false, 52), "currentProductPrice", [], "any", false, false, false, 52)])) {
                $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 52, 621188928)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            } elseif ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductPriceVolumeWidget", [0 => twig_get_attribute($this->env, $this->source,             // line 53
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 53, $this->source); })()), "product", [], "any", false, false, false, 53)])) {
                $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 52, 77685382)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            } else {
                // line 55
                echo "            ";
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["money-price"]), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 55)->display(twig_to_array(["modifiers" => [0 => "big"], "data" => ["amount" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 58
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "product", [], "any", false, false, false, 58), "price", [], "any", false, false, false, 58), "originalAmount" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 59
($context["data"] ?? null), "product", [], "any", false, true, false, 59), "prices", [], "any", false, true, false, 59), "ORIGINAL", [], "any", true, true, false, 59) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 59), "prices", [], "any", false, true, false, 59), "ORIGINAL", [], "any", false, false, false, 59)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 59), "prices", [], "any", false, true, false, 59), "ORIGINAL", [], "any", false, false, false, 59)) : (null))]]));
                // line 62
                echo "        ";
            }
            // line 63
            echo "    ";
        }
        // line 64
        echo "
    ";
        // line 65
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 65, $this->source); })()), "isBundle", [], "any", false, false, false, 65), null))) {
            // line 66
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 66, $this->source); })()), "name", [], "any", false, false, false, 66), "html", null, true);
            echo "__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bundle.title"), "html", null, true);
            echo "</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 70, $this->source); })()), "bundleItems", [], "any", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 71
                echo "                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                ";
                // line 73
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["lazy-image"]), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 73)->display(twig_to_array(["modifiers" => [0 => "full-size"], "data" => ["imageSrc" => twig_get_attribute($this->env, $this->source,                 // line 76
$context["item"], "image", [], "any", false, false, false, 76)]]));
                // line 79
                echo "                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 81), "html", null, true);
                echo "</h2>
                                <span class=\"product-bundle__quantity\">x ";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 82), "html", null, true);
                echo "</span>
                            </div>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                </ul>
            </div>
        </div>
        ";
            // line 89
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-accordion"]), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 89)->display(twig_to_array(["attributes" => ["wrap-class-name" => "js-product-options-bundle", "trigger-class-name" => "js-product-options-bundle__title", "active-class" => "active"]]));
            // line 96
            echo "    ";
        }
        // line 97
        echo "
    ";
        // line 98
        $this->displayBlock('colors', $context, $blocks);
        // line 101
        echo "
    ";
        // line 102
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["variant-configurator", "ProductDetailPage"]), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 102)->display(twig_to_array(["data" => ["superAttributes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 104
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "product", [], "any", false, false, false, 104), "attributeMap", [], "any", false, false, false, 104), "superAttributes", [], "any", false, false, false, 104), "selectedAttributes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 105
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 105, $this->source); })()), "product", [], "any", false, false, false, 105), "selectedAttributes", [], "any", false, false, false, 105), "availableAttributes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 106
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 106, $this->source); })()), "product", [], "any", false, false, false, 106), "availableAttributes", [], "any", false, false, false, 106)]]));
        // line 109
        echo "
    ";
        // line 110
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AddToCartFormWidget", [0 => (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 110, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 110, $this->source); })()), "product", [], "any", false, false, false, 110), 2 => (isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 110, $this->source); })()), 3 => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 110, $this->source); })())])) {
            $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 110, 1502525537)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 155
        echo "
    ";
        // line 156
        if (( !(isset($context["isAvailable"]) || array_key_exists("isAvailable", $context) ? $context["isAvailable"] : (function () { throw new RuntimeError('Variable "isAvailable" does not exist.', 156, $this->source); })()) && (isset($context["isProductConcrete"]) || array_key_exists("isProductConcrete", $context) ? $context["isProductConcrete"] : (function () { throw new RuntimeError('Variable "isProductConcrete" does not exist.', 156, $this->source); })()))) {
            // line 157
            echo "        ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AvailabilityNotificationSubscriptionWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 157, $this->source); })()), "product", [], "any", false, false, false, 157)])) {
                $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 157, 614760590)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 158
            echo "    ";
        }
        // line 159
        echo "
    ";
        // line 160
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeeShoppingListPermissionPlugin")) {
            // line 161
            echo "        ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AddToShoppingListWidget", [0 => (isset($context["sku"]) || array_key_exists("sku", $context) ? $context["sku"] : (function () { throw new RuntimeError('Variable "sku" does not exist.', 161, $this->source); })()), 1 => (isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 161, $this->source); })())])) {
                $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 161, 228248373)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 162
            echo "    ";
        }
        // line 163
        echo "
    ";
        // line 164
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductDiscontinuedNoteWidget", [0 => (isset($context["sku"]) || array_key_exists("sku", $context) ? $context["sku"] : (function () { throw new RuntimeError('Variable "sku" does not exist.', 164, $this->source); })())])) {
            $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 164, 1364378226)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }    }

    // line 98
    public function block_colors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "        ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductGroupColorWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 99, $this->source); })()), "product", [], "any", false, false, false, 99), "idProductAbstract", [], "any", false, false, false, 99), 1 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 99), "selectedAttributes", [], "any", true, true, false, 99) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 99), "selectedAttributes", [], "any", false, false, false, 99)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 99), "selectedAttributes", [], "any", false, false, false, 99)) : ([]))])) {
            $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 99, 1947720616)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget, call_user_func_array($this->env->getFunction('view')->getCallable(), ["product-detail-color-selector", "ProductGroupWidget"]))));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 100
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___532442154 extends Template
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
        // line 42
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 42, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 42);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___621188928 extends Template
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
        // line 52
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 52, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 52);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  697 => 52,  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___77685382 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 52, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 52);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  697 => 52,  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___1947720616 extends Template
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
        // line 99
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 99, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 99);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1126 => 99,  697 => 52,  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___1502525537 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'embeddedData' => [$this, 'block_embeddedData'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 110
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 110, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 110);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 111
    public function block_embeddedData($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "            ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductOptionConfiguratorWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "product", [], "any", false, false, false, 112)])) {
            $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 112, 1748622974)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 113
        echo "            ";
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeeAddToCartPermissionPlugin")) {
            // line 114
            echo "                <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 114, $this->source); })()), "config", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
            echo "__add-to-cart\">
                    ";
            // line 115
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductPackagingUnitWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 115, $this->source); })()), "product", [], "any", false, false, false, 115), 1 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 115, $this->source); })()), "isDisabled", [], "any", false, false, false, 115), 2 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 115, $this->source); })()), "options", [], "any", false, false, false, 115)])) {
                $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 115, 1122073957)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            } elseif ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ManageProductMeasurementUnitWidget", [0 => twig_get_attribute($this->env, $this->source,             // line 116
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 116, $this->source); })()), "product", [], "any", false, false, false, 116), 1 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 116, $this->source); })()), "isDisabled", [], "any", false, false, false, 116), 2 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 116, $this->source); })()), "options", [], "any", false, false, false, 116)])) {
                $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 115, 746483909)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            } else {
                // line 118
                echo "                        <div class=\"grid grid--stretch grid--justify\">
                            ";
                // line 119
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["quantity-counter"]), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 119)->display(twig_to_array(["modifiers" => [0 => "right-space"], "data" => ["isDisabled" => twig_get_attribute($this->env, $this->source,                 // line 122
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 122, $this->source); })()), "isDisabled", [], "any", false, false, false, 122)]]));
                // line 125
                echo "
                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    ";
                // line 129
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 129, $this->source); })()), "isDisabled", [], "any", false, false, false, 129)) ? ("disabled") : ("data-init-single-click"));
                echo "
                                    ";
                // line 130
                echo call_user_func_array($this->env->getFunction('qa')->getCallable(), [[0 => "add-to-cart-button"]]);
                echo "
                                >
                                    ";
                // line 132
                $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 132)->display(twig_to_array(["modifiers" => [0 => "cart-plus"], "data" => ["name" => "cart-plus"]]));
                // line 138
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.detail.add-to-cart"), "html", null, true);
                echo "
                                </button>
                            </div>
                        </div>
                    ";
            }
            // line 143
            echo "                </div>

                ";
            // line 145
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AddToMultiCartWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 145, $this->source); })()), "isDisabled", [], "any", false, false, false, 145)])) {
                $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 145, 385915256)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 146
            echo "
                ";
            // line 147
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CartAddProductAsSeparateItemWidget")) {
                $this->loadTemplate("@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 147, 1262712811)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 148
            echo "            ";
        }
        // line 149
        echo "
            ";
        // line 150
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 150, $this->source); })()), "product", [], "any", false, false, false, 150), "available", [], "any", false, false, false, 150)) {
            // line 151
            echo "                <p class=\"text-alert\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.detail.out_of_stock"), "html", null, true);
            echo "</p>
            ";
        }
        // line 153
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1439 => 153,  1433 => 151,  1431 => 150,  1428 => 149,  1425 => 148,  1421 => 147,  1418 => 146,  1414 => 145,  1410 => 143,  1401 => 138,  1399 => 132,  1394 => 130,  1390 => 129,  1384 => 125,  1382 => 122,  1381 => 119,  1378 => 118,  1373 => 116,  1369 => 115,  1364 => 114,  1361 => 113,  1356 => 112,  1352 => 111,  1342 => 110,  1126 => 99,  697 => 52,  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___1748622974 extends Template
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
        // line 112
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 112, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 112);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1648 => 112,  1439 => 153,  1433 => 151,  1431 => 150,  1428 => 149,  1425 => 148,  1421 => 147,  1418 => 146,  1414 => 145,  1410 => 143,  1401 => 138,  1399 => 132,  1394 => 130,  1390 => 129,  1384 => 125,  1382 => 122,  1381 => 119,  1378 => 118,  1373 => 116,  1369 => 115,  1364 => 114,  1361 => 113,  1356 => 112,  1352 => 111,  1342 => 110,  1126 => 99,  697 => 52,  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___1122073957 extends Template
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
        // line 115
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 115, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 115);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1863 => 115,  1648 => 112,  1439 => 153,  1433 => 151,  1431 => 150,  1428 => 149,  1425 => 148,  1421 => 147,  1418 => 146,  1414 => 145,  1410 => 143,  1401 => 138,  1399 => 132,  1394 => 130,  1390 => 129,  1384 => 125,  1382 => 122,  1381 => 119,  1378 => 118,  1373 => 116,  1369 => 115,  1364 => 114,  1361 => 113,  1356 => 112,  1352 => 111,  1342 => 110,  1126 => 99,  697 => 52,  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___746483909 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 115, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 115);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1863 => 115,  1648 => 112,  1439 => 153,  1433 => 151,  1431 => 150,  1428 => 149,  1425 => 148,  1421 => 147,  1418 => 146,  1414 => 145,  1410 => 143,  1401 => 138,  1399 => 132,  1394 => 130,  1390 => 129,  1384 => 125,  1382 => 122,  1381 => 119,  1378 => 118,  1373 => 116,  1369 => 115,  1364 => 114,  1361 => 113,  1356 => 112,  1352 => 111,  1342 => 110,  1126 => 99,  697 => 52,  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___385915256 extends Template
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
        // line 145
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 145, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 145);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2292 => 145,  1863 => 115,  1648 => 112,  1439 => 153,  1433 => 151,  1431 => 150,  1428 => 149,  1425 => 148,  1421 => 147,  1418 => 146,  1414 => 145,  1410 => 143,  1401 => 138,  1399 => 132,  1394 => 130,  1390 => 129,  1384 => 125,  1382 => 122,  1381 => 119,  1378 => 118,  1373 => 116,  1369 => 115,  1364 => 114,  1361 => 113,  1356 => 112,  1352 => 111,  1342 => 110,  1126 => 99,  697 => 52,  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___1262712811 extends Template
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
        // line 147
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 147, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 147);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2507 => 147,  2292 => 145,  1863 => 115,  1648 => 112,  1439 => 153,  1433 => 151,  1431 => 150,  1428 => 149,  1425 => 148,  1421 => 147,  1418 => 146,  1414 => 145,  1410 => 143,  1401 => 138,  1399 => 132,  1394 => 130,  1390 => 129,  1384 => 125,  1382 => 122,  1381 => 119,  1378 => 118,  1373 => 116,  1369 => 115,  1364 => 114,  1361 => 113,  1356 => 112,  1352 => 111,  1342 => 110,  1126 => 99,  697 => 52,  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___614760590 extends Template
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
        // line 157
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 157, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 157);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2722 => 157,  2507 => 147,  2292 => 145,  1863 => 115,  1648 => 112,  1439 => 153,  1433 => 151,  1431 => 150,  1428 => 149,  1425 => 148,  1421 => 147,  1418 => 146,  1414 => 145,  1410 => 143,  1401 => 138,  1399 => 132,  1394 => 130,  1390 => 129,  1384 => 125,  1382 => 122,  1381 => 119,  1378 => 118,  1373 => 116,  1369 => 115,  1364 => 114,  1361 => 113,  1356 => 112,  1352 => 111,  1342 => 110,  1126 => 99,  697 => 52,  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___228248373 extends Template
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
        // line 161
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 161, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 161);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2937 => 161,  2722 => 157,  2507 => 147,  2292 => 145,  1863 => 115,  1648 => 112,  1439 => 153,  1433 => 151,  1431 => 150,  1428 => 149,  1425 => 148,  1421 => 147,  1418 => 146,  1414 => 145,  1410 => 143,  1401 => 138,  1399 => 132,  1394 => 130,  1390 => 129,  1384 => 125,  1382 => 122,  1381 => 119,  1378 => 118,  1373 => 116,  1369 => 115,  1364 => 114,  1361 => 113,  1356 => 112,  1352 => 111,  1342 => 110,  1126 => 99,  697 => 52,  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}


/* @ProductDetailPage/components/molecules/product-configurator/product-configurator.twig */
class __TwigTemplate_f025fdef32586840d9946197195b13e0712e7227c21d8266423631ce533efc2f___1364378226 extends Template
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
        // line 164
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 164, $this->source); })()), "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", 164);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3152 => 164,  2937 => 161,  2722 => 157,  2507 => 147,  2292 => 145,  1863 => 115,  1648 => 112,  1439 => 153,  1433 => 151,  1431 => 150,  1428 => 149,  1425 => 148,  1421 => 147,  1418 => 146,  1414 => 145,  1410 => 143,  1401 => 138,  1399 => 132,  1394 => 130,  1390 => 129,  1384 => 125,  1382 => 122,  1381 => 119,  1378 => 118,  1373 => 116,  1369 => 115,  1364 => 114,  1361 => 113,  1356 => 112,  1352 => 111,  1342 => 110,  1126 => 99,  697 => 52,  482 => 42,  273 => 100,  268 => 99,  264 => 98,  258 => 164,  255 => 163,  252 => 162,  247 => 161,  245 => 160,  242 => 159,  239 => 158,  234 => 157,  232 => 156,  229 => 155,  225 => 110,  222 => 109,  220 => 106,  219 => 105,  218 => 104,  217 => 102,  214 => 101,  212 => 98,  209 => 97,  206 => 96,  204 => 89,  199 => 86,  189 => 82,  185 => 81,  181 => 79,  179 => 76,  178 => 73,  174 => 71,  170 => 70,  164 => 67,  159 => 66,  157 => 65,  154 => 64,  151 => 63,  148 => 62,  146 => 59,  145 => 58,  143 => 55,  138 => 53,  133 => 52,  131 => 51,  119 => 47,  111 => 45,  109 => 44,  104 => 43,  100 => 42,  96 => 41,  93 => 40,  89 => 39,  85 => 1,  82 => 36,  80 => 35,  78 => 34,  76 => 33,  74 => 31,  72 => 30,  66 => 26,  65 => 25,  64 => 24,  60 => 23,  58 => 21,  56 => 20,  54 => 19,  52 => 18,  50 => 17,  48 => 16,  46 => 15,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-configurator',
    tag: 'section'
} %}

{% define data = {
    product: required,
    maxQuantity: 10,
    isBundle: null,
    bundleItems: []
} %}

{% set options = [] %}
{% set brand = data.product.attributes.brand | default %}
{% set sku = data.product.sku %}
{% set availabilityWidget = '' %}
{% set isProductConcrete = data.product.idProductConcrete is not empty %}
{% set isDisabled = data.product.idProductConcrete is empty or data.product.price is empty %}
{% set isProductAvailable = true %}

{% for index in 1..data.maxQuantity %}
    {% set options = options | merge([{
        label: index,
        value: index
    }]) %}
{% endfor %}

{% set isAvailable = data.product.idProductConcrete and data.product.available %}
{% set isDisabled = not isAvailable or isDisabled %}

{% set productDiscontinuedNoteWidget = findWidget('ProductDiscontinuedNoteWidget', [sku]) %}
{% if productDiscontinuedNoteWidget.isDiscontinued is not null %}
    {% set isDisabled = productDiscontinuedNoteWidget.isDiscontinued or isDisabled %}
    {% set isProductAvailable = not productDiscontinuedNoteWidget.isDiscontinued %}
{% endif %}

{% block body %}

    <div class=\"{{ config.name }}__top-block\">
        {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] use view('pdp-review-rating', 'ProductReviewWidget') only %}{% endwidget %}
        <div class=\"{{ config.name }}__brand-sku-wrapper\">
            {% if brand is not empty %}
                <div itemprop=\"brand\" class=\"{{ config.name }}__brand-name\">{{ brand }}</div>
            {% endif %}
            <div class=\"{{ config.name }}__sku\">{{ 'product.attribute.sku' | trans }}: <span itemprop=\"sku\">{{ sku }}</span></div>
        </div>
    </div>

    {% if can('SeePricePermissionPlugin') %}
        {% widget 'CurrentProductPriceVolumeWidget' args [data.product.currentProductPrice] only %}
        {% elsewidget 'ProductPriceVolumeWidget' args [data.product] only %} {# @deprecated Use CurrentProductPriceVolumeWidget instead. #}
        {% nowidget %}
            {% include molecule('money-price') with {
                modifiers: ['big'],
                data: {
                    amount: data.product.price,
                    originalAmount: data.product.prices.ORIGINAL ?? null,
                },
            } only %}
        {% endwidget %}
    {% endif %}

    {% if data.isBundle != null %}
        <div class=\"{{ config.name }}__bundle product-options__item js-product-options-bundle\">
            <div class=\"product-options__title js-product-options-bundle__title active\" data-toggle-target=\".js-product-options-bundle__target\">{{ 'bundle.title' | trans }}</div>
            <div class=\"js-product-options-bundle__target\">
                <ul class=\"product-bundle product-bundle--configurator\">
                    {% for item in data.bundleItems %}
                        <li class=\"product-bundle__item product-bundle__item--configurator\">
                            <div class=\"product-bundle__img-block product-bundle__img-block--configurator\">
                                {% include molecule('lazy-image') with {
                                    modifiers: ['full-size'],
                                    data: {
                                        imageSrc: item.image,
                                    },
                                } only %}
                            </div>
                            <div class=\"product-bundle__info product-bundle__info--configurator\">
                                <h2 class=\"product-bundle__name title title--h2\">{{ item.name }}</h2>
                                <span class=\"product-bundle__quantity\">x {{ item.quantity }}</span>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-product-options-bundle',
                'trigger-class-name': 'js-product-options-bundle__title',
                'active-class': 'active',
            },
        } only %}
    {% endif %}

    {% block colors %}
        {% widget 'ProductGroupColorWidget' args [data.product.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-detail-color-selector', 'ProductGroupWidget') only %}{% endwidget %}
    {% endblock %}

    {% include molecule('variant-configurator', 'ProductDetailPage') with {
        data: {
            superAttributes: data.product.attributeMap.superAttributes,
            selectedAttributes: data.product.selectedAttributes,
            availableAttributes: data.product.availableAttributes,
        },
    } only %}

    {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled, options] only %}
        {% block embeddedData %}
            {% widget 'ProductOptionConfiguratorWidget' args [data.product] only %}{% endwidget %}
            {% if can('SeeAddToCartPermissionPlugin') %}
                <div class=\"{{ data.config.name }}__add-to-cart\">
                    {% widget 'ProductPackagingUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% elsewidget 'ManageProductMeasurementUnitWidget' args [data.product, data.isDisabled, data.options] only %}
                    {% nowidget %}
                        <div class=\"grid grid--stretch grid--justify\">
                            {% include molecule('quantity-counter') with {
                                modifiers: ['right-space'],
                                data: {
                                    isDisabled: data.isDisabled,
                                },
                            } only %}

                            <div class=\"col\">
                                <button
                                    class=\"button button--alternative button--big button--expand button--no-horizontal-padding\"
                                    {{ data.isDisabled ? 'disabled' : 'data-init-single-click' }}
                                    {{ qa('add-to-cart-button') }}
                                >
                                    {% include atom('icon') with {
                                        modifiers: ['cart-plus'],
                                        data: {
                                            name: 'cart-plus',
                                        },
                                    } only %}
                                    {{ 'page.detail.add-to-cart' | trans }}
                                </button>
                            </div>
                        </div>
                    {% endwidget %}
                </div>

                {% widget 'AddToMultiCartWidget' args [data.isDisabled] only %}{% endwidget %}

                {% widget 'CartAddProductAsSeparateItemWidget' only %}{% endwidget %}
            {% endif %}

            {% if not data.product.available %}
                <p class=\"text-alert\">{{ \"product.detail.out_of_stock\" | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endwidget %}

    {% if not isAvailable and isProductConcrete %}
        {% widget 'AvailabilityNotificationSubscriptionWidget' args [data.product] only %}{% endwidget %}
    {% endif %}

    {% if can('SeeShoppingListPermissionPlugin') %}
        {% widget 'AddToShoppingListWidget' args [sku, isDisabled] only %}{% endwidget %}
    {% endif %}

    {% widget 'ProductDiscontinuedNoteWidget' args [sku] only %}{% endwidget %}
{% endblock %}
", "@ProductDetailPage/components/molecules/product-configurator/product-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-configurator/product-configurator.twig");
    }
}
