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

/* @CmsBlockGui/EditGlossary/index.twig */
class __TwigTemplate_127dc2933722ac5b03ce74315993a8073078dfc995bd9c36dc8976f5c7bcfa1a extends Template
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
            'common_js' => [$this, 'block_common_js'],
            'init_js' => [$this, 'block_init_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        $context["widget_title"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Block Glossary:") . " ") . (isset($context["idCmsBlock"]) || array_key_exists("idCmsBlock", $context) ? $context["idCmsBlock"] : (function () { throw new RuntimeError('Variable "idCmsBlock" does not exist.', 5, $this->source); })()));
        // line 3
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@CmsBlockGui/EditGlossary/index.twig", 3);
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
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 8, $this->source); })()), "html", null, true);
    }

    // line 10
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $context["redirectUrl"] = call_user_func_array($this->env->getFunction('url')->getCallable(), ["/cms-block-gui/edit-glossary", ["id-cms-block" => (isset($context["idCmsBlock"]) || array_key_exists("idCmsBlock", $context) ? $context["idCmsBlock"] : (function () { throw new RuntimeError('Variable "idCmsBlock" does not exist.', 11, $this->source); })())]]);
        // line 12
        echo "    ";
        echo call_user_func_array($this->env->getFunction('editActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/cms-block-gui/edit-block", ["id-cms-block" => (isset($context["idCmsBlock"]) || array_key_exists("idCmsBlock", $context) ? $context["idCmsBlock"] : (function () { throw new RuntimeError('Variable "idCmsBlock" does not exist.', 12, $this->source); })())]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit block")]);
        echo "
    ";
        // line 13
        echo twig_include($this->env, $context, "@CmsBlockGui/_partial/activate-button.twig", ["id-cms-block" => (isset($context["idCmsBlock"]) || array_key_exists("idCmsBlock", $context) ? $context["idCmsBlock"] : (function () { throw new RuntimeError('Variable "idCmsBlock" does not exist.', 13, $this->source); })()), "isActive" => twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 13, $this->source); })()), "isActive", [], "any", false, false, false, 13)]);
        echo "
    ";
        // line 14
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/cms-block-gui/list-block", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to list")]);
        echo "
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
    ";
        // line 19
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["placeholderTabs"]) || array_key_exists("placeholderTabs", $context) ? $context["placeholderTabs"] : (function () { throw new RuntimeError('Variable "placeholderTabs" does not exist.', 19, $this->source); })()), "tabs", [], "any", false, false, false, 19)), 0))) {
            // line 20
            echo "
        ";
            // line 21
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["glossaryForm"]) || array_key_exists("glossaryForm", $context) ? $context["glossaryForm"] : (function () { throw new RuntimeError('Variable "glossaryForm" does not exist.', 21, $this->source); })()), 'form_start');
            echo "

        ";
            // line 23
            echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["placeholderTabs"]) || array_key_exists("placeholderTabs", $context) ? $context["placeholderTabs"] : (function () { throw new RuntimeError('Variable "placeholderTabs" does not exist.', 23, $this->source); })()), ["availableLocales" => (isset($context["availableLocales"]) || array_key_exists("availableLocales", $context) ? $context["availableLocales"] : (function () { throw new RuntimeError('Variable "availableLocales" does not exist.', 23, $this->source); })()), "glossaryForm" => (isset($context["glossaryForm"]) || array_key_exists("glossaryForm", $context) ? $context["glossaryForm"] : (function () { throw new RuntimeError('Variable "glossaryForm" does not exist.', 23, $this->source); })())]]);
            echo "
        ";
            // line 24
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["glossaryForm"]) || array_key_exists("glossaryForm", $context) ? $context["glossaryForm"] : (function () { throw new RuntimeError('Variable "glossaryForm" does not exist.', 24, $this->source); })()), "glossaryPlaceholders", [], "any", false, false, false, 24), "setRendered", [], "any", false, false, false, 24);
            // line 25
            echo "
        ";
            // line 26
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["glossaryForm"]) || array_key_exists("glossaryForm", $context) ? $context["glossaryForm"] : (function () { throw new RuntimeError('Variable "glossaryForm" does not exist.', 26, $this->source); })()), 'form_end');
            echo "

    ";
        } else {
            // line 29
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Missing placeholders for selected template."), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 33
        echo "
";
    }

    // line 37
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    ";
        $this->displayBlock('common_js', $context, $blocks);
        // line 39
        echo "    ";
        $this->displayBlock('init_js', $context, $blocks);
        // line 44
        echo "    <script src=\"";
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-cms-block-gui-main.js"]);
        echo "\"></script>
";
    }

    // line 38
    public function block_common_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("common_js", $context, $blocks);
    }

    // line 39
    public function block_init_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("/cms-content-widget/assets/index"), ["ignore_errors" => true]);
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("/content-gui/assets/index"), ["ignore_errors" => true]);
        echo "
        ";
        // line 42
        $this->displayParentBlock("init_js", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@CmsBlockGui/EditGlossary/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 42,  170 => 41,  165 => 40,  161 => 39,  154 => 38,  147 => 44,  144 => 39,  141 => 38,  137 => 37,  132 => 33,  126 => 30,  123 => 29,  117 => 26,  114 => 25,  112 => 24,  108 => 23,  103 => 21,  100 => 20,  98 => 19,  95 => 18,  91 => 17,  85 => 14,  81 => 13,  76 => 12,  73 => 11,  69 => 10,  62 => 8,  55 => 7,  50 => 3,  48 => 5,  41 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var cmsBlock \\Generated\\Shared\\Transfer\\CmsBlockTransfer #}

{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Edit Block Glossary:' | trans ~ ' ' ~ idCmsBlock %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}
    {% set redirectUrl = url('/cms-block-gui/edit-glossary', {'id-cms-block' : idCmsBlock}) %}
    {{ editActionButton(url('/cms-block-gui/edit-block', {'id-cms-block': idCmsBlock}), 'Edit block' | trans) }}
    {{ include ('@CmsBlockGui/_partial/activate-button.twig', { 'id-cms-block': idCmsBlock, 'isActive': cmsBlock.isActive}) }}
    {{ backActionButton('/cms-block-gui/list-block', 'Back to list' | trans) }}
{% endblock %}

{% block content %}

    {% if placeholderTabs.tabs | length > 0 %}

        {{ form_start(glossaryForm) }}

        {{ tabs(placeholderTabs, {'availableLocales' : availableLocales, 'glossaryForm' : glossaryForm}) }}
        {% do glossaryForm.glossaryPlaceholders.setRendered %}

        {{ form_end(glossaryForm) }}

    {% else %}
        <div class=\"alert alert-danger\">
            {{ \"Missing placeholders for selected template.\" | trans }}
        </div>
    {% endif %}

{% endblock %}


{% block footer_js %}
    {% block common_js %}{{ parent() }}{% endblock %}
    {% block init_js %}
        {{ render(controller('/cms-content-widget/assets/index'), {'ignore_errors':true}) }}
        {{ render(controller('/content-gui/assets/index'), {'ignore_errors':true}) }}
        {{ parent() }}
    {% endblock %}
    <script src=\"{{ assetsPath('js/spryker-zed-cms-block-gui-main.js') }}\"></script>
{% endblock %}


", "@CmsBlockGui/EditGlossary/index.twig", "/data/vendor/spryker/cms-block-gui/src/Spryker/Zed/CmsBlockGui/Presentation//EditGlossary/index.twig");
    }
}
