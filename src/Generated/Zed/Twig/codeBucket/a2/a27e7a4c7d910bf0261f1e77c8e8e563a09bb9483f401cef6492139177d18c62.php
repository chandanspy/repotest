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

/* @ProductAttributeGui/View/product-abstract.twig */
class __TwigTemplate_75727b968341486de0c098e39dcd6ff0bcc5536f76959b8a47021bb3aae6220a extends Template
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
        $context["widget_title"] = ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage Attributes for Product Abstract") . " [") . twig_get_attribute($this->env, $this->source, (isset($context["productAbstract"]) || array_key_exists("productAbstract", $context) ? $context["productAbstract"] : (function () { throw new RuntimeError('Variable "productAbstract" does not exist.', 3, $this->source); })()), "sku", [], "any", false, false, false, 3)) . "]");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ProductAttributeGui/View/product-abstract.twig", 1);
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
        echo call_user_func_array($this->env->getFunction('editActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), [("/product-management/edit?id-product-abstract=" . twig_get_attribute($this->env, $this->source, (isset($context["productAbstract"]) || array_key_exists("productAbstract", $context) ? $context["productAbstract"] : (function () { throw new RuntimeError('Variable "productAbstract" does not exist.', 7, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 7))]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Product Abstract")]);
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-management"]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Product List")]);
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
        $this->loadTemplate("@ProductAttributeGui/View/_partials/json-data.twig", "@ProductAttributeGui/View/product-abstract.twig", 13)->display(twig_array_merge($context, ["productAttributesJson" =>         // line 14
(isset($context["productAttributesJson"]) || array_key_exists("productAttributesJson", $context) ? $context["productAttributesJson"] : (function () { throw new RuntimeError('Variable "productAttributesJson" does not exist.', 14, $this->source); })()), "metaAttributesJson" =>         // line 15
(isset($context["metaAttributesJson"]) || array_key_exists("metaAttributesJson", $context) ? $context["metaAttributesJson"] : (function () { throw new RuntimeError('Variable "metaAttributesJson" does not exist.', 15, $this->source); })()), "localesJson" =>         // line 16
(isset($context["localesJson"]) || array_key_exists("localesJson", $context) ? $context["localesJson"] : (function () { throw new RuntimeError('Variable "localesJson" does not exist.', 16, $this->source); })())]));
        // line 18
        echo "
    ";
        // line 19
        $this->loadTemplate("@ProductAttributeGui/View/_partials/add-attribute-form.twig", "@ProductAttributeGui/View/product-abstract.twig", 19)->display(twig_array_merge($context, ["form" =>         // line 20
(isset($context["attributeKeyForm"]) || array_key_exists("attributeKeyForm", $context) ? $context["attributeKeyForm"] : (function () { throw new RuntimeError('Variable "attributeKeyForm" does not exist.', 20, $this->source); })())]));
        // line 22
        echo "
    ";
        // line 23
        $this->loadTemplate("@ProductAttributeGui/View/product-abstract.twig", "@ProductAttributeGui/View/product-abstract.twig", 23, "882794342")->display(twig_array_merge($context, ["widget_title" => "Attributes"]));
        // line 36
        echo "
    <input type=\"button\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" id=\"saveButton\" />

";
    }

    // line 41
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 43
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-productattributegui-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/View/product-abstract.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 43,  111 => 42,  107 => 41,  100 => 37,  97 => 36,  95 => 23,  92 => 22,  90 => 20,  89 => 19,  86 => 18,  84 => 16,  83 => 15,  82 => 14,  81 => 13,  78 => 12,  74 => 11,  68 => 8,  63 => 7,  59 => 6,  52 => 4,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Manage Attributes for Product Abstract' | trans ~ ' [' ~ productAbstract.sku  ~ ']' %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ editActionButton(url('/product-management/edit?id-product-abstract=' ~ productAbstract.idProductAbstract), 'Edit Product Abstract' | trans) }}
    {{ backActionButton(url('/product-management'), 'Back to Product List' | trans) }}
{% endblock %}

