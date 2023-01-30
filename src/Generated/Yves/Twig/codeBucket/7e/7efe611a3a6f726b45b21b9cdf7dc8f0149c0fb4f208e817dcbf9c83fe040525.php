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

/* @NewsletterWidget/components/molecules/subscription-info/subscription-info.twig */
class __TwigTemplate_d7fd6db317062bda782d510a4944d9e1f2bd8dbd97c8e77ea9267ca0a2a90925 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@NewsletterWidget/components/molecules/subscription-info/subscription-info.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "subscription-info"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["title" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "text" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "togglerClass" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })())], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <h5 class=\"title title--subscription ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "togglerClass", [], "any", false, false, false, 14), "html", null, true);
        echo "__trigger\" data-toggle-target=\".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "togglerClass", [], "any", false, false, false, 14), "html", null, true);
        echo "__target\">
        ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "
        <span class=\"icon icon--toggler-cross icon--toggler-cross-thin toggler-accordion__icon is-hidden-md-xxl\"></span>
    </h5>
    <p class=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "__text ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "togglerClass", [], "any", false, false, false, 18), "html", null, true);
        echo "__target is-hidden-sm-only\">";
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "text", [], "any", false, false, false, 18);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "@NewsletterWidget/components/molecules/subscription-info/subscription-info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  62 => 15,  55 => 14,  51 => 13,  47 => 1,  46 => 10,  45 => 9,  44 => 8,  43 => 7,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'subscription-info'
} %}

{% define data = {
    title: required,
    text: required,
    togglerClass: required,
} %}

{% block body %}
    <h5 class=\"title title--subscription {{ data.togglerClass }}__trigger\" data-toggle-target=\".{{ data.togglerClass }}__target\">
        {{ data.title }}
        <span class=\"icon icon--toggler-cross icon--toggler-cross-thin toggler-accordion__icon is-hidden-md-xxl\"></span>
    </h5>
    <p class=\"{{ config.name }}__text {{ data.togglerClass }}__target is-hidden-sm-only\">{{ data.text | raw }}</p>
{% endblock %}
", "@NewsletterWidget/components/molecules/subscription-info/subscription-info.twig", "/data/src/Pyz/Yves/NewsletterWidget/Theme/default/components/molecules/subscription-info/subscription-info.twig");
    }
}
