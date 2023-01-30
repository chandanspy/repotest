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

/* @ShopUi/components/molecules/node-animator/node-animator.twig */
class __TwigTemplate_26fc00820c906743ce48dd7aae46abf5a9fa99812d24cd19218c843548257cb9 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/node-animator/node-animator.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "node-animator", "tag" => "node-animator"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["trigger-class-name" => (("js-" . twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9)) . "__trigger"), "target-class-name" => "cart-counter", "node-class-name" => "lazy-image", "wrapper-class-name" => "js-product-item", "clone-node-class-names" => "", "animation-duration" => 1000], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/node-animator/node-animator.twig";
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
    name: 'node-animator',
    tag: 'node-animator',
} %}

{% define attributes = {
    'trigger-class-name': 'js-' ~ config.name ~ '__trigger',
    'target-class-name': 'cart-counter',
    'node-class-name': 'lazy-image',
    'wrapper-class-name': 'js-product-item',
    'clone-node-class-names': '',
    'animation-duration': 1000,
} %}
", "@ShopUi/components/molecules/node-animator/node-animator.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/node-animator/node-animator.twig");
    }
}
