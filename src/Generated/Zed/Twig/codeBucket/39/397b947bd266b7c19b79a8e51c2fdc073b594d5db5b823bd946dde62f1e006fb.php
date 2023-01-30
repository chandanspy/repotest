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

/* @ProductManagement/Product/_partials/general-tab.twig */
class __TwigTemplate_6e4c8296b386414ea376b7719fcdb6019dfcb16796daad5f42c863aaac285d6a extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add General Information"), "html", null, true);
        echo "</h3>
        <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Below the name and description for your product can be edited for different locales (in different languages)."), "html", null, true);
        echo "</p>
        <p><i>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note: The SKU prefix, just like the SKUs of your product variants, are not editable after saving anymore."), "html", null, true);
        echo "</i></p>
    ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_1_);
        // line 9
        echo "</div>

";
        // line 11
        if ((array_key_exists("merchant", $context) &&  !twig_test_empty((isset($context["merchant"]) || array_key_exists("merchant", $context) ? $context["merchant"] : (function () { throw new RuntimeError('Variable "merchant" does not exist.', 11, $this->source); })())))) {
            // line 12
            echo "    <div class=\"row\">
        <div class=\"col-xs-2\"><strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Merchant"), "html", null, true);
            echo "</strong></div>
        <div class=\"col-xs-10\">
            <a target=\"_blank\" href=\"/merchant-gui/edit-merchant?id-merchant=";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["merchant"]) || array_key_exists("merchant", $context) ? $context["merchant"] : (function () { throw new RuntimeError('Variable "merchant" does not exist.', 15, $this->source); })()), "idMerchant", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
                ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["merchant"]) || array_key_exists("merchant", $context) ? $context["merchant"] : (function () { throw new RuntimeError('Variable "merchant" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "
            </a>
        </div>
    </div>
    <div class=\"hr-line-dashed\"></div>
";
        }
        // line 22
        echo "
";
        // line 23
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@ProductApprovalGui/Partials/approval_status_label.twig", "@ProductManagement/Product/_partials/general-tab.twig", 23);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display(twig_to_array(["product" =>             // line 24
(isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 24, $this->source); })())]));
        }
        // line 26
        echo "
";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "store_relation", [], "any", true, true, false, 27)) {
            // line 28
            echo "   ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "store_relation", [], "any", false, false, false, 28), 'widget');
            echo "
";
        }
        // line 30
        echo "
";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "sku", [], "any", false, false, false, 31), 'row');
        echo "

";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 33, $this->source); })()));
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
            // line 34
            echo "    ";
            $context["formKey"] = ("general_" . twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 34));
            // line 35
            echo "
    ";
            // line 36
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 36, $this->source); })()), [], "array", true, true, false, 36)) {
                // line 37
                echo "
        ";
                // line 38
                $this->loadTemplate("@ProductManagement/Product/_partials/general-tab.twig", "@ProductManagement/Product/_partials/general-tab.twig", 38, "535368444")->display(twig_array_merge($context, ["collapsed" =>  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 38), "localeName" => twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 38)]));
                // line 49
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
        // line 51
        echo "
";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new_from", [], "any", true, true, false, 52)) {
            // line 53
            echo "    <p>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "new_from", [], "any", false, false, false, 53), 'row');
            echo "</p>
";
        }
        // line 55
        echo "
";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new_to", [], "any", true, true, false, 56)) {
            // line 57
            echo "    <p>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "new_to", [], "any", false, false, false, 57), 'row');
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/general-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 57,  178 => 56,  175 => 55,  169 => 53,  167 => 52,  164 => 51,  149 => 49,  147 => 38,  144 => 37,  142 => 36,  139 => 35,  136 => 34,  119 => 33,  114 => 31,  111 => 30,  105 => 28,  103 => 27,  100 => 26,  97 => 24,  89 => 23,  86 => 22,  77 => 16,  73 => 15,  68 => 13,  65 => 12,  63 => 11,  59 => 9,  57 => 4,  52 => 7,  48 => 6,  43 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var locale \\Generated\\Shared\\Transfer\\LocaleTransfer #}

<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'Add General Information' | trans }}</h3>
        <p>{{ 'Below the name and description for your product can be edited for different locales (in different languages).' | trans }}</p>
        <p><i>{{ 'Note: The SKU prefix, just like the SKUs of your product variants, are not editable after saving anymore.' | trans }}</i></p>
    {% endapply %}
</div>

