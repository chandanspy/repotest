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

/* @ProductOption/_partial/tab-general.twig */
class __TwigTemplate_ce1f4517f4c298287d1d8c2fd2d63977f569aba3c58e2c019542bb0ea000d0da extends Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 1, $this->source); })()), 'errors');
        echo "

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["id" => "product_option_general"]]);
        echo "
 <div class=\"well\">
     <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add General Information"), "html", null, true);
        echo "</h3>
     <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create a product option by defining option values with translation key, sku and price. By adding more than 1 option value bellow, you will create an option group. With an option group your customer can choose one option from this group."), "html", null, true);
        echo "</p>

 </div>

";
        // line 10
        $context["readOnly"] = [];
        // line 11
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11), "idProductOptionGroup", [], "any", false, false, false, 11))) {
            // line 12
            echo "    ";
            $context["readOnly"] = ["readonly" => "readonly"];
        }
        // line 14
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'row', ["attr" => (isset($context["readOnly"]) || array_key_exists("readOnly", $context) ? $context["readOnly"] : (function () { throw new RuntimeError('Variable "readOnly" does not exist.', 15, $this->source); })())]);
        echo "

";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 17, $this->source); })()), "fkTaxSet", [], "any", false, false, false, 17), 'row');
        echo "

<br />

<h4>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Option Values"), "html", null, true);
        echo "</h4>

<div class=\"form-group\">
    <div id=\"option-value-list\"
         class=\"option-value-list\"
         data-value-count=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 26, $this->source); })()), "productOptionValues", [], "any", false, false, false, 26)), "html", null, true);
        echo "\"
         data-prototype=\"
           ";
        // line 28
        ob_start();
        // line 29
        echo "              ";
        echo twig_include($this->env, $context, "@ProductOption/_template/_product-option-template.twig", ["productOptionForm" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 29, $this->source); })()), "productOptionValues", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "prototype", [], "any", false, false, false, 29)]);
        echo "
           ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo twig_escape_filter($this->env, $___internal_parse_0_);
        // line 30
        echo "\">

        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 32, $this->source); })()), "productOptionValues", [], "any", false, false, false, 32));
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
        foreach ($context['_seq'] as $context["_key"] => $context["valueForm"]) {
            // line 33
            echo "            ";
            echo twig_include($this->env, $context, "@ProductOption/_template/_product-option-template.twig", ["productOptionForm" => $context["valueForm"]]);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valueForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        ";
        // line 36
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 36, $this->source); })()), "productOptionValues", [], "any", false, false, false, 36), "setRendered", [], "any", false, false, false, 36);
        // line 37
        echo "    </div>
</div>

<div class=\"form-group\">
    <a href=\"#\" class=\"btn btn-sm btn-outline btn-create\" id=\"add-another-option\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add option"), "html", null, true);
        echo "</a>
</div>

<br /><br />

<h4>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Translation"), "html", null, true);
        echo "</h4>

<div class=\"form-group\"
       id=\"option-value-translations\"
       data-value-count=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 50, $this->source); })()), "productOptionValueTranslations", [], "any", false, false, false, 50)), "html", null, true);
        echo "\"
       data-prototype=\"
           ";
        // line 52
        ob_start();
        // line 53
        echo "               ";
        echo twig_include($this->env, $context, "@ProductOption/_template/_product-option-translation-template.twig", ["productOptionTranslationForm" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 53, $this->source); })()), "productOptionValueTranslations", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "prototype", [], "any", false, false, false, 53), "label" => "Option name:"]);
        echo "
           ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo twig_escape_filter($this->env, $___internal_parse_1_);
        // line 54
        echo "\">

    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availableLocales"]) || array_key_exists("availableLocales", $context) ? $context["availableLocales"] : (function () { throw new RuntimeError('Variable "availableLocales" does not exist.', 56, $this->source); })()));
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
            // line 57
            echo "        ";
            $context["isCollapsed"] =  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 57);
            // line 58
            echo "
        <div data-locale-code=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 59), "html", null, true);
            echo "\">
        ";
            // line 60
            $this->loadTemplate("@ProductOption/_partial/tab-general.twig", "@ProductOption/_partial/tab-general.twig", 60, "1059972363")->display(twig_array_merge($context, ["localeName" => twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 60), "collapsed" => (isset($context["isCollapsed"]) || array_key_exists("isCollapsed", $context) ? $context["isCollapsed"] : (function () { throw new RuntimeError('Variable "isCollapsed" does not exist.', 60, $this->source); })()), "hasError" => false]));
            // line 78
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "</div>

