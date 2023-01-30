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

/* @ProductDetailPage/components/molecules/product-detail/product-detail.twig */
class __TwigTemplate_f6418af7fa3331726bacb0312ac94fbf5a93664d00b8f5cd360e027e7dc53f84 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'class' => [$this, 'block_class'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ProductDetailPage/components/molecules/product-detail/product-detail.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "product-detail", "tag" => "section"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["description" => "", "attributes" => []], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        $this->displayParentBlock("class", $context, $blocks);
        echo " grid grid--gap grid--justify
";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <div class=\"col col--sm-12 col--lg-6\">
        <h2 class=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "__title title title--h4 title--mobile-toggler-section js-pdp-section__trigger\" data-toggle-target='.js-pdp-section__target-description'>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.attribute.long_description"), "html", null, true);
        echo "</h2>
        <div itemprop=\"description\" class=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "__description js-pdp-section__target-description is-hidden-sm-md\">
            ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21);
        echo "
        </div>
    </div>

    <div class=\"col col--sm-12 col--lg-5\">
        <h2 class=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "__title title title--h4 title--mobile-toggler-section js-pdp-section__trigger\" data-toggle-target='.js-pdp-section__target-details'>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.product.details"), "html", null, true);
        echo "</h2>
        <div class=\"grid ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "__detail-list js-pdp-section__target-details is-hidden-sm-md\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "attributes", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 29
            echo "                ";
            if ($context["name"]) {
                // line 30
                echo "                    <div class=\"col col--sm-6 ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
                echo "__detail-list-item\" itemprop=\"additionalProperty\" itemscope itemtype=\"https://schema.org/PropertyValue\">
                        <div class=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
                echo "__detail-list-key\" itemprop=\"name\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.attribute." . $context["name"])), "html", null, true);
                echo "</div>
                        <div class=\"";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), "html", null, true);
                echo "__detail-list-value\" itemprop=\"value\">";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</div>
                    </div>
                ";
            }
            // line 35
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/product-detail/product-detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  121 => 35,  113 => 32,  107 => 31,  102 => 30,  99 => 29,  95 => 28,  91 => 27,  85 => 26,  77 => 21,  73 => 20,  67 => 19,  64 => 18,  60 => 17,  53 => 14,  49 => 13,  45 => 1,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-detail',
    tag: 'section'
} %}

{% define data = {
    description: '',
    attributes: []
} %}

{% block class %}
    {{parent()}} grid grid--gap grid--justify
{% endblock %}

{% block body %}
    <div class=\"col col--sm-12 col--lg-6\">
        <h2 class=\"{{ config.name }}__title title title--h4 title--mobile-toggler-section js-pdp-section__trigger\" data-toggle-target='.js-pdp-section__target-description'>{{ 'product.attribute.long_description' | trans }}</h2>
        <div itemprop=\"description\" class=\"{{ config.name }}__description js-pdp-section__target-description is-hidden-sm-md\">
            {{ data.description | raw }}
        </div>
    </div>

    <div class=\"col col--sm-12 col--lg-5\">
        <h2 class=\"{{ config.name }}__title title title--h4 title--mobile-toggler-section js-pdp-section__trigger\" data-toggle-target='.js-pdp-section__target-details'>{{ 'page.product.details' | trans }}</h2>
        <div class=\"grid {{ config.name }}__detail-list js-pdp-section__target-details is-hidden-sm-md\">
            {% for name, value in data.attributes %}
                {% if name %}
                    <div class=\"col col--sm-6 {{ config.name }}__detail-list-item\" itemprop=\"additionalProperty\" itemscope itemtype=\"https://schema.org/PropertyValue\">
                        <div class=\"{{ config.name }}__detail-list-key\" itemprop=\"name\">{{ ('product.attribute.' ~ name) | trans }}</div>
                        <div class=\"{{ config.name }}__detail-list-value\" itemprop=\"value\">{{ value }}</div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "@ProductDetailPage/components/molecules/product-detail/product-detail.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/product-detail/product-detail.twig");
    }
}
