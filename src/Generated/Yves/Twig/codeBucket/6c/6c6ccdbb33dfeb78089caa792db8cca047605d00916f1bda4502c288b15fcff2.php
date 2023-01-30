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

/* @@SprykerShop:ProductRelationWidget/views/pdp-similar-products-carousel/pdp-similar-products-carousel.twig */
class __TwigTemplate_efe2f6f5d4b514c841fc35e7c02a29e526536967198d87b825e6b172b5d5a912 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["similar-products", "ProductRelationWidget"]), "@@SprykerShop:ProductRelationWidget/views/pdp-similar-products-carousel/pdp-similar-products-carousel.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["products" => ((twig_get_attribute($this->env, $this->source,         // line 4
($context["_widget"] ?? null), "productCollection", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "productCollection", [], "any", false, false, false, 4), [])) : ([]))], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductRelationWidget/views/pdp-similar-products-carousel/pdp-similar-products-carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,  42 => 4,  41 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('similar-products', 'ProductRelationWidget') %}

{% define data = {
    products: _widget.productCollection | default([])
} %}
", "@@SprykerShop:ProductRelationWidget/views/pdp-similar-products-carousel/pdp-similar-products-carousel.twig", "/data/vendor/spryker-shop/product-relation-widget/src/SprykerShop/Yves/ProductRelationWidget/Theme/default/views/pdp-similar-products-carousel/pdp-similar-products-carousel.twig");
    }
}
