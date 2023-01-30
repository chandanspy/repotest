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

/* @ShopUi/components/atoms/overlay-block/overlay-block.twig */
class __TwigTemplate_0fabc358c3a4c98b748a9da667d44e432fe86775caba670e30261447d9674605 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'class' => [$this, 'block_class'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/atoms/overlay-block/overlay-block.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "overlay-block", "tag" => "overlay-block"], $context['config']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $this->displayParentBlock("class", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "jsName", [], "any", false, false, false, 9), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/atoms/overlay-block/overlay-block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  47 => 8,  43 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'overlay-block',
    tag: 'overlay-block'
} %}

{%- block class -%}
    {{parent()}} {{ config.jsName }}
{%- endblock -%}

", "@ShopUi/components/atoms/overlay-block/overlay-block.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/atoms/overlay-block/overlay-block.twig");
    }
}
