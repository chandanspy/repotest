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

/* @FileManagerGui/MimeType/add.twig */
class __TwigTemplate_042ffd7bbb4666d01c7d397f154c1c623d3716e526517818561a432ab5791246 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'section_title' => [$this, 'block_section_title'],
            'action' => [$this, 'block_action'],
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
        // line 3
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add MIME type");
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@FileManagerGui/MimeType/add.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 6, $this->source); })())), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 9, $this->source); })())), "html", null, true);
        echo "
";
    }

    // line 12
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/file-manager-gui/mime-type", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to MIME type list")]);
        echo "
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <div id=\"spy-file\" class=\"glossary\">
        ";
        // line 18
        $this->loadTemplate("@FileManagerGui/MimeType/add.twig", "@FileManagerGui/MimeType/add.twig", 18, "430756997")->display($context);
        // line 35
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/MimeType/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 35,  92 => 18,  89 => 17,  85 => 16,  78 => 13,  74 => 12,  67 => 9,  63 => 8,  56 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Add MIME type' | trans %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}
{% block section_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/file-manager-gui/mime-type', 'Back to MIME type list' | trans) }}
{% endblock %}

{% block content %}
    <div id=\"spy-file\" class=\"glossary\">
        {% embed '@Gui/Partials/widget.twig' %}

            {% block widget_content %}

                {{ form_start(form) }}

                {{ form_row(form.name) }}
                {{ form_row(form.comment) }}
                {{ form_row(form.isAllowed) }}

                <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'Save' | trans }}\"/>

                {{ form_end(form) }}

            {% endblock %}

        {% endembed %}

    </div>
{% endblock %}
", "@FileManagerGui/MimeType/add.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//MimeType/add.twig");
    }
}


/* @FileManagerGui/MimeType/add.twig */
class __TwigTemplate_042ffd7bbb4666d01c7d397f154c1c623d3716e526517818561a432ab5791246___430756997 extends Template
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
        // line 18
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@FileManagerGui/MimeType/add.twig", 18);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "

                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "comment", [], "any", false, false, false, 25), 'row');
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "isAllowed", [], "any", false, false, false, 26), 'row');
        echo "

                <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\"/>

                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "

            ";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/MimeType/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 30,  214 => 28,  209 => 26,  205 => 25,  201 => 24,  196 => 22,  193 => 21,  189 => 20,  178 => 18,  94 => 35,  92 => 18,  89 => 17,  85 => 16,  78 => 13,  74 => 12,  67 => 9,  63 => 8,  56 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Add MIME type' | trans %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}
{% block section_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/file-manager-gui/mime-type', 'Back to MIME type list' | trans) }}
{% endblock %}

{% block content %}
    <div id=\"spy-file\" class=\"glossary\">
        {% embed '@Gui/Partials/widget.twig' %}

            {% block widget_content %}

                {{ form_start(form) }}

                {{ form_row(form.name) }}
                {{ form_row(form.comment) }}
                {{ form_row(form.isAllowed) }}

                <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'Save' | trans }}\"/>

                {{ form_end(form) }}

            {% endblock %}

        {% endembed %}

    </div>
{% endblock %}
", "@FileManagerGui/MimeType/add.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//MimeType/add.twig");
    }
}
