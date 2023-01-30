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

/* @PriceProductScheduleGui/_partials/schedule-price-tab.twig */
class __TwigTemplate_def9f3d4032a5ef306f5997bdc74d4b362c5fcad958870576f0ef1c2d6cf98b0 extends Template
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
    <h3>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Scheduled Prices"), "html", null, true);
        echo "</h3>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can define a price for the product that will take effect at a date and time in the future. You can define multiple prices on the same period."), "html", null, true);
        echo "</p>
    ";
        // line 4
        echo call_user_func_array($this->env->getFunction('editActionButton')->getCallable(), ["/price-product-schedule-gui/import", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import via CSV file")]);
        echo "
    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), [("/price-product-schedule-gui/create?idProductAbstract=" . (isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 5, $this->source); })())), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add scheduled price")]);
        echo "
</div>

";
        // line 8
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env,         // line 9
(isset($context["priceTypeTabs"]) || array_key_exists("priceTypeTabs", $context) ? $context["priceTypeTabs"] : (function () { throw new RuntimeError('Variable "priceTypeTabs" does not exist.', 9, $this->source); })()), ["tablesByPriceType" =>         // line 11
(isset($context["tablesByPriceType"]) || array_key_exists("tablesByPriceType", $context) ? $context["tablesByPriceType"] : (function () { throw new RuntimeError('Variable "tablesByPriceType" does not exist.', 11, $this->source); })())]]);
        // line 13
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PriceProductScheduleGui/_partials/schedule-price-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  60 => 11,  59 => 9,  58 => 8,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"well\">
    <h3>{{ 'Scheduled Prices' | trans }}</h3>
    <p>{{ 'You can define a price for the product that will take effect at a date and time in the future. You can define multiple prices on the same period.' | trans }}</p>
    {{ editActionButton('/price-product-schedule-gui/import', 'Import via CSV file' | trans) }}
    {{ createActionButton('/price-product-schedule-gui/create?idProductAbstract='~ idProductAbstract, 'Add scheduled price' | trans) }}
</div>

{{ tabs(
    priceTypeTabs,
    {
        'tablesByPriceType': tablesByPriceType
    }
) }}
", "@PriceProductScheduleGui/_partials/schedule-price-tab.twig", "/data/vendor/spryker/price-product-schedule-gui/src/Spryker/Zed/PriceProductScheduleGui/Presentation//_partials/schedule-price-tab.twig");
    }
}
