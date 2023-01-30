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

/* @CartPage/views/add-items-form/add-items-form.twig */
class __TwigTemplate_7cf0d1e0106feba8f56f4bb0ba0bd73df84ed72d595bc5e989fd4c935bbf8719 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'embeddedData' => [$this, 'block_embeddedData'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@CartPage/views/add-items-form/add-items-form.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["form" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "addToCartForm", [], "any", false, false, false, 4), "config" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "config", [], "any", false, false, false, 5), "data" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "data", [], "any", false, false, false, 6), "products" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 7, $this->source); })()), "products", [], "any", false, false, false, 7)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "form", [], "any", false, false, false, 11), 'form_start', ["class" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["data"] ?? null), "data", [], "any", false, true, false, 12), "formClass", [], "any", true, true, false, 12)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "data", [], "any", false, true, false, 12), "formClass", [], "any", false, false, false, 12))) : ("")), "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart/add-items"), "name" => "addItemsForm"]);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('embeddedData', $context, $blocks);
        // line 17
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "form", [], "any", false, false, false, 17), "_token", [], "any", false, false, false, 17), 'row', ["id" => ""]);
        echo "
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "form", [], "any", false, false, false, 18), 'form_end');
        echo "
";
    }

    // line 16
    public function block_embeddedData($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@CartPage/views/add-items-form/add-items-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  70 => 18,  65 => 17,  63 => 16,  60 => 15,  58 => 12,  56 => 11,  52 => 10,  48 => 1,  47 => 7,  46 => 6,  45 => 5,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    form: _widget.addToCartForm,
    config: _widget.config,
    data: _widget.data,
    products: _widget.products,
} %}

{% block body %}
    {{ form_start(data.form, {
        'class': data.data.formClass | default,
        'action': path('cart/add-items'),
        'name': 'addItemsForm',
    }) }}
        {% block embeddedData %}{% endblock %}
        {{ form_row(data.form._token, {id: ''}) }}
    {{ form_end(data.form) }}
{% endblock %}
", "@CartPage/views/add-items-form/add-items-form.twig", "/data/vendor/spryker-shop/cart-page/src/SprykerShop/Yves/CartPage/Theme/default/views/add-items-form/add-items-form.twig");
    }
}
