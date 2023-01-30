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

/* @MerchantGui/_partials/general-tab.twig */
class __TwigTemplate_f2586dd8d3ff7bd4267c20634887d73a0326a035a6a4dc7236fa4a9548dae4ee extends Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["merchantForm"]) || array_key_exists("merchantForm", $context) ? $context["merchantForm"] : (function () { throw new RuntimeError('Variable "merchantForm" does not exist.', 1, $this->source); })()), "id_merchant", [], "any", false, false, false, 1), 'row');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["merchantForm"]) || array_key_exists("merchantForm", $context) ? $context["merchantForm"] : (function () { throw new RuntimeError('Variable "merchantForm" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), 'row');
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["merchantForm"]) || array_key_exists("merchantForm", $context) ? $context["merchantForm"] : (function () { throw new RuntimeError('Variable "merchantForm" does not exist.', 3, $this->source); })()), "registration_number", [], "any", false, false, false, 3), 'row');
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["merchantForm"]) || array_key_exists("merchantForm", $context) ? $context["merchantForm"] : (function () { throw new RuntimeError('Variable "merchantForm" does not exist.', 4, $this->source); })()), "merchant_reference", [], "any", false, false, false, 4), 'row');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["merchantForm"]) || array_key_exists("merchantForm", $context) ? $context["merchantForm"] : (function () { throw new RuntimeError('Variable "merchantForm" does not exist.', 5, $this->source); })()), "email", [], "any", false, false, false, 5), 'row');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["merchantForm"]) || array_key_exists("merchantForm", $context) ? $context["merchantForm"] : (function () { throw new RuntimeError('Variable "merchantForm" does not exist.', 6, $this->source); })()), "is_active", [], "any", false, false, false, 6), 'row');
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["merchantForm"]) || array_key_exists("merchantForm", $context) ? $context["merchantForm"] : (function () { throw new RuntimeError('Variable "merchantForm" does not exist.', 7, $this->source); })()), "storeRelation", [], "any", false, false, false, 7), 'row');
        echo "

";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["merchantForm"]) || array_key_exists("merchantForm", $context) ? $context["merchantForm"] : (function () { throw new RuntimeError('Variable "merchantForm" does not exist.', 9, $this->source); })()), "urlCollection", [], "any", false, false, false, 9), 'label');
        echo "

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["merchantForm"]) || array_key_exists("merchantForm", $context) ? $context["merchantForm"] : (function () { throw new RuntimeError('Variable "merchantForm" does not exist.', 11, $this->source); })()), "urlCollection", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["localizedUrl"]) {
            // line 12
            echo "    <div class=\"form-group ";
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedUrl"], "url", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12)), 0))) {
                echo "has-error";
            }
            echo "\">
        ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedUrl"], "vars", [], "any", false, false, false, 13), "data", [], "any", false, false, false, 13), "urlPrefix", [], "any", false, false, false, 13)) {
                // line 14
                echo "            <div class=\"input-group m-b\">
                <span class=\"input-group-addon\">
                    ";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedUrl"], "vars", [], "any", false, false, false, 16), "data", [], "any", false, false, false, 16), "urlPrefix", [], "any", false, false, false, 16), "html", null, true);
                echo "
                </span>
                ";
                // line 18
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["localizedUrl"], "url", [], "any", false, false, false, 18), 'widget');
                echo "
            </div>
        ";
            } else {
                // line 21
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["localizedUrl"], "url", [], "any", false, false, false, 21), 'widget');
                echo "
        ";
            }
            // line 23
            echo "
        ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["localizedUrl"], "fkLocale", [], "any", false, false, false, 24), 'widget');
            echo "
        ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["localizedUrl"], "url", [], "any", false, false, false, 25), 'errors');
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localizedUrl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        // line 29
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["merchantForm"]) || array_key_exists("merchantForm", $context) ? $context["merchantForm"] : (function () { throw new RuntimeError('Variable "merchantForm" does not exist.', 29, $this->source); })()), "urlCollection", [], "any", false, false, false, 29), "setRendered", [], "any", false, false, false, 29);
        // line 30
        echo "
";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["merchantForm"] ?? null), "stocks", [], "any", true, true, false, 31)) {
            // line 32
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["merchantForm"]) || array_key_exists("merchantForm", $context) ? $context["merchantForm"] : (function () { throw new RuntimeError('Variable "merchantForm" does not exist.', 32, $this->source); })()), "stocks", [], "any", false, false, false, 32), 'row');
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@MerchantGui/_partials/general-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 32,  129 => 31,  126 => 30,  124 => 29,  121 => 28,  112 => 25,  108 => 24,  105 => 23,  99 => 21,  93 => 18,  88 => 16,  84 => 14,  82 => 13,  75 => 12,  71 => 11,  66 => 9,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_row(merchantForm.id_merchant) }}
{{ form_row(merchantForm.name) }}
{{ form_row(merchantForm.registration_number) }}
{{ form_row(merchantForm.merchant_reference) }}
{{ form_row(merchantForm.email) }}
{{ form_row(merchantForm.is_active) }}
{{ form_row(merchantForm.storeRelation) }}

{{ form_label(merchantForm.urlCollection) }}

{% for localizedUrl in merchantForm.urlCollection %}
    <div class=\"form-group {% if localizedUrl.url.vars.errors|length > 0 %}has-error{% endif %}\">
        {% if localizedUrl.vars.data.urlPrefix %}
            <div class=\"input-group m-b\">
                <span class=\"input-group-addon\">
                    {{ localizedUrl.vars.data.urlPrefix }}
                </span>
                {{ form_widget(localizedUrl.url) }}
            </div>
        {% else %}
            {{ form_widget(localizedUrl.url) }}
        {% endif %}

        {{ form_widget(localizedUrl.fkLocale) }}
        {{ form_errors(localizedUrl.url) }}
    </div>
{% endfor %}

{% do merchantForm.urlCollection.setRendered %}

{% if (merchantForm.stocks is defined) %}
    {{ form_row(merchantForm.stocks) }}
{% endif %}
", "@MerchantGui/_partials/general-tab.twig", "/data/vendor/spryker/merchant-gui/src/Spryker/Zed/MerchantGui/Presentation//_partials/general-tab.twig");
    }
}
