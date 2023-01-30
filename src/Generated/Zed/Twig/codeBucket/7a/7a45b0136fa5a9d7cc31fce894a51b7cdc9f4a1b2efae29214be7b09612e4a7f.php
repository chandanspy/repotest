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

/* @ProductAttributeGui/View/_partials/add-attribute-form.twig */
class __TwigTemplate_4b4f209e5d962bc689485ba612d172c56d12c7bc2cf79cd1700f70b1beeb3b94 extends Template
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
        $this->loadTemplate("@ProductAttributeGui/View/_partials/add-attribute-form.twig", "@ProductAttributeGui/View/_partials/add-attribute-form.twig", 1, "2081299287")->display(twig_array_merge($context, ["widget_title" => "Add Attribute"]));
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/View/_partials/add-attribute-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Add Attribute' } %}
    {% block widget_content %}
        {{ form_start(form, { 'attr': {'class': 'kv_autocomplete_form', 'id': 'attribute_form'} }) }}
        <table width=\"100%\" class=\"table-vat\">
        <tr>
            <td width=\"100%\">
                {{ form_errors(form) }}
                {{ form_widget(form) }}
            </td>
            <td>&nbsp;</td>
            <td style=\"padding-top: 22px\"><input type=\"button\" onclick=\"return false\" class=\"btn btn-primary\" value=\"{{ 'Add' | trans }}\"  id=\"addButton\" /></td>
        </tr>
        </table>
        <input id=\"empty-attribute-key-message\" type=\"hidden\" value=\"{{ 'Please select attribute key first' | trans }}\"/>
        {{ form_end(form) }}
    {% endblock %}
{% endembed %}
", "@ProductAttributeGui/View/_partials/add-attribute-form.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//View/_partials/add-attribute-form.twig");
    }
}


/* @ProductAttributeGui/View/_partials/add-attribute-form.twig */
class __TwigTemplate_4b4f209e5d962bc689485ba612d172c56d12c7bc2cf79cd1700f70b1beeb3b94___2081299287 extends Template
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
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductAttributeGui/View/_partials/add-attribute-form.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["class" => "kv_autocomplete_form", "id" => "attribute_form"]]);
        echo "
        <table width=\"100%\" class=\"table-vat\">
        <tr>
            <td width=\"100%\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'widget');
        echo "
            </td>
            <td>&nbsp;</td>
            <td style=\"padding-top: 22px\"><input type=\"button\" onclick=\"return false\" class=\"btn btn-primary\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add"), "html", null, true);
        echo "\"  id=\"addButton\" /></td>
        </tr>
        </table>
        <input id=\"empty-attribute-key-message\" type=\"hidden\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select attribute key first"), "html", null, true);
        echo "\"/>
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_end');
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/View/_partials/add-attribute-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 15,  137 => 14,  131 => 11,  125 => 8,  121 => 7,  113 => 3,  109 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Add Attribute' } %}
    {% block widget_content %}
        {{ form_start(form, { 'attr': {'class': 'kv_autocomplete_form', 'id': 'attribute_form'} }) }}
        <table width=\"100%\" class=\"table-vat\">
        <tr>
            <td width=\"100%\">
                {{ form_errors(form) }}
                {{ form_widget(form) }}
            </td>
            <td>&nbsp;</td>
            <td style=\"padding-top: 22px\"><input type=\"button\" onclick=\"return false\" class=\"btn btn-primary\" value=\"{{ 'Add' | trans }}\"  id=\"addButton\" /></td>
        </tr>
        </table>
        <input id=\"empty-attribute-key-message\" type=\"hidden\" value=\"{{ 'Please select attribute key first' | trans }}\"/>
        {{ form_end(form) }}
    {% endblock %}
{% endembed %}
", "@ProductAttributeGui/View/_partials/add-attribute-form.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//View/_partials/add-attribute-form.twig");
    }
}
