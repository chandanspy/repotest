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

/* @ProductRelationGui/_partial/form-submit.twig */
class __TwigTemplate_7da9ac19d34baba90e5b6dd7b7dec75b72927992d1eba35e689386968ba050d3 extends Template
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
        echo "<input type=\"submit\" id=\"submit-relation\" class=\"btn btn-create safe-submit\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "@ProductRelationGui/_partial/form-submit.twig";
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
        return new Source("<input type=\"submit\" id=\"submit-relation\" class=\"btn btn-create safe-submit\" value=\"{{ 'Save' | trans }}\" />
", "@ProductRelationGui/_partial/form-submit.twig", "/data/vendor/spryker/product-relation-gui/src/Spryker/Zed/ProductRelationGui/Presentation//_partial/form-submit.twig");
    }
}
