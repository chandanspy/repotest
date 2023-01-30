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

/* @ProductSetDetailPage/views/set-detail/set-detail.twig */
class __TwigTemplate_a97864a4998b75c50d1a8e395ad033a9da4a8fcb035970b63a34470d003786db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageInfo' => [$this, 'block_pageInfo'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-main"]), "@ProductSetDetailPage/views/set-detail/set-detail.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["set" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "productSet", [], "any", false, false, false, 4), "views" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 5, $this->source); })()), "productViews", [], "any", false, false, false, 5), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 6, $this->source); })()), "productSet", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6), "metaTitle" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 7, $this->source); })()), "productSet", [], "any", false, false, false, 7), "metaTitle", [], "any", false, false, false, 7), "metaKeywords" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 8, $this->source); })()), "productSet", [], "any", false, false, false, 8), "metaKeywords", [], "any", false, false, false, 8), "metaDescription" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 9, $this->source); })()), "productSet", [], "any", false, false, false, 9), "metaDescription", [], "any", false, false, false, 9)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_pageInfo($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $context["images"] = [];
        // line 16
        echo "
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "set", [], "any", false, false, false, 17), "imageSets", [], "any", false, false, false, 17), "count", [], "any", false, false, false, 17)) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "set", [], "any", false, false, false, 18), "imageSets", [], "any", false, false, false, 18), 0, [], "any", false, false, false, 18), "images", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 19
                echo "            ";
                $context["images"] = twig_array_merge((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 19, $this->source); })()), [0 => ((twig_get_attribute($this->env, $this->source, $context["image"], "externalUrlLarge", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["image"], "externalUrlLarge", [], "any", false, false, false, 19), null)) : (null))]);
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@ProductSetDetailPage/views/set-detail/set-detail.twig", "@ProductSetDetailPage/views/set-detail/set-detail.twig", 23, "903842683");
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display(twig_to_array(["data" => ["title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "set", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "products" => twig_get_attribute($this->env, $this->source,             // line 26
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "views", [], "any", false, false, false, 26), "name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "set", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "description" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 28
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "set", [], "any", false, false, false, 28), "description", [], "any", false, false, false, 28), "images" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 29
($context["data"] ?? null), "set", [], "any", false, true, false, 29), "imageSets", [], "any", false, true, false, 29), 0, [], "any", false, true, false, 29), "images", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "set", [], "any", false, true, false, 29), "imageSets", [], "any", false, true, false, 29), 0, [], "any", false, true, false, 29), "images", [], "any", false, false, false, 29), [])) : ([]))], "embed" => ["title" => twig_get_attribute($this->env, $this->source,             // line 32
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "images" =>             // line 33
(isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 33, $this->source); })())]]));
        }
    }

    public function getTemplateName()
    {
        return "@ProductSetDetailPage/views/set-detail/set-detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 33,  105 => 32,  104 => 29,  103 => 28,  102 => 27,  101 => 26,  100 => 25,  92 => 23,  89 => 22,  86 => 21,  80 => 20,  77 => 19,  72 => 18,  70 => 17,  67 => 16,  64 => 15,  60 => 14,  54 => 12,  50 => 1,  49 => 9,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    set: _view.productSet,
    views: _view.productViews,
    title: _view.productSet.name,
    metaTitle: _view.productSet.metaTitle,
    metaKeywords: _view.productSet.metaKeywords,
    metaDescription: _view.productSet.metaDescription
} %}

{% block pageInfo %}{% endblock %}

