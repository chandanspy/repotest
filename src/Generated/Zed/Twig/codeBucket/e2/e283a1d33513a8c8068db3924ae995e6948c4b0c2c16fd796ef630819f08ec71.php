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

/* @FileManagerGui/_partials/localized-attributes.twig */
class __TwigTemplate_9f17e02912dec90440465ace6b1d75f0e13414a738da8845769b1c4a5a9dee9b extends Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["localizedAttributes"]) || array_key_exists("localizedAttributes", $context) ? $context["localizedAttributes"] : (function () { throw new RuntimeError('Variable "localizedAttributes" does not exist.', 1, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["localizedAttribute"]) {
            // line 2
            echo "
    ";
            // line 3
            $context["localeName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedAttribute"], "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "locale", [], "any", false, false, false, 3), "localeName", [], "any", false, false, false, 3);
            // line 4
            echo "    ";
            $context["collapsed"] = (0 !== twig_compare((isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 4, $this->source); })()), (isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 4, $this->source); })())));
            // line 5
            echo "
    ";
            // line 6
            $this->loadTemplate("@FileManagerGui/_partials/localized-attributes.twig", "@FileManagerGui/_partials/localized-attributes.twig", 6, "1058858669")->display(twig_array_merge($context, ["localeName" =>             // line 7
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localizedAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/_partials/localized-attributes.twig";
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
        return new Source("{% for localizedAttribute in localizedAttributes %}

    {% set localeName = localizedAttribute.vars.value.locale.localeName %}
    {% set collapsed = (currentLocale != localeName) %}

    {% embed '@Gui/Partials/localized-ibox.twig' with {
        localeName: localeName,
        collapsed: collapsed
    } %}
        {% block content %}
            {{ form_widget(localizedAttribute) }}
        {% endblock %}
    {% endembed %}
{% endfor %}", "@FileManagerGui/_partials/localized-attributes.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//_partials/localized-attributes.twig");
    }
}


/* @FileManagerGui/_partials/localized-attributes.twig */
class __TwigTemplate_9f17e02912dec90440465ace6b1d75f0e13414a738da8845769b1c4a5a9dee9b___1058858669 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@FileManagerGui/_partials/localized-attributes.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["localizedAttribute"]) || array_key_exists("localizedAttribute", $context) ? $context["localizedAttribute"] : (function () { throw new RuntimeError('Variable "localizedAttribute" does not exist.', 11, $this->source); })()), 'widget');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/_partials/localized-attributes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 11,  148 => 10,  137 => 6,  67 => 8,  66 => 7,  65 => 6,  62 => 5,  59 => 4,  57 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for localizedAttribute in localizedAttributes %}

    {% set localeName = localizedAttribute.vars.value.locale.localeName %}
    {% set collapsed = (currentLocale != localeName) %}

    {% embed '@Gui/Partials/localized-ibox.twig' with {
        localeName: localeName,
        collapsed: collapsed
    } %}
        {% block content %}
            {{ form_widget(localizedAttribute) }}
        {% endblock %}
    {% endembed %}
{% endfor %}", "@FileManagerGui/_partials/localized-attributes.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//_partials/localized-attributes.twig");
    }
}
