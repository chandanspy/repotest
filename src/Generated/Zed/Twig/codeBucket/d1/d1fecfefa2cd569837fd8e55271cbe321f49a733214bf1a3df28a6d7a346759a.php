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

/* @ProductManagement/Product/_partials/AddVariant/tab-general.twig */
class __TwigTemplate_b6721634fd6de89d3125183f367d7f5c4ad4bfd5e5f88c956c5d156a3afb50e2 extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note: The SKU is not editable after saving anymore. "), "html", null, true);
        echo "</i></p>
    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_0_);
        // line 9
        echo "</div>

";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "sku", [], "any", false, false, false, 11), 'row', ["id" => "sku-input"]);
        echo "

";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sku_autogenerate_checkbox", [], "any", true, true, false, 13)) {
            // line 14
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "sku_autogenerate_checkbox", [], "any", false, false, false, 14), 'row', ["id" => "sku-autogenerate-checkbox-input"]);
            echo "
";
        }
        // line 16
        echo "


";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "container_product_concrete_super_attributes", [], "any", true, true, false, 19) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "container_product_concrete_super_attributes", [], "any", false, false, false, 19), "form_product_concrete_super_attributes", [], "any", false, false, false, 19)))) {
            // line 20
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "container_product_concrete_super_attributes", [], "any", false, false, false, 20), "form_product_concrete_super_attributes", [], "any", false, false, false, 20), 'label');
            echo "
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "container_product_concrete_super_attributes", [], "any", false, false, false, 21), "form_product_concrete_super_attributes", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["attributeForm"]) {
                // line 22
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["attributeForm"], 'label');
                echo "
        ";
                // line 23
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["attributeForm"], 'widget');
                echo "
        ";
                // line 24
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["attributeForm"], "vars", [], "any", false, false, false, 24), "errors", [], "any", false, false, false, 24))) {
                    // line 25
                    echo "            <div class=\"has-error\">
                ";
                    // line 26
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["attributeForm"], 'errors');
                    echo "
            </div>
        ";
                }
                // line 29
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributeForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 32, $this->source); })()));
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
            // line 33
            echo "    ";
            $context["formKey"] = ("general_" . twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 33));
            // line 34
            echo "
    ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 35, $this->source); })()), [], "array", true, true, false, 35)) {
                // line 36
                echo "
        ";
                // line 37
                $this->loadTemplate("@ProductManagement/Product/_partials/AddVariant/tab-general.twig", "@ProductManagement/Product/_partials/AddVariant/tab-general.twig", 37, "1880860085")->display(twig_array_merge($context, ["collapsed" =>  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 37), "localeName" => twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 37)]));
                // line 48
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
        // line 50
        echo "
";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "valid_from", [], "any", false, false, false, 51), 'row');
        echo "
";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "valid_to", [], "any", false, false, false, 52), 'row');
        echo "
";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "companySuppliers", [], "any", true, true, false, 54)) {
            // line 55
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "companySuppliers", [], "any", false, false, false, 55), 'row');
            echo "
";
        }
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('footer_js', $context, $blocks);
    }

    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "    <script src=\"";
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-productmanagement-concrete-add.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/AddVariant/tab-general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 59,  190 => 58,  187 => 57,  181 => 55,  179 => 54,  175 => 52,  171 => 51,  168 => 50,  153 => 48,  151 => 37,  148 => 36,  146 => 35,  143 => 34,  140 => 33,  123 => 32,  120 => 31,  113 => 29,  107 => 26,  104 => 25,  102 => 24,  98 => 23,  93 => 22,  89 => 21,  84 => 20,  82 => 19,  77 => 16,  71 => 14,  69 => 13,  64 => 11,  60 => 9,  58 => 4,  53 => 7,  49 => 6,  44 => 5,  42 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var locale \\Generated\\Shared\\Transfer\\LocaleTransfer #}

<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'Add General Information' | trans }}</h3>
        <p>{{ 'Below the name and description for your product can be edited for different locales (in different languages).' | trans }}</p>
        <p><i>{{ 'Note: The SKU is not editable after saving anymore. ' | trans }}</i></p>
    {% endapply %}
