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

/* @CatalogPage/components/molecules/window-location-applicator/window-location-applicator.twig */
class __TwigTemplate_345760b92d57d1eaaa134dfd9abc7ba6767160d34d5deaa3274558ef5aa0125d extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["window-location-applicator", "@SprykerShop:CatalogPage"]), "@CatalogPage/components/molecules/window-location-applicator/window-location-applicator.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["sort-trigger-class-name" =>         // line 4
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 4, $this->source); })())], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/window-location-applicator/window-location-applicator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,  42 => 4,  41 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('window-location-applicator', '@SprykerShop:CatalogPage') %}

{% define attributes = {
    'sort-trigger-class-name': required,
} %}
", "@CatalogPage/components/molecules/window-location-applicator/window-location-applicator.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/window-location-applicator/window-location-applicator.twig");
    }
}
