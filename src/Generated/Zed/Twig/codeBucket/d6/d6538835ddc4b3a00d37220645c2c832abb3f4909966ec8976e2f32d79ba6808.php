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

/* @SalesOrderThresholdGui/_partials/form-row.twig */
class __TwigTemplate_1a4ca5fd3752931885af8b462684f747a6e092f1f5b5cab324e0e076ca4cb8be extends Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SalesOrderThresholdGui/_partials/form-row.twig";
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
        return new Source("{{ form_row(form) }}
", "@SalesOrderThresholdGui/_partials/form-row.twig", "/data/vendor/spryker/sales-order-threshold-gui/src/Spryker/Zed/SalesOrderThresholdGui/Presentation/_partials/form-row.twig");
    }
}
