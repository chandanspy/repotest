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

/* @ShopUi/components/molecules/toggler-hash/toggler-hash.twig */
class __TwigTemplate_a773e84b4db55ba71e17c0aa0126885be4a8fa4eaea30fed6b2717f3e897f7ff extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/toggler-hash/toggler-hash.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "toggler-hash", "tag" => "toggler-hash"], $context['config']);        // line 9
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["trigger-hash" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "target-selector" => "", "target-class-name" => "", "class-to-toggle" => "is-hidden", "add-class-when-hash-in-url" => true], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/toggler-hash/toggler-hash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 1,  43 => 10,  42 => 9,  41 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'toggler-hash',
    tag: 'toggler-hash',
} %}

{# @deprecated property \"target-selector\" is deprecated: use \"target-class-name\" instead. #}
{% define attributes = {
    'trigger-hash': required,
    'target-selector': '',
    'target-class-name': '',
    'class-to-toggle': 'is-hidden',
    'add-class-when-hash-in-url': true,
} %}
", "@ShopUi/components/molecules/toggler-hash/toggler-hash.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/toggler-hash/toggler-hash.twig");
    }
}
