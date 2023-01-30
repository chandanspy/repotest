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

/* @CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig */
class __TwigTemplate_757166568c6f25127257b92abc9253d0c39be66ead5aa38e8e391f95bffcf618 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contentTop' => [$this, 'block_contentTop'],
            'filterBar' => [$this, 'block_filterBar'],
            'contentBottom' => [$this, 'block_contentBottom'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-catalog", "CatalogPage"]), "@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["products" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "products", [], "any", false, false, false, 4), "facets" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 5, $this->source); })()), "facets", [], "any", false, false, false, 5), "filteredFacets" => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["_view"] ?? null), "filteredFacets", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "filteredFacets", [], "any", false, false, false, 6), [])) : ([])), "category" => ((twig_get_attribute($this->env, $this->source,         // line 7
($context["_view"] ?? null), "category", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, false, false, 7))) : ("")), "categories" => ((        // line 8
array_key_exists("categories", $context)) ? (_twig_default_filter((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 8, $this->source); })()), [])) : ([])), "categoryId" => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["_view"] ?? null), "idCategory", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "idCategory", [], "any", false, false, false, 9))) : ("")), "isEmptyCategoryFilterValueVisible" => ((twig_get_attribute($this->env, $this->source,         // line 10
($context["_view"] ?? null), "isEmptyCategoryFilterValueVisible", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "isEmptyCategoryFilterValueVisible", [], "any", false, false, false, 10))) : ("")), "filterPath" => ((twig_get_attribute($this->env, $this->source,         // line 11
($context["_view"] ?? null), "filterPath", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "filterPath", [], "any", false, false, false, 11))) : ("")), "viewMode" => ((twig_get_attribute($this->env, $this->source,         // line 12
($context["_view"] ?? null), "viewMode", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "viewMode", [], "any", false, false, false, 12))) : ("")), "searchString" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 13, $this->source); })()), "searchString", [], "any", false, false, false, 13), "title" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
($context["_view"] ?? null), "category", [], "any", false, true, false, 15), "name", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 15), "name", [], "any", false, false, false, 15))) : ("")), "metaTitle" => ((twig_get_attribute($this->env, $this->source,         // line 16
($context["_view"] ?? null), "pageTitle", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "pageTitle", [], "any", false, false, false, 16), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 16), "name", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 16), "name", [], "any", false, false, false, 16))) : ("")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 16), "name", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 16), "name", [], "any", false, false, false, 16))) : ("")))), "metaDescription" => ((twig_get_attribute($this->env, $this->source,         // line 17
($context["_view"] ?? null), "pageDescription", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "pageDescription", [], "any", false, false, false, 17))) : ("")), "metaKeywords" => ((twig_get_attribute($this->env, $this->source,         // line 18
($context["_view"] ?? null), "pageKeywords", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "pageKeywords", [], "any", false, false, false, 18))) : ("")), "pagination" => ["parameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "query", [], "any", false, false, false, 21), "all", [], "method", false, false, false, 21), "currentPage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 22, $this->source); })()), "pagination", [], "any", false, false, false, 22), "currentPage", [], "any", false, false, false, 22), "paginationPath" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "getPathInfo", [], "method", false, false, false, 23), "maxPage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 24, $this->source); })()), "pagination", [], "any", false, false, false, 24), "maxPage", [], "any", false, false, false, 24), "showAlwaysFirstAndLast" => true]], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_contentTop($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "categoryId", [], "any", false, false, false, 29)) {
            // line 30
            echo "        <div class=\"container\">
            <div class=\"catalog-cms-block\">
                ";
            // line 32
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-6')->setCmsSlotTemplatePath('@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig')->setProvidedData(["idCategory" => twig_get_attribute($this->env, $this->source,             // line 33
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "categoryId", [], "any", false, false, false, 33)])->setRequiredKeys([0 => "idCategory"])->setAutoFilledKeys([]));            // line 35
            echo "            </div>
        </div>
    ";
        }
    }

    // line 40
    public function block_filterBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    ";
        $this->displayParentBlock("filterBar", $context, $blocks);
        echo "

    ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "categoryId", [], "any", false, false, false, 43)) {
            // line 44
            echo "        <div class=\"catalog-cms-block\">
            ";
            // line 45
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-7')->setCmsSlotTemplatePath('@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig')->setProvidedData(["idCategory" => twig_get_attribute($this->env, $this->source,             // line 46
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), "categoryId", [], "any", false, false, false, 46)])->setRequiredKeys([0 => "idCategory"])->setAutoFilledKeys([]));            // line 48
            echo "        </div>
    ";
        }
    }

    // line 52
    public function block_contentBottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 53, $this->source); })()), "categoryId", [], "any", false, false, false, 53)) {
            // line 54
            echo "        <div class=\"container\">
            <div class=\"catalog-cms-block\">
                ";
            // line 56
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-8')->setCmsSlotTemplatePath('@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig')->setProvidedData(["idCategory" => twig_get_attribute($this->env, $this->source,             // line 57
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), "categoryId", [], "any", false, false, false, 57)])->setRequiredKeys([0 => "idCategory"])->setAutoFilledKeys([]));            // line 59
            echo "            </div>
        </div>
    ";
        }
    }

    // line 64
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    ";
        $this->displayParentBlock("form", $context, $blocks);
        echo "

    ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 67, $this->source); })()), "searchString", [], "any", false, false, false, 67)) {
            // line 68
            echo "        <input type=\"hidden\" name=\"q\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 68, $this->source); })()), "searchString", [], "any", false, false, false, 68), "html", null, true);
            echo "\">
    ";
        }
    }

    public function getTemplateName()
    {
        return "@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 68,  141 => 67,  135 => 65,  131 => 64,  124 => 59,  123 => 57,  122 => 56,  118 => 54,  115 => 53,  111 => 52,  105 => 48,  104 => 46,  103 => 45,  100 => 44,  98 => 43,  92 => 41,  88 => 40,  81 => 35,  80 => 33,  79 => 32,  75 => 30,  72 => 29,  68 => 28,  64 => 1,  63 => 24,  62 => 23,  61 => 22,  60 => 21,  59 => 18,  58 => 17,  57 => 16,  56 => 15,  55 => 13,  54 => 12,  53 => 11,  52 => 10,  51 => 9,  50 => 8,  49 => 7,  48 => 6,  47 => 5,  46 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-catalog', 'CatalogPage') %}

{% define data = {
    products: _view.products,
    facets: _view.facets,
    filteredFacets: _view.filteredFacets | default([]),
    category: _view.category | default,
    categories: categories | default([]),
    categoryId: _view.idCategory | default,
    isEmptyCategoryFilterValueVisible: _view.isEmptyCategoryFilterValueVisible | default,
    filterPath: _view.filterPath | default,
    viewMode: _view.viewMode | default,
    searchString: _view.searchString,

    title: _view.category.name | default,
    metaTitle: _view.pageTitle | default(_view.category.name | default),
    metaDescription: _view.pageDescription | default,
    metaKeywords: _view.pageKeywords | default,

    pagination: {
        parameters: app.request.query.all(),
        currentPage: _view.pagination.currentPage,
        paginationPath: app.request.getPathInfo(),
        maxPage: _view.pagination.maxPage,
        showAlwaysFirstAndLast: true
    }
} %}
{% block contentTop %}
    {% if data.categoryId %}
        <div class=\"container\">
            <div class=\"catalog-cms-block\">
                {% cms_slot 'slt-6' required ['idCategory'] with {
                    idCategory: data.categoryId,
                } %}
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block filterBar %}
    {{ parent() }}

    {% if data.categoryId %}
        <div class=\"catalog-cms-block\">
            {% cms_slot 'slt-7' required ['idCategory'] with {
                idCategory: data.categoryId,
            } %}
        </div>
    {% endif %}
{% endblock %}

{% block contentBottom %}
    {% if data.categoryId %}
        <div class=\"container\">
            <div class=\"catalog-cms-block\">
                {% cms_slot 'slt-8' required ['idCategory'] with {
                    idCategory: data.categoryId,
                } %}
            </div>
        </div>
    {% endif %}
{% endblock %}

{% block form %}
    {{ parent() }}

    {% if data.searchString %}
        <input type=\"hidden\" name=\"q\" value=\"{{ data.searchString }}\">
    {% endif %}
{% endblock %}
", "@CatalogPage/views/catalog-with-cms-slot/catalog-with-cms-slot.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/views/catalog-with-cms-slot/catalog-with-cms-slot.twig");
    }
}
