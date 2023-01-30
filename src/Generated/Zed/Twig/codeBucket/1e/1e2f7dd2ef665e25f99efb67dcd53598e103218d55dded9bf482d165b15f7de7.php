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

/* @ProductDiscontinuedGui/Tab/product-discontinue/product-discontinue-tab.twig */
class __TwigTemplate_e69d2c4b7796dc5ce49b66c7e25c3165dddd26bd5385609901b812ed95a12738 extends Template
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
        echo "<div class=\"well\">
    <h3>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discontinue Product"), "html", null, true);
        echo "</h3>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can discontinue a product on this tab and add a note - why this product is discontinued."), "html", null, true);
        echo "</p>
    <p><i>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note: Discontinued products will still be visible in the shop and have stock, but it will not be possible to buy it."), "html", null, true);
        echo "</i></p>
</div>

";
        // line 7
        $context["discontinued"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "data", [], "any", false, false, false, 7), "productDiscontinued", [], "any", false, false, false, 7);
        // line 8
        echo "
";
        // line 9
        if ( !twig_test_empty((isset($context["discontinued"]) || array_key_exists("discontinued", $context) ? $context["discontinued"] : (function () { throw new RuntimeError('Variable "discontinued" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "    <div class=\"form-group\">
        <a href=\"";
            // line 11
            echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-discontinued-gui/index/restore", ["id-product-concrete" => (isset($context["idProduct"]) || array_key_exists("idProduct", $context) ? $context["idProduct"] : (function () { throw new RuntimeError('Variable "idProduct" does not exist.', 11, $this->source); })())]]);
            echo "\" class=\"btn btn-outline btn-remove\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
            echo "</a>
    </div>
    <div class=\"form-group\">
        ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Will be deactivated on:"), "html", null, true);
            echo "
        <span class=\"badge\"><strong>";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["discontinued"]) || array_key_exists("discontinued", $context) ? $context["discontinued"] : (function () { throw new RuntimeError('Variable "discontinued" does not exist.', 15, $this->source); })()), "activeUntil", [], "any", false, false, false, 15), "F d, Y"), "html", null, true);
            echo "</strong></span>
    </div>
    <div class=\"form-group\">
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Days left:"), "html", null, true);
            echo "
        <span class=\"badge\"><strong>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["discontinued"]) || array_key_exists("discontinued", $context) ? $context["discontinued"] : (function () { throw new RuntimeError('Variable "discontinued" does not exist.', 19, $this->source); })()), "activeUntil", [], "any", false, false, false, 19))), "diff", [0 => twig_date_converter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"))], "method", false, false, false, 19), "days", [], "any", false, false, false, 19), "html", null, true);
            echo "</strong></span>
    </div>
    <div class=\"form-group\">
    <h3>";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add note"), "html", null, true);
            echo "</h3>
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 23, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["localeTransfer"]) {
                // line 24
                echo "        ";
                $context["formKey"] = twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "idLocale", [], "any", false, false, false, 24);
                // line 25
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "discontinued_notes", [], "any", false, true, false, 25), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 25, $this->source); })()), [], "array", true, true, false, 25)) {
                    // line 26
                    echo "            ";
                    $this->loadTemplate("@ProductDiscontinuedGui/Tab/product-discontinue/product-discontinue-tab.twig", "@ProductDiscontinuedGui/Tab/product-discontinue/product-discontinue-tab.twig", 26, "132273557")->display(twig_array_merge($context, ["collapsed" =>  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 26), "localeName" => twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "localeName", [], "any", false, false, false, 26)]));
                    // line 37
                    echo "        ";
                }
                // line 38
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeTransfer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    </div>
";
        } else {
            // line 41
            echo "    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "discontinued_notes", [], "any", false, false, false, 41), "setRendered", [], "any", false, false, false, 41);
            // line 42
            echo "    <a href=\"";
            echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-discontinued-gui/index/discontinue", ["id-product-concrete" => (isset($context["idProduct"]) || array_key_exists("idProduct", $context) ? $context["idProduct"] : (function () { throw new RuntimeError('Variable "idProduct" does not exist.', 42, $this->source); })())]]);
            echo "\" class=\"btn btn-outline safe-submit btn-back\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discontinue"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "@ProductDiscontinuedGui/Tab/product-discontinue/product-discontinue-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 42,  143 => 41,  139 => 39,  125 => 38,  122 => 37,  119 => 26,  116 => 25,  113 => 24,  96 => 23,  92 => 22,  86 => 19,  82 => 18,  76 => 15,  72 => 14,  64 => 11,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"well\">
    <h3>{{ 'Discontinue Product' | trans }}</h3>
    <p>{{ 'You can discontinue a product on this tab and add a note - why this product is discontinued.' | trans }}</p>
    <p><i>{{ 'Note: Discontinued products will still be visible in the shop and have stock, but it will not be possible to buy it.' | trans }}</i></p>
</div>

{% set discontinued = form.vars.data.productDiscontinued %}

{% if discontinued is not empty %}
    <div class=\"form-group\">
        <a href=\"{{ url('/product-discontinued-gui/index/restore', {'id-product-concrete': idProduct}) }}\" class=\"btn btn-outline btn-remove\">{{ 'Restore' | trans }}</a>
    </div>
    <div class=\"form-group\">
        {{ 'Will be deactivated on:' | trans }}
        <span class=\"badge\"><strong>{{ discontinued.activeUntil | date('F d, Y') }}</strong></span>
    </div>
    <div class=\"form-group\">
        {{ 'Days left:' | trans }}
        <span class=\"badge\"><strong>{{ date(discontinued.activeUntil|date).diff(date('now'|date('Y-m-d')) ).days }}</strong></span>
    </div>
    <div class=\"form-group\">
    <h3>{{ 'Add note' | trans }}</h3>
    {% for localeTransfer in localeCollection %}
        {% set formKey = localeTransfer.idLocale %}
        {% if form.discontinued_notes[formKey] is defined %}
            {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                {% block content %}
                    {% for input in form.discontinued_notes[formKey] %}
                        <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(input) }}
                            {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                            {{ form_errors(input) }}
                        </div>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        {% endif %}
    {% endfor %}
    </div>
{% else %}
    {% do form.discontinued_notes.setRendered %}
    <a href=\"{{ url('/product-discontinued-gui/index/discontinue', {'id-product-concrete': idProduct}) }}\" class=\"btn btn-outline safe-submit btn-back\">{{ 'Discontinue' | trans }}</a>
{% endif %}
", "@ProductDiscontinuedGui/Tab/product-discontinue/product-discontinue-tab.twig", "/data/vendor/spryker/product-discontinued-gui/src/Spryker/Zed/ProductDiscontinuedGui/Presentation//Tab/product-discontinue/product-discontinue-tab.twig");
    }
}


