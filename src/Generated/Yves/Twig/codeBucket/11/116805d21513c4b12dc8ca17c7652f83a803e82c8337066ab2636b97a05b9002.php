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

/* @ShopUi/components/molecules/privacy-navigation/privacy-navigation.twig */
class __TwigTemplate_93d07350bcb13ae95a4453e96e9050ce652e1f322dda85a10d270b67cf227f6a extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/privacy-navigation/privacy-navigation.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "privacy-navigation", "tag" => "ul"], $context['config']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    <li class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "__item\"><a class=\"link link--alt link--privacy\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.privacy_nav.imprint_url"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.privacy_nav.imprint"), "html", null, true);
        echo "</a></li>
    <li class=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "__item\"><a class=\"link link--alt link--privacy\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.privacy_nav.data_privacy_url"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.privacy_nav.data_privacy"), "html", null, true);
        echo "</a></li>
";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/privacy-navigation/privacy-navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  51 => 9,  47 => 8,  43 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'privacy-navigation',
    tag: 'ul'
} %}

{% block body %}
    <li class=\"{{ config.name }}__item\"><a class=\"link link--alt link--privacy\" href=\"{{ 'global.privacy_nav.imprint_url' | trans }}\">{{ 'global.privacy_nav.imprint' | trans }}</a></li>
    <li class=\"{{ config.name }}__item\"><a class=\"link link--alt link--privacy\" href=\"{{ 'global.privacy_nav.data_privacy_url' | trans }}\">{{ 'global.privacy_nav.data_privacy' | trans }}</a></li>
{% endblock %}
", "@ShopUi/components/molecules/privacy-navigation/privacy-navigation.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/privacy-navigation/privacy-navigation.twig");
    }
}
