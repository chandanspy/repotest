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

/* @NavigationGui/Index/_partials/navigation-tree-form-container.twig */
class __TwigTemplate_8b90c221c08acce50591d032ebc1d7a739a2c01a17db9d8ea3d63fcaa5f8b79c extends Template
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
        $this->loadTemplate("@NavigationGui/_partials/progressbar.twig", "@NavigationGui/Index/_partials/navigation-tree-form-container.twig", 1)->display(twig_array_merge($context, ["idProgressbar" => "navigation-node-form-loader"]));
        // line 2
        echo "
<iframe id=\"navigation-node-form-iframe\" name=\"navigation-node-form-iframe\" class=\"hidden\" frameborder=\"0\" width=\"100%\"></iframe>
";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Index/_partials/navigation-tree-form-container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@NavigationGui/_partials/progressbar.twig' with {idProgressbar: 'navigation-node-form-loader'} %}

<iframe id=\"navigation-node-form-iframe\" name=\"navigation-node-form-iframe\" class=\"hidden\" frameborder=\"0\" width=\"100%\"></iframe>
", "@NavigationGui/Index/_partials/navigation-tree-form-container.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Index/_partials/navigation-tree-form-container.twig");
    }
}
