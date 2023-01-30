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

/* @AppCatalogGui/Index/index.twig */
class __TwigTemplate_2efdd36c0a885f3126336db8a12eb8d7fa1d4bfda8e01155a9cdddad5e4dc974 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_css' => [$this, 'block_head_css'],
            'content' => [$this, 'block_content'],
            'footer_js' => [$this, 'block_footer_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@AppCatalogGui/Index/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-application-catalog-main.css"]);
        echo "\">
    <base href=\"/app-catalog-gui/\" />
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <app-root></app-root>

    ";
        // line 12
        if ((twig_test_empty((isset($context["appCatalogScriptUrl"]) || array_key_exists("appCatalogScriptUrl", $context) ? $context["appCatalogScriptUrl"] : (function () { throw new RuntimeError('Variable "appCatalogScriptUrl" does not exist.', 12, $this->source); })())) || twig_test_empty((isset($context["storeReference"]) || array_key_exists("storeReference", $context) ? $context["storeReference"] : (function () { throw new RuntimeError('Variable "storeReference" does not exist.', 12, $this->source); })())))) {
            // line 13
            echo "        <h3>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error: AOP Catalog configuration is incomplete"), "html", null, true);
            echo "</h3>
        <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The AOP Catalog, can not be displayed, because its technical configuration is incomplete. Please contact your Administrator!"), "html", null, true);
            echo "</p>
    ";
        }
    }

    // line 18
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script>
        window['catalogSpaOptions'] = {
            authTokenUrl: '/app-catalog-gui/api-login'
        }
    </script>

    <script src=\"";
        // line 26
        echo call_user_func_array($this->env->getFunction('url')->getCallable(), [(isset($context["appCatalogScriptUrl"]) || array_key_exists("appCatalogScriptUrl", $context) ? $context["appCatalogScriptUrl"] : (function () { throw new RuntimeError('Variable "appCatalogScriptUrl" does not exist.', 26, $this->source); })()), ["storeReference" =>         // line 27
(isset($context["storeReference"]) || array_key_exists("storeReference", $context) ? $context["storeReference"] : (function () { throw new RuntimeError('Variable "storeReference" does not exist.', 27, $this->source); })()), "language" =>         // line 28
(isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 28, $this->source); })())]]);
        // line 29
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@AppCatalogGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 29,  103 => 28,  102 => 27,  101 => 26,  90 => 19,  86 => 18,  79 => 14,  74 => 13,  72 => 12,  68 => 10,  64 => 9,  57 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-application-catalog-main.css') }}\">
    <base href=\"/app-catalog-gui/\" />
{% endblock %}

{% block content %}
    <app-root></app-root>

    {% if appCatalogScriptUrl is empty or storeReference is empty %}
        <h3>{{ 'Error: AOP Catalog configuration is incomplete' | trans }}</h3>
        <p>{{ 'The AOP Catalog, can not be displayed, because its technical configuration is incomplete. Please contact your Administrator!' | trans }}</p>
    {% endif %}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script>
        window['catalogSpaOptions'] = {
            authTokenUrl: '/app-catalog-gui/api-login'
        }
    </script>

    <script src=\"{{ url(appCatalogScriptUrl, {
        storeReference: storeReference,
        language: localeName,
    }) }}\"></script>
{% endblock %}
", "@AppCatalogGui/Index/index.twig", "/data/vendor/spryker/app-catalog-gui/src/Spryker/Zed/AppCatalogGui/Presentation/Index/index.twig");
    }
}
