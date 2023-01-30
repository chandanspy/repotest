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

/* @Dashboard/Index/index.twig */
class __TwigTemplate_6df3609d88acc7433f0d3cec5f2bc252e9a07ab167180a19296532355dcc420c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_title' => [$this, 'block_section_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Sales/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Sales/Layout/layout.twig", "@Dashboard/Index/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Dashboard"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pluginContents"]) || array_key_exists("pluginContents", $context) ? $context["pluginContents"] : (function () { throw new RuntimeError('Variable "pluginContents" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pluginContent"]) {
            // line 9
            echo "        ";
            $context["countPlugin"] = (((array_key_exists("countPlugin", $context)) ? (_twig_default_filter((isset($context["countPlugin"]) || array_key_exists("countPlugin", $context) ? $context["countPlugin"] : (function () { throw new RuntimeError('Variable "countPlugin" does not exist.', 9, $this->source); })()),  -1)) : ( -1)) + 1);
            // line 10
            echo "        ";
            if ((0 === twig_compare(((isset($context["countPlugin"]) || array_key_exists("countPlugin", $context) ? $context["countPlugin"] : (function () { throw new RuntimeError('Variable "countPlugin" does not exist.', 10, $this->source); })()) % 2), 0))) {
                // line 11
                echo "            <div class=\"row page-heading\">
        ";
            }
            // line 13
            echo "        <div class=\"col-lg-6\">
            ";
            // line 14
            echo $context["pluginContent"];
            echo "
        </div>
        ";
            // line 16
            if ((0 === twig_compare(((isset($context["countPlugin"]) || array_key_exists("countPlugin", $context) ? $context["countPlugin"] : (function () { throw new RuntimeError('Variable "countPlugin" does not exist.', 16, $this->source); })()) % 2), 1))) {
                // line 17
                echo "            </div>
        ";
            }
            // line 19
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pluginContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Dashboard/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 20,  91 => 19,  87 => 17,  85 => 16,  80 => 14,  77 => 13,  73 => 11,  70 => 10,  67 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Sales/Layout/layout.twig' %}

{% block section_title %}
    {{ 'Dashboard' | trans }}
{% endblock %}

{% block content %}
    {% for pluginContent in pluginContents %}
        {% set countPlugin = ( countPlugin | default(-1) ) + 1 %}
        {% if countPlugin%2 == 0 %}
            <div class=\"row page-heading\">
        {% endif %}
        <div class=\"col-lg-6\">
            {{ pluginContent | raw }}
        </div>
        {% if countPlugin%2 == 1 %}
            </div>
        {% endif %}
    {% endfor %}

{% endblock %}
", "@Dashboard/Index/index.twig", "/data/vendor/spryker/dashboard/src/Spryker/Zed/Dashboard/Presentation//Index/index.twig");
    }
}
