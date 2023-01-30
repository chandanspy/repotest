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

/* @CatalogPage/components/molecules/active-filter-rating/active-filter-rating.twig */
class __TwigTemplate_02676ac7d62219f624da2da0e15875cd45d127a2051eafdba6277a40f508abcc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component' => [$this, 'block_component'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["active-filter", "CatalogPage"]), "@CatalogPage/components/molecules/active-filter-rating/active-filter-rating.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["value" => ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["data"] ?? null), "filter", [], "any", false, true, false, 5), "activeMin", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "filter", [], "any", false, true, false, 5), "activeMin", [], "any", false, false, false, 5), 0)) : (0)) . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.active_rating_up")), "hasParameterName" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["app"] ?? null), "request", [], "any", false, true, false, 6), "query", [], "any", false, true, false, 6), "has", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "filter", [], "any", false, false, false, 6), "config", [], "any", false, false, false, 6), "parameterName", [], "any", false, false, false, 6)], "method", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 6), "query", [], "any", false, true, false, 6), "has", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "filter", [], "any", false, false, false, 6), "config", [], "any", false, false, false, 6), "parameterName", [], "any", false, false, false, 6)], "method", false, false, false, 6), false)) : (false))], $context['data']);        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "hasParameterName", [], "any", false, false, false, 10)) {
            // line 11
            echo "        ";
            $this->displayParentBlock("component", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/active-filter-rating/active-filter-rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  53 => 10,  49 => 9,  45 => 2,  44 => 6,  43 => 5,  42 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# fe-sniffer:disabled correct-twig-component-structure #}
{% extends molecule('active-filter', 'CatalogPage') %}

{% define data = {
    value: data.filter.activeMin | default(0) ~ ' ' ~ 'catalog.filter.active_rating_up' | trans,
    hasParameterName: app.request.query.has(data.filter.config.parameterName) | default(false),
} %}

{% block component %}
    {% if data.hasParameterName %}
        {{ parent() }}
    {% endif %}
{% endblock %}
", "@CatalogPage/components/molecules/active-filter-rating/active-filter-rating.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/active-filter-rating/active-filter-rating.twig");
    }
}
