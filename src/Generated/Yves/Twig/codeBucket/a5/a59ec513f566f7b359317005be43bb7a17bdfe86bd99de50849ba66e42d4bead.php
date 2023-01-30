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

/* @@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_472950bccea668d156568c65ddd36e58ef2d4a3126def1ffb0b5179fbbc8ab7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'carousel' => [$this, 'block_carousel'],
            'header' => [$this, 'block_header'],
            'description' => [$this, 'block_description'],
            'descriptionInner' => [$this, 'block_descriptionInner'],
            'productSet' => [$this, 'block_productSet'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "product-set-details", "tag" => "product-set-details"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["name" => "", "products" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "description" => "", "images" => [], "optionResetUrls" => []], $context['data']);        // line 16
        $context["productSetAddToCartButtonClass"] = "float-right";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <div class=\"box\">
        ";
        // line 20
        $this->displayBlock('carousel', $context, $blocks);
        // line 41
        echo "    </div>

    <div class=\"box\">
        ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 86
        echo "    </div>

    ";
        // line 88
        $this->displayBlock('productSet', $context, $blocks);
    }

    // line 20
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            ";
        $this->loadTemplate("@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 21, "118628080")->display(twig_to_array(["data" => ["slides" => twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "images", [], "any", false, false, false, 23)]]));
        // line 40
        echo "        ";
    }

    // line 44
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "            ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AddItemsFormWidget", [0 => (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), 1 => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), 2 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "products", [], "any", false, false, false, 45)])) {
            $this->loadTemplate("@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 45, 1210354928)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["embed" => ["productSetAddToCartButtonClass" =>             // line 47
(isset($context["productSetAddToCartButtonClass"]) || array_key_exists("productSetAddToCartButtonClass", $context) ? $context["productSetAddToCartButtonClass"] : (function () { throw new RuntimeError('Variable "productSetAddToCartButtonClass" does not exist.', 47, $this->source); })())]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 75
        echo "
            <hr class=\"box__separator\">
            ";
        // line 77
        $this->displayBlock('description', $context, $blocks);
        // line 85
        echo "        ";
    }

    // line 77
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78)) {
            // line 79
            echo "                    ";
            $this->displayBlock('descriptionInner', $context, $blocks);
            // line 83
            echo "                ";
        }
        // line 84
        echo "            ";
    }

    // line 79
    public function block_descriptionInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                        <h6>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.attribute.long_description"), "html", null, true);
        echo "</h6>
                        <p>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81), "html", null, true);
        echo "</p>
                    ";
    }

    // line 88
    public function block_productSet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "        ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 89, $this->source); })()), "products", [], "any", false, false, false, 89))) {
            // line 90
            echo "            <form method=\"GET\">
                <div class=\"grid grid--stretch\">
                    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 92, $this->source); })()), "products", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 93
                echo "                        <div class=\"col col--sm-12 col--lg-4\">
                            ";
                // line 94
                $this->loadTemplate("@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 94, "1543680303")->display(twig_to_array(["class" => (("box--stretch " . twig_get_attribute($this->env, $this->source,                 // line 95
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 95, $this->source); })()), "jsName", [], "any", false, false, false, 95)) . "__product-item"), "data" => ["product" =>                 // line 97
$context["product"], "sku" => ""], "embed" => ["optionResetUrls" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 101
($context["data"] ?? null), "optionResetUrls", [], "any", false, true, false, 101), twig_get_attribute($this->env, $this->source, $context["product"], "idProductAbstract", [], "any", false, false, false, 101), [], "array", true, true, false, 101) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "optionResetUrls", [], "any", false, true, false, 101), twig_get_attribute($this->env, $this->source, $context["product"], "idProductAbstract", [], "any", false, false, false, 101), [], "array", false, false, false, 101)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "optionResetUrls", [], "any", false, true, false, 101), twig_get_attribute($this->env, $this->source, $context["product"], "idProductAbstract", [], "any", false, false, false, 101), [], "array", false, false, false, 101)) : ([]))]]));
                // line 199
                echo "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "                </div>
            </form>
        ";
        } else {
            // line 204
            echo "            <div class=\"box\">
                ";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.set.detail.no-products"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 208
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 208,  182 => 205,  179 => 204,  174 => 201,  167 => 199,  165 => 101,  164 => 97,  163 => 95,  162 => 94,  159 => 93,  155 => 92,  151 => 90,  148 => 89,  144 => 88,  138 => 81,  133 => 80,  129 => 79,  125 => 84,  122 => 83,  119 => 79,  116 => 78,  112 => 77,  108 => 85,  106 => 77,  102 => 75,  99 => 47,  96 => 45,  92 => 44,  88 => 40,  86 => 23,  84 => 21,  80 => 20,  76 => 88,  72 => 86,  70 => 44,  65 => 41,  63 => 20,  60 => 19,  56 => 18,  52 => 1,  50 => 16,  49 => 10,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-set-details',
    tag: 'product-set-details',
} %}

{% define data = {
    name: '',
    products: required,
    description: '',
    images: [],
    optionResetUrls: [],
} %}

{% set productSetAddToCartButtonClass = 'float-right' %}

{% block body %}
    <div class=\"box\">
        {% block carousel %}
            {% embed molecule('simple-carousel') with {
                data: {
                    slides: data.images,
                },
            } only %}
                {% block slide %}
                    <div class=\"text-center\">
                        {% include molecule('lazy-image') with {
                            modifiers: ['thumbnail', 'bigger'],
                            data: {
                                imageSrc: slide.externalUrlLarge,
                                extraAttributes: {
                                    itemprop: 'image',
                                },
                            },
                        } only %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endblock %}
    </div>

    <div class=\"box\">
        {% block header %}
            {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
                embed: {
                    productSetAddToCartButtonClass: productSetAddToCartButtonClass,
                },
            } only %}
                {% block embeddedData %}
                    {% set isDisabled = false %}

                    {% for product in data.data.products %}
                        {% if product.idProductConcrete is not empty and product.available %}
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][sku]\" class=\"{{ data.config.jsName }}__product-sku-hidden-input\" value=\"{{ product.sku }}\">
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                        {% endif %}

                        {% if product.idProductConcrete is empty %}
                            {% set isDisabled = true %}
                        {% endif %}
                    {% endfor %}

                    {% if (data.data.products | length) %}
                        <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                            {{ 'product.set.detail.add-all-to-cart' | trans }}
                        </button>
                    {% endif %}

                    {% block title %}
                        <h5>{{ 'product.set.detail.set-contents' | trans }}</h5>
                    {% endblock %}
                {% endblock %}
            {% endwidget %}

            <hr class=\"box__separator\">
            {% block description %}
                {% if data.description %}
                    {% block descriptionInner %}
                        <h6>{{ 'product.attribute.long_description' | trans }}</h6>
                        <p>{{ data.description }}</p>
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    </div>

    {% block productSet %}
        {% if (data.products | length) %}
            <form method=\"GET\">
                <div class=\"grid grid--stretch\">
                    {% for product in data.products %}
                        <div class=\"col col--sm-12 col--lg-4\">
                            {% embed molecule('product-item') with {
                                class: 'box--stretch ' ~ config.jsName ~ '__product-item',
                                data: {
                                    product: product,
                                    sku: '',
                                },
                                embed: {
                                    optionResetUrls: data.optionResetUrls[product.idProductAbstract] ?? [],
                                },
                            } only %}
                                {% block content %}
                                    {{ parent() }}
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
                                            optionResetUrls: embed.optionResetUrls,
                                        },
                                    } only %}
                                        {% block variant %}
                                            <li class=\"list__item\">
                                                {% include molecule('variant', 'ProductDetailPage') with {
                                                    data: {
                                                        name: name,
                                                        formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                        values: values,
                                                        selectedValue: selectedValue,
                                                        label: ('product.attribute.' ~ name) | trans,
                                                        isAvailable: isAvailable,
                                                        optionResetUrl: embed.optionResetUrls[name] ?? '',
                                                    },
                                                } only %}
                                            </li>
                                        {% endblock %}
                                    {% endembed %}

                                    {% if isNotAvailable %}
                                        <p>
                                            <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                        </p>
                                    {% endif %}
                                {% endblock %}

                                {% block actions %}
                                    {% set isDisabled = not data.product.idProductConcrete or not data.product.available %}

                                    {% set buttonContent %}
                                        {% include atom('icon') with {
                                            data: {
                                                name: 'cart-plus',
                                            },
                                        } only %}
                                        {{- 'page.detail.add-to-cart' | trans -}}
                                    {% endset %}

                                    {% if isDisabled %}
                                        <button type=\"button\" class=\"button button--expand\" disabled>
                                            {{- buttonContent -}}
                                        </button>
                                    {% else %}
                                        {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] with {
                                            embed: {
                                                buttonContent: buttonContent,
                                            },
                                        } only %}
                                            {% block body %}
                                                {% set productSku = data.product.sku %}
                                                {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                {% set tokenField = data.form._token.vars %}

                                                {% embed molecule('remote-form-submit') with {
                                                    data: {
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
                                                    embed: {
                                                        buttonContent: embed.buttonContent,
                                                    },
                                                } only %}
                                                    {% block innerSubmitActionContent %}
                                                        {{- embed.buttonContent -}}
                                                    {% endblock %}
                                                {% endembed %}
                                            {% endblock %}
                                        {% endwidget %}
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    {% endfor %}
                </div>
            </form>
        {% else %}
            <div class=\"box\">
                {{ 'product.set.detail.no-products' | trans }}
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_472950bccea668d156568c65ddd36e58ef2d4a3126def1ffb0b5179fbbc8ab7a___118628080 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'slide' => [$this, 'block_slide'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["simple-carousel"]), "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_slide($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                    <div class=\"text-center\">
                        ";
        // line 28
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["lazy-image"]), "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 28)->display(twig_to_array(["modifiers" => [0 => "thumbnail", 1 => "bigger"], "data" => ["imageSrc" => twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["slide"]) || array_key_exists("slide", $context) ? $context["slide"] : (function () { throw new RuntimeError('Variable "slide" does not exist.', 31, $this->source); })()), "externalUrlLarge", [], "any", false, false, false, 31), "extraAttributes" => ["itemprop" => "image"]]]));
        // line 37
        echo "                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 37,  460 => 31,  459 => 28,  456 => 27,  452 => 26,  442 => 21,  188 => 208,  182 => 205,  179 => 204,  174 => 201,  167 => 199,  165 => 101,  164 => 97,  163 => 95,  162 => 94,  159 => 93,  155 => 92,  151 => 90,  148 => 89,  144 => 88,  138 => 81,  133 => 80,  129 => 79,  125 => 84,  122 => 83,  119 => 79,  116 => 78,  112 => 77,  108 => 85,  106 => 77,  102 => 75,  99 => 47,  96 => 45,  92 => 44,  88 => 40,  86 => 23,  84 => 21,  80 => 20,  76 => 88,  72 => 86,  70 => 44,  65 => 41,  63 => 20,  60 => 19,  56 => 18,  52 => 1,  50 => 16,  49 => 10,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-set-details',
    tag: 'product-set-details',
} %}

{% define data = {
    name: '',
    products: required,
    description: '',
    images: [],
    optionResetUrls: [],
} %}

{% set productSetAddToCartButtonClass = 'float-right' %}

{% block body %}
    <div class=\"box\">
        {% block carousel %}
            {% embed molecule('simple-carousel') with {
                data: {
                    slides: data.images,
                },
            } only %}
                {% block slide %}
                    <div class=\"text-center\">
                        {% include molecule('lazy-image') with {
                            modifiers: ['thumbnail', 'bigger'],
                            data: {
                                imageSrc: slide.externalUrlLarge,
                                extraAttributes: {
                                    itemprop: 'image',
                                },
                            },
                        } only %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endblock %}
    </div>

    <div class=\"box\">
        {% block header %}
            {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
                embed: {
                    productSetAddToCartButtonClass: productSetAddToCartButtonClass,
                },
            } only %}
                {% block embeddedData %}
                    {% set isDisabled = false %}

                    {% for product in data.data.products %}
                        {% if product.idProductConcrete is not empty and product.available %}
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][sku]\" class=\"{{ data.config.jsName }}__product-sku-hidden-input\" value=\"{{ product.sku }}\">
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                        {% endif %}

                        {% if product.idProductConcrete is empty %}
                            {% set isDisabled = true %}
                        {% endif %}
                    {% endfor %}

                    {% if (data.data.products | length) %}
                        <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                            {{ 'product.set.detail.add-all-to-cart' | trans }}
                        </button>
                    {% endif %}

                    {% block title %}
                        <h5>{{ 'product.set.detail.set-contents' | trans }}</h5>
                    {% endblock %}
                {% endblock %}
            {% endwidget %}

            <hr class=\"box__separator\">
            {% block description %}
                {% if data.description %}
                    {% block descriptionInner %}
                        <h6>{{ 'product.attribute.long_description' | trans }}</h6>
                        <p>{{ data.description }}</p>
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    </div>

    {% block productSet %}
        {% if (data.products | length) %}
            <form method=\"GET\">
                <div class=\"grid grid--stretch\">
                    {% for product in data.products %}
                        <div class=\"col col--sm-12 col--lg-4\">
                            {% embed molecule('product-item') with {
                                class: 'box--stretch ' ~ config.jsName ~ '__product-item',
                                data: {
                                    product: product,
                                    sku: '',
                                },
                                embed: {
                                    optionResetUrls: data.optionResetUrls[product.idProductAbstract] ?? [],
                                },
                            } only %}
                                {% block content %}
                                    {{ parent() }}
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
                                            optionResetUrls: embed.optionResetUrls,
                                        },
                                    } only %}
                                        {% block variant %}
                                            <li class=\"list__item\">
                                                {% include molecule('variant', 'ProductDetailPage') with {
                                                    data: {
                                                        name: name,
                                                        formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                        values: values,
                                                        selectedValue: selectedValue,
                                                        label: ('product.attribute.' ~ name) | trans,
                                                        isAvailable: isAvailable,
                                                        optionResetUrl: embed.optionResetUrls[name] ?? '',
                                                    },
                                                } only %}
                                            </li>
                                        {% endblock %}
                                    {% endembed %}

                                    {% if isNotAvailable %}
                                        <p>
                                            <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                        </p>
                                    {% endif %}
                                {% endblock %}

                                {% block actions %}
                                    {% set isDisabled = not data.product.idProductConcrete or not data.product.available %}

                                    {% set buttonContent %}
                                        {% include atom('icon') with {
                                            data: {
                                                name: 'cart-plus',
                                            },
                                        } only %}
                                        {{- 'page.detail.add-to-cart' | trans -}}
                                    {% endset %}

                                    {% if isDisabled %}
                                        <button type=\"button\" class=\"button button--expand\" disabled>
                                            {{- buttonContent -}}
                                        </button>
                                    {% else %}
                                        {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] with {
                                            embed: {
                                                buttonContent: buttonContent,
                                            },
                                        } only %}
                                            {% block body %}
                                                {% set productSku = data.product.sku %}
                                                {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                {% set tokenField = data.form._token.vars %}

                                                {% embed molecule('remote-form-submit') with {
                                                    data: {
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
                                                    embed: {
                                                        buttonContent: embed.buttonContent,
                                                    },
                                                } only %}
                                                    {% block innerSubmitActionContent %}
                                                        {{- embed.buttonContent -}}
                                                    {% endblock %}
                                                {% endembed %}
                                            {% endblock %}
                                        {% endwidget %}
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    {% endfor %}
                </div>
            </form>
        {% else %}
            <div class=\"box\">
                {{ 'product.set.detail.no-products' | trans }}
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_472950bccea668d156568c65ddd36e58ef2d4a3126def1ffb0b5179fbbc8ab7a___1210354928 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'embeddedData' => [$this, 'block_embeddedData'],
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 45
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 45, $this->source); })()), "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 45);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 50
    public function block_embeddedData($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                    ";
        $context["isDisabled"] = false;
        // line 52
        echo "
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 53, $this->source); })()), "data", [], "any", false, false, false, 53), "products", [], "any", false, false, false, 53));
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
            // line 54
            echo "                        ";
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "idProductConcrete", [], "any", false, false, false, 54)) && twig_get_attribute($this->env, $this->source, $context["product"], "available", [], "any", false, false, false, 54))) {
                // line 55
                echo "                            <input type=\"hidden\" name=\"items[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55), "html", null, true);
                echo "][sku]\" class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "config", [], "any", false, false, false, 55), "jsName", [], "any", false, false, false, 55), "html", null, true);
                echo "__product-sku-hidden-input\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 55), "html", null, true);
                echo "\">
                            <input type=\"hidden\" name=\"items[";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 56), "html", null, true);
                echo "][quantity]\" value=\"1\">
                        ";
            }
            // line 58
            echo "
                        ";
            // line 59
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "idProductConcrete", [], "any", false, false, false, 59))) {
                // line 60
                echo "                            ";
                $context["isDisabled"] = true;
                // line 61
                echo "                        ";
            }
            // line 62
            echo "                    ";
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
        // line 63
        echo "
                    ";
        // line 64
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "data", [], "any", false, false, false, 64), "products", [], "any", false, false, false, 64))) {
            // line 65
            echo "                        <button class=\"button ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 65, $this->source); })()), "productSetAddToCartButtonClass", [], "any", false, false, false, 65), "html", null, true);
            echo "\" ";
            echo (((isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 65, $this->source); })())) ? ("disabled") : ("data-init-single-click"));
            echo ">
                            ";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.set.detail.add-all-to-cart"), "html", null, true);
            echo "
                        </button>
                    ";
        }
        // line 69
        echo "
                    ";
        // line 70
        $this->displayBlock('title', $context, $blocks);
        // line 73
        echo "                ";
    }

    // line 70
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                        <h5>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.set.detail.set-contents"), "html", null, true);
        echo "</h5>
                    ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  828 => 71,  824 => 70,  820 => 73,  818 => 70,  815 => 69,  809 => 66,  802 => 65,  800 => 64,  797 => 63,  783 => 62,  780 => 61,  777 => 60,  775 => 59,  772 => 58,  767 => 56,  758 => 55,  755 => 54,  738 => 53,  735 => 52,  732 => 51,  728 => 50,  718 => 45,  462 => 37,  460 => 31,  459 => 28,  456 => 27,  452 => 26,  442 => 21,  188 => 208,  182 => 205,  179 => 204,  174 => 201,  167 => 199,  165 => 101,  164 => 97,  163 => 95,  162 => 94,  159 => 93,  155 => 92,  151 => 90,  148 => 89,  144 => 88,  138 => 81,  133 => 80,  129 => 79,  125 => 84,  122 => 83,  119 => 79,  116 => 78,  112 => 77,  108 => 85,  106 => 77,  102 => 75,  99 => 47,  96 => 45,  92 => 44,  88 => 40,  86 => 23,  84 => 21,  80 => 20,  76 => 88,  72 => 86,  70 => 44,  65 => 41,  63 => 20,  60 => 19,  56 => 18,  52 => 1,  50 => 16,  49 => 10,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-set-details',
    tag: 'product-set-details',
} %}

{% define data = {
    name: '',
    products: required,
    description: '',
    images: [],
    optionResetUrls: [],
} %}

{% set productSetAddToCartButtonClass = 'float-right' %}

{% block body %}
    <div class=\"box\">
        {% block carousel %}
            {% embed molecule('simple-carousel') with {
                data: {
                    slides: data.images,
                },
            } only %}
                {% block slide %}
                    <div class=\"text-center\">
                        {% include molecule('lazy-image') with {
                            modifiers: ['thumbnail', 'bigger'],
                            data: {
                                imageSrc: slide.externalUrlLarge,
                                extraAttributes: {
                                    itemprop: 'image',
                                },
                            },
                        } only %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endblock %}
    </div>

    <div class=\"box\">
        {% block header %}
            {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
                embed: {
                    productSetAddToCartButtonClass: productSetAddToCartButtonClass,
                },
            } only %}
                {% block embeddedData %}
                    {% set isDisabled = false %}

                    {% for product in data.data.products %}
                        {% if product.idProductConcrete is not empty and product.available %}
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][sku]\" class=\"{{ data.config.jsName }}__product-sku-hidden-input\" value=\"{{ product.sku }}\">
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                        {% endif %}

                        {% if product.idProductConcrete is empty %}
                            {% set isDisabled = true %}
                        {% endif %}
                    {% endfor %}

                    {% if (data.data.products | length) %}
                        <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                            {{ 'product.set.detail.add-all-to-cart' | trans }}
                        </button>
                    {% endif %}

                    {% block title %}
                        <h5>{{ 'product.set.detail.set-contents' | trans }}</h5>
                    {% endblock %}
                {% endblock %}
            {% endwidget %}

            <hr class=\"box__separator\">
            {% block description %}
                {% if data.description %}
                    {% block descriptionInner %}
                        <h6>{{ 'product.attribute.long_description' | trans }}</h6>
                        <p>{{ data.description }}</p>
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    </div>

    {% block productSet %}
        {% if (data.products | length) %}
            <form method=\"GET\">
                <div class=\"grid grid--stretch\">
                    {% for product in data.products %}
                        <div class=\"col col--sm-12 col--lg-4\">
                            {% embed molecule('product-item') with {
                                class: 'box--stretch ' ~ config.jsName ~ '__product-item',
                                data: {
                                    product: product,
                                    sku: '',
                                },
                                embed: {
                                    optionResetUrls: data.optionResetUrls[product.idProductAbstract] ?? [],
                                },
                            } only %}
                                {% block content %}
                                    {{ parent() }}
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
                                            optionResetUrls: embed.optionResetUrls,
                                        },
                                    } only %}
                                        {% block variant %}
                                            <li class=\"list__item\">
                                                {% include molecule('variant', 'ProductDetailPage') with {
                                                    data: {
                                                        name: name,
                                                        formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                        values: values,
                                                        selectedValue: selectedValue,
                                                        label: ('product.attribute.' ~ name) | trans,
                                                        isAvailable: isAvailable,
                                                        optionResetUrl: embed.optionResetUrls[name] ?? '',
                                                    },
                                                } only %}
                                            </li>
                                        {% endblock %}
                                    {% endembed %}

                                    {% if isNotAvailable %}
                                        <p>
                                            <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                        </p>
                                    {% endif %}
                                {% endblock %}

                                {% block actions %}
                                    {% set isDisabled = not data.product.idProductConcrete or not data.product.available %}

                                    {% set buttonContent %}
                                        {% include atom('icon') with {
                                            data: {
                                                name: 'cart-plus',
                                            },
                                        } only %}
                                        {{- 'page.detail.add-to-cart' | trans -}}
                                    {% endset %}

                                    {% if isDisabled %}
                                        <button type=\"button\" class=\"button button--expand\" disabled>
                                            {{- buttonContent -}}
                                        </button>
                                    {% else %}
                                        {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] with {
                                            embed: {
                                                buttonContent: buttonContent,
                                            },
                                        } only %}
                                            {% block body %}
                                                {% set productSku = data.product.sku %}
                                                {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                {% set tokenField = data.form._token.vars %}

                                                {% embed molecule('remote-form-submit') with {
                                                    data: {
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
                                                    embed: {
                                                        buttonContent: embed.buttonContent,
                                                    },
                                                } only %}
                                                    {% block innerSubmitActionContent %}
                                                        {{- embed.buttonContent -}}
                                                    {% endblock %}
                                                {% endembed %}
                                            {% endblock %}
                                        {% endwidget %}
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    {% endfor %}
                </div>
            </form>
        {% else %}
            <div class=\"box\">
                {{ 'product.set.detail.no-products' | trans }}
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_472950bccea668d156568c65ddd36e58ef2d4a3126def1ffb0b5179fbbc8ab7a___1543680303 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'actions' => [$this, 'block_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 94
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-item"]), "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 94);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 104
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "                                    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
                                    ";
        // line 106
        $context["isNotAvailable"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 106, $this->source); })()), "product", [], "any", false, false, false, 106), "idProductConcrete", [], "any", false, false, false, 106) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 106, $this->source); })()), "product", [], "any", false, false, false, 106), "available", [], "any", false, false, false, 106));
        // line 107
        echo "
                                    ";
        // line 108
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 108, "704476622");
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display(twig_to_array(["data" => ["superAttributes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 110
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 110, $this->source); })()), "product", [], "any", false, false, false, 110), "attributeMap", [], "any", false, false, false, 110), "superAttributes", [], "any", false, false, false, 110), "selectedAttributes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 111
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })()), "product", [], "any", false, false, false, 111), "selectedAttributes", [], "any", false, false, false, 111), "availableAttributes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 112
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "product", [], "any", false, false, false, 112), "availableAttributes", [], "any", false, false, false, 112), "useExternalForm" => true], "embed" => ["product" => twig_get_attribute($this->env, $this->source,             // line 116
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 116, $this->source); })()), "product", [], "any", false, false, false, 116), "optionResetUrls" => twig_get_attribute($this->env, $this->source,             // line 117
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 117, $this->source); })()), "optionResetUrls", [], "any", false, false, false, 117)]]));
        }
        // line 136
        echo "
                                    ";
        // line 137
        if ((isset($context["isNotAvailable"]) || array_key_exists("isNotAvailable", $context) ? $context["isNotAvailable"] : (function () { throw new RuntimeError('Variable "isNotAvailable" does not exist.', 137, $this->source); })())) {
            // line 138
            echo "                                        <p>
                                            <strong>";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.detail.out_of_stock"), "html", null, true);
            echo "</strong>
                                        </p>
                                    ";
        }
        // line 142
        echo "                                ";
    }

    // line 144
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                                    ";
        $context["isDisabled"] = ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 145, $this->source); })()), "product", [], "any", false, false, false, 145), "idProductConcrete", [], "any", false, false, false, 145) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 145, $this->source); })()), "product", [], "any", false, false, false, 145), "available", [], "any", false, false, false, 145));
        // line 146
        echo "
                                    ";
        // line 147
        ob_start();
        // line 148
        echo "                                        ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 148)->display(twig_to_array(["data" => ["name" => "cart-plus"]]));
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.detail.add-to-cart"), "html", null, true);
        $context["buttonContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 155
        echo "
                                    ";
        // line 156
        if ((isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 156, $this->source); })())) {
            // line 157
            echo "                                        <button type=\"button\" class=\"button button--expand\" disabled>";
            // line 158
            echo twig_escape_filter($this->env, (isset($context["buttonContent"]) || array_key_exists("buttonContent", $context) ? $context["buttonContent"] : (function () { throw new RuntimeError('Variable "buttonContent" does not exist.', 158, $this->source); })()), "html", null, true);
            // line 159
            echo "</button>
                                    ";
        } else {
            // line 161
            echo "                                        ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AddToCartFormWidget", [0 => (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 161, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 161, $this->source); })()), "product", [], "any", false, false, false, 161), 2 => (isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 161, $this->source); })())])) {
                $this->loadTemplate("@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 161, 1743831579)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["embed" => ["buttonContent" =>                 // line 163
(isset($context["buttonContent"]) || array_key_exists("buttonContent", $context) ? $context["buttonContent"] : (function () { throw new RuntimeError('Variable "buttonContent" does not exist.', 163, $this->source); })())]]));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 196
            echo "                                    ";
        }
        // line 197
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1183 => 197,  1180 => 196,  1177 => 163,  1174 => 161,  1170 => 159,  1168 => 158,  1166 => 157,  1164 => 156,  1161 => 155,  1158 => 153,  1155 => 148,  1153 => 147,  1150 => 146,  1147 => 145,  1143 => 144,  1139 => 142,  1133 => 139,  1130 => 138,  1128 => 137,  1125 => 136,  1122 => 117,  1121 => 116,  1120 => 112,  1119 => 111,  1118 => 110,  1110 => 108,  1107 => 107,  1105 => 106,  1100 => 105,  1096 => 104,  1086 => 94,  828 => 71,  824 => 70,  820 => 73,  818 => 70,  815 => 69,  809 => 66,  802 => 65,  800 => 64,  797 => 63,  783 => 62,  780 => 61,  777 => 60,  775 => 59,  772 => 58,  767 => 56,  758 => 55,  755 => 54,  738 => 53,  735 => 52,  732 => 51,  728 => 50,  718 => 45,  462 => 37,  460 => 31,  459 => 28,  456 => 27,  452 => 26,  442 => 21,  188 => 208,  182 => 205,  179 => 204,  174 => 201,  167 => 199,  165 => 101,  164 => 97,  163 => 95,  162 => 94,  159 => 93,  155 => 92,  151 => 90,  148 => 89,  144 => 88,  138 => 81,  133 => 80,  129 => 79,  125 => 84,  122 => 83,  119 => 79,  116 => 78,  112 => 77,  108 => 85,  106 => 77,  102 => 75,  99 => 47,  96 => 45,  92 => 44,  88 => 40,  86 => 23,  84 => 21,  80 => 20,  76 => 88,  72 => 86,  70 => 44,  65 => 41,  63 => 20,  60 => 19,  56 => 18,  52 => 1,  50 => 16,  49 => 10,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-set-details',
    tag: 'product-set-details',
} %}

{% define data = {
    name: '',
    products: required,
    description: '',
    images: [],
    optionResetUrls: [],
} %}

{% set productSetAddToCartButtonClass = 'float-right' %}

{% block body %}
    <div class=\"box\">
        {% block carousel %}
            {% embed molecule('simple-carousel') with {
                data: {
                    slides: data.images,
                },
            } only %}
                {% block slide %}
                    <div class=\"text-center\">
                        {% include molecule('lazy-image') with {
                            modifiers: ['thumbnail', 'bigger'],
                            data: {
                                imageSrc: slide.externalUrlLarge,
                                extraAttributes: {
                                    itemprop: 'image',
                                },
                            },
                        } only %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endblock %}
    </div>

    <div class=\"box\">
        {% block header %}
            {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
                embed: {
                    productSetAddToCartButtonClass: productSetAddToCartButtonClass,
                },
            } only %}
                {% block embeddedData %}
                    {% set isDisabled = false %}

                    {% for product in data.data.products %}
                        {% if product.idProductConcrete is not empty and product.available %}
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][sku]\" class=\"{{ data.config.jsName }}__product-sku-hidden-input\" value=\"{{ product.sku }}\">
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                        {% endif %}

                        {% if product.idProductConcrete is empty %}
                            {% set isDisabled = true %}
                        {% endif %}
                    {% endfor %}

                    {% if (data.data.products | length) %}
                        <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                            {{ 'product.set.detail.add-all-to-cart' | trans }}
                        </button>
                    {% endif %}

                    {% block title %}
                        <h5>{{ 'product.set.detail.set-contents' | trans }}</h5>
                    {% endblock %}
                {% endblock %}
            {% endwidget %}

            <hr class=\"box__separator\">
            {% block description %}
                {% if data.description %}
                    {% block descriptionInner %}
                        <h6>{{ 'product.attribute.long_description' | trans }}</h6>
                        <p>{{ data.description }}</p>
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    </div>

    {% block productSet %}
        {% if (data.products | length) %}
            <form method=\"GET\">
                <div class=\"grid grid--stretch\">
                    {% for product in data.products %}
                        <div class=\"col col--sm-12 col--lg-4\">
                            {% embed molecule('product-item') with {
                                class: 'box--stretch ' ~ config.jsName ~ '__product-item',
                                data: {
                                    product: product,
                                    sku: '',
                                },
                                embed: {
                                    optionResetUrls: data.optionResetUrls[product.idProductAbstract] ?? [],
                                },
                            } only %}
                                {% block content %}
                                    {{ parent() }}
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
                                            optionResetUrls: embed.optionResetUrls,
                                        },
                                    } only %}
                                        {% block variant %}
                                            <li class=\"list__item\">
                                                {% include molecule('variant', 'ProductDetailPage') with {
                                                    data: {
                                                        name: name,
                                                        formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                        values: values,
                                                        selectedValue: selectedValue,
                                                        label: ('product.attribute.' ~ name) | trans,
                                                        isAvailable: isAvailable,
                                                        optionResetUrl: embed.optionResetUrls[name] ?? '',
                                                    },
                                                } only %}
                                            </li>
                                        {% endblock %}
                                    {% endembed %}

                                    {% if isNotAvailable %}
                                        <p>
                                            <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                        </p>
                                    {% endif %}
                                {% endblock %}

                                {% block actions %}
                                    {% set isDisabled = not data.product.idProductConcrete or not data.product.available %}

                                    {% set buttonContent %}
                                        {% include atom('icon') with {
                                            data: {
                                                name: 'cart-plus',
                                            },
                                        } only %}
                                        {{- 'page.detail.add-to-cart' | trans -}}
                                    {% endset %}

                                    {% if isDisabled %}
                                        <button type=\"button\" class=\"button button--expand\" disabled>
                                            {{- buttonContent -}}
                                        </button>
                                    {% else %}
                                        {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] with {
                                            embed: {
                                                buttonContent: buttonContent,
                                            },
                                        } only %}
                                            {% block body %}
                                                {% set productSku = data.product.sku %}
                                                {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                {% set tokenField = data.form._token.vars %}

                                                {% embed molecule('remote-form-submit') with {
                                                    data: {
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
                                                    embed: {
                                                        buttonContent: embed.buttonContent,
                                                    },
                                                } only %}
                                                    {% block innerSubmitActionContent %}
                                                        {{- embed.buttonContent -}}
                                                    {% endblock %}
                                                {% endembed %}
                                            {% endblock %}
                                        {% endwidget %}
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    {% endfor %}
                </div>
            </form>
        {% else %}
            <div class=\"box\">
                {{ 'product.set.detail.no-products' | trans }}
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_472950bccea668d156568c65ddd36e58ef2d4a3126def1ffb0b5179fbbc8ab7a___704476622 extends Template
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
        // line 108
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["variant-configurator", "ProductDetailPage"]), "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 108);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 120
    public function block_variant($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "                                            <li class=\"list__item\">
                                                ";
        // line 122
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["variant", "ProductDetailPage"]), "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 122)->display(twig_to_array(["data" => ["name" =>         // line 124
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 124, $this->source); })()), "formName" => (((("attributes[" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 125
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 125, $this->source); })()), "product", [], "any", false, false, false, 125), "idProductAbstract", [], "any", false, false, false, 125)) . "][") . (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 125, $this->source); })())) . "]"), "values" =>         // line 126
(isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 126, $this->source); })()), "selectedValue" =>         // line 127
(isset($context["selectedValue"]) || array_key_exists("selectedValue", $context) ? $context["selectedValue"] : (function () { throw new RuntimeError('Variable "selectedValue" does not exist.', 127, $this->source); })()), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.attribute." .         // line 128
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 128, $this->source); })()))), "isAvailable" =>         // line 129
(isset($context["isAvailable"]) || array_key_exists("isAvailable", $context) ? $context["isAvailable"] : (function () { throw new RuntimeError('Variable "isAvailable" does not exist.', 129, $this->source); })()), "optionResetUrl" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 130
($context["embed"] ?? null), "optionResetUrls", [], "any", false, true, false, 130), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 130, $this->source); })()), [], "array", true, true, false, 130) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["embed"] ?? null), "optionResetUrls", [], "any", false, true, false, 130), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 130, $this->source); })()), [], "array", false, false, false, 130)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["embed"] ?? null), "optionResetUrls", [], "any", false, true, false, 130), (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 130, $this->source); })()), [], "array", false, false, false, 130)) : (""))]]));
        // line 133
        echo "                                            </li>
                                        ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1463 => 133,  1461 => 130,  1460 => 129,  1459 => 128,  1458 => 127,  1457 => 126,  1456 => 125,  1455 => 124,  1454 => 122,  1451 => 121,  1447 => 120,  1437 => 108,  1183 => 197,  1180 => 196,  1177 => 163,  1174 => 161,  1170 => 159,  1168 => 158,  1166 => 157,  1164 => 156,  1161 => 155,  1158 => 153,  1155 => 148,  1153 => 147,  1150 => 146,  1147 => 145,  1143 => 144,  1139 => 142,  1133 => 139,  1130 => 138,  1128 => 137,  1125 => 136,  1122 => 117,  1121 => 116,  1120 => 112,  1119 => 111,  1118 => 110,  1110 => 108,  1107 => 107,  1105 => 106,  1100 => 105,  1096 => 104,  1086 => 94,  828 => 71,  824 => 70,  820 => 73,  818 => 70,  815 => 69,  809 => 66,  802 => 65,  800 => 64,  797 => 63,  783 => 62,  780 => 61,  777 => 60,  775 => 59,  772 => 58,  767 => 56,  758 => 55,  755 => 54,  738 => 53,  735 => 52,  732 => 51,  728 => 50,  718 => 45,  462 => 37,  460 => 31,  459 => 28,  456 => 27,  452 => 26,  442 => 21,  188 => 208,  182 => 205,  179 => 204,  174 => 201,  167 => 199,  165 => 101,  164 => 97,  163 => 95,  162 => 94,  159 => 93,  155 => 92,  151 => 90,  148 => 89,  144 => 88,  138 => 81,  133 => 80,  129 => 79,  125 => 84,  122 => 83,  119 => 79,  116 => 78,  112 => 77,  108 => 85,  106 => 77,  102 => 75,  99 => 47,  96 => 45,  92 => 44,  88 => 40,  86 => 23,  84 => 21,  80 => 20,  76 => 88,  72 => 86,  70 => 44,  65 => 41,  63 => 20,  60 => 19,  56 => 18,  52 => 1,  50 => 16,  49 => 10,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-set-details',
    tag: 'product-set-details',
} %}

{% define data = {
    name: '',
    products: required,
    description: '',
    images: [],
    optionResetUrls: [],
} %}

{% set productSetAddToCartButtonClass = 'float-right' %}

{% block body %}
    <div class=\"box\">
        {% block carousel %}
            {% embed molecule('simple-carousel') with {
                data: {
                    slides: data.images,
                },
            } only %}
                {% block slide %}
                    <div class=\"text-center\">
                        {% include molecule('lazy-image') with {
                            modifiers: ['thumbnail', 'bigger'],
                            data: {
                                imageSrc: slide.externalUrlLarge,
                                extraAttributes: {
                                    itemprop: 'image',
                                },
                            },
                        } only %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endblock %}
    </div>

    <div class=\"box\">
        {% block header %}
            {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
                embed: {
                    productSetAddToCartButtonClass: productSetAddToCartButtonClass,
                },
            } only %}
                {% block embeddedData %}
                    {% set isDisabled = false %}

                    {% for product in data.data.products %}
                        {% if product.idProductConcrete is not empty and product.available %}
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][sku]\" class=\"{{ data.config.jsName }}__product-sku-hidden-input\" value=\"{{ product.sku }}\">
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                        {% endif %}

                        {% if product.idProductConcrete is empty %}
                            {% set isDisabled = true %}
                        {% endif %}
                    {% endfor %}

                    {% if (data.data.products | length) %}
                        <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                            {{ 'product.set.detail.add-all-to-cart' | trans }}
                        </button>
                    {% endif %}

                    {% block title %}
                        <h5>{{ 'product.set.detail.set-contents' | trans }}</h5>
                    {% endblock %}
                {% endblock %}
            {% endwidget %}

            <hr class=\"box__separator\">
            {% block description %}
                {% if data.description %}
                    {% block descriptionInner %}
                        <h6>{{ 'product.attribute.long_description' | trans }}</h6>
                        <p>{{ data.description }}</p>
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    </div>

    {% block productSet %}
        {% if (data.products | length) %}
            <form method=\"GET\">
                <div class=\"grid grid--stretch\">
                    {% for product in data.products %}
                        <div class=\"col col--sm-12 col--lg-4\">
                            {% embed molecule('product-item') with {
                                class: 'box--stretch ' ~ config.jsName ~ '__product-item',
                                data: {
                                    product: product,
                                    sku: '',
                                },
                                embed: {
                                    optionResetUrls: data.optionResetUrls[product.idProductAbstract] ?? [],
                                },
                            } only %}
                                {% block content %}
                                    {{ parent() }}
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
                                            optionResetUrls: embed.optionResetUrls,
                                        },
                                    } only %}
                                        {% block variant %}
                                            <li class=\"list__item\">
                                                {% include molecule('variant', 'ProductDetailPage') with {
                                                    data: {
                                                        name: name,
                                                        formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                        values: values,
                                                        selectedValue: selectedValue,
                                                        label: ('product.attribute.' ~ name) | trans,
                                                        isAvailable: isAvailable,
                                                        optionResetUrl: embed.optionResetUrls[name] ?? '',
                                                    },
                                                } only %}
                                            </li>
                                        {% endblock %}
                                    {% endembed %}

                                    {% if isNotAvailable %}
                                        <p>
                                            <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                        </p>
                                    {% endif %}
                                {% endblock %}

                                {% block actions %}
                                    {% set isDisabled = not data.product.idProductConcrete or not data.product.available %}

                                    {% set buttonContent %}
                                        {% include atom('icon') with {
                                            data: {
                                                name: 'cart-plus',
                                            },
                                        } only %}
                                        {{- 'page.detail.add-to-cart' | trans -}}
                                    {% endset %}

                                    {% if isDisabled %}
                                        <button type=\"button\" class=\"button button--expand\" disabled>
                                            {{- buttonContent -}}
                                        </button>
                                    {% else %}
                                        {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] with {
                                            embed: {
                                                buttonContent: buttonContent,
                                            },
                                        } only %}
                                            {% block body %}
                                                {% set productSku = data.product.sku %}
                                                {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                {% set tokenField = data.form._token.vars %}

                                                {% embed molecule('remote-form-submit') with {
                                                    data: {
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
                                                    embed: {
                                                        buttonContent: embed.buttonContent,
                                                    },
                                                } only %}
                                                    {% block innerSubmitActionContent %}
                                                        {{- embed.buttonContent -}}
                                                    {% endblock %}
                                                {% endembed %}
                                            {% endblock %}
                                        {% endwidget %}
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    {% endfor %}
                </div>
            </form>
        {% else %}
            <div class=\"box\">
                {{ 'product.set.detail.no-products' | trans }}
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_472950bccea668d156568c65ddd36e58ef2d4a3126def1ffb0b5179fbbc8ab7a___1743831579 extends Template
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
        // line 161
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 161, $this->source); })()), "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 161);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 166
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        echo "                                                ";
        $context["productSku"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 167, $this->source); })()), "product", [], "any", false, false, false, 167), "sku", [], "any", false, false, false, 167);
        // line 168
        echo "                                                ";
        $context["formAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart/add", ["sku" => (isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 168, $this->source); })())]);
        // line 169
        echo "                                                ";
        $context["tokenField"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 169, $this->source); })()), "form", [], "any", false, false, false, 169), "_token", [], "any", false, false, false, 169), "vars", [], "any", false, false, false, 169);
        // line 170
        echo "
                                                ";
        // line 171
        $this->loadTemplate("@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 171, "795168896")->display(twig_to_array(["data" => ["buttonClass" => (("button button--expand " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 173
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 173, $this->source); })()), "config", [], "any", false, false, false, 173), "jsName", [], "any", false, false, false, 173)) . "__button-add-to-cart"), "buttonExtraAttributes" => ["data-form-action" =>         // line 175
(isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 175, $this->source); })()), "data-init-single-click" => true, "data-qa" => "add-to-cart-button"]], "attributes" => ["form-name" => ("addToCartForm_" .         // line 181
(isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 181, $this->source); })())), "form-action" =>         // line 182
(isset($context["formAction"]) || array_key_exists("formAction", $context) ? $context["formAction"] : (function () { throw new RuntimeError('Variable "formAction" does not exist.', 182, $this->source); })()), "field-name" => twig_get_attribute($this->env, $this->source,         // line 183
(isset($context["tokenField"]) || array_key_exists("tokenField", $context) ? $context["tokenField"] : (function () { throw new RuntimeError('Variable "tokenField" does not exist.', 183, $this->source); })()), "full_name", [], "any", false, false, false, 183), "field-value" => twig_get_attribute($this->env, $this->source,         // line 184
(isset($context["tokenField"]) || array_key_exists("tokenField", $context) ? $context["tokenField"] : (function () { throw new RuntimeError('Variable "tokenField" does not exist.', 184, $this->source); })()), "value", [], "any", false, false, false, 184)], "embed" => ["buttonContent" => twig_get_attribute($this->env, $this->source,         // line 187
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 187, $this->source); })()), "buttonContent", [], "any", false, false, false, 187)]]));
        // line 194
        echo "                                            ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1753 => 194,  1751 => 187,  1750 => 184,  1749 => 183,  1748 => 182,  1747 => 181,  1746 => 175,  1745 => 173,  1744 => 171,  1741 => 170,  1738 => 169,  1735 => 168,  1732 => 167,  1728 => 166,  1718 => 161,  1463 => 133,  1461 => 130,  1460 => 129,  1459 => 128,  1458 => 127,  1457 => 126,  1456 => 125,  1455 => 124,  1454 => 122,  1451 => 121,  1447 => 120,  1437 => 108,  1183 => 197,  1180 => 196,  1177 => 163,  1174 => 161,  1170 => 159,  1168 => 158,  1166 => 157,  1164 => 156,  1161 => 155,  1158 => 153,  1155 => 148,  1153 => 147,  1150 => 146,  1147 => 145,  1143 => 144,  1139 => 142,  1133 => 139,  1130 => 138,  1128 => 137,  1125 => 136,  1122 => 117,  1121 => 116,  1120 => 112,  1119 => 111,  1118 => 110,  1110 => 108,  1107 => 107,  1105 => 106,  1100 => 105,  1096 => 104,  1086 => 94,  828 => 71,  824 => 70,  820 => 73,  818 => 70,  815 => 69,  809 => 66,  802 => 65,  800 => 64,  797 => 63,  783 => 62,  780 => 61,  777 => 60,  775 => 59,  772 => 58,  767 => 56,  758 => 55,  755 => 54,  738 => 53,  735 => 52,  732 => 51,  728 => 50,  718 => 45,  462 => 37,  460 => 31,  459 => 28,  456 => 27,  452 => 26,  442 => 21,  188 => 208,  182 => 205,  179 => 204,  174 => 201,  167 => 199,  165 => 101,  164 => 97,  163 => 95,  162 => 94,  159 => 93,  155 => 92,  151 => 90,  148 => 89,  144 => 88,  138 => 81,  133 => 80,  129 => 79,  125 => 84,  122 => 83,  119 => 79,  116 => 78,  112 => 77,  108 => 85,  106 => 77,  102 => 75,  99 => 47,  96 => 45,  92 => 44,  88 => 40,  86 => 23,  84 => 21,  80 => 20,  76 => 88,  72 => 86,  70 => 44,  65 => 41,  63 => 20,  60 => 19,  56 => 18,  52 => 1,  50 => 16,  49 => 10,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-set-details',
    tag: 'product-set-details',
} %}

{% define data = {
    name: '',
    products: required,
    description: '',
    images: [],
    optionResetUrls: [],
} %}

{% set productSetAddToCartButtonClass = 'float-right' %}

{% block body %}
    <div class=\"box\">
        {% block carousel %}
            {% embed molecule('simple-carousel') with {
                data: {
                    slides: data.images,
                },
            } only %}
                {% block slide %}
                    <div class=\"text-center\">
                        {% include molecule('lazy-image') with {
                            modifiers: ['thumbnail', 'bigger'],
                            data: {
                                imageSrc: slide.externalUrlLarge,
                                extraAttributes: {
                                    itemprop: 'image',
                                },
                            },
                        } only %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endblock %}
    </div>

    <div class=\"box\">
        {% block header %}
            {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
                embed: {
                    productSetAddToCartButtonClass: productSetAddToCartButtonClass,
                },
            } only %}
                {% block embeddedData %}
                    {% set isDisabled = false %}

                    {% for product in data.data.products %}
                        {% if product.idProductConcrete is not empty and product.available %}
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][sku]\" class=\"{{ data.config.jsName }}__product-sku-hidden-input\" value=\"{{ product.sku }}\">
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                        {% endif %}

                        {% if product.idProductConcrete is empty %}
                            {% set isDisabled = true %}
                        {% endif %}
                    {% endfor %}

                    {% if (data.data.products | length) %}
                        <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                            {{ 'product.set.detail.add-all-to-cart' | trans }}
                        </button>
                    {% endif %}

                    {% block title %}
                        <h5>{{ 'product.set.detail.set-contents' | trans }}</h5>
                    {% endblock %}
                {% endblock %}
            {% endwidget %}

            <hr class=\"box__separator\">
            {% block description %}
                {% if data.description %}
                    {% block descriptionInner %}
                        <h6>{{ 'product.attribute.long_description' | trans }}</h6>
                        <p>{{ data.description }}</p>
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    </div>

    {% block productSet %}
        {% if (data.products | length) %}
            <form method=\"GET\">
                <div class=\"grid grid--stretch\">
                    {% for product in data.products %}
                        <div class=\"col col--sm-12 col--lg-4\">
                            {% embed molecule('product-item') with {
                                class: 'box--stretch ' ~ config.jsName ~ '__product-item',
                                data: {
                                    product: product,
                                    sku: '',
                                },
                                embed: {
                                    optionResetUrls: data.optionResetUrls[product.idProductAbstract] ?? [],
                                },
                            } only %}
                                {% block content %}
                                    {{ parent() }}
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
                                            optionResetUrls: embed.optionResetUrls,
                                        },
                                    } only %}
                                        {% block variant %}
                                            <li class=\"list__item\">
                                                {% include molecule('variant', 'ProductDetailPage') with {
                                                    data: {
                                                        name: name,
                                                        formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                        values: values,
                                                        selectedValue: selectedValue,
                                                        label: ('product.attribute.' ~ name) | trans,
                                                        isAvailable: isAvailable,
                                                        optionResetUrl: embed.optionResetUrls[name] ?? '',
                                                    },
                                                } only %}
                                            </li>
                                        {% endblock %}
                                    {% endembed %}

                                    {% if isNotAvailable %}
                                        <p>
                                            <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                        </p>
                                    {% endif %}
                                {% endblock %}

                                {% block actions %}
                                    {% set isDisabled = not data.product.idProductConcrete or not data.product.available %}

                                    {% set buttonContent %}
                                        {% include atom('icon') with {
                                            data: {
                                                name: 'cart-plus',
                                            },
                                        } only %}
                                        {{- 'page.detail.add-to-cart' | trans -}}
                                    {% endset %}

                                    {% if isDisabled %}
                                        <button type=\"button\" class=\"button button--expand\" disabled>
                                            {{- buttonContent -}}
                                        </button>
                                    {% else %}
                                        {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] with {
                                            embed: {
                                                buttonContent: buttonContent,
                                            },
                                        } only %}
                                            {% block body %}
                                                {% set productSku = data.product.sku %}
                                                {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                {% set tokenField = data.form._token.vars %}

                                                {% embed molecule('remote-form-submit') with {
                                                    data: {
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
                                                    embed: {
                                                        buttonContent: embed.buttonContent,
                                                    },
                                                } only %}
                                                    {% block innerSubmitActionContent %}
                                                        {{- embed.buttonContent -}}
                                                    {% endblock %}
                                                {% endembed %}
                                            {% endblock %}
                                        {% endwidget %}
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    {% endfor %}
                </div>
            </form>
        {% else %}
            <div class=\"box\">
                {{ 'product.set.detail.no-products' | trans }}
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}


/* @@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig */
class __TwigTemplate_472950bccea668d156568c65ddd36e58ef2d4a3126def1ffb0b5179fbbc8ab7a___795168896 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'innerSubmitActionContent' => [$this, 'block_innerSubmitActionContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 171
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["remote-form-submit"]), "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", 171);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 190
    public function block_innerSubmitActionContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 191, $this->source); })()), "buttonContent", [], "any", false, false, false, 191), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2021 => 191,  2017 => 190,  2007 => 171,  1753 => 194,  1751 => 187,  1750 => 184,  1749 => 183,  1748 => 182,  1747 => 181,  1746 => 175,  1745 => 173,  1744 => 171,  1741 => 170,  1738 => 169,  1735 => 168,  1732 => 167,  1728 => 166,  1718 => 161,  1463 => 133,  1461 => 130,  1460 => 129,  1459 => 128,  1458 => 127,  1457 => 126,  1456 => 125,  1455 => 124,  1454 => 122,  1451 => 121,  1447 => 120,  1437 => 108,  1183 => 197,  1180 => 196,  1177 => 163,  1174 => 161,  1170 => 159,  1168 => 158,  1166 => 157,  1164 => 156,  1161 => 155,  1158 => 153,  1155 => 148,  1153 => 147,  1150 => 146,  1147 => 145,  1143 => 144,  1139 => 142,  1133 => 139,  1130 => 138,  1128 => 137,  1125 => 136,  1122 => 117,  1121 => 116,  1120 => 112,  1119 => 111,  1118 => 110,  1110 => 108,  1107 => 107,  1105 => 106,  1100 => 105,  1096 => 104,  1086 => 94,  828 => 71,  824 => 70,  820 => 73,  818 => 70,  815 => 69,  809 => 66,  802 => 65,  800 => 64,  797 => 63,  783 => 62,  780 => 61,  777 => 60,  775 => 59,  772 => 58,  767 => 56,  758 => 55,  755 => 54,  738 => 53,  735 => 52,  732 => 51,  728 => 50,  718 => 45,  462 => 37,  460 => 31,  459 => 28,  456 => 27,  452 => 26,  442 => 21,  188 => 208,  182 => 205,  179 => 204,  174 => 201,  167 => 199,  165 => 101,  164 => 97,  163 => 95,  162 => 94,  159 => 93,  155 => 92,  151 => 90,  148 => 89,  144 => 88,  138 => 81,  133 => 80,  129 => 79,  125 => 84,  122 => 83,  119 => 79,  116 => 78,  112 => 77,  108 => 85,  106 => 77,  102 => 75,  99 => 47,  96 => 45,  92 => 44,  88 => 40,  86 => 23,  84 => 21,  80 => 20,  76 => 88,  72 => 86,  70 => 44,  65 => 41,  63 => 20,  60 => 19,  56 => 18,  52 => 1,  50 => 16,  49 => 10,  48 => 8,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-set-details',
    tag: 'product-set-details',
} %}

