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

/* @ProductListGui/_partials/button-collection.twig */
class __TwigTemplate_28640dfdb1ae4bc00856be727db5cbc5e2b956987bd1404c0180799505b4e48a extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["buttonCollection"]) || array_key_exists("buttonCollection", $context) ? $context["buttonCollection"] : (function () { throw new RuntimeError('Variable "buttonCollection" does not exist.', 1, $this->source); })()), "getButtons", [], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 2
            echo "    ";
            $this->loadTemplate("@ProductListGui/_partials/button.twig", "@ProductListGui/_partials/button-collection.twig", 2)->display(twig_to_array(["url" => ((twig_get_attribute($this->env, $this->source,             // line 3
$context["button"], "url", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 3))) : ("")), "title" => ((twig_get_attribute($this->env, $this->source,             // line 4
$context["button"], "title", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 4))) : ("")), "class" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 5
$context["button"], "defaultOptions", [], "any", false, true, false, 5), "class", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["button"], "defaultOptions", [], "any", false, true, false, 5), "class", [], "any", false, false, false, 5))) : ("")), "iconClass" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 6
$context["button"], "defaultOptions", [], "any", false, true, false, 6), "iconClass", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["button"], "defaultOptions", [], "any", false, true, false, 6), "iconClass", [], "any", false, false, false, 6))) : (""))]));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@ProductListGui/_partials/button-collection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  45 => 5,  44 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for button in buttonCollection.getButtons() %}
    {% include '@ProductListGui/_partials/button.twig' with {
        url: button.url | default,
        title: button.title | default,
        class: button.defaultOptions.class | default,
        iconClass: button.defaultOptions.iconClass| default,
    } only %}
{% endfor %}
", "@ProductListGui/_partials/button-collection.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//_partials/button-collection.twig");
    }
}
