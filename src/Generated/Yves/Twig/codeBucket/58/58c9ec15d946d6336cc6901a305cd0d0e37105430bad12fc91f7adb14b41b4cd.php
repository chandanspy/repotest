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

/* @@SprykerShop:CatalogPage/components/molecules/filter-category/filter-category.twig */
class __TwigTemplate_2a4d67fc0f2a4ed4b646ee94fe29d574754876cdcdcb2bcb70e0ff0761e43329 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component' => [$this, 'block_component'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:CatalogPage/components/molecules/filter-category/filter-category.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "filter-category"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["prepareFilterCategoriesDefined" => (((twig_get_attribute($this->env, $this->source,         // line 8
($context["data"] ?? null), "prepareFilterCategoriesDefined", [], "any", true, true, false, 8) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "prepareFilterCategoriesDefined", [], "any", false, false, false, 8)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "prepareFilterCategoriesDefined", [], "any", false, false, false, 8)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "twig", [], "any", false, false, false, 8), "function", [0 => "prepareFilterCategories"], "method", false, false, false, 8)))], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "categories", [], "any", false, false, false, 12))) {
            $this->displayParentBlock("component", $context, $blocks);
        }
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "prepareFilterCategoriesDefined", [], "any", false, false, false, 16)) {
            // line 17
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["filter-category-prepared", "CatalogPage"]), "@@SprykerShop:CatalogPage/components/molecules/filter-category/filter-category.twig", 17)->display($context);
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["filter-category-fallback", "CatalogPage"]), "@@SprykerShop:CatalogPage/components/molecules/filter-category/filter-category.twig", 19)->display($context);
            // line 20
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/components/molecules/filter-category/filter-category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  61 => 15,  54 => 12,  50 => 11,  46 => 1,  45 => 8,  44 => 7,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'filter-category',
} %}

{% define data = {
    prepareFilterCategoriesDefined: data.prepareFilterCategoriesDefined ?? app.twig.function('prepareFilterCategories')
} %}

{% block component %}
    {% if data.categories is not empty %}{{ parent() }}{% endif %}
{% endblock %}

{% block body %}
    {% if data.prepareFilterCategoriesDefined %}
        {% include molecule('filter-category-prepared', 'CatalogPage') %}
    {% else %}
        {% include molecule('filter-category-fallback', 'CatalogPage') %}
    {% endif %}
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/filter-category/filter-category.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/filter-category/filter-category.twig");
    }
}
