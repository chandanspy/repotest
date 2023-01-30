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

/* @ProductOption/_partial/tab-products.twig */
class __TwigTemplate_759b68e6f8e41f0a79154173c488020cd3825aebcbe9826d0809bf015f55347b extends Template
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
        echo "<div class=\"row \">
    <div class=\"col-md-8 btn-group select-all-btn\" id=\"product-selectors\">
        <button class=\"btn active\" type=\"button\" id=\"products-to-assign\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All products"), "html", null, true);
        echo "</button>
        ";
        // line 4
        if (array_key_exists("productOptionsTable", $context)) {
            // line 5
            echo "            <button class=\"btn\" type=\"button\" id=\"assigned\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assigned products"), "html", null, true);
            echo "</button>
        ";
        }
        // line 7
        echo "        <button class=\"btn\" type=\"button\" id=\"products-to-be-assigned\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products to be assigned"), "html", null, true);
        echo "</button>
        ";
        // line 8
        if (array_key_exists("productOptionsTable", $context)) {
            // line 9
            echo "            <button class=\"btn\" type=\"button\" id=\"to-be-deassigned\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products to be deassigned"), "html", null, true);
            echo "</button>
        ";
        }
        // line 11
        echo "    </div>

    <div class=\"col-md-4 text-right\" id=\"select-all-btn\">
        <button class=\"btn btn-outline btn-primary\" id=\"select-all\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all on the page"), "html", null, true);
        echo "</button>
        <button class=\"btn btn-outline btn-primary\" id=\"deselect-all\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deselect all on the page"), "html", null, true);
        echo "</button>
    </div>
</div>

<br /> <br />

<div id=\"products-assignment\">
    <div data-products=\"products-to-assign\">
        ";
        // line 23
        echo (isset($context["productsTable"]) || array_key_exists("productsTable", $context) ? $context["productsTable"] : (function () { throw new RuntimeError('Variable "productsTable" does not exist.', 23, $this->source); })());
        echo "
    </div>

    ";
        // line 26
        if (array_key_exists("productOptionsTable", $context)) {
            // line 27
            echo "    <div data-products=\"assigned\" style=\"display:none;\">
        ";
            // line 28
            echo (isset($context["productOptionsTable"]) || array_key_exists("productOptionsTable", $context) ? $context["productOptionsTable"] : (function () { throw new RuntimeError('Variable "productOptionsTable" does not exist.', 28, $this->source); })());
            echo "
    </div>
    ";
        }
        // line 31
        echo "
    <div data-products=\"products-to-be-assigned\" style=\"display:none;\">
        <table class=\"table table-striped table-bordered table-hover gui-table-data\" id=\"selectedProductsTable\" data-paging=\"false\">
            <thead>
                <tr>
                    <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        echo "</th>
                    <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SKU"), "html", null, true);
        echo "</th>
                    <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</th>
                    <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div data-products=\"to-be-deassigned\" style=\"display:none;\">
        <table class=\"table table-striped table-bordered table-hover gui-table-data\" id=\"deselectedProductsTable\" data-paging=\"false\">
            <thead>
                <tr>
                    <th>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        echo "</th>
                    <th>";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SKU"), "html", null, true);
        echo "</th>
                    <th>";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</th>
                    <th>";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@ProductOption/_partial/tab-products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 54,  145 => 53,  141 => 52,  137 => 51,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  103 => 31,  97 => 28,  94 => 27,  92 => 26,  86 => 23,  75 => 15,  71 => 14,  66 => 11,  60 => 9,  58 => 8,  53 => 7,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row \">
    <div class=\"col-md-8 btn-group select-all-btn\" id=\"product-selectors\">
        <button class=\"btn active\" type=\"button\" id=\"products-to-assign\">{{ 'All products' | trans }}</button>
        {% if productOptionsTable is defined %}
            <button class=\"btn\" type=\"button\" id=\"assigned\">{{ 'Assigned products' | trans }}</button>
        {% endif %}
        <button class=\"btn\" type=\"button\" id=\"products-to-be-assigned\">{{ 'Products to be assigned' | trans }}</button>
        {% if productOptionsTable is defined %}
            <button class=\"btn\" type=\"button\" id=\"to-be-deassigned\">{{ 'Products to be deassigned' | trans }}</button>
        {% endif %}
    </div>

    <div class=\"col-md-4 text-right\" id=\"select-all-btn\">
        <button class=\"btn btn-outline btn-primary\" id=\"select-all\">{{ 'Select all on the page' | trans }}</button>
        <button class=\"btn btn-outline btn-primary\" id=\"deselect-all\">{{ 'Deselect all on the page' | trans }}</button>
    </div>
</div>

<br /> <br />

<div id=\"products-assignment\">
    <div data-products=\"products-to-assign\">
        {{ productsTable | raw }}
    </div>

    {% if productOptionsTable is defined %}
    <div data-products=\"assigned\" style=\"display:none;\">
        {{ productOptionsTable | raw }}
    </div>
    {% endif %}

    <div data-products=\"products-to-be-assigned\" style=\"display:none;\">
        <table class=\"table table-striped table-bordered table-hover gui-table-data\" id=\"selectedProductsTable\" data-paging=\"false\">
            <thead>
                <tr>
                    <th>{{ 'ID' | trans }}</th>
                    <th>{{ 'SKU' | trans }}</th>
                    <th>{{ 'Name' | trans }}</th>
                    <th>{{ 'Selected' | trans }}</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div data-products=\"to-be-deassigned\" style=\"display:none;\">
        <table class=\"table table-striped table-bordered table-hover gui-table-data\" id=\"deselectedProductsTable\" data-paging=\"false\">
            <thead>
                <tr>
                    <th>{{ 'ID' | trans }}</th>
                    <th>{{ 'SKU' | trans }}</th>
                    <th>{{ 'Name' | trans }}</th>
                    <th>{{ 'Selected' | trans }}</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

", "@ProductOption/_partial/tab-products.twig", "/data/vendor/spryker/product-option/src/Spryker/Zed/ProductOption/Presentation//_partial/tab-products.twig");
    }
}
