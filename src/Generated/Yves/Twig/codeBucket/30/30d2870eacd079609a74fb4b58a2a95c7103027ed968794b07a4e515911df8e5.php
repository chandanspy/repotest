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

/* @ShopUi/components/molecules/ajax-loader/ajax-loader.twig */
class __TwigTemplate_e12767d86755c0fe9e3911bed18d00cf9ac996ece3d32c5eec433f0ee2cbad28 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'class' => [$this, 'block_class'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/ajax-loader/ajax-loader.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "ajax-loader", "tag" => "ajax-loader"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["label" => null, "showSpinnerOnLoad" => false], $context['data']);        // line 14
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["provider-selector" => "ajax-provider", "provider-class-name" => ""], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("class", $context, $blocks);
        echo " ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "showSpinnerOnLoad", [], "any", false, false, false, 19)) {
            echo "is-invisible";
        }
        echo " grid grid--center grid--middle";
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        $context["spinnerModifiers"] = ((twig_in_filter("big", (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 22, $this->source); })()))) ? ([0 => "big"]) : ([]));
        // line 23
        echo "
    <span class=\"grid grid--middle\">
        ";
        // line 25
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/molecules/ajax-loader/ajax-loader.twig", 25)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26) . "__spinner"), "modifiers" =>         // line 27
(isset($context["spinnerModifiers"]) || array_key_exists("spinnerModifiers", $context) ? $context["spinnerModifiers"] : (function () { throw new RuntimeError('Variable "spinnerModifiers" does not exist.', 27, $this->source); })()), "data" => ["name" => "spinner"]]));
        // line 32
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "label", [], "any", false, false, false, 32)) {
            // line 33
            echo "            <span class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "__label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "label", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
        ";
        }
        // line 35
        echo "    </span>
";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/ajax-loader/ajax-loader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 35,  80 => 33,  77 => 32,  75 => 27,  74 => 26,  73 => 25,  69 => 23,  66 => 22,  62 => 21,  50 => 19,  46 => 1,  45 => 14,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'ajax-loader',
    tag: 'ajax-loader',
} %}

{% define data = {
    label: null,
    showSpinnerOnLoad: false,
} %}

{# @deprecated property \"provider-selector\" is deprecated: use \"provider-class-name\" instead. #}
{% define attributes = {
    'provider-selector': 'ajax-provider',
    'provider-class-name': '',
} %}

{% block class %}{{parent()}} {% if not data.showSpinnerOnLoad %}is-invisible{% endif %} grid grid--center grid--middle{% endblock %}

{% block body %}
    {% set spinnerModifiers = 'big' in modifiers ? ['big'] : [] %}

    <span class=\"grid grid--middle\">
        {% include atom('icon') with {
            class: config.name ~ '__spinner',
            modifiers: spinnerModifiers,
            data: {
                name: 'spinner',
            },
        } only %}
        {% if data.label %}
            <span class=\"{{config.name}}__label\">{{data.label}}</span>
        {% endif %}
    </span>
{% endblock %}
", "@ShopUi/components/molecules/ajax-loader/ajax-loader.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/ajax-loader/ajax-loader.twig");
    }
}
