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

/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_67793c7f78cf77647f0e6925bbad1cadbf89999f22c8ec1325307163e8372816 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extraClass' => [$this, 'block_extraClass'],
            'body' => [$this, 'block_body'],
            'thumbnailWrapper' => [$this, 'block_thumbnailWrapper'],
            'imageContainer' => [$this, 'block_imageContainer'],
            'image' => [$this, 'block_image'],
            'imageLink' => [$this, 'block_imageLink'],
            'productThumbnail' => [$this, 'block_productThumbnail'],
            'labels' => [$this, 'block_labels'],
            'productAbstractLabels' => [$this, 'block_productAbstractLabels'],
            'groups' => [$this, 'block_groups'],
            'productAbstractGroups' => [$this, 'block_productAbstractGroups'],
            'content' => [$this, 'block_content'],
            'colors' => [$this, 'block_colors'],
            'name' => [$this, 'block_name'],
            'link' => [$this, 'block_link'],
            'title' => [$this, 'block_title'],
            'sku' => [$this, 'block_sku'],
            'rating' => [$this, 'block_rating'],
            'productAbstractRating' => [$this, 'block_productAbstractRating'],
            'priceContainer' => [$this, 'block_priceContainer'],
            'price' => [$this, 'block_price'],
            'actionsContainer' => [$this, 'block_actionsContainer'],
            'actions' => [$this, 'block_actions'],
            'actionsContent' => [$this, 'block_actionsContent'],
            'action' => [$this, 'block_action'],
            'actionInner' => [$this, 'block_actionInner'],
            'icon' => [$this, 'block_icon'],
            'ajaxAddToCart' => [$this, 'block_ajaxAddToCart'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "product-item", "tag" => "product-item"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["product" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "name" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
($context["data"] ?? null), "product", [], "any", false, true, false, 10), "name", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 10), "name", [], "any", false, false, false, 10))) : ("")), "sku" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
($context["data"] ?? null), "product", [], "any", false, true, false, 11), "sku", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 11), "sku", [], "any", false, false, false, 11))) : ("")), "url" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["data"] ?? null), "product", [], "any", false, true, false, 12), "url", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 12), "url", [], "any", false, false, false, 12))) : ("")), "image" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["data"] ?? null), "product", [], "any", false, true, false, 13), "images", [], "any", true, true, false, 13)) ? (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 13), "images", [], "any", false, true, false, 13), 0, [], "any", false, true, false, 13), "externalUrlSmall", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 13), "images", [], "any", false, true, false, 13), 0, [], "any", false, true, false, 13), "externalUrlSmall", [], "any", false, false, false, 13))) : (""))) : ("")), "idProductAbstract" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["data"] ?? null), "product", [], "any", false, true, false, 14), "idProductAbstract", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 14), "idProductAbstract", [], "any", false, false, false, 14))) : ("")), "currencyIsoCode" => null, "metaSku" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["data"] ?? null), "product", [], "any", false, true, false, 16), "sku", [], "any", true, true, false, 16)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "product", [], "any", false, false, false, 16), "sku", [], "any", false, false, false, 16)) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 16), "abstract_sku", [], "any", true, true, false, 16)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "product", [], "any", false, false, false, 16), "abstract_sku", [], "any", false, false, false, 16)) : (""))))], $context['data']);        // line 19
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["itemscope" => "", "itemtype" => "https://schema.org/Product"], $context['attributes']);        // line 24
        $macros["macros"] = $this->macros["macros"] = $this;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_extraClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " box ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "jsName", [], "any", false, false, false, 26), "html", null, true);
    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->displayBlock('thumbnailWrapper', $context, $blocks);
        // line 70
        echo "
    ";
        // line 71
        $this->displayBlock('labels', $context, $blocks);
        // line 82
        echo "
    ";
        // line 83
        $this->displayBlock('groups', $context, $blocks);
        // line 90
        echo "
    ";
        // line 91
        $this->displayBlock('content', $context, $blocks);
        // line 161
        echo "
    ";
        // line 162
        $this->displayBlock('actionsContainer', $context, $blocks);
    }

    // line 29
    public function block_thumbnailWrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "        ";
        $context["extraClass"] = "";
        // line 31
        echo "        ";
        $context["modifiers"] = [];
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('imageContainer', $context, $blocks);
        // line 69
        echo "    ";
    }

    // line 33
    public function block_imageContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "            ";
        // line 53
        echo "
            ";
        // line 54
        $this->displayBlock('image', $context, $blocks);
        // line 68
        echo "        ";
    }

    // line 54
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "url", [], "any", false, false, false, 55)) {
            // line 56
            echo "                    ";
            $this->displayBlock('imageLink', $context, $blocks);
            // line 61
            echo "                ";
        }
        // line 62
        echo "                ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 62, $this->source); })()), "url", [], "any", false, false, false, 62)) {
            // line 63
            echo "                    ";
            $this->displayBlock('productThumbnail', $context, $blocks);
            // line 66
            echo "                ";
        }
        // line 67
        echo "            ";
    }

    // line 56
    public function block_imageLink($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                        <a class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 57, $this->source); })()), "jsName", [], "any", false, false, false, 57), "html", null, true);
        echo "__link-detail-page\" itemprop=\"url\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), "url", [], "any", false, false, false, 57));
        echo "\">
                            ";
        // line 58
        echo twig_call_macro($macros["macros"], "macro_thumbnail", [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "image", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), (isset($context["extraClass"]) || array_key_exists("extraClass", $context) ? $context["extraClass"] : (function () { throw new RuntimeError('Variable "extraClass" does not exist.', 58, $this->source); })()), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 58, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "jsName", [], "any", false, false, false, 58)], 58, $context, $this->getSourceContext());
        echo "
                        </a>
                    ";
    }

    // line 63
    public function block_productThumbnail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "                        ";
        echo twig_call_macro($macros["macros"], "macro_thumbnail", [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "image", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), (isset($context["extraClass"]) || array_key_exists("extraClass", $context) ? $context["extraClass"] : (function () { throw new RuntimeError('Variable "extraClass" does not exist.', 64, $this->source); })()), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 64, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 64, $this->source); })()), "jsName", [], "any", false, false, false, 64)], 64, $context, $this->getSourceContext());
        echo "
                    ";
    }

    // line 71
    public function block_labels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 72, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 72)) {
            // line 73
            echo "            ";
            $this->displayBlock('productAbstractLabels', $context, $blocks);
            // line 80
            echo "        ";
        }
        // line 81
        echo "    ";
    }

    // line 73
    public function block_productAbstractLabels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductAbstractLabelWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 74, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 74)])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 74, 198106223)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => twig_get_attribute($this->env, $this->source,             // line 76
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 76, $this->source); })()), "jsName", [], "any", false, false, false, 76)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 79
        echo "            ";
    }

    // line 83
    public function block_groups($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 84, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 84)) {
            // line 85
            echo "            ";
            $this->displayBlock('productAbstractGroups', $context, $blocks);
            // line 88
            echo "        ";
        }
        // line 89
        echo "    ";
    }

    // line 85
    public function block_productAbstractGroups($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 86
        echo "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductGroupWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 86, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 86)])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 86, 641805668)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 87
        echo "            ";
    }

    // line 91
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "        ";
        $this->displayBlock('colors', $context, $blocks);
        // line 99
        echo "
        ";
        // line 100
        $this->displayBlock('name', $context, $blocks);
        // line 115
        echo "
        ";
        // line 116
        $this->displayBlock('sku', $context, $blocks);
        // line 123
        echo "
        ";
        // line 124
        $this->displayBlock('rating', $context, $blocks);
        // line 135
        echo "
        ";
        // line 136
        $this->displayBlock('priceContainer', $context, $blocks);
        // line 160
        echo "    ";
    }

    // line 92
    public function block_colors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "            ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductGroupColorWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 93, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 93), 1 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 93), "selectedAttributes", [], "any", true, true, false, 93) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 93), "selectedAttributes", [], "any", false, false, false, 93)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 93), "selectedAttributes", [], "any", false, false, false, 93)) : ([]))])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 93, 826951583)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget, call_user_func_array($this->env->getFunction('view')->getCallable(), ["product-item-color-selector", "ProductGroupWidget"]))), ["data" => ["parentJsName" => twig_get_attribute($this->env, $this->source,             // line 95
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 95, $this->source); })()), "jsName", [], "any", false, false, false, 95)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 98
        echo "        ";
    }

    // line 100
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 101, $this->source); })()), "name", [], "any", false, false, false, 101) && twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 101, $this->source); })()), "url", [], "any", false, false, false, 101))) {
            // line 102
            echo "                ";
            $this->displayBlock('link', $context, $blocks);
            // line 107
            echo "            ";
        }
        // line 108
        echo "
            ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "name", [], "any", false, false, false, 109) &&  !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "url", [], "any", false, false, false, 109))) {
            // line 110
            echo "                ";
            $this->displayBlock('title', $context, $blocks);
            // line 113
            echo "            ";
        }
        // line 114
        echo "        ";
    }

    // line 102
    public function block_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "                    <a class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 103, $this->source); })()), "name", [], "any", false, false, false, 103), "html", null, true);
        echo "__name ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 103, $this->source); })()), "jsName", [], "any", false, false, false, 103), "html", null, true);
        echo "__name ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 103, $this->source); })()), "jsName", [], "any", false, false, false, 103), "html", null, true);
        echo "__link-detail-page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 103, $this->source); })()), "url", [], "any", false, false, false, 103));
        echo "\">
                        <span itemprop=\"name\">";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "name", [], "any", false, false, false, 104), "html", null, true);
        echo "</span>
                    </a>
                ";
    }

    // line 110
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                    <span itemprop=\"name\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 111, $this->source); })()), "name", [], "any", false, false, false, 111), "html", null, true);
        echo "__name ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 111, $this->source); })()), "jsName", [], "any", false, false, false, 111), "html", null, true);
        echo "__name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })()), "name", [], "any", false, false, false, 111), "html", null, true);
        echo "</span>
                ";
    }

    // line 116
    public function block_sku($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "            <meta class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 117, $this->source); })()), "jsName", [], "any", false, false, false, 117), "html", null, true);
        echo "__sku\" itemprop=\"sku\" content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 117, $this->source); })()), "metaSku", [], "any", false, false, false, 117), "html", null, true);
        echo "\">

            ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 119, $this->source); })()), "sku", [], "any", false, false, false, 119)) {
            // line 120
            echo "                <div itemprop=\"sku\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 120, $this->source); })()), "sku", [], "any", false, false, false, 120), "html", null, true);
            echo "</div>
            ";
        }
        // line 122
        echo "        ";
    }

    // line 124
    public function block_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 125, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 125)) {
            // line 126
            echo "                ";
            $this->displayBlock('productAbstractRating', $context, $blocks);
            // line 133
            echo "            ";
        }
        // line 134
        echo "        ";
    }

    // line 126
    public function block_productAbstractRating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 127
        echo "                    ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("DisplayProductAbstractReviewWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 127, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 127)])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 127, 30439234)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => twig_get_attribute($this->env, $this->source,             // line 129
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 129, $this->source); })()), "jsName", [], "any", false, false, false, 129)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 132
        echo "                ";
    }

    // line 136
    public function block_priceContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "            <div class=\"spacing-y\">
                ";
        // line 138
        $this->displayBlock('price', $context, $blocks);
        // line 158
        echo "            </div>
        ";
    }

    // line 138
    public function block_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "                    ";
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
            // line 140
            echo "                        ";
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 140, "238076836")->display(twig_to_array(["data" => ["amount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 142
($context["data"] ?? null), "product", [], "any", false, true, false, 142), "prices", [], "any", false, true, false, 142), "DEFAULT", [], "any", true, true, false, 142)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 142), "prices", [], "any", false, true, false, 142), "DEFAULT", [], "any", false, false, false, 142), null)) : (null)), "originalAmount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 143
($context["data"] ?? null), "product", [], "any", false, true, false, 143), "prices", [], "any", false, true, false, 143), "ORIGINAL", [], "any", true, true, false, 143)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 143), "prices", [], "any", false, true, false, 143), "ORIGINAL", [], "any", false, false, false, 143), null)) : (null)), "currencyIsoCode" => twig_get_attribute($this->env, $this->source,             // line 144
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 144, $this->source); })()), "currencyIsoCode", [], "any", false, false, false, 144), "parentJsName" => twig_get_attribute($this->env, $this->source,             // line 145
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 145, $this->source); })()), "jsName", [], "any", false, false, false, 145)]]));
            // line 154
            echo "                    ";
        } else {
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.access.cannot_see_price"), "html", null, true);
        }
        // line 157
        echo "                ";
    }

    // line 162
    public function block_actionsContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "        <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 163, $this->source); })()), "name", [], "any", false, false, false, 163), "html", null, true);
        echo "__actions\">
            ";
        // line 164
        $this->displayBlock('actions', $context, $blocks);
        // line 202
        echo "        </div>
    ";
    }

    // line 164
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 165
        echo "                <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 165, $this->source); })()), "name", [], "any", false, false, false, 165), "html", null, true);
        echo "__actions-row\">
                    ";
        // line 166
        $this->displayBlock('actionsContent', $context, $blocks);
        // line 200
        echo "                </div>
            ";
    }

    // line 166
    public function block_actionsContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 167, $this->source); })()), "url", [], "any", false, false, false, 167)) {
            // line 168
            echo "                            ";
            $this->displayBlock('action', $context, $blocks);
            // line 187
            echo "                        ";
        }
        // line 188
        echo "
                        ";
        // line 189
        $this->displayBlock('ajaxAddToCart', $context, $blocks);
        // line 199
        echo "                    ";
    }

    // line 168
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "                                <a class=\"button button--expand ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 169, $this->source); })()), "jsName", [], "any", false, false, false, 169), "html", null, true);
        echo "__link-detail-page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 169, $this->source); })()), "url", [], "any", false, false, false, 169));
        echo "\">
                                    ";
        // line 170
        $this->displayBlock('actionInner', $context, $blocks);
        // line 185
        echo "                                </a>
                            ";
    }

    // line 170
    public function block_actionInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.view"), "html", null, true);
        // line 173
        $context["iconModifiers"] = [0 => "small"];
        // line 174
        echo "                                        ";
        $context["iconName"] = "angle-double-right";
        // line 175
        echo "
                                        ";
        // line 176
        $this->displayBlock('icon', $context, $blocks);
        // line 184
        echo "                                    ";
    }

    // line 176
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 177)->display(twig_to_array(["modifiers" =>         // line 178
(isset($context["iconModifiers"]) || array_key_exists("iconModifiers", $context) ? $context["iconModifiers"] : (function () { throw new RuntimeError('Variable "iconModifiers" does not exist.', 178, $this->source); })()), "data" => ["name" =>         // line 180
(isset($context["iconName"]) || array_key_exists("iconName", $context) ? $context["iconName"] : (function () { throw new RuntimeError('Variable "iconName" does not exist.', 180, $this->source); })())]]));
    }

    // line 189
    public function block_ajaxAddToCart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "                            ";
        if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 190, $this->source); })()), "product", [], "any", false, false, false, 190)) && $this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeeAddToCartPermissionPlugin"))) {
            // line 191
            echo "                                ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductAbstractAddToCartButtonWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 191, $this->source); })()), "product", [], "any", false, false, false, 191)])) {
                $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 191, 759744292)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["buttonExtraClasses" => (twig_get_attribute($this->env, $this->source,                 // line 193
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 193, $this->source); })()), "jsName", [], "any", false, false, false, 193) . "__ajax-button-add-to-cart")]]));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 197
            echo "                            ";
        }
        // line 198
        echo "                        ";
    }

    // line 34
    public function macro_thumbnail($__src__ = null, $__alt__ = "", $__extraClass__ = "", $__modifiers__ = [], $__jsName__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "src" => $__src__,
            "alt" => $__alt__,
            "extraClass" => $__extraClass__,
            "modifiers" => $__modifiers__,
            "jsName" => $__jsName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 35
            echo "                ";
            $this->loadTemplate("@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 35, "1034170509")->display(twig_to_array(["class" =>             // line 36
(isset($context["extraClass"]) || array_key_exists("extraClass", $context) ? $context["extraClass"] : (function () { throw new RuntimeError('Variable "extraClass" does not exist.', 36, $this->source); })()), "modifiers" => twig_array_merge(            // line 37
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 37, $this->source); })()), [0 => "thumbnail"]), "data" => ["imageSrc" =>             // line 39
(isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 39, $this->source); })()), "imageTitle" =>             // line 40
(isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 40, $this->source); })())], "embed" => ["jsName" =>             // line 43
(isset($context["jsName"]) || array_key_exists("jsName", $context) ? $context["jsName"] : (function () { throw new RuntimeError('Variable "jsName" does not exist.', 43, $this->source); })())]]));
            // line 52
            echo "            ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  622 => 52,  620 => 43,  619 => 40,  618 => 39,  617 => 37,  616 => 36,  614 => 35,  597 => 34,  593 => 198,  590 => 197,  587 => 193,  584 => 191,  581 => 190,  577 => 189,  573 => 180,  572 => 178,  571 => 177,  567 => 176,  563 => 184,  561 => 176,  558 => 175,  555 => 174,  553 => 173,  551 => 171,  547 => 170,  542 => 185,  540 => 170,  533 => 169,  529 => 168,  525 => 199,  523 => 189,  520 => 188,  517 => 187,  514 => 168,  511 => 167,  507 => 166,  502 => 200,  500 => 166,  495 => 165,  491 => 164,  486 => 202,  484 => 164,  479 => 163,  475 => 162,  471 => 157,  468 => 155,  465 => 154,  463 => 145,  462 => 144,  461 => 143,  460 => 142,  458 => 140,  455 => 139,  451 => 138,  446 => 158,  444 => 138,  441 => 137,  437 => 136,  433 => 132,  430 => 129,  427 => 127,  423 => 126,  419 => 134,  416 => 133,  413 => 126,  410 => 125,  406 => 124,  402 => 122,  396 => 120,  394 => 119,  386 => 117,  382 => 116,  371 => 111,  367 => 110,  360 => 104,  349 => 103,  345 => 102,  341 => 114,  338 => 113,  335 => 110,  333 => 109,  330 => 108,  327 => 107,  324 => 102,  321 => 101,  317 => 100,  313 => 98,  310 => 95,  307 => 93,  303 => 92,  299 => 160,  297 => 136,  294 => 135,  292 => 124,  289 => 123,  287 => 116,  284 => 115,  282 => 100,  279 => 99,  276 => 92,  272 => 91,  268 => 87,  263 => 86,  259 => 85,  255 => 89,  252 => 88,  249 => 85,  246 => 84,  242 => 83,  238 => 79,  235 => 76,  232 => 74,  228 => 73,  224 => 81,  221 => 80,  218 => 73,  215 => 72,  211 => 71,  204 => 64,  200 => 63,  193 => 58,  186 => 57,  182 => 56,  178 => 67,  175 => 66,  172 => 63,  169 => 62,  166 => 61,  163 => 56,  160 => 55,  156 => 54,  152 => 68,  150 => 54,  147 => 53,  145 => 34,  141 => 33,  137 => 69,  135 => 33,  132 => 32,  129 => 31,  126 => 30,  122 => 29,  118 => 162,  115 => 161,  113 => 91,  110 => 90,  108 => 83,  105 => 82,  103 => 71,  100 => 70,  97 => 29,  93 => 28,  85 => 26,  81 => 1,  79 => 24,  78 => 19,  77 => 16,  76 => 14,  75 => 13,  74 => 12,  73 => 11,  72 => 10,  71 => 9,  70 => 8,  69 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_67793c7f78cf77647f0e6925bbad1cadbf89999f22c8ec1325307163e8372816___1034170509 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 35
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["lazy-image"]), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 35);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                        ";
        $context["imageExtraClasses"] = ((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 47, $this->source); })()), "jsName", [], "any", false, false, false, 47)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 47, $this->source); })()), "jsName", [], "any", false, false, false, 47) . "__image")) : (""));
        // line 48
        echo "
                        ";
        // line 49
        $this->displayParentBlock("content", $context, $blocks);
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  896 => 49,  893 => 48,  890 => 47,  886 => 46,  876 => 35,  622 => 52,  620 => 43,  619 => 40,  618 => 39,  617 => 37,  616 => 36,  614 => 35,  597 => 34,  593 => 198,  590 => 197,  587 => 193,  584 => 191,  581 => 190,  577 => 189,  573 => 180,  572 => 178,  571 => 177,  567 => 176,  563 => 184,  561 => 176,  558 => 175,  555 => 174,  553 => 173,  551 => 171,  547 => 170,  542 => 185,  540 => 170,  533 => 169,  529 => 168,  525 => 199,  523 => 189,  520 => 188,  517 => 187,  514 => 168,  511 => 167,  507 => 166,  502 => 200,  500 => 166,  495 => 165,  491 => 164,  486 => 202,  484 => 164,  479 => 163,  475 => 162,  471 => 157,  468 => 155,  465 => 154,  463 => 145,  462 => 144,  461 => 143,  460 => 142,  458 => 140,  455 => 139,  451 => 138,  446 => 158,  444 => 138,  441 => 137,  437 => 136,  433 => 132,  430 => 129,  427 => 127,  423 => 126,  419 => 134,  416 => 133,  413 => 126,  410 => 125,  406 => 124,  402 => 122,  396 => 120,  394 => 119,  386 => 117,  382 => 116,  371 => 111,  367 => 110,  360 => 104,  349 => 103,  345 => 102,  341 => 114,  338 => 113,  335 => 110,  333 => 109,  330 => 108,  327 => 107,  324 => 102,  321 => 101,  317 => 100,  313 => 98,  310 => 95,  307 => 93,  303 => 92,  299 => 160,  297 => 136,  294 => 135,  292 => 124,  289 => 123,  287 => 116,  284 => 115,  282 => 100,  279 => 99,  276 => 92,  272 => 91,  268 => 87,  263 => 86,  259 => 85,  255 => 89,  252 => 88,  249 => 85,  246 => 84,  242 => 83,  238 => 79,  235 => 76,  232 => 74,  228 => 73,  224 => 81,  221 => 80,  218 => 73,  215 => 72,  211 => 71,  204 => 64,  200 => 63,  193 => 58,  186 => 57,  182 => 56,  178 => 67,  175 => 66,  172 => 63,  169 => 62,  166 => 61,  163 => 56,  160 => 55,  156 => 54,  152 => 68,  150 => 54,  147 => 53,  145 => 34,  141 => 33,  137 => 69,  135 => 33,  132 => 32,  129 => 31,  126 => 30,  122 => 29,  118 => 162,  115 => 161,  113 => 91,  110 => 90,  108 => 83,  105 => 82,  103 => 71,  100 => 70,  97 => 29,  93 => 28,  85 => 26,  81 => 1,  79 => 24,  78 => 19,  77 => 16,  76 => 14,  75 => 13,  74 => 12,  73 => 11,  72 => 10,  71 => 9,  70 => 8,  69 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_67793c7f78cf77647f0e6925bbad1cadbf89999f22c8ec1325307163e8372816___198106223 extends Template
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
        // line 74
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 74, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 74);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1146 => 74,  896 => 49,  893 => 48,  890 => 47,  886 => 46,  876 => 35,  622 => 52,  620 => 43,  619 => 40,  618 => 39,  617 => 37,  616 => 36,  614 => 35,  597 => 34,  593 => 198,  590 => 197,  587 => 193,  584 => 191,  581 => 190,  577 => 189,  573 => 180,  572 => 178,  571 => 177,  567 => 176,  563 => 184,  561 => 176,  558 => 175,  555 => 174,  553 => 173,  551 => 171,  547 => 170,  542 => 185,  540 => 170,  533 => 169,  529 => 168,  525 => 199,  523 => 189,  520 => 188,  517 => 187,  514 => 168,  511 => 167,  507 => 166,  502 => 200,  500 => 166,  495 => 165,  491 => 164,  486 => 202,  484 => 164,  479 => 163,  475 => 162,  471 => 157,  468 => 155,  465 => 154,  463 => 145,  462 => 144,  461 => 143,  460 => 142,  458 => 140,  455 => 139,  451 => 138,  446 => 158,  444 => 138,  441 => 137,  437 => 136,  433 => 132,  430 => 129,  427 => 127,  423 => 126,  419 => 134,  416 => 133,  413 => 126,  410 => 125,  406 => 124,  402 => 122,  396 => 120,  394 => 119,  386 => 117,  382 => 116,  371 => 111,  367 => 110,  360 => 104,  349 => 103,  345 => 102,  341 => 114,  338 => 113,  335 => 110,  333 => 109,  330 => 108,  327 => 107,  324 => 102,  321 => 101,  317 => 100,  313 => 98,  310 => 95,  307 => 93,  303 => 92,  299 => 160,  297 => 136,  294 => 135,  292 => 124,  289 => 123,  287 => 116,  284 => 115,  282 => 100,  279 => 99,  276 => 92,  272 => 91,  268 => 87,  263 => 86,  259 => 85,  255 => 89,  252 => 88,  249 => 85,  246 => 84,  242 => 83,  238 => 79,  235 => 76,  232 => 74,  228 => 73,  224 => 81,  221 => 80,  218 => 73,  215 => 72,  211 => 71,  204 => 64,  200 => 63,  193 => 58,  186 => 57,  182 => 56,  178 => 67,  175 => 66,  172 => 63,  169 => 62,  166 => 61,  163 => 56,  160 => 55,  156 => 54,  152 => 68,  150 => 54,  147 => 53,  145 => 34,  141 => 33,  137 => 69,  135 => 33,  132 => 32,  129 => 31,  126 => 30,  122 => 29,  118 => 162,  115 => 161,  113 => 91,  110 => 90,  108 => 83,  105 => 82,  103 => 71,  100 => 70,  97 => 29,  93 => 28,  85 => 26,  81 => 1,  79 => 24,  78 => 19,  77 => 16,  76 => 14,  75 => 13,  74 => 12,  73 => 11,  72 => 10,  71 => 9,  70 => 8,  69 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_67793c7f78cf77647f0e6925bbad1cadbf89999f22c8ec1325307163e8372816___641805668 extends Template
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
        // line 86
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 86, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 86);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1400 => 86,  1146 => 74,  896 => 49,  893 => 48,  890 => 47,  886 => 46,  876 => 35,  622 => 52,  620 => 43,  619 => 40,  618 => 39,  617 => 37,  616 => 36,  614 => 35,  597 => 34,  593 => 198,  590 => 197,  587 => 193,  584 => 191,  581 => 190,  577 => 189,  573 => 180,  572 => 178,  571 => 177,  567 => 176,  563 => 184,  561 => 176,  558 => 175,  555 => 174,  553 => 173,  551 => 171,  547 => 170,  542 => 185,  540 => 170,  533 => 169,  529 => 168,  525 => 199,  523 => 189,  520 => 188,  517 => 187,  514 => 168,  511 => 167,  507 => 166,  502 => 200,  500 => 166,  495 => 165,  491 => 164,  486 => 202,  484 => 164,  479 => 163,  475 => 162,  471 => 157,  468 => 155,  465 => 154,  463 => 145,  462 => 144,  461 => 143,  460 => 142,  458 => 140,  455 => 139,  451 => 138,  446 => 158,  444 => 138,  441 => 137,  437 => 136,  433 => 132,  430 => 129,  427 => 127,  423 => 126,  419 => 134,  416 => 133,  413 => 126,  410 => 125,  406 => 124,  402 => 122,  396 => 120,  394 => 119,  386 => 117,  382 => 116,  371 => 111,  367 => 110,  360 => 104,  349 => 103,  345 => 102,  341 => 114,  338 => 113,  335 => 110,  333 => 109,  330 => 108,  327 => 107,  324 => 102,  321 => 101,  317 => 100,  313 => 98,  310 => 95,  307 => 93,  303 => 92,  299 => 160,  297 => 136,  294 => 135,  292 => 124,  289 => 123,  287 => 116,  284 => 115,  282 => 100,  279 => 99,  276 => 92,  272 => 91,  268 => 87,  263 => 86,  259 => 85,  255 => 89,  252 => 88,  249 => 85,  246 => 84,  242 => 83,  238 => 79,  235 => 76,  232 => 74,  228 => 73,  224 => 81,  221 => 80,  218 => 73,  215 => 72,  211 => 71,  204 => 64,  200 => 63,  193 => 58,  186 => 57,  182 => 56,  178 => 67,  175 => 66,  172 => 63,  169 => 62,  166 => 61,  163 => 56,  160 => 55,  156 => 54,  152 => 68,  150 => 54,  147 => 53,  145 => 34,  141 => 33,  137 => 69,  135 => 33,  132 => 32,  129 => 31,  126 => 30,  122 => 29,  118 => 162,  115 => 161,  113 => 91,  110 => 90,  108 => 83,  105 => 82,  103 => 71,  100 => 70,  97 => 29,  93 => 28,  85 => 26,  81 => 1,  79 => 24,  78 => 19,  77 => 16,  76 => 14,  75 => 13,  74 => 12,  73 => 11,  72 => 10,  71 => 9,  70 => 8,  69 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_67793c7f78cf77647f0e6925bbad1cadbf89999f22c8ec1325307163e8372816___826951583 extends Template
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
        // line 93
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 93, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 93);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1654 => 93,  1400 => 86,  1146 => 74,  896 => 49,  893 => 48,  890 => 47,  886 => 46,  876 => 35,  622 => 52,  620 => 43,  619 => 40,  618 => 39,  617 => 37,  616 => 36,  614 => 35,  597 => 34,  593 => 198,  590 => 197,  587 => 193,  584 => 191,  581 => 190,  577 => 189,  573 => 180,  572 => 178,  571 => 177,  567 => 176,  563 => 184,  561 => 176,  558 => 175,  555 => 174,  553 => 173,  551 => 171,  547 => 170,  542 => 185,  540 => 170,  533 => 169,  529 => 168,  525 => 199,  523 => 189,  520 => 188,  517 => 187,  514 => 168,  511 => 167,  507 => 166,  502 => 200,  500 => 166,  495 => 165,  491 => 164,  486 => 202,  484 => 164,  479 => 163,  475 => 162,  471 => 157,  468 => 155,  465 => 154,  463 => 145,  462 => 144,  461 => 143,  460 => 142,  458 => 140,  455 => 139,  451 => 138,  446 => 158,  444 => 138,  441 => 137,  437 => 136,  433 => 132,  430 => 129,  427 => 127,  423 => 126,  419 => 134,  416 => 133,  413 => 126,  410 => 125,  406 => 124,  402 => 122,  396 => 120,  394 => 119,  386 => 117,  382 => 116,  371 => 111,  367 => 110,  360 => 104,  349 => 103,  345 => 102,  341 => 114,  338 => 113,  335 => 110,  333 => 109,  330 => 108,  327 => 107,  324 => 102,  321 => 101,  317 => 100,  313 => 98,  310 => 95,  307 => 93,  303 => 92,  299 => 160,  297 => 136,  294 => 135,  292 => 124,  289 => 123,  287 => 116,  284 => 115,  282 => 100,  279 => 99,  276 => 92,  272 => 91,  268 => 87,  263 => 86,  259 => 85,  255 => 89,  252 => 88,  249 => 85,  246 => 84,  242 => 83,  238 => 79,  235 => 76,  232 => 74,  228 => 73,  224 => 81,  221 => 80,  218 => 73,  215 => 72,  211 => 71,  204 => 64,  200 => 63,  193 => 58,  186 => 57,  182 => 56,  178 => 67,  175 => 66,  172 => 63,  169 => 62,  166 => 61,  163 => 56,  160 => 55,  156 => 54,  152 => 68,  150 => 54,  147 => 53,  145 => 34,  141 => 33,  137 => 69,  135 => 33,  132 => 32,  129 => 31,  126 => 30,  122 => 29,  118 => 162,  115 => 161,  113 => 91,  110 => 90,  108 => 83,  105 => 82,  103 => 71,  100 => 70,  97 => 29,  93 => 28,  85 => 26,  81 => 1,  79 => 24,  78 => 19,  77 => 16,  76 => 14,  75 => 13,  74 => 12,  73 => 11,  72 => 10,  71 => 9,  70 => 8,  69 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_67793c7f78cf77647f0e6925bbad1cadbf89999f22c8ec1325307163e8372816___30439234 extends Template
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
        // line 127
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 127, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 127);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1908 => 127,  1654 => 93,  1400 => 86,  1146 => 74,  896 => 49,  893 => 48,  890 => 47,  886 => 46,  876 => 35,  622 => 52,  620 => 43,  619 => 40,  618 => 39,  617 => 37,  616 => 36,  614 => 35,  597 => 34,  593 => 198,  590 => 197,  587 => 193,  584 => 191,  581 => 190,  577 => 189,  573 => 180,  572 => 178,  571 => 177,  567 => 176,  563 => 184,  561 => 176,  558 => 175,  555 => 174,  553 => 173,  551 => 171,  547 => 170,  542 => 185,  540 => 170,  533 => 169,  529 => 168,  525 => 199,  523 => 189,  520 => 188,  517 => 187,  514 => 168,  511 => 167,  507 => 166,  502 => 200,  500 => 166,  495 => 165,  491 => 164,  486 => 202,  484 => 164,  479 => 163,  475 => 162,  471 => 157,  468 => 155,  465 => 154,  463 => 145,  462 => 144,  461 => 143,  460 => 142,  458 => 140,  455 => 139,  451 => 138,  446 => 158,  444 => 138,  441 => 137,  437 => 136,  433 => 132,  430 => 129,  427 => 127,  423 => 126,  419 => 134,  416 => 133,  413 => 126,  410 => 125,  406 => 124,  402 => 122,  396 => 120,  394 => 119,  386 => 117,  382 => 116,  371 => 111,  367 => 110,  360 => 104,  349 => 103,  345 => 102,  341 => 114,  338 => 113,  335 => 110,  333 => 109,  330 => 108,  327 => 107,  324 => 102,  321 => 101,  317 => 100,  313 => 98,  310 => 95,  307 => 93,  303 => 92,  299 => 160,  297 => 136,  294 => 135,  292 => 124,  289 => 123,  287 => 116,  284 => 115,  282 => 100,  279 => 99,  276 => 92,  272 => 91,  268 => 87,  263 => 86,  259 => 85,  255 => 89,  252 => 88,  249 => 85,  246 => 84,  242 => 83,  238 => 79,  235 => 76,  232 => 74,  228 => 73,  224 => 81,  221 => 80,  218 => 73,  215 => 72,  211 => 71,  204 => 64,  200 => 63,  193 => 58,  186 => 57,  182 => 56,  178 => 67,  175 => 66,  172 => 63,  169 => 62,  166 => 61,  163 => 56,  160 => 55,  156 => 54,  152 => 68,  150 => 54,  147 => 53,  145 => 34,  141 => 33,  137 => 69,  135 => 33,  132 => 32,  129 => 31,  126 => 30,  122 => 29,  118 => 162,  115 => 161,  113 => 91,  110 => 90,  108 => 83,  105 => 82,  103 => 71,  100 => 70,  97 => 29,  93 => 28,  85 => 26,  81 => 1,  79 => 24,  78 => 19,  77 => 16,  76 => 14,  75 => 13,  74 => 12,  73 => 11,  72 => 10,  71 => 9,  70 => 8,  69 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_67793c7f78cf77647f0e6925bbad1cadbf89999f22c8ec1325307163e8372816___238076836 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'originalPrice' => [$this, 'block_originalPrice'],
            'originalPriceInner' => [$this, 'block_originalPriceInner'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 140
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["money-price"]), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 140);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 148
    public function block_originalPrice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "                                ";
        $this->displayBlock('originalPriceInner', $context, $blocks);
        // line 152
        echo "                            ";
    }

    // line 149
    public function block_originalPriceInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "                                    ";
        $this->displayParentBlock("originalPriceInner", $context, $blocks);
        echo "
                                ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2189 => 150,  2185 => 149,  2181 => 152,  2178 => 149,  2174 => 148,  2164 => 140,  1908 => 127,  1654 => 93,  1400 => 86,  1146 => 74,  896 => 49,  893 => 48,  890 => 47,  886 => 46,  876 => 35,  622 => 52,  620 => 43,  619 => 40,  618 => 39,  617 => 37,  616 => 36,  614 => 35,  597 => 34,  593 => 198,  590 => 197,  587 => 193,  584 => 191,  581 => 190,  577 => 189,  573 => 180,  572 => 178,  571 => 177,  567 => 176,  563 => 184,  561 => 176,  558 => 175,  555 => 174,  553 => 173,  551 => 171,  547 => 170,  542 => 185,  540 => 170,  533 => 169,  529 => 168,  525 => 199,  523 => 189,  520 => 188,  517 => 187,  514 => 168,  511 => 167,  507 => 166,  502 => 200,  500 => 166,  495 => 165,  491 => 164,  486 => 202,  484 => 164,  479 => 163,  475 => 162,  471 => 157,  468 => 155,  465 => 154,  463 => 145,  462 => 144,  461 => 143,  460 => 142,  458 => 140,  455 => 139,  451 => 138,  446 => 158,  444 => 138,  441 => 137,  437 => 136,  433 => 132,  430 => 129,  427 => 127,  423 => 126,  419 => 134,  416 => 133,  413 => 126,  410 => 125,  406 => 124,  402 => 122,  396 => 120,  394 => 119,  386 => 117,  382 => 116,  371 => 111,  367 => 110,  360 => 104,  349 => 103,  345 => 102,  341 => 114,  338 => 113,  335 => 110,  333 => 109,  330 => 108,  327 => 107,  324 => 102,  321 => 101,  317 => 100,  313 => 98,  310 => 95,  307 => 93,  303 => 92,  299 => 160,  297 => 136,  294 => 135,  292 => 124,  289 => 123,  287 => 116,  284 => 115,  282 => 100,  279 => 99,  276 => 92,  272 => 91,  268 => 87,  263 => 86,  259 => 85,  255 => 89,  252 => 88,  249 => 85,  246 => 84,  242 => 83,  238 => 79,  235 => 76,  232 => 74,  228 => 73,  224 => 81,  221 => 80,  218 => 73,  215 => 72,  211 => 71,  204 => 64,  200 => 63,  193 => 58,  186 => 57,  182 => 56,  178 => 67,  175 => 66,  172 => 63,  169 => 62,  166 => 61,  163 => 56,  160 => 55,  156 => 54,  152 => 68,  150 => 54,  147 => 53,  145 => 34,  141 => 33,  137 => 69,  135 => 33,  132 => 32,  129 => 31,  126 => 30,  122 => 29,  118 => 162,  115 => 161,  113 => 91,  110 => 90,  108 => 83,  105 => 82,  103 => 71,  100 => 70,  97 => 29,  93 => 28,  85 => 26,  81 => 1,  79 => 24,  78 => 19,  77 => 16,  76 => 14,  75 => 13,  74 => 12,  73 => 11,  72 => 10,  71 => 9,  70 => 8,  69 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_67793c7f78cf77647f0e6925bbad1cadbf89999f22c8ec1325307163e8372816___759744292 extends Template
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
        // line 191
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 191, $this->source); })()), "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", 191);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2440 => 191,  2189 => 150,  2185 => 149,  2181 => 152,  2178 => 149,  2174 => 148,  2164 => 140,  1908 => 127,  1654 => 93,  1400 => 86,  1146 => 74,  896 => 49,  893 => 48,  890 => 47,  886 => 46,  876 => 35,  622 => 52,  620 => 43,  619 => 40,  618 => 39,  617 => 37,  616 => 36,  614 => 35,  597 => 34,  593 => 198,  590 => 197,  587 => 193,  584 => 191,  581 => 190,  577 => 189,  573 => 180,  572 => 178,  571 => 177,  567 => 176,  563 => 184,  561 => 176,  558 => 175,  555 => 174,  553 => 173,  551 => 171,  547 => 170,  542 => 185,  540 => 170,  533 => 169,  529 => 168,  525 => 199,  523 => 189,  520 => 188,  517 => 187,  514 => 168,  511 => 167,  507 => 166,  502 => 200,  500 => 166,  495 => 165,  491 => 164,  486 => 202,  484 => 164,  479 => 163,  475 => 162,  471 => 157,  468 => 155,  465 => 154,  463 => 145,  462 => 144,  461 => 143,  460 => 142,  458 => 140,  455 => 139,  451 => 138,  446 => 158,  444 => 138,  441 => 137,  437 => 136,  433 => 132,  430 => 129,  427 => 127,  423 => 126,  419 => 134,  416 => 133,  413 => 126,  410 => 125,  406 => 124,  402 => 122,  396 => 120,  394 => 119,  386 => 117,  382 => 116,  371 => 111,  367 => 110,  360 => 104,  349 => 103,  345 => 102,  341 => 114,  338 => 113,  335 => 110,  333 => 109,  330 => 108,  327 => 107,  324 => 102,  321 => 101,  317 => 100,  313 => 98,  310 => 95,  307 => 93,  303 => 92,  299 => 160,  297 => 136,  294 => 135,  292 => 124,  289 => 123,  287 => 116,  284 => 115,  282 => 100,  279 => 99,  276 => 92,  272 => 91,  268 => 87,  263 => 86,  259 => 85,  255 => 89,  252 => 88,  249 => 85,  246 => 84,  242 => 83,  238 => 79,  235 => 76,  232 => 74,  228 => 73,  224 => 81,  221 => 80,  218 => 73,  215 => 72,  211 => 71,  204 => 64,  200 => 63,  193 => 58,  186 => 57,  182 => 56,  178 => 67,  175 => 66,  172 => 63,  169 => 62,  166 => 61,  163 => 56,  160 => 55,  156 => 54,  152 => 68,  150 => 54,  147 => 53,  145 => 34,  141 => 33,  137 => 69,  135 => 33,  132 => 32,  129 => 31,  126 => 30,  122 => 29,  118 => 162,  115 => 161,  113 => 91,  110 => 90,  108 => 83,  105 => 82,  103 => 71,  100 => 70,  97 => 29,  93 => 28,  85 => 26,  81 => 1,  79 => 24,  78 => 19,  77 => 16,  76 => 14,  75 => 13,  74 => 12,  73 => 11,  72 => 10,  71 => 9,  70 => 8,  69 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-item',
    tag: 'product-item',
} %}

