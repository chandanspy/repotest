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

/* @ChartGui/Chart/chart.twig */
class __TwigTemplate_c80971dacba7f8c9a0bf5bbc388008f6b41f8a2c9e0c06dae4ec8da2bb03532e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["chartType"] = "chart";
        // line 2
        $context["chartData"] = [];
        // line 3
        $context["maxLabeLength"] = 10;
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "traces", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 6
            echo "    ";
            $context["isPie"] = (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 6), "pie"));
            // line 7
            echo "    ";
            $context["xLabels"] = (((isset($context["isPie"]) || array_key_exists("isPie", $context) ? $context["isPie"] : (function () { throw new RuntimeError('Variable "isPie" does not exist.', 7, $this->source); })())) ? ("labels") : ("x"));
            // line 8
            echo "    ";
            $context["yValues"] = (((isset($context["isPie"]) || array_key_exists("isPie", $context) ? $context["isPie"] : (function () { throw new RuntimeError('Variable "isPie" does not exist.', 8, $this->source); })())) ? ("values") : ("y"));
            // line 9
            echo "    ";
            $context["dataTrace"] = ["name" => twig_get_attribute($this->env, $this->source,             // line 10
$context["trace"], "name", [], "any", false, false, false, 10), "type" => ((twig_get_attribute($this->env, $this->source,             // line 11
$context["trace"], "type", [], "any", true, true, false, 11)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 11), "bar")) : ("bar")),             // line 12
(isset($context["xLabels"]) || array_key_exists("xLabels", $context) ? $context["xLabels"] : (function () { throw new RuntimeError('Variable "xLabels" does not exist.', 12, $this->source); })()) => twig_get_attribute($this->env, $this->source, $context["trace"], "labels", [], "any", false, false, false, 12),             // line 13
(isset($context["yValues"]) || array_key_exists("yValues", $context) ? $context["yValues"] : (function () { throw new RuntimeError('Variable "yValues" does not exist.', 13, $this->source); })()) => twig_get_attribute($this->env, $this->source, $context["trace"], "values", [], "any", false, false, false, 13)];
            // line 15
            echo "
    ";
            // line 16
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["trace"], "type", [], "any", false, false, false, 16), "bar")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "key", [], "any", false, false, false, 16), "top-orders")))) {
                // line 17
                echo "        ";
                $context["values"] = [];
                // line 18
                echo "        ";
                $context["titles"] = [];
                // line 19
                echo "
        ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["trace"], "values", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 21
                    echo "            ";
                    $context["values"] = twig_array_merge((isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 21, $this->source); })()), [0 => (((1 === twig_compare(twig_length_filter($this->env, $context["value"]), 20))) ? ((twig_slice($this->env, $context["value"], 0, 20) . "… ")) : (($context["value"] . " ")))]);
                    // line 22
                    echo "            ";
                    $context["titles"] = twig_array_merge((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new RuntimeError('Variable "titles" does not exist.', 22, $this->source); })()), [0 => (((((((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Count orders") . ": ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 23
$context["trace"], "labels", [], "any", false, false, false, 23), $context["key"], [], "array", false, false, false, 23)) . "<br>") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title")) . ": ") . (((1 === twig_compare(twig_length_filter($this->env,                     // line 24
$context["value"]), 35))) ? ((twig_slice($this->env, $context["value"], 0, 35) . "…")) : ($context["value"]))) . "<br>") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SKU")) . ": ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 25
$context["trace"], "options", [], "any", false, false, false, 25), $context["key"], [], "array", false, false, false, 25))]);
                    // line 27
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "
        ";
                // line 29
                $context["dataTrace"] = ["name" => twig_get_attribute($this->env, $this->source,                 // line 30
$context["trace"], "name", [], "any", false, false, false, 30), "type" => twig_get_attribute($this->env, $this->source,                 // line 31
$context["trace"], "type", [], "any", false, false, false, 31), "x" => twig_get_attribute($this->env, $this->source,                 // line 32
$context["trace"], "labels", [], "any", false, false, false, 32), "y" =>                 // line 33
(isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 33, $this->source); })()), "text" =>                 // line 34
(isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new RuntimeError('Variable "titles" does not exist.', 34, $this->source); })()), "hoverinfo" => "text", "orientation" => "h"];
                // line 38
                echo "
        ";
                // line 39
                $context["maxLabeLength"] = 24;
                // line 40
                echo "    ";
            }
            // line 41
            echo "
    ";
            // line 42
            $context["chartData"] = twig_array_merge((isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 42, $this->source); })()), [0 => (isset($context["dataTrace"]) || array_key_exists("dataTrace", $context) ? $context["dataTrace"] : (function () { throw new RuntimeError('Variable "dataTrace" does not exist.', 42, $this->source); })())]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
