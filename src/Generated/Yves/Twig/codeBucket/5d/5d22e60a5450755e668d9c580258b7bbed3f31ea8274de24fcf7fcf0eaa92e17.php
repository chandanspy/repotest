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

/* @ProductDetailPage/components/molecules/variant-configurator/variant-configurator.twig */
class __TwigTemplate_ffe4db03cfefe64be6a9c14136d69380b7cac90c347c3e3e5382e4cfce1f0e76 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'component' => [$this, 'block_component'],
            'body' => [$this, 'block_body'],
            'variant' => [$this, 'block_variant'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ProductDetailPage/components/molecules/variant-configurator/variant-configurator.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "variant-configurator", "tag" => "section"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["superAttributes" => [], "selectedAttributes" => [], "availableAttributes" => [], "useExternalForm" => false], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "superAttributes", [], "any", false, false, false, 16))) {
            $this->displayParentBlock("component", $context, $blocks);
        }
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "useExternalForm", [], "any", false, false, false, 20)) {
            // line 21
            echo "        <form method=\"GET\">
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "superAttributes", [], "any", false, false, false, 24));
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
        foreach ($context['_seq'] as $context["name"] => $context["values"]) {
            // line 25
            echo "        ";
            $context["selectedValue"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "selectedAttributes", [], "any", false, true, false, 25), $context["name"], [], "array", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "selectedAttributes", [], "any", false, true, false, 25), $context["name"], [], "array", false, false, false, 25))) : (""));
            // line 26
            echo "        ";
            $context["selectedValue"] = ((twig_in_filter((isset($context["selectedValue"]) || array_key_exists("selectedValue", $context) ? $context["selectedValue"] : (function () { throw new RuntimeError('Variable "selectedValue" does not exist.', 26, $this->source); })()), $context["values"])) ? ((isset($context["selectedValue"]) || array_key_exists("selectedValue", $context) ? $context["selectedValue"] : (function () { throw new RuntimeError('Variable "selectedValue" does not exist.', 26, $this->source); })())) : (null));
            // line 27
            echo "        ";
            $context["isAvailable"] = true;
            // line 28
            echo "
        ";
            // line 29
            if (twig_in_filter($context["name"], twig_get_array_keys_filter(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "availableAttributes", [], "any", false, false, false, 29)))) {
                // line 30
                echo "            ";
                $context["values"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "availableAttributes", [], "any", false, false, false, 30), $context["name"], [], "array", false, false, false, 30);
                // line 31
                echo "        ";
            } else {
                // line 32
                echo "            ";
                $context["isAvailable"] = twig_test_empty((isset($context["selectedValue"]) || array_key_exists("selectedValue", $context) ? $context["selectedValue"] : (function () { throw new RuntimeError('Variable "selectedValue" does not exist.', 32, $this->source); })()));
                // line 33
                echo "        ";
            }
            // line 34
            echo "
        <div class=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "html", null, true);
            echo "__list ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "jsName", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
            ";
            // line 36
            $this->displayBlock('variant', $context, $blocks);
            // line 50
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    ";
        // line 53
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 53, $this->source); })()), "useExternalForm", [], "any", false, false, false, 53)) {
            // line 54
            echo "        </form>
    ";
        }
        // line 56
        echo "
";
    }

    // line 36
    public function block_variant($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
        echo "__item\">
                    ";
        // line 38
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["variant", "ProductDetailPage"]), "@ProductDetailPage/components/molecules/variant-configurator/variant-configurator.twig", 38)->display(twig_to_array(["data" => ["name" =>         // line 40
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 40, $this->source); })()), "formName" => (("attribute[" .         // line 41
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 41, $this->source); })())) . "]"), "values" =>         // line 42
(isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 42, $this->source); })()), "selectedValue" =>         // line 43
(isset($context["selectedValue"]) || array_key_exists("selectedValue", $context) ? $context["selectedValue"] : (function () { throw new RuntimeError('Variable "selectedValue" does not exist.', 43, $this->source); })()), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.attribute." .         // line 44
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 44, $this->source); })()))), "isAvailable" =>         // line 45
(isset($context["isAvailable"]) || array_key_exists("isAvailable", $context) ? $context["isAvailable"] : (function () { throw new RuntimeError('Variable "isAvailable" does not exist.', 45, $this->source); })())]]));
        // line 48
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "@ProductDetailPage/components/molecules/variant-configurator/variant-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 48,  173 => 45,  172 => 44,  171 => 43,  170 => 42,  169 => 41,  168 => 40,  167 => 38,  162 => 37,  158 => 36,  153 => 56,  149 => 54,  147 => 53,  144 => 52,  129 => 50,  127 => 36,  121 => 35,  118 => 34,  115 => 33,  112 => 32,  109 => 31,  106 => 30,  104 => 29,  101 => 28,  98 => 27,  95 => 26,  92 => 25,  75 => 24,  72 => 23,  68 => 21,  65 => 20,  61 => 19,  54 => 16,  50 => 15,  46 => 1,  45 => 8,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'variant-configurator',
    tag: 'section'
} %}

{% define data = {
    superAttributes: [],
    selectedAttributes: [],
    availableAttributes: [],
    useExternalForm: false
} %}

{% block component %}
    {% if data.superAttributes is not empty %}{{parent()}}{% endif %}
{% endblock %}

{% block body %}
    {% if not data.useExternalForm %}
        <form method=\"GET\">
    {% endif %}

    {% for name, values in data.superAttributes %}
        {% set selectedValue = data.selectedAttributes[name] | default %}
        {% set selectedValue = selectedValue in values ? selectedValue : null %}
        {% set isAvailable = true %}

        {% if name in data.availableAttributes | keys %}
            {% set values = data.availableAttributes[name] %}
        {% else %}
            {% set isAvailable = selectedValue is empty %}
        {% endif %}

        <div class=\"{{ config.name }}__list {{ config.jsName }}\">
            {% block variant %}
                <div class=\"{{ config.name }}__item\">
                    {% include molecule('variant', 'ProductDetailPage') with {
                        data: {
                            name: name,
                            formName: 'attribute[' ~ name ~ ']',
                            values: values,
                            selectedValue: selectedValue,
                            label: ('product.attribute.' ~ name) | trans,
                            isAvailable: isAvailable
                        }
                    } only %}
                </div>
            {% endblock %}
        </div>
    {% endfor %}

    {% if not data.useExternalForm %}
        </form>
    {% endif %}

{% endblock %}
", "@ProductDetailPage/components/molecules/variant-configurator/variant-configurator.twig", "/data/src/Pyz/Yves/ProductDetailPage/Theme/default/components/molecules/variant-configurator/variant-configurator.twig");
    }
}
