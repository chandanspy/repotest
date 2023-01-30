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

/* @ProductImageWidget/components/molecules/image-gallery/image-gallery.twig */
class __TwigTemplate_4c57debb551f9d1c6523a512536e10a9bb61d27297fd295978d769021350ba5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extraClass' => [$this, 'block_extraClass'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ProductImageWidget/components/molecules/image-gallery/image-gallery.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "image-gallery", "tag" => "image-gallery"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["idProductAbstract" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "images" => []], $context['data']);        // line 13
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["active-class" => (twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14) . "__item--active"), "config-thumbnail-slider" => "{
        \"slidesToShow\": 4,
        \"slidesToScroll\": 1,
        \"infinite\": false,
        \"vertical\": true,
        \"dots\": false,
        \"arrows\": true,
        \"prevArrow\": \"<div class='thumb-prev'><svg class='icon'><use href='#:caret-down'></use></svg></div>\",
        \"nextArrow\": \"<div class='thumb-next'><svg class='icon'><use href='#:caret-down'></use></svg></div>\",
        \"responsive\": [
            {
                \"breakpoint\": 768,
                \"settings\": {
                    \"dots\": true,
                    \"slidesToShow\": 1,
                    \"arrows\": false,
                    \"vertical\": false
                }
            }]
    }"], $context['attributes']);        // line 37
        $context["imagesQuantity"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 37, $this->source); })()), "images", [], "any", false, false, false, 37));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_extraClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 40, $this->source); })()), "jsName", [], "any", false, false, false, 40), "html", null, true);
        echo "
";
    }

    // line 43
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    ";
        if ((1 === twig_compare((isset($context["imagesQuantity"]) || array_key_exists("imagesQuantity", $context) ? $context["imagesQuantity"] : (function () { throw new RuntimeError('Variable "imagesQuantity" does not exist.', 44, $this->source); })()), 1))) {
            // line 45
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "__thumbnail ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), "jsName", [], "any", false, false, false, 45), "html", null, true);
            echo "__thumbnails\">
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), "images", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 47
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
                echo "__thumbnail-item\">
                    ";
                // line 48
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["image"], "externalUrlLarge", [], "any", false, false, false, 48))) {
                    // line 49
                    echo "                        <img class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
                    echo "__thumbnail-img\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "externalUrlLarge", [], "any", false, false, false, 49), "html", null, true);
                    echo "\" alt=\"\">
                    ";
                }
                // line 51
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        </div>
    ";
        }
        // line 55
        echo "
    <div class=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), "html", null, true);
        echo "__container\">
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), "images", [], "any", false, false, false, 57));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 58
            echo "            ";
            $context["leftIndentItemClass"] = (((1 === twig_compare((isset($context["imagesQuantity"]) || array_key_exists("imagesQuantity", $context) ? $context["imagesQuantity"] : (function () { throw new RuntimeError('Variable "imagesQuantity" does not exist.', 58, $this->source); })()), 1))) ? ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58) . "__item--left-indent")) : (""));
            // line 59
            echo "            ";
            $context["activeItemClass"] = ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 59)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 59, $this->source); })()), "active-class", [], "array", false, false, false, 59)) : (""));
            // line 60
            echo "
            <div class=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61), "html", null, true);
            echo "__item ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 61, $this->source); })()), "jsName", [], "any", false, false, false, 61), "html", null, true);
            echo "__item ";
            echo twig_escape_filter($this->env, (isset($context["leftIndentItemClass"]) || array_key_exists("leftIndentItemClass", $context) ? $context["leftIndentItemClass"] : (function () { throw new RuntimeError('Variable "leftIndentItemClass" does not exist.', 61, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["activeItemClass"]) || array_key_exists("activeItemClass", $context) ? $context["activeItemClass"] : (function () { throw new RuntimeError('Variable "activeItemClass" does not exist.', 61, $this->source); })()), "html", null, true);
            echo "\">
                ";
            // line 62
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["image"], "externalUrlLarge", [], "any", false, false, false, 62))) {
                // line 63
                echo "                    <img class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), "html", null, true);
                echo "__image\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "externalUrlLarge", [], "any", false, false, false, 63), "html", null, true);
                echo "\" alt=\"\">
                ";
            }
            // line 65
            echo "            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@ProductImageWidget/components/molecules/image-gallery/image-gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 67,  181 => 65,  173 => 63,  171 => 62,  161 => 61,  158 => 60,  155 => 59,  152 => 58,  135 => 57,  131 => 56,  128 => 55,  124 => 53,  117 => 51,  109 => 49,  107 => 48,  102 => 47,  98 => 46,  91 => 45,  88 => 44,  84 => 43,  77 => 40,  73 => 39,  69 => 1,  67 => 37,  47 => 14,  46 => 13,  45 => 9,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'image-gallery',
    tag: 'image-gallery',
} %}

{% define data = {
    idProductAbstract: required,
    images: [],
} %}

{% define attributes = {
    'active-class': config.name ~ '__item--active',
    'config-thumbnail-slider': '{
        \"slidesToShow\": 4,
        \"slidesToScroll\": 1,
        \"infinite\": false,
        \"vertical\": true,
        \"dots\": false,
        \"arrows\": true,
        \"prevArrow\": \"<div class=\\'thumb-prev\\'><svg class=\\'icon\\'><use href=\\'#:caret-down\\'></use></svg></div>\",
        \"nextArrow\": \"<div class=\\'thumb-next\\'><svg class=\\'icon\\'><use href=\\'#:caret-down\\'></use></svg></div>\",
        \"responsive\": [
            {
                \"breakpoint\": 768,
                \"settings\": {
                    \"dots\": true,
                    \"slidesToShow\": 1,
                    \"arrows\": false,
                    \"vertical\": false
                }
            }]
    }',
} %}

{% set imagesQuantity = data.images | length %}

{% block extraClass %}
    {{ config.jsName }}
{% endblock %}

{% block body %}
    {% if imagesQuantity > 1 %}
        <div class=\"{{ config.name }}__thumbnail {{ config.jsName }}__thumbnails\">
            {% for image in data.images %}
                <div class=\"{{ config.name }}__thumbnail-item\">
                    {% if image.externalUrlLarge is not empty %}
                        <img class=\"{{ config.name }}__thumbnail-img\" src=\"{{ image.externalUrlLarge }}\" alt=\"\">
                    {% endif %}
                </div>
            {% endfor %}
        </div>
    {% endif %}

    <div class=\"{{ config.name }}__container\">
        {% for image in data.images %}
            {% set leftIndentItemClass = imagesQuantity > 1 ? config.name ~ '__item--left-indent' %}
            {% set activeItemClass = loop.first ? attributes['active-class'] %}

            <div class=\"{{ config.name }}__item {{ config.jsName }}__item {{ leftIndentItemClass }} {{ activeItemClass }}\">
                {% if image.externalUrlLarge is not empty %}
                    <img class=\"{{ config.name }}__image\" src=\"{{ image.externalUrlLarge }}\" alt=\"\">
                {% endif %}
            </div>
        {% endfor %}
    </div>
{% endblock %}
", "@ProductImageWidget/components/molecules/image-gallery/image-gallery.twig", "/data/src/Pyz/Yves/ProductImageWidget/Theme/default/components/molecules/image-gallery/image-gallery.twig");
    }
}
