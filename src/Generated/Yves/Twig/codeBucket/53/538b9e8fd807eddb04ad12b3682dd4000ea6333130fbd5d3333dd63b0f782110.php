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

/* @@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig */
class __TwigTemplate_55e04c51accf52075e282ed1586364b657c0e39d2a1ba86ecfdd46af275cce4d extends Template
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
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "rating-selector", "tag" => "rating-selector"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["value" => 0, "minValue" => 1, "maxValue" => 5, "steps" => 5, "useHalfSteps" => false, "inputId" => "", "inputName" => "rating", "parentJsName" => ""], $context['data']);        // line 19
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["readonly" => false, "disable-if-empty-value" => false, "product-item-class-name" => twig_get_attribute($this->env, $this->source,         // line 22
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "parentJsName", [], "any", false, false, false, 22)], $context['attributes']);        // line 25
        $context["singleStepValue"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "maxValue", [], "any", false, false, false, 25) - twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "minValue", [], "any", false, false, false, 25)) / (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "steps", [], "any", false, false, false, 25) - 1));
        // line 26
        $context["precision"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "useHalfSteps", [], "any", false, false, false, 26)) ? (1) : (0));
        // line 27
        $context["value"] = twig_round(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "value", [], "any", false, false, false, 27), (isset($context["precision"]) || array_key_exists("precision", $context) ? $context["precision"] : (function () { throw new RuntimeError('Variable "precision" does not exist.', 27, $this->source); })()), "floor");
        // line 28
        $context["isActive"] = false;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_extraClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 31, $this->source); })()), "readonly", [], "any", false, false, false, 31)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "--readonly";
        }
    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    <span class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "html", null, true);
        echo "__steps\">
        ";
        // line 36
        ob_start();
        // line 37
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 37, $this->source); })()), "steps", [], "any", false, false, false, 37), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 38
            echo "                ";
            $context["currentStepValue"] = ($context["step"] * (isset($context["singleStepValue"]) || array_key_exists("singleStepValue", $context) ? $context["singleStepValue"] : (function () { throw new RuntimeError('Variable "singleStepValue" does not exist.', 38, $this->source); })()));
            // line 39
            echo "                ";
            if ((0 <= twig_compare((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 39, $this->source); })()), (isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 39, $this->source); })())))) {
                // line 40
                echo "                    ";
                $context["isActive"] = true;
                // line 41
                echo "                ";
            }
            // line 42
            echo "
                ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "useHalfSteps", [], "any", false, false, false, 43)) {
                // line 44
                echo "                    <span
                        data-step-value=\"";
                // line 45
                echo twig_escape_filter($this->env, (isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 45, $this->source); })()), "html", null, true);
                echo "\"
                        class=\"
                            ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
                echo "__step
                            ";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
                echo "__step--half
                            ";
                // line 49
                (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 49, $this->source); })())) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49) . "__step--active"), "html", null, true))) : (print ("")));
                echo "
                            ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "jsName", [], "any", false, false, false, 50), "html", null, true);
                echo "__step\">

                        ";
                // line 52
                $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 52)->display(twig_to_array(["class" => (((twig_get_attribute($this->env, $this->source,                 // line 53
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53) . "__star ") . twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53)) . "__star--half-right"), "data" => ["name" => "star-half"]]));
                // line 58
                echo "                    </span>

                    ";
                // line 60
                $context["currentStepValue"] = (($context["step"] - 0.5) * (isset($context["singleStepValue"]) || array_key_exists("singleStepValue", $context) ? $context["singleStepValue"] : (function () { throw new RuntimeError('Variable "singleStepValue" does not exist.', 60, $this->source); })()));
                // line 61
                echo "                    ";
                if ((0 <= twig_compare((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 61, $this->source); })()), (isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 61, $this->source); })())))) {
                    // line 62
                    echo "                        ";
                    $context["isActive"] = true;
                    // line 63
                    echo "                    ";
                }
                // line 64
                echo "
                    <span
                        data-step-value=\"";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 66, $this->source); })()), "html", null, true);
                echo "\"
                        class=\"
                            ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68), "html", null, true);
                echo "__step
                            ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), "html", null, true);
                echo "__step--half
                            ";
                // line 70
                (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 70, $this->source); })())) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70) . "__step--active"), "html", null, true))) : (print ("")));
                echo "
                            ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 71, $this->source); })()), "jsName", [], "any", false, false, false, 71), "html", null, true);
                echo "__step\">

                        ";
                // line 73
                $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 73)->display(twig_to_array(["class" => (((twig_get_attribute($this->env, $this->source,                 // line 74
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74) . "__star ") . twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74)) . "__star--half-left"), "data" => ["name" => "star-half"]]));
                // line 79
                echo "                    </span>
                ";
            }
            // line 81
            echo "
                ";
            // line 82
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 82, $this->source); })()), "useHalfSteps", [], "any", false, false, false, 82)) {
                // line 83
                echo "                    <span
                        data-step-value=\"";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["currentStepValue"]) || array_key_exists("currentStepValue", $context) ? $context["currentStepValue"] : (function () { throw new RuntimeError('Variable "currentStepValue" does not exist.', 84, $this->source); })()), "html", null, true);
                echo "\"
                        class=\"
                            ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 86, $this->source); })()), "name", [], "any", false, false, false, 86), "html", null, true);
                echo "__step
                            ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), "html", null, true);
                echo "__step--full
                            ";
                // line 88
                (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 88, $this->source); })())) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 88, $this->source); })()), "name", [], "any", false, false, false, 88) . "__step--active"), "html", null, true))) : (print ("")));
                echo "
                            ";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 89, $this->source); })()), "jsName", [], "any", false, false, false, 89), "html", null, true);
                echo "__step\">

                        ";
                // line 91
                $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", 91)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,                 // line 92
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92) . "__star"), "data" => ["name" => "star"]]));
                // line 97
                echo "                    </span>
                ";
            }
            // line 99
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo twig_spaceless($___internal_parse_0_);
        // line 101
        echo "    </span>

    ";
        // line 103
        $this->displayBlock('input', $context, $blocks);
    }

    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "        ";
        $context["hiddenInputJsName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "parentJsName", [], "any", false, false, false, 104)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "parentJsName", [], "any", false, false, false, 104) . "__rating")) : (""));
        // line 105
        echo "
        <input
            type=\"hidden\"
            class=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 108, $this->source); })()), "jsName", [], "any", false, false, false, 108), "html", null, true);
        echo "__input ";
        echo twig_escape_filter($this->env, (isset($context["hiddenInputJsName"]) || array_key_exists("hiddenInputJsName", $context) ? $context["hiddenInputJsName"] : (function () { throw new RuntimeError('Variable "hiddenInputJsName" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "\"
            ";
        // line 109
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "inputId", [], "any", false, false, false, 109)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })()), "inputId", [], "any", false, false, false, 109), "html", null, true);
            echo "\"";
        }
        // line 110
        echo "            name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 110, $this->source); })()), "inputName", [], "any", false, false, false, 110), "html", null, true);
        echo "\"
            value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })()), "value", [], "any", false, false, false, 111), "html", null, true);
        echo "\"
            ";
        // line 112
        if (((twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 112, $this->source); })()), "disable-if-empty-value", [], "array", false, false, false, 112) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()), "value", [], "any", false, false, false, 112))) || twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 112, $this->source); })()), "readonly", [], "array", false, false, false, 112))) {
            echo "disabled";
        }
        echo ">
    ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 112,  265 => 111,  260 => 110,  254 => 109,  248 => 108,  243 => 105,  240 => 104,  233 => 103,  229 => 101,  227 => 36,  224 => 100,  218 => 99,  214 => 97,  212 => 92,  211 => 91,  206 => 89,  202 => 88,  198 => 87,  194 => 86,  189 => 84,  186 => 83,  184 => 82,  181 => 81,  177 => 79,  175 => 74,  174 => 73,  169 => 71,  165 => 70,  161 => 69,  157 => 68,  152 => 66,  148 => 64,  145 => 63,  142 => 62,  139 => 61,  137 => 60,  133 => 58,  131 => 53,  130 => 52,  125 => 50,  121 => 49,  117 => 48,  113 => 47,  108 => 45,  105 => 44,  103 => 43,  100 => 42,  97 => 41,  94 => 40,  91 => 39,  88 => 38,  83 => 37,  81 => 36,  76 => 35,  72 => 34,  64 => 31,  60 => 30,  56 => 1,  54 => 28,  52 => 27,  50 => 26,  48 => 25,  47 => 22,  46 => 19,  45 => 8,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'rating-selector',
    tag: 'rating-selector',
} %}

