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

/* @@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig */
class __TwigTemplate_dfd9a57ec3f9bc536662090e7a39caeb5ce82fd7c3414d583ebe5f98c48013bf extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["products" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_widget"]) || array_key_exists("_widget", $context) ? $context["_widget"] : (function () { throw new RuntimeError('Variable "_widget" does not exist.', 4, $this->source); })()), "products", [], "any", false, false, false, 4)], $context['data']);        // line 1
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
            echo "        <div class=\"spacing-y--big\">
            <h2 class=\"title title--h5 spacing-x\">";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("replacement_for_widget.replacement_for"), "html", null, true);
            echo "</h2>
        ";
            // line 11
            $this->loadTemplate("@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 11, "900146555")->display(twig_to_array(["modifiers" => [0 => "inset"], "class" => "is-hidden-sm-md", "data" => ["slides" => twig_get_attribute($this->env, $this->source,             // line 15
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "products", [], "any", false, false, false, 15), "showDots" => false], "attributes" => ["slides-to-show" => 4]]));
            // line 28
            echo "
        ";
            // line 29
            $this->loadTemplate("@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 29, "1845483772")->display(twig_to_array(["class" => "is-hidden-lg-xl", "data" => ["slides" => twig_get_attribute($this->env, $this->source,             // line 32
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 32, $this->source); })()), "products", [], "any", false, false, false, 32), "showDots" => false], "attributes" => ["slides-to-show" => 1]]));
            // line 45
            echo "        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 45,  69 => 32,  68 => 29,  65 => 28,  63 => 15,  62 => 11,  58 => 10,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    products: _widget.products
} %}

{% block body %}
    {% if data.products is not empty %}
        <div class=\"spacing-y--big\">
            <h2 class=\"title title--h5 spacing-x\">{{ 'replacement_for_widget.replacement_for' | trans }}</h2>
        {% embed molecule('simple-carousel') with {
            modifiers: ['inset'],
            class: 'is-hidden-sm-md',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 4
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}

        {% embed molecule('simple-carousel') with {
            class: 'is-hidden-lg-xl',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 1
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}
        </div>
    {% endif %}
{% endblock %}
", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "/data/vendor/spryker-shop/product-replacement-for-widget/src/SprykerShop/Yves/ProductReplacementForWidget/Theme/default/views/product-replacement-for-list/product-replacement-for-list.twig");
    }
}


/* @@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig */
class __TwigTemplate_dfd9a57ec3f9bc536662090e7a39caeb5ce82fd7c3414d583ebe5f98c48013bf___900146555 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'slide' => [$this, 'block_slide'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["simple-carousel"]), "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_slide($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("PdpProductReplacementForListWidget", [0 => (isset($context["slide"]) || array_key_exists("slide", $context) ? $context["slide"] : (function () { throw new RuntimeError('Variable "slide" does not exist.', 23, $this->source); })())])) {
            $this->loadTemplate("@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 23, 1122143559)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        } elseif ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductWidgetPlugin", [0 =>         // line 24
(isset($context["slide"]) || array_key_exists("slide", $context) ? $context["slide"] : (function () { throw new RuntimeError('Variable "slide" does not exist.', 24, $this->source); })())])) {
            $this->loadTemplate("@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 23, 1613941724)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 26
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 26,  184 => 24,  179 => 23,  175 => 22,  165 => 11,  71 => 45,  69 => 32,  68 => 29,  65 => 28,  63 => 15,  62 => 11,  58 => 10,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    products: _widget.products
} %}

{% block body %}
    {% if data.products is not empty %}
        <div class=\"spacing-y--big\">
            <h2 class=\"title title--h5 spacing-x\">{{ 'replacement_for_widget.replacement_for' | trans }}</h2>
        {% embed molecule('simple-carousel') with {
            modifiers: ['inset'],
            class: 'is-hidden-sm-md',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 4
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}

        {% embed molecule('simple-carousel') with {
            class: 'is-hidden-lg-xl',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 1
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}
        </div>
    {% endif %}
{% endblock %}
", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "/data/vendor/spryker-shop/product-replacement-for-widget/src/SprykerShop/Yves/ProductReplacementForWidget/Theme/default/views/product-replacement-for-list/product-replacement-for-list.twig");
    }
}


