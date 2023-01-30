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

/* @ProductOption/List/index.twig */
class __TwigTemplate_146923743925677b358f1e6bb61ef2d9c072295a924f0bc5f66c6bf9c12546d8 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductOption/List/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product option list"), "html", null, true);
    }

    // line 5
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-option/create/index"]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create product option")]);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("@ProductOption/_partial/filters.twig", "@ProductOption/List/index.twig", 10)->display($context);
        // line 11
        echo "
    ";
        // line 12
        $this->loadTemplate("@ProductOption/List/index.twig", "@ProductOption/List/index.twig", 12, "186156138")->display(twig_array_merge($context, ["widget_title" => "Product option list"]));
        // line 17
        echo "
";
    }

    // line 20
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-product-option-main.css"]);
        echo "\">
";
    }

    // line 25
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductOption/List/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  100 => 25,  94 => 22,  89 => 21,  85 => 20,  80 => 17,  78 => 12,  75 => 11,  72 => 10,  68 => 9,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block section_title 'Product option list' | trans %}

{% block action %}
    {{ createActionButton(url('/product-option/create/index'), 'Create product option' | trans) }}
{% endblock %}

{% block content %}
    {% include '@ProductOption/_partial/filters.twig' %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Product option list' } %}
        {% block widget_content %}
            {{ listTable | raw }}
        {% endblock %}
    {% endembed %}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-product-option-main.css') }}\">
{% endblock %}

{% block footer_js %}
    {{ parent() }}
{% endblock %}

", "@ProductOption/List/index.twig", "/data/vendor/spryker/product-option/src/Spryker/Zed/ProductOption/Presentation/List/index.twig");
    }
}


/* @ProductOption/List/index.twig */
class __TwigTemplate_146923743925677b358f1e6bb61ef2d9c072295a924f0bc5f66c6bf9c12546d8___186156138 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductOption/List/index.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        echo (isset($context["listTable"]) || array_key_exists("listTable", $context) ? $context["listTable"] : (function () { throw new RuntimeError('Variable "listTable" does not exist.', 14, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@ProductOption/List/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 14,  191 => 13,  180 => 12,  104 => 26,  100 => 25,  94 => 22,  89 => 21,  85 => 20,  80 => 17,  78 => 12,  75 => 11,  72 => 10,  68 => 9,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block section_title 'Product option list' | trans %}

{% block action %}
    {{ createActionButton(url('/product-option/create/index'), 'Create product option' | trans) }}
{% endblock %}

{% block content %}
    {% include '@ProductOption/_partial/filters.twig' %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Product option list' } %}
        {% block widget_content %}
            {{ listTable | raw }}
        {% endblock %}
    {% endembed %}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-product-option-main.css') }}\">
{% endblock %}

{% block footer_js %}
    {{ parent() }}
{% endblock %}

", "@ProductOption/List/index.twig", "/data/vendor/spryker/product-option/src/Spryker/Zed/ProductOption/Presentation/List/index.twig");
    }
}
