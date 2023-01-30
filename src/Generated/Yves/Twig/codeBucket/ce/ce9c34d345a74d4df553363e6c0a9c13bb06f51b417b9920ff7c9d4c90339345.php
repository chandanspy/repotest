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

/* @ShopUi/components/molecules/breadcrumb/breadcrumb.twig */
class __TwigTemplate_dc880566523050a931915531030f614c60caf8d8df7b3f3e2f408d4c2866dd51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/breadcrumb/breadcrumb.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "breadcrumb", "tag" => "ul"], $context['config']);        // line 8
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["steps" => [], "startWithHome" => true], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "startWithHome", [], "any", false, false, false, 14)) {
            // line 15
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["breadcrumb-step"]), "@ShopUi/components/molecules/breadcrumb/breadcrumb.twig", 15)->display(twig_to_array(["data" => ["url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.home")]]));
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        $this->displayBlock('breadcrumbs', $context, $blocks);
    }

    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "steps", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 24
            echo "            ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["breadcrumb-step"]), "@ShopUi/components/molecules/breadcrumb/breadcrumb.twig", 24)->display(twig_to_array(["data" => ["url" => ((twig_get_attribute($this->env, $this->source,             // line 26
$context["step"], "url", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["step"], "url", [], "any", false, false, false, 26))) : ("")), "label" => ((twig_get_attribute($this->env, $this->source,             // line 27
$context["step"], "label", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["step"], "label", [], "any", false, false, false, 27))) : ("")), "itemProp" => ((twig_get_attribute($this->env, $this->source,             // line 28
$context["step"], "itemProp", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["step"], "itemProp", [], "any", false, false, false, 28))) : ("")), "withChevron" => ((twig_get_attribute($this->env, $this->source,             // line 29
$context["step"], "withChevron", [], "any", true, true, false, 29)) ? (twig_get_attribute($this->env, $this->source, $context["step"], "withChevron", [], "any", false, false, false, 29)) : (true)), "formName" => ((twig_get_attribute($this->env, $this->source,             // line 30
$context["step"], "formName", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["step"], "formName", [], "any", false, false, false, 30))) : ("")), "tokenFieldName" => ((twig_get_attribute($this->env, $this->source,             // line 31
$context["step"], "tokenFieldName", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["step"], "tokenFieldName", [], "any", false, false, false, 31))) : (""))]]));
            // line 34
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/breadcrumb/breadcrumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 35,  84 => 34,  82 => 31,  81 => 30,  80 => 29,  79 => 28,  78 => 27,  77 => 26,  75 => 24,  70 => 23,  62 => 22,  59 => 21,  56 => 15,  53 => 14,  49 => 13,  45 => 1,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'breadcrumb',
    tag: 'ul'
} %}

{% define data = {
    steps: [],
    startWithHome: true
} %}

{% block body %}
    {% if data.startWithHome %}
        {% include molecule('breadcrumb-step') with {
            data: {
                url: path('home'),
                label: 'global.home' | trans
            }
        } only %}
    {% endif %}
    {% block breadcrumbs %}
        {% for step in data.steps %}
            {% include molecule('breadcrumb-step') with {
                data: {
                    url: step.url | default,
                    label: step.label | default,
                    itemProp: step.itemProp | default,
                    withChevron: step.withChevron is defined ? step.withChevron : true,
                    formName: step.formName | default,
                    tokenFieldName: step.tokenFieldName | default,
                }
            } only %}
        {% endfor %}
    {% endblock %}
{% endblock %}
", "@ShopUi/components/molecules/breadcrumb/breadcrumb.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/components/molecules/breadcrumb/breadcrumb.twig");
    }
}
