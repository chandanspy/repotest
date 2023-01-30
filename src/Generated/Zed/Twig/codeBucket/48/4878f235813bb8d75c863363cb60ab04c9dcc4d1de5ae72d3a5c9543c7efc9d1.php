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

/* @CustomerGroup/Add/index.twig */
class __TwigTemplate_7d64f4e91491058b5a9b411c6443739c3b352dd76e447a8c057ee2e49d1e7de6 extends Template
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
            'head_css' => [$this, 'block_head_css'],
            'footer_js' => [$this, 'block_footer_js'],
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
        $context["widget_title"] = "Add a customer group";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@CustomerGroup/Add/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })())), "html", null, true);
    }

    // line 6
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 6, $this->source); })())), "html", null, true);
    }

    // line 8
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), ["/customer-group", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Customer Groups")]);
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

    ";
        // line 16
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env,         // line 17
(isset($context["customerGroupFormTabs"]) || array_key_exists("customerGroupFormTabs", $context) ? $context["customerGroupFormTabs"] : (function () { throw new RuntimeError('Variable "customerGroupFormTabs" does not exist.', 17, $this->source); })()), ["customerGroupForm" =>         // line 19
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "customerAssignmentForm" => twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "customerAssignment", [], "any", false, false, false, 20), "availableCustomerTable" =>         // line 21
(isset($context["availableCustomerTable"]) || array_key_exists("availableCustomerTable", $context) ? $context["availableCustomerTable"] : (function () { throw new RuntimeError('Variable "availableCustomerTable" does not exist.', 21, $this->source); })()), "assignedCustomerTable" =>         // line 22
(isset($context["assignedCustomerTable"]) || array_key_exists("assignedCustomerTable", $context) ? $context["assignedCustomerTable"] : (function () { throw new RuntimeError('Variable "assignedCustomerTable" does not exist.', 22, $this->source); })())]]);
        // line 24
        echo "

    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
";
    }

    // line 30
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
";
    }

    // line 34
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 36
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-customer-group-form.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@CustomerGroup/Add/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 36,  121 => 35,  117 => 34,  110 => 31,  106 => 30,  100 => 26,  96 => 24,  94 => 22,  93 => 21,  92 => 20,  91 => 19,  90 => 17,  89 => 16,  83 => 14,  79 => 13,  72 => 9,  68 => 8,  61 => 6,  54 => 5,  49 => 1,  47 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Add a customer group' %}

{% block head_title widget_title | trans %}
{% block section_title widget_title | trans %}

{% block action %}
    {{ backActionButton('/customer-group', 'Back to Customer Groups' | trans) }}
{% endblock %}


{% block content %}
    {{ form_start(form) }}

    {{ tabs(
    customerGroupFormTabs,
    {
        'customerGroupForm': form,
        'customerAssignmentForm': form.customerAssignment,
        'availableCustomerTable': availableCustomerTable,
        'assignedCustomerTable': assignedCustomerTable
    }
    ) }}

    {{ form_end(form) }}
{% endblock %}


{% block head_css %}
    {{ parent() }}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-customer-group-form.js') }}\"></script>
{% endblock %}
", "@CustomerGroup/Add/index.twig", "/data/vendor/spryker/customer-group/src/Spryker/Zed/CustomerGroup/Presentation/Add/index.twig");
    }
}
