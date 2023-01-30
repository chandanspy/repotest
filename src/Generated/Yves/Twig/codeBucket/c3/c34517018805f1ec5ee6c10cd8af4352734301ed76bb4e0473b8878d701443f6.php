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

/* @ShopUi/components/molecules/flash-message/flash-message.twig */
class __TwigTemplate_f8df39a0df7dccff9c64314ba7414733c191e15ff47ed8a62b456eeb5ed7d0fc extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/flash-message/flash-message.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "flash-message", "tag" => "flash-message"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["action" => "", "title" => "", "text" => "", "icon" => null], $context['data']);        // line 15
        $context["modifiers"] = twig_array_merge([0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "action", [], "any", false, false, false, 15)], ((array_key_exists("modifiers", $context)) ? (_twig_default_filter((isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 15, $this->source); })()), [])) : ([])));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "__message container grid\">

        <div class=\"col ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "__content\">
            ";
        // line 21
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21))) {
            // line 22
            echo "                <h6>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22)), "html", null, true);
            echo "</h6>
            ";
        }
        // line 24
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "__text\">
                ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "text", [], "any", false, false, false, 25)), "html", null, true);
        echo "
            </div>
            <span class=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "__static-link\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("message.submit_link"), "html", null, true);
        echo "</span>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/flash-message/flash-message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  77 => 25,  72 => 24,  66 => 22,  64 => 21,  60 => 20,  54 => 18,  50 => 17,  46 => 1,  44 => 15,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'flash-message',
    tag: 'flash-message',
} %}

{% define data = {
    action: '',
    title: '',
    text: '',
    icon: null,
} %}

{% set modifiers = [data.action] | merge(modifiers | default([])) %}

{% block body %}
    <div class=\"{{config.name}}__message container grid\">

        <div class=\"col {{config.name}}__content\">
            {% if data.title is not empty %}
                <h6>{{data.title | trans}}</h6>
            {% endif %}
            <div class=\"{{config.name}}__text\">
                {{data.text | trans}}
            </div>
            <span class=\"{{config.name}}__static-link\">{{ 'message.submit_link' | trans }}</span>
        </div>

    </div>
{% endblock %}
", "@ShopUi/components/molecules/flash-message/flash-message.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/flash-message/flash-message.twig");
    }
}
