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

/* @ProductSetListPage/views/set-list/set-list.twig */
class __TwigTemplate_ef6ebcdab46ab7cdd5b93cb7b2239baccf96dd6ff44e700a46fe3904e4e6bb80 extends Template
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
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-main"]), "@ProductSetListPage/views/set-list/set-list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["sets" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "productSets", [], "any", false, false, false, 4), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.sets")], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "sets", [], "any", false, false, false, 10))) {
            // line 11
            echo "        <div class=\"grid grid--gap spacing-y spacing-y--inner spacing-y--biggest\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "sets", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["productSet"]) {
                // line 13
                echo "                ";
                $context["imageUrl"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productSet"], "imageSets", [], "any", false, true, false, 13), 0, [], "any", false, true, false, 13), "images", [], "any", false, true, false, 13), 0, [], "any", false, true, false, 13), "externalUrlSmall", [], "any", true, true, false, 13)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productSet"], "imageSets", [], "any", false, true, false, 13), 0, [], "any", false, true, false, 13), "images", [], "any", false, true, false, 13), 0, [], "any", false, true, false, 13), "externalUrlSmall", [], "any", false, false, false, 13), "")) : (""));
                // line 14
                echo "
                <div class=\"col col--sm-12 col--lg-4 text-center\">
                    ";
                // line 16
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-set-card", "ProductSetListPage"]), "@ProductSetListPage/views/set-list/set-list.twig", 16)->display(twig_to_array(["class" => "spacing-bottom spacing-bottom--bigger", "data" => ["name" => twig_get_attribute($this->env, $this->source,                 // line 19
$context["productSet"], "name", [], "any", false, false, false, 19), "url" => twig_get_attribute($this->env, $this->source,                 // line 20
$context["productSet"], "url", [], "any", false, false, false, 20), "imageUrl" =>                 // line 21
(isset($context["imageUrl"]) || array_key_exists("imageUrl", $context) ? $context["imageUrl"] : (function () { throw new RuntimeError('Variable "imageUrl" does not exist.', 21, $this->source); })())]]));
                // line 24
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productSet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </div>
    ";
        } else {
            // line 28
            echo "        <div class=\"box\">
            <p>
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product.sets.no-results"), "html", null, true);
            echo "
            </p>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@ProductSetListPage/views/set-list/set-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  85 => 28,  81 => 26,  74 => 24,  72 => 21,  71 => 20,  70 => 19,  69 => 16,  65 => 14,  62 => 13,  58 => 12,  55 => 11,  52 => 10,  48 => 9,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    sets: _view.productSets,

    title: 'product.sets' | trans
} %}

{% block content %}
    {% if data.sets is not empty %}
        <div class=\"grid grid--gap spacing-y spacing-y--inner spacing-y--biggest\">
            {% for productSet in data.sets %}
                {% set imageUrl = productSet.imageSets.0.images.0.externalUrlSmall | default('') %}

                <div class=\"col col--sm-12 col--lg-4 text-center\">
                    {% include molecule('product-set-card', 'ProductSetListPage') with {
                        class: 'spacing-bottom spacing-bottom--bigger',
                        data: {
                            name: productSet.name,
                            url: productSet.url,
                            imageUrl: imageUrl
                        }
                    } only %}
                </div>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"box\">
            <p>
                {{ 'product.sets.no-results' | trans }}
            </p>
        </div>
    {% endif %}
{% endblock %}
", "@ProductSetListPage/views/set-list/set-list.twig", "/data/src/Pyz/Yves/ProductSetListPage/Theme/default/views/set-list/set-list.twig");
    }
}
