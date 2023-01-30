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

/* @ProductManagement/_partials/assign-bundled-product-template.twig */
class __TwigTemplate_918309170661b7f69555b785bcf9841976ebacfa8904c646cb03d36667411a24 extends Template
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
        echo "<div class=\"row\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bundledProductForm"]) || array_key_exists("bundledProductForm", $context) ? $context["bundledProductForm"] : (function () { throw new RuntimeError('Variable "bundledProductForm" does not exist.', 1, $this->source); })()), "vars", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">

    <div class=\"form-group col-md-2\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["bundledProductForm"]) || array_key_exists("bundledProductForm", $context) ? $context["bundledProductForm"] : (function () { throw new RuntimeError('Variable "bundledProductForm" does not exist.', 4, $this->source); })()), "sku", [], "any", false, false, false, 4), 'label');
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["bundledProductForm"]) || array_key_exists("bundledProductForm", $context) ? $context["bundledProductForm"] : (function () { throw new RuntimeError('Variable "bundledProductForm" does not exist.', 5, $this->source); })()), "sku", [], "any", false, false, false, 5), 'widget');
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["bundledProductForm"]) || array_key_exists("bundledProductForm", $context) ? $context["bundledProductForm"] : (function () { throw new RuntimeError('Variable "bundledProductForm" does not exist.', 6, $this->source); })()), "sku", [], "any", false, false, false, 6), 'errors');
        echo "
    </div>

    <div class=\"form-group col-md-2 ";
        // line 9
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["bundledProductForm"]) || array_key_exists("bundledProductForm", $context) ? $context["bundledProductForm"] : (function () { throw new RuntimeError('Variable "bundledProductForm" does not exist.', 9, $this->source); })()), "quantity", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "errors", [], "any", false, false, false, 9)), 0))) {
            echo "has-error";
        }
        echo "\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["bundledProductForm"]) || array_key_exists("bundledProductForm", $context) ? $context["bundledProductForm"] : (function () { throw new RuntimeError('Variable "bundledProductForm" does not exist.', 10, $this->source); })()), "quantity", [], "any", false, false, false, 10), 'label');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["bundledProductForm"]) || array_key_exists("bundledProductForm", $context) ? $context["bundledProductForm"] : (function () { throw new RuntimeError('Variable "bundledProductForm" does not exist.', 11, $this->source); })()), "quantity", [], "any", false, false, false, 11), 'widget');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["bundledProductForm"]) || array_key_exists("bundledProductForm", $context) ? $context["bundledProductForm"] : (function () { throw new RuntimeError('Variable "bundledProductForm" does not exist.', 12, $this->source); })()), "quantity", [], "any", false, false, false, 12), 'errors');
        echo "
    </div>

    <div class=\"form-group col-md-2\">
        <label>&nbsp;</label>
        <div class=\"input-group\">
            <input type=\"button\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove"), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline btn-remove\"/>
        </div>
    </div>

    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["bundledProductForm"]) || array_key_exists("bundledProductForm", $context) ? $context["bundledProductForm"] : (function () { throw new RuntimeError('Variable "bundledProductForm" does not exist.', 22, $this->source); })()), 'widget');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/_partials/assign-bundled-product-template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  81 => 18,  72 => 12,  68 => 11,  64 => 10,  58 => 9,  52 => 6,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\" id=\"{{ bundledProductForm.vars.id }}\">

    <div class=\"form-group col-md-2\">
        {{ form_label(bundledProductForm.sku) }}
        {{ form_widget(bundledProductForm.sku) }}
        {{ form_errors(bundledProductForm.sku) }}
    </div>

    <div class=\"form-group col-md-2 {% if bundledProductForm.quantity.vars.errors|length > 0 %}has-error{% endif %}\">
        {{ form_label(bundledProductForm.quantity) }}
        {{ form_widget(bundledProductForm.quantity) }}
        {{ form_errors(bundledProductForm.quantity) }}
    </div>

    <div class=\"form-group col-md-2\">
        <label>&nbsp;</label>
        <div class=\"input-group\">
            <input type=\"button\" value=\"{{ 'Remove' | trans }}\" class=\"btn btn-sm btn-outline btn-remove\"/>
        </div>
    </div>

    {{ form_widget(bundledProductForm) }}
</div>
", "@ProductManagement/_partials/assign-bundled-product-template.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//_partials/assign-bundled-product-template.twig");
    }
}
