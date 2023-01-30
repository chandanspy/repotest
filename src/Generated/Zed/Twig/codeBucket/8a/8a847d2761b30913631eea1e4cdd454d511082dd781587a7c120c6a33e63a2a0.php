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

/* @FileManagerGui/AddFile/index.twig */
class __TwigTemplate_5b3570250fea8d672570d5d23a52cb1f84a8fd6bf2d8b816f472245afe0fe020 extends Template
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
        $context["widget_title"] = "Add a file";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@FileManagerGui/AddFile/index.twig", 1);
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
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/file-manager-gui/directories-tree", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to File Tree")]);
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
        $this->loadTemplate("@FileManagerGui/AddFile/index.twig", "@FileManagerGui/AddFile/index.twig", 18, "1908283527")->display($context);
        // line 41
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/AddFile/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 41,  92 => 18,  89 => 17,  85 => 16,  78 => 13,  74 => 12,  67 => 9,  63 => 8,  56 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Add a file' %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}
{% block section_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/file-manager-gui/directories-tree', 'Back to File Tree' | trans) }}
{% endblock %}

{% block content %}
    <div id=\"spy-file\" class=\"glossary\">
        {% embed '@Gui/Partials/widget.twig' %}

            {% block widget_content %}

                {{ form_start(form) }}

                {{ form_row(form.fileName) }}
                {{ form_row(form.fileUpload) }}
                {{ form_row(form.useRealName) }}

                {% embed '@FileManagerGui/_partials/localized-attributes.twig' with {
                    currentLocale: currentLocale,
                    localizedAttributes: form.localizedAttributes
                } %}
                {% endembed %}

                <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'Save' | trans }}\" />

                {{ form_end(form) }}

            {% endblock %}

        {% endembed %}

    </div>
{% endblock %}
", "@FileManagerGui/AddFile/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//AddFile/index.twig");
    }
}


/* @FileManagerGui/AddFile/index.twig */
class __TwigTemplate_5b3570250fea8d672570d5d23a52cb1f84a8fd6bf2d8b816f472245afe0fe020___1908283527 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@FileManagerGui/AddFile/index.twig", 18);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "fileName", [], "any", false, false, false, 24), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "fileUpload", [], "any", false, false, false, 25), 'row');
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "useRealName", [], "any", false, false, false, 26), 'row');
        echo "

                ";
        // line 28
        $this->loadTemplate("@FileManagerGui/AddFile/index.twig", "@FileManagerGui/AddFile/index.twig", 28, "1539618337")->display(twig_array_merge($context, ["currentLocale" =>         // line 29
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 29, $this->source); })()), "localizedAttributes" => twig_get_attribute($this->env, $this->source,         // line 30
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "localizedAttributes", [], "any", false, false, false, 30)]));
        // line 33
        echo "
                <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />

                ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        echo "

            ";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/AddFile/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 36,  227 => 34,  224 => 33,  222 => 30,  221 => 29,  220 => 28,  215 => 26,  211 => 25,  207 => 24,  202 => 22,  199 => 21,  195 => 20,  184 => 18,  94 => 41,  92 => 18,  89 => 17,  85 => 16,  78 => 13,  74 => 12,  67 => 9,  63 => 8,  56 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Add a file' %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}
{% block section_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/file-manager-gui/directories-tree', 'Back to File Tree' | trans) }}
{% endblock %}

{% block content %}
    <div id=\"spy-file\" class=\"glossary\">
        {% embed '@Gui/Partials/widget.twig' %}

            {% block widget_content %}

                {{ form_start(form) }}

                {{ form_row(form.fileName) }}
                {{ form_row(form.fileUpload) }}
                {{ form_row(form.useRealName) }}

                {% embed '@FileManagerGui/_partials/localized-attributes.twig' with {
                    currentLocale: currentLocale,
                    localizedAttributes: form.localizedAttributes
                } %}
                {% endembed %}

                <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'Save' | trans }}\" />

                {{ form_end(form) }}

            {% endblock %}

        {% endembed %}

    </div>
{% endblock %}
", "@FileManagerGui/AddFile/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//AddFile/index.twig");
    }
}


/* @FileManagerGui/AddFile/index.twig */
class __TwigTemplate_5b3570250fea8d672570d5d23a52cb1f84a8fd6bf2d8b816f472245afe0fe020___1539618337 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 28
        return "@FileManagerGui/_partials/localized-attributes.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@FileManagerGui/_partials/localized-attributes.twig", "@FileManagerGui/AddFile/index.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/AddFile/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 28,  232 => 36,  227 => 34,  224 => 33,  222 => 30,  221 => 29,  220 => 28,  215 => 26,  211 => 25,  207 => 24,  202 => 22,  199 => 21,  195 => 20,  184 => 18,  94 => 41,  92 => 18,  89 => 17,  85 => 16,  78 => 13,  74 => 12,  67 => 9,  63 => 8,  56 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Add a file' %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}
{% block section_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/file-manager-gui/directories-tree', 'Back to File Tree' | trans) }}
{% endblock %}

{% block content %}
    <div id=\"spy-file\" class=\"glossary\">
        {% embed '@Gui/Partials/widget.twig' %}

            {% block widget_content %}

                {{ form_start(form) }}

                {{ form_row(form.fileName) }}
                {{ form_row(form.fileUpload) }}
                {{ form_row(form.useRealName) }}

                {% embed '@FileManagerGui/_partials/localized-attributes.twig' with {
                    currentLocale: currentLocale,
                    localizedAttributes: form.localizedAttributes
                } %}
                {% endembed %}

                <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'Save' | trans }}\" />

                {{ form_end(form) }}

            {% endblock %}

        {% endembed %}

    </div>
{% endblock %}
", "@FileManagerGui/AddFile/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//AddFile/index.twig");
    }
}
