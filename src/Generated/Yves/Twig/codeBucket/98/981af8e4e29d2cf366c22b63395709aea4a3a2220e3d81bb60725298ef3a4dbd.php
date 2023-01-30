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

/* __string_template__58a37b9bf867628c609510de9ee7bba0f2a7d6188e697b65b04cc05b53d477fc */
class __TwigTemplate_8f785f378396511b028093c144ce97fccd51bf31f6d2c34eaf0ea7b0a56fe0d1 extends Template
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
        echo call_user_func_array($this->env->getFunction('content_navigation')->getCallable(), ["navigation-main-mobile", "navigation-header"]);
    }

    public function getTemplateName()
    {
        return "__string_template__58a37b9bf867628c609510de9ee7bba0f2a7d6188e697b65b04cc05b53d477fc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ content_navigation('navigation-main-mobile', 'navigation-header') }}", "__string_template__58a37b9bf867628c609510de9ee7bba0f2a7d6188e697b65b04cc05b53d477fc", "");
    }
}
