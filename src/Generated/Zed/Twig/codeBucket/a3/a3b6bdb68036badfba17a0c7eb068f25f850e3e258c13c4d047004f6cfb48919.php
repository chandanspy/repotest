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

/* @Money/Form/Type/money_table.twig */
class __TwigTemplate_8b02888634d95bdc7867dd7386d07861770179741fde348b7ef33d3574c3970f extends Template
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
        $context["rowSpanTable"] = [];
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["moneyValueFormView"]) {
            // line 3
            echo "
    ";
            // line 4
            if ( !twig_get_attribute($this->env, $this->source, ($context["rowSpanTable"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "vars", [], "any", false, false, false, 4), "store_name", [], "any", false, false, false, 4), [], "array", true, true, false, 4)) {
                // line 5
                echo "        ";
                $context["rowSpanTable"] = twig_array_merge((isset($context["rowSpanTable"]) || array_key_exists("rowSpanTable", $context) ? $context["rowSpanTable"] : (function () { throw new RuntimeError('Variable "rowSpanTable" does not exist.', 5, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "vars", [], "any", false, false, false, 5), "store_name", [], "any", false, false, false, 5) => 0]);
                // line 6
                echo "    ";
            }
            // line 7
            echo "
    ";
            // line 8
            $context["rowSpanCountTable"] = (twig_get_attribute($this->env, $this->source, (isset($context["rowSpanTable"]) || array_key_exists("rowSpanTable", $context) ? $context["rowSpanTable"] : (function () { throw new RuntimeError('Variable "rowSpanTable" does not exist.', 8, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "vars", [], "any", false, false, false, 8), "store_name", [], "any", false, false, false, 8), [], "array", false, false, false, 8) + 1);
            // line 9
            echo "
    ";
            // line 10
            $context["rowSpanTable"] = twig_array_merge((isset($context["rowSpanTable"]) || array_key_exists("rowSpanTable", $context) ? $context["rowSpanTable"] : (function () { throw new RuntimeError('Variable "rowSpanTable" does not exist.', 10, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "vars", [], "any", false, false, false, 10), "store_name", [], "any", false, false, false, 10) => (isset($context["rowSpanCountTable"]) || array_key_exists("rowSpanCountTable", $context) ? $context["rowSpanCountTable"] : (function () { throw new RuntimeError('Variable "rowSpanCountTable" does not exist.', 10, $this->source); })())]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moneyValueFormView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        $context["lastStore"] = "";
        // line 14
        echo "
<table class=\"table table-bordered\">
    <thead>
    <tr>
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "amount_per_store", [], "any", false, false, false, 18)) {
            // line 19
            echo "            <th style=\"width: 50px; background-color:#FFF; border-top: 1px solid #FFF; border-left:1px solid #FFF; border-right:1px solid #FFF;\"></th>
        ";
        }
        // line 21
        echo "        <th style=\"width: 50px; background-color:#FFF; border-top: 1px solid #FFF; border-left:1px solid #FFF;;\"></th>
        <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gross price"), "html", null, true);
        echo "</th>
        <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Net price"), "html", null, true);
        echo "</th>
    </tr>
    </thead>

    <tbody>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 28, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["moneyValueFormView"]) {
            // line 29
            echo "        <tr>
            ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "amount_per_store", [], "any", false, false, false, 30) && ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "vars", [], "any", false, false, false, 30), "store_name", [], "any", false, false, false, 30), (isset($context["lastStore"]) || array_key_exists("lastStore", $context) ? $context["lastStore"] : (function () { throw new RuntimeError('Variable "lastStore" does not exist.', 30, $this->source); })()))) || twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 30)))) {
                // line 31
                echo "            <td style=\"background-color:#F5F5F6; text-align: center; vertical-align: middle; font-weight:bold\" rowspan=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rowSpanTable"]) || array_key_exists("rowSpanTable", $context) ? $context["rowSpanTable"] : (function () { throw new RuntimeError('Variable "rowSpanTable" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "vars", [], "any", false, false, false, 31), "store_name", [], "any", false, false, false, 31), [], "array", false, false, false, 31), "html", null, true);
                echo "\">
                ";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "vars", [], "any", false, false, false, 32), "store_name", [], "any", false, false, false, 32), "html", null, true);
                echo "
            </td>
            ";
            }
            // line 35
            echo "
            <td style=\"background-color:#F5F5F6; text-align: center; vertical-align: middle; font-weight:bold\">
                ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "vars", [], "any", false, false, false, 37), "currency_symbol", [], "any", false, false, false, 37), "html", null, true);
            echo "
            </td>
            <td class=\"";
            // line 39
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "gross_amount", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)), 0))) {
                echo "has-error";
            }
            echo "\">
                ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "gross_amount", [], "any", false, false, false, 40), 'widget');
            echo "
                <div class=\"";
            // line 41
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "gross_amount", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41)), 0))) {
                echo "has-error";
            }
            echo "\">
                    ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "gross_amount", [], "any", false, false, false, 42), 'errors');
            echo "
                </div>
            </td>
            <td class=\"";
            // line 45
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "net_amount", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45)), 0))) {
                echo "has-error";
            }
            echo "\">
                ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "net_amount", [], "any", false, false, false, 46), 'widget');
            echo "
                <div class=\"";
            // line 47
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "net_amount", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)), 0))) {
                echo "has-error";
            }
            echo "\">
                    ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "net_amount", [], "any", false, false, false, 48), 'errors');
            echo "
                </div>
            </td>
            ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "fk_currency", [], "any", false, false, false, 51), 'row');
            echo "
            ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "fk_store", [], "any", false, false, false, 52), 'row');
            echo "
        </tr>
        ";
            // line 54
            $context["lastStore"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["moneyValueFormView"], "vars", [], "any", false, false, false, 54), "store_name", [], "any", false, false, false, 54);
            // line 55
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moneyValueFormView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </tbody>
</table>

