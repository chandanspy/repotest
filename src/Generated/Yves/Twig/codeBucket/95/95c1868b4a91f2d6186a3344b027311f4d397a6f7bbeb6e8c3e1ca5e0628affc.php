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

/* @CatalogPage/components/molecules/suggestion-links-list/suggestion-links-list.twig */
class __TwigTemplate_d5b6453ba9a5fe0c79ca169979386d03fffe9b8cecf2bfbc3af942682ac207a7 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@CatalogPage/components/molecules/suggestion-links-list/suggestion-links-list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "suggestion-links-list"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["name" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "items" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "length" =>         // line 10
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 10, $this->source); })()), "isTitleHiddenOnTablet" => true, "isSuggestion" => false], $context['data']);        // line 15
        $context["titleHiddenClass"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "isTitleHiddenOnTablet", [], "any", false, false, false, 15)) ? ("is-hidden-sm-md") : (""));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "items", [], "any", false, false, false, 18))) {
            // line 19
            echo "        <h6 class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
            echo "__title ";
            echo twig_escape_filter($this->env, (isset($context["titleHiddenClass"]) || array_key_exists("titleHiddenClass", $context) ? $context["titleHiddenClass"] : (function () { throw new RuntimeError('Variable "titleHiddenClass" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</h6>
        <ul>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "items", [], "any", false, false, false, 21), 0, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "length", [], "any", false, false, false, 21)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                ";
                $context["href"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "isSuggestion", [], "any", false, false, false, 22)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search", ["q" => $context["item"]])) : (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 22)));
                // line 23
                echo "                ";
                $context["value"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "isSuggestion", [], "any", false, false, false, 23)) ? ($context["item"]) : (twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 23)));
                // line 24
                echo "
                <li class=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
                echo "__item\">
                    <a class=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
                echo "__link js-suggest-search__item--navigable\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new RuntimeError('Variable "href" does not exist.', 26, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 26, $this->source); })()), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/suggestion-links-list/suggestion-links-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  87 => 26,  83 => 25,  80 => 24,  77 => 23,  74 => 22,  70 => 21,  60 => 19,  57 => 18,  53 => 17,  49 => 1,  47 => 15,  46 => 10,  45 => 9,  44 => 8,  43 => 7,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'suggestion-links-list'
} %}

{% define data = {
    name: required,
    items: required,
    length: required,
    isTitleHiddenOnTablet: true,
    isSuggestion: false
} %}

{% set titleHiddenClass = data.isTitleHiddenOnTablet ? 'is-hidden-sm-md' : '' %}

{% block body %}
    {% if data.items is not empty %}
        <h6 class=\"{{ config.name }}__title {{ titleHiddenClass }}\">{{ data.name }}</h6>
        <ul>
            {% for item in data.items | slice(0, data.length) %}
                {% set href = data.isSuggestion ? path('search', {'q': item}) : item.url %}
                {% set value = data.isSuggestion ? item : item.name %}

                <li class=\"{{ config.name }}__item\">
                    <a class=\"{{ config.name }}__link js-suggest-search__item--navigable\" href=\"{{ href }}\">{{ value }}</a>
                </li>
            {% endfor %}
        </ul>
    {% endif %}
{% endblock %}", "@CatalogPage/components/molecules/suggestion-links-list/suggestion-links-list.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/suggestion-links-list/suggestion-links-list.twig");
    }
}
