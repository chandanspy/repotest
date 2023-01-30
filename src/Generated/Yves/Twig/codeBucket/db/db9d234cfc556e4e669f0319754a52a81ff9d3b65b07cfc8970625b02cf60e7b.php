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

/* @ProductAlternativeWidget/views/product-alternative-list/product-alternative-list.twig */
class __TwigTemplate_2da15700e4f1438fa6265d8754ff693107fd5fcffd575a0f7a0723a247cfda79 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ProductAlternativeWidget/views/product-alternative-list/product-alternative-list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["products" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "products", [], "any", false, false, false, 4)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "products", [], "any", false, false, false, 8))) {
            // line 9
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-alternative-slider", "ProductAlternativeWidget"]), "@ProductAlternativeWidget/views/product-alternative-list/product-alternative-list.twig", 9)->display(twig_to_array(["data" => ["products" => twig_get_attribute($this->env, $this->source,             // line 11
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "products", [], "any", false, false, false, 11)]]));
            // line 14
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@ProductAlternativeWidget/views/product-alternative-list/product-alternative-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  57 => 11,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    products: _widget.products
} %}

{% block body %}
    {% if data.products is not empty %}
        {% include molecule('product-alternative-slider', 'ProductAlternativeWidget') with {
            data: {
                products: data.products
            }
        } only %}
    {% endif %}
{% endblock %}
", "@ProductAlternativeWidget/views/product-alternative-list/product-alternative-list.twig", "/data/src/Pyz/Yves/ProductAlternativeWidget/Theme/default/views/product-alternative-list/product-alternative-list.twig");
    }
}
