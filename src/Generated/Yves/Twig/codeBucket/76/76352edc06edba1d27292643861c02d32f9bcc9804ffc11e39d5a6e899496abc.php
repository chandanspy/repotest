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

/* @ProductGroupWidget/views/product-detail-color-selector/product-detail-color-selector.twig */
class __TwigTemplate_3228665ef6ea475a607458b51f6338997b55d4c1e7ca433fa00522b6089eed81 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["product-detail-color-selector", "@SprykerShop:ProductGroupWidget"]), "@ProductGroupWidget/views/product-detail-color-selector/product-detail-color-selector.twig", 1);
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
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "items", [], "any", false, false, false, 4)), 1))) {
            // line 5
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-detail-color-selector", "ProductGroupWidget"]), "@ProductGroupWidget/views/product-detail-color-selector/product-detail-color-selector.twig", 5)->display(twig_to_array(["data" => ["items" => twig_get_attribute($this->env, $this->source,             // line 7
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "items", [], "any", false, false, false, 7), "selectionTag" => "a"], "attributes" => ["image-carousel-class-name" => "js-image-gallery"]]));
            // line 14
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@ProductGroupWidget/views/product-detail-color-selector/product-detail-color-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  54 => 7,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('product-detail-color-selector', '@SprykerShop:ProductGroupWidget') %}

{% block body %}
    {% if data.items | length > 1 %}
        {% include molecule('product-detail-color-selector', 'ProductGroupWidget') with {
            data: {
                items: data.items,
                selectionTag: 'a',
            },
            attributes: {
                'image-carousel-class-name': 'js-image-gallery',
            },
        } only %}
    {% endif %}
{% endblock %}
", "@ProductGroupWidget/views/product-detail-color-selector/product-detail-color-selector.twig", "/data/src/Pyz/Yves/ProductGroupWidget/Theme/default/views/product-detail-color-selector/product-detail-color-selector.twig");
    }
}
