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

/* @ProductAttributeGui/Attribute/edit.twig */
class __TwigTemplate_8cd2e155cb3cd168d790571e5cc932a091d6e7a75a3ecbf3e678c1126b6fe651 extends Template
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
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product Attributes");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductAttributeGui/Attribute/edit.twig", 1);
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
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-attribute-gui/attribute"]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to List")]);
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
        $this->loadTemplate("@ProductAttributeGui/Attribute/partials/attribute-form.twig", "@ProductAttributeGui/Attribute/edit.twig", 12)->display($context);
        // line 13
        echo "
";
    }

    // line 16
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 18
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-productattributegui-attribute.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/Attribute/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  88 => 17,  84 => 16,  79 => 13,  77 => 12,  74 => 11,  70 => 10,  63 => 7,  59 => 6,  52 => 4,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Product Attributes' | trans %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ backActionButton(url('/product-attribute-gui/attribute'), 'Back to List' | trans) }}
{% endblock %}

{% block content %}

    {% include '@ProductAttributeGui/Attribute/partials/attribute-form.twig' %}

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-productattributegui-attribute.js') }}\"></script>
{% endblock %}
", "@ProductAttributeGui/Attribute/edit.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//Attribute/edit.twig");
    }
}
