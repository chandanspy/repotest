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

/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_918458864332cffb7c22f4d6d35606ac11d069581c5982bbd4fc2444b5febcb6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'benefit' => [$this, 'block_benefit'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["component"]), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('config', $context)) {$context['config'] = [];}$context['config'] = array_replace_recursive(["name" => "navigation-top", "tag" => "div"], $context['config']);        // line 8
        $context["benefits"] = [0 => "global.benefit.free_returns", 1 => "global.benefit.warranty", 2 => "global.benefit.competitive_prices"];
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_benefit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["panel-info-item"]), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 15)->display(twig_to_array(["class" => "col", "data" => ["info" =>         // line 18
(isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 18, $this->source); })())]]));
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["benefits"]) || array_key_exists("benefits", $context) ? $context["benefits"] : (function () { throw new RuntimeError('Variable "benefits" does not exist.', 25, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 26
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 26)) {
                // line 27
                echo "            ";
                $this->displayBlock("benefit", $context, $blocks);
                echo "
        ";
            } elseif ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 29
                echo "            ";
                $this->displayBlock("benefit", $context, $blocks);
                echo "
        ";
            }
            // line 31
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "__action-item ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "__action-item--tel\">
            ";
        // line 35
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 35)->display(twig_to_array(["modifiers" => [0 => "phone"], "data" => ["name" => "phone"]]));
        // line 41
        echo "            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.phone.number"), "html", null, true);
        echo "
        </li>

        ";
        // line 44
        if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeePricePermissionPlugin")) {
            // line 45
            echo "            <li class=\"col ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "__action-item\">
                ";
            // line 46
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("PriceModeSwitcherWidget")) {
                $this->loadTemplate("@ShopUi/components/organisms/navigation-top/navigation-top.twig", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 46, 238935418)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 47
            echo "            </li>
            <li class=\"col ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true);
            echo "__action-item\">
                ";
            // line 49
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("CurrencyWidget")) {
                $this->loadTemplate("@ShopUi/components/organisms/navigation-top/navigation-top.twig", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 49, 602219597)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 50
            echo "            </li>
        ";
        }
        // line 52
        echo "
        <li class=\"col ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "__action-item\">
            ";
        // line 54
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("LanguageSwitcherWidget", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "pathInfo", [], "any", false, false, false, 54), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "queryString", [], "any", false, false, false, 54), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "requestUri", [], "any", false, false, false, 54)])) {
            $this->loadTemplate("@ShopUi/components/organisms/navigation-top/navigation-top.twig", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 54, 619049889)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 55
        echo "        </li>

        ";
        // line 57
        $context["menuItemCompanyWidget"] = call_user_func_array($this->env->getFunction('findWidget')->getCallable(), ["MenuItemCompanyWidget"]);
        // line 58
        echo "        ";
        $context["hasCompanyAccess"] = twig_get_attribute($this->env, $this->source, (isset($context["menuItemCompanyWidget"]) || array_key_exists("menuItemCompanyWidget", $context) ? $context["menuItemCompanyWidget"] : (function () { throw new RuntimeError('Variable "menuItemCompanyWidget" does not exist.', 58, $this->source); })()), "hasCompanyAccess", [], "any", false, false, false, 58);
        // line 59
        echo "
        ";
        // line 60
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && (isset($context["hasCompanyAccess"]) || array_key_exists("hasCompanyAccess", $context) ? $context["hasCompanyAccess"] : (function () { throw new RuntimeError('Variable "hasCompanyAccess" does not exist.', 60, $this->source); })()))) {
            // line 61
            echo "            ";
            if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext((isset($context["menuItemCompanyWidget"]) || array_key_exists("menuItemCompanyWidget", $context) ? $context["menuItemCompanyWidget"] : (function () { throw new RuntimeError('Variable "menuItemCompanyWidget" does not exist.', 61, $this->source); })()))) {
                $this->loadTemplate("@ShopUi/components/organisms/navigation-top/navigation-top.twig", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 61, 506922770)->display(array_merge($context, array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget))));
                $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
            }            // line 68
            echo "        ";
        }
        // line 69
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 69,  188 => 68,  183 => 61,  181 => 60,  178 => 59,  175 => 58,  173 => 57,  169 => 55,  165 => 54,  161 => 53,  158 => 52,  154 => 50,  150 => 49,  146 => 48,  143 => 47,  139 => 46,  134 => 45,  132 => 44,  125 => 41,  123 => 35,  117 => 34,  113 => 32,  99 => 31,  93 => 29,  87 => 27,  84 => 26,  67 => 25,  64 => 24,  60 => 23,  56 => 18,  54 => 15,  50 => 14,  46 => 1,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'div'
} %}

