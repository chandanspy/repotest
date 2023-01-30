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

/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_445ae64749498d0fd5c4452c4f6bf9e9ea0dde2fbe414dc6d348da9dfadbeb19 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'template' => [$this, 'block_template'],
            'meta' => [$this, 'block_meta'],
            'metaTitle' => [$this, 'block_metaTitle'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'metaKeywords' => [$this, 'block_metaKeywords'],
            'headStyles' => [$this, 'block_headStyles'],
            'nonCriticalStyles' => [$this, 'block_nonCriticalStyles'],
            'headScripts' => [$this, 'block_headScripts'],
            'esmHeadScripts' => [$this, 'block_esmHeadScripts'],
            'legacyHeadScripts' => [$this, 'block_legacyHeadScripts'],
            'headTitle' => [$this, 'block_headTitle'],
            'class' => [$this, 'block_class'],
            'attributes' => [$this, 'block_attributes'],
            'footerScripts' => [$this, 'block_footerScripts'],
            'esmFooterScripts' => [$this, 'block_esmFooterScripts'],
            'legacyFooterScripts' => [$this, 'block_legacyFooterScripts'],
            'styleLazyLoader' => [$this, 'block_styleLazyLoader'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('model')->getCallable(), ["template"]), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["locale" => twig_slice($this->env, twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "locale", [], "any", false, false, false, 4), 0, 2), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.spryker.shop"), "metaTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.spryker.shop"), "metaDescription" => "", "metaKeywords" => "", "hasCookies" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 9
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "cookies", [], "any", false, false, false, 9), "get", [0 => "last-visit"], "method", false, false, false, 9)], $context['data']);        // line 12
        $context["isNewFrontendBuildSupported"] = false;
        // line 13
        $context["isCssLazyLoadSupported"] = false;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_template($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <!doctype html>
    <html lang=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "locale", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
        <head>
            ";
        // line 19
        $this->displayBlock('meta', $context, $blocks);
        // line 27
        echo "
            ";
        // line 28
        $this->displayBlock('headStyles', $context, $blocks);
        // line 39
        echo "
            ";
        // line 40
        $this->displayBlock('headScripts', $context, $blocks);
        // line 58
        echo "
            <title>";
        // line 59
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</title>
        </head>
        <body";
        // line 61
        if ( !twig_test_empty(        $this->renderBlock("class", $context, $blocks))) {
            echo " class=\"";
            $this->displayBlock('class', $context, $blocks);
            echo "\"";
        }
        // line 62
        $this->displayBlock('attributes', $context, $blocks);
        echo ">

            ";
        // line 64
        $this->displayParentBlock("template", $context, $blocks);
        echo "

            ";
        // line 66
        $this->displayBlock('footerScripts', $context, $blocks);
        // line 91
        echo "        </body>
    </html>
";
    }

    // line 19
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"";
        // line 22
        $this->displayBlock('metaTitle', $context, $blocks);
        echo "\">
                <meta name=\"description\" content=\"";
        // line 23
        $this->displayBlock('metaDescription', $context, $blocks);
        echo "\">
                <meta name=\"keywords\" content=\"";
        // line 24
        $this->displayBlock('metaKeywords', $context, $blocks);
        echo "\">
                <meta name=\"generator\" content=\"spryker\">
            ";
    }

    // line 22
    public function block_metaTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "metaTitle", [], "any", false, false, false, 22), "html", null, true);
    }

    // line 23
    public function block_metaDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 23, $this->source); })()), "metaDescription", [], "any", false, false, false, 23), "html", null, true);
    }

    // line 24
    public function block_metaKeywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "metaKeywords", [], "any", false, false, false, 24), "html", null, true);
    }

    // line 28
    public function block_headStyles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "                ";
        if ((isset($context["isCssLazyLoadSupported"]) || array_key_exists("isCssLazyLoadSupported", $context) ? $context["isCssLazyLoadSupported"] : (function () { throw new RuntimeError('Variable "isCssLazyLoadSupported" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["css/yves_default.critical.css"]), "html", null, true);
            echo "\">

                    ";
            // line 32
            $this->displayBlock('nonCriticalStyles', $context, $blocks);
            // line 35
            echo "                ";
        } else {
            // line 36
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["css/yves_default.app.css"]), "html", null, true);
            echo "\">
                ";
        }
        // line 38
        echo "            ";
    }

    // line 32
    public function block_nonCriticalStyles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["css/yves_default.non-critical.css"]), "html", null, true);
        echo "\">
                    ";
    }

    // line 40
    public function block_headScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "header-top"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 41, 218353715)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 43
        echo "
                ";
        // line 44
        if ((isset($context["isNewFrontendBuildSupported"]) || array_key_exists("isNewFrontendBuildSupported", $context) ? $context["isNewFrontendBuildSupported"] : (function () { throw new RuntimeError('Variable "isNewFrontendBuildSupported" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "                    ";
            $this->displayBlock('esmHeadScripts', $context, $blocks);
            // line 49
            echo "                ";
        } else {
            // line 50
            echo "                    ";
            $this->displayBlock('legacyHeadScripts', $context, $blocks);
            // line 53
            echo "                ";
        }
        // line 54
        echo "
                ";
        // line 55
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "header"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 55, 1937942604)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 57
        echo "            ";
    }

    // line 45
    public function block_esmHeadScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "                        <script nomodule type=\"application/javascript\" src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["js/yves_default.runtime.legacy.js"]), "html", null, true);
        echo "\"></script>
                        <script type=\"module\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["js/yves_default.runtime.js"]), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
                    ";
    }

    // line 50
    public function block_legacyHeadScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "                        <script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["js/yves_default.runtime.js"]), "html", null, true);
        echo "\"></script>
                    ";
    }

    // line 59
    public function block_headTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 59, $this->source); })()), "title", [], "any", false, false, false, 59), "html", null, true);
    }

    // line 61
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 62
    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo call_user_func_array($this->env->getFunction('qa')->getCallable(), [[0 => "page"]]);
        echo " ";
    }

    // line 66
    public function block_footerScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "                ";
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "footer"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 67, 598935667)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 69
        echo "
                ";
        // line 70
        if ((isset($context["isNewFrontendBuildSupported"]) || array_key_exists("isNewFrontendBuildSupported", $context) ? $context["isNewFrontendBuildSupported"] : (function () { throw new RuntimeError('Variable "isNewFrontendBuildSupported" does not exist.', 70, $this->source); })())) {
            // line 71
            echo "                    ";
            $this->displayBlock('esmFooterScripts', $context, $blocks);
            // line 78
            echo "                ";
        } else {
            // line 79
            echo "                    ";
            $this->displayBlock('legacyFooterScripts', $context, $blocks);
            // line 84
            echo "                ";
        }
        // line 86
        $this->displayBlock('styleLazyLoader', $context, $blocks);
        // line 88
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AssetWidget", [0 => "footer-bottom"])) {
            $this->loadTemplate("@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 88, 1712821257)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 90
        echo "            ";
    }

    // line 71
    public function block_esmFooterScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "                        <script nomodule type=\"application/javascript\" src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["js/yves_default.es6-polyfill.legacy.js"]), "html", null, true);
        echo "\"></script>
                        <script nomodule type=\"application/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["js/yves_default.vendor.legacy.js"]), "html", null, true);
        echo "\"></script>
                        <script nomodule type=\"application/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["js/yves_default.app.legacy.js"]), "html", null, true);
        echo "\"></script>
                        <script type=\"module\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["js/yves_default.vendor.js"]), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
                        <script type=\"module\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["js/yves_default.app.js"]), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
                    ";
    }

    // line 79
    public function block_legacyFooterScripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        echo "                        <script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["js/yves_default.es6-polyfill.js"]), "html", null, true);
        echo "\"></script>
                        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["js/yves_default.vendor.js"]), "html", null, true);
        echo "\"></script>
                        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["js/yves_default.app.js"]), "html", null, true);
        echo "\"></script>
                    ";
    }

    // line 86
    public function block_styleLazyLoader($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 86,  369 => 82,  365 => 81,  360 => 80,  356 => 79,  350 => 76,  346 => 75,  342 => 74,  338 => 73,  333 => 72,  329 => 71,  325 => 90,  321 => 88,  319 => 86,  316 => 84,  313 => 79,  310 => 78,  307 => 71,  305 => 70,  302 => 69,  297 => 67,  293 => 66,  284 => 62,  278 => 61,  271 => 59,  264 => 51,  260 => 50,  254 => 47,  249 => 46,  245 => 45,  241 => 57,  237 => 55,  234 => 54,  231 => 53,  228 => 50,  225 => 49,  222 => 45,  220 => 44,  217 => 43,  212 => 41,  208 => 40,  201 => 33,  197 => 32,  193 => 38,  187 => 36,  184 => 35,  182 => 32,  176 => 30,  173 => 29,  169 => 28,  162 => 24,  155 => 23,  148 => 22,  141 => 24,  137 => 23,  133 => 22,  129 => 20,  125 => 19,  119 => 91,  117 => 66,  112 => 64,  107 => 62,  101 => 61,  96 => 59,  93 => 58,  91 => 40,  88 => 39,  86 => 28,  83 => 27,  81 => 19,  76 => 17,  73 => 16,  69 => 15,  65 => 1,  63 => 13,  61 => 12,  60 => 9,  59 => 4,  58 => 3,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
} %}

