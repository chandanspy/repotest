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

/* @ProductListGui/_partials/_tabs/used-by.twig */
class __TwigTemplate_30671f2c40bc89734c31b873fc37de20ef5db3f604d51b478fe53edae648e46c extends Template
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
        echo "<table id=\"used-by-table\" class=\"table table-striped table-bordered table-hover gui-table-data\">
    <thead>
        <tr>
            <td>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
        echo "</td>
            <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</td>
            <td>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
        echo "</td>
        </tr>
    </thead>
    <tbody>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["productListUsedByTable"]) || array_key_exists("productListUsedByTable", $context) ? $context["productListUsedByTable"] : (function () { throw new RuntimeError('Variable "productListUsedByTable" does not exist.', 10, $this->source); })()), "rows", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["productListUsedByTableRow"]) {
            // line 11
            echo "            <tr>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["productListUsedByTableRow"], "title", [], "any", false, false, false, 12)), "html", null, true);
            echo "</td>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productListUsedByTableRow"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</td>
                <td class=\"actions\">
                    ";
            // line 15
            $this->loadTemplate("@ProductListGui/_partials/button-collection.twig", "@ProductListGui/_partials/_tabs/used-by.twig", 15)->display(twig_to_array(["buttonCollection" => twig_get_attribute($this->env, $this->source,             // line 16
$context["productListUsedByTableRow"], "actionButtons", [], "any", false, false, false, 16)]));
            // line 18
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productListUsedByTableRow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </tbody>
</table>

";
        // line 24
        $this->loadTemplate("@ProductListGui/_partials/confirmation-modal-window.twig", "@ProductListGui/_partials/_tabs/used-by.twig", 24)->display(twig_to_array(["modalMessage" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please ensure you saved information")]));
    }

    public function getTemplateName()
    {
        return "@ProductListGui/_partials/_tabs/used-by.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 24,  84 => 21,  76 => 18,  74 => 16,  73 => 15,  68 => 13,  64 => 12,  61 => 11,  57 => 10,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table id=\"used-by-table\" class=\"table table-striped table-bordered table-hover gui-table-data\">
    <thead>
        <tr>
            <td>{{ 'Title' | trans }}</td>
            <td>{{ 'Name' | trans }}</td>
            <td>{{ 'Actions' | trans }}</td>
        </tr>
    </thead>
    <tbody>
        {% for productListUsedByTableRow in productListUsedByTable.rows %}
            <tr>
                <td>{{ productListUsedByTableRow.title | trans}}</td>
                <td>{{ productListUsedByTableRow.name }}</td>
                <td class=\"actions\">
                    {% include '@ProductListGui/_partials/button-collection.twig' with {
                        buttonCollection: productListUsedByTableRow.actionButtons
                    } only %}
                </td>
            </tr>
        {% endfor %}
    </tbody>
</table>

{% include '@ProductListGui/_partials/confirmation-modal-window.twig' with {
    modalMessage: 'Please ensure you saved information' | trans
} only %}
", "@ProductListGui/_partials/_tabs/used-by.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//_partials/_tabs/used-by.twig");
    }
}
