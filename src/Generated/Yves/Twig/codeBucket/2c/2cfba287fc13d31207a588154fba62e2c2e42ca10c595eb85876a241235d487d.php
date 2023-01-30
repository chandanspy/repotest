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

/* @ShopUi/components/molecules/viewport-intersection-observer/viewport-intersection-observer.twig */
class __TwigTemplate_ad7af9591d395a8a68d19614fa1a17ae522a782601f1faeeae2dea55cba5af30 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/viewport-intersection-observer/viewport-intersection-observer.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "viewport-intersection-observer", "tag" => "viewport-intersection-observer"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["viewport-class-name" => "", "viewport-margin" => "0px", "visibility-threshold" => 0, "observe-visible-targets" => false, "target-class-name" => (("js-" . twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13)) . "__target")], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/viewport-intersection-observer/viewport-intersection-observer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 1,  43 => 13,  42 => 8,  41 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'viewport-intersection-observer',
    tag: 'viewport-intersection-observer',
} %}

{% define attributes = {
    'viewport-class-name': '',
    'viewport-margin': '0px',
    'visibility-threshold': 0,
    'observe-visible-targets': false,
    'target-class-name': 'js-' ~ config.name ~ '__target',
} %}
", "@ShopUi/components/molecules/viewport-intersection-observer/viewport-intersection-observer.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/viewport-intersection-observer/viewport-intersection-observer.twig");
    }
}
