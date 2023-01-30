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

/* @FileManagerGui/Files/index.twig */
class __TwigTemplate_ba7359ba4a27f403cec727dc5201e19ce89ccd6e0e78dcaa1e612400176daa91 extends Template
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
        $this->loadTemplate("@FileManagerGui/Files/index.twig", "@FileManagerGui/Files/index.twig", 1, "1911948565")->display(twig_array_merge($context, ["widget_title" => "Files list"]));
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/Files/index.twig";
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
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Files list' } %}
    {% block widget_title -%}
        <div class=\"title-action\">
            <h5>{{ 'Files list' | trans ~ ' ' ~ fileDirectoryId }}</h5>
            <a id=\"add-file-link\" class=\"btn btn-sm btn-outline safe-submit btn-create\" href=\"/file-manager-gui/add-file?file-directory-id=\">
                <i class=\"fa fa-plus\"></i> {{ 'Add File' | trans }}
            </a>
        </div>
    {%- endblock %}

    {% block widget_content %}
        {{ files | raw }}
    {% endblock %}
{% endembed %}
", "@FileManagerGui/Files/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//Files/index.twig");
    }
}


/* @FileManagerGui/Files/index.twig */
class __TwigTemplate_ba7359ba4a27f403cec727dc5201e19ce89ccd6e0e78dcaa1e612400176daa91___1911948565 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_title' => [$this, 'block_widget_title'],
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@FileManagerGui/Files/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_widget_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<div class=\"title-action\">
            <h5>";
        // line 4
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Files list") . " ") . (isset($context["fileDirectoryId"]) || array_key_exists("fileDirectoryId", $context) ? $context["fileDirectoryId"] : (function () { throw new RuntimeError('Variable "fileDirectoryId" does not exist.', 4, $this->source); })())), "html", null, true);
        echo "</h5>
            <a id=\"add-file-link\" class=\"btn btn-sm btn-outline safe-submit btn-create\" href=\"/file-manager-gui/add-file?file-directory-id=\">
                <i class=\"fa fa-plus\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add File"), "html", null, true);
        echo "
            </a>
        </div>";
    }

    // line 11
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        ";
        echo (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 12, $this->source); })());
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/Files/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 12,  126 => 11,  119 => 6,  114 => 4,  111 => 3,  107 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Files list' } %}
    {% block widget_title -%}
        <div class=\"title-action\">
            <h5>{{ 'Files list' | trans ~ ' ' ~ fileDirectoryId }}</h5>
            <a id=\"add-file-link\" class=\"btn btn-sm btn-outline safe-submit btn-create\" href=\"/file-manager-gui/add-file?file-directory-id=\">
                <i class=\"fa fa-plus\"></i> {{ 'Add File' | trans }}
            </a>
        </div>
    {%- endblock %}

    {% block widget_content %}
        {{ files | raw }}
    {% endblock %}
{% endembed %}
", "@FileManagerGui/Files/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//Files/index.twig");
    }
}
