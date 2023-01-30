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

/* @ConfigurableBundleGui/Template/tabs/general-tab.twig */
class __TwigTemplate_f86dfceaefc9f81a0f599293aad2a020b54a2de3594563e3552e57df2072668a extends Template
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
        echo "<div class=\"well\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["tips"]) || array_key_exists("tips", $context) ? $context["tips"] : (function () { throw new RuntimeError('Variable "tips" does not exist.', 2, $this->source); })())), "html", null, true);
        echo "
</div>

";
        // line 5
        $this->loadTemplate("@ConfigurableBundleGui/Template/_partials/translations.twig", "@ConfigurableBundleGui/Template/tabs/general-tab.twig", 5)->display(twig_array_merge($context, ["currentLocale" =>         // line 6
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 6, $this->source); })()), "translations" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "translations", [], "any", false, false, false, 7)]));
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Template/tabs/general-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  47 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"well\">
    {{ tips | trans }}
</div>

{% include '@ConfigurableBundleGui/Template/_partials/translations.twig' with {
    currentLocale: currentLocale,
    translations: form.translations,
} %}
", "@ConfigurableBundleGui/Template/tabs/general-tab.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Template/tabs/general-tab.twig");
    }
}
