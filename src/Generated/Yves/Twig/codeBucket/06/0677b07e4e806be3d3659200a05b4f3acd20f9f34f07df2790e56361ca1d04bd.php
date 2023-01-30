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

/* @ProductWidget/views/cms-product-slider/cms-product-slider.twig */
class __TwigTemplate_dd61bea6de680ed64bf56d6c8d20ff0793e9d219e4032dceb3fe85f58e473a14 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ProductWidget/views/cms-product-slider/cms-product-slider.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["product" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "product", [], "any", false, false, false, 4)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->loadTemplate("@ProductWidget/views/cms-product-slider/cms-product-slider.twig", "@ProductWidget/views/cms-product-slider/cms-product-slider.twig", 8, "2114957504")->display(twig_to_array(["class" => "col col--sm-12 col--md-6 col--lg-4", "modifiers" => [0 => "stretch"], "data" => ["product" => twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "product", [], "any", false, false, false, 12), "category" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category.office.furniture")]]));
    }

    public function getTemplateName()
    {
        return "@ProductWidget/views/cms-product-slider/cms-product-slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    product: _widget.product
} %}

{% block body %}
    {% embed molecule('product-item') with {
        class: 'col col--sm-12 col--md-6 col--lg-4',
        modifiers: ['stretch'],
        data: {
            product: data.product,
            category: 'category.office.furniture' | trans,
        },
    } only %}
        {% block rating %}
            {% include molecule('rating-selector', 'ProductReviewWidget') ignore missing with {
                data: {
                    value: data.product.rating.averageRating | default(0),
                    reviewCount:  data.product.rating.totalReview | default(0),
                    useHalfSteps: true,
                    parentJsName: config.jsName,
                },
                attributes: {
                    readonly: true,
                },
            } only %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductWidget/views/cms-product-slider/cms-product-slider.twig", "/data/src/Pyz/Yves/ProductWidget/Theme/default/views/cms-product-slider/cms-product-slider.twig");
    }
}


/* @ProductWidget/views/cms-product-slider/cms-product-slider.twig */
class __TwigTemplate_dd61bea6de680ed64bf56d6c8d20ff0793e9d219e4032dceb3fe85f58e473a14___2114957504 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'rating' => [$this, 'block_rating'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-item"]), "@ProductWidget/views/cms-product-slider/cms-product-slider.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_rating($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "            ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["rating-selector", "ProductReviewWidget"]), "@ProductWidget/views/cms-product-slider/cms-product-slider.twig", 17);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display(twig_to_array(["data" => ["value" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 19
($context["data"] ?? null), "product", [], "any", false, true, false, 19), "rating", [], "any", false, true, false, 19), "averageRating", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 19), "rating", [], "any", false, true, false, 19), "averageRating", [], "any", false, false, false, 19), 0)) : (0)), "reviewCount" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 20
($context["data"] ?? null), "product", [], "any", false, true, false, 20), "rating", [], "any", false, true, false, 20), "totalReview", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "product", [], "any", false, true, false, 20), "rating", [], "any", false, true, false, 20), "totalReview", [], "any", false, false, false, 20), 0)) : (0)), "useHalfSteps" => true, "parentJsName" => twig_get_attribute($this->env, $this->source,             // line 22
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "jsName", [], "any", false, false, false, 22)], "attributes" => ["readonly" => true]]));
        }
        // line 28
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@ProductWidget/views/cms-product-slider/cms-product-slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 28,  154 => 22,  153 => 20,  152 => 19,  143 => 17,  139 => 16,  129 => 8,  54 => 12,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    product: _widget.product
} %}

{% block body %}
    {% embed molecule('product-item') with {
        class: 'col col--sm-12 col--md-6 col--lg-4',
        modifiers: ['stretch'],
        data: {
            product: data.product,
            category: 'category.office.furniture' | trans,
        },
    } only %}
        {% block rating %}
            {% include molecule('rating-selector', 'ProductReviewWidget') ignore missing with {
                data: {
                    value: data.product.rating.averageRating | default(0),
                    reviewCount:  data.product.rating.totalReview | default(0),
                    useHalfSteps: true,
                    parentJsName: config.jsName,
                },
                attributes: {
                    readonly: true,
                },
            } only %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@ProductWidget/views/cms-product-slider/cms-product-slider.twig", "/data/src/Pyz/Yves/ProductWidget/Theme/default/views/cms-product-slider/cms-product-slider.twig");
    }
}
