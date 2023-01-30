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

/* @ShopUi/components/organisms/header/header.twig */
class __TwigTemplate_2a647a83d1219c5580ec5e9c95a293f0ca75ebab06e3ced2d2df8dfc6a6dbacf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'headerMainContent' => [$this, 'block_headerMainContent'],
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/organisms/header/header.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["component"] = $this->macros["component"] = $this;
        // line 4
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "header", "tag" => "header"], $context['config']);        // line 9
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["showSearchForm" => true, "showNavigation" => true, "user" => twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "array", false, false, false, 12), "showUserMenu" =>  !((        // line 13
array_key_exists("hideUserMenu", $context)) ? (_twig_default_filter((isset($context["hideUserMenu"]) || array_key_exists("hideUserMenu", $context) ? $context["hideUserMenu"] : (function () { throw new RuntimeError('Variable "hideUserMenu" does not exist.', 13, $this->source); })()), false)) : (false))], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <div class=\"";
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17) . "__top"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 17, $this->source); })())], 17, $context, $this->getSourceContext());
        echo "\">
        ";
        // line 18
        $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["navigation-top"]), "@ShopUi/components/organisms/header/header.twig", 18)->display(twig_to_array(["class" => "grid grid--justify grid--stretch container"]));
        // line 21
        echo "    </div>

    <div class=\"";
        // line 23
        echo twig_call_macro($macros["component"], "macro_renderClass", [(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23) . "__main"), (isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 23, $this->source); })())], 23, $context, $this->getSourceContext());
        echo "\">
        ";
        // line 24
        $this->displayBlock('headerMainContent', $context, $blocks);
        // line 139
        echo "    </div>

    ";
        // line 141
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 141, $this->source); })()), "showNavigation", [], "any", false, false, false, 141)) {
            // line 142
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 142, $this->source); })()), "name", [], "any", false, false, false, 142), "html", null, true);
            echo "__navigation\">
            <div class=\"container\">
                ";
            // line 144
            $this->displayBlock('navigation', $context, $blocks);
            // line 147
            echo "            </div>
        </div>
    ";
        }
        // line 150
        echo "
    ";
        // line 151
        $context["triggerClassList"] = [0 => (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 151, $this->source); })()), "jsName", [], "any", false, false, false, 151) . "__actions-search-trigger"), 1 => "js-overlay-block"];
        // line 152
        echo "
    ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["triggerClassList"]) || array_key_exists("triggerClassList", $context) ? $context["triggerClassList"] : (function () { throw new RuntimeError('Variable "triggerClassList" does not exist.', 153, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["triggerClass"]) {
            // line 154
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-click"]), "@ShopUi/components/organisms/header/header.twig", 154)->display(twig_to_array(["attributes" => ["trigger-class-name" =>             // line 156
$context["triggerClass"], "target-class-name" => (twig_get_attribute($this->env, $this->source,             // line 157
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 157, $this->source); })()), "jsName", [], "any", false, false, false, 157) . "__search-form"), "class-to-toggle" => "search-form--active"]]));
            // line 161
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['triggerClass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
    ";
        // line 163
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["overlay-enabler"]), "@ShopUi/components/organisms/header/header.twig", 163)->display(twig_to_array(["attributes" => ["trigger-class-name" => (twig_get_attribute($this->env, $this->source,         // line 165
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 165, $this->source); })()), "jsName", [], "any", false, false, false, 165) . "__actions-search-trigger")]]));
    }

    // line 24
    public function block_headerMainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "            <div class=\"grid grid--middle container\">
                <div class=\"col ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "__actions\">
                    <div class=\"grid\">
                        <div class=\"col ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 28, $this->source); })()), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "__actions-item\">
                            <button class=\"link link--alternative js-page-layout-main__side-drawer-trigger\">
                                ";
        // line 30
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/organisms/header/header.twig", 30)->display(twig_to_array(["data" => ["name" => "bars"]]));
        // line 35
        echo "                            </button>
                        </div>
                        <div class=\"col ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
        echo "__actions-item header__actions-item--search\">
                            <button class=\"link link--alternative ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 38, $this->source); })()), "jsName", [], "any", false, false, false, 38), "html", null, true);
        echo "__actions-search-trigger\">
                                ";
        // line 39
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/organisms/header/header.twig", 39)->display(twig_to_array(["modifiers" => [0 => "big"], "data" => ["name" => "search"]]));
        // line 45
        echo "                            </button>
                        </div>
                    </div>
                </div>

                ";
        // line 50
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["logo"]), "@ShopUi/components/organisms/header/header.twig", 50)->display(twig_to_array(["class" => (("col " . twig_get_attribute($this->env, $this->source,         // line 51
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51)) . "__logo"), "modifiers" => [0 => "main"]]));
        // line 54
        echo "
                <div class=\"col ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), "html", null, true);
        echo "__search\">
                    ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "showSearchForm", [], "any", false, false, false, 56)) {
            // line 57
            echo "                        ";
            $this->loadTemplate("@ShopUi/components/organisms/header/header.twig", "@ShopUi/components/organisms/header/header.twig", 57, "698665790")->display(twig_to_array(["class" => (((twig_get_attribute($this->env, $this->source,             // line 58
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58) . "__search-form ") . twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "jsName", [], "any", false, false, false, 58)) . "__search-form"), "modifiers" => [0 => "main-search"], "attributes" => ["data-search-id" => "desktop"], "embed" => ["jsTriggerSearchClass" => (twig_get_attribute($this->env, $this->source,             // line 64
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 64, $this->source); })()), "jsName", [], "any", false, false, false, 64) . "__actions-search-trigger")]]));
            // line 71
            echo "                    ";
        }
        // line 72
        echo "                </div>

                ";
        // line 74
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 75
            echo "                    ";
            $context["businessOnBehalfStatusWidget"] = call_user_func_array($this->env->getFunction('findWidget')->getCallable(), ["BusinessOnBehalfStatusWidget", [0 => ""]]);
            // line 76
            echo "                    ";
            $context["isUserOnBehalf"] = twig_get_attribute($this->env, $this->source, (isset($context["businessOnBehalfStatusWidget"]) || array_key_exists("businessOnBehalfStatusWidget", $context) ? $context["businessOnBehalfStatusWidget"] : (function () { throw new RuntimeError('Variable "businessOnBehalfStatusWidget" does not exist.', 76, $this->source); })()), "isOnBehalf", [], "any", false, false, false, 76);
            // line 77
            echo "
                    <div class=\"col col--right ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 78, $this->source); })()), "name", [], "any", false, false, false, 78), "html", null, true);
            echo "__user\">
                        <div class=\"grid grid--gap\">
                            ";
            // line 80
            if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeeCompanyMenuPermissionPlugin")) {
                // line 81
                echo "                                <div class=\"col\">
                                    <button
                                        class=\"link link--alternative js-page-layout-main__company-account-navigation-trigger\">
                                        ";
                // line 84
                $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/organisms/header/header.twig", 84)->display(twig_to_array(["modifiers" => [0 => "big"], "data" => ["name" => "office"]]));
                // line 90
                echo "                                    </button>
                                </div>
                            ";
            } else {
                // line 93
                echo "                                ";
                if ((isset($context["isUserOnBehalf"]) || array_key_exists("isUserOnBehalf", $context) ? $context["isUserOnBehalf"] : (function () { throw new RuntimeError('Variable "isUserOnBehalf" does not exist.', 93, $this->source); })())) {
                    // line 94
                    echo "                                    <div class=\"col\">
                                        <a href=\"";
                    // line 95
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company/user/select");
                    echo "\" class=\"link link--alternative\">
                                            ";
                    // line 96
                    $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/organisms/header/header.twig", 96)->display(twig_to_array(["modifiers" => [0 => "big"], "data" => ["name" => "office"]]));
                    // line 102
                    echo "                                        </a>
                                    </div>
                                ";
                }
                // line 105
                echo "                            ";
            }
            // line 106
            echo "                            <div class=\"col\">
                                <button
                                    class=\"link link--alternative js-page-layout-main__user-account-navigation-trigger\">
                                    ";
            // line 109
            $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/organisms/header/header.twig", 109)->display(twig_to_array(["modifiers" => [0 => "big"], "data" => ["name" => "user"]]));
            // line 115
            echo "                                </button>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 120
        echo "
                <div
                    class=\"col col--right ";
        // line 122
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 122, $this->source); })()), "name", [], "any", false, false, false, 122), "html", null, true);
            echo "__user-nav ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 122, $this->source); })()), "name", [], "any", false, false, false, 122), "html", null, true);
            echo "__login-wrap ";
        }
        echo "\">
                    ";
        // line 123
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 123, $this->source); })()), "showUserMenu", [], "any", false, false, false, 123)) {
            // line 124
            echo "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 125
                echo "                            ";
                $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["user-navigation"]), "@ShopUi/components/organisms/header/header.twig", 125)->display(twig_to_array(["data" => ["user" => twig_get_attribute($this->env, $this->source,                 // line 127
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), "cartQuantity" =>                 // line 128
(isset($context["cartQuantity"]) || array_key_exists("cartQuantity", $context) ? $context["cartQuantity"] : (function () { throw new RuntimeError('Variable "cartQuantity" does not exist.', 128, $this->source); })())]]));
                // line 131
                echo "                        ";
            } else {
                // line 132
                echo "                            <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
                echo "\"
                               class=\"button button--tight button--medium ";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 133, $this->source); })()), "name", [], "any", false, false, false, 133), "html", null, true);
                echo "__login\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.please_login"), "html", null, true);
                echo "</a>
                        ";
            }
            // line 135
            echo "                    ";
        }
        // line 136
        echo "                </div>
            </div>
        ";
    }

    // line 144
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 145
        echo "                    ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("NavigationWidget", [0 => "MAIN_NAVIGATION", 1 => "navigation-main"])) {
            $this->loadTemplate("@ShopUi/components/organisms/header/header.twig", "@ShopUi/components/organisms/header/header.twig", 145, 539104754)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 146
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/header/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 146,  307 => 145,  303 => 144,  297 => 136,  294 => 135,  287 => 133,  282 => 132,  279 => 131,  277 => 128,  276 => 127,  274 => 125,  271 => 124,  269 => 123,  257 => 122,  253 => 120,  246 => 115,  244 => 109,  239 => 106,  236 => 105,  231 => 102,  229 => 96,  225 => 95,  222 => 94,  219 => 93,  214 => 90,  212 => 84,  207 => 81,  205 => 80,  200 => 78,  197 => 77,  194 => 76,  191 => 75,  189 => 74,  185 => 72,  182 => 71,  180 => 64,  179 => 58,  177 => 57,  175 => 56,  171 => 55,  168 => 54,  166 => 51,  165 => 50,  158 => 45,  156 => 39,  152 => 38,  148 => 37,  144 => 35,  142 => 30,  137 => 28,  132 => 26,  129 => 25,  125 => 24,  121 => 165,  120 => 163,  117 => 162,  111 => 161,  109 => 157,  108 => 156,  106 => 154,  102 => 153,  99 => 152,  97 => 151,  94 => 150,  89 => 147,  87 => 144,  81 => 142,  79 => 141,  75 => 139,  73 => 24,  69 => 23,  65 => 21,  63 => 18,  58 => 17,  54 => 16,  50 => 1,  49 => 13,  48 => 12,  47 => 9,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'header',
    tag: 'header',
} %}

