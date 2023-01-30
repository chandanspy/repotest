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

/* @CatalogPage/views/search/search.twig */
class __TwigTemplate_31b1f427a931438800f40dca32f4eb8479daa52c7b690ffda711e795e17d97ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'title' => [$this, 'block_title'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-catalog", "CatalogPage"]), "@CatalogPage/views/search/search.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["products" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "products", [], "any", false, false, false, 4), "facets" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 5, $this->source); })()), "facets", [], "any", false, false, false, 5), "filteredFacets" => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["_view"] ?? null), "filteredFacets", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "filteredFacets", [], "any", false, false, false, 6), [])) : ([])), "searchString" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 7, $this->source); })()), "searchString", [], "any", false, false, false, 7), "suggestion" => twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 8, $this->source); })()), "spellingSuggestion", [], "any", false, false, false, 8), "category" => ((twig_get_attribute($this->env, $this->source,         // line 9
($context["_view"] ?? null), "category", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, false, false, 9))) : ("")), "categories" => ((        // line 10
array_key_exists("categories", $context)) ? (_twig_default_filter((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 10, $this->source); })()), [])) : ([])), "categoryId" => ((twig_get_attribute($this->env, $this->source,         // line 11
($context["_view"] ?? null), "idCategory", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "idCategory", [], "any", false, false, false, 11))) : ("")), "isEmptyCategoryFilterValueVisible" => ((twig_get_attribute($this->env, $this->source,         // line 12
($context["_view"] ?? null), "isEmptyCategoryFilterValueVisible", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "isEmptyCategoryFilterValueVisible", [], "any", false, false, false, 12))) : ("")), "filterPath" => ((twig_get_attribute($this->env, $this->source,         // line 13
($context["_view"] ?? null), "filterPath", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "filterPath", [], "any", false, false, false, 13))) : ("")), "viewMode" => ((twig_get_attribute($this->env, $this->source,         // line 14
($context["_view"] ?? null), "viewMode", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "viewMode", [], "any", false, false, false, 14))) : ("")), "title" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.search.results") . " ") . twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 16, $this->source); })()), "searchString", [], "any", false, false, false, 16)), "metaTitle" => ((twig_get_attribute($this->env, $this->source,         // line 17
($context["_view"] ?? null), "pageTitle", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "pageTitle", [], "any", false, false, false, 17), ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 17), "name", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 17), "name", [], "any", false, false, false, 17))) : ("")))) : (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 17), "name", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "category", [], "any", false, true, false, 17), "name", [], "any", false, false, false, 17))) : ("")))), "metaDescription" => ((twig_get_attribute($this->env, $this->source,         // line 18
($context["_view"] ?? null), "pageDescription", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "pageDescription", [], "any", false, false, false, 18))) : ("")), "metaKeywords" => ((twig_get_attribute($this->env, $this->source,         // line 19
($context["_view"] ?? null), "pageKeywords", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "pageKeywords", [], "any", false, false, false, 19))) : ("")), "pagination" => ["parameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "query", [], "any", false, false, false, 22), "all", [], "method", false, false, false, 22), "currentPage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 23, $this->source); })()), "pagination", [], "any", false, false, false, 23), "currentPage", [], "any", false, false, false, 23), "paginationPath" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "attributes", [], "any", false, false, false, 24), "get", [0 => "_route"], "method", false, false, false, 24), "maxPage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 25, $this->source); })()), "pagination", [], "any", false, false, false, 25), "maxPage", [], "any", false, false, false, 25), "showAlwaysFirstAndLast" => true]], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["breadcrumb"]), "@CatalogPage/views/search/search.twig", 31)->display(twig_to_array(["data" => ["steps" => [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.search")]]]]));
    }

    // line 40
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.search.results"), "html", null, true);
        echo " \"<strong class=\"text-break\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "searchString", [], "any", false, false, false, 41), "html", null, true);
        echo "</strong>\"</h3>

    ";
        // line 43
        $this->loadTemplate("@CatalogPage/views/search/search.twig", "@CatalogPage/views/search/search.twig", 43, "1704661893")->display(twig_to_array(["data" => ["suggestion" => twig_get_attribute($this->env, $this->source,         // line 45
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "suggestion", [], "any", false, false, false, 45)]]));
    }

    // line 55
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "    <div class=\"col col--sm-12 spacing spacing--inner\">
        ";
        // line 57
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("FullTextSearchTabsWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), "searchString", [], "any", false, false, false, 57), 1 => "FullTextSearchProductsTab"])) {
            $this->loadTemplate("@CatalogPage/views/search/search.twig", "@CatalogPage/views/search/search.twig", 57, 1886870868)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 58
        echo "    </div>

    ";
        // line 60
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    ";
        // line 61
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), "searchString", [], "any", false, false, false, 61))) {
            // line 62
            echo "        <input type=\"hidden\" name=\"q\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 62, $this->source); })()), "searchString", [], "any", false, false, false, 62), "html", null, true);
            echo "\">
    ";
        }
    }

    public function getTemplateName()
    {
        return "@CatalogPage/views/search/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 62,  113 => 61,  109 => 60,  105 => 58,  101 => 57,  98 => 56,  94 => 55,  90 => 45,  89 => 43,  81 => 41,  77 => 40,  72 => 31,  68 => 30,  64 => 1,  63 => 25,  62 => 24,  61 => 23,  60 => 22,  59 => 19,  58 => 18,  57 => 17,  56 => 16,  55 => 14,  54 => 13,  53 => 12,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-catalog', 'CatalogPage') %}

{% define data = {
    products: _view.products,
    facets: _view.facets,
    filteredFacets: _view.filteredFacets | default([]),
    searchString: _view.searchString,
    suggestion: _view.spellingSuggestion,
    category: _view.category | default,
    categories: categories | default([]),
    categoryId: _view.idCategory | default,
    isEmptyCategoryFilterValueVisible: _view.isEmptyCategoryFilterValueVisible | default,
    filterPath: _view.filterPath | default,
    viewMode: _view.viewMode | default,

    title: ('global.search.results' | trans) ~ ' ' ~ _view.searchString,
    metaTitle: _view.pageTitle | default(_view.category.name | default),
    metaDescription: _view.pageDescription | default,
    metaKeywords: _view.pageKeywords | default,

    pagination: {
        parameters: app.request.query.all(),
        currentPage: _view.pagination.currentPage,
        paginationPath: app.request.attributes.get('_route'),
        maxPage: _view.pagination.maxPage,
        showAlwaysFirstAndLast: true
    }
} %}

{% block breadcrumbs %}
    {% include molecule('breadcrumb') with {
        data: {
            steps: [{
                label: 'global.search' | trans
            }]
        }
    } only %}
{% endblock %}

{% block title %}
    <h3>{{ 'global.search.results' | trans }} \"<strong class=\"text-break\">{{ data.searchString }}</strong>\"</h3>

    {% embed molecule('spelling-suggestion', 'CatalogPage') with {
        data: {
            suggestion: data.suggestion
        }
    } only %}
        {% block body %}
            <hr>
            {{parent()}}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block form %}
    <div class=\"col col--sm-12 spacing spacing--inner\">
        {% widget 'FullTextSearchTabsWidget' args [data.searchString, 'FullTextSearchProductsTab'] only %}{% endwidget %}
    </div>

    {{parent()}}
    {% if data.searchString is not empty %}
        <input type=\"hidden\" name=\"q\" value=\"{{ data.searchString }}\">
    {% endif %}
{% endblock %}
", "@CatalogPage/views/search/search.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/views/search/search.twig");
    }
}


