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

/* @ProductOption/_template/_product-option-translation-template.twig */
class __TwigTemplate_5e5eb0781241719991ff49ce110a63be6d8c9e81e1661b067f7cb2a7a193e3bd extends Template
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
        echo "<div class=\"form-product-option-translation-row\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productOptionTranslationForm"]) || array_key_exists("productOptionTranslationForm", $context) ? $context["productOptionTranslationForm"] : (function () { throw new RuntimeError('Variable "productOptionTranslationForm" does not exist.', 1, $this->source); })()), "vars", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">

    <div class=\"form-group ";
        // line 3
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productOptionTranslationForm"]) || array_key_exists("productOptionTranslationForm", $context) ? $context["productOptionTranslationForm"] : (function () { throw new RuntimeError('Variable "productOptionTranslationForm" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "errors", [], "any", false, false, false, 3)), 0))) {
            echo "has-error";
        }
        echo "\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionTranslationForm"]) || array_key_exists("productOptionTranslationForm", $context) ? $context["productOptionTranslationForm"] : (function () { throw new RuntimeError('Variable "productOptionTranslationForm" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), 'label', (twig_test_empty($_label_ = (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 4, $this->source); })())) ? [] : ["label" => $_label_]));
        echo "
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionTranslationForm"]) || array_key_exists("productOptionTranslationForm", $context) ? $context["productOptionTranslationForm"] : (function () { throw new RuntimeError('Variable "productOptionTranslationForm" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), 'widget', ["attr" => ["data-translation-key" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productOptionTranslationForm"]) || array_key_exists("productOptionTranslationForm", $context) ? $context["productOptionTranslationForm"] : (function () { throw new RuntimeError('Variable "productOptionTranslationForm" does not exist.', 5, $this->source); })()), "relatedOptionHash", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5)]]);
        echo "
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionTranslationForm"]) || array_key_exists("productOptionTranslationForm", $context) ? $context["productOptionTranslationForm"] : (function () { throw new RuntimeError('Variable "productOptionTranslationForm" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), 'errors');
        echo "
    </div>

    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionTranslationForm"]) || array_key_exists("productOptionTranslationForm", $context) ? $context["productOptionTranslationForm"] : (function () { throw new RuntimeError('Variable "productOptionTranslationForm" does not exist.', 9, $this->source); })()), "key", [], "any", false, false, false, 9), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionTranslationForm"]) || array_key_exists("productOptionTranslationForm", $context) ? $context["productOptionTranslationForm"] : (function () { throw new RuntimeError('Variable "productOptionTranslationForm" does not exist.', 10, $this->source); })()), "localeCode", [], "any", false, false, false, 10), 'row');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productOptionTranslationForm"]) || array_key_exists("productOptionTranslationForm", $context) ? $context["productOptionTranslationForm"] : (function () { throw new RuntimeError('Variable "productOptionTranslationForm" does not exist.', 11, $this->source); })()), "relatedOptionHash", [], "any", false, false, false, 11), 'row');
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "@ProductOption/_template/_product-option-translation-template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  67 => 10,  63 => 9,  57 => 6,  53 => 5,  49 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-product-option-translation-row\" id=\"{{ productOptionTranslationForm.vars.id }}\">

    <div class=\"form-group {% if productOptionTranslationForm.name.vars.errors|length > 0 %}has-error{% endif %}\">
        {{ form_label(productOptionTranslationForm.name, label) }}
        {{ form_widget(productOptionTranslationForm.name, {attr: { 'data-translation-key': productOptionTranslationForm.relatedOptionHash.vars.value  }}) }}
        {{ form_errors(productOptionTranslationForm.name) }}
    </div>

    {{ form_row(productOptionTranslationForm.key) }}
    {{ form_row(productOptionTranslationForm.localeCode) }}
    {{ form_row(productOptionTranslationForm.relatedOptionHash) }}
</div>

", "@ProductOption/_template/_product-option-translation-template.twig", "/data/vendor/spryker/product-option/src/Spryker/Zed/ProductOption/Presentation//_template/_product-option-translation-template.twig");
    }
}
