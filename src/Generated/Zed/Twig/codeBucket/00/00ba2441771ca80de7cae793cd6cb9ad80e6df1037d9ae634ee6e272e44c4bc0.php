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

/* @SecurityGui/Layout/form.twig */
class __TwigTemplate_578c56ed8ad6eae981f894a94d062ee7adc68d570ecba904f3e6a222fcc700cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_row' => [$this, 'block_form_row'],
            'email_widget' => [$this, 'block_email_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('email_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('password_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('submit_widget', $context, $blocks);
    }

    // line 1
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        ob_start();
        // line 3
        echo "        <div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 3, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 3, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 3, $this->source); })()))) {
            echo " has-error";
        }
        echo "\">
            <div";
        // line 4
        if (        $this->hasBlock("form_group_class", $context, $blocks)) {
            echo " class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\"";
        }
        echo ">
                ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'widget');
        echo "
                ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'errors');
        echo "
            </div>
        </div>
    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_parse_0_);
    }

    // line 12
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 13, $this->source); })()), "email")) : ("email"));
        // line 14
        echo "<div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'label', ["label" => "Email"]);
        echo "
        ";
        // line 16
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
    }

    // line 20
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 21, $this->source); })()), "password")) : ("password"));
        // line 22
        echo "<div class=\"form-group\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'label', ["label" => "password"]);
        echo "
        ";
        // line 24
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    </div>
";
    }

    // line 28
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <div class=\"form-group\">
        ";
        // line 30
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 30, $this->source); })()), "submit")) : ("submit"));
        // line 31
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 31, $this->source); })()), ["class" => "btn btn-block"]);
        // line 32
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@SecurityGui/Layout/form.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 32,  145 => 31,  143 => 30,  140 => 29,  136 => 28,  129 => 24,  125 => 23,  122 => 22,  120 => 21,  116 => 20,  109 => 16,  105 => 15,  102 => 14,  100 => 13,  96 => 12,  92 => 2,  85 => 6,  81 => 5,  73 => 4,  66 => 3,  64 => 2,  60 => 1,  56 => 28,  53 => 27,  51 => 20,  48 => 19,  46 => 12,  43 => 11,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block form_row -%}
    {% apply spaceless %}
        <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
            <div{% if block('form_group_class') is defined %} class=\"{{ block('form_group_class') }}\"{% endif %}>
                {{ form_widget(form) }}
                {{ form_errors(form) }}
            </div>
        </div>
    {% endapply %}
{%- endblock form_row %}

{% block email_widget %}
    {%- set type = type|default('email') -%}
    <div class=\"form-group\">
        {{ form_label(form, 'Email') }}
        {{ block('form_widget_simple') }}
    </div>
{% endblock %}

{% block password_widget %}
    {%- set type = type|default('password') -%}
    <div class=\"form-group\">
        {{ form_label(form, 'password') }}
        {{ block('form_widget_simple') }}
    </div>
{% endblock %}

{% block submit_widget  %}
    <div class=\"form-group\">
        {% set type = type | default('submit') %}
        {% set attr = attr | merge({class: 'btn btn-block'}) %}
        {{ block('button_widget') }}
    </div>
{% endblock submit_widget %}
", "@SecurityGui/Layout/form.twig", "/data/vendor/spryker/security-gui/src/Spryker/Zed/SecurityGui/Presentation/Layout/form.twig");
    }
}
