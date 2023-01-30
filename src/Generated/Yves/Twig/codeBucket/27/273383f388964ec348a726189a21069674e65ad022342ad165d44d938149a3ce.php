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

/* @@SprykerShop:ProductGroupWidget/views/product-detail-color-selector/product-detail-color-selector.twig */
class __TwigTemplate_4c7b4e36431dd3cf4f43f2cb94232fd2d4f665168957229effac78e61d5b9e06 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@@SprykerShop:ProductGroupWidget/views/product-detail-color-selector/product-detail-color-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["items" => ((twig_get_attribute($this->env, $this->source,         // line 4
($context["_widget"] ?? null), "productGroupItems", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "productGroupItems", [], "any", false, false, false, 4), [])) : ([]))], $context['data']);        // line 1
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
            echo "        <hr>
        ";
            // line 10
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-detail-color-selector", "ProductGroupWidget"]), "@@SprykerShop:ProductGroupWidget/views/product-detail-color-selector/product-detail-color-selector.twig", 10)->display(twig_to_array(["data" => ["items" => twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "items", [], "any", false, false, false, 12), "selectionTag" => "a"]]));
            // line 16
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductGroupWidget/views/product-detail-color-selector/product-detail-color-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  59 => 12,  58 => 10,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    items: _widget.productGroupItems | default([]),
} %}

{% block body %}
    {% if data.items | length > 1 %}
        <hr>
        {% include molecule('product-detail-color-selector', 'ProductGroupWidget') with {
            data: {
                items: data.items,
                selectionTag: 'a',
            },
        } only %}
    {% endif %}
{% endblock %}
", "@@SprykerShop:ProductGroupWidget/views/product-detail-color-selector/product-detail-color-selector.twig", "/data/vendor/spryker-shop/product-group-widget/src/SprykerShop/Yves/ProductGroupWidget/Theme/default/views/product-detail-color-selector/product-detail-color-selector.twig");
    }
}
