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

/* @CmsBlockGui/ViewBlock/index.twig */
class __TwigTemplate_77bd072bff45a62dd1d1b5f1a38169917dad35e1a8e0dd67ea977141bc7244ea extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@CmsBlockGui/_layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["widget_title"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View CMS Block:") . " ") . twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 3, $this->source); })()), "idCmsBlock", [], "any", false, false, false, 3));
        // line 1
        $this->parent = $this->loadTemplate("@CmsBlockGui/_layout/layout.twig", "@CmsBlockGui/ViewBlock/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })()), "html", null, true);
    }

    // line 6
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 6, $this->source); })()), "html", null, true);
    }

    // line 8
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
    ";
        // line 10
        $context["redirectUrl"] = call_user_func_array($this->env->getFunction('url')->getCallable(), ["/cms-block-gui/view-block", ["id-cms-block" => twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 10, $this->source); })()), "idCmsBlock", [], "any", false, false, false, 10)]]);
        // line 11
        echo "    ";
        echo call_user_func_array($this->env->getFunction('editActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/cms-block-gui/edit-block", ["id-cms-block" => twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 11, $this->source); })()), "idCmsBlock", [], "any", false, false, false, 11)]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit block")]);
        echo "
    ";
        // line 12
        echo call_user_func_array($this->env->getFunction('editActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/cms-block-gui/edit-glossary", ["id-cms-block" => twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 12, $this->source); })()), "idCmsBlock", [], "any", false, false, false, 12)]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit placeholders")]);
        echo "
    ";
        // line 13
        echo twig_include($this->env, $context, "@CmsBlockGui/_partial/activate-button.twig", ["isActive" => twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 13, $this->source); })()), "isActive", [], "any", false, false, false, 13), "idCmsBlock" => twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 13, $this->source); })()), "idCmsBlock", [], "any", false, false, false, 13)]);
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
        $this->loadTemplate("@CmsBlockGui/ViewBlock/index.twig", "@CmsBlockGui/ViewBlock/index.twig", 19, "1577353692")->display(twig_array_merge($context, ["widget_title" => "General information"]));
        // line 44
        echo "
    ";
        // line 45
        $this->loadTemplate("@CmsBlockGui/ViewBlock/index.twig", "@CmsBlockGui/ViewBlock/index.twig", 45, "382591221")->display(twig_array_merge($context, ["widget_title" => "Placeholders"]));
        // line 69
        echo "
    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["renderedPlugins"]) || array_key_exists("renderedPlugins", $context) ? $context["renderedPlugins"] : (function () { throw new RuntimeError('Variable "renderedPlugins" does not exist.', 70, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["pluginName"] => $context["renderedPlugin"]) {
            // line 71
            echo "        ";
            $this->loadTemplate("@CmsBlockGui/ViewBlock/index.twig", "@CmsBlockGui/ViewBlock/index.twig", 71, "44013975")->display(twig_array_merge($context, ["widget_title" => $context["pluginName"]]));
            // line 82
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['renderedPlugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CmsBlockGui/ViewBlock/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 83,  131 => 82,  128 => 71,  111 => 70,  108 => 69,  106 => 45,  103 => 44,  101 => 19,  98 => 18,  94 => 17,  88 => 14,  84 => 13,  80 => 12,  75 => 11,  73 => 10,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@CmsBlockGui/_layout/layout.twig' %}

{% set widget_title = 'View CMS Block:' | trans ~ ' ' ~ cmsBlock.idCmsBlock %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}

    {% set redirectUrl = url('/cms-block-gui/view-block', {'id-cms-block' : cmsBlock.idCmsBlock }) %}
    {{ editActionButton(url('/cms-block-gui/edit-block', { 'id-cms-block': cmsBlock.idCmsBlock }), 'Edit block' | trans) }}
    {{ editActionButton(url('/cms-block-gui/edit-glossary', {'id-cms-block': cmsBlock.idCmsBlock}), 'Edit placeholders' | trans) }}
    {{ include ('@CmsBlockGui/_partial/activate-button.twig', { 'isActive': cmsBlock.isActive, 'idCmsBlock': cmsBlock.idCmsBlock }) }}
    {{ backActionButton('/cms-block-gui/list-block', 'Back to list' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'General information' }  %}
        {% block widget_content %}
            <p>
                <strong>{{ 'Store relation' | trans }}:</strong>
                {% for storeName in relatedStoreNames %}
                    <span class=\"label label-info\">{{ storeName }}</span>
                {% endfor %}
            </p>
            <p>
                <strong>{{ 'Is active:' | trans }}</strong> {{ cmsBlock.isActive ? 'yes'|trans : 'no'|trans}}
            </p>

            <p>
                <strong>{{ 'Template:' | trans }}</strong> {{ cmsBlock.templateName }}
            </p>

            <p>
                <strong>{{ 'Valid from:' | trans }}</strong> {{ cmsBlock.validFrom ? cmsBlock.validFrom|date : 'n/a'|trans }}
            </p>

            <p>
                <strong>{{ 'Valid to:' | trans }}</strong> {{ cmsBlock.validTo ? cmsBlock.validTo|date : 'n/a'|trans }}
            </p>
        {% endblock %}
    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Placeholders' } %}
        {% block widget_content %}

            {% for glossaryPlaceholder in cmsBlockGlossary.glossaryPlaceholders %}

                <h3>{{ glossaryPlaceholder.placeholder }}</h3>

                <p>
                    <strong>{{ 'Translation key:' | trans }}</strong> {{ glossaryPlaceholder.translationKey }}
                </p>

                {% for translation in glossaryPlaceholder.translations %}
                   {% embed '@Gui/Partials/localized-ibox.twig' with {'localeName': translation.localeName, 'collapsed': true , 'hasError': false} %}
                       {% block content %}
                           {{ translation.translation | raw }}
                       {% endblock %}
                   {% endembed %}
                {% endfor %}

                <br>
            {% endfor %}

        {% endblock %}
    {% endembed %}

    {% for pluginName, renderedPlugin in renderedPlugins %}
        {% embed '@Gui/Partials/widget.twig' with { widget_title: pluginName } %}
            {% block widget_content %}
                {% if renderedPlugin %}
                    {% for item in renderedPlugin %}
                        <p>{{ item }}</p>
                    {% endfor %}
                {% else %}
                    <p>{{ 'No records' | trans }}</p>
                {% endif %}
            {% endblock %}
        {% endembed %}
    {% endfor %}

{% endblock %}
", "@CmsBlockGui/ViewBlock/index.twig", "/data/vendor/spryker/cms-block-gui/src/Spryker/Zed/CmsBlockGui/Presentation//ViewBlock/index.twig");
    }
}


/* @CmsBlockGui/ViewBlock/index.twig */
class __TwigTemplate_77bd072bff45a62dd1d1b5f1a38169917dad35e1a8e0dd67ea977141bc7244ea___1577353692 extends Template
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
        // line 19
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CmsBlockGui/ViewBlock/index.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "            <p>
                <strong>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store relation"), "html", null, true);
        echo ":</strong>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["relatedStoreNames"]) || array_key_exists("relatedStoreNames", $context) ? $context["relatedStoreNames"] : (function () { throw new RuntimeError('Variable "relatedStoreNames" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["storeName"]) {
            // line 24
            echo "                    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $context["storeName"], "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['storeName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </p>
            <p>
                <strong>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Is active:"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 28, $this->source); })()), "isActive", [], "any", false, false, false, 28)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yes")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no"))), "html", null, true);
        echo "
            </p>

            <p>
                <strong>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Template:"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 32, $this->source); })()), "templateName", [], "any", false, false, false, 32), "html", null, true);
        echo "
            </p>

            <p>
                <strong>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Valid from:"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 36, $this->source); })()), "validFrom", [], "any", false, false, false, 36)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 36, $this->source); })()), "validFrom", [], "any", false, false, false, 36))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("n/a"))), "html", null, true);
        echo "
            </p>

            <p>
                <strong>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Valid to:"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 40, $this->source); })()), "validTo", [], "any", false, false, false, 40)) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cmsBlock"]) || array_key_exists("cmsBlock", $context) ? $context["cmsBlock"] : (function () { throw new RuntimeError('Variable "cmsBlock" does not exist.', 40, $this->source); })()), "validTo", [], "any", false, false, false, 40))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("n/a"))), "html", null, true);
        echo "
            </p>
        ";
    }

    public function getTemplateName()
    {
        return "@CmsBlockGui/ViewBlock/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 40,  332 => 36,  323 => 32,  314 => 28,  310 => 26,  301 => 24,  297 => 23,  293 => 22,  290 => 21,  286 => 20,  275 => 19,  145 => 83,  131 => 82,  128 => 71,  111 => 70,  108 => 69,  106 => 45,  103 => 44,  101 => 19,  98 => 18,  94 => 17,  88 => 14,  84 => 13,  80 => 12,  75 => 11,  73 => 10,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@CmsBlockGui/_layout/layout.twig' %}

{% set widget_title = 'View CMS Block:' | trans ~ ' ' ~ cmsBlock.idCmsBlock %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}

    {% set redirectUrl = url('/cms-block-gui/view-block', {'id-cms-block' : cmsBlock.idCmsBlock }) %}
    {{ editActionButton(url('/cms-block-gui/edit-block', { 'id-cms-block': cmsBlock.idCmsBlock }), 'Edit block' | trans) }}
    {{ editActionButton(url('/cms-block-gui/edit-glossary', {'id-cms-block': cmsBlock.idCmsBlock}), 'Edit placeholders' | trans) }}
    {{ include ('@CmsBlockGui/_partial/activate-button.twig', { 'isActive': cmsBlock.isActive, 'idCmsBlock': cmsBlock.idCmsBlock }) }}
    {{ backActionButton('/cms-block-gui/list-block', 'Back to list' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'General information' }  %}
        {% block widget_content %}
            <p>
                <strong>{{ 'Store relation' | trans }}:</strong>
                {% for storeName in relatedStoreNames %}
                    <span class=\"label label-info\">{{ storeName }}</span>
                {% endfor %}
            </p>
            <p>
                <strong>{{ 'Is active:' | trans }}</strong> {{ cmsBlock.isActive ? 'yes'|trans : 'no'|trans}}
            </p>

            <p>
                <strong>{{ 'Template:' | trans }}</strong> {{ cmsBlock.templateName }}
            </p>

            <p>
                <strong>{{ 'Valid from:' | trans }}</strong> {{ cmsBlock.validFrom ? cmsBlock.validFrom|date : 'n/a'|trans }}
            </p>

            <p>
                <strong>{{ 'Valid to:' | trans }}</strong> {{ cmsBlock.validTo ? cmsBlock.validTo|date : 'n/a'|trans }}
            </p>
        {% endblock %}
    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Placeholders' } %}
        {% block widget_content %}

            {% for glossaryPlaceholder in cmsBlockGlossary.glossaryPlaceholders %}

                <h3>{{ glossaryPlaceholder.placeholder }}</h3>

                <p>
                    <strong>{{ 'Translation key:' | trans }}</strong> {{ glossaryPlaceholder.translationKey }}
                </p>

                {% for translation in glossaryPlaceholder.translations %}
                   {% embed '@Gui/Partials/localized-ibox.twig' with {'localeName': translation.localeName, 'collapsed': true , 'hasError': false} %}
                       {% block content %}
                           {{ translation.translation | raw }}
                       {% endblock %}
                   {% endembed %}
                {% endfor %}

                <br>
            {% endfor %}

        {% endblock %}
    {% endembed %}

    {% for pluginName, renderedPlugin in renderedPlugins %}
        {% embed '@Gui/Partials/widget.twig' with { widget_title: pluginName } %}
            {% block widget_content %}
                {% if renderedPlugin %}
                    {% for item in renderedPlugin %}
                        <p>{{ item }}</p>
                    {% endfor %}
                {% else %}
                    <p>{{ 'No records' | trans }}</p>
                {% endif %}
            {% endblock %}
        {% endembed %}
    {% endfor %}

{% endblock %}
", "@CmsBlockGui/ViewBlock/index.twig", "/data/vendor/spryker/cms-block-gui/src/Spryker/Zed/CmsBlockGui/Presentation//ViewBlock/index.twig");
    }
}


