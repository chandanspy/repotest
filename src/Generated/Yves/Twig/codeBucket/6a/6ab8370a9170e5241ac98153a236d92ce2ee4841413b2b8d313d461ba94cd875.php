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

/* @ShopUi/components/molecules/form-submitter/form-submitter.twig */
class __TwigTemplate_be49cbeed50cdadf33b789a174602881e95c38b4559bb02909dbcd1b5b2fd394 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form-submitter", "@SprykerShop:ShopUi"]), "@ShopUi/components/molecules/form-submitter/form-submitter.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["form-class-name" => ""], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/form-submitter/form-submitter.twig";
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
        return new Source("{% extends molecule('form-submitter', '@SprykerShop:ShopUi') %}

{% define attributes = {
    'form-class-name': '',
} %}
", "@ShopUi/components/molecules/form-submitter/form-submitter.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/form-submitter/form-submitter.twig");
    }
}
