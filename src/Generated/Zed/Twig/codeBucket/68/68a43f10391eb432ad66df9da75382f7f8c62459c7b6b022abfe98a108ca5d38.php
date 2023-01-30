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

/* @ContentGui/EditContent/index.twig */
class __TwigTemplate_4fe9e7cfb2e75dfc1be66a08f23bb4301399532c42db9e00146b1ccdece53e9b extends Template
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
            $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Content Item");
        }
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@ContentGui/EditContent/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 7, $this->source); })()), "html", null, true);
    }

    // line 9
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Content Item") . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["contentName"]) || array_key_exists("contentName", $context) ? $context["contentName"] : (function () { throw new RuntimeError('Variable "contentName" does not exist.', 10, $this->source); })()))) . ": "), "html", null, true);
        echo " <br/>
    <small>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["contentKey"]) || array_key_exists("contentKey", $context) ? $context["contentKey"] : (function () { throw new RuntimeError('Variable "contentKey" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</small>
";
    }

    // line 14
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [(isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 15, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Content Items")]);
        echo "
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->displayBlock('widget_content', $context, $blocks);
    }

    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contentForm"]) || array_key_exists("contentForm", $context) ? $context["contentForm"] : (function () { throw new RuntimeError('Variable "contentForm" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-12\">
                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contentForm"]) || array_key_exists("contentForm", $context) ? $context["contentForm"] : (function () { throw new RuntimeError('Variable "contentForm" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-md-12\">
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contentForm"]) || array_key_exists("contentForm", $context) ? $context["contentForm"] : (function () { throw new RuntimeError('Variable "contentForm" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'row');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            ";
        // line 35
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["contentTabs"]) || array_key_exists("contentTabs", $context) ? $context["contentTabs"] : (function () { throw new RuntimeError('Variable "contentTabs" does not exist.', 35, $this->source); })()), ["contentForm" => (isset($context["contentForm"]) || array_key_exists("contentForm", $context) ? $context["contentForm"] : (function () { throw new RuntimeError('Variable "contentForm" does not exist.', 35, $this->source); })())]]);
        echo "
                        </div>
                    </div>
                ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contentForm"]) || array_key_exists("contentForm", $context) ? $context["contentForm"] : (function () { throw new RuntimeError('Variable "contentForm" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
        <script src=\"";
        // line 41
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-content-clear.js"]);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 42
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-content-clear.css"]);
        echo "\" />
    ";
    }

    public function getTemplateName()
    {
        return "@ContentGui/EditContent/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  139 => 41,  133 => 38,  127 => 35,  119 => 30,  111 => 25,  105 => 22,  101 => 20,  93 => 19,  89 => 18,  82 => 15,  78 => 14,  72 => 11,  67 => 10,  63 => 9,  56 => 7,  51 => 1,  48 => 4,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% if widget_title is not defined %}
    {% set widget_title = 'Edit Content Item' | trans %}
{% endif %}

{% block head_title widget_title %}

{% block section_title %}
    {{ 'Edit Content Item' | trans ~ ' ' ~ contentName | trans ~ ': ' }} <br/>
    <small>{{ contentKey }}</small>
{% endblock %}

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
", "@ContentGui/EditContent/index.twig", "/data/vendor/spryker/content-gui/src/Spryker/Zed/ContentGui/Presentation//EditContent/index.twig");
    }
}
