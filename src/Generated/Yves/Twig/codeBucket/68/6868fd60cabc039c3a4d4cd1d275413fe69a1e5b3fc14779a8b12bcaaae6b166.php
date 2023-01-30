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

/* @ProductDiscontinuedWidget/views/product-discontinued-note/product-discontinued-note.twig */
class __TwigTemplate_4f8aa342fa1ec790cf00f6cc03afb3a84c524e11b2231cf47ce13f257cad6952 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'isDiscontinued' => [$this, 'block_isDiscontinued'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ProductDiscontinuedWidget/views/product-discontinued-note/product-discontinued-note.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["discontinuedProduct" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "discontinuedProduct", [], "any", false, false, false, 4)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_isDiscontinued($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env,  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 8, $this->source); })()), "discontinuedProduct", [], "any", false, false, false, 8)), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "discontinuedProduct", [], "any", false, true, false, 12), "note", [], "any", true, true, false, 12) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "discontinuedProduct", [], "any", false, false, false, 12), "note", [], "any", false, false, false, 12)))) {
            // line 13
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["product-discontinued-note", "ProductDiscontinuedWidget"]), "@ProductDiscontinuedWidget/views/product-discontinued-note/product-discontinued-note.twig", 13)->display(twig_to_array(["data" => ["note" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "discontinuedProduct", [], "any", false, false, false, 15), "note", [], "any", false, false, false, 15)]]));
            // line 18
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@ProductDiscontinuedWidget/views/product-discontinued-note/product-discontinued-note.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  69 => 15,  67 => 13,  64 => 12,  60 => 11,  53 => 8,  49 => 7,  45 => 1,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    discontinuedProduct: _widget.discontinuedProduct
} %}

{% block isDiscontinued %}
    {{ _widget.discontinuedProduct is not empty }}
{% endblock %}

{% block body %}
    {% if data.discontinuedProduct.note is defined and data.discontinuedProduct.note is not empty %}
        {% include atom('product-discontinued-note', 'ProductDiscontinuedWidget') with {
            data: {
                note: data.discontinuedProduct.note
            }
        } only %}
    {% endif %}
{% endblock %}
", "@ProductDiscontinuedWidget/views/product-discontinued-note/product-discontinued-note.twig", "/data/src/Pyz/Yves/ProductDiscontinuedWidget/Theme/default/views/product-discontinued-note/product-discontinued-note.twig");
    }
}