";
        // line 82
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 82, $this->source); })()), "productOptionValueTranslations", [], "any", false, false, false, 82), "setRendered", [], "any", false, false, false, 82);
        // line 83
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 83, $this->source); })()), "groupNameTranslations", [], "any", false, false, false, 83), "setRendered", [], "any", false, false, false, 83);
        // line 84
        echo "
";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 85, $this->source); })()), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductOption/_partial/tab-general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 85,  239 => 84,  237 => 83,  235 => 82,  231 => 80,  216 => 78,  214 => 60,  210 => 59,  207 => 58,  204 => 57,  187 => 56,  183 => 54,  181 => 52,  175 => 53,  173 => 52,  168 => 50,  161 => 46,  153 => 41,  147 => 37,  145 => 36,  142 => 35,  125 => 33,  108 => 32,  104 => 30,  102 => 28,  96 => 29,  94 => 28,  89 => 26,  81 => 21,  74 => 17,  69 => 15,  66 => 14,  62 => 12,  60 => 11,  58 => 10,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_errors(generalForm) }}

{{ form_start(generalForm, { attr: { id:'product_option_general'}}) }}
 <div class=\"well\">
     <h3>{{ 'Add General Information' | trans }}</h3>
     <p>{{ 'Create a product option by defining option values with translation key, sku and price. By adding more than 1 option value bellow, you will create an option group. With an option group your customer can choose one option from this group.' | trans }}</p>

 </div>

{% set readOnly = {} %}
{% if generalForm.vars.data and generalForm.vars.data.name and generalForm.vars.data.idProductOptionGroup %}
    {% set readOnly = {'readonly' : 'readonly'} %}
{% endif %}

{{ form_row(generalForm.name, {attr:readOnly}) }}

{{ form_row(generalForm.fkTaxSet) }}

<br />

<h4>{{ 'Option Values' | trans }}</h4>

<div class=\"form-group\">
    <div id=\"option-value-list\"
         class=\"option-value-list\"
         data-value-count=\"{{ generalForm.productOptionValues|length  }}\"
         data-prototype=\"
           {% apply escape %}
              {{ include ('@ProductOption/_template/_product-option-template.twig', { 'productOptionForm': generalForm.productOptionValues.vars.prototype }) }}
           {% endapply %}\">

        {% for valueForm in generalForm.productOptionValues %}
            {{ include ('@ProductOption/_template/_product-option-template.twig', { 'productOptionForm': valueForm }) }}
        {% endfor %}

        {% do generalForm.productOptionValues.setRendered %}
    </div>
</div>

<div class=\"form-group\">
    <a href=\"#\" class=\"btn btn-sm btn-outline btn-create\" id=\"add-another-option\">{{ 'Add option' | trans }}</a>
</div>

<br /><br />

<h4>{{ 'Translation' | trans }}</h4>

