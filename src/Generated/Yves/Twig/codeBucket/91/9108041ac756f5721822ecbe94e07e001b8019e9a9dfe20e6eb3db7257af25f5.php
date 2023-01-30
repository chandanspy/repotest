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

/* @@SprykerShop:ProductOptionWidget/views/option-configurator/option-configurator.twig */
class __TwigTemplate_022c95013b581bd01319dcfa2baeef895b7e87e2815b5db8fd09374eac9d11fb extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@@SprykerShop:ProductOptionWidget/views/option-configurator/option-configurator.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["optionGroups" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "productOptionGroups", [], "any", false, false, false, 4)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "optionGroups", [], "any", false, false, false, 8))) {
            $this->displayParentBlock("template", $context, $blocks);
        }
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <ul class=\"list\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "optionGroups", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["optionGroup"]) {
            // line 14
            echo "            <li class=\"list__item spacing-y\">
                <strong>";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["optionGroup"], "name", [], "any", false, false, false, 15)), "html", null, true);
            echo "</strong>
                ";
            // line 16
            $this->loadTemplate("@@SprykerShop:ProductOptionWidget/views/option-configurator/option-configurator.twig", "@@SprykerShop:ProductOptionWidget/views/option-configurator/option-configurator.twig", 16, "732273835")->display(twig_to_array(["modifiers" => [0 => "expand"], "attributes" => ["name" => (("product-option[" . twig_get_attribute($this->env, $this->source,             // line 19
$context["optionGroup"], "name", [], "any", false, false, false, 19)) . "]")], "embed" => ["options" => twig_get_attribute($this->env, $this->source,             // line 22
$context["optionGroup"], "productOptionValues", [], "any", false, false, false, 22)]]));
            // line 32
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ul>
    <hr>
";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductOptionWidget/views/option-configurator/option-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  82 => 32,  80 => 22,  79 => 19,  78 => 16,  74 => 15,  71 => 14,  67 => 13,  64 => 12,  60 => 11,  53 => 8,  49 => 7,  45 => 1,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    optionGroups: _widget.productOptionGroups
} %}

{% block template %}
    {% if data.optionGroups is not empty %}{{parent()}}{% endif %}
{% endblock %}

{% block body %}
    <ul class=\"list\">
        {% for optionGroup in data.optionGroups %}
            <li class=\"list__item spacing-y\">
                <strong>{{optionGroup.name | trans}}</strong>
                {% embed atom('select') with {
                    modifiers: ['expand'],
                    attributes: {
                        name: 'product-option[' ~ optionGroup.name ~ ']',
                    },
                    embed: {
                        options: optionGroup.productOptionValues
                    }
                } only %}
                    {% block options %}
                        <option value=\"0\">{{ 'product.product_options_select' | trans }}</option>
                        {% for option in embed.options %}
                            <option value=\"{{option.idProductOptionValue}}\">{{ option.value | trans }} {{ option.price | money }}</option>
                        {% endfor %}
                    {% endblock %}
                {% endembed %}
            </li>
        {% endfor %}
    </ul>
    <hr>
{% endblock %}
", "@@SprykerShop:ProductOptionWidget/views/option-configurator/option-configurator.twig", "/data/vendor/spryker-shop/product-option-widget/src/SprykerShop/Yves/ProductOptionWidget/Theme/default/views/option-configurator/option-configurator.twig");
    }
}


/* @@SprykerShop:ProductOptionWidget/views/option-configurator/option-configurator.twig */
class __TwigTemplate_022c95013b581bd01319dcfa2baeef895b7e87e2815b5db8fd09374eac9d11fb___732273835 extends Template
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
        // line 16
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["select"]), "@@SprykerShop:ProductOptionWidget/views/option-configurator/option-configurator.twig", 16);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                        <option value=\"0\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.product_options_select"), "html", null, true);
        echo "</option>
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 28
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "idProductOptionValue", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 28)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["option"], "price", [], "any", false, false, false, 28)]), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductOptionWidget/views/option-configurator/option-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 30,  195 => 28,  191 => 27,  186 => 26,  182 => 25,  172 => 16,  89 => 34,  82 => 32,  80 => 22,  79 => 19,  78 => 16,  74 => 15,  71 => 14,  67 => 13,  64 => 12,  60 => 11,  53 => 8,  49 => 7,  45 => 1,  44 => 4,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    optionGroups: _widget.productOptionGroups
} %}

{% block template %}
    {% if data.optionGroups is not empty %}{{parent()}}{% endif %}
{% endblock %}

{% block body %}
    <ul class=\"list\">
        {% for optionGroup in data.optionGroups %}
            <li class=\"list__item spacing-y\">
                <strong>{{optionGroup.name | trans}}</strong>
                {% embed atom('select') with {
                    modifiers: ['expand'],
                    attributes: {
                        name: 'product-option[' ~ optionGroup.name ~ ']',
                    },
                    embed: {
                        options: optionGroup.productOptionValues
                    }
                } only %}
                    {% block options %}
                        <option value=\"0\">{{ 'product.product_options_select' | trans }}</option>
                        {% for option in embed.options %}
                            <option value=\"{{option.idProductOptionValue}}\">{{ option.value | trans }} {{ option.price | money }}</option>
                        {% endfor %}
                    {% endblock %}
                {% endembed %}
            </li>
        {% endfor %}
    </ul>
    <hr>
{% endblock %}
", "@@SprykerShop:ProductOptionWidget/views/option-configurator/option-configurator.twig", "/data/vendor/spryker-shop/product-option-widget/src/SprykerShop/Yves/ProductOptionWidget/Theme/default/views/option-configurator/option-configurator.twig");
    }
}
