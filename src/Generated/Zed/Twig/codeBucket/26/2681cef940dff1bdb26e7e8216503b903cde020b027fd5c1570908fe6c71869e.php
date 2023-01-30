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

/* @ProductManagement/Variant/_partials/price-tab.twig */
class __TwigTemplate_d3fec58b9286fa3b13ce805331bda8566d134b1933e109575b8497f42a8f6690 extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "html", null, true);
        echo "</h3>
        <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter price."), "html", null, true);
        echo "</p>
    ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_1_);
        // line 6
        echo "</div>

";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "price_source", [], "any", true, true, false, 8)) {
            // line 9
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "price_source", [], "any", false, false, false, 9), 'row', ["id" => "price-source-checkbox"]);
            echo "
";
        }
        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "@ProductManagement/_partials/price_dimension_filter.twig", ["priceDimensionForm" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "price_dimension", [], "any", false, false, false, 12)]);
        echo "
";
        // line 13
        echo twig_include($this->env, $context, "@ProductManagement/_partials/product_price_collection.twig", ["moneyValueFormViewCollection" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "prices", [], "any", false, false, false, 13)]);
        echo "


";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "price_and_stock", [], "any", true, true, false, 16)) {
            // line 17
            echo "
    <div class=\"well\">
        ";
            // line 19
            ob_start();
            // line 20
            echo "            <h3>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stock"), "html", null, true);
            echo "</h3>
            <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter stock value. In case you create multiple variants, the stock can be managed under \"Product Variants\" and this input field will be ignored."), "html", null, true);
            echo "</p>
        ";
            $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_2_);
            // line 23
            echo "    </div>

    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "price_and_stock", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["inputCollection"]) {
                // line 26
                echo "        ";
                $context["form_group_errors_css"] = "";
                // line 27
                echo "
        ";
                // line 28
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inputCollection"], "quantity", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28))) {
                    // line 29
                    echo "            ";
                    $context["form_group_errors_css"] = "has-error";
                    // line 30
                    echo "        ";
                }
                // line 31
                echo "
        ";
                // line 32
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["inputCollection"], "id_stock_product", [], "any", false, false, false, 32), 'row');
                echo "
        ";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["inputCollection"], "fk_stock", [], "any", false, false, false, 33), 'row');
                echo "

        ";
                // line 35
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["inputCollection"], "type", [], "any", false, false, false, 35), 'row');
                echo "
        ";
                // line 36
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["inputCollection"], "quantity", [], "any", false, false, false, 36), 'row');
                echo "
        ";
                // line 37
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["inputCollection"], "is_never_out_of_stock", [], "any", false, false, false, 37), 'row');
                echo "

        <div class=\"form-group\">
            ";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Available in stores"), "html", null, true);
                echo ":
            ";
                // line 41
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inputCollection"], "vars", [], "any", false, true, false, 41), "available_in_stores", [], "any", true, true, false, 41)) {
                    // line 42
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["inputCollection"], "vars", [], "any", false, false, false, 42), "available_in_stores", [], "any", false, false, false, 42));
                    foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                        // line 43
                        echo "                    <span class=\"badge\"><strong>";
                        echo twig_escape_filter($this->env, $context["store"], "html", null, true);
                        echo "</strong></span>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "            ";
                } else {
                    // line 46
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("n/a"), "html", null, true);
                    echo "
            ";
                }
                // line 48
                echo "        </div>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inputCollection'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Variant/_partials/price-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 51,  176 => 48,  170 => 46,  167 => 45,  158 => 43,  153 => 42,  151 => 41,  147 => 40,  141 => 37,  137 => 36,  133 => 35,  128 => 33,  124 => 32,  121 => 31,  118 => 30,  115 => 29,  113 => 28,  110 => 27,  107 => 26,  103 => 25,  99 => 23,  97 => 19,  92 => 21,  87 => 20,  85 => 19,  81 => 17,  79 => 16,  73 => 13,  69 => 12,  66 => 11,  60 => 9,  58 => 8,  54 => 6,  52 => 2,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'Price' | trans }}</h3>
        <p>{{ 'Enter price.' | trans }}</p>
    {% endapply %}
</div>

{% if form.price_source is defined %}
    {{ form_row(form.price_source, { 'id': 'price-source-checkbox' }) }}
{% endif %}

{{ include('@ProductManagement/_partials/price_dimension_filter.twig', {priceDimensionForm: form.price_dimension}) }}
{{ include('@ProductManagement/_partials/product_price_collection.twig', {moneyValueFormViewCollection: form.prices}) }}


{% if form.price_and_stock is defined %}

    <div class=\"well\">
        {% apply trans|raw %}
            <h3>{{ 'Stock' | trans }}</h3>
            <p>{{ 'Enter stock value. In case you create multiple variants, the stock can be managed under \"Product Variants\" and this input field will be ignored.' | trans }}</p>
        {% endapply %}
    </div>

    {% for inputCollection in form.price_and_stock %}
        {% set form_group_errors_css = '' %}

        {% if inputCollection.quantity.vars.errors|length %}
            {% set form_group_errors_css = 'has-error' %}
        {% endif %}

        {{ form_row(inputCollection.id_stock_product) }}
        {{ form_row(inputCollection.fk_stock) }}

        {{ form_row(inputCollection.type) }}
        {{ form_row(inputCollection.quantity) }}
        {{ form_row(inputCollection.is_never_out_of_stock) }}

        <div class=\"form-group\">
            {{ 'Available in stores' | trans }}:
            {% if inputCollection.vars.available_in_stores is defined %}
                {% for store in inputCollection.vars.available_in_stores %}
                    <span class=\"badge\"><strong>{{ store }}</strong></span>
                {% endfor %}
            {% else %}
                {{ 'n/a' | trans }}
            {% endif %}
        </div>

    {% endfor %}

{% endif %}
", "@ProductManagement/Variant/_partials/price-tab.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Variant/_partials/price-tab.twig");
    }
}
