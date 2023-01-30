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

/* __string_template__2fa652a8b045d0fd49a9486a75d8ba325d410032baea65c4e522aaf6e071eeaa */
class __TwigTemplate_19e6dd27840882d60599ce0d6735c8a0676db2fab8d461a23181ba123cf5fdd1 extends Template
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
        echo call_user_func_array($this->env->getFunction('content_navigation')->getCallable(), ["navigation-partners", "footer-partners"]);
    }

    public function getTemplateName()
    {
        return "__string_template__2fa652a8b045d0fd49a9486a75d8ba325d410032baea65c4e522aaf6e071eeaa";
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
        return new Source("{{ content_navigation('navigation-partners', 'footer-partners') }}", "__string_template__2fa652a8b045d0fd49a9486a75d8ba325d410032baea65c4e522aaf6e071eeaa", "");
    }
}
