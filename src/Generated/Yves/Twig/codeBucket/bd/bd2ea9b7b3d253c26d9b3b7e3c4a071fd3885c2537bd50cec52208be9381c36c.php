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

/* __string_template__d12f0d639a90105919dae99610b2e150b6eac2924d6ba6af45be8f51eb769166 */
class __TwigTemplate_0c8c51b10b6706c43505cc5e3212eb9a317e334009f72b90613b0abf9bec42c7 extends Template
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
        echo call_user_func_array($this->env->getFunction('content_banner')->getCallable(), ["br-1", "home-page"]);
        echo call_user_func_array($this->env->getFunction('content_banner')->getCallable(), ["br-2", "home-page"]);
        echo call_user_func_array($this->env->getFunction('content_banner')->getCallable(), ["br-3", "home-page"]);
    }

    public function getTemplateName()
    {
        return "__string_template__d12f0d639a90105919dae99610b2e150b6eac2924d6ba6af45be8f51eb769166";
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
        return new Source("{{ content_banner('br-1', 'home-page') }}{{ content_banner('br-2', 'home-page') }}{{ content_banner('br-3', 'home-page') }}", "__string_template__d12f0d639a90105919dae99610b2e150b6eac2924d6ba6af45be8f51eb769166", "");
    }
}
