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

/* @ProductOption/Edit/index.twig */
class __TwigTemplate_e888cd46f5bcb595c543fcbe168533db396110633c189cadea2f61872b3774b2 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductOption/Edit/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit product option"), "html", null, true);
    }

    // line 5
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $context["redirectUrl"] = call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-option/edit/index/", ["id-product-option-group" => twig_get_attribute($this->env, $this->source, (isset($context["productOptionGroup"]) || array_key_exists("productOptionGroup", $context) ? $context["productOptionGroup"] : (function () { throw new RuntimeError('Variable "productOptionGroup" does not exist.', 6, $this->source); })()), "idProductOptionGroup", [], "any", false, false, false, 6)]]);
        // line 7
        echo "    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["productOptionGroup"]) || array_key_exists("productOptionGroup", $context) ? $context["productOptionGroup"] : (function () { throw new RuntimeError('Variable "productOptionGroup" does not exist.', 7, $this->source); })()), "active", [], "any", false, false, false, 7), true))) {
            // line 8
            echo "        ";
            $context["activeValue"] = "0";
            // line 9
            echo "        ";
            $context["formLabel"] = "Deactivate";
            // line 10
            echo "        ";
            $context["iconClass"] = "fa-trash";
            // line 11
            echo "        ";
            $context["buttonClass"] = "btn-remove";
            // line 12
            echo "    ";
        } else {
            // line 13
            echo "        ";
            $context["activeValue"] = "1";
            // line 14
            echo "        ";
            $context["formLabel"] = "Activate";
            // line 15
            echo "        ";
            $context["iconClass"] = "fa-caret-right";
            // line 16
            echo "        ";
            $context["buttonClass"] = "btn-view";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["toggleActiveForm"]) || array_key_exists("toggleActiveForm", $context) ? $context["toggleActiveForm"] : (function () { throw new RuntimeError('Variable "toggleActiveForm" does not exist.', 18, $this->source); })()), 'form_start', ["action" => call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-option/index/toggle-active", ["id-product-option-group" => twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["productOptionGroup"]) || array_key_exists("productOptionGroup", $context) ? $context["productOptionGroup"] : (function () { throw new RuntimeError('Variable "productOptionGroup" does not exist.', 19, $this->source); })()), "idProductOptionGroup", [], "any", false, false, false, 19)]]), "attr" => ["class" => "form-inline"]]);
        // line 21
        echo "
        <input type=\"hidden\" name=\"active\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["activeValue"]) || array_key_exists("activeValue", $context) ? $context["activeValue"] : (function () { throw new RuntimeError('Variable "activeValue" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"redirect-url\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["redirectUrl"]) || array_key_exists("redirectUrl", $context) ? $context["redirectUrl"] : (function () { throw new RuntimeError('Variable "redirectUrl" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"btn btn-sm btn-outline safe-submit ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["buttonClass"]) || array_key_exists("buttonClass", $context) ? $context["buttonClass"] : (function () { throw new RuntimeError('Variable "buttonClass" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\">
            <i class=\"fa ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\"></i>
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["formLabel"]) || array_key_exists("formLabel", $context) ? $context["formLabel"] : (function () { throw new RuntimeError('Variable "formLabel" does not exist.', 26, $this->source); })())), "html", null, true);
        echo "
        </button>
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["toggleActiveForm"]) || array_key_exists("toggleActiveForm", $context) ? $context["toggleActiveForm"] : (function () { throw new RuntimeError('Variable "toggleActiveForm" does not exist.', 28, $this->source); })()), 'form_end');
        echo "

    ";
        // line 30
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/product-option/list/index", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of product options")]);
        echo "

