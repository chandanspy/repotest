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

/* @ShopUi/components/atoms/radio/radio.twig */
class __TwigTemplate_1de431c351e778a5ea66d84cbd13abeeb6dbc62ad7feefd69329558ccc8268cd extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["checkbox"]), "@ShopUi/components/atoms/radio/radio.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "radio"], $context['config']);        // line 7
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["type" => "radio"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/atoms/radio/radio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,  42 => 7,  41 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends atom('checkbox') %}

{% define config = {
    name: 'radio'
} %}

{% define attributes = {
    type: 'radio'
} %}
", "@ShopUi/components/atoms/radio/radio.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/atoms/radio/radio.twig");
    }
}