{% define data = {
    showSearchForm: true,
    showNavigation: true,
    user: app['user'],
    showUserMenu: not (hideUserMenu | default(false)),
} %}

{% block body %}
    <div class=\"{{ component.renderClass(config.name ~ '__top', modifiers) }}\">
        {% include organism('navigation-top') with {
            class: 'grid grid--justify grid--stretch container',
        } only %}
    </div>

    <div class=\"{{ component.renderClass(config.name ~ '__main', modifiers) }}\">
        {% block headerMainContent %}
            <div class=\"grid grid--middle container\">
                <div class=\"col {{ config.name }}__actions\">
                    <div class=\"grid\">
                        <div class=\"col {{ config.name }}__actions-item\">
                            <button class=\"link link--alternative js-page-layout-main__side-drawer-trigger\">
                                {% include atom('icon') with {
                                    data: {
                                        name: 'bars',
                                    },
                                } only %}
                            </button>
                        </div>
                        <div class=\"col {{ config.name }}__actions-item header__actions-item--search\">
                            <button class=\"link link--alternative {{ config.jsName }}__actions-search-trigger\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'search',
                                    },
                                } only %}
                            </button>
                        </div>
                    </div>
                </div>

                {% include molecule('logo') with {
                    class: 'col ' ~  config.name ~ '__logo',
                    modifiers: ['main'],
                } only %}

                <div class=\"col {{ config.name }}__search\">
                    {% if data.showSearchForm %}
                        {% embed molecule('search-form') with {
                            class: config.name ~ '__search-form ' ~ config.jsName ~ '__search-form',
                            modifiers: ['main-search'],
                            attributes: {
                                'data-search-id': 'desktop',
                            },
                            embed: {
                                jsTriggerSearchClass: config.jsName ~ '__actions-search-trigger',
                            },
                        } only %}
                            {% block close %}
                                {{ embed.jsTriggerSearchClass }}
                            {% endblock %}
                        {% endembed %}
                    {% endif %}
                </div>

                {% if is_granted('ROLE_USER') %}
                    {% set businessOnBehalfStatusWidget = findWidget('BusinessOnBehalfStatusWidget', ['']) %}
                    {% set isUserOnBehalf = businessOnBehalfStatusWidget.isOnBehalf %}

                    <div class=\"col col--right {{ config.name }}__user\">
                        <div class=\"grid grid--gap\">
                            {% if can('SeeCompanyMenuPermissionPlugin') %}
                                <div class=\"col\">
                                    <button
                                        class=\"link link--alternative js-page-layout-main__company-account-navigation-trigger\">
                                        {% include atom('icon') with {
                                            modifiers: ['big'],
                                            data: {
                                                name: 'office',
                                            },
                                        } only %}
                                    </button>
                                </div>
                            {% else %}
                                {% if isUserOnBehalf %}
                                    <div class=\"col\">
                                        <a href=\"{{ path('company/user/select') }}\" class=\"link link--alternative\">
                                            {% include atom('icon') with {
                                                modifiers: ['big'],
                                                data: {
                                                    name: 'office',
                                                },
                                            } only %}
                                        </a>
                                    </div>
                                {% endif %}
                            {% endif %}
                            <div class=\"col\">
                                <button
                                    class=\"link link--alternative js-page-layout-main__user-account-navigation-trigger\">
                                    {% include atom('icon') with {
                                        modifiers: ['big'],
                                        data: {
                                            name: 'user',
                                        },
                                    } only %}
                                </button>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <div
                    class=\"col col--right {% if is_granted('ROLE_USER') %} {{ config.name }}__user-nav {% else %} {{ config.name }}__login-wrap {% endif %}\">
                    {% if data.showUserMenu %}
                        {% if is_granted('ROLE_USER') %}
                            {% include molecule('user-navigation') with {
                                data: {
                                    user: data.user,
                                    cartQuantity: cartQuantity,
                                },
                            } only %}
                        {% else %}
                            <a href=\"{{ url('login') }}\"
                               class=\"button button--tight button--medium {{ config.name }}__login\">{{ 'customer.please_login'|trans }}</a>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
        {% endblock %}
    </div>

    {% if data.showNavigation %}
        <div class=\"{{ config.name }}__navigation\">
            <div class=\"container\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>
        </div>
    {% endif %}

    {% set triggerClassList = [config.jsName ~ '__actions-search-trigger', 'js-overlay-block'] %}

    {% for triggerClass in triggerClassList %}
        {% include molecule('toggler-click') with {
            attributes: {
                'trigger-class-name': triggerClass,
                'target-class-name': config.jsName ~ '__search-form',
                'class-to-toggle': 'search-form--active',
            },
        } only %}
    {% endfor %}

    {% include molecule('overlay-enabler') with {
        attributes: {
            'trigger-class-name': config.jsName ~ '__actions-search-trigger',
        },
    } only %}
{% endblock %}
", "@ShopUi/components/organisms/header/header.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/header/header.twig");
    }
}


