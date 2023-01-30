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

/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_b6e7f940b132e80f5c2dace7756457bc67e6f8d55960a01f194c944a78d6c98b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'close' => [$this, 'block_close'],
            'topBlock' => [$this, 'block_topBlock'],
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "side-drawer", "tag" => "side-drawer"], $context['config']);        // line 8
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["trigger-class-name" =>         // line 9
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })()), "container-class-name" => "", "locked-body-class-name" => "is-locked-tablet"], $context['attributes']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "__overlay ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 15, $this->source); })()), "trigger-class-name", [], "array", false, false, false, 15), "html", null, true);
        echo "\"></div>

    <aside class=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "__drawer ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "__drawer--logged";
        }
        echo "\">
        ";
        // line 18
        $this->displayBlock('close', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('topBlock', $context, $blocks);
        // line 50
        echo "
        <div class=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), "html", null, true);
        echo "__holder\">
            <div class=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true);
        echo "__navigation\">
                ";
        // line 53
        $this->displayBlock('navigation', $context, $blocks);
        // line 56
        echo "            </div>

            <div class=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), "html", null, true);
        echo "__info\">
                <a href=\"tel:";
        // line 59
        echo twig_escape_filter($this->env, twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.phone.number"), [" " => ""]), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 59, $this->source); })()), "name", [], "any", false, false, false, 59), "html", null, true);
        echo "__contact\">
                    <span class=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60), "html", null, true);
        echo "__contact-icon\">
                        ";
        // line 61
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 61)->display(twig_to_array(["modifiers" => [0 => "bigger"], "data" => ["name" => "cell-phone"]]));
        // line 67
        echo "                    </span>
                    <span class=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68), "html", null, true);
        echo "__contact-text ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68), "html", null, true);
        echo "__contact-text--weight\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.contact_us"), "html", null, true);
        echo ":</span>
                    <span class=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), "html", null, true);
        echo "__contact-text\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.phone.number"), "html", null, true);
        echo "</span>
                </a>
                ";
        // line 71
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 72
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("logout");
            echo "\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.logout"), "html", null, true);
            echo "</a>
                ";
        }
        // line 74
        echo "            </div>
        </div>
    </aside>
