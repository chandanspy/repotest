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

/* @ProductManagement/Product/_partials/seo-tab.twig */
class __TwigTemplate_f1ad6a65ac5239a836380f6f0331c088accd7d9df858193ab6708b9e887de3bf extends Template
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
        // line 2
        echo "
<div class=\"well\">
    ";
        // line 4
        ob_start();
        // line 5
        echo "        <h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SEO (Meta Information)"), "html", null, true);
        echo "</h3>
        <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search engine optimization (SEO) is the process of affecting the visibility of a website or a web page in a web search engine's unpaid results — often referred to as \"natural,\" \"organic,\" or \"earned\" results."), "html", null, true);
        echo "</p>
        <p><i>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note: Meta data are snippets of text describing a page’s content. The meta data appear only in the page’s code, not in its content."), "html", null, true);
        echo "</i></p>
    ";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_4_);
        // line 9
        echo "</div>

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 11, $this->source); })()));
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
            // line 12
            echo "    ";
            $context["formKey"] = ("seo_" . twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 12));
            // line 13
            echo "
    ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 14, $this->source); })()), [], "array", true, true, false, 14)) {
                // line 15
                echo "        ";
                $this->loadTemplate("@ProductManagement/Product/_partials/seo-tab.twig", "@ProductManagement/Product/_partials/seo-tab.twig", 15, "1756308486")->display(twig_array_merge($context, ["collapsed" =>  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 15), "localeName" => twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 15)]));
                // line 26
                echo "    ";
            }
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
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/seo-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  88 => 15,  86 => 14,  83 => 13,  80 => 12,  63 => 11,  59 => 9,  57 => 4,  52 => 7,  48 => 6,  43 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var locale \\Generated\\Shared\\Transfer\\LocaleTransfer #}

<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'SEO (Meta Information)' | trans }}</h3>
        <p>{{ 'Search engine optimization (SEO) is the process of affecting the visibility of a website or a web page in a web search engine\\'s unpaid results — often referred to as \"natural,\" \"organic,\" or \"earned\" results.' | trans }}</p>
        <p><i>{{ 'Note: Meta data are snippets of text describing a page’s content. The meta data appear only in the page’s code, not in its content.' | trans }}</i></p>
    {% endapply %}
</div>

{% for locale in localeCollection %}
    {% set formKey = 'seo_' ~ locale.localeName %}

    {% if form[formKey] is defined %}
        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': locale.localeName} %}
            {% block content %}
                {% for input in form[formKey] %}
                    <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                        {{ form_label(input) }}
                        {{ form_widget(input, {'attr': {'class': 'name-translation', 'data-translation-key': input.vars.name}}) }}
                        {{ form_errors(input) }}
                    </div>
                {% endfor %}
            {% endblock %}
        {% endembed %}
    {% endif %}
{% endfor %}
", "@ProductManagement/Product/_partials/seo-tab.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/seo-tab.twig");
    }
}


/* @ProductManagement/Product/_partials/seo-tab.twig */
class __TwigTemplate_f1ad6a65ac5239a836380f6f0331c088accd7d9df858193ab6708b9e887de3bf___1756308486 extends Template
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
        // line 15
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductManagement/Product/_partials/seo-tab.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 17, $this->source); })()), [], "array", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 18
            echo "                    <div class=\"form-group ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["input"], "vars", [], "any", false, false, false, 18), "errors", [], "any", false, false, false, 18))) {
                echo "has-error";
            }
            echo "\">
                        ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'label');
            echo "
                        ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'widget', ["attr" => ["class" => "name-translation", "data-translation-key" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["input"], "vars", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20)]]);
            echo "
                        ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'errors');
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/seo-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 24,  211 => 21,  207 => 20,  203 => 19,  196 => 18,  191 => 17,  187 => 16,  176 => 15,  91 => 26,  88 => 15,  86 => 14,  83 => 13,  80 => 12,  63 => 11,  59 => 9,  57 => 4,  52 => 7,  48 => 6,  43 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var locale \\Generated\\Shared\\Transfer\\LocaleTransfer #}

<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'SEO (Meta Information)' | trans }}</h3>
        <p>{{ 'Search engine optimization (SEO) is the process of affecting the visibility of a website or a web page in a web search engine\\'s unpaid results — often referred to as \"natural,\" \"organic,\" or \"earned\" results.' | trans }}</p>
        <p><i>{{ 'Note: Meta data are snippets of text describing a page’s content. The meta data appear only in the page’s code, not in its content.' | trans }}</i></p>
    {% endapply %}
</div>

{% for locale in localeCollection %}
    {% set formKey = 'seo_' ~ locale.localeName %}

    {% if form[formKey] is defined %}
        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': locale.localeName} %}
            {% block content %}
                {% for input in form[formKey] %}
                    <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                        {{ form_label(input) }}
                        {{ form_widget(input, {'attr': {'class': 'name-translation', 'data-translation-key': input.vars.name}}) }}
                        {{ form_errors(input) }}
                    </div>
                {% endfor %}
            {% endblock %}
        {% endembed %}
    {% endif %}
{% endfor %}
", "@ProductManagement/Product/_partials/seo-tab.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/seo-tab.twig");
    }
}