{% block content %}
    {% set images = [] %}

    {% if data.set.imageSets.count %}
        {% for image in data.set.imageSets.0.images %}
            {% set images = images | merge([image.externalUrlLarge | default(null)]) %}
        {% endfor %}
    {% endif %}

    {% embed organism('product-set-details', 'ProductSetWidget') ignore missing with {
        data: {
            title: data.set.name,
            products: data.views,
            name: data.set.name,
            description: data.set.description,
            images: data.set.imageSets.0.images | default([]),
        },
        embed: {
            title: data.title,
            images: images,
        },
    } only %}
        {% block banner %}
            {% embed molecule('slick-carousel') with {
                modifiers: ['jumbotron', 'non-fixed-height'],
                attributes: {
                    'slider-config': '{
                        \"slidesToShow\": 1,
                        \"dots\": true,
                        \"autoplay\": false,
                        \"nextArrow\": false,
                        \"prevArrow\": false
                    }'
                },
                embed: {
                    title: data.title,
                    images: embed.images,
                    configName: config.name,
                },
            } only %}
                {% block slides %}
                    {% for image in embed.images %}
                        {% embed molecule('banner') with {
                            class: embed.configName,
                            data: {
                                imageUrl: image,
                                title: embed.title,
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
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductSetDetailPage/views/set-detail/set-detail.twig", "/data/src/Pyz/Yves/ProductSetDetailPage/Theme/default/views/set-detail/set-detail.twig");
    }
}


/* @ProductSetDetailPage/views/set-detail/set-detail.twig */
class __TwigTemplate_a97864a4998b75c50d1a8e395ad033a9da4a8fcb035970b63a34470d003786db___903842683 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'banner' => [$this, 'block_banner'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["product-set-details", "ProductSetWidget"]), "@ProductSetDetailPage/views/set-detail/set-detail.twig", 23);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "            ";
        $this->loadTemplate("@ProductSetDetailPage/views/set-detail/set-detail.twig", "@ProductSetDetailPage/views/set-detail/set-detail.twig", 37, "816280231")->display(twig_to_array(["modifiers" => [0 => "jumbotron", 1 => "non-fixed-height"], "attributes" => ["slider-config" => "{
                        \"slidesToShow\": 1,
                        \"dots\": true,
                        \"autoplay\": false,
                        \"nextArrow\": false,
                        \"prevArrow\": false
                    }"], "embed" => ["title" => twig_get_attribute($this->env, $this->source,         // line 49
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), "title", [], "any", false, false, false, 49), "images" => twig_get_attribute($this->env, $this->source,         // line 50
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 50, $this->source); })()), "images", [], "any", false, false, false, 50), "configName" => twig_get_attribute($this->env, $this->source,         // line 51
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51)]]));
        // line 80
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@ProductSetDetailPage/views/set-detail/set-detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 80,  258 => 51,  257 => 50,  256 => 49,  248 => 37,  244 => 36,  234 => 23,  106 => 33,  105 => 32,  104 => 29,  103 => 28,  102 => 27,  101 => 26,  100 => 25,  92 => 23,  89 => 22,  86 => 21,  80 => 20,  77 => 19,  72 => 18,  70 => 17,  67 => 16,  64 => 15,  60 => 14,  54 => 12,  50 => 1,  49 => 9,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    set: _view.productSet,
    views: _view.productViews,
    title: _view.productSet.name,
    metaTitle: _view.productSet.metaTitle,
    metaKeywords: _view.productSet.metaKeywords,
    metaDescription: _view.productSet.metaDescription
} %}

{% block pageInfo %}{% endblock %}

