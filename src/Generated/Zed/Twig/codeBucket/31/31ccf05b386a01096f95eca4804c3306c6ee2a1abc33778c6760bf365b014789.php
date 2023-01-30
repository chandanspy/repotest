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

/* @ConfigurableBundleGui/Template/_partials/translations.twig */
class __TwigTemplate_41d162792fe78210c349be00a802d26289803d24f82f74fc1d77b12078172f21 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 1, $this->source); })()));
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
            // line 2
            echo "
    ";
            // line 3
            $context["localeName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translation"], "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), "localeName", [], "any", false, false, false, 3);
            // line 4
            echo "    ";
            $context["collapsed"] = (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 4, $this->source); })()), "localeName", [], "any", false, false, false, 4), (isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 4, $this->source); })())));
            // line 5
            echo "
    ";
            // line 6
            $this->loadTemplate("@ConfigurableBundleGui/Template/_partials/translations.twig", "@ConfigurableBundleGui/Template/_partials/translations.twig", 6, "759596010")->display(twig_array_merge($context, ["localeName" =>             // line 7
(isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 7, $this->source); })()), "collapsed" =>             // line 8
(isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 8, $this->source); })())]));
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
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Template/_partials/translations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  66 => 7,  65 => 6,  62 => 5,  59 => 4,  57 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for translation in translations %}

    {% set localeName = translation.vars.value.locale.localeName %}
    {% set collapsed = currentLocale.localeName != localeName %}

    {% embed '@Gui/Partials/localized-ibox.twig' with {
        localeName: localeName,
        collapsed: collapsed
    } %}
        {% block content %}
            {{ form_widget(translation) }}
        {% endblock %}
    {% endembed %}
{% endfor %}
", "@ConfigurableBundleGui/Template/_partials/translations.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Template/_partials/translations.twig");
    }
}


/* @ConfigurableBundleGui/Template/_partials/translations.twig */
class __TwigTemplate_41d162792fe78210c349be00a802d26289803d24f82f74fc1d77b12078172f21___759596010 extends Template
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
        // line 6
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ConfigurableBundleGui/Template/_partials/translations.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 11, $this->source); })()), 'widget');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Template/_partials/translations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 11,  149 => 10,  138 => 6,  67 => 8,  66 => 7,  65 => 6,  62 => 5,  59 => 4,  57 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for translation in translations %}

    {% set localeName = translation.vars.value.locale.localeName %}
    {% set collapsed = currentLocale.localeName != localeName %}

    {% embed '@Gui/Partials/localized-ibox.twig' with {
        localeName: localeName,
        collapsed: collapsed
    } %}
        {% block content %}
            {{ form_widget(translation) }}
        {% endblock %}
    {% endembed %}
{% endfor %}
", "@ConfigurableBundleGui/Template/_partials/translations.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Template/_partials/translations.twig");
    }
}
