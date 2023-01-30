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

/* @ProductLabelGui/Create/_tabs/product-assignment.twig */
class __TwigTemplate_f9c42e15f89d19a548dae2483a670fab24c9969e0537d171c4ca5b5c7f2a343e extends Template
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
        if ((array_key_exists("productLabelTransfer", $context) && twig_get_attribute($this->env, $this->source, (isset($context["productLabelTransfer"]) || array_key_exists("productLabelTransfer", $context) ? $context["productLabelTransfer"] : (function () { throw new RuntimeError('Variable "productLabelTransfer" does not exist.', 1, $this->source); })()), "isDynamic", [], "any", false, false, false, 1))) {
            // line 2
            echo "    <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products for this label are assigned dynamically, you can't manage relations manually."), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("@ProductLabelGui/Create/_tabs/product-assigment-table-set.twig", "@ProductLabelGui/Create/_tabs/product-assignment.twig", 5)->display(twig_array_merge($context, ["sourceTabId" => "available-products-source-tab", "sourceTabLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Available products"), "destinationTabId" => "available-products-destination-tab", "destinationTabLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected products to assign"), "selectButtonLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all"), "selectButtonClass" => "js-select-all-button", "table" =>         // line 12
(isset($context["availableProductTable"]) || array_key_exists("availableProductTable", $context) ? $context["availableProductTable"] : (function () { throw new RuntimeError('Variable "availableProductTable" does not exist.', 12, $this->source); })())]));
        // line 14
        echo "
";
        // line 15
        $this->loadTemplate("@ProductLabelGui/Create/_tabs/product-assigment-table-set.twig", "@ProductLabelGui/Create/_tabs/product-assignment.twig", 15)->display(twig_array_merge($context, ["sourceTabId" => "assigned-products-source-tab", "sourceTabLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assigned products"), "destinationTabId" => "assigned-products-destination-tab", "destinationTabLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected products to de-assign"), "selectButtonLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("De-select all"), "selectButtonClass" => "js-de-select-all-button", "table" =>         // line 22
(isset($context["assignedProductTable"]) || array_key_exists("assignedProductTable", $context) ? $context["assignedProductTable"] : (function () { throw new RuntimeError('Variable "assignedProductTable" does not exist.', 22, $this->source); })())]));
        // line 24
        echo "
";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["relatedProductForm"]) || array_key_exists("relatedProductForm", $context) ? $context["relatedProductForm"] : (function () { throw new RuntimeError('Variable "relatedProductForm" does not exist.', 26, $this->source); })()), "idsProductAbstractToAssignCsv", [], "any", false, false, false, 26), 'row', ["id" => "js-abstract-products-to-assign-ids-csv-field", "value" => ""]);
        // line 31
        echo "
";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["relatedProductForm"]) || array_key_exists("relatedProductForm", $context) ? $context["relatedProductForm"] : (function () { throw new RuntimeError('Variable "relatedProductForm" does not exist.', 33, $this->source); })()), "idsProductAbstractToDeAssignCsv", [], "any", false, false, false, 33), 'row', ["id" => "js-abstract-products-to-de-assign-ids-csv-field", "value" => ""]);
        // line 38
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductLabelGui/Create/_tabs/product-assignment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 38,  67 => 33,  66 => 32,  63 => 31,  61 => 26,  60 => 25,  57 => 24,  55 => 22,  54 => 15,  51 => 14,  49 => 12,  48 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if productLabelTransfer is defined and productLabelTransfer.isDynamic %}
    <div class=\"alert alert-info\">{{ 'Products for this label are assigned dynamically, you can\\'t manage relations manually.' | trans }}</div>
{% endif %}

{% include '@ProductLabelGui/Create/_tabs/product-assigment-table-set.twig' with {
    sourceTabId: 'available-products-source-tab',
    sourceTabLabel: 'Available products' | trans,
    destinationTabId: 'available-products-destination-tab',
    destinationTabLabel: 'Selected products to assign' | trans,
    selectButtonLabel: 'Select all' | trans,
    selectButtonClass: 'js-select-all-button',
    table: availableProductTable
} %}

{% include '@ProductLabelGui/Create/_tabs/product-assigment-table-set.twig' with {
    sourceTabId: 'assigned-products-source-tab',
    sourceTabLabel: 'Assigned products' | trans,
    destinationTabId: 'assigned-products-destination-tab',
    destinationTabLabel: 'Selected products to de-assign' | trans,
    selectButtonLabel: 'De-select all' | trans,
    selectButtonClass: 'js-de-select-all-button',
    table: assignedProductTable
} %}

{{ form_row(
    relatedProductForm.idsProductAbstractToAssignCsv,
    {
        'id': 'js-abstract-products-to-assign-ids-csv-field',
        'value': '',
    }
) }}
{{ form_row(
    relatedProductForm.idsProductAbstractToDeAssignCsv,
    {
        'id': 'js-abstract-products-to-de-assign-ids-csv-field',
        'value': '',
    }
) }}
", "@ProductLabelGui/Create/_tabs/product-assignment.twig", "/data/vendor/spryker/product-label-gui/src/Spryker/Zed/ProductLabelGui/Presentation//Create/_tabs/product-assignment.twig");
    }
}
