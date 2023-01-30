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

/* @StoreLocations/Store/index.twig */
class __TwigTemplate_106e742a0eddb403f55c3d5930b6d64a2448b18a6bd1352e9b3ca773c93610b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@StoreLocations/Store/index.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->loadTemplate("@StoreLocations/Store/index.twig", "@StoreLocations/Store/index.twig", 5, "911314774")->display(twig_array_merge($context, ["widget_title" => "Store Locations"]));
    }

    public function getTemplateName()
    {
        return "@StoreLocations/Store/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  46 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Gui/Layout/layout.twig' %}

{% block content %}
    {% embed \"@Gui/Partials/widget.twig\" with {widget_title: 'Store Locations'} %}
    {% block action %}
    {{ createActionButton('#', 'Download as CSV' | trans) }}
{% endblock %}

        {% block widget_content %}
        {{StoreLocations | raw}}
        {% endblock %}
    {% endembed  %}
{% endblock %}", "@StoreLocations/Store/index.twig", "/data/src/Pyz/Zed/StoreLocations/Presentation/Store/index.twig");
    }
}


/* @StoreLocations/Store/index.twig */
class __TwigTemplate_106e742a0eddb403f55c3d5930b6d64a2448b18a6bd1352e9b3ca773c93610b7___911314774 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'action' => [$this, 'block_action'],
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@StoreLocations/Store/index.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["#", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download as CSV")]);
        echo "
";
    }

    // line 10
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        ";
        echo (isset($context["StoreLocations"]) || array_key_exists("StoreLocations", $context) ? $context["StoreLocations"] : (function () { throw new RuntimeError('Variable "StoreLocations" does not exist.', 11, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@StoreLocations/Store/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 11,  131 => 10,  124 => 7,  120 => 6,  50 => 5,  46 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends '@Gui/Layout/layout.twig' %}

{% block content %}
    {% embed \"@Gui/Partials/widget.twig\" with {widget_title: 'Store Locations'} %}
    {% block action %}
    {{ createActionButton('#', 'Download as CSV' | trans) }}
{% endblock %}

        {% block widget_content %}
        {{StoreLocations | raw}}
        {% endblock %}
    {% endembed  %}
{% endblock %}", "@StoreLocations/Store/index.twig", "/data/src/Pyz/Zed/StoreLocations/Presentation/Store/index.twig");
    }
}
