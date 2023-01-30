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

/* @ProductManagement/Product/_partials/price-tab.twig */
class __TwigTemplate_aa1fc97097ced861b9c8d20de645838d773b7bb10671841eb41171e58dd9a17d extends Template
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
        echo "<div class=\"well\">
    ";
        // line 2
        ob_start();
        // line 3
        echo "        <h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price & Tax"), "html", null, true);
        echo "</h3>
        <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Below you can choose between your predefined tax sets and edit the price of your product."), "html", null, true);
        echo "</p>
        <p><i>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note: The price that you edit here is only displayed in the shop catalog and the product detail page for the non configured product (Not product variant)"), "html", null, true);
        echo "</i></p>
    ";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_2_);
        // line 7
        echo "</div>

";
        // line 9
        echo twig_include($this->env, $context, "@ProductManagement/_partials/price_dimension_filter.twig", ["priceDimensionForm" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "price_dimension", [], "any", false, false, false, 9)]);
        echo "
";
        // line 10
        echo twig_include($this->env, $context, "@ProductManagement/_partials/product_price_collection.twig", ["moneyValueFormViewCollection" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "prices", [], "any", false, false, false, 10)]);
        echo "

";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "tax_rate", [], "any", false, false, false, 12), 'row');
        echo "



";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/price-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  66 => 10,  62 => 9,  58 => 7,  56 => 2,  51 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'Price & Tax' | trans }}</h3>
        <p>{{ 'Below you can choose between your predefined tax sets and edit the price of your product.' | trans }}</p>
        <p><i>{{ 'Note: The price that you edit here is only displayed in the shop catalog and the product detail page for the non configured product (Not product variant)' | trans }}</i></p>
    {% endapply %}
</div>

{{ include('@ProductManagement/_partials/price_dimension_filter.twig', {priceDimensionForm: form.price_dimension}) }}
{{ include('@ProductManagement/_partials/product_price_collection.twig', {moneyValueFormViewCollection: form.prices}) }}

{{ form_row(form.tax_rate) }}



", "@ProductManagement/Product/_partials/price-tab.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/price-tab.twig");
    }
}
