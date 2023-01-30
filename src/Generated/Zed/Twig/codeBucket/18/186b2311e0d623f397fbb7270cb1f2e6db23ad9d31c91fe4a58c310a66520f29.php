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

/* @ProductListGui/_partials/_tables/assigned-product-table.twig */
class __TwigTemplate_e11e42ba5972fa5506c3c5bb193a3c49f1a878888dc51d3fab3d2ee3849390ae extends Template
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
        echo (isset($context["assignedProductConcreteTable"]) || array_key_exists("assignedProductConcreteTable", $context) ? $context["assignedProductConcreteTable"] : (function () { throw new RuntimeError('Variable "assignedProductConcreteTable" does not exist.', 1, $this->source); })());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductListGui/_partials/_tables/assigned-product-table.twig";
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
        return new Source("{{ assignedProductConcreteTable | raw }}
", "@ProductListGui/_partials/_tables/assigned-product-table.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//_partials/_tables/assigned-product-table.twig");
    }
}
