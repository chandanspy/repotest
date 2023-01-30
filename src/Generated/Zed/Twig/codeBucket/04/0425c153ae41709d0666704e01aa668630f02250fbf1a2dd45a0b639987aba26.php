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

/* @ProductSetGui/_partials/tabs/seo.twig */
class __TwigTemplate_5ddebd81d39315ec8861a2f38b0c6d497666f8405442e244ddbf4f8f3965c794 extends Template
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
        echo "<div class=\"form-group\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 2, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["localeTransfer"]) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 3, $this->source); })()), "seo_form", [], "any", false, false, false, 3), "localized_seo_form_collection", [], "any", false, false, false, 3));
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
            foreach ($context['_seq'] as $context["_key"] => $context["localizedSeoForm"]) {
                // line 4
                echo "            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "idLocale", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedSeoForm"], "fk_locale", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4)))) {
                    // line 5
                    echo "                ";
                    $this->loadTemplate("@ProductSetGui/_partials/tabs/seo.twig", "@ProductSetGui/_partials/tabs/seo.twig", 5, "802077409")->display(twig_array_merge($context, ["id" => ("localized_attributes_container-" . twig_get_attribute($this->env, $this->source,                     // line 6
$context["localeTransfer"], "localeName", [], "any", false, false, false, 6)), "localeName" => twig_get_attribute($this->env, $this->source,                     // line 7
$context["localeTransfer"], "localeName", [], "any", false, false, false, 7), "collapsed" =>  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 8
$context["loop"], "parent", [], "any", false, false, false, 8), "loop", [], "any", false, false, false, 8), "first", [], "any", false, false, false, 8)]));
                    // line 27
                    echo "            ";
                }
                // line 28
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localizedSeoForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeTransfer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>

";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 32, $this->source); })()), "seo_form", [], "any", false, false, false, 32), 'rest');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/_partials/tabs/seo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  115 => 30,  101 => 29,  87 => 28,  84 => 27,  82 => 8,  81 => 7,  80 => 6,  78 => 5,  75 => 4,  57 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group\">
    {% for localeTransfer in localeCollection %}
        {% for localizedSeoForm in productSetForm.seo_form.localized_seo_form_collection %}
            {% if localeTransfer.idLocale == localizedSeoForm.fk_locale.vars.value %}
                {% embed '@Gui/Partials/localized-ibox.twig' with {
                'id': 'localized_attributes_container-' ~ localeTransfer.localeName,
                'localeName': localeTransfer.localeName,
                'collapsed': (not loop.parent.loop.first)
                } %}
                    {% block content %}

                        <div class=\"form-group {% if localizedSeoForm.meta_title.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(localizedSeoForm.meta_title) }}
                            {{ form_widget(localizedSeoForm.meta_title, {'attr': {'data-translation-key': localizedSeoForm.meta_title.vars.name}}) }}
                            {{ form_errors(localizedSeoForm.meta_title) }}
                        </div>

                        <div class=\"form-group {% if localizedSeoForm.meta_keywords.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(localizedSeoForm.meta_keywords) }}
                            {{ form_widget(localizedSeoForm.meta_keywords, {'attr': {'data-translation-key': localizedSeoForm.meta_keywords.vars.name}}) }}
                            {{ form_errors(localizedSeoForm.meta_keywords) }}
                        </div>
                        
                        {{ form_rest(localizedSeoForm) }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endfor %}
    {% endfor %}
</div>

{{ form_rest(productSetForm.seo_form) }}
", "@ProductSetGui/_partials/tabs/seo.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//_partials/tabs/seo.twig");
    }
}


