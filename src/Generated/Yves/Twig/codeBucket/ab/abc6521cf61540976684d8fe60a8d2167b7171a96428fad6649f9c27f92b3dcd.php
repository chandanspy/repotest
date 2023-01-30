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

/* @ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_0780d7c688b4b12f8a894df3470beb85cd3c2b298fd31332cd7df70806e1edb3 extends Template
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
            'imageContainer' => [$this, 'block_imageContainer'],
            'content' => [$this, 'block_content'],
            'name' => [$this, 'block_name'],
            'sku' => [$this, 'block_sku'],
            'category' => [$this, 'block_category'],
            'priceContainer' => [$this, 'block_priceContainer'],
            'price' => [$this, 'block_price'],
            'actionsContainer' => [$this, 'block_actionsContainer'],
            'image' => [$this, 'block_image'],
            'action' => [$this, 'block_action'],
            'ajaxAddToCart' => [$this, 'block_ajaxAddToCart'],
            'ajaxAddToCartInner' => [$this, 'block_ajaxAddToCartInner'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-item", "@SprykerShop:ShopUi"]), "@ShopUi/components/molecules/product-item/product-item.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["category" => ""], $context['data']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["itemscope" => "", "itemtype" => "https://schema.org/Product", "default-price-color-class-name" => "text-alt"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_extraClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "jsName", [], "any", false, false, false, 15), "html", null, true);
        echo "
";
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <div class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19) . "__container"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 19, $this->source); })())], 19, $context, $this->getSourceContext());
        echo "\">
        ";
        // line 20
        $this->displayBlock('imageContainer', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "
        ";
        // line 72
        $this->displayBlock('actionsContainer', $context, $blocks);
        // line 75
        echo "    </div>
";
    }

    // line 20
    public function block_imageContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            ";
        $context["extraClass"] = "";
        // line 22
        echo "            ";
        $context["modifiers"] = twig_array_merge([0 => "catalog"], (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 22, $this->source); })()));
        // line 23
        echo "
            ";
        // line 24
        $this->displayParentBlock("imageContainer", $context, $blocks);
        echo "
        ";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "            ";
        $this->displayBlock("labels", $context, $blocks);
        echo "

            ";
        // line 30
        $this->displayBlock('name', $context, $blocks);
        // line 35
        echo "
            ";
        // line 36
        $this->displayBlock('sku', $context, $blocks);
        // line 39
        echo "
            ";
        // line 40
        $this->displayBlock('category', $context, $blocks);
        // line 45
        echo "
            <div class=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46), "html", null, true);
        echo "__rating\">
                ";
        // line 47
        $this->displayBlock("rating", $context, $blocks);
        echo "
            </div>

            ";
        // line 50
        $this->displayBlock('priceContainer', $context, $blocks);
        // line 70
        echo "        ";
    }

    // line 30
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                <a itemprop=\"name\" class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31) . "__overlay"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 31, $this->source); })())], 31, $context, $this->getSourceContext());
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "jsName", [], "any", false, false, false, 31), "html", null, true);
        echo "__name ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "jsName", [], "any", false, false, false, 31), "html", null, true);
        echo "__link-detail-page\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "url", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
                    ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "
                </a>
            ";
    }

    // line 36
    public function block_sku($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                <meta class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })()), "jsName", [], "any", false, false, false, 37), "html", null, true);
        echo "__sku\" itemprop=\"sku\" content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 37, $this->source); })()), "metaSku", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
            ";
    }

    // line 40
    public function block_category($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "category", [], "any", false, false, false, 41))) {
            // line 42
            echo "                    <span class=\"";
            echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42) . "__category"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 42, $this->source); })())], 42, $context, $this->getSourceContext());
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "category", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
                ";
        }
        // line 44
        echo "            ";
    }

    // line 50
    public function block_priceContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                ";
        $this->displayBlock('price', $context, $blocks);
        // line 69
        echo "            ";
    }

    // line 51
    public function block_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                    ";
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
            // line 53
            echo "                        <div class=\"";
            echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53) . "__price"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 53, $this->source); })())], 53, $context, $this->getSourceContext());
            echo "\">
                            ";
            // line 54
            $this->loadTemplate("@ShopUi/components/molecules/product-item/product-item.twig", "@ShopUi/components/molecules/product-item/product-item.twig", 54, "1096349646")->display(twig_to_array(["data" => ["amount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 56
($context["data"] ?? null), "product", [], "any", false, true, false, 56), "prices", [], "any", false, true, false, 56), "DEFAULT", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 56), "prices", [], "any", false, true, false, 56), "DEFAULT", [], "any", false, false, false, 56), null)) : (null)), "originalAmount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 57
($context["data"] ?? null), "product", [], "any", false, true, false, 57), "prices", [], "any", false, true, false, 57), "ORIGINAL", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 57), "prices", [], "any", false, true, false, 57), "ORIGINAL", [], "any", false, false, false, 57), null)) : (null)), "currencyIsoCode" => twig_get_attribute($this->env, $this->source,             // line 58
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "currencyIsoCode", [], "any", false, false, false, 58), "parentJsName" => twig_get_attribute($this->env, $this->source,             // line 59
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 59, $this->source); })()), "jsName", [], "any", false, false, false, 59)]]));
            // line 66
            echo "                        </div>
                    ";
        }
        // line 68
        echo "                ";
    }

    // line 72
    public function block_actionsContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "            ";
        $this->displayParentBlock("actionsContainer", $context, $blocks);
        echo "
        ";
    }

    // line 78
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "    <div class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 79, $this->source); })()), "name", [], "any", false, false, false, 79) . "__image-wrap"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 79, $this->source); })())], 79, $context, $this->getSourceContext());
        echo "\">
        ";
        // line 80
        $this->displayBlock("productThumbnail", $context, $blocks);
        echo "

        <div class=\"";
        // line 82
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 82, $this->source); })()), "name", [], "any", false, false, false, 82) . "__colors"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 82, $this->source); })())], 82, $context, $this->getSourceContext());
        echo "\">
            ";
        // line 83
        $this->displayBlock("colors", $context, $blocks);
        echo "
        </div>
    </div>
";
    }

    // line 88
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "    <a itemprop=\"url\" class=\"button button--expand button--hollow ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 89, $this->source); })()), "jsName", [], "any", false, false, false, 89), "html", null, true);
        echo "__link-detail-page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 89, $this->source); })()), "url", [], "any", false, false, false, 89));
        echo "\">
        ";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.view"), "html", null, true);
        echo "
    </a>
";
    }

    // line 94
    public function block_ajaxAddToCart($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "    ";
        if ((twig_test_iterable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 95, $this->source); })()), "product", [], "any", false, false, false, 95)) && $this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeeAddToCartPermissionPlugin"))) {
            // line 96
            echo "        ";
            $context["ajaxButtonExtraClasses"] = (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 96, $this->source); })()), "jsName", [], "any", false, false, false, 96) . "__ajax-button-add-to-cart js-node-animator__trigger");
            // line 97
            echo "        ";
            $context["ajaxButtonExtraAttributes"] = [];
            // line 98
            echo "        ";
            $context["componentExtraClasses"] = "";
            // line 99
            echo "
        ";
            // line 100
            $this->displayBlock('ajaxAddToCartInner', $context, $blocks);
            // line 116
            echo "    ";
        }
    }

    // line 100
    public function block_ajaxAddToCartInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
        echo "            ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductAbstractAddToCartButtonWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 101, $this->source); })()), "product", [], "any", false, false, false, 101)])) {
            $this->loadTemplate("@ShopUi/components/molecules/product-item/product-item.twig", "@ShopUi/components/molecules/product-item/product-item.twig", 101, 1505564861)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["buttonExtraClasses" =>             // line 103
(isset($context["ajaxButtonExtraClasses"]) || array_key_exists("ajaxButtonExtraClasses", $context) ? $context["ajaxButtonExtraClasses"] : (function () { throw new RuntimeError('Variable "ajaxButtonExtraClasses" does not exist.', 103, $this->source); })()), "buttonExtraAttributes" =>             // line 104
(isset($context["ajaxButtonExtraAttributes"]) || array_key_exists("ajaxButtonExtraAttributes", $context) ? $context["ajaxButtonExtraAttributes"] : (function () { throw new RuntimeError('Variable "ajaxButtonExtraAttributes" does not exist.', 104, $this->source); })())], "embed" => ["componentExtraClasses" =>             // line 107
(isset($context["componentExtraClasses"]) || array_key_exists("componentExtraClasses", $context) ? $context["componentExtraClasses"] : (function () { throw new RuntimeError('Variable "componentExtraClasses" does not exist.', 107, $this->source); })())]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 115
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 115,  341 => 107,  340 => 104,  339 => 103,  336 => 101,  332 => 100,  327 => 116,  325 => 100,  322 => 99,  319 => 98,  316 => 97,  313 => 96,  310 => 95,  306 => 94,  299 => 90,  292 => 89,  288 => 88,  280 => 83,  276 => 82,  271 => 80,  266 => 79,  262 => 78,  255 => 73,  251 => 72,  247 => 68,  243 => 66,  241 => 59,  240 => 58,  239 => 57,  238 => 56,  237 => 54,  232 => 53,  229 => 52,  225 => 51,  221 => 69,  218 => 51,  214 => 50,  210 => 44,  202 => 42,  199 => 41,  195 => 40,  186 => 37,  182 => 36,  175 => 32,  164 => 31,  160 => 30,  156 => 70,  154 => 50,  148 => 47,  144 => 46,  141 => 45,  139 => 40,  136 => 39,  134 => 36,  131 => 35,  129 => 30,  123 => 28,  119 => 27,  113 => 24,  110 => 23,  107 => 22,  104 => 21,  100 => 20,  95 => 75,  93 => 72,  90 => 71,  88 => 27,  85 => 26,  83 => 20,  78 => 19,  74 => 18,  67 => 15,  63 => 14,  59 => 1,  58 => 8,  57 => 4,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('product-item', '@SprykerShop:ShopUi') %}
{% import _self as component %}

{% define data = {
    category: '',
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
    'default-price-color-class-name': 'text-alt',
} %}

{% block extraClass %}
    {{ config.jsName }}
{% endblock %}

{% block body %}
    <div class=\"{{ component.renderClass(config.name ~ '__container', modifiers) }}\">
        {% block imageContainer %}
            {% set extraClass = '' %}
            {% set modifiers = ['catalog'] | merge(modifiers) %}

            {{ parent() }}
        {% endblock %}

        {% block content %}
            {{ block('labels') }}

            {% block name %}
                <a itemprop=\"name\" class=\"{{ component.renderClass(config.name ~ '__overlay', modifiers) }} {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ data.url }}\">
                    {{ data.name }}
                </a>
            {% endblock %}

            {% block sku %}
                <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">
            {% endblock %}

            {% block category %}
                {% if data.category is not empty %}
                    <span class=\"{{ component.renderClass(config.name ~ '__category', modifiers) }}\">{{ data.category }}</span>
                {% endif %}
            {% endblock %}

            <div class=\"{{ config.name }}__rating\">
                {{ block('rating') }}
            </div>

            {% block priceContainer %}
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        <div class=\"{{ component.renderClass(config.name ~ '__price', modifiers) }}\">
                            {% embed molecule('money-price') with {
                                data: {
                                    amount: data.product.prices.DEFAULT | default(null),
                                    originalAmount: data.product.prices.ORIGINAL | default(null),
                                    currencyIsoCode: data.currencyIsoCode,
                                    parentJsName: config.jsName,
                                },
                            } only %}
                                {% block originalPrice %}
                                    {{ block('originalPriceInner') }}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    {% endif %}
                {% endblock %}
            {% endblock %}
        {% endblock %}

        {% block actionsContainer %}
            {{ parent() }}
        {% endblock %}
    </div>
{% endblock %}

{% block image %}
    <div class=\"{{ component.renderClass(config.name ~ '__image-wrap', modifiers) }}\">
        {{ block('productThumbnail') }}

        <div class=\"{{ component.renderClass(config.name ~ '__colors', modifiers) }}\">
            {{ block('colors') }}
        </div>
    </div>
{% endblock %}

{% block action %}
    <a itemprop=\"url\" class=\"button button--expand button--hollow {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
        {{ 'product.view' | trans }}
    </a>
{% endblock %}

{% block ajaxAddToCart %}
    {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
        {% set ajaxButtonExtraClasses = config.jsName ~ '__ajax-button-add-to-cart js-node-animator__trigger' %}
        {% set ajaxButtonExtraAttributes = {} %}
        {% set componentExtraClasses = '' %}

        {% block ajaxAddToCartInner %}
            {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                data: {
                    buttonExtraClasses: ajaxButtonExtraClasses,
                    buttonExtraAttributes: ajaxButtonExtraAttributes,
                },
                embed: {
                    componentExtraClasses: componentExtraClasses,
                },
            } only %}
                {% block body %}
                    {% set extraClasses = embed.componentExtraClasses ?: extraClasses %}
                    {{ parent() }}
                {% endblock %}
            {% endwidget %}
        {% endblock %}
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/product-item/product-item.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_0780d7c688b4b12f8a894df3470beb85cd3c2b298fd31332cd7df70806e1edb3___1096349646 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'originalPrice' => [$this, 'block_originalPrice'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 54
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["money-price"]), "@ShopUi/components/molecules/product-item/product-item.twig", 54);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 62
    public function block_originalPrice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                                    ";
        $this->displayBlock("originalPriceInner", $context, $blocks);
        echo "
                                ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  520 => 63,  516 => 62,  506 => 54,  344 => 115,  341 => 107,  340 => 104,  339 => 103,  336 => 101,  332 => 100,  327 => 116,  325 => 100,  322 => 99,  319 => 98,  316 => 97,  313 => 96,  310 => 95,  306 => 94,  299 => 90,  292 => 89,  288 => 88,  280 => 83,  276 => 82,  271 => 80,  266 => 79,  262 => 78,  255 => 73,  251 => 72,  247 => 68,  243 => 66,  241 => 59,  240 => 58,  239 => 57,  238 => 56,  237 => 54,  232 => 53,  229 => 52,  225 => 51,  221 => 69,  218 => 51,  214 => 50,  210 => 44,  202 => 42,  199 => 41,  195 => 40,  186 => 37,  182 => 36,  175 => 32,  164 => 31,  160 => 30,  156 => 70,  154 => 50,  148 => 47,  144 => 46,  141 => 45,  139 => 40,  136 => 39,  134 => 36,  131 => 35,  129 => 30,  123 => 28,  119 => 27,  113 => 24,  110 => 23,  107 => 22,  104 => 21,  100 => 20,  95 => 75,  93 => 72,  90 => 71,  88 => 27,  85 => 26,  83 => 20,  78 => 19,  74 => 18,  67 => 15,  63 => 14,  59 => 1,  58 => 8,  57 => 4,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('product-item', '@SprykerShop:ShopUi') %}
{% import _self as component %}

{% define data = {
    category: '',
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
    'default-price-color-class-name': 'text-alt',
} %}

{% block extraClass %}
    {{ config.jsName }}
{% endblock %}

{% block body %}
    <div class=\"{{ component.renderClass(config.name ~ '__container', modifiers) }}\">
        {% block imageContainer %}
            {% set extraClass = '' %}
            {% set modifiers = ['catalog'] | merge(modifiers) %}

            {{ parent() }}
        {% endblock %}

        {% block content %}
            {{ block('labels') }}

            {% block name %}
                <a itemprop=\"name\" class=\"{{ component.renderClass(config.name ~ '__overlay', modifiers) }} {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ data.url }}\">
                    {{ data.name }}
                </a>
            {% endblock %}

            {% block sku %}
                <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">
            {% endblock %}

            {% block category %}
                {% if data.category is not empty %}
                    <span class=\"{{ component.renderClass(config.name ~ '__category', modifiers) }}\">{{ data.category }}</span>
                {% endif %}
            {% endblock %}

            <div class=\"{{ config.name }}__rating\">
                {{ block('rating') }}
            </div>

            {% block priceContainer %}
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        <div class=\"{{ component.renderClass(config.name ~ '__price', modifiers) }}\">
                            {% embed molecule('money-price') with {
                                data: {
                                    amount: data.product.prices.DEFAULT | default(null),
                                    originalAmount: data.product.prices.ORIGINAL | default(null),
                                    currencyIsoCode: data.currencyIsoCode,
                                    parentJsName: config.jsName,
                                },
                            } only %}
                                {% block originalPrice %}
                                    {{ block('originalPriceInner') }}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    {% endif %}
                {% endblock %}
            {% endblock %}
        {% endblock %}

        {% block actionsContainer %}
            {{ parent() }}
        {% endblock %}
    </div>
{% endblock %}

{% block image %}
    <div class=\"{{ component.renderClass(config.name ~ '__image-wrap', modifiers) }}\">
        {{ block('productThumbnail') }}

        <div class=\"{{ component.renderClass(config.name ~ '__colors', modifiers) }}\">
            {{ block('colors') }}
        </div>
    </div>
{% endblock %}

{% block action %}
    <a itemprop=\"url\" class=\"button button--expand button--hollow {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
        {{ 'product.view' | trans }}
    </a>
{% endblock %}

{% block ajaxAddToCart %}
    {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
        {% set ajaxButtonExtraClasses = config.jsName ~ '__ajax-button-add-to-cart js-node-animator__trigger' %}
        {% set ajaxButtonExtraAttributes = {} %}
        {% set componentExtraClasses = '' %}

        {% block ajaxAddToCartInner %}
            {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                data: {
                    buttonExtraClasses: ajaxButtonExtraClasses,
                    buttonExtraAttributes: ajaxButtonExtraAttributes,
                },
                embed: {
                    componentExtraClasses: componentExtraClasses,
                },
            } only %}
                {% block body %}
                    {% set extraClasses = embed.componentExtraClasses ?: extraClasses %}
                    {{ parent() }}
                {% endblock %}
            {% endwidget %}
        {% endblock %}
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/product-item/product-item.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}


/* @ShopUi/components/molecules/product-item/product-item.twig */
class __TwigTemplate_0780d7c688b4b12f8a894df3470beb85cd3c2b298fd31332cd7df70806e1edb3___1505564861 extends Template
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
        // line 101
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 101, $this->source); })()), "@ShopUi/components/molecules/product-item/product-item.twig", 101);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 110
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                    ";
        $context["extraClasses"] = ((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 111, $this->source); })()), "componentExtraClasses", [], "any", false, false, false, 111)) ? (twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 111, $this->source); })()), "componentExtraClasses", [], "any", false, false, false, 111)) : ((isset($context["extraClasses"]) || array_key_exists("extraClasses", $context) ? $context["extraClasses"] : (function () { throw new RuntimeError('Variable "extraClasses" does not exist.', 111, $this->source); })())));
        // line 112
        echo "                    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/product-item/product-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  702 => 112,  699 => 111,  695 => 110,  685 => 101,  520 => 63,  516 => 62,  506 => 54,  344 => 115,  341 => 107,  340 => 104,  339 => 103,  336 => 101,  332 => 100,  327 => 116,  325 => 100,  322 => 99,  319 => 98,  316 => 97,  313 => 96,  310 => 95,  306 => 94,  299 => 90,  292 => 89,  288 => 88,  280 => 83,  276 => 82,  271 => 80,  266 => 79,  262 => 78,  255 => 73,  251 => 72,  247 => 68,  243 => 66,  241 => 59,  240 => 58,  239 => 57,  238 => 56,  237 => 54,  232 => 53,  229 => 52,  225 => 51,  221 => 69,  218 => 51,  214 => 50,  210 => 44,  202 => 42,  199 => 41,  195 => 40,  186 => 37,  182 => 36,  175 => 32,  164 => 31,  160 => 30,  156 => 70,  154 => 50,  148 => 47,  144 => 46,  141 => 45,  139 => 40,  136 => 39,  134 => 36,  131 => 35,  129 => 30,  123 => 28,  119 => 27,  113 => 24,  110 => 23,  107 => 22,  104 => 21,  100 => 20,  95 => 75,  93 => 72,  90 => 71,  88 => 27,  85 => 26,  83 => 20,  78 => 19,  74 => 18,  67 => 15,  63 => 14,  59 => 1,  58 => 8,  57 => 4,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('product-item', '@SprykerShop:ShopUi') %}
{% import _self as component %}

