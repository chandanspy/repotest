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

/* @PriceProductMerchantRelationshipGui/ProductManagement/price_dimension.twig */
class __TwigTemplate_454c0c336a3a115088006125b4f4ac76c728fb10ddd5c3870f91a1e027092aca extends Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'widget', ["id" => "price-dimension-merchant-relationship"]);
        echo "

<script src=\"";
        // line 3
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-price-product-merchant-relationship-gui-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PriceProductMerchantRelationshipGui/ProductManagement/price_dimension.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_widget(form, {'id':'price-dimension-merchant-relationship'}) }}

<script src=\"{{ assetsPath('js/spryker-zed-price-product-merchant-relationship-gui-main.js') }}\"></script>
", "@PriceProductMerchantRelationshipGui/ProductManagement/price_dimension.twig", "/data/vendor/spryker/price-product-merchant-relationship-gui/src/Spryker/Zed/PriceProductMerchantRelationshipGui/Presentation//ProductManagement/price_dimension.twig");
    }
}
