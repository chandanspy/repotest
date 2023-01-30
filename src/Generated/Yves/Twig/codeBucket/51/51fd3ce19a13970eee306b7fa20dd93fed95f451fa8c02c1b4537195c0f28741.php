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

/* @ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig */
class __TwigTemplate_3c3121ba9505accf5a9c9ecd68ffed2c0e87b9b25770f2ee116a15be96dc3d1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'selectionInner' => [$this, 'block_selectionInner'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-item-color-selector", "@SprykerShop:ProductGroupWidget"]), "@ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_selectionInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["dataAttributesList"] = twig_array_merge((isset($context["dataAttributesList"]) || array_key_exists("dataAttributesList", $context) ? $context["dataAttributesList"] : (function () { throw new RuntimeError('Variable "dataAttributesList" does not exist.', 4, $this->source); })()), ["data-product-review-count" => ((twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "rating", [], "any", false, false, false, 5)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "rating", [], "any", false, false, false, 5), "totalReview", [], "any", false, false, false, 5)) : (""))]);
        // line 7
        echo "
    ";
        // line 8
        $this->displayParentBlock("selectionInner", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  53 => 7,  51 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('product-item-color-selector', '@SprykerShop:ProductGroupWidget') %}

{% block selectionInner %}
    {% set dataAttributesList = dataAttributesList | merge({
        'data-product-review-count': item.rating ? item.rating.totalReview,
    }) %}

    {{ parent() }}
{% endblock %}
", "@ProductGroupWidget/components/molecules/product-item-color-selector/product-item-color-selector.twig", "/data/src/Pyz/Yves/ProductGroupWidget/Theme/default/components/molecules/product-item-color-selector/product-item-color-selector.twig");
    }
}
