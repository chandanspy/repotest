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

/* @Gui/Partials/breadcrumb.twig */
class __TwigTemplate_0e1649530b263fa2d32d422e55ff033a46b3fa98e93e3338b3c0cadfc4e3faed extends Template
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
        return "@Gui/Partials/backward-compatible-breadcrumb.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["breadcrumbs"] = call_user_func_array($this->env->getFunction('breadcrumb')->getCallable(), []);
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Partials/backward-compatible-breadcrumb.twig", "@Gui/Partials/breadcrumb.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@Gui/Partials/breadcrumb.twig";
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
        return new Source("{% extends '@Gui/Partials/backward-compatible-breadcrumb.twig' %}
{% set breadcrumbs = breadcrumb() %}
", "@Gui/Partials/breadcrumb.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Partials/breadcrumb.twig");
    }
}
