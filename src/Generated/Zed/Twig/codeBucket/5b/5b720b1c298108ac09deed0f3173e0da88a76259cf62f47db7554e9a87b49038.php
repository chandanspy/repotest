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

/* @PaymentGui/PaymentMethod/index.twig */
class __TwigTemplate_15863b77d80ab4358dfaadcb8f1564cfe758e65f4a3491ded85ed0625438ffd3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_title' => [$this, 'block_section_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["widget_title"] = "Payment Methods";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@PaymentGui/PaymentMethod/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 4, $this->source); })())), "html", null, true);
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->loadTemplate("@PaymentGui/PaymentMethod/index.twig", "@PaymentGui/PaymentMethod/index.twig", 7, "435652202")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 7, $this->source); })()))]));
    }

    public function getTemplateName()
    {
        return "@PaymentGui/PaymentMethod/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  57 => 6,  50 => 4,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Payment Methods' %}
{% block section_title %}{{ widget_title | trans }}{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: widget_title | trans } %}
        {% block widget_content %}
            {{ table | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@PaymentGui/PaymentMethod/index.twig", "/data/vendor/spryker/payment-gui/src/Spryker/Zed/PaymentGui/Presentation/PaymentMethod/index.twig");
    }
}


/* @PaymentGui/PaymentMethod/index.twig */
class __TwigTemplate_15863b77d80ab4358dfaadcb8f1564cfe758e65f4a3491ded85ed0625438ffd3___435652202 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@PaymentGui/PaymentMethod/index.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            ";
        echo (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 9, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PaymentGui/PaymentMethod/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 9,  129 => 8,  61 => 7,  57 => 6,  50 => 4,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Payment Methods' %}
{% block section_title %}{{ widget_title | trans }}{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: widget_title | trans } %}
        {% block widget_content %}
            {{ table | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@PaymentGui/PaymentMethod/index.twig", "/data/vendor/spryker/payment-gui/src/Spryker/Zed/PaymentGui/Presentation/PaymentMethod/index.twig");
    }
}