<div class=\"form-group\"
       id=\"option-value-translations\"
       data-value-count=\"{{ generalForm.productOptionValueTranslations|length  }}\"
       data-prototype=\"
           {% apply escape %}
               {{ include ('@ProductOption/_template/_product-option-translation-template.twig', { 'productOptionTranslationForm': generalForm.productOptionValueTranslations.vars.prototype, 'label' : 'Option name:' }) }}
           {% endapply %}\">

    {% for locale in availableLocales %}
        {% set isCollapsed = not loop.first %}

        <div data-locale-code=\"{{ locale.localeName }}\">
        {% embed '@Gui/Partials/localized-ibox.twig' with {'localeName': locale.localeName, 'collapsed': isCollapsed , 'hasError': false} %}
           {% block content %}

               {% for productGroupNameTranslationForm in generalForm.groupNameTranslations %}
                    {% if productGroupNameTranslationForm.vars.data.localeCode == locale.localeName  %}
                        {{ include ('@ProductOption/_template/_product-option-translation-template.twig', { 'productOptionTranslationForm': productGroupNameTranslationForm, 'label' : 'Group name' | trans ~ ':'}) }}
                    {% endif %}
                {% endfor %}

                {% for valueTranslationForm in generalForm.productOptionValueTranslations %}
                    {% if valueTranslationForm.vars.data.localeCode == locale.localeName  %}
                        {{ include ('@ProductOption/_template/_product-option-translation-template.twig', { 'productOptionTranslationForm': valueTranslationForm, 'label' : 'Option name' | trans ~ ':' }) }}
                    {% endif %}
                {% endfor %}

           {% endblock %}

        {% endembed %}
        </div>
    {% endfor %}
</div>

{% do generalForm.productOptionValueTranslations.setRendered %}
{% do generalForm.groupNameTranslations.setRendered %}

{{ form_end(generalForm) }}
", "@ProductOption/_partial/tab-general.twig", "/data/vendor/spryker/product-option/src/Spryker/Zed/ProductOption/Presentation//_partial/tab-general.twig");
    }
}


