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

/* @ProductRelationWidget/templates/similar-products/similar-products.twig */
class __TwigTemplate_14d4f2e3bf9c08014fdd552628a7ecbf2b11774d4e0e58c71880bedb002070ed extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ProductRelationWidget/templates/similar-products/similar-products.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["products" => []], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "products", [], "any", false, false, false, 8))) {
            // line 9
            echo "
        ";
            // line 10
            $this->loadTemplate("@ProductRelationWidget/templates/similar-products/similar-products.twig", "@ProductRelationWidget/templates/similar-products/similar-products.twig", 10, "1686655696")->display(twig_to_array(["modifiers" => [0 => "full-width", 1 => "equal-height", 2 => "products"], "data" => ["slides" => twig_get_attribute($this->env, $this->source,             // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "products", [], "any", false, false, false, 13)], "attributes" => ["slider-config" => "{
                    \"slidesToShow\": 4,
                    \"dots\": false,
                    \"arrows\": true,
                    \"adaptiveHeight\": true,
                    \"responsive\": [{
                        \"breakpoint\": 1024,
                        \"settings\": {
                            \"slidesToShow\": 3
                        }
                    },
                    {
                        \"breakpoint\": 768,
                        \"settings\": {
                            \"slidesToShow\": 2
                        }
                    },
                    {
                        \"breakpoint\": 375,
                        \"settings\": {
                            \"slidesToShow\": 1
                        }
                    }]
                }"]]));
            // line 50
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@ProductRelationWidget/templates/similar-products/similar-products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 50,  58 => 13,  57 => 10,  54 => 9,  51 => 8,  47 => 7,  43 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    products: []
} %}

{% block body %}
    {% if data.products is not empty %}

        {% embed molecule('slick-carousel') with {
            modifiers: ['full-width', 'equal-height', 'products'],
            data: {
                slides: data.products
            },
            attributes: {
                'slider-config': '{
                    \"slidesToShow\": 4,
                    \"dots\": false,
                    \"arrows\": true,
                    \"adaptiveHeight\": true,
                    \"responsive\": [{
                        \"breakpoint\": 1024,
                        \"settings\": {
                            \"slidesToShow\": 3
                        }
                    },
                    {
                        \"breakpoint\": 768,
                        \"settings\": {
                            \"slidesToShow\": 2
                        }
                    },
                    {
                        \"breakpoint\": 375,
                        \"settings\": {
                            \"slidesToShow\": 1
                        }
                    }]
                }'
            }
        } only %}

            {% block slides %}
                {% for slide in data.slides %}
                    {% widget 'PdpProductRelationWidget' args [slide] only %}{% endwidget %}
                {% endfor %}
            {% endblock %}

        {% endembed %}

    {% endif %}
{% endblock %}
", "@ProductRelationWidget/templates/similar-products/similar-products.twig", "/data/src/Pyz/Yves/ProductRelationWidget/Theme/default/templates/similar-products/similar-products.twig");
    }
}


/* @ProductRelationWidget/templates/similar-products/similar-products.twig */
class __TwigTemplate_14d4f2e3bf9c08014fdd552628a7ecbf2b11774d4e0e58c71880bedb002070ed___1686655696 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["slick-carousel"]), "@ProductRelationWidget/templates/similar-products/similar-products.twig", 10);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })()), "slides", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 45
            echo "                    ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("PdpProductRelationWidget", [0 => $context["slide"]])) {
                $this->loadTemplate("@ProductRelationWidget/templates/similar-products/similar-products.twig", "@ProductRelationWidget/templates/similar-products/similar-products.twig", 45, 1738599163)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 46
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@ProductRelationWidget/templates/similar-products/similar-products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 47,  206 => 46,  201 => 45,  196 => 44,  192 => 43,  182 => 10,  83 => 50,  58 => 13,  57 => 10,  54 => 9,  51 => 8,  47 => 7,  43 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    products: []
} %}

{% block body %}
    {% if data.products is not empty %}

        {% embed molecule('slick-carousel') with {
            modifiers: ['full-width', 'equal-height', 'products'],
            data: {
                slides: data.products
            },
            attributes: {
                'slider-config': '{
                    \"slidesToShow\": 4,
                    \"dots\": false,
                    \"arrows\": true,
                    \"adaptiveHeight\": true,
                    \"responsive\": [{
                        \"breakpoint\": 1024,
                        \"settings\": {
                            \"slidesToShow\": 3
                        }
                    },
                    {
                        \"breakpoint\": 768,
                        \"settings\": {
                            \"slidesToShow\": 2
                        }
                    },
                    {
                        \"breakpoint\": 375,
                        \"settings\": {
                            \"slidesToShow\": 1
                        }
                    }]
                }'
            }
        } only %}

            {% block slides %}
                {% for slide in data.slides %}
                    {% widget 'PdpProductRelationWidget' args [slide] only %}{% endwidget %}
                {% endfor %}
            {% endblock %}

        {% endembed %}

    {% endif %}
{% endblock %}
", "@ProductRelationWidget/templates/similar-products/similar-products.twig", "/data/src/Pyz/Yves/ProductRelationWidget/Theme/default/templates/similar-products/similar-products.twig");
    }
}


/* @ProductRelationWidget/templates/similar-products/similar-products.twig */
class __TwigTemplate_14d4f2e3bf9c08014fdd552628a7ecbf2b11774d4e0e58c71880bedb002070ed___1738599163 extends Template
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
        // line 45
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 45, $this->source); })()), "@ProductRelationWidget/templates/similar-products/similar-products.twig", 45);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ProductRelationWidget/templates/similar-products/similar-products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 45,  212 => 47,  206 => 46,  201 => 45,  196 => 44,  192 => 43,  182 => 10,  83 => 50,  58 => 13,  57 => 10,  54 => 9,  51 => 8,  47 => 7,  43 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    products: []
} %}

{% block body %}
    {% if data.products is not empty %}

        {% embed molecule('slick-carousel') with {
            modifiers: ['full-width', 'equal-height', 'products'],
            data: {
                slides: data.products
            },
            attributes: {
                'slider-config': '{
                    \"slidesToShow\": 4,
                    \"dots\": false,
                    \"arrows\": true,
                    \"adaptiveHeight\": true,
                    \"responsive\": [{
                        \"breakpoint\": 1024,
                        \"settings\": {
                            \"slidesToShow\": 3
                        }
                    },
                    {
                        \"breakpoint\": 768,
                        \"settings\": {
                            \"slidesToShow\": 2
                        }
                    },
                    {
                        \"breakpoint\": 375,
                        \"settings\": {
                            \"slidesToShow\": 1
                        }
                    }]
                }'
            }
        } only %}

            {% block slides %}
                {% for slide in data.slides %}
                    {% widget 'PdpProductRelationWidget' args [slide] only %}{% endwidget %}
                {% endfor %}
            {% endblock %}

        {% endembed %}

    {% endif %}
{% endblock %}
", "@ProductRelationWidget/templates/similar-products/similar-products.twig", "/data/src/Pyz/Yves/ProductRelationWidget/Theme/default/templates/similar-products/similar-products.twig");
    }
}
