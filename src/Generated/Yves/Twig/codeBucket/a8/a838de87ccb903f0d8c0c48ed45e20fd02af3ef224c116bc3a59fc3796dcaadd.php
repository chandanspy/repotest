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

/* @ContentProductSetWidget/views/content-product-set-landing-page/content-product-set-landing-page.twig */
class __TwigTemplate_30056b7805abf72e327017885275dcc6cf5fcf98f262015d47b81b09eb0ebff7 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ContentProductSetWidget/views/content-product-set-landing-page/content-product-set-landing-page.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["productSet" =>         // line 4
(isset($context["productSet"]) || array_key_exists("productSet", $context) ? $context["productSet"] : (function () { throw new RuntimeError('Variable "productSet" does not exist.', 4, $this->source); })()), "productViews" =>         // line 5
(isset($context["productViews"]) || array_key_exists("productViews", $context) ? $context["productViews"] : (function () { throw new RuntimeError('Variable "productViews" does not exist.', 5, $this->source); })())], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["product-set-details", "ProductSetWidget"]), "@ContentProductSetWidget/views/content-product-set-landing-page/content-product-set-landing-page.twig", 9);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display(twig_to_array(["data" => ["products" => twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "productViews", [], "any", false, false, false, 11), "title" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "productSet", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "description" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "productSet", [], "any", false, false, false, 13), "description", [], "any", false, false, false, 13), "images" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 14
($context["data"] ?? null), "productSet", [], "any", false, true, false, 14), "imageSets", [], "any", false, true, false, 14), 0, [], "any", false, true, false, 14), "images", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "productSet", [], "any", false, true, false, 14), "imageSets", [], "any", false, true, false, 14), 0, [], "any", false, true, false, 14), "images", [], "any", false, false, false, 14), [])) : ([]))]]));
        }
    }

    public function getTemplateName()
    {
        return "@ContentProductSetWidget/views/content-product-set-landing-page/content-product-set-landing-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  64 => 13,  63 => 12,  62 => 11,  53 => 9,  49 => 8,  45 => 1,  44 => 5,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    productSet: productSet,
    productViews: productViews,
} %}

{% block body %}
    {% include organism('product-set-details', 'ProductSetWidget') ignore missing with {
        data: {
            products: data.productViews,
            title: data.productSet.name,
            description: data.productSet.description,
            images: data.productSet.imageSets.0.images | default([]),
        },
    } only %}
{% endblock %}
", "@ContentProductSetWidget/views/content-product-set-landing-page/content-product-set-landing-page.twig", "/data/src/Pyz/Yves/ContentProductSetWidget/Theme/default/views/content-product-set-landing-page/content-product-set-landing-page.twig");
    }
}