{% define data = {
    value: 0,
    minValue: 1,
    maxValue: 5,
    steps: 5,
    useHalfSteps: false,
    inputId: '',
    inputName: 'rating',
    parentJsName: '',
} %}

{% define attributes = {
    'readonly': false,
    'disable-if-empty-value': false,
    'product-item-class-name': data.parentJsName,
} %}

{% set singleStepValue = (data.maxValue - data.minValue) / (data.steps - 1) %}
{% set precision = data.useHalfSteps ? 1 : 0 %}
{% set value = data.value | round(precision, 'floor') %}
{% set isActive = false %}

{% block extraClass %}
    {% if attributes.readonly %}{{ config.name }}--readonly{% endif %}
{% endblock %}

{% block body %}
    <span class=\"{{ config.name }}__steps\">
        {% apply spaceless %}
            {% for step in data.steps..1 %}
                {% set currentStepValue = step * singleStepValue %}
                {% if value >= currentStepValue %}
                    {% set isActive = true %}
                {% endif %}

                {% if data.useHalfSteps %}
                    <span
                        data-step-value=\"{{ currentStepValue }}\"
                        class=\"
                            {{ config.name }}__step
                            {{ config.name }}__step--half
                            {{ isActive ? config.name ~ '__step--active' }}
                            {{ config.jsName }}__step\">

                        {% include atom('icon') with {
                            class: config.name ~ '__star ' ~ config.name ~ '__star--half-right',
                            data: {
                                name: 'star-half',
                            },
                        } only %}
                    </span>

                    {% set currentStepValue = (step - 0.5) * singleStepValue %}
                    {% if value >= currentStepValue %}
                        {% set isActive = true %}
                    {% endif %}

                    <span
                        data-step-value=\"{{ currentStepValue }}\"
                        class=\"
                            {{ config.name }}__step
                            {{ config.name }}__step--half
                            {{ isActive ? config.name ~ '__step--active' }}
                            {{ config.jsName }}__step\">

                        {% include atom('icon') with {
                            class: config.name ~ '__star ' ~ config.name ~ '__star--half-left',
                            data: {
                                name: 'star-half',
                            },
                        } only %}
                    </span>
                {% endif %}

                {% if not data.useHalfSteps %}
                    <span
                        data-step-value=\"{{ currentStepValue }}\"
                        class=\"
                            {{ config.name }}__step
                            {{ config.name }}__step--full
                            {{ isActive ? config.name ~ '__step--active' }}
                            {{ config.jsName }}__step\">

                        {% include atom('icon') with {
                            class: config.name ~ '__star',
                            data: {
                                name: 'star',
                            },
                        } only %}
                    </span>
                {% endif %}
            {% endfor %}
        {% endapply %}
    </span>

    {% block input %}
        {% set hiddenInputJsName = data.parentJsName ? data.parentJsName ~ '__rating' %}

        <input
            type=\"hidden\"
            class=\"{{ config.jsName }}__input {{ hiddenInputJsName }}\"
            {% if data.inputId %}id=\"{{ data.inputId }}\"{% endif %}
            name=\"{{ data.inputName }}\"
            value=\"{{ data.value }}\"
            {% if attributes['disable-if-empty-value'] and data.value is empty or attributes['readonly'] %}disabled{% endif %}>
    {% endblock %}
{% endblock %}
", "@@SprykerShop:ProductReviewWidget/components/molecules/rating-selector/rating-selector.twig", "/data/vendor/spryker-shop/product-review-widget/src/SprykerShop/Yves/ProductReviewWidget/Theme/default/components/molecules/rating-selector/rating-selector.twig");
    }
}
