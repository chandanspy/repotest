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

/* @User/Index/index.twig */
class __TwigTemplate_e8b353283e989d8c4d9aef549c6a18a296985063a4958230bebe384eeec84c1b extends Template
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
        $context["widget_title"] = "Users List";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@User/Index/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/user/edit/create", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add New User")]);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    ";
        // line 11
        $this->loadTemplate("@User/Index/index.twig", "@User/Index/index.twig", 11, "1926908098")->display($context);
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "@User/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  68 => 11,  65 => 10,  61 => 9,  54 => 6,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Users List' %}

{% block action %}
    {{ createActionButton('/user/edit/create', 'Add New User' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ users | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}

", "@User/Index/index.twig", "/data/vendor/spryker/user/src/Spryker/Zed/User/Presentation/Index/index.twig");
    }
}


/* @User/Index/index.twig */
class __TwigTemplate_e8b353283e989d8c4d9aef549c6a18a296985063a4958230bebe384eeec84c1b___1926908098 extends Template
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
        // line 11
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@User/Index/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
            ";
        // line 15
        echo (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 15, $this->source); })());
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@User/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 15,  153 => 14,  149 => 13,  138 => 11,  70 => 20,  68 => 11,  65 => 10,  61 => 9,  54 => 6,  50 => 5,  45 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Users List' %}

{% block action %}
    {{ createActionButton('/user/edit/create', 'Add New User' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ users | raw }}

        {% endblock %}

    {% endembed %}

{% endblock %}

", "@User/Index/index.twig", "/data/vendor/spryker/user/src/Spryker/Zed/User/Presentation/Index/index.twig");
    }
}