{% block content %}
    {% set images = [] %}

    {% if data.set.imageSets.count %}
        {% for image in data.set.imageSets.0.images %}
            {% set images = images | merge([image.externalUrlLarge | default(null)]) %}
        {% endfor %}
    {% endif %}

    {% embed organism('product-set-details', 'ProductSetWidget') ignore missing with {
        data: {
            title: data.set.name,
            products: data.views,
            name: data.set.name,
            description: data.set.description,
            images: data.set.imageSets.0.images | default([]),
        },
        embed: {
            title: data.title,
            images: images,
        },
    } only %}
        {% block banner %}
            {% embed molecule('slick-carousel') with {
                modifiers: ['jumbotron', 'non-fixed-height'],
                attributes: {
                    'slider-config': '{
                        \"slidesToShow\": 1,
                        \"dots\": true,
                        \"autoplay\": false,
                        \"nextArrow\": false,
                        \"prevArrow\": false
                    }'
                },
                embed: {
                    title: data.title,
                    images: embed.images,
                    configName: config.name,
                },
            } only %}
                {% block slides %}
                    {% for image in embed.images %}
                        {% embed molecule('banner') with {
                            class: embed.configName,
                            data: {
                                imageUrl: image,
                                title: embed.title,
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
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductSetDetailPage/views/set-detail/set-detail.twig", "/data/src/Pyz/Yves/ProductSetDetailPage/Theme/default/views/set-detail/set-detail.twig");
    }
}


/* @ProductSetDetailPage/views/set-detail/set-detail.twig */
class __TwigTemplate_a97864a4998b75c50d1a8e395ad033a9da4a8fcb035970b63a34470d003786db___816280231 extends Template
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
        // line 37
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["slick-carousel"]), "@ProductSetDetailPage/views/set-detail/set-detail.twig", 37);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 54
    public function block_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 55, $this->source); })()), "images", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 56
            echo "                        ";
            $this->loadTemplate("@ProductSetDetailPage/views/set-detail/set-detail.twig", "@ProductSetDetailPage/views/set-detail/set-detail.twig", 56, "377660726")->display(twig_to_array(["class" => twig_get_attribute($this->env, $this->source,             // line 57
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 57, $this->source); })()), "configName", [], "any", false, false, false, 57), "data" => ["imageUrl" =>             // line 59
$context["image"], "title" => twig_get_attribute($this->env, $this->source,             // line 60
(isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 60, $this->source); })()), "title", [], "any", false, false, false, 60)]]));
            // line 77
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@ProductSetDetailPage/views/set-detail/set-detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 78,  412 => 77,  410 => 60,  409 => 59,  408 => 57,  406 => 56,  401 => 55,  397 => 54,  387 => 37,  260 => 80,  258 => 51,  257 => 50,  256 => 49,  248 => 37,  244 => 36,  234 => 23,  106 => 33,  105 => 32,  104 => 29,  103 => 28,  102 => 27,  101 => 26,  100 => 25,  92 => 23,  89 => 22,  86 => 21,  80 => 20,  77 => 19,  72 => 18,  70 => 17,  67 => 16,  64 => 15,  60 => 14,  54 => 12,  50 => 1,  49 => 9,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    set: _view.productSet,
    views: _view.productViews,
    title: _view.productSet.name,
    metaTitle: _view.productSet.metaTitle,
    metaKeywords: _view.productSet.metaKeywords,
    metaDescription: _view.productSet.metaDescription
} %}

{% block pageInfo %}{% endblock %}

