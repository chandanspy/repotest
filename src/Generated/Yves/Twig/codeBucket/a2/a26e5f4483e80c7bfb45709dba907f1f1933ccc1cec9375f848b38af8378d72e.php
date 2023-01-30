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

/* @@SprykerShop:ProductLabelWidget/components/molecules/label-group/label-group.twig */
class __TwigTemplate_4d385885b25709df0ffec2a175364a29c092240bffc42c7498ad93f491cf1599 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:ProductLabelWidget/components/molecules/label-group/label-group.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "label-group", "tag" => "label-group"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["labels" => [], "parentJsName" => ""], $context['data']);        // line 13
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["class-to-toggle" => "is-hidden", "product-item-class-name" => twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "parentJsName", [], "any", false, false, false, 15)], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $context["leftColumnComponents"] = [];
        // line 20
        echo "    ";
        $context["rightColumnComponents"] = [];
        // line 21
        echo "    ";
        $context["labelTagType"] = "template:tag";
        // line 22
        echo "
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "labels", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 24
            echo "        ";
            $context["componentName"] = "flag";
            // line 25
            echo "        ";
            $context["componentModifiers"] = [0 => twig_get_attribute($this->env, $this->source, $context["label"], "type", [], "any", false, false, false, 25)];
            // line 26
            echo "        ";
            $context["labelJsClass"] = (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "jsName", [], "any", false, false, false, 26) . "__label-flag");
            // line 27
            echo "        ";
            $context["labelTextJsClass"] = (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "jsName", [], "any", false, false, false, 27) . "__label-flag-text");
            // line 28
            echo "
        ";
            // line 29
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["label"], "type", [], "any", false, false, false, 29), (isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 29, $this->source); })())))) {
                // line 30
                echo "            ";
                $context["componentName"] = "tag";
                // line 31
                echo "            ";
                $context["componentModifiers"] = [];
                // line 32
                echo "            ";
                $context["labelJsClass"] = (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "jsName", [], "any", false, false, false, 32) . "__label-tag");
                // line 33
                echo "            ";
                $context["labelTextJsClass"] = (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 33, $this->source); })()), "jsName", [], "any", false, false, false, 33) . "__label-tag-text");
                // line 34
                echo "        ";
            }
            // line 35
            echo "
        ";
            // line 36
            $context["component"] = twig_include($this->env, $context, [0 => call_user_func_array($this->env->getFunction('molecule')->getCallable(), [            // line 38
(isset($context["componentName"]) || array_key_exists("componentName", $context) ? $context["componentName"] : (function () { throw new RuntimeError('Variable "componentName" does not exist.', 38, $this->source); })()), "ProductLabelWidget"])], ["class" =>             // line 41
(isset($context["labelJsClass"]) || array_key_exists("labelJsClass", $context) ? $context["labelJsClass"] : (function () { throw new RuntimeError('Variable "labelJsClass" does not exist.', 41, $this->source); })()), "modifiers" =>             // line 42
(isset($context["componentModifiers"]) || array_key_exists("componentModifiers", $context) ? $context["componentModifiers"] : (function () { throw new RuntimeError('Variable "componentModifiers" does not exist.', 42, $this->source); })()), "data" => ["text" => twig_get_attribute($this->env, $this->source,             // line 44
$context["label"], "text", [], "any", false, false, false, 44), "textClass" =>             // line 45
(isset($context["labelTextJsClass"]) || array_key_exists("labelTextJsClass", $context) ? $context["labelTextJsClass"] : (function () { throw new RuntimeError('Variable "labelTextJsClass" does not exist.', 45, $this->source); })())], "attributes" => ["data-label-tag-type" => (((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 48
$context["label"], "type", [], "any", false, false, false, 48), (isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 48, $this->source); })())))) ? ((isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 48, $this->source); })())) : (""))]], false);
            // line 53
            echo "
        ";
            // line 54
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["label"], "type", [], "any", false, false, false, 54), (isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 54, $this->source); })())))) {
                // line 55
                echo "            ";
                $context["leftColumnComponents"] = twig_array_merge((isset($context["leftColumnComponents"]) || array_key_exists("leftColumnComponents", $context) ? $context["leftColumnComponents"] : (function () { throw new RuntimeError('Variable "leftColumnComponents" does not exist.', 55, $this->source); })()), [0 => (isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 55, $this->source); })())]);
                // line 56
                echo "        ";
            } else {
                // line 57
                echo "            ";
                $context["rightColumnComponents"] = twig_array_merge((isset($context["rightColumnComponents"]) || array_key_exists("rightColumnComponents", $context) ? $context["rightColumnComponents"] : (function () { throw new RuntimeError('Variable "rightColumnComponents" does not exist.', 57, $this->source); })()), [0 => (isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 57, $this->source); })())]);
                // line 58
                echo "        ";
            }
            // line 59
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
    <div class=\"grid grid--justify\">
        ";
        // line 62
        if ((isset($context["leftColumnComponents"]) || array_key_exists("leftColumnComponents", $context) ? $context["leftColumnComponents"] : (function () { throw new RuntimeError('Variable "leftColumnComponents" does not exist.', 62, $this->source); })())) {
            // line 63
            echo "            <div class=\"col col--expand\">";
            echo twig_join_filter((isset($context["leftColumnComponents"]) || array_key_exists("leftColumnComponents", $context) ? $context["leftColumnComponents"] : (function () { throw new RuntimeError('Variable "leftColumnComponents" does not exist.', 63, $this->source); })()));
            echo "</div>
        ";
        } else {
            // line 65
            echo "            <div class=\"col col--expand\">
                ";
            // line 66
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["tag", "ProductLabelWidget"]), "@@SprykerShop:ProductLabelWidget/components/molecules/label-group/label-group.twig", 66)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,             // line 67
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 67, $this->source); })()), "jsName", [], "any", false, false, false, 67) . "__label-tag is-hidden"), "data" => ["textClass" => (twig_get_attribute($this->env, $this->source,             // line 69
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 69, $this->source); })()), "jsName", [], "any", false, false, false, 69) . "__label-tag-text")], "attributes" => ["data-label-tag-type" =>             // line 72
(isset($context["labelTagType"]) || array_key_exists("labelTagType", $context) ? $context["labelTagType"] : (function () { throw new RuntimeError('Variable "labelTagType" does not exist.', 72, $this->source); })())]]));
            // line 75
            echo "            </div>
        ";
        }
        // line 77
        echo "
        ";
        // line 78
        if ((isset($context["rightColumnComponents"]) || array_key_exists("rightColumnComponents", $context) ? $context["rightColumnComponents"] : (function () { throw new RuntimeError('Variable "rightColumnComponents" does not exist.', 78, $this->source); })())) {
            // line 79
            echo "            <div class=\"col col--expand text-right\">";
            echo twig_join_filter((isset($context["rightColumnComponents"]) || array_key_exists("rightColumnComponents", $context) ? $context["rightColumnComponents"] : (function () { throw new RuntimeError('Variable "rightColumnComponents" does not exist.', 79, $this->source); })()));
            echo "</div>
        ";
        } else {
            // line 81
            echo "            <div class=\"col col--expand text-right\">
                ";
            // line 82
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["flag", "ProductLabelWidget"]), "@@SprykerShop:ProductLabelWidget/components/molecules/label-group/label-group.twig", 82)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,             // line 83
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 83, $this->source); })()), "jsName", [], "any", false, false, false, 83) . "__label-flag is-hidden"), "data" => ["textClass" => (twig_get_attribute($this->env, $this->source,             // line 85
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 85, $this->source); })()), "jsName", [], "any", false, false, false, 85) . "__label-flag-text")]]));
            // line 88
            echo "            </div>
        ";
        }
        // line 90
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductLabelWidget/components/molecules/label-group/label-group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 90,  178 => 88,  176 => 85,  175 => 83,  174 => 82,  171 => 81,  165 => 79,  163 => 78,  160 => 77,  156 => 75,  154 => 72,  153 => 69,  152 => 67,  151 => 66,  148 => 65,  142 => 63,  140 => 62,  136 => 60,  130 => 59,  127 => 58,  124 => 57,  121 => 56,  118 => 55,  116 => 54,  113 => 53,  111 => 48,  110 => 45,  109 => 44,  108 => 42,  107 => 41,  106 => 38,  105 => 36,  102 => 35,  99 => 34,  96 => 33,  93 => 32,  90 => 31,  87 => 30,  85 => 29,  82 => 28,  79 => 27,  76 => 26,  73 => 25,  70 => 24,  66 => 23,  63 => 22,  60 => 21,  57 => 20,  54 => 19,  50 => 18,  46 => 1,  45 => 15,  44 => 13,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'label-group',
    tag: 'label-group',
} %}