{% block content %}

    {% include '@ProductAttributeGui/View/_partials/json-data.twig' with {
        productAttributesJson: productAttributesJson,
        metaAttributesJson: metaAttributesJson,
        localesJson: localesJson
    } %}

    {% include '@ProductAttributeGui/View/_partials/add-attribute-form.twig' with {
        form: attributeKeyForm
    } %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Attributes' } %}
        {% block widget_content %}
            {% include '@ProductAttributeGui/View/_partials/attribute-table.twig' with {
                formActionUrl: '/product-attribute-gui/save/product-abstract',
                locales: locales,
                productAttributes: productAttributes,
                metaAttributes: metaAttributes,
                idProductAbstract: idProductAbstract,
                idProductConcrete: '',
                csrfForm: csrfForm
            } %}
        {% endblock %}
    {% endembed %}

    <input type=\"button\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" id=\"saveButton\" />

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-productattributegui-main.js') }}\"></script>
{% endblock %}
", "@ProductAttributeGui/View/product-abstract.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//View/product-abstract.twig");
    }
}


/* @ProductAttributeGui/View/product-abstract.twig */
class __TwigTemplate_75727b968341486de0c098e39dcd6ff0bcc5536f76959b8a47021bb3aae6220a___882794342 extends Template
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
        // line 23
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductAttributeGui/View/product-abstract.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "            ";
        $this->loadTemplate("@ProductAttributeGui/View/_partials/attribute-table.twig", "@ProductAttributeGui/View/product-abstract.twig", 25)->display(twig_array_merge($context, ["formActionUrl" => "/product-attribute-gui/save/product-abstract", "locales" =>         // line 27
(isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 27, $this->source); })()), "productAttributes" =>         // line 28
(isset($context["productAttributes"]) || array_key_exists("productAttributes", $context) ? $context["productAttributes"] : (function () { throw new RuntimeError('Variable "productAttributes" does not exist.', 28, $this->source); })()), "metaAttributes" =>         // line 29
(isset($context["metaAttributes"]) || array_key_exists("metaAttributes", $context) ? $context["metaAttributes"] : (function () { throw new RuntimeError('Variable "metaAttributes" does not exist.', 29, $this->source); })()), "idProductAbstract" =>         // line 30
(isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 30, $this->source); })()), "idProductConcrete" => "", "csrfForm" =>         // line 32
(isset($context["csrfForm"]) || array_key_exists("csrfForm", $context) ? $context["csrfForm"] : (function () { throw new RuntimeError('Variable "csrfForm" does not exist.', 32, $this->source); })())]));
        // line 34
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/View/product-abstract.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 34,  228 => 32,  227 => 30,  226 => 29,  225 => 28,  224 => 27,  222 => 25,  218 => 24,  207 => 23,  116 => 43,  111 => 42,  107 => 41,  100 => 37,  97 => 36,  95 => 23,  92 => 22,  90 => 20,  89 => 19,  86 => 18,  84 => 16,  83 => 15,  82 => 14,  81 => 13,  78 => 12,  74 => 11,  68 => 8,  63 => 7,  59 => 6,  52 => 4,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Manage Attributes for Product Abstract' | trans ~ ' [' ~ productAbstract.sku  ~ ']' %}
{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ editActionButton(url('/product-management/edit?id-product-abstract=' ~ productAbstract.idProductAbstract), 'Edit Product Abstract' | trans) }}
    {{ backActionButton(url('/product-management'), 'Back to Product List' | trans) }}
{% endblock %}

{% block content %}

    {% include '@ProductAttributeGui/View/_partials/json-data.twig' with {
        productAttributesJson: productAttributesJson,
        metaAttributesJson: metaAttributesJson,
        localesJson: localesJson
    } %}

    {% include '@ProductAttributeGui/View/_partials/add-attribute-form.twig' with {
        form: attributeKeyForm
    } %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Attributes' } %}
        {% block widget_content %}
            {% include '@ProductAttributeGui/View/_partials/attribute-table.twig' with {
                formActionUrl: '/product-attribute-gui/save/product-abstract',
                locales: locales,
                productAttributes: productAttributes,
                metaAttributes: metaAttributes,
                idProductAbstract: idProductAbstract,
                idProductConcrete: '',
                csrfForm: csrfForm
            } %}
        {% endblock %}
    {% endembed %}

    <input type=\"button\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" id=\"saveButton\" />

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-productattributegui-main.js') }}\"></script>
{% endblock %}
", "@ProductAttributeGui/View/product-abstract.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//View/product-abstract.twig");
    }
}
