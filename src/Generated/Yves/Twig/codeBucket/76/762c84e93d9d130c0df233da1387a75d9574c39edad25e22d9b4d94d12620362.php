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

/* @TabsWidget/views/tabs/tabs.twig */
class __TwigTemplate_52d8d9b78290c08484f80139d3d1b82260c7b16930e0c595b3aad68f040e7a20 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@TabsWidget/views/tabs/tabs.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["tabs" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "tabs", [], "any", false, false, false, 4), "searchString" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "searchString", [], "any", false, false, false, 5), "requestParams" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "requestParams", [], "any", false, false, false, 6)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["search-tabs", "TabsWidget"]), "@TabsWidget/views/tabs/tabs.twig", 10)->display(twig_to_array(["class" => "grid", "data" => ["tabs" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "tabs", [], "any", false, false, false, 13), "searchString" => twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "searchString", [], "any", false, false, false, 14), "requestParams" => twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "requestParams", [], "any", false, false, false, 15)]]));
    }

    public function getTemplateName()
    {
        return "@TabsWidget/views/tabs/tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  57 => 14,  56 => 13,  54 => 10,  50 => 9,  46 => 1,  45 => 6,  44 => 5,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    tabs: _widget.tabs,
    searchString: _widget.searchString,
    requestParams: _widget.requestParams
} %}

{% block body %}
    {% include molecule('search-tabs', 'TabsWidget') with {
        class: 'grid',
        data: {
            tabs: data.tabs,
            searchString: data.searchString,
            requestParams: data.requestParams
        }
    } only %}
{% endblock %}
", "@TabsWidget/views/tabs/tabs.twig", "/data/vendor/spryker-shop/tabs-widget/src/SprykerShop/Yves/TabsWidget/Theme/default/views/tabs/tabs.twig");
    }
}
