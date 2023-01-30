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

/* @@SprykerShop:CatalogPage/components/organisms/filter-section/filter-section.twig */
class __TwigTemplate_bcbee806126e186e9657b57c60e4642312f22b9a6193dd3d605cce8a5276528b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'filters' => [$this, 'block_filters'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:CatalogPage/components/organisms/filter-section/filter-section.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "filter-section", "tag" => "section"], $context['config']);        // line 10
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["facets" => [], "filteredFacets" => [], "filterPath" => null, "categories" => [], "category" => null, "isEmptyCategoryFilterValueVisible" => null, "parentJsName" => ""], $context['data']);        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $context["facets"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "filteredFacets", [], "any", false, false, false, 21))) ? (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "filteredFacets", [], "any", false, false, false, 21)) : (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "facets", [], "any", false, false, false, 21)));
        // line 22
        echo "    ";
        $context["triggerButtonJsName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "parentJsName", [], "any", false, false, false, 22)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "parentJsName", [], "any", false, false, false, 22) . "__trigger")) : (""));
        // line 23
        echo "
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["facets"]) || array_key_exists("facets", $context) ? $context["facets"] : (function () { throw new RuntimeError('Variable "facets" does not exist.', 24, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 25
            echo "        ";
            $context["filterHasValues"] = ( !twig_get_attribute($this->env, $this->source, $context["filter"], "values", [], "any", true, true, false, 25) || (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "values", [], "any", false, false, false, 25)), 0)));
            // line 26
            echo "
        ";
            // line 27
            if ((isset($context["filterHasValues"]) || array_key_exists("filterHasValues", $context) ? $context["filterHasValues"] : (function () { throw new RuntimeError('Variable "filterHasValues" does not exist.', 27, $this->source); })())) {
                // line 28
                echo "            ";
                $this->displayBlock('filters', $context, $blocks);
                // line 55
                echo "
            <hr>
        ";
            }
            // line 58
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
    <button type=\"button\" class=\"button button--expand button--small ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["triggerButtonJsName"]) || array_key_exists("triggerButtonJsName", $context) ? $context["triggerButtonJsName"] : (function () { throw new RuntimeError('Variable "triggerButtonJsName" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.button"), "html", null, true);
        echo "
        ";
        // line 62
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@@SprykerShop:CatalogPage/components/organisms/filter-section/filter-section.twig", 62)->display(twig_to_array(["data" => ["name" => "filter"]]));
        // line 67
        echo "    </button>
