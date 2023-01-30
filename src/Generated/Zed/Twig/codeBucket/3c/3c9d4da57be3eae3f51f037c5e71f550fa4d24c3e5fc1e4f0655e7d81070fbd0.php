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

/* @ProductRelationGui/_partial/tabs-product-relation.twig */
class __TwigTemplate_73259f8224d85bf66c84fff3cf0a4102fd4531d4b423e42871aa7ca2c46c725a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form-product-relation"]]);
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 2, $this->source); })()), 'errors');
        echo "

";
        // line 4
        $context["tabData"] = ["productRelationForm" => (isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 4, $this->source); })()), "productRuleTable" => (isset($context["productRuleTable"]) || array_key_exists("productRuleTable", $context) ? $context["productRuleTable"] : (function () { throw new RuntimeError('Variable "productRuleTable" does not exist.', 4, $this->source); })())];
        // line 5
        echo "
";
        // line 6
        if (array_key_exists("productTable", $context)) {
            // line 7
            echo "    ";
            $context["tabData"] = twig_array_merge((isset($context["tabData"]) || array_key_exists("tabData", $context) ? $context["tabData"] : (function () { throw new RuntimeError('Variable "tabData" does not exist.', 7, $this->source); })()), ["productTable" => (isset($context["productTable"]) || array_key_exists("productTable", $context) ? $context["productTable"] : (function () { throw new RuntimeError('Variable "productTable" does not exist.', 7, $this->source); })())]);
        }
        // line 9
        echo "
";
        // line 10
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["productRelationTabs"]) || array_key_exists("productRelationTabs", $context) ? $context["productRelationTabs"] : (function () { throw new RuntimeError('Variable "productRelationTabs" does not exist.', 10, $this->source); })()), (isset($context["tabData"]) || array_key_exists("tabData", $context) ? $context["tabData"] : (function () { throw new RuntimeError('Variable "tabData" does not exist.', 10, $this->source); })())]);
        echo "

";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductRelationGui/_partial/tabs-product-relation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  60 => 10,  57 => 9,  53 => 7,  51 => 6,  48 => 5,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(productRelationForm, {attr: {id : 'form-product-relation'}}) }}
{{ form_errors(productRelationForm) }}

{% set tabData =  {'productRelationForm' : productRelationForm, 'productRuleTable' : productRuleTable} %}

{% if productTable is defined %}
    {%  set tabData = tabData|merge({'productTable' : productTable}) %}
{% endif %}

{{ tabs(productRelationTabs, tabData ) }}

{{ form_end(productRelationForm) }}
", "@ProductRelationGui/_partial/tabs-product-relation.twig", "/data/vendor/spryker/product-relation-gui/src/Spryker/Zed/ProductRelationGui/Presentation//_partial/tabs-product-relation.twig");
    }
}
