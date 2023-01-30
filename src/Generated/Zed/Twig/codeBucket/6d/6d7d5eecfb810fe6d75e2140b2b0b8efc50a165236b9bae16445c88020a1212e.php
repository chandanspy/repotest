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

/* @SalesOrderThresholdGui/_layout/layout.twig */
class __TwigTemplate_f453068547383adb048093a392d67d02270f2b5a92e28dfdf8e1d7432e448798 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'footer_js' => [$this, 'block_footer_js'],
            'head_css' => [$this, 'block_head_css'],
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
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@SalesOrderThresholdGui/_layout/layout.twig", 1);
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
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-sales-order-threshold-gui-main.js"]);
        echo "\"></script>
";
    }

    // line 8
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-sales-order-threshold-gui-main.css"]);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "@SalesOrderThresholdGui/_layout/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  66 => 9,  62 => 8,  56 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-sales-order-threshold-gui-main.js') }}\"></script>
{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-sales-order-threshold-gui-main.css') }}\">
{% endblock %}
", "@SalesOrderThresholdGui/_layout/layout.twig", "/data/vendor/spryker/sales-order-threshold-gui/src/Spryker/Zed/SalesOrderThresholdGui/Presentation/_layout/layout.twig");
    }
}
