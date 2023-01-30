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

/* @ProductAttributeGui/Attribute/partials/attribute-form-content.twig */
class __TwigTemplate_17ccd0db15bbba9122a033a6145f7477a358815638bfca7b42a394f9f6b2587a extends Template
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
        if ( !array_key_exists("readOnly", $context)) {
            // line 2
            echo "    ";
            $context["readOnly"] = false;
        }
        // line 4
        echo "
";
        // line 5
        if ( !(isset($context["readOnly"]) || array_key_exists("readOnly", $context) ? $context["readOnly"] : (function () { throw new RuntimeError('Variable "readOnly" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attributes and their values are used by the backoffice application. They are unique and cannot contain special characters."), "html", null, true);
            echo "</p>
";
        }
        // line 8
        echo "
";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "key", [], "any", false, false, false, 9), 'row');
        echo "

";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "input_type", [], "any", false, false, false, 11), 'row');
        echo "

";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "is_super", [], "any", false, false, false, 13), 'row');
        echo "

<hr />

<div class='form-group ";
        // line 17
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "values", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17))) {
            echo "has-error";
        }
        echo "'>
    <h4>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "values", [], "any", false, false, false, 18), 'label');
        echo "</h4>
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "values", [], "any", false, false, false, 19), 'widget');
        echo "
    ";
        // line 20
        if ( !(isset($context["readOnly"]) || array_key_exists("readOnly", $context) ? $context["readOnly"] : (function () { throw new RuntimeError('Variable "readOnly" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can add new values by pressing \"Enter\" after each element"), "html", null, true);
            echo "</span>
    ";
        }
        // line 23
        echo "</div>

";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "allow_input", [], "any", false, false, false, 25), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/Attribute/partials/attribute-form-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  96 => 23,  90 => 21,  88 => 20,  84 => 19,  80 => 18,  74 => 17,  67 => 13,  62 => 11,  57 => 9,  54 => 8,  48 => 6,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if readOnly is not defined %}
    {% set readOnly = false %}
{% endif %}

{% if not readOnly %}
    <p>{{ 'Attributes and their values are used by the backoffice application. They are unique and cannot contain special characters.' | trans }}</p>
{% endif %}

{{ form_row(form.key) }}

{{ form_row(form.input_type) }}

{{ form_row(form.is_super) }}

<hr />

<div class='form-group {% if form.values.vars.errors|length %}has-error{% endif %}'>
    <h4>{{ form_label(form.values) }}</h4>
    {{ form_widget(form.values) }}
    {% if not readOnly %}
        <span class=\"help-block\">{{ 'You can add new values by pressing \"Enter\" after each element' | trans }}</span>
    {% endif %}
</div>

{{ form_row(form.allow_input) }}
", "@ProductAttributeGui/Attribute/partials/attribute-form-content.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//Attribute/partials/attribute-form-content.twig");
    }
}
