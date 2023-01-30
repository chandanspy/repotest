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

/* @Customer/Edit/index.twig */
class __TwigTemplate_89298ac30576ca4913a8f392d973d80d142180409440bb7756df83d740b08521 extends Template
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
        $context["widget_title"] = "Edit Customer";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@Customer/Edit/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 6, $this->source); })())), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 9, $this->source); })())), "html", null, true);
        echo "
";
    }

    // line 12
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        echo call_user_func_array($this->env->getFunction('removeActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/customer/delete", ["id-customer" => (isset($context["idCustomer"]) || array_key_exists("idCustomer", $context) ? $context["idCustomer"] : (function () { throw new RuntimeError('Variable "idCustomer" does not exist.', 13, $this->source); })())]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete")]);
        echo "
    ";
        // line 14
        echo call_user_func_array($this->env->getFunction('viewActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/customer/view", ["id-customer" => (isset($context["idCustomer"]) || array_key_exists("idCustomer", $context) ? $context["idCustomer"] : (function () { throw new RuntimeError('Variable "idCustomer" does not exist.', 14, $this->source); })())]]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View")]);
        echo "
    ";
        // line 15
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), ["/customer"]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Customers")]);
        echo "
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "
    ";
        // line 20
        $this->loadTemplate("@Customer/Edit/index.twig", "@Customer/Edit/index.twig", 20, "1156441797")->display($context);
        // line 33
        echo "
";
    }

    // line 36
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 38
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-customer-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@Customer/Edit/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 38,  112 => 37,  108 => 36,  103 => 33,  101 => 20,  98 => 19,  94 => 18,  88 => 15,  84 => 14,  79 => 13,  75 => 12,  68 => 9,  64 => 8,  57 => 6,  53 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Edit Customer' %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}
{% block section_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ removeActionButton(url('/customer/delete', {'id-customer': idCustomer}), 'Delete' | trans) }}
    {{ viewActionButton(url('/customer/view', {'id-customer': idCustomer}), 'View' | trans) }}
    {{ backActionButton(url('/customer'), 'Back to Customers' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ form_start(form) }}
                {{ form_widget(form) }}

                <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            {{ form_end(form) }}

        {% endblock %}

    {% endembed %}

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-customer-main.js') }}\"></script>
{% endblock %}
", "@Customer/Edit/index.twig", "/data/vendor/spryker/customer/src/Spryker/Zed/Customer/Presentation//Edit/index.twig");
    }
}


/* @Customer/Edit/index.twig */
class __TwigTemplate_89298ac30576ca4913a8f392d973d80d142180409440bb7756df83d740b08521___1156441797 extends Template
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
        // line 20
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@Customer/Edit/index.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'widget');
        echo "

                <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@Customer/Edit/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 28,  230 => 27,  225 => 25,  221 => 24,  218 => 23,  214 => 22,  203 => 20,  117 => 38,  112 => 37,  108 => 36,  103 => 33,  101 => 20,  98 => 19,  94 => 18,  88 => 15,  84 => 14,  79 => 13,  75 => 12,  68 => 9,  64 => 8,  57 => 6,  53 => 5,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Edit Customer' %}

{% block head_title %}
    {{ widget_title | trans }}
{% endblock %}
{% block section_title %}
    {{ widget_title | trans }}
{% endblock %}

{% block action %}
    {{ removeActionButton(url('/customer/delete', {'id-customer': idCustomer}), 'Delete' | trans) }}
    {{ viewActionButton(url('/customer/view', {'id-customer': idCustomer}), 'View' | trans) }}
    {{ backActionButton(url('/customer'), 'Back to Customers' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ form_start(form) }}
                {{ form_widget(form) }}

                <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            {{ form_end(form) }}

        {% endblock %}

    {% endembed %}

{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-customer-main.js') }}\"></script>
{% endblock %}
", "@Customer/Edit/index.twig", "/data/vendor/spryker/customer/src/Spryker/Zed/Customer/Presentation//Edit/index.twig");
    }
}
