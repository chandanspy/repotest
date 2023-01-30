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

/* __string_template__748baca60c9df3a316db6d3a813a3a89a51cd2b87d64e7a8ef11dcf737536be6 */
class __TwigTemplate_cfe2f4af09b3c022e49e049cd7a7505b981e26910623cef56fe9a8f6859ff29e extends Template
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
        echo call_user_func_array($this->env->getFunction('chart')->getCallable(), [$this->env, "status-orders", "status-orders"]);
    }

    public function getTemplateName()
    {
        return "__string_template__748baca60c9df3a316db6d3a813a3a89a51cd2b87d64e7a8ef11dcf737536be6";
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
        return new Source("{{ chart('status-orders','status-orders') }}", "__string_template__748baca60c9df3a316db6d3a813a3a89a51cd2b87d64e7a8ef11dcf737536be6", "");
    }
}