{% define data = {
    category: '',
} %}

{% define attributes = {
    itemscope: '',
    itemtype: 'https://schema.org/Product',
    'default-price-color-class-name': 'text-alt',
} %}

{% block extraClass %}
    {{ config.jsName }}
{% endblock %}

{% block body %}
    <div class=\"{{ component.renderClass(config.name ~ '__container', modifiers) }}\">
        {% block imageContainer %}
            {% set extraClass = '' %}
            {% set modifiers = ['catalog'] | merge(modifiers) %}

            {{ parent() }}
        {% endblock %}

        {% block content %}
            {{ block('labels') }}

            {% block name %}
                <a itemprop=\"name\" class=\"{{ component.renderClass(config.name ~ '__overlay', modifiers) }} {{ config.jsName }}__name {{ config.jsName }}__link-detail-page\" href=\"{{ data.url }}\">
                    {{ data.name }}
                </a>
            {% endblock %}

            {% block sku %}
                <meta class=\"{{ config.jsName }}__sku\" itemprop=\"sku\" content=\"{{ data.metaSku }}\">
            {% endblock %}

            {% block category %}
                {% if data.category is not empty %}
                    <span class=\"{{ component.renderClass(config.name ~ '__category', modifiers) }}\">{{ data.category }}</span>
                {% endif %}
            {% endblock %}

            <div class=\"{{ config.name }}__rating\">
                {{ block('rating') }}
            </div>

            {% block priceContainer %}
                {% block price %}
                    {% if can('SeePricePermissionPlugin') %}
                        <div class=\"{{ component.renderClass(config.name ~ '__price', modifiers) }}\">
                            {% embed molecule('money-price') with {
                                data: {
                                    amount: data.product.prices.DEFAULT | default(null),
                                    originalAmount: data.product.prices.ORIGINAL | default(null),
                                    currencyIsoCode: data.currencyIsoCode,
                                    parentJsName: config.jsName,
                                },
                            } only %}
                                {% block originalPrice %}
                                    {{ block('originalPriceInner') }}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    {% endif %}
                {% endblock %}
            {% endblock %}
        {% endblock %}

        {% block actionsContainer %}
            {{ parent() }}
        {% endblock %}
    </div>
{% endblock %}

