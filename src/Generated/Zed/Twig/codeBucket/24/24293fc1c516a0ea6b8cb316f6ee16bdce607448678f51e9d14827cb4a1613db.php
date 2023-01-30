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

/* @Gui/Partials/localized-ibox.twig */
class __TwigTemplate_b97a5794856e8ac9814f608f2e513ab216c4ba2aba61cc2372f340cb4b924b14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "@Gui/Partials/ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["region"] = twig_lower_filter($this->env, twig_slice($this->env, (isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 22, $this->source); })()), 3, 2));
        // line 20
        $this->parent = $this->loadTemplate("@Gui/Partials/ibox.twig", "@Gui/Partials/localized-ibox.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "    <span class=\"flag flag-";
        echo twig_escape_filter($this->env, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\"></span> ";
        echo twig_escape_filter($this->env, (isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Gui/Partials/localized-ibox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 24,  49 => 23,  44 => 20,  42 => 22,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
  Display collapsible ibox with flags for localized data.

  Parameters:
    * localeName: (required) A valid locale name (e.g. \"en_US\", \"de_DE\", etc.) that will be used as title and to set the region flag.
    * collapsed: (optional) Set collapse state of the ibox. False by default, i.e. the ibox is expanded by default.
    * hasError: (optional) Set to \"true\" to mark the ibox as invalid. False by default.
    * autoErrors: (optional) Mark the ibox as invalid with javascript if there's any element inside it with \"has-error\" class. True by default.
    * id: (optional) Set ID for the ibox element.

  Example usage:

    {% embed '@Gui/Partials/localized-ibox.twig' with {'localeName': 'en_US', 'collapsed': true, 'hasError': true, 'id': 'my-unique-id'} %}
        {% block content %}
            My english content
        {% endblock %}
    {% endembed %}

#}
{% extends '@Gui/Partials/ibox.twig' %}

{% set region = (localeName|slice(3,2))|lower %}
{% block title %}
    <span class=\"flag flag-{{ region }}\"></span> {{ localeName }}
{% endblock %}
", "@Gui/Partials/localized-ibox.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation//Partials/localized-ibox.twig");
    }
}
