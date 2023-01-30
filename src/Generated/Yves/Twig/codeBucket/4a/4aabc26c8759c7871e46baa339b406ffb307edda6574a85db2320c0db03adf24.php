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

/* @ShopUi/components/molecules/navigation-multilevel/navigation-multilevel.twig */
class __TwigTemplate_b9b127e48521a96c3639b14418a4d12598660264ee8d2d85f7a0293bfcda9a6c extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/navigation-multilevel/navigation-multilevel.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-multilevel", "tag" => "navigation-multilevel"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["nodes" => []], $context['data']);        // line 12
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["class-to-toggle" =>         // line 13
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 13, $this->source); })()), "available-breakpoint" => "0", "overlay-block-class-name" => "js-overlay-block", "reverse-class-name" => "menu-wrapper--reverse"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <ul class=\"menu menu--lvl-0\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "nodes", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 22
            echo "            ";
            $context["hasChildren"] = (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["node"], "children", [], "any", false, false, false, 22)), 0));
            // line 23
            echo "            
            ";
            // line 24
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["navigation-multilevel-node"]), "@ShopUi/components/molecules/navigation-multilevel/navigation-multilevel.twig", 24)->display(twig_to_array(["class" => ("menu__item menu__item--lvl-0 " . ((            // line 25
(isset($context["hasChildren"]) || array_key_exists("hasChildren", $context) ? $context["hasChildren"] : (function () { throw new RuntimeError('Variable "hasChildren" does not exist.', 25, $this->source); })())) ? ("menu__item--has-children-dropdown") : (""))), "data" => ["node" =>             // line 27
$context["node"], "parentJsName" => twig_get_attribute($this->env, $this->source,             // line 28
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "jsName", [], "any", false, false, false, 28)]]));
            // line 31
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/navigation-multilevel/navigation-multilevel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 32,  72 => 31,  70 => 28,  69 => 27,  68 => 25,  67 => 24,  64 => 23,  61 => 22,  57 => 21,  54 => 20,  50 => 19,  46 => 1,  45 => 13,  44 => 12,  43 => 8,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-multilevel',
    tag: 'navigation-multilevel',
} %}

{% define data = {
    nodes: [],
} %}

{% define attributes = {
    'class-to-toggle': required,
    'available-breakpoint': '0',
    'overlay-block-class-name': 'js-overlay-block',
    'reverse-class-name': 'menu-wrapper--reverse',
} %}

{% block body %}
    <ul class=\"menu menu--lvl-0\">
        {% for node in data.nodes %}
            {% set hasChildren = node.children | length > 0 %}
            
            {% include molecule('navigation-multilevel-node') with {
                class: 'menu__item menu__item--lvl-0 ' ~ (hasChildren ? 'menu__item--has-children-dropdown' : ''),
                data: {
                    node: node,
                    parentJsName: config.jsName,
                },
            } only %}
        {% endfor %}
    </ul>
{% endblock %}
", "@ShopUi/components/molecules/navigation-multilevel/navigation-multilevel.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/navigation-multilevel/navigation-multilevel.twig");
    }
}
