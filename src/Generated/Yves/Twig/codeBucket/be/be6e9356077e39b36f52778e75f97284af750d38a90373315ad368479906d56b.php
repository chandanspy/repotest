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

/* @ShopUi/components/molecules/navigation-list/navigation-list.twig */
class __TwigTemplate_e50b13a20d92c56d7f29a8a48b0034ef1c27c5755d8f5945882a1a4e137e39c6 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/navigation-list/navigation-list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-list", "tag" => "nav"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["nodes" => []], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <ul class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", ["list", (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 14, $this->source); })())], 14, $context, $this->getSourceContext());
        echo "\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "nodes", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 16
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["node"], "nodeType", [], "any", true, true, false, 16)) {
                // line 17
                echo "                ";
                $this->loadTemplate("@ShopUi/components/molecules/navigation-list/navigation-list.twig", "@ShopUi/components/molecules/navigation-list/navigation-list.twig", 17, "724966421")->display(twig_to_array(["modifiers" =>                 // line 18
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 18, $this->source); })()), "class" => "list__item", "config" => ["tag" => "li"], "data" => ["node" =>                 // line 24
$context["node"]]]));
                // line 42
                echo "            ";
            } else {
                // line 43
                echo "                ";
                $context["additionalClass"] = (((twig_get_attribute($this->env, $this->source, $context["node"], "cssClass", [], "any", true, true, false, 43) &&  !(null === twig_get_attribute($this->env, $this->source, $context["node"], "cssClass", [], "any", false, false, false, 43)))) ? (twig_get_attribute($this->env, $this->source, $context["node"], "cssClass", [], "any", false, false, false, 43)) : (""));
                // line 44
                echo "
                ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["node"], "url", [], "any", false, false, false, 45)) {
                    // line 46
                    echo "                    <li><a class=\"";
                    echo twig_call_macro($macros["component"], "macro_renderClass", ["link", (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 46, $this->source); })())], 46, $context, $this->getSourceContext());
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["additionalClass"]) || array_key_exists("additionalClass", $context) ? $context["additionalClass"] : (function () { throw new RuntimeError('Variable "additionalClass" does not exist.', 46, $this->source); })()), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["node"], "url", [], "any", false, false, false, 46), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, false, 46), "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 48
                    echo "                    <li><span class=\"";
                    echo twig_call_macro($macros["component"], "macro_renderClass", ["text", (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 48, $this->source); })())], 48, $context, $this->getSourceContext());
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["additionalClass"]) || array_key_exists("additionalClass", $context) ? $context["additionalClass"] : (function () { throw new RuntimeError('Variable "additionalClass" does not exist.', 48, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["node"], "title", [], "any", false, false, false, 48), "html", null, true);
                    echo "</span></li>
                ";
                }
                // line 50
                echo "            ";
            }
            // line 51
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/navigation-list/navigation-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 52,  107 => 51,  104 => 50,  94 => 48,  82 => 46,  80 => 45,  77 => 44,  74 => 43,  71 => 42,  69 => 24,  68 => 18,  66 => 17,  63 => 16,  59 => 15,  54 => 14,  50 => 13,  46 => 1,  45 => 9,  44 => 4,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'navigation-list',
    tag: 'nav'
} %}

{% define data = {
    nodes: []
} %}

{% block body %}
    <ul class=\"{{- component.renderClass('list', modifiers) -}}\">
        {% for node in data.nodes %}
            {% if node.nodeType is defined %}
                {% embed atom('node') with {
                    modifiers: modifiers,
                    class: 'list__item',
                    config: {
                        tag: 'li'
                    },
                    data: {
                        node: node
                    }
                } only %}
                    {% import _self as component %}
                    {% set additionalClass = data.node.cssClass ?? '' %}

                    {% block url %}
                        <a class=\"{{ component.renderClass('link', modifiers) }} {{ additionalClass }}\" href=\"{{ data.node.url }}\">{{ data.node.title }}</a>
                    {% endblock %}

                    {% block externalUrl %}
                        <a class=\"{{ component.renderClass('link', modifiers) }} {{ additionalClass }}\" href=\"{{ data.node.url }}\" target=\"_blank\">{{ data.node.title }}</a>
                    {% endblock %}

                    {% block other %}
                        {{ data.node.title }}
                    {% endblock %}
                {% endembed %}
            {% else %}
                {% set additionalClass = node.cssClass ?? '' %}

                {% if node.url %}
                    <li><a class=\"{{ component.renderClass('link', modifiers) }} {{ additionalClass }}\" href=\"{{ node.url }}\">{{ node.title }}</a></li>
                {% else %}
                    <li><span class=\"{{ component.renderClass('text', modifiers) }} {{ additionalClass }}\">{{ node.title }}</span></li>
                {% endif %}
            {% endif %}
        {% endfor %}
    </ul>
{% endblock %}