/* @CmsBlockGui/ViewBlock/index.twig */
class __TwigTemplate_77bd072bff45a62dd1d1b5f1a38169917dad35e1a8e0dd67ea977141bc7244ea___382591221 extends Template
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
        // line 45
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CmsBlockGui/ViewBlock/index.twig", 45);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cmsBlockGlossary"]) || array_key_exists("cmsBlockGlossary", $context) ? $context["cmsBlockGlossary"] : (function () { throw new RuntimeError('Variable "cmsBlockGlossary" does not exist.', 48, $this->source); })()), "glossaryPlaceholders", [], "any", false, false, false, 48));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["glossaryPlaceholder"]) {
            // line 49
            echo "
                <h3>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["glossaryPlaceholder"], "placeholder", [], "any", false, false, false, 50), "html", null, true);
            echo "</h3>

                <p>
                    <strong>";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Translation key:"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["glossaryPlaceholder"], "translationKey", [], "any", false, false, false, 53), "html", null, true);
            echo "
                </p>

                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["glossaryPlaceholder"], "translations", [], "any", false, false, false, 56));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                // line 57
                echo "                   ";
                $this->loadTemplate("@CmsBlockGui/ViewBlock/index.twig", "@CmsBlockGui/ViewBlock/index.twig", 57, "186283564")->display(twig_array_merge($context, ["localeName" => twig_get_attribute($this->env, $this->source, $context["translation"], "localeName", [], "any", false, false, false, 57), "collapsed" => true, "hasError" => false]));
                // line 62
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
                <br>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['glossaryPlaceholder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@CmsBlockGui/ViewBlock/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  577 => 66,  561 => 63,  547 => 62,  544 => 57,  527 => 56,  519 => 53,  513 => 50,  510 => 49,  493 => 48,  490 => 47,  486 => 46,  475 => 45,  341 => 40,  332 => 36,  323 => 32,  314 => 28,  310 => 26,  301 => 24,  297 => 23,  293 => 22,  290 => 21,  286 => 20,  275 => 19,  145 => 83,  131 => 82,  128 => 71,  111 => 70,  108 => 69,  106 => 45,  103 => 44,  101 => 19,  98 => 18,  94 => 17,  88 => 14,  84 => 13,  80 => 12,  75 => 11,  73 => 10,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@CmsBlockGui/_layout/layout.twig' %}

