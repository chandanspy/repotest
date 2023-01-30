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

/* @ProductAttributeGui/Attribute/partials/translate-form-content.twig */
class __TwigTemplate_604e2e784f26d7e90e9595494f025489c1acfa133298de896d32555ff073978d extends Template
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
        if ( !array_key_exists("readOnly", $context)) {
            // line 2
            echo "    ";
            $context["readOnly"] = false;
        }
        // line 4
        echo "
<div class=\"form-group\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "translations", [], "any", false, false, false, 6));
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
        foreach ($context['_seq'] as $context["locale"] => $context["localizedAttribute"]) {
            // line 7
            echo "        ";
            $this->loadTemplate("@ProductAttributeGui/Attribute/partials/translate-form-content.twig", "@ProductAttributeGui/Attribute/partials/translate-form-content.twig", 7, "1472492633")->display(twig_array_merge($context, ["localeName" => $context["locale"], "collapsed" =>  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 7), "hasError" =>  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedAttribute"], "vars", [], "any", false, false, false, 7), "valid", [], "any", false, false, false, 7)]));
            // line 46
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
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['localizedAttribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/Attribute/partials/translate-form-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 47,  67 => 46,  64 => 7,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if readOnly is not defined %}
    {% set readOnly = false %}
{% endif %}

<div class=\"form-group\">
    {% for locale,localizedAttribute in form.translations %}
        {% embed '@Gui/Partials/localized-ibox.twig' with {'localeName': locale, 'collapsed': (not loop.first), 'hasError': (not localizedAttribute.vars.valid) } %}
            {% block content %}
                <div class=\"row form-group\">
                    <div class=\"col-sm-4\">
                        {{ form_row(localizedAttribute.id_product_management_attribute) }}

                        {{ form_row(localizedAttribute.key) }}
                    </div>
                    <div class=\"col-sm-8\">
                        <div class=\"form-group {% if localizedAttribute.key_translation.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(localizedAttribute.key_translation) }}
                            {{ form_widget(localizedAttribute.key_translation, {'attr': {'class': 'name-translation', 'data-translation-key': localizedAttribute.key.vars.value}}) }}
                            {{ form_errors(localizedAttribute.key_translation) }}
                        </div>
                    </div>
                </div>

                {{ form_row(localizedAttribute.translate_values, {'attr': {'class': 'translate_values_checkbox'}}) }}

                <div class=\"value_translation_container\">
                    {% if localizedAttribute.value_translations|length %}
                        {% for valueTranslationForm in localizedAttribute.value_translations %}
                            <div class=\"row form-group\">
                                <div class=\"col-sm-4\">
                                    {{ form_widget(valueTranslationForm.id_product_management_attribute_value) }}
                                    {{ form_widget(valueTranslationForm.value) }}
                                </div>
                                <div class=\"col-sm-8 {% if valueTranslationForm.translation.vars.errors|length %}has-error{% endif %}\">
                                    {{ form_widget(valueTranslationForm.translation, {'attr': {'class': 'value-translation', 'data-translation-key': valueTranslationForm.value.vars.value}}) }}
                                    {{ form_errors(valueTranslationForm.translation) }}
                                </div>
                            </div>
                        {% endfor %}
                    {% else %}
                        {{ form_widget(localizedAttribute.value_translations) }}
                    {% endif %}
                </div>
            {% endblock %}
        {% endembed %}
    {% endfor %}
</div>
", "@ProductAttributeGui/Attribute/partials/translate-form-content.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//Attribute/partials/translate-form-content.twig");
    }
}


/* @ProductAttributeGui/Attribute/partials/translate-form-content.twig */
class __TwigTemplate_604e2e784f26d7e90e9595494f025489c1acfa133298de896d32555ff073978d___1472492633 extends Template
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
        // line 7
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductAttributeGui/Attribute/partials/translate-form-content.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                <div class=\"row form-group\">
                    <div class=\"col-sm-4\">
                        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedAttribute"]) || array_key_exists("localizedAttribute", $context) ? $context["localizedAttribute"] : (function () { throw new RuntimeError('Variable "localizedAttribute" does not exist.', 11, $this->source); })()), "id_product_management_attribute", [], "any", false, false, false, 11), 'row');
        echo "

                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedAttribute"]) || array_key_exists("localizedAttribute", $context) ? $context["localizedAttribute"] : (function () { throw new RuntimeError('Variable "localizedAttribute" does not exist.', 13, $this->source); })()), "key", [], "any", false, false, false, 13), 'row');
        echo "
                    </div>
                    <div class=\"col-sm-8\">
                        <div class=\"form-group ";
        // line 16
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizedAttribute"]) || array_key_exists("localizedAttribute", $context) ? $context["localizedAttribute"] : (function () { throw new RuntimeError('Variable "localizedAttribute" does not exist.', 16, $this->source); })()), "key_translation", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "errors", [], "any", false, false, false, 16))) {
            echo "has-error";
        }
        echo "\">
                            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedAttribute"]) || array_key_exists("localizedAttribute", $context) ? $context["localizedAttribute"] : (function () { throw new RuntimeError('Variable "localizedAttribute" does not exist.', 17, $this->source); })()), "key_translation", [], "any", false, false, false, 17), 'label');
        echo "
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedAttribute"]) || array_key_exists("localizedAttribute", $context) ? $context["localizedAttribute"] : (function () { throw new RuntimeError('Variable "localizedAttribute" does not exist.', 18, $this->source); })()), "key_translation", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "name-translation", "data-translation-key" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizedAttribute"]) || array_key_exists("localizedAttribute", $context) ? $context["localizedAttribute"] : (function () { throw new RuntimeError('Variable "localizedAttribute" does not exist.', 18, $this->source); })()), "key", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "value", [], "any", false, false, false, 18)]]);
        echo "
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedAttribute"]) || array_key_exists("localizedAttribute", $context) ? $context["localizedAttribute"] : (function () { throw new RuntimeError('Variable "localizedAttribute" does not exist.', 19, $this->source); })()), "key_translation", [], "any", false, false, false, 19), 'errors');
        echo "
                        </div>
                    </div>
                </div>

                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedAttribute"]) || array_key_exists("localizedAttribute", $context) ? $context["localizedAttribute"] : (function () { throw new RuntimeError('Variable "localizedAttribute" does not exist.', 24, $this->source); })()), "translate_values", [], "any", false, false, false, 24), 'row', ["attr" => ["class" => "translate_values_checkbox"]]);
        echo "

                <div class=\"value_translation_container\">
                    ";
        // line 27
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["localizedAttribute"]) || array_key_exists("localizedAttribute", $context) ? $context["localizedAttribute"] : (function () { throw new RuntimeError('Variable "localizedAttribute" does not exist.', 27, $this->source); })()), "value_translations", [], "any", false, false, false, 27))) {
            // line 28
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["localizedAttribute"]) || array_key_exists("localizedAttribute", $context) ? $context["localizedAttribute"] : (function () { throw new RuntimeError('Variable "localizedAttribute" does not exist.', 28, $this->source); })()), "value_translations", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["valueTranslationForm"]) {
                // line 29
                echo "                            <div class=\"row form-group\">
                                <div class=\"col-sm-4\">
                                    ";
                // line 31
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["valueTranslationForm"], "id_product_management_attribute_value", [], "any", false, false, false, 31), 'widget');
                echo "
                                    ";
                // line 32
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["valueTranslationForm"], "value", [], "any", false, false, false, 32), 'widget');
                echo "
                                </div>
                                <div class=\"col-sm-8 ";
                // line 34
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["valueTranslationForm"], "translation", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34))) {
                    echo "has-error";
                }
                echo "\">
                                    ";
                // line 35
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["valueTranslationForm"], "translation", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "value-translation", "data-translation-key" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["valueTranslationForm"], "value", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35)]]);
                echo "
                                    ";
                // line 36
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["valueTranslationForm"], "translation", [], "any", false, false, false, 36), 'errors');
                echo "
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['valueTranslationForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    ";
        } else {
            // line 41
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedAttribute"]) || array_key_exists("localizedAttribute", $context) ? $context["localizedAttribute"] : (function () { throw new RuntimeError('Variable "localizedAttribute" does not exist.', 41, $this->source); })()), "value_translations", [], "any", false, false, false, 41), 'widget');
            echo "
                    ";
        }
        // line 43
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/Attribute/partials/translate-form-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 43,  275 => 41,  272 => 40,  262 => 36,  258 => 35,  252 => 34,  247 => 32,  243 => 31,  239 => 29,  234 => 28,  232 => 27,  226 => 24,  218 => 19,  214 => 18,  210 => 17,  204 => 16,  198 => 13,  193 => 11,  189 => 9,  185 => 8,  174 => 7,  81 => 47,  67 => 46,  64 => 7,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if readOnly is not defined %}
    {% set readOnly = false %}
{% endif %}

