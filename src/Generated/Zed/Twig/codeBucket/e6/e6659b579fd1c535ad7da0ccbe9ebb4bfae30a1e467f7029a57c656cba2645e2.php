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

/* @CategoryGui/_partials/tabs-footer.twig */
class __TwigTemplate_0674a9658074bc6dadf46817d9f8876d7c6a6fae013877fb9ecac2c55c98791c extends Template
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
        echo "<button class=\"btn btn-primary safe-submit\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "@CategoryGui/_partials/tabs-footer.twig";
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
        return new Source("<button class=\"btn btn-primary safe-submit\">{{ 'Save' | trans }}</button>
", "@CategoryGui/_partials/tabs-footer.twig", "/data/vendor/spryker/category-gui/src/Spryker/Zed/CategoryGui/Presentation//_partials/tabs-footer.twig");
    }
}