/* @ShopUi/components/organisms/header/header.twig */
class __TwigTemplate_2a647a83d1219c5580ec5e9c95a293f0ca75ebab06e3ced2d2df8dfc6a6dbacf___698665790 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'close' => [$this, 'block_close'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 57
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["search-form"]), "@ShopUi/components/organisms/header/header.twig", 57);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 67
    public function block_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "                                ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 68, $this->source); })()), "jsTriggerSearchClass", [], "any", false, false, false, 68), "html", null, true);
        echo "
                            ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/header/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  539 => 68,  535 => 67,  525 => 57,  312 => 146,  307 => 145,  303 => 144,  297 => 136,  294 => 135,  287 => 133,  282 => 132,  279 => 131,  277 => 128,  276 => 127,  274 => 125,  271 => 124,  269 => 123,  257 => 122,  253 => 120,  246 => 115,  244 => 109,  239 => 106,  236 => 105,  231 => 102,  229 => 96,  225 => 95,  222 => 94,  219 => 93,  214 => 90,  212 => 84,  207 => 81,  205 => 80,  200 => 78,  197 => 77,  194 => 76,  191 => 75,  189 => 74,  185 => 72,  182 => 71,  180 => 64,  179 => 58,  177 => 57,  175 => 56,  171 => 55,  168 => 54,  166 => 51,  165 => 50,  158 => 45,  156 => 39,  152 => 38,  148 => 37,  144 => 35,  142 => 30,  137 => 28,  132 => 26,  129 => 25,  125 => 24,  121 => 165,  120 => 163,  117 => 162,  111 => 161,  109 => 157,  108 => 156,  106 => 154,  102 => 153,  99 => 152,  97 => 151,  94 => 150,  89 => 147,  87 => 144,  81 => 142,  79 => 141,  75 => 139,  73 => 24,  69 => 23,  65 => 21,  63 => 18,  58 => 17,  54 => 16,  50 => 1,  49 => 13,  48 => 12,  47 => 9,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'header',
    tag: 'header',
} %}

