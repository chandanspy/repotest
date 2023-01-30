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

/* @Acl/Role/update.twig */
class __TwigTemplate_e0a891486db5256dcab2c866febabffe280fd119832ac156eb98e8671fff24aa extends Template
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
        $context["widget_title"] = (((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update") . " \"") . twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["roleTransfer"]) || array_key_exists("roleTransfer", $context) ? $context["roleTransfer"] : (function () { throw new RuntimeError('Variable "roleTransfer" does not exist.', 3, $this->source); })()), "getName", [], "method", false, false, false, 3))) . "\" ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Role"));
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Acl/Role/update.twig", 1);
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
        // line 9
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/acl/role/create", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Role")]);
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
        $this->loadTemplate("@Acl/Role/update.twig", "@Acl/Role/update.twig", 14, "897119082")->display($context);
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Acl/Role/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 49,  80 => 14,  77 => 13,  73 => 12,  67 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Update'| trans ~ ' \"' ~ roleTransfer.getName() | e ~ '\" ' ~ 'Role'| trans %}

{% block head_title widget_title | trans %}

{% block action %}
    {{ backActionButton('/acl/role', 'List Roles' | trans) }}
    {{ createActionButton('/acl/role/create', 'Create Role' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">{{ 'Role' | trans }}</div>
                <div class=\"panel-body\">
                    {{ form_start(roleForm) }}
                    {{ form_widget(roleForm) }}
                    <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\"/>
                    {{ form_end(roleForm) }}
                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">{{ 'Rule' | trans }}</div>
                <div class=\"panel-body\">
                    {{ form_start(ruleSetForm) }}
                    {{ form_widget(ruleSetForm) }}
                    <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Add Rule' | trans }}\"/>
                    {{ form_end(ruleSetForm) }}
                </div>
            </div>

            <h3>{{ 'Assigned Rules' | trans }}</h3>

            {% if ruleSetTable %}
                <p>
                    {{ ruleSetTable | raw }}
                </p>
            {% endif %}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Acl/Role/update.twig", "/data/vendor/spryker/acl/src/Spryker/Zed/Acl/Presentation/Role/update.twig");
    }
}


/* @Acl/Role/update.twig */
class __TwigTemplate_e0a891486db5256dcab2c866febabffe280fd119832ac156eb98e8671fff24aa___897119082 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Acl/Role/update.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Role"), "html", null, true);
        echo "</div>
                <div class=\"panel-body\">
                    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["roleForm"]) || array_key_exists("roleForm", $context) ? $context["roleForm"] : (function () { throw new RuntimeError('Variable "roleForm" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["roleForm"]) || array_key_exists("roleForm", $context) ? $context["roleForm"] : (function () { throw new RuntimeError('Variable "roleForm" does not exist.', 22, $this->source); })()), 'widget');
        echo "
                    <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\"/>
                    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["roleForm"]) || array_key_exists("roleForm", $context) ? $context["roleForm"] : (function () { throw new RuntimeError('Variable "roleForm" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rule"), "html", null, true);
        echo "</div>
                <div class=\"panel-body\">
                    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ruleSetForm"]) || array_key_exists("ruleSetForm", $context) ? $context["ruleSetForm"] : (function () { throw new RuntimeError('Variable "ruleSetForm" does not exist.', 31, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["ruleSetForm"]) || array_key_exists("ruleSetForm", $context) ? $context["ruleSetForm"] : (function () { throw new RuntimeError('Variable "ruleSetForm" does not exist.', 32, $this->source); })()), 'widget');
        echo "
                    <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Rule"), "html", null, true);
        echo "\"/>
                    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ruleSetForm"]) || array_key_exists("ruleSetForm", $context) ? $context["ruleSetForm"] : (function () { throw new RuntimeError('Variable "ruleSetForm" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>

            <h3>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assigned Rules"), "html", null, true);
        echo "</h3>

            ";
        // line 40
        if ((isset($context["ruleSetTable"]) || array_key_exists("ruleSetTable", $context) ? $context["ruleSetTable"] : (function () { throw new RuntimeError('Variable "ruleSetTable" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "                <p>
                    ";
            // line 42
            echo (isset($context["ruleSetTable"]) || array_key_exists("ruleSetTable", $context) ? $context["ruleSetTable"] : (function () { throw new RuntimeError('Variable "ruleSetTable" does not exist.', 42, $this->source); })());
            echo "
                </p>
            ";
        }
        // line 45
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@Acl/Role/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 45,  256 => 42,  253 => 41,  251 => 40,  246 => 38,  239 => 34,  235 => 33,  231 => 32,  227 => 31,  222 => 29,  214 => 24,  210 => 23,  206 => 22,  202 => 21,  197 => 19,  193 => 17,  189 => 16,  178 => 14,  82 => 49,  80 => 14,  77 => 13,  73 => 12,  67 => 9,  62 => 8,  58 => 7,  51 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Update'| trans ~ ' \"' ~ roleTransfer.getName() | e ~ '\" ' ~ 'Role'| trans %}

{% block head_title widget_title | trans %}

{% block action %}
    {{ backActionButton('/acl/role', 'List Roles' | trans) }}
    {{ createActionButton('/acl/role/create', 'Create Role' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">{{ 'Role' | trans }}</div>
                <div class=\"panel-body\">
                    {{ form_start(roleForm) }}
                    {{ form_widget(roleForm) }}
                    <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\"/>
                    {{ form_end(roleForm) }}
                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">{{ 'Rule' | trans }}</div>
                <div class=\"panel-body\">
                    {{ form_start(ruleSetForm) }}
                    {{ form_widget(ruleSetForm) }}
                    <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Add Rule' | trans }}\"/>
                    {{ form_end(ruleSetForm) }}
                </div>
            </div>

            <h3>{{ 'Assigned Rules' | trans }}</h3>

            {% if ruleSetTable %}
                <p>
                    {{ ruleSetTable | raw }}
                </p>
            {% endif %}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Acl/Role/update.twig", "/data/vendor/spryker/acl/src/Spryker/Zed/Acl/Presentation/Role/update.twig");
    }
}