{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}
                {% endwidget %}

                {% if isNewFrontendBuildSupported %}
                    {% block esmHeadScripts %}
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.runtime.legacy.js') }}\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>
                    {% endblock %}
                {% else %}
                    {% block legacyHeadScripts %}
                        <script src=\"{{ publicPath('js/yves_default.runtime.js') }}\"></script>
                    {% endblock %}
                {% endif %}

                {% widget 'AssetWidget' args ['header'] only %}
                {% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}
                {% endwidget %}

                {% if isNewFrontendBuildSupported %}
                    {% block esmFooterScripts %}
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.es6-polyfill.legacy.js') }}\"></script>
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.vendor.legacy.js') }}\"></script>
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.app.legacy.js') }}\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>
                    {% endblock %}
                {% else %}
                    {% block legacyFooterScripts %}
                        <script src=\"{{ publicPath('js/yves_default.es6-polyfill.js') }}\"></script>
                        <script src=\"{{ publicPath('js/yves_default.vendor.js') }}\"></script>
                        <script src=\"{{ publicPath('js/yves_default.app.js') }}\"></script>
                    {% endblock %}
                {% endif %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}
                {% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_445ae64749498d0fd5c4452c4f6bf9e9ea0dde2fbe414dc6d348da9dfadbeb19___218353715 extends Template
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
        // line 41
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 41, $this->source); })()), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 41);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 41,  375 => 86,  369 => 82,  365 => 81,  360 => 80,  356 => 79,  350 => 76,  346 => 75,  342 => 74,  338 => 73,  333 => 72,  329 => 71,  325 => 90,  321 => 88,  319 => 86,  316 => 84,  313 => 79,  310 => 78,  307 => 71,  305 => 70,  302 => 69,  297 => 67,  293 => 66,  284 => 62,  278 => 61,  271 => 59,  264 => 51,  260 => 50,  254 => 47,  249 => 46,  245 => 45,  241 => 57,  237 => 55,  234 => 54,  231 => 53,  228 => 50,  225 => 49,  222 => 45,  220 => 44,  217 => 43,  212 => 41,  208 => 40,  201 => 33,  197 => 32,  193 => 38,  187 => 36,  184 => 35,  182 => 32,  176 => 30,  173 => 29,  169 => 28,  162 => 24,  155 => 23,  148 => 22,  141 => 24,  137 => 23,  133 => 22,  129 => 20,  125 => 19,  119 => 91,  117 => 66,  112 => 64,  107 => 62,  101 => 61,  96 => 59,  93 => 58,  91 => 40,  88 => 39,  86 => 28,  83 => 27,  81 => 19,  76 => 17,  73 => 16,  69 => 15,  65 => 1,  63 => 13,  61 => 12,  60 => 9,  59 => 4,  58 => 3,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
} %}

