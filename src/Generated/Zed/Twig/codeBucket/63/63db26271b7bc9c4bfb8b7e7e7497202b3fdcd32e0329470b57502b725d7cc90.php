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

/* @PaymentGui/_partials/_tabs/tab-configuration.twig */
class __TwigTemplate_47fc05917ef480c15d61efa9eef2da6b69f2223ddcac8c78ef4c4ab478db809c extends Template
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
        // line 4
        echo "<div class=\"row\">
    <div class=\"col-xs-12 col-md-6 col-lg-3\">
        <dl>
            <dt>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment Method Key"), "html", null, true);
        echo "</dt>
            <dd>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paymentMethod"]) || array_key_exists("paymentMethod", $context) ? $context["paymentMethod"] : (function () { throw new RuntimeError('Variable "paymentMethod" does not exist.', 8, $this->source); })()), "paymentMethodKey", [], "any", false, false, false, 8), "html", null, true);
        echo "</dd>
            <dt>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</dt>
            <dd>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paymentMethod"]) || array_key_exists("paymentMethod", $context) ? $context["paymentMethod"] : (function () { throw new RuntimeError('Variable "paymentMethod" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</dd>
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["paymentMethodForm"]) || array_key_exists("paymentMethodForm", $context) ? $context["paymentMethodForm"] : (function () { throw new RuntimeError('Variable "paymentMethodForm" does not exist.', 11, $this->source); })()), "isActive", [], "any", false, false, false, 11), 'row');
        echo "
        </dl>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PaymentGui/_partials/_tabs/tab-configuration.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{#
@var paymentMethod \\Generated\\Shared\\Transfer\\PaymentMethodTransfer
#}
<div class=\"row\">
    <div class=\"col-xs-12 col-md-6 col-lg-3\">
        <dl>
            <dt>{{ 'Payment Method Key' | trans }}</dt>
            <dd>{{ paymentMethod.paymentMethodKey }}</dd>
            <dt>{{ 'Name' | trans }}</dt>
            <dd>{{ paymentMethod.name }}</dd>
            {{ form_row(paymentMethodForm.isActive) }}
        </dl>
    </div>
</div>
", "@PaymentGui/_partials/_tabs/tab-configuration.twig", "/data/vendor/spryker/payment-gui/src/Spryker/Zed/PaymentGui/Presentation/_partials/_tabs/tab-configuration.twig");
    }
}
