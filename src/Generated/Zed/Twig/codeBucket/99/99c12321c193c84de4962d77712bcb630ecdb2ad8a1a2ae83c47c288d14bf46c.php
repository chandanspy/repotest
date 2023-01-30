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

/* @Oms/Index/index.twig */
class __TwigTemplate_6f3751ff8baa4974b3c2b46b692a2859f371bc01aaa37b813b3156263cd963ec extends Template
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
        return "@Application/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Application/Layout/layout.twig", "@Oms/Index/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@Oms/Index/index.twig", "@Oms/Index/index.twig", 4, "453697053")->display(twig_array_merge($context, ["widget_title" => "Processes"]));
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Oms/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 32,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Application/Layout/layout.twig' %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Processes' } %}

        {% block widget_content %}

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>{{ 'Processes' | trans }}</h1>
                </div>

                {% for process in processes %}
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h2>{{ process.name }}</h2>
                            </div>
                            <div class=\"panel-body\">
                                <a href=\"{{ url('/oms/index/draw', {process: process.name}) }}\" target=\"_blank\">{{ process.name }}</a>
                                <a style=\"font-size:10px;\" href=\"{{ url('/oms/index/draw-preview-version', {process: process.name}) }}\" target=\"_blank\">[{{ 'preview-version' | trans }}]</a>
                            </div>

                        </div>
                    </div>
                {% endfor %}
            </div>

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Oms/Index/index.twig", "/data/vendor/spryker/oms/src/Spryker/Zed/Oms/Presentation/Index/index.twig");
    }
}


/* @Oms/Index/index.twig */
class __TwigTemplate_6f3751ff8baa4974b3c2b46b692a2859f371bc01aaa37b813b3156263cd963ec___453697053 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Oms/Index/index.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processes"), "html", null, true);
        echo "</h1>
                </div>

                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["processes"]) || array_key_exists("processes", $context) ? $context["processes"] : (function () { throw new RuntimeError('Variable "processes" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["process"]) {
            // line 14
            echo "                    <div class=\"col-md-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h2>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["process"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</h2>
                            </div>
                            <div class=\"panel-body\">
                                <a href=\"";
            // line 20
            echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/oms/index/draw", ["process" => twig_get_attribute($this->env, $this->source, $context["process"], "name", [], "any", false, false, false, 20)]]);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["process"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</a>
                                <a style=\"font-size:10px;\" href=\"";
            // line 21
            echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/oms/index/draw-preview-version", ["process" => twig_get_attribute($this->env, $this->source, $context["process"], "name", [], "any", false, false, false, 21)]]);
            echo "\" target=\"_blank\">[";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("preview-version"), "html", null, true);
            echo "]</a>
                            </div>

                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['process'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>

        ";
    }

    public function getTemplateName()
    {
        return "@Oms/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 27,  179 => 21,  173 => 20,  167 => 17,  162 => 14,  158 => 13,  152 => 10,  147 => 7,  143 => 6,  132 => 4,  53 => 32,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Application/Layout/layout.twig' %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Processes' } %}

        {% block widget_content %}

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>{{ 'Processes' | trans }}</h1>
                </div>

                {% for process in processes %}
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h2>{{ process.name }}</h2>
                            </div>
                            <div class=\"panel-body\">
                                <a href=\"{{ url('/oms/index/draw', {process: process.name}) }}\" target=\"_blank\">{{ process.name }}</a>
                                <a style=\"font-size:10px;\" href=\"{{ url('/oms/index/draw-preview-version', {process: process.name}) }}\" target=\"_blank\">[{{ 'preview-version' | trans }}]</a>
                            </div>

                        </div>
                    </div>
                {% endfor %}
            </div>

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Oms/Index/index.twig", "/data/vendor/spryker/oms/src/Spryker/Zed/Oms/Presentation/Index/index.twig");
    }
}
