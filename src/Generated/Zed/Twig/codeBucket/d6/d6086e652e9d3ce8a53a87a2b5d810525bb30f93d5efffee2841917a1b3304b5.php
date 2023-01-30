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

/* @ProductListGui/Edit/index.twig */
class __TwigTemplate_4511365d74f28cc0416bce9560f4048c2366ea08f316d71b11bda4c3520cd5f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'action' => [$this, 'block_action'],
            'footer_js' => [$this, 'block_footer_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@ProductListGui/Create/index.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["widget_title"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Product List") . ": ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["aggregateForm"]) || array_key_exists("aggregateForm", $context) ? $context["aggregateForm"] : (function () { throw new RuntimeError('Variable "aggregateForm" does not exist.', 3, $this->source); })()), "productList", [], "any", false, false, false, 3), "idProductList", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3));
        // line 1
        $this->parent = $this->loadTemplate("@ProductListGui/Create/index.twig", "@ProductListGui/Edit/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("action", $context, $blocks);
        echo "
    ";
        // line 7
        if (array_key_exists("idProductList", $context)) {
            // line 8
            echo "        ";
            echo call_user_func_array($this->env->getFunction('viewActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-list-gui/export", ["id-product-list" => (isset($context["idProductList"]) || array_key_exists("idProductList", $context) ? $context["idProductList"] : (function () { throw new RuntimeError('Variable "idProductList" does not exist.', 8, $this->source); })())]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export")]);
            echo "
        ";
            // line 9
            echo call_user_func_array($this->env->getFunction('removeActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-list-gui/delete", ["id-product-list" => (isset($context["idProductList"]) || array_key_exists("idProductList", $context) ? $context["idProductList"] : (function () { throw new RuntimeError('Variable "idProductList" does not exist.', 9, $this->source); })())]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove List")]);
            echo "
    ";
        }
    }

    // line 13
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"/assets/js/spryker-zed-product-list-used-by-tab.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductListGui/Edit/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  73 => 13,  66 => 9,  61 => 8,  59 => 7,  54 => 6,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@ProductListGui/Create/index.twig' %}

{% set widget_title = 'Edit Product List' | trans ~ ': ' ~ aggregateForm.productList.idProductList.vars.value %}

{% block action %}
    {{ parent() }}
    {% if idProductList is defined %}
        {{ viewActionButton(url('/product-list-gui/export', {'id-product-list': idProductList}), 'Export' | trans) }}
        {{ removeActionButton(url('/product-list-gui/delete', {'id-product-list': idProductList}), 'Remove List' | trans) }}
    {% endif %}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"/assets/js/spryker-zed-product-list-used-by-tab.js\"></script>
{% endblock %}
", "@ProductListGui/Edit/index.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//Edit/index.twig");
    }
}
