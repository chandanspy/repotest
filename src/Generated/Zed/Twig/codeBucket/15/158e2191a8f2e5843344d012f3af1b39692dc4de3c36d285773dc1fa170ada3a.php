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

/* @PriceProductScheduleGui/_partials/schedule-price-concrete-tab.twig */
class __TwigTemplate_ae6e13e37cc2b3467ada5f5c59bdb7981a6640639b40cc2cd2deb8ad29ffde78 extends Template
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
    <p>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can define a price for the product that will take effect at a date and time in the future. You can define multiple prices on the same period."), "html", null, true);
        echo "
    </p>
    ";
        // line 6
        echo call_user_func_array($this->env->getFunction('editActionButton')->getCallable(), ["/price-product-schedule-gui/import", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import via CSV file")]);
        echo "
    ";
        // line 7
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), [((("/price-product-schedule-gui/create?idProduct=" . (isset($context["idProduct"]) || array_key_exists("idProduct", $context) ? $context["idProduct"] : (function () { throw new RuntimeError('Variable "idProduct" does not exist.', 7, $this->source); })())) . "&idProductAbstract=") . (isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 7, $this->source); })())), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add scheduled price")]);
        echo "
</div>

";
        // line 10
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env,         // line 11
(isset($context["priceTypeTabs"]) || array_key_exists("priceTypeTabs", $context) ? $context["priceTypeTabs"] : (function () { throw new RuntimeError('Variable "priceTypeTabs" does not exist.', 11, $this->source); })()), ["tablesByPriceType" =>         // line 13
(isset($context["tablesByPriceType"]) || array_key_exists("tablesByPriceType", $context) ? $context["tablesByPriceType"] : (function () { throw new RuntimeError('Variable "tablesByPriceType" does not exist.', 13, $this->source); })())]]);
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PriceProductScheduleGui/_partials/schedule-price-concrete-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  62 => 13,  61 => 11,  60 => 10,  54 => 7,  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"well\">
    <h3>{{ 'Scheduled Prices' | trans }}</h3>
    <p>
        {{ 'You can define a price for the product that will take effect at a date and time in the future. You can define multiple prices on the same period.' | trans }}
    </p>
    {{ editActionButton('/price-product-schedule-gui/import', 'Import via CSV file' | trans) }}
    {{ createActionButton('/price-product-schedule-gui/create?idProduct='~ idProduct~'&idProductAbstract='~idProductAbstract, 'Add scheduled price' | trans) }}
</div>

{{ tabs(
    priceTypeTabs,
    {
        'tablesByPriceType': tablesByPriceType
    }
) }}
", "@PriceProductScheduleGui/_partials/schedule-price-concrete-tab.twig", "/data/vendor/spryker/price-product-schedule-gui/src/Spryker/Zed/PriceProductScheduleGui/Presentation//_partials/schedule-price-concrete-tab.twig");
    }
}
