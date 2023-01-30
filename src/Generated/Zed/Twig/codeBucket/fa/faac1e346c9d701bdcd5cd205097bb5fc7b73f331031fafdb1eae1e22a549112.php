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

/* @ContentGui/_partial/locale-tab.twig */
class __TwigTemplate_c3dfde1d8e03eb446a1499380907cb0f2ebf9331a23dc6f9fed277fa01771594 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 34
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contentForm"]) || array_key_exists("contentForm", $context) ? $context["contentForm"] : (function () { throw new RuntimeError('Variable "contentForm" does not exist.', 34, $this->source); })()), "localizedContents", [], "any", false, false, false, 34), "setRendered", [], "any", false, false, false, 34);
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contentForm"]) || array_key_exists("contentForm", $context) ? $context["contentForm"] : (function () { throw new RuntimeError('Variable "contentForm" does not exist.', 2, $this->source); })()), "localizedContents", [], "any", false, false, false, 2));
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
        foreach ($context['_seq'] as $context["_key"] => $context["localizedContentForm"]) {
            // line 3
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedContentForm"], "vars", [], "any", false, false, false, 3), "data", [], "any", false, false, false, 3), "fkLocale", [], "any", false, false, false, 3), twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3)))) {
                // line 4
                echo "            ";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedContentForm"], "parameters", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "valid", [], "any", false, false, false, 4)) {
                    // line 5
                    echo "                <div class=\"form-group has-error\">
                    ";
                    // line 6
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["localizedContentForm"], "parameters", [], "any", false, false, false, 6), 'errors');
                    echo "
                </div>
            ";
                }
                // line 9
                echo "            ";
                if ( !twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9)) {
                    // line 10
                    echo "                <div class=\"locale-header-info\">
                    <span class=\"overwrite-default-message\">
                        ";
                    // line 12
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overwrite default by specifying different content elements per specific locale"), "html", null, true);
                    echo "
                    </span>
                    <input type=\"button\" data-tab=\"#localized-content-block-";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedContentForm"], "vars", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" class=\"btn btn-outline btn-view clear-fields pull-right clear-button-margin\" value=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear locale"), "html", null, true);
                    echo "\" />
                </div>
            ";
                }
                // line 17
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "                <div class=\"locale-header-info\">
                    <input type=\"button\" data-tab=\"#localized-content-block-";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedContentForm"], "vars", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
                    echo "\" class=\"btn btn-outline btn-view clear-fields pull-right clear-button-margin\" value=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear locale"), "html", null, true);
                    echo "\" />
                </div>
            ";
                }
                // line 22
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["localizedContentForm"], "fk_locale", [], "any", false, false, false, 22), 'row');
                echo "
            ";
                // line 23
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["localizedContentForm"], "locale_name", [], "any", false, false, false, 23), 'row');
                echo "
            <div id=\"localized-content-block-";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedContentForm"], "vars", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                echo "\">
                ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedContentForm"], "parameters", [], "any", false, true, false, 25), "vars", [], "any", false, true, false, 25), "attr", [], "any", false, true, false, 25), "template_path", [], "any", true, true, false, 25)) {
                    // line 26
                    echo "                    ";
                    $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedContentForm"], "parameters", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "attr", [], "any", false, false, false, 26), "template_path", [], "any", false, false, false, 26), "@ContentGui/_partial/locale-tab.twig", 26)->display(twig_array_merge($context, ["form" => twig_get_attribute($this->env, $this->source, $context["localizedContentForm"], "parameters", [], "any", false, false, false, 26)]));
                    // line 27
                    echo "                ";
                } else {
                    // line 28
                    echo "                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["localizedContentForm"], "parameters", [], "any", false, false, false, 28), 'widget');
                    echo "
                ";
                }
                // line 30
                echo "            </div>
        ";
            }
            // line 32
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localizedContentForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@ContentGui/_partial/locale-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 32,  142 => 30,  136 => 28,  133 => 27,  130 => 26,  128 => 25,  124 => 24,  120 => 23,  115 => 22,  107 => 19,  104 => 18,  101 => 17,  93 => 14,  88 => 12,  84 => 10,  81 => 9,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  48 => 2,  44 => 1,  40 => 34,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    {% for localizedContentForm in contentForm.localizedContents %}
        {% if localizedContentForm.vars.data.fkLocale == tab.name %}
            {% if not localizedContentForm.parameters.vars.valid %}
                <div class=\"form-group has-error\">
                    {{ form_errors(localizedContentForm.parameters) }}
                </div>
            {% endif %}
            {% if not tab.name %}
                <div class=\"locale-header-info\">
                    <span class=\"overwrite-default-message\">
                        {{ 'Overwrite default by specifying different content elements per specific locale' | trans }}
                    </span>
                    <input type=\"button\" data-tab=\"#localized-content-block-{{ localizedContentForm.vars.name }}\" class=\"btn btn-outline btn-view clear-fields pull-right clear-button-margin\" value=\"{{ 'Clear locale' | trans }}\" />
                </div>
            {% endif %}
            {% if tab.name %}
                <div class=\"locale-header-info\">
                    <input type=\"button\" data-tab=\"#localized-content-block-{{ localizedContentForm.vars.name }}\" class=\"btn btn-outline btn-view clear-fields pull-right clear-button-margin\" value=\"{{ 'Clear locale' | trans }}\" />
                </div>
            {% endif %}
            {{ form_row(localizedContentForm.fk_locale) }}
            {{ form_row(localizedContentForm.locale_name) }}
            <div id=\"localized-content-block-{{ localizedContentForm.vars.name }}\">
                {% if localizedContentForm.parameters.vars.attr.template_path is defined %}
                    {% include localizedContentForm.parameters.vars.attr.template_path with {'form': localizedContentForm.parameters} %}
                {% else %}
                    {{ form_widget(localizedContentForm.parameters) }}
                {% endif %}
            </div>
        {% endif %}
    {% endfor %}
{% endblock %}
{% do contentForm.localizedContents.setRendered %}
", "@ContentGui/_partial/locale-tab.twig", "/data/vendor/spryker/content-gui/src/Spryker/Zed/ContentGui/Presentation//_partial/locale-tab.twig");
    }
}
