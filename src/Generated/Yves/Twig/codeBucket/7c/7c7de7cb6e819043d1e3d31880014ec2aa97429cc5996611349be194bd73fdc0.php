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

/* @@SprykerShop:LanguageSwitcherWidget/views/switcher/switcher.twig */
class __TwigTemplate_d43cde51bd57656e070ba1e035c991270e093b036d8c283fe1b6fb71a21d90f2 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@@SprykerShop:LanguageSwitcherWidget/views/switcher/switcher.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["languages" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "languages", [], "any", false, false, false, 4), "currentLanguage" => twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 5, $this->source); })()), "currentLanguage", [], "any", false, false, false, 5), "schemeAndHttpHost" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "getSchemeAndHttpHost", [], "method", false, false, false, 6)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "languages", [], "any", false, false, false, 10))) {
            // line 11
            echo "        <form method=\"GET\" action=\"\">
            ";
            // line 12
            $this->loadTemplate("@@SprykerShop:LanguageSwitcherWidget/views/switcher/switcher.twig", "@@SprykerShop:LanguageSwitcherWidget/views/switcher/switcher.twig", 12, "744985090")->display(twig_to_array(["modifiers" => [0 => "naked"], "attributes" => ["onchange" => "this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);"], "embed" => ["languages" => twig_get_attribute($this->env, $this->source,             // line 18
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "languages", [], "any", false, false, false, 18), "currentLanguage" => twig_get_attribute($this->env, $this->source,             // line 19
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "currentLanguage", [], "any", false, false, false, 19), "schemeAndHttpHost" => twig_get_attribute($this->env, $this->source,             // line 20
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "schemeAndHttpHost", [], "any", false, false, false, 20)]]));
            // line 33
            echo "        </form>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:LanguageSwitcherWidget/views/switcher/switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 33,  63 => 20,  62 => 19,  61 => 18,  60 => 12,  57 => 11,  54 => 10,  50 => 9,  46 => 1,  45 => 6,  44 => 5,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    languages: _widget.languages,
    currentLanguage: _widget.currentLanguage,
    schemeAndHttpHost: app.request.getSchemeAndHttpHost(),
} %}

{% block body %}
    {% if data.languages is not empty %}
        <form method=\"GET\" action=\"\">
            {% embed atom('select') with {
                modifiers: ['naked'],
                attributes: {
                    'onchange': 'this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);'
                },
                embed: {
                    languages: data.languages,
                    currentLanguage: data.currentLanguage,
                    schemeAndHttpHost: data.schemeAndHttpHost,
                },
            } only %}
                {% block options %}
                    {% for language, url in embed.languages %}
                        {% set selectedOption = language == embed.currentLanguage ? 'selected' %}

                        <option value=\"{{ embed.schemeAndHttpHost }}{{ url }}\" {{ selectedOption }}>
                            {{ language }}
                        </option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </form>
    {% endif %}
{% endblock %}
", "@@SprykerShop:LanguageSwitcherWidget/views/switcher/switcher.twig", "/data/vendor/spryker-shop/language-switcher-widget/src/SprykerShop/Yves/LanguageSwitcherWidget/Theme/default/views/switcher/switcher.twig");
    }
}


/* @@SprykerShop:LanguageSwitcherWidget/views/switcher/switcher.twig */
class __TwigTemplate_d43cde51bd57656e070ba1e035c991270e093b036d8c283fe1b6fb71a21d90f2___744985090 extends Template
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
        // line 12
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["select"]), "@@SprykerShop:LanguageSwitcherWidget/views/switcher/switcher.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 24, $this->source); })()), "languages", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["language"] => $context["url"]) {
            // line 25
            echo "                        ";
            $context["selectedOption"] = (((0 === twig_compare($context["language"], twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 25, $this->source); })()), "currentLanguage", [], "any", false, false, false, 25)))) ? ("selected") : (""));
            // line 26
            echo "
                        <option value=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 27, $this->source); })()), "schemeAndHttpHost", [], "any", false, false, false, 27), "html", null, true);
            echo twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["selectedOption"]) || array_key_exists("selectedOption", $context) ? $context["selectedOption"] : (function () { throw new RuntimeError('Variable "selectedOption" does not exist.', 27, $this->source); })()), "html", null, true);
            echo ">
                            ";
            // line 28
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "
                        </option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['language'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:LanguageSwitcherWidget/views/switcher/switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 31,  179 => 28,  172 => 27,  169 => 26,  166 => 25,  161 => 24,  157 => 23,  147 => 12,  65 => 33,  63 => 20,  62 => 19,  61 => 18,  60 => 12,  57 => 11,  54 => 10,  50 => 9,  46 => 1,  45 => 6,  44 => 5,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    languages: _widget.languages,
    currentLanguage: _widget.currentLanguage,
    schemeAndHttpHost: app.request.getSchemeAndHttpHost(),
} %}

{% block body %}
    {% if data.languages is not empty %}
        <form method=\"GET\" action=\"\">
            {% embed atom('select') with {
                modifiers: ['naked'],
                attributes: {
                    'onchange': 'this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);'
                },
                embed: {
                    languages: data.languages,
                    currentLanguage: data.currentLanguage,
                    schemeAndHttpHost: data.schemeAndHttpHost,
                },
            } only %}
                {% block options %}
                    {% for language, url in embed.languages %}
                        {% set selectedOption = language == embed.currentLanguage ? 'selected' %}

                        <option value=\"{{ embed.schemeAndHttpHost }}{{ url }}\" {{ selectedOption }}>
                            {{ language }}
                        </option>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </form>
    {% endif %}
{% endblock %}
", "@@SprykerShop:LanguageSwitcherWidget/views/switcher/switcher.twig", "/data/vendor/spryker-shop/language-switcher-widget/src/SprykerShop/Yves/LanguageSwitcherWidget/Theme/default/views/switcher/switcher.twig");
    }
}
