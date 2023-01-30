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

/* @ProductManagement/View/_partials/info-price-tax.twig */
class __TwigTemplate_4894abfff62027de404da60e6722957e5733228f49e7a785f98d9bb001565d79 extends Template
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
        $this->loadTemplate("@ProductManagement/View/_partials/info-price-tax.twig", "@ProductManagement/View/_partials/info-price-tax.twig", 1, "869223876")->display(twig_array_merge($context, ["widget_title" => "Price & Taxes"]));
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-price-tax.twig";
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
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Price & Taxes' } %}
    {% block widget_content %}

        <div class=\"row\">
            <div class=\"col-xs-6\">
                {% for price in currentProduct.prices %}
                    <div class=\"row\">
                        <div class=\"col-xs-4\"><b>{{ 'Net price' | trans }} ({{ price.price_type_name }}):</b></div>
                        <div class=\"col-xs-8\">{{ price.money_value.net_amount | default(0) | money(true, price.money_value.currency.code) }}</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-4\"><b>{{ 'Gross price' | trans }} ({{ price.price_type_name }}):</b></div>
                        <div class=\"col-xs-8\">{{ price.money_value.gross_amount | default(0) | money(true, price.money_value.currency.code) }}</div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"col-xs-6\">
                {% if taxSet %}
                    <div class=\"row\">
                        <div class=\"col-xs-4\"><b>{{ 'Tax Set' | trans }}:</b></div>
                        <div class=\"col-xs-8\">{{ taxSet.name }}</div>
                    </div>
                {% endif %}
            </div>
        </div>

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-price-tax.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-price-tax.twig");
    }
}


/* @ProductManagement/View/_partials/info-price-tax.twig */
class __TwigTemplate_4894abfff62027de404da60e6722957e5733228f49e7a785f98d9bb001565d79___869223876 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductManagement/View/_partials/info-price-tax.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
        <div class=\"row\">
            <div class=\"col-xs-6\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 6, $this->source); })()), "prices", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["price"]) {
            // line 7
            echo "                    <div class=\"row\">
                        <div class=\"col-xs-4\"><b>";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Net price"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price"], "price_type_name", [], "any", false, false, false, 8), "html", null, true);
            echo "):</b></div>
                        <div class=\"col-xs-8\">";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money')->getCallable(), [((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "money_value", [], "any", false, true, false, 9), "net_amount", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "money_value", [], "any", false, true, false, 9), "net_amount", [], "any", false, false, false, 9), 0)) : (0)), true, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "money_value", [], "any", false, false, false, 9), "currency", [], "any", false, false, false, 9), "code", [], "any", false, false, false, 9)]), "html", null, true);
            echo "</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-4\"><b>";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gross price"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["price"], "price_type_name", [], "any", false, false, false, 12), "html", null, true);
            echo "):</b></div>
                        <div class=\"col-xs-8\">";
            // line 13
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money')->getCallable(), [((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "money_value", [], "any", false, true, false, 13), "gross_amount", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "money_value", [], "any", false, true, false, 13), "gross_amount", [], "any", false, false, false, 13), 0)) : (0)), true, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["price"], "money_value", [], "any", false, false, false, 13), "currency", [], "any", false, false, false, 13), "code", [], "any", false, false, false, 13)]), "html", null, true);
            echo "</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['price'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </div>
            <div class=\"col-xs-6\">
                ";
        // line 18
        if ((isset($context["taxSet"]) || array_key_exists("taxSet", $context) ? $context["taxSet"] : (function () { throw new RuntimeError('Variable "taxSet" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "                    <div class=\"row\">
                        <div class=\"col-xs-4\"><b>";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax Set"), "html", null, true);
            echo ":</b></div>
                        <div class=\"col-xs-8\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxSet"]) || array_key_exists("taxSet", $context) ? $context["taxSet"] : (function () { throw new RuntimeError('Variable "taxSet" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
            echo "</div>
                    </div>
                ";
        }
        // line 24
        echo "            </div>
        </div>

    ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-price-tax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 24,  176 => 21,  172 => 20,  169 => 19,  167 => 18,  163 => 16,  154 => 13,  148 => 12,  142 => 9,  136 => 8,  133 => 7,  129 => 6,  124 => 3,  120 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Price & Taxes' } %}
    {% block widget_content %}

        <div class=\"row\">
            <div class=\"col-xs-6\">
                {% for price in currentProduct.prices %}
                    <div class=\"row\">
                        <div class=\"col-xs-4\"><b>{{ 'Net price' | trans }} ({{ price.price_type_name }}):</b></div>
                        <div class=\"col-xs-8\">{{ price.money_value.net_amount | default(0) | money(true, price.money_value.currency.code) }}</div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-4\"><b>{{ 'Gross price' | trans }} ({{ price.price_type_name }}):</b></div>
                        <div class=\"col-xs-8\">{{ price.money_value.gross_amount | default(0) | money(true, price.money_value.currency.code) }}</div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"col-xs-6\">
                {% if taxSet %}
                    <div class=\"row\">
                        <div class=\"col-xs-4\"><b>{{ 'Tax Set' | trans }}:</b></div>
                        <div class=\"col-xs-8\">{{ taxSet.name }}</div>
                    </div>
                {% endif %}
            </div>
        </div>

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-price-tax.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-price-tax.twig");
    }
}
