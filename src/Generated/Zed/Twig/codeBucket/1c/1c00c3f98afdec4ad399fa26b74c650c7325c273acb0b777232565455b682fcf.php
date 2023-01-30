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

/* @PaymentGui/UpdatePaymentMethod/index.twig */
class __TwigTemplate_c1c4bd7e1b2f85ee492c18b3f8e61faba84475d19b4189d19c4a089bf4670a31 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'section_title' => [$this, 'block_section_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_sprintf("Edit Payment Method: %s", twig_get_attribute($this->env, $this->source, (isset($context["paymentMethod"]) || array_key_exists("paymentMethod", $context) ? $context["paymentMethod"] : (function () { throw new RuntimeError('Variable "paymentMethod" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6)));
        // line 4
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@PaymentGui/UpdatePaymentMethod/index.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 8, $this->source); })()), "html", null, true);
    }

    // line 9
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 9, $this->source); })()), "html", null, true);
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["paymentMethodForm"]) || array_key_exists("paymentMethodForm", $context) ? $context["paymentMethodForm"] : (function () { throw new RuntimeError('Variable "paymentMethodForm" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

    ";
        // line 15
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["paymentMethodTabs"]) || array_key_exists("paymentMethodTabs", $context) ? $context["paymentMethodTabs"] : (function () { throw new RuntimeError('Variable "paymentMethodTabs" does not exist.', 15, $this->source); })()), ["paymentMethodForm" =>         // line 16
(isset($context["paymentMethodForm"]) || array_key_exists("paymentMethodForm", $context) ? $context["paymentMethodForm"] : (function () { throw new RuntimeError('Variable "paymentMethodForm" does not exist.', 16, $this->source); })()), "paymentMethod" =>         // line 17
(isset($context["paymentMethod"]) || array_key_exists("paymentMethod", $context) ? $context["paymentMethod"] : (function () { throw new RuntimeError('Variable "paymentMethod" does not exist.', 17, $this->source); })())]]);
        // line 18
        echo "

    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["paymentMethodForm"]) || array_key_exists("paymentMethodForm", $context) ? $context["paymentMethodForm"] : (function () { throw new RuntimeError('Variable "paymentMethodForm" does not exist.', 20, $this->source); })()), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "@PaymentGui/UpdatePaymentMethod/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  81 => 18,  79 => 17,  78 => 16,  77 => 15,  72 => 13,  69 => 12,  65 => 11,  58 => 9,  51 => 8,  46 => 4,  44 => 6,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{#
@var paymentMethod \\Generated\\Shared\\Transfer\\PaymentMethodTransfer
#}
{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Edit Payment Method: %s' | format(paymentMethod.name) | trans %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block content %}

    {{ form_start(paymentMethodForm) }}

    {{ tabs(paymentMethodTabs, {
        paymentMethodForm: paymentMethodForm,
        paymentMethod: paymentMethod,
    }) }}

    {{ form_end(paymentMethodForm) }}

{% endblock %}
", "@PaymentGui/UpdatePaymentMethod/index.twig", "/data/vendor/spryker/payment-gui/src/Spryker/Zed/PaymentGui/Presentation/UpdatePaymentMethod/index.twig");
    }
}
