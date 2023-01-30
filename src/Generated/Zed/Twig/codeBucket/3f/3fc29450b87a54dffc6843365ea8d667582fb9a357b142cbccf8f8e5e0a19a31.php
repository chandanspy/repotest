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

/* @PaymentGui/_partials/_tabs/tab-store-relation.twig */
class __TwigTemplate_6c44f485d2e5846d4b56c7f033e3f970117fc139d75bd8087d716e20229f78db extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["paymentMethodForm"] ?? null), "storeRelation", [], "any", true, true, false, 1)) {
            // line 2
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paymentMethodForm"]) || array_key_exists("paymentMethodForm", $context) ? $context["paymentMethodForm"] : (function () { throw new RuntimeError('Variable "paymentMethodForm" does not exist.', 2, $this->source); })()), "storeRelation", [], "any", false, false, false, 2), "id_stores", [], "any", false, false, false, 2), 'row', ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Available in the following store(s)")]);
            echo "
";
        }
        // line 4
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["paymentMethodForm"]) || array_key_exists("paymentMethodForm", $context) ? $context["paymentMethodForm"] : (function () { throw new RuntimeError('Variable "paymentMethodForm" does not exist.', 5, $this->source); })()), "storeRelation", [], "any", false, false, false, 5), 'rest');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PaymentGui/_partials/_tabs/tab-store-relation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if paymentMethodForm.storeRelation is defined %}
    {{ form_row(paymentMethodForm.storeRelation.id_stores, { 'label': 'Available in the following store(s)' | trans }) }}
{% endif %}

{{ form_rest(paymentMethodForm.storeRelation) }}
", "@PaymentGui/_partials/_tabs/tab-store-relation.twig", "/data/vendor/spryker/payment-gui/src/Spryker/Zed/PaymentGui/Presentation/_partials/_tabs/tab-store-relation.twig");
    }
}
