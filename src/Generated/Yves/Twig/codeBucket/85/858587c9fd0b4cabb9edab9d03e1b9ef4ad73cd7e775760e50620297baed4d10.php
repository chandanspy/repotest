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

/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_fca395f06e1a511c3f9097975057ac06d5b350f41ee1d6972c4d24f3531c89ec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headScripts' => [$this, 'block_headScripts'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
            'form' => [$this, 'block_form'],
            'filterBar' => [$this, 'block_filterBar'],
            'noResults' => [$this, 'block_noResults'],
            'footerScripts' => [$this, 'block_footerScripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-critical-path"]), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["products" =>         // line 4
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 4, $this->source); })()), "facets" =>         // line 5
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 5, $this->source); })()), "filteredFacets" => [], "category" => null, "categories" => [], "categoryId" => null, "filterPath" => null, "viewMode" => null, "isEmptyCategoryFilterValueVisible" => null, "sort" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 13, $this->source); })()), "sort", [], "any", false, false, false, 13), "pagination" => ["currentPage" =>         // line 15
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 15, $this->source); })()), "maxPage" =>         // line 16
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 16, $this->source); })()), "parameters" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "all", [], "method", false, false, false, 17), "paginationPath" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "getPathInfo", [], "method", false, false, false, 18), "showAlwaysFirstAndLast" => true, "numFound" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 20, $this->source); })()), "pagination", [], "any", false, false, false, 20), "numFound", [], "any", false, false, false, 20), "config" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 21
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 21, $this->source); })()), "pagination", [], "any", false, false, false, 21), "config", [], "any", false, false, false, 21), "currentItemsPerPage" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 22, $this->source); })()), "pagination", [], "any", false, false, false, 22), "currentItemsPerPage", [], "any", false, false, false, 22)]], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_headScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        $this->displayParentBlock("headScripts", $context, $blocks);
        echo "

    ";
        // line 49
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "catalog-header"])) {
            $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 49, 163891272)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }    }

    // line 53
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "    ";
        $macros["self"] = $this;
        // line 55
        echo "
    ";
        // line 56
        $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 56, "1916602176")->display(twig_to_array(["embed" => ["breadcrumbs" => twig_call_macro($macros["self"], "macro_renderBreadcrumbSteps", [twig_get_attribute($this->env, $this->source,         // line 58
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "category", [], "any", false, false, false, 58), true, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "filterPath", [], "any", false, false, false, 58)], 58, $context, $this->getSourceContext())]]));
    }

    // line 67
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "    ";
        $context["catalogJsName"] = "js-catalog";
        // line 69
        echo "
    ";
        // line 70
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["window-location-applicator", "CatalogPage"]), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 70)->display(twig_to_array(["attributes" => ["form-class-name" => (        // line 72
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 72, $this->source); })()) . "__form"), "trigger-class-name" => (        // line 73
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 73, $this->source); })()) . "__trigger")]]));
        // line 76
        echo "
    <form method=\"GET\" class=\"grid ";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "__form\" data-init-default-value-form>
        ";
        // line 78
        $this->displayBlock('form', $context, $blocks);
        // line 156
        echo "    </form>