{% define data = {
    showSearchForm: true,
    showNavigation: true,
    user: app['user'],
    showUserMenu: not (hideUserMenu | default(false)),
} %}

{% block body %}
    <div class=\"{{ component.renderClass(config.name ~ '__top', modifiers) }}\">
        {% include organism('navigation-top') with {
            class: 'grid grid--justify grid--stretch container',
        } only %}
    </div>

    <div class=\"{{ component.renderClass(config.name ~ '__main', modifiers) }}\">
        {% block headerMainContent %}
            <div class=\"grid grid--middle container\">
                <div class=\"col {{ config.name }}__actions\">
                    <div class=\"grid\">
                        <div class=\"col {{ config.name }}__actions-item\">
                            <button class=\"link link--alternative js-page-layout-main__side-drawer-trigger\">
                                {% include atom('icon') with {
                                    data: {
                                        name: 'bars',
                                    },
                                } only %}
                            </button>
                        </div>
                        <div class=\"col {{ config.name }}__actions-item header__actions-item--search\">
                            <button class=\"link link--alternative {{ config.jsName }}__actions-search-trigger\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'search',
                                    },
                                } only %}
                            </button>
                        </div>
                    </div>
                </div>

                {% include molecule('logo') with {
                    class: 'col ' ~  config.name ~ '__logo',
                    modifiers: ['main'],
                } only %}

                <div class=\"col {{ config.name }}__search\">
                    {% if data.showSearchForm %}
                        {% embed molecule('search-form') with {
                            class: config.name ~ '__search-form ' ~ config.jsName ~ '__search-form',
                            modifiers: ['main-search'],
                            attributes: {
                                'data-search-id': 'desktop',
                            },
                            embed: {
                                jsTriggerSearchClass: config.jsName ~ '__actions-search-trigger',
                            },
                        } only %}
                            {% block close %}
                                {{ embed.jsTriggerSearchClass }}
                            {% endblock %}
                        {% endembed %}
                    {% endif %}
                </div>

                {% if is_granted('ROLE_USER') %}
                    {% set businessOnBehalfStatusWidget = findWidget('BusinessOnBehalfStatusWidget', ['']) %}
                    {% set isUserOnBehalf = businessOnBehalfStatusWidget.isOnBehalf %}

                    <div class=\"col col--right {{ config.name }}__user\">
                        <div class=\"grid grid--gap\">
                            {% if can('SeeCompanyMenuPermissionPlugin') %}
                                <div class=\"col\">
                                    <button
                                        class=\"link link--alternative js-page-layout-main__company-account-navigation-trigger\">
                                        {% include atom('icon') with {
                                            modifiers: ['big'],
                                            data: {
                                                name: 'office',
                                            },
                                        } only %}
                                    </button>
                                </div>
                            {% else %}
                                {% if isUserOnBehalf %}
                                    <div class=\"col\">
                                        <a href=\"{{ path('company/user/select') }}\" class=\"link link--alternative\">
                                            {% include atom('icon') with {
                                                modifiers: ['big'],
                                                data: {
                                                    name: 'office',
                                                },
                                            } only %}
                                        </a>
                                    </div>
                                {% endif %}
                            {% endif %}
                            <div class=\"col\">
                                <button
                                    class=\"link link--alternative js-page-layout-main__user-account-navigation-trigger\">
                                    {% include atom('icon') with {
                                        modifiers: ['big'],
                                        data: {
                                            name: 'user',
                                        },
                                    } only %}
                                </button>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <div
                    class=\"col col--right {% if is_granted('ROLE_USER') %} {{ config.name }}__user-nav {% else %} {{ config.name }}__login-wrap {% endif %}\">
                    {% if data.showUserMenu %}
                        {% if is_granted('ROLE_USER') %}
                            {% include molecule('user-navigation') with {
                                data: {
                                    user: data.user,
                                    cartQuantity: cartQuantity,
                                },
                            } only %}
                        {% else %}
                            <a href=\"{{ url('login') }}\"
                               class=\"button button--tight button--medium {{ config.name }}__login\">{{ 'customer.please_login'|trans }}</a>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
        {% endblock %}
    </div>

    {% if data.showNavigation %}
        <div class=\"{{ config.name }}__navigation\">
            <div class=\"container\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>
        </div>
    {% endif %}

    {% set triggerClassList = [config.jsName ~ '__actions-search-trigger', 'js-overlay-block'] %}

    {% for triggerClass in triggerClassList %}
        {% include molecule('toggler-click') with {
            attributes: {
                'trigger-class-name': triggerClass,
                'target-class-name': config.jsName ~ '__search-form',
                'class-to-toggle': 'search-form--active',
            },
        } only %}
    {% endfor %}

    {% include molecule('overlay-enabler') with {
        attributes: {
            'trigger-class-name': config.jsName ~ '__actions-search-trigger',
        },
    } only %}
{% endblock %}
", "@ShopUi/components/organisms/header/header.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/header/header.twig");
    }
}


