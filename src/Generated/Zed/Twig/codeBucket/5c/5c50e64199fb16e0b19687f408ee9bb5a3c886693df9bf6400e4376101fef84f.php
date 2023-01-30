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

/* @ProductLabelGui/Index/index.twig */
class __TwigTemplate_a350e3369caac59cac9f396498913c1011b34355f66a4dc1ce72e03373576be3 extends Template
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
            'head_css' => [$this, 'block_head_css'],
            'footer_js' => [$this, 'block_footer_js'],
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
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product Labels");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductLabelGui/Index/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 4, $this->source); })()), "html", null, true);
    }

    // line 6
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/product-label-gui/create", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Product Label")]);
        echo "
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $this->loadTemplate("@ProductLabelGui/Index/index.twig", "@ProductLabelGui/Index/index.twig", 11, "1260517597")->display(twig_array_merge($context, ["widget_title" => "List of Product Labels"]));
    }

    // line 20
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
";
    }

    // line 24
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductLabelGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  91 => 24,  84 => 21,  80 => 20,  75 => 11,  71 => 10,  64 => 7,  60 => 6,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Product Labels' | trans %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ createActionButton('/product-label-gui/create', 'Create Product Label' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'List of Product Labels' } %}

        {% block widget_content %}
            {{ productLabelTable | raw }}
        {% endblock %}

    {% endembed %}
{% endblock %}

{% block head_css %}
    {{ parent() }}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
{% endblock %}

", "@ProductLabelGui/Index/index.twig", "/data/vendor/spryker/product-label-gui/src/Spryker/Zed/ProductLabelGui/Presentation//Index/index.twig");
    }
}


/* @ProductLabelGui/Index/index.twig */
class __TwigTemplate_a350e3369caac59cac9f396498913c1011b34355f66a4dc1ce72e03373576be3___1260517597 extends Template
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
        // line 11
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductLabelGui/Index/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        echo (isset($context["productLabelTable"]) || array_key_exists("productLabelTable", $context) ? $context["productLabelTable"] : (function () { throw new RuntimeError('Variable "productLabelTable" does not exist.', 14, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@ProductLabelGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 14,  181 => 13,  170 => 11,  95 => 25,  91 => 24,  84 => 21,  80 => 20,  75 => 11,  71 => 10,  64 => 7,  60 => 6,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Product Labels' | trans %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ createActionButton('/product-label-gui/create', 'Create Product Label' | trans) }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'List of Product Labels' } %}

        {% block widget_content %}
            {{ productLabelTable | raw }}
        {% endblock %}

    {% endembed %}
{% endblock %}

{% block head_css %}
    {{ parent() }}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
{% endblock %}

", "@ProductLabelGui/Index/index.twig", "/data/vendor/spryker/product-label-gui/src/Spryker/Zed/ProductLabelGui/Presentation//Index/index.twig");
    }
}
