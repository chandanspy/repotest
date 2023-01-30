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

/* @ProductDetailPage/components/molecules/variant/variant.twig */
class __TwigTemplate_cedb835673e75f6c6eb05cf848c1e372b6d9554374a245520d2262ce81582d4f extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ProductDetailPage/components/molecules/variant/variant.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "variant", "tag" => "div"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["name" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "formName" =>         // line 11
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 11, $this->source); })()), "values" =>         // line 12
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 12, $this->source); })()), "selectedValue" => null, "label" => "", "isAvailable" => true, "selectModifiers" => [0 => "margin-bottom"], "selectTheme" => "default", "selectPlaceholder" => "product.attribute._none", "autoInitSelect" => false], $context['data']);        // line 22
        $context["selectModifiers"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "selectModifiers", [], "any", false, false, false, 22), [0 => "full-width"]);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "jsName", [], "any", false, false, false, 25), "html", null, true);
        echo "__title ";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25) . "__title"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 25, $this->source); })())], 25, $context, $this->getSourceContext());
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "label", [], "any", false, false, false, 25), "html", null, true);
        echo "</div>
    ";
        // line 26
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "selectedValue", [], "any", false, false, false, 26))) {
            // line 27
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "isAvailable", [], "any", false, false, false, 27)) {
                // line 28
                echo "            ";
                $this->loadTemplate("@ProductDetailPage/components/molecules/variant/variant.twig", "@ProductDetailPage/components/molecules/variant/variant.twig", 28, "999892028")->display(twig_to_array(["modifiers" =>                 // line 29
(isset($context["selectModifiers"]) || array_key_exists("selectModifiers", $context) ? $context["selectModifiers"] : (function () { throw new RuntimeError('Variable "selectModifiers" does not exist.', 29, $this->source); })()), "class" => "name", "attributes" => ["name" => twig_get_attribute($this->env, $this->source,                 // line 32
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "formName", [], "any", false, false, false, 32), "config-width" => "100%", "config-theme" => twig_get_attribute($this->env, $this->source,                 // line 34
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "selectTheme", [], "any", false, false, false, 34), "auto-init" => twig_get_attribute($this->env, $this->source,                 // line 35
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "autoInitSelect", [], "any", false, false, false, 35)], "embed" => ["values" => twig_get_attribute($this->env, $this->source,                 // line 38
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "values", [], "any", false, false, false, 38), "selectPlaceholder" => twig_get_attribute($this->env, $this->source,                 // line 39
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "selectPlaceholder", [], "any", false, false, false, 39), "jsName" => twig_get_attribute($this->env, $this->source,                 // line 40
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 40, $this->source); })()), "jsName", [], "any", false, false, false, 40), "formName" => twig_get_attribute($this->env, $this->source,                 // line 41
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "formName", [], "any", false, false, false, 41)]]));
                // line 55
                echo "
            ";
                // line 56
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form-handler"]), "@ProductDetailPage/components/molecules/variant/variant.twig", 56)->display(twig_to_array(["attributes" => ["trigger-class-name" => ((twig_get_attribute($this->env, $this->source,                 // line 58
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "jsName", [], "any", false, false, false, 58) . "__select--") . twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "formName", [], "any", false, false, false, 58))]]));
                // line 61
                echo "        ";
            } else {
                // line 62
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.attribute.not_available"), "html", null, true);
                echo "
        ";
            }
            // line 64
            echo "    ";
        } else {
            // line 65
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
            echo "__selected-value\">
            ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()), "selectedValue", [], "any", false, false, false, 66), "html", null, true);
            echo " <a href=\"?\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
            echo "</a>
            <input type=\"hidden\" name=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 67, $this->source); })()), "formName", [], "any", false, false, false, 67), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 67, $this->source); })()), "selectedValue", [], "any", false, false, false, 67), "html", null, true);
            echo "\" />
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/variant/variant.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 67,  107 => 66,  102 => 65,  99 => 64,  93 => 62,  90 => 61,  88 => 58,  87 => 56,  84 => 55,  82 => 41,  81 => 40,  80 => 39,  79 => 38,  78 => 35,  77 => 34,  76 => 32,  75 => 29,  73 => 28,  70 => 27,  68 => 26,  59 => 25,  55 => 24,  51 => 1,  49 => 22,  48 => 12,  47 => 11,  46 => 10,  45 => 9,  44 => 4,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'variant',
    tag: 'div'
} %}

{% define data = {
    name: required,
    formName: required,
    values: required,
    selectedValue: null,
    label: '',
    isAvailable: true,
    selectModifiers: ['margin-bottom'],
    selectTheme: 'default',
    selectPlaceholder: 'product.attribute._none',
    autoInitSelect: false,
} %}

{% set selectModifiers = data.selectModifiers | merge(['full-width']) %}

