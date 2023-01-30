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

/* @ProductOption/_template/_product-option-template.twig */
class __TwigTemplate_01e110986ba89ed2150ef39fa6522766d9042cecc20e7249ed66b4f1b1769759 extends Template
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
        echo "<div class=\"row form-product-option-row\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 1, $this->source); })()), "vars", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">

    ";
        // line 3
        $context["readOnly"] = [];
        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "data", [], "any", false, false, false, 4) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "data", [], "any", false, false, false, 4), "idProductOptionValue", [], "any", false, false, false, 4))) {
            // line 5
            echo "        ";
            $context["readOnly"] = ["readonly" => "readonly"];
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    <div class=\"form-group col-md-6 ";
        // line 8
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 8, $this->source); })()), "value", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "errors", [], "any", false, false, false, 8)), 0))) {
            echo "has-error";
        }
        echo "\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 9, $this->source); })()), "value", [], "any", false, false, false, 9), 'label');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 10, $this->source); })()), "value", [], "any", false, false, false, 10), 'widget', ["attr" => (isset($context["readOnly"]) || array_key_exists("readOnly", $context) ? $context["readOnly"] : (function () { throw new RuntimeError('Variable "readOnly" does not exist.', 10, $this->source); })())]);
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 11, $this->source); })()), "value", [], "any", false, false, false, 11), 'errors');
        echo "
    </div>

    <div class=\"form-group col-md-4 ";
        // line 14
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 14, $this->source); })()), "sku", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "errors", [], "any", false, false, false, 14)), 0))) {
            echo "has-error";
        }
        echo "\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 15, $this->source); })()), "sku", [], "any", false, false, false, 15), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 16, $this->source); })()), "sku", [], "any", false, false, false, 16), 'widget', ["attr" => (isset($context["readOnly"]) || array_key_exists("readOnly", $context) ? $context["readOnly"] : (function () { throw new RuntimeError('Variable "readOnly" does not exist.', 16, $this->source); })())]);
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 17, $this->source); })()), "sku", [], "any", false, false, false, 17), 'errors');
        echo "
    </div>

    <div class=\"form-group col-md-2\">
        <label>&nbsp;</label>
        <div class=\"input-group\">
            <input type=\"button\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove"), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline btn-remove\"/>
        </div>
    </div>

    <div class=\"form-group col-md-6  ";
        // line 27
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 27, $this->source); })()), "prices", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27)), 0))) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 28, $this->source); })()), "prices", [], "any", false, false, false, 28), 'label');
        echo "
            ";
        // line 29
        echo call_user_func_array($this->env->getFunction('form_money_collection')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 29, $this->source); })()), "prices", [], "any", false, false, false, 29)]);
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 30, $this->source); })()), "prices", [], "any", false, false, false, 30), 'errors');
        echo "
    </div>

    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 33, $this->source); })()), "idProductOptionValue", [], "any", false, false, false, 33), 'row');
        echo "
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionForm"]) || array_key_exists("productOptionForm", $context) ? $context["productOptionForm"] : (function () { throw new RuntimeError('Variable "productOptionForm" does not exist.', 34, $this->source); })()), "optionHash", [], "any", false, false, false, 34), 'row');
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "@ProductOption/_template/_product-option-template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 34,  127 => 33,  121 => 30,  117 => 29,  113 => 28,  107 => 27,  100 => 23,  91 => 17,  87 => 16,  83 => 15,  77 => 14,  71 => 11,  67 => 10,  63 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row form-product-option-row\" id=\"{{ productOptionForm.vars.id }}\">

    {% set readOnly = {} %}
    {% if productOptionForm.vars.data and productOptionForm.vars.data.idProductOptionValue %}
        {% set readOnly = {'readonly' : 'readonly'} %}
    {% endif %}

    <div class=\"form-group col-md-6 {% if productOptionForm.value.vars.errors|length > 0 %}has-error{% endif %}\">
        {{ form_label(productOptionForm.value) }}
        {{ form_widget(productOptionForm.value, {attr:readOnly}) }}
        {{ form_errors(productOptionForm.value) }}
    </div>

    <div class=\"form-group col-md-4 {% if productOptionForm.sku.vars.errors|length > 0 %}has-error{% endif %}\">
        {{ form_label(productOptionForm.sku) }}
        {{ form_widget(productOptionForm.sku, {attr:readOnly}) }}
        {{ form_errors(productOptionForm.sku) }}
    </div>

    <div class=\"form-group col-md-2\">
        <label>&nbsp;</label>
        <div class=\"input-group\">
            <input type=\"button\" value=\"{{ 'Remove' | trans }}\" class=\"btn btn-sm btn-outline btn-remove\"/>
        </div>
    </div>

    <div class=\"form-group col-md-6  {% if productOptionForm.prices.vars.errors|length > 0 %}has-error{% endif %}\">
            {{ form_label(productOptionForm.prices) }}
            {{ form_money_collection(productOptionForm.prices) }}
            {{ form_errors(productOptionForm.prices) }}
    </div>

    {{ form_row(productOptionForm.idProductOptionValue) }}
    {{ form_row(productOptionForm.optionHash) }}
</div>

", "@ProductOption/_template/_product-option-template.twig", "/data/vendor/spryker/product-option/src/Spryker/Zed/ProductOption/Presentation//_template/_product-option-template.twig");
    }
}
