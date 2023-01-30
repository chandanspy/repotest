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

/* @ShopUi/components/molecules/slick-carousel/slick-carousel.twig */
class __TwigTemplate_80fadae5f665d5716f19382f02785cd00a0ad924906963141a0f4dc9f6a59b02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'slides' => [$this, 'block_slides'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/slick-carousel/slick-carousel.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "slick-carousel", "tag" => "slick-carousel"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["slides" => []], $context['data']);        // line 12
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["slider-config" => "{}"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "__container ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "jsName", [], "any", false, false, false, 17), "html", null, true);
        echo "__container \">
        ";
        // line 18
        $this->displayBlock('slides', $context, $blocks);
        // line 23
        echo "    </div>
";
    }

    // line 18
    public function block_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "slides", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 20
            echo "                ";
            echo twig_escape_filter($this->env, $context["slide"], "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/slick-carousel/slick-carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  77 => 20,  72 => 19,  68 => 18,  63 => 23,  61 => 18,  54 => 17,  50 => 16,  46 => 1,  45 => 12,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'slick-carousel',
    tag: 'slick-carousel'
} %}

{% define data = {
    slides: []
} %}

{% define attributes = {
    'slider-config': '{}'
} %}

{% block body %}
    <div class=\"{{ config.name }}__container {{ config.jsName }}__container \">
        {% block slides %}
            {% for slide in data.slides %}
                {{ slide }}
            {% endfor %}
        {% endblock %}
    </div>
{% endblock %}

", "@ShopUi/components/molecules/slick-carousel/slick-carousel.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/slick-carousel/slick-carousel.twig");
    }
}
