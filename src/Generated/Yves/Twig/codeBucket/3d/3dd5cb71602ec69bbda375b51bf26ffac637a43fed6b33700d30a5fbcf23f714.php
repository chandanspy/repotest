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

/* @@SprykerShop:HomePage/views/home/home.twig */
class __TwigTemplate_ba2a0128cc3ad8863715cb86ef36b03a17588c2cdd59d041fc714c9f4f9d9037 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageInfo' => [$this, 'block_pageInfo'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-critical-path"]), "@@SprykerShop:HomePage/views/home/home.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageInfo($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["jumbotron"]), "@@SprykerShop:HomePage/views/home/home.twig", 6)->display(twig_to_array(["class" => "box"]));
        // line 9
        echo "
    <div class=\"box spacing-top spacing-top--big\">
        ";
        // line 11
        echo call_user_func_array($this->env->getFunction('spyCmsBlock')->getCallable(), [$this->env, $context, ["name" => "Home Page"]]);
        // line 13
        echo "
    </div>

    <div class=\"box spacing-top spacing-top--big\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('spyCmsBlock')->getCallable(), [$this->env, $context, ["name" => "Teaser for home page"]]);
        // line 19
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:HomePage/views/home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  71 => 17,  65 => 13,  63 => 11,  59 => 9,  56 => 6,  52 => 5,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-critical-path') %}

{% block pageInfo %}{% endblock %}

{% block content %}
    {% include molecule('jumbotron') with {
        class: 'box'
    } only %}

    <div class=\"box spacing-top spacing-top--big\">
        {{ spyCmsBlock({
            name: 'Home Page'
        }) }}
    </div>

    <div class=\"box spacing-top spacing-top--big\">
        {{ spyCmsBlock({
            name: 'Teaser for home page'
        }) }}
    </div>
{% endblock %}
", "@@SprykerShop:HomePage/views/home/home.twig", "/data/vendor/spryker-shop/home-page/src/SprykerShop/Yves/HomePage/Theme/default/views/home/home.twig");
    }
}