{% set benefits = [
    'global.benefit.free_returns',
    'global.benefit.warranty',
    'global.benefit.competitive_prices'
] %}

{% block benefit %}
    {% include molecule('panel-info-item') with {
        class: 'col',
        data: {
            info: text
        }
    } only %}
{% endblock %}

{% block body %}

    {% for text in benefits %}
        {% if not loop.last %}
            {{ block('benefit') }}
        {% elseif not is_granted('ROLE_USER') %}
            {{ block('benefit') }}
        {% endif %}
    {% endfor %}

    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col {{ config.name }}__action-item {{ config.name }}__action-item--tel\">
            {% include atom('icon') with {
                modifiers: ['phone'],
                data: {
                    name: 'phone'
                }
            } only %}
            {{ 'global.phone.number' | trans }}
        </li>

        {% if can('SeePricePermissionPlugin') %}
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
            </li>
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'CurrencyWidget' only %}{% endwidget %}
            </li>
        {% endif %}

        <li class=\"col {{ config.name }}__action-item\">
            {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
        </li>

        {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
        {% set hasCompanyAccess = menuItemCompanyWidget.hasCompanyAccess %}

        {% if is_granted('ROLE_USER') and hasCompanyAccess %}
            {% widget menuItemCompanyWidget %}
                {% block template %}
                    <li class=\"col {{ config.name }}__action-item\">
                        {% apply spaceless %}{{ parent() }}{% endapply %}
                    </li>
                {% endblock %}
            {% endwidget %}
        {% endif %}
    </ul>
{% endblock %}
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}


/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_918458864332cffb7c22f4d6d35606ac11d069581c5982bbd4fc2444b5febcb6___238935418 extends Template
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
        // line 46
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 46, $this->source); })()), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 46);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 46,  191 => 69,  188 => 68,  183 => 61,  181 => 60,  178 => 59,  175 => 58,  173 => 57,  169 => 55,  165 => 54,  161 => 53,  158 => 52,  154 => 50,  150 => 49,  146 => 48,  143 => 47,  139 => 46,  134 => 45,  132 => 44,  125 => 41,  123 => 35,  117 => 34,  113 => 32,  99 => 31,  93 => 29,  87 => 27,  84 => 26,  67 => 25,  64 => 24,  60 => 23,  56 => 18,  54 => 15,  50 => 14,  46 => 1,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'div'
} %}

{% set benefits = [
    'global.benefit.free_returns',
    'global.benefit.warranty',
    'global.benefit.competitive_prices'
] %}

{% block benefit %}
    {% include molecule('panel-info-item') with {
        class: 'col',
        data: {
            info: text
        }
    } only %}
{% endblock %}

{% block body %}

    {% for text in benefits %}
        {% if not loop.last %}
            {{ block('benefit') }}
        {% elseif not is_granted('ROLE_USER') %}
            {{ block('benefit') }}
        {% endif %}
    {% endfor %}

    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col {{ config.name }}__action-item {{ config.name }}__action-item--tel\">
            {% include atom('icon') with {
                modifiers: ['phone'],
                data: {
                    name: 'phone'
                }
            } only %}
            {{ 'global.phone.number' | trans }}
        </li>

        {% if can('SeePricePermissionPlugin') %}
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
            </li>
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'CurrencyWidget' only %}{% endwidget %}
            </li>
        {% endif %}

        <li class=\"col {{ config.name }}__action-item\">
            {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
        </li>

        {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
        {% set hasCompanyAccess = menuItemCompanyWidget.hasCompanyAccess %}

        {% if is_granted('ROLE_USER') and hasCompanyAccess %}
            {% widget menuItemCompanyWidget %}
                {% block template %}
                    <li class=\"col {{ config.name }}__action-item\">
                        {% apply spaceless %}{{ parent() }}{% endapply %}
                    </li>
                {% endblock %}
            {% endwidget %}
        {% endif %}
    </ul>
{% endblock %}
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}


/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_918458864332cffb7c22f4d6d35606ac11d069581c5982bbd4fc2444b5febcb6___602219597 extends Template
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
        // line 49
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 49, $this->source); })()), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 49);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 49,  306 => 46,  191 => 69,  188 => 68,  183 => 61,  181 => 60,  178 => 59,  175 => 58,  173 => 57,  169 => 55,  165 => 54,  161 => 53,  158 => 52,  154 => 50,  150 => 49,  146 => 48,  143 => 47,  139 => 46,  134 => 45,  132 => 44,  125 => 41,  123 => 35,  117 => 34,  113 => 32,  99 => 31,  93 => 29,  87 => 27,  84 => 26,  67 => 25,  64 => 24,  60 => 23,  56 => 18,  54 => 15,  50 => 14,  46 => 1,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'div'
} %}