";
    }

    // line 28
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                ";
        $context["filterName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 29, $this->source); })()), "config", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29);
        // line 30
        echo "                ";
        $context["filterType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 30, $this->source); })()), "config", [], "any", false, false, false, 30), "type", [], "any", false, false, false, 30);
        // line 31
        echo "
               ";
        // line 32
        if ((0 === twig_compare((isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 32, $this->source); })()), "category"))) {
            // line 33
            echo "                   <h2 class=\"title--h6\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.filter." . twig_lower_filter($this->env, (isset($context["filterName"]) || array_key_exists("filterName", $context) ? $context["filterName"] : (function () { throw new RuntimeError('Variable "filterName" does not exist.', 33, $this->source); })())))), "html", null, true);
            echo "</h2>
               ";
        }
        // line 35
        echo "
                ";
        // line 36
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate([0 => call_user_func_array($this->env->getFunction('molecule')->getCallable(), [("filter-" .             // line 37
(isset($context["filterName"]) || array_key_exists("filterName", $context) ? $context["filterName"] : (function () { throw new RuntimeError('Variable "filterName" does not exist.', 37, $this->source); })())), "CatalogPage"]), 1 => call_user_func_array($this->env->getFunction('molecule')->getCallable(), [("filter-" .             // line 38
(isset($context["filterType"]) || array_key_exists("filterType", $context) ? $context["filterType"] : (function () { throw new RuntimeError('Variable "filterType" does not exist.', 38, $this->source); })())), "CatalogPage"])], "@@SprykerShop:CatalogPage/components/organisms/filter-section/filter-section.twig", 36);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display(twig_to_array(["data" => ["filterPath" => twig_get_attribute($this->env, $this->source,             // line 41
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "filterPath", [], "any", false, false, false, 41), "categories" => twig_get_attribute($this->env, $this->source,             // line 42
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "categories", [], "any", false, false, false, 42), "category" => twig_get_attribute($this->env, $this->source,             // line 43
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "category", [], "any", false, false, false, 43), "filter" =>             // line 44
(isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 44, $this->source); })()), "parameter" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 45
($context["filter"] ?? null), "config", [], "any", false, true, false, 45), "parameterName", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "config", [], "any", false, true, false, 45), "parameterName", [], "any", false, false, false, 45), "")) : ("")), "min" => ((twig_get_attribute($this->env, $this->source,             // line 46
($context["filter"] ?? null), "min", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "min", [], "any", false, false, false, 46), 0)) : (0)), "max" => ((twig_get_attribute($this->env, $this->source,             // line 47
($context["filter"] ?? null), "max", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "max", [], "any", false, false, false, 47), 0)) : (0)), "activeMin" => ((twig_get_attribute($this->env, $this->source,             // line 48
($context["filter"] ?? null), "activeMin", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "activeMin", [], "any", false, false, false, 48), 0)) : (0)), "activeMax" => ((twig_get_attribute($this->env, $this->source,             // line 49
($context["filter"] ?? null), "activeMax", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "activeMax", [], "any", false, false, false, 49), 0)) : (0)), "isEmptyCategoryFilterValueVisible" => twig_get_attribute($this->env, $this->source,             // line 50
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 50, $this->source); })()), "isEmptyCategoryFilterValueVisible", [], "any", false, false, false, 50), "parentJsName" => twig_get_attribute($this->env, $this->source,             // line 51
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()), "parentJsName", [], "any", false, false, false, 51)]]));
        }
        // line 54
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/components/organisms/filter-section/filter-section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 54,  171 => 51,  170 => 50,  169 => 49,  168 => 48,  167 => 47,  166 => 46,  165 => 45,  164 => 44,  163 => 43,  162 => 42,  161 => 41,  155 => 38,  154 => 37,  151 => 36,  148 => 35,  142 => 33,  140 => 32,  137 => 31,  134 => 30,  131 => 29,  127 => 28,  122 => 67,  120 => 62,  116 => 61,  112 => 60,  109 => 59,  95 => 58,  90 => 55,  87 => 28,  85 => 27,  82 => 26,  79 => 25,  62 => 24,  59 => 23,  56 => 22,  53 => 21,  49 => 20,  45 => 3,  44 => 10,  43 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var filter.config \\Generated\\Shared\\Transfer\\FacetConfigTransfer #}

{% extends model('component') %}

{% define config = {
    name: 'filter-section',
    tag: 'section',
} %}

{% define data = {
    facets: [],
    filteredFacets: [],
    filterPath: null,
    categories: [],
    category: null,
    isEmptyCategoryFilterValueVisible: null,
    parentJsName: '',
} %}

{% block body %}
    {% set facets = data.filteredFacets is not empty ? data.filteredFacets : data.facets %}
    {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

    {% for filter in facets %}
        {% set filterHasValues = filter.values is not defined or filter.values | length > 0 %}

        {% if filterHasValues %}
            {% block filters %}
                {% set filterName = filter.config.name %}
                {% set filterType = filter.config.type %}

               {% if filterType == 'category' %}
                   <h2 class=\"title--h6\">{{ ('product.filter.' ~ filterName | lower) | trans }}</h2>
               {% endif %}

                {% include [
                    molecule('filter-' ~ filterName, 'CatalogPage'),
                    molecule('filter-' ~ filterType, 'CatalogPage')
                ] ignore missing with {
                    data: {
                        filterPath: data.filterPath,
                        categories: data.categories,
                        category: data.category,
                        filter: filter,
                        parameter: filter.config.parameterName | default(''),
                        min: filter.min | default(0),
                        max: filter.max | default(0),
                        activeMin: filter.activeMin | default(0),
                        activeMax: filter.activeMax | default(0),
                        isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                        parentJsName: data.parentJsName,
                    },
                } only %}
            {% endblock %}

            <hr>
        {% endif %}
    {% endfor %}

    <button type=\"button\" class=\"button button--expand button--small {{ triggerButtonJsName }}\">
        {{ 'catalog.filter.button' | trans }}
        {% include atom('icon') with {
            data: {
                name: 'filter',
            },
        } only %}
    </button>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/organisms/filter-section/filter-section.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/organisms/filter-section/filter-section.twig");
    }
}