/* @@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig */
class __TwigTemplate_dfd9a57ec3f9bc536662090e7a39caeb5ce82fd7c3414d583ebe5f98c48013bf___1122143559 extends Template
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
        // line 23
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 23, $this->source); })()), "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 23);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 23,  188 => 26,  184 => 24,  179 => 23,  175 => 22,  165 => 11,  71 => 45,  69 => 32,  68 => 29,  65 => 28,  63 => 15,  62 => 11,  58 => 10,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    products: _widget.products
} %}

{% block body %}
    {% if data.products is not empty %}
        <div class=\"spacing-y--big\">
            <h2 class=\"title title--h5 spacing-x\">{{ 'replacement_for_widget.replacement_for' | trans }}</h2>
        {% embed molecule('simple-carousel') with {
            modifiers: ['inset'],
            class: 'is-hidden-sm-md',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 4
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}

        {% embed molecule('simple-carousel') with {
            class: 'is-hidden-lg-xl',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 1
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}
        </div>
    {% endif %}
{% endblock %}
", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "/data/vendor/spryker-shop/product-replacement-for-widget/src/SprykerShop/Yves/ProductReplacementForWidget/Theme/default/views/product-replacement-for-list/product-replacement-for-list.twig");
    }
}


/* @@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig */
class __TwigTemplate_dfd9a57ec3f9bc536662090e7a39caeb5ce82fd7c3414d583ebe5f98c48013bf___1613941724 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 23, $this->source); })()), "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 23);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 23,  188 => 26,  184 => 24,  179 => 23,  175 => 22,  165 => 11,  71 => 45,  69 => 32,  68 => 29,  65 => 28,  63 => 15,  62 => 11,  58 => 10,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    products: _widget.products
} %}

{% block body %}
    {% if data.products is not empty %}
        <div class=\"spacing-y--big\">
            <h2 class=\"title title--h5 spacing-x\">{{ 'replacement_for_widget.replacement_for' | trans }}</h2>
        {% embed molecule('simple-carousel') with {
            modifiers: ['inset'],
            class: 'is-hidden-sm-md',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 4
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}

        {% embed molecule('simple-carousel') with {
            class: 'is-hidden-lg-xl',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 1
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}
        </div>
    {% endif %}
{% endblock %}
", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "/data/vendor/spryker-shop/product-replacement-for-widget/src/SprykerShop/Yves/ProductReplacementForWidget/Theme/default/views/product-replacement-for-list/product-replacement-for-list.twig");
    }
}


/* @@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig */
class __TwigTemplate_dfd9a57ec3f9bc536662090e7a39caeb5ce82fd7c3414d583ebe5f98c48013bf___1845483772 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'slide' => [$this, 'block_slide'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 29
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["simple-carousel"]), "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 29);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_slide($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("PdpProductReplacementForListWidget", [0 => (isset($context["slide"]) || array_key_exists("slide", $context) ? $context["slide"] : (function () { throw new RuntimeError('Variable "slide" does not exist.', 40, $this->source); })())])) {
            $this->loadTemplate("@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 40, 2132583040)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        } elseif ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("ProductWidgetPlugin", [0 =>         // line 41
(isset($context["slide"]) || array_key_exists("slide", $context) ? $context["slide"] : (function () { throw new RuntimeError('Variable "slide" does not exist.', 41, $this->source); })())])) {
            $this->loadTemplate("@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 40, 914554666)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 43
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 43,  492 => 41,  487 => 40,  483 => 39,  473 => 29,  279 => 23,  188 => 26,  184 => 24,  179 => 23,  175 => 22,  165 => 11,  71 => 45,  69 => 32,  68 => 29,  65 => 28,  63 => 15,  62 => 11,  58 => 10,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    products: _widget.products
} %}

