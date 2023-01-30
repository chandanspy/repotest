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

/* @ProductManagement/Product/_partials/input-group.twig */
class __TwigTemplate_bea21e0ee0a5678f0c1d52587ea03d8255c76cfbbddfea48f849e1851fab727b extends Template
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
        $context["form_group_errors_css"] = "";
        // line 2
        echo "
";
        // line 3
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inputGroup"]) || array_key_exists("inputGroup", $context) ? $context["inputGroup"] : (function () { throw new RuntimeError('Variable "inputGroup" does not exist.', 3, $this->source); })()), "value", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "errors", [], "any", false, false, false, 3))) {
            // line 4
            echo "    ";
            $context["form_group_errors_css"] = "has-error";
        }
        // line 6
        echo "
<div class='col-sm-12 col-lg-6 attribute_metadata_row  ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["form_group_errors_css"]) || array_key_exists("form_group_errors_css", $context) ? $context["form_group_errors_css"] : (function () { throw new RuntimeError('Variable "form_group_errors_css" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "'>
    <label>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["inputGroup"]) || array_key_exists("inputGroup", $context) ? $context["inputGroup"] : (function () { throw new RuntimeError('Variable "inputGroup" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "label", [], "any", false, false, false, 8), "html", null, true);
        echo "</label>
    <div class='form-group input-group'>
        <span class=\"input-group-addon\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inputGroup"]) || array_key_exists("inputGroup", $context) ? $context["inputGroup"] : (function () { throw new RuntimeError('Variable "inputGroup" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), 'widget', ["no_label" => "true"]);
        echo "</span>
        ";
        // line 11
        if (array_key_exists("localeName", $context)) {
            // line 12
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inputGroup"]) || array_key_exists("inputGroup", $context) ? $context["inputGroup"] : (function () { throw new RuntimeError('Variable "inputGroup" does not exist.', 12, $this->source); })()), "value", [], "any", false, false, false, 12), 'widget', ["attr" => ["locale_code" => (isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 12, $this->source); })())]]);
            echo "
        ";
        } else {
            // line 14
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inputGroup"]) || array_key_exists("inputGroup", $context) ? $context["inputGroup"] : (function () { throw new RuntimeError('Variable "inputGroup" does not exist.', 14, $this->source); })()), "value", [], "any", false, false, false, 14), 'widget');
            echo "
        ";
        }
        // line 16
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inputGroup"]) || array_key_exists("inputGroup", $context) ? $context["inputGroup"] : (function () { throw new RuntimeError('Variable "inputGroup" does not exist.', 16, $this->source); })()), "value_hidden_id", [], "any", false, false, false, 16), 'widget');
        echo "
    </div>
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inputGroup"]) || array_key_exists("inputGroup", $context) ? $context["inputGroup"] : (function () { throw new RuntimeError('Variable "inputGroup" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'errors');
        echo " ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["inputGroup"]) || array_key_exists("inputGroup", $context) ? $context["inputGroup"] : (function () { throw new RuntimeError('Variable "inputGroup" does not exist.', 18, $this->source); })()), "value", [], "any", false, false, false, 18), 'errors');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/input-group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 16,  72 => 14,  66 => 12,  64 => 11,  60 => 10,  55 => 8,  51 => 7,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set form_group_errors_css = '' %}

{% if inputGroup.value.vars.errors|length %}
    {% set form_group_errors_css = 'has-error' %}
{% endif %}

<div class='col-sm-12 col-lg-6 attribute_metadata_row  {{ form_group_errors_css }}'>
    <label>{{ inputGroup.name.vars.label }}</label>
    <div class='form-group input-group'>
        <span class=\"input-group-addon\">{{ form_widget(inputGroup.name, {no_label: 'true'}) }}</span>
        {% if localeName is defined %}
            {{ form_widget(inputGroup.value, { 'attr': {'locale_code': localeName }}) }}
        {% else %}
            {{ form_widget(inputGroup.value) }}
        {% endif %}
        {{ form_widget(inputGroup.value_hidden_id) }}
    </div>
    {{ form_errors(inputGroup.name) }} {{ form_errors(inputGroup.value) }}
</div>
", "@ProductManagement/Product/_partials/input-group.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/input-group.twig");
    }
}
