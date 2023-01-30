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

/* @NewsletterWidget/components/molecules/subscription/subscription.twig */
class __TwigTemplate_6a1bb687137828893fd62ae63166a3de17e9068892a624b545cb8711219c90b9 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@NewsletterWidget/components/molecules/subscription/subscription.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "subscription"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["form" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "events" => ["success" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "error" =>         // line 11
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 11, $this->source); })())]], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
    <div class=\"grid grid--middle grid--justify ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "jsName", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
        ";
        // line 18
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["subscription-info", "NewsletterWidget"]), "@NewsletterWidget/components/molecules/subscription/subscription.twig", 18)->display(twig_to_array(["class" => "col col--sm-12 col--md-5 col--lg-6", "data" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.subscribe.title"), "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.form.subscribe.text"), "togglerClass" => twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "jsName", [], "any", false, false, false, 23)]]));
        // line 26
        echo "
        <div class=\"col col--sm-12 col--md-6 col--lg-5 ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "jsName", [], "any", false, false, false, 27), "html", null, true);
        echo "__target is-hidden-sm-only\">
            ";
        // line 28
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form"]), "@NewsletterWidget/components/molecules/subscription/subscription.twig", 28)->display(twig_to_array(["modifiers" => [0 => "inline", 1 => "subscription"], "data" => ["form" => twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "form", [], "any", false, false, false, 31), "submit" => ["enable" => true, "text" => "", "icon" => "chevron-right", "class" => "button button--hollow-icon"]]]));
        // line 40
        echo "            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "events", [], "any", false, false, false, 40), "success", [], "any", false, false, false, 40))) {
            // line 41
            echo "                <p class=\"text-big text-center text-success\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "events", [], "any", false, false, false, 41), "success", [], "any", false, false, false, 41)), "html", null, true);
            echo "</p>
            ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 42
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "events", [], "any", false, false, false, 42), "error", [], "any", false, false, false, 42))) {
            // line 43
            echo "                <p class=\"text-big text-center text-alert\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "events", [], "any", false, false, false, 43), "error", [], "any", false, false, false, 43)), "html", null, true);
            echo "</p>
            ";
        }
        // line 45
        echo "        </div>
    </div>

    ";
        // line 48
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-accordion"]), "@NewsletterWidget/components/molecules/subscription/subscription.twig", 48)->display(twig_to_array(["attributes" => ["wrap-class-name" => twig_get_attribute($this->env, $this->source,         // line 50
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "jsName", [], "any", false, false, false, 50), "trigger-class-name" => (twig_get_attribute($this->env, $this->source,         // line 51
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 51, $this->source); })()), "jsName", [], "any", false, false, false, 51) . "__trigger"), "class-to-toggle" => "is-hidden-sm-only"]]));
    }

    public function getTemplateName()
    {
        return "@NewsletterWidget/components/molecules/subscription/subscription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 51,  97 => 50,  96 => 48,  91 => 45,  85 => 43,  83 => 42,  78 => 41,  75 => 40,  73 => 31,  72 => 28,  68 => 27,  65 => 26,  63 => 23,  62 => 18,  58 => 17,  55 => 16,  51 => 15,  47 => 1,  46 => 11,  45 => 10,  44 => 8,  43 => 7,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'subscription'
} %}

{% define data = {
    form: required,
    events: {
        success: required,
        error: required
    }
} %}

{% block body %}

    <div class=\"grid grid--middle grid--justify {{ config.jsName }}\">
        {% include molecule('subscription-info', 'NewsletterWidget') with {
            class: 'col col--sm-12 col--md-5 col--lg-6',
            data: {
                title: 'global.subscribe.title' | trans,
                text: 'newsletter.form.subscribe.text' | trans,
                togglerClass: config.jsName
            }
        } only %}

        <div class=\"col col--sm-12 col--md-6 col--lg-5 {{ config.jsName }}__target is-hidden-sm-only\">
            {% include molecule('form') with {
                modifiers: ['inline', 'subscription'],
                data: {
                    form: data.form,
                    submit: {
                        enable: true,
                        text: '',
                        icon: 'chevron-right',
                        class: 'button button--hollow-icon'
                    }
                }
            } only %}
            {% if data.events.success is not empty %}
                <p class=\"text-big text-center text-success\">{{data.events.success | trans}}</p>
            {% elseif data.events.error is not empty %}
                <p class=\"text-big text-center text-alert\">{{data.events.error | trans}}</p>
            {% endif %}
        </div>
    </div>

    {% include molecule('toggler-accordion') with {
        attributes: {
            'wrap-class-name': config.jsName,
            'trigger-class-name': config.jsName ~ '__trigger',
            'class-to-toggle': 'is-hidden-sm-only',
        },
    } only %}
{% endblock %}
", "@NewsletterWidget/components/molecules/subscription/subscription.twig", "/data/src/Pyz/Yves/NewsletterWidget/Theme/default/components/molecules/subscription/subscription.twig");
    }
}
