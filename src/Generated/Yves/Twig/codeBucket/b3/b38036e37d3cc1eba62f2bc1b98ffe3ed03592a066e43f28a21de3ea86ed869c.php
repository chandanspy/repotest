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

/* @ShopUi/components/molecules/copyright-build-with/copyright-build-with.twig */
class __TwigTemplate_92e552b2c6c4826a78b691dd4292fbab970f4209e49c7d05c7375489757f11ef extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/copyright-build-with/copyright-build-with.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "copyright-build-with"], $context['config']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["privacy-navigation"]), "@ShopUi/components/molecules/copyright-build-with/copyright-build-with.twig", 8)->display([]);
        // line 9
        echo "
    <span class=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "__text\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.build_with"), "html", null, true);
        echo "</span>
    <a class=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "__link\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.build_with.link"), "html", null, true);
        echo "\" target=\"_blank\">
        ";
        // line 12
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/molecules/copyright-build-with/copyright-build-with.twig", 12)->display(twig_to_array(["modifiers" => [0 => "copyright"], "data" => ["name" => "build-with-logo"]]));
        // line 18
        echo "    </a>
";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/copyright-build-with/copyright-build-with.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  69 => 12,  63 => 11,  57 => 10,  54 => 9,  51 => 8,  47 => 7,  43 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'copyright-build-with'
} %}

{% block body %}
    {% include molecule('privacy-navigation') only %}

    <span class=\"{{ config.name }}__text\">{{ 'global.build_with' | trans }}</span>
    <a class=\"{{ config.name }}__link\" href=\"{{ 'global.build_with.link' | trans }}\" target=\"_blank\">
        {% include atom('icon') with {
            modifiers: ['copyright'],
            data: {
                name: 'build-with-logo'
            }
        } only %}
    </a>
{% endblock %}
", "@ShopUi/components/molecules/copyright-build-with/copyright-build-with.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/copyright-build-with/copyright-build-with.twig");
    }
}
