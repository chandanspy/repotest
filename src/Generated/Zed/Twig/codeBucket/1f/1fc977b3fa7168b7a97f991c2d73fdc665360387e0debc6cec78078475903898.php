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

/* @ChartGui/Chart/_partials/plotly-chart.twig */
class __TwigTemplate_07f1e641c0dcdd43e8e674cc45c5ccb53f9dc5070edde88586b92b27d1434f1c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'chartContent' => [$this, 'block_chartContent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["chartDivId"] = (((isset($context["chartType"]) || array_key_exists("chartType", $context) ? $context["chartType"] : (function () { throw new RuntimeError('Variable "chartType" does not exist.', 1, $this->source); })()) . "-") . twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1, $this->source); })()), "key", [], "any", false, false, false, 1));
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('chartContent', $context, $blocks);
    }

    public function block_chartContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "traces", [], "any", false, false, false, 4)), 0))) {
            // line 5
            echo "        ";
            $context["layout"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 5, $this->source); })()), "toArray", [], "any", false, false, false, 5), ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,             // line 6
($context["layout"] ?? null), "title", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "title", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6))) : (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6)))), "margin" => ["l" => (8 *             // line 7
(isset($context["maxLabeLength"]) || array_key_exists("maxLabeLength", $context) ? $context["maxLabeLength"] : (function () { throw new RuntimeError('Variable "maxLabeLength" does not exist.', 7, $this->source); })()))], "yaxis" => ["dtick" => 1]]);
            // line 10
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["chartDivId"]) || array_key_exists("chartDivId", $context) ? $context["chartDivId"] : (function () { throw new RuntimeError('Variable "chartDivId" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\"></div>

        <script src=\"";
            // line 12
            echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-chart-plotly-main.js"]);
            echo "\"></script>
        <script>/*<![CDATA[*/
            document.addEventListener('DOMContentLoaded', function(event) {
                ChartPlotly.newPlot('";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["chartDivId"]) || array_key_exists("chartDivId", $context) ? $context["chartDivId"] : (function () { throw new RuntimeError('Variable "chartDivId" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "', ";
            echo json_encode((isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 15, $this->source); })()));
            echo ", ";
            echo json_encode((isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 15, $this->source); })()));
            echo ", { displayModeBar: false });
            });
        /*]]>*/</script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@ChartGui/Chart/_partials/plotly-chart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  64 => 12,  58 => 10,  56 => 7,  55 => 6,  53 => 5,  50 => 4,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set chartDivId = chartType ~ '-' ~ data.key %}

{% block chartContent %}
    {% if data.traces | length > 0 %}
        {% set layout = layout.toArray | merge({
            'title':layout.title | default(data.title) | trans,
            'margin': {'l': 8 * maxLabeLength},
            'yaxis': {'dtick': 1}
        }) %}
        <div id=\"{{ chartDivId }}\"></div>

        <script src=\"{{ assetsPath('js/spryker-zed-chart-plotly-main.js') }}\"></script>
        <script>/*<![CDATA[*/
            document.addEventListener('DOMContentLoaded', function(event) {
                ChartPlotly.newPlot('{{ chartDivId }}', {{ chartData | json_encode | raw }}, {{ layout | json_encode | raw }}, { displayModeBar: false });
            });
        /*]]>*/</script>
    {% endif %}
{% endblock %}
", "@ChartGui/Chart/_partials/plotly-chart.twig", "/data/vendor/spryker/chart-gui/src/Spryker/Zed/ChartGui/Presentation/Chart/_partials/plotly-chart.twig");
    }
}
