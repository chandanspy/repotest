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

/* @Development/Architecture/index.twig */
class __TwigTemplate_49263cc47d5e7d41c6f1aa05510079e5b30a105f26ac8d0bb189809882802f14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'action' => [$this, 'block_action'],
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
        $this->parent = $this->loadTemplate("@Application/Layout/layout.twig", "@Development/Architecture/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo call_user_func_array($this->env->getFunction('viewActionButton')->getCallable(), ["/development/architecture/rules", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Display all architecture rules")]);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("@Development/Architecture/index.twig", "@Development/Architecture/index.twig", 9, "302035708")->display(twig_array_merge($context, ["widget_title" => "Architecture sniffer results"]));
        // line 40
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Development/Architecture/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 40,  65 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Application/Layout/layout.twig' %}

{% block action %}
    {{ viewActionButton('/development/architecture/rules', 'Display all architecture rules' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Architecture sniffer results' } %}
        {% block widget_content %}
            <div class=\"spy-layout sparse\">

                <table class=\"table-condensed table-hover table-striped table-dependency\">
                    <tr>

                        <th>{{ 'Namespace' | trans }}</th>
                        <th>{{ 'Module' | trans }}</th>
                        <th>{{ 'Application' | trans }}</th>
                    </tr>

                    {% for bundle in bundles %}

                        <tr>
                            <td>{{ bundle.namespace }}</td>
                            <td>{{ bundle.bundle }}</td>
                            <td>{{ bundle.application }}</td>
                            <td>
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/architecture/check-bundle',
                                {bundle: bundle.bundle, namespace: bundle.namespace, application: bundle.application, directory: bundle.directory}) }}\">
                                    {{ 'Check for violations' | trans }}
                                </a>&nbsp;
                            </td>
                        </tr>

                    {% endfor %}
                </table>
            </div>
        {% endblock %}
    {% endembed %}

{% endblock %}
", "@Development/Architecture/index.twig", "/data/vendor/spryker/development/src/Spryker/Zed/Development/Presentation//Architecture/index.twig");
    }
}


/* @Development/Architecture/index.twig */
class __TwigTemplate_49263cc47d5e7d41c6f1aa05510079e5b30a105f26ac8d0bb189809882802f14___302035708 extends Template
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
        // line 9
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Development/Architecture/index.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            <div class=\"spy-layout sparse\">

                <table class=\"table-condensed table-hover table-striped table-dependency\">
                    <tr>

                        <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Namespace"), "html", null, true);
        echo "</th>
                        <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module"), "html", null, true);
        echo "</th>
                        <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Application"), "html", null, true);
        echo "</th>
                    </tr>

                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bundles"]) || array_key_exists("bundles", $context) ? $context["bundles"] : (function () { throw new RuntimeError('Variable "bundles" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
            // line 22
            echo "
                        <tr>
                            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "namespace", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "bundle", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "application", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-xs btn-default\" href=\"";
            // line 28
            echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/development/architecture/check-bundle", ["bundle" => twig_get_attribute($this->env, $this->source,             // line 29
$context["bundle"], "bundle", [], "any", false, false, false, 29), "namespace" => twig_get_attribute($this->env, $this->source, $context["bundle"], "namespace", [], "any", false, false, false, 29), "application" => twig_get_attribute($this->env, $this->source, $context["bundle"], "application", [], "any", false, false, false, 29), "directory" => twig_get_attribute($this->env, $this->source, $context["bundle"], "directory", [], "any", false, false, false, 29)]]);
            echo "\">
                                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check for violations"), "html", null, true);
            echo "
                                </a>&nbsp;
                            </td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bundle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </table>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@Development/Architecture/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 36,  216 => 30,  212 => 29,  211 => 28,  206 => 26,  202 => 25,  198 => 24,  194 => 22,  190 => 21,  184 => 18,  180 => 17,  176 => 16,  169 => 11,  165 => 10,  154 => 9,  67 => 40,  65 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Application/Layout/layout.twig' %}

{% block action %}
    {{ viewActionButton('/development/architecture/rules', 'Display all architecture rules' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Architecture sniffer results' } %}
        {% block widget_content %}
            <div class=\"spy-layout sparse\">

                <table class=\"table-condensed table-hover table-striped table-dependency\">
                    <tr>

                        <th>{{ 'Namespace' | trans }}</th>
                        <th>{{ 'Module' | trans }}</th>
                        <th>{{ 'Application' | trans }}</th>
                    </tr>

                    {% for bundle in bundles %}

                        <tr>
                            <td>{{ bundle.namespace }}</td>
                            <td>{{ bundle.bundle }}</td>
                            <td>{{ bundle.application }}</td>
                            <td>
                                <a class=\"btn btn-xs btn-default\" href=\"{{ url('/development/architecture/check-bundle',
                                {bundle: bundle.bundle, namespace: bundle.namespace, application: bundle.application, directory: bundle.directory}) }}\">
                                    {{ 'Check for violations' | trans }}
                                </a>&nbsp;
                            </td>
                        </tr>

                    {% endfor %}
                </table>
            </div>
        {% endblock %}
    {% endembed %}

{% endblock %}
", "@Development/Architecture/index.twig", "/data/vendor/spryker/development/src/Spryker/Zed/Development/Presentation//Architecture/index.twig");
    }
}
