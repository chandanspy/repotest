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

/* @Sales/Matrix/index.twig */
class __TwigTemplate_80f29f6b78aa553e80ff1c4e661aa4020e838b17e9135d554753660318c463d3 extends Template
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
        $this->parent = $this->loadTemplate("@Sales/Layout/layout.twig", "@Sales/Matrix/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview of Order Matrix"), "html", null, true);
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
        $this->loadTemplate("@Sales/Matrix/index.twig", "@Sales/Matrix/index.twig", 9, "1998343363")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Matrix")]));
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Sales/Matrix/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 45,  65 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Sales/Layout/layout.twig' %}

{% block section_title %}
    {{ 'Overview of Order Matrix' | trans }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Matrix' | trans } %}

        {% block widget_content %}

            <table class=\"table\">
                <thead>
                {% for row in matrix | slice(0, 1) %}
                    <tr>
                        {% for element in row %}
                            <th>
                                {{ element | raw }}
                            </th>
                        {% endfor %}
                    </tr>
                {% endfor %}
                </thead>
                <tbody>
                {% for row in matrix | slice(1) %}
                    <tr>
                    {% for element in row %}
                        <td>
                        {{ element | raw }}
                        </td>
                    {% endfor %}
                    </tr>
                {% endfor %}
                </tbody>
            </table>


            <h3>{{ 'Legend' | trans }}</h3>
            <p>{{ '<1d | 1d-7d | >7d' | trans }}</p>

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Sales/Matrix/index.twig", "/data/vendor/spryker/sales/src/Spryker/Zed/Sales/Presentation/Matrix/index.twig");
    }
}


/* @Sales/Matrix/index.twig */
class __TwigTemplate_80f29f6b78aa553e80ff1c4e661aa4020e838b17e9135d554753660318c463d3___1998343363 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Sales/Matrix/index.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
            <table class=\"table\">
                <thead>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["matrix"]) || array_key_exists("matrix", $context) ? $context["matrix"] : (function () { throw new RuntimeError('Variable "matrix" does not exist.', 15, $this->source); })()), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 16
            echo "                    <tr>
                        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "                            <th>
                                ";
                // line 19
                echo $context["element"];
                echo "
                            </th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </thead>
                <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["matrix"]) || array_key_exists("matrix", $context) ? $context["matrix"] : (function () { throw new RuntimeError('Variable "matrix" does not exist.', 26, $this->source); })()), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            echo "                    <tr>
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 29
                echo "                        <td>
                        ";
                // line 30
                echo $context["element"];
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </tbody>
            </table>


            <h3>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Legend"), "html", null, true);
        echo "</h3>
            <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("<1d | 1d-7d | >7d"), "html", null, true);
        echo "</p>

        ";
    }

    public function getTemplateName()
    {
        return "@Sales/Matrix/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 40,  249 => 39,  243 => 35,  236 => 33,  227 => 30,  224 => 29,  220 => 28,  217 => 27,  213 => 26,  209 => 24,  202 => 22,  193 => 19,  190 => 18,  186 => 17,  183 => 16,  179 => 15,  174 => 12,  170 => 11,  159 => 9,  67 => 45,  65 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Sales/Layout/layout.twig' %}

{% block section_title %}
    {{ 'Overview of Order Matrix' | trans }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Matrix' | trans } %}

        {% block widget_content %}

            <table class=\"table\">
                <thead>
                {% for row in matrix | slice(0, 1) %}
                    <tr>
                        {% for element in row %}
                            <th>
                                {{ element | raw }}
                            </th>
                        {% endfor %}
                    </tr>
                {% endfor %}
                </thead>
                <tbody>
                {% for row in matrix | slice(1) %}
                    <tr>
                    {% for element in row %}
                        <td>
                        {{ element | raw }}
                        </td>
                    {% endfor %}
                    </tr>
                {% endfor %}
                </tbody>
            </table>


            <h3>{{ 'Legend' | trans }}</h3>
            <p>{{ '<1d | 1d-7d | >7d' | trans }}</p>

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Sales/Matrix/index.twig", "/data/vendor/spryker/sales/src/Spryker/Zed/Sales/Presentation/Matrix/index.twig");
    }
}
