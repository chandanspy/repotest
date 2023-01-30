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

/* @ConfigurableBundleGui/Slot/_partials/slot-tips.twig */
class __TwigTemplate_3796cb51a15427249fc656eb590253bc971b6c8b2569e50271c94aba535ea5b4 extends Template
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
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add General Information"), "html", null, true);
        echo "</h3>
<p>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Below you can edit the name of your slot for different locales (in different languages)."), "html", null, true);
        echo "</p>
<p>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note: you can assign products and categories for a slot in the respective tabs."), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "@ConfigurableBundleGui/Slot/_partials/slot-tips.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>{{ 'Add General Information' | trans }}</h3>
<p>{{ 'Below you can edit the name of your slot for different locales (in different languages).' | trans }}</p>
<p>{{ 'Note: you can assign products and categories for a slot in the respective tabs.' | trans }}</p>
", "@ConfigurableBundleGui/Slot/_partials/slot-tips.twig", "/data/vendor/spryker/configurable-bundle-gui/src/Spryker/Zed/ConfigurableBundleGui/Presentation//Slot/_partials/slot-tips.twig");
    }
}