/* @CatalogPage/views/search/search.twig */
class __TwigTemplate_31b1f427a931438800f40dca32f4eb8479daa52c7b690ffda711e795e17d97ba___1704661893 extends Template
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
        // line 43
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["spelling-suggestion", "CatalogPage"]), "@CatalogPage/views/search/search.twig", 43);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "            <hr>
            ";
        // line 50
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@CatalogPage/views/search/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 50,  242 => 49,  238 => 48,  228 => 43,  115 => 62,  113 => 61,  109 => 60,  105 => 58,  101 => 57,  98 => 56,  94 => 55,  90 => 45,  89 => 43,  81 => 41,  77 => 40,  72 => 31,  68 => 30,  64 => 1,  63 => 25,  62 => 24,  61 => 23,  60 => 22,  59 => 19,  58 => 18,  57 => 17,  56 => 16,  55 => 14,  54 => 13,  53 => 12,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-catalog', 'CatalogPage') %}

{% define data = {
    products: _view.products,
    facets: _view.facets,
    filteredFacets: _view.filteredFacets | default([]),
    searchString: _view.searchString,
    suggestion: _view.spellingSuggestion,
    category: _view.category | default,
    categories: categories | default([]),
    categoryId: _view.idCategory | default,
    isEmptyCategoryFilterValueVisible: _view.isEmptyCategoryFilterValueVisible | default,
    filterPath: _view.filterPath | default,
    viewMode: _view.viewMode | default,

    title: ('global.search.results' | trans) ~ ' ' ~ _view.searchString,
    metaTitle: _view.pageTitle | default(_view.category.name | default),
    metaDescription: _view.pageDescription | default,
    metaKeywords: _view.pageKeywords | default,

    pagination: {
        parameters: app.request.query.all(),
        currentPage: _view.pagination.currentPage,
        paginationPath: app.request.attributes.get('_route'),
        maxPage: _view.pagination.maxPage,
        showAlwaysFirstAndLast: true
    }
} %}

