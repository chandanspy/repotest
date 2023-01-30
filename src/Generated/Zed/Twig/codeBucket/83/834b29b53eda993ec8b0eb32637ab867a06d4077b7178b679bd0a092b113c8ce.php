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

/* @ConfigurableBundleGui/Slot/tabs/general-tab.twig */
class __TwigTemplate_fde9e8eaad3578d5efb1e53705701d220759bb7cf112b9010317a29562b46990 extends Template
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
        echo (isset($context["tips"]) || array_key_exists("tips", $context) ? $context["tips"] : (function () { throw new RuntimeError('Variable "tips" does not exist.', 2, $this->source); })());
        echo "
</div>

";
        // line 5
        $this->loadTemplate("@ConfigurableBundleGui/Template/_partials/translations.twig", "@ConfigurableBundleGui/Slot/tabs/general-tab.twig", 5)->display(twig_array_merge($context, ["currentLocale" =>         // line 6
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 6, $this->source); })()), "translations" => twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "translations", [], "any", false, false, false, 7)]));
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Slot/tabs/general-tab.twig";
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
    {{ tips | raw }}
</div>

{% include '@ConfigurableBundleGui/Template/_partials/translations.twig' with {
    currentLocale: currentLocale,
    translations: form.translations,
} %}
", "@ConfigurableBundleGui/Slot/tabs/general-tab.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Slot/tabs/general-tab.twig");
    }
}
