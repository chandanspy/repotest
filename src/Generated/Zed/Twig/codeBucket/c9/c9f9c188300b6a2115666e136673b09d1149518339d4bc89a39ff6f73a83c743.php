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

/* @NavigationGui/_partials/progressbar.twig */
class __TwigTemplate_03a89bada6f171abeec045634bc5d991ea584b014990eb4c1290ddc1195c26a6 extends Template
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
        echo "<div class=\"progress hidden navigation-progress-container ";
        echo twig_escape_filter($this->env, ((array_key_exists("navigationProgressbarClass", $context)) ? (_twig_default_filter((isset($context["navigationProgressbarClass"]) || array_key_exists("navigationProgressbarClass", $context) ? $context["navigationProgressbarClass"] : (function () { throw new RuntimeError('Variable "navigationProgressbarClass" does not exist.', 1, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["idProgressbar"]) || array_key_exists("idProgressbar", $context) ? $context["idProgressbar"] : (function () { throw new RuntimeError('Variable "idProgressbar" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"navigation-progress progress-bar progress-bar-100 progress-bar-striped active\" role=\"progressbar\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/_partials/progressbar.twig";
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
        return new Source("<div class=\"progress hidden navigation-progress-container {{ navigationProgressbarClass | default('') }}\" id=\"{{ idProgressbar }}\">
    <div class=\"navigation-progress progress-bar progress-bar-100 progress-bar-striped active\" role=\"progressbar\"></div>
</div>
", "@NavigationGui/_partials/progressbar.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//_partials/progressbar.twig");
    }
}
