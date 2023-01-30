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

/* @CustomerGroup/_partials/customer-assignment.twig */
class __TwigTemplate_16485826053aa1ded855d85403b578958b61a097126803f60bc451751359a6bd extends Template
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
        $this->loadTemplate("@CustomerGroup/_partials/assigment-table-set.twig", "@CustomerGroup/_partials/customer-assignment.twig", 1)->display(twig_array_merge($context, ["sourceTabId" => "available-items-source-tab", "sourceTabLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Available customers"), "destinationTabId" => "available-items-destination-tab", "destinationTabLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected customers to assign"), "selectButtonLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all"), "selectButtonClass" => "js-select-all-button", "table" =>         // line 8
(isset($context["availableCustomerTable"]) || array_key_exists("availableCustomerTable", $context) ? $context["availableCustomerTable"] : (function () { throw new RuntimeError('Variable "availableCustomerTable" does not exist.', 8, $this->source); })())]));
        // line 10
        echo "
";
        // line 11
        $this->loadTemplate("@CustomerGroup/_partials/assigment-table-set.twig", "@CustomerGroup/_partials/customer-assignment.twig", 11)->display(twig_array_merge($context, ["sourceTabId" => "assigned-items-source-tab", "sourceTabLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assigned customers"), "destinationTabId" => "assigned-items-destination-tab", "destinationTabLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected customers to de-assign"), "selectButtonLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("De-select all"), "selectButtonClass" => "js-de-select-all-button", "table" =>         // line 18
(isset($context["assignedCustomerTable"]) || array_key_exists("assignedCustomerTable", $context) ? $context["assignedCustomerTable"] : (function () { throw new RuntimeError('Variable "assignedCustomerTable" does not exist.', 18, $this->source); })())]));
        // line 20
        echo "
";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["customerAssignmentForm"]) || array_key_exists("customerAssignmentForm", $context) ? $context["customerAssignmentForm"] : (function () { throw new RuntimeError('Variable "customerAssignmentForm" does not exist.', 22, $this->source); })()), "idsCustomerToAssign", [], "any", false, false, false, 22), 'row', ["id" => "js-item-to-assign-ids-csv-field"]);
        // line 26
        echo "
";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["customerAssignmentForm"]) || array_key_exists("customerAssignmentForm", $context) ? $context["customerAssignmentForm"] : (function () { throw new RuntimeError('Variable "customerAssignmentForm" does not exist.', 28, $this->source); })()), "idsCustomerToDeAssign", [], "any", false, false, false, 28), 'row', ["id" => "js-item-to-de-assign-ids-csv-field"]);
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CustomerGroup/_partials/customer-assignment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 32,  56 => 28,  55 => 27,  52 => 26,  50 => 22,  49 => 21,  46 => 20,  44 => 18,  43 => 11,  40 => 10,  38 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@CustomerGroup/_partials/assigment-table-set.twig' with {
    sourceTabId: 'available-items-source-tab',
    sourceTabLabel: 'Available customers' | trans,
    destinationTabId: 'available-items-destination-tab',
    destinationTabLabel: 'Selected customers to assign' | trans,
    selectButtonLabel: 'Select all' | trans,
    selectButtonClass: 'js-select-all-button',
    table: availableCustomerTable
} %}

{% include '@CustomerGroup/_partials/assigment-table-set.twig' with {
    sourceTabId: 'assigned-items-source-tab',
    sourceTabLabel: 'Assigned customers' | trans,
    destinationTabId: 'assigned-items-destination-tab',
    destinationTabLabel: 'Selected customers to de-assign' | trans,
    selectButtonLabel: 'De-select all' | trans,
    selectButtonClass: 'js-de-select-all-button',
    table: assignedCustomerTable
} %}

{{ form_row(
    customerAssignmentForm.idsCustomerToAssign,
    {
        'id': 'js-item-to-assign-ids-csv-field'
    }
) }}
{{ form_row(
    customerAssignmentForm.idsCustomerToDeAssign,
    {
        'id': 'js-item-to-de-assign-ids-csv-field'
    }
) }}
", "@CustomerGroup/_partials/customer-assignment.twig", "/data/vendor/spryker/customer-group/src/Spryker/Zed/CustomerGroup/Presentation/_partials/customer-assignment.twig");
    }
}
