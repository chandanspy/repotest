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

/* @ProductLabelWidget/views/product-label-group/product-label-group.twig */
class __TwigTemplate_c5aa61c47ea63bb4f4b1299a892d11bf79a5798cbda71db0a730b56e51281d91 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["product-label-group", "@SprykerShop:ProductLabelWidget"]), "@ProductLabelWidget/views/product-label-group/product-label-group.twig", 1);
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
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["label-group", "ProductLabelWidget"]), "@ProductLabelWidget/views/product-label-group/product-label-group.twig", 4)->display(twig_to_array(["modifiers" => [0 => "reduced-spaces"], "data" => ["labels" =>         // line 7
(isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 7, $this->source); })()), "parentJsName" => twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "parentJsName", [], "any", false, false, false, 8)]]));
    }

    public function getTemplateName()
    {
        return "@ProductLabelWidget/views/product-label-group/product-label-group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  51 => 7,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('product-label-group', '@SprykerShop:ProductLabelWidget') %}

{% block body %}
    {% include molecule('label-group', 'ProductLabelWidget') with {
        modifiers: ['reduced-spaces'],
        data: {
            labels: labels,
            parentJsName: data.parentJsName,
        },
    } only %}
{% endblock %}
", "@ProductLabelWidget/views/product-label-group/product-label-group.twig", "/data/src/Pyz/Yves/ProductLabelWidget/Theme/default/views/product-label-group/product-label-group.twig");
    }
}
