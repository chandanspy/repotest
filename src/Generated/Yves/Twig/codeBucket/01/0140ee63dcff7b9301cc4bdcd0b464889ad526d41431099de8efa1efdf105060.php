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

/* @ProductDetailPage/views/pdp/pdp.twig */
class __TwigTemplate_d7456b55f3231b1d7a07a88a07b1ed101a33dae679c412e6ec1a05d526fb4edd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headScripts' => [$this, 'block_headScripts'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'title' => [$this, 'block_title'],
            'contentClass' => [$this, 'block_contentClass'],
            'content' => [$this, 'block_content'],
            'contentBottom' => [$this, 'block_contentBottom'],
            'footerScripts' => [$this, 'block_footerScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-main"]), "@ProductDetailPage/views/pdp/pdp.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["product" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "product", [], "any", false, false, false, 4), "productUrl" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 5, $this->source); })()), "productUrl", [], "any", false, false, false, 5), "isBundle" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["_view"] ?? null), "product", [], "any", false, true, false, 6), "attributes", [], "any", false, true, false, 6), "bundled_product", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "product", [], "any", false, true, false, 6), "attributes", [], "any", false, true, false, 6), "bundled_product", [], "any", false, false, false, 6), null)) : (null)), "bundleItems" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 7, $this->source); })()), "bundledProducts", [], "any", false, false, false, 7), "hostName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "getSchemeAndHttpHost", [], "method", false, false, false, 8), "productname" => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["_view"] ?? null), "newproductname", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "newproductname", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 9, $this->source); })()), "product", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 9, $this->source); })()), "product", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9))), "title" => ((twig_get_attribute($this->env, $this->source,         // line 10
($context["product"] ?? null), "metaTitle", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "metaTitle", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 10, $this->source); })()), "product", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 10, $this->source); })()), "product", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10))), "metaTitle" => ((twig_get_attribute($this->env, $this->source,         // line 11
($context["product"] ?? null), "metaTitle", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "metaTitle", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 11, $this->source); })()), "product", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 11, $this->source); })()), "product", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11))), "metaDescription" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["_view"] ?? null), "product", [], "any", false, true, false, 12), "metaDescription", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "product", [], "any", false, true, false, 12), "metaDescription", [], "any", false, false, false, 12))) : ("")), "metaKeywords" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["_view"] ?? null), "product", [], "any", false, true, false, 13), "metaKeywords", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "product", [], "any", false, true, false, 13), "metaKeywords", [], "any", false, false, false, 13))) : (""))], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_headScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $this->displayParentBlock("headScripts", $context, $blocks);
        echo "

    ";
        // line 19
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "pdp-header"])) {
            $this->loadTemplate("@ProductDetailPage/views/pdp/pdp.twig", "@ProductDetailPage/views/pdp/pdp.twig", 19, 1214262852)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }    }

    // line 23
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductBreadcrumbsWithCategoriesWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "product", [], "any", false, false, false, 24)])) {
            $this->loadTemplate("@ProductDetailPage/views/pdp/pdp.twig", "@ProductDetailPage/views/pdp/pdp.twig", 24, 1184823975)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        ";
        // line 29
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductAbstractLabelWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "product", [], "any", false, false, false, 29), "idProductAbstract", [], "any", false, false, false, 29)])) {
            $this->loadTemplate("@ProductDetailPage/views/pdp/pdp.twig", "@ProductDetailPage/views/pdp/pdp.twig", 29, 999207571)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 39
        echo "        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "productname", [], "any", false, false, false, 39), "html", null, true);
        echo "
    </h1>
    <link itemprop=\"url\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "productUrl", [], "any", false, false, false, 41), "html", null, true);
        echo "\"/>
";
    }

    // line 44
    public function block_contentClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-layout-main page-layout-main--pdp";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "product", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
        echo "\">
        <meta itemprop=\"url\" content=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), "hostName", [], "any", false, false, false, 49), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), "productUrl", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
        <meta itemprop=\"sku\" content=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 50, $this->source); })()), "product", [], "any", false, false, false, 50), "sku", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
        <meta itemprop=\"productId\" content=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()), "product", [], "any", false, false, false, 51), "sku", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
        <meta itemprop=\"description\" content=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 52, $this->source); })()), "product", [], "any", false, false, false, 52), "metaDescription", [], "any", false, false, false, 52), "html", null, true);
        echo "\">

        ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 54), "images", [], "any", false, true, false, 54), 0, [], "any", false, true, false, 54), "externalUrlLarge", [], "any", true, true, false, 54)) {
            // line 55
            echo "            <meta itemprop=\"image\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "product", [], "any", false, false, false, 55), "images", [], "any", false, false, false, 55), 0, [], "any", false, false, false, 55), "externalUrlLarge", [], "any", false, false, false, 55), "html", null, true);
            echo "\">
        ";
        }
        // line 57
        echo "
        ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 58), "attributes", [], "any", false, true, false, 58), "brand", [], "any", true, true, false, 58)) {
            // line 59
            echo "            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "product", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "brand", [], "any", false, false, false, 60), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 63
        echo "
        ";
        // line 64
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductSchemaOrgCategoryWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "product", [], "any", false, false, false, 64)])) {
            $this->loadTemplate("@ProductDetailPage/views/pdp/pdp.twig", "@ProductDetailPage/views/pdp/pdp.twig", 64, 1155186198)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 65
        echo "
        ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 66), "attributes", [], "any", false, true, false, 66), "upcs", [], "any", true, true, false, 66)) {
            // line 67
            echo "            <meta itemprop=\"gtin12\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 67, $this->source); })()), "product", [], "any", false, false, false, 67), "attributes", [], "any", false, false, false, 67), "upcs", [], "any", false, false, false, 67), "html", null, true);
            echo "\">
        ";
        }
        // line 69
        echo "
        <meta itemprop=\"inProductGroupWithID\" content=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 70, $this->source); })()), "product", [], "any", false, false, false, 70), "idProductAbstract", [], "any", false, false, false, 70), "html", null, true);
        echo "\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                ";
        // line 74
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["image-gallery", "ProductImageWidget"]), "@ProductDetailPage/views/pdp/pdp.twig", 74);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display(twig_to_array(["data" => ["idProductAbstract" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 76
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 76, $this->source); })()), "product", [], "any", false, false, false, 76), "idProductAbstract", [], "any", false, false, false, 76), "images" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 77
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 77, $this->source); })()), "product", [], "any", false, false, false, 77), "images", [], "any", false, false, false, 77)]]));
        }
        // line 80
        echo "            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                ";
        // line 83
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-configurator", "ProductDetailPage"]), "@ProductDetailPage/views/pdp/pdp.twig", 83)->display(twig_to_array(["data" => ["product" => twig_get_attribute($this->env, $this->source,         // line 85
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 85, $this->source); })()), "product", [], "any", false, false, false, 85), "isBundle" => twig_get_attribute($this->env, $this->source,         // line 86
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 86, $this->source); })()), "bundleItems", [], "any", false, false, false, 86), "bundleItems" => twig_get_attribute($this->env, $this->source,         // line 87
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 87, $this->source); })()), "bundleItems", [], "any", false, false, false, 87)]]));
        // line 90
        echo "            </div>
        </div>

        ";
        // line 93
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductAlternativeListWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 93, $this->source); })()), "product", [], "any", false, false, false, 93)])) {
            $this->loadTemplate("@ProductDetailPage/views/pdp/pdp.twig", "@ProductDetailPage/views/pdp/pdp.twig", 93, 1393522762)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 94
        echo "
        <div class=\"js-pdp-section\">
            ";
        // line 96
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-detail", "ProductDetailPage"]), "@ProductDetailPage/views/pdp/pdp.twig", 96)->display(twig_to_array(["data" => ["description" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 98, $this->source); })()), "product", [], "any", false, false, false, 98), "description", [], "any", false, false, false, 98), "attributes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 99, $this->source); })()), "product", [], "any", false, false, false, 99), "attributes", [], "any", false, false, false, 99)]]));
        // line 102
        echo "
            ";
        // line 103
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductDetailPageReviewWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 103, $this->source); })()), "product", [], "any", false, false, false, 103), "idProductAbstract", [], "any", false, false, false, 103)])) {
            $this->loadTemplate("@ProductDetailPage/views/pdp/pdp.twig", "@ProductDetailPage/views/pdp/pdp.twig", 103, 1954615328)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 104
        echo "        </div>

        ";
        // line 106
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-accordion"]), "@ProductDetailPage/views/pdp/pdp.twig", 106)->display(twig_to_array(["attributes" => ["wrap-class-name" => "js-pdp-section", "trigger-class-name" => "js-pdp-section__trigger", "class-to-toggle" => "is-hidden-sm-md"]]));
        // line 113
        echo "
        ";
        // line 114
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductReplacementForListWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 114, $this->source); })()), "product", [], "any", false, false, false, 114), "sku", [], "any", false, false, false, 114)])) {
            $this->loadTemplate("@ProductDetailPage/views/pdp/pdp.twig", "@ProductDetailPage/views/pdp/pdp.twig", 114, 521474469)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 115
        echo "
        ";
        // line 116
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 116, $this->source); })()), "bundleItems", [], "any", false, false, false, 116), null))) {
            // line 117
            echo "            ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-bundle", "ProductDetailPage"]), "@ProductDetailPage/views/pdp/pdp.twig", 117)->display(twig_to_array(["data" => ["bundleItems" => twig_get_attribute($this->env, $this->source,             // line 119
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 119, $this->source); })()), "bundleItems", [], "any", false, false, false, 119)]]));
            // line 122
            echo "        ";
        }
        // line 123
        echo "
        ";
        // line 124
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("SimilarProductsWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 124, $this->source); })()), "product", [], "any", false, false, false, 124)])) {
            $this->loadTemplate("@ProductDetailPage/views/pdp/pdp.twig", "@ProductDetailPage/views/pdp/pdp.twig", 124, 1002803163)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 125
        echo "
        ";
        // line 126
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 126, $this->source); })()), "product", [], "any", false, false, false, 126), "pyzProductSetIds", [], "any", false, false, false, 126))) {
            // line 127
            echo "            ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductSetIdsWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 127, $this->source); })()), "product", [], "any", false, false, false, 127), "pyzProductSetIds", [], "any", false, false, false, 127)])) {
                $this->loadTemplate("@ProductDetailPage/views/pdp/pdp.twig", "@ProductDetailPage/views/pdp/pdp.twig", 127, 1431496450)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 128
            echo "        ";
        }
        // line 129
        echo "    </section>