</div>

{{ form_row(form.sku, { 'id': 'sku-input' }) }}

{% if form.sku_autogenerate_checkbox is defined %}
    {{ form_row(form.sku_autogenerate_checkbox, { 'id': 'sku-autogenerate-checkbox-input' }) }}
{% endif %}



{% if form.container_product_concrete_super_attributes is defined and form.container_product_concrete_super_attributes.form_product_concrete_super_attributes|length %}
    {{ form_label(form.container_product_concrete_super_attributes.form_product_concrete_super_attributes) }}
    {% for attributeForm in form.container_product_concrete_super_attributes.form_product_concrete_super_attributes %}
        {{ form_label(attributeForm) }}
        {{ form_widget(attributeForm) }}
        {% if attributeForm.vars.errors|length %}
            <div class=\"has-error\">
                {{ form_errors(attributeForm) }}
            </div>
        {% endif %}
    {% endfor %}
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
", "@ProductManagement/Product/_partials/AddVariant/tab-general.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/AddVariant/tab-general.twig");
    }
}


/* @ProductManagement/Product/_partials/AddVariant/tab-general.twig */
class __TwigTemplate_b6721634fd6de89d3125183f367d7f5c4ad4bfd5e5f88c956c5d156a3afb50e2___1880860085 extends Template
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
        // line 37
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductManagement/Product/_partials/AddVariant/tab-general.twig", 37);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 39, $this->source); })()), [], "array", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 40
            echo "                    <div class=\"form-group ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["input"], "vars", [], "any", false, false, false, 40), "errors", [], "any", false, false, false, 40))) {
                echo "has-error";
            }
            echo "\">
                        ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'label');
            echo "
                        ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'widget', ["attr" => ["class" => "name-translation"]]);
            echo "
                        ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'errors');
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/AddVariant/tab-general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 46,  340 => 43,  336 => 42,  332 => 41,  325 => 40,  320 => 39,  316 => 38,  305 => 37,  197 => 59,  190 => 58,  187 => 57,  181 => 55,  179 => 54,  175 => 52,  171 => 51,  168 => 50,  153 => 48,  151 => 37,  148 => 36,  146 => 35,  143 => 34,  140 => 33,  123 => 32,  120 => 31,  113 => 29,  107 => 26,  104 => 25,  102 => 24,  98 => 23,  93 => 22,  89 => 21,  84 => 20,  82 => 19,  77 => 16,  71 => 14,  69 => 13,  64 => 11,  60 => 9,  58 => 4,  53 => 7,  49 => 6,  44 => 5,  42 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var locale \\Generated\\Shared\\Transfer\\LocaleTransfer #}

<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'Add General Information' | trans }}</h3>
        <p>{{ 'Below the name and description for your product can be edited for different locales (in different languages).' | trans }}</p>
        <p><i>{{ 'Note: The SKU is not editable after saving anymore. ' | trans }}</i></p>
    {% endapply %}
</div>

{{ form_row(form.sku, { 'id': 'sku-input' }) }}

{% if form.sku_autogenerate_checkbox is defined %}
    {{ form_row(form.sku_autogenerate_checkbox, { 'id': 'sku-autogenerate-checkbox-input' }) }}
{% endif %}



{% if form.container_product_concrete_super_attributes is defined and form.container_product_concrete_super_attributes.form_product_concrete_super_attributes|length %}
    {{ form_label(form.container_product_concrete_super_attributes.form_product_concrete_super_attributes) }}
    {% for attributeForm in form.container_product_concrete_super_attributes.form_product_concrete_super_attributes %}
        {{ form_label(attributeForm) }}
        {{ form_widget(attributeForm) }}
        {% if attributeForm.vars.errors|length %}
            <div class=\"has-error\">
                {{ form_errors(attributeForm) }}
            </div>
        {% endif %}
    {% endfor %}
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
", "@ProductManagement/Product/_partials/AddVariant/tab-general.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/AddVariant/tab-general.twig");
    }
}
