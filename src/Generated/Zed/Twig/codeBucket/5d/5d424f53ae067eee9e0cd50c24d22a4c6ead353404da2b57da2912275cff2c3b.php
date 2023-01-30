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

/* @FileManagerGui/Index/index.twig */
class __TwigTemplate_6cc30899631b6483d8304c19644ea25afd05e8b7130740a7ff2676e35d7a208a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@FileManagerGui/Index/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("@FileManagerGui/Index/index.twig", "@FileManagerGui/Index/index.twig", 5, "1068942261")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Files list")]));
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Files list' | trans } %}

        {% block widget_content %}
            {{ files | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@FileManagerGui/Index/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//Index/index.twig");
    }
}


/* @FileManagerGui/Index/index.twig */
class __TwigTemplate_6cc30899631b6483d8304c19644ea25afd05e8b7130740a7ff2676e35d7a208a___1068942261 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@FileManagerGui/Index/index.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "            ";
        echo (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 8, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 8,  125 => 7,  114 => 5,  55 => 12,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Files list' | trans } %}

        {% block widget_content %}
            {{ files | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@FileManagerGui/Index/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//Index/index.twig");
    }
}
