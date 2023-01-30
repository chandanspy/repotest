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

/* @FileManagerGui/DirectoriesTree/_partials/nodes.twig */
class __TwigTemplate_375b2dbff89e566f8a79411a7782cb6803d0c8d4aa00ca7479293c0af5f4dba1 extends Template
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
            echo "        <li id=\"file-directory-node-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "fileDirectory", [], "any", false, false, false, 3), "idFileDirectory", [], "any", false, false, false, 3), "html", null, true);
            echo "\"
            class=\"jstree-open\"
            data-id-file-directory-node=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "fileDirectory", [], "any", false, false, false, 5), "idFileDirectory", [], "any", false, false, false, 5), "html", null, true);
            echo "\"
            data-id-parent-file-directory-node=\"";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "fileDirectory", [], "any", false, false, false, 6), "fkParentFileDirectory", [], "any", false, false, false, 6), "html", null, true);
            echo "\">

            ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["node"], "fileDirectory", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "
            ";
            // line 9
            $this->loadTemplate("@FileManagerGui/DirectoriesTree/_partials/nodes.twig", "@FileManagerGui/DirectoriesTree/_partials/nodes.twig", 9)->display(twig_array_merge($context, ["nodes" => twig_get_attribute($this->env, $this->source, $context["node"], "children", [], "any", false, false, false, 9)]));
            // line 10
            echo "
        </li>
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
        // line 13
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/DirectoriesTree/_partials/nodes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  78 => 10,  76 => 9,  72 => 8,  67 => 6,  63 => 5,  57 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    {% for node in nodes %}
        <li id=\"file-directory-node-{{ node.fileDirectory.idFileDirectory }}\"
            class=\"jstree-open\"
            data-id-file-directory-node=\"{{ node.fileDirectory.idFileDirectory }}\"
            data-id-parent-file-directory-node=\"{{ node.fileDirectory.fkParentFileDirectory }}\">

            {{ node.fileDirectory.name }}
            {% include '@FileManagerGui/DirectoriesTree/_partials/nodes.twig' with {nodes: node.children} %}

        </li>
    {% endfor %}
</ul>
", "@FileManagerGui/DirectoriesTree/_partials/nodes.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//DirectoriesTree/_partials/nodes.twig");
    }
}
