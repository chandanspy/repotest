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

/* @ProductSetGui/_partials/tabs/footer.twig */
class __TwigTemplate_3fbc6615465100cb7e07d2ca06b1d2b44abe10c9e8bdccfab147b8dfee3fb392 extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/_partials/tabs/footer.twig";
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
        return new Source("<input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\"/>
", "@ProductSetGui/_partials/tabs/footer.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//_partials/tabs/footer.twig");
    }
}
