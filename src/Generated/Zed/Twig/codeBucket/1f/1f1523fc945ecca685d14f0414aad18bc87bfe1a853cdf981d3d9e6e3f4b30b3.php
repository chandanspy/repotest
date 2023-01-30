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

/* @ProductOption/Create/index.twig */
class __TwigTemplate_1ed389f857647142e34f421cf5ee23f1558e1b13256cbc96b38c264b2bf72785 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductOption/Create/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create product option"), "html", null, true);
    }

    // line 5
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/product-option/list/index", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of product options")]);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    ";
        // line 11
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["optionTabs"]) || array_key_exists("optionTabs", $context) ? $context["optionTabs"] : (function () { throw new RuntimeError('Variable "optionTabs" does not exist.', 11, $this->source); })()), ["generalForm" => (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 11, $this->source); })()), "availableLocales" => (isset($context["availableLocales"]) || array_key_exists("availableLocales", $context) ? $context["availableLocales"] : (function () { throw new RuntimeError('Variable "availableLocales" does not exist.', 11, $this->source); })()), "productsTable" => (isset($context["productsTable"]) || array_key_exists("productsTable", $context) ? $context["productsTable"] : (function () { throw new RuntimeError('Variable "productsTable" does not exist.', 11, $this->source); })())]]);
        echo "

";
    }

    // line 15
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-product-option-main.css"]);
        echo "\">
";
    }

    // line 20
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 22
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-product-option-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductOption/Create/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  101 => 21,  97 => 20,  91 => 17,  86 => 16,  82 => 15,  75 => 11,  72 => 10,  68 => 9,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block section_title 'Create product option' | trans %}

{% block action %}
    {{ backActionButton('/product-option/list/index', 'List of product options' | trans) }}
{% endblock %}

{% block content %}

    {{ tabs(optionTabs, {'generalForm' : generalForm, 'availableLocales' : availableLocales, 'productsTable' : productsTable}) }}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-product-option-main.css') }}\">
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-product-option-main.js') }}\"></script>
{% endblock %}

", "@ProductOption/Create/index.twig", "/data/vendor/spryker/product-option/src/Spryker/Zed/ProductOption/Presentation//Create/index.twig");
    }
}