/* @ProductDiscontinuedGui/Tab/product-discontinue/product-discontinue-tab.twig */
class __TwigTemplate_e69d2c4b7796dc5ce49b66c7e25c3165dddd26bd5385609901b812ed95a12738___132273557 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductDiscontinuedGui/Tab/product-discontinue/product-discontinue-tab.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "discontinued_notes", [], "any", false, false, false, 28), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 28, $this->source); })()), [], "array", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 29
            echo "                        <div class=\"form-group ";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["input"], "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29))) {
                echo "has-error";
            }
            echo "\">
                            ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'label');
            echo "
                            ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'widget', ["attr" => ["class" => "name-translation"]]);
            echo "
                            ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["input"], 'errors');
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@ProductDiscontinuedGui/Tab/product-discontinue/product-discontinue-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 35,  275 => 32,  271 => 31,  267 => 30,  260 => 29,  255 => 28,  251 => 27,  240 => 26,  146 => 42,  143 => 41,  139 => 39,  125 => 38,  122 => 37,  119 => 26,  116 => 25,  113 => 24,  96 => 23,  92 => 22,  86 => 19,  82 => 18,  76 => 15,  72 => 14,  64 => 11,  61 => 10,  59 => 9,  56 => 8,  54 => 7,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"well\">
    <h3>{{ 'Discontinue Product' | trans }}</h3>
    <p>{{ 'You can discontinue a product on this tab and add a note - why this product is discontinued.' | trans }}</p>
    <p><i>{{ 'Note: Discontinued products will still be visible in the shop and have stock, but it will not be possible to buy it.' | trans }}</i></p>
</div>

{% set discontinued = form.vars.data.productDiscontinued %}

{% if discontinued is not empty %}
    <div class=\"form-group\">
        <a href=\"{{ url('/product-discontinued-gui/index/restore', {'id-product-concrete': idProduct}) }}\" class=\"btn btn-outline btn-remove\">{{ 'Restore' | trans }}</a>
    </div>
    <div class=\"form-group\">
        {{ 'Will be deactivated on:' | trans }}
        <span class=\"badge\"><strong>{{ discontinued.activeUntil | date('F d, Y') }}</strong></span>
    </div>
    <div class=\"form-group\">
        {{ 'Days left:' | trans }}
        <span class=\"badge\"><strong>{{ date(discontinued.activeUntil|date).diff(date('now'|date('Y-m-d')) ).days }}</strong></span>
    </div>
    <div class=\"form-group\">
    <h3>{{ 'Add note' | trans }}</h3>
    {% for localeTransfer in localeCollection %}
        {% set formKey = localeTransfer.idLocale %}
        {% if form.discontinued_notes[formKey] is defined %}
            {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first), 'localeName': localeTransfer.localeName} %}
                {% block content %}
                    {% for input in form.discontinued_notes[formKey] %}
                        <div class=\"form-group {% if input.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(input) }}
                            {{ form_widget(input, {'attr': {'class': 'name-translation'}}) }}
                            {{ form_errors(input) }}
                        </div>
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        {% endif %}
    {% endfor %}
    </div>
{% else %}
    {% do form.discontinued_notes.setRendered %}
    <a href=\"{{ url('/product-discontinued-gui/index/discontinue', {'id-product-concrete': idProduct}) }}\" class=\"btn btn-outline safe-submit btn-back\">{{ 'Discontinue' | trans }}</a>
{% endif %}
", "@ProductDiscontinuedGui/Tab/product-discontinue/product-discontinue-tab.twig", "/data/vendor/spryker/product-discontinued-gui/src/Spryker/Zed/ProductDiscontinuedGui/Presentation//Tab/product-discontinue/product-discontinue-tab.twig");
    }
}
