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

/* @NavigationGui/Tree/_partials/nodes.twig */
class __TwigTemplate_e79cc526b0dd865ae4f8fd68a6aef5cf79dada9d1bbdb18126f2d630068ddc0d extends Template
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nodes"]) || array_key_exists("nodes", $context) ? $context["nodes"] : (function () { throw new RuntimeError('Variable "nodes" does not exist.', 2, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
            // line 3
            echo "        <li id=\"navigation-node-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "navigationNode", [], "any", false, false, false, 3), "idNavigationNode", [], "any", false, false, false, 3), "html", null, true);
            echo "\" data-id-navigation-node=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "navigationNode", [], "any", false, false, false, 3), "idNavigationNode", [], "any", false, false, false, 3), "html", null, true);
            echo "\"
            class=\"jstree-open ";
            // line 4
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "navigationNode", [], "any", false, false, false, 4), "isActive", [], "any", false, false, false, 4)) {
                echo "node-inactive";
            }
            echo "\"
            ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "navigationNode", [], "any", false, false, false, 5), "nodeType", [], "any", false, false, false, 5)) {
                echo "data-jstree='{\"type\":\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "navigationNode", [], "any", false, false, false, 5), "nodeType", [], "any", false, false, false, 5), "html", null, true);
                echo "\"}'";
            }
            // line 6
            echo "        >
            ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "navigationNode", [], "any", false, false, false, 7), "navigationNodeLocalizedAttributes", [], "any", false, false, false, 7), 0, [], "array", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
            echo "
            ";
            // line 8
            $this->loadTemplate("@NavigationGui/Tree/_partials/nodes.twig", "@NavigationGui/Tree/_partials/nodes.twig", 8)->display(twig_array_merge($context, ["nodes" => twig_get_attribute($this->env, $this->source, $context["node"], "children", [], "any", false, false, false, 8)]));
            // line 9
            echo "        </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Tree/_partials/nodes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 11,  85 => 9,  83 => 8,  79 => 7,  76 => 6,  70 => 5,  64 => 4,  57 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    {% for node in nodes %}
        <li id=\"navigation-node-{{ node.navigationNode.idNavigationNode }}\" data-id-navigation-node=\"{{ node.navigationNode.idNavigationNode }}\"
            class=\"jstree-open {% if not node.navigationNode.isActive %}node-inactive{% endif %}\"
            {% if node.navigationNode.nodeType %}data-jstree='{\"type\":\"{{ node.navigationNode.nodeType }}\"}'{% endif %}
        >
            {{ node.navigationNode.navigationNodeLocalizedAttributes[0].title }}
            {% include '@NavigationGui/Tree/_partials/nodes.twig' with {nodes: node.children} %}
        </li>
    {% endfor %}
</ul>
", "@NavigationGui/Tree/_partials/nodes.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Tree/_partials/nodes.twig");
    }
}
