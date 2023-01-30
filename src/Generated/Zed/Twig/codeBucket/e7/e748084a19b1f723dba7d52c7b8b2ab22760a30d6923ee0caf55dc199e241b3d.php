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

/* @ProductManagement/Product/_partials/variant-tab-editing.twig */
class __TwigTemplate_078dc4aec1cbc61aa4cef5e3a465df73417282ce1039c8bcc2e5d6f1cde14e8e extends Template
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
        echo "<div class=\"well\">
    ";
        // line 2
        ob_start();
        // line 3
        echo "        <h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product variants"), "html", null, true);
        echo "</h3>
        <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Below are the product variants listed. Each variant may be edited independent from the others."), "html", null, true);
        echo "</p>
        <p><i>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note: Deactivated product variants are not available in the shop anymore."), "html", null, true);
        echo "</i></p>
    ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_3_);
        // line 7
        echo "</div>

";
        // line 9
        echo (isset($context["variantTable"]) || array_key_exists("variantTable", $context) ? $context["variantTable"] : (function () { throw new RuntimeError('Variable "variantTable" does not exist.', 9, $this->source); })());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/variant-tab-editing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  58 => 7,  56 => 2,  51 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'Product variants' | trans }}</h3>
        <p>{{ 'Below are the product variants listed. Each variant may be edited independent from the others.' | trans }}</p>
        <p><i>{{ 'Note: Deactivated product variants are not available in the shop anymore.' | trans }}</i></p>
    {% endapply %}
</div>

{{ variantTable | raw }}
", "@ProductManagement/Product/_partials/variant-tab-editing.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/variant-tab-editing.twig");
    }
}
