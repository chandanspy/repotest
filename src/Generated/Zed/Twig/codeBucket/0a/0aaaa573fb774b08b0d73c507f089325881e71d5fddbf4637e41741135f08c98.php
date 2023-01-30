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

/* @Refund/Table/index.twig */
class __TwigTemplate_8a6c8c60f74d60710d8bab3af6722e04566091e11bb095e3f31c6323cb99ef4b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_title' => [$this, 'block_section_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Application/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Application/Layout/layout.twig", "@Refund/Table/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview of Refunds"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->loadTemplate("@Refund/Table/index.twig", "@Refund/Table/index.twig", 8, "1084945513")->display(twig_array_merge($context, ["widget_title" => "List of refunds"]));
    }

    public function getTemplateName()
    {
        return "@Refund/Table/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Application/Layout/layout.twig' %}

{% block section_title %}
    {{ 'Overview of Refunds' | trans }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'List of refunds' } %}
        {% block widget_content %}
            {{ refunds | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@Refund/Table/index.twig", "/data/vendor/spryker/refund/src/Spryker/Zed/Refund/Presentation/Table/index.twig");
    }
}


/* @Refund/Table/index.twig */
class __TwigTemplate_8a6c8c60f74d60710d8bab3af6722e04566091e11bb095e3f31c6323cb99ef4b___1084945513 extends Template
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
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Refund/Table/index.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            ";
        echo (isset($context["refunds"]) || array_key_exists("refunds", $context) ? $context["refunds"] : (function () { throw new RuntimeError('Variable "refunds" does not exist.', 10, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@Refund/Table/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 10,  131 => 9,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Application/Layout/layout.twig' %}

{% block section_title %}
    {{ 'Overview of Refunds' | trans }}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'List of refunds' } %}
        {% block widget_content %}
            {{ refunds | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@Refund/Table/index.twig", "/data/vendor/spryker/refund/src/Spryker/Zed/Refund/Presentation/Table/index.twig");
    }
}