{% set benefits = [
    'global.benefit.free_returns',
    'global.benefit.warranty',
    'global.benefit.competitive_prices'
] %}

{% block benefit %}
    {% include molecule('panel-info-item') with {
        class: 'col',
        data: {
            info: text
        }
    } only %}
{% endblock %}

{% block body %}

    {% for text in benefits %}
        {% if not loop.last %}
            {{ block('benefit') }}
        {% elseif not is_granted('ROLE_USER') %}
            {{ block('benefit') }}
        {% endif %}
    {% endfor %}

    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col {{ config.name }}__action-item {{ config.name }}__action-item--tel\">
            {% include atom('icon') with {
                modifiers: ['phone'],
                data: {
                    name: 'phone'
                }
            } only %}
            {{ 'global.phone.number' | trans }}
        </li>

        {% if can('SeePricePermissionPlugin') %}
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
            </li>
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'CurrencyWidget' only %}{% endwidget %}
            </li>
        {% endif %}

        <li class=\"col {{ config.name }}__action-item\">
            {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
        </li>

        {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
        {% set hasCompanyAccess = menuItemCompanyWidget.hasCompanyAccess %}

        {% if is_granted('ROLE_USER') and hasCompanyAccess %}
            {% widget menuItemCompanyWidget %}
                {% block template %}
                    <li class=\"col {{ config.name }}__action-item\">
                        {% apply spaceless %}{{ parent() }}{% endapply %}
                    </li>
                {% endblock %}
            {% endwidget %}
        {% endif %}
    </ul>
{% endblock %}
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}


/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_918458864332cffb7c22f4d6d35606ac11d069581c5982bbd4fc2444b5febcb6___619049889 extends Template
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
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 54, $this->source); })()), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 54);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 54,  426 => 49,  306 => 46,  191 => 69,  188 => 68,  183 => 61,  181 => 60,  178 => 59,  175 => 58,  173 => 57,  169 => 55,  165 => 54,  161 => 53,  158 => 52,  154 => 50,  150 => 49,  146 => 48,  143 => 47,  139 => 46,  134 => 45,  132 => 44,  125 => 41,  123 => 35,  117 => 34,  113 => 32,  99 => 31,  93 => 29,  87 => 27,  84 => 26,  67 => 25,  64 => 24,  60 => 23,  56 => 18,  54 => 15,  50 => 14,  46 => 1,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'div'
} %}

{% set benefits = [
    'global.benefit.free_returns',
    'global.benefit.warranty',
    'global.benefit.competitive_prices'
] %}

{% block benefit %}
    {% include molecule('panel-info-item') with {
        class: 'col',
        data: {
            info: text
        }
    } only %}
{% endblock %}