/* @ProductSetGui/_partials/tabs/seo.twig */
class __TwigTemplate_5ddebd81d39315ec8861a2f38b0c6d497666f8405442e244ddbf4f8f3965c794___802077409 extends Template
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
        // line 5
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductSetGui/_partials/tabs/seo.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
                        <div class=\"form-group ";
        // line 12
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizedSeoForm"]) || array_key_exists("localizedSeoForm", $context) ? $context["localizedSeoForm"] : (function () { throw new RuntimeError('Variable "localizedSeoForm" does not exist.', 12, $this->source); })()), "meta_title", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12))) {
            echo "has-error";
        }
        echo "\">
                            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedSeoForm"]) || array_key_exists("localizedSeoForm", $context) ? $context["localizedSeoForm"] : (function () { throw new RuntimeError('Variable "localizedSeoForm" does not exist.', 13, $this->source); })()), "meta_title", [], "any", false, false, false, 13), 'label');
        echo "
                            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedSeoForm"]) || array_key_exists("localizedSeoForm", $context) ? $context["localizedSeoForm"] : (function () { throw new RuntimeError('Variable "localizedSeoForm" does not exist.', 14, $this->source); })()), "meta_title", [], "any", false, false, false, 14), 'widget', ["attr" => ["data-translation-key" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizedSeoForm"]) || array_key_exists("localizedSeoForm", $context) ? $context["localizedSeoForm"] : (function () { throw new RuntimeError('Variable "localizedSeoForm" does not exist.', 14, $this->source); })()), "meta_title", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14)]]);
        echo "
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedSeoForm"]) || array_key_exists("localizedSeoForm", $context) ? $context["localizedSeoForm"] : (function () { throw new RuntimeError('Variable "localizedSeoForm" does not exist.', 15, $this->source); })()), "meta_title", [], "any", false, false, false, 15), 'errors');
        echo "
                        </div>

                        <div class=\"form-group ";
        // line 18
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizedSeoForm"]) || array_key_exists("localizedSeoForm", $context) ? $context["localizedSeoForm"] : (function () { throw new RuntimeError('Variable "localizedSeoForm" does not exist.', 18, $this->source); })()), "meta_keywords", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "errors", [], "any", false, false, false, 18))) {
            echo "has-error";
        }
        echo "\">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedSeoForm"]) || array_key_exists("localizedSeoForm", $context) ? $context["localizedSeoForm"] : (function () { throw new RuntimeError('Variable "localizedSeoForm" does not exist.', 19, $this->source); })()), "meta_keywords", [], "any", false, false, false, 19), 'label');
        echo "
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedSeoForm"]) || array_key_exists("localizedSeoForm", $context) ? $context["localizedSeoForm"] : (function () { throw new RuntimeError('Variable "localizedSeoForm" does not exist.', 20, $this->source); })()), "meta_keywords", [], "any", false, false, false, 20), 'widget', ["attr" => ["data-translation-key" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizedSeoForm"]) || array_key_exists("localizedSeoForm", $context) ? $context["localizedSeoForm"] : (function () { throw new RuntimeError('Variable "localizedSeoForm" does not exist.', 20, $this->source); })()), "meta_keywords", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20)]]);
        echo "
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedSeoForm"]) || array_key_exists("localizedSeoForm", $context) ? $context["localizedSeoForm"] : (function () { throw new RuntimeError('Variable "localizedSeoForm" does not exist.', 21, $this->source); })()), "meta_keywords", [], "any", false, false, false, 21), 'errors');
        echo "
                        </div>
                        
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["localizedSeoForm"]) || array_key_exists("localizedSeoForm", $context) ? $context["localizedSeoForm"] : (function () { throw new RuntimeError('Variable "localizedSeoForm" does not exist.', 24, $this->source); })()), 'rest');
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/_partials/tabs/seo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 24,  250 => 21,  246 => 20,  242 => 19,  236 => 18,  230 => 15,  226 => 14,  222 => 13,  216 => 12,  213 => 11,  209 => 10,  198 => 5,  119 => 32,  115 => 30,  101 => 29,  87 => 28,  84 => 27,  82 => 8,  81 => 7,  80 => 6,  78 => 5,  75 => 4,  57 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group\">
    {% for localeTransfer in localeCollection %}
        {% for localizedSeoForm in productSetForm.seo_form.localized_seo_form_collection %}
            {% if localeTransfer.idLocale == localizedSeoForm.fk_locale.vars.value %}
                {% embed '@Gui/Partials/localized-ibox.twig' with {
                'id': 'localized_attributes_container-' ~ localeTransfer.localeName,
                'localeName': localeTransfer.localeName,
                'collapsed': (not loop.parent.loop.first)
                } %}
                    {% block content %}

                        <div class=\"form-group {% if localizedSeoForm.meta_title.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(localizedSeoForm.meta_title) }}
                            {{ form_widget(localizedSeoForm.meta_title, {'attr': {'data-translation-key': localizedSeoForm.meta_title.vars.name}}) }}
                            {{ form_errors(localizedSeoForm.meta_title) }}
                        </div>

                        <div class=\"form-group {% if localizedSeoForm.meta_keywords.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(localizedSeoForm.meta_keywords) }}
                            {{ form_widget(localizedSeoForm.meta_keywords, {'attr': {'data-translation-key': localizedSeoForm.meta_keywords.vars.name}}) }}
                            {{ form_errors(localizedSeoForm.meta_keywords) }}
                        </div>
                        
                        {{ form_rest(localizedSeoForm) }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endfor %}
    {% endfor %}
</div>

{{ form_rest(productSetForm.seo_form) }}
", "@ProductSetGui/_partials/tabs/seo.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//_partials/tabs/seo.twig");
    }
}
