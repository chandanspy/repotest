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

/* @ProductOption/_template/_form-submit.twig */
class __TwigTemplate_e8bebeabac3a921875773575a49b3b2796c71b2da36d04cf39a6c7ddd1581d10 extends Template
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
        echo "<input type=\"submit\" id=\"create-product-option-button\" class=\"btn btn-create\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "@ProductOption/_template/_form-submit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<input type=\"submit\" id=\"create-product-option-button\" class=\"btn btn-create\" value=\"{{ 'Save' | trans }}\" />
", "@ProductOption/_template/_form-submit.twig", "/data/vendor/spryker/product-option/src/Spryker/Zed/ProductOption/Presentation//_template/_form-submit.twig");
    }
}
