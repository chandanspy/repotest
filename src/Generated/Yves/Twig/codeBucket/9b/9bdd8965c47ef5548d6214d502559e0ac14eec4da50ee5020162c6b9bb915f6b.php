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

/* @ShopUi/components/atoms/checkbox/checkbox.twig */
class __TwigTemplate_44387d333031a1435b4f67fcfb160e1cf445b85fe13c142541c149d6d5ca1b15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'inputClass' => [$this, 'block_inputClass'],
            'icon' => [$this, 'block_icon'],
            'labelContainer' => [$this, 'block_labelContainer'],
            'label' => [$this, 'block_label'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/atoms/checkbox/checkbox.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "checkbox", "tag" => "span"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["label" => "", "isChecked" => false, "inputClass" => ""], $context['data']);        // line 15
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["type" => "checkbox", "required" => false], $context['attributes']);        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "isChecked", [], "any", false, false, false, 20)) {
            // line 21
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 21, $this->source); })()), ["checked" => "checked"]);
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $context["iconName"] = "check";
        // line 26
        echo "
    <label class=\"";
        // line 27
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27) . "__container"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 27, $this->source); })())], 27, $context, $this->getSourceContext());
        echo "\" ";
        echo call_user_func_array($this->env->getFunction('qa')->getCallable(), [[0 => "label"]]);
        echo ">
        <input class=\"";
        // line 28
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28) . "__input"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 28, $this->source); })())], 28, $context, $this->getSourceContext());
        echo " ";
        $this->displayBlock('inputClass', $context, $blocks);
        echo "\" ";
        echo twig_call_macro($macros["component"], "macro_renderAttributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 28, $this->source); })())], 28, $context, $this->getSourceContext());
        echo ">
        <span class=\"";
        // line 29
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29) . "__box"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 29, $this->source); })())], 29, $context, $this->getSourceContext());
        echo "\">
            ";
        // line 30
        $this->displayBlock('icon', $context, $blocks);
        // line 39
        echo "        </span>";
        // line 40
        $this->displayBlock('labelContainer', $context, $blocks);
        // line 45
        echo "</label>
";
    }

    // line 28
    public function block_inputClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "inputClass", [], "any", false, false, false, 28), "html", null, true);
    }

    // line 30
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/atoms/checkbox/checkbox.twig", 31)->display(twig_to_array(["class" => twig_call_macro($macros["component"], "macro_renderClass", [((twig_get_attribute($this->env, $this->source,         // line 32
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32) . "__") . (isset($context["iconName"]) || array_key_exists("iconName", $context) ? $context["iconName"] : (function () { throw new RuntimeError('Variable "iconName" does not exist.', 32, $this->source); })())), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 32, $this->source); })())], 32, $context, $this->getSourceContext()), "modifiers" => [0 => "small"], "data" => ["name" =>         // line 35
(isset($context["iconName"]) || array_key_exists("iconName", $context) ? $context["iconName"] : (function () { throw new RuntimeError('Variable "iconName" does not exist.', 35, $this->source); })())]]));
        // line 38
        echo "            ";
    }

    // line 40
    public function block_labelContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "<span class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41) . "__label"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 41, $this->source); })())], 41, $context, $this->getSourceContext());
        echo " label ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 41, $this->source); })()), "required", [], "any", false, false, false, 41)) {
            echo "label--required";
        }
        echo "\">";
        // line 42
        $this->displayBlock('label', $context, $blocks);
        // line 43
        echo "</span>";
    }

    // line 42
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "label", [], "any", false, false, false, 42);
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/atoms/checkbox/checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 42,  133 => 43,  131 => 42,  123 => 41,  119 => 40,  115 => 38,  113 => 35,  112 => 32,  110 => 31,  106 => 30,  99 => 28,  94 => 45,  92 => 40,  90 => 39,  88 => 30,  84 => 29,  76 => 28,  70 => 27,  67 => 26,  64 => 25,  60 => 24,  56 => 1,  53 => 21,  51 => 20,  50 => 15,  49 => 9,  48 => 4,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'checkbox',
    tag: 'span'
} %}

{% define data = {
    label: '',
    isChecked: false,
    inputClass: '',
} %}

{% define attributes = {
    type: 'checkbox',
    required: false
} %}

{% if data.isChecked %}
    {% set attributes = attributes | merge({ 'checked': 'checked' }) %}
{% endif %}

{% block body %}
    {% set iconName = 'check' %}

    <label class=\"{{ component.renderClass(config.name ~ '__container', modifiers) }}\" {{ qa('label') }}>
        <input class=\"{{ component.renderClass(config.name ~ '__input', modifiers) }} {% block inputClass %} {{- data.inputClass -}} {% endblock %}\" {{ component.renderAttributes(attributes) }}>
        <span class=\"{{ component.renderClass(config.name ~ '__box', modifiers) }}\">
            {% block icon %}
                {% include atom('icon') with {
                    class: component.renderClass(config.name ~ '__' ~ iconName, modifiers),
                    modifiers: ['small'],
                    data: {
                        name: iconName,
                    },
                } only %}
            {% endblock %}
        </span>
        {%- block labelContainer -%}
            <span class=\"{{ component.renderClass(config.name ~ '__label', modifiers) }} label {% if attributes.required %}label--required{% endif %}\">
                {%- block label -%}{{data.label | raw}}{%- endblock -%}
            </span>
        {%- endblock -%}
    </label>
{% endblock %}
", "@ShopUi/components/atoms/checkbox/checkbox.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/atoms/checkbox/checkbox.twig");
    }
}
