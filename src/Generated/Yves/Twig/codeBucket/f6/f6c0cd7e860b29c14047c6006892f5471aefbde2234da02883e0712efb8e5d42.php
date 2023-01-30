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

/* @CatalogPage/components/molecules/filter-category/filter-category.twig */
class __TwigTemplate_aa9e96418bf2e164bab07a129a1dcf80d0d18db8dcdf63ee9d58bb86c51e831a extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["filter-category", "@SprykerShop:CatalogPage"]), "@CatalogPage/components/molecules/filter-category/filter-category.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "filter-category", "tag" => "filter-category"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["levelMenu" => 1], $context['data']);        // line 12
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["wrapper-class-name" => (twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13) . "__menu--lvl-1"), "parent-class-name" => (twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14) . "__menu-item--lvl-1"), "active-category-class-name" => (("js-" . twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15)) . "__menu-item"), "visible-category-class" => (twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16) . "__menu-item"), "class-to-remove" => "is-hidden-lg-xxl"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <ul class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "__menu ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "__menu--lvl-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "levelMenu", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "categories", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryNode"]) {
            // line 23
            echo "            ";
            $context["quantity"] = 0;
            // line 24
            echo "            ";
            $context["hasChildren"] = (twig_get_attribute($this->env, $this->source, $context["categoryNode"], "children", [], "any", true, true, false, 24) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["categoryNode"], "children", [], "any", false, false, false, 24)));
            // line 25
            echo "
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "filter", [], "any", false, false, false, 26), "values", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["filterValue"]) {
                // line 27
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["filterValue"], "value", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, $context["categoryNode"], "nodeId", [], "any", false, false, false, 27)))) {
                    // line 28
                    echo "                    ";
                    $context["quantity"] = twig_get_attribute($this->env, $this->source, $context["filterValue"], "docCount", [], "any", false, false, false, 28);
                    // line 29
                    echo "                ";
                }
                // line 30
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filterValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "
            ";
            // line 32
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "filterPath", [], "any", false, false, false, 32))) {
                // line 33
                echo "                ";
                $context["currentUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "filterPath", [], "any", false, false, false, 33), ["categoryPath" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", [0 => "categoryPath"], "method", false, false, false, 33)]);
                // line 34
                echo "            ";
            } else {
                // line 35
                echo "                ";
                $context["currentUrl"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "attributes", [], "any", false, false, false, 35), "get", [0 => "categoryNode"], "method", false, false, false, 35)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "attributes", [], "any", false, false, false, 35), "get", [0 => "categoryNode"], "method", false, false, false, 35), "url", [], "any", false, false, false, 35)) : (null));
                // line 36
                echo "            ";
            }
            // line 37
            echo "
            ";
            // line 38
            $context["categoryUrl"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "filterPath", [], "any", false, false, false, 38))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "filterPath", [], "any", false, false, false, 38), ["categoryPath" => call_user_func_array($this->env->getFilter('trimLocale')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["categoryNode"], "url", [], "any", false, false, false, 38)])])) : (twig_get_attribute($this->env, $this->source, $context["categoryNode"], "url", [], "any", false, false, false, 38)));
            // line 39
            echo "            ";
            $context["isActive"] = (0 === twig_compare((isset($context["currentUrl"]) || array_key_exists("currentUrl", $context) ? $context["currentUrl"] : (function () { throw new RuntimeError('Variable "currentUrl" does not exist.', 39, $this->source); })()), (isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 39, $this->source); })())));
            // line 40
            echo "            ";
            $context["isHidden"] = (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 40, $this->source); })()), "levelMenu", [], "any", false, false, false, 40), 1));
            // line 41
            echo "            ";
            $context["disableAttribute"] = (((0 === twig_compare((isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 41, $this->source); })()), 0))) ? ("disabled") : (""));
            // line 42
            echo "            ";
            $context["menuItemActiveClass"] = (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 42, $this->source); })())) ? ((((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42) . "__menu-item--active ") . twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 42, $this->source); })()), "jsName", [], "any", false, false, false, 42)) . "__menu-item")) : (""));
            // line 43
            echo "            ";
            $context["menuItemHiddenClass"] = ((((isset($context["isHidden"]) || array_key_exists("isHidden", $context) ? $context["isHidden"] : (function () { throw new RuntimeError('Variable "isHidden" does not exist.', 43, $this->source); })()) &&  !(isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 43, $this->source); })()))) ? ("is-hidden-lg-xxl") : (""));
            // line 44
            echo "            ";
            $context["menuLinkActiveClass"] = (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 44, $this->source); })())) ? ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44) . "__menu-link--active")) : (""));
            // line 45
            echo "            ";
            $context["linkTextActiveClass"] = (((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 45, $this->source); })())) ? ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45) . "__link-text--active")) : (""));
            // line 46
            echo "            ";
            $context["triggerButtonJsName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), "parentJsName", [], "any", false, false, false, 46)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), "parentJsName", [], "any", false, false, false, 46) . "__trigger")) : (""));
            // line 47
            echo "
            <li class=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
            echo "__menu-item ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
            echo "__menu-item--lvl-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()), "levelMenu", [], "any", false, false, false, 48), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["menuItemActiveClass"]) || array_key_exists("menuItemActiveClass", $context) ? $context["menuItemActiveClass"] : (function () { throw new RuntimeError('Variable "menuItemActiveClass" does not exist.', 48, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["menuItemHiddenClass"]) || array_key_exists("menuItemHiddenClass", $context) ? $context["menuItemHiddenClass"] : (function () { throw new RuntimeError('Variable "menuItemHiddenClass" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "\">
                <button class=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
            echo "__menu-link ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), "html", null, true);
            echo "__menu-link--lvl-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), "levelMenu", [], "any", false, false, false, 49), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["menuLinkActiveClass"]) || array_key_exists("menuLinkActiveClass", $context) ? $context["menuLinkActiveClass"] : (function () { throw new RuntimeError('Variable "menuLinkActiveClass" does not exist.', 49, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["triggerButtonJsName"]) || array_key_exists("triggerButtonJsName", $context) ? $context["triggerButtonJsName"] : (function () { throw new RuntimeError('Variable "triggerButtonJsName" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "\" type=\"button\" ";
            echo twig_escape_filter($this->env, (isset($context["disableAttribute"]) || array_key_exists("disableAttribute", $context) ? $context["disableAttribute"] : (function () { throw new RuntimeError('Variable "disableAttribute" does not exist.', 49, $this->source); })()), "html", null, true);
            echo " data-url=";
            echo twig_escape_filter($this->env, (isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 49, $this->source); })()), "html", null, true);
            echo ">
                    <span class=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), "html", null, true);
            echo "__link-text ";
            echo twig_escape_filter($this->env, (isset($context["linkTextActiveClass"]) || array_key_exists("linkTextActiveClass", $context) ? $context["linkTextActiveClass"] : (function () { throw new RuntimeError('Variable "linkTextActiveClass" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoryNode"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</span> <span>";
            echo twig_escape_filter($this->env, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "</span>
                </button>

                ";
            // line 53
            if ((isset($context["hasChildren"]) || array_key_exists("hasChildren", $context) ? $context["hasChildren"] : (function () { throw new RuntimeError('Variable "hasChildren" does not exist.', 53, $this->source); })())) {
                // line 54
                echo "                    ";
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["filter-category", "CatalogPage"]), "@CatalogPage/components/molecules/filter-category/filter-category.twig", 54)->display(twig_to_array(["data" => ["filter" => twig_get_attribute($this->env, $this->source,                 // line 56
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "filter", [], "any", false, false, false, 56), "filterPath" => twig_get_attribute($this->env, $this->source,                 // line 57
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), "filterPath", [], "any", false, false, false, 57), "categories" => twig_get_attribute($this->env, $this->source,                 // line 58
$context["categoryNode"], "children", [], "any", false, false, false, 58), "levelMenu" => (twig_get_attribute($this->env, $this->source,                 // line 59
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 59, $this->source); })()), "levelMenu", [], "any", false, false, false, 59) + 1), "parentJsName" => twig_get_attribute($this->env, $this->source,                 // line 60
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "parentJsName", [], "any", false, false, false, 60)]]));
                // line 63
                echo "                ";
            }
            // line 64
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryNode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/filter-category/filter-category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 66,  200 => 64,  197 => 63,  195 => 60,  194 => 59,  193 => 58,  192 => 57,  191 => 56,  189 => 54,  187 => 53,  175 => 50,  159 => 49,  147 => 48,  144 => 47,  141 => 46,  138 => 45,  135 => 44,  132 => 43,  129 => 42,  126 => 41,  123 => 40,  120 => 39,  118 => 38,  115 => 37,  112 => 36,  109 => 35,  106 => 34,  103 => 33,  101 => 32,  98 => 31,  92 => 30,  89 => 29,  86 => 28,  83 => 27,  79 => 26,  76 => 25,  73 => 24,  70 => 23,  66 => 22,  57 => 21,  53 => 20,  49 => 1,  48 => 16,  47 => 15,  46 => 14,  45 => 13,  44 => 12,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('filter-category', '@SprykerShop:CatalogPage') %}

