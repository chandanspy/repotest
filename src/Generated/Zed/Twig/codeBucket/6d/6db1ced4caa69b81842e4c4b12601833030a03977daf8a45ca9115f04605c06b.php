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

/* @PriceProductVolumeGui/PriceVolume/template/price-volume-form.twig */
class __TwigTemplate_42dc80ed4f30276911718465a53013ef05db25eaa89d9c3c7359538a5f43779c extends Template
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
        $context["page_title"] = twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3);
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@PriceProductVolumeGui/PriceVolume/template/price-volume-form.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 4, $this->source); })()), "html", null, true);
    }

    // line 5
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 5, $this->source); })()), "html", null, true);
    }

    // line 7
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    <h4>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter a quantity and the item price that should be applied if customer buys above that threshold"), "html", null, true);
        echo "</h4>

    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
    <table class=\"price-volume-table\">
        <tbody>
        <tr>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price Dimension Name"), "html", null, true);
        echo ":</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["price_product"]) || array_key_exists("price_product", $context) ? $context["price_product"] : (function () { throw new RuntimeError('Variable "price_product" does not exist.', 19, $this->source); })()), "priceDimension", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price Type"), "html", null, true);
        echo ":</td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["price_product"]) || array_key_exists("price_product", $context) ? $context["price_product"] : (function () { throw new RuntimeError('Variable "price_product" does not exist.', 23, $this->source); })()), "priceType", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency"), "html", null, true);
        echo ":</td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["price_product"]) || array_key_exists("price_product", $context) ? $context["price_product"] : (function () { throw new RuntimeError('Variable "price_product" does not exist.', 27, $this->source); })()), "moneyValue", [], "any", false, false, false, 27), "currency", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store"), "html", null, true);
        echo ":</td>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["store_name"]) || array_key_exists("store_name", $context) ? $context["store_name"] : (function () { throw new RuntimeError('Variable "store_name" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <table class=\"table table--expand\">
        <thead>
            <tr class=\"active\">
                <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity"), "html", null, true);
        echo "</th>
                <th>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gross price"), "html", null, true);
        echo "</th>
                <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Net price"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <input type=\"text\" class=\"form-control\" value=\"1\" disabled>
            </td>
            <td>
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "gross_price", [], "any", false, false, false, 50), 'widget');
        echo "
            </td>
            <td>
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "net_price", [], "any", false, false, false, 53), 'widget');
        echo "
            </td>
        </tr>

        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'errors');
        echo "

        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "volumes", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["volume"]) {
            // line 60
            echo "            <tr>
                <td>
                    ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["volume"], "quantity", [], "any", false, false, false, 62), 'widget');
            echo "
                    ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["volume"], "quantity", [], "any", false, false, false, 63), 'errors');
            echo "
                </td>
                <td>
                    ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["volume"], "gross_price", [], "any", false, false, false, 66), 'widget');
            echo "
                    ";
            // line 67
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["volume"], "gross_price", [], "any", false, false, false, 67), 'errors');
            echo "
                </td>
                <td>
                    ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["volume"], "net_price", [], "any", false, false, false, 70), 'widget');
            echo "
                    ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["volume"], "net_price", [], "any", false, false, false, 71), 'errors');
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['volume'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["back_url"]) || array_key_exists("back_url", $context) ? $context["back_url"] : (function () { throw new RuntimeError('Variable "back_url" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-back\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        echo "</a>
    <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and add more rows"), "html", null, true);
        echo "\"/>
    <input type=\"submit\" name=\"save_and_exit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and exit"), "html", null, true);
        echo "\"/>

    ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
        echo "

";
    }

    // line 86
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 88
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-price-product-volume-gui.css"]);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "@PriceProductVolumeGui/PriceVolume/template/price-volume-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 88,  248 => 87,  244 => 86,  237 => 82,  232 => 80,  228 => 79,  222 => 78,  217 => 75,  207 => 71,  203 => 70,  197 => 67,  193 => 66,  187 => 63,  183 => 62,  179 => 60,  175 => 59,  170 => 57,  163 => 53,  157 => 50,  145 => 41,  141 => 40,  137 => 39,  126 => 31,  122 => 30,  116 => 27,  112 => 26,  106 => 23,  102 => 22,  96 => 19,  92 => 18,  85 => 14,  80 => 12,  77 => 11,  73 => 10,  67 => 7,  60 => 5,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set page_title = data.title %}
{% block head_title page_title %}
{% block section_title page_title %}

{% block action %}
{% endblock %}

{% block content %}

    <h4>{{ 'Enter a quantity and the item price that should be applied if customer buys above that threshold' | trans }}</h4>

    {{ form_start(form) }}
    <table class=\"price-volume-table\">
        <tbody>
        <tr>
            <td>{{ 'Price Dimension Name' | trans }}:</td>
            <td>{{ price_product.priceDimension.name }}</td>
        </tr>
        <tr>
            <td>{{ 'Price Type' | trans }}:</td>
            <td>{{ price_product.priceType.name }}</td>
        </tr>
        <tr>
            <td>{{ 'Currency' | trans }}:</td>
            <td>{{ price_product.moneyValue.currency.name }}</td>
        </tr>
        <tr>
            <td>{{ 'Store' | trans }}:</td>
            <td>{{ store_name }}</td>
        </tr>
        </tbody>
    </table>

    <table class=\"table table--expand\">
        <thead>
            <tr class=\"active\">
                <th>{{ 'Quantity' | trans }}</th>
                <th>{{ 'Gross price' | trans }}</th>
                <th>{{ 'Net price' | trans }}</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <input type=\"text\" class=\"form-control\" value=\"1\" disabled>
            </td>
            <td>
                {{ form_widget(form.gross_price) }}
            </td>
            <td>
                {{ form_widget(form.net_price) }}
            </td>
        </tr>

        {{ form_errors(form) }}

        {% for volume in form.volumes %}
            <tr>
                <td>
                    {{ form_widget(volume.quantity) }}
                    {{ form_errors(volume.quantity) }}
                </td>
                <td>
                    {{ form_widget(volume.gross_price) }}
                    {{ form_errors(volume.gross_price) }}
                </td>
                <td>
                    {{ form_widget(volume.net_price) }}
                    {{ form_errors(volume.net_price) }}
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ back_url }}\" class=\"btn btn-back\">{{ 'Back' | trans}}</a>
    <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save and add more rows' | trans }}\"/>
    <input type=\"submit\" name=\"save_and_exit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save and exit' | trans }}\"/>

    {{ form_end(form) }}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-price-product-volume-gui.css') }}\" />
{% endblock %}
", "@PriceProductVolumeGui/PriceVolume/template/price-volume-form.twig", "/data/vendor/spryker/price-product-volume-gui/src/Spryker/Zed/PriceProductVolumeGui/Presentation//PriceVolume/template/price-volume-form.twig");
    }
}
