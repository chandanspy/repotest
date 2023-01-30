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

/* @CategoryGui/_partials/settings-tab.twig */
class __TwigTemplate_bc181073918eeffb6ed80abf5969b69c14a70aa6e877f57240bdbd967ffe216a extends Template
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
<div class=\"col-md-6\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 4, $this->source); })()), 'widget');
        echo "
</div>
<div class=\"col-md-12\">
    <hr>
    <p><strong>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Translations"), "html", null, true);
        echo "</strong></p>

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 10, $this->source); })()), "localized_attributes", [], "any", false, false, false, 10));
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
        foreach ($context['_seq'] as $context["_key"] => $context["localizedAttributes"]) {
            // line 11
            echo "        ";
            $context["localeName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedAttributes"], "vars", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11), "locale", [], "any", false, false, false, 11), "localeName", [], "any", false, false, false, 11);
            // line 12
            echo "        ";
            $context["isCollapsed"] = (0 !== twig_compare((isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 12, $this->source); })()), (isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 12, $this->source); })())));
            // line 13
            echo "        ";
            $this->loadTemplate("@CategoryGui/_partials/settings-tab.twig", "@CategoryGui/_partials/settings-tab.twig", 13, "2074868544")->display(twig_array_merge($context, ["localeName" =>             // line 14
(isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 14, $this->source); })()), "collapsed" =>             // line 15
(isset($context["isCollapsed"]) || array_key_exists("isCollapsed", $context) ? $context["isCollapsed"] : (function () { throw new RuntimeError('Variable "isCollapsed" does not exist.', 15, $this->source); })()), "id" => ("localizedAttributes-ibox-" .             // line 16
(isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 16, $this->source); })()))]));
            // line 22
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localizedAttributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@CategoryGui/_partials/settings-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  82 => 22,  80 => 16,  79 => 15,  78 => 14,  76 => 13,  73 => 12,  70 => 11,  53 => 10,  48 => 8,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var locale.localeName \\Generated\\Shared\\Transfer\\LocaleTransfer #}

<div class=\"col-md-6\">
    {{ form_widget(categoryForm) }}
</div>
<div class=\"col-md-12\">
    <hr>
    <p><strong>{{ 'Translations' | trans }}</strong></p>

    {% for localizedAttributes in categoryForm.localized_attributes %}
        {% set localeName = localizedAttributes.vars.value.locale.localeName %}
        {% set isCollapsed = (currentLocale != localeName) %}
        {% embed '@Gui/Partials/localized-ibox.twig' with {
            localeName: localeName,
            collapsed: isCollapsed,
            id: 'localizedAttributes-ibox-' ~ localeName,
        } %}
            {% block content %}
                {{ form_widget(localizedAttributes) }}
            {% endblock %}
        {% endembed %}
    {% endfor %}
</div>
", "@CategoryGui/_partials/settings-tab.twig", "/data/vendor/spryker/category-gui/src/Spryker/Zed/CategoryGui/Presentation//_partials/settings-tab.twig");
    }
}


/* @CategoryGui/_partials/settings-tab.twig */
class __TwigTemplate_bc181073918eeffb6ed80abf5969b69c14a70aa6e877f57240bdbd967ffe216a___2074868544 extends Template
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
        // line 13
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@CategoryGui/_partials/settings-tab.twig", 13);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["localizedAttributes"]) || array_key_exists("localizedAttributes", $context) ? $context["localizedAttributes"] : (function () { throw new RuntimeError('Variable "localizedAttributes" does not exist.', 19, $this->source); })()), 'widget');
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "@CategoryGui/_partials/settings-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 19,  176 => 18,  165 => 13,  96 => 23,  82 => 22,  80 => 16,  79 => 15,  78 => 14,  76 => 13,  73 => 12,  70 => 11,  53 => 10,  48 => 8,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var locale.localeName \\Generated\\Shared\\Transfer\\LocaleTransfer #}

<div class=\"col-md-6\">
    {{ form_widget(categoryForm) }}
</div>
<div class=\"col-md-12\">
    <hr>
    <p><strong>{{ 'Translations' | trans }}</strong></p>

    {% for localizedAttributes in categoryForm.localized_attributes %}
        {% set localeName = localizedAttributes.vars.value.locale.localeName %}
        {% set isCollapsed = (currentLocale != localeName) %}
        {% embed '@Gui/Partials/localized-ibox.twig' with {
            localeName: localeName,
            collapsed: isCollapsed,
            id: 'localizedAttributes-ibox-' ~ localeName,
        } %}
            {% block content %}
                {{ form_widget(localizedAttributes) }}
            {% endblock %}
        {% endembed %}
    {% endfor %}
</div>
", "@CategoryGui/_partials/settings-tab.twig", "/data/vendor/spryker/category-gui/src/Spryker/Zed/CategoryGui/Presentation//_partials/settings-tab.twig");
    }
}
