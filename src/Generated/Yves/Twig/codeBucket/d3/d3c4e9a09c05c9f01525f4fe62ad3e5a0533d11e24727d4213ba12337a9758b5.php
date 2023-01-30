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

/* @CatalogPage/components/organisms/active-filter-section/active-filter-section.twig */
class __TwigTemplate_9548c0eca90c6d6e49d2e3f6eed5e31693b892d9791009ebc6baa28e8317877f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'class' => [$this, 'block_class'],
            'component' => [$this, 'block_component'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@CatalogPage/components/organisms/active-filter-section/active-filter-section.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "active-filter-section", "tag" => "section"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["facets" => [], "filteredFacets" => []], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $this->displayParentBlock("class", $context, $blocks);
        echo " grid grid--middle";
    }

    // line 17
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        $context["activeFilters"] = [];
        // line 19
        echo "    ";
        $context["facets"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "filteredFacets", [], "any", false, false, false, 19))) ? (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "filteredFacets", [], "any", false, false, false, 19)) : (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "facets", [], "any", false, false, false, 19)));
        // line 20
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["facets"]) || array_key_exists("facets", $context) ? $context["facets"] : (function () { throw new RuntimeError('Variable "facets" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 22
            echo "        ";
            $context["activeFilter"] = twig_include($this->env, $context, [0 => call_user_func_array($this->env->getFunction('molecule')->getCallable(), [("active-filter-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 24
$context["filter"], "config", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24)), "CatalogPage"]), 1 => call_user_func_array($this->env->getFunction('molecule')->getCallable(), [("active-filter-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 25
$context["filter"], "config", [], "any", false, false, false, 25), "type", [], "any", false, false, false, 25)), "CatalogPage"])], ["class" => (twig_get_attribute($this->env, $this->source,             // line 28
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28) . "__item col"), "data" => ["filter" =>             // line 30
$context["filter"], "min" => ((twig_get_attribute($this->env, $this->source,             // line 31
$context["filter"], "min", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "min", [], "any", false, false, false, 31), 0)) : (0)), "max" => ((twig_get_attribute($this->env, $this->source,             // line 32
$context["filter"], "max", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "max", [], "any", false, false, false, 32), 0)) : (0)), "activeMin" => ((twig_get_attribute($this->env, $this->source,             // line 33
$context["filter"], "activeMin", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "activeMin", [], "any", false, false, false, 33), 0)) : (0)), "activeMax" => ((twig_get_attribute($this->env, $this->source,             // line 34
$context["filter"], "activeMax", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "activeMax", [], "any", false, false, false, 34), 0)) : (0))]], false, true);
            // line 40
            echo "
        ";
            // line 41
            if ( !twig_test_empty(twig_trim_filter((isset($context["activeFilter"]) || array_key_exists("activeFilter", $context) ? $context["activeFilter"] : (function () { throw new RuntimeError('Variable "activeFilter" does not exist.', 41, $this->source); })())))) {
                // line 42
                echo "            ";
                $context["activeFilters"] = twig_array_merge((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 42, $this->source); })()), [0 => (isset($context["activeFilter"]) || array_key_exists("activeFilter", $context) ? $context["activeFilter"] : (function () { throw new RuntimeError('Variable "activeFilter" does not exist.', 42, $this->source); })())]);
                // line 43
                echo "        ";
            }
            // line 44
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
    ";
        // line 46
        if ( !twig_test_empty((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 46, $this->source); })()))) {
            // line 47
            echo "        ";
            $this->displayParentBlock("component", $context, $blocks);
            echo "
    ";
        }
    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    <span class=\"col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true);
        echo "__item ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true);
        echo "__item--title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.activeFilters"), "html", null, true);
        echo ":</span>
    ";
        // line 53
        echo twig_join_filter((isset($context["activeFilters"]) || array_key_exists("activeFilters", $context) ? $context["activeFilters"] : (function () { throw new RuntimeError('Variable "activeFilters" does not exist.', 53, $this->source); })()));
        echo "
    <a class=\"col ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "__item ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
        echo "__reset\" href=\"";
        echo $this->extensions['SprykerShop\Yves\CatalogPage\Twig\CatalogPageTwigExtension']->generateUrlWithoutAllActiveSearchFilters($context, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), "facets", [], "any", false, false, false, 54));
        echo "\">
        ";
        // line 55
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@CatalogPage/components/organisms/active-filter-section/active-filter-section.twig", 55)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 56
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56) . "__reset-icon"), "modifiers" => [0 => "cross", 1 => "reset"], "data" => ["name" => "cross"]]));
        // line 62
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.resetAllFilters"), "html", null, true);
        echo "
    </a>
";
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/organisms/active-filter-section/active-filter-section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 62,  143 => 56,  142 => 55,  134 => 54,  130 => 53,  121 => 52,  117 => 51,  109 => 47,  107 => 46,  104 => 45,  98 => 44,  95 => 43,  92 => 42,  90 => 41,  87 => 40,  85 => 34,  84 => 33,  83 => 32,  82 => 31,  81 => 30,  80 => 28,  79 => 25,  78 => 24,  76 => 22,  72 => 21,  69 => 20,  66 => 19,  63 => 18,  59 => 17,  54 => 14,  50 => 13,  46 => 1,  45 => 8,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'active-filter-section',
    tag: 'section'
} %}

{% define data = {
    facets: [],
    filteredFacets: [],
} %}

{%- block class -%}
    {{parent()}} grid grid--middle
{%- endblock -%}

{% block component %}
    {% set activeFilters = [] %}
    {% set facets = data.filteredFacets is not empty ? data.filteredFacets : data.facets %}

    {% for filter in facets %}
        {% set activeFilter = include(
            [
                molecule('active-filter-' ~ filter.config.name, 'CatalogPage'),
                molecule('active-filter-' ~ filter.config.type, 'CatalogPage')
            ],
            {
                class: config.name ~ '__item col',
                data: {
                    filter: filter,
                    min: filter.min | default(0),
                    max: filter.max | default(0),
                    activeMin: filter.activeMin | default(0),
                    activeMax: filter.activeMax | default(0)
                }
            },
            with_context = false,
            ignore_missing = true
        ) %}

        {% if activeFilter | trim is not empty %}
            {% set activeFilters = activeFilters | merge([activeFilter]) %}
        {% endif %}
    {% endfor %}

    {% if activeFilters is not empty %}
        {{parent()}}
    {% endif %}
{% endblock %}

{% block body %}
    <span class=\"col {{config.name}}__item {{config.name}}__item--title\">{{ 'catalog.filter.activeFilters' | trans }}:</span>
    {{ activeFilters | join | raw }}
    <a class=\"col {{config.name}}__item {{config.name}}__reset\" href=\"{{ generateUrlWithoutAllActiveSearchFilters(data.facets) }}\">
        {% include atom('icon') with {
            class: config.name ~ '__reset-icon',
            modifiers: ['cross', 'reset'],
            data: {
                name: 'cross'
            }
        } only %}
        {{ 'catalog.filter.resetAllFilters' | trans }}
    </a>
{% endblock %}
", "@CatalogPage/components/organisms/active-filter-section/active-filter-section.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/organisms/active-filter-section/active-filter-section.twig");
    }
}