";
    }

    // line 78
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                ";
        // line 80
        $this->displayBlock('filterBar', $context, $blocks);
        // line 111
        echo "            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                ";
        // line 114
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["sort", "CatalogPage"]), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 114)->display(twig_to_array(["class" => "box", "data" => ["pagination" => twig_get_attribute($this->env, $this->source,         // line 117
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 117, $this->source); })()), "pagination", [], "any", false, false, false, 117), "sort" => twig_get_attribute($this->env, $this->source,         // line 118
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 118, $this->source); })()), "sort", [], "any", false, false, false, 118), "parentJsName" =>         // line 119
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 119, $this->source); })())]]));
        // line 122
        echo "
                ";
        // line 123
        $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["active-filter-section", "CatalogPage"]), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 123)->display(twig_to_array(["class" => "spacing-top spacing-top--big", "data" => ["facets" => twig_get_attribute($this->env, $this->source,         // line 126
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 126, $this->source); })()), "facets", [], "any", false, false, false, 126), "filteredFacets" => twig_get_attribute($this->env, $this->source,         // line 127
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 127, $this->source); })()), "filteredFacets", [], "any", false, false, false, 127)]]));
        // line 130
        echo "
                ";
        // line 131
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["pagination"]), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 131)->display(twig_to_array(["class" => "box spacing-top spacing-top--big", "data" => twig_get_attribute($this->env, $this->source,         // line 133
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 133, $this->source); })()), "pagination", [], "any", false, false, false, 133)]));
        // line 135
        echo "
                <div class=\"grid grid--stretch\">
                    ";
        // line 137
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 137, $this->source); })()), "products", [], "any", false, false, false, 137)) {
            // line 138
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 138, $this->source); })()), "products", [], "any", false, false, false, 138));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 139
                echo "                            ";
                if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CatalogPageProductWidget", [0 => $context["product"], 1 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 139, $this->source); })()), "viewMode", [], "any", false, false, false, 139)])) {
                    $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 139, 1215619167)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                    $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
                } elseif ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductWidgetPlugin", [0 =>                 // line 140