{% define data = {
    labels: [],
    parentJsName: '',
}  %}

{% define attributes = {
    'class-to-toggle': 'is-hidden',
    'product-item-class-name': data.parentJsName,
} %}

{% block body %}
    {% set leftColumnComponents = [] %}
    {% set rightColumnComponents = [] %}
    {% set labelTagType = 'template:tag' %}

    {% for label in data.labels %}
        {% set componentName = 'flag' %}
        {% set componentModifiers = [label.type] %}
        {% set labelJsClass = config.jsName ~ '__label-flag' %}
        {% set labelTextJsClass = config.jsName ~ '__label-flag-text' %}

        {% if label.type == labelTagType %}
            {% set componentName = 'tag' %}
            {% set componentModifiers = [] %}
            {% set labelJsClass = config.jsName ~ '__label-tag' %}
            {% set labelTextJsClass = config.jsName ~ '__label-tag-text' %}
        {% endif %}

        {% set component = include(
            [
                molecule(componentName, 'ProductLabelWidget')
            ],
            {
                class: labelJsClass,
                modifiers: componentModifiers,
                data: {
                    text: label.text,
                    textClass: labelTextJsClass,
                },
                attributes: {
                    'data-label-tag-type': label.type == labelTagType ? labelTagType,
                },
            },
            with_context = false
        ) %}

        {% if label.type == labelTagType %}
            {% set leftColumnComponents = leftColumnComponents | merge([component]) %}
        {% else %}
            {% set rightColumnComponents = rightColumnComponents | merge([component]) %}
        {% endif %}
    {% endfor %}

    <div class=\"grid grid--justify\">
        {% if leftColumnComponents %}
            <div class=\"col col--expand\">{{ leftColumnComponents | join | raw }}</div>
        {% else %}
            <div class=\"col col--expand\">
                {% include molecule('tag', 'ProductLabelWidget') with {
                    class: config.jsName ~ '__label-tag is-hidden',
                    data: {
                        textClass: config.jsName ~ '__label-tag-text',
                    },
                    attributes: {
                        'data-label-tag-type': labelTagType,
                    },
                } only %}
            </div>
        {% endif %}

        {% if rightColumnComponents %}
            <div class=\"col col--expand text-right\">{{ rightColumnComponents | join | raw }}</div>
        {% else %}
            <div class=\"col col--expand text-right\">
                {% include molecule('flag', 'ProductLabelWidget') with {
                    class: config.jsName ~ '__label-flag is-hidden',
                    data: {
                        textClass: config.jsName ~ '__label-flag-text',
                    },
                } only %}
            </div>
        {% endif %}
    </div>
{% endblock %}
", "@@SprykerShop:ProductLabelWidget/components/molecules/label-group/label-group.twig", "/data/vendor/spryker-shop/product-label-widget/src/SprykerShop/Yves/ProductLabelWidget/Theme/default/components/molecules/label-group/label-group.twig");
    }
}
