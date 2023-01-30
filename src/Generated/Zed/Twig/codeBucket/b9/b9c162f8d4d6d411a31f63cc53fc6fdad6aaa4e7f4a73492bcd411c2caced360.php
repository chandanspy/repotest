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

/* @GoogleAnalytics/Googleanalytics/index.twig */
class __TwigTemplate_1971f5dbaf102a9c4aa005aa6bcd6651873c68f18efd459c902d7e5d41908942 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@GoogleAnalytics/Googleanalytics/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    ";
        $this->loadTemplate("@GoogleAnalytics/Googleanalytics/index.twig", "@GoogleAnalytics/Googleanalytics/index.twig", 3, "1926729179")->display(twig_array_merge($context, ["widget_title" => "Google Analytics Configuration"]));
        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["GoogleAnalyticsForm"]) || array_key_exists("GoogleAnalyticsForm", $context) ? $context["GoogleAnalyticsForm"] : (function () { throw new RuntimeError('Variable "GoogleAnalyticsForm" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["GoogleAnalyticsForm"]) || array_key_exists("GoogleAnalyticsForm", $context) ? $context["GoogleAnalyticsForm"] : (function () { throw new RuntimeError('Variable "GoogleAnalyticsForm" does not exist.', 8, $this->source); })()), "analyticsKey", [], "any", false, false, false, 8), 'label');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["GoogleAnalyticsForm"]) || array_key_exists("GoogleAnalyticsForm", $context) ? $context["GoogleAnalyticsForm"] : (function () { throw new RuntimeError('Variable "GoogleAnalyticsForm" does not exist.', 9, $this->source); })()), "analyticsKey", [], "any", false, false, false, 9), 'widget');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["GoogleAnalyticsForm"]) || array_key_exists("GoogleAnalyticsForm", $context) ? $context["GoogleAnalyticsForm"] : (function () { throw new RuntimeError('Variable "GoogleAnalyticsForm" does not exist.', 10, $this->source); })()), "analyticsKey", [], "any", false, false, false, 10), 'errors');
        echo "
    <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"  style=\"margin-top: 10px;\"/>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["GoogleAnalyticsForm"]) || array_key_exists("GoogleAnalyticsForm", $context) ? $context["GoogleAnalyticsForm"] : (function () { throw new RuntimeError('Variable "GoogleAnalyticsForm" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@GoogleAnalytics/Googleanalytics/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}
{% block content %}
    {% embed \"@Gui/Partials/widget.twig\" with {widget_title: 'Google Analytics Configuration'} %}
     {% endembed  %}
{#    {{ dump(_context|keys) }}#}

    {{ form_start(GoogleAnalyticsForm) }}
    {{ form_label(GoogleAnalyticsForm.analyticsKey) }}
    {{ form_widget(GoogleAnalyticsForm.analyticsKey) }}
    {{ form_errors(GoogleAnalyticsForm.analyticsKey) }}
    <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"  style=\"margin-top: 10px;\"/>
    {{ form_end(GoogleAnalyticsForm) }}
{% endblock %}
", "@GoogleAnalytics/Googleanalytics/index.twig", "/data/src/Pyz/Zed/GoogleAnalytics/Presentation/Googleanalytics/index.twig");
    }
}


/* @GoogleAnalytics/Googleanalytics/index.twig */
class __TwigTemplate_1971f5dbaf102a9c4aa005aa6bcd6651873c68f18efd459c902d7e5d41908942___1926729179 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@GoogleAnalytics/Googleanalytics/index.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@GoogleAnalytics/Googleanalytics/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 3,  73 => 12,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}
{% block content %}
    {% embed \"@Gui/Partials/widget.twig\" with {widget_title: 'Google Analytics Configuration'} %}
     {% endembed  %}
{#    {{ dump(_context|keys) }}#}

    {{ form_start(GoogleAnalyticsForm) }}
    {{ form_label(GoogleAnalyticsForm.analyticsKey) }}
    {{ form_widget(GoogleAnalyticsForm.analyticsKey) }}
    {{ form_errors(GoogleAnalyticsForm.analyticsKey) }}
    <input class=\"btn btn-success\" type=\"submit\" value=\"Save\"  style=\"margin-top: 10px;\"/>
    {{ form_end(GoogleAnalyticsForm) }}
{% endblock %}
", "@GoogleAnalytics/Googleanalytics/index.twig", "/data/src/Pyz/Zed/GoogleAnalytics/Presentation/Googleanalytics/index.twig");
    }
}
