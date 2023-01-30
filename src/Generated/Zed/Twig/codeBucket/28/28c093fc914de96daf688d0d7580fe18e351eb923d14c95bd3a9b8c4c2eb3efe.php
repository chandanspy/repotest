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

/* @ProductManagement/Product/_partials/tabs-footer.twig */
class __TwigTemplate_b7ad8c96dbeffac653af8ebfe64c1c962cf96cd038b2ab16ef3e284ae8c28224 extends Template
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
        echo "<input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["submit_title"]) || array_key_exists("submit_title", $context) ? $context["submit_title"] : (function () { throw new RuntimeError('Variable "submit_title" does not exist.', 1, $this->source); })())), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/tabs-footer.twig";
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
        return new Source("<input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ submit_title | trans }}\"/>
", "@ProductManagement/Product/_partials/tabs-footer.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/tabs-footer.twig");
    }
}
