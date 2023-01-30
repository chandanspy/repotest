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

/* @ShopUi/components/molecules/quantity-counter/quantity-counter.twig */
class __TwigTemplate_2c1f0b8a8626444bf60f484364610389c56db76c898f2fe6333344479679a7f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'attributes' => [$this, 'block_attributes'],
            'body' => [$this, 'block_body'],
            'quantityField' => [$this, 'block_quantityField'],
            'inputClass' => [$this, 'block_inputClass'],
            'quantityCounterAttributes' => [$this, 'block_quantityCounterAttributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/quantity-counter/quantity-counter.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "quantity-counter", "tag" => "quantity-counter"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["isDisabled" => false, "isReadOnly" => false, "autoUpdate" => false], $context['data']);        // line 15
        $context["isEditable"] = ( !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "isReadOnly", [], "any", false, false, false, 15) &&  !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "isDisabled", [], "any", false, false, false, 15));
        // line 17
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["value" => 1, "type" => "number", "name" => "quantity", "onkeypress" => ((        // line 21
(isset($context["isEditable"]) || array_key_exists("isEditable", $context) ? $context["isEditable"] : (function () { throw new RuntimeError('Variable "isEditable" does not exist.', 21, $this->source); })())) ? (null) : ("return false;")), "onkeydown" => ((        // line 22
(isset($context["isEditable"]) || array_key_exists("isEditable", $context) ? $context["isEditable"] : (function () { throw new RuntimeError('Variable "isEditable" does not exist.', 22, $this->source); })())) ? (null) : ("return false;")), "min" => 1, "step" => 1], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    <button class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "__button
                   ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "isDisabled", [], "any", false, false, false, 31) || twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "isReadOnly", [], "any", false, false, false, 31))) {
            // line 32
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "__button--disabled
                   ";
        }
        // line 34
        echo "                   ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "jsName", [], "any", false, false, false, 34), "html", null, true);
        echo "__button-decrement
                   ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "html", null, true);
        echo "__button--decrement\">-</button>

    ";
        // line 37
        $this->displayBlock('quantityField', $context, $blocks);
        // line 46
        echo "
    <button class=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "__button
                   ";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "isDisabled", [], "any", false, false, false, 48) || twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "isReadOnly", [], "any", false, false, false, 48))) {
            // line 49
            echo "                       ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
            echo "__button--disabled
                   ";
        }
        // line 51
        echo "                   ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 51, $this->source); })()), "jsName", [], "any", false, false, false, 51), "html", null, true);
        echo "__button-increment
                   ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true);
        echo "__button--increment\">+</button>
";
    }

    // line 37
    public function block_quantityField($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "        <input
            class=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "__input ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 39, $this->source); })()), "jsName", [], "any", false, false, false, 39), "html", null, true);
        echo "__input ";
        $this->displayBlock('inputClass', $context, $blocks);
        echo "\"
            ";
        // line 40
        $this->displayBlock('quantityCounterAttributes', $context, $blocks);
        // line 41
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "autoUpdate", [], "any", false, false, false, 41)) {
            echo "data-auto-update=\"true\"";
        }
        // line 42
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "isDisabled", [], "any", false, false, false, 42)) {
            echo "disabled";
        }
        // line 43
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "isReadOnly", [], "any", false, false, false, 43)) {
            echo "readonly";
        }
        // line 44
        echo "            ";
        echo call_user_func_array($this->env->getFunction('qa')->getCallable(), [[0 => "quantity-input"]]);
        echo ">
    ";
    }

    // line 39
    public function block_inputClass($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 40
    public function block_quantityCounterAttributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["component"], "macro_renderAttributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 40, $this->source); })())], 40, $context, $this->getSourceContext());
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/quantity-counter/quantity-counter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 40,  159 => 39,  152 => 44,  147 => 43,  142 => 42,  137 => 41,  135 => 40,  127 => 39,  124 => 38,  120 => 37,  114 => 52,  109 => 51,  103 => 49,  101 => 48,  97 => 47,  94 => 46,  92 => 37,  87 => 35,  82 => 34,  76 => 32,  74 => 31,  69 => 30,  65 => 29,  59 => 27,  55 => 1,  54 => 22,  53 => 21,  52 => 17,  50 => 15,  49 => 9,  48 => 4,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'quantity-counter',
    tag: 'quantity-counter'
} %}

{% define data = {
    isDisabled: false,
    isReadOnly: false,
    autoUpdate: false
} %}

{% set isEditable = not data.isReadOnly and not data.isDisabled %}

{% define attributes = {
    value: 1,
    type: \"number\",
    name: \"quantity\",
    onkeypress: isEditable ? null : \"return false;\",
    onkeydown: isEditable ? null : \"return false;\",
    min: 1,
    step: 1,
} %}

{% block attributes %}{% endblock %}

{% block body %}
    <button class=\"{{ config.name }}__button
                   {% if data.isDisabled or data.isReadOnly %}
                        {{ config.name }}__button--disabled
                   {% endif %}
                   {{ config.jsName }}__button-decrement
                   {{ config.name }}__button--decrement\">-</button>

    {% block quantityField %}
        <input
            class=\"{{ config.name }}__input {{ config.jsName }}__input {% block inputClass %}{% endblock %}\"
            {% block quantityCounterAttributes %}{{component.renderAttributes(attributes)}}{% endblock %}
            {% if data.autoUpdate %}data-auto-update=\"true\"{% endif %}
            {% if data.isDisabled %}disabled{% endif %}
            {% if data.isReadOnly %}readonly{% endif %}
            {{qa('quantity-input')}}>
    {% endblock %}

    <button class=\"{{ config.name }}__button
                   {% if data.isDisabled or data.isReadOnly %}
                       {{ config.name }}__button--disabled
                   {% endif %}
                   {{ config.jsName }}__button-increment
                   {{ config.name }}__button--increment\">+</button>
{% endblock %}

", "@ShopUi/components/molecules/quantity-counter/quantity-counter.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/quantity-counter/quantity-counter.twig");
    }
}
