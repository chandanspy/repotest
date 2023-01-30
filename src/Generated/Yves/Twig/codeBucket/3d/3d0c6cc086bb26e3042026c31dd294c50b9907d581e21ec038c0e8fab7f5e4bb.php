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

/* @ShopUi/components/molecules/toggler-click/toggler-click.twig */
class __TwigTemplate_553861cf65f49be9750e8d33e882236de7e61d73eb79efab8c2ecfa7ed2e73b1 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-click", "@SprykerShop:ShopUi"]), "@ShopUi/components/molecules/toggler-click/toggler-click.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["trigger-class-to-toggle" => ""], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/toggler-click/toggler-click.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 1,  41 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('toggler-click', '@SprykerShop:ShopUi') %}

{% define attributes = {
    'trigger-class-to-toggle': '',
} %}
", "@ShopUi/components/molecules/toggler-click/toggler-click.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/toggler-click/toggler-click.twig");
    }
}
