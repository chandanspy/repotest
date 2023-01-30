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

/* @SalesOrderThresholdGui/Global/index.twig */
class __TwigTemplate_7aeb45b102ec675f16d04e0c99ae07dcfcac8d00dad0b9c029e611bf8573cd07 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'section_title' => [$this, 'block_section_title'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@SalesOrderThresholdGui/_layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Global threshold");
        // line 8
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 8, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 17
        $context["globalHardThresholdEnabled"] = (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 17, $this->source); })()), "hardThreshold", [], "any", false, false, false, 17), "strategy", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "choices", [], "any", false, false, false, 17)), 0));
        // line 18
        $context["globalHardMaxThresholdEnabled"] = (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 18, $this->source); })()), "hardMaximumThreshold", [], "any", false, false, false, 18), "strategy", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "choices", [], "any", false, false, false, 18)), 0));
        // line 19
        $context["globalSoftThresholdEnabled"] = (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 19, $this->source); })()), "softThreshold", [], "any", false, false, false, 19), "strategy", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "choices", [], "any", false, false, false, 19)), 0));
        // line 1
        $this->parent = $this->loadTemplate("@SalesOrderThresholdGui/_layout/layout.twig", "@SalesOrderThresholdGui/Global/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })()), "html", null, true);
    }

    // line 6
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 6, $this->source); })()), "html", null, true);
    }

    // line 10
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <div class=\"input-group\">
        <span class=\"input-group-addon\">%</span>";
        // line 13
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 14
        echo "</div>
";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        $this->loadTemplate("@SalesOrderThresholdGui/Global/index.twig", "@SalesOrderThresholdGui/Global/index.twig", 22, "1392528618")->display(twig_array_merge($context, ["widget_title" => "Global threshold"]));
        // line 143
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SalesOrderThresholdGui/Global/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 143,  92 => 22,  88 => 21,  83 => 14,  81 => 13,  78 => 11,  74 => 10,  67 => 6,  60 => 5,  55 => 1,  53 => 19,  51 => 18,  49 => 17,  47 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SalesOrderThresholdGui/_layout/layout.twig' %}

{% set widget_title = 'Edit Global threshold' | trans %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% form_theme globalThresholdForm _self %}

{% block percent_widget %}
    <div class=\"input-group\">
        <span class=\"input-group-addon\">%</span>
        {{- block('form_widget_simple') -}}
    </div>
{% endblock percent_widget %}

{% set globalHardThresholdEnabled = globalThresholdForm.hardThreshold.strategy.vars.choices|length > 0 %}
{% set globalHardMaxThresholdEnabled = globalThresholdForm.hardMaximumThreshold.strategy.vars.choices|length > 0 %}
{% set globalSoftThresholdEnabled = globalThresholdForm.softThreshold.strategy.vars.choices|length > 0 %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Global threshold' } %}
        {% block widget_content %}
            {{ form_start(globalThresholdForm) }}
            {{ form_row(globalThresholdForm.storeCurrency) }}

            {% if globalHardThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Minimum Hard Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.hardThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.hardThreshold.threshold) }}
                        {% for child in globalThresholdForm %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_hard threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.hardThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.hardThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.hardThreshold.setRendered %}
            {% endif %}

            {% if globalHardMaxThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Maximum Hard Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.hardMaximumThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.hardMaximumThreshold.threshold) }}
                        {% for child in globalThresholdForm %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_hard threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.hardMaximumThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.hardMaximumThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.hardMaximumThreshold.setRendered %}
            {% endif %}

            {% if globalSoftThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Soft Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.softThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.softThreshold.threshold) }}
                        {% for child in globalThresholdForm.softThreshold %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_soft threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.softThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.softThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.softThreshold.setRendered %}
            {% endif %}

            {{ form_widget(globalThresholdForm) }}

            <div class=\"well well-sm\">
                {{ 'You can use the placeholders <code>{{threshold}}</code> and <code>{{fee}}</code>'  | trans | raw }}
            </div>

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\"/>

            {{ form_end(globalThresholdForm) }}
        {% endblock %}
    {% endembed %}

