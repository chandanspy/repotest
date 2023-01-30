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

/* @ShopUi/components/molecules/product-item-list/product-item-list.twig */
class __TwigTemplate_242d4f5b7c9565917bf2fec79223402d325a3cb1e343a5657be1f20fcbd9e1fa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'imageContainer' => [$this, 'block_imageContainer'],
            'image' => [$this, 'block_image'],
            'productThumbnail' => [$this, 'block_productThumbnail'],
            'content' => [$this, 'block_content'],
            'name' => [$this, 'block_name'],
            'colors' => [$this, 'block_colors'],
            'price' => [$this, 'block_price'],
            'actionsContainer' => [$this, 'block_actionsContainer'],
            'actions' => [$this, 'block_actions'],
            'ajaxAddToCartInner' => [$this, 'block_ajaxAddToCartInner'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-item-list", "@SprykerShop:ShopUi"]), "@ShopUi/components/molecules/product-item-list/product-item-list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["tag" => "product-item-list"], $context['config']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "__container\">
        ";
        // line 9
        $this->displayBlock("labels", $context, $blocks);
        echo "

        <div class=\"grid grid--stretch\">
            ";
        // line 12
        $context["extraClass"] = "";
        // line 13
        echo "            ";
        $context["modifiers"] = [0 => "category-list"];
        // line 14
        echo "
            ";
        // line 15
        $this->displayBlock('imageContainer', $context, $blocks);
        // line 48
        echo "
            ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "
            ";
        // line 70
        $this->displayBlock('actionsContainer', $context, $blocks);
        // line 99
        echo "        </div>
    </div>
";
    }

    // line 15
    public function block_imageContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                ";
        // line 35
        echo "
                ";
        // line 36
        $macros["macros"] = $this;
        // line 37
        echo "
                ";
        // line 38
        $this->displayBlock('image', $context, $blocks);
        // line 47
        echo "            ";
    }

    // line 38
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "__image col col--sm-12 col--md-4 col--xl-2\">
                        ";
        // line 40
        $this->displayBlock('productThumbnail', $context, $blocks);
        // line 45
        echo "                    </div>
                ";
    }

    // line 40
    public function block_productThumbnail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                            <a class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "__overlay ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "jsName", [], "any", false, false, false, 41), "html", null, true);
        echo "__link-detail-page\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "url", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                                ";
        // line 42
        $this->displayParentBlock("productThumbnail", $context, $blocks);
        echo "
                            </a>
                        ";
    }

    // line 49
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "                <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "__content col col--sm-12 col--md-5 col--xl-8\">
                    ";
        // line 51
        $this->displayBlock('name', $context, $blocks);
        // line 54
        echo "
                    ";
        // line 55
        $this->displayBlock("rating", $context, $blocks);
        echo "

                    ";
        // line 57
        $this->displayBlock('colors', $context, $blocks);
        // line 65
        echo "
                    ";
        // line 66
        $this->displayBlock('price', $context, $blocks);
        // line 67
        echo "                </div>
            ";
    }

    // line 51
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                        ";
        $this->displayBlock("title", $context, $blocks);
        echo "
                    ";
    }

    // line 57
    public function block_colors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                        ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductGroupColorWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 58), 1 => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 58), "selectedAttributes", [], "any", true, true, false, 58) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 58), "selectedAttributes", [], "any", false, false, false, 58)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 58), "selectedAttributes", [], "any", false, false, false, 58)) : ([]))])) {
            $this->loadTemplate("@ShopUi/components/molecules/product-item-list/product-item-list.twig", "@ShopUi/components/molecules/product-item-list/product-item-list.twig", 58, 966713850)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget, call_user_func_array($this->env->getFunction('view')->getCallable(), ["product-item-color-selector", "ProductGroupWidget"]))), ["data" => ["parentJsName" => twig_get_attribute($this->env, $this->source,             // line 60
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 60, $this->source); })()), "jsName", [], "any", false, false, false, 60), "modifiers" => [0 => "product-list"]]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 64
        echo "                    ";
    }

    // line 66
    public function block_price($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 70
    public function block_actionsContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 71, $this->source); })()), "name", [], "any", false, false, false, 71), "html", null, true);
        echo "__total col col--sm-12 col--md-3 col--xl-2\">
                    <div class=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "__price grid grid--column grid--justify-column grid--bottom\">
                        <div class=\"col\">
                            ";
        // line 74
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
            // line 75
            echo "                                ";
            $this->loadTemplate("@ShopUi/components/molecules/product-item-list/product-item-list.twig", "@ShopUi/components/molecules/product-item-list/product-item-list.twig", 75, "1596865512")->display(twig_to_array(["modifiers" => [0 => "gray-color", 1 => "block", 2 => "margin-left-from-tablet"], "data" => ["amount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 78
($context["data"] ?? null), "product", [], "any", false, true, false, 78), "prices", [], "any", false, true, false, 78), "DEFAULT", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 78), "prices", [], "any", false, true, false, 78), "DEFAULT", [], "any", false, false, false, 78), null)) : (null)), "originalAmount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 79
($context["data"] ?? null), "product", [], "any", false, true, false, 79), "prices", [], "any", false, true, false, 79), "ORIGINAL", [], "any", true, true, false, 79)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 79), "prices", [], "any", false, true, false, 79), "ORIGINAL", [], "any", false, false, false, 79), null)) : (null)), "currencyIsoCode" => twig_get_attribute($this->env, $this->source,             // line 80
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 80, $this->source); })()), "currencyIsoCode", [], "any", false, false, false, 80), "parentJsName" => twig_get_attribute($this->env, $this->source,             // line 81
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 81, $this->source); })()), "jsName", [], "any", false, false, false, 81)]]));
            // line 88
            echo "                            ";
        }
        // line 89
        echo "                        </div>

                        ";
        // line 91
        $this->displayBlock('actions', $context, $blocks);
        // line 96
        echo "                    </div>
                </div>
            ";
    }

    // line 91
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "                            <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92), "html", null, true);
        echo "__details col\">
                                ";
        // line 93
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
                            </div>
                        ";
    }

    // line 103
    public function block_ajaxAddToCartInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "    ";
        $context["ajaxButtonExtraAttributes"] = ["data-node-animator-wrapper-class-name" => twig_get_attribute($this->env, $this->source,         // line 105
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 105, $this->source); })()), "jsName", [], "any", false, false, false, 105)];
        // line 107
        echo "    ";
        $context["componentExtraClasses"] = (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 107, $this->source); })()), "name", [], "any", false, false, false, 107) . "__action");
        // line 108
        echo "    ";
        $this->displayParentBlock("ajaxAddToCartInner", $context, $blocks);
        echo "
