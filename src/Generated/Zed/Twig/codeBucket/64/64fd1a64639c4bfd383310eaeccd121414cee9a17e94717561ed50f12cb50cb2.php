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

/* @ProductSetGui/Index/index.twig */
class __TwigTemplate_8d26f3ccb9c939bcecde3bc04d171be58344ba8187b9a916b3f4f3bb104bdd23 extends Template
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
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product Sets");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductSetGui/Index/index.twig", 1);
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
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/product-set-gui/create", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Product Set")]);
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('viewActionButton')->getCallable(), ["/product-set-gui/reorder", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reorder Product Sets")]);
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    ";
        // line 13
        $this->loadTemplate("@ProductSetGui/Index/index.twig", "@ProductSetGui/Index/index.twig", 13, "334207447")->display(twig_array_merge($context, ["widget_title" => "Product Sets"]));
        // line 20
        echo "
";
    }

    // line 23
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-productset-main.css"]);
        echo "\" />
";
    }

    // line 28
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 29,  104 => 28,  98 => 25,  93 => 24,  89 => 23,  84 => 20,  82 => 13,  79 => 12,  75 => 11,  69 => 8,  64 => 7,  60 => 6,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Product Sets' | trans %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ createActionButton('/product-set-gui/create', 'Create Product Set' | trans) }}
    {{ viewActionButton('/product-set-gui/reorder', 'Reorder Product Sets' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Product Sets' } %}

        {% block widget_content %}
            {{ productSetTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-productset-main.css') }}\" />
{% endblock %}

{% block footer_js %}
    {{ parent() }}
{% endblock %}
", "@ProductSetGui/Index/index.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//Index/index.twig");
    }
}


/* @ProductSetGui/Index/index.twig */
class __TwigTemplate_8d26f3ccb9c939bcecde3bc04d171be58344ba8187b9a916b3f4f3bb104bdd23___334207447 extends Template
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
        // line 13
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductSetGui/Index/index.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "            ";
        echo (isset($context["productSetTable"]) || array_key_exists("productSetTable", $context) ? $context["productSetTable"] : (function () { throw new RuntimeError('Variable "productSetTable" does not exist.', 16, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 16,  197 => 15,  186 => 13,  108 => 29,  104 => 28,  98 => 25,  93 => 24,  89 => 23,  84 => 20,  82 => 13,  79 => 12,  75 => 11,  69 => 8,  64 => 7,  60 => 6,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Product Sets' | trans %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ createActionButton('/product-set-gui/create', 'Create Product Set' | trans) }}
    {{ viewActionButton('/product-set-gui/reorder', 'Reorder Product Sets' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Product Sets' } %}

        {% block widget_content %}
            {{ productSetTable | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-productset-main.css') }}\" />
{% endblock %}

{% block footer_js %}
    {{ parent() }}
{% endblock %}
", "@ProductSetGui/Index/index.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//Index/index.twig");
    }
}