$context["product"], 1 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 140, $this->source); })()), "viewMode", [], "any", false, false, false, 140)])) {
                    $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 139, 1282741017)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                    $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
                }                // line 142
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                    ";
        } else {
            // line 144
            echo "                        ";
            $this->displayBlock('noResults', $context, $blocks);
            // line 147
            echo "                    ";
        }
        // line 148
        echo "                </div>

                ";
        // line 150
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["pagination"]), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 150)->display(twig_to_array(["class" => "box", "data" => twig_get_attribute($this->env, $this->source,         // line 152
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 152, $this->source); })()), "pagination", [], "any", false, false, false, 152)]));
        // line 154
        echo "            </div>
        ";
    }

    // line 80
    public function block_filterBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "                    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["view-mode-switch", "CatalogPage"]), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 81)->display(twig_to_array(["class" => "box"]));
        // line 84
        echo "
                    ";
        // line 85
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-checkbox"]), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 85)->display(twig_to_array(["modifiers" => [0 => "expand"], "class" => "box spacing-top spacing-top--big is-hidden-lg-xl", "data" => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.show_hide_button")], "attributes" => ["target-class-name" => "js-catalog__filters-toggle", "class-to-toggle" => "is-hidden-sm-md", "checked" => true]]));
        // line 97
        echo "
                    ";
        // line 98
        $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["filter-section", "CatalogPage"]), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 98)->display(twig_to_array(["class" => "box spacing-top spacing-top--big js-catalog__filters-toggle", "data" => ["facets" => twig_get_attribute($this->env, $this->source,         // line 101
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 101, $this->source); })()), "facets", [], "any", false, false, false, 101), "filteredFacets" => twig_get_attribute($this->env, $this->source,         // line 102
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 102, $this->source); })()), "filteredFacets", [], "any", false, false, false, 102), "filterPath" => twig_get_attribute($this->env, $this->source,         // line 103
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 103, $this->source); })()), "filterPath", [], "any", false, false, false, 103), "categories" => twig_get_attribute($this->env, $this->source,         // line 104
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "categories", [], "any", false, false, false, 104), "category" => twig_get_attribute($this->env, $this->source,         // line 105
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 105, $this->source); })()), "category", [], "any", false, false, false, 105), "isEmptyCategoryFilterValueVisible" => twig_get_attribute($this->env, $this->source,         // line 106
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 106, $this->source); })()), "isEmptyCategoryFilterValueVisible", [], "any", false, false, false, 106), "parentJsName" =>         // line 107
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 107, $this->source); })())]]));
        // line 110
        echo "                ";
    }

    // line 144
    public function block_noResults($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                            <div class=\"col col--sm-12 text-center\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.no-results"), "html", null, true);
        echo "</div>
                        ";
    }

    // line 159
    public function block_footerScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 160
        echo "    ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "catalog-footer"])) {
            $this->loadTemplate("@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 160, 424072981)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 162
        echo "
    ";
        // line 163
        $this->displayParentBlock("footerScripts", $context, $blocks);
        echo "
";
    }

    // line 26
    public function macro_renderBreadcrumbSteps($__categoryNode__ = null, $__isLastLeaf__ = null, $__filterPath__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "categoryNode" => $__categoryNode__,
            "isLastLeaf" => $__isLastLeaf__,
            "filterPath" => $__filterPath__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 27
            echo "    ";
            $macros["self"] = $this;
            // line 28
            echo "    ";
            $context["categoryUrl"] = ((twig_get_attribute($this->env, $this->source, ($context["categoryNode"] ?? null), "url", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["categoryNode"] ?? null), "url", [], "any", false, false, false, 28))) : (""));
            // line 29
            echo "    ";
            $context["categoryUrl"] = (( !twig_test_empty((isset($context["filterPath"]) || array_key_exists("filterPath", $context) ? $context["filterPath"] : (function () { throw new RuntimeError('Variable "filterPath" does not exist.', 29, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl((isset($context["filterPath"]) || array_key_exists("filterPath", $context) ? $context["filterPath"] : (function () { throw new RuntimeError('Variable "filterPath" does not exist.', 29, $this->source); })()), ["categoryPath" => call_user_func_array($this->env->getFilter('trimLocale')->getCallable(), [(isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 29, $this->source); })())])])) : ((isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 29, $this->source); })())));
            // line 30
            echo "    ";
            $context["categoryLabel"] = ((twig_get_attribute($this->env, $this->source, ($context["categoryNode"] ?? null), "name", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["categoryNode"] ?? null), "name", [], "any", false, false, false, 30))) : (""));
            // line 31
            echo "    ";
            $context["categoryPatrentNodes"] = ((twig_get_attribute($this->env, $this->source, ($context["categoryNode"] ?? null), "parents", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["categoryNode"] ?? null), "parents", [], "any", false, false, false, 31))) : (""));
            // line 32
            echo "
    ";
            // line 33
            if ( !twig_test_empty((isset($context["categoryPatrentNodes"]) || array_key_exists("categoryPatrentNodes", $context) ? $context["categoryPatrentNodes"] : (function () { throw new RuntimeError('Variable "categoryPatrentNodes" does not exist.', 33, $this->source); })()))) {
                // line 34
                echo "        ";
                echo twig_call_macro($macros["self"], "macro_renderBreadcrumbSteps", [twig_first($this->env, (isset($context["categoryPatrentNodes"]) || array_key_exists("categoryPatrentNodes", $context) ? $context["categoryPatrentNodes"] : (function () { throw new RuntimeError('Variable "categoryPatrentNodes" does not exist.', 34, $this->source); })())), false, (isset($context["filterPath"]) || array_key_exists("filterPath", $context) ? $context["filterPath"] : (function () { throw new RuntimeError('Variable "filterPath" does not exist.', 34, $this->source); })())], 34, $context, $this->getSourceContext());
                echo "

        ";
                // line 36
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["breadcrumb-step"]), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 36)->display(twig_to_array(["data" => ["url" =>                 // line 38
(isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 38, $this->source); })()), "label" =>                 // line 39
(isset($context["categoryLabel"]) || array_key_exists("categoryLabel", $context) ? $context["categoryLabel"] : (function () { throw new RuntimeError('Variable "categoryLabel" does not exist.', 39, $this->source); })()), "withChevron" =>  !                // line 40
(isset($context["isLastLeaf"]) || array_key_exists("isLastLeaf", $context) ? $context["isLastLeaf"] : (function () { throw new RuntimeError('Variable "isLastLeaf" does not exist.', 40, $this->source); })())]]));
                // line 43
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 43,  302 => 40,  301 => 39,  300 => 38,  299 => 36,  293 => 34,  291 => 33,  288 => 32,  285 => 31,  282 => 30,  279 => 29,  276 => 28,  273 => 27,  258 => 26,  252 => 163,  249 => 162,  244 => 160,  240 => 159,  233 => 145,  229 => 144,  225 => 110,  223 => 107,  222 => 106,  221 => 105,  220 => 104,  219 => 103,  218 => 102,  217 => 101,  216 => 98,  213 => 97,  211 => 85,  208 => 84,  205 => 81,  201 => 80,  196 => 154,  194 => 152,  193 => 150,  189 => 148,  186 => 147,  183 => 144,  180 => 143,  174 => 142,  170 => 140,  165 => 139,  160 => 138,  158 => 137,  154 => 135,  152 => 133,  151 => 131,  148 => 130,  146 => 127,  145 => 126,  144 => 123,  141 => 122,  139 => 119,  138 => 118,  137 => 117,  136 => 114,  131 => 111,  129 => 80,  126 => 79,  122 => 78,  117 => 156,  115 => 78,  111 => 77,  108 => 76,  106 => 73,  105 => 72,  104 => 70,  101 => 69,  98 => 68,  94 => 67,  90 => 58,  89 => 56,  86 => 55,  83 => 54,  79 => 53,  73 => 49,  67 => 47,  63 => 46,  59 => 1,  58 => 22,  57 => 21,  56 => 20,  55 => 18,  54 => 17,  53 => 16,  52 => 15,  51 => 13,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound,
        config: _view.pagination.config,
        currentItemsPerPage: _view.pagination.currentItemsPerPage,
    },
} %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_fca395f06e1a511c3f9097975057ac06d5b350f41ee1d6972c4d24f3531c89ec___163891272 extends Template
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
        // line 49
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 49, $this->source); })()), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 49);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 49,  304 => 43,  302 => 40,  301 => 39,  300 => 38,  299 => 36,  293 => 34,  291 => 33,  288 => 32,  285 => 31,  282 => 30,  279 => 29,  276 => 28,  273 => 27,  258 => 26,  252 => 163,  249 => 162,  244 => 160,  240 => 159,  233 => 145,  229 => 144,  225 => 110,  223 => 107,  222 => 106,  221 => 105,  220 => 104,  219 => 103,  218 => 102,  217 => 101,  216 => 98,  213 => 97,  211 => 85,  208 => 84,  205 => 81,  201 => 80,  196 => 154,  194 => 152,  193 => 150,  189 => 148,  186 => 147,  183 => 144,  180 => 143,  174 => 142,  170 => 140,  165 => 139,  160 => 138,  158 => 137,  154 => 135,  152 => 133,  151 => 131,  148 => 130,  146 => 127,  145 => 126,  144 => 123,  141 => 122,  139 => 119,  138 => 118,  137 => 117,  136 => 114,  131 => 111,  129 => 80,  126 => 79,  122 => 78,  117 => 156,  115 => 78,  111 => 77,  108 => 76,  106 => 73,  105 => 72,  104 => 70,  101 => 69,  98 => 68,  94 => 67,  90 => 58,  89 => 56,  86 => 55,  83 => 54,  79 => 53,  73 => 49,  67 => 47,  63 => 46,  59 => 1,  58 => 22,  57 => 21,  56 => 20,  55 => 18,  54 => 17,  53 => 16,  52 => 15,  51 => 13,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound,
        config: _view.pagination.config,
        currentItemsPerPage: _view.pagination.currentItemsPerPage,
    },
} %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_fca395f06e1a511c3f9097975057ac06d5b350f41ee1d6972c4d24f3531c89ec___1916602176 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 56
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["breadcrumb"]), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 56);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 61
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "            ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 62, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 62), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  747 => 62,  743 => 61,  733 => 56,  518 => 49,  304 => 43,  302 => 40,  301 => 39,  300 => 38,  299 => 36,  293 => 34,  291 => 33,  288 => 32,  285 => 31,  282 => 30,  279 => 29,  276 => 28,  273 => 27,  258 => 26,  252 => 163,  249 => 162,  244 => 160,  240 => 159,  233 => 145,  229 => 144,  225 => 110,  223 => 107,  222 => 106,  221 => 105,  220 => 104,  219 => 103,  218 => 102,  217 => 101,  216 => 98,  213 => 97,  211 => 85,  208 => 84,  205 => 81,  201 => 80,  196 => 154,  194 => 152,  193 => 150,  189 => 148,  186 => 147,  183 => 144,  180 => 143,  174 => 142,  170 => 140,  165 => 139,  160 => 138,  158 => 137,  154 => 135,  152 => 133,  151 => 131,  148 => 130,  146 => 127,  145 => 126,  144 => 123,  141 => 122,  139 => 119,  138 => 118,  137 => 117,  136 => 114,  131 => 111,  129 => 80,  126 => 79,  122 => 78,  117 => 156,  115 => 78,  111 => 77,  108 => 76,  106 => 73,  105 => 72,  104 => 70,  101 => 69,  98 => 68,  94 => 67,  90 => 58,  89 => 56,  86 => 55,  83 => 54,  79 => 53,  73 => 49,  67 => 47,  63 => 46,  59 => 1,  58 => 22,  57 => 21,  56 => 20,  55 => 18,  54 => 17,  53 => 16,  52 => 15,  51 => 13,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound,
        config: _view.pagination.config,
        currentItemsPerPage: _view.pagination.currentItemsPerPage,
    },
} %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_fca395f06e1a511c3f9097975057ac06d5b350f41ee1d6972c4d24f3531c89ec___1215619167 extends Template
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
        // line 139
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 139, $this->source); })()), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 139);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  958 => 139,  747 => 62,  743 => 61,  733 => 56,  518 => 49,  304 => 43,  302 => 40,  301 => 39,  300 => 38,  299 => 36,  293 => 34,  291 => 33,  288 => 32,  285 => 31,  282 => 30,  279 => 29,  276 => 28,  273 => 27,  258 => 26,  252 => 163,  249 => 162,  244 => 160,  240 => 159,  233 => 145,  229 => 144,  225 => 110,  223 => 107,  222 => 106,  221 => 105,  220 => 104,  219 => 103,  218 => 102,  217 => 101,  216 => 98,  213 => 97,  211 => 85,  208 => 84,  205 => 81,  201 => 80,  196 => 154,  194 => 152,  193 => 150,  189 => 148,  186 => 147,  183 => 144,  180 => 143,  174 => 142,  170 => 140,  165 => 139,  160 => 138,  158 => 137,  154 => 135,  152 => 133,  151 => 131,  148 => 130,  146 => 127,  145 => 126,  144 => 123,  141 => 122,  139 => 119,  138 => 118,  137 => 117,  136 => 114,  131 => 111,  129 => 80,  126 => 79,  122 => 78,  117 => 156,  115 => 78,  111 => 77,  108 => 76,  106 => 73,  105 => 72,  104 => 70,  101 => 69,  98 => 68,  94 => 67,  90 => 58,  89 => 56,  86 => 55,  83 => 54,  79 => 53,  73 => 49,  67 => 47,  63 => 46,  59 => 1,  58 => 22,  57 => 21,  56 => 20,  55 => 18,  54 => 17,  53 => 16,  52 => 15,  51 => 13,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound,
        config: _view.pagination.config,
        currentItemsPerPage: _view.pagination.currentItemsPerPage,
    },
} %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_fca395f06e1a511c3f9097975057ac06d5b350f41ee1d6972c4d24f3531c89ec___1282741017 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 139, $this->source); })()), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 139);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  958 => 139,  747 => 62,  743 => 61,  733 => 56,  518 => 49,  304 => 43,  302 => 40,  301 => 39,  300 => 38,  299 => 36,  293 => 34,  291 => 33,  288 => 32,  285 => 31,  282 => 30,  279 => 29,  276 => 28,  273 => 27,  258 => 26,  252 => 163,  249 => 162,  244 => 160,  240 => 159,  233 => 145,  229 => 144,  225 => 110,  223 => 107,  222 => 106,  221 => 105,  220 => 104,  219 => 103,  218 => 102,  217 => 101,  216 => 98,  213 => 97,  211 => 85,  208 => 84,  205 => 81,  201 => 80,  196 => 154,  194 => 152,  193 => 150,  189 => 148,  186 => 147,  183 => 144,  180 => 143,  174 => 142,  170 => 140,  165 => 139,  160 => 138,  158 => 137,  154 => 135,  152 => 133,  151 => 131,  148 => 130,  146 => 127,  145 => 126,  144 => 123,  141 => 122,  139 => 119,  138 => 118,  137 => 117,  136 => 114,  131 => 111,  129 => 80,  126 => 79,  122 => 78,  117 => 156,  115 => 78,  111 => 77,  108 => 76,  106 => 73,  105 => 72,  104 => 70,  101 => 69,  98 => 68,  94 => 67,  90 => 58,  89 => 56,  86 => 55,  83 => 54,  79 => 53,  73 => 49,  67 => 47,  63 => 46,  59 => 1,  58 => 22,  57 => 21,  56 => 20,  55 => 18,  54 => 17,  53 => 16,  52 => 15,  51 => 13,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound,
        config: _view.pagination.config,
        currentItemsPerPage: _view.pagination.currentItemsPerPage,
    },
} %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_fca395f06e1a511c3f9097975057ac06d5b350f41ee1d6972c4d24f3531c89ec___424072981 extends Template
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
        // line 160
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 160, $this->source); })()), "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 160);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1385 => 160,  958 => 139,  747 => 62,  743 => 61,  733 => 56,  518 => 49,  304 => 43,  302 => 40,  301 => 39,  300 => 38,  299 => 36,  293 => 34,  291 => 33,  288 => 32,  285 => 31,  282 => 30,  279 => 29,  276 => 28,  273 => 27,  258 => 26,  252 => 163,  249 => 162,  244 => 160,  240 => 159,  233 => 145,  229 => 144,  225 => 110,  223 => 107,  222 => 106,  221 => 105,  220 => 104,  219 => 103,  218 => 102,  217 => 101,  216 => 98,  213 => 97,  211 => 85,  208 => 84,  205 => 81,  201 => 80,  196 => 154,  194 => 152,  193 => 150,  189 => 148,  186 => 147,  183 => 144,  180 => 143,  174 => 142,  170 => 140,  165 => 139,  160 => 138,  158 => 137,  154 => 135,  152 => 133,  151 => 131,  148 => 130,  146 => 127,  145 => 126,  144 => 123,  141 => 122,  139 => 119,  138 => 118,  137 => 117,  136 => 114,  131 => 111,  129 => 80,  126 => 79,  122 => 78,  117 => 156,  115 => 78,  111 => 77,  108 => 76,  106 => 73,  105 => 72,  104 => 70,  101 => 69,  98 => 68,  94 => 67,  90 => 58,  89 => 56,  86 => 55,  83 => 54,  79 => 53,  73 => 49,  67 => 47,  63 => 46,  59 => 1,  58 => 22,  57 => 21,  56 => 20,  55 => 18,  54 => 17,  53 => 16,  52 => 15,  51 => 13,  50 => 5,  49 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% define data = {
    products: required,
    facets: required,
    filteredFacets: [],
    category: null,
    categories: [],
    categoryId: null,
    filterPath: null,
    viewMode: null,
    isEmptyCategoryFilterValueVisible: null,
    sort: _view.sort,
    pagination: {
        currentPage: required,
        maxPage: required,
        parameters: app.request.query.all(),
        paginationPath: app.request.getPathInfo(),
        showAlwaysFirstAndLast: true,
        numFound: _view.pagination.numFound,
        config: _view.pagination.config,
        currentItemsPerPage: _view.pagination.currentItemsPerPage,
    },
} %}

