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

/* @ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig */
class __TwigTemplate_0e5b0e5e670589f1dc0d77c9bca117a609b1b9a3cabe17247ba74f60336e1c08 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'class' => [$this, 'block_class'],
            'body' => [$this, 'block_body'],
            'mobileTrigger' => [$this, 'block_mobileTrigger'],
            'url' => [$this, 'block_url'],
            'link' => [$this, 'block_link'],
            'externalUrl' => [$this, 'block_externalUrl'],
            'other' => [$this, 'block_other'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["node"]), "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-multilevel-node", "tag" => "li"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["levelMenu" => 1, "parentJsName" => ""], $context['data']);        // line 13
        $context["cssClass"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "node", [], "any", false, false, false, 13), "cssClass", [], "any", false, false, false, 13))) ? ("") : ((" " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "node", [], "any", false, false, false, 13), "cssClass", [], "any", false, false, false, 13))));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        $this->displayParentBlock("class", $context, $blocks);
        echo twig_escape_filter($this->env, (isset($context["cssClass"]) || array_key_exists("cssClass", $context) ? $context["cssClass"] : (function () { throw new RuntimeError('Variable "cssClass" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "parentJsName", [], "any", false, false, false, 16), "html", null, true);
        echo "__trigger ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "parentJsName", [], "any", false, false, false, 16), "html", null, true);
        echo "__item
";
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 22
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "node", [], "any", false, false, false, 22), "children", [], "any", false, false, false, 22)), 0))) {
            // line 23
            echo "        <div class=\"menu-wrapper menu-wrapper--lvl-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "levelMenu", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "parentJsName", [], "any", false, false, false, 23), "html", null, true);
            echo "__wrapper is-hidden-sm-lg\">
            <ul class=\"menu menu--lvl-";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "levelMenu", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "node", [], "any", false, false, false, 25), "children", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["childNode"]) {
                // line 26
                echo "                    ";
                $context["hasChildren"] = (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childNode"], "children", [], "any", false, false, false, 26)), 0));
                // line 27
                echo "
                    ";
                // line 28
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["navigation-multilevel-node"]), "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig", 28)->display(twig_to_array(["class" => (("menu__item menu__item--lvl-" . twig_get_attribute($this->env, $this->source,                 // line 29
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "levelMenu", [], "any", false, false, false, 29)) . (((isset($context["hasChildren"]) || array_key_exists("hasChildren", $context) ? $context["hasChildren"] : (function () { throw new RuntimeError('Variable "hasChildren" does not exist.', 29, $this->source); })())) ? (" menu__item--has-children-list") : (""))), "data" => ["node" =>                 // line 31
$context["childNode"], "levelMenu" => (twig_get_attribute($this->env, $this->source,                 // line 32
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "levelMenu", [], "any", false, false, false, 32) + 1), "parentJsName" => twig_get_attribute($this->env, $this->source,                 // line 33
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "parentJsName", [], "any", false, false, false, 33)]]));
                // line 36
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childNode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </ul>
        </div>
    ";
        }
    }

    // line 42
    public function block_mobileTrigger($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "   ";
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "node", [], "any", false, false, false, 43), "children", [], "any", false, false, false, 43)), 0))) {
            // line 44
            echo "       <button class=\"menu__trigger-button menu__trigger-button--lvl-";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })()), "levelMenu", [], "any", false, false, false, 44) - 1), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })()), "parentJsName", [], "any", false, false, false, 44), "html", null, true);
            echo "__touch-trigger\" data-toggle-target=\".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })()), "parentJsName", [], "any", false, false, false, 44), "html", null, true);
            echo "__wrapper\" data-class-to-toggle=\"is-hidden-sm-lg\">
           ";
            // line 45
            $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig", 45)->display(twig_to_array(["modifiers" => [0 => "small"], "class" => "menu__trigger-button-icon", "data" => ["name" => "caret-down"]]));
            // line 52
            echo "       </button>
   ";
        }
    }

    // line 56
    public function block_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "    <span class=\"menu__trigger menu__trigger--lvl-";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), "levelMenu", [], "any", false, false, false, 57) - 1), "html", null, true);
        echo "\">
        <a class=\"menu__link menu__link--lvl-";
        // line 58
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "levelMenu", [], "any", false, false, false, 58) - 1), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "node", [], "any", false, false, false, 58), "url", [], "any", false, false, false, 58), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 58, $this->source); })()), "node", [], "any", false, false, false, 58), "title", [], "any", false, false, false, 58), "html", null, true);
        echo "</a>

        ";
        // line 60
        $this->displayBlock("mobileTrigger", $context, $blocks);
        echo "
    </span>
";
    }

    // line 64
    public function block_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "    <span class=\"menu__trigger menu__trigger--lvl-";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 65, $this->source); })()), "levelMenu", [], "any", false, false, false, 65) - 1), "html", null, true);
        echo "\">
        <a class=\"menu__link menu__link--lvl-";
        // line 66
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()), "levelMenu", [], "any", false, false, false, 66) - 1), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()), "node", [], "any", false, false, false, 66), "url", [], "any", false, false, false, 66), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()), "node", [], "any", false, false, false, 66), "title", [], "any", false, false, false, 66), "html", null, true);
        echo "</a>

        ";
        // line 68
        $this->displayBlock("mobileTrigger", $context, $blocks);
        echo "
    </span>