/* @ProductOption/_partial/tab-general.twig */
class __TwigTemplate_ce1f4517f4c298287d1d8c2fd2d63977f569aba3c58e2c019542bb0ea000d0da___1059972363 extends Template
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
        // line 60
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductOption/_partial/tab-general.twig", 60);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 61
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "
               ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 63, $this->source); })()), "groupNameTranslations", [], "any", false, false, false, 63));
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
        foreach ($context['_seq'] as $context["_key"] => $context["productGroupNameTranslationForm"]) {
            // line 64
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productGroupNameTranslationForm"], "vars", [], "any", false, false, false, 64), "data", [], "any", false, false, false, 64), "localeCode", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 64, $this->source); })()), "localeName", [], "any", false, false, false, 64)))) {
                // line 65
                echo "                        ";
                echo twig_include($this->env, $context, "@ProductOption/_template/_product-option-translation-template.twig", ["productOptionTranslationForm" => $context["productGroupNameTranslationForm"], "label" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group name") . ":")]);
                echo "
                    ";
            }
            // line 67
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productGroupNameTranslationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["generalForm"]) || array_key_exists("generalForm", $context) ? $context["generalForm"] : (function () { throw new RuntimeError('Variable "generalForm" does not exist.', 69, $this->source); })()), "productOptionValueTranslations", [], "any", false, false, false, 69));
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
        foreach ($context['_seq'] as $context["_key"] => $context["valueTranslationForm"]) {
            // line 70
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["valueTranslationForm"], "vars", [], "any", false, false, false, 70), "data", [], "any", false, false, false, 70), "localeCode", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 70, $this->source); })()), "localeName", [], "any", false, false, false, 70)))) {
                // line 71
                echo "                        ";
                echo twig_include($this->env, $context, "@ProductOption/_template/_product-option-translation-template.twig", ["productOptionTranslationForm" => $context["valueTranslationForm"], "label" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Option name") . ":")]);
                echo "
                    ";
            }
            // line 73
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valueTranslationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
           ";
    }

    public function getTemplateName()
    {
        return "@ProductOption/_partial/tab-general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 74,  461 => 73,  455 => 71,  452 => 70,  435 => 69,  432 => 68,  418 => 67,  412 => 65,  409 => 64,  392 => 63,  389 => 62,  385 => 61,  374 => 60,  242 => 85,  239 => 84,  237 => 83,  235 => 82,  231 => 80,  216 => 78,  214 => 60,  210 => 59,  207 => 58,  204 => 57,  187 => 56,  183 => 54,  181 => 52,  175 => 53,  173 => 52,  168 => 50,  161 => 46,  153 => 41,  147 => 37,  145 => 36,  142 => 35,  125 => 33,  108 => 32,  104 => 30,  102 => 28,  96 => 29,  94 => 28,  89 => 26,  81 => 21,  74 => 17,  69 => 15,  66 => 14,  62 => 12,  60 => 11,  58 => 10,  51 => 6,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_errors(generalForm) }}

{{ form_start(generalForm, { attr: { id:'product_option_general'}}) }}
 <div class=\"well\">
     <h3>{{ 'Add General Information' | trans }}</h3>
     <p>{{ 'Create a product option by defining option values with translation key, sku and price. By adding more than 1 option value bellow, you will create an option group. With an option group your customer can choose one option from this group.' | trans }}</p>

 </div>

{% set readOnly = {} %}
{% if generalForm.vars.data and generalForm.vars.data.name and generalForm.vars.data.idProductOptionGroup %}
    {% set readOnly = {'readonly' : 'readonly'} %}
{% endif %}

{{ form_row(generalForm.name, {attr:readOnly}) }}

{{ form_row(generalForm.fkTaxSet) }}

<br />

<h4>{{ 'Option Values' | trans }}</h4>

<div class=\"form-group\">
    <div id=\"option-value-list\"
         class=\"option-value-list\"
         data-value-count=\"{{ generalForm.productOptionValues|length  }}\"
         data-prototype=\"
           {% apply escape %}
              {{ include ('@ProductOption/_template/_product-option-template.twig', { 'productOptionForm': generalForm.productOptionValues.vars.prototype }) }}
           {% endapply %}\">

        {% for valueForm in generalForm.productOptionValues %}
            {{ include ('@ProductOption/_template/_product-option-template.twig', { 'productOptionForm': valueForm }) }}
        {% endfor %}

        {% do generalForm.productOptionValues.setRendered %}
    </div>
</div>

<div class=\"form-group\">
    <a href=\"#\" class=\"btn btn-sm btn-outline btn-create\" id=\"add-another-option\">{{ 'Add option' | trans }}</a>
</div>

<br /><br />

<h4>{{ 'Translation' | trans }}</h4>

<div class=\"form-group\"
       id=\"option-value-translations\"
       data-value-count=\"{{ generalForm.productOptionValueTranslations|length  }}\"
       data-prototype=\"
           {% apply escape %}
               {{ include ('@ProductOption/_template/_product-option-translation-template.twig', { 'productOptionTranslationForm': generalForm.productOptionValueTranslations.vars.prototype, 'label' : 'Option name:' }) }}
           {% endapply %}\">

    {% for locale in availableLocales %}
        {% set isCollapsed = not loop.first %}

        <div data-locale-code=\"{{ locale.localeName }}\">
        {% embed '@Gui/Partials/localized-ibox.twig' with {'localeName': locale.localeName, 'collapsed': isCollapsed , 'hasError': false} %}
           {% block content %}

               {% for productGroupNameTranslationForm in generalForm.groupNameTranslations %}
                    {% if productGroupNameTranslationForm.vars.data.localeCode == locale.localeName  %}
                        {{ include ('@ProductOption/_template/_product-option-translation-template.twig', { 'productOptionTranslationForm': productGroupNameTranslationForm, 'label' : 'Group name' | trans ~ ':'}) }}
                    {% endif %}
                {% endfor %}

                {% for valueTranslationForm in generalForm.productOptionValueTranslations %}
                    {% if valueTranslationForm.vars.data.localeCode == locale.localeName  %}
                        {{ include ('@ProductOption/_template/_product-option-translation-template.twig', { 'productOptionTranslationForm': valueTranslationForm, 'label' : 'Option name' | trans ~ ':' }) }}
                    {% endif %}
                {% endfor %}

           {% endblock %}

        {% endembed %}
        </div>
    {% endfor %}
</div>

{% do generalForm.productOptionValueTranslations.setRendered %}
{% do generalForm.groupNameTranslations.setRendered %}

{{ form_end(generalForm) }}
", "@ProductOption/_partial/tab-general.twig", "/data/vendor/spryker/product-option/src/Spryker/Zed/ProductOption/Presentation//_partial/tab-general.twig");
    }
}