{% set widget_title = 'View CMS Block:' | trans ~ ' ' ~ cmsBlock.idCmsBlock %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}

    {% set redirectUrl = url('/cms-block-gui/view-block', {'id-cms-block' : cmsBlock.idCmsBlock }) %}
    {{ editActionButton(url('/cms-block-gui/edit-block', { 'id-cms-block': cmsBlock.idCmsBlock }), 'Edit block' | trans) }}
    {{ editActionButton(url('/cms-block-gui/edit-glossary', {'id-cms-block': cmsBlock.idCmsBlock}), 'Edit placeholders' | trans) }}
    {{ include ('@CmsBlockGui/_partial/activate-button.twig', { 'isActive': cmsBlock.isActive, 'idCmsBlock': cmsBlock.idCmsBlock }) }}
    {{ backActionButton('/cms-block-gui/list-block', 'Back to list' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'General information' }  %}
        {% block widget_content %}
            <p>
                <strong>{{ 'Store relation' | trans }}:</strong>
                {% for storeName in relatedStoreNames %}
                    <span class=\"label label-info\">{{ storeName }}</span>
                {% endfor %}
            </p>
            <p>
                <strong>{{ 'Is active:' | trans }}</strong> {{ cmsBlock.isActive ? 'yes'|trans : 'no'|trans}}
            </p>

            <p>
                <strong>{{ 'Template:' | trans }}</strong> {{ cmsBlock.templateName }}
            </p>

            <p>
                <strong>{{ 'Valid from:' | trans }}</strong> {{ cmsBlock.validFrom ? cmsBlock.validFrom|date : 'n/a'|trans }}
            </p>

            <p>
                <strong>{{ 'Valid to:' | trans }}</strong> {{ cmsBlock.validTo ? cmsBlock.validTo|date : 'n/a'|trans }}
            </p>
        {% endblock %}
    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Placeholders' } %}
        {% block widget_content %}

            {% for glossaryPlaceholder in cmsBlockGlossary.glossaryPlaceholders %}

                <h3>{{ glossaryPlaceholder.placeholder }}</h3>

                <p>
                    <strong>{{ 'Translation key:' | trans }}</strong> {{ glossaryPlaceholder.translationKey }}
                </p>

                {% for translation in glossaryPlaceholder.translations %}
                   {% embed '@Gui/Partials/localized-ibox.twig' with {'localeName': translation.localeName, 'collapsed': true , 'hasError': false} %}
                       {% block content %}
                           {{ translation.translation | raw }}
                       {% endblock %}
                   {% endembed %}
                {% endfor %}

                <br>
            {% endfor %}

        {% endblock %}
    {% endembed %}

    {% for pluginName, renderedPlugin in renderedPlugins %}
        {% embed '@Gui/Partials/widget.twig' with { widget_title: pluginName } %}
            {% block widget_content %}
                {% if renderedPlugin %}
                    {% for item in renderedPlugin %}
                        <p>{{ item }}</p>
                    {% endfor %}
                {% else %}
                    <p>{{ 'No records' | trans }}</p>
                {% endif %}
            {% endblock %}
        {% endembed %}
    {% endfor %}

{% endblock %}
", "@CmsBlockGui/ViewBlock/index.twig", "/data/vendor/spryker/cms-block-gui/src/Spryker/Zed/CmsBlockGui/Presentation//ViewBlock/index.twig");
    }
}