";
    }

    // line 16
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
            // line 17
            echo "                    ";
            $this->loadTemplate("@ShopUi/components/molecules/product-item-list/product-item-list.twig", "@ShopUi/components/molecules/product-item-list/product-item-list.twig", 17, "1018372940")->display(twig_to_array(["class" =>             // line 18
(isset($context["extraClass"]) || array_key_exists("extraClass", $context) ? $context["extraClass"] : (function () { throw new RuntimeError('Variable "extraClass" does not exist.', 18, $this->source); })()), "modifiers" => twig_array_merge(            // line 19
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 19, $this->source); })()), [0 => "thumbnail"]), "data" => ["imageSrc" =>             // line 21
(isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 21, $this->source); })()), "imageTitle" =>             // line 22
(isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 22, $this->source); })())], "embed" => ["jsName" =>             // line 25
(isset($context["jsName"]) || array_key_exists("jsName", $context) ? $context["jsName"] : (function () { throw new RuntimeError('Variable "jsName" does not exist.', 25, $this->source); })())]]));
            // line 34
            echo "                ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/product-item-list/product-item-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 34,  311 => 25,  310 => 22,  309 => 21,  308 => 19,  307 => 18,  305 => 17,  288 => 16,  281 => 108,  278 => 107,  276 => 105,  274 => 104,  270 => 103,  263 => 93,  258 => 92,  254 => 91,  248 => 96,  246 => 91,  242 => 89,  239 => 88,  237 => 81,  236 => 80,  235 => 79,  234 => 78,  232 => 75,  230 => 74,  225 => 72,  220 => 71,  216 => 70,  210 => 66,  206 => 64,  203 => 60,  200 => 58,  196 => 57,  189 => 52,  185 => 51,  180 => 67,  178 => 66,  175 => 65,  173 => 57,  168 => 55,  165 => 54,  163 => 51,  158 => 50,  154 => 49,  147 => 42,  138 => 41,  134 => 40,  129 => 45,  127 => 40,  122 => 39,  118 => 38,  114 => 47,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  102 => 16,  98 => 15,  92 => 99,  90 => 70,  87 => 69,  85 => 49,  82 => 48,  80 => 15,  77 => 14,  74 => 13,  72 => 12,  66 => 9,  61 => 8,  57 => 7,  53 => 1,  52 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('product-item-list', '@SprykerShop:ShopUi') %}

