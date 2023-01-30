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

/* @ProductLabelGui/Create/_tabs/settings.twig */
class __TwigTemplate_c769c410db0a2001dc819b09c710dfeef30e35f2d760f15686679f38d53406eb extends Template
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
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <label class=\"control-label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"panel-body\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productLabelForm"]) || array_key_exists("productLabelForm", $context) ? $context["productLabelForm"] : (function () { throw new RuntimeError('Variable "productLabelForm" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productLabelForm"]) || array_key_exists("productLabelForm", $context) ? $context["productLabelForm"] : (function () { throw new RuntimeError('Variable "productLabelForm" does not exist.', 7, $this->source); })()), "frontEndReference", [], "any", false, false, false, 7), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productLabelForm"]) || array_key_exists("productLabelForm", $context) ? $context["productLabelForm"] : (function () { throw new RuntimeError('Variable "productLabelForm" does not exist.', 8, $this->source); })()), "position", [], "any", false, false, false, 8), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productLabelForm"]) || array_key_exists("productLabelForm", $context) ? $context["productLabelForm"] : (function () { throw new RuntimeError('Variable "productLabelForm" does not exist.', 9, $this->source); })()), "isActive", [], "any", false, false, false, 9), 'row');
        echo "
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <label class=\"control-label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Behavior"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"panel-body\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productLabelForm"]) || array_key_exists("productLabelForm", $context) ? $context["productLabelForm"] : (function () { throw new RuntimeError('Variable "productLabelForm" does not exist.', 18, $this->source); })()), "validFrom", [], "any", false, false, false, 18), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productLabelForm"]) || array_key_exists("productLabelForm", $context) ? $context["productLabelForm"] : (function () { throw new RuntimeError('Variable "productLabelForm" does not exist.', 19, $this->source); })()), "validTo", [], "any", false, false, false, 19), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productLabelForm"]) || array_key_exists("productLabelForm", $context) ? $context["productLabelForm"] : (function () { throw new RuntimeError('Variable "productLabelForm" does not exist.', 20, $this->source); })()), "isDynamic", [], "any", false, false, false, 20), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productLabelForm"]) || array_key_exists("productLabelForm", $context) ? $context["productLabelForm"] : (function () { throw new RuntimeError('Variable "productLabelForm" does not exist.', 21, $this->source); })()), "isExclusive", [], "any", false, false, false, 21), 'row');
        echo "
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <label class=\"control-label\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store relation"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"panel-body\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productLabelForm"]) || array_key_exists("productLabelForm", $context) ? $context["productLabelForm"] : (function () { throw new RuntimeError('Variable "productLabelForm" does not exist.', 30, $this->source); })()), "storeRelation", [], "any", false, false, false, 30), 'row');
        echo "
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <label class=\"control-label\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Translations"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"panel-body\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["productLabelForm"]) || array_key_exists("productLabelForm", $context) ? $context["productLabelForm"] : (function () { throw new RuntimeError('Variable "productLabelForm" does not exist.', 39, $this->source); })()), "localizedAttributes", [], "any", false, false, false, 39));
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
            // line 40
            echo "            ";
            $context["localeName"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedAttributes"], "vars", [], "any", false, false, false, 40), "value", [], "any", false, false, false, 40), "locale", [], "any", false, false, false, 40), "localeName", [], "any", false, false, false, 40);
            // line 41
            echo "
            ";
            // line 42
            $this->loadTemplate("@ProductLabelGui/Create/_tabs/settings.twig", "@ProductLabelGui/Create/_tabs/settings.twig", 42, "1417903782")->display(twig_array_merge($context, ["localeName" =>             // line 43
(isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 43, $this->source); })()), "collapsed" => false]));
            // line 51
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localizedAttributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ProductLabelGui/Create/_tabs/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 52,  142 => 51,  140 => 43,  139 => 42,  136 => 41,  133 => 40,  116 => 39,  110 => 36,  101 => 30,  95 => 27,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  68 => 15,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <label class=\"control-label\">{{ 'General' | trans }}</label>
    </div>
    <div class=\"panel-body\">
        {{ form_row(productLabelForm.name) }}
        {{ form_row(productLabelForm.frontEndReference) }}
        {{ form_row(productLabelForm.position) }}
        {{ form_row(productLabelForm.isActive) }}
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <label class=\"control-label\">{{ 'Behavior' | trans }}</label>
    </div>
    <div class=\"panel-body\">
        {{ form_row(productLabelForm.validFrom) }}
        {{ form_row(productLabelForm.validTo) }}
        {{ form_row(productLabelForm.isDynamic) }}
        {{ form_row(productLabelForm.isExclusive) }}
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <label class=\"control-label\">{{ 'Store relation' | trans }}</label>
    </div>
    <div class=\"panel-body\">
        {{ form_row(productLabelForm.storeRelation) }}
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <label class=\"control-label\">{{ 'Translations' | trans }}</label>
    </div>
    <div class=\"panel-body\">
        {% for localizedAttributes in productLabelForm.localizedAttributes %}
            {% set localeName = localizedAttributes.vars.value.locale.localeName %}

            {% embed '@Gui/Partials/localized-ibox.twig' with {
                localeName: localeName,
                collapsed: false
            } %}
                {% block content %}
                    {{ form_errors(localizedAttributes) }}
                    {{ form_widget(localizedAttributes) }}
                {% endblock %}
            {% endembed %}
        {% endfor %}
    </div>
