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

/* @CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_09146b33c998f135eb8a64b7109c788600df6dfbfbb19b2ce634d5b0429a185d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contentClass' => [$this, 'block_contentClass'],
            'content' => [$this, 'block_content'],
            'form' => [$this, 'block_form'],
            'filterBar' => [$this, 'block_filterBar'],
            'noResults' => [$this, 'block_noResults'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-catalog", "@SprykerShop:CatalogPage"]), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contentClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-layout-main page-layout-main--catalog-page";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $context["catalogJsName"] = "js-catalog";
        // line 7
        echo "
    ";
        // line 8
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["window-location-applicator", "CatalogPage"]), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 8)->display(twig_to_array(["attributes" => ["form-class-name" => (        // line 10
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 10, $this->source); })()) . "__form"), "trigger-class-name" => (        // line 11
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 11, $this->source); })()) . "__trigger"), "sort-trigger-class-name" => (        // line 12
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 12, $this->source); })()) . "__sort-trigger")]]));
        // line 15
        echo "
    <form method=\"GET\" class=\"grid grid--gap page-layout-main__catalog-page-content js-form-input-default-value-disabler__catalog-form ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "__form\">
        ";
        // line 17
        $this->displayBlock('form', $context, $blocks);
        // line 122
        echo "    </form>
";
    }

    // line 17
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form-input-default-value-disabler"]), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 18)->display(twig_to_array(["attributes" => ["form-selector" => ".js-form-input-default-value-disabler__catalog-form", "input-selector" => ".js-form-input-default-value-disabler__catalog-input"]]));
        // line 24
        echo "
            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                ";
        // line 26
        $this->displayBlock('filterBar', $context, $blocks);
        // line 70
        echo "            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                <div class=\"grid grid--column-mob-reverse\">
                    <div class=\"col col--sm-12\">
                        <div class=\"grid grid--justify grid--nowrap\">
                            <div class=\"col col--lg-12\">
                                ";
        // line 77
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["sort", "CatalogPage"]), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 77)->display(twig_to_array(["data" => ["parentJsName" =>         // line 79
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 79, $this->source); })())]]));
        // line 82
        echo "                            </div>
                            <div class=\"col\">
                                ";
        // line 84
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["view-mode-switch", "CatalogPage"]), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 84)->display(twig_to_array(["class" => "is-hidden-lg-xxl", "data" => ["viewMode" => twig_get_attribute($this->env, $this->source,         // line 87
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 87, $this->source); })()), "viewMode", [], "any", false, false, false, 87)]]));
        // line 90
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"col col--sm-12\">
                        ";
        // line 94
        $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["active-filter-section", "CatalogPage"]), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 94)->display(twig_to_array(["data" => ["facets" => twig_get_attribute($this->env, $this->source,         // line 96
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 96, $this->source); })()), "facets", [], "any", false, false, false, 96), "filteredFacets" => twig_get_attribute($this->env, $this->source,         // line 97
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 97, $this->source); })()), "filteredFacets", [], "any", false, false, false, 97)]]));
        // line 100
        echo "                    </div>
                </div>

                <div class=\"grid grid--stretch grid--gap\">
                    ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "products", [], "any", false, false, false, 104)) {
            // line 105
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 105, $this->source); })()), "products", [], "any", false, false, false, 105));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 106
                echo "                            ";
                if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CatalogPageProductWidget", [0 =>                 // line 107
$context["product"], 1 => twig_get_attribute($this->env, $this->source,                 // line 108
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 108, $this->source); })()), "viewMode", [], "any", false, false, false, 108)])) {
                    $this->loadTemplate("@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 106, 1224552415)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                    $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
                }                // line 111
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                    ";
        } else {
            // line 113
            echo "                        ";
            $this->displayBlock('noResults', $context, $blocks);
            // line 114
            echo "                    ";
        }
        // line 115
        echo "                </div>

                ";
        // line 117
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["pagination"]), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 117)->display(twig_to_array(["data" => twig_get_attribute($this->env, $this->source,         // line 118
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 118, $this->source); })()), "pagination", [], "any", false, false, false, 118)]));
        // line 120
        echo "            </div>
        ";
    }

    // line 26
    public function block_filterBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["view-mode-switch", "CatalogPage"]), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 27)->display(twig_to_array(["class" => "is-hidden-sm-md", "data" => ["viewMode" => twig_get_attribute($this->env, $this->source,         // line 30
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "viewMode", [], "any", false, false, false, 30)]]));
        // line 33
        echo "
                    <button class=\"button button--justify button--additional js-catalog-filters-trigger is-hidden-lg-xxl spacing-bottom spacing-bottom--big\">
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.and.sorting.button"), "html", null, true);
        echo "
                        ";
        // line 36
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 36)->display(twig_to_array(["modifiers" => [0 => "filter"], "data" => ["name" => "filter"]]));
        // line 42
        echo "                    </button>

                    ";
        // line 44
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-click"]), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 44)->display(twig_to_array(["attributes" => ["trigger-class-name" => "js-catalog-filters-trigger", "target-class-name" => "js-filter-section", "class-to-toggle" => "is-hidden-sm-md"]]));
        // line 51
        echo "
                    ";
        // line 52
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["sticky-body-toggler"]), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 52)->display(twig_to_array(["attributes" => ["trigger-class-name" => "js-catalog-filters-trigger", "class-to-fix-body" => "is-locked-mobile"]]));
        // line 58
        echo "
                    ";
        // line 59
        $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["filter-section", "CatalogPage"]), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 59)->display(twig_to_array(["class" => "is-hidden-sm-md", "data" => ["facets" => twig_get_attribute($this->env, $this->source,         // line 62
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 62, $this->source); })()), "facets", [], "any", false, false, false, 62), "filteredFacets" => twig_get_attribute($this->env, $this->source,         // line 63
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 63, $this->source); })()), "filteredFacets", [], "any", false, false, false, 63), "filterPath" => twig_get_attribute($this->env, $this->source,         // line 64
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "filterPath", [], "any", false, false, false, 64), "categories" => twig_get_attribute($this->env, $this->source,         // line 65
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 65, $this->source); })()), "categories", [], "any", false, false, false, 65), "parentJsName" =>         // line 66
(isset($context["catalogJsName"]) || array_key_exists("catalogJsName", $context) ? $context["catalogJsName"] : (function () { throw new RuntimeError('Variable "catalogJsName" does not exist.', 66, $this->source); })())]]));
        // line 69
        echo "                ";
    }

    // line 113
    public function block_noResults($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("noResults", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 113,  213 => 69,  211 => 66,  210 => 65,  209 => 64,  208 => 63,  207 => 62,  206 => 59,  203 => 58,  201 => 52,  198 => 51,  196 => 44,  192 => 42,  190 => 36,  186 => 35,  182 => 33,  180 => 30,  178 => 27,  174 => 26,  169 => 120,  167 => 118,  166 => 117,  162 => 115,  159 => 114,  156 => 113,  153 => 112,  147 => 111,  143 => 108,  142 => 107,  140 => 106,  135 => 105,  133 => 104,  127 => 100,  125 => 97,  124 => 96,  123 => 94,  117 => 90,  115 => 87,  114 => 84,  110 => 82,  108 => 79,  107 => 77,  98 => 70,  96 => 26,  92 => 24,  89 => 18,  85 => 17,  80 => 122,  78 => 17,  74 => 16,  71 => 15,  69 => 12,  68 => 11,  67 => 10,  66 => 8,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-catalog', '@SprykerShop:CatalogPage') %}

{% block contentClass %}page-layout-main page-layout-main--catalog-page{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
            'sort-trigger-class-name': catalogJsName ~ '__sort-trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid grid--gap page-layout-main__catalog-page-content js-form-input-default-value-disabler__catalog-form {{ catalogJsName }}__form\">
        {% block form %}
            {% include molecule('form-input-default-value-disabler') with {
                attributes: {
                    'form-selector': '.js-form-input-default-value-disabler__catalog-form',
                    'input-selector': '.js-form-input-default-value-disabler__catalog-input',
                },
            } only %}

            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'is-hidden-sm-md',
                        data: {
                            viewMode: data.viewMode,
                        },
                    } only %}

                    <button class=\"button button--justify button--additional js-catalog-filters-trigger is-hidden-lg-xxl spacing-bottom spacing-bottom--big\">
                        {{ 'catalog.filter.and.sorting.button' | trans }}
                        {% include atom('icon') with {
                            modifiers: ['filter'],
                            data: {
                                name: 'filter',
                            },
                        } only %}
                    </button>

                    {% include molecule('toggler-click') with {
                        attributes: {
                            'trigger-class-name': 'js-catalog-filters-trigger',
                            'target-class-name': 'js-filter-section',
                            'class-to-toggle': 'is-hidden-sm-md',
                        },
                    } only %}

                    {% include molecule('sticky-body-toggler') with {
                        attributes: {
                            'trigger-class-name': 'js-catalog-filters-trigger',
                            'class-to-fix-body': 'is-locked-mobile',
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'is-hidden-sm-md',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            parentJsName: catalogJsName,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                <div class=\"grid grid--column-mob-reverse\">
                    <div class=\"col col--sm-12\">
                        <div class=\"grid grid--justify grid--nowrap\">
                            <div class=\"col col--lg-12\">
                                {% include molecule('sort', 'CatalogPage') with {
                                    data: {
                                        parentJsName: catalogJsName,
                                    },
                                } only %}
                            </div>
                            <div class=\"col\">
                                {% include molecule('view-mode-switch', 'CatalogPage') with {
                                    class: 'is-hidden-lg-xxl',
                                    data: {
                                        viewMode: data.viewMode,
                                    },
                                } only %}
                            </div>
                        </div>
                    </div>
                    <div class=\"col col--sm-12\">
                        {% include organism('active-filter-section', 'CatalogPage') with {
                            data: {
                                facets: data.facets,
                                filteredFacets: data.filteredFacets,
                            },
                        } only %}
                    </div>
                </div>

                <div class=\"grid grid--stretch grid--gap\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [
                                product,
                                data.viewMode,
                            ] only %}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}{{ parent() }}{% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    data: data.pagination,
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}
", "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}


/* @CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig */
class __TwigTemplate_09146b33c998f135eb8a64b7109c788600df6dfbfbb19b2ce634d5b0429a185d___1224552415 extends Template
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
        // line 106
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 106, $this->source); })()), "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", 106);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 106,  217 => 113,  213 => 69,  211 => 66,  210 => 65,  209 => 64,  208 => 63,  207 => 62,  206 => 59,  203 => 58,  201 => 52,  198 => 51,  196 => 44,  192 => 42,  190 => 36,  186 => 35,  182 => 33,  180 => 30,  178 => 27,  174 => 26,  169 => 120,  167 => 118,  166 => 117,  162 => 115,  159 => 114,  156 => 113,  153 => 112,  147 => 111,  143 => 108,  142 => 107,  140 => 106,  135 => 105,  133 => 104,  127 => 100,  125 => 97,  124 => 96,  123 => 94,  117 => 90,  115 => 87,  114 => 84,  110 => 82,  108 => 79,  107 => 77,  98 => 70,  96 => 26,  92 => 24,  89 => 18,  85 => 17,  80 => 122,  78 => 17,  74 => 16,  71 => 15,  69 => 12,  68 => 11,  67 => 10,  66 => 8,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-catalog', '@SprykerShop:CatalogPage') %}

