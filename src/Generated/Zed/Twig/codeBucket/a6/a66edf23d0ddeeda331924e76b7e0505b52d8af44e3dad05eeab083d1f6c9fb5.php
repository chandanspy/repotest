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

/* @ProductAttributeGui/View/_partials/json-data.twig */
class __TwigTemplate_718c97ab5967204f4a345a74f5668fa2e76548209cc1984012a5b32f1d5bcc9f extends Template
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
        echo "<div style=\"display: none\" id=\"productAttributesJson\">
    ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["productAttributesJson"]) || array_key_exists("productAttributesJson", $context) ? $context["productAttributesJson"] : (function () { throw new RuntimeError('Variable "productAttributesJson" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "
</div>
<div style=\"display: none\" id=\"metaAttributesJson\">
    ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["metaAttributesJson"]) || array_key_exists("metaAttributesJson", $context) ? $context["metaAttributesJson"] : (function () { throw new RuntimeError('Variable "metaAttributesJson" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "
</div>
<div style=\"display: none\" id=\"localesJson\">
    ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["localesJson"]) || array_key_exists("localesJson", $context) ? $context["localesJson"] : (function () { throw new RuntimeError('Variable "localesJson" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/View/_partials/json-data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"display: none\" id=\"productAttributesJson\">
    {{ productAttributesJson }}
</div>
<div style=\"display: none\" id=\"metaAttributesJson\">
    {{ metaAttributesJson }}
</div>
<div style=\"display: none\" id=\"localesJson\">
    {{ localesJson }}
</div>
", "@ProductAttributeGui/View/_partials/json-data.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//View/_partials/json-data.twig");
    }
}