{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}
                {% endwidget %}

                {% if isNewFrontendBuildSupported %}
                    {% block esmHeadScripts %}
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.runtime.legacy.js') }}\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>
                    {% endblock %}
                {% else %}
                    {% block legacyHeadScripts %}
                        <script src=\"{{ publicPath('js/yves_default.runtime.js') }}\"></script>
                    {% endblock %}
                {% endif %}

                {% widget 'AssetWidget' args ['header'] only %}
                {% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}
                {% endwidget %}

                {% if isNewFrontendBuildSupported %}
                    {% block esmFooterScripts %}
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.es6-polyfill.legacy.js') }}\"></script>
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.vendor.legacy.js') }}\"></script>
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.app.legacy.js') }}\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>
                    {% endblock %}
                {% else %}
                    {% block legacyFooterScripts %}
                        <script src=\"{{ publicPath('js/yves_default.es6-polyfill.js') }}\"></script>
                        <script src=\"{{ publicPath('js/yves_default.vendor.js') }}\"></script>
                        <script src=\"{{ publicPath('js/yves_default.app.js') }}\"></script>
                    {% endblock %}
                {% endif %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}
                {% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_445ae64749498d0fd5c4452c4f6bf9e9ea0dde2fbe414dc6d348da9dfadbeb19___1937942604 extends Template
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
        // line 55
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 55, $this->source); })()), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 55);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  657 => 55,  514 => 41,  375 => 86,  369 => 82,  365 => 81,  360 => 80,  356 => 79,  350 => 76,  346 => 75,  342 => 74,  338 => 73,  333 => 72,  329 => 71,  325 => 90,  321 => 88,  319 => 86,  316 => 84,  313 => 79,  310 => 78,  307 => 71,  305 => 70,  302 => 69,  297 => 67,  293 => 66,  284 => 62,  278 => 61,  271 => 59,  264 => 51,  260 => 50,  254 => 47,  249 => 46,  245 => 45,  241 => 57,  237 => 55,  234 => 54,  231 => 53,  228 => 50,  225 => 49,  222 => 45,  220 => 44,  217 => 43,  212 => 41,  208 => 40,  201 => 33,  197 => 32,  193 => 38,  187 => 36,  184 => 35,  182 => 32,  176 => 30,  173 => 29,  169 => 28,  162 => 24,  155 => 23,  148 => 22,  141 => 24,  137 => 23,  133 => 22,  129 => 20,  125 => 19,  119 => 91,  117 => 66,  112 => 64,  107 => 62,  101 => 61,  96 => 59,  93 => 58,  91 => 40,  88 => 39,  86 => 28,  83 => 27,  81 => 19,  76 => 17,  73 => 16,  69 => 15,  65 => 1,  63 => 13,  61 => 12,  60 => 9,  59 => 4,  58 => 3,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
} %}

