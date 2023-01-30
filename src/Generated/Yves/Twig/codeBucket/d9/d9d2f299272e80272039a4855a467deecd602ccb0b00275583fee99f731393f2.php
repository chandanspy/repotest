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

/* @CatalogPage/views/suggestion-results/suggestion-results.twig */
class __TwigTemplate_8430e3b8e670031f00c67c1efd658f2c5b4e50b352d241cb7ec8f5e2799af90d extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@CatalogPage/views/suggestion-results/suggestion-results.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["completion" => ((        // line 4
array_key_exists("completion", $context)) ? (_twig_default_filter((isset($context["completion"]) || array_key_exists("completion", $context) ? $context["completion"] : (function () { throw new RuntimeError('Variable "completion" does not exist.', 4, $this->source); })()), [])) : ([])), "suggestionByType" => ((        // line 5
array_key_exists("suggestionByType", $context)) ? (_twig_default_filter((isset($context["suggestionByType"]) || array_key_exists("suggestionByType", $context) ? $context["suggestionByType"] : (function () { throw new RuntimeError('Variable "suggestionByType" does not exist.', 5, $this->source); })()))) : ("")), "category" => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["suggestionByType"] ?? null), "category", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["suggestionByType"] ?? null), "category", [], "any", false, false, false, 6), [])) : ([])), "cms_page" => ((twig_get_attribute($this->env, $this->source,         // line 7
($context["suggestionByType"] ?? null), "cms_page", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["suggestionByType"] ?? null), "cms_page", [], "any", false, false, false, 7), [])) : ([])), "product_abstract" => ((twig_get_attribute($this->env, $this->source,         // line 8
($context["suggestionByType"] ?? null), "product_abstract", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["suggestionByType"] ?? null), "product_abstract", [], "any", false, false, false, 8), [])) : ([])), "suggestionsLength" => 6, "categoriesLength" => 6, "pagesLength" => 3, "productsLength" => 6], $context['data']);        // line 15
        $context["leftVisible"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "completion", [], "any", false, false, false, 15)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "category", [], "any", false, false, false, 16))) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "cms_page", [], "any", false, false, false, 17)));
        // line 19
        $context["rightVisible"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "product_abstract", [], "any", false, false, false, 19));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        $context["colClasses"] = (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) ? ("col col--sm-12 col--md-6 col--xl-6") : ("col col--sm-12 col--md-6 col--lg-12 col--xl-6"));
        // line 23
        echo "
    <div class=\"grid grid--gap\">
        ";
        // line 25
        if ((isset($context["leftVisible"]) || array_key_exists("leftVisible", $context) ? $context["leftVisible"] : (function () { throw new RuntimeError('Variable "leftVisible" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["colClasses"]) || array_key_exists("colClasses", $context) ? $context["colClasses"] : (function () { throw new RuntimeError('Variable "colClasses" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "\">
                ";
            // line 27
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["suggestion-links-list", "CatalogPage"]), "@CatalogPage/views/suggestion-results/suggestion-results.twig", 27)->display(twig_to_array(["data" => ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.search.suggestions"), "items" => twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()), "completion", [], "any", false, false, false, 30), "length" => twig_get_attribute($this->env, $this->source,             // line 31
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 31, $this->source); })()), "suggestionsLength", [], "any", false, false, false, 31), "isTitleHiddenOnTablet" => false, "isSuggestion" => true]]));
            // line 36
            echo "                ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["suggestion-links-list", "CatalogPage"]), "@CatalogPage/views/suggestion-results/suggestion-results.twig", 36)->display(twig_to_array(["data" => ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.search.suggestion.in_categories"), "items" => twig_get_attribute($this->env, $this->source,             // line 39
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 39, $this->source); })()), "category", [], "any", false, false, false, 39), "isTitleHiddenOnTablet" => false, "length" => twig_get_attribute($this->env, $this->source,             // line 41
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 41, $this->source); })()), "categoriesLength", [], "any", false, false, false, 41)]]));
            // line 44
            echo "                ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["suggestion-links-list", "CatalogPage"]), "@CatalogPage/views/suggestion-results/suggestion-results.twig", 44)->display(twig_to_array(["data" => ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.search.suggestion.in_cms"), "items" => twig_get_attribute($this->env, $this->source,             // line 47
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "cms_page", [], "any", false, false, false, 47), "isTitleHiddenOnTablet" => false, "length" => twig_get_attribute($this->env, $this->source,             // line 49
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 49, $this->source); })()), "pagesLength", [], "any", false, false, false, 49)]]));
            // line 52
            echo "            </div>
        ";
        }
        // line 54
        echo "

        ";
        // line 56
        if ((isset($context["rightVisible"]) || array_key_exists("rightVisible", $context) ? $context["rightVisible"] : (function () { throw new RuntimeError('Variable "rightVisible" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["colClasses"]) || array_key_exists("colClasses", $context) ? $context["colClasses"] : (function () { throw new RuntimeError('Variable "colClasses" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "\">
                <div class=\"suggest-search__box\">
                    <h6 class=\"suggestion-links-list__title suggestion-links-list__title--bottom-indent\">";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.search.suggestion.in_products"), "html", null, true);
            echo "</h6>
                    ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "product_abstract", [], "any", false, false, false, 60), 0, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), "productsLength", [], "any", false, false, false, 60)));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 61
                echo "                        ";
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["suggestion-product", "CatalogPage"]), "@CatalogPage/views/suggestion-results/suggestion-results.twig", 61)->display(twig_to_array(["class" => "suggest-search__product", "data" => ["product" =>                 // line 64
$context["product"], "url" => ((twig_get_attribute($this->env, $this->source,                 // line 65
$context["product"], "url", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "url", [], "any", false, false, false, 65))) : ("")), "image" => _twig_default_filter(twig_first($this->env, twig_get_attribute($this->env, $this->source,                 // line 66
$context["product"], "images", [], "any", false, false, false, 66))), "alt" => ((twig_get_attribute($this->env, $this->source,                 // line 67
$context["product"], "abstract_name", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "abstract_name", [], "any", false, false, false, 67))) : ("")), "title" => ((twig_get_attribute($this->env, $this->source,                 // line 68
$context["product"], "abstract_name", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "abstract_name", [], "any", false, false, false, 68))) : ("")), "price" => twig_get_attribute($this->env, $this->source,                 // line 69
$context["product"], "price", [], "any", false, false, false, 69), "originalPrice" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 70
$context["product"], "prices", [], "any", false, true, false, 70), "ORIGINAL", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "prices", [], "any", false, true, false, 70), "ORIGINAL", [], "any", false, false, false, 70))) : (""))]]));
                // line 73
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "
                    <div class=\"suggest-search__product-action\">
                        <button type=\"submit\" class=\"button button--hollow\">";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.search.suggestion.see_all_products"), "html", null, true);
            echo "</button>
                    </div>
                </div>
            </div>
        ";
        }
        // line 81
        echo "
        ";
        // line 82
        if (( !(isset($context["leftVisible"]) || array_key_exists("leftVisible", $context) ? $context["leftVisible"] : (function () { throw new RuntimeError('Variable "leftVisible" does not exist.', 82, $this->source); })()) &&  !(isset($context["rightVisible"]) || array_key_exists("rightVisible", $context) ? $context["rightVisible"] : (function () { throw new RuntimeError('Variable "rightVisible" does not exist.', 82, $this->source); })()))) {
            // line 83
            echo "            <div class=\"col text-center\">
                ";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.search.suggestion.no_result"), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 87
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@CatalogPage/views/suggestion-results/suggestion-results.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 87,  150 => 84,  147 => 83,  145 => 82,  142 => 81,  134 => 76,  130 => 74,  124 => 73,  122 => 70,  121 => 69,  120 => 68,  119 => 67,  118 => 66,  117 => 65,  116 => 64,  114 => 61,  110 => 60,  106 => 59,  100 => 57,  98 => 56,  94 => 54,  90 => 52,  88 => 49,  87 => 47,  85 => 44,  83 => 41,  82 => 39,  80 => 36,  78 => 31,  77 => 30,  76 => 27,  71 => 26,  69 => 25,  65 => 23,  62 => 22,  58 => 21,  54 => 1,  52 => 19,  50 => 17,  49 => 16,  48 => 15,  47 => 8,  46 => 7,  45 => 6,  44 => 5,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    completion: completion | default([]),
    suggestionByType: suggestionByType | default,
    category: suggestionByType.category | default([]),
    cms_page: suggestionByType.cms_page | default([]),
    product_abstract: suggestionByType.product_abstract | default([]),
    suggestionsLength: 6,
    categoriesLength: 6,
    pagesLength: 3,
    productsLength: 6
} %}