{% endblock %}
", "@SalesOrderThresholdGui/Global/index.twig", "/data/vendor/spryker/sales-order-threshold-gui/src/Spryker/Zed/SalesOrderThresholdGui/Presentation/Global/index.twig");
    }
}


/* @SalesOrderThresholdGui/Global/index.twig */
class __TwigTemplate_7aeb45b102ec675f16d04e0c99ae07dcfcac8d00dad0b9c029e611bf8573cd07___1392528618 extends Template
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
        // line 22
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@SalesOrderThresholdGui/Global/index.twig", 22);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 25, $this->source); })()), "storeCurrency", [], "any", false, false, false, 25), 'row');
        echo "

            ";
        // line 27
        if ((isset($context["globalHardThresholdEnabled"]) || array_key_exists("globalHardThresholdEnabled", $context) ? $context["globalHardThresholdEnabled"] : (function () { throw new RuntimeError('Variable "globalHardThresholdEnabled" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Minimum Hard Threshold"), "html", null, true);
            echo "</div>
                    <div class=\"panel-body\">
                        ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 31, $this->source); })()), "hardThreshold", [], "any", false, false, false, 31), "strategy", [], "any", false, false, false, 31), 'row');
            echo "
                        ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 32, $this->source); })()), "hardThreshold", [], "any", false, false, false, 32), "threshold", [], "any", false, false, false, 32), 'row');
            echo "
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 33, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 34
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 34), "attr", [], "any", false, true, false, 34), "threshold_key", [], "any", true, true, false, 34)) {
                    // line 35
                    echo "                                <div class=\"threshold_group_hard threshold-key-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 35), "attr", [], "any", false, false, false, 35), "threshold_key", [], "any", false, false, false, 35), "html", null, true);
                    echo "\">
                                    ";
                    // line 36
                    $this->loadTemplate("@SalesOrderThresholdGui/_partials/form-row.twig", "@SalesOrderThresholdGui/Global/index.twig", 36)->display(twig_array_merge($context, ["form" => $context["child"]]));
                    // line 37
                    echo "                                </div>
                            ";
                }
                // line 39
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 41, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["localeTransfer"]) {
                // line 42
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["globalThresholdForm"] ?? null), "hardThreshold", [], "any", false, true, false, 42), twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "localeName", [], "any", false, false, false, 42), [], "array", true, true, false, 42)) {
                    // line 43
                    echo "                                ";
                    $this->loadTemplate("@SalesOrderThresholdGui/Global/index.twig", "@SalesOrderThresholdGui/Global/index.twig", 43, "1265428429")->display(twig_array_merge($context, ["collapsed" =>  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 43), "localeName" => twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "localeName", [], "any", false, false, false, 43)]));
                    // line 54
                    echo "                            ";
                }
                // line 55
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeTransfer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                    </div>
                </div>
            ";
        } else {
            // line 59
            echo "                ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 59, $this->source); })()), "hardThreshold", [], "any", false, false, false, 59), "setRendered", [], "any", false, false, false, 59);
            // line 60
            echo "            ";
        }
        // line 61
        echo "
            ";
        // line 62
        if ((isset($context["globalHardMaxThresholdEnabled"]) || array_key_exists("globalHardMaxThresholdEnabled", $context) ? $context["globalHardMaxThresholdEnabled"] : (function () { throw new RuntimeError('Variable "globalHardMaxThresholdEnabled" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum Hard Threshold"), "html", null, true);
            echo "</div>
                    <div class=\"panel-body\">
                        ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 66, $this->source); })()), "hardMaximumThreshold", [], "any", false, false, false, 66), "strategy", [], "any", false, false, false, 66), 'row');
            echo "
                        ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 67, $this->source); })()), "hardMaximumThreshold", [], "any", false, false, false, 67), "threshold", [], "any", false, false, false, 67), 'row');
            echo "
                        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 68, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 69
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 69), "attr", [], "any", false, true, false, 69), "threshold_key", [], "any", true, true, false, 69)) {
                    // line 70
                    echo "                                <div class=\"threshold_group_hard threshold-key-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 70), "attr", [], "any", false, false, false, 70), "threshold_key", [], "any", false, false, false, 70), "html", null, true);
                    echo "\">
                                    ";
                    // line 71
                    $this->loadTemplate("@SalesOrderThresholdGui/_partials/form-row.twig", "@SalesOrderThresholdGui/Global/index.twig", 71)->display(twig_array_merge($context, ["form" => $context["child"]]));
                    // line 72
                    echo "                                </div>
                            ";
                }
                // line 74
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "
                        ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 76, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["localeTransfer"]) {
                // line 77
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["globalThresholdForm"] ?? null), "hardMaximumThreshold", [], "any", false, true, false, 77), twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "localeName", [], "any", false, false, false, 77), [], "array", true, true, false, 77)) {
                    // line 78
                    echo "                                ";
                    $this->loadTemplate("@SalesOrderThresholdGui/Global/index.twig", "@SalesOrderThresholdGui/Global/index.twig", 78, "1941714377")->display(twig_array_merge($context, ["collapsed" =>  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 78), "localeName" => twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "localeName", [], "any", false, false, false, 78)]));
                    // line 89
                    echo "                            ";
                }
                // line 90
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeTransfer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                    </div>
                </div>
            ";
        } else {
            // line 94
            echo "                ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 94, $this->source); })()), "hardMaximumThreshold", [], "any", false, false, false, 94), "setRendered", [], "any", false, false, false, 94);
            // line 95
            echo "            ";
        }
        // line 96
        echo "
            ";
        // line 97
        if ((isset($context["globalSoftThresholdEnabled"]) || array_key_exists("globalSoftThresholdEnabled", $context) ? $context["globalSoftThresholdEnabled"] : (function () { throw new RuntimeError('Variable "globalSoftThresholdEnabled" does not exist.', 97, $this->source); })())) {
            // line 98
            echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Soft Threshold"), "html", null, true);
            echo "</div>
                    <div class=\"panel-body\">
                        ";
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 101, $this->source); })()), "softThreshold", [], "any", false, false, false, 101), "strategy", [], "any", false, false, false, 101), 'row');
            echo "
                        ";
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 102, $this->source); })()), "softThreshold", [], "any", false, false, false, 102), "threshold", [], "any", false, false, false, 102), 'row');
            echo "
                        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 103, $this->source); })()), "softThreshold", [], "any", false, false, false, 103));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 104
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 104), "attr", [], "any", false, true, false, 104), "threshold_key", [], "any", true, true, false, 104)) {
                    // line 105
                    echo "                                <div class=\"threshold_group_soft threshold-key-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 105), "attr", [], "any", false, false, false, 105), "threshold_key", [], "any", false, false, false, 105), "html", null, true);
                    echo "\">
                                    ";
                    // line 106
                    $this->loadTemplate("@SalesOrderThresholdGui/_partials/form-row.twig", "@SalesOrderThresholdGui/Global/index.twig", 106)->display(twig_array_merge($context, ["form" => $context["child"]]));
                    // line 107
                    echo "                                </div>
                            ";
                }
                // line 109
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "
                        ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 111, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["localeTransfer"]) {
                // line 112
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["globalThresholdForm"] ?? null), "softThreshold", [], "any", false, true, false, 112), twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "localeName", [], "any", false, false, false, 112), [], "array", true, true, false, 112)) {
                    // line 113
                    echo "                                ";
                    $this->loadTemplate("@SalesOrderThresholdGui/Global/index.twig", "@SalesOrderThresholdGui/Global/index.twig", 113, "1140681148")->display(twig_array_merge($context, ["collapsed" =>  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 113), "localeName" => twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "localeName", [], "any", false, false, false, 113)]));
                    // line 124
                    echo "                            ";
                }
                // line 125
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeTransfer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                    </div>
                </div>
            ";
        } else {
            // line 129
            echo "                ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 129, $this->source); })()), "softThreshold", [], "any", false, false, false, 129), "setRendered", [], "any", false, false, false, 129);
            // line 130
            echo "            ";
        }
        // line 131
        echo "
            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 132, $this->source); })()), 'widget');
        echo "

            <div class=\"well well-sm\">
                ";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can use the placeholders <code>{{threshold}}</code> and <code>{{fee}}</code>");
        echo "
            </div>

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\"/>

            ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 140, $this->source); })()), 'form_end');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@SalesOrderThresholdGui/Global/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  687 => 140,  682 => 138,  676 => 135,  670 => 132,  667 => 131,  664 => 130,  661 => 129,  656 => 126,  642 => 125,  639 => 124,  636 => 113,  633 => 112,  616 => 111,  613 => 110,  599 => 109,  595 => 107,  593 => 106,  588 => 105,  585 => 104,  568 => 103,  564 => 102,  560 => 101,  555 => 99,  552 => 98,  550 => 97,  547 => 96,  544 => 95,  541 => 94,  536 => 91,  522 => 90,  519 => 89,  516 => 78,  513 => 77,  496 => 76,  493 => 75,  479 => 74,  475 => 72,  473 => 71,  468 => 70,  465 => 69,  448 => 68,  444 => 67,  440 => 66,  435 => 64,  432 => 63,  430 => 62,  427 => 61,  424 => 60,  421 => 59,  416 => 56,  402 => 55,  399 => 54,  396 => 43,  393 => 42,  376 => 41,  373 => 40,  359 => 39,  355 => 37,  353 => 36,  348 => 35,  345 => 34,  328 => 33,  324 => 32,  320 => 31,  315 => 29,  312 => 28,  310 => 27,  305 => 25,  300 => 24,  296 => 23,  285 => 22,  95 => 143,  92 => 22,  88 => 21,  83 => 14,  81 => 13,  78 => 11,  74 => 10,  67 => 6,  60 => 5,  55 => 1,  53 => 19,  51 => 18,  49 => 17,  47 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SalesOrderThresholdGui/_layout/layout.twig' %}

