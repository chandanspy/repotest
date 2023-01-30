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

/* @@SprykerShop:CatalogPage/components/molecules/active-filter/active-filter.twig */
class __TwigTemplate_20877c69c50db2f2e6a168eb40f44923041b0b9bbc23c1f7225beffb935b8864 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component' => [$this, 'block_component'],
            'class' => [$this, 'block_class'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:CatalogPage/components/molecules/active-filter/active-filter.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "active-filter", "tag" => "a"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["filter" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "value" => null], $context['data']);        // line 13
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["href" => (( !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "value", [], "any", false, false, false, 14))) ? ($this->extensions['SprykerShop\Yves\CatalogPage\Twig\CatalogPageTwigExtension']->generateUrlWithoutActiveSearchFilter($context, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "filter", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "value", [], "any", false, false, false, 14))) : (null))], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "value", [], "any", false, false, false, 18))) {
            // line 19
            echo "        ";
            $this->displayParentBlock("component", $context, $blocks);
            echo "
    ";
        }
    }

    // line 23
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        $this->displayParentBlock("class", $context, $blocks);
        echo "
    link link--small spacing-left
";
    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "value", [], "any", false, false, false, 29), "html", null, true);
        echo "</strong>
    ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.filter." . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "filter", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30))), "html", null, true);
        echo "
    &times;
";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/components/molecules/active-filter/active-filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  84 => 29,  80 => 28,  72 => 24,  68 => 23,  60 => 19,  57 => 18,  53 => 17,  49 => 1,  48 => 14,  47 => 13,  46 => 9,  45 => 8,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'active-filter',
    tag: 'a'
} %}

{% define data = {
    filter: required,
    value: null
} %}

{% define attributes = {
    href: (data.value is not empty) ? generateUrlWithoutActiveSearchFilter(data.filter, data.value) : null
} %}

{% block component %}
    {% if data.value is not empty %}
        {{parent()}}
    {% endif %}
{% endblock %}

{% block class %}
    {{parent()}}
    link link--small spacing-left
{% endblock %}

{% block body %}
    <strong>{{data.value}}</strong>
    {{ ('product.filter.' ~ data.filter.name) | trans }}
    &times;
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/active-filter/active-filter.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/active-filter/active-filter.twig");
    }
}