/* @ShopUi/components/organisms/header/header.twig */
class __TwigTemplate_2a647a83d1219c5580ec5e9c95a293f0ca75ebab06e3ced2d2df8dfc6a6dbacf___539104754 extends Template
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
        // line 145
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 145, $this->source); })()), "@ShopUi/components/organisms/header/header.twig", 145);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/header/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  754 => 145,  539 => 68,  535 => 67,  525 => 57,  312 => 146,  307 => 145,  303 => 144,  297 => 136,  294 => 135,  287 => 133,  282 => 132,  279 => 131,  277 => 128,  276 => 127,  274 => 125,  271 => 124,  269 => 123,  257 => 122,  253 => 120,  246 => 115,  244 => 109,  239 => 106,  236 => 105,  231 => 102,  229 => 96,  225 => 95,  222 => 94,  219 => 93,  214 => 90,  212 => 84,  207 => 81,  205 => 80,  200 => 78,  197 => 77,  194 => 76,  191 => 75,  189 => 74,  185 => 72,  182 => 71,  180 => 64,  179 => 58,  177 => 57,  175 => 56,  171 => 55,  168 => 54,  166 => 51,  165 => 50,  158 => 45,  156 => 39,  152 => 38,  148 => 37,  144 => 35,  142 => 30,  137 => 28,  132 => 26,  129 => 25,  125 => 24,  121 => 165,  120 => 163,  117 => 162,  111 => 161,  109 => 157,  108 => 156,  106 => 154,  102 => 153,  99 => 152,  97 => 151,  94 => 150,  89 => 147,  87 => 144,  81 => 142,  79 => 141,  75 => 139,  73 => 24,  69 => 23,  65 => 21,  63 => 18,  58 => 17,  54 => 16,  50 => 1,  49 => 13,  48 => 12,  47 => 9,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}
{% import _self as component %}