{% define config = {
    tag: 'product-item-list',
} %}

{% block body %}
    <div class=\"{{ config.name }}__container\">
        {{ block('labels') }}

        <div class=\"grid grid--stretch\">
            {% set extraClass = '' %}
            {% set modifiers = ['category-list'] %}

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

                {% import _self as macros %}

                {% block image %}
                    <div class=\"{{ config.name }}__image col col--sm-12 col--md-4 col--xl-2\">
                        {% block productThumbnail %}
                            <a class=\"{{ config.name }}__overlay {{ config.jsName }}__link-detail-page\" href=\"{{ data.url }}\">
                                {{ parent() }}
                            </a>
                        {% endblock %}
                    </div>
                {% endblock %}
            {% endblock %}

            {% block content %}
                <div class=\"{{ config.name }}__content col col--sm-12 col--md-5 col--xl-8\">
                    {% block name %}
                        {{ block('title') }}
                    {% endblock %}

                    {{ block('rating') }}

                    {% block colors %}
                        {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                            data: {
                                parentJsName: config.jsName,
                                modifiers: ['product-list'],
                            },
                        } only %}{% endwidget %}
                    {% endblock %}

                    {% block price %}{% endblock %}
                </div>
            {% endblock %}

            {% block actionsContainer %}
                <div class=\"{{ config.name }}__total col col--sm-12 col--md-3 col--xl-2\">
                    <div class=\"{{ config.name }}__price grid grid--column grid--justify-column grid--bottom\">
                        <div class=\"col\">
                            {% if can('SeePricePermissionPlugin') %}
                                {% embed molecule('money-price') with {
                                    modifiers: ['gray-color', 'block', 'margin-left-from-tablet'],
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
                            {% endif %}
                        </div>

                        {% block actions %}
                            <div class=\"{{ config.name }}__details col\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block ajaxAddToCartInner %}
    {% set ajaxButtonExtraAttributes = {
        'data-node-animator-wrapper-class-name': config.jsName,
    } %}
    {% set componentExtraClasses = config.name ~ '__action' %}
    {{ parent() }}
{% endblock %}
", "@ShopUi/components/molecules/product-item-list/product-item-list.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item-list/product-item-list.twig");
    }
}


