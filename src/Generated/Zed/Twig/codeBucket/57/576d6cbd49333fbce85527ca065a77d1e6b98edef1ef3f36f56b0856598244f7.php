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

/* @ProductListGui/_partials/_tables/available-product-table.twig */
class __TwigTemplate_0a799975a9dc52e2ee7375b3d063f057bf2378d766426c240b0a59d6eb4d2ba3 extends Template
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
        echo (isset($context["availableProductConcreteTable"]) || array_key_exists("availableProductConcreteTable", $context) ? $context["availableProductConcreteTable"] : (function () { throw new RuntimeError('Variable "availableProductConcreteTable" does not exist.', 1, $this->source); })());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductListGui/_partials/_tables/available-product-table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ availableProductConcreteTable | raw }}
", "@ProductListGui/_partials/_tables/available-product-table.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//_partials/_tables/available-product-table.twig");
    }
}