{% block content %}
    {% set images = [] %}

    {% if data.set.imageSets.count %}
        {% for image in data.set.imageSets.0.images %}
            {% set images = images | merge([image.externalUrlLarge | default(null)]) %}
        {% endfor %}
    {% endif %}

    {% embed organism('product-set-details', 'ProductSetWidget') ignore missing with {
        data: {
            title: data.set.name,
            products: data.views,
            name: data.set.name,
            description: data.set.description,
            images: data.set.imageSets.0.images | default([]),
        },
        embed: {
            title: data.title,
            images: images,
        },
    } only %}
        {% block banner %}
            {% embed molecule('slick-carousel') with {
                modifiers: ['jumbotron', 'non-fixed-height'],
                attributes: {
                    'slider-config': '{
                        \"slidesToShow\": 1,
                        \"dots\": true,
                        \"autoplay\": false,
                        \"nextArrow\": false,
                        \"prevArrow\": false
                    }'
                },
                embed: {
                    title: data.title,
                    images: embed.images,
                    configName: config.name,
                },
            } only %}
                {% block slides %}
                    {% for image in embed.images %}
                        {% embed molecule('banner') with {
                            class: embed.configName,
                            data: {
                                imageUrl: image,
                                title: embed.title,
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
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductSetDetailPage/views/set-detail/set-detail.twig", "/data/src/Pyz/Yves/ProductSetDetailPage/Theme/default/views/set-detail/set-detail.twig");
    }
}


/* @ProductSetDetailPage/views/set-detail/set-detail.twig */
class __TwigTemplate_a97864a4998b75c50d1a8e395ad033a9da4a8fcb035970b63a34470d003786db___377660726 extends Template
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
        // line 56
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["banner"]), "@ProductSetDetailPage/views/set-detail/set-detail.twig", 56);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 63
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo "                                <h1 class=\"title title--light title--product-set-details\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "title", [], "any", false, false, false, 64), "html", null, true);
        echo "</h1>
                                <p class=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
        echo "__text ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
        echo "__text--subtitle\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.set"), "html", null, true);
        // line 67
        echo "</p>
                            ";
    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                                ";
        $context["containerClass"] = (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 71, $this->source); })()), "name", [], "any", false, false, false, 71) . "__container grid grid--column grid--middle grid--center");
        // line 72
        echo "                                ";
        $context["contentClass"] = ((isset($context["contentClass"]) || array_key_exists("contentClass", $context) ? $context["contentClass"] : (function () { throw new RuntimeError('Variable "contentClass" does not exist.', 72, $this->source); })()) . " text-center");
        // line 73
        echo "
                                ";
        // line 74
        $this->displayParentBlock("body", $context, $blocks);
        echo "
                            ";
    }

    public function getTemplateName()
    {
        return "@ProductSetDetailPage/views/set-detail/set-detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 74,  587 => 73,  584 => 72,  581 => 71,  577 => 70,  572 => 67,  570 => 66,  565 => 65,  560 => 64,  556 => 63,  546 => 56,  418 => 78,  412 => 77,  410 => 60,  409 => 59,  408 => 57,  406 => 56,  401 => 55,  397 => 54,  387 => 37,  260 => 80,  258 => 51,  257 => 50,  256 => 49,  248 => 37,  244 => 36,  234 => 23,  106 => 33,  105 => 32,  104 => 29,  103 => 28,  102 => 27,  101 => 26,  100 => 25,  92 => 23,  89 => 22,  86 => 21,  80 => 20,  77 => 19,  72 => 18,  70 => 17,  67 => 16,  64 => 15,  60 => 14,  54 => 12,  50 => 1,  49 => 9,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    set: _view.productSet,
    views: _view.productViews,
    title: _view.productSet.name,
    metaTitle: _view.productSet.metaTitle,
    metaKeywords: _view.productSet.metaKeywords,
    metaDescription: _view.productSet.metaDescription
} %}

{% block pageInfo %}{% endblock %}

{% block content %}
    {% set images = [] %}

    {% if data.set.imageSets.count %}
        {% for image in data.set.imageSets.0.images %}
            {% set images = images | merge([image.externalUrlLarge | default(null)]) %}
        {% endfor %}
    {% endif %}

    {% embed organism('product-set-details', 'ProductSetWidget') ignore missing with {
        data: {
            title: data.set.name,
            products: data.views,
            name: data.set.name,
            description: data.set.description,
            images: data.set.imageSets.0.images | default([]),
        },
        embed: {
            title: data.title,
            images: images,
        },
    } only %}
        {% block banner %}
            {% embed molecule('slick-carousel') with {
                modifiers: ['jumbotron', 'non-fixed-height'],
                attributes: {
                    'slider-config': '{
                        \"slidesToShow\": 1,
                        \"dots\": true,
                        \"autoplay\": false,
                        \"nextArrow\": false,
                        \"prevArrow\": false
                    }'
                },
                embed: {
                    title: data.title,
                    images: embed.images,
                    configName: config.name,
                },
            } only %}
                {% block slides %}
                    {% for image in embed.images %}
                        {% embed molecule('banner') with {
                            class: embed.configName,
                            data: {
                                imageUrl: image,
                                title: embed.title,
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
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductSetDetailPage/views/set-detail/set-detail.twig", "/data/src/Pyz/Yves/ProductSetDetailPage/Theme/default/views/set-detail/set-detail.twig");
    }
}
