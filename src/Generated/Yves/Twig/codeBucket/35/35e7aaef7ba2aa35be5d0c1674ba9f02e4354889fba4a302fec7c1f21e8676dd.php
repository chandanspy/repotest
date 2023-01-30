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

/* @@SprykerShop:CatalogPage/components/molecules/suggestion-product/suggestion-product.twig */
class __TwigTemplate_42281f971f012c46a559af9c144f8d1c1a721e732497ff79a0c3ff8b8fa32019 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'image' => [$this, 'block_image'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@@SprykerShop:CatalogPage/components/molecules/suggestion-product/suggestion-product.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "suggestion-product"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["product" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "price" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "url" => "", "image" => null, "alt" => "", "title" => "", "originalPrice" => null], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <a class=\"grid js-suggest-search__item--navigable js-suggest-search__product-item--navigable ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "__link\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "url", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
        <span class=\"col col--sm-3\">
            ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "image", [], "any", false, false, false, 20)) {
            // line 21
            echo "                ";
            $context["imageClasses"] = "";
            // line 22
            echo "                ";
            $context["imageModifiers"] = [0 => "thumbnail", 1 => "smaller", 2 => "has-border"];
            // line 23
            echo "
                ";
            // line 24
            $this->displayBlock('image', $context, $blocks);
            // line 38
            echo "            ";
        }
        // line 39
        echo "        </span>

        <span class=\"col col--sm-9 spacing spacing--inner\">
            ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42), "html", null, true);
        echo "

            ";
        // line 44
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
            // line 45
            echo "                ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["money-price"]), "@@SprykerShop:CatalogPage/components/molecules/suggestion-product/suggestion-product.twig", 45)->display(twig_to_array(["data" => ["amount" => twig_get_attribute($this->env, $this->source,             // line 47
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "price", [], "any", false, false, false, 47), "originalAmount" => (((twig_get_attribute($this->env, $this->source,             // line 48
($context["data"] ?? null), "originalPrice", [], "any", true, true, false, 48) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "originalPrice", [], "any", false, false, false, 48)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "originalPrice", [], "any", false, false, false, 48)) : (null))]]));
            // line 51
            echo "            ";
        } else {
            // line 52
            echo "                <br>
                ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.access.cannot_see_price"), "html", null, true);
            echo "
            ";
        }
        // line 55
        echo "        </span>
    </a>
";
    }

    // line 24
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["lazy-image"]), "@@SprykerShop:CatalogPage/components/molecules/suggestion-product/suggestion-product.twig", 25)->display(twig_to_array(["class" =>         // line 26
(isset($context["imageClasses"]) || array_key_exists("imageClasses", $context) ? $context["imageClasses"] : (function () { throw new RuntimeError('Variable "imageClasses" does not exist.', 26, $this->source); })()), "modifiers" =>         // line 27
(isset($context["imageModifiers"]) || array_key_exists("imageModifiers", $context) ? $context["imageModifiers"] : (function () { throw new RuntimeError('Variable "imageModifiers" does not exist.', 27, $this->source); })()), "data" => ["imageSrc" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29), "external_url_small", [], "any", false, false, false, 29), "imagePlaceholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "image", [], "any", false, false, false, 30), "external_url_small", [], "any", false, false, false, 30), "imageTitle" => twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "alt", [], "any", false, false, false, 31)], "extraAttributes" => ((twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33)) ? (["title" => twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 34, $this->source); })()), "title", [], "any", false, false, false, 34)]) : ([]))]));
        // line 37
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:CatalogPage/components/molecules/suggestion-product/suggestion-product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  125 => 34,  124 => 33,  123 => 31,  122 => 30,  121 => 29,  120 => 27,  119 => 26,  117 => 25,  113 => 24,  107 => 55,  102 => 53,  99 => 52,  96 => 51,  94 => 48,  93 => 47,  91 => 45,  89 => 44,  84 => 42,  79 => 39,  76 => 38,  74 => 24,  71 => 23,  68 => 22,  65 => 21,  63 => 20,  55 => 18,  51 => 17,  47 => 1,  46 => 9,  45 => 8,  44 => 7,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'suggestion-product',
} %}

{% define data = {
    product: required,
    price: required,
    url: '',
    image: null,
    alt: '',
    title: '',
    originalPrice: null,
} %}

{% block body %}
    <a class=\"grid js-suggest-search__item--navigable js-suggest-search__product-item--navigable {{ config.name }}__link\" href=\"{{ data.url }}\">
        <span class=\"col col--sm-3\">
            {% if data.image %}
                {% set imageClasses = '' %}
                {% set imageModifiers = ['thumbnail', 'smaller', 'has-border'] %}

                {% block image %}
                    {% include molecule('lazy-image') with {
                        class: imageClasses,
                        modifiers: imageModifiers,
                        data: {
                            imageSrc: data.image.external_url_small,
                            imagePlaceholder: data.image.external_url_small,
                            imageTitle: data.alt,
                        },
                        extraAttributes: data.title ? {
                            title: data.title,
                        } : {},
                    } only %}
                {% endblock %}
            {% endif %}
        </span>

        <span class=\"col col--sm-9 spacing spacing--inner\">
            {{ data.title }}

            {% if can('SeePricePermissionPlugin') %}
                {% include molecule('money-price') with {
                    data: {
                        amount: data.price,
                        originalAmount: data.originalPrice ?? null,
                    },
                } only %}
            {% else %}
                <br>
                {{ 'customer.access.cannot_see_price' | trans }}
            {% endif %}
        </span>
    </a>
{% endblock %}
", "@@SprykerShop:CatalogPage/components/molecules/suggestion-product/suggestion-product.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/suggestion-product/suggestion-product.twig");
    }
}
