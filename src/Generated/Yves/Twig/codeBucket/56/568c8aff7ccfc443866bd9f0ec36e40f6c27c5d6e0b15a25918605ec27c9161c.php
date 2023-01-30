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

/* @ShopUi/components/organisms/notification-area/notification-area.twig */
class __TwigTemplate_6feae37f76f176bcbba7e005d5143029410ac5da9623773b52c455d880c91f3c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'dynamicNotificationArea' => [$this, 'block_dynamicNotificationArea'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/organisms/notification-area/notification-area.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "notification-area", "tag" => "section"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["messages" => [], "successMessages" => [], "warningMessages" => [], "alertMessages" => [], "flashMessagesInfo" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "flashbag", [], "any", false, false, false, 13), "get", [0 => "flash.messages.info"], "method", false, false, false, 13), "flashMessagesSuccess" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "session", [], "any", false, false, false, 14), "flashbag", [], "any", false, false, false, 14), "get", [0 => "flash.messages.success"], "method", false, false, false, 14), "flashMessagesError" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "flashbag", [], "any", false, false, false, 15), "get", [0 => "flash.messages.error"], "method", false, false, false, 15)], $context['data']);        // line 18
        $context["messages"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "messages", [], "any", false, false, false, 18), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "flashMessagesInfo", [], "any", false, false, false, 18));
        // line 19
        $context["successMessages"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "successMessages", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "flashMessagesSuccess", [], "any", false, false, false, 19));
        // line 20
        $context["warningMessages"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "warningMessages", [], "any", false, false, false, 20);
        // line 21
        $context["alertMessages"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "alertMessages", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "flashMessagesError", [], "any", false, false, false, 21));
        // line 22
        $context["hasNoMessage"] = (((twig_test_empty((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 22, $this->source); })())) && twig_test_empty((isset($context["successMessages"]) || array_key_exists("successMessages", $context) ? $context["successMessages"] : (function () { throw new RuntimeError('Variable "successMessages" does not exist.', 22, $this->source); })()))) && twig_test_empty((isset($context["warningMessages"]) || array_key_exists("warningMessages", $context) ? $context["warningMessages"] : (function () { throw new RuntimeError('Variable "warningMessages" does not exist.', 22, $this->source); })()))) && twig_test_empty((isset($context["alertMessages"]) || array_key_exists("alertMessages", $context) ? $context["alertMessages"] : (function () { throw new RuntimeError('Variable "alertMessages" does not exist.', 22, $this->source); })())));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        if ( !(isset($context["hasNoMessage"]) || array_key_exists("hasNoMessage", $context) ? $context["hasNoMessage"] : (function () { throw new RuntimeError('Variable "hasNoMessage" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 27
                echo "            ";
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["flash-message"]), "@ShopUi/components/organisms/notification-area/notification-area.twig", 27)->display(twig_to_array(["data" => ["text" =>                 // line 29
$context["message"]]]));
                // line 32
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["successMessages"]) || array_key_exists("successMessages", $context) ? $context["successMessages"] : (function () { throw new RuntimeError('Variable "successMessages" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                echo "            ";
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["flash-message"]), "@ShopUi/components/organisms/notification-area/notification-area.twig", 35)->display(twig_to_array(["data" => ["action" => "success", "text" =>                 // line 38
$context["message"]]]));
                // line 41
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["warningMessages"]) || array_key_exists("warningMessages", $context) ? $context["warningMessages"] : (function () { throw new RuntimeError('Variable "warningMessages" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 44
                echo "            ";
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["flash-message"]), "@ShopUi/components/organisms/notification-area/notification-area.twig", 44)->display(twig_to_array(["data" => ["action" => "warning", "text" =>                 // line 47
$context["message"]]]));
                // line 50
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alertMessages"]) || array_key_exists("alertMessages", $context) ? $context["alertMessages"] : (function () { throw new RuntimeError('Variable "alertMessages" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 53
                echo "            ";
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["flash-message"]), "@ShopUi/components/organisms/notification-area/notification-area.twig", 53)->display(twig_to_array(["data" => ["action" => "alert", "text" =>                 // line 56
$context["message"]]]));
                // line 59
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "    ";
        }
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('dynamicNotificationArea', $context, $blocks);
    }

    public function block_dynamicNotificationArea($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "        ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["dynamic-notification-area"]), "@ShopUi/components/organisms/notification-area/notification-area.twig", 63)->display([]);
        // line 64
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/notification-area/notification-area.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 64,  148 => 63,  141 => 62,  138 => 61,  135 => 60,  129 => 59,  127 => 56,  125 => 53,  121 => 52,  118 => 51,  112 => 50,  110 => 47,  108 => 44,  104 => 43,  101 => 42,  95 => 41,  93 => 38,  91 => 35,  87 => 34,  84 => 33,  78 => 32,  76 => 29,  74 => 27,  69 => 26,  66 => 25,  62 => 24,  58 => 1,  56 => 22,  54 => 21,  52 => 20,  50 => 19,  48 => 18,  47 => 15,  46 => 14,  45 => 13,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'notification-area',
    tag: 'section',
} %}

{% define data = {
    messages: [],
    successMessages: [],
    warningMessages: [],
    alertMessages: [],
    flashMessagesInfo: app.session.flashbag.get('flash.messages.info'),
    flashMessagesSuccess: app.session.flashbag.get('flash.messages.success'),
    flashMessagesError: app.session.flashbag.get('flash.messages.error'),
} %}

{% set messages = data.messages | merge(data.flashMessagesInfo) %}
{% set successMessages = data.successMessages | merge(data.flashMessagesSuccess) %}
{% set warningMessages = data.warningMessages %}
{% set alertMessages = data.alertMessages | merge(data.flashMessagesError) %}
{% set hasNoMessage = messages is empty and successMessages is empty and warningMessages is empty and alertMessages is empty %}

{% block body %}
    {% if not hasNoMessage  %}
        {% for message in messages %}
            {% include molecule('flash-message') with {
                data: {
                    text: message,
                },
            } only %}
        {% endfor %}

        {% for message in successMessages %}
            {% include molecule('flash-message') with {
                data: {
                    action: 'success',
                    text: message,
                },
            } only %}
        {% endfor %}

        {% for message in warningMessages %}
            {% include molecule('flash-message') with {
                data: {
                    action: 'warning',
                    text: message,
                },
            } only %}
        {% endfor %}

        {% for message in alertMessages %}
            {% include molecule('flash-message') with {
                data: {
                    action: 'alert',
                    text: message,
                },
            } only %}
        {% endfor %}
    {% endif %}

    {% block dynamicNotificationArea %}
        {% include organism('dynamic-notification-area') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/components/organisms/notification-area/notification-area.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/organisms/notification-area/notification-area.twig");
    }
}
