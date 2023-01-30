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

/* @CmsBlockGui/_partial/glossary/tab-placeholder.twig */
class __TwigTemplate_4e91773a8baea2ec06addf70ad39a67ddaca41c4949d2cf4e6e2534ba00a6ad4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $context["placeholderForm"] = "";
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["glossaryForm"]) || array_key_exists("glossaryForm", $context) ? $context["glossaryForm"] : (function () { throw new RuntimeError('Variable "glossaryForm" does not exist.', 4, $this->source); })()), "glossaryPlaceholders", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["glossaryPlaceholder"]) {
            // line 5
            echo "    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["glossaryPlaceholder"], "vars", [], "any", false, false, false, 5), "data", [], "any", false, false, false, 5), "placeholder", [], "any", false, false, false, 5), ["." => "-"])))) {
                // line 6
                echo "        ";
                $context["placeholderForm"] = $context["glossaryPlaceholder"];
                // line 7
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['glossaryPlaceholder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
<div class=\"placeholder-translation-container\">

    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["placeholderForm"]) || array_key_exists("placeholderForm", $context) ? $context["placeholderForm"] : (function () { throw new RuntimeError('Variable "placeholderForm" does not exist.', 12, $this->source); })()), "idCmsBlockGlossaryKeyMapping", [], "any", false, false, false, 12), 'row');
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["placeholderForm"]) || array_key_exists("placeholderForm", $context) ? $context["placeholderForm"] : (function () { throw new RuntimeError('Variable "placeholderForm" does not exist.', 13, $this->source); })()), "templateName", [], "any", false, false, false, 13), 'row');
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["placeholderForm"]) || array_key_exists("placeholderForm", $context) ? $context["placeholderForm"] : (function () { throw new RuntimeError('Variable "placeholderForm" does not exist.', 14, $this->source); })()), "fkCmsBlock", [], "any", false, false, false, 14), 'row');
        echo "

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableLocales"]) || array_key_exists("availableLocales", $context) ? $context["availableLocales"] : (function () { throw new RuntimeError('Variable "availableLocales" does not exist.', 16, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 17
            echo "        ";
            $this->loadTemplate("@CmsBlockGui/_partial/glossary/tab-placeholder.twig", "@CmsBlockGui/_partial/glossary/tab-placeholder.twig", 17, "590841531")->display(twig_array_merge($context, ["localeName" => twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 17), "collapsed" => (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 17), 1))) ? (false) : (true)), "hasError" => false]));
            // line 41
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@CmsBlockGui/_partial/glossary/tab-placeholder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 42,  100 => 41,  97 => 17,  80 => 16,  75 => 14,  71 => 13,  67 => 12,  62 => 9,  55 => 7,  52 => 6,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set placeholderForm = '' %}

{% for glossaryPlaceholder in glossaryForm.glossaryPlaceholders %}
    {% if tab.name == glossaryPlaceholder.vars.data.placeholder|replace({'.': '-'}) %}
        {% set placeholderForm = glossaryPlaceholder %}
    {% endif %}
{% endfor %}

<div class=\"placeholder-translation-container\">

    {{ form_row(placeholderForm.idCmsBlockGlossaryKeyMapping) }}
    {{ form_row(placeholderForm.templateName) }}
    {{ form_row(placeholderForm.fkCmsBlock) }}

    {% for locale in availableLocales %}
        {% embed '@Gui/Partials/localized-ibox.twig' with {'localeName': locale.localeName, 'collapsed': (loop.index == 1 ? false : true) , 'hasError': false} %}
            {% block content %}

                {% for translationForm in placeholderForm.translations %}
                    {% if translationForm.vars.data.localeName == locale.localeName   %}
                        <div class=\"row\">
                            <div class=\"col-sm-12\" class=\"translation {% if translationForm.translation.vars.errors|length > 0 %}has-error{% endif %}\">
                                {{ form_label(translationForm.translation) }}
                                {{ form_widget(translationForm.translation, {'attr': {'rows': 5}}) }}

                                <div class=\"{% if translationForm.translation.vars.errors|length > 0 %}has-error{% endif %}\">
                                    {{ form_errors(translationForm.translation) }}
                                </div>

                            </div>
                            {{ form_row(translationForm.fkLocale) }}
                            {{ form_row(translationForm.localeName) }}

                            {{ render(controller('/cms-content-widget/usage-information/index'), {'ignore_errors':true}) }}
                        </div>
                    {% endif %}
                {% endfor %}
            {% endblock %}
        {% endembed %}
    {% endfor %}

</div>
", "@CmsBlockGui/_partial/glossary/tab-placeholder.twig", "/data/vendor/spryker/cms-block-gui/src/Spryker/Zed/CmsBlockGui/Presentation//_partial/glossary/tab-placeholder.twig");
    }
}


