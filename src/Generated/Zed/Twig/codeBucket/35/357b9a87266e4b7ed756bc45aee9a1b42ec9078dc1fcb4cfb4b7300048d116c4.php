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

/* @CmsBlockGui/_layout/layout.twig */
class __TwigTemplate_b15e992551846d9ec9bd2573d25ca4d606691ebf60398d8296e3dbb9a96f5353 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'footer_js' => [$this, 'block_footer_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@CmsBlockGui/_layout/layout.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 5
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-cms-block-gui-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@CmsBlockGui/_layout/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-cms-block-gui-main.js') }}\"></script>
{% endblock %}
", "@CmsBlockGui/_layout/layout.twig", "/data/vendor/spryker/cms-block-gui/src/Spryker/Zed/CmsBlockGui/Presentation//_layout/layout.twig");
    }
}
