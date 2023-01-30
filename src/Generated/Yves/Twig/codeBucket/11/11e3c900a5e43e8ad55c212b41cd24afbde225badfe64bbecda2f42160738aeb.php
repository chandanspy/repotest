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

/* @ProductNewPage/views/new-product/new-product.twig */
class __TwigTemplate_916b95e8a71b3a0527c95f7ac0f996a62a2a34e3fe501e9d4e0832a19a1b85e0 extends Template
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
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-catalog", "CatalogPage"]), "@ProductNewPage/views/new-product/new-product.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["products" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "products", [], "any", false, false, false, 4), "facets" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 5, $this->source); })()), "facets", [], "any", false, false, false, 5), "filterPath" => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["_view"] ?? null), "filterPath", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "filterPath", [], "any", false, false, false, 6))) : ("")), "category" => ((twig_get_attribute($this->env, $this->source,         // line 7
($context["_view"] ?? null), "category", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, false, false, 7))) : ("")), "categories" => ((        // line 8
array_key_exists("categories", $context)) ? (_twig_default_filter((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 8, $this->source); })()), [])) : ([])), "categoryId" => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["_view"] ?? null), "idCategory", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "idCategory", [], "any", false, false, false, 9))) : ("")), "filterPath" => ((twig_get_attribute($this->env, $this->source,         // line 10
($context["_view"] ?? null), "filterPath", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "filterPath", [], "any", false, false, false, 10))) : ("")), "viewMode" => ((twig_get_attribute($this->env, $this->source,         // line 11
($context["_view"] ?? null), "viewMode", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "viewMode", [], "any", false, false, false, 11))) : ("")), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
($context["_view"] ?? null), "category", [], "any", false, true, false, 13), "name", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 13), "name", [], "any", false, false, false, 13), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.new"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.new"))), "metaTitle" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
($context["_view"] ?? null), "category", [], "any", false, true, false, 14), "name", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 14), "name", [], "any", false, false, false, 14), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.new"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.new"))), "metaDescription" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["_view"] ?? null), "category", [], "any", false, true, false, 15), "meta_description", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 15), "meta_description", [], "any", false, false, false, 15))) : ("")), "metaKeywords" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
($context["_view"] ?? null), "category", [], "any", false, true, false, 16), "meta_keywords", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 16), "meta_keywords", [], "any", false, false, false, 16))) : ("")), "pagination" => ["parameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "query", [], "any", false, false, false, 19), "all", [], "method", false, false, false, 19), "currentPage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 20, $this->source); })()), "pagination", [], "any", false, false, false, 20), "currentPage", [], "any", false, false, false, 20), "paginationPath" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", [0 => "_route"], "method", false, false, false, 21), "maxPage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 22, $this->source); })()), "pagination", [], "any", false, false, false, 22), "maxPage", [], "any", false, false, false, 22), "showAlwaysFirstAndLast" => true]], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductNewPage/views/new-product/new-product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 1,  57 => 22,  56 => 21,  55 => 20,  54 => 19,  53 => 16,  52 => 15,  51 => 14,  50 => 13,  49 => 11,  48 => 10,  47 => 9,  46 => 8,  45 => 7,  44 => 6,  43 => 5,  42 => 4,  41 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-catalog', 'CatalogPage') %}

{% define data = {
    products: _view.products,
    facets: _view.facets,
    filterPath: _view.filterPath | default,
    category: _view.category | default,
    categories: categories | default([]),
    categoryId: _view.idCategory | default,
    filterPath: _view.filterPath | default,
    viewMode: _view.viewMode | default,

    title: _view.category.name | default('catalog.new' | trans),
    metaTitle: _view.category.name | default('catalog.new' | trans),
    metaDescription: _view.category.meta_description | default,
    metaKeywords: _view.category.meta_keywords | default,

    pagination: {
        parameters: app.request.query.all(),
        currentPage: _view.pagination.currentPage,
        paginationPath: app.request.attributes.get('_route'),
        maxPage: _view.pagination.maxPage,
        showAlwaysFirstAndLast: true
    }
} %}
", "@ProductNewPage/views/new-product/new-product.twig", "/data/vendor/spryker-shop/product-new-page/src/SprykerShop/Yves/ProductNewPage/Theme/default/views/new-product/new-product.twig");
    }
}
