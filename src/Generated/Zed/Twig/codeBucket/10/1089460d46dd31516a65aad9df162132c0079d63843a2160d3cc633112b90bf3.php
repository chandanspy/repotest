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

/* @CategoryGui/_partials/back-button.twig */
class __TwigTemplate_06ad8d295d597154ba863c3393a5675ab51b24a8e65fbd447db9e37d2820615b extends Template
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
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/category-gui/list", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of categories")]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CategoryGui/_partials/back-button.twig";
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
        return new Source("{{ backActionButton('/category-gui/list', 'List of categories' | trans) }}
", "@CategoryGui/_partials/back-button.twig", "/data/vendor/spryker/category-gui/src/Spryker/Zed/CategoryGui/Presentation//_partials/back-button.twig");
    }
}
