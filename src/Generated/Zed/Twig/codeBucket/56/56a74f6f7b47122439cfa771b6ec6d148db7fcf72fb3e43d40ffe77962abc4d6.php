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

/* @NavigationGui/Node/_partials/tree-reloader.twig */
class __TwigTemplate_ec36c66e5e854af368c01363db5f6d223516c364466615ccd2ea1332e944622b extends Template
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
        if ( !(null === (isset($context["idSelectedTreeNode"]) || array_key_exists("idSelectedTreeNode", $context) ? $context["idSelectedTreeNode"] : (function () { throw new RuntimeError('Variable "idSelectedTreeNode" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <div id=\"navigation-tree-reloader\" data-id-navigation=\"";
            echo twig_escape_filter($this->env, (isset($context["idNavigation"]) || array_key_exists("idNavigation", $context) ? $context["idNavigation"] : (function () { throw new RuntimeError('Variable "idNavigation" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\" data-id-selected-tree-node=\"";
            echo twig_escape_filter($this->env, (isset($context["idSelectedTreeNode"]) || array_key_exists("idSelectedTreeNode", $context) ? $context["idSelectedTreeNode"] : (function () { throw new RuntimeError('Variable "idSelectedTreeNode" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Node/_partials/tree-reloader.twig";
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
        return new Source("{% if idSelectedTreeNode is not null %}
    <div id=\"navigation-tree-reloader\" data-id-navigation=\"{{ idNavigation }}\" data-id-selected-tree-node=\"{{ idSelectedTreeNode }}\"></div>
{% endif %}
", "@NavigationGui/Node/_partials/tree-reloader.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Node/_partials/tree-reloader.twig");
    }
}