{% define config = {
    name: 'filter-category',
    tag: 'filter-category',
} %}

{% define data = {
    levelMenu: 1,
} %}

{% define attributes = {
    'wrapper-class-name': config.name ~ '__menu--lvl-1',
    'parent-class-name': config.name ~ '__menu-item--lvl-1',
    'active-category-class-name': 'js-' ~ config.name ~ '__menu-item',
    'visible-category-class': config.name ~ '__menu-item',
    'class-to-remove': 'is-hidden-lg-xxl',
} %}

{% block body %}
    <ul class=\"{{ config.name }}__menu {{ config.name }}__menu--lvl-{{ data.levelMenu }}\">
        {% for categoryNode in data.categories %}
            {% set quantity = 0 %}
            {% set hasChildren = categoryNode.children is defined and categoryNode.children is not empty %}

            {% for filterValue in data.filter.values %}
                {% if filterValue.value == categoryNode.nodeId %}
                    {% set quantity = filterValue.docCount %}
                {% endif %}
            {% endfor %}

            {% if data.filterPath is not empty %}
                {% set currentUrl = url(data.filterPath, {categoryPath: (app.request.attributes.get('categoryPath'))}) %}
            {% else %}
                {% set currentUrl = app.request.attributes.get('categoryNode') ? app.request.attributes.get('categoryNode').url : null %}
            {% endif %}

            {% set categoryUrl = data.filterPath is not empty ? url(data.filterPath, {categoryPath: (categoryNode.url | trimLocale)}) : categoryNode.url %}
            {% set isActive = (currentUrl == categoryUrl) %}
            {% set isHidden = (data.levelMenu != 1) %}
            {% set disableAttribute = quantity == 0 ? 'disabled' %}
            {% set menuItemActiveClass = isActive ? config.name ~ '__menu-item--active ' ~ config.jsName ~ '__menu-item' %}
            {% set menuItemHiddenClass = isHidden and not isActive ? 'is-hidden-lg-xxl' %}
            {% set menuLinkActiveClass = isActive ? config.name ~ '__menu-link--active' %}
            {% set linkTextActiveClass = isActive ? config.name ~ '__link-text--active' %}
            {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

            <li class=\"{{ config.name }}__menu-item {{ config.name }}__menu-item--lvl-{{ data.levelMenu }} {{ menuItemActiveClass }} {{ menuItemHiddenClass }}\">
                <button class=\"{{ config.name }}__menu-link {{ config.name }}__menu-link--lvl-{{ data.levelMenu }} {{ menuLinkActiveClass }} {{ triggerButtonJsName }}\" type=\"button\" {{ disableAttribute }} data-url={{ categoryUrl }}>
                    <span class=\"{{ config.name }}__link-text {{ linkTextActiveClass }}\">{{ categoryNode.name }}</span> <span>{{ quantity }}</span>
                </button>

                {% if hasChildren %}
                    {% include molecule('filter-category', 'CatalogPage') with {
                        data: {
                            filter: data.filter,
                            filterPath: data.filterPath,
                            categories: categoryNode.children,
                            levelMenu: data.levelMenu + 1,
                            parentJsName: data.parentJsName,
                        },
                    } only %}
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}
", "@CatalogPage/components/molecules/filter-category/filter-category.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/filter-category/filter-category.twig");
    }
}
