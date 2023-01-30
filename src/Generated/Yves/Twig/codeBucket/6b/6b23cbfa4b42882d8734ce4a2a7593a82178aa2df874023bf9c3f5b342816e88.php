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

/* @AgentWidget/views/agent-widget/agent-widget.twig */
class __TwigTemplate_8e04f90320aa74c4676228bd1796accbd1b77495ceae470be3148dd125342523 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@AgentWidget/views/agent-widget/agent-widget.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["isLoggedIn" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "isLoggedIn", [], "any", false, false, false, 4), "agent" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "agent", [], "any", false, false, false, 5), "customer" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "customer", [], "any", false, false, false, 6)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "isLoggedIn", [], "any", false, false, false, 10)) {
            // line 11
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["agent-control-bar", "AgentWidget"]), "@AgentWidget/views/agent-widget/agent-widget.twig", 11)->display(twig_to_array(["data" => ["agent" => twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "agent", [], "any", false, false, false, 13), "customer" => twig_get_attribute($this->env, $this->source,             // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "customer", [], "any", false, false, false, 14)]]));
            // line 17
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@AgentWidget/views/agent-widget/agent-widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  60 => 14,  59 => 13,  57 => 11,  54 => 10,  50 => 9,  46 => 1,  45 => 6,  44 => 5,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    isLoggedIn: _widget.isLoggedIn,
    agent: _widget.agent,
    customer: _widget.customer
} %}

{% block body %}
    {% if data.isLoggedIn %}
        {% include organism('agent-control-bar', 'AgentWidget') with {
            data: {
                agent: data.agent,
                customer: data.customer
            }
        } only %}
    {% endif %}
{% endblock %}
", "@AgentWidget/views/agent-widget/agent-widget.twig", "/data/vendor/spryker-shop/agent-widget/src/SprykerShop/Yves/AgentWidget/Theme/default/views/agent-widget/agent-widget.twig");
    }
}