/* @CmsBlockGui/ViewBlock/index.twig */
class __TwigTemplate_77bd072bff45a62dd1d1b5f1a38169917dad35e1a8e0dd67ea977141bc7244ea___186283564 extends Template
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
        // line 57
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@CmsBlockGui/ViewBlock/index.twig", 57);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                           ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 59, $this->source); })()), "translation", [], "any", false, false, false, 59);
        echo "
                       ";
    }

    public function getTemplateName()
    {
        return "@CmsBlockGui/ViewBlock/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  722 => 59,  718 => 58,  707 => 57,  577 => 66,  561 => 63,  547 => 62,  544 => 57,  527 => 56,  519 => 53,  513 => 50,  510 => 49,  493 => 48,  490 => 47,  486 => 46,  475 => 45,  341 => 40,  332 => 36,  323 => 32,  314 => 28,  310 => 26,  301 => 24,  297 => 23,  293 => 22,  290 => 21,  286 => 20,  275 => 19,  145 => 83,  131 => 82,  128 => 71,  111 => 70,  108 => 69,  106 => 45,  103 => 44,  101 => 19,  98 => 18,  94 => 17,  88 => 14,  84 => 13,  80 => 12,  75 => 11,  73 => 10,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@CmsBlockGui/_layout/layout.twig' %}

{% set widget_title = 'View CMS Block:' | trans ~ ' ' ~ cmsBlock.idCmsBlock %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}

    {% set redirectUrl = url('/cms-block-gui/view-block', {'id-cms-block' : cmsBlock.idCmsBlock }) %}
    {{ editActionButton(url('/cms-block-gui/edit-block', { 'id-cms-block': cmsBlock.idCmsBlock }), 'Edit block' | trans) }}
    {{ editActionButton(url('/cms-block-gui/edit-glossary', {'id-cms-block': cmsBlock.idCmsBlock}), 'Edit placeholders' | trans) }}
    {{ include ('@CmsBlockGui/_partial/activate-button.twig', { 'isActive': cmsBlock.isActive, 'idCmsBlock': cmsBlock.idCmsBlock }) }}
    {{ backActionButton('/cms-block-gui/list-block', 'Back to list' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'General information' }  %}
        {% block widget_content %}
            <p>
                <strong>{{ 'Store relation' | trans }}:</strong>
                {% for storeName in relatedStoreNames %}
                    <span class=\"label label-info\">{{ storeName }}</span>
                {% endfor %}
            </p>
            <p>
                <strong>{{ 'Is active:' | trans }}</strong> {{ cmsBlock.isActive ? 'yes'|trans : 'no'|trans}}
            </p>

            <p>
                <strong>{{ 'Template:' | trans }}</strong> {{ cmsBlock.templateName }}
            </p>

            <p>
                <strong>{{ 'Valid from:' | trans }}</strong> {{ cmsBlock.validFrom ? cmsBlock.validFrom|date : 'n/a'|trans }}
            </p>

            <p>
                <strong>{{ 'Valid to:' | trans }}</strong> {{ cmsBlock.validTo ? cmsBlock.validTo|date : 'n/a'|trans }}
            </p>
        {% endblock %}
    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Placeholders' } %}
        {% block widget_content %}

            {% for glossaryPlaceholder in cmsBlockGlossary.glossaryPlaceholders %}

                <h3>{{ glossaryPlaceholder.placeholder }}</h3>

                <p>
                    <strong>{{ 'Translation key:' | trans }}</strong> {{ glossaryPlaceholder.translationKey }}
                </p>

                {% for translation in glossaryPlaceholder.translations %}
                   {% embed '@Gui/Partials/localized-ibox.twig' with {'localeName': translation.localeName, 'collapsed': true , 'hasError': false} %}
                       {% block content %}
                           {{ translation.translation | raw }}
                       {% endblock %}
                   {% endembed %}
                {% endfor %}

                <br>
            {% endfor %}

        {% endblock %}
    {% endembed %}

    {% for pluginName, renderedPlugin in renderedPlugins %}
        {% embed '@Gui/Partials/widget.twig' with { widget_title: pluginName } %}
            {% block widget_content %}
                {% if renderedPlugin %}
                    {% for item in renderedPlugin %}
                        <p>{{ item }}</p>
                    {% endfor %}
                {% else %}
                    <p>{{ 'No records' | trans }}</p>
                {% endif %}
            {% endblock %}
        {% endembed %}
    {% endfor %}

{% endblock %}
", "@CmsBlockGui/ViewBlock/index.twig", "/data/vendor/spryker/cms-block-gui/src/Spryker/Zed/CmsBlockGui/Presentation//ViewBlock/index.twig");
    }
}


