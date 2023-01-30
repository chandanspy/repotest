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

/* @ProductListGui/_partials/_tabs/product-list-product-concrete-relation.twig */
class __TwigTemplate_45aa269082b4842562fcf80100abdbdbf51b619e211a8ab4ec56fecf594f5e51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productListProductConcreteRelationForm"]) || array_key_exists("productListProductConcreteRelationForm", $context) ? $context["productListProductConcreteRelationForm"] : (function () { throw new RuntimeError('Variable "productListProductConcreteRelationForm" does not exist.', 2, $this->source); })()), "products_upload", [], "any", false, false, false, 2), 'row');
        echo "
    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env,         // line 4
(isset($context["availableProductConcreteRelationTabs"]) || array_key_exists("availableProductConcreteRelationTabs", $context) ? $context["availableProductConcreteRelationTabs"] : (function () { throw new RuntimeError('Variable "availableProductConcreteRelationTabs" does not exist.', 4, $this->source); })()), ["availableProductConcreteTable" =>         // line 6
(isset($context["availableProductConcreteTable"]) || array_key_exists("availableProductConcreteTable", $context) ? $context["availableProductConcreteTable"] : (function () { throw new RuntimeError('Variable "availableProductConcreteTable" does not exist.', 6, $this->source); })())]]);
        // line 8
        echo "
    <hr/>
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env,         // line 11
(isset($context["assignedProductConcreteRelationTabs"]) || array_key_exists("assignedProductConcreteRelationTabs", $context) ? $context["assignedProductConcreteRelationTabs"] : (function () { throw new RuntimeError('Variable "assignedProductConcreteRelationTabs" does not exist.', 11, $this->source); })()), ["assignedProductConcreteTable" =>         // line 13
(isset($context["assignedProductConcreteTable"]) || array_key_exists("assignedProductConcreteTable", $context) ? $context["assignedProductConcreteTable"] : (function () { throw new RuntimeError('Variable "assignedProductConcreteTable" does not exist.', 13, $this->source); })())]]);
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductListGui/_partials/_tabs/product-list-product-concrete-relation.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  60 => 13,  59 => 11,  58 => 10,  54 => 8,  52 => 6,  51 => 4,  50 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    {{ form_row(productListProductConcreteRelationForm.products_upload) }}
    {{ tabs(
        availableProductConcreteRelationTabs,
        {
            'availableProductConcreteTable': availableProductConcreteTable
        }
    ) }}
    <hr/>
    {{ tabs(
        assignedProductConcreteRelationTabs,
        {
            'assignedProductConcreteTable': assignedProductConcreteTable
        }
    ) }}
{% endblock %}
", "@ProductListGui/_partials/_tabs/product-list-product-concrete-relation.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//_partials/_tabs/product-list-product-concrete-relation.twig");
    }
}
