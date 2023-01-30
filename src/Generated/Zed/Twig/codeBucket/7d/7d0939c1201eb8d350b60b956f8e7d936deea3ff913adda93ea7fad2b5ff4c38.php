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

/* @ErrorHandler/Error/error404.twig */
class __TwigTemplate_23f88b62161c983da8d587944bfde76a605c98149ef6a4125fa0c4b7eef8a805 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ErrorHandler/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@ErrorHandler/Layout/layout.twig", "@ErrorHandler/Error/error404.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"box\">
        <h1>";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error")), "html", null, true);
        echo " 404</h1>
        <p>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@ErrorHandler/Error/error404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ErrorHandler/Layout/layout.twig' %}

{% block content %}
    <div class=\"box\">
        <h1>{{ 'Error' | trans | upper }} 404</h1>
        <p>{{ error }}</p>
    </div>
{% endblock %}
", "@ErrorHandler/Error/error404.twig", "/data/vendor/spryker/error-handler/src/Spryker/Zed/ErrorHandler/Presentation//Error/error404.twig");
    }
}
