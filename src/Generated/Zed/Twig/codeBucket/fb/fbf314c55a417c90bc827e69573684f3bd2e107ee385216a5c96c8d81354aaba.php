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

/* @PriceProductScheduleGui/_partials/price-type-tabs/price-type-tab.twig */
class __TwigTemplate_79220d464bc09e66c790b53e0febbc720ad5d4361079bff91eb262eb09218dcf extends Template
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
        echo "<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"ibox\">
            <div class=\"ibox-content no-borders\">
                ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, (isset($context["tablesByPriceType"]) || array_key_exists("tablesByPriceType", $context) ? $context["tablesByPriceType"] : (function () { throw new RuntimeError('Variable "tablesByPriceType" does not exist.', 5, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), [], "array", false, false, false, 5);
        echo "
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PriceProductScheduleGui/_partials/price-type-tabs/price-type-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-12\">
        <div class=\"ibox\">
            <div class=\"ibox-content no-borders\">
                {{ tablesByPriceType[tab.name] | raw }}
            </div>
        </div>
    </div>
</div>
", "@PriceProductScheduleGui/_partials/price-type-tabs/price-type-tab.twig", "/data/vendor/spryker/price-product-schedule-gui/src/Spryker/Zed/PriceProductScheduleGui/Presentation//_partials/price-type-tabs/price-type-tab.twig");
    }
}
