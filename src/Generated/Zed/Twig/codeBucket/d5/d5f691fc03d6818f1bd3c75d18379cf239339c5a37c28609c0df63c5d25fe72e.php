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

/* @MerchantGui/EditMerchant/index.twig */
class __TwigTemplate_f22d2eebd9b208925c9ff1d2b8113fe728cb4601814aaba1d7c0faad6c18742c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'section_title' => [$this, 'block_section_title'],
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["widget_title"] = (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Merchant") . ": ") . (isset($context["idMerchant"]) || array_key_exists("idMerchant", $context) ? $context["idMerchant"] : (function () { throw new RuntimeError('Variable "idMerchant" does not exist.', 3, $this->source); })()));
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@MerchantGui/EditMerchant/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })()), "html", null, true);
    }

    // line 6
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 6, $this->source); })()), "html", null, true);
    }

    // line 8
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/merchant-gui/list-merchant"]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Merchants")]);
        echo "
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applicableMerchantStatuses"]) || array_key_exists("applicableMerchantStatuses", $context) ? $context["applicableMerchantStatuses"] : (function () { throw new RuntimeError('Variable "applicableMerchantStatuses" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["applicableMerchantStatus"]) {
            // line 11
            echo "        ";
            if ((0 === twig_compare($context["applicableMerchantStatus"], "denied"))) {
                // line 12
                echo "            ";
                echo call_user_func_array($this->env->getFunction('removeActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/merchant-gui/merchant-status", ["status" => $context["applicableMerchantStatus"], "id-merchant" => (isset($context["idMerchant"]) || array_key_exists("idMerchant", $context) ? $context["idMerchant"] : (function () { throw new RuntimeError('Variable "idMerchant" does not exist.', 12, $this->source); })())]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["applicableMerchantStatus"] . "_button")), ["icon" => "<i class=\"fa fa-key\"></i> "]]);
                echo "
        ";
            } else {
                // line 14
                echo "            ";
                echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/merchant-gui/merchant-status", ["status" => $context["applicableMerchantStatus"], "id-merchant" => (isset($context["idMerchant"]) || array_key_exists("idMerchant", $context) ? $context["idMerchant"] : (function () { throw new RuntimeError('Variable "idMerchant" does not exist.', 14, $this->source); })())]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["applicableMerchantStatus"] . "_button")), ["icon" => "<i class=\"fa fa-key\"></i> "]]);
                echo "
        ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['applicableMerchantStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
    ";
        // line 21
        $this->loadTemplate("@MerchantGui/EditMerchant/index.twig", "@MerchantGui/EditMerchant/index.twig", 21, "990956351")->display($context);
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "@MerchantGui/EditMerchant/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  109 => 21,  106 => 20,  102 => 19,  94 => 16,  88 => 14,  82 => 12,  79 => 11,  75 => 10,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Edit Merchant' | trans ~ ': ' ~ idMerchant %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}
    {{ backActionButton(url('/merchant-gui/list-merchant'), 'Back to Merchants' | trans) }}
    {%  for applicableMerchantStatus in applicableMerchantStatuses %}
        {% if applicableMerchantStatus == 'denied' %}
            {{ removeActionButton(url('/merchant-gui/merchant-status', {'status': applicableMerchantStatus, 'id-merchant': idMerchant}), (applicableMerchantStatus ~ '_button') | trans, {'icon':'<i class=\"fa fa-key\"></i> '}) }}
        {% else %}
            {{ createActionButton(url('/merchant-gui/merchant-status', {'status': applicableMerchantStatus, 'id-merchant': idMerchant}), (applicableMerchantStatus ~ '_button') | trans, {'icon':'<i class=\"fa fa-key\"></i> '}) }}
        {%  endif %}
    {%  endfor %}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {{ tabs(merchantFormTabs, {'merchantForm': form}) }}

            {{ form_end(form) }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@MerchantGui/EditMerchant/index.twig", "/data/vendor/spryker/merchant-gui/src/Spryker/Zed/MerchantGui/Presentation//EditMerchant/index.twig");
    }
}


/* @MerchantGui/EditMerchant/index.twig */
class __TwigTemplate_f22d2eebd9b208925c9ff1d2b8113fe728cb4601814aaba1d7c0faad6c18742c___990956351 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@MerchantGui/EditMerchant/index.twig", 21);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

            ";
        // line 27
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["merchantFormTabs"]) || array_key_exists("merchantFormTabs", $context) ? $context["merchantFormTabs"] : (function () { throw new RuntimeError('Variable "merchantFormTabs" does not exist.', 27, $this->source); })()), ["merchantForm" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })())]]);
        echo "

            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@MerchantGui/EditMerchant/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 29,  215 => 27,  210 => 25,  207 => 24,  203 => 23,  192 => 21,  111 => 34,  109 => 21,  106 => 20,  102 => 19,  94 => 16,  88 => 14,  82 => 12,  79 => 11,  75 => 10,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Edit Merchant' | trans ~ ': ' ~ idMerchant %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}
    {{ backActionButton(url('/merchant-gui/list-merchant'), 'Back to Merchants' | trans) }}
    {%  for applicableMerchantStatus in applicableMerchantStatuses %}
        {% if applicableMerchantStatus == 'denied' %}
            {{ removeActionButton(url('/merchant-gui/merchant-status', {'status': applicableMerchantStatus, 'id-merchant': idMerchant}), (applicableMerchantStatus ~ '_button') | trans, {'icon':'<i class=\"fa fa-key\"></i> '}) }}
        {% else %}
            {{ createActionButton(url('/merchant-gui/merchant-status', {'status': applicableMerchantStatus, 'id-merchant': idMerchant}), (applicableMerchantStatus ~ '_button') | trans, {'icon':'<i class=\"fa fa-key\"></i> '}) }}
        {%  endif %}
    {%  endfor %}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            {{ tabs(merchantFormTabs, {'merchantForm': form}) }}

            {{ form_end(form) }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@MerchantGui/EditMerchant/index.twig", "/data/vendor/spryker/merchant-gui/src/Spryker/Zed/MerchantGui/Presentation//EditMerchant/index.twig");
    }
}