{% define data = {
    product: required,
    name: data.product.name | default,
    sku: data.product.sku | default,
    url: data.product.url | default,
    image: data.product.images is defined ? data.product.images.0.externalUrlSmall | default,
    idProductAbstract: data.product.idProductAbstract | default,
    currencyIsoCode: null,
    metaSku: data.product.sku is defined ? data.product.sku : (data.product.abstract_sku is defined ? data.product.abstract_sku : ''),
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
} %}

{% import _self as macros %}

{%- block extraClass %} box {{ config.jsName }}{% endblock -%}

{% block body %}
    {% block thumbnailWrapper %}
        {% set extraClass = '' %}
        {% set modifiers = [] %}

        {% block imageContainer %}
            {% macro thumbnail(src, alt='', extraClass='', modifiers=[], jsName='') %}
                {% embed molecule('lazy-image') with {
                    class: extraClass,
                    modifiers: modifiers | merge(['thumbnail']),
                    data: {
                        imageSrc: src,
                        imageTitle: alt,
                    },
                    embed: {
                        jsName: jsName,
                    },
                } only %}
                    {% block content %}
                        {% set imageExtraClasses = embed.jsName ? embed.jsName ~ '__image' %}

                        {{ parent() }}
                    {% endblock %}
                {% endembed %}
            {% endmacro %}

            {% block image %}
                {% if data.url %}
                    {% block imageLink %}
                        <a class=\"{{ config.jsName }}__link-detail-page\" itemprop=\"url\" href=\"{{ path(data.url) }}\">
                            {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                        </a>
                    {% endblock %}
                {% endif %}
                {% if not data.url %}
                    {% block productThumbnail %}
                        {{ macros.thumbnail(data.image, data.name, extraClass, modifiers, config.jsName) }}
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    {% endblock %}

    {% block labels %}
        {% if data.idProductAbstract %}
            {% block productAbstractLabels %}
                {% widget 'ProductAbstractLabelWidget' args [data.idProductAbstract] with {
                    data: {
                        parentJsName: config.jsName,
                    },
                } only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block groups %}
        {% if data.idProductAbstract %}
            {% block productAbstractGroups %}
                {% widget 'ProductGroupWidget' args [data.idProductAbstract] only %}{% endwidget %}
            {% endblock %}
        {% endif %}
    {% endblock %}

    {% block content %}
        {% block colors %}
            {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block name %}
            {% if data.name and data.url %}
                {% block link %}
                    <a class=\"{{ config.name }}__name {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                        <span itemprop=\"name\">{{ data.name }}</span>
                    </a>
                {% endblock %}
            {% endif %}

            {% if data.name and not data.url %}
                {% block title %}
                    <span itemprop=\"name\" class=\"{{ config.name }}__name {{ config.jsName }}__name\">{{ data.name }}</span>
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block sku %}
            <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">

            {% if data.sku %}
                <div itemprop=\"sku\">{{ data.sku }}</div>
            {% endif %}
        {% endblock %}

        {% block rating %}
            {% if data.idProductAbstract %}
                {% block productAbstractRating %}
                    {% widget 'DisplayProductAbstractReviewWidget' args [data.idProductAbstract] with {
                        data: {
                            parentJsName: config.jsName,
                        },
                    } only %}{% endwidget %}
                {% endblock %}
            {% endif %}
        {% endblock %}

        {% block priceContainer %}
            <div class=\"spacing-y\">
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        {% embed molecule('money-price') with {
                            data: {
                                amount: data.product.prices.DEFAULT | default(null),
                                originalAmount: data.product.prices.ORIGINAL | default(null),
                                currencyIsoCode: data.currencyIsoCode,
                                parentJsName: config.jsName,
                            },
                        } only %}
                            {% block originalPrice %}
                                {% block originalPriceInner %}
                                    {{ parent() }}
                                {% endblock %}
                            {% endblock %}
                        {% endembed %}
                    {% else %}
                        {{- 'customer.access.cannot_see_price' | trans -}}
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ config.name }}__actions\">
            {% block actions %}
                <div class=\"{{ config.name }}__actions-row\">
                    {% block actionsContent %}
                        {% if data.url %}
                            {% block action %}
                                <a class=\"button button--expand {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
                                    {% block actionInner %}
                                        {{- 'product.view' | trans -}}

                                        {% set iconModifiers = ['small'] %}
                                        {% set iconName = 'angle-double-right' %}

                                        {% block icon %}
                                            {%- include atom('icon') with {
                                                modifiers: iconModifiers,
                                                data: {
                                                    name: iconName,
                                                },
                                            } only -%}
                                        {% endblock %}
                                    {% endblock %}
                                </a>
                            {% endblock %}
                        {% endif %}

                        {% block ajaxAddToCart %}
                            {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
                                {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                                    data: {
                                        buttonExtraClasses: config.jsName ~ '__ajax-button-add-to-cart',
                                    },
                                } only %}
                                {% endwidget %}
                            {% endif %}
                        {% endblock %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item/product-item.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}