/* @ShopUi/components/molecules/product-item-list/product-item-list.twig */
class __TwigTemplate_242d4f5b7c9565917bf2fec79223402d325a3cb1e343a5657be1f20fcbd9e1fa___1018372940 extends Template
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
        // line 17
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["lazy-image"]), "@ShopUi/components/molecules/product-item-list/product-item-list.twig", 17);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                            ";
        $context["imageExtraClasses"] = ((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 29, $this->source); })()), "jsName", [], "any", false, false, false, 29)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 29, $this->source); })()), "jsName", [], "any", false, false, false, 29) . "__image")) : (""));
        // line 30
        echo "
                            ";
        // line 31
        $this->displayParentBlock("content", $context, $blocks);
        echo "
                        ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/product-item-list/product-item-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 31,  489 => 30,  486 => 29,  482 => 28,  472 => 17,  313 => 34,  311 => 25,  310 => 22,  309 => 21,  308 => 19,  307 => 18,  305 => 17,  288 => 16,  281 => 108,  278 => 107,  276 => 105,  274 => 104,  270 => 103,  263 => 93,  258 => 92,  254 => 91,  248 => 96,  246 => 91,  242 => 89,  239 => 88,  237 => 81,  236 => 80,  235 => 79,  234 => 78,  232 => 75,  230 => 74,  225 => 72,  220 => 71,  216 => 70,  210 => 66,  206 => 64,  203 => 60,  200 => 58,  196 => 57,  189 => 52,  185 => 51,  180 => 67,  178 => 66,  175 => 65,  173 => 57,  168 => 55,  165 => 54,  163 => 51,  158 => 50,  154 => 49,  147 => 42,  138 => 41,  134 => 40,  129 => 45,  127 => 40,  122 => 39,  118 => 38,  114 => 47,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  102 => 16,  98 => 15,  92 => 99,  90 => 70,  87 => 69,  85 => 49,  82 => 48,  80 => 15,  77 => 14,  74 => 13,  72 => 12,  66 => 9,  61 => 8,  57 => 7,  53 => 1,  52 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('product-item-list', '@SprykerShop:ShopUi') %}

{% define config = {
    tag: 'product-item-list',
} %}

{% block body %}
    <div class=\"{{ config.name }}__container\">
        {{ block('labels') }}

        <div class=\"grid grid--stretch\">
            {% set extraClass = '' %}
            {% set modifiers = ['category-list'] %}

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

                {% import _self as macros %}

                {% block image %}
                    <div class=\"{{ config.name }}__image col col--sm-12 col--md-4 col--xl-2\">
                        {% block productThumbnail %}
                            <a class=\"{{ config.name }}__overlay {{ config.jsName }}__link-detail-page\" href=\"{{ data.url }}\">
                                {{ parent() }}
                            </a>
                        {% endblock %}
                    </div>
                {% endblock %}
            {% endblock %}

            {% block content %}
                <div class=\"{{ config.name }}__content col col--sm-12 col--md-5 col--xl-8\">
                    {% block name %}
                        {{ block('title') }}
                    {% endblock %}

                    {{ block('rating') }}

                    {% block colors %}
                        {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                            data: {
                                parentJsName: config.jsName,
                                modifiers: ['product-list'],
                            },
                        } only %}{% endwidget %}
                    {% endblock %}

                    {% block price %}{% endblock %}
                </div>
            {% endblock %}

            {% block actionsContainer %}
                <div class=\"{{ config.name }}__total col col--sm-12 col--md-3 col--xl-2\">
                    <div class=\"{{ config.name }}__price grid grid--column grid--justify-column grid--bottom\">
                        <div class=\"col\">
                            {% if can('SeePricePermissionPlugin') %}
                                {% embed molecule('money-price') with {
                                    modifiers: ['gray-color', 'block', 'margin-left-from-tablet'],
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
                            {% endif %}
                        </div>

                        {% block actions %}
                            <div class=\"{{ config.name }}__details col\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block ajaxAddToCartInner %}
    {% set ajaxButtonExtraAttributes = {
        'data-node-animator-wrapper-class-name': config.jsName,
    } %}
    {% set componentExtraClasses = config.name ~ '__action' %}
    {{ parent() }}
{% endblock %}
", "@ShopUi/components/molecules/product-item-list/product-item-list.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item-list/product-item-list.twig");
    }
}