{% block image %}
    <div class=\"{{ component.renderClass(config.name ~ '__image-wrap', modifiers) }}\">
        {{ block('productThumbnail') }}

        <div class=\"{{ component.renderClass(config.name ~ '__colors', modifiers) }}\">
            {{ block('colors') }}
        </div>
    </div>
{% endblock %}

{% block action %}
    <a itemprop=\"url\" class=\"button button--expand button--hollow {{ config.jsName }}__link-detail-page\" href=\"{{ path(data.url) }}\">
        {{ 'product.view' | trans }}
    </a>
{% endblock %}

{% block ajaxAddToCart %}
    {% if data.product is iterable and can('SeeAddToCartPermissionPlugin') %}
        {% set ajaxButtonExtraClasses = config.jsName ~ '__ajax-button-add-to-cart js-node-animator__trigger' %}
        {% set ajaxButtonExtraAttributes = {} %}
        {% set componentExtraClasses = '' %}

        {% block ajaxAddToCartInner %}
            {% widget 'ProductAbstractAddToCartButtonWidget' args [data.product] with {
                data: {
                    buttonExtraClasses: ajaxButtonExtraClasses,
                    buttonExtraAttributes: ajaxButtonExtraAttributes,
                },
                embed: {
                    componentExtraClasses: componentExtraClasses,
                },
            } only %}
                {% block body %}
                    {% set extraClasses = embed.componentExtraClasses ?: extraClasses %}
                    {{ parent() }}
                {% endblock %}
            {% endwidget %}
        {% endblock %}
    {% endif %}
{% endblock %}
", "@ShopUi/components/molecules/product-item/product-item.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item/product-item.twig");
    }
}
