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

/* @Gui/Partials/navigation.twig */
class __TwigTemplate_f5a1b1ad7aea03e6610829987916a4c4a0f5d74ce0a10871946971df2c2fea1c extends Template
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
        return "@Gui/Partials/menu.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["navigation"] = call_user_func_array($this->env->getFunction('navigation')->getCallable(), []);
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Partials/menu.twig", "@Gui/Partials/navigation.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@Gui/Partials/navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,  41 => 2,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Partials/menu.twig' %}
{% set navigation = navigation() %}
", "@Gui/Partials/navigation.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Partials/navigation.twig");
    }
}
