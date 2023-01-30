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

/* @ShopUi/components/molecules/form-handler/form-handler.twig */
class __TwigTemplate_762ad39818b12028bebcb28a3cfe02a52ef56b7af31cf3713023139b0d534ae5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'class' => [$this, 'block_class'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/form-handler/form-handler.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "form-handler", "tag" => "form-handler"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["trigger-class-name" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "event" => "change", "change-action" => "false", "submit-form" => "true"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $this->displayParentBlock("class", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "jsName", [], "any", false, false, false, 16), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/form-handler/form-handler.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  49 => 15,  45 => 1,  44 => 9,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'form-handler',
    tag: 'form-handler',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'event': 'change',
    'change-action': 'false',
    'submit-form': 'true',
} %}

{%- block class -%}
    {{ parent() }} {{ config.jsName }}
{%- endblock -%}
", "@ShopUi/components/molecules/form-handler/form-handler.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form-handler/form-handler.twig");
    }
}
