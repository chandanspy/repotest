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

/* @ProductListGui/_partials/_tabs/product-list-category-relation.twig */
class __TwigTemplate_748f93e31657d13a0e14ee5283379cd41e4f85e3ad103097aa965c44ae8e6f1b extends Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productListCategoryRelationForm"]) || array_key_exists("productListCategoryRelationForm", $context) ? $context["productListCategoryRelationForm"] : (function () { throw new RuntimeError('Variable "productListCategoryRelationForm" does not exist.', 1, $this->source); })()), "categoryIds", [], "any", false, false, false, 1), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductListGui/_partials/_tabs/product-list-category-relation.twig";
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
        return new Source("{{ form_row(productListCategoryRelationForm.categoryIds) }}
", "@ProductListGui/_partials/_tabs/product-list-category-relation.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//_partials/_tabs/product-list-category-relation.twig");
    }
}
