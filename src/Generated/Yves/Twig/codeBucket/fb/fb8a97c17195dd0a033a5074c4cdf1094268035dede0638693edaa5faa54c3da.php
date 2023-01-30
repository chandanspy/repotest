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

/* @StoreLocations/views/store/index.twig */
class __TwigTemplate_c672caf937eee4a1ea5deea510317117e0f2a51205767957aba54fc2f4a1f6b4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-main"]), "@StoreLocations/views/store/index.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('formdata', $context)) {$context['formdata'] = [];}$context['formdata'] = array_replace_recursive(["storeform" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "storeLocationsForm", [], "any", false, false, false, 4)], $context['formdata']);        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "storedata", [], "any", true, true, false, 6)) {
            // line 7
if (!array_key_exists('storedata', $context)) {$context['storedata'] = [];}$context['storedata'] = array_replace_recursive(["stores" => twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 8, $this->source); })()), "storedata", [], "any", false, false, false, 8)], $context['storedata']);        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <h1 class=\"title title--main title--with-border title--medium\">Search Store</h1>
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
    <div class=\"grid grid--no-wrap\">
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formdata"]) || array_key_exists("formdata", $context) ? $context["formdata"] : (function () { throw new RuntimeError('Variable "formdata" does not exist.', 19, $this->source); })()), "storeform", [], "any", false, false, false, 19), 'form_start');
        echo "
        <div class=\"col col--expand\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formdata"]) || array_key_exists("formdata", $context) ? $context["formdata"] : (function () { throw new RuntimeError('Variable "formdata" does not exist.', 21, $this->source); })()), "storeform", [], "any", false, false, false, 21), "query", [], "any", false, false, false, 21), 'row');
        echo "
            <br>
            <button type=\"submit\" class=\"button button--large button--expand\">Search</button>
        </div>
    </div>
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formdata"]) || array_key_exists("formdata", $context) ? $context["formdata"] : (function () { throw new RuntimeError('Variable "formdata" does not exist.', 26, $this->source); })()), "storeform", [], "any", false, false, false, 26), 'errors');
        echo "
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formdata"]) || array_key_exists("formdata", $context) ? $context["formdata"] : (function () { throw new RuntimeError('Variable "formdata" does not exist.', 27, $this->source); })()), "storeform", [], "any", false, false, false, 27), 'form_end');
        echo "
    <br>
    ";
        // line 29
        if (array_key_exists("storedata", $context)) {
            // line 30
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["storedata"]) || array_key_exists("storedata", $context) ? $context["storedata"] : (function () { throw new RuntimeError('Variable "storedata" does not exist.', 30, $this->source); })()), "stores", [], "any", false, false, false, 30));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 31
                echo "            <div class=\"navigation-item col col--sm-12 col--md-5\"
                 style=\"border: solid 2px blueviolet;padding: 11px;margin:15px;\">
                <h5 class=\"title title--footer\">
                    ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "storename", [], "any", false, false, false, 34), "html", null, true);
                echo "
                </h5>
                <div class=\"js-navigation-footer-top-categories__target is-hidden-sm-only\">
                    <img src=\"data:image/*;base64,";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "storeimage", [], "any", false, false, false, 37), "html", null, true);
                echo "\" class=\"img-small\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "storename", [], "any", false, false, false, 37), "html", null, true);
                echo "\"
                         style=\"width: 100%;height: 200px;\"/>
                    <nav class=\"navigation-list navigation-list--secondary navigation-list--footer\">
                        <ul class=\"list list--secondary list--footer\" style=\"display:flex;\">
                            <li class=\"node node--secondary node--footer list__item\">
                                <p><b>Address:</b>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "storename", [], "any", false, false, false, 42), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "street", [], "any", false, false, false, 42), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "city", [], "any", false, false, false, 42), "html", null, true);
                echo "
                                    ,";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "region", [], "any", false, false, false, 43), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "country", [], "any", false, false, false, 43), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "zipcode", [], "any", false, false, false, 43), "html", null, true);
                echo "</p>
                            </li>
                            <li class=\"node node--secondary node--footer list__item\">
                                <a class=\"button btn-success\" href=\"\">Get Directions</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@StoreLocations/views/store/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  129 => 43,  121 => 42,  111 => 37,  105 => 34,  100 => 31,  95 => 30,  93 => 29,  88 => 27,  84 => 26,  76 => 21,  71 => 19,  67 => 17,  63 => 16,  58 => 13,  54 => 12,  50 => 1,  48 => 8,  47 => 7,  45 => 6,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define formdata = {
    storeform: _view.storeLocationsForm,
} %}
{% if _view.storedata is defined %}
    {% define storedata={
        stores:_view.storedata,
    } %}
{% endif %}

{% block title %}
    <h1 class=\"title title--main title--with-border title--medium\">Search Store</h1>
{% endblock %}

{% block content %}

    <div class=\"grid grid--no-wrap\">
        {{ form_start(formdata.storeform) }}
        <div class=\"col col--expand\">
            {{ form_row(formdata.storeform.query) }}
            <br>
            <button type=\"submit\" class=\"button button--large button--expand\">Search</button>
        </div>
    </div>
    {{ form_errors(formdata.storeform) }}
    {{ form_end(formdata.storeform) }}
    <br>
    {% if storedata is defined %}
        {% for key,value in storedata.stores %}
            <div class=\"navigation-item col col--sm-12 col--md-5\"
                 style=\"border: solid 2px blueviolet;padding: 11px;margin:15px;\">
                <h5 class=\"title title--footer\">
                    {{ value.storename }}
                </h5>
                <div class=\"js-navigation-footer-top-categories__target is-hidden-sm-only\">
                    <img src=\"data:image/*;base64,{{ value.storeimage }}\" class=\"img-small\" alt=\"{{ value.storename }}\"
                         style=\"width: 100%;height: 200px;\"/>
                    <nav class=\"navigation-list navigation-list--secondary navigation-list--footer\">
                        <ul class=\"list list--secondary list--footer\" style=\"display:flex;\">
                            <li class=\"node node--secondary node--footer list__item\">
                                <p><b>Address:</b>{{ value.storename }},{{ value.street }},{{ value.city }}
                                    ,{{ value.region }},{{ value.country }} - {{ value.zipcode }}</p>
                            </li>
                            <li class=\"node node--secondary node--footer list__item\">
                                <a class=\"button btn-success\" href=\"\">Get Directions</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        {% endfor %}
    {% endif %}
{% endblock %}
", "@StoreLocations/views/store/index.twig", "/data/src/Pyz/Yves/StoreLocations/Theme/default/views/store/index.twig");
    }
}