";
    }

    // line 18
    public function block_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            <button class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "__close ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 19, $this->source); })()), "trigger-class-name", [], "array", false, false, false, 19), "html", null, true);
        echo "\">
                ";
        // line 20
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 20)->display(twig_to_array(["data" => ["name" => "cross"]]));
        // line 25
        echo "            </button>
        ";
    }

    // line 28
    public function block_topBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            <div class=\"grid grid--gap-smaller ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "__navigation-top\">
                ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 31
            echo "                    <div class=\"col col--sm-5 ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "__navigation-top-actions\">
                        ";
            // line 32
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("PriceModeSwitcherWidget")) {
                $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 32, 382347679)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 33
            echo "                    </div>
                    <div class=\"col col--sm-4 ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "__navigation-top-actions\">
                        ";
            // line 35
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CurrencyWidget")) {
                $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 35, 67140739)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 36
            echo "                    </div>
                    <div class=\"col col--sm-3 ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "__navigation-top-actions\">
                        ";
            // line 38
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("LanguageSwitcherWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "pathInfo", [], "any", false, false, false, 38), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "queryString", [], "any", false, false, false, 38), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "requestUri", [], "any", false, false, false, 38)])) {
                $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 38, 171632667)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 39
            echo "                    </div>
                ";
        } else {
            // line 41
            echo "                    <div class=\"col col--sm-4 ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
            echo "__navigation-top-actions\">
                        ";
            // line 42
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("LanguageSwitcherWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "pathInfo", [], "any", false, false, false, 42), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "queryString", [], "any", false, false, false, 42), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "requestUri", [], "any", false, false, false, 42)])) {
                $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 42, 984687722)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 43
            echo "                    </div>
                    <div class=\"col col--expand\">
                        <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login");
            echo "\" class=\"button button--tight button--expand ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "__login\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.please_login"), "html", null, true);
            echo "</a>
                    </div>
                ";
        }
        // line 48
        echo "            </div>
        ";
    }

    // line 53
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                    ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("NavigationWidget", [0 => "MAIN_NAVIGATION", 1 => "navigation-main"])) {
            $this->loadTemplate("@ShopUi/components/organisms/side-drawer/side-drawer.twig", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 54, 1004966235)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 55
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 55,  245 => 54,  241 => 53,  236 => 48,  226 => 45,  222 => 43,  218 => 42,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 74,  134 => 72,  132 => 71,  125 => 69,  117 => 68,  114 => 67,  112 => 61,  108 => 60,  102 => 59,  98 => 58,  94 => 56,  92 => 53,  88 => 52,  84 => 51,  81 => 50,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col col--sm-5 {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col col--sm-3 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>
                    <div class=\"col col--expand\">
                        <a href=\"{{ url('login') }}\" class=\"button button--tight button--expand {{ config.name }}__login\">{{ 'customer.please_login' | trans }}</a>
                    </div>
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_b6e7f940b132e80f5c2dace7756457bc67e6f8d55960a01f194c944a78d6c98b___382347679 extends Template
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
        // line 32
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 32, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 32);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 32,  250 => 55,  245 => 54,  241 => 53,  236 => 48,  226 => 45,  222 => 43,  218 => 42,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 74,  134 => 72,  132 => 71,  125 => 69,  117 => 68,  114 => 67,  112 => 61,  108 => 60,  102 => 59,  98 => 58,  94 => 56,  92 => 53,  88 => 52,  84 => 51,  81 => 50,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col col--sm-5 {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col col--sm-3 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>
                    <div class=\"col col--expand\">
                        <a href=\"{{ url('login') }}\" class=\"button button--tight button--expand {{ config.name }}__login\">{{ 'customer.please_login' | trans }}</a>
                    </div>
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_b6e7f940b132e80f5c2dace7756457bc67e6f8d55960a01f194c944a78d6c98b___67140739 extends Template
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
        // line 35
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 35, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 35);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 35,  371 => 32,  250 => 55,  245 => 54,  241 => 53,  236 => 48,  226 => 45,  222 => 43,  218 => 42,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 74,  134 => 72,  132 => 71,  125 => 69,  117 => 68,  114 => 67,  112 => 61,  108 => 60,  102 => 59,  98 => 58,  94 => 56,  92 => 53,  88 => 52,  84 => 51,  81 => 50,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col col--sm-5 {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col col--sm-3 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>
                    <div class=\"col col--expand\">
                        <a href=\"{{ url('login') }}\" class=\"button button--tight button--expand {{ config.name }}__login\">{{ 'customer.please_login' | trans }}</a>
                    </div>
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_b6e7f940b132e80f5c2dace7756457bc67e6f8d55960a01f194c944a78d6c98b___171632667 extends Template
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
        // line 38
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 38, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 38);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  625 => 38,  498 => 35,  371 => 32,  250 => 55,  245 => 54,  241 => 53,  236 => 48,  226 => 45,  222 => 43,  218 => 42,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 74,  134 => 72,  132 => 71,  125 => 69,  117 => 68,  114 => 67,  112 => 61,  108 => 60,  102 => 59,  98 => 58,  94 => 56,  92 => 53,  88 => 52,  84 => 51,  81 => 50,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col col--sm-5 {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col col--sm-3 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>
                    <div class=\"col col--expand\">
                        <a href=\"{{ url('login') }}\" class=\"button button--tight button--expand {{ config.name }}__login\">{{ 'customer.please_login' | trans }}</a>
                    </div>
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_b6e7f940b132e80f5c2dace7756457bc67e6f8d55960a01f194c944a78d6c98b___984687722 extends Template
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
        // line 42
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 42, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 42);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  752 => 42,  625 => 38,  498 => 35,  371 => 32,  250 => 55,  245 => 54,  241 => 53,  236 => 48,  226 => 45,  222 => 43,  218 => 42,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 74,  134 => 72,  132 => 71,  125 => 69,  117 => 68,  114 => 67,  112 => 61,  108 => 60,  102 => 59,  98 => 58,  94 => 56,  92 => 53,  88 => 52,  84 => 51,  81 => 50,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col col--sm-5 {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col col--sm-3 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>
                    <div class=\"col col--expand\">
                        <a href=\"{{ url('login') }}\" class=\"button button--tight button--expand {{ config.name }}__login\">{{ 'customer.please_login' | trans }}</a>
                    </div>
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}


/* @ShopUi/components/organisms/side-drawer/side-drawer.twig */
class __TwigTemplate_b6e7f940b132e80f5c2dace7756457bc67e6f8d55960a01f194c944a78d6c98b___1004966235 extends Template
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
        // line 54
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 54, $this->source); })()), "@ShopUi/components/organisms/side-drawer/side-drawer.twig", 54);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/side-drawer/side-drawer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  879 => 54,  752 => 42,  625 => 38,  498 => 35,  371 => 32,  250 => 55,  245 => 54,  241 => 53,  236 => 48,  226 => 45,  222 => 43,  218 => 42,  213 => 41,  209 => 39,  205 => 38,  201 => 37,  198 => 36,  194 => 35,  190 => 34,  187 => 33,  183 => 32,  178 => 31,  176 => 30,  171 => 29,  167 => 28,  162 => 25,  160 => 20,  153 => 19,  149 => 18,  142 => 74,  134 => 72,  132 => 71,  125 => 69,  117 => 68,  114 => 67,  112 => 61,  108 => 60,  102 => 59,  98 => 58,  94 => 56,  92 => 53,  88 => 52,  84 => 51,  81 => 50,  79 => 28,  76 => 27,  74 => 18,  64 => 17,  56 => 15,  52 => 14,  48 => 1,  47 => 9,  46 => 8,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'side-drawer',
    tag: 'side-drawer',
} %}

