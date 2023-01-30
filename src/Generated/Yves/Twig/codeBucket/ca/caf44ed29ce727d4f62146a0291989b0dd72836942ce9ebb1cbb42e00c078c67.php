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

/* @CatalogPage/components/molecules/active-filter-enumeration/active-filter-enumeration.twig */
class __TwigTemplate_cd8a85c0b1d10485fbba7829d3ea7807485beb27115c2b0fc97ee7f569c12430 extends Template
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
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@CatalogPage/components/molecules/active-filter-enumeration/active-filter-enumeration.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "active-filter-enumeration"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["filter" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "isMultiSelect" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
($context["data"] ?? null), "filter", [], "any", false, true, false, 9), "config", [], "any", false, true, false, 9), "isMultiValued", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "filter", [], "any", false, true, false, 9), "config", [], "any", false, true, false, 9), "isMultiValued", [], "any", false, false, false, 9), false)) : (false))], $context['data']);        // line 12
        $context["values"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "isMultiSelect", [], "any", false, false, false, 12)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "filter", [], "any", false, false, false, 12), "activeValue", [], "any", false, false, false, 12)) : ([0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "filter", [], "any", false, false, false, 12), "activeValue", [], "any", false, false, false, 12)]));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 16
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["active-filter", "CatalogPage"]), "@CatalogPage/components/molecules/active-filter-enumeration/active-filter-enumeration.twig", 16)->display(twig_to_array(["class" =>             // line 17
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 17, $this->source); })()), "attributes" =>             // line 18
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 18, $this->source); })()), "data" => ["filter" => twig_get_attribute($this->env, $this->source,             // line 20
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "filter", [], "any", false, false, false, 20), "value" =>             // line 21
$context["value"]]]));
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/active-filter-enumeration/active-filter-enumeration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  66 => 21,  65 => 20,  64 => 18,  63 => 17,  61 => 16,  56 => 15,  52 => 14,  48 => 1,  46 => 12,  45 => 9,  44 => 8,  43 => 7,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'active-filter-enumeration'
} %}

{% define data = {
    filter: required,
    isMultiSelect: data.filter.config.isMultiValued | default(false)
} %}

{% set values = data.isMultiSelect ? data.filter.activeValue : [data.filter.activeValue] %}

{% block component %}
    {% for value in values %}
        {% include molecule('active-filter', 'CatalogPage') with {
            class: class,
            attributes: attributes,
            data: {
                filter: data.filter,
                value: value
            }
        } only %}
    {% endfor %}
{% endblock %}
", "@CatalogPage/components/molecules/active-filter-enumeration/active-filter-enumeration.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/active-filter-enumeration/active-filter-enumeration.twig");
    }
}
