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

/* @ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig */
class __TwigTemplate_8fdca4dddec37a4bbc1b72cb9070a7e65f5a2261c2860e4143c9cc1991c0e113 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["product-item-color-selector", "@SprykerShop:ProductGroupWidget"]), "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["modifiers" => []], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "items", [], "any", false, false, false, 8)), 1))) {
            // line 9
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-item-color-selector", "ProductGroupWidget"]), "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", 9)->display(twig_to_array(["modifiers" => twig_get_attribute($this->env, $this->source,             // line 10
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "modifiers", [], "any", false, false, false, 10), "data" => ["items" => twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "items", [], "any", false, false, false, 12), "parentJsName" => twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "parentJsName", [], "any", false, false, false, 13)]]));
            // line 16
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  58 => 13,  57 => 12,  56 => 10,  54 => 9,  51 => 8,  47 => 7,  43 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('product-item-color-selector', '@SprykerShop:ProductGroupWidget') %}

{% define data = {
    modifiers: [],
} %}

{% block body %}
    {% if data.items | length > 1 %}
        {% include molecule('product-item-color-selector', 'ProductGroupWidget') with {
            modifiers: data.modifiers,
            data: {
                items: data.items,
                parentJsName: data.parentJsName,
            },
        } only %}
    {% endif %}
{% endblock %}
", "@ProductGroupWidget/views/product-item-color-selector/product-item-color-selector.twig", "/data/src/Pyz/Yves/ProductGroupWidget/Theme/default/views/product-item-color-selector/product-item-color-selector.twig");
    }
}
