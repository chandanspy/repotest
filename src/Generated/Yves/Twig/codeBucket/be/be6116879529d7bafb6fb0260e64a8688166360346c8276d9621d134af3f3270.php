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

/* @ProductRelationWidget/views/pdp-similar-products-carousel/pdp-similar-products-carousel.twig */
class __TwigTemplate_5285dfa4f0daf82f6a22b3ce8beadd5111a1e56d61a7a507a8313ada0de4537b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["pdp-similar-products-carousel", "@SprykerShop:ProductRelationWidget"]), "@ProductRelationWidget/views/pdp-similar-products-carousel/pdp-similar-products-carousel.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "products", [], "any", false, false, false, 4))) {
            // line 5
            echo "        <h2 class=\"title title--product-slider\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.relation.similar-products"), "html", null, true);
            echo "</h2>
        ";
            // line 6
            $this->displayParentBlock("body", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@ProductRelationWidget/views/pdp-similar-products-carousel/pdp-similar-products-carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('pdp-similar-products-carousel', '@SprykerShop:ProductRelationWidget') %}

{% block body %}
    {% if data.products is not empty %}
        <h2 class=\"title title--product-slider\">{{ 'product.relation.similar-products' | trans }}</h2>
        {{ parent() }}
    {% endif %}
{% endblock %}
", "@ProductRelationWidget/views/pdp-similar-products-carousel/pdp-similar-products-carousel.twig", "/data/src/Pyz/Yves/ProductRelationWidget/Theme/default/views/pdp-similar-products-carousel/pdp-similar-products-carousel.twig");
    }
}
