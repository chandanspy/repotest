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

/* @ShopUi/components/molecules/custom-select/custom-select.twig */
class __TwigTemplate_1ec9d6ee3b4b831f0827db7618bc5fc5e0abc1fdbb9cc21c5f9ca0487b76754d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'selectClass' => [$this, 'block_selectClass'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["select"]), "@ShopUi/components/molecules/custom-select/custom-select.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "custom-select", "tag" => "custom-select"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["config-width" => "resolve", "config-theme" => "default", "config-dropdown-auto-width" => "", "config-dropdown-right" => "", "auto-init" => true], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_selectClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "jsName", [], "any", false, false, false, 16), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/custom-select/custom-select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  44 => 1,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends atom('select') %}

{% define config = {
    name: 'custom-select',
    tag: 'custom-select',
} %}

{% define attributes = {
    'config-width': 'resolve',
    'config-theme': 'default',
    'config-dropdown-auto-width': '',
    'config-dropdown-right': '',
    'auto-init': true,
} %}

{% block selectClass %}{{ config.jsName }}{% endblock %}
", "@ShopUi/components/molecules/custom-select/custom-select.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/custom-select/custom-select.twig");
    }
}