{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}
                {% endwidget %}

                {% if isNewFrontendBuildSupported %}
                    {% block esmHeadScripts %}
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.runtime.legacy.js') }}\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>
                    {% endblock %}
                {% else %}
                    {% block legacyHeadScripts %}
                        <script src=\"{{ publicPath('js/yves_default.runtime.js') }}\"></script>
                    {% endblock %}
                {% endif %}

                {% widget 'AssetWidget' args ['header'] only %}
                {% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}
                {% endwidget %}

                {% if isNewFrontendBuildSupported %}
                    {% block esmFooterScripts %}
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.es6-polyfill.legacy.js') }}\"></script>
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.vendor.legacy.js') }}\"></script>
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.app.legacy.js') }}\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>
                    {% endblock %}
                {% else %}
                    {% block legacyFooterScripts %}
                        <script src=\"{{ publicPath('js/yves_default.es6-polyfill.js') }}\"></script>
                        <script src=\"{{ publicPath('js/yves_default.vendor.js') }}\"></script>
                        <script src=\"{{ publicPath('js/yves_default.app.js') }}\"></script>
                    {% endblock %}
                {% endif %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}
                {% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_445ae64749498d0fd5c4452c4f6bf9e9ea0dde2fbe414dc6d348da9dfadbeb19___598935667 extends Template
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
        // line 67
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 67, $this->source); })()), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 67);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  800 => 67,  657 => 55,  514 => 41,  375 => 86,  369 => 82,  365 => 81,  360 => 80,  356 => 79,  350 => 76,  346 => 75,  342 => 74,  338 => 73,  333 => 72,  329 => 71,  325 => 90,  321 => 88,  319 => 86,  316 => 84,  313 => 79,  310 => 78,  307 => 71,  305 => 70,  302 => 69,  297 => 67,  293 => 66,  284 => 62,  278 => 61,  271 => 59,  264 => 51,  260 => 50,  254 => 47,  249 => 46,  245 => 45,  241 => 57,  237 => 55,  234 => 54,  231 => 53,  228 => 50,  225 => 49,  222 => 45,  220 => 44,  217 => 43,  212 => 41,  208 => 40,  201 => 33,  197 => 32,  193 => 38,  187 => 36,  184 => 35,  182 => 32,  176 => 30,  173 => 29,  169 => 28,  162 => 24,  155 => 23,  148 => 22,  141 => 24,  137 => 23,  133 => 22,  129 => 20,  125 => 19,  119 => 91,  117 => 66,  112 => 64,  107 => 62,  101 => 61,  96 => 59,  93 => 58,  91 => 40,  88 => 39,  86 => 28,  83 => 27,  81 => 19,  76 => 17,  73 => 16,  69 => 15,  65 => 1,  63 => 13,  61 => 12,  60 => 9,  59 => 4,  58 => 3,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
} %}

