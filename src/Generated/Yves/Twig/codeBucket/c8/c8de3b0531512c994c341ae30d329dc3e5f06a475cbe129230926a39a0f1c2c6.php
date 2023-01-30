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

/* @ShopUi/components/organisms/footer/footer.twig */
class __TwigTemplate_c3395c963f9844bd99a5f2f5572666adc66c81dd79926977a11b5a442f1f15e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'subscribe' => [$this, 'block_subscribe'],
            'logos' => [$this, 'block_logos'],
            'logosInner' => [$this, 'block_logosInner'],
            'navigation' => [$this, 'block_navigation'],
            'navigationInner' => [$this, 'block_navigationInner'],
            'social' => [$this, 'block_social'],
            'socialLinks' => [$this, 'block_socialLinks'],
            'copyright' => [$this, 'block_copyright'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/organisms/footer/footer.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "footer", "tag" => "footer"], $context['config']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('subscribe', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('logos', $context, $blocks);
        // line 42
        echo "
    ";
        // line 43
        $this->displayBlock('navigation', $context, $blocks);
        // line 124
        echo "
    ";
        // line 125
        $this->displayBlock('copyright', $context, $blocks);
    }

    // line 10
    public function block_subscribe($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        <div class=\"container ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "__subscribe\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newsletter/subscribe"));
        echo "
        </div>
    ";
    }

    // line 16
    public function block_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "        <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "__logos\">
            ";
        // line 18
        $this->displayBlock('logosInner', $context, $blocks);
        // line 40
        echo "        </div>
    ";
    }

    // line 18
    public function block_logosInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                ";
        $context["categoryPaymentProviders"] = "PAYMENT_PROVIDERS";
        // line 20
        echo "
                ";
        // line 21
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["navigation-footer-item"]), "@ShopUi/components/organisms/footer/footer.twig", 21)->display(twig_to_array(["modifiers" => [0 => "footer-logo"], "class" => "container", "data" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.payment_shipping"), "category" =>         // line 26
(isset($context["categoryPaymentProviders"]) || array_key_exists("categoryPaymentProviders", $context) ? $context["categoryPaymentProviders"] : (function () { throw new RuntimeError('Variable "categoryPaymentProviders" does not exist.', 26, $this->source); })()), "template" => "navigation-providers-payment", "toggleClass" => ((twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "jsName", [], "any", false, false, false, 28) . "-") . (isset($context["categoryPaymentProviders"]) || array_key_exists("categoryPaymentProviders", $context) ? $context["categoryPaymentProviders"] : (function () { throw new RuntimeError('Variable "categoryPaymentProviders" does not exist.', 28, $this->source); })()))]]));
        // line 31
        echo "
                ";
        // line 32
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-accordion"]), "@ShopUi/components/organisms/footer/footer.twig", 32)->display(twig_to_array(["attributes" => ["wrap-class-name" => ((twig_get_attribute($this->env, $this->source,         // line 34
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "jsName", [], "any", false, false, false, 34) . "-") . (isset($context["categoryPaymentProviders"]) || array_key_exists("categoryPaymentProviders", $context) ? $context["categoryPaymentProviders"] : (function () { throw new RuntimeError('Variable "categoryPaymentProviders" does not exist.', 34, $this->source); })())), "trigger-class-name" => (((twig_get_attribute($this->env, $this->source,         // line 35
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "jsName", [], "any", false, false, false, 35) . "-") . (isset($context["categoryPaymentProviders"]) || array_key_exists("categoryPaymentProviders", $context) ? $context["categoryPaymentProviders"] : (function () { throw new RuntimeError('Variable "categoryPaymentProviders" does not exist.', 35, $this->source); })())) . "__trigger"), "class-to-toggle" => "is-hidden-sm-only"]]));
        // line 39
        echo "            ";
    }

    // line 43
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "        <div class=\"container\">
            <div class=\"grid grid--gap ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
        echo "__navigation\">
                <div class=\"col col--sm-12 col--lg-9\">
                    ";
        // line 47
        $this->displayBlock('navigationInner', $context, $blocks);
        // line 68
        echo "                </div>

                <div class=\"col col--sm-12 col--lg-3 ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70), "html", null, true);
        echo "__contact-info\">
                    <h5 class=\"title title--footer\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.contact_us"), "html", null, true);
        echo "</h5>

                    ";
        // line 73
        $context["phoneNumberTranslation"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.phone.number");
        // line 74
        echo "
                    <a class=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, false, 75), "html", null, true);
        echo "__contact-info-item ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, false, 75), "html", null, true);
        echo "__phone\" href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["phoneNumberTranslation"]) || array_key_exists("phoneNumberTranslation", $context) ? $context["phoneNumberTranslation"] : (function () { throw new RuntimeError('Variable "phoneNumberTranslation" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "\">
                        ";
        // line 76
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/organisms/footer/footer.twig", 76)->display(twig_to_array(["modifiers" => [0 => "contact"], "data" => ["name" => "cell-phone"]]));
        // line 82
        echo "                        ";
        echo twig_escape_filter($this->env, (isset($context["phoneNumberTranslation"]) || array_key_exists("phoneNumberTranslation", $context) ? $context["phoneNumberTranslation"] : (function () { throw new RuntimeError('Variable "phoneNumberTranslation" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "
                    </a>

                    ";
        // line 85
        $context["emailTranslation"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.email.text");
        // line 86
        echo "
                    <a class=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 87, $this->source); })()), "name", [], "any", false, false, false, 87), "html", null, true);
        echo "__contact-info-item\" href=\"mailto:";
        echo twig_escape_filter($this->env, (isset($context["emailTranslation"]) || array_key_exists("emailTranslation", $context) ? $context["emailTranslation"] : (function () { throw new RuntimeError('Variable "emailTranslation" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "\">
                        ";
        // line 88
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/organisms/footer/footer.twig", 88)->display(twig_to_array(["modifiers" => [0 => "contact"], "data" => ["name" => "email"]]));
        // line 94
        echo "                        ";
        echo twig_escape_filter($this->env, (isset($context["emailTranslation"]) || array_key_exists("emailTranslation", $context) ? $context["emailTranslation"] : (function () { throw new RuntimeError('Variable "emailTranslation" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "
                    </a>
                </div>
            </div>

            ";
        // line 99
        $this->displayBlock('social', $context, $blocks);
        // line 122
        echo "        </div>
    ";
    }

    // line 47
    public function block_navigationInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                        ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["navigation-footer"]), "@ShopUi/components/organisms/footer/footer.twig", 48)->display(twig_to_array(["class" => "grid grid--gap", "data" => ["items" => [0 => ["category" => "FOOTER_NAVIGATION_TOP_CATEGORIES", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.top_categories")], 1 => ["category" => "FOOTER_NAVIGATION_POPULAR_BRANDS", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.popular_brands")], 2 => ["category" => "FOOTER_NAVIGATION", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.about")]]]]));
        // line 67
        echo "                    ";
    }

    // line 99
    public function block_social($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "                <div class=\"grid grid--gap grid--middle ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 100, $this->source); })()), "name", [], "any", false, false, false, 100), "html", null, true);
        echo "__social-buttons\">
                    <div class=\"col col--sm-12 col--md-7 col--lg-9\">
                        <div class=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 102, $this->source); })()), "name", [], "any", false, false, false, 102), "html", null, true);
        echo "__hint\">
                            * ";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.hint"), "html", null, true);
        echo "
                        </div>
                        <div class=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 105, $this->source); })()), "name", [], "any", false, false, false, 105), "html", null, true);
        echo "__thanks-certeo\">
                            ";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.thank_certeo"), "html", null, true);
        echo "
                        </div>
                    </div>

                    ";
        // line 110
        $this->displayBlock('socialLinks', $context, $blocks);
        // line 120
        echo "                </div>
            ";
    }

    // line 110
    public function block_socialLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "                        ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["navigation-footer-item"]), "@ShopUi/components/organisms/footer/footer.twig", 111)->display(twig_to_array(["modifiers" => [0 => "social"], "class" => "col col--sm-12 col--md-5 col--lg-3", "data" => ["category" => "SOCIAL_LINKS", "template" => "navigation-social"]]));
        // line 119
        echo "                    ";
    }

    // line 125
    public function block_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "        <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 126, $this->source); })()), "name", [], "any", false, false, false, 126), "html", null, true);
        echo "__copyright\">
            ";
        // line 127
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["copyright-build-with"]), "@ShopUi/components/organisms/footer/footer.twig", 127)->display(twig_to_array(["class" => "container"]));
        // line 130
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/footer/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 130,  284 => 127,  279 => 126,  275 => 125,  271 => 119,  268 => 111,  264 => 110,  259 => 120,  257 => 110,  250 => 106,  246 => 105,  241 => 103,  237 => 102,  231 => 100,  227 => 99,  223 => 67,  220 => 48,  216 => 47,  211 => 122,  209 => 99,  200 => 94,  198 => 88,  192 => 87,  189 => 86,  187 => 85,  180 => 82,  178 => 76,  170 => 75,  167 => 74,  165 => 73,  160 => 71,  156 => 70,  152 => 68,  150 => 47,  145 => 45,  142 => 44,  138 => 43,  134 => 39,  132 => 35,  131 => 34,  130 => 32,  127 => 31,  125 => 28,  124 => 26,  123 => 21,  120 => 20,  117 => 19,  113 => 18,  108 => 40,  106 => 18,  101 => 17,  97 => 16,  90 => 12,  85 => 11,  81 => 10,  77 => 125,  74 => 124,  72 => 43,  69 => 42,  67 => 16,  64 => 15,  62 => 10,  59 => 9,  55 => 8,  51 => 1,  50 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'footer',
    tag: 'footer'
} %}

