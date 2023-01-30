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

/* @ProductOption/_partial/filters.twig */
class __TwigTemplate_5b47301a4039024180f1a1bf33b055e0fd4512618ec0d313da01450c04f7cea0 extends Template
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
        echo "<div class=\"ibox-content\">
    <form method=\"GET\" data-component=\"product-option-filters\">
        ";
        // line 3
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@MerchantGui/_partials/merchant_switcher.twig", "@ProductOption/_partial/filters.twig", 3);
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
        return "@ProductOption/_partial/filters.twig";
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
        return new Source("<div class=\"ibox-content\">
    <form method=\"GET\" data-component=\"product-option-filters\">
        {% include '@MerchantGui/_partials/merchant_switcher.twig' ignore missing %}
    </form>
</div>
", "@ProductOption/_partial/filters.twig", "/data/vendor/spryker/product-option/src/Spryker/Zed/ProductOption/Presentation/_partial/filters.twig");
    }
}
