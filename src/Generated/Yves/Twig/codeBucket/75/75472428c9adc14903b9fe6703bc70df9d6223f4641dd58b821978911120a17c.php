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

/* @CatalogPage/components/molecules/suggestion-product/suggestion-product.twig */
class __TwigTemplate_1ad332a1a36ff3b4b011b93f526a2b5cdf0ed878f9d9615b4d3a4b3f6a10f2e9 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["suggestion-product", "@SprykerShop:CatalogPage"]), "@CatalogPage/components/molecules/suggestion-product/suggestion-product.twig", 1);
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
        echo "    <a class=\"js-suggest-search__item--navigable js-suggest-search__product-item--navigable ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "__link\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "url", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
        ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "image", [], "any", false, false, false, 5)) {
            // line 6
            echo "            ";
            $this->displayBlock('image', $context, $blocks);
            // line 12
            echo "        ";
        }
        // line 13
        echo "
        <span class=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "__name\">
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "html", null, true);
        echo "

            ";
        // line 17
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
            // line 18
            echo "                ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["money-price"]), "@CatalogPage/components/molecules/suggestion-product/suggestion-product.twig", 18)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,             // line 19
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19) . "__price"), "data" => ["amount" => twig_get_attribute($this->env, $this->source,             // line 21
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "price", [], "any", false, false, false, 21), "originalAmount" => (((twig_get_attribute($this->env, $this->source,             // line 22
($context["data"] ?? null), "originalPrice", [], "any", true, true, false, 22) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "originalPrice", [], "any", false, false, false, 22)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "originalPrice", [], "any", false, false, false, 22)) : (null))]]));
            // line 25
            echo "            ";
        }
        // line 26
        echo "        </span>
    </a>
";
    }

    // line 6
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                ";
        $context["imageClasses"] = (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7) . "__thumbnail");
        // line 8
        echo "                ";
        $context["imageModifiers"] = [0 => "thumbnail", 1 => "smaller", 2 => "spaceless", 3 => "with-overlay"];
        // line 9
        echo "
                ";
        // line 10
        $this->displayParentBlock("image", $context, $blocks);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/suggestion-product/suggestion-product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 10,  104 => 9,  101 => 8,  98 => 7,  94 => 6,  88 => 26,  85 => 25,  83 => 22,  82 => 21,  81 => 19,  79 => 18,  77 => 17,  72 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 6,  57 => 5,  50 => 4,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('suggestion-product', '@SprykerShop:CatalogPage') %}

{% block body %}
    <a class=\"js-suggest-search__item--navigable js-suggest-search__product-item--navigable {{ config.name }}__link\" href=\"{{ data.url }}\">
        {% if data.image %}
            {% block image %}
                {% set imageClasses = config.name ~ '__thumbnail' %}
                {% set imageModifiers = ['thumbnail', 'smaller', 'spaceless', 'with-overlay'] %}

                {{ parent() }}
            {% endblock %}
        {% endif %}

        <span class=\"{{ config.name }}__name\">
            {{ data.title }}

            {% if can('SeePricePermissionPlugin') %}
                {% include molecule('money-price') with {
                    class: config.name ~ '__price',
                    data: {
                        amount: data.price,
                        originalAmount: data.originalPrice ?? null,
                    },
                } only %}
            {% endif %}
        </span>
    </a>
{% endblock %}
", "@CatalogPage/components/molecules/suggestion-product/suggestion-product.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/suggestion-product/suggestion-product.twig");
    }
}
