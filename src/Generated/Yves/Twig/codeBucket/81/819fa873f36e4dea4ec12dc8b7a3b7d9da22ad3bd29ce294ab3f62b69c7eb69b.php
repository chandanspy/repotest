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

/* @TabsWidget/components/molecules/search-tabs/search-tabs.twig */
class __TwigTemplate_b334422ea9d1bdc926702066da71b897e8f24fe3831cfbf10fada0d054dadd20 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@TabsWidget/components/molecules/search-tabs/search-tabs.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "search-tabs"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["tabs" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "searchString" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "requestParams" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })())], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "tabs", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, $context["tab"], "route", [], "any", false, false, false, 15), ["q" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "searchString", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" class=\"col col--sm-12 ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "__item ";
            ((twig_get_attribute($this->env, $this->source, $context["tab"], "isActive", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15) . "__item--active"), "html", null, true))) : (print ("")));
            echo "\">
            <span class=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "__title\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 17)), "html", null, true);
            echo "
            </span>
            ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["tab"], "count", [], "any", false, false, false, 19)) {
                // line 20
                echo "                <span class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
                echo "__counter\">
                    (";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "count", [], "any", false, false, false, 21), "html", null, true);
                echo ")
                </span>
            ";
            }
            // line 24
            echo "        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@TabsWidget/components/molecules/search-tabs/search-tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  85 => 21,  80 => 20,  78 => 19,  73 => 17,  69 => 16,  60 => 15,  55 => 14,  51 => 13,  47 => 1,  46 => 10,  45 => 9,  44 => 8,  43 => 7,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'search-tabs',
} %}

{% define data = {
    tabs: required,
    searchString: required,
    requestParams: required,
} %}

{% block body %}
    {% for key, tab in data.tabs %}
        <a href=\"{{ url(tab.route, {q: data.searchString}) }}\" class=\"col col--sm-12 {{ config.name }}__item {{ tab.isActive ? config.name ~ '__item--active' : '' }}\">
            <span class=\"{{ config.name }}__title\">
                {{ tab.title | trans }}
            </span>
            {% if tab.count %}
                <span class=\"{{ config.name }}__counter\">
                    ({{ tab.count }})
                </span>
            {% endif %}
        </a>
    {% endfor %}
{% endblock %}
", "@TabsWidget/components/molecules/search-tabs/search-tabs.twig", "/data/vendor/spryker-shop/tabs-widget/src/SprykerShop/Yves/TabsWidget/Theme/default/components/molecules/search-tabs/search-tabs.twig");
    }
}
