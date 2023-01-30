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

/* @ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_c63d216ff89c8680089fe49f93315cfc3a12e3d05bc093aba3180f14065fa919 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'banner' => [$this, 'block_banner'],
            'header' => [$this, 'block_header'],
            'productSet' => [$this, 'block_productSet'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["product-set-details", "@SprykerShop:ProductSetWidget"]), "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["title" => "", "addAllSetButton" => _twig_default_filter($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeeAddToCartPermissionPlugin"), false), "sliderConfig" => "{
        \"slidesToShow\": 4,
        \"slidesToScroll\": 1,
        \"dots\": false,
        \"infinite\": false,
        \"responsive\": [{
            \"breakpoint\": 768,
            \"settings\": {
                \"slidesToShow\": 2
                }
        },
        {
            \"breakpoint\": 375,
            \"settings\": {
                \"slidesToShow\": 1
            }
        }]
    }"], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $context["productSetAddToCartButtonClass"] = "button--expand-sm-only spacing-bottom spacing-bottom--biggest";
        // line 28
        echo "
    ";
        // line 29
        $this->displayBlock('banner', $context, $blocks);
        // line 52
        echo "
    ";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 113
        echo "
    ";
        // line 114
        $this->displayBlock('productSet', $context, $blocks);
    }

    // line 29
    public function block_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "        ";
        $this->loadTemplate("@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 30, "2982277")->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31) . "__banner"), "data" => ["imageUrl" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 33
($context["data"] ?? null), "images", [], "any", false, true, false, 33), 0, [], "any", false, true, false, 33), "externalUrlLarge", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "images", [], "any", false, true, false, 33), 0, [], "any", false, true, false, 33), "externalUrlLarge", [], "any", false, false, false, 33))) : ("")), "title" => twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "title", [], "any", false, false, false, 34)]]));
        // line 51
        echo "    ";
    }

    // line 53
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "        ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AddItemsFormWidget", [0 => (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 54, $this->source); })()), 1 => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), 2 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), "products", [], "any", false, false, false, 54)])) {
            $this->loadTemplate("@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 54, 1104074856)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["embed" => ["productSetAddToCartButtonClass" =>             // line 56
(isset($context["productSetAddToCartButtonClass"]) || array_key_exists("productSetAddToCartButtonClass", $context) ? $context["productSetAddToCartButtonClass"] : (function () { throw new RuntimeError('Variable "productSetAddToCartButtonClass" does not exist.', 56, $this->source); })())]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 112
        echo "    ";
    }

    // line 114
    public function block_productSet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "        ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 115, $this->source); })()), "products", [], "any", false, false, false, 115))) {
            // line 116
            echo "            <form method=\"GET\">
                ";
            // line 117
            $this->loadTemplate("@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 117, "1432010341")->display(twig_to_array(["modifiers" => [0 => "product-set", 1 => "equal-height"], "data" => ["slides" => twig_get_attribute($this->env, $this->source,             // line 120
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 120, $this->source); })()), "products", [], "any", false, false, false, 120)], "attributes" => ["slider-config" => twig_get_attribute($this->env, $this->source,             // line 123
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 123, $this->source); })()), "sliderConfig", [], "any", false, false, false, 123), "custom-select-class-name" => "custom-select"], "embed" => ["jsName" => twig_get_attribute($this->env, $this->source,             // line 127
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 127, $this->source); })()), "jsName", [], "any", false, false, false, 127)]]));
            // line 221
            echo "            </form>
        ";
        }
        // line 223
        echo "
        ";
        // line 224
        if ( !twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 224, $this->source); })()), "products", [], "any", false, false, false, 224))) {
            // line 225
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 225, $this->source); })()), "name", [], "any", false, false, false, 225), "html", null, true);
            echo "__text text-center\">
                <p> ";
            // line 226
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.set.detail.no-products"), "html", null, true);
            echo " </p>
            </div>
        ";
        }
        // line 229
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 229,  148 => 226,  143 => 225,  141 => 224,  138 => 223,  134 => 221,  132 => 127,  131 => 123,  130 => 120,  129 => 117,  126 => 116,  123 => 115,  119 => 114,  115 => 112,  112 => 56,  109 => 54,  105 => 53,  101 => 51,  99 => 34,  98 => 33,  97 => 31,  95 => 30,  91 => 29,  87 => 114,  84 => 113,  82 => 53,  79 => 52,  77 => 29,  74 => 28,  71 => 27,  67 => 26,  63 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends organism('product-set-details', '@SprykerShop:ProductSetWidget') %}

{% define data = {
    title: '',
    addAllSetButton: can('SeeAddToCartPermissionPlugin') | default(false),
    sliderConfig: '{
        \"slidesToShow\": 4,
        \"slidesToScroll\": 1,
        \"dots\": false,
        \"infinite\": false,
        \"responsive\": [{
            \"breakpoint\": 768,
            \"settings\": {
                \"slidesToShow\": 2
                }
        },
        {
            \"breakpoint\": 375,
            \"settings\": {
                \"slidesToShow\": 1
            }
        }]
    }',
} %}

{% block body %}
    {% set productSetAddToCartButtonClass = 'button--expand-sm-only spacing-bottom spacing-bottom--biggest' %}

    {% block banner %}
        {% embed molecule('banner') with {
            class: config.name ~ '__banner',
            data: {
                imageUrl: data.images.0.externalUrlLarge | default,
                title: data.title,
            },
        } only %}
            {% block content %}
                <h1 class=\"title title--light title--product-set-details\">{{ data.title }}</h1>
                <p class=\"{{ config.name }}__text {{ config.name }}__text--subtitle\">
                    {{- 'product.set' | trans -}}
                </p>
            {% endblock %}

            {% block body %}
                {% set containerClass = config.name ~ '__container grid grid--column grid--middle grid--center' %}
                {% set contentClass = contentClass ~ ' text-center' %}

                {{ parent() }}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block header %}
        {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
            embed: {
                productSetAddToCartButtonClass: productSetAddToCartButtonClass,
            },
        } only %}
            {% block embeddedData %}
                {% embed organism('section') with {
                    modifiers: ['secondary'],
                    class: 'text-center',
                    data: {
                        title: 'product.sets.widget.title' | trans,
                    },
                    embed: {
                        description: data.data.description,
                        addAllSetButton: data.data.addAllSetButton,
                        products: data.products,
                        jsName: data.config.jsName,
                        productSetAddToCartButtonClass: embed.productSetAddToCartButtonClass,
                    },
                } only %}
                    {% block inner %}
                        <div class=\"{{ config.name }}__text\">
                            {% block description %}
                                {% if embed.description %}
                                    <p>{{ embed.description }}</p>
                                {% endif %}
                            {% endblock %}
                        </div>

                        {% if embed.addAllSetButton and embed.products | length %}
                            {% set isDisabled = false %}

                            {% for product in embed.products %}
                                {% if product.idProductConcrete is not empty and product.available %}
                                    <input type=\"hidden\" class=\"{{ embed.jsName }}__product-sku-hidden-input\" name=\"items[{{ loop.index }}][sku]\" value=\"{{ product.sku }}\">
                                    <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                                {% endif %}

                                {% if product.idProductConcrete is empty %}
                                    {% set isDisabled = true %}
                                {% endif %}
                            {% endfor %}

                            <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                                {{ 'product.set.detail.add_all_to' | trans }}
                                {% include atom('icon') with {
                                    class: 'spacing-y spacing-y--reset',
                                    modifiers: ['cart'],
                                    data: {
                                        name: 'cart',
                                    },
                                } only %}
                            </button>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endwidget %}
    {% endblock %}

    {% block productSet %}
        {% if data.products | length %}
            <form method=\"GET\">
                {% embed molecule('slick-carousel') with {
                    modifiers: ['product-set', 'equal-height'],
                    data: {
                        slides: data.products,
                    },
                    attributes: {
                        'slider-config': data.sliderConfig,
                        'custom-select-class-name': 'custom-select',
                    },
                    embed: {
                        jsName: config.jsName,
                    },
                } only %}
                    {% block slides %}
                        {% for product in data.slides %}
                            {% embed molecule('product-item') with {
                                class: embed.jsName ~ '__product-item',
                                modifiers: ['catalog', 'sets', 'stretch'],
                                data: {
                                    product: product,
                                },
                            } only %}
                                {% block actionsContainer %}
                                    <div class=\"{{ config.name }}__variant\">
                                        {% set isNotAvailable = data.product.idProductConcrete and not data.product.available %}

                                        {% embed molecule('variant-configurator', 'ProductDetailPage') ignore missing with {
                                            data: {
                                                superAttributes: data.product.attributeMap.superAttributes,
                                                selectedAttributes: data.product.selectedAttributes,
                                                availableAttributes: data.product.availableAttributes,
                                                useExternalForm: true,
                                            },
                                            embed: {
                                                product: data.product,
                                            },
                                        } only %}
                                            {% block variant %}
                                                {% if can('SeeAddToCartPermissionPlugin') %}
                                                    {% include molecule('variant', 'ProductDetailPage') ignore missing with {
                                                        modifiers: ['product-set'],
                                                        data: {
                                                            name: name,
                                                            formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                            values: values,
                                                            selectedValue: selectedValue,
                                                            label: ('product.attribute.' ~ name) | trans,
                                                            isAvailable: isAvailable,
                                                            selectModifiers: ['small'],
                                                            selectTheme: 'small',
                                                            selectPlaceholder: 'global.select.placeholder.value',
                                                        },
                                                    } only %}
                                                {% endif %}
                                            {% endblock %}
                                        {% endembed %}

                                        {% if isNotAvailable %}
                                            <p>
                                                <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                            </p>
                                        {% endif %}
                                    </div>

                                    {% if can('SeeAddToCartPermissionPlugin') %}
                                        {% set isDisabled = not data.product.idProductConcrete or not data.product.available or not can('ROLE_USER') %}

                                        <div class=\"{{ config.name }}__actions {{ config.name }}__actions--sticky-bottom\">
                                            {% if isDisabled %}
                                                <button type=\"button\" class=\"button button--expand\" disabled>{{ 'page.detail.add-to-cart' | trans }}</button>
                                            {% else %}
                                                {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] only %}
                                                    {% block body %}
                                                        {% set productSku = data.product.sku %}
                                                        {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                        {% set tokenField = data.form._token.vars %}

                                                        {% include molecule('remote-form-submit') with {
                                                            data: {
                                                                label: 'page.detail.add-to-cart' | trans,
                                                                buttonClass: 'button button--expand ' ~ data.config.jsName ~ '__button-add-to-cart',
                                                                buttonExtraAttributes: {
                                                                    'data-form-action': formAction,
                                                                    'data-init-single-click': true,
                                                                    'data-qa': 'add-to-cart-button',
                                                                },
                                                            },
                                                            attributes: {
                                                                'form-name': 'addToCartForm_' ~ productSku,
                                                                'form-action': formAction,
                                                                'field-name': tokenField.full_name,
                                                                'field-value': tokenField.value,
                                                            },
                                                        } only %}
                                                    {% endblock %}
                                                {% endwidget %}
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        {% endfor %}
                    {% endblock %}
                {% endembed %}
            </form>
        {% endif %}

        {% if not data.products | length %}
            <div class=\"{{ config.name }}__text text-center\">
                <p> {{ 'product.set.detail.no-products' | trans }} </p>
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/src/Pyz/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_c63d216ff89c8680089fe49f93315cfc3a12e3d05bc093aba3180f14065fa919___2982277 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 30
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["banner"]), "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 30);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                <h1 class=\"title title--light title--product-set-details\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "title", [], "any", false, false, false, 38), "html", null, true);
        echo "</h1>
                <p class=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "__text ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "__text--subtitle\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.set"), "html", null, true);
        // line 41
        echo "</p>
            ";
    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                ";
        $context["containerClass"] = (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45) . "__container grid grid--column grid--middle grid--center");
        // line 46
        echo "                ";
        $context["contentClass"] = ((isset($context["contentClass"]) || array_key_exists("contentClass", $context) ? $context["contentClass"] : (function () { throw new RuntimeError('Variable "contentClass" does not exist.', 46, $this->source); })()) . " text-center");
        // line 47
        echo "
                ";
        // line 48
        $this->displayParentBlock("body", $context, $blocks);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 48,  471 => 47,  468 => 46,  465 => 45,  461 => 44,  456 => 41,  454 => 40,  449 => 39,  444 => 38,  440 => 37,  430 => 30,  154 => 229,  148 => 226,  143 => 225,  141 => 224,  138 => 223,  134 => 221,  132 => 127,  131 => 123,  130 => 120,  129 => 117,  126 => 116,  123 => 115,  119 => 114,  115 => 112,  112 => 56,  109 => 54,  105 => 53,  101 => 51,  99 => 34,  98 => 33,  97 => 31,  95 => 30,  91 => 29,  87 => 114,  84 => 113,  82 => 53,  79 => 52,  77 => 29,  74 => 28,  71 => 27,  67 => 26,  63 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends organism('product-set-details', '@SprykerShop:ProductSetWidget') %}

{% define data = {
    title: '',
    addAllSetButton: can('SeeAddToCartPermissionPlugin') | default(false),
    sliderConfig: '{
        \"slidesToShow\": 4,
        \"slidesToScroll\": 1,
        \"dots\": false,
        \"infinite\": false,
        \"responsive\": [{
            \"breakpoint\": 768,
            \"settings\": {
                \"slidesToShow\": 2
                }
        },
        {
            \"breakpoint\": 375,
            \"settings\": {
                \"slidesToShow\": 1
            }
        }]
    }',
} %}

{% block body %}
    {% set productSetAddToCartButtonClass = 'button--expand-sm-only spacing-bottom spacing-bottom--biggest' %}

    {% block banner %}
        {% embed molecule('banner') with {
            class: config.name ~ '__banner',
            data: {
                imageUrl: data.images.0.externalUrlLarge | default,
                title: data.title,
            },
        } only %}
            {% block content %}
                <h1 class=\"title title--light title--product-set-details\">{{ data.title }}</h1>
                <p class=\"{{ config.name }}__text {{ config.name }}__text--subtitle\">
                    {{- 'product.set' | trans -}}
                </p>
            {% endblock %}

            {% block body %}
                {% set containerClass = config.name ~ '__container grid grid--column grid--middle grid--center' %}
                {% set contentClass = contentClass ~ ' text-center' %}

                {{ parent() }}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block header %}
        {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
            embed: {
                productSetAddToCartButtonClass: productSetAddToCartButtonClass,
            },
        } only %}
            {% block embeddedData %}
                {% embed organism('section') with {
                    modifiers: ['secondary'],
                    class: 'text-center',
                    data: {
                        title: 'product.sets.widget.title' | trans,
                    },
                    embed: {
                        description: data.data.description,
                        addAllSetButton: data.data.addAllSetButton,
                        products: data.products,
                        jsName: data.config.jsName,
                        productSetAddToCartButtonClass: embed.productSetAddToCartButtonClass,
                    },
                } only %}
                    {% block inner %}
                        <div class=\"{{ config.name }}__text\">
                            {% block description %}
                                {% if embed.description %}
                                    <p>{{ embed.description }}</p>
                                {% endif %}
                            {% endblock %}
                        </div>

                        {% if embed.addAllSetButton and embed.products | length %}
                            {% set isDisabled = false %}

                            {% for product in embed.products %}
                                {% if product.idProductConcrete is not empty and product.available %}
                                    <input type=\"hidden\" class=\"{{ embed.jsName }}__product-sku-hidden-input\" name=\"items[{{ loop.index }}][sku]\" value=\"{{ product.sku }}\">
                                    <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                                {% endif %}

                                {% if product.idProductConcrete is empty %}
                                    {% set isDisabled = true %}
                                {% endif %}
                            {% endfor %}

                            <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                                {{ 'product.set.detail.add_all_to' | trans }}
                                {% include atom('icon') with {
                                    class: 'spacing-y spacing-y--reset',
                                    modifiers: ['cart'],
                                    data: {
                                        name: 'cart',
                                    },
                                } only %}
                            </button>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endwidget %}
    {% endblock %}

    {% block productSet %}
        {% if data.products | length %}
            <form method=\"GET\">
                {% embed molecule('slick-carousel') with {
                    modifiers: ['product-set', 'equal-height'],
                    data: {
                        slides: data.products,
                    },
                    attributes: {
                        'slider-config': data.sliderConfig,
                        'custom-select-class-name': 'custom-select',
                    },
                    embed: {
                        jsName: config.jsName,
                    },
                } only %}
                    {% block slides %}
                        {% for product in data.slides %}
                            {% embed molecule('product-item') with {
                                class: embed.jsName ~ '__product-item',
                                modifiers: ['catalog', 'sets', 'stretch'],
                                data: {
                                    product: product,
                                },
                            } only %}
                                {% block actionsContainer %}
                                    <div class=\"{{ config.name }}__variant\">
                                        {% set isNotAvailable = data.product.idProductConcrete and not data.product.available %}

                                        {% embed molecule('variant-configurator', 'ProductDetailPage') ignore missing with {
                                            data: {
                                                superAttributes: data.product.attributeMap.superAttributes,
                                                selectedAttributes: data.product.selectedAttributes,
                                                availableAttributes: data.product.availableAttributes,
                                                useExternalForm: true,
                                            },
                                            embed: {
                                                product: data.product,
                                            },
                                        } only %}
                                            {% block variant %}
                                                {% if can('SeeAddToCartPermissionPlugin') %}
                                                    {% include molecule('variant', 'ProductDetailPage') ignore missing with {
                                                        modifiers: ['product-set'],
                                                        data: {
                                                            name: name,
                                                            formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                            values: values,
                                                            selectedValue: selectedValue,
                                                            label: ('product.attribute.' ~ name) | trans,
                                                            isAvailable: isAvailable,
                                                            selectModifiers: ['small'],
                                                            selectTheme: 'small',
                                                            selectPlaceholder: 'global.select.placeholder.value',
                                                        },
                                                    } only %}
                                                {% endif %}
                                            {% endblock %}
                                        {% endembed %}

                                        {% if isNotAvailable %}
                                            <p>
                                                <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                            </p>
                                        {% endif %}
                                    </div>

                                    {% if can('SeeAddToCartPermissionPlugin') %}
                                        {% set isDisabled = not data.product.idProductConcrete or not data.product.available or not can('ROLE_USER') %}

                                        <div class=\"{{ config.name }}__actions {{ config.name }}__actions--sticky-bottom\">
                                            {% if isDisabled %}
                                                <button type=\"button\" class=\"button button--expand\" disabled>{{ 'page.detail.add-to-cart' | trans }}</button>
                                            {% else %}
                                                {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] only %}
                                                    {% block body %}
                                                        {% set productSku = data.product.sku %}
                                                        {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                        {% set tokenField = data.form._token.vars %}

                                                        {% include molecule('remote-form-submit') with {
                                                            data: {
                                                                label: 'page.detail.add-to-cart' | trans,
                                                                buttonClass: 'button button--expand ' ~ data.config.jsName ~ '__button-add-to-cart',
                                                                buttonExtraAttributes: {
                                                                    'data-form-action': formAction,
                                                                    'data-init-single-click': true,
                                                                    'data-qa': 'add-to-cart-button',
                                                                },
                                                            },
                                                            attributes: {
                                                                'form-name': 'addToCartForm_' ~ productSku,
                                                                'form-action': formAction,
                                                                'field-name': tokenField.full_name,
                                                                'field-value': tokenField.value,
                                                            },
                                                        } only %}
                                                    {% endblock %}
                                                {% endwidget %}
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        {% endfor %}
                    {% endblock %}
                {% endembed %}
            </form>
        {% endif %}

        {% if not data.products | length %}
            <div class=\"{{ config.name }}__text text-center\">
                <p> {{ 'product.set.detail.no-products' | trans }} </p>
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/src/Pyz/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_c63d216ff89c8680089fe49f93315cfc3a12e3d05bc093aba3180f14065fa919___1104074856 extends Template
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
        // line 54
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 54, $this->source); })()), "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 54);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 59
    public function block_embeddedData($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "                ";
        $this->loadTemplate("@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 60, "1233230113")->display(twig_to_array(["modifiers" => [0 => "secondary"], "class" => "text-center", "data" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.sets.widget.title")], "embed" => ["description" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 67, $this->source); })()), "data", [], "any", false, false, false, 67), "description", [], "any", false, false, false, 67), "addAllSetButton" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 68, $this->source); })()), "data", [], "any", false, false, false, 68), "addAllSetButton", [], "any", false, false, false, 68), "products" => twig_get_attribute($this->env, $this->source,         // line 69
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 69, $this->source); })()), "products", [], "any", false, false, false, 69), "jsName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 70
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 70, $this->source); })()), "config", [], "any", false, false, false, 70), "jsName", [], "any", false, false, false, 70), "productSetAddToCartButtonClass" => twig_get_attribute($this->env, $this->source,         // line 71
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 71, $this->source); })()), "productSetAddToCartButtonClass", [], "any", false, false, false, 71)]]));
        // line 110
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  773 => 110,  771 => 71,  770 => 70,  769 => 69,  768 => 68,  767 => 67,  765 => 60,  761 => 59,  751 => 54,  474 => 48,  471 => 47,  468 => 46,  465 => 45,  461 => 44,  456 => 41,  454 => 40,  449 => 39,  444 => 38,  440 => 37,  430 => 30,  154 => 229,  148 => 226,  143 => 225,  141 => 224,  138 => 223,  134 => 221,  132 => 127,  131 => 123,  130 => 120,  129 => 117,  126 => 116,  123 => 115,  119 => 114,  115 => 112,  112 => 56,  109 => 54,  105 => 53,  101 => 51,  99 => 34,  98 => 33,  97 => 31,  95 => 30,  91 => 29,  87 => 114,  84 => 113,  82 => 53,  79 => 52,  77 => 29,  74 => 28,  71 => 27,  67 => 26,  63 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends organism('product-set-details', '@SprykerShop:ProductSetWidget') %}

{% define data = {
    title: '',
    addAllSetButton: can('SeeAddToCartPermissionPlugin') | default(false),
    sliderConfig: '{
        \"slidesToShow\": 4,
        \"slidesToScroll\": 1,
        \"dots\": false,
        \"infinite\": false,
        \"responsive\": [{
            \"breakpoint\": 768,
            \"settings\": {
                \"slidesToShow\": 2
                }
        },
        {
            \"breakpoint\": 375,
            \"settings\": {
                \"slidesToShow\": 1
            }
        }]
    }',
} %}

{% block body %}
    {% set productSetAddToCartButtonClass = 'button--expand-sm-only spacing-bottom spacing-bottom--biggest' %}

    {% block banner %}
        {% embed molecule('banner') with {
            class: config.name ~ '__banner',
            data: {
                imageUrl: data.images.0.externalUrlLarge | default,
                title: data.title,
            },
        } only %}
            {% block content %}
                <h1 class=\"title title--light title--product-set-details\">{{ data.title }}</h1>
                <p class=\"{{ config.name }}__text {{ config.name }}__text--subtitle\">
                    {{- 'product.set' | trans -}}
                </p>
            {% endblock %}

            {% block body %}
                {% set containerClass = config.name ~ '__container grid grid--column grid--middle grid--center' %}
                {% set contentClass = contentClass ~ ' text-center' %}

                {{ parent() }}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block header %}
        {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
            embed: {
                productSetAddToCartButtonClass: productSetAddToCartButtonClass,
            },
        } only %}
            {% block embeddedData %}
                {% embed organism('section') with {
                    modifiers: ['secondary'],
                    class: 'text-center',
                    data: {
                        title: 'product.sets.widget.title' | trans,
                    },
                    embed: {
                        description: data.data.description,
                        addAllSetButton: data.data.addAllSetButton,
                        products: data.products,
                        jsName: data.config.jsName,
                        productSetAddToCartButtonClass: embed.productSetAddToCartButtonClass,
                    },
                } only %}
                    {% block inner %}
                        <div class=\"{{ config.name }}__text\">
                            {% block description %}
                                {% if embed.description %}
                                    <p>{{ embed.description }}</p>
                                {% endif %}
                            {% endblock %}
                        </div>

                        {% if embed.addAllSetButton and embed.products | length %}
                            {% set isDisabled = false %}

                            {% for product in embed.products %}
                                {% if product.idProductConcrete is not empty and product.available %}
                                    <input type=\"hidden\" class=\"{{ embed.jsName }}__product-sku-hidden-input\" name=\"items[{{ loop.index }}][sku]\" value=\"{{ product.sku }}\">
                                    <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                                {% endif %}

                                {% if product.idProductConcrete is empty %}
                                    {% set isDisabled = true %}
                                {% endif %}
                            {% endfor %}

                            <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                                {{ 'product.set.detail.add_all_to' | trans }}
                                {% include atom('icon') with {
                                    class: 'spacing-y spacing-y--reset',
                                    modifiers: ['cart'],
                                    data: {
                                        name: 'cart',
                                    },
                                } only %}
                            </button>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endwidget %}
    {% endblock %}

    {% block productSet %}
        {% if data.products | length %}
            <form method=\"GET\">
                {% embed molecule('slick-carousel') with {
                    modifiers: ['product-set', 'equal-height'],
                    data: {
                        slides: data.products,
                    },
                    attributes: {
                        'slider-config': data.sliderConfig,
                        'custom-select-class-name': 'custom-select',
                    },
                    embed: {
                        jsName: config.jsName,
                    },
                } only %}
                    {% block slides %}
                        {% for product in data.slides %}
                            {% embed molecule('product-item') with {
                                class: embed.jsName ~ '__product-item',
                                modifiers: ['catalog', 'sets', 'stretch'],
                                data: {
                                    product: product,
                                },
                            } only %}
                                {% block actionsContainer %}
                                    <div class=\"{{ config.name }}__variant\">
                                        {% set isNotAvailable = data.product.idProductConcrete and not data.product.available %}

                                        {% embed molecule('variant-configurator', 'ProductDetailPage') ignore missing with {
                                            data: {
                                                superAttributes: data.product.attributeMap.superAttributes,
                                                selectedAttributes: data.product.selectedAttributes,
                                                availableAttributes: data.product.availableAttributes,
                                                useExternalForm: true,
                                            },
                                            embed: {
                                                product: data.product,
                                            },
                                        } only %}
                                            {% block variant %}
                                                {% if can('SeeAddToCartPermissionPlugin') %}
                                                    {% include molecule('variant', 'ProductDetailPage') ignore missing with {
                                                        modifiers: ['product-set'],
                                                        data: {
                                                            name: name,
                                                            formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                            values: values,
                                                            selectedValue: selectedValue,
                                                            label: ('product.attribute.' ~ name) | trans,
                                                            isAvailable: isAvailable,
                                                            selectModifiers: ['small'],
                                                            selectTheme: 'small',
                                                            selectPlaceholder: 'global.select.placeholder.value',
                                                        },
                                                    } only %}
                                                {% endif %}
                                            {% endblock %}
                                        {% endembed %}

                                        {% if isNotAvailable %}
                                            <p>
                                                <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                            </p>
                                        {% endif %}
                                    </div>

                                    {% if can('SeeAddToCartPermissionPlugin') %}
                                        {% set isDisabled = not data.product.idProductConcrete or not data.product.available or not can('ROLE_USER') %}

                                        <div class=\"{{ config.name }}__actions {{ config.name }}__actions--sticky-bottom\">
                                            {% if isDisabled %}
                                                <button type=\"button\" class=\"button button--expand\" disabled>{{ 'page.detail.add-to-cart' | trans }}</button>
                                            {% else %}
                                                {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] only %}
                                                    {% block body %}
                                                        {% set productSku = data.product.sku %}
                                                        {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                        {% set tokenField = data.form._token.vars %}

                                                        {% include molecule('remote-form-submit') with {
                                                            data: {
                                                                label: 'page.detail.add-to-cart' | trans,
                                                                buttonClass: 'button button--expand ' ~ data.config.jsName ~ '__button-add-to-cart',
                                                                buttonExtraAttributes: {
                                                                    'data-form-action': formAction,
                                                                    'data-init-single-click': true,
                                                                    'data-qa': 'add-to-cart-button',
                                                                },
                                                            },
                                                            attributes: {
                                                                'form-name': 'addToCartForm_' ~ productSku,
                                                                'form-action': formAction,
                                                                'field-name': tokenField.full_name,
                                                                'field-value': tokenField.value,
                                                            },
                                                        } only %}
                                                    {% endblock %}
                                                {% endwidget %}
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        {% endfor %}
                    {% endblock %}
                {% endembed %}
            </form>
        {% endif %}

        {% if not data.products | length %}
            <div class=\"{{ config.name }}__text text-center\">
                <p> {{ 'product.set.detail.no-products' | trans }} </p>
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/src/Pyz/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_c63d216ff89c8680089fe49f93315cfc3a12e3d05bc093aba3180f14065fa919___1233230113 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'inner' => [$this, 'block_inner'],
            'description' => [$this, 'block_description'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 60
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["section"]), "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 60);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 74
    public function block_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                        <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, false, 75), "html", null, true);
        echo "__text\">
                            ";
        // line 76
        $this->displayBlock('description', $context, $blocks);
        // line 81
        echo "                        </div>

                        ";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 83, $this->source); })()), "addAllSetButton", [], "any", false, false, false, 83) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 83, $this->source); })()), "products", [], "any", false, false, false, 83)))) {
            // line 84
            echo "                            ";
            $context["isDisabled"] = false;
            // line 85
            echo "
                            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 86, $this->source); })()), "products", [], "any", false, false, false, 86));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 87
                echo "                                ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "idProductConcrete", [], "any", false, false, false, 87)) && twig_get_attribute($this->env, $this->source, $context["product"], "available", [], "any", false, false, false, 87))) {
                    // line 88
                    echo "                                    <input type=\"hidden\" class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 88, $this->source); })()), "jsName", [], "any", false, false, false, 88), "html", null, true);
                    echo "__product-sku-hidden-input\" name=\"items[";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 88), "html", null, true);
                    echo "][sku]\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 88), "html", null, true);
                    echo "\">
                                    <input type=\"hidden\" name=\"items[";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 89), "html", null, true);
                    echo "][quantity]\" value=\"1\">
                                ";
                }
                // line 91
                echo "
                                ";
                // line 92
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "idProductConcrete", [], "any", false, false, false, 92))) {
                    // line 93
                    echo "                                    ";
                    $context["isDisabled"] = true;
                    // line 94
                    echo "                                ";
                }
                // line 95
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "
                            <button class=\"button ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 97, $this->source); })()), "productSetAddToCartButtonClass", [], "any", false, false, false, 97), "html", null, true);
            echo "\" ";
            echo (((isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 97, $this->source); })())) ? ("disabled") : ("data-init-single-click"));
            echo ">
                                ";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.set.detail.add_all_to"), "html", null, true);
            echo "
                                ";
            // line 99
            $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 99)->display(twig_to_array(["class" => "spacing-y spacing-y--reset", "modifiers" => [0 => "cart"], "data" => ["name" => "cart"]]));
            // line 106
            echo "                            </button>
                        ";
        }
        // line 108
        echo "                    ";
    }

    // line 76
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 77, $this->source); })()), "description", [], "any", false, false, false, 77)) {
            // line 78
            echo "                                    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), "html", null, true);
            echo "</p>
                                ";
        }
        // line 80
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1177 => 80,  1171 => 78,  1168 => 77,  1164 => 76,  1160 => 108,  1156 => 106,  1154 => 99,  1150 => 98,  1144 => 97,  1141 => 96,  1127 => 95,  1124 => 94,  1121 => 93,  1119 => 92,  1116 => 91,  1111 => 89,  1102 => 88,  1099 => 87,  1082 => 86,  1079 => 85,  1076 => 84,  1074 => 83,  1070 => 81,  1068 => 76,  1063 => 75,  1059 => 74,  1049 => 60,  773 => 110,  771 => 71,  770 => 70,  769 => 69,  768 => 68,  767 => 67,  765 => 60,  761 => 59,  751 => 54,  474 => 48,  471 => 47,  468 => 46,  465 => 45,  461 => 44,  456 => 41,  454 => 40,  449 => 39,  444 => 38,  440 => 37,  430 => 30,  154 => 229,  148 => 226,  143 => 225,  141 => 224,  138 => 223,  134 => 221,  132 => 127,  131 => 123,  130 => 120,  129 => 117,  126 => 116,  123 => 115,  119 => 114,  115 => 112,  112 => 56,  109 => 54,  105 => 53,  101 => 51,  99 => 34,  98 => 33,  97 => 31,  95 => 30,  91 => 29,  87 => 114,  84 => 113,  82 => 53,  79 => 52,  77 => 29,  74 => 28,  71 => 27,  67 => 26,  63 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends organism('product-set-details', '@SprykerShop:ProductSetWidget') %}

{% define data = {
    title: '',
    addAllSetButton: can('SeeAddToCartPermissionPlugin') | default(false),
    sliderConfig: '{
        \"slidesToShow\": 4,
        \"slidesToScroll\": 1,
        \"dots\": false,
        \"infinite\": false,
        \"responsive\": [{
            \"breakpoint\": 768,
            \"settings\": {
                \"slidesToShow\": 2
                }
        },
        {
            \"breakpoint\": 375,
            \"settings\": {
                \"slidesToShow\": 1
            }
        }]
    }',
} %}

{% block body %}
    {% set productSetAddToCartButtonClass = 'button--expand-sm-only spacing-bottom spacing-bottom--biggest' %}

    {% block banner %}
        {% embed molecule('banner') with {
            class: config.name ~ '__banner',
            data: {
                imageUrl: data.images.0.externalUrlLarge | default,
                title: data.title,
            },
        } only %}
            {% block content %}
                <h1 class=\"title title--light title--product-set-details\">{{ data.title }}</h1>
                <p class=\"{{ config.name }}__text {{ config.name }}__text--subtitle\">
                    {{- 'product.set' | trans -}}
                </p>
            {% endblock %}

            {% block body %}
                {% set containerClass = config.name ~ '__container grid grid--column grid--middle grid--center' %}
                {% set contentClass = contentClass ~ ' text-center' %}

                {{ parent() }}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block header %}
        {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
            embed: {
                productSetAddToCartButtonClass: productSetAddToCartButtonClass,
            },
        } only %}
            {% block embeddedData %}
                {% embed organism('section') with {
                    modifiers: ['secondary'],
                    class: 'text-center',
                    data: {
                        title: 'product.sets.widget.title' | trans,
                    },
                    embed: {
                        description: data.data.description,
                        addAllSetButton: data.data.addAllSetButton,
                        products: data.products,
                        jsName: data.config.jsName,
                        productSetAddToCartButtonClass: embed.productSetAddToCartButtonClass,
                    },
                } only %}
                    {% block inner %}
                        <div class=\"{{ config.name }}__text\">
                            {% block description %}
                                {% if embed.description %}
                                    <p>{{ embed.description }}</p>
                                {% endif %}
                            {% endblock %}
                        </div>

                        {% if embed.addAllSetButton and embed.products | length %}
                            {% set isDisabled = false %}

                            {% for product in embed.products %}
                                {% if product.idProductConcrete is not empty and product.available %}
                                    <input type=\"hidden\" class=\"{{ embed.jsName }}__product-sku-hidden-input\" name=\"items[{{ loop.index }}][sku]\" value=\"{{ product.sku }}\">
                                    <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                                {% endif %}

                                {% if product.idProductConcrete is empty %}
                                    {% set isDisabled = true %}
                                {% endif %}
                            {% endfor %}

                            <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                                {{ 'product.set.detail.add_all_to' | trans }}
                                {% include atom('icon') with {
                                    class: 'spacing-y spacing-y--reset',
                                    modifiers: ['cart'],
                                    data: {
                                        name: 'cart',
                                    },
                                } only %}
                            </button>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endwidget %}
    {% endblock %}

    {% block productSet %}
        {% if data.products | length %}
            <form method=\"GET\">
                {% embed molecule('slick-carousel') with {
                    modifiers: ['product-set', 'equal-height'],
                    data: {
                        slides: data.products,
                    },
                    attributes: {
                        'slider-config': data.sliderConfig,
                        'custom-select-class-name': 'custom-select',
                    },
                    embed: {
                        jsName: config.jsName,
                    },
                } only %}
                    {% block slides %}
                        {% for product in data.slides %}
                            {% embed molecule('product-item') with {
                                class: embed.jsName ~ '__product-item',
                                modifiers: ['catalog', 'sets', 'stretch'],
                                data: {
                                    product: product,
                                },
                            } only %}
                                {% block actionsContainer %}
                                    <div class=\"{{ config.name }}__variant\">
                                        {% set isNotAvailable = data.product.idProductConcrete and not data.product.available %}

                                        {% embed molecule('variant-configurator', 'ProductDetailPage') ignore missing with {
                                            data: {
                                                superAttributes: data.product.attributeMap.superAttributes,
                                                selectedAttributes: data.product.selectedAttributes,
                                                availableAttributes: data.product.availableAttributes,
                                                useExternalForm: true,
                                            },
                                            embed: {
                                                product: data.product,
                                            },
                                        } only %}
                                            {% block variant %}
                                                {% if can('SeeAddToCartPermissionPlugin') %}
                                                    {% include molecule('variant', 'ProductDetailPage') ignore missing with {
                                                        modifiers: ['product-set'],
                                                        data: {
                                                            name: name,
                                                            formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                            values: values,
                                                            selectedValue: selectedValue,
                                                            label: ('product.attribute.' ~ name) | trans,
                                                            isAvailable: isAvailable,
                                                            selectModifiers: ['small'],
                                                            selectTheme: 'small',
                                                            selectPlaceholder: 'global.select.placeholder.value',
                                                        },
                                                    } only %}
                                                {% endif %}
                                            {% endblock %}
                                        {% endembed %}

                                        {% if isNotAvailable %}
                                            <p>
                                                <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                            </p>
                                        {% endif %}
                                    </div>

                                    {% if can('SeeAddToCartPermissionPlugin') %}
                                        {% set isDisabled = not data.product.idProductConcrete or not data.product.available or not can('ROLE_USER') %}

                                        <div class=\"{{ config.name }}__actions {{ config.name }}__actions--sticky-bottom\">
                                            {% if isDisabled %}
                                                <button type=\"button\" class=\"button button--expand\" disabled>{{ 'page.detail.add-to-cart' | trans }}</button>
                                            {% else %}
                                                {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] only %}
                                                    {% block body %}
                                                        {% set productSku = data.product.sku %}
                                                        {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                        {% set tokenField = data.form._token.vars %}

                                                        {% include molecule('remote-form-submit') with {
                                                            data: {
                                                                label: 'page.detail.add-to-cart' | trans,
                                                                buttonClass: 'button button--expand ' ~ data.config.jsName ~ '__button-add-to-cart',
                                                                buttonExtraAttributes: {
                                                                    'data-form-action': formAction,
                                                                    'data-init-single-click': true,
                                                                    'data-qa': 'add-to-cart-button',
                                                                },
                                                            },
                                                            attributes: {
                                                                'form-name': 'addToCartForm_' ~ productSku,
                                                                'form-action': formAction,
                                                                'field-name': tokenField.full_name,
                                                                'field-value': tokenField.value,
                                                            },
                                                        } only %}
                                                    {% endblock %}
                                                {% endwidget %}
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        {% endfor %}
                    {% endblock %}
                {% endembed %}
            </form>
        {% endif %}

        {% if not data.products | length %}
            <div class=\"{{ config.name }}__text text-center\">
                <p> {{ 'product.set.detail.no-products' | trans }} </p>
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/src/Pyz/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_c63d216ff89c8680089fe49f93315cfc3a12e3d05bc093aba3180f14065fa919___1432010341 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'slides' => [$this, 'block_slides'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 117
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["slick-carousel"]), "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 117);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 130
    public function block_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 131, $this->source); })()), "slides", [], "any", false, false, false, 131));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 132
            echo "                            ";
            $this->loadTemplate("@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 132, "1374652225")->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,             // line 133
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 133, $this->source); })()), "jsName", [], "any", false, false, false, 133) . "__product-item"), "modifiers" => [0 => "catalog", 1 => "sets", 2 => "stretch"], "data" => ["product" =>             // line 136
$context["product"]]]));
            // line 218
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1482 => 219,  1476 => 218,  1474 => 136,  1473 => 133,  1471 => 132,  1466 => 131,  1462 => 130,  1452 => 117,  1177 => 80,  1171 => 78,  1168 => 77,  1164 => 76,  1160 => 108,  1156 => 106,  1154 => 99,  1150 => 98,  1144 => 97,  1141 => 96,  1127 => 95,  1124 => 94,  1121 => 93,  1119 => 92,  1116 => 91,  1111 => 89,  1102 => 88,  1099 => 87,  1082 => 86,  1079 => 85,  1076 => 84,  1074 => 83,  1070 => 81,  1068 => 76,  1063 => 75,  1059 => 74,  1049 => 60,  773 => 110,  771 => 71,  770 => 70,  769 => 69,  768 => 68,  767 => 67,  765 => 60,  761 => 59,  751 => 54,  474 => 48,  471 => 47,  468 => 46,  465 => 45,  461 => 44,  456 => 41,  454 => 40,  449 => 39,  444 => 38,  440 => 37,  430 => 30,  154 => 229,  148 => 226,  143 => 225,  141 => 224,  138 => 223,  134 => 221,  132 => 127,  131 => 123,  130 => 120,  129 => 117,  126 => 116,  123 => 115,  119 => 114,  115 => 112,  112 => 56,  109 => 54,  105 => 53,  101 => 51,  99 => 34,  98 => 33,  97 => 31,  95 => 30,  91 => 29,  87 => 114,  84 => 113,  82 => 53,  79 => 52,  77 => 29,  74 => 28,  71 => 27,  67 => 26,  63 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends organism('product-set-details', '@SprykerShop:ProductSetWidget') %}

{% define data = {
    title: '',
    addAllSetButton: can('SeeAddToCartPermissionPlugin') | default(false),
    sliderConfig: '{
        \"slidesToShow\": 4,
        \"slidesToScroll\": 1,
        \"dots\": false,
        \"infinite\": false,
        \"responsive\": [{
            \"breakpoint\": 768,
            \"settings\": {
                \"slidesToShow\": 2
                }
        },
        {
            \"breakpoint\": 375,
            \"settings\": {
                \"slidesToShow\": 1
            }
        }]
    }',
} %}

{% block body %}
    {% set productSetAddToCartButtonClass = 'button--expand-sm-only spacing-bottom spacing-bottom--biggest' %}

    {% block banner %}
        {% embed molecule('banner') with {
            class: config.name ~ '__banner',
            data: {
                imageUrl: data.images.0.externalUrlLarge | default,
                title: data.title,
            },
        } only %}
            {% block content %}
                <h1 class=\"title title--light title--product-set-details\">{{ data.title }}</h1>
                <p class=\"{{ config.name }}__text {{ config.name }}__text--subtitle\">
                    {{- 'product.set' | trans -}}
                </p>
            {% endblock %}

            {% block body %}
                {% set containerClass = config.name ~ '__container grid grid--column grid--middle grid--center' %}
                {% set contentClass = contentClass ~ ' text-center' %}

                {{ parent() }}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block header %}
        {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
            embed: {
                productSetAddToCartButtonClass: productSetAddToCartButtonClass,
            },
        } only %}
            {% block embeddedData %}
                {% embed organism('section') with {
                    modifiers: ['secondary'],
                    class: 'text-center',
                    data: {
                        title: 'product.sets.widget.title' | trans,
                    },
                    embed: {
                        description: data.data.description,
                        addAllSetButton: data.data.addAllSetButton,
                        products: data.products,
                        jsName: data.config.jsName,
                        productSetAddToCartButtonClass: embed.productSetAddToCartButtonClass,
                    },
                } only %}
                    {% block inner %}
                        <div class=\"{{ config.name }}__text\">
                            {% block description %}
                                {% if embed.description %}
                                    <p>{{ embed.description }}</p>
                                {% endif %}
                            {% endblock %}
                        </div>

                        {% if embed.addAllSetButton and embed.products | length %}
                            {% set isDisabled = false %}

                            {% for product in embed.products %}
                                {% if product.idProductConcrete is not empty and product.available %}
                                    <input type=\"hidden\" class=\"{{ embed.jsName }}__product-sku-hidden-input\" name=\"items[{{ loop.index }}][sku]\" value=\"{{ product.sku }}\">
                                    <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                                {% endif %}

                                {% if product.idProductConcrete is empty %}
                                    {% set isDisabled = true %}
                                {% endif %}
                            {% endfor %}

                            <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                                {{ 'product.set.detail.add_all_to' | trans }}
                                {% include atom('icon') with {
                                    class: 'spacing-y spacing-y--reset',
                                    modifiers: ['cart'],
                                    data: {
                                        name: 'cart',
                                    },
                                } only %}
                            </button>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endwidget %}
    {% endblock %}

    {% block productSet %}
        {% if data.products | length %}
            <form method=\"GET\">
                {% embed molecule('slick-carousel') with {
                    modifiers: ['product-set', 'equal-height'],
                    data: {
                        slides: data.products,
                    },
                    attributes: {
                        'slider-config': data.sliderConfig,
                        'custom-select-class-name': 'custom-select',
                    },
                    embed: {
                        jsName: config.jsName,
                    },
                } only %}
                    {% block slides %}
                        {% for product in data.slides %}
                            {% embed molecule('product-item') with {
                                class: embed.jsName ~ '__product-item',
                                modifiers: ['catalog', 'sets', 'stretch'],
                                data: {
                                    product: product,
                                },
                            } only %}
                                {% block actionsContainer %}
                                    <div class=\"{{ config.name }}__variant\">
                                        {% set isNotAvailable = data.product.idProductConcrete and not data.product.available %}

                                        {% embed molecule('variant-configurator', 'ProductDetailPage') ignore missing with {
                                            data: {
                                                superAttributes: data.product.attributeMap.superAttributes,
                                                selectedAttributes: data.product.selectedAttributes,
                                                availableAttributes: data.product.availableAttributes,
                                                useExternalForm: true,
                                            },
                                            embed: {
                                                product: data.product,
                                            },
                                        } only %}
                                            {% block variant %}
                                                {% if can('SeeAddToCartPermissionPlugin') %}
                                                    {% include molecule('variant', 'ProductDetailPage') ignore missing with {
                                                        modifiers: ['product-set'],
                                                        data: {
                                                            name: name,
                                                            formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                            values: values,
                                                            selectedValue: selectedValue,
                                                            label: ('product.attribute.' ~ name) | trans,
                                                            isAvailable: isAvailable,
                                                            selectModifiers: ['small'],
                                                            selectTheme: 'small',
                                                            selectPlaceholder: 'global.select.placeholder.value',
                                                        },
                                                    } only %}
                                                {% endif %}
                                            {% endblock %}
                                        {% endembed %}

                                        {% if isNotAvailable %}
                                            <p>
                                                <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                            </p>
                                        {% endif %}
                                    </div>

                                    {% if can('SeeAddToCartPermissionPlugin') %}
                                        {% set isDisabled = not data.product.idProductConcrete or not data.product.available or not can('ROLE_USER') %}

                                        <div class=\"{{ config.name }}__actions {{ config.name }}__actions--sticky-bottom\">
                                            {% if isDisabled %}
                                                <button type=\"button\" class=\"button button--expand\" disabled>{{ 'page.detail.add-to-cart' | trans }}</button>
                                            {% else %}
                                                {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] only %}
                                                    {% block body %}
                                                        {% set productSku = data.product.sku %}
                                                        {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                        {% set tokenField = data.form._token.vars %}

                                                        {% include molecule('remote-form-submit') with {
                                                            data: {
                                                                label: 'page.detail.add-to-cart' | trans,
                                                                buttonClass: 'button button--expand ' ~ data.config.jsName ~ '__button-add-to-cart',
                                                                buttonExtraAttributes: {
                                                                    'data-form-action': formAction,
                                                                    'data-init-single-click': true,
                                                                    'data-qa': 'add-to-cart-button',
                                                                },
                                                            },
                                                            attributes: {
                                                                'form-name': 'addToCartForm_' ~ productSku,
                                                                'form-action': formAction,
                                                                'field-name': tokenField.full_name,
                                                                'field-value': tokenField.value,
                                                            },
                                                        } only %}
                                                    {% endblock %}
                                                {% endwidget %}
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        {% endfor %}
                    {% endblock %}
                {% endembed %}
            </form>
        {% endif %}

        {% if not data.products | length %}
            <div class=\"{{ config.name }}__text text-center\">
                <p> {{ 'product.set.detail.no-products' | trans }} </p>
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/src/Pyz/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_c63d216ff89c8680089fe49f93315cfc3a12e3d05bc093aba3180f14065fa919___1374652225 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'actionsContainer' => [$this, 'block_actionsContainer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 132
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-item"]), "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 132);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 139
    public function block_actionsContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 140
        echo "                                    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 140, $this->source); })()), "name", [], "any", false, false, false, 140), "html", null, true);
        echo "__variant\">
                                        ";
        // line 141
        $context["isNotAvailable"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 141, $this->source); })()), "product", [], "any", false, false, false, 141), "idProductConcrete", [], "any", false, false, false, 141) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 141, $this->source); })()), "product", [], "any", false, false, false, 141), "available", [], "any", false, false, false, 141));
        // line 142
        echo "
                                        ";
        // line 143
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 143, "255057215");
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display(twig_to_array(["data" => ["superAttributes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 145
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 145, $this->source); })()), "product", [], "any", false, false, false, 145), "attributeMap", [], "any", false, false, false, 145), "superAttributes", [], "any", false, false, false, 145), "selectedAttributes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 146
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 146, $this->source); })()), "product", [], "any", false, false, false, 146), "selectedAttributes", [], "any", false, false, false, 146), "availableAttributes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 147
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 147, $this->source); })()), "product", [], "any", false, false, false, 147), "availableAttributes", [], "any", false, false, false, 147), "useExternalForm" => true], "embed" => ["product" => twig_get_attribute($this->env, $this->source,             // line 151
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 151, $this->source); })()), "product", [], "any", false, false, false, 151)]]));
        }
        // line 173
        echo "
                                        ";
        // line 174
        if ((isset($context["isNotAvailable"]) || array_key_exists("isNotAvailable", $context) ? $context["isNotAvailable"] : (function () { throw new RuntimeError('Variable "isNotAvailable" does not exist.', 174, $this->source); })())) {
            // line 175
            echo "                                            <p>
                                                <strong>";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.detail.out_of_stock"), "html", null, true);
            echo "</strong>
                                            </p>
                                        ";
        }
        // line 179
        echo "                                    </div>

                                    ";
        // line 181
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeeAddToCartPermissionPlugin")) {
            // line 182
            echo "                                        ";
            $context["isDisabled"] = (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 182, $this->source); })()), "product", [], "any", false, false, false, 182), "idProductConcrete", [], "any", false, false, false, 182) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 182, $this->source); })()), "product", [], "any", false, false, false, 182), "available", [], "any", false, false, false, 182)) ||  !$this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("ROLE_USER"));
            // line 183
            echo "
                                        <div class=\"";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 184, $this->source); })()), "name", [], "any", false, false, false, 184), "html", null, true);
            echo "__actions ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 184, $this->source); })()), "name", [], "any", false, false, false, 184), "html", null, true);
            echo "__actions--sticky-bottom\">
                                            ";
            // line 185
            if ((isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 185, $this->source); })())) {
                // line 186
                echo "                                                <button type=\"button\" class=\"button button--expand\" disabled>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.detail.add-to-cart"), "html", null, true);
                echo "</button>
                                            ";
            } else {
                // line 188
                echo "                                                ";
                if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AddToCartFormWidget", [0 => (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 188, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 188, $this->source); })()), "product", [], "any", false, false, false, 188), 2 => (isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 188, $this->source); })())])) {
                    $this->loadTemplate("@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 188, 866107527)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                    $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
                }                // line 213
                echo "                                            ";
            }
            // line 214
            echo "                                        </div>
                                    ";
        }
        // line 216
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1847 => 216,  1843 => 214,  1840 => 213,  1835 => 188,  1829 => 186,  1827 => 185,  1821 => 184,  1818 => 183,  1815 => 182,  1813 => 181,  1809 => 179,  1803 => 176,  1800 => 175,  1798 => 174,  1795 => 173,  1792 => 151,  1791 => 147,  1790 => 146,  1789 => 145,  1781 => 143,  1778 => 142,  1776 => 141,  1771 => 140,  1767 => 139,  1757 => 132,  1482 => 219,  1476 => 218,  1474 => 136,  1473 => 133,  1471 => 132,  1466 => 131,  1462 => 130,  1452 => 117,  1177 => 80,  1171 => 78,  1168 => 77,  1164 => 76,  1160 => 108,  1156 => 106,  1154 => 99,  1150 => 98,  1144 => 97,  1141 => 96,  1127 => 95,  1124 => 94,  1121 => 93,  1119 => 92,  1116 => 91,  1111 => 89,  1102 => 88,  1099 => 87,  1082 => 86,  1079 => 85,  1076 => 84,  1074 => 83,  1070 => 81,  1068 => 76,  1063 => 75,  1059 => 74,  1049 => 60,  773 => 110,  771 => 71,  770 => 70,  769 => 69,  768 => 68,  767 => 67,  765 => 60,  761 => 59,  751 => 54,  474 => 48,  471 => 47,  468 => 46,  465 => 45,  461 => 44,  456 => 41,  454 => 40,  449 => 39,  444 => 38,  440 => 37,  430 => 30,  154 => 229,  148 => 226,  143 => 225,  141 => 224,  138 => 223,  134 => 221,  132 => 127,  131 => 123,  130 => 120,  129 => 117,  126 => 116,  123 => 115,  119 => 114,  115 => 112,  112 => 56,  109 => 54,  105 => 53,  101 => 51,  99 => 34,  98 => 33,  97 => 31,  95 => 30,  91 => 29,  87 => 114,  84 => 113,  82 => 53,  79 => 52,  77 => 29,  74 => 28,  71 => 27,  67 => 26,  63 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends organism('product-set-details', '@SprykerShop:ProductSetWidget') %}

{% define data = {
    title: '',
    addAllSetButton: can('SeeAddToCartPermissionPlugin') | default(false),
    sliderConfig: '{
        \"slidesToShow\": 4,
        \"slidesToScroll\": 1,
        \"dots\": false,
        \"infinite\": false,
        \"responsive\": [{
            \"breakpoint\": 768,
            \"settings\": {
                \"slidesToShow\": 2
                }
        },
        {
            \"breakpoint\": 375,
            \"settings\": {
                \"slidesToShow\": 1
            }
        }]
    }',
} %}

{% block body %}
    {% set productSetAddToCartButtonClass = 'button--expand-sm-only spacing-bottom spacing-bottom--biggest' %}

    {% block banner %}
        {% embed molecule('banner') with {
            class: config.name ~ '__banner',
            data: {
                imageUrl: data.images.0.externalUrlLarge | default,
                title: data.title,
            },
        } only %}
            {% block content %}
                <h1 class=\"title title--light title--product-set-details\">{{ data.title }}</h1>
                <p class=\"{{ config.name }}__text {{ config.name }}__text--subtitle\">
                    {{- 'product.set' | trans -}}
                </p>
            {% endblock %}

            {% block body %}
                {% set containerClass = config.name ~ '__container grid grid--column grid--middle grid--center' %}
                {% set contentClass = contentClass ~ ' text-center' %}

                {{ parent() }}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block header %}
        {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
            embed: {
                productSetAddToCartButtonClass: productSetAddToCartButtonClass,
            },
        } only %}
            {% block embeddedData %}
                {% embed organism('section') with {
                    modifiers: ['secondary'],
                    class: 'text-center',
                    data: {
                        title: 'product.sets.widget.title' | trans,
                    },
                    embed: {
                        description: data.data.description,
                        addAllSetButton: data.data.addAllSetButton,
                        products: data.products,
                        jsName: data.config.jsName,
                        productSetAddToCartButtonClass: embed.productSetAddToCartButtonClass,
                    },
                } only %}
                    {% block inner %}
                        <div class=\"{{ config.name }}__text\">
                            {% block description %}
                                {% if embed.description %}
                                    <p>{{ embed.description }}</p>
                                {% endif %}
                            {% endblock %}
                        </div>

                        {% if embed.addAllSetButton and embed.products | length %}
                            {% set isDisabled = false %}

                            {% for product in embed.products %}
                                {% if product.idProductConcrete is not empty and product.available %}
                                    <input type=\"hidden\" class=\"{{ embed.jsName }}__product-sku-hidden-input\" name=\"items[{{ loop.index }}][sku]\" value=\"{{ product.sku }}\">
                                    <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                                {% endif %}

                                {% if product.idProductConcrete is empty %}
                                    {% set isDisabled = true %}
                                {% endif %}
                            {% endfor %}

                            <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                                {{ 'product.set.detail.add_all_to' | trans }}
                                {% include atom('icon') with {
                                    class: 'spacing-y spacing-y--reset',
                                    modifiers: ['cart'],
                                    data: {
                                        name: 'cart',
                                    },
                                } only %}
                            </button>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endwidget %}
    {% endblock %}

    {% block productSet %}
        {% if data.products | length %}
            <form method=\"GET\">
                {% embed molecule('slick-carousel') with {
                    modifiers: ['product-set', 'equal-height'],
                    data: {
                        slides: data.products,
                    },
                    attributes: {
                        'slider-config': data.sliderConfig,
                        'custom-select-class-name': 'custom-select',
                    },
                    embed: {
                        jsName: config.jsName,
                    },
                } only %}
                    {% block slides %}
                        {% for product in data.slides %}
                            {% embed molecule('product-item') with {
                                class: embed.jsName ~ '__product-item',
                                modifiers: ['catalog', 'sets', 'stretch'],
                                data: {
                                    product: product,
                                },
                            } only %}
                                {% block actionsContainer %}
                                    <div class=\"{{ config.name }}__variant\">
                                        {% set isNotAvailable = data.product.idProductConcrete and not data.product.available %}

                                        {% embed molecule('variant-configurator', 'ProductDetailPage') ignore missing with {
                                            data: {
                                                superAttributes: data.product.attributeMap.superAttributes,
                                                selectedAttributes: data.product.selectedAttributes,
                                                availableAttributes: data.product.availableAttributes,
                                                useExternalForm: true,
                                            },
                                            embed: {
                                                product: data.product,
                                            },
                                        } only %}
                                            {% block variant %}
                                                {% if can('SeeAddToCartPermissionPlugin') %}
                                                    {% include molecule('variant', 'ProductDetailPage') ignore missing with {
                                                        modifiers: ['product-set'],
                                                        data: {
                                                            name: name,
                                                            formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                            values: values,
                                                            selectedValue: selectedValue,
                                                            label: ('product.attribute.' ~ name) | trans,
                                                            isAvailable: isAvailable,
                                                            selectModifiers: ['small'],
                                                            selectTheme: 'small',
                                                            selectPlaceholder: 'global.select.placeholder.value',
                                                        },
                                                    } only %}
                                                {% endif %}
                                            {% endblock %}
                                        {% endembed %}

                                        {% if isNotAvailable %}
                                            <p>
                                                <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                            </p>
                                        {% endif %}
                                    </div>

                                    {% if can('SeeAddToCartPermissionPlugin') %}
                                        {% set isDisabled = not data.product.idProductConcrete or not data.product.available or not can('ROLE_USER') %}

                                        <div class=\"{{ config.name }}__actions {{ config.name }}__actions--sticky-bottom\">
                                            {% if isDisabled %}
                                                <button type=\"button\" class=\"button button--expand\" disabled>{{ 'page.detail.add-to-cart' | trans }}</button>
                                            {% else %}
                                                {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] only %}
                                                    {% block body %}
                                                        {% set productSku = data.product.sku %}
                                                        {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                        {% set tokenField = data.form._token.vars %}

                                                        {% include molecule('remote-form-submit') with {
                                                            data: {
                                                                label: 'page.detail.add-to-cart' | trans,
                                                                buttonClass: 'button button--expand ' ~ data.config.jsName ~ '__button-add-to-cart',
                                                                buttonExtraAttributes: {
                                                                    'data-form-action': formAction,
                                                                    'data-init-single-click': true,
                                                                    'data-qa': 'add-to-cart-button',
                                                                },
                                                            },
                                                            attributes: {
                                                                'form-name': 'addToCartForm_' ~ productSku,
                                                                'form-action': formAction,
                                                                'field-name': tokenField.full_name,
                                                                'field-value': tokenField.value,
                                                            },
                                                        } only %}
                                                    {% endblock %}
                                                {% endwidget %}
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        {% endfor %}
                    {% endblock %}
                {% endembed %}
            </form>
        {% endif %}

        {% if not data.products | length %}
            <div class=\"{{ config.name }}__text text-center\">
                <p> {{ 'product.set.detail.no-products' | trans }} </p>
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/src/Pyz/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_c63d216ff89c8680089fe49f93315cfc3a12e3d05bc093aba3180f14065fa919___255057215 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'variant' => [$this, 'block_variant'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 143
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["variant-configurator", "ProductDetailPage"]), "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 143);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 154
    public function block_variant($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "                                                ";
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeeAddToCartPermissionPlugin")) {
            // line 156
            echo "                                                    ";
            $__internal_compile_1 = null;
            try {
                $__internal_compile_1 =                 $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["variant", "ProductDetailPage"]), "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 156);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_1) {
                $__internal_compile_1->display(twig_to_array(["modifiers" => [0 => "product-set"], "data" => ["name" =>                 // line 159
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 159, $this->source); })()), "formName" => (((("attributes[" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 160
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 160, $this->source); })()), "product", [], "any", false, false, false, 160), "idProductAbstract", [], "any", false, false, false, 160)) . "][") . (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 160, $this->source); })())) . "]"), "values" =>                 // line 161
(isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 161, $this->source); })()), "selectedValue" =>                 // line 162
(isset($context["selectedValue"]) || array_key_exists("selectedValue", $context) ? $context["selectedValue"] : (function () { throw new RuntimeError('Variable "selectedValue" does not exist.', 162, $this->source); })()), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.attribute." .                 // line 163
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 163, $this->source); })()))), "isAvailable" =>                 // line 164
(isset($context["isAvailable"]) || array_key_exists("isAvailable", $context) ? $context["isAvailable"] : (function () { throw new RuntimeError('Variable "isAvailable" does not exist.', 164, $this->source); })()), "selectModifiers" => [0 => "small"], "selectTheme" => "small", "selectPlaceholder" => "global.select.placeholder.value"]]));
            }
            // line 170
            echo "                                                ";
        }
        // line 171
        echo "                                            ";
    }

    public function getTemplateName()
    {
        return "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2159 => 171,  2156 => 170,  2153 => 164,  2152 => 163,  2151 => 162,  2150 => 161,  2149 => 160,  2148 => 159,  2139 => 156,  2136 => 155,  2132 => 154,  2122 => 143,  1847 => 216,  1843 => 214,  1840 => 213,  1835 => 188,  1829 => 186,  1827 => 185,  1821 => 184,  1818 => 183,  1815 => 182,  1813 => 181,  1809 => 179,  1803 => 176,  1800 => 175,  1798 => 174,  1795 => 173,  1792 => 151,  1791 => 147,  1790 => 146,  1789 => 145,  1781 => 143,  1778 => 142,  1776 => 141,  1771 => 140,  1767 => 139,  1757 => 132,  1482 => 219,  1476 => 218,  1474 => 136,  1473 => 133,  1471 => 132,  1466 => 131,  1462 => 130,  1452 => 117,  1177 => 80,  1171 => 78,  1168 => 77,  1164 => 76,  1160 => 108,  1156 => 106,  1154 => 99,  1150 => 98,  1144 => 97,  1141 => 96,  1127 => 95,  1124 => 94,  1121 => 93,  1119 => 92,  1116 => 91,  1111 => 89,  1102 => 88,  1099 => 87,  1082 => 86,  1079 => 85,  1076 => 84,  1074 => 83,  1070 => 81,  1068 => 76,  1063 => 75,  1059 => 74,  1049 => 60,  773 => 110,  771 => 71,  770 => 70,  769 => 69,  768 => 68,  767 => 67,  765 => 60,  761 => 59,  751 => 54,  474 => 48,  471 => 47,  468 => 46,  465 => 45,  461 => 44,  456 => 41,  454 => 40,  449 => 39,  444 => 38,  440 => 37,  430 => 30,  154 => 229,  148 => 226,  143 => 225,  141 => 224,  138 => 223,  134 => 221,  132 => 127,  131 => 123,  130 => 120,  129 => 117,  126 => 116,  123 => 115,  119 => 114,  115 => 112,  112 => 56,  109 => 54,  105 => 53,  101 => 51,  99 => 34,  98 => 33,  97 => 31,  95 => 30,  91 => 29,  87 => 114,  84 => 113,  82 => 53,  79 => 52,  77 => 29,  74 => 28,  71 => 27,  67 => 26,  63 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends organism('product-set-details', '@SprykerShop:ProductSetWidget') %}

{% define data = {
    title: '',
    addAllSetButton: can('SeeAddToCartPermissionPlugin') | default(false),
    sliderConfig: '{
        \"slidesToShow\": 4,
        \"slidesToScroll\": 1,
        \"dots\": false,
        \"infinite\": false,
        \"responsive\": [{
            \"breakpoint\": 768,
            \"settings\": {
                \"slidesToShow\": 2
                }
        },
        {
            \"breakpoint\": 375,
            \"settings\": {
                \"slidesToShow\": 1
            }
        }]
    }',
} %}

{% block body %}
    {% set productSetAddToCartButtonClass = 'button--expand-sm-only spacing-bottom spacing-bottom--biggest' %}

    {% block banner %}
        {% embed molecule('banner') with {
            class: config.name ~ '__banner',
            data: {
                imageUrl: data.images.0.externalUrlLarge | default,
                title: data.title,
            },
        } only %}
            {% block content %}
                <h1 class=\"title title--light title--product-set-details\">{{ data.title }}</h1>
                <p class=\"{{ config.name }}__text {{ config.name }}__text--subtitle\">
                    {{- 'product.set' | trans -}}
                </p>
            {% endblock %}

            {% block body %}
                {% set containerClass = config.name ~ '__container grid grid--column grid--middle grid--center' %}
                {% set contentClass = contentClass ~ ' text-center' %}

                {{ parent() }}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block header %}
        {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
            embed: {
                productSetAddToCartButtonClass: productSetAddToCartButtonClass,
            },
        } only %}
            {% block embeddedData %}
                {% embed organism('section') with {
                    modifiers: ['secondary'],
                    class: 'text-center',
                    data: {
                        title: 'product.sets.widget.title' | trans,
                    },
                    embed: {
                        description: data.data.description,
                        addAllSetButton: data.data.addAllSetButton,
                        products: data.products,
                        jsName: data.config.jsName,
                        productSetAddToCartButtonClass: embed.productSetAddToCartButtonClass,
                    },
                } only %}
                    {% block inner %}
                        <div class=\"{{ config.name }}__text\">
                            {% block description %}
                                {% if embed.description %}
                                    <p>{{ embed.description }}</p>
                                {% endif %}
                            {% endblock %}
                        </div>

                        {% if embed.addAllSetButton and embed.products | length %}
                            {% set isDisabled = false %}

                            {% for product in embed.products %}
                                {% if product.idProductConcrete is not empty and product.available %}
                                    <input type=\"hidden\" class=\"{{ embed.jsName }}__product-sku-hidden-input\" name=\"items[{{ loop.index }}][sku]\" value=\"{{ product.sku }}\">
                                    <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                                {% endif %}

                                {% if product.idProductConcrete is empty %}
                                    {% set isDisabled = true %}
                                {% endif %}
                            {% endfor %}

                            <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                                {{ 'product.set.detail.add_all_to' | trans }}
                                {% include atom('icon') with {
                                    class: 'spacing-y spacing-y--reset',
                                    modifiers: ['cart'],
                                    data: {
                                        name: 'cart',
                                    },
                                } only %}
                            </button>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endwidget %}
    {% endblock %}

    {% block productSet %}
        {% if data.products | length %}
            <form method=\"GET\">
                {% embed molecule('slick-carousel') with {
                    modifiers: ['product-set', 'equal-height'],
                    data: {
                        slides: data.products,
                    },
                    attributes: {
                        'slider-config': data.sliderConfig,
                        'custom-select-class-name': 'custom-select',
                    },
                    embed: {
                        jsName: config.jsName,
                    },
                } only %}
                    {% block slides %}
                        {% for product in data.slides %}
                            {% embed molecule('product-item') with {
                                class: embed.jsName ~ '__product-item',
                                modifiers: ['catalog', 'sets', 'stretch'],
                                data: {
                                    product: product,
                                },
                            } only %}
                                {% block actionsContainer %}
                                    <div class=\"{{ config.name }}__variant\">
                                        {% set isNotAvailable = data.product.idProductConcrete and not data.product.available %}

                                        {% embed molecule('variant-configurator', 'ProductDetailPage') ignore missing with {
                                            data: {
                                                superAttributes: data.product.attributeMap.superAttributes,
                                                selectedAttributes: data.product.selectedAttributes,
                                                availableAttributes: data.product.availableAttributes,
                                                useExternalForm: true,
                                            },
                                            embed: {
                                                product: data.product,
                                            },
                                        } only %}
                                            {% block variant %}
                                                {% if can('SeeAddToCartPermissionPlugin') %}
                                                    {% include molecule('variant', 'ProductDetailPage') ignore missing with {
                                                        modifiers: ['product-set'],
                                                        data: {
                                                            name: name,
                                                            formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                            values: values,
                                                            selectedValue: selectedValue,
                                                            label: ('product.attribute.' ~ name) | trans,
                                                            isAvailable: isAvailable,
                                                            selectModifiers: ['small'],
                                                            selectTheme: 'small',
                                                            selectPlaceholder: 'global.select.placeholder.value',
                                                        },
                                                    } only %}
                                                {% endif %}
                                            {% endblock %}
                                        {% endembed %}

                                        {% if isNotAvailable %}
                                            <p>
                                                <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                            </p>
                                        {% endif %}
                                    </div>

                                    {% if can('SeeAddToCartPermissionPlugin') %}
                                        {% set isDisabled = not data.product.idProductConcrete or not data.product.available or not can('ROLE_USER') %}

                                        <div class=\"{{ config.name }}__actions {{ config.name }}__actions--sticky-bottom\">
                                            {% if isDisabled %}
                                                <button type=\"button\" class=\"button button--expand\" disabled>{{ 'page.detail.add-to-cart' | trans }}</button>
                                            {% else %}
                                                {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] only %}
                                                    {% block body %}
                                                        {% set productSku = data.product.sku %}
                                                        {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                        {% set tokenField = data.form._token.vars %}

                                                        {% include molecule('remote-form-submit') with {
                                                            data: {
                                                                label: 'page.detail.add-to-cart' | trans,
                                                                buttonClass: 'button button--expand ' ~ data.config.jsName ~ '__button-add-to-cart',
                                                                buttonExtraAttributes: {
                                                                    'data-form-action': formAction,
                                                                    'data-init-single-click': true,
                                                                    'data-qa': 'add-to-cart-button',
                                                                },
                                                            },
                                                            attributes: {
                                                                'form-name': 'addToCartForm_' ~ productSku,
                                                                'form-action': formAction,
                                                                'field-name': tokenField.full_name,
                                                                'field-value': tokenField.value,
                                                            },
                                                        } only %}
                                                    {% endblock %}
                                                {% endwidget %}
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        {% endfor %}
                    {% endblock %}
                {% endembed %}
            </form>
        {% endif %}

        {% if not data.products | length %}
            <div class=\"{{ config.name }}__text text-center\">
                <p> {{ 'product.set.detail.no-products' | trans }} </p>
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/src/Pyz/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_c63d216ff89c8680089fe49f93315cfc3a12e3d05bc093aba3180f14065fa919___866107527 extends Template
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
        // line 188
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 188, $this->source); })()), "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 188);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 189
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "                                                        ";
        $context["productSku"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 190, $this->source); })()), "product", [], "any", false, false, false, 190), "sku", [], "any", false, false, false, 190);
        // line 191
        echo "                                                        ";
        $context["formAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart/add", ["sku" => (isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 191, $this->source); })())]);
        // line 192
        echo "                                                        ";
        $context["tokenField"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 192, $this->source); })()), "form", [], "any", false, false, false, 192), "_token", [], "any", false, false, false, 192), "vars", [], "any", false, false, false, 192);
        // line 193
        echo "
                                                        ";
        // line 194
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["remote-form-submit"]), "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 194)->display(twig_to_array(["data" => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.detail.add-to-cart"), "buttonClass" => (("button button--expand " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 197
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 197, $this->source); })()), "config", [], "any", false, false, false, 197), "jsName", [], "any", false, false, false, 197)) . "__button-add-to-cart"), "buttonExtraAttributes" => ["data-form-action" =>         // line 199
(isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 199, $this->source); })()), "data-init-single-click" => true, "data-qa" => "add-to-cart-button"]], "attributes" => ["form-name" => ("addToCartForm_" .         // line 205
(isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 205, $this->source); })())), "form-action" =>         // line 206
(isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 206, $this->source); })()), "field-name" => twig_get_attribute($this->env, $this->source,         // line 207
(isset($context["tokenField"]) || array_key_exists("tokenField", $context) ? $context["tokenField"] : (function () { throw new RuntimeError('Variable "tokenField" does not exist.', 207, $this->source); })()), "full_name", [], "any", false, false, false, 207), "field-value" => twig_get_attribute($this->env, $this->source,         // line 208
(isset($context["tokenField"]) || array_key_exists("tokenField", $context) ? $context["tokenField"] : (function () { throw new RuntimeError('Variable "tokenField" does not exist.', 208, $this->source); })()), "value", [], "any", false, false, false, 208)]]));
        // line 211
        echo "                                                    ";
    }

    public function getTemplateName()
    {
        return "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2468 => 211,  2466 => 208,  2465 => 207,  2464 => 206,  2463 => 205,  2462 => 199,  2461 => 197,  2460 => 194,  2457 => 193,  2454 => 192,  2451 => 191,  2448 => 190,  2444 => 189,  2434 => 188,  2159 => 171,  2156 => 170,  2153 => 164,  2152 => 163,  2151 => 162,  2150 => 161,  2149 => 160,  2148 => 159,  2139 => 156,  2136 => 155,  2132 => 154,  2122 => 143,  1847 => 216,  1843 => 214,  1840 => 213,  1835 => 188,  1829 => 186,  1827 => 185,  1821 => 184,  1818 => 183,  1815 => 182,  1813 => 181,  1809 => 179,  1803 => 176,  1800 => 175,  1798 => 174,  1795 => 173,  1792 => 151,  1791 => 147,  1790 => 146,  1789 => 145,  1781 => 143,  1778 => 142,  1776 => 141,  1771 => 140,  1767 => 139,  1757 => 132,  1482 => 219,  1476 => 218,  1474 => 136,  1473 => 133,  1471 => 132,  1466 => 131,  1462 => 130,  1452 => 117,  1177 => 80,  1171 => 78,  1168 => 77,  1164 => 76,  1160 => 108,  1156 => 106,  1154 => 99,  1150 => 98,  1144 => 97,  1141 => 96,  1127 => 95,  1124 => 94,  1121 => 93,  1119 => 92,  1116 => 91,  1111 => 89,  1102 => 88,  1099 => 87,  1082 => 86,  1079 => 85,  1076 => 84,  1074 => 83,  1070 => 81,  1068 => 76,  1063 => 75,  1059 => 74,  1049 => 60,  773 => 110,  771 => 71,  770 => 70,  769 => 69,  768 => 68,  767 => 67,  765 => 60,  761 => 59,  751 => 54,  474 => 48,  471 => 47,  468 => 46,  465 => 45,  461 => 44,  456 => 41,  454 => 40,  449 => 39,  444 => 38,  440 => 37,  430 => 30,  154 => 229,  148 => 226,  143 => 225,  141 => 224,  138 => 223,  134 => 221,  132 => 127,  131 => 123,  130 => 120,  129 => 117,  126 => 116,  123 => 115,  119 => 114,  115 => 112,  112 => 56,  109 => 54,  105 => 53,  101 => 51,  99 => 34,  98 => 33,  97 => 31,  95 => 30,  91 => 29,  87 => 114,  84 => 113,  82 => 53,  79 => 52,  77 => 29,  74 => 28,  71 => 27,  67 => 26,  63 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends organism('product-set-details', '@SprykerShop:ProductSetWidget') %}

{% define data = {
    title: '',
    addAllSetButton: can('SeeAddToCartPermissionPlugin') | default(false),
    sliderConfig: '{
        \"slidesToShow\": 4,
        \"slidesToScroll\": 1,
        \"dots\": false,
        \"infinite\": false,
        \"responsive\": [{
            \"breakpoint\": 768,
            \"settings\": {
                \"slidesToShow\": 2
                }
        },
        {
            \"breakpoint\": 375,
            \"settings\": {
                \"slidesToShow\": 1
            }
        }]
    }',
} %}

{% block body %}
    {% set productSetAddToCartButtonClass = 'button--expand-sm-only spacing-bottom spacing-bottom--biggest' %}

    {% block banner %}
        {% embed molecule('banner') with {
            class: config.name ~ '__banner',
            data: {
                imageUrl: data.images.0.externalUrlLarge | default,
                title: data.title,
            },
        } only %}
            {% block content %}
                <h1 class=\"title title--light title--product-set-details\">{{ data.title }}</h1>
                <p class=\"{{ config.name }}__text {{ config.name }}__text--subtitle\">
                    {{- 'product.set' | trans -}}
                </p>
            {% endblock %}

            {% block body %}
                {% set containerClass = config.name ~ '__container grid grid--column grid--middle grid--center' %}
                {% set contentClass = contentClass ~ ' text-center' %}

                {{ parent() }}
            {% endblock %}
        {% endembed %}
    {% endblock %}

    {% block header %}
        {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
            embed: {
                productSetAddToCartButtonClass: productSetAddToCartButtonClass,
            },
        } only %}
            {% block embeddedData %}
                {% embed organism('section') with {
                    modifiers: ['secondary'],
                    class: 'text-center',
                    data: {
                        title: 'product.sets.widget.title' | trans,
                    },
                    embed: {
                        description: data.data.description,
                        addAllSetButton: data.data.addAllSetButton,
                        products: data.products,
                        jsName: data.config.jsName,
                        productSetAddToCartButtonClass: embed.productSetAddToCartButtonClass,
                    },
                } only %}
                    {% block inner %}
                        <div class=\"{{ config.name }}__text\">
                            {% block description %}
                                {% if embed.description %}
                                    <p>{{ embed.description }}</p>
                                {% endif %}
                            {% endblock %}
                        </div>

                        {% if embed.addAllSetButton and embed.products | length %}
                            {% set isDisabled = false %}

                            {% for product in embed.products %}
                                {% if product.idProductConcrete is not empty and product.available %}
                                    <input type=\"hidden\" class=\"{{ embed.jsName }}__product-sku-hidden-input\" name=\"items[{{ loop.index }}][sku]\" value=\"{{ product.sku }}\">
                                    <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                                {% endif %}

                                {% if product.idProductConcrete is empty %}
                                    {% set isDisabled = true %}
                                {% endif %}
                            {% endfor %}

                            <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                                {{ 'product.set.detail.add_all_to' | trans }}
                                {% include atom('icon') with {
                                    class: 'spacing-y spacing-y--reset',
                                    modifiers: ['cart'],
                                    data: {
                                        name: 'cart',
                                    },
                                } only %}
                            </button>
                        {% endif %}
                    {% endblock %}
                {% endembed %}
            {% endblock %}
        {% endwidget %}
    {% endblock %}

    {% block productSet %}
        {% if data.products | length %}
            <form method=\"GET\">
                {% embed molecule('slick-carousel') with {
                    modifiers: ['product-set', 'equal-height'],
                    data: {
                        slides: data.products,
                    },
                    attributes: {
                        'slider-config': data.sliderConfig,
                        'custom-select-class-name': 'custom-select',
                    },
                    embed: {
                        jsName: config.jsName,
                    },
                } only %}
                    {% block slides %}
                        {% for product in data.slides %}
                            {% embed molecule('product-item') with {
                                class: embed.jsName ~ '__product-item',
                                modifiers: ['catalog', 'sets', 'stretch'],
                                data: {
                                    product: product,
                                },
                            } only %}
                                {% block actionsContainer %}
                                    <div class=\"{{ config.name }}__variant\">
                                        {% set isNotAvailable = data.product.idProductConcrete and not data.product.available %}

                                        {% embed molecule('variant-configurator', 'ProductDetailPage') ignore missing with {
                                            data: {
                                                superAttributes: data.product.attributeMap.superAttributes,
                                                selectedAttributes: data.product.selectedAttributes,
                                                availableAttributes: data.product.availableAttributes,
                                                useExternalForm: true,
                                            },
                                            embed: {
                                                product: data.product,
                                            },
                                        } only %}
                                            {% block variant %}
                                                {% if can('SeeAddToCartPermissionPlugin') %}
                                                    {% include molecule('variant', 'ProductDetailPage') ignore missing with {
                                                        modifiers: ['product-set'],
                                                        data: {
                                                            name: name,
                                                            formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                            values: values,
                                                            selectedValue: selectedValue,
                                                            label: ('product.attribute.' ~ name) | trans,
                                                            isAvailable: isAvailable,
                                                            selectModifiers: ['small'],
                                                            selectTheme: 'small',
                                                            selectPlaceholder: 'global.select.placeholder.value',
                                                        },
                                                    } only %}
                                                {% endif %}
                                            {% endblock %}
                                        {% endembed %}

                                        {% if isNotAvailable %}
                                            <p>
                                                <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                            </p>
                                        {% endif %}
                                    </div>

                                    {% if can('SeeAddToCartPermissionPlugin') %}
                                        {% set isDisabled = not data.product.idProductConcrete or not data.product.available or not can('ROLE_USER') %}

                                        <div class=\"{{ config.name }}__actions {{ config.name }}__actions--sticky-bottom\">
                                            {% if isDisabled %}
                                                <button type=\"button\" class=\"button button--expand\" disabled>{{ 'page.detail.add-to-cart' | trans }}</button>
                                            {% else %}
                                                {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] only %}
                                                    {% block body %}
                                                        {% set productSku = data.product.sku %}
                                                        {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                        {% set tokenField = data.form._token.vars %}

                                                        {% include molecule('remote-form-submit') with {
                                                            data: {
                                                                label: 'page.detail.add-to-cart' | trans,
                                                                buttonClass: 'button button--expand ' ~ data.config.jsName ~ '__button-add-to-cart',
                                                                buttonExtraAttributes: {
                                                                    'data-form-action': formAction,
                                                                    'data-init-single-click': true,
                                                                    'data-qa': 'add-to-cart-button',
                                                                },
                                                            },
                                                            attributes: {
                                                                'form-name': 'addToCartForm_' ~ productSku,
                                                                'form-action': formAction,
                                                                'field-name': tokenField.full_name,
                                                                'field-value': tokenField.value,
                                                            },
                                                        } only %}
                                                    {% endblock %}
                                                {% endwidget %}
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        {% endfor %}
                    {% endblock %}
                {% endembed %}
            </form>
        {% endif %}

        {% if not data.products | length %}
            <div class=\"{{ config.name }}__text text-center\">
                <p> {{ 'product.set.detail.no-products' | trans }} </p>
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/src/Pyz/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}
