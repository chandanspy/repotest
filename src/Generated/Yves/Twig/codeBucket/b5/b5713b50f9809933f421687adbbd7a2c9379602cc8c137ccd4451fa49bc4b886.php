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

/* @PriceWidget/views/price-switch/price-switch.twig */
class __TwigTemplate_853663c3b642f447c77d0f7d92ebdd52c8ad00181d6cf4d211c335002bddec1b extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@PriceWidget/views/price-switch/price-switch.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["priceModes" => ((twig_get_attribute($this->env, $this->source,         // line 4
($context["_widget"] ?? null), "priceModes", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "priceModes", [], "any", false, false, false, 4), [])) : ([])), "currentPriceMode" => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["_widget"] ?? null), "currentPriceMode", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "currentPriceMode", [], "any", false, false, false, 5))) : ("")), "requestUri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "requestUri", [], "any", false, false, false, 6)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "priceModes", [], "any", false, false, false, 10))) {
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("price-mode-switch");
        echo "\">
        ";
        // line 17
        $this->loadTemplate("@PriceWidget/views/price-switch/price-switch.twig", "@PriceWidget/views/price-switch/price-switch.twig", 17, "1768922958")->display(twig_to_array(["modifiers" => [0 => "alternative"], "attributes" => ["name" => "price-mode", "config-theme" => "alternative"], "embed" => ["priceModes" => twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "priceModes", [], "any", false, false, false, 24), "currentPriceMode" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "currentPriceMode", [], "any", false, false, false, 25)]]));
        // line 37
        echo "
        ";
        // line 38
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form-handler"]), "@PriceWidget/views/price-switch/price-switch.twig", 38)->display(twig_to_array(["attributes" => ["trigger-class-name" => "js-price-mode-select"]]));
        // line 43
        echo "
        <input type=\"hidden\" name=\"referrer-url\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })()), "requestUri", [], "any", false, false, false, 44), "html", null, true);
        echo "\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "@PriceWidget/views/price-switch/price-switch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 44,  84 => 43,  82 => 38,  79 => 37,  77 => 25,  76 => 24,  75 => 17,  70 => 16,  66 => 15,  58 => 11,  55 => 10,  51 => 9,  47 => 1,  46 => 6,  45 => 5,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    priceModes: _widget.priceModes | default([]),
    currentPriceMode: _widget.currentPriceMode | default,
    requestUri: app.request.requestUri
} %}

{% block template %}
    {% if data.priceModes is not empty %}
        {{parent()}}
    {% endif %}
{% endblock %}

{% block body %}
    <form method=\"GET\" action=\"{{ path('price-mode-switch') }}\">
        {% embed molecule('custom-select') with {
            modifiers: ['alternative'],
            attributes: {
                name: 'price-mode',
                'config-theme': 'alternative',
            },
            embed: {
                priceModes: data.priceModes,
                currentPriceMode: data.currentPriceMode,
            },
        } only %}
            {% block selectClass %}
                {{ parent() }} js-price-mode-select
            {% endblock %}
            {% block options %}
                {% for priceMode in embed.priceModes %}
                    <option value=\"{{ priceMode }}\" {{ (priceMode == embed.currentPriceMode) ? 'selected' : ''}}>{{ ('price.mode.' ~ priceMode | lower) | trans }}</option>
                {% endfor %}
            {% endblock %}
        {% endembed %}

        {% include molecule('form-handler') with {
            attributes: {
                'trigger-class-name': 'js-price-mode-select',
            },
        } only %}

        <input type=\"hidden\" name=\"referrer-url\" value=\"{{ data.requestUri }}\" />
    </form>
{% endblock %}
", "@PriceWidget/views/price-switch/price-switch.twig", "/data/src/Pyz/Yves/PriceWidget/Theme/default/views/price-switch/price-switch.twig");
    }
}


/* @PriceWidget/views/price-switch/price-switch.twig */
class __TwigTemplate_853663c3b642f447c77d0f7d92ebdd52c8ad00181d6cf4d211c335002bddec1b___1768922958 extends Template
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
        // line 17
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["custom-select"]), "@PriceWidget/views/price-switch/price-switch.twig", 17);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_selectClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                ";
        $this->displayParentBlock("selectClass", $context, $blocks);
        echo " js-price-mode-select
            ";
    }

    // line 31
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 32, $this->source); })()), "priceModes", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["priceMode"]) {
            // line 33
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["priceMode"], "html", null, true);
            echo "\" ";
            echo (((0 === twig_compare($context["priceMode"], twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 33, $this->source); })()), "currentPriceMode", [], "any", false, false, false, 33)))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("price.mode." . twig_lower_filter($this->env, $context["priceMode"]))), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceMode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@PriceWidget/views/price-switch/price-switch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 35,  212 => 33,  207 => 32,  203 => 31,  196 => 29,  192 => 28,  182 => 17,  87 => 44,  84 => 43,  82 => 38,  79 => 37,  77 => 25,  76 => 24,  75 => 17,  70 => 16,  66 => 15,  58 => 11,  55 => 10,  51 => 9,  47 => 1,  46 => 6,  45 => 5,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    priceModes: _widget.priceModes | default([]),
    currentPriceMode: _widget.currentPriceMode | default,
    requestUri: app.request.requestUri
} %}

{% block template %}
    {% if data.priceModes is not empty %}
        {{parent()}}
    {% endif %}
{% endblock %}

{% block body %}
    <form method=\"GET\" action=\"{{ path('price-mode-switch') }}\">
        {% embed molecule('custom-select') with {
            modifiers: ['alternative'],
            attributes: {
                name: 'price-mode',
                'config-theme': 'alternative',
            },
            embed: {
                priceModes: data.priceModes,
                currentPriceMode: data.currentPriceMode,
            },
        } only %}
            {% block selectClass %}
                {{ parent() }} js-price-mode-select
            {% endblock %}
            {% block options %}
                {% for priceMode in embed.priceModes %}
                    <option value=\"{{ priceMode }}\" {{ (priceMode == embed.currentPriceMode) ? 'selected' : ''}}>{{ ('price.mode.' ~ priceMode | lower) | trans }}</option>
                {% endfor %}
            {% endblock %}
        {% endembed %}

        {% include molecule('form-handler') with {
            attributes: {
                'trigger-class-name': 'js-price-mode-select',
            },
        } only %}

        <input type=\"hidden\" name=\"referrer-url\" value=\"{{ data.requestUri }}\" />
    </form>
{% endblock %}
", "@PriceWidget/views/price-switch/price-switch.twig", "/data/src/Pyz/Yves/PriceWidget/Theme/default/views/price-switch/price-switch.twig");
    }
}
