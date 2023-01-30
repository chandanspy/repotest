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

/* @Maintenance/Index/index.twig */
class __TwigTemplate_a0373eac6459f3bb7d3823b1cf0c76dfb20c32d870481bf0f100818bca293a2a extends Template
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
        // line 1
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Maintenance/Index/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("@Maintenance/Index/index.twig", "@Maintenance/Index/index.twig", 5, "1351115995")->display(twig_array_merge($context, ["widget_title" => "System Info"]));
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Maintenance/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'System Info' } %}

        {% block widget_content %}

            <p>
               {{ 'Error levels to report:' | trans }} {{ errorLevel | raw }}
            </p>
            <p>
               {{ 'Error levels to log only:' | trans }} {{ errorLevelLogOnly | raw }}
            </p>
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Maintenance/Index/index.twig", "/data/vendor/spryker/maintenance/src/Spryker/Zed/Maintenance/Presentation/Index/index.twig");
    }
}


/* @Maintenance/Index/index.twig */
class __TwigTemplate_a0373eac6459f3bb7d3823b1cf0c76dfb20c32d870481bf0f100818bca293a2a___1351115995 extends Template
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
        // line 5
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Maintenance/Index/index.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
            <p>
               ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error levels to report:"), "html", null, true);
        echo " ";
        echo (isset($context["errorLevel"]) || array_key_exists("errorLevel", $context) ? $context["errorLevel"] : (function () { throw new RuntimeError('Variable "errorLevel" does not exist.', 10, $this->source); })());
        echo "
            </p>
            <p>
               ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error levels to log only:"), "html", null, true);
        echo " ";
        echo (isset($context["errorLevelLogOnly"]) || array_key_exists("errorLevelLogOnly", $context) ? $context["errorLevelLogOnly"] : (function () { throw new RuntimeError('Variable "errorLevelLogOnly" does not exist.', 13, $this->source); })());
        echo "
            </p>
        ";
    }

    public function getTemplateName()
    {
        return "@Maintenance/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 13,  139 => 10,  135 => 8,  131 => 7,  120 => 5,  55 => 18,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'System Info' } %}

        {% block widget_content %}

            <p>
               {{ 'Error levels to report:' | trans }} {{ errorLevel | raw }}
            </p>
            <p>
               {{ 'Error levels to log only:' | trans }} {{ errorLevelLogOnly | raw }}
            </p>
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@Maintenance/Index/index.twig", "/data/vendor/spryker/maintenance/src/Spryker/Zed/Maintenance/Presentation/Index/index.twig");
    }
}
