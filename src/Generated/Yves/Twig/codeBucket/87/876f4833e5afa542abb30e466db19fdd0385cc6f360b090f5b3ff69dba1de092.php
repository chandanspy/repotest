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

/* @ShopUi/components/molecules/search-form/search-form.twig */
class __TwigTemplate_a81c38d7bc117bda7e36073d1f58fba4417ba8918388fbffd69133d58adb56b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'close' => [$this, 'block_close'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/search-form/search-form.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "search-form"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["searchUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search"), "searchValue" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "q"], "method", false, false, false, 9)], $context['data']);        // line 12
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["data-search-id" =>         // line 13
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 13, $this->source); })())], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "searchUrl", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
        <input name=\"q\" type=\"text\" class=\"input input--expand suggest-search__input ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "jsName", [], "any", false, false, false, 18), "html", null, true);
        echo "__input--";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 18, $this->source); })()), "data-search-id", [], "array", false, false, false, 18), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.search"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "searchValue", [], "any", false, false, false, 18), "html", null, true);
        echo "\" autocomplete=\"off\">
        <button type=\"submit\" class=\" button button--expand ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "__button ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "__button--submit\">
            ";
        // line 20
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/molecules/search-form/search-form.twig", 20)->display(twig_to_array(["modifiers" => [0 => "search"], "data" => ["name" => "search"]]));
        // line 26
        echo "        </button>


        <button class=\"button button--expand ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "__button ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "__button--close ";
        $this->displayBlock('close', $context, $blocks);
        echo "\">
            ";
        // line 30
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/molecules/search-form/search-form.twig", 30)->display(twig_to_array(["modifiers" => [0 => "small"], "data" => ["name" => "cross"]]));
        // line 36
        echo "        </button>

        ";
        // line 38
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["suggest-search"]), "@ShopUi/components/molecules/search-form/search-form.twig", 38)->display(twig_to_array(["attributes" => ["suggestion-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search/suggestion"), "base-suggest-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search/suggestion"), "input-class-name" => ((twig_get_attribute($this->env, $this->source,         // line 42
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "jsName", [], "any", false, false, false, 42) . "__input--") . twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 42, $this->source); })()), "data-search-id", [], "array", false, false, false, 42)), "overlay-breakpoint" => "768"]]));
        // line 46
        echo "    </form>
";
    }

    // line 29
    public function block_close($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/search-form/search-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  101 => 46,  99 => 42,  98 => 38,  94 => 36,  92 => 30,  84 => 29,  79 => 26,  77 => 20,  71 => 19,  61 => 18,  56 => 17,  52 => 16,  48 => 1,  47 => 13,  46 => 12,  45 => 9,  44 => 7,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'search-form'
} %}

{% define data = {
    searchUrl: path('search'),
    searchValue: app.request.get('q')
} %}

{% define attributes = {
    'data-search-id': required
} %}

{% block body %}
    <form action=\"{{data.searchUrl}}\">
        <input name=\"q\" type=\"text\" class=\"input input--expand suggest-search__input {{ config.jsName }}__input--{{ attributes['data-search-id'] }}\" placeholder=\"{{ 'global.search' | trans }}\" value=\"{{data.searchValue}}\" autocomplete=\"off\">
        <button type=\"submit\" class=\" button button--expand {{config.name}}__button {{config.name}}__button--submit\">
            {% include atom('icon') with {
                modifiers: ['search'],
                data: {
                    name: 'search'
                }
            } only %}
        </button>


        <button class=\"button button--expand {{config.name}}__button {{config.name}}__button--close {% block close %}{% endblock %}\">
            {% include atom('icon') with {
                modifiers: ['small'],
                data: {
                    name: 'cross'
                }
            } only %}
        </button>

        {% include molecule('suggest-search') with {
            attributes: {
                'suggestion-url': path('search/suggestion'),
                'base-suggest-url': path('search/suggestion'),
                'input-class-name': config.jsName ~ '__input--' ~ attributes['data-search-id'],
                'overlay-breakpoint': '768',
            },
        } only %}
    </form>
{% endblock %}
", "@ShopUi/components/molecules/search-form/search-form.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/search-form/search-form.twig");
    }
}
