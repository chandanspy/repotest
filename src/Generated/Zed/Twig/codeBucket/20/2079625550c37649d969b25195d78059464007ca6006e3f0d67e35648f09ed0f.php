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

/* @ProductSetGui/_partials/tabs/products.twig */
class __TwigTemplate_872798604932cf171cae7cd2218f78b40a04f2448821908936aeb6da70206379 extends Template
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
        echo "<div class=\"tabs-container\">
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-content-products-1\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select products to assign"), "html", null, true);
        echo "</a></li>
        <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-content-products-2\" id=\"assigned-tab-label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products to be assigned"), "html", null, true);
        echo "</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"tab-content-products-1\" class=\"tab-pane active\">
            <div class=\"panel-body\">
                ";
        // line 9
        echo (isset($context["productTable"]) || array_key_exists("productTable", $context) ? $context["productTable"] : (function () { throw new RuntimeError('Variable "productTable" does not exist.', 9, $this->source); })());
        echo "

                <div class=\"prcat-select-all\">
                    <a href=\"#\" class=\"btn btn-primary \">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select All"), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
        <div id=\"tab-content-products-2\" class=\"tab-pane\">
            <div class=\"panel-body\">
                <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected products"), "html", null, true);
        echo "</h3>
                <table class=\"table table-striped table-bordered table-hover gui-table-data\" id=\"selectedProductsTable\" data-paging=\"false\">
                    <thead>
                        <tr>
                            <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        echo "</th>
                            <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Preview"), "html", null, true);
        echo "</th>
                            <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SKU"), "html", null, true);
        echo "</th>
                            <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</th>
                            <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "html", null, true);
        echo "</th>
                            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        echo "</th>
                            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected"), "html", null, true);
        echo "</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

";
        // line 38
        if (array_key_exists("productAbstractSetTable", $context)) {
            // line 39
            echo "    <div class=\"tabs-container\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-content-products-3\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products in this Set"), "html", null, true);
            echo "</a></li>
            <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-content-products-4\" id=\"deassigned-tab-label\">";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products to be deassigned"), "html", null, true);
            echo "</a></li>
        </ul>
        <div class=\"tab-content\">
            <div id=\"tab-content-products-3\" class=\"tab-pane active\">
                <div class=\"panel-body\">
                    ";
            // line 47
            echo (isset($context["productAbstractSetTable"]) || array_key_exists("productAbstractSetTable", $context) ? $context["productAbstractSetTable"] : (function () { throw new RuntimeError('Variable "productAbstractSetTable" does not exist.', 47, $this->source); })());
            echo "

                    <div class=\"prcat-deselect-all\">
                        <a href=\"#\" class=\"btn btn-primary \">";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deselect All"), "html", null, true);
            echo "</a>
                    </div>
                </div>
            </div>
            <div id=\"tab-content-products-4\" class=\"tab-pane\">
                <div class=\"panel-body\">
                    <h3>";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deselected products"), "html", null, true);
            echo "</h3>
                    <table class=\"table table-striped table-bordered table-hover gui-table-data\" id=\"deselectedProductsTable\" data-paging=\"false\">
                        <thead>
                            <tr>
                                <th>";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
            echo "</th>
                                <th>";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Preview"), "html", null, true);
            echo "</th>
                                <th>";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SKU"), "html", null, true);
            echo "</th>
                                <th>";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            echo "</th>
                                <th>";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "html", null, true);
            echo "</th>
                                <th>";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            echo "</th>
                                <th>";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Position"), "html", null, true);
            echo "</th>
                                <th>";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected"), "html", null, true);
            echo "</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 77
        echo "
";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 78, $this->source); })()), "products_form", [], "any", false, false, false, 78), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/_partials/tabs/products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 78,  193 => 77,  180 => 67,  176 => 66,  172 => 65,  168 => 64,  164 => 63,  160 => 62,  156 => 61,  152 => 60,  145 => 56,  136 => 50,  130 => 47,  122 => 42,  118 => 41,  114 => 39,  112 => 38,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  68 => 18,  59 => 12,  53 => 9,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tabs-container\">
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-content-products-1\">{{ 'Select products to assign' | trans }}</a></li>
        <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-content-products-2\" id=\"assigned-tab-label\">{{ 'Products to be assigned' | trans }}</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"tab-content-products-1\" class=\"tab-pane active\">
            <div class=\"panel-body\">
                {{ productTable | raw }}

                <div class=\"prcat-select-all\">
                    <a href=\"#\" class=\"btn btn-primary \">{{ 'Select All' | trans }}</a>
                </div>
            </div>
        </div>
        <div id=\"tab-content-products-2\" class=\"tab-pane\">
            <div class=\"panel-body\">
                <h3>{{ 'Selected products' | trans }}</h3>
                <table class=\"table table-striped table-bordered table-hover gui-table-data\" id=\"selectedProductsTable\" data-paging=\"false\">
                    <thead>
                        <tr>
                            <th>{{ 'ID' | trans}}</th>
                            <th>{{ 'Preview' | trans}}</th>
                            <th>{{ 'SKU' | trans}}</th>
                            <th>{{ 'Name' | trans}}</th>
                            <th>{{ 'Price' | trans}}</th>
                            <th>{{ 'Status' | trans}}</th>
                            <th>{{ 'Selected' | trans}}</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{% if productAbstractSetTable is defined %}
    <div class=\"tabs-container\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab-content-products-3\">{{ 'Products in this Set' | trans }}</a></li>
            <li class=\"\"><a data-toggle=\"tab\" href=\"#tab-content-products-4\" id=\"deassigned-tab-label\">{{ 'Products to be deassigned' | trans }}</a></li>
        </ul>
        <div class=\"tab-content\">
            <div id=\"tab-content-products-3\" class=\"tab-pane active\">
                <div class=\"panel-body\">
                    {{ productAbstractSetTable | raw }}

                    <div class=\"prcat-deselect-all\">
                        <a href=\"#\" class=\"btn btn-primary \">{{ 'Deselect All' | trans }}</a>
                    </div>
                </div>
            </div>
            <div id=\"tab-content-products-4\" class=\"tab-pane\">
                <div class=\"panel-body\">
                    <h3>{{ 'Deselected products' | trans }}</h3>
                    <table class=\"table table-striped table-bordered table-hover gui-table-data\" id=\"deselectedProductsTable\" data-paging=\"false\">
                        <thead>
                            <tr>
                                <th>{{ 'ID' | trans}}</th>
                                <th>{{ 'Preview' | trans}}</th>
                                <th>{{ 'SKU' | trans}}</th>
                                <th>{{ 'Name' | trans}}</th>
                                <th>{{ 'Price' | trans}}</th>
                                <th>{{ 'Status' | trans}}</th>
                                <th>{{ 'Position' | trans}}</th>
                                <th>{{ 'Selected' | trans}}</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endif %}

{{ form_widget(productSetForm.products_form) }}
", "@ProductSetGui/_partials/tabs/products.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//_partials/tabs/products.twig");
    }
}
