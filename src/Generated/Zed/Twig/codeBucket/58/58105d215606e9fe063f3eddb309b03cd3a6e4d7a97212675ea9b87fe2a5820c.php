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

/* @CategoryGui/List/index.twig */
class __TwigTemplate_f9d578c74da9d8fe6b474793db0a93acc96cd9d5312fef5b5faca9107bb7554c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_title' => [$this, 'block_section_title'],
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["widget_title"] = "Category";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@CategoryGui/List/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 4, $this->source); })())), "html", null, true);
    }

    // line 6
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/category-gui/create", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Category")]);
        echo "
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    ";
        // line 12
        $this->loadTemplate("@CategoryGui/List/index.twig", "@CategoryGui/List/index.twig", 12, "660005411")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories")]));
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CategoryGui/List/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  76 => 12,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  51 => 4,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Category' %}
{% block section_title %}{{ widget_title | trans }}{% endblock %}

{% block action %}
    {{ createActionButton('/category-gui/create', 'Create Category' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Categories' | trans } %}

        {% block widget_content %}
            {{ categoryTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}

", "@CategoryGui/List/index.twig", "/data/vendor/spryker/category-gui/src/Spryker/Zed/CategoryGui/Presentation//List/index.twig");
    }
}


/* @CategoryGui/List/index.twig */
class __TwigTemplate_f9d578c74da9d8fe6b474793db0a93acc96cd9d5312fef5b5faca9107bb7554c___660005411 extends Template
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
        // line 12
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CategoryGui/List/index.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "            ";
        echo (isset($context["categoryTable"]) || array_key_exists("categoryTable", $context) ? $context["categoryTable"] : (function () { throw new RuntimeError('Variable "categoryTable" does not exist.', 15, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@CategoryGui/List/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 15,  156 => 14,  145 => 12,  78 => 19,  76 => 12,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  51 => 4,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Category' %}
{% block section_title %}{{ widget_title | trans }}{% endblock %}

{% block action %}
    {{ createActionButton('/category-gui/create', 'Create Category' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Categories' | trans } %}

        {% block widget_content %}
            {{ categoryTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}

", "@CategoryGui/List/index.twig", "/data/vendor/spryker/category-gui/src/Spryker/Zed/CategoryGui/Presentation//List/index.twig");
    }
}
