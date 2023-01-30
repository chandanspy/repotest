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

/* @ConfigurableBundleGui/Template/tabs/slots-tab.twig */
class __TwigTemplate_c99bb15ef440a79c809dfac9d717724db16b8f4744b37905c4576b905b1fdb20 extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can add slots on this page. During slot creation you can assign products from a catalog to this slot one by one, import CSV file or assign several categories."), "html", null, true);
        echo "
</div>

<div id=\"slot-table-wrapper\">
    ";
        // line 6
        echo (isset($context["slotTable"]) || array_key_exists("slotTable", $context) ? $context["slotTable"] : (function () { throw new RuntimeError('Variable "slotTable" does not exist.', 6, $this->source); })());
        echo "
</div>

<hr/>

<h4 id=\"slot-products-table-name\"></h4>
<div id=\"slot-products-table-wrapper\" class=\"hidden\">
    ";
        // line 13
        echo (isset($context["slotProductsTable"]) || array_key_exists("slotProductsTable", $context) ? $context["slotProductsTable"] : (function () { throw new RuntimeError('Variable "slotProductsTable" does not exist.', 13, $this->source); })());
        echo "
</div>

";
        // line 16
        $this->loadTemplate("@ConfigurableBundleGui/_partials/confirmation-modal-window.twig", "@ConfigurableBundleGui/Template/tabs/slots-tab.twig", 16)->display(twig_to_array(["modalId" => "slot-delete-confirmation-modal", "modalMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete this slot?")]));
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Template/tabs/slots-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  57 => 13,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"well\">
    {{ 'You can add slots on this page. During slot creation you can assign products from a catalog to this slot one by one, import CSV file or assign several categories.' | trans }}
</div>

<div id=\"slot-table-wrapper\">
    {{ slotTable | raw }}
</div>

<hr/>

<h4 id=\"slot-products-table-name\"></h4>
<div id=\"slot-products-table-wrapper\" class=\"hidden\">
    {{ slotProductsTable | raw }}
</div>

{% include '@ConfigurableBundleGui/_partials/confirmation-modal-window.twig' with {
    modalId: 'slot-delete-confirmation-modal',
    modalMessage: 'Are you sure you want to delete this slot?' | trans
} only %}
", "@ConfigurableBundleGui/Template/tabs/slots-tab.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Template/tabs/slots-tab.twig");
    }
}
