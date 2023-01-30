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

/* @ShopUi/components/molecules/suggest-search/suggest-search.twig */
class __TwigTemplate_ed28c23ce0f9738d476c0204515db264b30955a81ddac420e6e262ce4c7306f2 extends Template
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
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/suggest-search/suggest-search.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "suggest-search", "tag" => "suggest-search"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["suggestion-url" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "base-suggest-url" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "input-class-name" =>         // line 11
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 11, $this->source); })()), "debounce-delay" => 500, "throttle-delay" => 200, "letters-trashold" => 2, "overlay-class-name" => "js-overlay-block", "overlay-breakpoint" => "0"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <div class=\"is-hidden ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "__container ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "jsName", [], "any", false, false, false, 20), "html", null, true);
        echo "__container\"></div>

    ";
        // line 22
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["ajax-provider"]), "@ShopUi/components/molecules/suggest-search/suggest-search.twig", 22)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "jsName", [], "any", false, false, false, 23) . "__ajax-provider"), "attributes" => ["method" => "post", "url" => twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 26, $this->source); })()), "suggestion-url", [], "array", false, false, false, 26)]]));
        // line 29
        echo "
    ";
        // line 30
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["ajax-loader"]), "@ShopUi/components/molecules/suggest-search/suggest-search.twig", 30)->display(twig_to_array(["modifiers" => [0 => "big"], "attributes" => ["provider-class-name" => (twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "jsName", [], "any", false, false, false, 33) . "__ajax-provider")]]));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/suggest-search/suggest-search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 33,  70 => 30,  67 => 29,  65 => 26,  64 => 23,  63 => 22,  55 => 20,  51 => 19,  47 => 1,  46 => 11,  45 => 10,  44 => 9,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'suggest-search',
    tag: 'suggest-search',
} %}

{% define attributes = {
    'suggestion-url': required,
    'base-suggest-url': required,
    'input-class-name': required,
    'debounce-delay': 500,
    'throttle-delay': 200,
    'letters-trashold': 2,
    'overlay-class-name': 'js-overlay-block',
    'overlay-breakpoint': '0',
} %}

{% block body %}
    <div class=\"is-hidden {{ config.name }}__container {{ config.jsName }}__container\"></div>

    {% include molecule('ajax-provider') with {
        class: config.jsName ~ '__ajax-provider',
        attributes: {
            method: 'post',
            url: attributes['suggestion-url'],
        },
    } only %}

    {% include molecule('ajax-loader') with {
        modifiers: ['big'],
        attributes: {
            'provider-class-name': config.jsName ~ '__ajax-provider',
        },
    } only %}
{% endblock %}
", "@ShopUi/components/molecules/suggest-search/suggest-search.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/suggest-search/suggest-search.twig");
    }
}