{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}
                {% endwidget %}

                {% if isNewFrontendBuildSupported %}
                    {% block esmHeadScripts %}
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.runtime.legacy.js') }}\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>
                    {% endblock %}
                {% else %}
                    {% block legacyHeadScripts %}
                        <script src=\"{{ publicPath('js/yves_default.runtime.js') }}\"></script>
                    {% endblock %}
                {% endif %}

                {% widget 'AssetWidget' args ['header'] only %}
                {% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}
                {% endwidget %}

                {% if isNewFrontendBuildSupported %}
                    {% block esmFooterScripts %}
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.es6-polyfill.legacy.js') }}\"></script>
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.vendor.legacy.js') }}\"></script>
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.app.legacy.js') }}\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>
                    {% endblock %}
                {% else %}
                    {% block legacyFooterScripts %}
                        <script src=\"{{ publicPath('js/yves_default.es6-polyfill.js') }}\"></script>
                        <script src=\"{{ publicPath('js/yves_default.vendor.js') }}\"></script>
                        <script src=\"{{ publicPath('js/yves_default.app.js') }}\"></script>
                    {% endblock %}
                {% endif %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}
                {% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}


/* @@SprykerShop:ShopUi/templates/page-blank/page-blank.twig */
class __TwigTemplate_445ae64749498d0fd5c4452c4f6bf9e9ea0dde2fbe414dc6d348da9dfadbeb19___1712821257 extends Template
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
        // line 88
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 88, $this->source); })()), "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", 88);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  943 => 88,  800 => 67,  657 => 55,  514 => 41,  375 => 86,  369 => 82,  365 => 81,  360 => 80,  356 => 79,  350 => 76,  346 => 75,  342 => 74,  338 => 73,  333 => 72,  329 => 71,  325 => 90,  321 => 88,  319 => 86,  316 => 84,  313 => 79,  310 => 78,  307 => 71,  305 => 70,  302 => 69,  297 => 67,  293 => 66,  284 => 62,  278 => 61,  271 => 59,  264 => 51,  260 => 50,  254 => 47,  249 => 46,  245 => 45,  241 => 57,  237 => 55,  234 => 54,  231 => 53,  228 => 50,  225 => 49,  222 => 45,  220 => 44,  217 => 43,  212 => 41,  208 => 40,  201 => 33,  197 => 32,  193 => 38,  187 => 36,  184 => 35,  182 => 32,  176 => 30,  173 => 29,  169 => 28,  162 => 24,  155 => 23,  148 => 22,  141 => 24,  137 => 23,  133 => 22,  129 => 20,  125 => 19,  119 => 91,  117 => 66,  112 => 64,  107 => 62,  101 => 61,  96 => 59,  93 => 58,  91 => 40,  88 => 39,  86 => 28,  83 => 27,  81 => 19,  76 => 17,  73 => 16,  69 => 15,  65 => 1,  63 => 13,  61 => 12,  60 => 9,  59 => 4,  58 => 3,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends model('template') %}

