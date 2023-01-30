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

/* @Development/Dependency/index.twig */
class __TwigTemplate_985e373cd4aac568a8dc99a696f027083133fdfb6ab4afc403e433fffeb0e3c8 extends Template
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
        $this->parent = $this->loadTemplate("@Application/Layout/layout.twig", "@Development/Dependency/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("@Development/Dependency/index.twig", "@Development/Dependency/index.twig", 5, "1696111910")->display(twig_array_merge($context, ["widget_title" => "Dependency graphs of all core modules"]));
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Development/Dependency/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 30,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Application/Layout/layout.twig' %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Dependency graphs of all core modules' } %}
        {% block widget_content %}
            <div class=\"spy-layout sparse\">
                <p>
                    <a href=\"/development/dependency/simple?build-tree=true\">{{ 'Simple Dependency Graph' | trans }}</a> |
                    <a href=\"/development/dependency/adjacency-matrix?build-tree=true\">{{ 'Adjacency Matrix' | trans }}</a></p>

                <table class=\"table-condensed table-hover table-striped table-dependency\">
                    {% for module in modules %}
                        <tr>
                            <td class=\"text-right\">{{ module.name }}</td>
                            <td>
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/dependency/incoming', {bundle: module.name}) }}\">{{ 'in' | trans }}</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/dependency/outgoing', {bundle: module.name}) }}\">{{ 'out' | trans }}</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/dependency/outgoing-graph', {bundle: module.name}) }}\">{{ 'out graph' | trans }}</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/dependency/simple', {bundle: module.name}) }}\">{{ 'simple' | trans }}</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/dependency/dependency-tree-graph', {bundle: module.name}) }}\">{{ 'detailed' | trans }}</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/dependency/adjacency-matrix', {bundle: module.name}) }}\">{{ 'adjacency' | trans }}</a>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        {% endblock %}
    {% endembed %}

{% endblock %}
", "@Development/Dependency/index.twig", "/data/vendor/spryker/development/src/Spryker/Zed/Development/Presentation/Dependency/index.twig");
    }
}


/* @Development/Dependency/index.twig */
class __TwigTemplate_985e373cd4aac568a8dc99a696f027083133fdfb6ab4afc403e433fffeb0e3c8___1696111910 extends Template
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
        // line 5
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Development/Dependency/index.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <div class=\"spy-layout sparse\">
                <p>
                    <a href=\"/development/dependency/simple?build-tree=true\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Simple Dependency Graph"), "html", null, true);
        echo "</a> |
                    <a href=\"/development/dependency/adjacency-matrix?build-tree=true\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adjacency Matrix"), "html", null, true);
        echo "</a></p>

                <table class=\"table-condensed table-hover table-striped table-dependency\">
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) || array_key_exists("modules", $context) ? $context["modules"] : (function () { throw new RuntimeError('Variable "modules" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 14
            echo "                        <tr>
                            <td class=\"text-right\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-xs btn-default\" href=\"";
            // line 17
            echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/development/dependency/incoming", ["bundle" => twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 17)]]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("in"), "html", null, true);
            echo "</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"";
            // line 18
            echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/development/dependency/outgoing", ["bundle" => twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 18)]]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("out"), "html", null, true);
            echo "</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"";
            // line 19
            echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/development/dependency/outgoing-graph", ["bundle" => twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 19)]]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("out graph"), "html", null, true);
            echo "</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"";
            // line 20
            echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/development/dependency/simple", ["bundle" => twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 20)]]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("simple"), "html", null, true);
            echo "</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"";
            // line 21
            echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/development/dependency/dependency-tree-graph", ["bundle" => twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 21)]]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("detailed"), "html", null, true);
            echo "</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"";
            // line 22
            echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/development/dependency/adjacency-matrix", ["bundle" => twig_get_attribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 22)]]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("adjacency"), "html", null, true);
            echo "</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </table>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@Development/Dependency/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 26,  203 => 22,  197 => 21,  191 => 20,  185 => 19,  179 => 18,  173 => 17,  168 => 15,  165 => 14,  161 => 13,  155 => 10,  151 => 9,  147 => 7,  143 => 6,  132 => 5,  55 => 30,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Application/Layout/layout.twig' %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Dependency graphs of all core modules' } %}
        {% block widget_content %}
            <div class=\"spy-layout sparse\">
                <p>
                    <a href=\"/development/dependency/simple?build-tree=true\">{{ 'Simple Dependency Graph' | trans }}</a> |
                    <a href=\"/development/dependency/adjacency-matrix?build-tree=true\">{{ 'Adjacency Matrix' | trans }}</a></p>

                <table class=\"table-condensed table-hover table-striped table-dependency\">
                    {% for module in modules %}
                        <tr>
                            <td class=\"text-right\">{{ module.name }}</td>
                            <td>
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/dependency/incoming', {bundle: module.name}) }}\">{{ 'in' | trans }}</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/dependency/outgoing', {bundle: module.name}) }}\">{{ 'out' | trans }}</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/dependency/outgoing-graph', {bundle: module.name}) }}\">{{ 'out graph' | trans }}</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/dependency/simple', {bundle: module.name}) }}\">{{ 'simple' | trans }}</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/dependency/dependency-tree-graph', {bundle: module.name}) }}\">{{ 'detailed' | trans }}</a>&nbsp;
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/dependency/adjacency-matrix', {bundle: module.name}) }}\">{{ 'adjacency' | trans }}</a>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        {% endblock %}
    {% endembed %}

{% endblock %}
", "@Development/Dependency/index.twig", "/data/vendor/spryker/development/src/Spryker/Zed/Development/Presentation/Dependency/index.twig");
    }
}