{% set widget_title = 'Edit Global threshold' | trans %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% form_theme globalThresholdForm _self %}

{% block percent_widget %}
    <div class=\"input-group\">
        <span class=\"input-group-addon\">%</span>
        {{- block('form_widget_simple') -}}
    </div>
{% endblock percent_widget %}

{% set globalHardThresholdEnabled = globalThresholdForm.hardThreshold.strategy.vars.choices|length > 0 %}
{% set globalHardMaxThresholdEnabled = globalThresholdForm.hardMaximumThreshold.strategy.vars.choices|length > 0 %}
{% set globalSoftThresholdEnabled = globalThresholdForm.softThreshold.strategy.vars.choices|length > 0 %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Global threshold' } %}
        {% block widget_content %}
            {{ form_start(globalThresholdForm) }}
            {{ form_row(globalThresholdForm.storeCurrency) }}

            {% if globalHardThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Minimum Hard Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.hardThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.hardThreshold.threshold) }}
                        {% for child in globalThresholdForm %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_hard threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.hardThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.hardThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.hardThreshold.setRendered %}
            {% endif %}

            {% if globalHardMaxThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Maximum Hard Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.hardMaximumThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.hardMaximumThreshold.threshold) }}
                        {% for child in globalThresholdForm %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_hard threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.hardMaximumThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.hardMaximumThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.hardMaximumThreshold.setRendered %}
            {% endif %}

            {% if globalSoftThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Soft Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.softThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.softThreshold.threshold) }}
                        {% for child in globalThresholdForm.softThreshold %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_soft threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.softThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.softThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.softThreshold.setRendered %}
            {% endif %}

            {{ form_widget(globalThresholdForm) }}

            <div class=\"well well-sm\">
                {{ 'You can use the placeholders <code>{{threshold}}</code> and <code>{{fee}}</code>'  | trans | raw }}
            </div>

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\"/>

            {{ form_end(globalThresholdForm) }}
        {% endblock %}
    {% endembed %}

