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

/* @ContentNavigationWidget/views/footer-partners/footer-partners.twig */
class __TwigTemplate_a2ccc67b7203f93a4e90c63b8fe307a54c1d4df5785cdf59c58ac4a199f84681 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ContentNavigationWidget/views/footer-partners/footer-partners.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["navigation" =>         // line 4
(isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 4, $this->source); })())], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $context["triggerClass"] = "js-footer-partners__trigger";
        // line 9
        echo "    ";
        $context["targetClass"] = "js-footer-partners";
        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["navigation-item", "ContentNavigationWidget"]), "@ContentNavigationWidget/views/footer-partners/footer-partners.twig", 11)->display(twig_to_array(["class" => ("container " .         // line 12
(isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 12, $this->source); })())), "modifiers" => [0 => "footer-logo"], "data" => ["nodes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "navigation", [], "any", false, false, false, 15), "nodes", [], "any", false, false, false, 15), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.payment_shipping"), "toggleClass" =>         // line 17
(isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 17, $this->source); })()), "template" => "navigation-icon-list"]]));
        // line 21
        echo "
    ";
        // line 22
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-accordion"]), "@ContentNavigationWidget/views/footer-partners/footer-partners.twig", 22)->display(twig_to_array(["attributes" => ["wrap-class-name" =>         // line 24
(isset($context["targetClass"]) || array_key_exists("targetClass", $context) ? $context["targetClass"] : (function () { throw new RuntimeError('Variable "targetClass" does not exist.', 24, $this->source); })()), "trigger-class-name" =>         // line 25
(isset($context["triggerClass"]) || array_key_exists("triggerClass", $context) ? $context["triggerClass"] : (function () { throw new RuntimeError('Variable "triggerClass" does not exist.', 25, $this->source); })()), "class-to-toggle" => "is-hidden-sm-only"]]));
    }

    public function getTemplateName()
    {
        return "@ContentNavigationWidget/views/footer-partners/footer-partners.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 25,  70 => 24,  69 => 22,  66 => 21,  64 => 17,  63 => 15,  62 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    navigation: navigation,
} %}

{% block body %}
    {% set triggerClass = 'js-footer-partners__trigger' %}
    {% set targetClass = 'js-footer-partners' %}

    {% include molecule('navigation-item', 'ContentNavigationWidget') with {
        class: 'container ' ~ targetClass,
        modifiers: ['footer-logo'],
        data: {
            nodes: data.navigation.nodes,
            title: 'global.payment_shipping' | trans,
            toggleClass: targetClass,
            template: 'navigation-icon-list',
        },
    } only %}

    {% include molecule('toggler-accordion') with {
        attributes: {
            'wrap-class-name': targetClass,
            'trigger-class-name': triggerClass,
            'class-to-toggle': 'is-hidden-sm-only',
        },
    } only %}
{% endblock %}
", "@ContentNavigationWidget/views/footer-partners/footer-partners.twig", "/data/src/Pyz/Yves/ContentNavigationWidget/Theme/default/views/footer-partners/footer-partners.twig");
    }
}
