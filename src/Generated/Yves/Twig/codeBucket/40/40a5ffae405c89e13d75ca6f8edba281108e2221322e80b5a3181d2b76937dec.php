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

/* __string_template__d5899bfc1063e57c6838ca03b0edbcc0020b154b28444473d28d0c28a102fc44 */
class __TwigTemplate_1c855462d0e292445afe5a2098a1e019d18634060f3376caf94967d4a687b277 extends Template
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
        echo call_user_func_array($this->env->getFunction('content_navigation')->getCallable(), ["navigation-main-desktop", "navigation-header"]);
    }

    public function getTemplateName()
    {
        return "__string_template__d5899bfc1063e57c6838ca03b0edbcc0020b154b28444473d28d0c28a102fc44";
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
        return new Source("{{ content_navigation('navigation-main-desktop', 'navigation-header') }}", "__string_template__d5899bfc1063e57c6838ca03b0edbcc0020b154b28444473d28d0c28a102fc44", "");
    }
}