{% endblock %}
", "@SalesOrderThresholdGui/Global/index.twig", "/data/vendor/spryker/sales-order-threshold-gui/src/Spryker/Zed/SalesOrderThresholdGui/Presentation/Global/index.twig");
    }
}


/* @SalesOrderThresholdGui/Global/index.twig */
class __TwigTemplate_7aeb45b102ec675f16d04e0c99ae07dcfcac8d00dad0b9c029e611bf8573cd07___1265428429 extends Template
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
        // line 43
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@SalesOrderThresholdGui/Global/index.twig", 43);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 45, $this->source); })()), "hardThreshold", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, (isset($context["localeTransfer"]) || array_key_exists("localeTransfer", $context) ? $context["localeTransfer"] : (function () { throw new RuntimeError('Variable "localeTransfer" does not exist.', 45, $this->source); })()), "localeName", [], "any", false, false, false, 45), [], "array", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 46
            echo "                                            <div class=\"form-group ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["input"], "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46))) {
                echo "has-error";
            }
            echo "\">
                                                ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'label');
            echo "
                                                ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'widget', ["attr" => ["class" => "name-translation"]]);
            echo "
                                                ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'errors');
            echo "
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                    ";
    }

    public function getTemplateName()
    {
        return "@SalesOrderThresholdGui/Global/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  922 => 52,  913 => 49,  909 => 48,  905 => 47,  898 => 46,  893 => 45,  889 => 44,  878 => 43,  687 => 140,  682 => 138,  676 => 135,  670 => 132,  667 => 131,  664 => 130,  661 => 129,  656 => 126,  642 => 125,  639 => 124,  636 => 113,  633 => 112,  616 => 111,  613 => 110,  599 => 109,  595 => 107,  593 => 106,  588 => 105,  585 => 104,  568 => 103,  564 => 102,  560 => 101,  555 => 99,  552 => 98,  550 => 97,  547 => 96,  544 => 95,  541 => 94,  536 => 91,  522 => 90,  519 => 89,  516 => 78,  513 => 77,  496 => 76,  493 => 75,  479 => 74,  475 => 72,  473 => 71,  468 => 70,  465 => 69,  448 => 68,  444 => 67,  440 => 66,  435 => 64,  432 => 63,  430 => 62,  427 => 61,  424 => 60,  421 => 59,  416 => 56,  402 => 55,  399 => 54,  396 => 43,  393 => 42,  376 => 41,  373 => 40,  359 => 39,  355 => 37,  353 => 36,  348 => 35,  345 => 34,  328 => 33,  324 => 32,  320 => 31,  315 => 29,  312 => 28,  310 => 27,  305 => 25,  300 => 24,  296 => 23,  285 => 22,  95 => 143,  92 => 22,  88 => 21,  83 => 14,  81 => 13,  78 => 11,  74 => 10,  67 => 6,  60 => 5,  55 => 1,  53 => 19,  51 => 18,  49 => 17,  47 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SalesOrderThresholdGui/_layout/layout.twig' %}

{% set widget_title = 'Edit Global threshold' | trans %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% form_theme globalThresholdForm _self %}

{% block percent_widget %}
    <div class=\"input-group\">
        <span class=\"input-group-addon\">%</span>
        {{- block('form_widget_simple') -}}
    </div>
{% endblock percent_widget %}

{% set globalHardThresholdEnabled = globalThresholdForm.hardThreshold.strategy.vars.choices|length > 0 %}
{% set globalHardMaxThresholdEnabled = globalThresholdForm.hardMaximumThreshold.strategy.vars.choices|length > 0 %}
{% set globalSoftThresholdEnabled = globalThresholdForm.softThreshold.strategy.vars.choices|length > 0 %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Global threshold' } %}
        {% block widget_content %}
            {{ form_start(globalThresholdForm) }}
            {{ form_row(globalThresholdForm.storeCurrency) }}

            {% if globalHardThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Minimum Hard Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.hardThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.hardThreshold.threshold) }}
                        {% for child in globalThresholdForm %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_hard threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.hardThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.hardThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.hardThreshold.setRendered %}
            {% endif %}

            {% if globalHardMaxThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Maximum Hard Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.hardMaximumThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.hardMaximumThreshold.threshold) }}
                        {% for child in globalThresholdForm %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_hard threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.hardMaximumThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.hardMaximumThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.hardMaximumThreshold.setRendered %}
            {% endif %}

            {% if globalSoftThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Soft Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.softThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.softThreshold.threshold) }}
                        {% for child in globalThresholdForm.softThreshold %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_soft threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.softThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.softThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.softThreshold.setRendered %}
            {% endif %}

            {{ form_widget(globalThresholdForm) }}

            <div class=\"well well-sm\">
                {{ 'You can use the placeholders <code>{{threshold}}</code> and <code>{{fee}}</code>'  | trans | raw }}
            </div>

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\"/>

            {{ form_end(globalThresholdForm) }}
        {% endblock %}
    {% endembed %}

