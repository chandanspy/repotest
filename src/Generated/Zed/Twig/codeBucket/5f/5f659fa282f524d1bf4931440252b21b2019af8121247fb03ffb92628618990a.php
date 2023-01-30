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

/* @CustomerGroup/_partials/general-information.twig */
class __TwigTemplate_090bcb68fc84ef21213fd9bb650d2586d1ece1184e10ff2084efab79b52f0c5f extends Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["customerGroupForm"]) || array_key_exists("customerGroupForm", $context) ? $context["customerGroupForm"] : (function () { throw new RuntimeError('Variable "customerGroupForm" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1), 'row');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["customerGroupForm"]) || array_key_exists("customerGroupForm", $context) ? $context["customerGroupForm"] : (function () { throw new RuntimeError('Variable "customerGroupForm" does not exist.', 2, $this->source); })()), "description", [], "any", false, false, false, 2), 'row');
        echo "

";
    }

    public function getTemplateName()
    {
        return "@CustomerGroup/_partials/general-information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_row(customerGroupForm.name) }}
{{ form_row(customerGroupForm.description) }}

", "@CustomerGroup/_partials/general-information.twig", "/data/vendor/spryker/customer-group/src/Spryker/Zed/CustomerGroup/Presentation/_partials/general-information.twig");
    }
}
