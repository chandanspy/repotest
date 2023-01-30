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

/* @CartPage/views/add-to-cart-form/add-to-cart-form.twig */
class __TwigTemplate_c09edac33cda784e279b987d57f77e4d60673ce4d01fbbe32d939e198794e2b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'form' => [$this, 'block_form'],
            'embeddedData' => [$this, 'block_embeddedData'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@CartPage/views/add-to-cart-form/add-to-cart-form.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["form" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "addToCartForm", [], "any", false, false, false, 4), "config" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "config", [], "any", false, false, false, 5), "product" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "product", [], "any", false, false, false, 6), "formNamePostfix" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 7, $this->source); })()), "formNamePostfix", [], "any", false, false, false, 7), "isDisabled" => twig_get_attribute($this->env, $this->source,         // line 8
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 8, $this->source); })()), "isAddToCartDisabled", [], "any", false, false, false, 8), "options" => twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 9, $this->source); })()), "quantityOptions", [], "any", false, false, false, 9)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $context["formClass"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "config", [], "any", false, false, false, 13), "jsName", [], "any", false, false, false, 13) . "__form-add-to-cart");
        // line 14
        echo "    ";
        $context["productSku"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "product", [], "any", false, false, false, 14), "sku", [], "any", false, false, false, 14);
        // line 15
        echo "    ";
        $context["formNamePostfix"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "formNamePostfix", [], "any", false, false, false, 15);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "form", [], "any", false, false, false, 18), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart/add", ["sku" =>         // line 19
(isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 19, $this->source); })())]), "name" => ((("addToCartForm_" .         // line 20
(isset($context["productSku"]) || array_key_exists("productSku", $context) ? $context["productSku"] : (function () { throw new RuntimeError('Variable "productSku" does not exist.', 20, $this->source); })())) . "-") . (isset($context["formNamePostfix"]) || array_key_exists("formNamePostfix", $context) ? $context["formNamePostfix"] : (function () { throw new RuntimeError('Variable "formNamePostfix" does not exist.', 20, $this->source); })())), "attr" => ["class" =>         // line 21
(isset($context["formClass"]) || array_key_exists("formClass", $context) ? $context["formClass"] : (function () { throw new RuntimeError('Variable "formClass" does not exist.', 21, $this->source); })())]]);
        // line 22
        echo "
            ";
        // line 23
        $this->displayBlock('embeddedData', $context, $blocks);
        // line 24
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "form", [], "any", false, false, false, 24), 'form_end');
        echo "
    ";
    }

    // line 23
    public function block_embeddedData($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@CartPage/views/add-to-cart-form/add-to-cart-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  89 => 24,  87 => 23,  84 => 22,  82 => 21,  81 => 20,  80 => 19,  78 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  55 => 12,  51 => 1,  50 => 9,  49 => 8,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    form: _widget.addToCartForm,
    config: _widget.config,
    product: _widget.product,
    formNamePostfix: _widget.formNamePostfix,
    isDisabled: _widget.isAddToCartDisabled,
    options: _widget.quantityOptions,
} %}

{% block body %}
    {% set formClass = data.config.jsName ~ '__form-add-to-cart' %}
    {% set productSku = data.product.sku %}
    {% set formNamePostfix = data.formNamePostfix %}

    {% block form %}
        {{ form_start(data.form, {
            'action': path('cart/add', {'sku': productSku}),
            'name': 'addToCartForm_' ~ productSku ~ '-' ~ formNamePostfix,
            attr: { class: formClass },
        }) }}
            {% block embeddedData %}{% endblock %}
        {{ form_end(data.form) }}
    {% endblock %}
{% endblock %}
", "@CartPage/views/add-to-cart-form/add-to-cart-form.twig", "/data/vendor/spryker-shop/cart-page/src/SprykerShop/Yves/CartPage/Theme/default/views/add-to-cart-form/add-to-cart-form.twig");
    }
}
