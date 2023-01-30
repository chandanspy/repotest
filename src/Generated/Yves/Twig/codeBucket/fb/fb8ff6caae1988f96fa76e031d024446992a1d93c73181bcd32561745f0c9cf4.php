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

/* @CatalogPage/components/molecules/active-filter/active-filter.twig */
class __TwigTemplate_24d918f3f4b1fad7ed45a2156b0448afabec1fca55f2ce789a7831401b28c80c extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["active-filter", "@SprykerShop:CatalogPage"]), "@CatalogPage/components/molecules/active-filter/active-filter.twig", 1);
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
        echo "    <strong class=\"";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4) . "__name"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.filter." . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "filter", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4))), "html", null, true);
        echo ":&nbsp;</strong>
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "value", [], "any", false, false, false, 5), "html", null, true);
        echo "
    ";
        // line 6
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@CatalogPage/components/molecules/active-filter/active-filter.twig", 6)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7) . "__icon"), "modifiers" => [0 => "cross"], "data" => ["name" => "cross"]]));
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/active-filter/active-filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  60 => 6,  56 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('active-filter', '@SprykerShop:CatalogPage') %}

{% block body %}
    <strong class=\"{{ config.name ~ '__name' }}\">{{ ('product.filter.' ~ data.filter.name) | trans }}:&nbsp;</strong>
    {{ data.value }}
    {% include atom('icon') with {
        class: config.name ~ '__icon',
        modifiers: ['cross'],
        data: {
            name: 'cross',
        },
    } only %}
{% endblock %}
", "@CatalogPage/components/molecules/active-filter/active-filter.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/active-filter/active-filter.twig");
    }
}