{% block contentClass %}page-layout-main page-layout-main--catalog-page{% endblock %}

{% block content %}
    {% set catalogJsName = 'js-catalog' %}

    {% include molecule('window-location-applicator', 'CatalogPage') with {
        attributes: {
            'form-class-name': catalogJsName ~ '__form',
            'trigger-class-name': catalogJsName ~ '__trigger',
            'sort-trigger-class-name': catalogJsName ~ '__sort-trigger',
        },
    } only %}

    <form method=\"GET\" class=\"grid grid--gap page-layout-main__catalog-page-content js-form-input-default-value-disabler__catalog-form {{ catalogJsName }}__form\">
        {% block form %}
            {% include molecule('form-input-default-value-disabler') with {
                attributes: {
                    'form-selector': '.js-form-input-default-value-disabler__catalog-form',
                    'input-selector': '.js-form-input-default-value-disabler__catalog-input',
                },
            } only %}

            <div class=\"col col--sm-12 col--lg-4 col--xl-3\">
                {% block filterBar %}
                    {% include molecule('view-mode-switch', 'CatalogPage') with {
                        class: 'is-hidden-sm-md',
                        data: {
                            viewMode: data.viewMode,
                        },
                    } only %}

                    <button class=\"button button--justify button--additional js-catalog-filters-trigger is-hidden-lg-xxl spacing-bottom spacing-bottom--big\">
                        {{ 'catalog.filter.and.sorting.button' | trans }}
                        {% include atom('icon') with {
                            modifiers: ['filter'],
                            data: {
                                name: 'filter',
                            },
                        } only %}
                    </button>

                    {% include molecule('toggler-click') with {
                        attributes: {
                            'trigger-class-name': 'js-catalog-filters-trigger',
                            'target-class-name': 'js-filter-section',
                            'class-to-toggle': 'is-hidden-sm-md',
                        },
                    } only %}

                    {% include molecule('sticky-body-toggler') with {
                        attributes: {
                            'trigger-class-name': 'js-catalog-filters-trigger',
                            'class-to-fix-body': 'is-locked-mobile',
                        },
                    } only %}

                    {% include organism('filter-section', 'CatalogPage') with {
                        class: 'is-hidden-sm-md',
                        data: {
                            facets: data.facets,
                            filteredFacets: data.filteredFacets,
                            filterPath: data.filterPath,
                            categories: data.categories,
                            parentJsName: catalogJsName,
                        },
                    } only %}
                {% endblock %}
            </div>

            <div class=\"col col--sm-12 col--lg-8 col--xl-9\">
                <div class=\"grid grid--column-mob-reverse\">
                    <div class=\"col col--sm-12\">
                        <div class=\"grid grid--justify grid--nowrap\">
                            <div class=\"col col--lg-12\">
                                {% include molecule('sort', 'CatalogPage') with {
                                    data: {
                                        parentJsName: catalogJsName,
                                    },
                                } only %}
                            </div>
                            <div class=\"col\">
                                {% include molecule('view-mode-switch', 'CatalogPage') with {
                                    class: 'is-hidden-lg-xxl',
                                    data: {
                                        viewMode: data.viewMode,
                                    },
                                } only %}
                            </div>
                        </div>
                    </div>
                    <div class=\"col col--sm-12\">
                        {% include organism('active-filter-section', 'CatalogPage') with {
                            data: {
                                facets: data.facets,
                                filteredFacets: data.filteredFacets,
                            },
                        } only %}
                    </div>
                </div>

                <div class=\"grid grid--stretch grid--gap\">
                    {% if data.products %}
                        {% for product in data.products %}
                            {% widget 'CatalogPageProductWidget' args [
                                product,
                                data.viewMode,
                            ] only %}
                            {% endwidget %}
                        {% endfor %}
                    {% else %}
                        {% block noResults %}{{ parent() }}{% endblock %}
                    {% endif %}
                </div>

                {% include molecule('pagination') with {
                    data: data.pagination,
                } only %}
            </div>
        {% endblock %}
    </form>
{% endblock %}
", "@CatalogPage/templates/page-layout-catalog/page-layout-catalog.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/templates/page-layout-catalog/page-layout-catalog.twig");
    }
}
