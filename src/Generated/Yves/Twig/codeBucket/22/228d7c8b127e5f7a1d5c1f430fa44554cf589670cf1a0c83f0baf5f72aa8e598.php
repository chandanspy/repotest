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

/* @ShopUi/components/molecules/jumbotron/jumbotron.twig */
class __TwigTemplate_16b53fae9a82a64f42c57feed9e7197db444358c381a371846f6869f89b4a9db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'contentPositionClass' => [$this, 'block_contentPositionClass'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/molecules/jumbotron/jumbotron.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "jumbotron", "tag" => "section"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["imageUrl" => "", "link" => "", "content" => "", "btnTitle" => "", "headline" => "", "subHeadline" => ""], $context['data']);        // line 18
        $context["backgroundImage"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "imageUrl", [], "any", false, false, false, 18))) ? (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "imageUrl", [], "any", false, false, false, 18))) : ((("background-image: url(" . twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "imageUrl", [], "any", false, false, false, 18)) . "); ")));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <div class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21) . "__container"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 21, $this->source); })())], 21, $context, $this->getSourceContext());
        echo " grid grid--left ";
        $this->displayBlock('contentPositionClass', $context, $blocks);
        echo "\" style=\"";
        echo twig_escape_filter($this->env, (isset($context["backgroundImage"]) || array_key_exists("backgroundImage", $context) ? $context["backgroundImage"] : (function () { throw new RuntimeError('Variable "backgroundImage" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\">
        <div class=\"col col--sm-12 spacing-y spacing-y--bigger\">
            ";
        // line 23
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "content", [], "any", false, false, false, 23))) {
            // line 24
            echo "                ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "content", [], "any", false, false, false, 24);
            echo "
            ";
        } else {
            // line 26
            echo "                <h1 class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "__title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "headline", [], "any", false, false, false, 26), "html", null, true);
            echo "</h1>
                <h2 class=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "__text title title--h4\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "subHeadline", [], "any", false, false, false, 27), "html", null, true);
            echo "</h2>
            ";
        }
        // line 29
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "btnTitle", [], "any", false, false, false, 29)) {
            // line 30
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "link", [], "any", false, false, false, 30)), "html", null, true);
            echo "\" class=\"button button--big button--alternative\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "btnTitle", [], "any", false, false, false, 30)), "html", null, true);
            echo "</a>
            ";
        }
        // line 32
        echo "        </div>
    </div>
";
    }

    // line 21
    public function block_contentPositionClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "grid--middle";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/molecules/jumbotron/jumbotron.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 21,  100 => 32,  92 => 30,  89 => 29,  82 => 27,  75 => 26,  69 => 24,  67 => 23,  57 => 21,  53 => 20,  49 => 1,  47 => 18,  46 => 9,  45 => 4,  43 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'jumbotron',
    tag: 'section',
} %}

{% define data = {
    imageUrl: '',
    link: '',
    content: '',
    btnTitle: '',
    headline: '',
    subHeadline: '',
} %}

{% set backgroundImage = data.imageUrl is empty ?: 'background-image: url(' ~ data.imageUrl ~ '); ' %}

{% block body %}
    <div class=\"{{ component.renderClass(config.name ~ '__container', modifiers) }} grid grid--left {% block contentPositionClass %}grid--middle{% endblock %}\" style=\"{{backgroundImage}}\">
        <div class=\"col col--sm-12 spacing-y spacing-y--bigger\">
            {% if data.content is not empty %}
                {{ data.content | raw }}
            {% else %}
                <h1 class=\"{{ config.name }}__title\">{{ data.headline }}</h1>
                <h2 class=\"{{ config.name }}__text title title--h4\">{{ data.subHeadline }}</h2>
            {% endif %}
            {% if data.btnTitle %}
                <a href=\"{{ data.link | trans }}\" class=\"button button--big button--alternative\">{{ data.btnTitle | trans }}</a>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "@ShopUi/components/molecules/jumbotron/jumbotron.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/molecules/jumbotron/jumbotron.twig");
    }
}
