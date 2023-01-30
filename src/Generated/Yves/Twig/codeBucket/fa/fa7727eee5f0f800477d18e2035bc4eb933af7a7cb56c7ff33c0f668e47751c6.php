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

/* @ContentNavigationWidget/views/navigation-header/navigation-header.twig */
class __TwigTemplate_f2672aca68220e8fa337f859b88011865c6b0e11f393c6eeefe143ba29b4005c extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ContentNavigationWidget/views/navigation-header/navigation-header.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["navigation" =>         // line 4
(isset($context["navigation"]) || array_key_exists("navigation", $context) ? $context["navigation"] : (function () { throw new RuntimeError('Variable "navigation" does not exist.', 4, $this->source); })())], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["navigation-multilevel"]), "@ContentNavigationWidget/views/navigation-header/navigation-header.twig", 8)->display(twig_to_array(["data" => ["nodes" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "navigation", [], "any", false, false, false, 10), "nodes", [], "any", false, false, false, 10), "menuInline" => true, "menuDropdown" => true], "attributes" => ["class-to-toggle" => "is-shown", "available-breakpoint" => "1024"]]));
    }

    public function getTemplateName()
    {
        return "@ContentNavigationWidget/views/navigation-header/navigation-header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    navigation: navigation,
} %}

{% block body %}
    {% include molecule('navigation-multilevel') with {
        data: {
            nodes: data.navigation.nodes,
            menuInline: true,
            menuDropdown: true,
        },
        attributes: {
            'class-to-toggle': 'is-shown',
            'available-breakpoint': '1024',
        },
    } only %}
{% endblock %}
", "@ContentNavigationWidget/views/navigation-header/navigation-header.twig", "/data/src/Pyz/Yves/ContentNavigationWidget/Theme/default/views/navigation-header/navigation-header.twig");
    }
}
