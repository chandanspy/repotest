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

/* @Acl/Role/create.twig */
class __TwigTemplate_d4ee6f0a7b45cb34527a38b7cc9e3355d296a165e0f8c1c2392f5bd545e16191 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
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
        $context["widget_title"] = "Create role";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Acl/Role/create.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })())), "html", null, true);
    }

    // line 7
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/acl/role", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List Roles")]);
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    ";
        // line 13
        $this->loadTemplate("@Acl/Role/create.twig", "@Acl/Role/create.twig", 13, "7838460")->display($context);
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Acl/Role/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  76 => 13,  73 => 12,  69 => 11,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Create role' %}

{% block head_title widget_title | trans %}

{% block action %}
    {{ backActionButton('/acl/role', 'List Roles' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">{{ 'Role' | trans }}</div>
                <div class=\"panel-body\">
                    {{ form_start(roleForm) }}
                        {{ form_widget(roleForm) }}
                        <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Create' | trans }}\"/>
                    {{ form_end(roleForm) }}
                </div>
            </div>

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Acl/Role/create.twig", "/data/vendor/spryker/acl/src/Spryker/Zed/Acl/Presentation/Role/create.twig");
    }
}


/* @Acl/Role/create.twig */
class __TwigTemplate_d4ee6f0a7b45cb34527a38b7cc9e3355d296a165e0f8c1c2392f5bd545e16191___7838460 extends Template
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
        // line 13
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Acl/Role/create.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Role"), "html", null, true);
        echo "</div>
                <div class=\"panel-body\">
                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["roleForm"]) || array_key_exists("roleForm", $context) ? $context["roleForm"] : (function () { throw new RuntimeError('Variable "roleForm" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["roleForm"]) || array_key_exists("roleForm", $context) ? $context["roleForm"] : (function () { throw new RuntimeError('Variable "roleForm" does not exist.', 21, $this->source); })()), 'widget');
        echo "
                        <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create"), "html", null, true);
        echo "\"/>
                    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["roleForm"]) || array_key_exists("roleForm", $context) ? $context["roleForm"] : (function () { throw new RuntimeError('Variable "roleForm" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>

        ";
    }

    public function getTemplateName()
    {
        return "@Acl/Role/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 23,  187 => 22,  183 => 21,  179 => 20,  174 => 18,  170 => 16,  166 => 15,  155 => 13,  78 => 30,  76 => 13,  73 => 12,  69 => 11,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Create role' %}

{% block head_title widget_title | trans %}

{% block action %}
    {{ backActionButton('/acl/role', 'List Roles' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">{{ 'Role' | trans }}</div>
                <div class=\"panel-body\">
                    {{ form_start(roleForm) }}
                        {{ form_widget(roleForm) }}
                        <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Create' | trans }}\"/>
                    {{ form_end(roleForm) }}
                </div>
            </div>

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Acl/Role/create.twig", "/data/vendor/spryker/acl/src/Spryker/Zed/Acl/Presentation/Role/create.twig");
    }
}
