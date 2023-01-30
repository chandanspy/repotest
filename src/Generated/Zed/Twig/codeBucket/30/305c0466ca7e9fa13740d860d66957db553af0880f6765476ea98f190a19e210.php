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

/* @ProductListGui/_partials/_tables/deassignment-product-table.twig */
class __TwigTemplate_6c49167b6f425f6e568c0f5ca57a6d2d409ee78c78b4e82cf212253bd9dc523d extends Template
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
        echo "<table class=\"table table-striped table-bordered table-hover gui-table-data\" id=\"productsToBeDeassigned\" data-paging=\"false\">
    <thead>
    <tr>
        <th id=\"ID\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        echo "</th>
        <th id=\"SKU\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SKU"), "html", null, true);
        echo "</th>
        <th id=\"Name\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</th>
        <th id=\"Selected\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "@ProductListGui/_partials/_tables/deassignment-product-table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-striped table-bordered table-hover gui-table-data\" id=\"productsToBeDeassigned\" data-paging=\"false\">
    <thead>
    <tr>
        <th id=\"ID\">{{ 'ID' | trans }}</th>
        <th id=\"SKU\">{{ 'SKU' | trans }}</th>
        <th id=\"Name\">{{ 'Name' | trans }}</th>
        <th id=\"Selected\">{{ 'Selected' | trans }}</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
", "@ProductListGui/_partials/_tables/deassignment-product-table.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//_partials/_tables/deassignment-product-table.twig");
    }
}
