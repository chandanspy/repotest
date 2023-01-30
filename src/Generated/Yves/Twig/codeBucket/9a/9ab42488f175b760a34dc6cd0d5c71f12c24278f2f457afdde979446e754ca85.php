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

/* @ShopUi/components/molecules/breakpoint-dependent-block-placer/breakpoint-dependent-block-placer.twig */
class __TwigTemplate_b26542b205c74dc06062970abc53cf50787cef6decbf7e20e0b32517d83531a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/breakpoint-dependent-block-placer/breakpoint-dependent-block-placer.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "breakpoint-dependent-block-placer", "tag" => "breakpoint-dependent-block-placer"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["block-class-name" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })())], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/breakpoint-dependent-block-placer/breakpoint-dependent-block-placer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 1,  43 => 9,  42 => 8,  41 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'breakpoint-dependent-block-placer',
    tag: 'breakpoint-dependent-block-placer',
} %}

{% define attributes = {
    'block-class-name': required,
} %}
", "@ShopUi/components/molecules/breakpoint-dependent-block-placer/breakpoint-dependent-block-placer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/breakpoint-dependent-block-placer/breakpoint-dependent-block-placer.twig");
    }
}
