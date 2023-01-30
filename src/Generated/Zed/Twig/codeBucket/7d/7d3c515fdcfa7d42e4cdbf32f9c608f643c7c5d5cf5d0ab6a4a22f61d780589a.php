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

/* @ProductAttributeGui/Attribute/index.twig */
class __TwigTemplate_808059bd83450099da2f138cf39dbe1fdcd557c6e02c94f4a6c7c953449a8ac3 extends Template
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
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product Attributes");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductAttributeGui/Attribute/index.twig", 1);
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
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/product-attribute-gui/attribute/create", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Product Attribute")]);
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
        $this->loadTemplate("@ProductAttributeGui/Attribute/index.twig", "@ProductAttributeGui/Attribute/index.twig", 12, "1178740503")->display(twig_array_merge($context, ["widget_title" => "Attribute list"]));
        // line 19
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/Attribute/index.twig";
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

{% set widget_title = 'Product Attributes' | trans %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ createActionButton('/product-attribute-gui/attribute/create', 'Create Product Attribute' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Attribute list' } %}

        {% block widget_content %}
            {{ attributeTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@ProductAttributeGui/Attribute/index.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//Attribute/index.twig");
    }
}


/* @ProductAttributeGui/Attribute/index.twig */
class __TwigTemplate_808059bd83450099da2f138cf39dbe1fdcd557c6e02c94f4a6c7c953449a8ac3___1178740503 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductAttributeGui/Attribute/index.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "            ";
        echo (isset($context["attributeTable"]) || array_key_exists("attributeTable", $context) ? $context["attributeTable"] : (function () { throw new RuntimeError('Variable "attributeTable" does not exist.', 15, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/Attribute/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 15,  155 => 14,  144 => 12,  78 => 19,  76 => 12,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  51 => 4,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Product Attributes' | trans %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ createActionButton('/product-attribute-gui/attribute/create', 'Create Product Attribute' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Attribute list' } %}

        {% block widget_content %}
            {{ attributeTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@ProductAttributeGui/Attribute/index.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//Attribute/index.twig");
    }
}
