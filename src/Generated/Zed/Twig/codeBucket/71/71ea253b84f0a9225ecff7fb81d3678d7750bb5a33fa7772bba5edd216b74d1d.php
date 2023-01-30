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

/* @CustomerGroup/_partials/assigment-table-set.twig */
class __TwigTemplate_e6b27bbffb1424ddd599099fd59e2d15b56b2e612b793f4bec902e4ce9b4cef3 extends Template
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
        echo "<div class=\"tabs-container\">
    <ul class=\"nav nav-tabs\">
        <li class=\"active\">
            <a data-toggle=\"tab\" href=\"#";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["sourceTabId"]) || array_key_exists("sourceTabId", $context) ? $context["sourceTabId"] : (function () { throw new RuntimeError('Variable "sourceTabId" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["sourceTabLabel"]) || array_key_exists("sourceTabLabel", $context) ? $context["sourceTabLabel"] : (function () { throw new RuntimeError('Variable "sourceTabLabel" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</a>
        </li>
        <li class=\"\">
            <a data-toggle=\"tab\" href=\"#";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["destinationTabId"]) || array_key_exists("destinationTabId", $context) ? $context["destinationTabId"] : (function () { throw new RuntimeError('Variable "destinationTabId" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["destinationTabId"]) || array_key_exists("destinationTabId", $context) ? $context["destinationTabId"] : (function () { throw new RuntimeError('Variable "destinationTabId" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "-label\">
                ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["destinationTabLabel"]) || array_key_exists("destinationTabLabel", $context) ? $context["destinationTabLabel"] : (function () { throw new RuntimeError('Variable "destinationTabLabel" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "
            </a>
        </li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["sourceTabId"]) || array_key_exists("sourceTabId", $context) ? $context["sourceTabId"] : (function () { throw new RuntimeError('Variable "sourceTabId" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\" class=\"tab-pane active\">
            <div class=\"panel-body\">
                ";
        // line 15
        echo (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 15, $this->source); })());
        echo "
                <div class=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["selectButtonClass"]) || array_key_exists("selectButtonClass", $context) ? $context["selectButtonClass"] : (function () { throw new RuntimeError('Variable "selectButtonClass" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
                    <a href=\"#\" class=\"btn btn-primary \">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["selectButtonLabel"]) || array_key_exists("selectButtonLabel", $context) ? $context["selectButtonLabel"] : (function () { throw new RuntimeError('Variable "selectButtonLabel" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</a>
                </div>
            </div>
        </div>
        <div id=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["destinationTabId"]) || array_key_exists("destinationTabId", $context) ? $context["destinationTabId"] : (function () { throw new RuntimeError('Variable "destinationTabId" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\" class=\"tab-pane\">
            <div class=\"panel-body\">
                <h3>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["destinationTabLabel"]) || array_key_exists("destinationTabLabel", $context) ? $context["destinationTabLabel"] : (function () { throw new RuntimeError('Variable "destinationTabLabel" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</h3>
                <table
                    id=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["destinationTabId"]) || array_key_exists("destinationTabId", $context) ? $context["destinationTabId"] : (function () { throw new RuntimeError('Variable "destinationTabId" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "-table\"
                    class=\"table table-striped table-bordered table-hover gui-table-data\"
                    data-paging=\"false\"
                >
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Selected</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CustomerGroup/_partials/assigment-table-set.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  89 => 23,  84 => 21,  77 => 17,  73 => 16,  69 => 15,  64 => 13,  56 => 8,  50 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tabs-container\">
    <ul class=\"nav nav-tabs\">
        <li class=\"active\">
            <a data-toggle=\"tab\" href=\"#{{ sourceTabId }}\">{{ sourceTabLabel }}</a>
        </li>
        <li class=\"\">
            <a data-toggle=\"tab\" href=\"#{{ destinationTabId }}\" id=\"{{ destinationTabId }}-label\">
                {{ destinationTabLabel }}
            </a>
        </li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"{{ sourceTabId }}\" class=\"tab-pane active\">
            <div class=\"panel-body\">
                {{ table | raw }}
                <div class=\"{{ selectButtonClass }}\">
                    <a href=\"#\" class=\"btn btn-primary \">{{ selectButtonLabel }}</a>
                </div>
            </div>
        </div>
        <div id=\"{{ destinationTabId }}\" class=\"tab-pane\">
            <div class=\"panel-body\">
                <h3>{{ destinationTabLabel }}</h3>
                <table
                    id=\"{{ destinationTabId }}-table\"
                    class=\"table table-striped table-bordered table-hover gui-table-data\"
                    data-paging=\"false\"
                >
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Selected</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
", "@CustomerGroup/_partials/assigment-table-set.twig", "/data/vendor/spryker/customer-group/src/Spryker/Zed/CustomerGroup/Presentation/_partials/assigment-table-set.twig");
    }
}
