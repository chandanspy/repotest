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

/* @ShopUi/components/molecules/panel-info-item/panel-info-item.twig */
class __TwigTemplate_be3fdf613acb03de1af80c0d771ef8bd0ab97400598399e16ae617e1d07ec684 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/panel-info-item/panel-info-item.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "panel-info-item"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["info" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })())], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/molecules/panel-info-item/panel-info-item.twig", 12)->display(twig_to_array(["modifiers" => [0 => "header-check"], "data" => ["name" => "check"]]));
        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "info", [], "any", false, false, false, 18)), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/panel-info-item/panel-info-item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  53 => 12,  49 => 11,  45 => 1,  44 => 8,  43 => 7,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'panel-info-item'
} %}

{% define data = {
    info: required
} %}

{% block body %}
    {% include atom('icon') with {
        modifiers: ['header-check'],
        data: {
            name: 'check'
        }
    } only %}
    {{ data.info | trans }}
{% endblock %}
", "@ShopUi/components/molecules/panel-info-item/panel-info-item.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/panel-info-item/panel-info-item.twig");
    }
}
