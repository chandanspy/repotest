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

/* @LanguageSwitcherWidget/views/switcher/switcher.twig */
class __TwigTemplate_befa5678e9d22f79223a6ff9258cf033edf3338ce87114877ea78739bdcabc0d extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["switcher", "@SprykerShop:LanguageSwitcherWidget"]), "@LanguageSwitcherWidget/views/switcher/switcher.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["getSchemeAndHttpHost" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "getSchemeAndHttpHost", [], "method", false, false, false, 4)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "languages", [], "any", false, false, false, 8))) {
            // line 9
            echo "        <form method=\"GET\" action=\"\">
            ";
            // line 10
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["language-switcher", "LanguageSwitcherWidget"]), "@LanguageSwitcherWidget/views/switcher/switcher.twig", 10)->display(twig_to_array(["data" => ["languages" => twig_get_attribute($this->env, $this->source,             // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "languages", [], "any", false, false, false, 12), "currentLanguage" => twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "currentLanguage", [], "any", false, false, false, 13), "getSchemeAndHttpHost" => twig_get_attribute($this->env, $this->source,             // line 14
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "getSchemeAndHttpHost", [], "any", false, false, false, 14)]]));
            // line 17
            echo "        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@LanguageSwitcherWidget/views/switcher/switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 10,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('switcher', '@SprykerShop:LanguageSwitcherWidget') %}

{% define data = {
    getSchemeAndHttpHost: app.request.getSchemeAndHttpHost(),
} %}

{% block body %}
    {% if data.languages is not empty %}
        <form method=\"GET\" action=\"\">
            {% include molecule('language-switcher', 'LanguageSwitcherWidget') with {
                data: {
                    languages: data.languages,
                    currentLanguage: data.currentLanguage,
                    getSchemeAndHttpHost: data.getSchemeAndHttpHost,
                },
            } only %}
        </form>
    {% endif %}
{% endblock %}
", "@LanguageSwitcherWidget/views/switcher/switcher.twig", "/data/src/Pyz/Yves/LanguageSwitcherWidget/Theme/default/views/switcher/switcher.twig");
    }
}
