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

/* @Cms/Redirect/index.twig */
class __TwigTemplate_a722a67bbde6ddd12a0de16bd4ef103eb162afb404a3c0bfe7a2bac2d89a25af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Cms/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Cms/Layout/layout.twig", "@Cms/Redirect/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/cms/redirect/add", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add CMS Redirect")]);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("@Cms/Redirect/index.twig", "@Cms/Redirect/index.twig", 9, "331909921")->display(twig_array_merge($context, ["widget_title" => "CMS Redirect"]));
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Cms/Redirect/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  65 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Cms/Layout/layout.twig' %}

{% block action %}
    {{ createActionButton('/cms/redirect/add', 'Add CMS Redirect' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'CMS Redirect' } %}

        {% block widget_content %}

            {{ redirects | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Cms/Redirect/index.twig", "/data/vendor/spryker/cms/src/Spryker/Zed/Cms/Presentation//Redirect/index.twig");
    }
}


/* @Cms/Redirect/index.twig */
class __TwigTemplate_a722a67bbde6ddd12a0de16bd4ef103eb162afb404a3c0bfe7a2bac2d89a25af___331909921 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Cms/Redirect/index.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
            ";
        // line 13
        echo (isset($context["redirects"]) || array_key_exists("redirects", $context) ? $context["redirects"] : (function () { throw new RuntimeError('Variable "redirects" does not exist.', 13, $this->source); })());
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@Cms/Redirect/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 13,  147 => 12,  143 => 11,  132 => 9,  67 => 18,  65 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Cms/Layout/layout.twig' %}

{% block action %}
    {{ createActionButton('/cms/redirect/add', 'Add CMS Redirect' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'CMS Redirect' } %}

        {% block widget_content %}

            {{ redirects | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Cms/Redirect/index.twig", "/data/vendor/spryker/cms/src/Spryker/Zed/Cms/Presentation//Redirect/index.twig");
    }
}