/* @CmsBlockGui/_partial/glossary/tab-placeholder.twig */
class __TwigTemplate_4e91773a8baea2ec06addf70ad39a67ddaca41c4949d2cf4e6e2534ba00a6ad4___590841531 extends Template
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
        // line 17
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@CmsBlockGui/_partial/glossary/tab-placeholder.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["placeholderForm"]) || array_key_exists("placeholderForm", $context) ? $context["placeholderForm"] : (function () { throw new RuntimeError('Variable "placeholderForm" does not exist.', 20, $this->source); })()), "translations", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["translationForm"]) {
            // line 21
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationForm"], "vars", [], "any", false, false, false, 21), "data", [], "any", false, false, false, 21), "localeName", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 21, $this->source); })()), "localeName", [], "any", false, false, false, 21)))) {
                // line 22
                echo "                        <div class=\"row\">
                            <div class=\"col-sm-12\" class=\"translation ";
                // line 23
                if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationForm"], "translation", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23)), 0))) {
                    echo "has-error";
                }
                echo "\">
                                ";
                // line 24
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "translation", [], "any", false, false, false, 24), 'label');
                echo "
                                ";
                // line 25
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "translation", [], "any", false, false, false, 25), 'widget', ["attr" => ["rows" => 5]]);
                echo "

                                <div class=\"";
                // line 27
                if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationForm"], "translation", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27)), 0))) {
                    echo "has-error";
                }
                echo "\">
                                    ";
                // line 28
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "translation", [], "any", false, false, false, 28), 'errors');
                echo "
                                </div>

                            </div>
                            ";
                // line 32
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "fkLocale", [], "any", false, false, false, 32), 'row');
                echo "
                            ";
                // line 33
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["translationForm"], "localeName", [], "any", false, false, false, 33), 'row');
                echo "

                            ";
                // line 35
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("/cms-content-widget/usage-information/index"), ["ignore_errors" => true]);
                echo "
                        </div>
                    ";
            }
            // line 38
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@CmsBlockGui/_partial/glossary/tab-placeholder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 39,  275 => 38,  269 => 35,  264 => 33,  260 => 32,  253 => 28,  247 => 27,  242 => 25,  238 => 24,  232 => 23,  229 => 22,  226 => 21,  222 => 20,  219 => 19,  215 => 18,  204 => 17,  114 => 42,  100 => 41,  97 => 17,  80 => 16,  75 => 14,  71 => 13,  67 => 12,  62 => 9,  55 => 7,  52 => 6,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set placeholderForm = '' %}

{% for glossaryPlaceholder in glossaryForm.glossaryPlaceholders %}
    {% if tab.name == glossaryPlaceholder.vars.data.placeholder|replace({'.': '-'}) %}
        {% set placeholderForm = glossaryPlaceholder %}
    {% endif %}
{% endfor %}

<div class=\"placeholder-translation-container\">

    {{ form_row(placeholderForm.idCmsBlockGlossaryKeyMapping) }}
    {{ form_row(placeholderForm.templateName) }}
    {{ form_row(placeholderForm.fkCmsBlock) }}

    {% for locale in availableLocales %}
        {% embed '@Gui/Partials/localized-ibox.twig' with {'localeName': locale.localeName, 'collapsed': (loop.index == 1 ? false : true) , 'hasError': false} %}
            {% block content %}

                {% for translationForm in placeholderForm.translations %}
                    {% if translationForm.vars.data.localeName == locale.localeName   %}
                        <div class=\"row\">
                            <div class=\"col-sm-12\" class=\"translation {% if translationForm.translation.vars.errors|length > 0 %}has-error{% endif %}\">
                                {{ form_label(translationForm.translation) }}
                                {{ form_widget(translationForm.translation, {'attr': {'rows': 5}}) }}

                                <div class=\"{% if translationForm.translation.vars.errors|length > 0 %}has-error{% endif %}\">
                                    {{ form_errors(translationForm.translation) }}
                                </div>

                            </div>
                            {{ form_row(translationForm.fkLocale) }}
                            {{ form_row(translationForm.localeName) }}

                            {{ render(controller('/cms-content-widget/usage-information/index'), {'ignore_errors':true}) }}
                        </div>
                    {% endif %}
                {% endfor %}
            {% endblock %}
        {% endembed %}
    {% endfor %}

</div>
", "@CmsBlockGui/_partial/glossary/tab-placeholder.twig", "/data/vendor/spryker/cms-block-gui/src/Spryker/Zed/CmsBlockGui/Presentation//_partial/glossary/tab-placeholder.twig");
    }
}
