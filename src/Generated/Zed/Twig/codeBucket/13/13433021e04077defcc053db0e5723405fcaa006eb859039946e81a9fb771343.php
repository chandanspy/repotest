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

/* index.twig */
class __TwigTemplate_d0146331541c2068a1a11f54644ab160281a176311f8e0114a2181feef6ea0e3 extends Template
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
        $context["baseUrl"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 1, $this->source); })()), "baseUrl", [], "any", false, false, false, 1))) ? (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 1, $this->source); })()), "baseUrl", [], "any", false, false, false, 1)) : ((((("/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "get", [0 => "module"], "method", false, false, false, 1)) . "/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "get", [0 => "controller"], "method", false, false, false, 1)) . "/")));
        // line 2
        echo "<table
    class=\"table table-striped table-bordered table-hover ";
        // line 3
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "class", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "class", [], "any", false, false, false, 3), "gui-table-data")) : ("gui-table-data")), "html", null, true);
        echo "\"
    data-ajax=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_trim_filter((isset($context["baseUrl"]) || array_key_exists("baseUrl", $context) ? $context["baseUrl"] : (function () { throw new RuntimeError('Variable "baseUrl" does not exist.', 4, $this->source); })()), "/", "right"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "url", [], "any", false, false, false, 4), "/", "left"), "html", null, true);
        echo "\"
    id=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 5, $this->source); })()), "tableId", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
    data-processing=\"";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "processing", [], "any", true, true, false, 6) && twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 6, $this->source); })()), "processing", [], "any", false, false, false, 6))) ? ("true") : ("false"));
        echo "\"
    data-server-side=\"";
        // line 7
        echo (((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "serverSide", [], "any", true, true, false, 7) && twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 7, $this->source); })()), "serverSide", [], "any", false, false, false, 7))) ? ("true") : ("false"));
        echo "\"
    data-state-save=\"";
        // line 8
        echo (((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "stateSave", [], "any", true, true, false, 8) && twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 8, $this->source); })()), "stateSave", [], "any", false, false, false, 8))) ? ("true") : ("false"));
        echo "\"
    data-ordering=\"";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "ordering", [], "any", true, true, false, 9) && twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "ordering", [], "any", false, false, false, 9))) ? ("true") : ("false"));
        echo "\"
    data-paging=\"";
        // line 10
        echo (((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "paging", [], "any", true, true, false, 10) && twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "paging", [], "any", false, false, false, 10))) ? ("true") : ("false"));
        echo "\"
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "pageLength", [], "any", true, true, false, 11)) {
            // line 12
            echo "data-page-length=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 12, $this->source); })()), "pageLength", [], "any", false, false, false, 12), "html", null, true);
            echo "\"
    ";
        }
        // line 15
        $this->loadTemplate("table-data-order.twig", "index.twig", 15)->display($context);
        // line 16
        $this->loadTemplate("table-data-columns.twig", "index.twig", 16)->display($context);
        // line 17
        echo "data-qa=\"data-table\"
>
    ";
        // line 19
        $this->loadTemplate("@Gui/Table/thead.twig", "index.twig", 19)->display($context);
        // line 20
        echo "    ";
        $this->loadTemplate("@Gui/Table/tfoot.twig", "index.twig", 20)->display($context);
        // line 21
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 21,  94 => 20,  92 => 19,  88 => 17,  86 => 16,  84 => 15,  78 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set baseUrl = config.baseUrl is not empty ? config.baseUrl : '/' ~ app.request.get('module') ~ '/' ~ app.request.get('controller') ~ '/' %}
<table
    class=\"table table-striped table-bordered table-hover {{ config.class | default('gui-table-data') }}\"
    data-ajax=\"{{ baseUrl | trim('/', 'right') }}/{{ config.url | trim('/', 'left') }}\"
    id=\"{{ config.tableId }}\"
    data-processing=\"{{ config.processing is defined and config.processing ? 'true' : 'false' }}\"
    data-server-side=\"{{ config.serverSide is defined and config.serverSide ? 'true' : 'false' }}\"
    data-state-save=\"{{ config.stateSave is defined and config.stateSave ? 'true' : 'false' }}\"
    data-ordering=\"{{ config.ordering is defined and config.ordering ? 'true' : 'false' }}\"
    data-paging=\"{{ config.paging is defined and config.paging ? 'true' : 'false' }}\"
    {% if config.pageLength is defined -%}
        data-page-length=\"{{ config.pageLength }}\"
    {% endif -%}

    {% include 'table-data-order.twig' -%}
    {% include 'table-data-columns.twig' -%}
    data-qa=\"data-table\"
>
    {% include '@Gui/Table/thead.twig' %}
    {% include '@Gui/Table/tfoot.twig' %}
</table>
", "index.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Table/index.twig");
    }
}