/* @ShopUi/components/molecules/product-item-list/product-item-list.twig */
class __TwigTemplate_242d4f5b7c9565917bf2fec79223402d325a3cb1e343a5657be1f20fcbd9e1fa___966713850 extends Template
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
        // line 58
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 58, $this->source); })()), "@ShopUi/components/molecules/product-item-list/product-item-list.twig", 58);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/product-item-list/product-item-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  647 => 58,  492 => 31,  489 => 30,  486 => 29,  482 => 28,  472 => 17,  313 => 34,  311 => 25,  310 => 22,  309 => 21,  308 => 19,  307 => 18,  305 => 17,  288 => 16,  281 => 108,  278 => 107,  276 => 105,  274 => 104,  270 => 103,  263 => 93,  258 => 92,  254 => 91,  248 => 96,  246 => 91,  242 => 89,  239 => 88,  237 => 81,  236 => 80,  235 => 79,  234 => 78,  232 => 75,  230 => 74,  225 => 72,  220 => 71,  216 => 70,  210 => 66,  206 => 64,  203 => 60,  200 => 58,  196 => 57,  189 => 52,  185 => 51,  180 => 67,  178 => 66,  175 => 65,  173 => 57,  168 => 55,  165 => 54,  163 => 51,  158 => 50,  154 => 49,  147 => 42,  138 => 41,  134 => 40,  129 => 45,  127 => 40,  122 => 39,  118 => 38,  114 => 47,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  102 => 16,  98 => 15,  92 => 99,  90 => 70,  87 => 69,  85 => 49,  82 => 48,  80 => 15,  77 => 14,  74 => 13,  72 => 12,  66 => 9,  61 => 8,  57 => 7,  53 => 1,  52 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('product-item-list', '@SprykerShop:ShopUi') %}

{% define config = {
    tag: 'product-item-list',
} %}

{% block body %}
    <div class=\"{{ config.name }}__container\">
        {{ block('labels') }}

        <div class=\"grid grid--stretch\">
            {% set extraClass = '' %}
            {% set modifiers = ['category-list'] %}

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

                {% import _self as macros %}

                {% block image %}
                    <div class=\"{{ config.name }}__image col col--sm-12 col--md-4 col--xl-2\">
                        {% block productThumbnail %}
                            <a class=\"{{ config.name }}__overlay {{ config.jsName }}__link-detail-page\" href=\"{{ data.url }}\">
                                {{ parent() }}
                            </a>
                        {% endblock %}
                    </div>
                {% endblock %}
            {% endblock %}

            {% block content %}
                <div class=\"{{ config.name }}__content col col--sm-12 col--md-5 col--xl-8\">
                    {% block name %}
                        {{ block('title') }}
                    {% endblock %}

                    {{ block('rating') }}

                    {% block colors %}
                        {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                            data: {
                                parentJsName: config.jsName,
                                modifiers: ['product-list'],
                            },
                        } only %}{% endwidget %}
                    {% endblock %}

                    {% block price %}{% endblock %}
                </div>
            {% endblock %}

            {% block actionsContainer %}
                <div class=\"{{ config.name }}__total col col--sm-12 col--md-3 col--xl-2\">
                    <div class=\"{{ config.name }}__price grid grid--column grid--justify-column grid--bottom\">
                        <div class=\"col\">
                            {% if can('SeePricePermissionPlugin') %}
                                {% embed molecule('money-price') with {
                                    modifiers: ['gray-color', 'block', 'margin-left-from-tablet'],
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
                            {% endif %}
                        </div>

                        {% block actions %}
                            <div class=\"{{ config.name }}__details col\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block ajaxAddToCartInner %}
    {% set ajaxButtonExtraAttributes = {
        'data-node-animator-wrapper-class-name': config.jsName,
    } %}
    {% set componentExtraClasses = config.name ~ '__action' %}
    {{ parent() }}
{% endblock %}
", "@ShopUi/components/molecules/product-item-list/product-item-list.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item-list/product-item-list.twig");
    }
}


