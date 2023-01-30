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

/* @CurrencyWidget/views/currency-switcher/currency-switcher.twig */
class __TwigTemplate_d89d41ca180c84f00915ce427cc0a642f0c3025cc229d0038c0b01af6af7d881 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["currency-switcher", "@SprykerShop:CurrencyWidget"]), "@CurrencyWidget/views/currency-switcher/currency-switcher.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["requestUri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "requestUri", [], "any", false, false, false, 4)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <form method=\"GET\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("currency-switch");
        echo "\">
        ";
        // line 9
        $this->loadTemplate("@CurrencyWidget/views/currency-switcher/currency-switcher.twig", "@CurrencyWidget/views/currency-switcher/currency-switcher.twig", 9, "684735748")->display(twig_to_array(["modifiers" => [0 => "alternative"], "attributes" => ["name" => "currency-iso-code", "config-theme" => "alternative"], "embed" => ["currencies" => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "currencies", [], "any", false, false, false, 16), "currentCurrency" => twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "currentCurrency", [], "any", false, false, false, 17)]]));
        // line 29
        echo "
        ";
        // line 30
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form-handler"]), "@CurrencyWidget/views/currency-switcher/currency-switcher.twig", 30)->display(twig_to_array(["attributes" => ["trigger-class-name" => "js-currency-switcher-select"]]));
        // line 35
        echo "
        <input type=\"hidden\" name=\"referrer-url\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "requestUri", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "@CurrencyWidget/views/currency-switcher/currency-switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 36,  66 => 35,  64 => 30,  61 => 29,  59 => 17,  58 => 16,  57 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('currency-switcher', '@SprykerShop:CurrencyWidget') %}

{% define data = {
    requestUri: app.request.requestUri,
} %}

{% block body %}
    <form method=\"GET\" action=\"{{ path('currency-switch') }}\">
        {% embed molecule('custom-select') with {
            modifiers: ['alternative'],
            attributes: {
                name: 'currency-iso-code',
                'config-theme': 'alternative',
            },
            embed: {
                currencies: data.currencies,
                currentCurrency: data.currentCurrency,
            },
        } only %}
            {% block selectClass %}
                {{ parent() }} js-currency-switcher-select
            {% endblock %}
            {% block options %}
                {% for currency in embed.currencies %}
                    <option value=\"{{ currency.code }}\" {{ (currency.code == embed.currentCurrency) ? 'selected' : ''}}>{{ currency.code | trans }}</option>
                {% endfor %}
            {% endblock %}
        {% endembed %}

        {% include molecule('form-handler') with {
            attributes: {
                'trigger-class-name': 'js-currency-switcher-select',
            },
        } only %}

        <input type=\"hidden\" name=\"referrer-url\" value=\"{{ data.requestUri }}\">
    </form>
{% endblock %}
", "@CurrencyWidget/views/currency-switcher/currency-switcher.twig", "/data/src/Pyz/Yves/CurrencyWidget/Theme/default/views/currency-switcher/currency-switcher.twig");
    }
}


/* @CurrencyWidget/views/currency-switcher/currency-switcher.twig */
class __TwigTemplate_d89d41ca180c84f00915ce427cc0a642f0c3025cc229d0038c0b01af6af7d881___684735748 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'selectClass' => [$this, 'block_selectClass'],
            'options' => [$this, 'block_options'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["custom-select"]), "@CurrencyWidget/views/currency-switcher/currency-switcher.twig", 9);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_selectClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                ";
        $this->displayParentBlock("selectClass", $context, $blocks);
        echo " js-currency-switcher-select
            ";
    }

    // line 23
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 24, $this->source); })()), "currencies", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 25
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 25), "html", null, true);
            echo "\" ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 25, $this->source); })()), "currentCurrency", [], "any", false, false, false, 25)))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 25)), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@CurrencyWidget/views/currency-switcher/currency-switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 27,  186 => 25,  181 => 24,  177 => 23,  170 => 21,  166 => 20,  156 => 9,  69 => 36,  66 => 35,  64 => 30,  61 => 29,  59 => 17,  58 => 16,  57 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('currency-switcher', '@SprykerShop:CurrencyWidget') %}

{% define data = {
    requestUri: app.request.requestUri,
} %}

{% block body %}
    <form method=\"GET\" action=\"{{ path('currency-switch') }}\">
        {% embed molecule('custom-select') with {
            modifiers: ['alternative'],
            attributes: {
                name: 'currency-iso-code',
                'config-theme': 'alternative',
            },
            embed: {
                currencies: data.currencies,
                currentCurrency: data.currentCurrency,
            },
        } only %}
            {% block selectClass %}
                {{ parent() }} js-currency-switcher-select
            {% endblock %}
            {% block options %}
                {% for currency in embed.currencies %}
                    <option value=\"{{ currency.code }}\" {{ (currency.code == embed.currentCurrency) ? 'selected' : ''}}>{{ currency.code | trans }}</option>
                {% endfor %}
            {% endblock %}
        {% endembed %}

        {% include molecule('form-handler') with {
            attributes: {
                'trigger-class-name': 'js-currency-switcher-select',
            },
        } only %}

        <input type=\"hidden\" name=\"referrer-url\" value=\"{{ data.requestUri }}\">
    </form>
{% endblock %}
", "@CurrencyWidget/views/currency-switcher/currency-switcher.twig", "/data/src/Pyz/Yves/CurrencyWidget/Theme/default/views/currency-switcher/currency-switcher.twig");
    }
}
