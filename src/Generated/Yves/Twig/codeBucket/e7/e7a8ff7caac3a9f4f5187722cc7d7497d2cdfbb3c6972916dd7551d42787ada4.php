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

/* __string_template__502c4f93c514a9a1e0f8f7c2b59415bfc1cac2cb4056cc216724e2f1bee43ff4 */
class __TwigTemplate_1d705f5d20a33697310d1e3845129479eb04ead877220f1866c76ec73b3e2dca extends Template
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
        echo call_user_func_array($this->env->getFunction('content_navigation')->getCallable(), ["navigation-footer-categories", "navigation-footer"]);
        echo call_user_func_array($this->env->getFunction('content_navigation')->getCallable(), ["navigation-footer-brands", "navigation-footer"]);
        echo call_user_func_array($this->env->getFunction('content_navigation')->getCallable(), ["navigation-footer", "navigation-footer"]);
    }

    public function getTemplateName()
    {
        return "__string_template__502c4f93c514a9a1e0f8f7c2b59415bfc1cac2cb4056cc216724e2f1bee43ff4";
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
        return new Source("{{ content_navigation('navigation-footer-categories', 'navigation-footer') }}{{ content_navigation('navigation-footer-brands', 'navigation-footer') }}{{ content_navigation('navigation-footer', 'navigation-footer') }}", "__string_template__502c4f93c514a9a1e0f8f7c2b59415bfc1cac2cb4056cc216724e2f1bee43ff4", "");
    }
}