";
    }

    // line 132
    public function block_contentBottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "    ";
        $__internal_compile_1 = null;
        try {
            $__internal_compile_1 =             $this->loadTemplate("@ProductDetailPage/views/pdp/pdp.twig", "@ProductDetailPage/views/pdp/pdp.twig", 133, "192023315");
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_1) {
            $__internal_compile_1->display(twig_to_array(["data" => ["idProductAbstract" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 135
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 135, $this->source); })()), "product", [], "any", false, false, false, 135), "idProductAbstract", [], "any", false, false, false, 135)]]));
        }
    }

    // line 146
    public function block_footerScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        echo "    ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "pdp-footer"])) {
            $this->loadTemplate("@ProductDetailPage/views/pdp/pdp.twig", "@ProductDetailPage/views/pdp/pdp.twig", 147, 1557901532)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 149
        echo "
    ";
        // line 150
        $this->displayParentBlock("footerScripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/views/pdp/pdp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 150,  322 => 149,  317 => 147,  313 => 146,  308 => 135,  299 => 133,  295 => 132,  290 => 129,  287 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 119,  263 => 117,  261 => 116,  258 => 115,  254 => 114,  251 => 113,  249 => 106,  245 => 104,  241 => 103,  238 => 102,  236 => 99,  235 => 98,  234 => 96,  230 => 94,  226 => 93,  221 => 90,  219 => 87,  218 => 86,  217 => 85,  216 => 83,  211 => 80,  208 => 77,  207 => 76,  199 => 74,  192 => 70,  189 => 69,  183 => 67,  181 => 66,  178 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  113 => 44,  107 => 41,  101 => 39,  97 => 29,  94 => 28,  90 => 27,  83 => 24,  79 => 23,  73 => 19,  67 => 17,  63 => 16,  59 => 1,  58 => 13,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    product: _view.product,
    productUrl: _view.productUrl,
    isBundle: _view.product.attributes.bundled_product | default(null),
    bundleItems: _view.bundledProducts,
    hostName: app.request.getSchemeAndHttpHost(),
    productname:_view.newproductname | default(_view.product.name),
    title: product.metaTitle | default(_view.product.name),
    metaTitle: product.metaTitle | default(_view.product.name),
    metaDescription: _view.product.metaDescription | default,
    metaKeywords: _view.product.metaKeywords | default
} %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['pdp-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% widget 'ProductBreadcrumbsWithCategoriesWidget' args [data.product] only %}{% endwidget %}
{% endblock %}

{% block title %}
    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        {% widget 'ProductAbstractLabelWidget' args [data.product.idProductAbstract] only %}
            {% block body %}
                {% include molecule('label-group', 'ProductLabelWidget') with {
                    modifiers: ['pdp'],
                    data: {
                        labels: labels
                    }
                } only %}
            {% endblock %}
        {% endwidget %}
        {{ data.productname }}
    </h1>
    <link itemprop=\"url\" href=\"{{ data.productUrl }}\"/>
{% endblock %}

{% block contentClass %}page-layout-main page-layout-main--pdp{% endblock %}

{% block content %}
    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"{{ data.product.name }}\">
        <meta itemprop=\"url\" content=\"{{ data.hostName }}{{ data.productUrl }}\">
        <meta itemprop=\"sku\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"productId\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"description\" content=\"{{ data.product.metaDescription }}\">

        {% if data.product.images.0.externalUrlLarge is defined %}
            <meta itemprop=\"image\" content=\"{{ data.product.images.0.externalUrlLarge }}\">
        {% endif %}

        {% if data.product.attributes.brand is defined %}
            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"{{ data.product.attributes.brand }}\">
            </div>
        {% endif %}

        {% widget 'ProductSchemaOrgCategoryWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.attributes.upcs is defined %}
            <meta itemprop=\"gtin12\" content=\"{{ data.product.attributes.upcs }}\">
        {% endif %}

        <meta itemprop=\"inProductGroupWithID\" content=\"{{ data.product.idProductAbstract }}\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                {% include molecule('image-gallery', 'ProductImageWidget') ignore missing with {
                    data: {
                        idProductAbstract: data.product.idProductAbstract,
                        images: data.product.images
                    }
                } only %}
            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                {% include molecule('product-configurator', 'ProductDetailPage') with {
                    data: {
                        product: data.product,
                        isBundle: data.bundleItems,
                        bundleItems: data.bundleItems
                    }
                } only %}
            </div>
        </div>

        {% widget 'ProductAlternativeListWidget' args [data.product] only %}{% endwidget %}

        <div class=\"js-pdp-section\">
            {% include molecule('product-detail', 'ProductDetailPage') with {
                data: {
                    description: data.product.description,
                    attributes: data.product.attributes
                }
            } only %}

            {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] only %}{% endwidget %}
        </div>

        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-pdp-section',
                'trigger-class-name': 'js-pdp-section__trigger',
                'class-to-toggle': 'is-hidden-sm-md',
            },
        } only %}

        {% widget 'ProductReplacementForListWidget' args [data.product.sku] only %}{% endwidget %}

        {% if data.bundleItems != null %}
            {% include molecule('product-bundle', 'ProductDetailPage') with {
                data: {
                    bundleItems: data.bundleItems
                }
            } only %}
        {% endif %}

        {% widget 'SimilarProductsWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.pyzProductSetIds is not empty %}
            {% widget 'ProductSetIdsWidget' args [data.product.pyzProductSetIds] only %}{% endwidget %}
        {% endif %}
    </section>
{% endblock %}

{% block contentBottom %}
    {% embed molecule('product-cms-block', 'CmsBlockWidget') ignore missing with {
        data: {
            idProductAbstract: data.product.idProductAbstract,
        }
    } only %}
        {% block body %}
            {% cms_slot 'slt-9' required ['idProductAbstract'] with {
                idProductAbstract: data.idProductAbstract,
            } %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['pdp-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@ProductDetailPage/views/pdp/pdp.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/views/pdp/pdp.twig");
    }
}


/* @ProductDetailPage/views/pdp/pdp.twig */
class __TwigTemplate_d7456b55f3231b1d7a07a88a07b1ed101a33dae679c412e6ec1a05d526fb4edd___1214262852 extends Template
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
        // line 19
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 19, $this->source); })()), "@ProductDetailPage/views/pdp/pdp.twig", 19);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/views/pdp/pdp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 19,  325 => 150,  322 => 149,  317 => 147,  313 => 146,  308 => 135,  299 => 133,  295 => 132,  290 => 129,  287 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 119,  263 => 117,  261 => 116,  258 => 115,  254 => 114,  251 => 113,  249 => 106,  245 => 104,  241 => 103,  238 => 102,  236 => 99,  235 => 98,  234 => 96,  230 => 94,  226 => 93,  221 => 90,  219 => 87,  218 => 86,  217 => 85,  216 => 83,  211 => 80,  208 => 77,  207 => 76,  199 => 74,  192 => 70,  189 => 69,  183 => 67,  181 => 66,  178 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  113 => 44,  107 => 41,  101 => 39,  97 => 29,  94 => 28,  90 => 27,  83 => 24,  79 => 23,  73 => 19,  67 => 17,  63 => 16,  59 => 1,  58 => 13,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    product: _view.product,
    productUrl: _view.productUrl,
    isBundle: _view.product.attributes.bundled_product | default(null),
    bundleItems: _view.bundledProducts,
    hostName: app.request.getSchemeAndHttpHost(),
    productname:_view.newproductname | default(_view.product.name),
    title: product.metaTitle | default(_view.product.name),
    metaTitle: product.metaTitle | default(_view.product.name),
    metaDescription: _view.product.metaDescription | default,
    metaKeywords: _view.product.metaKeywords | default
} %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['pdp-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% widget 'ProductBreadcrumbsWithCategoriesWidget' args [data.product] only %}{% endwidget %}
{% endblock %}

{% block title %}
    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        {% widget 'ProductAbstractLabelWidget' args [data.product.idProductAbstract] only %}
            {% block body %}
                {% include molecule('label-group', 'ProductLabelWidget') with {
                    modifiers: ['pdp'],
                    data: {
                        labels: labels
                    }
                } only %}
            {% endblock %}
        {% endwidget %}
        {{ data.productname }}
    </h1>
    <link itemprop=\"url\" href=\"{{ data.productUrl }}\"/>
{% endblock %}

{% block contentClass %}page-layout-main page-layout-main--pdp{% endblock %}

{% block content %}
    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"{{ data.product.name }}\">
        <meta itemprop=\"url\" content=\"{{ data.hostName }}{{ data.productUrl }}\">
        <meta itemprop=\"sku\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"productId\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"description\" content=\"{{ data.product.metaDescription }}\">

        {% if data.product.images.0.externalUrlLarge is defined %}
            <meta itemprop=\"image\" content=\"{{ data.product.images.0.externalUrlLarge }}\">
        {% endif %}

        {% if data.product.attributes.brand is defined %}
            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"{{ data.product.attributes.brand }}\">
            </div>
        {% endif %}

        {% widget 'ProductSchemaOrgCategoryWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.attributes.upcs is defined %}
            <meta itemprop=\"gtin12\" content=\"{{ data.product.attributes.upcs }}\">
        {% endif %}

        <meta itemprop=\"inProductGroupWithID\" content=\"{{ data.product.idProductAbstract }}\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                {% include molecule('image-gallery', 'ProductImageWidget') ignore missing with {
                    data: {
                        idProductAbstract: data.product.idProductAbstract,
                        images: data.product.images
                    }
                } only %}
            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                {% include molecule('product-configurator', 'ProductDetailPage') with {
                    data: {
                        product: data.product,
                        isBundle: data.bundleItems,
                        bundleItems: data.bundleItems
                    }
                } only %}
            </div>
        </div>

        {% widget 'ProductAlternativeListWidget' args [data.product] only %}{% endwidget %}

        <div class=\"js-pdp-section\">
            {% include molecule('product-detail', 'ProductDetailPage') with {
                data: {
                    description: data.product.description,
                    attributes: data.product.attributes
                }
            } only %}

            {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] only %}{% endwidget %}
        </div>

        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-pdp-section',
                'trigger-class-name': 'js-pdp-section__trigger',
                'class-to-toggle': 'is-hidden-sm-md',
            },
        } only %}

        {% widget 'ProductReplacementForListWidget' args [data.product.sku] only %}{% endwidget %}

        {% if data.bundleItems != null %}
            {% include molecule('product-bundle', 'ProductDetailPage') with {
                data: {
                    bundleItems: data.bundleItems
                }
            } only %}
        {% endif %}

        {% widget 'SimilarProductsWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.pyzProductSetIds is not empty %}
            {% widget 'ProductSetIdsWidget' args [data.product.pyzProductSetIds] only %}{% endwidget %}
        {% endif %}
    </section>
{% endblock %}

{% block contentBottom %}
    {% embed molecule('product-cms-block', 'CmsBlockWidget') ignore missing with {
        data: {
            idProductAbstract: data.product.idProductAbstract,
        }
    } only %}
        {% block body %}
            {% cms_slot 'slt-9' required ['idProductAbstract'] with {
                idProductAbstract: data.idProductAbstract,
            } %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['pdp-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@ProductDetailPage/views/pdp/pdp.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/views/pdp/pdp.twig");
    }
}


/* @ProductDetailPage/views/pdp/pdp.twig */
class __TwigTemplate_d7456b55f3231b1d7a07a88a07b1ed101a33dae679c412e6ec1a05d526fb4edd___1184823975 extends Template
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
        // line 24
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 24, $this->source); })()), "@ProductDetailPage/views/pdp/pdp.twig", 24);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/views/pdp/pdp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  723 => 24,  522 => 19,  325 => 150,  322 => 149,  317 => 147,  313 => 146,  308 => 135,  299 => 133,  295 => 132,  290 => 129,  287 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 119,  263 => 117,  261 => 116,  258 => 115,  254 => 114,  251 => 113,  249 => 106,  245 => 104,  241 => 103,  238 => 102,  236 => 99,  235 => 98,  234 => 96,  230 => 94,  226 => 93,  221 => 90,  219 => 87,  218 => 86,  217 => 85,  216 => 83,  211 => 80,  208 => 77,  207 => 76,  199 => 74,  192 => 70,  189 => 69,  183 => 67,  181 => 66,  178 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  113 => 44,  107 => 41,  101 => 39,  97 => 29,  94 => 28,  90 => 27,  83 => 24,  79 => 23,  73 => 19,  67 => 17,  63 => 16,  59 => 1,  58 => 13,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    product: _view.product,
    productUrl: _view.productUrl,
    isBundle: _view.product.attributes.bundled_product | default(null),
    bundleItems: _view.bundledProducts,
    hostName: app.request.getSchemeAndHttpHost(),
    productname:_view.newproductname | default(_view.product.name),
    title: product.metaTitle | default(_view.product.name),
    metaTitle: product.metaTitle | default(_view.product.name),
    metaDescription: _view.product.metaDescription | default,
    metaKeywords: _view.product.metaKeywords | default
} %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['pdp-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% widget 'ProductBreadcrumbsWithCategoriesWidget' args [data.product] only %}{% endwidget %}
{% endblock %}

{% block title %}
    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        {% widget 'ProductAbstractLabelWidget' args [data.product.idProductAbstract] only %}
            {% block body %}
                {% include molecule('label-group', 'ProductLabelWidget') with {
                    modifiers: ['pdp'],
                    data: {
                        labels: labels
                    }
                } only %}
            {% endblock %}
        {% endwidget %}
        {{ data.productname }}
    </h1>
    <link itemprop=\"url\" href=\"{{ data.productUrl }}\"/>
{% endblock %}

{% block contentClass %}page-layout-main page-layout-main--pdp{% endblock %}

{% block content %}
    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"{{ data.product.name }}\">
        <meta itemprop=\"url\" content=\"{{ data.hostName }}{{ data.productUrl }}\">
        <meta itemprop=\"sku\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"productId\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"description\" content=\"{{ data.product.metaDescription }}\">

        {% if data.product.images.0.externalUrlLarge is defined %}
            <meta itemprop=\"image\" content=\"{{ data.product.images.0.externalUrlLarge }}\">
        {% endif %}

        {% if data.product.attributes.brand is defined %}
            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"{{ data.product.attributes.brand }}\">
            </div>
        {% endif %}

        {% widget 'ProductSchemaOrgCategoryWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.attributes.upcs is defined %}
            <meta itemprop=\"gtin12\" content=\"{{ data.product.attributes.upcs }}\">
        {% endif %}

        <meta itemprop=\"inProductGroupWithID\" content=\"{{ data.product.idProductAbstract }}\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                {% include molecule('image-gallery', 'ProductImageWidget') ignore missing with {
                    data: {
                        idProductAbstract: data.product.idProductAbstract,
                        images: data.product.images
                    }
                } only %}
            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                {% include molecule('product-configurator', 'ProductDetailPage') with {
                    data: {
                        product: data.product,
                        isBundle: data.bundleItems,
                        bundleItems: data.bundleItems
                    }
                } only %}
            </div>
        </div>

        {% widget 'ProductAlternativeListWidget' args [data.product] only %}{% endwidget %}

        <div class=\"js-pdp-section\">
            {% include molecule('product-detail', 'ProductDetailPage') with {
                data: {
                    description: data.product.description,
                    attributes: data.product.attributes
                }
            } only %}

            {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] only %}{% endwidget %}
        </div>

        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-pdp-section',
                'trigger-class-name': 'js-pdp-section__trigger',
                'class-to-toggle': 'is-hidden-sm-md',
            },
        } only %}

        {% widget 'ProductReplacementForListWidget' args [data.product.sku] only %}{% endwidget %}

        {% if data.bundleItems != null %}
            {% include molecule('product-bundle', 'ProductDetailPage') with {
                data: {
                    bundleItems: data.bundleItems
                }
            } only %}
        {% endif %}

        {% widget 'SimilarProductsWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.pyzProductSetIds is not empty %}
            {% widget 'ProductSetIdsWidget' args [data.product.pyzProductSetIds] only %}{% endwidget %}
        {% endif %}
    </section>
{% endblock %}

{% block contentBottom %}
    {% embed molecule('product-cms-block', 'CmsBlockWidget') ignore missing with {
        data: {
            idProductAbstract: data.product.idProductAbstract,
        }
    } only %}
        {% block body %}
            {% cms_slot 'slt-9' required ['idProductAbstract'] with {
                idProductAbstract: data.idProductAbstract,
            } %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['pdp-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@ProductDetailPage/views/pdp/pdp.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/views/pdp/pdp.twig");
    }
}


/* @ProductDetailPage/views/pdp/pdp.twig */
class __TwigTemplate_d7456b55f3231b1d7a07a88a07b1ed101a33dae679c412e6ec1a05d526fb4edd___999207571 extends Template
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
        // line 29
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 29, $this->source); })()), "@ProductDetailPage/views/pdp/pdp.twig", 29);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["label-group", "ProductLabelWidget"]), "@ProductDetailPage/views/pdp/pdp.twig", 31)->display(twig_to_array(["modifiers" => [0 => "pdp"], "data" => ["labels" =>         // line 34
(isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 34, $this->source); })())]]));
        // line 37
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/views/pdp/pdp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  943 => 37,  941 => 34,  939 => 31,  935 => 30,  925 => 29,  723 => 24,  522 => 19,  325 => 150,  322 => 149,  317 => 147,  313 => 146,  308 => 135,  299 => 133,  295 => 132,  290 => 129,  287 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 119,  263 => 117,  261 => 116,  258 => 115,  254 => 114,  251 => 113,  249 => 106,  245 => 104,  241 => 103,  238 => 102,  236 => 99,  235 => 98,  234 => 96,  230 => 94,  226 => 93,  221 => 90,  219 => 87,  218 => 86,  217 => 85,  216 => 83,  211 => 80,  208 => 77,  207 => 76,  199 => 74,  192 => 70,  189 => 69,  183 => 67,  181 => 66,  178 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  113 => 44,  107 => 41,  101 => 39,  97 => 29,  94 => 28,  90 => 27,  83 => 24,  79 => 23,  73 => 19,  67 => 17,  63 => 16,  59 => 1,  58 => 13,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    product: _view.product,
    productUrl: _view.productUrl,
    isBundle: _view.product.attributes.bundled_product | default(null),
    bundleItems: _view.bundledProducts,
    hostName: app.request.getSchemeAndHttpHost(),
    productname:_view.newproductname | default(_view.product.name),
    title: product.metaTitle | default(_view.product.name),
    metaTitle: product.metaTitle | default(_view.product.name),
    metaDescription: _view.product.metaDescription | default,
    metaKeywords: _view.product.metaKeywords | default
} %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['pdp-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% widget 'ProductBreadcrumbsWithCategoriesWidget' args [data.product] only %}{% endwidget %}
{% endblock %}

{% block title %}
    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        {% widget 'ProductAbstractLabelWidget' args [data.product.idProductAbstract] only %}
            {% block body %}
                {% include molecule('label-group', 'ProductLabelWidget') with {
                    modifiers: ['pdp'],
                    data: {
                        labels: labels
                    }
                } only %}
            {% endblock %}
        {% endwidget %}
        {{ data.productname }}
    </h1>
    <link itemprop=\"url\" href=\"{{ data.productUrl }}\"/>
{% endblock %}

{% block contentClass %}page-layout-main page-layout-main--pdp{% endblock %}

{% block content %}
    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"{{ data.product.name }}\">
        <meta itemprop=\"url\" content=\"{{ data.hostName }}{{ data.productUrl }}\">
        <meta itemprop=\"sku\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"productId\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"description\" content=\"{{ data.product.metaDescription }}\">

        {% if data.product.images.0.externalUrlLarge is defined %}
            <meta itemprop=\"image\" content=\"{{ data.product.images.0.externalUrlLarge }}\">
        {% endif %}

        {% if data.product.attributes.brand is defined %}
            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"{{ data.product.attributes.brand }}\">
            </div>
        {% endif %}

        {% widget 'ProductSchemaOrgCategoryWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.attributes.upcs is defined %}
            <meta itemprop=\"gtin12\" content=\"{{ data.product.attributes.upcs }}\">
        {% endif %}

        <meta itemprop=\"inProductGroupWithID\" content=\"{{ data.product.idProductAbstract }}\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                {% include molecule('image-gallery', 'ProductImageWidget') ignore missing with {
                    data: {
                        idProductAbstract: data.product.idProductAbstract,
                        images: data.product.images
                    }
                } only %}
            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                {% include molecule('product-configurator', 'ProductDetailPage') with {
                    data: {
                        product: data.product,
                        isBundle: data.bundleItems,
                        bundleItems: data.bundleItems
                    }
                } only %}
            </div>
        </div>

        {% widget 'ProductAlternativeListWidget' args [data.product] only %}{% endwidget %}

        <div class=\"js-pdp-section\">
            {% include molecule('product-detail', 'ProductDetailPage') with {
                data: {
                    description: data.product.description,
                    attributes: data.product.attributes
                }
            } only %}

            {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] only %}{% endwidget %}
        </div>

        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-pdp-section',
                'trigger-class-name': 'js-pdp-section__trigger',
                'class-to-toggle': 'is-hidden-sm-md',
            },
        } only %}

        {% widget 'ProductReplacementForListWidget' args [data.product.sku] only %}{% endwidget %}

        {% if data.bundleItems != null %}
            {% include molecule('product-bundle', 'ProductDetailPage') with {
                data: {
                    bundleItems: data.bundleItems
                }
            } only %}
        {% endif %}

        {% widget 'SimilarProductsWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.pyzProductSetIds is not empty %}
            {% widget 'ProductSetIdsWidget' args [data.product.pyzProductSetIds] only %}{% endwidget %}
        {% endif %}
    </section>
{% endblock %}

{% block contentBottom %}
    {% embed molecule('product-cms-block', 'CmsBlockWidget') ignore missing with {
        data: {
            idProductAbstract: data.product.idProductAbstract,
        }
    } only %}
        {% block body %}
            {% cms_slot 'slt-9' required ['idProductAbstract'] with {
                idProductAbstract: data.idProductAbstract,
            } %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['pdp-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@ProductDetailPage/views/pdp/pdp.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/views/pdp/pdp.twig");
    }
}


/* @ProductDetailPage/views/pdp/pdp.twig */
class __TwigTemplate_d7456b55f3231b1d7a07a88a07b1ed101a33dae679c412e6ec1a05d526fb4edd___1155186198 extends Template
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
        // line 64
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 64, $this->source); })()), "@ProductDetailPage/views/pdp/pdp.twig", 64);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/views/pdp/pdp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1138 => 64,  943 => 37,  941 => 34,  939 => 31,  935 => 30,  925 => 29,  723 => 24,  522 => 19,  325 => 150,  322 => 149,  317 => 147,  313 => 146,  308 => 135,  299 => 133,  295 => 132,  290 => 129,  287 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 119,  263 => 117,  261 => 116,  258 => 115,  254 => 114,  251 => 113,  249 => 106,  245 => 104,  241 => 103,  238 => 102,  236 => 99,  235 => 98,  234 => 96,  230 => 94,  226 => 93,  221 => 90,  219 => 87,  218 => 86,  217 => 85,  216 => 83,  211 => 80,  208 => 77,  207 => 76,  199 => 74,  192 => 70,  189 => 69,  183 => 67,  181 => 66,  178 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  113 => 44,  107 => 41,  101 => 39,  97 => 29,  94 => 28,  90 => 27,  83 => 24,  79 => 23,  73 => 19,  67 => 17,  63 => 16,  59 => 1,  58 => 13,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    product: _view.product,
    productUrl: _view.productUrl,
    isBundle: _view.product.attributes.bundled_product | default(null),
    bundleItems: _view.bundledProducts,
    hostName: app.request.getSchemeAndHttpHost(),
    productname:_view.newproductname | default(_view.product.name),
    title: product.metaTitle | default(_view.product.name),
    metaTitle: product.metaTitle | default(_view.product.name),
    metaDescription: _view.product.metaDescription | default,
    metaKeywords: _view.product.metaKeywords | default
} %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['pdp-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% widget 'ProductBreadcrumbsWithCategoriesWidget' args [data.product] only %}{% endwidget %}
{% endblock %}

{% block title %}
    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        {% widget 'ProductAbstractLabelWidget' args [data.product.idProductAbstract] only %}
            {% block body %}
                {% include molecule('label-group', 'ProductLabelWidget') with {
                    modifiers: ['pdp'],
                    data: {
                        labels: labels
                    }
                } only %}
            {% endblock %}
        {% endwidget %}
        {{ data.productname }}
    </h1>
    <link itemprop=\"url\" href=\"{{ data.productUrl }}\"/>
{% endblock %}

{% block contentClass %}page-layout-main page-layout-main--pdp{% endblock %}

{% block content %}
    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"{{ data.product.name }}\">
        <meta itemprop=\"url\" content=\"{{ data.hostName }}{{ data.productUrl }}\">
        <meta itemprop=\"sku\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"productId\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"description\" content=\"{{ data.product.metaDescription }}\">

        {% if data.product.images.0.externalUrlLarge is defined %}
            <meta itemprop=\"image\" content=\"{{ data.product.images.0.externalUrlLarge }}\">
        {% endif %}

        {% if data.product.attributes.brand is defined %}
            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"{{ data.product.attributes.brand }}\">
            </div>
        {% endif %}

        {% widget 'ProductSchemaOrgCategoryWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.attributes.upcs is defined %}
            <meta itemprop=\"gtin12\" content=\"{{ data.product.attributes.upcs }}\">
        {% endif %}

        <meta itemprop=\"inProductGroupWithID\" content=\"{{ data.product.idProductAbstract }}\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                {% include molecule('image-gallery', 'ProductImageWidget') ignore missing with {
                    data: {
                        idProductAbstract: data.product.idProductAbstract,
                        images: data.product.images
                    }
                } only %}
            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                {% include molecule('product-configurator', 'ProductDetailPage') with {
                    data: {
                        product: data.product,
                        isBundle: data.bundleItems,
                        bundleItems: data.bundleItems
                    }
                } only %}
            </div>
        </div>

        {% widget 'ProductAlternativeListWidget' args [data.product] only %}{% endwidget %}

        <div class=\"js-pdp-section\">
            {% include molecule('product-detail', 'ProductDetailPage') with {
                data: {
                    description: data.product.description,
                    attributes: data.product.attributes
                }
            } only %}

            {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] only %}{% endwidget %}
        </div>

        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-pdp-section',
                'trigger-class-name': 'js-pdp-section__trigger',
                'class-to-toggle': 'is-hidden-sm-md',
            },
        } only %}

        {% widget 'ProductReplacementForListWidget' args [data.product.sku] only %}{% endwidget %}

        {% if data.bundleItems != null %}
            {% include molecule('product-bundle', 'ProductDetailPage') with {
                data: {
                    bundleItems: data.bundleItems
                }
            } only %}
        {% endif %}

        {% widget 'SimilarProductsWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.pyzProductSetIds is not empty %}
            {% widget 'ProductSetIdsWidget' args [data.product.pyzProductSetIds] only %}{% endwidget %}
        {% endif %}
    </section>
{% endblock %}

{% block contentBottom %}
    {% embed molecule('product-cms-block', 'CmsBlockWidget') ignore missing with {
        data: {
            idProductAbstract: data.product.idProductAbstract,
        }
    } only %}
        {% block body %}
            {% cms_slot 'slt-9' required ['idProductAbstract'] with {
                idProductAbstract: data.idProductAbstract,
            } %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['pdp-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@ProductDetailPage/views/pdp/pdp.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/views/pdp/pdp.twig");
    }
}


/* @ProductDetailPage/views/pdp/pdp.twig */
class __TwigTemplate_d7456b55f3231b1d7a07a88a07b1ed101a33dae679c412e6ec1a05d526fb4edd___1393522762 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 93, $this->source); })()), "@ProductDetailPage/views/pdp/pdp.twig", 93);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/views/pdp/pdp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1339 => 93,  1138 => 64,  943 => 37,  941 => 34,  939 => 31,  935 => 30,  925 => 29,  723 => 24,  522 => 19,  325 => 150,  322 => 149,  317 => 147,  313 => 146,  308 => 135,  299 => 133,  295 => 132,  290 => 129,  287 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 119,  263 => 117,  261 => 116,  258 => 115,  254 => 114,  251 => 113,  249 => 106,  245 => 104,  241 => 103,  238 => 102,  236 => 99,  235 => 98,  234 => 96,  230 => 94,  226 => 93,  221 => 90,  219 => 87,  218 => 86,  217 => 85,  216 => 83,  211 => 80,  208 => 77,  207 => 76,  199 => 74,  192 => 70,  189 => 69,  183 => 67,  181 => 66,  178 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  113 => 44,  107 => 41,  101 => 39,  97 => 29,  94 => 28,  90 => 27,  83 => 24,  79 => 23,  73 => 19,  67 => 17,  63 => 16,  59 => 1,  58 => 13,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    product: _view.product,
    productUrl: _view.productUrl,
    isBundle: _view.product.attributes.bundled_product | default(null),
    bundleItems: _view.bundledProducts,
    hostName: app.request.getSchemeAndHttpHost(),
    productname:_view.newproductname | default(_view.product.name),
    title: product.metaTitle | default(_view.product.name),
    metaTitle: product.metaTitle | default(_view.product.name),
    metaDescription: _view.product.metaDescription | default,
    metaKeywords: _view.product.metaKeywords | default
} %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['pdp-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% widget 'ProductBreadcrumbsWithCategoriesWidget' args [data.product] only %}{% endwidget %}
{% endblock %}

{% block title %}
    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        {% widget 'ProductAbstractLabelWidget' args [data.product.idProductAbstract] only %}
            {% block body %}
                {% include molecule('label-group', 'ProductLabelWidget') with {
                    modifiers: ['pdp'],
                    data: {
                        labels: labels
                    }
                } only %}
            {% endblock %}
        {% endwidget %}
        {{ data.productname }}
    </h1>
    <link itemprop=\"url\" href=\"{{ data.productUrl }}\"/>
{% endblock %}

{% block contentClass %}page-layout-main page-layout-main--pdp{% endblock %}

{% block content %}
    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"{{ data.product.name }}\">
        <meta itemprop=\"url\" content=\"{{ data.hostName }}{{ data.productUrl }}\">
        <meta itemprop=\"sku\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"productId\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"description\" content=\"{{ data.product.metaDescription }}\">

        {% if data.product.images.0.externalUrlLarge is defined %}
            <meta itemprop=\"image\" content=\"{{ data.product.images.0.externalUrlLarge }}\">
        {% endif %}

        {% if data.product.attributes.brand is defined %}
            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"{{ data.product.attributes.brand }}\">
            </div>
        {% endif %}

        {% widget 'ProductSchemaOrgCategoryWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.attributes.upcs is defined %}
            <meta itemprop=\"gtin12\" content=\"{{ data.product.attributes.upcs }}\">
        {% endif %}

        <meta itemprop=\"inProductGroupWithID\" content=\"{{ data.product.idProductAbstract }}\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                {% include molecule('image-gallery', 'ProductImageWidget') ignore missing with {
                    data: {
                        idProductAbstract: data.product.idProductAbstract,
                        images: data.product.images
                    }
                } only %}
            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                {% include molecule('product-configurator', 'ProductDetailPage') with {
                    data: {
                        product: data.product,
                        isBundle: data.bundleItems,
                        bundleItems: data.bundleItems
                    }
                } only %}
            </div>
        </div>

        {% widget 'ProductAlternativeListWidget' args [data.product] only %}{% endwidget %}

        <div class=\"js-pdp-section\">
            {% include molecule('product-detail', 'ProductDetailPage') with {
                data: {
                    description: data.product.description,
                    attributes: data.product.attributes
                }
            } only %}

            {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] only %}{% endwidget %}
        </div>

        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-pdp-section',
                'trigger-class-name': 'js-pdp-section__trigger',
                'class-to-toggle': 'is-hidden-sm-md',
            },
        } only %}

        {% widget 'ProductReplacementForListWidget' args [data.product.sku] only %}{% endwidget %}

        {% if data.bundleItems != null %}
            {% include molecule('product-bundle', 'ProductDetailPage') with {
                data: {
                    bundleItems: data.bundleItems
                }
            } only %}
        {% endif %}

        {% widget 'SimilarProductsWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.pyzProductSetIds is not empty %}
            {% widget 'ProductSetIdsWidget' args [data.product.pyzProductSetIds] only %}{% endwidget %}
        {% endif %}
    </section>
{% endblock %}

{% block contentBottom %}
    {% embed molecule('product-cms-block', 'CmsBlockWidget') ignore missing with {
        data: {
            idProductAbstract: data.product.idProductAbstract,
        }
    } only %}
        {% block body %}
            {% cms_slot 'slt-9' required ['idProductAbstract'] with {
                idProductAbstract: data.idProductAbstract,
            } %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['pdp-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@ProductDetailPage/views/pdp/pdp.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/views/pdp/pdp.twig");
    }
}


/* @ProductDetailPage/views/pdp/pdp.twig */
class __TwigTemplate_d7456b55f3231b1d7a07a88a07b1ed101a33dae679c412e6ec1a05d526fb4edd___1954615328 extends Template
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
        // line 103
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 103, $this->source); })()), "@ProductDetailPage/views/pdp/pdp.twig", 103);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/views/pdp/pdp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1540 => 103,  1339 => 93,  1138 => 64,  943 => 37,  941 => 34,  939 => 31,  935 => 30,  925 => 29,  723 => 24,  522 => 19,  325 => 150,  322 => 149,  317 => 147,  313 => 146,  308 => 135,  299 => 133,  295 => 132,  290 => 129,  287 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 119,  263 => 117,  261 => 116,  258 => 115,  254 => 114,  251 => 113,  249 => 106,  245 => 104,  241 => 103,  238 => 102,  236 => 99,  235 => 98,  234 => 96,  230 => 94,  226 => 93,  221 => 90,  219 => 87,  218 => 86,  217 => 85,  216 => 83,  211 => 80,  208 => 77,  207 => 76,  199 => 74,  192 => 70,  189 => 69,  183 => 67,  181 => 66,  178 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  113 => 44,  107 => 41,  101 => 39,  97 => 29,  94 => 28,  90 => 27,  83 => 24,  79 => 23,  73 => 19,  67 => 17,  63 => 16,  59 => 1,  58 => 13,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    product: _view.product,
    productUrl: _view.productUrl,
    isBundle: _view.product.attributes.bundled_product | default(null),
    bundleItems: _view.bundledProducts,
    hostName: app.request.getSchemeAndHttpHost(),
    productname:_view.newproductname | default(_view.product.name),
    title: product.metaTitle | default(_view.product.name),
    metaTitle: product.metaTitle | default(_view.product.name),
    metaDescription: _view.product.metaDescription | default,
    metaKeywords: _view.product.metaKeywords | default
} %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['pdp-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% widget 'ProductBreadcrumbsWithCategoriesWidget' args [data.product] only %}{% endwidget %}
{% endblock %}

{% block title %}
    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        {% widget 'ProductAbstractLabelWidget' args [data.product.idProductAbstract] only %}
            {% block body %}
                {% include molecule('label-group', 'ProductLabelWidget') with {
                    modifiers: ['pdp'],
                    data: {
                        labels: labels
                    }
                } only %}
            {% endblock %}
        {% endwidget %}
        {{ data.productname }}
    </h1>
    <link itemprop=\"url\" href=\"{{ data.productUrl }}\"/>
{% endblock %}

{% block contentClass %}page-layout-main page-layout-main--pdp{% endblock %}

{% block content %}
    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"{{ data.product.name }}\">
        <meta itemprop=\"url\" content=\"{{ data.hostName }}{{ data.productUrl }}\">
        <meta itemprop=\"sku\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"productId\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"description\" content=\"{{ data.product.metaDescription }}\">

        {% if data.product.images.0.externalUrlLarge is defined %}
            <meta itemprop=\"image\" content=\"{{ data.product.images.0.externalUrlLarge }}\">
        {% endif %}

        {% if data.product.attributes.brand is defined %}
            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"{{ data.product.attributes.brand }}\">
            </div>
        {% endif %}

        {% widget 'ProductSchemaOrgCategoryWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.attributes.upcs is defined %}
            <meta itemprop=\"gtin12\" content=\"{{ data.product.attributes.upcs }}\">
        {% endif %}

        <meta itemprop=\"inProductGroupWithID\" content=\"{{ data.product.idProductAbstract }}\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                {% include molecule('image-gallery', 'ProductImageWidget') ignore missing with {
                    data: {
                        idProductAbstract: data.product.idProductAbstract,
                        images: data.product.images
                    }
                } only %}
            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                {% include molecule('product-configurator', 'ProductDetailPage') with {
                    data: {
                        product: data.product,
                        isBundle: data.bundleItems,
                        bundleItems: data.bundleItems
                    }
                } only %}
            </div>
        </div>

        {% widget 'ProductAlternativeListWidget' args [data.product] only %}{% endwidget %}

        <div class=\"js-pdp-section\">
            {% include molecule('product-detail', 'ProductDetailPage') with {
                data: {
                    description: data.product.description,
                    attributes: data.product.attributes
                }
            } only %}

            {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] only %}{% endwidget %}
        </div>

        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-pdp-section',
                'trigger-class-name': 'js-pdp-section__trigger',
                'class-to-toggle': 'is-hidden-sm-md',
            },
        } only %}

        {% widget 'ProductReplacementForListWidget' args [data.product.sku] only %}{% endwidget %}

        {% if data.bundleItems != null %}
            {% include molecule('product-bundle', 'ProductDetailPage') with {
                data: {
                    bundleItems: data.bundleItems
                }
            } only %}
        {% endif %}

        {% widget 'SimilarProductsWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.pyzProductSetIds is not empty %}
            {% widget 'ProductSetIdsWidget' args [data.product.pyzProductSetIds] only %}{% endwidget %}
        {% endif %}
    </section>
{% endblock %}

{% block contentBottom %}
    {% embed molecule('product-cms-block', 'CmsBlockWidget') ignore missing with {
        data: {
            idProductAbstract: data.product.idProductAbstract,
        }
    } only %}
        {% block body %}
            {% cms_slot 'slt-9' required ['idProductAbstract'] with {
                idProductAbstract: data.idProductAbstract,
            } %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['pdp-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@ProductDetailPage/views/pdp/pdp.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/views/pdp/pdp.twig");
    }
}


/* @ProductDetailPage/views/pdp/pdp.twig */
class __TwigTemplate_d7456b55f3231b1d7a07a88a07b1ed101a33dae679c412e6ec1a05d526fb4edd___521474469 extends Template
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
        // line 114
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 114, $this->source); })()), "@ProductDetailPage/views/pdp/pdp.twig", 114);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/views/pdp/pdp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1741 => 114,  1540 => 103,  1339 => 93,  1138 => 64,  943 => 37,  941 => 34,  939 => 31,  935 => 30,  925 => 29,  723 => 24,  522 => 19,  325 => 150,  322 => 149,  317 => 147,  313 => 146,  308 => 135,  299 => 133,  295 => 132,  290 => 129,  287 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 119,  263 => 117,  261 => 116,  258 => 115,  254 => 114,  251 => 113,  249 => 106,  245 => 104,  241 => 103,  238 => 102,  236 => 99,  235 => 98,  234 => 96,  230 => 94,  226 => 93,  221 => 90,  219 => 87,  218 => 86,  217 => 85,  216 => 83,  211 => 80,  208 => 77,  207 => 76,  199 => 74,  192 => 70,  189 => 69,  183 => 67,  181 => 66,  178 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  113 => 44,  107 => 41,  101 => 39,  97 => 29,  94 => 28,  90 => 27,  83 => 24,  79 => 23,  73 => 19,  67 => 17,  63 => 16,  59 => 1,  58 => 13,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    product: _view.product,
    productUrl: _view.productUrl,
    isBundle: _view.product.attributes.bundled_product | default(null),
    bundleItems: _view.bundledProducts,
    hostName: app.request.getSchemeAndHttpHost(),
    productname:_view.newproductname | default(_view.product.name),
    title: product.metaTitle | default(_view.product.name),
    metaTitle: product.metaTitle | default(_view.product.name),
    metaDescription: _view.product.metaDescription | default,
    metaKeywords: _view.product.metaKeywords | default
} %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['pdp-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% widget 'ProductBreadcrumbsWithCategoriesWidget' args [data.product] only %}{% endwidget %}
{% endblock %}

{% block title %}
    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        {% widget 'ProductAbstractLabelWidget' args [data.product.idProductAbstract] only %}
            {% block body %}
                {% include molecule('label-group', 'ProductLabelWidget') with {
                    modifiers: ['pdp'],
                    data: {
                        labels: labels
                    }
                } only %}
            {% endblock %}
        {% endwidget %}
        {{ data.productname }}
    </h1>
    <link itemprop=\"url\" href=\"{{ data.productUrl }}\"/>
{% endblock %}

{% block contentClass %}page-layout-main page-layout-main--pdp{% endblock %}

{% block content %}
    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"{{ data.product.name }}\">
        <meta itemprop=\"url\" content=\"{{ data.hostName }}{{ data.productUrl }}\">
        <meta itemprop=\"sku\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"productId\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"description\" content=\"{{ data.product.metaDescription }}\">

        {% if data.product.images.0.externalUrlLarge is defined %}
            <meta itemprop=\"image\" content=\"{{ data.product.images.0.externalUrlLarge }}\">
        {% endif %}

        {% if data.product.attributes.brand is defined %}
            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"{{ data.product.attributes.brand }}\">
            </div>
        {% endif %}

        {% widget 'ProductSchemaOrgCategoryWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.attributes.upcs is defined %}
            <meta itemprop=\"gtin12\" content=\"{{ data.product.attributes.upcs }}\">
        {% endif %}

        <meta itemprop=\"inProductGroupWithID\" content=\"{{ data.product.idProductAbstract }}\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                {% include molecule('image-gallery', 'ProductImageWidget') ignore missing with {
                    data: {
                        idProductAbstract: data.product.idProductAbstract,
                        images: data.product.images
                    }
                } only %}
            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                {% include molecule('product-configurator', 'ProductDetailPage') with {
                    data: {
                        product: data.product,
                        isBundle: data.bundleItems,
                        bundleItems: data.bundleItems
                    }
                } only %}
            </div>
        </div>

        {% widget 'ProductAlternativeListWidget' args [data.product] only %}{% endwidget %}

        <div class=\"js-pdp-section\">
            {% include molecule('product-detail', 'ProductDetailPage') with {
                data: {
                    description: data.product.description,
                    attributes: data.product.attributes
                }
            } only %}

            {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] only %}{% endwidget %}
        </div>

        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-pdp-section',
                'trigger-class-name': 'js-pdp-section__trigger',
                'class-to-toggle': 'is-hidden-sm-md',
            },
        } only %}

        {% widget 'ProductReplacementForListWidget' args [data.product.sku] only %}{% endwidget %}

        {% if data.bundleItems != null %}
            {% include molecule('product-bundle', 'ProductDetailPage') with {
                data: {
                    bundleItems: data.bundleItems
                }
            } only %}
        {% endif %}

        {% widget 'SimilarProductsWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.pyzProductSetIds is not empty %}
            {% widget 'ProductSetIdsWidget' args [data.product.pyzProductSetIds] only %}{% endwidget %}
        {% endif %}
    </section>
{% endblock %}

{% block contentBottom %}
    {% embed molecule('product-cms-block', 'CmsBlockWidget') ignore missing with {
        data: {
            idProductAbstract: data.product.idProductAbstract,
        }
    } only %}
        {% block body %}
            {% cms_slot 'slt-9' required ['idProductAbstract'] with {
                idProductAbstract: data.idProductAbstract,
            } %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['pdp-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@ProductDetailPage/views/pdp/pdp.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/views/pdp/pdp.twig");
    }
}


/* @ProductDetailPage/views/pdp/pdp.twig */
class __TwigTemplate_d7456b55f3231b1d7a07a88a07b1ed101a33dae679c412e6ec1a05d526fb4edd___1002803163 extends Template
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
        // line 124
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 124, $this->source); })()), "@ProductDetailPage/views/pdp/pdp.twig", 124);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/views/pdp/pdp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1942 => 124,  1741 => 114,  1540 => 103,  1339 => 93,  1138 => 64,  943 => 37,  941 => 34,  939 => 31,  935 => 30,  925 => 29,  723 => 24,  522 => 19,  325 => 150,  322 => 149,  317 => 147,  313 => 146,  308 => 135,  299 => 133,  295 => 132,  290 => 129,  287 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 119,  263 => 117,  261 => 116,  258 => 115,  254 => 114,  251 => 113,  249 => 106,  245 => 104,  241 => 103,  238 => 102,  236 => 99,  235 => 98,  234 => 96,  230 => 94,  226 => 93,  221 => 90,  219 => 87,  218 => 86,  217 => 85,  216 => 83,  211 => 80,  208 => 77,  207 => 76,  199 => 74,  192 => 70,  189 => 69,  183 => 67,  181 => 66,  178 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  113 => 44,  107 => 41,  101 => 39,  97 => 29,  94 => 28,  90 => 27,  83 => 24,  79 => 23,  73 => 19,  67 => 17,  63 => 16,  59 => 1,  58 => 13,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    product: _view.product,
    productUrl: _view.productUrl,
    isBundle: _view.product.attributes.bundled_product | default(null),
    bundleItems: _view.bundledProducts,
    hostName: app.request.getSchemeAndHttpHost(),
    productname:_view.newproductname | default(_view.product.name),
    title: product.metaTitle | default(_view.product.name),
    metaTitle: product.metaTitle | default(_view.product.name),
    metaDescription: _view.product.metaDescription | default,
    metaKeywords: _view.product.metaKeywords | default
} %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['pdp-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% widget 'ProductBreadcrumbsWithCategoriesWidget' args [data.product] only %}{% endwidget %}
{% endblock %}

{% block title %}
    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        {% widget 'ProductAbstractLabelWidget' args [data.product.idProductAbstract] only %}
            {% block body %}
                {% include molecule('label-group', 'ProductLabelWidget') with {
                    modifiers: ['pdp'],
                    data: {
                        labels: labels
                    }
                } only %}
            {% endblock %}
        {% endwidget %}
        {{ data.productname }}
    </h1>
    <link itemprop=\"url\" href=\"{{ data.productUrl }}\"/>
{% endblock %}

{% block contentClass %}page-layout-main page-layout-main--pdp{% endblock %}

{% block content %}
    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"{{ data.product.name }}\">
        <meta itemprop=\"url\" content=\"{{ data.hostName }}{{ data.productUrl }}\">
        <meta itemprop=\"sku\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"productId\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"description\" content=\"{{ data.product.metaDescription }}\">

        {% if data.product.images.0.externalUrlLarge is defined %}
            <meta itemprop=\"image\" content=\"{{ data.product.images.0.externalUrlLarge }}\">
        {% endif %}

        {% if data.product.attributes.brand is defined %}
            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"{{ data.product.attributes.brand }}\">
            </div>
        {% endif %}

        {% widget 'ProductSchemaOrgCategoryWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.attributes.upcs is defined %}
            <meta itemprop=\"gtin12\" content=\"{{ data.product.attributes.upcs }}\">
        {% endif %}

        <meta itemprop=\"inProductGroupWithID\" content=\"{{ data.product.idProductAbstract }}\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                {% include molecule('image-gallery', 'ProductImageWidget') ignore missing with {
                    data: {
                        idProductAbstract: data.product.idProductAbstract,
                        images: data.product.images
                    }
                } only %}
            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                {% include molecule('product-configurator', 'ProductDetailPage') with {
                    data: {
                        product: data.product,
                        isBundle: data.bundleItems,
                        bundleItems: data.bundleItems
                    }
                } only %}
            </div>
        </div>

        {% widget 'ProductAlternativeListWidget' args [data.product] only %}{% endwidget %}

        <div class=\"js-pdp-section\">
            {% include molecule('product-detail', 'ProductDetailPage') with {
                data: {
                    description: data.product.description,
                    attributes: data.product.attributes
                }
            } only %}

            {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] only %}{% endwidget %}
        </div>

        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-pdp-section',
                'trigger-class-name': 'js-pdp-section__trigger',
                'class-to-toggle': 'is-hidden-sm-md',
            },
        } only %}

        {% widget 'ProductReplacementForListWidget' args [data.product.sku] only %}{% endwidget %}

        {% if data.bundleItems != null %}
            {% include molecule('product-bundle', 'ProductDetailPage') with {
                data: {
                    bundleItems: data.bundleItems
                }
            } only %}
        {% endif %}

        {% widget 'SimilarProductsWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.pyzProductSetIds is not empty %}
            {% widget 'ProductSetIdsWidget' args [data.product.pyzProductSetIds] only %}{% endwidget %}
        {% endif %}
    </section>
{% endblock %}

{% block contentBottom %}
    {% embed molecule('product-cms-block', 'CmsBlockWidget') ignore missing with {
        data: {
            idProductAbstract: data.product.idProductAbstract,
        }
    } only %}
        {% block body %}
            {% cms_slot 'slt-9' required ['idProductAbstract'] with {
                idProductAbstract: data.idProductAbstract,
            } %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['pdp-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@ProductDetailPage/views/pdp/pdp.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/views/pdp/pdp.twig");
    }
}


/* @ProductDetailPage/views/pdp/pdp.twig */
class __TwigTemplate_d7456b55f3231b1d7a07a88a07b1ed101a33dae679c412e6ec1a05d526fb4edd___1431496450 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 127, $this->source); })()), "@ProductDetailPage/views/pdp/pdp.twig", 127);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/views/pdp/pdp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2143 => 127,  1942 => 124,  1741 => 114,  1540 => 103,  1339 => 93,  1138 => 64,  943 => 37,  941 => 34,  939 => 31,  935 => 30,  925 => 29,  723 => 24,  522 => 19,  325 => 150,  322 => 149,  317 => 147,  313 => 146,  308 => 135,  299 => 133,  295 => 132,  290 => 129,  287 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 119,  263 => 117,  261 => 116,  258 => 115,  254 => 114,  251 => 113,  249 => 106,  245 => 104,  241 => 103,  238 => 102,  236 => 99,  235 => 98,  234 => 96,  230 => 94,  226 => 93,  221 => 90,  219 => 87,  218 => 86,  217 => 85,  216 => 83,  211 => 80,  208 => 77,  207 => 76,  199 => 74,  192 => 70,  189 => 69,  183 => 67,  181 => 66,  178 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  113 => 44,  107 => 41,  101 => 39,  97 => 29,  94 => 28,  90 => 27,  83 => 24,  79 => 23,  73 => 19,  67 => 17,  63 => 16,  59 => 1,  58 => 13,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    product: _view.product,
    productUrl: _view.productUrl,
    isBundle: _view.product.attributes.bundled_product | default(null),
    bundleItems: _view.bundledProducts,
    hostName: app.request.getSchemeAndHttpHost(),
    productname:_view.newproductname | default(_view.product.name),
    title: product.metaTitle | default(_view.product.name),
    metaTitle: product.metaTitle | default(_view.product.name),
    metaDescription: _view.product.metaDescription | default,
    metaKeywords: _view.product.metaKeywords | default
} %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['pdp-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% widget 'ProductBreadcrumbsWithCategoriesWidget' args [data.product] only %}{% endwidget %}
{% endblock %}

{% block title %}
    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        {% widget 'ProductAbstractLabelWidget' args [data.product.idProductAbstract] only %}
            {% block body %}
                {% include molecule('label-group', 'ProductLabelWidget') with {
                    modifiers: ['pdp'],
                    data: {
                        labels: labels
                    }
                } only %}
            {% endblock %}
        {% endwidget %}
        {{ data.productname }}
    </h1>
    <link itemprop=\"url\" href=\"{{ data.productUrl }}\"/>
{% endblock %}

{% block contentClass %}page-layout-main page-layout-main--pdp{% endblock %}

{% block content %}
    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"{{ data.product.name }}\">
        <meta itemprop=\"url\" content=\"{{ data.hostName }}{{ data.productUrl }}\">
        <meta itemprop=\"sku\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"productId\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"description\" content=\"{{ data.product.metaDescription }}\">

        {% if data.product.images.0.externalUrlLarge is defined %}
            <meta itemprop=\"image\" content=\"{{ data.product.images.0.externalUrlLarge }}\">
        {% endif %}

        {% if data.product.attributes.brand is defined %}
            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"{{ data.product.attributes.brand }}\">
            </div>
        {% endif %}

        {% widget 'ProductSchemaOrgCategoryWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.attributes.upcs is defined %}
            <meta itemprop=\"gtin12\" content=\"{{ data.product.attributes.upcs }}\">
        {% endif %}

        <meta itemprop=\"inProductGroupWithID\" content=\"{{ data.product.idProductAbstract }}\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                {% include molecule('image-gallery', 'ProductImageWidget') ignore missing with {
                    data: {
                        idProductAbstract: data.product.idProductAbstract,
                        images: data.product.images
                    }
                } only %}
            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                {% include molecule('product-configurator', 'ProductDetailPage') with {
                    data: {
                        product: data.product,
                        isBundle: data.bundleItems,
                        bundleItems: data.bundleItems
                    }
                } only %}
            </div>
        </div>

        {% widget 'ProductAlternativeListWidget' args [data.product] only %}{% endwidget %}

        <div class=\"js-pdp-section\">
            {% include molecule('product-detail', 'ProductDetailPage') with {
                data: {
                    description: data.product.description,
                    attributes: data.product.attributes
                }
            } only %}

            {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] only %}{% endwidget %}
        </div>

        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-pdp-section',
                'trigger-class-name': 'js-pdp-section__trigger',
                'class-to-toggle': 'is-hidden-sm-md',
            },
        } only %}

        {% widget 'ProductReplacementForListWidget' args [data.product.sku] only %}{% endwidget %}

        {% if data.bundleItems != null %}
            {% include molecule('product-bundle', 'ProductDetailPage') with {
                data: {
                    bundleItems: data.bundleItems
                }
            } only %}
        {% endif %}

        {% widget 'SimilarProductsWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.pyzProductSetIds is not empty %}
            {% widget 'ProductSetIdsWidget' args [data.product.pyzProductSetIds] only %}{% endwidget %}
        {% endif %}
    </section>
{% endblock %}

{% block contentBottom %}
    {% embed molecule('product-cms-block', 'CmsBlockWidget') ignore missing with {
        data: {
            idProductAbstract: data.product.idProductAbstract,
        }
    } only %}
        {% block body %}
            {% cms_slot 'slt-9' required ['idProductAbstract'] with {
                idProductAbstract: data.idProductAbstract,
            } %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['pdp-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@ProductDetailPage/views/pdp/pdp.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/views/pdp/pdp.twig");
    }
}


/* @ProductDetailPage/views/pdp/pdp.twig */
class __TwigTemplate_d7456b55f3231b1d7a07a88a07b1ed101a33dae679c412e6ec1a05d526fb4edd___192023315 extends Template
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
        // line 133
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-cms-block", "CmsBlockWidget"]), "@ProductDetailPage/views/pdp/pdp.twig", 133);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 138
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "            ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-9')->setCmsSlotTemplatePath('@ProductDetailPage/views/pdp/pdp.twig')->setProvidedData(["idProductAbstract" => twig_get_attribute($this->env, $this->source,         // line 140
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 140, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 140)])->setRequiredKeys([0 => "idProductAbstract"])->setAutoFilledKeys([]));        // line 142
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/views/pdp/pdp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2362 => 142,  2361 => 140,  2359 => 139,  2355 => 138,  2345 => 133,  2143 => 127,  1942 => 124,  1741 => 114,  1540 => 103,  1339 => 93,  1138 => 64,  943 => 37,  941 => 34,  939 => 31,  935 => 30,  925 => 29,  723 => 24,  522 => 19,  325 => 150,  322 => 149,  317 => 147,  313 => 146,  308 => 135,  299 => 133,  295 => 132,  290 => 129,  287 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 119,  263 => 117,  261 => 116,  258 => 115,  254 => 114,  251 => 113,  249 => 106,  245 => 104,  241 => 103,  238 => 102,  236 => 99,  235 => 98,  234 => 96,  230 => 94,  226 => 93,  221 => 90,  219 => 87,  218 => 86,  217 => 85,  216 => 83,  211 => 80,  208 => 77,  207 => 76,  199 => 74,  192 => 70,  189 => 69,  183 => 67,  181 => 66,  178 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  113 => 44,  107 => 41,  101 => 39,  97 => 29,  94 => 28,  90 => 27,  83 => 24,  79 => 23,  73 => 19,  67 => 17,  63 => 16,  59 => 1,  58 => 13,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    product: _view.product,
    productUrl: _view.productUrl,
    isBundle: _view.product.attributes.bundled_product | default(null),
    bundleItems: _view.bundledProducts,
    hostName: app.request.getSchemeAndHttpHost(),
    productname:_view.newproductname | default(_view.product.name),
    title: product.metaTitle | default(_view.product.name),
    metaTitle: product.metaTitle | default(_view.product.name),
    metaDescription: _view.product.metaDescription | default,
    metaKeywords: _view.product.metaKeywords | default
} %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['pdp-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% widget 'ProductBreadcrumbsWithCategoriesWidget' args [data.product] only %}{% endwidget %}
{% endblock %}

{% block title %}
    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        {% widget 'ProductAbstractLabelWidget' args [data.product.idProductAbstract] only %}
            {% block body %}
                {% include molecule('label-group', 'ProductLabelWidget') with {
                    modifiers: ['pdp'],
                    data: {
                        labels: labels
                    }
                } only %}
            {% endblock %}
        {% endwidget %}
        {{ data.productname }}
    </h1>
    <link itemprop=\"url\" href=\"{{ data.productUrl }}\"/>
{% endblock %}

{% block contentClass %}page-layout-main page-layout-main--pdp{% endblock %}

{% block content %}
    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"{{ data.product.name }}\">
        <meta itemprop=\"url\" content=\"{{ data.hostName }}{{ data.productUrl }}\">
        <meta itemprop=\"sku\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"productId\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"description\" content=\"{{ data.product.metaDescription }}\">

        {% if data.product.images.0.externalUrlLarge is defined %}
            <meta itemprop=\"image\" content=\"{{ data.product.images.0.externalUrlLarge }}\">
        {% endif %}

        {% if data.product.attributes.brand is defined %}
            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"{{ data.product.attributes.brand }}\">
            </div>
        {% endif %}

        {% widget 'ProductSchemaOrgCategoryWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.attributes.upcs is defined %}
            <meta itemprop=\"gtin12\" content=\"{{ data.product.attributes.upcs }}\">
        {% endif %}

        <meta itemprop=\"inProductGroupWithID\" content=\"{{ data.product.idProductAbstract }}\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                {% include molecule('image-gallery', 'ProductImageWidget') ignore missing with {
                    data: {
                        idProductAbstract: data.product.idProductAbstract,
                        images: data.product.images
                    }
                } only %}
            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                {% include molecule('product-configurator', 'ProductDetailPage') with {
                    data: {
                        product: data.product,
                        isBundle: data.bundleItems,
                        bundleItems: data.bundleItems
                    }
                } only %}
            </div>
        </div>

        {% widget 'ProductAlternativeListWidget' args [data.product] only %}{% endwidget %}

        <div class=\"js-pdp-section\">
            {% include molecule('product-detail', 'ProductDetailPage') with {
                data: {
                    description: data.product.description,
                    attributes: data.product.attributes
                }
            } only %}

            {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] only %}{% endwidget %}
        </div>

        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-pdp-section',
                'trigger-class-name': 'js-pdp-section__trigger',
                'class-to-toggle': 'is-hidden-sm-md',
            },
        } only %}

        {% widget 'ProductReplacementForListWidget' args [data.product.sku] only %}{% endwidget %}

        {% if data.bundleItems != null %}
            {% include molecule('product-bundle', 'ProductDetailPage') with {
                data: {
                    bundleItems: data.bundleItems
                }
            } only %}
        {% endif %}

        {% widget 'SimilarProductsWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.pyzProductSetIds is not empty %}
            {% widget 'ProductSetIdsWidget' args [data.product.pyzProductSetIds] only %}{% endwidget %}
        {% endif %}
    </section>
{% endblock %}

{% block contentBottom %}
    {% embed molecule('product-cms-block', 'CmsBlockWidget') ignore missing with {
        data: {
            idProductAbstract: data.product.idProductAbstract,
        }
    } only %}
        {% block body %}
            {% cms_slot 'slt-9' required ['idProductAbstract'] with {
                idProductAbstract: data.idProductAbstract,
            } %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['pdp-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@ProductDetailPage/views/pdp/pdp.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/views/pdp/pdp.twig");
    }
}


/* @ProductDetailPage/views/pdp/pdp.twig */
class __TwigTemplate_d7456b55f3231b1d7a07a88a07b1ed101a33dae679c412e6ec1a05d526fb4edd___1557901532 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 147, $this->source); })()), "@ProductDetailPage/views/pdp/pdp.twig", 147);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/views/pdp/pdp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2557 => 147,  2362 => 142,  2361 => 140,  2359 => 139,  2355 => 138,  2345 => 133,  2143 => 127,  1942 => 124,  1741 => 114,  1540 => 103,  1339 => 93,  1138 => 64,  943 => 37,  941 => 34,  939 => 31,  935 => 30,  925 => 29,  723 => 24,  522 => 19,  325 => 150,  322 => 149,  317 => 147,  313 => 146,  308 => 135,  299 => 133,  295 => 132,  290 => 129,  287 => 128,  282 => 127,  280 => 126,  277 => 125,  273 => 124,  270 => 123,  267 => 122,  265 => 119,  263 => 117,  261 => 116,  258 => 115,  254 => 114,  251 => 113,  249 => 106,  245 => 104,  241 => 103,  238 => 102,  236 => 99,  235 => 98,  234 => 96,  230 => 94,  226 => 93,  221 => 90,  219 => 87,  218 => 86,  217 => 85,  216 => 83,  211 => 80,  208 => 77,  207 => 76,  199 => 74,  192 => 70,  189 => 69,  183 => 67,  181 => 66,  178 => 65,  174 => 64,  171 => 63,  165 => 60,  162 => 59,  160 => 58,  157 => 57,  151 => 55,  149 => 54,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  113 => 44,  107 => 41,  101 => 39,  97 => 29,  94 => 28,  90 => 27,  83 => 24,  79 => 23,  73 => 19,  67 => 17,  63 => 16,  59 => 1,  58 => 13,  57 => 12,  56 => 11,  55 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    product: _view.product,
    productUrl: _view.productUrl,
    isBundle: _view.product.attributes.bundled_product | default(null),
    bundleItems: _view.bundledProducts,
    hostName: app.request.getSchemeAndHttpHost(),
    productname:_view.newproductname | default(_view.product.name),
    title: product.metaTitle | default(_view.product.name),
    metaTitle: product.metaTitle | default(_view.product.name),
    metaDescription: _view.product.metaDescription | default,
    metaKeywords: _view.product.metaKeywords | default
} %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['pdp-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% widget 'ProductBreadcrumbsWithCategoriesWidget' args [data.product] only %}{% endwidget %}
{% endblock %}

{% block title %}
    <h1 itemprop=\"name\" class=\"page-info__title title title--h3\">
        {% widget 'ProductAbstractLabelWidget' args [data.product.idProductAbstract] only %}
            {% block body %}
                {% include molecule('label-group', 'ProductLabelWidget') with {
                    modifiers: ['pdp'],
                    data: {
                        labels: labels
                    }
                } only %}
            {% endblock %}
        {% endwidget %}
        {{ data.productname }}
    </h1>
    <link itemprop=\"url\" href=\"{{ data.productUrl }}\"/>
{% endblock %}

{% block contentClass %}page-layout-main page-layout-main--pdp{% endblock %}

{% block content %}
    <section itemscope itemtype=\"https://schema.org/Product\">
        <meta itemprop=\"name\" content=\"{{ data.product.name }}\">
        <meta itemprop=\"url\" content=\"{{ data.hostName }}{{ data.productUrl }}\">
        <meta itemprop=\"sku\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"productId\" content=\"{{ data.product.sku }}\">
        <meta itemprop=\"description\" content=\"{{ data.product.metaDescription }}\">

        {% if data.product.images.0.externalUrlLarge is defined %}
            <meta itemprop=\"image\" content=\"{{ data.product.images.0.externalUrlLarge }}\">
        {% endif %}

        {% if data.product.attributes.brand is defined %}
            <div itemprop=\"brand\" itemscope itemtype=\"https://schema.org/Brand\">
                <meta itemprop=\"name\" content=\"{{ data.product.attributes.brand }}\">
            </div>
        {% endif %}

        {% widget 'ProductSchemaOrgCategoryWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.attributes.upcs is defined %}
            <meta itemprop=\"gtin12\" content=\"{{ data.product.attributes.upcs }}\">
        {% endif %}

        <meta itemprop=\"inProductGroupWithID\" content=\"{{ data.product.idProductAbstract }}\">

        <div class=\"grid grid--gap grid--justify\">
            <div class=\"page-layout-main__pdp-gallery\">
                {% include molecule('image-gallery', 'ProductImageWidget') ignore missing with {
                    data: {
                        idProductAbstract: data.product.idProductAbstract,
                        images: data.product.images
                    }
                } only %}
            </div>

            <div class=\"col col--sm-12 col--lg-5\">
                {% include molecule('product-configurator', 'ProductDetailPage') with {
                    data: {
                        product: data.product,
                        isBundle: data.bundleItems,
                        bundleItems: data.bundleItems
                    }
                } only %}
            </div>
        </div>

        {% widget 'ProductAlternativeListWidget' args [data.product] only %}{% endwidget %}

        <div class=\"js-pdp-section\">
            {% include molecule('product-detail', 'ProductDetailPage') with {
                data: {
                    description: data.product.description,
                    attributes: data.product.attributes
                }
            } only %}

            {% widget 'ProductDetailPageReviewWidget' args [data.product.idProductAbstract] only %}{% endwidget %}
        </div>

        {% include molecule('toggler-accordion') with {
            attributes: {
                'wrap-class-name': 'js-pdp-section',
                'trigger-class-name': 'js-pdp-section__trigger',
                'class-to-toggle': 'is-hidden-sm-md',
            },
        } only %}

        {% widget 'ProductReplacementForListWidget' args [data.product.sku] only %}{% endwidget %}

        {% if data.bundleItems != null %}
            {% include molecule('product-bundle', 'ProductDetailPage') with {
                data: {
                    bundleItems: data.bundleItems
                }
            } only %}
        {% endif %}

        {% widget 'SimilarProductsWidget' args [data.product] only %}{% endwidget %}

        {% if data.product.pyzProductSetIds is not empty %}
            {% widget 'ProductSetIdsWidget' args [data.product.pyzProductSetIds] only %}{% endwidget %}
        {% endif %}
    </section>
{% endblock %}

{% block contentBottom %}
    {% embed molecule('product-cms-block', 'CmsBlockWidget') ignore missing with {
        data: {
            idProductAbstract: data.product.idProductAbstract,
        }
    } only %}
        {% block body %}
            {% cms_slot 'slt-9' required ['idProductAbstract'] with {
                idProductAbstract: data.idProductAbstract,
            } %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['pdp-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@ProductDetailPage/views/pdp/pdp.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/views/pdp/pdp.twig");
    }
}
