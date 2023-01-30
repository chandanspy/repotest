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

/* @FileManagerGui/AddDirectory/index.twig */
class __TwigTemplate_38e16b9e472cb4ef5d63f4e604cb51d1c3ddee6fbf5be0f4aa22c2cd38cb1878 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_title' => [$this, 'block_section_title'],
            'head_title' => [$this, 'block_head_title'],
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
            'head_css' => [$this, 'block_head_css'],
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
        $context["widget_title"] = "Directory element details";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@FileManagerGui/AddDirectory/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Directory Element"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_head_title($context, array $blocks = [])
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
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/file-manager-gui/directories-tree", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to File Directory Elements")]);
        echo "
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
    ";
        // line 18
        $this->loadTemplate("@FileManagerGui/AddDirectory/index.twig", "@FileManagerGui/AddDirectory/index.twig", 18, "431198187")->display($context);
        // line 37
        echo "
";
    }

    // line 41
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-file-directory.css"]);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/AddDirectory/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  104 => 42,  100 => 41,  95 => 37,  93 => 18,  90 => 17,  86 => 16,  79 => 13,  75 => 12,  68 => 9,  64 => 8,  57 => 5,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Directory element details' %}
{% block section_title %}
    {{ 'Create Directory Element' | trans }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/file-manager-gui/directories-tree', 'Back to File Directory Elements' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {{ form_row(form.name) }}

            {% embed '@FileManagerGui/_partials/localized-attributes.twig' with {
                currentLocale: currentLocale,
                localizedAttributes: form.fileDirectoryLocalizedAttributes
            } %}
            {% endembed %}

            <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'Save' | trans }}\" />

            {{ form_end(form) }}
        {% endblock %}

    {% endembed %}

{% endblock %}


{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-file-directory.css') }}\" />
{% endblock %}
", "@FileManagerGui/AddDirectory/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//AddDirectory/index.twig");
    }
}


/* @FileManagerGui/AddDirectory/index.twig */
class __TwigTemplate_38e16b9e472cb4ef5d63f4e604cb51d1c3ddee6fbf5be0f4aa22c2cd38cb1878___431198187 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@FileManagerGui/AddDirectory/index.twig", 18);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'row');
        echo "

            ";
        // line 25
        $this->loadTemplate("@FileManagerGui/AddDirectory/index.twig", "@FileManagerGui/AddDirectory/index.twig", 25, "1382264538")->display(twig_array_merge($context, ["currentLocale" =>         // line 26
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 26, $this->source); })()), "localizedAttributes" => twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "fileDirectoryLocalizedAttributes", [], "any", false, false, false, 27)]));
        // line 30
        echo "
            <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />

            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/AddDirectory/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 33,  233 => 31,  230 => 30,  228 => 27,  227 => 26,  226 => 25,  221 => 23,  215 => 21,  211 => 20,  200 => 18,  109 => 43,  104 => 42,  100 => 41,  95 => 37,  93 => 18,  90 => 17,  86 => 16,  79 => 13,  75 => 12,  68 => 9,  64 => 8,  57 => 5,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Directory element details' %}
{% block section_title %}
    {{ 'Create Directory Element' | trans }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/file-manager-gui/directories-tree', 'Back to File Directory Elements' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {{ form_row(form.name) }}

            {% embed '@FileManagerGui/_partials/localized-attributes.twig' with {
                currentLocale: currentLocale,
                localizedAttributes: form.fileDirectoryLocalizedAttributes
            } %}
            {% endembed %}

            <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'Save' | trans }}\" />

            {{ form_end(form) }}
        {% endblock %}

    {% endembed %}

{% endblock %}


{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-file-directory.css') }}\" />
{% endblock %}
", "@FileManagerGui/AddDirectory/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//AddDirectory/index.twig");
    }
}


/* @FileManagerGui/AddDirectory/index.twig */
class __TwigTemplate_38e16b9e472cb4ef5d63f4e604cb51d1c3ddee6fbf5be0f4aa22c2cd38cb1878___1382264538 extends Template
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
        // line 25
        return "@FileManagerGui/_partials/localized-attributes.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@FileManagerGui/_partials/localized-attributes.twig", "@FileManagerGui/AddDirectory/index.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/AddDirectory/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 25,  238 => 33,  233 => 31,  230 => 30,  228 => 27,  227 => 26,  226 => 25,  221 => 23,  215 => 21,  211 => 20,  200 => 18,  109 => 43,  104 => 42,  100 => 41,  95 => 37,  93 => 18,  90 => 17,  86 => 16,  79 => 13,  75 => 12,  68 => 9,  64 => 8,  57 => 5,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Directory element details' %}
{% block section_title %}
    {{ 'Create Directory Element' | trans }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/file-manager-gui/directories-tree', 'Back to File Directory Elements' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}
            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {{ form_row(form.name) }}

            {% embed '@FileManagerGui/_partials/localized-attributes.twig' with {
                currentLocale: currentLocale,
                localizedAttributes: form.fileDirectoryLocalizedAttributes
            } %}
            {% endembed %}

            <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'Save' | trans }}\" />

            {{ form_end(form) }}
        {% endblock %}

    {% endembed %}

{% endblock %}


{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-file-directory.css') }}\" />
{% endblock %}
", "@FileManagerGui/AddDirectory/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//AddDirectory/index.twig");
    }
}
