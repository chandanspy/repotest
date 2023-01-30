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

/* @CatalogPage/components/molecules/filter-rating/filter-rating.twig */
class __TwigTemplate_a82bbc8177a99d85c17cd868ca4065c61bbb0df13e33b271310eafff98a03312 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@CatalogPage/components/molecules/filter-rating/filter-rating.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "filter-rating"], $context['config']);        // line 7
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["filter" =>         // line 8
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 8, $this->source); })()), "request" => twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9)], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <h3 class=\"title--h6\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.filter." . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "filter", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13)))), "html", null, true);
        echo "</h3>

    ";
        // line 15
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductRatingFilterWidget", [0 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "filter", [], "any", false, false, false, 15), 1 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15)])) {
            $this->loadTemplate("@CatalogPage/components/molecules/filter-rating/filter-rating.twig", "@CatalogPage/components/molecules/filter-rating/filter-rating.twig", 15, 995181948)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        } elseif ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductRatingFilterWidgetPlugin", [0 => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "filter", [], "any", false, false, false, 16), 1 => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16)])) {
            $this->loadTemplate("@CatalogPage/components/molecules/filter-rating/filter-rating.twig", "@CatalogPage/components/molecules/filter-rating/filter-rating.twig", 15, 2081280319)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/filter-rating/filter-rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  60 => 15,  54 => 13,  50 => 12,  46 => 1,  45 => 9,  44 => 8,  43 => 7,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'filter-rating',
} %}

{% define data = {
    filter: required,
    request: app.request,
} %}

{% block body %}
    <h3 class=\"title--h6\">{{ ('product.filter.' ~ data.filter.name | lower) | trans }}</h3>

    {% widget 'ProductRatingFilterWidget' args [data.filter, data.request] only %}
    {% elsewidget 'ProductRatingFilterWidgetPlugin' args [data.filter, data.request] only %} {# @deprecated Use ProductRatingFilterWidget instead. #}
    {% endwidget %}
{% endblock %}
", "@CatalogPage/components/molecules/filter-rating/filter-rating.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/filter-rating/filter-rating.twig");
    }
}


/* @CatalogPage/components/molecules/filter-rating/filter-rating.twig */
class __TwigTemplate_a82bbc8177a99d85c17cd868ca4065c61bbb0df13e33b271310eafff98a03312___995181948 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 15, $this->source); })()), "@CatalogPage/components/molecules/filter-rating/filter-rating.twig", 15);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/filter-rating/filter-rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 15,  64 => 16,  60 => 15,  54 => 13,  50 => 12,  46 => 1,  45 => 9,  44 => 8,  43 => 7,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'filter-rating',
} %}

{% define data = {
    filter: required,
    request: app.request,
} %}

{% block body %}
    <h3 class=\"title--h6\">{{ ('product.filter.' ~ data.filter.name | lower) | trans }}</h3>

    {% widget 'ProductRatingFilterWidget' args [data.filter, data.request] only %}
    {% elsewidget 'ProductRatingFilterWidgetPlugin' args [data.filter, data.request] only %} {# @deprecated Use ProductRatingFilterWidget instead. #}
    {% endwidget %}
{% endblock %}
", "@CatalogPage/components/molecules/filter-rating/filter-rating.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/filter-rating/filter-rating.twig");
    }
}


/* @CatalogPage/components/molecules/filter-rating/filter-rating.twig */
class __TwigTemplate_a82bbc8177a99d85c17cd868ca4065c61bbb0df13e33b271310eafff98a03312___2081280319 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 15, $this->source); })()), "@CatalogPage/components/molecules/filter-rating/filter-rating.twig", 15);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/filter-rating/filter-rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 15,  64 => 16,  60 => 15,  54 => 13,  50 => 12,  46 => 1,  45 => 9,  44 => 8,  43 => 7,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'filter-rating',
} %}

{% define data = {
    filter: required,
    request: app.request,
} %}

{% block body %}
    <h3 class=\"title--h6\">{{ ('product.filter.' ~ data.filter.name | lower) | trans }}</h3>

    {% widget 'ProductRatingFilterWidget' args [data.filter, data.request] only %}
    {% elsewidget 'ProductRatingFilterWidgetPlugin' args [data.filter, data.request] only %} {# @deprecated Use ProductRatingFilterWidget instead. #}
    {% endwidget %}
{% endblock %}
", "@CatalogPage/components/molecules/filter-rating/filter-rating.twig", "/data/vendor/spryker-shop/catalog-page/src/SprykerShop/Yves/CatalogPage/Theme/default/components/molecules/filter-rating/filter-rating.twig");
    }
}