/* @CmsBlockGui/ViewBlock/index.twig */
class __TwigTemplate_77bd072bff45a62dd1d1b5f1a38169917dad35e1a8e0dd67ea977141bc7244ea___44013975 extends Template
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
        // line 71
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CmsBlockGui/ViewBlock/index.twig", 71);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 72
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                ";
        if ((isset($context["renderedPlugin"]) || array_key_exists("renderedPlugin", $context) ? $context["renderedPlugin"] : (function () { throw new RuntimeError('Variable "renderedPlugin" does not exist.', 73, $this->source); })())) {
            // line 74
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["renderedPlugin"]) || array_key_exists("renderedPlugin", $context) ? $context["renderedPlugin"] : (function () { throw new RuntimeError('Variable "renderedPlugin" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 75
                echo "                        <p>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                ";
        } else {
            // line 78
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No records"), "html", null, true);
            echo "</p>
                ";
        }
        // line 80
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@CmsBlockGui/ViewBlock/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  895 => 80,  889 => 78,  886 => 77,  877 => 75,  872 => 74,  869 => 73,  865 => 72,  854 => 71,  722 => 59,  718 => 58,  707 => 57,  577 => 66,  561 => 63,  547 => 62,  544 => 57,  527 => 56,  519 => 53,  513 => 50,  510 => 49,  493 => 48,  490 => 47,  486 => 46,  475 => 45,  341 => 40,  332 => 36,  323 => 32,  314 => 28,  310 => 26,  301 => 24,  297 => 23,  293 => 22,  290 => 21,  286 => 20,  275 => 19,  145 => 83,  131 => 82,  128 => 71,  111 => 70,  108 => 69,  106 => 45,  103 => 44,  101 => 19,  98 => 18,  94 => 17,  88 => 14,  84 => 13,  80 => 12,  75 => 11,  73 => 10,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@CmsBlockGui/_layout/layout.twig' %}

{% set widget_title = 'View CMS Block:' | trans ~ ' ' ~ cmsBlock.idCmsBlock %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}

    {% set redirectUrl = url('/cms-block-gui/view-block', {'id-cms-block' : cmsBlock.idCmsBlock }) %}
    {{ editActionButton(url('/cms-block-gui/edit-block', { 'id-cms-block': cmsBlock.idCmsBlock }), 'Edit block' | trans) }}
    {{ editActionButton(url('/cms-block-gui/edit-glossary', {'id-cms-block': cmsBlock.idCmsBlock}), 'Edit placeholders' | trans) }}
    {{ include ('@CmsBlockGui/_partial/activate-button.twig', { 'isActive': cmsBlock.isActive, 'idCmsBlock': cmsBlock.idCmsBlock }) }}
    {{ backActionButton('/cms-block-gui/list-block', 'Back to list' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'General information' }  %}
        {% block widget_content %}
            <p>
                <strong>{{ 'Store relation' | trans }}:</strong>
                {% for storeName in relatedStoreNames %}
                    <span class=\"label label-info\">{{ storeName }}</span>
                {% endfor %}
            </p>
            <p>
                <strong>{{ 'Is active:' | trans }}</strong> {{ cmsBlock.isActive ? 'yes'|trans : 'no'|trans}}
            </p>

            <p>
                <strong>{{ 'Template:' | trans }}</strong> {{ cmsBlock.templateName }}
            </p>

            <p>
                <strong>{{ 'Valid from:' | trans }}</strong> {{ cmsBlock.validFrom ? cmsBlock.validFrom|date : 'n/a'|trans }}
            </p>

            <p>
                <strong>{{ 'Valid to:' | trans }}</strong> {{ cmsBlock.validTo ? cmsBlock.validTo|date : 'n/a'|trans }}
            </p>
        {% endblock %}
    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'Placeholders' } %}
        {% block widget_content %}

            {% for glossaryPlaceholder in cmsBlockGlossary.glossaryPlaceholders %}

                <h3>{{ glossaryPlaceholder.placeholder }}</h3>

                <p>
                    <strong>{{ 'Translation key:' | trans }}</strong> {{ glossaryPlaceholder.translationKey }}
                </p>

                {% for translation in glossaryPlaceholder.translations %}
                   {% embed '@Gui/Partials/localized-ibox.twig' with {'localeName': translation.localeName, 'collapsed': true , 'hasError': false} %}
                       {% block content %}
                           {{ translation.translation | raw }}
                       {% endblock %}
                   {% endembed %}
                {% endfor %}

                <br>
            {% endfor %}

        {% endblock %}
    {% endembed %}

    {% for pluginName, renderedPlugin in renderedPlugins %}
        {% embed '@Gui/Partials/widget.twig' with { widget_title: pluginName } %}
            {% block widget_content %}
                {% if renderedPlugin %}
                    {% for item in renderedPlugin %}
                        <p>{{ item }}</p>
                    {% endfor %}
                {% else %}
                    <p>{{ 'No records' | trans }}</p>
                {% endif %}
            {% endblock %}
        {% endembed %}
    {% endfor %}

{% endblock %}
", "@CmsBlockGui/ViewBlock/index.twig", "/data/vendor/spryker/cms-block-gui/src/Spryker/Zed/CmsBlockGui/Presentation//ViewBlock/index.twig");
    }
}
