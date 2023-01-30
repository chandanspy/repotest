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

/* @ProductAlternativeGui/ProductAlternative/_partials/product-alternatives-tab.twig */
class __TwigTemplate_fe18aef49b3218f2f8c7803e72ade745e029d000965d4e54e9d8ff47d95694f0 extends Template
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
        $context["productAlternatives"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "vars", [], "any", false, false, false, 1), "data", [], "any", false, false, false, 1), "productAlternatives", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"well\">
    <h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product Alternatives"), "html", null, true);
        echo "</h3>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is a list of alternative products that the current Concrete Product has."), "html", null, true);
        echo "</p>
    <p><i>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note: You can add a new product alternative using the text field below."), "html", null, true);
        echo "</i></p>
</div>

<div class=\"form-group\">
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "alternative_products", [], "array", false, false, false, 10), 'label');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "alternative_products", [], "array", false, false, false, 11), 'errors');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "alternative_products", [], "array", false, false, false, 12), 'widget');
        echo "
</div>

<div id=\"items\" class=\"col-sm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
    <div>
        ";
        // line 17
        $this->loadTemplate("@ProductAlternativeGui/ProductAlternative/blocks/product-alternatives-table.twig", "@ProductAlternativeGui/ProductAlternative/_partials/product-alternatives-tab.twig", 17)->display($context);
        // line 18
        echo "    </div>
</div>

<script src=\"";
        // line 21
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-product-alternative-assign.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductAlternativeGui/ProductAlternative/_partials/product-alternatives-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  76 => 18,  74 => 17,  66 => 12,  62 => 11,  58 => 10,  51 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set productAlternatives = form.vars.data.productAlternatives %}

<div class=\"well\">
    <h3>{{ 'Product Alternatives' | trans }}</h3>
    <p>{{ 'This is a list of alternative products that the current Concrete Product has.' | trans }}</p>
    <p><i>{{ 'Note: You can add a new product alternative using the text field below.' | trans }}</i></p>
</div>

<div class=\"form-group\">
    {{ form_label(form['alternative_products']) }}
    {{ form_errors(form['alternative_products']) }}
    {{ form_widget(form['alternative_products']) }}
</div>

<div id=\"items\" class=\"col-sm-12 col-sm-12 col-md-12 col-lg-12 col-xl-12\">
    <div>
        {% include '@ProductAlternativeGui/ProductAlternative/blocks/product-alternatives-table.twig' %}
    </div>
</div>

<script src=\"{{ assetsPath('js/spryker-zed-product-alternative-assign.js') }}\"></script>
", "@ProductAlternativeGui/ProductAlternative/_partials/product-alternatives-tab.twig", "/data/vendor/spryker/product-alternative-gui/src/Spryker/Zed/ProductAlternativeGui/Presentation//ProductAlternative/_partials/product-alternatives-tab.twig");
    }
}