";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["optionTabs"]) || array_key_exists("optionTabs", $context) ? $context["optionTabs"] : (function () { throw new RuntimeError('Variable "optionTabs" does not exist.', 35, $this->source); })()), ["generalForm" =>         // line 36
(isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 36, $this->source); })()), "availableLocales" =>         // line 37
(isset($context["availableLocales"]) || array_key_exists("availableLocales", $context) ? $context["availableLocales"] : (function () { throw new RuntimeError('Variable "availableLocales" does not exist.', 37, $this->source); })()), "productsTable" =>         // line 38
(isset($context["productsTable"]) || array_key_exists("productsTable", $context) ? $context["productsTable"] : (function () { throw new RuntimeError('Variable "productsTable" does not exist.', 38, $this->source); })()), "productOptionsTable" =>         // line 39
(isset($context["productOptionsTable"]) || array_key_exists("productOptionsTable", $context) ? $context["productOptionsTable"] : (function () { throw new RuntimeError('Variable "productOptionsTable" does not exist.', 39, $this->source); })()), "productOptionGroup" =>         // line 40
(isset($context["productOptionGroup"]) || array_key_exists("productOptionGroup", $context) ? $context["productOptionGroup"] : (function () { throw new RuntimeError('Variable "productOptionGroup" does not exist.', 40, $this->source); })()), "availableLocales" =>         // line 41
(isset($context["availableLocales"]) || array_key_exists("availableLocales", $context) ? $context["availableLocales"] : (function () { throw new RuntimeError('Variable "availableLocales" does not exist.', 41, $this->source); })())]]);
        // line 42
        echo "

";
    }

    // line 46
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 48
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-product-option-main.css"]);
        echo "\">
";
    }

    // line 51
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 53
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-product-option-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductOption/Edit/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 53,  175 => 52,  171 => 51,  165 => 48,  160 => 47,  156 => 46,  150 => 42,  148 => 41,  147 => 40,  146 => 39,  145 => 38,  144 => 37,  143 => 36,  141 => 35,  137 => 34,  130 => 30,  125 => 28,  120 => 26,  116 => 25,  112 => 24,  108 => 23,  104 => 22,  101 => 21,  99 => 19,  97 => 18,  94 => 17,  91 => 16,  88 => 15,  85 => 14,  82 => 13,  79 => 12,  76 => 11,  73 => 10,  70 => 9,  67 => 8,  64 => 7,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block section_title 'Edit product option' | trans %}

{% block action %}
    {% set redirectUrl = url('/product-option/edit/index/', {'id-product-option-group' :productOptionGroup.idProductOptionGroup }) %}
    {% if productOptionGroup.active == true  %}
        {% set activeValue = '0' %}
        {% set formLabel = 'Deactivate' %}
        {% set iconClass = 'fa-trash' %}
        {% set buttonClass = 'btn-remove' %}
    {% else %}
        {% set activeValue = '1' %}
        {% set formLabel = 'Activate' %}
        {% set iconClass = 'fa-caret-right' %}
        {% set buttonClass = 'btn-view' %}
    {% endif %}
    {{ form_start(toggleActiveForm,{
        'action': url('/product-option/index/toggle-active', {'id-product-option-group' : productOptionGroup.idProductOptionGroup}),
        'attr': {'class': 'form-inline'}
    }) }}
        <input type=\"hidden\" name=\"active\" value=\"{{ activeValue }}\">
        <input type=\"hidden\" name=\"redirect-url\" value=\"{{ redirectUrl }}\">
        <button type=\"submit\" class=\"btn btn-sm btn-outline safe-submit {{ buttonClass }}\">
            <i class=\"fa {{ iconClass }}\"></i>
            {{ formLabel | trans }}
        </button>
    {{ form_end(toggleActiveForm) }}

    {{ backActionButton('/product-option/list/index', 'List of product options' | trans) }}

{% endblock %}

{% block content %}
    {{ tabs(optionTabs, {
        'generalForm' : generalForm,
        'availableLocales' : availableLocales,
        'productsTable' : productsTable,
        'productOptionsTable' : productOptionsTable,
        'productOptionGroup' : productOptionGroup,
        'availableLocales' : availableLocales})
    }}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-product-option-main.css') }}\">
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-product-option-main.js') }}\"></script>
{% endblock %}

", "@ProductOption/Edit/index.twig", "/data/vendor/spryker/product-option/src/Spryker/Zed/ProductOption/Presentation//Edit/index.twig");
    }
}
