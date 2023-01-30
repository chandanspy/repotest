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

/* @ProductRelationGui/_partial/tab-relation-type.twig */
class __TwigTemplate_df12b6e905ae2c13ed8b7b461e00ef0143b97adfb2dd09caf9c111c0a2d0e0f5 extends Template
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
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 6, $this->source); })()), "productRelationKey", [], "any", false, false, false, 6), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 7, $this->source); })()), "productRelationType", [], "any", false, false, false, 7), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 8, $this->source); })()), "isRebuildScheduled", [], "any", false, false, false, 8), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 9, $this->source); })()), "isActive", [], "any", false, false, false, 9), 'row');
        echo "
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product owning the relation"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <h4>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected product"), "html", null, true);
        echo "</h4>
        ";
        // line 19
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "data", [], "any", false, false, false, 19), "fkProductAbstract", [], "any", false, false, false, 19))) {
            // line 20
            echo "            <div id=\"select-product-notice\" class=\"form-group\">
                ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select product from the list below *"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 24
        echo "
        <div style=\"display:none\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 26, $this->source); })()), "fkProductAbstract", [], "any", false, false, false, 26), 'widget');
        echo "
        </div>

        <div class=\"";
        // line 29
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 29, $this->source); })()), "fkProductAbstract", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29)), 0))) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 30, $this->source); })()), "fkProductAbstract", [], "any", false, false, false, 30), 'errors');
        echo "
        </div>

        <div class=\"ibox-content product-box\" id=\"selected-product\" style=\"display:none;\">
            <div class=\"product-desc\">
                <img height=\"100\" id=\"product-img\" src=\"";
        // line 35
        (((twig_get_attribute($this->env, $this->source, ($context["productAbstractData"] ?? null), "spy_product_image.external_url_small", [], "array", true, true, false, 35) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["productAbstractData"] ?? null), "spy_product_image.external_url_small", [], "array", false, false, false, 35)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["productAbstractData"] ?? null), "spy_product_image.external_url_small", [], "array", false, false, false, 35), "html", null, true))) : (print ("")));
        echo "\"/> <br />
                <small class=\"text-muted\" id=\"product-category\">";
        // line 36
        (((twig_get_attribute($this->env, $this->source, ($context["productAbstractData"] ?? null), "assignedCategories", [], "array", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["productAbstractData"] ?? null), "assignedCategories", [], "array", false, false, false, 36)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["productAbstractData"] ?? null), "assignedCategories", [], "array", false, false, false, 36), "html", null, true))) : (print ("")));
        echo "</small>
                <span class=\"product-name\">";
        // line 37
        (((twig_get_attribute($this->env, $this->source, ($context["productAbstractData"] ?? null), "spy_product_abstract_localized_attributes.name", [], "array", true, true, false, 37) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["productAbstractData"] ?? null), "spy_product_abstract_localized_attributes.name", [], "array", false, false, false, 37)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["productAbstractData"] ?? null), "spy_product_abstract_localized_attributes.name", [], "array", false, false, false, 37), "html", null, true))) : (print ("")));
        echo "</span>

                <div class=\"small m-t-xs\" id=\"product-description\">";
        // line 39
        (((twig_get_attribute($this->env, $this->source, ($context["productAbstractData"] ?? null), "spy_product_abstract_localized_attributes.description", [], "array", true, true, false, 39) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["productAbstractData"] ?? null), "spy_product_abstract_localized_attributes.description", [], "array", false, false, false, 39)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["productAbstractData"] ?? null), "spy_product_abstract_localized_attributes.description", [], "array", false, false, false, 39), "html", null, true))) : (print ("")));
        echo "</div>
            </div>
        </div>

        ";
        // line 43
        if (array_key_exists("productTable", $context)) {
            // line 44
            echo "            <br />
            <h4>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select product"), "html", null, true);
            echo "</h4>
            ";
            // line 46
            echo (isset($context["productTable"]) || array_key_exists("productTable", $context) ? $context["productTable"] : (function () { throw new RuntimeError('Variable "productTable" does not exist.', 46, $this->source); })());
            echo "
        ";
        }
        // line 48
        echo "    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store relation"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 56, $this->source); })()), "storeRelation", [], "any", false, false, false, 56), "id_stores", [], "any", false, false, false, 56), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select Stores")]);
        echo "
    </div>
</div>

";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 60, $this->source); })()), "idProductRelation", [], "any", false, false, false, 60), 'row');
        echo "

";
    }

    public function getTemplateName()
    {
        return "@ProductRelationGui/_partial/tab-relation-type.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 60,  160 => 56,  154 => 53,  147 => 48,  142 => 46,  138 => 45,  135 => 44,  133 => 43,  126 => 39,  121 => 37,  117 => 36,  113 => 35,  105 => 30,  99 => 29,  93 => 26,  89 => 24,  83 => 21,  80 => 20,  78 => 19,  74 => 18,  68 => 15,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">{{ 'General' | trans }}</h3>
    </div>
    <div class=\"panel-body\">
        {{ form_row(productRelationForm.productRelationKey) }}
        {{ form_row(productRelationForm.productRelationType) }}
        {{ form_row(productRelationForm.isRebuildScheduled) }}
        {{ form_row(productRelationForm.isActive) }}
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">{{ 'Product owning the relation' | trans }}</h3>
    </div>
    <div class=\"panel-body\">
        <h4>{{ 'Selected product' | trans }}</h4>
        {% if productRelationForm.vars.data.fkProductAbstract is empty %}
            <div id=\"select-product-notice\" class=\"form-group\">
                {{ \"Please select product from the list below *\" | trans  }}
            </div>
        {% endif %}

        <div style=\"display:none\">
            {{ form_widget(productRelationForm.fkProductAbstract) }}
        </div>

        <div class=\"{% if productRelationForm.fkProductAbstract.vars.errors|length > 0 %}has-error{% endif %}\">
            {{ form_errors(productRelationForm.fkProductAbstract) }}
        </div>

        <div class=\"ibox-content product-box\" id=\"selected-product\" style=\"display:none;\">
            <div class=\"product-desc\">
                <img height=\"100\" id=\"product-img\" src=\"{{ productAbstractData['spy_product_image.external_url_small'] ?? '' }}\"/> <br />
                <small class=\"text-muted\" id=\"product-category\">{{ productAbstractData['assignedCategories'] ?? '' }}</small>
                <span class=\"product-name\">{{ productAbstractData['spy_product_abstract_localized_attributes.name'] ?? '' }}</span>

                <div class=\"small m-t-xs\" id=\"product-description\">{{ productAbstractData['spy_product_abstract_localized_attributes.description'] ?? '' }}</div>
            </div>
        </div>

        {% if productTable is defined %}
            <br />
            <h4>{{ 'Select product' | trans }}</h4>
            {{ productTable | raw }}
        {% endif %}
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">{{ 'Store relation' | trans }}</h3>
    </div>
    <div class=\"panel-body\">
        {{ form_row(productRelationForm.storeRelation.id_stores, { 'label': 'Select Stores' | trans }) }}
    </div>
</div>

{{ form_row(productRelationForm.idProductRelation) }}

", "@ProductRelationGui/_partial/tab-relation-type.twig", "/data/vendor/spryker/product-relation-gui/src/Spryker/Zed/ProductRelationGui/Presentation//_partial/tab-relation-type.twig");
    }
}
