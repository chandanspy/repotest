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

/* @ShoppingListWidget/components/molecules/form-data-injector/form-data-injector.twig */
class __TwigTemplate_589f0e641e6462ca55278c18d8e9b060cdc5bf71cf3f05504cdfffbeddb0e7e4 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShoppingListWidget/components/molecules/form-data-injector/form-data-injector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "form-data-injector", "tag" => "form-data-injector"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["destination-form-class-name" => "", "fields-selector" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })())], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShoppingListWidget/components/molecules/form-data-injector/form-data-injector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 1,  43 => 10,  42 => 8,  41 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'form-data-injector',
    tag: 'form-data-injector',
} %}

{% define attributes = {
    'destination-form-class-name': '',
    'fields-selector': required,
} %}
", "@ShoppingListWidget/components/molecules/form-data-injector/form-data-injector.twig", "/data/vendor/spryker-shop/shopping-list-widget/src/SprykerShop/Yves/ShoppingListWidget/Theme/default/components/molecules/form-data-injector/form-data-injector.twig");
    }
}