{% block body %}
    <div class=\"{{ config.jsName }}__title {{ component.renderClass(config.name ~ '__title', modifiers) }}\">{{data.label}}</div>
    {% if data.selectedValue is null %}
        {% if data.isAvailable %}
            {% embed molecule('custom-select') with {
                modifiers: selectModifiers,
                class: 'name',
                attributes: {
                    name: data.formName,
                    'config-width': '100%',
                    'config-theme': data.selectTheme,
                    'auto-init': data.autoInitSelect,
                },
                embed: {
                    values: data.values,
                    selectPlaceholder: data.selectPlaceholder,
                    jsName: config.jsName,
                    formName: data.formName,
                },
            } only %}
                {% block selectClass %}
                    {{ parent() }} {{ embed.jsName ~ '__select--' ~ embed.formName }}
                {% endblock %}

                {% block options %}
                    <option value=\"\">{{ embed.selectPlaceholder | trans }}</option>
                    {% for value in embed.values %}
                        <option value=\"{{value}}\">{{value}}</option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}

            {% include molecule('form-handler') with {
                attributes: {
                    'trigger-class-name': config.jsName ~ '__select--' ~ data.formName,
                },
            } only %}
        {% else %}
            {{ 'product.attribute.not_available' | trans }}
        {% endif %}
    {% else %}
        <div class=\"{{ config.name }}__selected-value\">
            {{data.selectedValue}} <a href=\"?\">{{ 'Reset' | trans }}</a>
            <input type=\"hidden\" name=\"{{data.formName}}\" value=\"{{data.selectedValue}}\" />
        </div>
    {% endif %}
{% endblock %}
", "@ProductDetailPage/components/molecules/variant/variant.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/variant/variant.twig");
    }
}


/* @ProductDetailPage/components/molecules/variant/variant.twig */
class __TwigTemplate_cedb835673e75f6c6eb05cf848c1e372b6d9554374a245520d2262ce81582d4f___999892028 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'selectClass' => [$this, 'block_selectClass'],
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 28
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["custom-select"]), "@ProductDetailPage/components/molecules/variant/variant.twig", 28);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 44
    public function block_selectClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                    ";
        $this->displayParentBlock("selectClass", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 45, $this->source); })()), "jsName", [], "any", false, false, false, 45) . "__select--") . twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 45, $this->source); })()), "formName", [], "any", false, false, false, 45)), "html", null, true);
        echo "
                ";
    }

    // line 48
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "                    <option value=\"\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 49, $this->source); })()), "selectPlaceholder", [], "any", false, false, false, 49)), "html", null, true);
        echo "</option>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 50, $this->source); })()), "values", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 51
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/variant/variant.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 53,  271 => 51,  267 => 50,  262 => 49,  258 => 48,  249 => 45,  245 => 44,  235 => 28,  113 => 67,  107 => 66,  102 => 65,  99 => 64,  93 => 62,  90 => 61,  88 => 58,  87 => 56,  84 => 55,  82 => 41,  81 => 40,  80 => 39,  79 => 38,  78 => 35,  77 => 34,  76 => 32,  75 => 29,  73 => 28,  70 => 27,  68 => 26,  59 => 25,  55 => 24,  51 => 1,  49 => 22,  48 => 12,  47 => 11,  46 => 10,  45 => 9,  44 => 4,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'variant',
    tag: 'div'
} %}

{% define data = {
    name: required,
    formName: required,
    values: required,
    selectedValue: null,
    label: '',
    isAvailable: true,
    selectModifiers: ['margin-bottom'],
    selectTheme: 'default',
    selectPlaceholder: 'product.attribute._none',
    autoInitSelect: false,
} %}

{% set selectModifiers = data.selectModifiers | merge(['full-width']) %}

{% block body %}
    <div class=\"{{ config.jsName }}__title {{ component.renderClass(config.name ~ '__title', modifiers) }}\">{{data.label}}</div>
    {% if data.selectedValue is null %}
        {% if data.isAvailable %}
            {% embed molecule('custom-select') with {
                modifiers: selectModifiers,
                class: 'name',
                attributes: {
                    name: data.formName,
                    'config-width': '100%',
                    'config-theme': data.selectTheme,
                    'auto-init': data.autoInitSelect,
                },
                embed: {
                    values: data.values,
                    selectPlaceholder: data.selectPlaceholder,
                    jsName: config.jsName,
                    formName: data.formName,
                },
            } only %}
                {% block selectClass %}
                    {{ parent() }} {{ embed.jsName ~ '__select--' ~ embed.formName }}
                {% endblock %}

                {% block options %}
                    <option value=\"\">{{ embed.selectPlaceholder | trans }}</option>
                    {% for value in embed.values %}
                        <option value=\"{{value}}\">{{value}}</option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}

            {% include molecule('form-handler') with {
                attributes: {
                    'trigger-class-name': config.jsName ~ '__select--' ~ data.formName,
                },
            } only %}
        {% else %}
            {{ 'product.attribute.not_available' | trans }}
        {% endif %}
    {% else %}
        <div class=\"{{ config.name }}__selected-value\">
            {{data.selectedValue}} <a href=\"?\">{{ 'Reset' | trans }}</a>
            <input type=\"hidden\" name=\"{{data.formName}}\" value=\"{{data.selectedValue}}\" />
        </div>
    {% endif %}
{% endblock %}
", "@ProductDetailPage/components/molecules/variant/variant.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/variant/variant.twig");
    }
}
