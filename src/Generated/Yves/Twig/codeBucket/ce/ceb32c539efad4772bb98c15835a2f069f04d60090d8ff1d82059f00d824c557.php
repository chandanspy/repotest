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

/* @ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_cd478698b2650e864340d6cb059c890bd086602d5264d3bc47309b8a44a5d43a extends Template
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
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["catalog-product", "@SprykerShop:ProductWidget"]), "@ProductWidget/views/catalog-product/catalog-product.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["productTemplate"] = call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-item"]);
        // line 5
        echo "    ";
        $context["class"] = "col col--sm-6 col--md-4 col--lg-6 col--xl-4";
        // line 6
        echo "
    ";
        // line 7
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "viewMode", [], "any", false, false, false, 7), "list"))) {
            // line 8
            echo "        ";
            $context["productTemplate"] = call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-item-list"]);
            // line 9
            echo "        ";
            $context["class"] = "col col--sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        $this->loadTemplate("@ProductWidget/views/catalog-product/catalog-product.twig", "@ProductWidget/views/catalog-product/catalog-product.twig", 12, "284559080")->display(twig_to_array(["productTemplate" =>         // line 13
(isset($context["productTemplate"]) || array_key_exists("productTemplate", $context) ? $context["productTemplate"] : (function () { throw new RuntimeError('Variable "productTemplate" does not exist.', 13, $this->source); })()), "class" =>         // line 14
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 14, $this->source); })()), "modifiers" => [0 => "catalog", 1 => "category"], "data" => ["product" => twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "product", [], "any", false, false, false, 17), "name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "product", [], "any", false, false, false, 18), "abstract_name", [], "any", false, false, false, 18), "image" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "product", [], "any", false, false, false, 19), "images", [], "any", false, false, false, 19)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "product", [], "any", false, false, false, 19), "images", [], "any", false, false, false, 19), 0, [], "any", false, false, false, 19), "external_url_small", [], "any", false, false, false, 19)) : ("")), "idProductAbstract" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "product", [], "any", false, false, false, 20), "id_product_abstract", [], "any", false, false, false, 20)]]));
    }

    public function getTemplateName()
    {
        return "@ProductWidget/views/catalog-product/catalog-product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  77 => 19,  76 => 18,  75 => 17,  74 => 14,  73 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('catalog-product', '@SprykerShop:ProductWidget') %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set class = 'col col--sm-6 col--md-4 col--lg-6 col--xl-4' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set class = 'col col--sm-12' %}
    {% endif %}

    {% embed productTemplate with {
        productTemplate: productTemplate,
        class: class,
        modifiers: ['catalog', 'category'],
        data: {
            product: data.product,
            name: data.product.abstract_name,
            image: data.product.images ? data.product.images.0.external_url_small,
            idProductAbstract: data.product.id_product_abstract,
        },
    } only %}
        {% block labels %}
            {% widget 'ProductConcreteLabelWidget' args [data.product.id_product_labels] with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block rating %}
            <div class=\"{{ config.name }}__rating\">
                {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                    data: {
                        parentJsName: config.jsName,
                        reviewCount: data.product.review_count | default(0),
                    },
                } only %}{% endwidget %}
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductWidget/views/catalog-product/catalog-product.twig", "/data/src/Pyz/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}


/* @ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_cd478698b2650e864340d6cb059c890bd086602d5264d3bc47309b8a44a5d43a___284559080 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'labels' => [$this, 'block_labels'],
            'rating' => [$this, 'block_rating'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["productTemplate"]) || array_key_exists("productTemplate", $context) ? $context["productTemplate"] : (function () { throw new RuntimeError('Variable "productTemplate" does not exist.', 12, $this->source); })()), "@ProductWidget/views/catalog-product/catalog-product.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_labels($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "            ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductConcreteLabelWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "product", [], "any", false, false, false, 24), "id_product_labels", [], "any", false, false, false, 24)])) {
            $this->loadTemplate("@ProductWidget/views/catalog-product/catalog-product.twig", "@ProductWidget/views/catalog-product/catalog-product.twig", 24, 494213066)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "jsName", [], "any", false, false, false, 26)]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 29
        echo "        ";
    }

    // line 31
    public function block_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "__rating\">
                ";
        // line 33
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductReviewDisplayWidget", [0 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 33), "rating", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 33), "rating", [], "any", false, false, false, 33), 0)) : (0))])) {
            $this->loadTemplate("@ProductWidget/views/catalog-product/catalog-product.twig", "@ProductWidget/views/catalog-product/catalog-product.twig", 33, 1663019895)->display(array_merge(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)), ["data" => ["parentJsName" => twig_get_attribute($this->env, $this->source,             // line 35
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "jsName", [], "any", false, false, false, 35), "reviewCount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 36
($context["data"] ?? null), "product", [], "any", false, true, false, 36), "review_count", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 36), "review_count", [], "any", false, false, false, 36), 0)) : (0))]]));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 39
        echo "            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@ProductWidget/views/catalog-product/catalog-product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 39,  202 => 36,  201 => 35,  199 => 33,  194 => 32,  190 => 31,  186 => 29,  183 => 26,  180 => 24,  176 => 23,  166 => 12,  78 => 20,  77 => 19,  76 => 18,  75 => 17,  74 => 14,  73 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('catalog-product', '@SprykerShop:ProductWidget') %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set class = 'col col--sm-6 col--md-4 col--lg-6 col--xl-4' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set class = 'col col--sm-12' %}
    {% endif %}

    {% embed productTemplate with {
        productTemplate: productTemplate,
        class: class,
        modifiers: ['catalog', 'category'],
        data: {
            product: data.product,
            name: data.product.abstract_name,
            image: data.product.images ? data.product.images.0.external_url_small,
            idProductAbstract: data.product.id_product_abstract,
        },
    } only %}
        {% block labels %}
            {% widget 'ProductConcreteLabelWidget' args [data.product.id_product_labels] with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block rating %}
            <div class=\"{{ config.name }}__rating\">
                {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                    data: {
                        parentJsName: config.jsName,
                        reviewCount: data.product.review_count | default(0),
                    },
                } only %}{% endwidget %}
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductWidget/views/catalog-product/catalog-product.twig", "/data/src/Pyz/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}


/* @ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_cd478698b2650e864340d6cb059c890bd086602d5264d3bc47309b8a44a5d43a___494213066 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 24, $this->source); })()), "@ProductWidget/views/catalog-product/catalog-product.twig", 24);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductWidget/views/catalog-product/catalog-product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 24,  205 => 39,  202 => 36,  201 => 35,  199 => 33,  194 => 32,  190 => 31,  186 => 29,  183 => 26,  180 => 24,  176 => 23,  166 => 12,  78 => 20,  77 => 19,  76 => 18,  75 => 17,  74 => 14,  73 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('catalog-product', '@SprykerShop:ProductWidget') %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set class = 'col col--sm-6 col--md-4 col--lg-6 col--xl-4' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set class = 'col col--sm-12' %}
    {% endif %}

    {% embed productTemplate with {
        productTemplate: productTemplate,
        class: class,
        modifiers: ['catalog', 'category'],
        data: {
            product: data.product,
            name: data.product.abstract_name,
            image: data.product.images ? data.product.images.0.external_url_small,
            idProductAbstract: data.product.id_product_abstract,
        },
    } only %}
        {% block labels %}
            {% widget 'ProductConcreteLabelWidget' args [data.product.id_product_labels] with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block rating %}
            <div class=\"{{ config.name }}__rating\">
                {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                    data: {
                        parentJsName: config.jsName,
                        reviewCount: data.product.review_count | default(0),
                    },
                } only %}{% endwidget %}
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductWidget/views/catalog-product/catalog-product.twig", "/data/src/Pyz/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}


/* @ProductWidget/views/catalog-product/catalog-product.twig */
class __TwigTemplate_cd478698b2650e864340d6cb059c890bd086602d5264d3bc47309b8a44a5d43a___1663019895 extends Template
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
        // line 33
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 33, $this->source); })()), "@ProductWidget/views/catalog-product/catalog-product.twig", 33);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductWidget/views/catalog-product/catalog-product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 33,  292 => 24,  205 => 39,  202 => 36,  201 => 35,  199 => 33,  194 => 32,  190 => 31,  186 => 29,  183 => 26,  180 => 24,  176 => 23,  166 => 12,  78 => 20,  77 => 19,  76 => 18,  75 => 17,  74 => 14,  73 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('catalog-product', '@SprykerShop:ProductWidget') %}