{% block body %}

    {% for text in benefits %}
        {% if not loop.last %}
            {{ block('benefit') }}
        {% elseif not is_granted('ROLE_USER') %}
            {{ block('benefit') }}
        {% endif %}
    {% endfor %}

    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col {{ config.name }}__action-item {{ config.name }}__action-item--tel\">
            {% include atom('icon') with {
                modifiers: ['phone'],
                data: {
                    name: 'phone'
                }
            } only %}
            {{ 'global.phone.number' | trans }}
        </li>

        {% if can('SeePricePermissionPlugin') %}
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
            </li>
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'CurrencyWidget' only %}{% endwidget %}
            </li>
        {% endif %}

        <li class=\"col {{ config.name }}__action-item\">
            {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
        </li>

        {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
        {% set hasCompanyAccess = menuItemCompanyWidget.hasCompanyAccess %}

        {% if is_granted('ROLE_USER') and hasCompanyAccess %}
            {% widget menuItemCompanyWidget %}
                {% block template %}
                    <li class=\"col {{ config.name }}__action-item\">
                        {% apply spaceless %}{{ parent() }}{% endapply %}
                    </li>
                {% endblock %}
            {% endwidget %}
        {% endif %}
    </ul>
{% endblock %}
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}


/* @ShopUi/components/organisms/navigation-top/navigation-top.twig */
class __TwigTemplate_918458864332cffb7c22f4d6d35606ac11d069581c5982bbd4fc2444b5febcb6___506922770 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'template' => [$this, 'block_template'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 61
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 61, $this->source); })()), "@ShopUi/components/organisms/navigation-top/navigation-top.twig", 61);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 62
    public function block_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                    <li class=\"col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), "html", null, true);
        echo "__action-item\">
                        ";
        // line 64
        ob_start();
        $this->displayParentBlock("template", $context, $blocks);
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_spaceless($___internal_parse_0_);
        // line 65
        echo "                    </li>
                ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/components/organisms/navigation-top/navigation-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  691 => 65,  686 => 64,  681 => 63,  677 => 62,  667 => 61,  546 => 54,  426 => 49,  306 => 46,  191 => 69,  188 => 68,  183 => 61,  181 => 60,  178 => 59,  175 => 58,  173 => 57,  169 => 55,  165 => 54,  161 => 53,  158 => 52,  154 => 50,  150 => 49,  146 => 48,  143 => 47,  139 => 46,  134 => 45,  132 => 44,  125 => 41,  123 => 35,  117 => 34,  113 => 32,  99 => 31,  93 => 29,  87 => 27,  84 => 26,  67 => 25,  64 => 24,  60 => 23,  56 => 18,  54 => 15,  50 => 14,  46 => 1,  44 => 8,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('component') %}

{% define config = {
    name: 'navigation-top',
    tag: 'div'
} %}

{% set benefits = [
    'global.benefit.free_returns',
    'global.benefit.warranty',
    'global.benefit.competitive_prices'
] %}

{% block benefit %}
    {% include molecule('panel-info-item') with {
        class: 'col',
        data: {
            info: text
        }
    } only %}
{% endblock %}

{% block body %}

    {% for text in benefits %}
        {% if not loop.last %}
            {{ block('benefit') }}
        {% elseif not is_granted('ROLE_USER') %}
            {{ block('benefit') }}
        {% endif %}
    {% endfor %}

    <ul class=\"col grid grid--nowrap grid--stretch navigation-top__actions\">
        <li class=\"col {{ config.name }}__action-item {{ config.name }}__action-item--tel\">
            {% include atom('icon') with {
                modifiers: ['phone'],
                data: {
                    name: 'phone'
                }
            } only %}
            {{ 'global.phone.number' | trans }}
        </li>

        {% if can('SeePricePermissionPlugin') %}
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'PriceModeSwitcherWidget' only %}{% endwidget %}
            </li>
            <li class=\"col {{ config.name }}__action-item\">
                {% widget 'CurrencyWidget' only %}{% endwidget %}
            </li>
        {% endif %}

        <li class=\"col {{ config.name }}__action-item\">
            {% widget 'LanguageSwitcherWidget' args [app.request.pathInfo, app.request.queryString, app.request.requestUri] only %}{% endwidget %}
        </li>

        {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
        {% set hasCompanyAccess = menuItemCompanyWidget.hasCompanyAccess %}

        {% if is_granted('ROLE_USER') and hasCompanyAccess %}
            {% widget menuItemCompanyWidget %}
                {% block template %}
                    <li class=\"col {{ config.name }}__action-item\">
                        {% apply spaceless %}{{ parent() }}{% endapply %}
                    </li>
                {% endblock %}
            {% endwidget %}
        {% endif %}
    </ul>
{% endblock %}
", "@ShopUi/components/organisms/navigation-top/navigation-top.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/components/organisms/navigation-top/navigation-top.twig");
    }
}
