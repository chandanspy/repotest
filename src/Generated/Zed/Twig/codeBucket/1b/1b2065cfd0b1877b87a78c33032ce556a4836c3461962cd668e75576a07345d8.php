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

/* @Tax/Set/edit.twig */
class __TwigTemplate_0b65d8928eb1a664013d9a6a20ee0c2d449617fd108725a50fc3e55efa6d0a19 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_title' => [$this, 'block_section_title'],
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
            'head_css' => [$this, 'block_head_css'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Tax/Set/edit.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Tax Set:") . " ") . twig_get_attribute($this->env, $this->source, (isset($context["taxSet"]) || array_key_exists("taxSet", $context) ? $context["taxSet"] : (function () { throw new RuntimeError('Variable "taxSet" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo call_user_func_array($this->env->getFunction('removeActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/tax/delete-set", ["id-tax-set" => twig_get_attribute($this->env, $this->source, (isset($context["taxSet"]) || array_key_exists("taxSet", $context) ? $context["taxSet"] : (function () { throw new RuntimeError('Variable "taxSet" does not exist.', 9, $this->source); })()), "idTaxSet", [], "any", false, false, false, 9)]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete")]);
        echo "
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/tax/set/list"]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Tax Sets")]);
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
    ";
        // line 15
        $this->loadTemplate("@Tax/Set/edit.twig", "@Tax/Set/edit.twig", 15, "1409913067")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax set details")]));
    }

    // line 35
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-tax-main.css"]);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "@Tax/Set/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 37,  90 => 36,  86 => 35,  82 => 15,  79 => 14,  75 => 13,  69 => 10,  64 => 9,  60 => 8,  53 => 5,  49 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Gui/Layout/layout.twig' %}

{% block section_title %}
    {{ 'Edit Tax Set:' | trans ~ ' ' ~ taxSet.name }}
{% endblock %}

{% block action %}
    {{ removeActionButton(url('/tax/delete-set', {'id-tax-set': taxSet.idTaxSet}), 'Delete' | trans) }}
    {{ backActionButton(url('/tax/set/list'), 'Back to Tax Sets' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Tax set details' | trans } %}

        {% block widget_content %}
            {{ form_start(form) }}

            {{ form_row(form.name) }}

            {{ form_label(form.taxRates) }}
            <div class=\"country-select-box\">
                {{ form_errors(form.taxRates) }}
                {{ form_widget(form.taxRates) }}
            </div>

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            {{ form_end(form) }}
        {% endblock %}

    {% endembed %}
{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-tax-main.css') }}\">
{% endblock %}
", "@Tax/Set/edit.twig", "/data/vendor/spryker/tax/src/Spryker/Zed/Tax/Presentation/Set/edit.twig");
    }
}


/* @Tax/Set/edit.twig */
class __TwigTemplate_0b65d8928eb1a664013d9a6a20ee0c2d449617fd108725a50fc3e55efa6d0a19___1409913067 extends Template
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
        // line 15
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Tax/Set/edit.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "

            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'row');
        echo "

            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "taxRates", [], "any", false, false, false, 22), 'label');
        echo "
            <div class=\"country-select-box\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "taxRates", [], "any", false, false, false, 24), 'errors');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "taxRates", [], "any", false, false, false, 25), 'widget');
        echo "
            </div>

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@Tax/Set/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 29,  221 => 28,  215 => 25,  211 => 24,  206 => 22,  201 => 20,  195 => 18,  191 => 17,  180 => 15,  95 => 37,  90 => 36,  86 => 35,  82 => 15,  79 => 14,  75 => 13,  69 => 10,  64 => 9,  60 => 8,  53 => 5,  49 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Gui/Layout/layout.twig' %}

{% block section_title %}
    {{ 'Edit Tax Set:' | trans ~ ' ' ~ taxSet.name }}
{% endblock %}

{% block action %}
    {{ removeActionButton(url('/tax/delete-set', {'id-tax-set': taxSet.idTaxSet}), 'Delete' | trans) }}
    {{ backActionButton(url('/tax/set/list'), 'Back to Tax Sets' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Tax set details' | trans } %}

        {% block widget_content %}
            {{ form_start(form) }}

            {{ form_row(form.name) }}

            {{ form_label(form.taxRates) }}
            <div class=\"country-select-box\">
                {{ form_errors(form.taxRates) }}
                {{ form_widget(form.taxRates) }}
            </div>

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            {{ form_end(form) }}
        {% endblock %}

    {% endembed %}
{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-tax-main.css') }}\">
{% endblock %}
", "@Tax/Set/edit.twig", "/data/vendor/spryker/tax/src/Spryker/Zed/Tax/Presentation/Set/edit.twig");
    }
}
