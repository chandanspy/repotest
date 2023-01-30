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

/* @ProductCategoryWidget/views/product-detail-page-schema-org-category/product-detail-page-schema-org-category.twig */
class __TwigTemplate_f96859e12cc6daed8af257a616b4d8251060db530eb0df0d8ca6f4c1ef6dfef8 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ProductCategoryWidget/views/product-detail-page-schema-org-category/product-detail-page-schema-org-category.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["categories" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "categories", [], "any", false, false, false, 6), "product" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 7, $this->source); })()), "product", [], "any", false, false, false, 7)], $context['data']);        // line 10
        $context["categories"] = [];
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "categories", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            $context["categories"] = twig_array_merge((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })()), [0 => ["id" => twig_get_attribute($this->env, $this->source,             // line 13
$context["category"], "categoryId", [], "any", false, false, false, 13), "name" => twig_get_attribute($this->env, $this->source,             // line 14
$context["category"], "name", [], "any", false, false, false, 14)]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <meta itemprop=\"category\" content=\"";
        echo twig_escape_filter($this->env, json_encode((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })())), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "@ProductCategoryWidget/views/product-detail-page-schema-org-category/product-detail-page-schema-org-category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  63 => 18,  59 => 3,  53 => 14,  52 => 13,  51 => 12,  47 => 11,  45 => 10,  44 => 7,  43 => 6,  42 => 5,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var category \\Generated\\Shared\\Transfer\\ProductCategoryStorage #}

{% extends template('widget') %}

{% define data = {
    categories: _widget.categories,
    product: _widget.product,
} %}

{% set categories = [] %}
{% for category in data.categories %}
    {% set categories = categories|merge([{
        \"id\": category.categoryId,
        \"name\": category.name,
    }]) %}
{% endfor %}

{% block body %}
    <meta itemprop=\"category\" content=\"{{ categories|json_encode() }}\">
{% endblock %}
", "@ProductCategoryWidget/views/product-detail-page-schema-org-category/product-detail-page-schema-org-category.twig", "/data/vendor/spryker-shop/product-category-widget/src/SprykerShop/Yves/ProductCategoryWidget/Theme/default/views/product-detail-page-schema-org-category/product-detail-page-schema-org-category.twig");
    }
}
