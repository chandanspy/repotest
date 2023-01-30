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

/* @ProductRelationGui/_partial/tab-assign-products.twig */
class __TwigTemplate_2bd23b585201f18ce50be93f0c27cfca6e070d42f10cbbb3648f5457e9bf1696 extends Template
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
        echo "
<h4>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assign related products"), "html", null, true);
        echo "</h4>

<div id=\"builder\"></div>

<div>
    <div id=\"queryBuilderImport\" style=\"display: none\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productRelationForm"]) || array_key_exists("productRelationForm", $context) ? $context["productRelationForm"] : (function () { throw new RuntimeError('Variable "productRelationForm" does not exist.', 8, $this->source); })()), "querySet", [], "any", false, false, false, 8), 'row');
        echo "
    </div>
</div>

<hr/>

";
        // line 14
        echo (isset($context["productRuleTable"]) || array_key_exists("productRuleTable", $context) ? $context["productRuleTable"] : (function () { throw new RuntimeError('Variable "productRuleTable" does not exist.', 14, $this->source); })());
        echo "

";
    }

    public function getTemplateName()
    {
        return "@ProductRelationGui/_partial/tab-assign-products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<h4>{{ 'Assign related products' | trans }}</h4>

<div id=\"builder\"></div>

<div>
    <div id=\"queryBuilderImport\" style=\"display: none\">
        {{ form_row(productRelationForm.querySet) }}
    </div>
</div>

<hr/>

{{ productRuleTable | raw }}

", "@ProductRelationGui/_partial/tab-assign-products.twig", "/data/vendor/spryker/product-relation-gui/src/Spryker/Zed/ProductRelationGui/Presentation//_partial/tab-assign-products.twig");
    }
}
