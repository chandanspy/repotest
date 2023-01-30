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

/* @ProductListGui/_partials/_tabs/general-information.twig */
class __TwigTemplate_49bcdf5716f23b7d7712c3ed1ce88382ddc26459b839890982abcbf3fb277458 extends Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productListForm"]) || array_key_exists("productListForm", $context) ? $context["productListForm"] : (function () { throw new RuntimeError('Variable "productListForm" does not exist.', 1, $this->source); })()), "idProductList", [], "any", false, false, false, 1), 'row');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productListForm"]) || array_key_exists("productListForm", $context) ? $context["productListForm"] : (function () { throw new RuntimeError('Variable "productListForm" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), 'row');
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productListForm"]) || array_key_exists("productListForm", $context) ? $context["productListForm"] : (function () { throw new RuntimeError('Variable "productListForm" does not exist.', 3, $this->source); })()), "type", [], "any", false, false, false, 3), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductListGui/_partials/_tabs/general-information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_row(productListForm.idProductList) }}
{{ form_row(productListForm.title) }}
{{ form_row(productListForm.type) }}
", "@ProductListGui/_partials/_tabs/general-information.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//_partials/_tabs/general-information.twig");
    }
}
