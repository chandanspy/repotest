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

/* @ContentGui/CreateContent/index.twig */
class __TwigTemplate_b21011a5864438f0564794fed9c5bf87b36892d432fbf9d7f3b32f5014facdf5 extends Template
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
            'widget_content' => [$this, 'block_widget_content'],
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
        if ( !array_key_exists("widget_title", $context)) {
            // line 4
            $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Content Item");
        }
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ContentGui/CreateContent/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 7, $this->source); })()), "html", null, true);
    }

    // line 8
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Content Item") . ": ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["contentName"]) || array_key_exists("contentName", $context) ? $context["contentName"] : (function () { throw new RuntimeError('Variable "contentName" does not exist.', 8, $this->source); })()))), "html", null, true);
    }

    // line 10
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [(isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 11, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Content Items")]);
        echo "
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $this->displayBlock('widget_content', $context, $blocks);
    }

    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contentForm"]) || array_key_exists("contentForm", $context) ? $context["contentForm"] : (function () { throw new RuntimeError('Variable "contentForm" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-12\">
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contentForm"]) || array_key_exists("contentForm", $context) ? $context["contentForm"] : (function () { throw new RuntimeError('Variable "contentForm" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-12\">
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contentForm"]) || array_key_exists("contentForm", $context) ? $context["contentForm"] : (function () { throw new RuntimeError('Variable "contentForm" does not exist.', 26, $this->source); })()), "description", [], "any", false, false, false, 26), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                        ";
        // line 31
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["contentTabs"]) || array_key_exists("contentTabs", $context) ? $context["contentTabs"] : (function () { throw new RuntimeError('Variable "contentTabs" does not exist.', 31, $this->source); })()), ["contentForm" => (isset($context["contentForm"]) || array_key_exists("contentForm", $context) ? $context["contentForm"] : (function () { throw new RuntimeError('Variable "contentForm" does not exist.', 31, $this->source); })())]]);
        echo "
                        </div>
                    </div>
                ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contentForm"]) || array_key_exists("contentForm", $context) ? $context["contentForm"] : (function () { throw new RuntimeError('Variable "contentForm" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <script src=\"";
        // line 37
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-content-clear.js"]);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 38
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-content-clear.css"]);
        echo "\" />
    ";
    }

    public function getTemplateName()
    {
        return "@ContentGui/CreateContent/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  131 => 37,  125 => 34,  119 => 31,  111 => 26,  103 => 21,  97 => 18,  93 => 16,  85 => 15,  81 => 14,  74 => 11,  70 => 10,  63 => 8,  56 => 7,  51 => 1,  48 => 4,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% if widget_title is not defined %}
    {% set widget_title = 'Create Content Item' | trans %}
{% endif %}

{% block head_title widget_title %}
{% block section_title 'Create Content Item' | trans ~ ': ' ~ contentName | trans %}

{% block action %}
    {{ backActionButton(backButton, 'Back to Content Items' | trans) }}
{% endblock %}

{% block content %}
    {% block widget_content %}
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {{ form_start(contentForm, {attr: {novalidate: 'novalidate'}}) }}
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-12\">
                            {{ form_row(contentForm.name) }}
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-12\">
                            {{ form_row(contentForm.description) }}
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                        {{ tabs(contentTabs, {'contentForm' : contentForm} ) }}
                        </div>
                    </div>
                {{ form_end(contentForm) }}
            </div>
        </div>
        <script src=\"{{ assetsPath('js/spryker-zed-content-clear.js') }}\"></script>
        <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-content-clear.css') }}\" />
    {% endblock %}
{% endblock %}

", "@ContentGui/CreateContent/index.twig", "/data/vendor/spryker/content-gui/src/Spryker/Zed/ContentGui/Presentation//CreateContent/index.twig");
    }
}
