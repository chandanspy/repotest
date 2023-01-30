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

/* @CatalogPage/components/molecules/spelling-suggestion/spelling-suggestion.twig */
class __TwigTemplate_30e7120249d03fcb62f2d7bb4b824ed1746746cb0f0cafdf11320350ecda6df6 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@CatalogPage/components/molecules/spelling-suggestion/spelling-suggestion.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "spelling-suggestion"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["suggestion" => ""], $context['data']);        // line 11
        $context["href"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search", ["q" => twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "suggestion", [], "any", false, false, false, 12)]);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "suggestion", [], "any", false, false, false, 16))) {
            // line 17
            echo "        ";
            $this->displayParentBlock("component", $context, $blocks);
            echo "
    ";
        }
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <em class=\"text-big\">
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.search.spellingSuggestion"), "html", null, true);
        echo "
        <strong><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "suggestion", [], "any", false, false, false, 24), "html", null, true);
        echo "</a></strong>?
    </em>
";
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/spelling-suggestion/spelling-suggestion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  74 => 23,  71 => 22,  67 => 21,  59 => 17,  56 => 16,  52 => 15,  48 => 1,  46 => 12,  45 => 11,  44 => 7,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'spelling-suggestion'
} %}

{% define data = {
    suggestion: ''
} %}

{% set href = path('search', {
    q: data.suggestion
}) %}

{% block component %}
    {% if data.suggestion is not empty %}
        {{parent()}}
    {% endif %}
{% endblock %}

{% block body %}
    <em class=\"text-big\">
        {{ 'global.search.spellingSuggestion' | trans }}
        <strong><a href=\"{{href}}\">{{data.suggestion}}</a></strong>?
    </em>
{% endblock %}
", "@CatalogPage/components/molecules/spelling-suggestion/spelling-suggestion.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/spelling-suggestion/spelling-suggestion.twig");
    }
}
