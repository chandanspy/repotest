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

/* @ShoppingListWidget/views/shopping-list/shopping-list.twig */
class __TwigTemplate_18b4d35dab6e1b093e45b3456c0756dc8affcbfde1a4614ae94c6c5600b89fa0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ShoppingListWidget/views/shopping-list/shopping-list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["shoppingListCollection" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "shoppingListCollection", [], "any", false, false, false, 4), "sku" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "sku", [], "any", false, false, false, 5), "isDisabled" => twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 6, $this->source); })()), "isDisabled", [], "any", false, false, false, 6), "maxQuantity" => 10, "labels" => ["shoppingListNameLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.account.shopping_list.overview.name")]], $context['data']);        // line 13
        $context["shoppingListOptions"] = [];
        // line 15
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "shoppingListCollection", [], "any", false, false, false, 15), "shoppingLists", [], "any", false, false, false, 15))) {
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "shoppingListCollection", [], "any", false, false, false, 16), "shoppingLists", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["shoppingList"]) {
                // line 17
                $context["shoppingListOptions"] = twig_array_merge((isset($context["shoppingListOptions"]) || array_key_exists("shoppingListOptions", $context) ? $context["shoppingListOptions"] : (function () { throw new RuntimeError('Variable "shoppingListOptions" does not exist.', 17, $this->source); })()), [0 => ["value" => twig_get_attribute($this->env, $this->source, $context["shoppingList"], "idShoppingList", [], "any", false, false, false, 17), "label" => twig_get_attribute($this->env, $this->source, $context["shoppingList"], "name", [], "any", false, false, false, 17)]]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shoppingList'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <form class=\"js-shopping-list__form\" method=\"POST\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopping-list/add-item");
        echo "\">

        <div class=\"grid grid--stretch grid--nowrap grid--justify spacing-top--bigger\">
            ";
        // line 25
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["quantity-counter"]), "@ShoppingListWidget/views/shopping-list/shopping-list.twig", 25)->display(twig_to_array(["modifiers" => [0 => "right-space"]]));
        // line 28
        echo "
            <div class=\"col col--expand\">
                <input type=\"hidden\" name=\"sku\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "sku", [], "any", false, false, false, 30), "html", null, true);
        echo "\" />
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("shopping_list_add_item_form"), "html", null, true);
        echo "\">

                ";
        // line 33
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form-data-injector", "ShoppingListWidget"]), "@ShoppingListWidget/views/shopping-list/shopping-list.twig", 33)->display(twig_to_array(["attributes" => ["destination-form-class-name" => "js-shopping-list__form", "fields-selector" => ".js-product-configurator__form-add-to-cart .js-custom-select:not([name=\"quantity\"]):not([name=\"id_quote\"])"]]));
        // line 39
        echo "
                <button type=\"submit\"
                        class=\"button button--hollow button--bigger button--expand button--no-horizontal-padding js-add-to-shopping-list\"
                        ";
        // line 42
        echo call_user_func_array($this->env->getFunction('qa')->getCallable(), [[0 => "add-to-shopping-list-button"]]);
        echo "
                        ";
        // line 43
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "isDisabled", [], "any", false, false, false, 43)) ? ("disabled") : (""));
        echo ">
                    ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.detail.add-to-shopping-list"), "html", null, true);
        echo "
                </button>
            </div>
        </div>

        ";
        // line 49
        if ( !twig_test_empty((isset($context["shoppingListOptions"]) || array_key_exists("shoppingListOptions", $context) ? $context["shoppingListOptions"] : (function () { throw new RuntimeError('Variable "shoppingListOptions" does not exist.', 49, $this->source); })()))) {
            // line 50
            echo "            ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["custom-select"]), "@ShoppingListWidget/views/shopping-list/shopping-list.twig", 50)->display(twig_to_array(["modifiers" => [0 => "full-width", 1 => "shopping-list"], "attributes" => ["name" => "idShoppingList", "config-width" => "100%"], "data" => ["options" =>             // line 57
(isset($context["shoppingListOptions"]) || array_key_exists("shoppingListOptions", $context) ? $context["shoppingListOptions"] : (function () { throw new RuntimeError('Variable "shoppingListOptions" does not exist.', 57, $this->source); })())]]));
            // line 60
            echo "        ";
        }
        // line 61
        echo "    </form>
";
    }

    public function getTemplateName()
    {
        return "@ShoppingListWidget/views/shopping-list/shopping-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 61,  120 => 60,  118 => 57,  116 => 50,  114 => 49,  106 => 44,  102 => 43,  98 => 42,  93 => 39,  91 => 33,  86 => 31,  82 => 30,  78 => 28,  76 => 25,  69 => 22,  65 => 21,  61 => 1,  54 => 17,  50 => 16,  48 => 15,  46 => 13,  45 => 6,  44 => 5,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    shoppingListCollection: _widget.shoppingListCollection,
    sku: _widget.sku,
    isDisabled: _widget.isDisabled,
    maxQuantity: 10,
    labels: {
        shoppingListNameLabel: 'customer.account.shopping_list.overview.name' | trans
    }
} %}

{% set shoppingListOptions = [] %}

{% if data.shoppingListCollection.shoppingLists|length %}
    {% for shoppingList in data.shoppingListCollection.shoppingLists %}
        {% set shoppingListOptions = shoppingListOptions|merge([{ value: shoppingList.idShoppingList, label: shoppingList.name }]) %}
    {% endfor %}
{% endif %}

{% block body %}
    <form class=\"js-shopping-list__form\" method=\"POST\" action=\"{{ path('shopping-list/add-item') }}\">

        <div class=\"grid grid--stretch grid--nowrap grid--justify spacing-top--bigger\">
            {% include molecule('quantity-counter') with {
                modifiers: ['right-space']
            } only %}

            <div class=\"col col--expand\">
                <input type=\"hidden\" name=\"sku\" value=\"{{ data.sku }}\" />
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('shopping_list_add_item_form') }}\">

                {% include molecule('form-data-injector', 'ShoppingListWidget') with {
                    attributes: {
                        'destination-form-class-name': 'js-shopping-list__form',
                        'fields-selector': '.js-product-configurator__form-add-to-cart .js-custom-select:not([name=\"quantity\"]):not([name=\"id_quote\"])'
                    }
                } only %}

                <button type=\"submit\"
                        class=\"button button--hollow button--bigger button--expand button--no-horizontal-padding js-add-to-shopping-list\"
                        {{ qa('add-to-shopping-list-button') }}
                        {{ data.isDisabled ? 'disabled' : '' }}>
                    {{ 'page.detail.add-to-shopping-list' | trans }}
                </button>
            </div>
        </div>

        {% if shoppingListOptions is not empty %}
            {% include molecule('custom-select') with {
                modifiers: ['full-width', 'shopping-list'],
                attributes: {
                    name: 'idShoppingList',
                    'config-width': '100%'
                },
                data: {
                    options: shoppingListOptions
                }
            } only %}
        {% endif %}
    </form>
{% endblock %}
", "@ShoppingListWidget/views/shopping-list/shopping-list.twig", "/data/src/Pyz/Yves/ShoppingListWidget/Theme/default/views/shopping-list/shopping-list.twig");
    }
}
