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

/* @@SprykerShop:ShopUi/components/molecules/product-item-list/product-item-list.twig */
class __TwigTemplate_d9d92eb40ba109a26f380c3345dcc027854216e6f8e5af098cf48cbe6c1689d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'imageContainer' => [$this, 'block_imageContainer'],
            'priceContainer' => [$this, 'block_priceContainer'],
            'price' => [$this, 'block_price'],
            'content' => [$this, 'block_content'],
            'colors' => [$this, 'block_colors'],
            'actionsContainer' => [$this, 'block_actionsContainer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-item"]), "@@SprykerShop:ShopUi/components/molecules/product-item-list/product-item-list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "product-item-list"], $context['config']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_imageContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context["extraClass"] = "";
        // line 9
        echo "    ";
        $context["modifiers"] = [0 => "small"];
        // line 10
        echo "
    <div class=\"col col--sm-3 col--md-2 col--middle\">
        ";
        // line 12
        $this->displayParentBlock("imageContainer", $context, $blocks);
        echo "
    </div>
";
    }

    // line 16
    public function block_priceContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <div>
        ";
        // line 18
        $this->displayBlock('price', $context, $blocks);
        // line 21
        echo "    </div>
";
    }

    // line 18
    public function block_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            ";
        $this->displayParentBlock("price", $context, $blocks);
        echo "
        ";
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $this->displayBlock('colors', $context, $blocks);
        // line 26
        echo "
    <div class=\"col col--sm-6 col--md-7 col--xl-8 col--middle\">
        ";
        // line 28
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    </div>
";
    }

    // line 25
    public function block_colors($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 32
    public function block_actionsContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    <div class=\"col col--sm-3 col--xl-2 col--bottom\">
        ";
        // line 34
        $this->displayParentBlock("actionsContainer", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/product-item-list/product-item-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 34,  126 => 33,  122 => 32,  116 => 25,  109 => 28,  105 => 26,  102 => 25,  98 => 24,  91 => 19,  87 => 18,  82 => 21,  80 => 18,  77 => 17,  73 => 16,  66 => 12,  62 => 10,  59 => 9,  56 => 8,  52 => 7,  48 => 1,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('product-item') %}

{% define config = {
    name: 'product-item-list',
} %}

{% block imageContainer %}
    {% set extraClass = '' %}
    {% set modifiers = ['small'] %}

    <div class=\"col col--sm-3 col--md-2 col--middle\">
        {{ parent() }}
    </div>
{% endblock %}

{% block priceContainer %}
    <div>
        {% block price %}
            {{ parent() }}
        {% endblock %}
    </div>
{% endblock %}

{% block content %}
    {% block colors %}{% endblock %}

    <div class=\"col col--sm-6 col--md-7 col--xl-8 col--middle\">
        {{ parent() }}
    </div>
{% endblock %}

{% block actionsContainer %}
    <div class=\"col col--sm-3 col--xl-2 col--bottom\">
        {{ parent() }}
    </div>
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/product-item-list/product-item-list.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/product-item-list/product-item-list.twig");
    }
}