";
    }

    // line 72
    public function block_externalUrl($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    <span class=\"menu__trigger menu__trigger--lvl-";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 73, $this->source); })()), "levelMenu", [], "any", false, false, false, 73) - 1), "html", null, true);
        echo "\">
        <a class=\"menu__link menu__link--lvl-";
        // line 74
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 74, $this->source); })()), "levelMenu", [], "any", false, false, false, 74) - 1), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 74, $this->source); })()), "node", [], "any", false, false, false, 74), "url", [], "any", false, false, false, 74), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 74, $this->source); })()), "node", [], "any", false, false, false, 74), "title", [], "any", false, false, false, 74), "html", null, true);
        echo "</a>

        ";
        // line 76
        $this->displayBlock("mobileTrigger", $context, $blocks);
        echo "
    </span>
";
    }

    // line 80
    public function block_other($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        echo "    <span class=\"menu__trigger menu__trigger--lvl-";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 81, $this->source); })()), "levelMenu", [], "any", false, false, false, 81) - 1), "html", null, true);
        echo "\">
        <span class=\"menu__text menu__text--lvl-";
        // line 82
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 82, $this->source); })()), "levelMenu", [], "any", false, false, false, 82) - 1), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 82, $this->source); })()), "node", [], "any", false, false, false, 82), "title", [], "any", false, false, false, 82), "html", null, true);
        echo "</span>

        ";
        // line 84
        $this->displayBlock("mobileTrigger", $context, $blocks);
        echo "
    </span>
";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 84,  232 => 82,  227 => 81,  223 => 80,  216 => 76,  207 => 74,  202 => 73,  198 => 72,  191 => 68,  182 => 66,  177 => 65,  173 => 64,  166 => 60,  157 => 58,  152 => 57,  148 => 56,  142 => 52,  140 => 45,  131 => 44,  128 => 43,  124 => 42,  117 => 37,  111 => 36,  109 => 33,  108 => 32,  107 => 31,  106 => 29,  105 => 28,  102 => 27,  99 => 26,  95 => 25,  91 => 24,  84 => 23,  82 => 22,  76 => 20,  72 => 19,  60 => 16,  56 => 15,  52 => 1,  50 => 13,  49 => 8,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends atom('node') %}

{% define config = {
    name: 'navigation-multilevel-node',
    tag: 'li'
} %}

{% define data = {
    levelMenu: 1,
    parentJsName: ''
} %}

{% set cssClass = data.node.cssClass is empty ? '' : ' ' ~ data.node.cssClass %}

{% block class %}
    {{ parent() }}{{ cssClass }} {{ data.parentJsName }}__trigger {{ data.parentJsName }}__item
{% endblock %}

{% block body %}
    {{ parent() }}

    {% if(data.node.children | length > 0) %}
        <div class=\"menu-wrapper menu-wrapper--lvl-{{ data.levelMenu }} {{ data.parentJsName }}__wrapper is-hidden-sm-lg\">
            <ul class=\"menu menu--lvl-{{ data.levelMenu }}\">
                {% for childNode in data.node.children %}
                    {% set hasChildren = childNode.children | length > 0 %}

                    {% include molecule('navigation-multilevel-node') with {
                        class: 'menu__item menu__item--lvl-' ~ data.levelMenu ~ (hasChildren ? ' menu__item--has-children-list' : ''),
                        data: {
                            node: childNode,
                            levelMenu: data.levelMenu + 1,
                            parentJsName: data.parentJsName
                        }
                    } only %}
                {% endfor %}
            </ul>
        </div>
    {% endif %}
{% endblock %}

{% block mobileTrigger %}
   {% if(data.node.children | length > 0) %}
       <button class=\"menu__trigger-button menu__trigger-button--lvl-{{ data.levelMenu - 1 }} {{ data.parentJsName }}__touch-trigger\" data-toggle-target=\".{{ data.parentJsName }}__wrapper\" data-class-to-toggle=\"is-hidden-sm-lg\">
           {% include atom('icon') with {
               modifiers: ['small'],
               class: 'menu__trigger-button-icon',
               data: {
                   name: 'caret-down'
               }
           } only %}
       </button>
   {% endif %}
{% endblock %}

{% block url %}
    <span class=\"menu__trigger menu__trigger--lvl-{{ data.levelMenu - 1 }}\">
        <a class=\"menu__link menu__link--lvl-{{ data.levelMenu - 1 }}\" href=\"{{ data.node.url }}\">{{ data.node.title }}</a>

        {{block('mobileTrigger')}}
    </span>
{% endblock %}

{% block link %}
    <span class=\"menu__trigger menu__trigger--lvl-{{ data.levelMenu - 1 }}\">
        <a class=\"menu__link menu__link--lvl-{{ data.levelMenu - 1 }}\" href=\"{{ data.node.url }}\">{{ data.node.title }}</a>

        {{block('mobileTrigger')}}
    </span>
{% endblock %}

{% block externalUrl %}
    <span class=\"menu__trigger menu__trigger--lvl-{{ data.levelMenu - 1 }}\">
        <a class=\"menu__link menu__link--lvl-{{ data.levelMenu - 1 }}\" href=\"{{ data.node.url }}\" target=\"_blank\">{{ data.node.title }}</a>

        {{block('mobileTrigger')}}
    </span>
{% endblock %}

{% block other %}
    <span class=\"menu__trigger menu__trigger--lvl-{{ data.levelMenu - 1 }}\">
        <span class=\"menu__text menu__text--lvl-{{ data.levelMenu - 1 }}\">{{ data.node.title }}</span>

        {{block('mobileTrigger')}}
    </span>
{% endblock %}

", "@ShopUi/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-multilevel-node/navigation-multilevel-node.twig");
    }
}