{% if merchant is defined and merchant is not empty %}
    <div class=\"row\">
        <div class=\"col-xs-2\"><strong>{{ 'Merchant' | trans }}</strong></div>
        <div class=\"col-xs-10\">
            <a target=\"_blank\" href=\"/merchant-gui/edit-merchant?id-merchant={{ merchant.idMerchant}}\">
                {{ merchant.name }}
            </a>
        </div>
    </div>
    <div class=\"hr-line-dashed\"></div>
{% endif %}

{% include '@ProductApprovalGui/Partials/approval_status_label.twig' ignore missing with {
    product: currentProduct,
} only %}

{% if form.store_relation is defined %}
   {{ form_widget(form.store_relation) }}
{% endif %}

{{ form_row(form.sku) }}

{% for locale in localeCollection %}
    {% set formKey = 'general_' ~ locale.localeName %}

    {% if form[formKey] is defined %}

        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': locale.localeName} %}
            {% block content %}
                {% for input in form[formKey] %}
                    <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                        {{ form_label(input) }}
                        {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                        {{ form_errors(input) }}
                    </div>
                {% endfor %}
            {% endblock %}
        {% endembed %}
    {% endif %}
{% endfor %}

{% if form.new_from is defined %}
    <p>{{ form_row(form.new_from) }}</p>
{% endif %}

{% if form.new_to is defined %}
    <p>{{ form_row(form.new_to) }}</p>
{% endif %}
", "@ProductManagement/Product/_partials/general-tab.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/general-tab.twig");
    }
}


/* @ProductManagement/Product/_partials/general-tab.twig */
class __TwigTemplate_6e4c8296b386414ea376b7719fcdb6019dfcb16796daad5f42c863aaac285d6a___535368444 extends Template
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
        // line 38
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductManagement/Product/_partials/general-tab.twig", 38);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 40, $this->source); })()), [], "array", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 41
            echo "                    <div class=\"form-group ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["input"], "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41))) {
                echo "has-error";
            }
            echo "\">
                        ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'label');
            echo "
                        ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'widget', ["attr" => ["class" => "name-translation"]]);
            echo "
                        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'errors');
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/general-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 47,  322 => 44,  318 => 43,  314 => 42,  307 => 41,  302 => 40,  298 => 39,  287 => 38,  180 => 57,  178 => 56,  175 => 55,  169 => 53,  167 => 52,  164 => 51,  149 => 49,  147 => 38,  144 => 37,  142 => 36,  139 => 35,  136 => 34,  119 => 33,  114 => 31,  111 => 30,  105 => 28,  103 => 27,  100 => 26,  97 => 24,  89 => 23,  86 => 22,  77 => 16,  73 => 15,  68 => 13,  65 => 12,  63 => 11,  59 => 9,  57 => 4,  52 => 7,  48 => 6,  43 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var locale \\Generated\\Shared\\Transfer\\LocaleTransfer #}

<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'Add General Information' | trans }}</h3>
        <p>{{ 'Below the name and description for your product can be edited for different locales (in different languages).' | trans }}</p>
        <p><i>{{ 'Note: The SKU prefix, just like the SKUs of your product variants, are not editable after saving anymore.' | trans }}</i></p>
    {% endapply %}
</div>

{% if merchant is defined and merchant is not empty %}
    <div class=\"row\">
        <div class=\"col-xs-2\"><strong>{{ 'Merchant' | trans }}</strong></div>
        <div class=\"col-xs-10\">
            <a target=\"_blank\" href=\"/merchant-gui/edit-merchant?id-merchant={{ merchant.idMerchant}}\">
                {{ merchant.name }}
            </a>
        </div>
    </div>
    <div class=\"hr-line-dashed\"></div>
{% endif %}

{% include '@ProductApprovalGui/Partials/approval_status_label.twig' ignore missing with {
    product: currentProduct,
} only %}

{% if form.store_relation is defined %}
   {{ form_widget(form.store_relation) }}
{% endif %}

{{ form_row(form.sku) }}

{% for locale in localeCollection %}
    {% set formKey = 'general_' ~ locale.localeName %}

    {% if form[formKey] is defined %}

        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': locale.localeName} %}
            {% block content %}
                {% for input in form[formKey] %}
                    <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                        {{ form_label(input) }}
                        {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                        {{ form_errors(input) }}
                    </div>
                {% endfor %}
            {% endblock %}
        {% endembed %}
    {% endif %}
{% endfor %}

{% if form.new_from is defined %}
    <p>{{ form_row(form.new_from) }}</p>
{% endif %}

{% if form.new_to is defined %}
    <p>{{ form_row(form.new_to) }}</p>
{% endif %}
", "@ProductManagement/Product/_partials/general-tab.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/general-tab.twig");
    }
}
