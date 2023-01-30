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

/* @FileManagerGui/DirectoriesTree/index.twig */
class __TwigTemplate_0e29f0d5d0886631813a3a8b378a6916f3b613fbceb65075a04b70e00158b613 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_title' => [$this, 'block_section_title'],
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
            'head_css' => [$this, 'block_head_css'],
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
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@FileManagerGui/DirectoriesTree/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview of File Tree"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <a id=\"delete-directory-link\" class=\"btn btn-sm btn-outline btn-remove\"
       href=\"#\">
        <i class=\"fa fa-trash\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete Directory"), "html", null, true);
        echo "
    </a>

    ";
        // line 13
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/file-manager-gui/add-directory", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create File Directory")]);
        echo "
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div id=\"file-directory-tree\">
                ";
        // line 21
        $this->loadTemplate("@FileManagerGui/DirectoriesTree/tree.twig", "@FileManagerGui/DirectoriesTree/index.twig", 21)->display($context);
        // line 22
        echo "            </div>
            <div>
                <input type=\"button\" id=\"file-directory-tree-save-btn\" class=\"btn btn-primary pull-left m-r-sm\"
                       value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save order"), "html", null, true);
        echo "\" disabled=\"disabled\"/>
                ";
        // line 26
        $this->loadTemplate("@FileManagerGui/_partials/progressbar.twig", "@FileManagerGui/DirectoriesTree/index.twig", 26)->display(twig_array_merge($context, ["idProgressbar" => "file-directory-tree-update-loader", "fileDirectoryProgressbarClass" => "progress-inline"]));
        // line 30
        echo "            </div>
        </div>

        <div class=\"col-lg-6\">
            <div id=\"file-directory-files-list\">
            </div>
        </div>

        ";
        // line 38
        $this->loadTemplate("@FileManagerGui/DirectoriesTree/_partials/directory-deleting-confirmation-modal.twig", "@FileManagerGui/DirectoriesTree/index.twig", 38)->display($context);
        // line 39
        echo "    </div>

";
    }

    // line 43
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 45
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-file-directory.css"]);
        echo "\"/>
";
    }

    // line 48
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 50
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-file-directory.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/DirectoriesTree/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 50,  141 => 49,  137 => 48,  131 => 45,  126 => 44,  122 => 43,  116 => 39,  114 => 38,  104 => 30,  102 => 26,  98 => 25,  93 => 22,  91 => 21,  85 => 17,  81 => 16,  75 => 13,  69 => 10,  65 => 8,  61 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block section_title %}
    {{ 'Overview of File Tree' | trans }}
{% endblock %}

{% block action %}
    <a id=\"delete-directory-link\" class=\"btn btn-sm btn-outline btn-remove\"
       href=\"#\">
        <i class=\"fa fa-trash\"></i> {{ 'Delete Directory' | trans }}
    </a>

    {{ createActionButton('/file-manager-gui/add-directory', 'Create File Directory' | trans) }}
{% endblock %}

{% block content %}

    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div id=\"file-directory-tree\">
                {% include '@FileManagerGui/DirectoriesTree/tree.twig' %}
            </div>
            <div>
                <input type=\"button\" id=\"file-directory-tree-save-btn\" class=\"btn btn-primary pull-left m-r-sm\"
                       value=\"{{ 'Save order' | trans }}\" disabled=\"disabled\"/>
                {% include '@FileManagerGui/_partials/progressbar.twig' with {
                    idProgressbar: 'file-directory-tree-update-loader',
                    fileDirectoryProgressbarClass: 'progress-inline'
                } %}
            </div>
        </div>

        <div class=\"col-lg-6\">
            <div id=\"file-directory-files-list\">
            </div>
        </div>

        {% include '@FileManagerGui/DirectoriesTree/_partials/directory-deleting-confirmation-modal.twig' %}
    </div>

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-file-directory.css') }}\"/>
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-file-directory.js') }}\"></script>
{% endblock %}
", "@FileManagerGui/DirectoriesTree/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//DirectoriesTree/index.twig");
    }
}
