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

/* @AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig */
class __TwigTemplate_d43849d06ef4d4922e6d192e405e059ef8a5e9f1e1d96aa965978c11138bd7c6 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["availability-subscription", "@SprykerShop:AvailabilityNotificationWidget"]), "@AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "isSubscribed", [], "any", false, false, false, 4)) {
            // line 5
            echo "        ";
            $this->loadTemplate("@AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig", "@AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig", 5, "2130008657")->display(twig_to_array(["modifiers" => [0 => "inline"], "data" => ["form" => twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "unsubscribeForm", [], "any", false, false, false, 8), "options" => ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("availability-notification/unsubscribe", [], true)]]]));
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form"]), "@AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig", 22)->display(twig_to_array(["modifiers" => [0 => "inline"], "data" => ["form" => twig_get_attribute($this->env, $this->source,             // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "subscribeForm", [], "any", false, false, false, 25), "options" => ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("availability-notification/subscribe", [], true)], "submit" => ["enable" => true, "class" => "button button--secondary button--form spacing-right spacing-right--reset", "icon" => "chevron-right", "text" => ""]]]));
            // line 37
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 37,  61 => 25,  59 => 22,  56 => 21,  54 => 8,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('availability-subscription', '@SprykerShop:AvailabilityNotificationWidget') %}

{% block body %}
    {% if data.isSubscribed %}
        {% embed molecule('form') with {
            modifiers: ['inline'],
            data: {
                form: data.unsubscribeForm,
                options: {
                    action: url('availability-notification/unsubscribe', [], true),
                },
            },
        } only %}
            {% block fieldset %}
                {{ parent() }}
                <button type=\"submit\" class=\"button button--secondary button--form button--expand button--md-left-indent spacing-right spacing-right--reset\" data-init-single-click>
                    {{ 'availability_notification.do_not_notify_me' | trans }}
                </button>
            {% endblock %}
        {% endembed %}
    {% else %}
        {% include molecule('form') with {
            modifiers: ['inline'],
            data: {
                form: data.subscribeForm,
                options: {
                    action: url('availability-notification/subscribe', [], true),
                },
                submit: {
                    enable: true,
                    class: 'button button--secondary button--form spacing-right spacing-right--reset',
                    icon: 'chevron-right',
                    text: '',
                },
            }
        } only %}
    {% endif %}
{% endblock %}
", "@AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig", "/data/src/Pyz/Yves/AvailabilityNotificationWidget/Theme/default/views/availability-subscription/availability-subscription.twig");
    }
}


/* @AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig */
class __TwigTemplate_d43849d06ef4d4922e6d192e405e059ef8a5e9f1e1d96aa965978c11138bd7c6___2130008657 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fieldset' => [$this, 'block_fieldset'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form"]), "@AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_fieldset($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "                ";
        $this->displayParentBlock("fieldset", $context, $blocks);
        echo "
                <button type=\"submit\" class=\"button button--secondary button--form button--expand button--md-left-indent spacing-right spacing-right--reset\" data-init-single-click>
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("availability_notification.do_not_notify_me"), "html", null, true);
        echo "
                </button>
            ";
    }

    public function getTemplateName()
    {
        return "@AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 17,  161 => 15,  157 => 14,  147 => 5,  63 => 37,  61 => 25,  59 => 22,  56 => 21,  54 => 8,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('availability-subscription', '@SprykerShop:AvailabilityNotificationWidget') %}

{% block body %}
    {% if data.isSubscribed %}
        {% embed molecule('form') with {
            modifiers: ['inline'],
            data: {
                form: data.unsubscribeForm,
                options: {
                    action: url('availability-notification/unsubscribe', [], true),
                },
            },
        } only %}
            {% block fieldset %}
                {{ parent() }}
                <button type=\"submit\" class=\"button button--secondary button--form button--expand button--md-left-indent spacing-right spacing-right--reset\" data-init-single-click>
                    {{ 'availability_notification.do_not_notify_me' | trans }}
                </button>
            {% endblock %}
        {% endembed %}
    {% else %}
        {% include molecule('form') with {
            modifiers: ['inline'],
            data: {
                form: data.subscribeForm,
                options: {
                    action: url('availability-notification/subscribe', [], true),
                },
                submit: {
                    enable: true,
                    class: 'button button--secondary button--form spacing-right spacing-right--reset',
                    icon: 'chevron-right',
                    text: '',
                },
            }
        } only %}
    {% endif %}
{% endblock %}
", "@AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig", "/data/src/Pyz/Yves/AvailabilityNotificationWidget/Theme/default/views/availability-subscription/availability-subscription.twig");
    }
}
