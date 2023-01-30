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

/* @ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig */
class __TwigTemplate_bdb5f9df2ee969ad72bd2f095c6b86e540a32e608ecd6c43851303a7d8115ed7 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["product-replacement-for-list", "@SprykerShop:ProductReplacementForWidget"]), "@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 1);
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
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "products", [], "any", false, false, false, 4))) {
            // line 5
            echo "        <div class=\"product-replacement\">
            <h2 class=\"product-replacement__title title title--h4\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("replacement_for_widget.replacement_for"), "html", null, true);
            echo "
            </h2>

            ";
            // line 10
            $this->loadTemplate("@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 10, "1002092634")->display(twig_to_array(["modifiers" => [0 => "full-width", 1 => "equal-height", 2 => "products", 3 => "full-height"], "data" => ["slides" => twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "products", [], "any", false, false, false, 13)], "attributes" => ["slider-config" => "{
                        \"slidesToShow\": 4,
                        \"dots\": false,
                        \"arrows\": true,
                        \"adaptiveHeight\": true
                    }"]]));
            // line 30
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 30,  63 => 13,  62 => 10,  56 => 7,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('product-replacement-for-list', '@SprykerShop:ProductReplacementForWidget') %}

{% block body %}
    {% if data.products is not empty %}
        <div class=\"product-replacement\">
            <h2 class=\"product-replacement__title title title--h4\">
                {{ 'replacement_for_widget.replacement_for' | trans }}
            </h2>

            {% embed molecule('slick-carousel') with {
                modifiers: ['full-width', 'equal-height', 'products', 'full-height'],
                data: {
                    slides: data.products,
                },
                attributes: {
                    'slider-config': '{
                        \"slidesToShow\": 4,
                        \"dots\": false,
                        \"arrows\": true,
                        \"adaptiveHeight\": true
                    }',
                },
            } only %}
                {% block slides %}
                    {% for slide in data.slides %}
                        {% widget 'PdpProductReplacementForListWidget' args [slide] only %}{% endwidget %}
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>
    {% endif %}
{% endblock %}
", "@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "/data/src/Pyz/Yves/ProductReplacementForWidget/Theme/default/views/product-replacement-for-list/product-replacement-for-list.twig");
    }
}


/* @ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig */
class __TwigTemplate_bdb5f9df2ee969ad72bd2f095c6b86e540a32e608ecd6c43851303a7d8115ed7___1002092634 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'slides' => [$this, 'block_slides'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 10
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["slick-carousel"]), "@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 10);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "slides", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 26
            echo "                        ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("PdpProductReplacementForListWidget", [0 => $context["slide"]])) {
                $this->loadTemplate("@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 26, 1301791903)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 27
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 28,  173 => 27,  168 => 26,  163 => 25,  159 => 24,  149 => 10,  70 => 30,  63 => 13,  62 => 10,  56 => 7,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('product-replacement-for-list', '@SprykerShop:ProductReplacementForWidget') %}

{% block body %}
    {% if data.products is not empty %}
        <div class=\"product-replacement\">
            <h2 class=\"product-replacement__title title title--h4\">
                {{ 'replacement_for_widget.replacement_for' | trans }}
            </h2>

            {% embed molecule('slick-carousel') with {
                modifiers: ['full-width', 'equal-height', 'products', 'full-height'],
                data: {
                    slides: data.products,
                },
                attributes: {
                    'slider-config': '{
                        \"slidesToShow\": 4,
                        \"dots\": false,
                        \"arrows\": true,
                        \"adaptiveHeight\": true
                    }',
                },
            } only %}
                {% block slides %}
                    {% for slide in data.slides %}
                        {% widget 'PdpProductReplacementForListWidget' args [slide] only %}{% endwidget %}
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>
    {% endif %}
{% endblock %}
", "@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "/data/src/Pyz/Yves/ProductReplacementForWidget/Theme/default/views/product-replacement-for-list/product-replacement-for-list.twig");
    }
}


/* @ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig */
class __TwigTemplate_bdb5f9df2ee969ad72bd2f095c6b86e540a32e608ecd6c43851303a7d8115ed7___1301791903 extends Template
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
        // line 26
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 26, $this->source); })()), "@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 26);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 26,  179 => 28,  173 => 27,  168 => 26,  163 => 25,  159 => 24,  149 => 10,  70 => 30,  63 => 13,  62 => 10,  56 => 7,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('product-replacement-for-list', '@SprykerShop:ProductReplacementForWidget') %}

{% block body %}
    {% if data.products is not empty %}
        <div class=\"product-replacement\">
            <h2 class=\"product-replacement__title title title--h4\">
                {{ 'replacement_for_widget.replacement_for' | trans }}
            </h2>

            {% embed molecule('slick-carousel') with {
                modifiers: ['full-width', 'equal-height', 'products', 'full-height'],
                data: {
                    slides: data.products,
                },
                attributes: {
                    'slider-config': '{
                        \"slidesToShow\": 4,
                        \"dots\": false,
                        \"arrows\": true,
                        \"adaptiveHeight\": true
                    }',
                },
            } only %}
                {% block slides %}
                    {% for slide in data.slides %}
                        {% widget 'PdpProductReplacementForListWidget' args [slide] only %}{% endwidget %}
                    {% endfor %}
                {% endblock %}
            {% endembed %}
        </div>
    {% endif %}
{% endblock %}
", "@ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "/data/src/Pyz/Yves/ProductReplacementForWidget/Theme/default/views/product-replacement-for-list/product-replacement-for-list.twig");
    }
}
