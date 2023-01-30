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

/* @ProductReviewWidget/views/catalog-rating-filter/catalog-rating-filter.twig */
class __TwigTemplate_3b6c2c4acd346c9facd0f8f76370640a03269e1333ffc514907dd11dacefe9aa extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ProductReviewWidget/views/catalog-rating-filter/catalog-rating-filter.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["value" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "filterValue", [], "any", false, false, false, 4), "maxValue" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "maximumRating", [], "any", false, false, false, 5), "parameterName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "filter", [], "any", false, false, false, 6), "config", [], "any", false, false, false, 6), "parameterName", [], "any", false, false, false, 6)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["rating-selector", "ProductReviewWidget"]), "@ProductReviewWidget/views/catalog-rating-filter/catalog-rating-filter.twig", 10)->display(twig_to_array(["class" => "spacing-top spacing-right", "data" => ["steps" => 4, "value" => twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "value", [], "any", false, false, false, 14), "maxValue" => (twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "maxValue", [], "any", false, false, false, 15) - 1), "inputName" => (twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "parameterName", [], "any", false, false, false, 16) . "[min]")], "attributes" => ["disable-if-empty-value" => true]]));
        // line 22
        echo "    <span class=\"filter-rating__text\">
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.rating_up"), "html", null, true);
        echo "
    </span>
";
    }

    public function getTemplateName()
    {
        return "@ProductReviewWidget/views/catalog-rating-filter/catalog-rating-filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  60 => 22,  58 => 16,  57 => 15,  56 => 14,  54 => 10,  50 => 9,  46 => 1,  45 => 6,  44 => 5,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    value: _widget.filterValue,
    maxValue: _widget.maximumRating,
    parameterName: _widget.filter.config.parameterName
} %}

{% block body %}
    {% include molecule('rating-selector', 'ProductReviewWidget') with {
        class: 'spacing-top spacing-right',
        data: {
            steps: 4,
            value: data.value,
            maxValue: data.maxValue - 1,
            inputName: data.parameterName ~ '[min]'
        },
        attributes: {
            'disable-if-empty-value': true
        }
    } only %}
    <span class=\"filter-rating__text\">
        {{'catalog.filter.rating_up' | trans}}
    </span>
{% endblock %}
", "@ProductReviewWidget/views/catalog-rating-filter/catalog-rating-filter.twig", "/data/src/Pyz/Yves/ProductReviewWidget/Theme/default/views/catalog-rating-filter/catalog-rating-filter.twig");
    }
}
