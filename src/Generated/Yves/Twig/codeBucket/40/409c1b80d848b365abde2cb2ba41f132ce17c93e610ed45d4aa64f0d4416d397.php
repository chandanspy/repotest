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

/* @ShopUi/components/atoms/node/node.twig */
class __TwigTemplate_e27471bfeb27edb4bf00645244f8278a561a93d7fbb7a2d200142bd3154d0cf9 extends Template
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
            'url' => [$this, 'block_url'],
            'externalUrl' => [$this, 'block_externalUrl'],
            'other' => [$this, 'block_other'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/atoms/node/node.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "node", "tag" => "span"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["node" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })())], $context['data']);        // line 12
        $context["today"] = twig_date_format_filter($this->env, "now", "Ymd");
        // line 13
        $context["node"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "node", [], "any", false, false, false, 13);
        // line 14
        $context["type"] = twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 14, $this->source); })()), "nodeType", [], "any", false, false, false, 14);
        // line 15
        $context["isActive"] = twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 15, $this->source); })()), "isActive", [], "any", false, false, false, 15);
        // line 16
        $context["isValidFrom"] = ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isValidFrom", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isValidFrom", [], "any", false, false, false, 16), (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 16, $this->source); })()), "validFrom", [], "any", false, false, false, 16)) || (0 >= twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 16, $this->source); })()), "validFrom", [], "any", false, false, false, 16), "Ymd"), (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 16, $this->source); })())))))) : ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 16, $this->source); })()), "validFrom", [], "any", false, false, false, 16)) || (0 >= twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 16, $this->source); })()), "validFrom", [], "any", false, false, false, 16), "Ymd"), (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 16, $this->source); })()))))));
        // line 17
        $context["isValidTo"] = ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isValidTo", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isValidTo", [], "any", false, false, false, 17), (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 17, $this->source); })()), "validTo", [], "any", false, false, false, 17)) || (0 <= twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 17, $this->source); })()), "validTo", [], "any", false, false, false, 17), "Ymd"), (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 17, $this->source); })())))))) : ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 17, $this->source); })()), "validTo", [], "any", false, false, false, 17)) || (0 <= twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["node"]) || array_key_exists("node", $context) ? $context["node"] : (function () { throw new RuntimeError('Variable "node" does not exist.', 17, $this->source); })()), "validTo", [], "any", false, false, false, 17), "Ymd"), (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 17, $this->source); })()))))));
        // line 18
        $context["isActiveAndValid"] = ((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isActiveAndValid", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isActiveAndValid", [], "any", false, false, false, 18), (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 18, $this->source); })()) && (isset($context["isValidFrom"]) || array_key_exists("isValidFrom", $context) ? $context["isValidFrom"] : (function () { throw new RuntimeError('Variable "isValidFrom" does not exist.', 18, $this->source); })())) && (isset($context["isValidTo"]) || array_key_exists("isValidTo", $context) ? $context["isValidTo"] : (function () { throw new RuntimeError('Variable "isValidTo" does not exist.', 18, $this->source); })())))) : ((((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 18, $this->source); })()) && (isset($context["isValidFrom"]) || array_key_exists("isValidFrom", $context) ? $context["isValidFrom"] : (function () { throw new RuntimeError('Variable "isValidFrom" does not exist.', 18, $this->source); })())) && (isset($context["isValidTo"]) || array_key_exists("isValidTo", $context) ? $context["isValidTo"] : (function () { throw new RuntimeError('Variable "isValidTo" does not exist.', 18, $this->source); })()))));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        if ((isset($context["isActiveAndValid"]) || array_key_exists("isActiveAndValid", $context) ? $context["isActiveAndValid"] : (function () { throw new RuntimeError('Variable "isActiveAndValid" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "        ";
            $this->displayParentBlock("component", $context, $blocks);
            echo "
    ";
        }
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        if ((((0 === twig_compare((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 27, $this->source); })()), "category")) || (0 === twig_compare((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 27, $this->source); })()), "link"))) || (0 === twig_compare((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 27, $this->source); })()), "cms_page")))) {
            // line 28
            echo "        ";
            $this->displayBlock('url', $context, $blocks);
            // line 29
            echo "    ";
        } elseif ((0 === twig_compare((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()), "external_url"))) {
            // line 30
            echo "        ";
            $this->displayBlock('externalUrl', $context, $blocks);
            // line 31
            echo "    ";
        } else {
            // line 32
            echo "        ";
            $this->displayBlock('other', $context, $blocks);
            // line 33
            echo "    ";
        }
    }

    // line 28
    public function block_url($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 30
    public function block_externalUrl($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 32
    public function block_other($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/atoms/node/node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 32,  115 => 30,  109 => 28,  104 => 33,  101 => 32,  98 => 31,  95 => 30,  92 => 29,  89 => 28,  86 => 27,  82 => 26,  74 => 22,  71 => 21,  67 => 20,  63 => 1,  61 => 18,  59 => 17,  57 => 16,  55 => 15,  53 => 14,  51 => 13,  49 => 12,  48 => 9,  47 => 8,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'node',
    tag: 'span',
} %}

{% define data = {
    node: required,
} %}

{% set today = 'now' | date('Ymd') %}
{% set node = data.node %}
{% set type = node.nodeType %}
{% set isActive = node.isActive %}
{% set isValidFrom = node.isValidFrom | default(node.validFrom is empty or node.validFrom | date('Ymd') <= today) %}
{% set isValidTo = node.isValidTo | default(node.validTo is empty or node.validTo | date('Ymd') >= today) %}
{% set isActiveAndValid = node.isActiveAndValid | default(isActive and isValidFrom and isValidTo) %}

{% block component %}
    {% if isActiveAndValid %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block body %}
    {% if type == 'category' or type == 'link' or type == 'cms_page' %}
        {% block url %}{% endblock %}
    {% elseif type == 'external_url' %}
        {% block externalUrl %}{% endblock %}
    {% else %}
        {% block other %}{% endblock %}
    {% endif %}
{% endblock %}
", "@ShopUi/components/atoms/node/node.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/atoms/node/node.twig");
    }
}