{% macro renderBreadcrumbSteps(categoryNode, isLastLeaf, filterPath) %}
    {% import _self as self %}
    {% set categoryUrl = categoryNode.url | default %}
    {% set categoryUrl = filterPath is not empty ? url(filterPath, { categoryPath: categoryUrl | trimLocale }) : categoryUrl %}
    {% set categoryLabel = categoryNode.name | default %}
    {% set categoryPatrentNodes = categoryNode.parents | default %}

    {% if categoryPatrentNodes is not empty %}
        {{ self.renderBreadcrumbSteps(categoryPatrentNodes | first, false, filterPath) }}

        {% include molecule('breadcrumb-step') with {
            data: {
                url: categoryUrl,
                label: categoryLabel,
                withChevron: not isLastLeaf
            }
        } only %}
    {% endif %}
{% endmacro %}

{% block headScripts %}
    {{ parent() }}

    {% widget 'AssetWidget' args ['catalog-header'] only %}
    {% endwidget %}
{% endblock %}

{% block breadcrumbs %}
    {% import _self as self %}

    {% embed molecule('breadcrumb') with {
        embed: {
            breadcrumbs: self.renderBreadcrumbSteps(data.category, true, data.filterPath)
        }
    } only %}
        {% block breadcrumbs %}
            {{ embed.breadcrumbs }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid {{ catalogJsName }}__form\" data-init-default-value-form>
        {% block form %}
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'box',
                    } only %}

                    {% include molecule('toggler-checkbox') with {
                        modifiers: ['expand'],
                        class: 'box spacing-top spacing-top--big is-hidden-lg-xl',
                        data: {
                            label: 'catalog.filter.show_hide_button' | trans,
                        },
                        attributes: {
                            'target-class-name': 'js-catalog__filters-toggle',
                            'class-to-toggle': 'is-hidden-sm-md',
                            checked: true,
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'box spacing-top spacing-top--big js-catalog__filters-toggle',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            category: data.category,
                            isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                            parentJsName: catalogJsName,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                {% include molecule('sort', 'CatalogPage') with {
                    class: 'box',
                    data: {
                        pagination: data.pagination,
                        sort: data.sort,
                        parentJsName: catalogJsName,
                    },
                } only %}

                {% include organism('active-filter-section', 'CatalogPage') with {
                    class: 'spacing-top spacing-top--big',
                    data: {
                        facets: data.facets,
                        filteredFacets: data.filteredFacets
                    },
                } only %}

                {% include molecule('pagination') with {
                    class: 'box spacing-top spacing-top--big',
                    data: data.pagination,
                } only %}

                <div class=\"grid grid--stretch\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [product, data.viewMode] only %}
                            {% elsewidget 'ProductWidgetPlugin' args [product, data.viewMode] only %} {# @deprecated Use CatalogPageProductWidget instead. #}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}
                            <div class=\"col col--sm-12 text-center\">{{ 'catalog.no-results' | trans }}</div>
                        {% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    class: 'box',
                    data: data.pagination
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}

{% block footerScripts %}
    {% widget 'AssetWidget' args ['catalog-footer'] only %}
    {% endwidget %}

    {{ parent() }}
{% endblock %}
", "@@SprykerShop:CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}