{% define attributes = {
    'trigger-class-name': required,
    'container-class-name': '',
    'locked-body-class-name': 'is-locked-tablet',
} %}

{% block body %}
    <div class=\"{{ config.name }}__overlay {{ attributes['trigger-class-name'] }}\"></div>

    <aside class=\"{{ config.name }}__drawer {% if is_granted('ROLE_USER') %} {{ config.name }}__drawer--logged{% endif %}\">
        {% block close %}
            <button class=\"{{ config.name }}__close {{ attributes['trigger-class-name'] }}\">
                {% include atom('icon') with {
                    data: {
                        name: 'cross',
                    },
                } only %}
            </button>
        {% endblock %}

        {% block topBlock %}
            <div class=\"grid grid--gap-smaller {{ config.name }}__navigation-top\">
                {% if is_granted('ROLE_USER') %}
                    <div class=\"col col--sm-5 {{ config.name }}__navigation-top-actions\">
                        {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'CurrencyWidget' only %}{% endwidget %}
                    </div>
                    <div class=\"col col--sm-3 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>
                {% else %}
                    <div class=\"col col--sm-4 {{ config.name }}__navigation-top-actions\">
                        {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
                    </div>
                    <div class=\"col col--expand\">
                        <a href=\"{{ url('login') }}\" class=\"button button--tight button--expand {{ config.name }}__login\">{{ 'customer.please_login' | trans }}</a>
                    </div>
                {% endif %}
            </div>
        {% endblock %}

        <div class=\"{{ config.name }}__holder\">
            <div class=\"{{ config.name }}__navigation\">
                {% block navigation %}
                    {% widget 'NavigationWidget' args ['MAIN_NAVIGATION', 'navigation-main'] only %}{% endwidget %}
                {% endblock %}
            </div>

            <div class=\"{{ config.name }}__info\">
                <a href=\"tel:{{ 'global.phone.number' | trans | replace({' ': ''}) }}\" class=\"{{ config.name }}__contact\">
                    <span class=\"{{ config.name }}__contact-icon\">
                        {% include atom('icon') with {
                            modifiers: ['bigger'],
                            data: {
                                name: 'cell-phone',
                            },
                        } only %}
                    </span>
                    <span class=\"{{ config.name }}__contact-text {{ config.name }}__contact-text--weight\">{{ 'global.contact_us' | trans }}:</span>
                    <span class=\"{{ config.name }}__contact-text\">{{ 'global.phone.number' | trans}}</span>
                </a>
                {% if is_granted('ROLE_USER') %}
                    <a href=\"{{ url('logout') }}\" class=\"spacing-top spacing-top--big button button--hollow button--expand\">{{ 'customer.logout' | trans }}</a>
                {% endif %}
            </div>
        </div>
    </aside>
{% endblock %}
", "@ShopUi/components/organisms/side-drawer/side-drawer.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/side-drawer/side-drawer.twig");
    }
}
