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

/* @@SprykerShop:ShopUi/components/molecules/banner/banner.twig */
class __TwigTemplate_83509b394ace539a00ec591e39d482550be95ba91f4aeda0cc22f8bb18d7a989 extends Template
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
            'title' => [$this, 'block_title'],
            'subtitle' => [$this, 'block_subtitle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:ShopUi/components/molecules/banner/banner.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "banner"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["imageUrl" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "clickUrl" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "title" => "", "subtitle" => "", "altText" => ""], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "clickUrl", [], "any", false, false, false, 16), "html", null, true);
        echo "\">
        ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "    </a>
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            <div class=\"box box--stretch\">
                ";
        // line 19
        $this->displayBlock('image', $context, $blocks);
        // line 22
        echo "
                ";
        // line 23
        $this->displayBlock('title', $context, $blocks);
        // line 28
        echo "
                ";
        // line 29
        $this->displayBlock('subtitle', $context, $blocks);
        // line 34
        echo "            </div>
        ";
    }

    // line 19
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "imageUrl", [], "any", false, false, false, 20), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "altText", [], "any", false, false, false, 20));
        echo "\">
                ";
    }

    // line 23
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24)) {
            // line 25
            echo "                        <h5>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25));
            echo "</h5>
                    ";
        }
        // line 27
        echo "                ";
    }

    // line 29
    public function block_subtitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "subtitle", [], "any", false, false, false, 30)) {
            // line 31
            echo "                        <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "subtitle", [], "any", false, false, false, 31));
            echo "</p>
                    ";
        }
        // line 33
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/banner/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  131 => 31,  128 => 30,  124 => 29,  120 => 27,  114 => 25,  111 => 24,  107 => 23,  98 => 20,  94 => 19,  89 => 34,  87 => 29,  84 => 28,  82 => 23,  79 => 22,  77 => 19,  74 => 18,  70 => 17,  65 => 36,  63 => 17,  58 => 16,  54 => 15,  50 => 1,  49 => 9,  48 => 8,  47 => 7,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'banner',
} %}

{% define data = {
    imageUrl: required,
    clickUrl: required,
    title: '',
    subtitle: '',
    altText: '',
} %}

{% block body %}
    <a href=\"{{ data.clickUrl }}\">
        {% block content %}
            <div class=\"box box--stretch\">
                {% block image %}
                    <img src=\"{{ data.imageUrl }}\" alt=\"{{ data.altText | escape }}\">
                {% endblock %}

                {% block title %}
                    {% if data.title %}
                        <h5>{{ data.title | escape }}</h5>
                    {% endif %}
                {% endblock %}

                {% block subtitle %}
                    {% if data.subtitle %}
                        <p>{{ data.subtitle | escape }}</p>
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    </a>
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/banner/banner.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/banner/banner.twig");
    }
}
