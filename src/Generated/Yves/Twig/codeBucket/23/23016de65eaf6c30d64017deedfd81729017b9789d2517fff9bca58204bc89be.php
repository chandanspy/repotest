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

/* @ProductOptionWidget/views/option-configurator/option-configurator.twig */
class __TwigTemplate_642543542905c2b781d432485135fccd7179b84ba9c4dde06e140101fce25672 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["option-configurator", "@SprykerShop:ProductOptionWidget"]), "@ProductOptionWidget/views/option-configurator/option-configurator.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"product-options js-product-options\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "optionGroups", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["optionGroup"]) {
            // line 6
            echo "            <div class=\"product-options__item\">
                <div class=\"product-options__title js-product-options__title\" data-toggle-target=\"[data-product-option='";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionGroup"], "name", [], "any", false, false, false, 7), "html", null, true);
            echo "']\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["optionGroup"], "name", [], "any", false, false, false, 7)), "html", null, true);
            echo "</div>
                <div data-product-option=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["optionGroup"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\" class=\"is-hidden\">
                    ";
            // line 9
            $this->loadTemplate("@ProductOptionWidget/views/option-configurator/option-configurator.twig", "@ProductOptionWidget/views/option-configurator/option-configurator.twig", 9, "1280725888")->display(twig_to_array(["modifiers" => [0 => "full-width", 1 => "margin-bottom"], "attributes" => ["name" => (("product-option[" . twig_get_attribute($this->env, $this->source,             // line 12
$context["optionGroup"], "name", [], "any", false, false, false, 12)) . "]"), "config-width" => "100%"], "embed" => ["options" => twig_get_attribute($this->env, $this->source,             // line 16
$context["optionGroup"], "productOptionValues", [], "any", false, false, false, 16)]]));
            // line 28
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>

    ";
        // line 33
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-accordion"]), "@ProductOptionWidget/views/option-configurator/option-configurator.twig", 33)->display(twig_to_array(["attributes" => ["wrap-class-name" => "js-product-options", "trigger-class-name" => "js-product-options__title"]]));
    }

    public function getTemplateName()
    {
        return "@ProductOptionWidget/views/option-configurator/option-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  81 => 31,  73 => 28,  71 => 16,  70 => 12,  69 => 9,  65 => 8,  59 => 7,  56 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('option-configurator', '@SprykerShop:ProductOptionWidget') %}

{% block body %}
    <div class=\"product-options js-product-options\">
        {% for optionGroup in data.optionGroups %}
            <div class=\"product-options__item\">
                <div class=\"product-options__title js-product-options__title\" data-toggle-target=\"[data-product-option='{{ optionGroup.name }}']\">{{ optionGroup.name | trans }}</div>
                <div data-product-option=\"{{ optionGroup.name }}\" class=\"is-hidden\">
                    {% embed molecule('custom-select') with {
                        modifiers: ['full-width', 'margin-bottom'],
                        attributes: {
                            name: 'product-option[' ~ optionGroup.name ~ ']',
                            'config-width': '100%',
                        },
                        embed: {
                            options: optionGroup.productOptionValues,
                        },
                    } only %}
                        {% block options %}
                            <option value=\"0\">{{ 'product.product_options_select' | trans }}</option>
                            {% for option in embed.options %}
                                <option value=\"{{ option.idProductOptionValue }}\">
                                    {{ option.value | trans }} {% if can('SeePricePermissionPlugin') %}{{ option.price | money }}{% endif %}
                                </option>
                            {% endfor %}
                        {% endblock %}
                    {% endembed %}
                </div>
            </div>
        {% endfor %}
    </div>

    {% include molecule('toggler-accordion') with {
        attributes: {
            'wrap-class-name': 'js-product-options',
            'trigger-class-name': 'js-product-options__title',
        },
    } only %}
{% endblock %}
", "@ProductOptionWidget/views/option-configurator/option-configurator.twig", "/data/src/Pyz/Yves/ProductOptionWidget/Theme/default/views/option-configurator/option-configurator.twig");
    }
}


/* @ProductOptionWidget/views/option-configurator/option-configurator.twig */
class __TwigTemplate_642543542905c2b781d432485135fccd7179b84ba9c4dde06e140101fce25672___1280725888 extends Template
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
        // line 9
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["custom-select"]), "@ProductOptionWidget/views/option-configurator/option-configurator.twig", 9);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                            <option value=\"0\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.product_options_select"), "html", null, true);
        echo "</option>
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 21, $this->source); })()), "options", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 22
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "idProductOptionValue", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
                                    ";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 23)), "html", null, true);
            echo " ";
            if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["option"], "price", [], "any", false, false, false, 23)]), "html", null, true);
            }
            // line 24
            echo "                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "@ProductOptionWidget/views/option-configurator/option-configurator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 26,  203 => 24,  197 => 23,  192 => 22,  188 => 21,  183 => 20,  179 => 19,  169 => 9,  85 => 33,  81 => 31,  73 => 28,  71 => 16,  70 => 12,  69 => 9,  65 => 8,  59 => 7,  56 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('option-configurator', '@SprykerShop:ProductOptionWidget') %}

{% block body %}
    <div class=\"product-options js-product-options\">
        {% for optionGroup in data.optionGroups %}
            <div class=\"product-options__item\">
                <div class=\"product-options__title js-product-options__title\" data-toggle-target=\"[data-product-option='{{ optionGroup.name }}']\">{{ optionGroup.name | trans }}</div>
                <div data-product-option=\"{{ optionGroup.name }}\" class=\"is-hidden\">
                    {% embed molecule('custom-select') with {
                        modifiers: ['full-width', 'margin-bottom'],
                        attributes: {
                            name: 'product-option[' ~ optionGroup.name ~ ']',
                            'config-width': '100%',
                        },
                        embed: {
                            options: optionGroup.productOptionValues,
                        },
                    } only %}
                        {% block options %}
                            <option value=\"0\">{{ 'product.product_options_select' | trans }}</option>
                            {% for option in embed.options %}
                                <option value=\"{{ option.idProductOptionValue }}\">
                                    {{ option.value | trans }} {% if can('SeePricePermissionPlugin') %}{{ option.price | money }}{% endif %}
                                </option>
                            {% endfor %}
                        {% endblock %}
                    {% endembed %}
                </div>
            </div>
        {% endfor %}
    </div>

    {% include molecule('toggler-accordion') with {
        attributes: {
            'wrap-class-name': 'js-product-options',
            'trigger-class-name': 'js-product-options__title',
        },
    } only %}
{% endblock %}
", "@ProductOptionWidget/views/option-configurator/option-configurator.twig", "/data/src/Pyz/Yves/ProductOptionWidget/Theme/default/views/option-configurator/option-configurator.twig");
    }
}