{% set leftVisible = data.completion is not empty
    or data.category is not empty
    or data.cms_page is not empty %}

{% set rightVisible = data.product_abstract is not empty %}

{% block body %}
    {% set colClasses = is_granted('ROLE_USER') ? 'col col--sm-12 col--md-6 col--xl-6' : 'col col--sm-12 col--md-6 col--lg-12 col--xl-6' %}

    <div class=\"grid grid--gap\">
        {% if leftVisible %}
            <div class=\"{{ colClasses }}\">
                {% include molecule('suggestion-links-list', 'CatalogPage') with {
                    data: {
                        name: 'global.search.suggestions' | trans,
                        items: data.completion,
                        length: data.suggestionsLength,
                        isTitleHiddenOnTablet: false,
                        isSuggestion: true
                    }
                } only %}
                {% include molecule('suggestion-links-list', 'CatalogPage') with {
                    data: {
                        name: 'global.search.suggestion.in_categories' | trans,
                        items: data.category,
                        isTitleHiddenOnTablet: false,
                        length: data.categoriesLength
                    }
                } only %}
                {% include molecule('suggestion-links-list', 'CatalogPage') with {
                    data: {
                        name: 'global.search.suggestion.in_cms' | trans,
                        items: data.cms_page,
                        isTitleHiddenOnTablet: false,
                        length: data.pagesLength
                    }
                } only %}
            </div>
        {% endif %}


        {% if rightVisible %}
            <div class=\"{{ colClasses }}\">
                <div class=\"suggest-search__box\">
                    <h6 class=\"suggestion-links-list__title suggestion-links-list__title--bottom-indent\">{{ 'global.search.suggestion.in_products' | trans }}</h6>
                    {% for product in data.product_abstract | slice(0, data.productsLength)  %}
                        {% include molecule('suggestion-product', 'CatalogPage') with {
                            class: 'suggest-search__product',
                            data: {
                                product: product,
                                url: product.url | default,
                                image: product.images | first | default,
                                alt: product.abstract_name | default,
                                title: product.abstract_name | default,
                                price: product.price,
                                originalPrice: product.prices.ORIGINAL | default
                            }
                        } only %}
                    {% endfor %}

                    <div class=\"suggest-search__product-action\">
                        <button type=\"submit\" class=\"button button--hollow\">{{ 'global.search.suggestion.see_all_products' | trans }}</button>
                    </div>
                </div>
            </div>
        {% endif %}

        {% if not leftVisible and not rightVisible %}
            <div class=\"col text-center\">
                {{ 'global.search.suggestion.no_result' | trans }}
            </div>
        {% endif %}
    </div>
{% endblock %}
", "@CatalogPage/views/suggestion-results/suggestion-results.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/views/suggestion-results/suggestion-results.twig");
    }
}
