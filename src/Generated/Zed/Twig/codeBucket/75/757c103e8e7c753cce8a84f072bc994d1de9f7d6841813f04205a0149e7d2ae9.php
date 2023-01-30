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

/* @Acl/Group/index.twig */
class __TwigTemplate_7f881f2e24bc399143b1082dba96767f32a05607d57d4798f041dcafa8981c32 extends Template
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
        $context["widget_title"] = "Groups";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Acl/Group/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })())), "html", null, true);
    }

    // line 6
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 6, $this->source); })())), "html", null, true);
    }

    // line 8
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/acl/group/add", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Group")]);
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
        $this->loadTemplate("@Acl/Group/index.twig", "@Acl/Group/index.twig", 14, "347351125")->display($context);
        // line 24
        echo "
";
    }

    // line 27
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 29
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-acl-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Acl/Group/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  96 => 28,  92 => 27,  87 => 24,  85 => 14,  82 => 13,  78 => 12,  71 => 9,  67 => 8,  60 => 6,  53 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Groups' %}

{% block head_title widget_title | trans %}
{% block section_title widget_title | trans %}

{% block action %}
    {{ createActionButton('/acl/group/add', 'Create Group' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}


        {% block widget_content %}

            {{ table | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-acl-main.js') }}\"></script>
{% endblock %}
", "@Acl/Group/index.twig", "/data/vendor/spryker/acl/src/Spryker/Zed/Acl/Presentation/Group/index.twig");
    }
}


/* @Acl/Group/index.twig */
class __TwigTemplate_7f881f2e24bc399143b1082dba96767f32a05607d57d4798f041dcafa8981c32___347351125 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Acl/Group/index.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
            ";
        // line 19
        echo (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 19, $this->source); })());
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@Acl/Group/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 19,  193 => 18,  189 => 17,  178 => 14,  101 => 29,  96 => 28,  92 => 27,  87 => 24,  85 => 14,  82 => 13,  78 => 12,  71 => 9,  67 => 8,  60 => 6,  53 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Groups' %}

{% block head_title widget_title | trans %}
{% block section_title widget_title | trans %}

{% block action %}
    {{ createActionButton('/acl/group/add', 'Create Group' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}


        {% block widget_content %}

            {{ table | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-acl-main.js') }}\"></script>
{% endblock %}
", "@Acl/Group/index.twig", "/data/vendor/spryker/acl/src/Spryker/Zed/Acl/Presentation/Group/index.twig");
    }
}
