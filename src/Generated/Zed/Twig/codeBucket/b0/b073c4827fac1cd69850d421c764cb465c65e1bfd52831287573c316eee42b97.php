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

/* @FileManagerGui/_partials/progressbar.twig */
class __TwigTemplate_4ae4113bb949e27bc0211dc59dcc66f0aa5434fb1c569f99fa905d69824c0963 extends Template
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
        echo "<div class=\"progress hidden file-directory-progress-container ";
        echo twig_escape_filter($this->env, ((array_key_exists("fileDirectoryProgressbarClass", $context)) ? (_twig_default_filter((isset($context["fileDirectoryProgressbarClass"]) || array_key_exists("fileDirectoryProgressbarClass", $context) ? $context["fileDirectoryProgressbarClass"] : (function () { throw new RuntimeError('Variable "fileDirectoryProgressbarClass" does not exist.', 1, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["idProgressbar"]) || array_key_exists("idProgressbar", $context) ? $context["idProgressbar"] : (function () { throw new RuntimeError('Variable "idProgressbar" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"file-directory-progress progress-bar progress-bar-100 progress-bar-striped active\" role=\"progressbar\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/_partials/progressbar.twig";
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
        return new Source("<div class=\"progress hidden file-directory-progress-container {{ fileDirectoryProgressbarClass | default('') }}\" id=\"{{ idProgressbar }}\">
    <div class=\"file-directory-progress progress-bar progress-bar-100 progress-bar-striped active\" role=\"progressbar\"></div>
</div>
", "@FileManagerGui/_partials/progressbar.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//_partials/progressbar.twig");
    }
}
