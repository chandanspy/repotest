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

/* @NavigationGui/Update/index.twig */
class __TwigTemplate_961c49c7b12a81c4788f0c5a337d9ba67b5a4cb613c738a3170368fbae3823f8 extends Template
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
        $context["widget_title"] = "Navigation element details";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@NavigationGui/Update/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Navigation Element:") . " ") . (isset($context["idNavigation"]) || array_key_exists("idNavigation", $context) ? $context["idNavigation"] : (function () { throw new RuntimeError('Variable "idNavigation" does not exist.', 5, $this->source); })())), "html", null, true);
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
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/navigation-gui", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Navigation Elements")]);
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
        $this->loadTemplate("@NavigationGui/Update/index.twig", "@NavigationGui/Update/index.twig", 18, "1255750541")->display($context);
        // line 31
        echo "
";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Update/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 31,  92 => 18,  89 => 17,  85 => 16,  78 => 13,  74 => 12,  67 => 9,  63 => 8,  56 => 5,  52 => 4,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Navigation element details' %}
{% block section_title %}
    {{ 'Edit Navigation Element:' | trans ~ ' ' ~ idNavigation }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/navigation-gui', 'Back to Navigation Elements' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ form_start(navigationForm) }}
                {{ form_widget(navigationForm) }}

            <input id=\"navigation-save-btn\" type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            {{ form_end(navigationForm) }}

        {% endblock %}

    {% endembed %}

{% endblock %}

", "@NavigationGui/Update/index.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Update/index.twig");
    }
}


/* @NavigationGui/Update/index.twig */
class __TwigTemplate_961c49c7b12a81c4788f0c5a337d9ba67b5a4cb613c738a3170368fbae3823f8___1255750541 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@NavigationGui/Update/index.twig", 18);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["navigationForm"]) || array_key_exists("navigationForm", $context) ? $context["navigationForm"] : (function () { throw new RuntimeError('Variable "navigationForm" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["navigationForm"]) || array_key_exists("navigationForm", $context) ? $context["navigationForm"] : (function () { throw new RuntimeError('Variable "navigationForm" does not exist.', 23, $this->source); })()), 'widget');
        echo "

            <input id=\"navigation-save-btn\" type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />
            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["navigationForm"]) || array_key_exists("navigationForm", $context) ? $context["navigationForm"] : (function () { throw new RuntimeError('Variable "navigationForm" does not exist.', 26, $this->source); })()), 'form_end');
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Update/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 26,  200 => 25,  195 => 23,  191 => 22,  188 => 21,  184 => 20,  173 => 18,  94 => 31,  92 => 18,  89 => 17,  85 => 16,  78 => 13,  74 => 12,  67 => 9,  63 => 8,  56 => 5,  52 => 4,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Navigation element details' %}
{% block section_title %}
    {{ 'Edit Navigation Element:' | trans ~ ' ' ~ idNavigation }}
{% endblock %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ backActionButton('/navigation-gui', 'Back to Navigation Elements' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ form_start(navigationForm) }}
                {{ form_widget(navigationForm) }}

            <input id=\"navigation-save-btn\" type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            {{ form_end(navigationForm) }}

        {% endblock %}

    {% endembed %}

{% endblock %}

", "@NavigationGui/Update/index.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Update/index.twig");
    }
}