{% block breadcrumbs %}
    {% include molecule('breadcrumb') with {
        data: {
            steps: [{
                label: 'global.search' | trans
            }]
        }
    } only %}
{% endblock %}

{% block title %}
    <h3>{{ 'global.search.results' | trans }} \"<strong class=\"text-break\">{{ data.searchString }}</strong>\"</h3>

    {% embed molecule('spelling-suggestion', 'CatalogPage') with {
        data: {
            suggestion: data.suggestion
        }
    } only %}
        {% block body %}
            <hr>
            {{parent()}}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block form %}
    <div class=\"col col--sm-12 spacing spacing--inner\">
        {% widget 'FullTextSearchTabsWidget' args [data.searchString, 'FullTextSearchProductsTab'] only %}{% endwidget %}
    </div>

    {{parent()}}
    {% if data.searchString is not empty %}
        <input type=\"hidden\" name=\"q\" value=\"{{ data.searchString }}\">
    {% endif %}
{% endblock %}
", "@CatalogPage/views/search/search.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/views/search/search.twig");
    }
}


/* @CatalogPage/views/search/search.twig */
class __TwigTemplate_31b1f427a931438800f40dca32f4eb8479daa52c7b690ffda711e795e17d97ba___1886870868 extends Template
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
        // line 57
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 57, $this->source); })()), "@CatalogPage/views/search/search.twig", 57);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@CatalogPage/views/search/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 57,  245 => 50,  242 => 49,  238 => 48,  228 => 43,  115 => 62,  113 => 61,  109 => 60,  105 => 58,  101 => 57,  98 => 56,  94 => 55,  90 => 45,  89 => 43,  81 => 41,  77 => 40,  72 => 31,  68 => 30,  64 => 1,  63 => 25,  62 => 24,  61 => 23,  60 => 22,  59 => 19,  58 => 18,  57 => 17,  56 => 16,  55 => 14,  54 => 13,  53 => 12,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-catalog', 'CatalogPage') %}

{% define data = {
    products: _view.products,
    facets: _view.facets,
    filteredFacets: _view.filteredFacets | default([]),
    searchString: _view.searchString,
    suggestion: _view.spellingSuggestion,
    category: _view.category | default,
    categories: categories | default([]),
    categoryId: _view.idCategory | default,
    isEmptyCategoryFilterValueVisible: _view.isEmptyCategoryFilterValueVisible | default,
    filterPath: _view.filterPath | default,
    viewMode: _view.viewMode | default,

    title: ('global.search.results' | trans) ~ ' ' ~ _view.searchString,
    metaTitle: _view.pageTitle | default(_view.category.name | default),
    metaDescription: _view.pageDescription | default,
    metaKeywords: _view.pageKeywords | default,

    pagination: {
        parameters: app.request.query.all(),
        currentPage: _view.pagination.currentPage,
        paginationPath: app.request.attributes.get('_route'),
        maxPage: _view.pagination.maxPage,
        showAlwaysFirstAndLast: true
    }
} %}

{% block breadcrumbs %}
    {% include molecule('breadcrumb') with {
        data: {
            steps: [{
                label: 'global.search' | trans
            }]
        }
    } only %}
{% endblock %}

{% block title %}
    <h3>{{ 'global.search.results' | trans }} \"<strong class=\"text-break\">{{ data.searchString }}</strong>\"</h3>

    {% embed molecule('spelling-suggestion', 'CatalogPage') with {
        data: {
            suggestion: data.suggestion
        }
    } only %}
        {% block body %}
            <hr>
            {{parent()}}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block form %}
    <div class=\"col col--sm-12 spacing spacing--inner\">
        {% widget 'FullTextSearchTabsWidget' args [data.searchString, 'FullTextSearchProductsTab'] only %}{% endwidget %}
    </div>

    {{parent()}}
    {% if data.searchString is not empty %}
        <input type=\"hidden\" name=\"q\" value=\"{{ data.searchString }}\">
    {% endif %}
{% endblock %}
", "@CatalogPage/views/search/search.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/views/search/search.twig");
    }
}