{% endblock %}
", "@SalesOrderThresholdGui/Global/index.twig", "/data/vendor/spryker/sales-order-threshold-gui/src/Spryker/Zed/SalesOrderThresholdGui/Presentation/Global/index.twig");
    }
}


/* @SalesOrderThresholdGui/Global/index.twig */
class __TwigTemplate_7aeb45b102ec675f16d04e0c99ae07dcfcac8d00dad0b9c029e611bf8573cd07___1941714377 extends Template
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
        // line 78
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@SalesOrderThresholdGui/Global/index.twig", 78);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 79
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 80, $this->source); })()), "hardMaximumThreshold", [], "any", false, false, false, 80), twig_get_attribute($this->env, $this->source, (isset($context["localeTransfer"]) || array_key_exists("localeTransfer", $context) ? $context["localeTransfer"] : (function () { throw new RuntimeError('Variable "localeTransfer" does not exist.', 80, $this->source); })()), "localeName", [], "any", false, false, false, 80), [], "array", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 81
            echo "                                            <div class=\"form-group ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["input"], "vars", [], "any", false, false, false, 81), "errors", [], "any", false, false, false, 81))) {
                echo "has-error";
            }
            echo "\">
                                                ";
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'label');
            echo "
                                                ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'widget', ["attr" => ["class" => "name-translation"]]);
            echo "
                                                ";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'errors');
            echo "
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                                    ";
    }

    public function getTemplateName()
    {
        return "@SalesOrderThresholdGui/Global/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1155 => 87,  1146 => 84,  1142 => 83,  1138 => 82,  1131 => 81,  1126 => 80,  1122 => 79,  1111 => 78,  922 => 52,  913 => 49,  909 => 48,  905 => 47,  898 => 46,  893 => 45,  889 => 44,  878 => 43,  687 => 140,  682 => 138,  676 => 135,  670 => 132,  667 => 131,  664 => 130,  661 => 129,  656 => 126,  642 => 125,  639 => 124,  636 => 113,  633 => 112,  616 => 111,  613 => 110,  599 => 109,  595 => 107,  593 => 106,  588 => 105,  585 => 104,  568 => 103,  564 => 102,  560 => 101,  555 => 99,  552 => 98,  550 => 97,  547 => 96,  544 => 95,  541 => 94,  536 => 91,  522 => 90,  519 => 89,  516 => 78,  513 => 77,  496 => 76,  493 => 75,  479 => 74,  475 => 72,  473 => 71,  468 => 70,  465 => 69,  448 => 68,  444 => 67,  440 => 66,  435 => 64,  432 => 63,  430 => 62,  427 => 61,  424 => 60,  421 => 59,  416 => 56,  402 => 55,  399 => 54,  396 => 43,  393 => 42,  376 => 41,  373 => 40,  359 => 39,  355 => 37,  353 => 36,  348 => 35,  345 => 34,  328 => 33,  324 => 32,  320 => 31,  315 => 29,  312 => 28,  310 => 27,  305 => 25,  300 => 24,  296 => 23,  285 => 22,  95 => 143,  92 => 22,  88 => 21,  83 => 14,  81 => 13,  78 => 11,  74 => 10,  67 => 6,  60 => 5,  55 => 1,  53 => 19,  51 => 18,  49 => 17,  47 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SalesOrderThresholdGui/_layout/layout.twig' %}

{% set widget_title = 'Edit Global threshold' | trans %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% form_theme globalThresholdForm _self %}

{% block percent_widget %}
    <div class=\"input-group\">
        <span class=\"input-group-addon\">%</span>
        {{- block('form_widget_simple') -}}
    </div>
{% endblock percent_widget %}

{% set globalHardThresholdEnabled = globalThresholdForm.hardThreshold.strategy.vars.choices|length > 0 %}
{% set globalHardMaxThresholdEnabled = globalThresholdForm.hardMaximumThreshold.strategy.vars.choices|length > 0 %}
{% set globalSoftThresholdEnabled = globalThresholdForm.softThreshold.strategy.vars.choices|length > 0 %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Global threshold' } %}
        {% block widget_content %}
            {{ form_start(globalThresholdForm) }}
            {{ form_row(globalThresholdForm.storeCurrency) }}

            {% if globalHardThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Minimum Hard Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.hardThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.hardThreshold.threshold) }}
                        {% for child in globalThresholdForm %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_hard threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.hardThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.hardThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.hardThreshold.setRendered %}
            {% endif %}

            {% if globalHardMaxThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Maximum Hard Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.hardMaximumThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.hardMaximumThreshold.threshold) }}
                        {% for child in globalThresholdForm %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_hard threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.hardMaximumThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.hardMaximumThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.hardMaximumThreshold.setRendered %}
            {% endif %}

            {% if globalSoftThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Soft Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.softThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.softThreshold.threshold) }}
                        {% for child in globalThresholdForm.softThreshold %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_soft threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.softThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.softThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.softThreshold.setRendered %}
            {% endif %}

            {{ form_widget(globalThresholdForm) }}

            <div class=\"well well-sm\">
                {{ 'You can use the placeholders <code>{{threshold}}</code> and <code>{{fee}}</code>'  | trans | raw }}
            </div>

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\"/>

            {{ form_end(globalThresholdForm) }}
        {% endblock %}
    {% endembed %}

