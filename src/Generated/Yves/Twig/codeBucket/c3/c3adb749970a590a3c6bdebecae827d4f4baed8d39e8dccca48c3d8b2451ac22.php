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

/* @NewsletterWidget/views/subscription-form/subscription-form.twig */
class __TwigTemplate_3715e9517b85e3761337ee4a63a2c53a6356986ed463f578c4ae7ad7e6222076 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@NewsletterWidget/views/subscription-form/subscription-form.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["form" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "newsletterSubscriptionForm", [], "any", false, false, false, 4), "events" => ["success" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 6, $this->source); })()), "success", [], "any", false, false, false, 6), "error" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 7, $this->source); })()), "error", [], "any", false, false, false, 7)]], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    ";
        // line 13
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["subscription", "NewsletterWidget"]), "@NewsletterWidget/views/subscription-form/subscription-form.twig", 13)->display(twig_to_array(["data" => ["form" => twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "form", [], "any", false, false, false, 15), "events" => ["success" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "events", [], "any", false, false, false, 17), "success", [], "any", false, false, false, 17), "error" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "events", [], "any", false, false, false, 18), "error", [], "any", false, false, false, 18)]]]));
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "@NewsletterWidget/views/subscription-form/subscription-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  60 => 18,  59 => 17,  58 => 15,  57 => 13,  54 => 12,  50 => 11,  46 => 1,  45 => 7,  44 => 6,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    form: _view.newsletterSubscriptionForm,
    events: {
        success: _view.success,
        error: _view.error
    }
} %}

{% block body %}

    {% include molecule('subscription', 'NewsletterWidget') with {
        data: {
            form: data.form,
            events: {
                success: data.events.success,
                error: data.events.error
            }
        }
    } only %}

{% endblock %}
", "@NewsletterWidget/views/subscription-form/subscription-form.twig", "/data/src/Pyz/Yves/NewsletterWidget/Theme/default/views/subscription-form/subscription-form.twig");
    }
}
