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

/* @FileManagerGui/MimeType/index.twig */
class __TwigTemplate_2e900db535607c00318d2f3d07204d2cef529cf95f6d338ce827dc84d31105fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@FileManagerGui/MimeType/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/file-manager-gui/mime-type/add", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add MIME type")]);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("@FileManagerGui/MimeType/index.twig", "@FileManagerGui/MimeType/index.twig", 9, "1166257799")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MIME type settings")]));
        // line 20
        echo "
";
    }

    // line 23
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 25
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-mime-type.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/MimeType/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  77 => 24,  73 => 23,  68 => 20,  66 => 9,  63 => 8,  59 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block action %}
    {{ createActionButton('/file-manager-gui/mime-type/add', 'Add MIME type' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'MIME type settings' | trans } %}

        {% block widget_content %}
            {{ table | raw }}

            {{ form_start(form, {'method': 'POST'}) }}
            <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'Save' | trans }}\"/>
            {{ form_end(form) }}
        {% endblock %}

    {% endembed %}

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-mime-type.js') }}\"></script>
{% endblock %}
", "@FileManagerGui/MimeType/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//MimeType/index.twig");
    }
}


/* @FileManagerGui/MimeType/index.twig */
class __TwigTemplate_2e900db535607c00318d2f3d07204d2cef529cf95f6d338ce827dc84d31105fe___1166257799 extends Template
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
        // line 9
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@FileManagerGui/MimeType/index.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "            ";
        echo (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 12, $this->source); })());
        echo "

            ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["method" => "POST"]);
        echo "
            <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\"/>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/MimeType/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 16,  180 => 15,  176 => 14,  170 => 12,  166 => 11,  155 => 9,  82 => 25,  77 => 24,  73 => 23,  68 => 20,  66 => 9,  63 => 8,  59 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block action %}
    {{ createActionButton('/file-manager-gui/mime-type/add', 'Add MIME type' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'MIME type settings' | trans } %}

        {% block widget_content %}
            {{ table | raw }}

            {{ form_start(form, {'method': 'POST'}) }}
            <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'Save' | trans }}\"/>
            {{ form_end(form) }}
        {% endblock %}

    {% endembed %}

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-mime-type.js') }}\"></script>
{% endblock %}
", "@FileManagerGui/MimeType/index.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//MimeType/index.twig");
    }
}
