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

/* @ShopUi/components/molecules/password-field/password-field.twig */
class __TwigTemplate_b82d043270f15d99c59b773c49883712b448857593bda927d09ef26e13d5c9d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'button' => [$this, 'block_button'],
            'showIcon' => [$this, 'block_showIcon'],
            'hideIcon' => [$this, 'block_hideIcon'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/password-field/password-field.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/password-field/password-field.twig", 2)->unwrap();
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "password-field", "tag" => "password-field"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["inputAttributes" => [], "inputExtraClasses" => "", "showVisibilitySwitcher" => true], $context['data']);        // line 15
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["button-class-name" => (("js-" . twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16)) . "__button"), "button-toggle-class-name" => (twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17) . "__button--shown")], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <input
        type=\"password\"
        class=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "jsName", [], "any", false, false, false, 23), "html", null, true);
        echo "__input ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "inputExtraClasses", [], "any", false, false, false, 23), "html", null, true);
        echo "\"";
        // line 24
        echo twig_call_macro($macros["component"], "macro_renderAttributes", [twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "inputAttributes", [], "any", false, false, false, 24)], 24, $context, $this->getSourceContext());
        // line 25
        echo ">

    ";
        // line 27
        $this->displayBlock('button', $context, $blocks);
    }

    public function block_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "showVisibilitySwitcher", [], "any", false, false, false, 28)) {
            // line 29
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "__button ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "jsName", [], "any", false, false, false, 29), "html", null, true);
            echo "__button\">
                ";
            // line 30
            $this->displayBlock('showIcon', $context, $blocks);
            // line 38
            echo "
                ";
            // line 39
            $this->displayBlock('hideIcon', $context, $blocks);
            // line 47
            echo "            </div>
        ";
        }
        // line 49
        echo "    ";
    }

    // line 30
    public function block_showIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/molecules/password-field/password-field.twig", 31)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 32
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32) . "__icon-show"), "data" => ["name" => "visible"]]));
        // line 37
        echo "                ";
    }

    // line 39
    public function block_hideIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/molecules/password-field/password-field.twig", 40)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 41
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41) . "__icon-hide"), "data" => ["name" => "invisible"]]));
        // line 46
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/password-field/password-field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  125 => 41,  123 => 40,  119 => 39,  115 => 37,  113 => 32,  111 => 31,  107 => 30,  103 => 49,  99 => 47,  97 => 39,  94 => 38,  92 => 30,  85 => 29,  82 => 28,  75 => 27,  71 => 25,  69 => 24,  64 => 23,  60 => 21,  56 => 20,  52 => 1,  51 => 17,  50 => 16,  49 => 15,  48 => 9,  47 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import model('component') as component %}

{% define config = {
    name: 'password-field',
    tag: 'password-field',
} %}

{% define data = {
    inputAttributes: {},
    inputExtraClasses: '',
    showVisibilitySwitcher: true,
} %}

{% define attributes = {
    'button-class-name': 'js-' ~ config.name ~ '__button',
    'button-toggle-class-name': config.name ~ '__button--shown',
} %}

{% block body %}
    <input
        type=\"password\"
        class=\"{{ config.jsName }}__input {{ data.inputExtraClasses }}\"
        {{- component.renderAttributes(data.inputAttributes) -}}
    >

    {% block button %}
        {% if data.showVisibilitySwitcher %}
            <div class=\"{{ config.name }}__button {{ config.jsName }}__button\">
                {% block showIcon %}
                    {% include atom('icon') with {
                        class: config.name ~ '__icon-show',
                        data: {
                            name: 'visible',
                        },
                    } only %}
                {% endblock %}

                {% block hideIcon %}
                    {% include atom('icon') with {
                        class: config.name ~ '__icon-hide',
                        data: {
                            name: 'invisible',
                        },
                    } only %}
                {% endblock %}
            </div>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@ShopUi/components/molecules/password-field/password-field.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/password-field/password-field.twig");
    }
}