", "@ShopUi/components/molecules/navigation-list/navigation-list.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-list/navigation-list.twig");
    }
}


/* @ShopUi/components/molecules/navigation-list/navigation-list.twig */
class __TwigTemplate_e50b13a20d92c56d7f29a8a48b0034ef1c27c5755d8f5945882a1a4e137e39c6___724966421 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'url' => [$this, 'block_url'],
            'externalUrl' => [$this, 'block_externalUrl'],
            'other' => [$this, 'block_other'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 17
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["node"]), "@ShopUi/components/molecules/navigation-list/navigation-list.twig", 17);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        $macros["component"] = $this->macros["component"] = $this;
        // line 28
        $context["additionalClass"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "node", [], "any", false, true, false, 28), "cssClass", [], "any", true, true, false, 28) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "node", [], "any", false, true, false, 28), "cssClass", [], "any", false, false, false, 28)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "node", [], "any", false, true, false, 28), "cssClass", [], "any", false, false, false, 28)) : (""));
        // line 17
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                        <a class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", ["link", (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 31, $this->source); })())], 31, $context, $this->getSourceContext());
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["additionalClass"]) || array_key_exists("additionalClass", $context) ? $context["additionalClass"] : (function () { throw new RuntimeError('Variable "additionalClass" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "node", [], "any", false, false, false, 31), "url", [], "any", false, false, false, 31), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "node", [], "any", false, false, false, 31), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "</a>
                    ";
    }

    // line 34
    public function block_externalUrl($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                        <a class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", ["link", (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 35, $this->source); })())], 35, $context, $this->getSourceContext());
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["additionalClass"]) || array_key_exists("additionalClass", $context) ? $context["additionalClass"] : (function () { throw new RuntimeError('Variable "additionalClass" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "node", [], "any", false, false, false, 35), "url", [], "any", false, false, false, 35), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 35, $this->source); })()), "node", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35), "html", null, true);
        echo "</a>
                    ";
    }

    // line 38
    public function block_other($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "node", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39), "html", null, true);
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/navigation-list/navigation-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 39,  265 => 38,  252 => 35,  248 => 34,  235 => 31,  231 => 30,  227 => 17,  225 => 28,  223 => 27,  216 => 17,  113 => 52,  107 => 51,  104 => 50,  94 => 48,  82 => 46,  80 => 45,  77 => 44,  74 => 43,  71 => 42,  69 => 24,  68 => 18,  66 => 17,  63 => 16,  59 => 15,  54 => 14,  50 => 13,  46 => 1,  45 => 9,  44 => 4,  42 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'navigation-list',
    tag: 'nav'
} %}

{% define data = {
    nodes: []
} %}

{% block body %}
    <ul class=\"{{- component.renderClass('list', modifiers) -}}\">
        {% for node in data.nodes %}
            {% if node.nodeType is defined %}
                {% embed atom('node') with {
                    modifiers: modifiers,
                    class: 'list__item',
                    config: {
                        tag: 'li'
                    },
                    data: {
                        node: node
                    }
                } only %}
                    {% import _self as component %}
                    {% set additionalClass = data.node.cssClass ?? '' %}

                    {% block url %}
                        <a class=\"{{ component.renderClass('link', modifiers) }} {{ additionalClass }}\" href=\"{{ data.node.url }}\">{{ data.node.title }}</a>
                    {% endblock %}

                    {% block externalUrl %}
                        <a class=\"{{ component.renderClass('link', modifiers) }} {{ additionalClass }}\" href=\"{{ data.node.url }}\" target=\"_blank\">{{ data.node.title }}</a>
                    {% endblock %}

                    {% block other %}
                        {{ data.node.title }}
                    {% endblock %}
                {% endembed %}
            {% else %}
                {% set additionalClass = node.cssClass ?? '' %}

                {% if node.url %}
                    <li><a class=\"{{ component.renderClass('link', modifiers) }} {{ additionalClass }}\" href=\"{{ node.url }}\">{{ node.title }}</a></li>
                {% else %}
                    <li><span class=\"{{ component.renderClass('text', modifiers) }} {{ additionalClass }}\">{{ node.title }}</span></li>
                {% endif %}
            {% endif %}
        {% endfor %}
    </ul>
{% endblock %}


", "@ShopUi/components/molecules/navigation-list/navigation-list.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-list/navigation-list.twig");
    }
}
