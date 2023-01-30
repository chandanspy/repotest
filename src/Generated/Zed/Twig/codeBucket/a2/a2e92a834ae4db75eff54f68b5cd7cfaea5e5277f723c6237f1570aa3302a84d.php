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

/* form_extension.twig */
class __TwigTemplate_d978b15845390f1bb44fed0b25f0f15678fbc7a255011a54c5ee2690428b8e70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_label' => [$this, 'block_form_label'],
            'form_errors' => [$this, 'block_form_errors'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("bootstrap_3_layout.html.twig", "form_extension.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["trim_asterisk"] = ((array_key_exists("trim_asterisk", $context)) ? ((isset($context["trim_asterisk"]) || array_key_exists("trim_asterisk", $context) ? $context["trim_asterisk"] : (function () { throw new RuntimeError('Variable "trim_asterisk" does not exist.', 4, $this->source); })())) : (true));
        // line 5
        echo "    ";
        $context["label_length"] = twig_length_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 5, $this->source); })()));
        // line 6
        echo "
    ";
        // line 7
        if (((((isset($context["trim_asterisk"]) || array_key_exists("trim_asterisk", $context) ? $context["trim_asterisk"] : (function () { throw new RuntimeError('Variable "trim_asterisk" does not exist.', 7, $this->source); })()) && (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 7, $this->source); })())) && (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 7, $this->source); })())) && (1 === twig_compare((isset($context["label_length"]) || array_key_exists("label_length", $context) ? $context["label_length"] : (function () { throw new RuntimeError('Variable "label_length" does not exist.', 7, $this->source); })()), 0)))) {
            // line 8
            echo "        ";
            $context["label"] = (((0 === twig_compare(twig_last($this->env, twig_trim_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 8, $this->source); })()))), "*"))) ? (twig_slice($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 8, $this->source); })()), 0, ((isset($context["label_length"]) || array_key_exists("label_length", $context) ? $context["label_length"] : (function () { throw new RuntimeError('Variable "label_length" does not exist.', 8, $this->source); })()) - 1))) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 8, $this->source); })())));
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    ";
        // line 11
        $this->displayParentBlock("form_label", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 15, $this->source); })())), 0))) {
            // line 16
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "parent", [], "any", false, false, false, 16))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "        <ul class=\"list-unstyled\">";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 19)), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "</ul>
        ";
            // line 22
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "parent", [], "any", false, false, false, 22))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "form_extension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  103 => 21,  95 => 19,  91 => 18,  89 => 17,  83 => 16,  81 => 15,  77 => 14,  71 => 11,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"bootstrap_3_layout.html.twig\" %}

 {% block form_label %}
    {% set trim_asterisk = trim_asterisk is defined ? trim_asterisk : true %}
    {% set label_length = label | length %}

    {% if trim_asterisk and required and label and label_length > 0 %}
        {% set label = (label | trim | last == '*') ? label[:label_length - 1] : label %}
    {% endif %}

    {{ parent() }}
{% endblock %}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent is not null %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
        <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message | trans }}</li>
        {%- endfor -%}
    </ul>
        {% if form.parent is not null %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "form_extension.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Form/Type/form_extension.twig");
    }
}