{% define data = {
    name: '',
    products: required,
    description: '',
    images: [],
    optionResetUrls: [],
} %}

{% set productSetAddToCartButtonClass = 'float-right' %}

{% block body %}
    <div class=\"box\">
        {% block carousel %}
            {% embed molecule('simple-carousel') with {
                data: {
                    slides: data.images,
                },
            } only %}
                {% block slide %}
                    <div class=\"text-center\">
                        {% include molecule('lazy-image') with {
                            modifiers: ['thumbnail', 'bigger'],
                            data: {
                                imageSrc: slide.externalUrlLarge,
                                extraAttributes: {
                                    itemprop: 'image',
                                },
                            },
                        } only %}
                    </div>
                {% endblock %}
            {% endembed %}
        {% endblock %}
    </div>

    <div class=\"box\">
        {% block header %}
            {% widget 'AddItemsFormWidget' args [config, data, data.products] with {
                embed: {
                    productSetAddToCartButtonClass: productSetAddToCartButtonClass,
                },
            } only %}
                {% block embeddedData %}
                    {% set isDisabled = false %}

                    {% for product in data.data.products %}
                        {% if product.idProductConcrete is not empty and product.available %}
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][sku]\" class=\"{{ data.config.jsName }}__product-sku-hidden-input\" value=\"{{ product.sku }}\">
                            <input type=\"hidden\" name=\"items[{{ loop.index }}][quantity]\" value=\"1\">
                        {% endif %}

                        {% if product.idProductConcrete is empty %}
                            {% set isDisabled = true %}
                        {% endif %}
                    {% endfor %}

                    {% if (data.data.products | length) %}
                        <button class=\"button {{ embed.productSetAddToCartButtonClass }}\" {{ isDisabled ? 'disabled' : 'data-init-single-click' }}>
                            {{ 'product.set.detail.add-all-to-cart' | trans }}
                        </button>
                    {% endif %}

                    {% block title %}
                        <h5>{{ 'product.set.detail.set-contents' | trans }}</h5>
                    {% endblock %}
                {% endblock %}
            {% endwidget %}

            <hr class=\"box__separator\">
            {% block description %}
                {% if data.description %}
                    {% block descriptionInner %}
                        <h6>{{ 'product.attribute.long_description' | trans }}</h6>
                        <p>{{ data.description }}</p>
                    {% endblock %}
                {% endif %}
            {% endblock %}
        {% endblock %}
    </div>

    {% block productSet %}
        {% if (data.products | length) %}
            <form method=\"GET\">
                <div class=\"grid grid--stretch\">
                    {% for product in data.products %}
                        <div class=\"col col--sm-12 col--lg-4\">
                            {% embed molecule('product-item') with {
                                class: 'box--stretch ' ~ config.jsName ~ '__product-item',
                                data: {
                                    product: product,
                                    sku: '',
                                },
                                embed: {
                                    optionResetUrls: data.optionResetUrls[product.idProductAbstract] ?? [],
                                },
                            } only %}
                                {% block content %}
                                    {{ parent() }}
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
                                            optionResetUrls: embed.optionResetUrls,
                                        },
                                    } only %}
                                        {% block variant %}
                                            <li class=\"list__item\">
                                                {% include molecule('variant', 'ProductDetailPage') with {
                                                    data: {
                                                        name: name,
                                                        formName: 'attributes[' ~ embed.product.idProductAbstract ~ '][' ~ name ~ ']',
                                                        values: values,
                                                        selectedValue: selectedValue,
                                                        label: ('product.attribute.' ~ name) | trans,
                                                        isAvailable: isAvailable,
                                                        optionResetUrl: embed.optionResetUrls[name] ?? '',
                                                    },
                                                } only %}
                                            </li>
                                        {% endblock %}
                                    {% endembed %}

                                    {% if isNotAvailable %}
                                        <p>
                                            <strong>{{ 'product.detail.out_of_stock' | trans }}</strong>
                                        </p>
                                    {% endif %}
                                {% endblock %}

                                {% block actions %}
                                    {% set isDisabled = not data.product.idProductConcrete or not data.product.available %}

                                    {% set buttonContent %}
                                        {% include atom('icon') with {
                                            data: {
                                                name: 'cart-plus',
                                            },
                                        } only %}
                                        {{- 'page.detail.add-to-cart' | trans -}}
                                    {% endset %}

                                    {% if isDisabled %}
                                        <button type=\"button\" class=\"button button--expand\" disabled>
                                            {{- buttonContent -}}
                                        </button>
                                    {% else %}
                                        {% widget 'AddToCartFormWidget' args [config, data.product, isDisabled] with {
                                            embed: {
                                                buttonContent: buttonContent,
                                            },
                                        } only %}
                                            {% block body %}
                                                {% set productSku = data.product.sku %}
                                                {% set formAction = path('cart/add', {'sku': productSku}) %}
                                                {% set tokenField = data.form._token.vars %}

                                                {% embed molecule('remote-form-submit') with {
                                                    data: {
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
                                                    embed: {
                                                        buttonContent: embed.buttonContent,
                                                    },
                                                } only %}
                                                    {% block innerSubmitActionContent %}
                                                        {{- embed.buttonContent -}}
                                                    {% endblock %}
                                                {% endembed %}
                                            {% endblock %}
                                        {% endwidget %}
                                    {% endif %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    {% endfor %}
                </div>
            </form>
        {% else %}
            <div class=\"box\">
                {{ 'product.set.detail.no-products' | trans }}
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ProductSetWidget/components/organisms/product-set-details/product-set-details.twig", "/data/vendor/spryker-shop/product-set-widget/src/SprykerShop/Yves/ProductSetWidget/Theme/default/components/organisms/product-set-details/product-set-details.twig");
    }
}
