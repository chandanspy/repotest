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

/* @Gui/Partials/backward-compatible-breadcrumb.twig */
class __TwigTemplate_b62e2be500855b68947b8c1e14d7e3ac671f708fa6c94658c46930ce6ce5db9f extends Template
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
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 1, $this->source); })())), 0))) {
            // line 2
            echo "    <script type=\"module\" src=\"https://unpkg.com/@spryker/backoffice-ui@0.1.0/backoffice/backoffice-ui/backoffice-ui.esm.js\"></script>
    <script nomodule src=\"https://unpkg.com/@spryker/backoffice-ui@0.1.0/backoffice/backoffice-ui/backoffice-ui.js\"></script>

    ";
            // line 5
            $context["breadcrumbsList"] = twig_array_reduce($this->env, (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 5, $this->source); })()), function ($__accumulator__, $__breadcrumb__) use ($context, $macros) { $context["accumulator"] = $__accumulator__; $context["breadcrumb"] = $__breadcrumb__; return twig_array_merge(            // line 6
(isset($context["accumulator"]) || array_key_exists("accumulator", $context) ? $context["accumulator"] : (function () { throw new RuntimeError('Variable "accumulator" does not exist.', 6, $this->source); })()), [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,             // line 7
(isset($context["breadcrumb"]) || array_key_exists("breadcrumb", $context) ? $context["breadcrumb"] : (function () { throw new RuntimeError('Variable "breadcrumb" does not exist.', 7, $this->source); })()), "label", [], "any", false, false, false, 7)), "uri" => twig_get_attribute($this->env, $this->source,             // line 8
(isset($context["breadcrumb"]) || array_key_exists("breadcrumb", $context) ? $context["breadcrumb"] : (function () { throw new RuntimeError('Variable "breadcrumb" does not exist.', 8, $this->source); })()), "uri", [], "any", false, false, false, 8)]]); }, []);
            // line 11
            echo "
    <spryker-breadcrumbs class=\"page-breadcrumbs\" breadcrumbs=\"";
            // line 12
            echo twig_escape_filter($this->env, json_encode((isset($context["breadcrumbsList"]) || array_key_exists("breadcrumbsList", $context) ? $context["breadcrumbsList"] : (function () { throw new RuntimeError('Variable "breadcrumbsList" does not exist.', 12, $this->source); })())), "html", null, true);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "@Gui/Partials/backward-compatible-breadcrumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  49 => 11,  47 => 8,  46 => 7,  45 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if breadcrumbs|length > 0 %}
    <script type=\"module\" src=\"https://unpkg.com/@spryker/backoffice-ui@0.1.0/backoffice/backoffice-ui/backoffice-ui.esm.js\"></script>
    <script nomodule src=\"https://unpkg.com/@spryker/backoffice-ui@0.1.0/backoffice/backoffice-ui/backoffice-ui.js\"></script>

    {% set breadcrumbsList = breadcrumbs | reduce((accumulator, breadcrumb) => (
        accumulator | merge([{
            'label': breadcrumb.label | trans,
            'uri': breadcrumb.uri,
        }])
    ), []) %}

    <spryker-breadcrumbs class=\"page-breadcrumbs\" breadcrumbs=\"{{ breadcrumbsList | json_encode() }}\" />
{% endif %}
", "@Gui/Partials/backward-compatible-breadcrumb.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Partials/backward-compatible-breadcrumb.twig");
    }
}
