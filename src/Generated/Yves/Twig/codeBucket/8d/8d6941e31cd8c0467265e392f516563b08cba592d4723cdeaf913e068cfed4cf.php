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

/* @@SprykerShop:ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig */
class __TwigTemplate_78b42a960efba7a5e0253e428e1c9d57ab688020b3e40722bf3f904a1ae94b8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'label' => [$this, 'block_label'],
            'body' => [$this, 'block_body'],
            'link' => [$this, 'block_link'],
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "breadcrumb-step", "tag" => "li"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["url" => null, "label" => null, "itemProp" => null, "withChevron" => true, "form" => null, "formName" => "", "tokenFieldName" => ""], $context['data']);        // line 18
        $context["isFormElement"] = ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "form", [], "any", false, false, false, 18)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "formName", [], "any", false, false, false, 18)));
        // line 19
        $context["isLink"] = ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "url", [], "any", false, false, false, 19)) &&  !(isset($context["isFormElement"]) || array_key_exists("isFormElement", $context) ? $context["isFormElement"] : (function () { throw new RuntimeError('Variable "isFormElement" does not exist.', 19, $this->source); })()));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "itemProp", [], "any", false, false, false, 22)) {
            // line 23
            echo "<span itemprop=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "itemProp", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "label", [], "any", false, false, false, 23), "html", null, true);
            echo "</span>";
        } else {
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "label", [], "any", false, false, false, 25), "html", null, true);
        }
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        if ((isset($context["isLink"]) || array_key_exists("isLink", $context) ? $context["isLink"] : (function () { throw new RuntimeError('Variable "isLink" does not exist.', 30, $this->source); })())) {
            // line 31
            $this->displayBlock('link', $context, $blocks);
        }
        // line 36
        if ((isset($context["isFormElement"]) || array_key_exists("isFormElement", $context) ? $context["isFormElement"] : (function () { throw new RuntimeError('Variable "isFormElement" does not exist.', 36, $this->source); })())) {
            // line 37
            $this->displayBlock('form', $context, $blocks);
        }
        // line 45
        if (( !(isset($context["isLink"]) || array_key_exists("isLink", $context) ? $context["isLink"] : (function () { throw new RuntimeError('Variable "isLink" does not exist.', 45, $this->source); })()) &&  !(isset($context["isFormElement"]) || array_key_exists("isFormElement", $context) ? $context["isFormElement"] : (function () { throw new RuntimeError('Variable "isFormElement" does not exist.', 45, $this->source); })()))) {
            $this->displayBlock("label", $context, $blocks);
        }
        // line 46
        echo "    
    ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "withChevron", [], "any", false, false, false, 47)) {
            // line 48
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@@SprykerShop:ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig", 48)->display(twig_to_array(["modifiers" => [0 => "small"], "class" => (twig_get_attribute($this->env, $this->source,             // line 50
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50) . "__separator"), "data" => ["name" => "angle-double-right"]]));
            // line 55
            echo "    ";
        }
    }

    // line 31
    public function block_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "url", [], "any", false, false, false, 32), "html", null, true);
        echo "\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>
        ";
    }

    // line 37
    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "            <form class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
        echo "__form\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "formName", [], "any", false, false, false, 38), "html", null, true);
        echo "\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "url", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
                <input name=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "tokenFieldName", [], "any", false, false, false, 39), "html", null, true);
        echo "\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "formName", [], "any", false, false, false, 39)), "html", null, true);
        echo "\">
                <button class=\"link\">";
        // line 40
        $this->displayBlock("label", $context, $blocks);
        echo "</button>
            </form>
        ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 40,  131 => 39,  122 => 38,  118 => 37,  109 => 32,  105 => 31,  100 => 55,  98 => 50,  96 => 48,  94 => 47,  91 => 46,  87 => 45,  84 => 37,  82 => 36,  79 => 31,  77 => 30,  73 => 29,  68 => 25,  61 => 23,  59 => 22,  55 => 21,  51 => 1,  49 => 19,  47 => 18,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'breadcrumb-step',
    tag: 'li',
} %}

{% define data = {
    url: null,
    label: null,
    itemProp: null,
    withChevron: true,
    form: null,
    formName: '',
    tokenFieldName: '',
} %}

{% set isFormElement = data.form is not empty or data.formName is not empty %}
{% set isLink = data.url is not empty and not isFormElement %}

{% block label %}
    {%- if data.itemProp -%}
        <span itemprop=\"{{- data.itemProp -}}\">{{- data.label -}}</span>
    {%- else -%}
        {{- data.label -}}
    {%- endif -%}
{% endblock %}

{% block body %}
    {%- if isLink -%}
        {% block link %}
            <a href=\"{{ data.url }}\">{{ block('label') }}</a>
        {% endblock %}
    {%- endif -%}

    {%- if isFormElement -%}
        {% block form %}
            <form class=\"{{ config.name }}__form\" name=\"{{ data.formName }}\" method=\"post\" action=\"{{ data.url }}\">
                <input name=\"{{ data.tokenFieldName }}\" type=\"hidden\" value=\"{{ csrf_token(data.formName) }}\">
                <button class=\"link\">{{ block('label') }}</button>
            </form>
        {% endblock %}
    {%- endif -%}

    {% if not isLink and not isFormElement %}{{ block('label') }}{% endif %}
    
    {% if data.withChevron %}
        {% include atom('icon') with {
            modifiers: ['small'],
            class: config.name ~ '__separator',
            data: {
                name: 'angle-double-right',
            },
        } only %}
    {% endif %}
{% endblock %}
", "@@SprykerShop:ShopUi/components/molecules/breadcrumb-step/breadcrumb-step.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/breadcrumb-step/breadcrumb-step.twig");
    }
}