{% block body %}
    {% set productTemplate = molecule('product-item') %}
    {% set class = 'col col--sm-6 col--md-4 col--lg-6 col--xl-4' %}

    {% if data.viewMode == 'list' %}
        {% set productTemplate = molecule('product-item-list') %}
        {% set class = 'col col--sm-12' %}
    {% endif %}

    {% embed productTemplate with {
        productTemplate: productTemplate,
        class: class,
        modifiers: ['catalog', 'category'],
        data: {
            product: data.product,
            name: data.product.abstract_name,
            image: data.product.images ? data.product.images.0.external_url_small,
            idProductAbstract: data.product.id_product_abstract,
        },
    } only %}
        {% block labels %}
            {% widget 'ProductConcreteLabelWidget' args [data.product.id_product_labels] with {
                data: {
                    parentJsName: config.jsName,
                },
            } only %}{% endwidget %}
        {% endblock %}

        {% block rating %}
            <div class=\"{{ config.name }}__rating\">
                {% widget 'ProductReviewDisplayWidget' args [data.product.rating | default(0)] with {
                    data: {
                        parentJsName: config.jsName,
                        reviewCount: data.product.review_count | default(0),
                    },
                } only %}{% endwidget %}
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductWidget/views/catalog-product/catalog-product.twig", "/data/src/Pyz/Yves/ProductWidget/Theme/default/views/catalog-product/catalog-product.twig");
    }
}
