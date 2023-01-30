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

/* @ProductAttributeGui/Attribute/translate.twig */
class __TwigTemplate_dabfa46df72ba5e0d6231d7cd0391fbe6a5333428ffb2fed0fbaf73d73518911 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductAttributeGui/Attribute/translate.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

        <div class=\"tabs-container\">
            <ul class=\"nav nav-tabs\">
                <li class=\"disabled\"><a>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1. General Information"), "html", null, true);
        echo "</a></li>
                <li class=\"active\"><a>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("2. Translations"), "html", null, true);
        echo "</a></li>
            </ul>

            <div class=\"tab-content\">
                <div id=\"tab_general\" class=\"tab-pane active\">
                    <div class=\"panel-body\">

                        ";
        // line 24
        $this->loadTemplate("@ProductAttributeGui/Attribute/partials/translate-form-content.twig", "@ProductAttributeGui/Attribute/translate.twig", 24)->display($context);
        // line 25
        echo "
                    </div>
                </div>
            </div>

            <div class=\"tabs-footer\">
                <a href=\"";
        // line 31
        echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-attribute-gui/attribute/edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "query", [], "any", false, false, false, 31), "get", [0 => "id"], "method", false, false, false, 31)]]);
        echo "\" class=\"btn btn-back\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        echo "</a>
                <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />
            </div>
        </div>

        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "

";
    }

    // line 40
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 42
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-productattributegui-attribute.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/Attribute/translate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 42,  132 => 41,  128 => 40,  121 => 36,  114 => 32,  108 => 31,  100 => 25,  98 => 24,  88 => 17,  84 => 16,  77 => 12,  74 => 11,  70 => 10,  63 => 7,  59 => 6,  52 => 4,  47 => 1,  45 => 3,  38 => 1,);
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

        {{ form_start(form) }}

        <div class=\"tabs-container\">
            <ul class=\"nav nav-tabs\">
                <li class=\"disabled\"><a>{{ '1. General Information' | trans }}</a></li>
                <li class=\"active\"><a>{{ '2. Translations' | trans }}</a></li>
            </ul>

            <div class=\"tab-content\">
                <div id=\"tab_general\" class=\"tab-pane active\">
                    <div class=\"panel-body\">

                        {% include '@ProductAttributeGui/Attribute/partials/translate-form-content.twig' %}

                    </div>
                </div>
            </div>

            <div class=\"tabs-footer\">
                <a href=\"{{ url('/product-attribute-gui/attribute/edit', {'id': app.request.query.get('id')}) }}\" class=\"btn btn-back\">{{ 'Back' | trans }}</a>
                <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            </div>
        </div>

        {{ form_end(form) }}

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-productattributegui-attribute.js') }}\"></script>
{% endblock %}
", "@ProductAttributeGui/Attribute/translate.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//Attribute/translate.twig");
    }
}
