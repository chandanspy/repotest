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

/* @ShopUi/components/atoms/select/select.twig */
class __TwigTemplate_11fcf9b2676e176827f1c66cb4fd2a56eda454e399478806720e60624d51ff5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'attributes' => [$this, 'block_attributes'],
            'option' => [$this, 'block_option'],
            'body' => [$this, 'block_body'],
            'selectClass' => [$this, 'block_selectClass'],
            'selectAttributes' => [$this, 'block_selectAttributes'],
            'options' => [$this, 'block_options'],
            'optionsGroup' => [$this, 'block_optionsGroup'],
            'caret' => [$this, 'block_caret'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/atoms/select/select.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "select", "tag" => "label"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["options" => [], "isGrouped" => false], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_option($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $context["isSelected"] = ((twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "selected", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "selected", [], "any", false, false, false, 17), false)) : (false));
        // line 18
        echo "    ";
        $context["isDisabled"] = ((twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "disabled", [], "any", true, true, false, 18)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "disabled", [], "any", false, false, false, 18), false)) : (false));
        // line 19
        echo "
    <option value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 20, $this->source); })()), "value", [], "any", false, false, false, 20), "html", null, true);
        echo "\" ";
        if ((isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 20, $this->source); })())) {
            echo "selected";
        }
        echo " ";
        if ((isset($context["isDisabled"]) || array_key_exists("isDisabled", $context) ? $context["isDisabled"] : (function () { throw new RuntimeError('Variable "isDisabled" does not exist.', 20, $this->source); })())) {
            echo "disabled";
        }
        echo ">
        ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["option"]) || array_key_exists("option", $context) ? $context["option"] : (function () { throw new RuntimeError('Variable "option" does not exist.', 21, $this->source); })()), "label", [], "any", false, false, false, 21), "html", null, true);
        echo "
    </option>
";
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    <select class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "__select ";
        $this->displayBlock('selectClass', $context, $blocks);
        echo "\" ";
        $this->displayBlock('selectAttributes', $context, $blocks);
        echo ">
        ";
        // line 28
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "isGrouped", [], "any", false, false, false, 28)) {
            // line 29
            echo "            ";
            $this->displayBlock('options', $context, $blocks);
            // line 34
            echo "        ";
        } else {
            // line 35
            echo "            ";
            $this->displayBlock('optionsGroup', $context, $blocks);
            // line 44
            echo "        ";
        }
        // line 45
        echo "    </select>
    ";
        // line 46
        $this->displayBlock('caret', $context, $blocks);
    }

    // line 27
    public function block_selectClass($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_selectAttributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_call_macro($macros["component"], "macro_renderAttributes", [(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 27, $this->source); })())], 27, $context, $this->getSourceContext());
    }

    // line 29
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "options", [], "any", false, false, false, 30));
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
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 31
            echo "                    ";
            $this->displayBlock("option", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            ";
    }

    // line 35
    public function block_optionsGroup($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "options", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["label"] => $context["optionGroup"]) {
            // line 37
            echo "                    <optgroup label=\"";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["optionGroup"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 39
                echo "                            ";
                $this->displayBlock("option", $context, $blocks);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                    </optgroup>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['optionGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            ";
    }

    // line 46
    public function block_caret($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "        ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/atoms/select/select.twig", 47)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 48
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48) . "__caret"), "data" => ["name" => "caret-down"]]));
        // line 53
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/atoms/select/select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 53,  249 => 48,  247 => 47,  243 => 46,  239 => 43,  232 => 41,  215 => 39,  198 => 38,  193 => 37,  188 => 36,  184 => 35,  180 => 33,  163 => 31,  145 => 30,  141 => 29,  129 => 27,  125 => 46,  122 => 45,  119 => 44,  116 => 35,  113 => 34,  110 => 29,  108 => 28,  99 => 27,  95 => 26,  88 => 21,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  63 => 16,  57 => 14,  53 => 1,  52 => 9,  51 => 4,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'select',
    tag: 'label'
} %}

{% define data = {
    options: [],
    isGrouped: false
} %}

{% block attributes %}{% endblock %}

{% block option %}
    {% set isSelected = option.selected | default(false) %}
    {% set isDisabled = option.disabled | default(false) %}

    <option value=\"{{option.value}}\" {% if isSelected %}selected{% endif %} {% if isDisabled %}disabled{% endif %}>
        {{option.label}}
    </option>
{% endblock %}


{% block body %}
    <select class=\"{{config.name}}__select {% block selectClass %}{% endblock %}\" {% block selectAttributes %}{{component.renderAttributes(attributes)}}{% endblock %}>
        {% if not data.isGrouped %}
            {% block options %}
                {% for option in data.options %}
                    {{ block('option') }}
                {% endfor %}
            {% endblock %}
        {% else %}
            {% block optionsGroup %}
                {% for label, optionGroup in data.options %}
                    <optgroup label=\"{{label}}\">
                        {% for option in optionGroup %}
                            {{ block('option') }}
                        {% endfor %}
                    </optgroup>
                {% endfor %}
            {% endblock %}
        {% endif %}
    </select>
    {% block caret %}
        {% include atom('icon') with {
            class: config.name ~ '__caret',
            data: {
                name: 'caret-down'
            }
        } only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/components/atoms/select/select.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/atoms/select/select.twig");
    }
}
