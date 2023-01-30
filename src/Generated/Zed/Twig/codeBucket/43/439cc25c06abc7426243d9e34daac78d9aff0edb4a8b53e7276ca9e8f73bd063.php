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

/* @cmsSlotBlockGui/assets/index.twig */
class __TwigTemplate_e60ae4b54df6480a80cdfb0c5f6c264a52cdf79c95ceb47d3491e87fc77dd1e8 extends Template
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
        echo "<input type=\"hidden\" id=\"cms-slot-block-content-provider\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["cmsSlotBlockContentProvider"]) || array_key_exists("cmsSlotBlockContentProvider", $context) ? $context["cmsSlotBlockContentProvider"] : (function () { throw new RuntimeError('Variable "cmsSlotBlockContentProvider" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"/assets/css/spryker-zed-cms-slot-block-gui-main.css\">
<script src=\"/assets/js/spryker-zed-cms-slot-block-gui-main.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "@cmsSlotBlockGui/assets/index.twig";
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
        return new Source("<input type=\"hidden\" id=\"cms-slot-block-content-provider\" value=\"{{ cmsSlotBlockContentProvider }}\">
<link rel=\"stylesheet\" href=\"/assets/css/spryker-zed-cms-slot-block-gui-main.css\">
<script src=\"/assets/js/spryker-zed-cms-slot-block-gui-main.js\"></script>
", "@cmsSlotBlockGui/assets/index.twig", "/data/vendor/spryker/cms-slot-block-gui/src/Spryker/Zed/CmsSlotBlockGui/Presentation//Assets/index.twig");
    }
}