{% block body %}
    {% if data.products is not empty %}
        <div class=\"spacing-y--big\">
            <h2 class=\"title title--h5 spacing-x\">{{ 'replacement_for_widget.replacement_for' | trans }}</h2>
        {% embed molecule('simple-carousel') with {
            modifiers: ['inset'],
            class: 'is-hidden-sm-md',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 4
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}

        {% embed molecule('simple-carousel') with {
            class: 'is-hidden-lg-xl',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 1
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}
        </div>
    {% endif %}
{% endblock %}
", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "/data/vendor/spryker-shop/product-replacement-for-widget/src/SprykerShop/Yves/ProductReplacementForWidget/Theme/default/views/product-replacement-for-list/product-replacement-for-list.twig");
    }
}


/* @@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig */
class __TwigTemplate_dfd9a57ec3f9bc536662090e7a39caeb5ce82fd7c3414d583ebe5f98c48013bf___2132583040 extends Template
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
        // line 40
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 40, $this->source); })()), "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 40);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 40,  496 => 43,  492 => 41,  487 => 40,  483 => 39,  473 => 29,  279 => 23,  188 => 26,  184 => 24,  179 => 23,  175 => 22,  165 => 11,  71 => 45,  69 => 32,  68 => 29,  65 => 28,  63 => 15,  62 => 11,  58 => 10,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    products: _widget.products
} %}

{% block body %}
    {% if data.products is not empty %}
        <div class=\"spacing-y--big\">
            <h2 class=\"title title--h5 spacing-x\">{{ 'replacement_for_widget.replacement_for' | trans }}</h2>
        {% embed molecule('simple-carousel') with {
            modifiers: ['inset'],
            class: 'is-hidden-sm-md',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 4
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}

        {% embed molecule('simple-carousel') with {
            class: 'is-hidden-lg-xl',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 1
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}
        </div>
    {% endif %}
{% endblock %}
", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "/data/vendor/spryker-shop/product-replacement-for-widget/src/SprykerShop/Yves/ProductReplacementForWidget/Theme/default/views/product-replacement-for-list/product-replacement-for-list.twig");
    }
}


/* @@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig */
class __TwigTemplate_dfd9a57ec3f9bc536662090e7a39caeb5ce82fd7c3414d583ebe5f98c48013bf___914554666 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 40, $this->source); })()), "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", 40);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 40,  496 => 43,  492 => 41,  487 => 40,  483 => 39,  473 => 29,  279 => 23,  188 => 26,  184 => 24,  179 => 23,  175 => 22,  165 => 11,  71 => 45,  69 => 32,  68 => 29,  65 => 28,  63 => 15,  62 => 11,  58 => 10,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    products: _widget.products
} %}

{% block body %}
    {% if data.products is not empty %}
        <div class=\"spacing-y--big\">
            <h2 class=\"title title--h5 spacing-x\">{{ 'replacement_for_widget.replacement_for' | trans }}</h2>
        {% embed molecule('simple-carousel') with {
            modifiers: ['inset'],
            class: 'is-hidden-sm-md',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 4
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}

        {% embed molecule('simple-carousel') with {
            class: 'is-hidden-lg-xl',
            data: {
                slides: data.products,
                showDots: false
            },
            attributes: {
                'slides-to-show': 1
            }
        } only %}
            {% block slide %}
                {% widget 'PdpProductReplacementForListWidget' args [slide] only %}
                {% elsewidget 'ProductWidgetPlugin' args [slide] only %} {# @deprecated Use PdpProductReplacementForListWidget instead. #}
                {% endwidget %}
            {% endblock %}
        {% endembed %}
        </div>
    {% endif %}
{% endblock %}
", "@@SprykerShop:ProductReplacementForWidget/views/product-replacement-for-list/product-replacement-for-list.twig", "/data/vendor/spryker-shop/product-replacement-for-widget/src/SprykerShop/Yves/ProductReplacementForWidget/Theme/default/views/product-replacement-for-list/product-replacement-for-list.twig");
    }
}
