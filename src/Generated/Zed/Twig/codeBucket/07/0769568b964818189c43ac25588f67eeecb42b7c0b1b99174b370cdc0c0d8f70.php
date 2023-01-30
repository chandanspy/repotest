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

/* @Development/ModuleOverview/index.twig */
class __TwigTemplate_facb17a8e4ef20eef89fd4b27db1bbfcfacfc6c3609b72489612ce9f7d8dc78c extends Template
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
        $this->parent = $this->loadTemplate("@Application/Layout/layout.twig", "@Development/ModuleOverview/index.twig", 1);
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
        $this->loadTemplate("@Development/ModuleOverview/index.twig", "@Development/ModuleOverview/index.twig", 5, "112376865")->display(twig_array_merge($context, ["widget_title" => "Module overview"]));
    }

    public function getTemplateName()
    {
        return "@Development/ModuleOverview/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Application/Layout/layout.twig' %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Module overview' } %}
        {% block widget_content %}
            <div class=\"spy-layout sparse\" xmlns=\"http://www.w3.org/1999/html\">
                <table class=\"table-condensed table-hover table-striped\">
                    <tr>
                        <th>{{ 'Module name' | trans }}</th>
                        <th>{{ 'Core module' | trans }}</th>
                        <th>{{ 'Project module' | trans }}</th>
                    </tr>
                    {% for moduleName, moduleOverviewTransfer in moduleOverviewTransferCollection %}
                    <tr>
                        <td>{{ moduleName }}</td>
                        <td><span class=\"glyphicon glyphicon-{% if moduleOverviewTransfer.existsCoreModule %}ok{% else %}remove{% endif %}\"></span></td>
                        <td><span class=\"glyphicon glyphicon-{% if moduleOverviewTransfer.existsProjectModule %}ok{% else %}remove{% endif %}\"></span></td>
                    </tr>
                    {% endfor %}
                </table>
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@Development/ModuleOverview/index.twig", "/data/vendor/spryker/development/src/Spryker/Zed/Development/Presentation/ModuleOverview/index.twig");
    }
}


/* @Development/ModuleOverview/index.twig */
class __TwigTemplate_facb17a8e4ef20eef89fd4b27db1bbfcfacfc6c3609b72489612ce9f7d8dc78c___112376865 extends Template
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
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Development/ModuleOverview/index.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            <div class=\"spy-layout sparse\" xmlns=\"http://www.w3.org/1999/html\">
                <table class=\"table-condensed table-hover table-striped\">
                    <tr>
                        <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module name"), "html", null, true);
        echo "</th>
                        <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Core module"), "html", null, true);
        echo "</th>
                        <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Project module"), "html", null, true);
        echo "</th>
                    </tr>
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduleOverviewTransferCollection"]) || array_key_exists("moduleOverviewTransferCollection", $context) ? $context["moduleOverviewTransferCollection"] : (function () { throw new RuntimeError('Variable "moduleOverviewTransferCollection" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["moduleName"] => $context["moduleOverviewTransfer"]) {
            // line 15
            echo "                    <tr>
                        <td>";
            // line 16
            echo twig_escape_filter($this->env, $context["moduleName"], "html", null, true);
            echo "</td>
                        <td><span class=\"glyphicon glyphicon-";
            // line 17
            if (twig_get_attribute($this->env, $this->source, $context["moduleOverviewTransfer"], "existsCoreModule", [], "any", false, false, false, 17)) {
                echo "ok";
            } else {
                echo "remove";
            }
            echo "\"></span></td>
                        <td><span class=\"glyphicon glyphicon-";
            // line 18
            if (twig_get_attribute($this->env, $this->source, $context["moduleOverviewTransfer"], "existsProjectModule", [], "any", false, false, false, 18)) {
                echo "ok";
            } else {
                echo "remove";
            }
            echo "\"></span></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['moduleName'], $context['moduleOverviewTransfer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </table>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@Development/ModuleOverview/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 21,  174 => 18,  166 => 17,  162 => 16,  159 => 15,  155 => 14,  150 => 12,  146 => 11,  142 => 10,  137 => 7,  133 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Application/Layout/layout.twig' %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Module overview' } %}
        {% block widget_content %}
            <div class=\"spy-layout sparse\" xmlns=\"http://www.w3.org/1999/html\">
                <table class=\"table-condensed table-hover table-striped\">
                    <tr>
                        <th>{{ 'Module name' | trans }}</th>
                        <th>{{ 'Core module' | trans }}</th>
                        <th>{{ 'Project module' | trans }}</th>
                    </tr>
                    {% for moduleName, moduleOverviewTransfer in moduleOverviewTransferCollection %}
                    <tr>
                        <td>{{ moduleName }}</td>
                        <td><span class=\"glyphicon glyphicon-{% if moduleOverviewTransfer.existsCoreModule %}ok{% else %}remove{% endif %}\"></span></td>
                        <td><span class=\"glyphicon glyphicon-{% if moduleOverviewTransfer.existsProjectModule %}ok{% else %}remove{% endif %}\"></span></td>
                    </tr>
                    {% endfor %}
                </table>
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@Development/ModuleOverview/index.twig", "/data/vendor/spryker/development/src/Spryker/Zed/Development/Presentation/ModuleOverview/index.twig");
    }
}