{% define config = {
    name: 'header',
    tag: 'header',
} %}

{% define data = {
    showSearchForm: true,
    showNavigation: true,
    user: app['user'],
    showUserMenu: not (hideUserMenu | default(false)),
} %}

{% block body %}
    <div class=\"{{ component.renderClass(config.name ~ '__top', modifiers) }}\">
        {% include organism('navigation-top') with {
            class: 'grid grid--justify grid--stretch container',
        } only %}
    </div>

    <div class=\"{{ component.renderClass(config.name ~ '__main', modifiers) }}\">
        {% block headerMainContent %}
            <div class=\"grid grid--middle container\">
                <div class=\"col {{ config.name }}__actions\">
                    <div class=\"grid\">
                        <div class=\"col {{ config.name }}__actions-item\">
                            <button class=\"link link--alternative js-page-layout-main__side-drawer-trigger\">
                                {% include atom('icon') with {
                                    data: {
                                        name: 'bars',
                                    },
                                } only %}
                            </button>
                        </div>
                        <div class=\"col {{ config.name }}__actions-item header__actions-item--search\">
                            <button class=\"link link--alternative {{ config.jsName }}__actions-search-trigger\">
                                {% include atom('icon') with {
                                    modifiers: ['big'],
                                    data: {
                                        name: 'search',
                                    },
                                } only %}
                            </button>
                        </div>
                    </div>
                </div>

                {% include molecule('logo') with {
                    class: 'col ' ~  config.name ~ '__logo',
                    modifiers: ['main'],
                } only %}

                <div class=\"col {{ config.name }}__search\">
                    {% if data.showSearchForm %}
                        {% embed molecule('search-form') with {
                            class: config.name ~ '__search-form ' ~ config.jsName ~ '__search-form',
                            modifiers: ['main-search'],
                            attributes: {
                                'data-search-id': 'desktop',
                            },
                            embed: {
                                jsTriggerSearchClass: config.jsName ~ '__actions-search-trigger',
                            },
                        } only %}
                            {% block close %}
                                {{ embed.jsTriggerSearchClass }}
                            {% endblock %}
                        {% endembed %}
                    {% endif %}
                </div>

                {% if is_granted('ROLE_USER') %}
                    {% set businessOnBehalfStatusWidget = findWidget('BusinessOnBehalfStatusWidget', ['']) %}
                    {% set isUserOnBehalf = businessOnBehalfStatusWidget.isOnBehalf %}

                    <div class=\"col col--right {{ config.name }}__user\">
                        <div class=\"grid grid--gap\">
                            {% if can('SeeCompanyMenuPermissionPlugin') %}
                                <div class=\"col\">
                                    <button
                                        class=\"link link--alternative js-page-layout-main__company-account-navigation-trigger\">
                                        {% include atom('icon') with {
                                            modifiers: ['big'],
                                            data: {
                                                name: 'office',
                                            },
                                        } only %}
                                    </button>
                                </div>
                            {% else %}
                                {% if isUserOnBehalf %}
                                    <div class=\"col\">
                                        <a href=\"{{ path('company/user/select') }}\" class=\"link link--alternative\">
                                            {% include atom('icon') with {
                                                modifiers: ['big'],
                                                data: {
                                                    name: 'office',
                                                },
                                            } only %}
                                        </a>
                                    </div>
                                {% endif %}
                            {% endif %}
                            <div class=\"col\">
                                <button
                                    class=\"link link--alternative js-page-layout-main__user-account-navigation-trigger\">
                                    {% include atom('icon') with {
                                        modifiers: ['big'],
                                        data: {
                                            name: 'user',
                                        },
                                    } only %}
                                </button>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <div
                    class=\"col col--right {% if is_granted('ROLE_USER') %} {{ config.name }}__user-nav {% else %} {{ config.name }}__login-wrap {% endif %}\">
                    {% if data.showUserMenu %}
                        {% if is_granted('ROLE_USER') %}
                            {% include molecule('user-navigation') with {
                                data: {
                                    user: data.user,
                                    cartQuantity: cartQuantity,
                                },
                            } only %}
                        {% else %}
                            <a href=\"{{ url('login') }}\"
                               class=\"button button--tight button--medium {{ config.name }}__login\">{{ 'customer.please_login'|trans }}</a>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
        {% endblock %}
    </div>

    {% if data.showNavigation %}
        <div class=\"{{ config.name }}__navigation\">
            <div class=\"container\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>
        </div>
    {% endif %}

    {% set triggerClassList = [config.jsName ~ '__actions-search-trigger', 'js-overlay-block'] %}

    {% for triggerClass in triggerClassList %}
        {% include molecule('toggler-click') with {
            attributes: {
                'trigger-class-name': triggerClass,
                'target-class-name': config.jsName ~ '__search-form',
                'class-to-toggle': 'search-form--active',
            },
        } only %}
    {% endfor %}

    {% include molecule('overlay-enabler') with {
        attributes: {
            'trigger-class-name': config.jsName ~ '__actions-search-trigger',
        },
    } only %}
{% endblock %}
", "@ShopUi/components/organisms/header/header.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/header/header.twig");
    }
}