{% define data = {
    locale: app.locale | slice(0, 2),
    title: 'global.spryker.shop' | trans,
    metaTitle: 'global.spryker.shop' | trans,
    metaDescription: '',
    metaKeywords: '',
    hasCookies: app.request.cookies.get('last-visit'),
} %}

{% set isNewFrontendBuildSupported = false %}
{% set isCssLazyLoadSupported = false %}

{% block template %}
    <!doctype html>
    <html lang=\"{{ data.locale }}\">
        <head>
            {% block meta %}
                <meta charset=\"utf-8\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
                <meta name=\"title\" content=\"{% block metaTitle %}{{ data.metaTitle }}{% endblock %}\">
                <meta name=\"description\" content=\"{% block metaDescription %}{{ data.metaDescription }}{% endblock %}\">
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ data.metaKeywords }}{% endblock %}\">
                <meta name=\"generator\" content=\"spryker\">
            {% endblock %}

            {% block headStyles %}
                {% if isCssLazyLoadSupported %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.critical.css') }}\">

                    {% block nonCriticalStyles %}
                        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.non-critical.css') }}\">
                    {% endblock %}
                {% else %}
                    <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.app.css') }}\">
                {% endif %}
            {% endblock %}

            {% block headScripts %}
                {% widget 'AssetWidget' args ['header-top'] only %}
                {% endwidget %}

                {% if isNewFrontendBuildSupported %}
                    {% block esmHeadScripts %}
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.runtime.legacy.js') }}\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.runtime.js') }}\" crossorigin=\"anonymous\"></script>
                    {% endblock %}
                {% else %}
                    {% block legacyHeadScripts %}
                        <script src=\"{{ publicPath('js/yves_default.runtime.js') }}\"></script>
                    {% endblock %}
                {% endif %}

                {% widget 'AssetWidget' args ['header'] only %}
                {% endwidget %}
            {% endblock %}

            <title>{% block headTitle %}{{ data.title }}{% endblock %}</title>
        </head>
        <body {%- if block('class') is not empty %} class=\"{%- block class -%}{%- endblock -%}\"{%- endif %}
            {%- block attributes %} {{qa('page')}} {% endblock -%}>

            {{ parent() }}

            {% block footerScripts %}
                {% widget 'AssetWidget' args ['footer'] only %}
                {% endwidget %}

                {% if isNewFrontendBuildSupported %}
                    {% block esmFooterScripts %}
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.es6-polyfill.legacy.js') }}\"></script>
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.vendor.legacy.js') }}\"></script>
                        <script nomodule type=\"application/javascript\" src=\"{{ publicPath('js/yves_default.app.legacy.js') }}\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.vendor.js') }}\" crossorigin=\"anonymous\"></script>
                        <script type=\"module\" src=\"{{ publicPath('js/yves_default.app.js') }}\" crossorigin=\"anonymous\"></script>
                    {% endblock %}
                {% else %}
                    {% block legacyFooterScripts %}
                        <script src=\"{{ publicPath('js/yves_default.es6-polyfill.js') }}\"></script>
                        <script src=\"{{ publicPath('js/yves_default.vendor.js') }}\"></script>
                        <script src=\"{{ publicPath('js/yves_default.app.js') }}\"></script>
                    {% endblock %}
                {% endif %}

                {%- block styleLazyLoader %}{% endblock -%}

                {% widget 'AssetWidget' args ['footer-bottom'] only %}
                {% endwidget %}
            {% endblock %}
        </body>
    </html>
{% endblock %}
", "@@SprykerShop:ShopUi/templates/page-blank/page-blank.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-blank/page-blank.twig");
    }
}
