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

/* @ProductSetGui/_partials/tabs/general.twig */
class __TwigTemplate_b01a0d46c20e92057b22194d2f596bbe7d7fedfa4df518645ebb319815d2943b extends Template
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
        echo "<div class=\"form-group\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 2, $this->source); })()));
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
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 3, $this->source); })()), "general_form", [], "any", false, false, false, 3), "localized_general_form_collection", [], "any", false, false, false, 3));
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
            foreach ($context['_seq'] as $context["_key"] => $context["localizedGeneralForm"]) {
                // line 4
                echo "            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "idLocale", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedGeneralForm"], "fk_locale", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "value", [], "any", false, false, false, 4)))) {
                    // line 5
                    echo "                ";
                    $this->loadTemplate("@ProductSetGui/_partials/tabs/general.twig", "@ProductSetGui/_partials/tabs/general.twig", 5, "233234907")->display(twig_array_merge($context, ["id" => ("localized_attributes_container-" . twig_get_attribute($this->env, $this->source,                     // line 6
$context["localeTransfer"], "localeName", [], "any", false, false, false, 6)), "localeName" => twig_get_attribute($this->env, $this->source,                     // line 7
$context["localeTransfer"], "localeName", [], "any", false, false, false, 7), "collapsed" => false]));
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localizedGeneralForm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
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
        // line 38
        echo "</div>

";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 40, $this->source); })()), "general_form", [], "any", false, false, false, 40), 'rest');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/_partials/tabs/general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  114 => 38,  100 => 37,  86 => 36,  83 => 35,  81 => 7,  80 => 6,  78 => 5,  75 => 4,  57 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group\">
    {% for localeTransfer in localeCollection %}
        {% for localizedGeneralForm in productSetForm.general_form.localized_general_form_collection %}
            {% if localeTransfer.idLocale == localizedGeneralForm.fk_locale.vars.value %}
                {% embed '@Gui/Partials/localized-ibox.twig' with {
                    'id': 'localized_attributes_container-' ~ localeTransfer.localeName,
                    'localeName': localeTransfer.localeName,
                    'collapsed': false
                } %}
                    {% block content %}
                        <div class=\"form-group {% if localizedGeneralForm.name.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(localizedGeneralForm.name) }}
                            {{ form_widget(localizedGeneralForm.name, {'attr': {'data-translation-key': localizedGeneralForm.name.vars.name}}) }}
                            {{ form_errors(localizedGeneralForm.name) }}
                        </div>

                        <div class=\"form-group {% if localizedGeneralForm.url.vars.errors|length > 0 %}has-error{% endif %}\" >
                            {{ form_label(localizedGeneralForm.url) }}
                            {% if localizedGeneralForm.url_prefix.vars.data %}
                                <div class=\"input-group m-b\">
                                    <span class=\"input-group-addon\">
                                        {{ localizedGeneralForm.url_prefix.vars.data }}
                                    </span>
                                    {{ form_widget(localizedGeneralForm.url) }}
                                </div>
                            {% else %}
                                {{ form_widget(localizedGeneralForm.url) }}
                            {% endif %}
                            {{ form_errors(localizedGeneralForm.url) }}
                        </div>

                        {{ form_rest(localizedGeneralForm) }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endfor %}
    {% endfor %}
</div>

{{ form_rest(productSetForm.general_form) }}
", "@ProductSetGui/_partials/tabs/general.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//_partials/tabs/general.twig");
    }
}


/* @ProductSetGui/_partials/tabs/general.twig */
class __TwigTemplate_b01a0d46c20e92057b22194d2f596bbe7d7fedfa4df518645ebb319815d2943b___233234907 extends Template
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
        // line 5
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductSetGui/_partials/tabs/general.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                        <div class=\"form-group ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "errors", [], "any", false, false, false, 11))) {
            echo "has-error";
        }
        echo "\">
                            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'label');
        echo "
                            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'widget', ["attr" => ["data-translation-key" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13)]]);
        echo "
                            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), 'errors');
        echo "
                        </div>

                        <div class=\"form-group ";
        // line 17
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 17, $this->source); })()), "url", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17)), 0))) {
            echo "has-error";
        }
        echo "\" >
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 18, $this->source); })()), "url", [], "any", false, false, false, 18), 'label');
        echo "
                            ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 19, $this->source); })()), "url_prefix", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "data", [], "any", false, false, false, 19)) {
            // line 20
            echo "                                <div class=\"input-group m-b\">
                                    <span class=\"input-group-addon\">
                                        ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 22, $this->source); })()), "url_prefix", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "data", [], "any", false, false, false, 22), "html", null, true);
            echo "
                                    </span>
                                    ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 24, $this->source); })()), "url", [], "any", false, false, false, 24), 'widget');
            echo "
                                </div>
                            ";
        } else {
            // line 27
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 27, $this->source); })()), "url", [], "any", false, false, false, 27), 'widget');
            echo "
                            ";
        }
        // line 29
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 29, $this->source); })()), "url", [], "any", false, false, false, 29), 'errors');
        echo "
                        </div>

                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["localizedGeneralForm"]) || array_key_exists("localizedGeneralForm", $context) ? $context["localizedGeneralForm"] : (function () { throw new RuntimeError('Variable "localizedGeneralForm" does not exist.', 32, $this->source); })()), 'rest');
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/_partials/tabs/general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 32,  274 => 29,  268 => 27,  262 => 24,  257 => 22,  253 => 20,  251 => 19,  247 => 18,  241 => 17,  235 => 14,  231 => 13,  227 => 12,  220 => 11,  216 => 10,  205 => 5,  118 => 40,  114 => 38,  100 => 37,  86 => 36,  83 => 35,  81 => 7,  80 => 6,  78 => 5,  75 => 4,  57 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-group\">
    {% for localeTransfer in localeCollection %}
        {% for localizedGeneralForm in productSetForm.general_form.localized_general_form_collection %}
            {% if localeTransfer.idLocale == localizedGeneralForm.fk_locale.vars.value %}
                {% embed '@Gui/Partials/localized-ibox.twig' with {
                    'id': 'localized_attributes_container-' ~ localeTransfer.localeName,
                    'localeName': localeTransfer.localeName,
                    'collapsed': false
                } %}
                    {% block content %}
                        <div class=\"form-group {% if localizedGeneralForm.name.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(localizedGeneralForm.name) }}
                            {{ form_widget(localizedGeneralForm.name, {'attr': {'data-translation-key': localizedGeneralForm.name.vars.name}}) }}
                            {{ form_errors(localizedGeneralForm.name) }}
                        </div>

                        <div class=\"form-group {% if localizedGeneralForm.url.vars.errors|length > 0 %}has-error{% endif %}\" >
                            {{ form_label(localizedGeneralForm.url) }}
                            {% if localizedGeneralForm.url_prefix.vars.data %}
                                <div class=\"input-group m-b\">
                                    <span class=\"input-group-addon\">
                                        {{ localizedGeneralForm.url_prefix.vars.data }}
                                    </span>
                                    {{ form_widget(localizedGeneralForm.url) }}
                                </div>
                            {% else %}
                                {{ form_widget(localizedGeneralForm.url) }}
                            {% endif %}
                            {{ form_errors(localizedGeneralForm.url) }}
                        </div>

                        {{ form_rest(localizedGeneralForm) }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endfor %}
    {% endfor %}
</div>

{{ form_rest(productSetForm.general_form) }}
", "@ProductSetGui/_partials/tabs/general.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//_partials/tabs/general.twig");
    }
}
