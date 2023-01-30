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

/* @@SprykerShop:AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig */
class __TwigTemplate_f995a0550660a554799da306a09af8aa9ef8adba80ac6e80d1ff29035acce9b0 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@@SprykerShop:AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["isSubscribed" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "isSubscribed", [], "any", false, false, false, 4), "subscribeForm" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "subscribeForm", [], "any", false, false, false, 5), "unsubscribeForm" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "unsubscribeForm", [], "any", false, false, false, 6)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "isSubscribed", [], "any", false, false, false, 10)) {
            // line 11
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form"]), "@@SprykerShop:AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig", 11)->display(twig_to_array(["modifiers" => [0 => "inline"], "data" => ["form" => twig_get_attribute($this->env, $this->source,             // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "unsubscribeForm", [], "any", false, false, false, 14), "options" => ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("availability-notification/unsubscribe", [], true)], "submit" => ["enable" => true, "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("availability_notification.do_not_notify_me")]]]));
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form"]), "@@SprykerShop:AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig", 25)->display(twig_to_array(["modifiers" => [0 => "inline"], "data" => ["form" => twig_get_attribute($this->env, $this->source,             // line 28
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 28, $this->source); })()), "subscribeForm", [], "any", false, false, false, 28), "options" => ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("availability-notification/subscribe", [], true)], "submit" => ["enable" => true, "text" => ">"]]]));
            // line 38
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 38,  66 => 28,  64 => 25,  61 => 24,  59 => 14,  57 => 11,  54 => 10,  50 => 9,  46 => 1,  45 => 6,  44 => 5,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    isSubscribed: _widget.isSubscribed,
    subscribeForm: _widget.subscribeForm,
    unsubscribeForm: _widget.unsubscribeForm
} %}

{% block body %}
    {% if data.isSubscribed %}
        {% include molecule('form') with {
            modifiers: ['inline'],
            data: {
                form: data.unsubscribeForm,
                options: {
                    action: url('availability-notification/unsubscribe', [], true)
                },
                submit: {
                    enable: true,
                    text: 'availability_notification.do_not_notify_me' | trans
                }
            }
        } only %}
    {% else %}
        {% include molecule('form') with {
            modifiers: ['inline'],
            data: {
                form: data.subscribeForm,
                options: {
                    action: url('availability-notification/subscribe', [], true)
                },
                submit: {
                    enable: true,
                    text: '>'
                }
            }
        } only %}
    {% endif %}
{% endblock %}
", "@@SprykerShop:AvailabilityNotificationWidget/views/availability-subscription/availability-subscription.twig", "/data/vendor/spryker-shop/availability-notification-widget/src/SprykerShop/Yves/AvailabilityNotificationWidget/Theme/default/views/availability-subscription/availability-subscription.twig");
    }
}