<div class=\"form-group\">
    {% for locale,localizedAttribute in form.translations %}
        {% embed '@Gui/Partials/localized-ibox.twig' with {'localeName': locale, 'collapsed': (not loop.first), 'hasError': (not localizedAttribute.vars.valid) } %}
            {% block content %}
                <div class=\"row form-group\">
                    <div class=\"col-sm-4\">
                        {{ form_row(localizedAttribute.id_product_management_attribute) }}

                        {{ form_row(localizedAttribute.key) }}
                    </div>
                    <div class=\"col-sm-8\">
                        <div class=\"form-group {% if localizedAttribute.key_translation.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(localizedAttribute.key_translation) }}
                            {{ form_widget(localizedAttribute.key_translation, {'attr': {'class': 'name-translation', 'data-translation-key': localizedAttribute.key.vars.value}}) }}
                            {{ form_errors(localizedAttribute.key_translation) }}
                        </div>
                    </div>
                </div>

                {{ form_row(localizedAttribute.translate_values, {'attr': {'class': 'translate_values_checkbox'}}) }}

                <div class=\"value_translation_container\">
                    {% if localizedAttribute.value_translations|length %}
                        {% for valueTranslationForm in localizedAttribute.value_translations %}
                            <div class=\"row form-group\">
                                <div class=\"col-sm-4\">
                                    {{ form_widget(valueTranslationForm.id_product_management_attribute_value) }}
                                    {{ form_widget(valueTranslationForm.value) }}
                                </div>
                                <div class=\"col-sm-8 {% if valueTranslationForm.translation.vars.errors|length %}has-error{% endif %}\">
                                    {{ form_widget(valueTranslationForm.translation, {'attr': {'class': 'value-translation', 'data-translation-key': valueTranslationForm.value.vars.value}}) }}
                                    {{ form_errors(valueTranslationForm.translation) }}
                                </div>
                            </div>
                        {% endfor %}
                    {% else %}
                        {{ form_widget(localizedAttribute.value_translations) }}
                    {% endif %}
                </div>
            {% endblock %}
        {% endembed %}
    {% endfor %}
</div>
", "@ProductAttributeGui/Attribute/partials/translate-form-content.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//Attribute/partials/translate-form-content.twig");
    }
}
