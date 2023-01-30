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

/* @ProductManagement/_partials/filters.twig */
class __TwigTemplate_a2ed748c49ea64c06c1f4c6252887f0ffe138fcc2e02720df17b69db8381b9a9 extends Template
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
        echo "<div class=\"ibox-content ibox-content--alt\">
    <form method=\"GET\" data-component=\"store-switch\">
        ";
        // line 3
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@MerchantGui/_partials/merchant_switcher.twig", "@ProductManagement/_partials/filters.twig", 3);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 4
        echo "    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/_partials/filters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ibox-content ibox-content--alt\">
    <form method=\"GET\" data-component=\"store-switch\">
        {% include '@MerchantGui/_partials/merchant_switcher.twig' ignore missing %}
    </form>
</div>
", "@ProductManagement/_partials/filters.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//_partials/filters.twig");
    }
}