";
        // line 45
        $this->loadTemplate("@ChartGui/Chart/_partials/plotly-chart.twig", "@ChartGui/Chart/chart.twig", 45)->display(twig_array_merge($context, ["chartType" =>         // line 46
(isset($context["chartType"]) || array_key_exists("chartType", $context) ? $context["chartType"] : (function () { throw new RuntimeError('Variable "chartType" does not exist.', 46, $this->source); })()), "layout" =>         // line 47
(isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 47, $this->source); })()), "data" =>         // line 48
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "maxLabeLength" =>         // line 49
(isset($context["maxLabeLength"]) || array_key_exists("maxLabeLength", $context) ? $context["maxLabeLength"] : (function () { throw new RuntimeError('Variable "maxLabeLength" does not exist.', 49, $this->source); })()), "chartData" =>         // line 50
(isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 50, $this->source); })())]));
    }

    public function getTemplateName()
    {
        return "@ChartGui/Chart/chart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 50,  133 => 49,  132 => 48,  131 => 47,  130 => 46,  129 => 45,  126 => 44,  120 => 42,  117 => 41,  114 => 40,  112 => 39,  109 => 38,  107 => 34,  106 => 33,  105 => 32,  104 => 31,  103 => 30,  102 => 29,  99 => 28,  93 => 27,  91 => 25,  90 => 24,  89 => 23,  87 => 22,  84 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  69 => 16,  66 => 15,  64 => 13,  63 => 12,  62 => 11,  61 => 10,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set chartType = 'chart' %}
{% set chartData = [] %}
{% set maxLabeLength = 10 %}

{% for trace in data.traces %}
    {% set isPie = (trace.type == 'pie') %}
    {% set xLabels = isPie ? 'labels' : 'x' %}
    {% set yValues = isPie ? 'values' : 'y' %}
    {% set dataTrace = {
        name: (trace.name),
        type: (trace.type | default('bar')),
        (xLabels): (trace.labels),
        (yValues): (trace.values)
    } %}

    {% if trace.type == 'bar' and data.key == 'top-orders' %}
        {% set values = [] %}
        {% set titles = [] %}

        {% for key, value in trace.values %}
            {% set values = values|merge([value|length > 20 ? value|slice(0, 20) ~ '… ' : value ~ ' ']) %}
            {% set titles = titles|merge([
                'Count orders' | trans ~ ': ' ~ trace.labels[key] ~
                '<br>' ~ 'Title' | trans ~ ': ' ~ (value|length > 35 ? value|slice(0, 35) ~ '…' : value) ~
                '<br>' ~ 'SKU' | trans ~ ': ' ~ trace.options[key]
            ]) %}
        {% endfor %}

        {% set dataTrace = {
            name: trace.name,
            type: trace.type,
            x: trace.labels,
            y: values,
            text: titles,
            hoverinfo: 'text',
            orientation: 'h'
        } %}

        {% set maxLabeLength = 24 %}
    {% endif %}

    {% set chartData = chartData | merge([dataTrace]) %}
{% endfor %}

{% include '@ChartGui/Chart/_partials/plotly-chart.twig' with {
    chartType: chartType,
    layout: layout,
    data: data,
    maxLabeLength: maxLabeLength,
    chartData: chartData
} %}
", "@ChartGui/Chart/chart.twig", "/data/vendor/spryker/chart-gui/src/Spryker/Zed/ChartGui/Presentation//Chart/chart.twig");
    }
}
