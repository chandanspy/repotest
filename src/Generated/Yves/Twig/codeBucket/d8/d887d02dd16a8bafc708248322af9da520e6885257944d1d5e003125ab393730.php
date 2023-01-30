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

/* @@SprykerShop:CurrencyWidget/views/currency-switcher/currency-switcher.twig */
class __TwigTemplate_ed584ed1af46ed94d34cd19b7247638b123cd0894456ea876ba88a6d42422432 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'template' => [$this, 'block_template'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@@SprykerShop:CurrencyWidget/views/currency-switcher/currency-switcher.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["currencies" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "currencies", [], "any", false, false, false, 4), "currentCurrency" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "currentCurrency", [], "any", false, false, false, 5), "requestUri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "requestUri", [], "any", false, false, false, 6)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "currencies", [], "any", false, false, false, 10))) {
            // line 11
            echo "        ";
            $this->displayParentBlock("template", $context, $blocks);
            echo "
    ";
        }
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <form method=\"GET\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("currency-switch");
        echo "\">
        ";
        // line 17
        $this->loadTemplate("@@SprykerShop:CurrencyWidget/views/currency-switcher/currency-switcher.twig", "@@SprykerShop:CurrencyWidget/views/currency-switcher/currency-switcher.twig", 17, "1512351350")->display(twig_to_array(["modifiers" => [0 => "naked"], "attributes" => ["name" => "currency-iso-code", "data-form-submitter" => true], "embed" => ["currencies" => twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "currencies", [], "any", false, false, false, 24), "currentCurrency" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "currentCurrency", [], "any", false, false, false, 25)]]));
        // line 36
        echo "
        <input type=\"hidden\" name=\"referrer-url\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 37, $this->source); })()), "requestUri", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CurrencyWidget/views/currency-switcher/currency-switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  79 => 36,  77 => 25,  76 => 24,  75 => 17,  70 => 16,  66 => 15,  58 => 11,  55 => 10,  51 => 9,  47 => 1,  46 => 6,  45 => 5,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    currencies: _widget.currencies,
    currentCurrency: _widget.currentCurrency,
    requestUri: app.request.requestUri,
} %}

{% block template %}
    {% if data.currencies is not empty %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block body %}
    <form method=\"GET\" action=\"{{ path('currency-switch') }}\">
        {% embed atom('select') with {
            modifiers: ['naked'],
            attributes: {
                name: 'currency-iso-code',
                'data-form-submitter': true,
            },
            embed: {
                currencies: data.currencies,
                currentCurrency: data.currentCurrency,
            },
        } only %}
            {% block options %}
                {% for currency in embed.currencies %}
                    {% set selectedOption = currency.code == embed.currentCurrency ? 'selected' %}

                    <option value=\"{{ currency.code }}\" {{ selectedOption }}>{{ currency.name | trans }}</option>
                {% endfor %}
            {% endblock %}
        {% endembed %}

        <input type=\"hidden\" name=\"referrer-url\" value=\"{{ data.requestUri }}\">
    </form>
{% endblock %}
", "@@SprykerShop:CurrencyWidget/views/currency-switcher/currency-switcher.twig", "/data/vendor/spryker-shop/currency-widget/src/SprykerShop/Yves/CurrencyWidget/Theme/default/views/currency-switcher/currency-switcher.twig");
    }
}


/* @@SprykerShop:CurrencyWidget/views/currency-switcher/currency-switcher.twig */
class __TwigTemplate_ed584ed1af46ed94d34cd19b7247638b123cd0894456ea876ba88a6d42422432___1512351350 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 17
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["select"]), "@@SprykerShop:CurrencyWidget/views/currency-switcher/currency-switcher.twig", 17);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 29, $this->source); })()), "currencies", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 30
            echo "                    ";
            $context["selectedOption"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 30, $this->source); })()), "currentCurrency", [], "any", false, false, false, 30)))) ? ("selected") : (""));
            // line 31
            echo "
                    <option value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 32), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["selectedOption"]) || array_key_exists("selectedOption", $context) ? $context["selectedOption"] : (function () { throw new RuntimeError('Variable "selectedOption" does not exist.', 32, $this->source); })()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["currency"], "name", [], "any", false, false, false, 32)), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CurrencyWidget/views/currency-switcher/currency-switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 34,  194 => 32,  191 => 31,  188 => 30,  183 => 29,  179 => 28,  169 => 17,  82 => 37,  79 => 36,  77 => 25,  76 => 24,  75 => 17,  70 => 16,  66 => 15,  58 => 11,  55 => 10,  51 => 9,  47 => 1,  46 => 6,  45 => 5,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    currencies: _widget.currencies,
    currentCurrency: _widget.currentCurrency,
    requestUri: app.request.requestUri,
} %}

{% block template %}
    {% if data.currencies is not empty %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block body %}
    <form method=\"GET\" action=\"{{ path('currency-switch') }}\">
        {% embed atom('select') with {
            modifiers: ['naked'],
            attributes: {
                name: 'currency-iso-code',
                'data-form-submitter': true,
            },
            embed: {
                currencies: data.currencies,
                currentCurrency: data.currentCurrency,
            },
        } only %}
            {% block options %}
                {% for currency in embed.currencies %}
                    {% set selectedOption = currency.code == embed.currentCurrency ? 'selected' %}

                    <option value=\"{{ currency.code }}\" {{ selectedOption }}>{{ currency.name | trans }}</option>
                {% endfor %}
            {% endblock %}
        {% endembed %}

        <input type=\"hidden\" name=\"referrer-url\" value=\"{{ data.requestUri }}\">
    </form>
{% endblock %}
", "@@SprykerShop:CurrencyWidget/views/currency-switcher/currency-switcher.twig", "/data/vendor/spryker-shop/currency-widget/src/SprykerShop/Yves/CurrencyWidget/Theme/default/views/currency-switcher/currency-switcher.twig");
    }
}
