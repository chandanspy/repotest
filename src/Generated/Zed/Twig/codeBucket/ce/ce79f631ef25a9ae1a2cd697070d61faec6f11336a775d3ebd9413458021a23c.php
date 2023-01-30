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

/* @NavigationGui/Tree/index.twig */
class __TwigTemplate_77ef52c6a97d8d1d41d843c279b8b80c9f9100c27704cc29fe6f6e17d980c88c extends Template
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
        echo "<div id=\"navigation-tree\">
    <ul>
        <li id=\"navigation-node-0\"
            data-id-navigation=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["navigationTree"]) || array_key_exists("navigationTree", $context) ? $context["navigationTree"] : (function () { throw new RuntimeError('Variable "navigationTree" does not exist.', 4, $this->source); })()), "navigation", [], "any", false, false, false, 4), "idNavigation", [], "any", false, false, false, 4), "html", null, true);
        echo "\"
            class=\"jstree-open ";
        // line 5
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["navigationTree"]) || array_key_exists("navigationTree", $context) ? $context["navigationTree"] : (function () { throw new RuntimeError('Variable "navigationTree" does not exist.', 5, $this->source); })()), "navigation", [], "any", false, false, false, 5), "isActive", [], "any", false, false, false, 5)) {
            echo "node-inactive";
        }
        echo "\"
            data-jstree='{\"type\":\"navigation\"}'
        >
            ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["navigationTree"]) || array_key_exists("navigationTree", $context) ? $context["navigationTree"] : (function () { throw new RuntimeError('Variable "navigationTree" does not exist.', 8, $this->source); })()), "navigation", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "
            ";
        // line 9
        $this->loadTemplate("@NavigationGui/Tree/_partials/nodes.twig", "@NavigationGui/Tree/index.twig", 9)->display(twig_array_merge($context, ["nodes" => twig_get_attribute($this->env, $this->source, (isset($context["navigationTree"]) || array_key_exists("navigationTree", $context) ? $context["navigationTree"] : (function () { throw new RuntimeError('Variable "navigationTree" does not exist.', 9, $this->source); })()), "nodes", [], "any", false, false, false, 9)]));
        // line 10
        echo "        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Tree/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  58 => 9,  54 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"navigation-tree\">
    <ul>
        <li id=\"navigation-node-0\"
            data-id-navigation=\"{{ navigationTree.navigation.idNavigation }}\"
            class=\"jstree-open {% if not navigationTree.navigation.isActive %}node-inactive{% endif %}\"
            data-jstree='{\"type\":\"navigation\"}'
        >
            {{ navigationTree.navigation.name }}
            {% include '@NavigationGui/Tree/_partials/nodes.twig' with {nodes: navigationTree.nodes} %}
        </li>
    </ul>
</div>
", "@NavigationGui/Tree/index.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Tree/index.twig");
    }
}
