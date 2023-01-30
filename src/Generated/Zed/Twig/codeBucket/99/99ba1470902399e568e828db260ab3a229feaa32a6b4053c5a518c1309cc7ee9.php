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

/* @ProductManagement/View/_partials/info-categories.twig */
class __TwigTemplate_69bf301996f8701a221c4cc90fc4f375f643b7000c2997c2d403e25ba32572b3 extends Template
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
        $this->loadTemplate("@ProductManagement/View/_partials/info-categories.twig", "@ProductManagement/View/_partials/info-categories.twig", 1, "687650139")->display(twig_array_merge($context, ["widget_title" => "Categories"]));
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Categories' } %}
    {% block widget_content %}
        {% if categories is empty %}
            <p>{{ 'No categories found.' | trans }}</p>
        {% endif %}
        <ul>
        {% for category in categories %}
            <li class=\"active\">#{{ category.idCategory }}: <a href=\"/product-category/assign?id-category={{ category.idCategory }}\">{{ category.name }}</a></li>
        {% endfor %}
        </ul>
    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-categories.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-categories.twig");
    }
}


/* @ProductManagement/View/_partials/info-categories.twig */
class __TwigTemplate_69bf301996f8701a221c4cc90fc4f375f643b7000c2997c2d403e25ba32572b3___687650139 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductManagement/View/_partials/info-categories.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        if (twig_test_empty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No categories found."), "html", null, true);
            echo "</p>
        ";
        }
        // line 6
        echo "        <ul>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "            <li class=\"active\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idCategory", [], "any", false, false, false, 8), "html", null, true);
            echo ": <a href=\"/product-category/assign?id-category=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "idCategory", [], "any", false, false, false, 8), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </ul>
    ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 10,  124 => 8,  120 => 7,  117 => 6,  111 => 4,  108 => 3,  104 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Categories' } %}
    {% block widget_content %}
        {% if categories is empty %}
            <p>{{ 'No categories found.' | trans }}</p>
        {% endif %}
        <ul>
        {% for category in categories %}
            <li class=\"active\">#{{ category.idCategory }}: <a href=\"/product-category/assign?id-category={{ category.idCategory }}\">{{ category.name }}</a></li>
        {% endfor %}
        </ul>
    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-categories.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-categories.twig");
    }
}
