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

/* @cmsContentWidget/assets/index.twig */
class __TwigTemplate_af4c5dd2ba7f5391315fad8f7e7942b903fe808cab7b2c3ffd5f31d1d88b1b7e extends Template
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
        if ((isset($context["isEditorButtonEnabled"]) || array_key_exists("isEditorButtonEnabled", $context) ? $context["isEditorButtonEnabled"] : (function () { throw new RuntimeError('Variable "isEditorButtonEnabled" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<script>
    window.editorConfiguration = window.editorConfiguration || {};

    window.editorConfiguration.cmsContentWidgetConfigData = {
        dropdownItems: ";
            // line 6
            echo json_encode((isset($context["cmsContentWidgetFunctions"]) || array_key_exists("cmsContentWidgetFunctions", $context) ? $context["cmsContentWidgetFunctions"] : (function () { throw new RuntimeError('Variable "cmsContentWidgetFunctions" does not exist.', 6, $this->source); })()));
            echo ",
    };
</script>
<script src=\"";
            // line 9
            echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-cms-content-widget-main.js"]);
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "@cmsContentWidget/assets/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if isEditorButtonEnabled %}
<script>
    window.editorConfiguration = window.editorConfiguration || {};

    window.editorConfiguration.cmsContentWidgetConfigData = {
        dropdownItems: {{ cmsContentWidgetFunctions | json_encode | raw }},
    };
</script>
<script src=\"{{ assetsPath('js/spryker-zed-cms-content-widget-main.js') }}\"></script>
{%  endif %}
", "@cmsContentWidget/assets/index.twig", "/data/vendor/spryker/cms-content-widget/src/Spryker/Zed/CmsContentWidget/Presentation//Assets/index.twig");
    }
}