";
        // line 60
        twig_get_attribute($this->env, $this->source, (isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 60, $this->source); })()), "setRendered", [], "any", false, false, false, 60);
    }

    public function getTemplateName()
    {
        return "@Money/Form/Type/money_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 60,  212 => 57,  197 => 55,  195 => 54,  190 => 52,  186 => 51,  180 => 48,  174 => 47,  170 => 46,  164 => 45,  158 => 42,  152 => 41,  148 => 40,  142 => 39,  137 => 37,  133 => 35,  127 => 32,  122 => 31,  120 => 30,  117 => 29,  100 => 28,  92 => 23,  88 => 22,  85 => 21,  81 => 19,  79 => 18,  73 => 14,  71 => 13,  68 => 12,  62 => 10,  59 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set rowSpanTable = [] %}
{% for moneyValueFormView in moneyValueFormViewCollection %}

    {% if not rowSpanTable[moneyValueFormView.vars.store_name] is defined %}
        {%  set rowSpanTable = rowSpanTable|merge({ (moneyValueFormView.vars.store_name): 0  }) %}
    {% endif %}

    {% set rowSpanCountTable = rowSpanTable[moneyValueFormView.vars.store_name] + 1 %}

    {% set rowSpanTable = rowSpanTable|merge({ (moneyValueFormView.vars.store_name): rowSpanCountTable  }) %}
{% endfor %}

{% set lastStore = '' %}

<table class=\"table table-bordered\">
    <thead>
    <tr>
        {%  if moneyValueFormViewCollection.vars.amount_per_store %}
            <th style=\"width: 50px; background-color:#FFF; border-top: 1px solid #FFF; border-left:1px solid #FFF; border-right:1px solid #FFF;\"></th>
        {% endif %}
        <th style=\"width: 50px; background-color:#FFF; border-top: 1px solid #FFF; border-left:1px solid #FFF;;\"></th>
        <th>{{ 'Gross price' | trans }}</th>
        <th>{{ 'Net price' | trans }}</th>
    </tr>
    </thead>

    <tbody>
    {% for moneyValueFormView in moneyValueFormViewCollection %}
        <tr>
            {% if moneyValueFormViewCollection.vars.amount_per_store and (moneyValueFormView.vars.store_name != lastStore or loop.first) %}
            <td style=\"background-color:#F5F5F6; text-align: center; vertical-align: middle; font-weight:bold\" rowspan=\"{{ rowSpanTable[moneyValueFormView.vars.store_name] }}\">
                {{ moneyValueFormView.vars.store_name }}
            </td>
            {% endif %}

            <td style=\"background-color:#F5F5F6; text-align: center; vertical-align: middle; font-weight:bold\">
                {{ moneyValueFormView.vars.currency_symbol }}
            </td>
            <td class=\"{% if moneyValueFormView.gross_amount.vars.errors|length > 0 %}has-error{% endif %}\">
                {{ form_widget(moneyValueFormView.gross_amount) }}
                <div class=\"{% if moneyValueFormView.gross_amount.vars.errors|length > 0 %}has-error{% endif %}\">
                    {{ form_errors(moneyValueFormView.gross_amount) }}
                </div>
            </td>
            <td class=\"{% if moneyValueFormView.net_amount.vars.errors|length > 0 %}has-error{% endif %}\">
                {{ form_widget(moneyValueFormView.net_amount) }}
                <div class=\"{% if moneyValueFormView.net_amount.vars.errors|length > 0 %}has-error{% endif %}\">
                    {{ form_errors(moneyValueFormView.net_amount) }}
                </div>
            </td>
            {{ form_row(moneyValueFormView.fk_currency) }}
            {{ form_row(moneyValueFormView.fk_store) }}
        </tr>
        {% set lastStore = moneyValueFormView.vars.store_name %}

    {% endfor %}
    </tbody>
</table>

{% do moneyValueFormViewCollection.setRendered %}
", "@Money/Form/Type/money_table.twig", "/data/vendor/spryker/money/src/Spryker/Zed/Money/Presentation//Form/Type/money_table.twig");
    }
}
