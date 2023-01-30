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

/* @ProductLabelWidget/components/molecules/label-group/label-group.twig */
class __TwigTemplate_abd9cfb028541f302dad93ccca7686cefb83028555b90978d22ac0bbffaf3751 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["label-group", "@SprykerShop:ProductLabelWidget"]), "@ProductLabelWidget/components/molecules/label-group/label-group.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $context["labelTextClass"] = twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5) . "__text"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 5, $this->source); })())], 5, $context, $this->getSourceContext());
        // line 6
        echo "
    ";
        // line 16
        echo "
    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "labels", [], "any", false, false, false, 17)) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "labels", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                // line 19
                echo "            ";
                echo twig_call_macro($macros["_self"], "macro_label", [twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "jsName", [], "any", false, false, false, 19), (isset($context["labelTextClass"]) || array_key_exists("labelTextClass", $context) ? $context["labelTextClass"] : (function () { throw new RuntimeError('Variable "labelTextClass" does not exist.', 19, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["label"], "text", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, $context["label"], "type", [], "any", false, false, false, 19)], 19, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_label", [twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "jsName", [], "any", false, false, false, 22), (isset($context["labelTextClass"]) || array_key_exists("labelTextClass", $context) ? $context["labelTextClass"] : (function () { throw new RuntimeError('Variable "labelTextClass" does not exist.', 22, $this->source); })())], 22, $context, $this->getSourceContext());
            echo "
    ";
        }
    }

    // line 7
    public function macro_label($__configName__ = null, $__configJsName__ = null, $__textClass__ = null, $__text__ = "", $__type__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "configName" => $__configName__,
            "configJsName" => $__configJsName__,
            "textClass" => $__textClass__,
            "text" => $__text__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 8
            echo "        ";
            $context["labelType"] = (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 8, $this->source); })())) ? ((((isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new RuntimeError('Variable "configName" does not exist.', 8, $this->source); })()) . "__text--") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 8, $this->source); })()))) : (""));
            // line 9
            echo "
        <span class=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["configJsName"]) || array_key_exists("configJsName", $context) ? $context["configJsName"] : (function () { throw new RuntimeError('Variable "configJsName" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "__label-flag\" data-config-name=\"";
            echo twig_escape_filter($this->env, (isset($context["configName"]) || array_key_exists("configName", $context) ? $context["configName"] : (function () { throw new RuntimeError('Variable "configName" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "__text\">
            <span class=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["textClass"]) || array_key_exists("textClass", $context) ? $context["textClass"] : (function () { throw new RuntimeError('Variable "textClass" does not exist.', 11, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["labelType"]) || array_key_exists("labelType", $context) ? $context["labelType"] : (function () { throw new RuntimeError('Variable "labelType" does not exist.', 11, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["configJsName"]) || array_key_exists("configJsName", $context) ? $context["configJsName"] : (function () { throw new RuntimeError('Variable "configJsName" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "__label-flag-text\">
                ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "
            </span>
        </span>
    ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@ProductLabelWidget/components/molecules/label-group/label-group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 12,  118 => 11,  112 => 10,  109 => 9,  106 => 8,  89 => 7,  81 => 22,  78 => 21,  69 => 19,  64 => 18,  62 => 17,  59 => 16,  56 => 6,  53 => 5,  49 => 4,  45 => 1,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('label-group', '@SprykerShop:ProductLabelWidget') %}
{% import _self as component %}

{% block body %}
    {% set labelTextClass = component.renderClass(config.name ~ '__text', modifiers) %}

    {% macro label(configName, configJsName, textClass, text='', type='') %}
        {% set labelType = type ? configName ~ '__text--' ~ type %}

        <span class=\"{{ configJsName }}__label-flag\" data-config-name=\"{{ configName }}__text\">
            <span class=\"{{ textClass }} {{ labelType }} {{ configJsName }}__label-flag-text\">
                {{ text }}
            </span>
        </span>
    {% endmacro %}

    {% if data.labels %}
        {% for label in data.labels %}
            {{ _self.label(config.name, config.jsName, labelTextClass, label.text, label.type) }}
        {% endfor %}
    {% else %}
        {{ _self.label(config.name, config.jsName, labelTextClass) }}
    {% endif %}
{% endblock %}
", "@ProductLabelWidget/components/molecules/label-group/label-group.twig", "/data/src/Pyz/Yves/ProductLabelWidget/Theme/default/components/molecules/label-group/label-group.twig");
    }
}
