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

/* @@SprykerShop:ProductLabelWidget/views/product-label-group/product-label-group.twig */
class __TwigTemplate_6daa31a469259cbe23c5c7bad0aea79a31418ace8bfba42055c7a8a137e62122 extends Template
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
        // line 3
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@@SprykerShop:ProductLabelWidget/views/product-label-group/product-label-group.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["dictionary" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "productLabelDictionaryItemTransfers", [], "any", false, false, false, 6), "parentJsName" => ""], $context['data']);        // line 10
        $context["labels"] = ((array_key_exists("labels", $context)) ? (_twig_default_filter((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 10, $this->source); })()), [])) : ([]));
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "dictionary", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            $context["labels"] = twig_array_merge((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 13, $this->source); })()), [0 => ["text" => ((twig_get_attribute($this->env, $this->source,             // line 14
$context["item"], "name", [], "any", true, true, false, 14)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 14), twig_get_attribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 14))) : (twig_get_attribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 14))), "type" => _twig_default_filter(twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 15
$context["item"], "frontEndReference", [], "any", false, false, false, 15)), [" " => "-"]))]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["label-group", "ProductLabelWidget"]), "@@SprykerShop:ProductLabelWidget/views/product-label-group/product-label-group.twig", 20)->display(twig_to_array(["data" => ["labels" =>         // line 22
(isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 22, $this->source); })()), "parentJsName" => twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "parentJsName", [], "any", false, false, false, 23)]]));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductLabelWidget/views/product-label-group/product-label-group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  68 => 22,  66 => 20,  62 => 19,  58 => 3,  52 => 15,  51 => 14,  50 => 13,  46 => 12,  44 => 10,  43 => 6,  42 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var item \\Generated\\Shared\\Transfer\\ProductLabelDictionaryItemTransfer #}

{% extends template('widget') %}

{% define data = {
    dictionary: _widget.productLabelDictionaryItemTransfers,
    parentJsName: '',
} %}

{% set labels = labels | default([]) %}

{% for item in data.dictionary %}
    {% set labels = labels | merge([{
        text: item.name | default(item.key),
        type: (item.frontEndReference | lower | replace({' ': '-'})) | default,
    }]) %}
{% endfor %}

{% block body %}
    {% include molecule('label-group', 'ProductLabelWidget') with {
        data: {
            labels: labels,
            parentJsName: data.parentJsName,
        },
    } only %}
{% endblock %}
", "@@SprykerShop:ProductLabelWidget/views/product-label-group/product-label-group.twig", "/data/vendor/spryker-shop/product-label-widget/src/SprykerShop/Yves/ProductLabelWidget/Theme/default/views/product-label-group/product-label-group.twig");
    }
}
