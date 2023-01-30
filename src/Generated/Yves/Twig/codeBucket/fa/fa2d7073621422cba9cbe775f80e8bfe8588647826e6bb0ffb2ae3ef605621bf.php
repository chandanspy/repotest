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

/* @ProductSetListPage/components/molecules/product-set-card/product-set-card.twig */
class __TwigTemplate_c6142c69611824e987585b0ec336cb0904e3a159d028827e1c115c428ec603dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'image' => [$this, 'block_image'],
            'name' => [$this, 'block_name'],
            'description' => [$this, 'block_description'],
            'actionsContainer' => [$this, 'block_actionsContainer'],
            'actions' => [$this, 'block_actions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ProductSetListPage/components/molecules/product-set-card/product-set-card.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "product-set-card", "tag" => "article"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["name" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "url" =>         // line 11
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 11, $this->source); })()), "imageUrl" =>         // line 12
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 12, $this->source); })()), "description" => ""], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('actionsContainer', $context, $blocks);
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        <div class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18) . "__container"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 18, $this->source); })())], 18, $context, $this->getSourceContext());
        echo "\">
            ";
        // line 19
        $this->displayBlock('image', $context, $blocks);
        // line 24
        echo "
            ";
        // line 25
        $this->displayBlock('name', $context, $blocks);
        // line 28
        echo "
            ";
        // line 29
        $this->displayBlock('description', $context, $blocks);
        // line 34
        echo "        </div>
    ";
    }

    // line 19
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "url", [], "any", false, false, false, 20), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20) . "__img-box"), "html", null, true);
        echo "\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "imageUrl", [], "any", false, false, false, 20), "html", null, true);
        echo ")\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "
                </a>
            ";
    }

    // line 25
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                <strong class=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26) . "__name"), "html", null, true);
        echo " spacing-y spacing-y--big\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</strong>
            ";
    }

    // line 29
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30))) {
            // line 31
            echo "                    <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                ";
        }
        // line 33
        echo "            ";
    }

    // line 37
    public function block_actionsContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "        <div class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38) . "__actions-container")], 38, $context, $this->getSourceContext());
        echo "\">
            ";
        // line 39
        $this->displayBlock('actions', $context, $blocks);
        // line 50
        echo "        </div>
    ";
    }

    // line 39
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                <a class=\"button button--expand\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "url", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
                    ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.view"), "html", null, true);
        echo "
                    ";
        // line 42
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ProductSetListPage/components/molecules/product-set-card/product-set-card.twig", 42)->display(twig_to_array(["modifiers" => [0 => "small"], "data" => ["name" => "angle-double-right"]]));
        // line 48
        echo "                </a>
            ";
    }

    public function getTemplateName()
    {
        return "@ProductSetListPage/components/molecules/product-set-card/product-set-card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 48,  178 => 42,  174 => 41,  169 => 40,  165 => 39,  160 => 50,  158 => 39,  153 => 38,  149 => 37,  145 => 33,  139 => 31,  136 => 30,  132 => 29,  123 => 26,  119 => 25,  112 => 21,  103 => 20,  99 => 19,  94 => 34,  92 => 29,  89 => 28,  87 => 25,  84 => 24,  82 => 19,  77 => 18,  73 => 17,  69 => 37,  66 => 36,  63 => 17,  59 => 16,  55 => 1,  54 => 12,  53 => 11,  52 => 10,  51 => 9,  50 => 4,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'product-set-card',
    tag: 'article'
} %}

{% define data = {
    name: required,
    url: required,
    imageUrl: required,
    description: ''
} %}

{% block body %}
    {% block content %}
        <div class=\"{{ component.renderClass(config.name ~ '__container', modifiers) }}\">
            {% block image %}
                <a href=\"{{data.url}}\" class=\"{{ config.name ~ '__img-box' }}\" style=\"background-image: url({{ data.imageUrl }})\">
                    {{data.name}}
                </a>
            {% endblock %}

            {% block name %}
                <strong class=\"{{ config.name ~ '__name' }} spacing-y spacing-y--big\">{{data.name}}</strong>
            {% endblock %}

            {% block description %}
                {% if data.description is not empty %}
                    <p>{{data.description}}</p>
                {% endif %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block actionsContainer %}
        <div class=\"{{ component.renderClass(config.name ~ '__actions-container') }}\">
            {% block actions %}
                <a class=\"button button--expand\" href=\"{{data.url}}\">
                    {{'product.view' | trans}}
                    {% include atom('icon') with {
                        modifiers: ['small'],
                        data: {
                            name: 'angle-double-right'
                        }
                    } only %}
                </a>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@ProductSetListPage/components/molecules/product-set-card/product-set-card.twig", "/data/src/Pyz/Yves/ProductSetListPage/Theme/default/components/molecules/product-set-card/product-set-card.twig");
    }
}
