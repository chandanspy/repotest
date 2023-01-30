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

/* @@SprykerShop:CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig */
class __TwigTemplate_d282c46dfd7d83eda7620c2083cfcb546fcec8710d4c852a6fd032e9ceae86e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "product-cms-block"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["idProductAbstract" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })())], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        echo call_user_func_array($this->env->getFunction('spyCmsBlock')->getCallable(), [$this->env, $context, ["product" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 12)]]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  49 => 11,  45 => 1,  44 => 8,  43 => 7,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'product-cms-block'
} %}

{% define data = {
    idProductAbstract: required
} %}

{% block body %}
    {{ spyCmsBlock({ product: data.idProductAbstract }) }}
{% endblock %}
", "@@SprykerShop:CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig", "/data/vendor/spryker-shop/cms-block-widget/src/SprykerShop/Yves/CmsBlockWidget/Theme/default/components/molecules/product-cms-block/product-cms-block.twig");
    }
}