{% block body %}

    {% block subscribe %}
        <div class=\"container {{ config.name }}__subscribe\">
            {{ render(path('newsletter/subscribe')) }}
        </div>
    {% endblock %}

    {% block logos %}
        <div class=\"{{ config.name }}__logos\">
            {% block logosInner %}
                {% set categoryPaymentProviders = 'PAYMENT_PROVIDERS' %}

                {% include molecule('navigation-footer-item') with {
                    modifiers: ['footer-logo'],
                    class: 'container',
                    data: {
                        title: 'global.payment_shipping' | trans,
                        category: categoryPaymentProviders,
                        template: 'navigation-providers-payment',
                        toggleClass: config.jsName ~ '-' ~ categoryPaymentProviders,
                    },
                } only %}

                {% include molecule('toggler-accordion') with {
                    attributes: {
                        'wrap-class-name': config.jsName ~ '-' ~ categoryPaymentProviders,
                        'trigger-class-name': config.jsName ~ '-' ~ categoryPaymentProviders ~ '__trigger',
                        'class-to-toggle': 'is-hidden-sm-only',
                    },
                } only %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block navigation %}
        <div class=\"container\">
            <div class=\"grid grid--gap {{ config.name }}__navigation\">
                <div class=\"col col--sm-12 col--lg-9\">
                    {% block navigationInner %}
                        {% include molecule('navigation-footer') with {
                            class: 'grid grid--gap',
                            data: {
                                items: [
                                    {
                                        category: 'FOOTER_NAVIGATION_TOP_CATEGORIES',
                                        title: 'global.top_categories' | trans,
                                    },
                                    {
                                        category: 'FOOTER_NAVIGATION_POPULAR_BRANDS',
                                        title: 'global.popular_brands' | trans,
                                    },
                                    {
                                        category: 'FOOTER_NAVIGATION',
                                        title: 'global.about' | trans,
                                    },
                                ],
                            },
                        } only %}
                    {% endblock %}
                </div>

                <div class=\"col col--sm-12 col--lg-3 {{ config.name }}__contact-info\">
                    <h5 class=\"title title--footer\">{{ 'global.contact_us' | trans }}</h5>

                    {% set phoneNumberTranslation = 'global.phone.number' | trans %}

                    <a class=\"{{ config.name }}__contact-info-item {{ config.name }}__phone\" href=\"tel:{{ phoneNumberTranslation }}\">
                        {% include atom('icon') with {
                            modifiers: ['contact'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                        {{ phoneNumberTranslation }}
                    </a>

                    {% set emailTranslation = 'global.email.text' | trans %}

                    <a class=\"{{ config.name }}__contact-info-item\" href=\"mailto:{{ emailTranslation }}\">
                        {% include atom('icon') with {
                            modifiers: ['contact'],
                            data: {
                                name: 'email',
                            },
                        } only %}
                        {{ emailTranslation }}
                    </a>
                </div>
            </div>

            {% block social %}
                <div class=\"grid grid--gap grid--middle {{ config.name }}__social-buttons\">
                    <div class=\"col col--sm-12 col--md-7 col--lg-9\">
                        <div class=\"{{ config.name }}__hint\">
                            * {{ 'global.hint' | trans }}
                        </div>
                        <div class=\"{{ config.name }}__thanks-certeo\">
                            {{ 'global.thank_certeo' | trans }}
                        </div>
                    </div>

                    {% block socialLinks %}
                        {% include molecule('navigation-footer-item') with {
                            modifiers: ['social'],
                            class: 'col col--sm-12 col--md-5 col--lg-3',
                            data: {
                                category: 'SOCIAL_LINKS',
                                template: 'navigation-social',
                            },
                        } only %}
                    {% endblock %}
                </div>
            {% endblock %}
        </div>
    {% endblock %}

    {% block copyright %}
        <div class=\"{{ config.name }}__copyright\">
            {% include molecule('copyright-build-with') with {
                class: 'container'
            } only %}
        </div>
    {% endblock %}
{% endblock %}
", "@ShopUi/components/organisms/footer/footer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/footer/footer.twig");
    }
}