</div>
", "@ProductLabelGui/Create/_tabs/settings.twig", "/data/vendor/spryker/product-label-gui/src/Spryker/Zed/ProductLabelGui/Presentation//Create/_tabs/settings.twig");
    }
}


/* @ProductLabelGui/Create/_tabs/settings.twig */
class __TwigTemplate_c769c410db0a2001dc819b09c710dfeef30e35f2d760f15686679f38d53406eb___1417903782 extends Template
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
        // line 42
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductLabelGui/Create/_tabs/settings.twig", 42);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["localizedAttributes"]) || array_key_exists("localizedAttributes", $context) ? $context["localizedAttributes"] : (function () { throw new RuntimeError('Variable "localizedAttributes" does not exist.', 47, $this->source); })()), 'errors');
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["localizedAttributes"]) || array_key_exists("localizedAttributes", $context) ? $context["localizedAttributes"] : (function () { throw new RuntimeError('Variable "localizedAttributes" does not exist.', 48, $this->source); })()), 'widget');
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "@ProductLabelGui/Create/_tabs/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 48,  271 => 47,  267 => 46,  256 => 42,  156 => 52,  142 => 51,  140 => 43,  139 => 42,  136 => 41,  133 => 40,  116 => 39,  110 => 36,  101 => 30,  95 => 27,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  68 => 15,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <label class=\"control-label\">{{ 'General' | trans }}</label>
    </div>
    <div class=\"panel-body\">
        {{ form_row(productLabelForm.name) }}
        {{ form_row(productLabelForm.frontEndReference) }}
        {{ form_row(productLabelForm.position) }}
        {{ form_row(productLabelForm.isActive) }}
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <label class=\"control-label\">{{ 'Behavior' | trans }}</label>
    </div>
    <div class=\"panel-body\">
        {{ form_row(productLabelForm.validFrom) }}
        {{ form_row(productLabelForm.validTo) }}
        {{ form_row(productLabelForm.isDynamic) }}
        {{ form_row(productLabelForm.isExclusive) }}
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <label class=\"control-label\">{{ 'Store relation' | trans }}</label>
    </div>
    <div class=\"panel-body\">
        {{ form_row(productLabelForm.storeRelation) }}
    </div>
</div>

<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        <label class=\"control-label\">{{ 'Translations' | trans }}</label>
    </div>
    <div class=\"panel-body\">
        {% for localizedAttributes in productLabelForm.localizedAttributes %}
            {% set localeName = localizedAttributes.vars.value.locale.localeName %}

            {% embed '@Gui/Partials/localized-ibox.twig' with {
                localeName: localeName,
                collapsed: false
            } %}
                {% block content %}
                    {{ form_errors(localizedAttributes) }}
                    {{ form_widget(localizedAttributes) }}
                {% endblock %}
            {% endembed %}
        {% endfor %}
    </div>
</div>
", "@ProductLabelGui/Create/_tabs/settings.twig", "/data/vendor/spryker/product-label-gui/src/Spryker/Zed/ProductLabelGui/Presentation//Create/_tabs/settings.twig");
    }
}