/* @ShopUi/components/molecules/product-item-list/product-item-list.twig */
class __TwigTemplate_242d4f5b7c9565917bf2fec79223402d325a3cb1e343a5657be1f20fcbd9e1fa___1596865512 extends Template
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
        // line 75
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["money-price"]), "@ShopUi/components/molecules/product-item-list/product-item-list.twig", 75);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 84
    public function block_originalPrice($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "                                        ";
        $this->displayBlock("originalPriceInner", $context, $blocks);
        echo "
                                    ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/product-item-list/product-item-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  821 => 85,  817 => 84,  807 => 75,  647 => 58,  492 => 31,  489 => 30,  486 => 29,  482 => 28,  472 => 17,  313 => 34,  311 => 25,  310 => 22,  309 => 21,  308 => 19,  307 => 18,  305 => 17,  288 => 16,  281 => 108,  278 => 107,  276 => 105,  274 => 104,  270 => 103,  263 => 93,  258 => 92,  254 => 91,  248 => 96,  246 => 91,  242 => 89,  239 => 88,  237 => 81,  236 => 80,  235 => 79,  234 => 78,  232 => 75,  230 => 74,  225 => 72,  220 => 71,  216 => 70,  210 => 66,  206 => 64,  203 => 60,  200 => 58,  196 => 57,  189 => 52,  185 => 51,  180 => 67,  178 => 66,  175 => 65,  173 => 57,  168 => 55,  165 => 54,  163 => 51,  158 => 50,  154 => 49,  147 => 42,  138 => 41,  134 => 40,  129 => 45,  127 => 40,  122 => 39,  118 => 38,  114 => 47,  112 => 38,  109 => 37,  107 => 36,  104 => 35,  102 => 16,  98 => 15,  92 => 99,  90 => 70,  87 => 69,  85 => 49,  82 => 48,  80 => 15,  77 => 14,  74 => 13,  72 => 12,  66 => 9,  61 => 8,  57 => 7,  53 => 1,  52 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('product-item-list', '@SprykerShop:ShopUi') %}

{% define config = {
    tag: 'product-item-list',
} %}

{% block body %}
    <div class=\"{{ config.name }}__container\">
        {{ block('labels') }}

        <div class=\"grid grid--stretch\">
            {% set extraClass = '' %}
            {% set modifiers = ['category-list'] %}

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

                {% import _self as macros %}

                {% block image %}
                    <div class=\"{{ config.name }}__image col col--sm-12 col--md-4 col--xl-2\">
                        {% block productThumbnail %}
                            <a class=\"{{ config.name }}__overlay {{ config.jsName }}__link-detail-page\" href=\"{{ data.url }}\">
                                {{ parent() }}
                            </a>
                        {% endblock %}
                    </div>
                {% endblock %}
            {% endblock %}

            {% block content %}
                <div class=\"{{ config.name }}__content col col--sm-12 col--md-5 col--xl-8\">
                    {% block name %}
                        {{ block('title') }}
                    {% endblock %}

                    {{ block('rating') }}

                    {% block colors %}
                        {% widget 'ProductGroupColorWidget' args [data.idProductAbstract, data.product.selectedAttributes ?? []] use view('product-item-color-selector', 'ProductGroupWidget') with {
                            data: {
                                parentJsName: config.jsName,
                                modifiers: ['product-list'],
                            },
                        } only %}{% endwidget %}
                    {% endblock %}

                    {% block price %}{% endblock %}
                </div>
            {% endblock %}

            {% block actionsContainer %}
                <div class=\"{{ config.name }}__total col col--sm-12 col--md-3 col--xl-2\">
                    <div class=\"{{ config.name }}__price grid grid--column grid--justify-column grid--bottom\">
                        <div class=\"col\">
                            {% if can('SeePricePermissionPlugin') %}
                                {% embed molecule('money-price') with {
                                    modifiers: ['gray-color', 'block', 'margin-left-from-tablet'],
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
                            {% endif %}
                        </div>

                        {% block actions %}
                            <div class=\"{{ config.name }}__details col\">
                                {{ parent() }}
                            </div>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block ajaxAddToCartInner %}
    {% set ajaxButtonExtraAttributes = {
        'data-node-animator-wrapper-class-name': config.jsName,
    } %}
    {% set componentExtraClasses = config.name ~ '__action' %}
    {{ parent() }}
{% endblock %}
", "@ShopUi/components/molecules/product-item-list/product-item-list.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/product-item-list/product-item-list.twig");
    }
}
