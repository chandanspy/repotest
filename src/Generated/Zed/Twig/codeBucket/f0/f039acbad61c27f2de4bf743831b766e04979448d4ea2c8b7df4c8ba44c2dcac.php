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

/* @Acl/Group/edit.twig */
class __TwigTemplate_da31fc639022ef9236115cde2a4f1ddc9394ed1337cde7453003355832cd1a6f extends Template
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
        // line 3
        $context["page_title"] = "Edit Group";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Acl/Group/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 4, $this->source); })())), "html", null, true);
    }

    // line 5
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 5, $this->source); })())), "html", null, true);
    }

    // line 7
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/acl/group", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List Groups")]);
        echo "
    ";
        // line 9
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/acl/group/add", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Group")]);
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("@Acl/Group/edit.twig", "@Acl/Group/edit.twig", 14, "101037670")->display(twig_array_merge($context, ["widget_title" => (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 14, $this->source); })())]));
        // line 27
        echo "
    ";
        // line 28
        $this->loadTemplate("@Acl/Group/edit.twig", "@Acl/Group/edit.twig", 28, "672366297")->display(twig_array_merge($context, ["widget_title" => "Users"]));
        // line 37
        echo "
";
    }

    // line 40
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 42
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-acl-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Acl/Group/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  105 => 41,  101 => 40,  96 => 37,  94 => 28,  91 => 27,  89 => 14,  86 => 13,  82 => 12,  76 => 9,  71 => 8,  67 => 7,  60 => 5,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set page_title = 'Edit Group' %}
{% block head_title page_title | trans %}
{% block section_title page_title | trans %}

{% block action %}
    {{ backActionButton('/acl/group', 'List Groups' | trans) }}
    {{ createActionButton('/acl/group/add', 'Add Group' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: page_title } %}

        {% block widget_content %}

            {{ form_start(form) }}
                {{ form_widget(form) }}

                <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            {{ form_end(form) }}

        {% endblock %}

    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Users' } %}

        {% block widget_content %}

            {{ users | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-acl-main.js') }}\"></script>
{% endblock %}
", "@Acl/Group/edit.twig", "/data/vendor/spryker/acl/src/Spryker/Zed/Acl/Presentation/Group/edit.twig");
    }
}


/* @Acl/Group/edit.twig */
class __TwigTemplate_da31fc639022ef9236115cde2a4f1ddc9394ed1337cde7453003355832cd1a6f___101037670 extends Template
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
        // line 14
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Acl/Group/edit.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'widget');
        echo "

                <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_end');
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@Acl/Group/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 22,  227 => 21,  222 => 19,  218 => 18,  215 => 17,  211 => 16,  200 => 14,  110 => 42,  105 => 41,  101 => 40,  96 => 37,  94 => 28,  91 => 27,  89 => 14,  86 => 13,  82 => 12,  76 => 9,  71 => 8,  67 => 7,  60 => 5,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set page_title = 'Edit Group' %}
{% block head_title page_title | trans %}
{% block section_title page_title | trans %}

{% block action %}
    {{ backActionButton('/acl/group', 'List Groups' | trans) }}
    {{ createActionButton('/acl/group/add', 'Add Group' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: page_title } %}

        {% block widget_content %}

            {{ form_start(form) }}
                {{ form_widget(form) }}

                <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            {{ form_end(form) }}

        {% endblock %}

    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Users' } %}

        {% block widget_content %}

            {{ users | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-acl-main.js') }}\"></script>
{% endblock %}
", "@Acl/Group/edit.twig", "/data/vendor/spryker/acl/src/Spryker/Zed/Acl/Presentation/Group/edit.twig");
    }
}


/* @Acl/Group/edit.twig */
class __TwigTemplate_da31fc639022ef9236115cde2a4f1ddc9394ed1337cde7453003355832cd1a6f___672366297 extends Template
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
        // line 28
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Acl/Group/edit.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "
            ";
        // line 32
        echo (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 32, $this->source); })());
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@Acl/Group/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 32,  337 => 31,  333 => 30,  322 => 28,  231 => 22,  227 => 21,  222 => 19,  218 => 18,  215 => 17,  211 => 16,  200 => 14,  110 => 42,  105 => 41,  101 => 40,  96 => 37,  94 => 28,  91 => 27,  89 => 14,  86 => 13,  82 => 12,  76 => 9,  71 => 8,  67 => 7,  60 => 5,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set page_title = 'Edit Group' %}
{% block head_title page_title | trans %}
{% block section_title page_title | trans %}

{% block action %}
    {{ backActionButton('/acl/group', 'List Groups' | trans) }}
    {{ createActionButton('/acl/group/add', 'Add Group' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: page_title } %}

        {% block widget_content %}

            {{ form_start(form) }}
                {{ form_widget(form) }}

                <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            {{ form_end(form) }}

        {% endblock %}

    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Users' } %}

        {% block widget_content %}

            {{ users | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-acl-main.js') }}\"></script>
{% endblock %}
", "@Acl/Group/edit.twig", "/data/vendor/spryker/acl/src/Spryker/Zed/Acl/Presentation/Group/edit.twig");
    }
}
