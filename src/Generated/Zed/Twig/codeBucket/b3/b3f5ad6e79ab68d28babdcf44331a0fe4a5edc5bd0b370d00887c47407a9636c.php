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

/* @FileManagerGui/DirectoriesTree/tree.twig */
class __TwigTemplate_9fc1a7f81708ece23d209968dcf730a4d7dc8add76a43d2f794349cf9fe29be3 extends Template
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
    <li id=\"file-directory-tree-node-0\"
        class=\"jstree-open\"
        data-jstree='{\"type\":\"navigation\"}'>
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File Directories Tree"), "html", null, true);
        echo "
        ";
        // line 6
        $this->loadTemplate("@FileManagerGui/DirectoriesTree/_partials/nodes.twig", "@FileManagerGui/DirectoriesTree/tree.twig", 6)->display(twig_array_merge($context, ["nodes" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["fileDirectoryTree"]) || array_key_exists("fileDirectoryTree", $context) ? $context["fileDirectoryTree"] : (function () { throw new RuntimeError('Variable "fileDirectoryTree" does not exist.', 7, $this->source); })()), "nodes", [], "any", false, false, false, 7)]));
        // line 9
        echo "    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/DirectoriesTree/tree.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  48 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    <li id=\"file-directory-tree-node-0\"
        class=\"jstree-open\"
        data-jstree='{\"type\":\"navigation\"}'>
        {{ 'File Directories Tree' | trans }}
        {% include '@FileManagerGui/DirectoriesTree/_partials/nodes.twig' with {
            nodes: fileDirectoryTree.nodes
        } %}
    </li>
</ul>
", "@FileManagerGui/DirectoriesTree/tree.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//DirectoriesTree/tree.twig");
    }
}