{% endblock %}
", "@SalesOrderThresholdGui/Global/index.twig", "/data/vendor/spryker/sales-order-threshold-gui/src/Spryker/Zed/SalesOrderThresholdGui/Presentation/Global/index.twig");
    }
}


/* @SalesOrderThresholdGui/Global/index.twig */
class __TwigTemplate_7aeb45b102ec675f16d04e0c99ae07dcfcac8d00dad0b9c029e611bf8573cd07___1140681148 extends Template
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
        // line 113
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@SalesOrderThresholdGui/Global/index.twig", 113);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 114
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["globalThresholdForm"]) || array_key_exists("globalThresholdForm", $context) ? $context["globalThresholdForm"] : (function () { throw new RuntimeError('Variable "globalThresholdForm" does not exist.', 115, $this->source); })()), "softThreshold", [], "any", false, false, false, 115), twig_get_attribute($this->env, $this->source, (isset($context["localeTransfer"]) || array_key_exists("localeTransfer", $context) ? $context["localeTransfer"] : (function () { throw new RuntimeError('Variable "localeTransfer" does not exist.', 115, $this->source); })()), "localeName", [], "any", false, false, false, 115), [], "array", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 116
            echo "                                            <div class=\"form-group ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["input"], "vars", [], "any", false, false, false, 116), "errors", [], "any", false, false, false, 116))) {
                echo "has-error";
            }
            echo "\">
                                                ";
            // line 117
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'label');
            echo "
                                                ";
            // line 118
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'widget', ["attr" => ["class" => "name-translation"]]);
            echo "
                                                ";
            // line 119
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'errors');
            echo "
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                                    ";
    }

    public function getTemplateName()
    {
        return "@SalesOrderThresholdGui/Global/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1388 => 122,  1379 => 119,  1375 => 118,  1371 => 117,  1364 => 116,  1359 => 115,  1355 => 114,  1344 => 113,  1155 => 87,  1146 => 84,  1142 => 83,  1138 => 82,  1131 => 81,  1126 => 80,  1122 => 79,  1111 => 78,  922 => 52,  913 => 49,  909 => 48,  905 => 47,  898 => 46,  893 => 45,  889 => 44,  878 => 43,  687 => 140,  682 => 138,  676 => 135,  670 => 132,  667 => 131,  664 => 130,  661 => 129,  656 => 126,  642 => 125,  639 => 124,  636 => 113,  633 => 112,  616 => 111,  613 => 110,  599 => 109,  595 => 107,  593 => 106,  588 => 105,  585 => 104,  568 => 103,  564 => 102,  560 => 101,  555 => 99,  552 => 98,  550 => 97,  547 => 96,  544 => 95,  541 => 94,  536 => 91,  522 => 90,  519 => 89,  516 => 78,  513 => 77,  496 => 76,  493 => 75,  479 => 74,  475 => 72,  473 => 71,  468 => 70,  465 => 69,  448 => 68,  444 => 67,  440 => 66,  435 => 64,  432 => 63,  430 => 62,  427 => 61,  424 => 60,  421 => 59,  416 => 56,  402 => 55,  399 => 54,  396 => 43,  393 => 42,  376 => 41,  373 => 40,  359 => 39,  355 => 37,  353 => 36,  348 => 35,  345 => 34,  328 => 33,  324 => 32,  320 => 31,  315 => 29,  312 => 28,  310 => 27,  305 => 25,  300 => 24,  296 => 23,  285 => 22,  95 => 143,  92 => 22,  88 => 21,  83 => 14,  81 => 13,  78 => 11,  74 => 10,  67 => 6,  60 => 5,  55 => 1,  53 => 19,  51 => 18,  49 => 17,  47 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SalesOrderThresholdGui/_layout/layout.twig' %}

{% set widget_title = 'Edit Global threshold' | trans %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% form_theme globalThresholdForm _self %}

{% block percent_widget %}
    <div class=\"input-group\">
        <span class=\"input-group-addon\">%</span>
        {{- block('form_widget_simple') -}}
    </div>
{% endblock percent_widget %}

{% set globalHardThresholdEnabled = globalThresholdForm.hardThreshold.strategy.vars.choices|length > 0 %}
{% set globalHardMaxThresholdEnabled = globalThresholdForm.hardMaximumThreshold.strategy.vars.choices|length > 0 %}
{% set globalSoftThresholdEnabled = globalThresholdForm.softThreshold.strategy.vars.choices|length > 0 %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Global threshold' } %}
        {% block widget_content %}
            {{ form_start(globalThresholdForm) }}
            {{ form_row(globalThresholdForm.storeCurrency) }}

            {% if globalHardThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Minimum Hard Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.hardThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.hardThreshold.threshold) }}
                        {% for child in globalThresholdForm %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_hard threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.hardThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.hardThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.hardThreshold.setRendered %}
            {% endif %}

            {% if globalHardMaxThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Maximum Hard Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.hardMaximumThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.hardMaximumThreshold.threshold) }}
                        {% for child in globalThresholdForm %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_hard threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.hardMaximumThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.hardMaximumThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.hardMaximumThreshold.setRendered %}
            {% endif %}

            {% if globalSoftThresholdEnabled %}
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">{{ 'Soft Threshold' | trans }}</div>
                    <div class=\"panel-body\">
                        {{ form_row(globalThresholdForm.softThreshold.strategy) }}
                        {{ form_row(globalThresholdForm.softThreshold.threshold) }}
                        {% for child in globalThresholdForm.softThreshold %}
                            {% if child.vars.attr.threshold_key is defined %}
                                <div class=\"threshold_group_soft threshold-key-{{ child.vars.attr.threshold_key }}\">
                                    {% include '@SalesOrderThresholdGui/_partials/form-row.twig' with {form: child} %}
                                </div>
                            {% endif %}
                        {% endfor %}

                        {% for localeTransfer in localeCollection %}
                            {% if globalThresholdForm.softThreshold[localeTransfer.localeName] is defined %}
                                {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                                    {% block content %}
                                        {% for input in globalThresholdForm.softThreshold[localeTransfer.localeName] %}
                                            <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                                                {{ form_label(input) }}
                                                {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                                                {{ form_errors(input) }}
                                            </div>
                                        {% endfor %}
                                    {% endblock %}
                                {% endembed %}
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            {% else %}
                {% do globalThresholdForm.softThreshold.setRendered %}
            {% endif %}

            {{ form_widget(globalThresholdForm) }}

            <div class=\"well well-sm\">
                {{ 'You can use the placeholders <code>{{threshold}}</code> and <code>{{fee}}</code>'  | trans | raw }}
            </div>

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\"/>

            {{ form_end(globalThresholdForm) }}
        {% endblock %}
    {% endembed %}

{% endblock %}
", "@SalesOrderThresholdGui/Global/index.twig", "/data/vendor/spryker/sales-order-threshold-gui/src/Spryker/Zed/SalesOrderThresholdGui/Presentation/Global/index.twig");
    }
}
