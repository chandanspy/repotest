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

/* @StoreLocations/views/store/storedetails.twig */
class __TwigTemplate_e9c1a96949233a2ae6d2ed70eef9e7c8952380408d770b5a71b0aef673aec3f1 extends Template
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
        if (array_key_exists("storedata", $context)) {
            // line 2
            echo "    yes
";
        }
    }

    public function getTemplateName()
    {
        return "@StoreLocations/views/store/storedetails.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if storedata is defined %}
    yes
{% endif %}
", "@StoreLocations/views/store/storedetails.twig", "/data/src/Pyz/Yves/StoreLocations/Theme/default/views/store/storedetails.twig");
    }
}
