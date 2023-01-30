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

/* @ProductManagement/Product/_partials/EditVariant/tab-general.twig */
class __TwigTemplate_e0366f41ef9a0fc0fca1225a7f8953fe057ead1fa37633d404d8da1602d2c4d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer_js' => [$this, 'block_footer_js'],
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
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_0_);
        // line 9
        echo "</div>

";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "sku", [], "any", false, false, false, 11), 'row');
        echo "

";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_product_concrete_super_attributes", [], "any", true, true, false, 13)) {
            // line 14
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "form_product_concrete_super_attributes", [], "any", false, false, false, 14), 'row');
            echo "
";
        }
        // line 16
        echo "
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 17, $this->source); })()));
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
            // line 18
            echo "    ";
            $context["formKey"] = ("general_" . twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 18));
            // line 19
            echo "
    ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 20, $this->source); })()), [], "array", true, true, false, 20)) {
                // line 21
                echo "
        ";
                // line 22
                $this->loadTemplate("@ProductManagement/Product/_partials/EditVariant/tab-general.twig", "@ProductManagement/Product/_partials/EditVariant/tab-general.twig", 22, "166356472")->display(twig_array_merge($context, ["collapsed" =>  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22), "localeName" => twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 22)]));
                // line 33
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
        // line 35
        echo "
";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "valid_from", [], "any", false, false, false, 36), 'row');
        echo "
";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "valid_to", [], "any", false, false, false, 37), 'row');
        echo "
";
        // line 39
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "companySuppliers", [], "any", true, true, false, 39)) {
            // line 40
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "companySuppliers", [], "any", false, false, false, 40), 'row');
            echo "
";
        }
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('footer_js', $context, $blocks);
    }

    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "    <script src=\"";
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-productmanagement-concrete-add.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/EditVariant/tab-general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 44,  147 => 43,  144 => 42,  138 => 40,  136 => 39,  132 => 37,  128 => 36,  125 => 35,  110 => 33,  108 => 22,  105 => 21,  103 => 20,  100 => 19,  97 => 18,  80 => 17,  77 => 16,  71 => 14,  69 => 13,  64 => 11,  60 => 9,  58 => 4,  53 => 7,  49 => 6,  44 => 5,  42 => 4,  38 => 2,);
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

{{ form_row(form.sku) }}

{% if form.form_product_concrete_super_attributes is defined %}
    {{ form_row(form.form_product_concrete_super_attributes) }}
{% endif %}

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

{{ form_row(form.valid_from) }}
{{ form_row(form.valid_to) }}
{# @uses CompanySupplier #}
{% if form.companySuppliers is defined %}
    {{ form_row(form.companySuppliers) }}
{% endif %}

{% block footer_js %}
    <script src=\"{{ assetsPath('js/spryker-zed-productmanagement-concrete-add.js') }}\"></script>
{% endblock %}
", "@ProductManagement/Product/_partials/EditVariant/tab-general.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/EditVariant/tab-general.twig");
    }
}


/* @ProductManagement/Product/_partials/EditVariant/tab-general.twig */
class __TwigTemplate_e0366f41ef9a0fc0fca1225a7f8953fe057ead1fa37633d404d8da1602d2c4d7___166356472 extends Template
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
        // line 22
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductManagement/Product/_partials/EditVariant/tab-general.twig", 22);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 24, $this->source); })()), [], "array", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 25
            echo "                    <div class=\"form-group ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["input"], "vars", [], "any", false, false, false, 25), "errors", [], "any", false, false, false, 25))) {
                echo "has-error";
            }
            echo "\">
                        ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'label');
            echo "
                        ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'widget', ["attr" => ["class" => "name-translation"]]);
            echo "
                        ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'errors');
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/EditVariant/tab-general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 31,  282 => 28,  278 => 27,  274 => 26,  267 => 25,  262 => 24,  258 => 23,  247 => 22,  154 => 44,  147 => 43,  144 => 42,  138 => 40,  136 => 39,  132 => 37,  128 => 36,  125 => 35,  110 => 33,  108 => 22,  105 => 21,  103 => 20,  100 => 19,  97 => 18,  80 => 17,  77 => 16,  71 => 14,  69 => 13,  64 => 11,  60 => 9,  58 => 4,  53 => 7,  49 => 6,  44 => 5,  42 => 4,  38 => 2,);
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

{{ form_row(form.sku) }}

{% if form.form_product_concrete_super_attributes is defined %}
    {{ form_row(form.form_product_concrete_super_attributes) }}
{% endif %}

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

{{ form_row(form.valid_from) }}
{{ form_row(form.valid_to) }}
{# @uses CompanySupplier #}
{% if form.companySuppliers is defined %}
    {{ form_row(form.companySuppliers) }}
{% endif %}

{% block footer_js %}
    <script src=\"{{ assetsPath('js/spryker-zed-productmanagement-concrete-add.js') }}\"></script>
{% endblock %}
", "@ProductManagement/Product/_partials/EditVariant/tab-general.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/EditVariant/tab-general.twig");
    }
}
