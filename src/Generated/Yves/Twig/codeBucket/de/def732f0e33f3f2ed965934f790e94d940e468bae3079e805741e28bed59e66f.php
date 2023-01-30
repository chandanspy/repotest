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

/* __string_template__e7b82d21c3c7d0ff44053d0acf989c49911ebf37da31cc640d368540b914a5d5 */
class __TwigTemplate_0c1b8d6523b6bcd41a2778e43182831d1412899fe6b5979645a990661fad8322 extends Template
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
        echo call_user_func_array($this->env->getFunction('content_navigation')->getCallable(), ["navigation-social-links", "footer-social-links"]);
    }

    public function getTemplateName()
    {
        return "__string_template__e7b82d21c3c7d0ff44053d0acf989c49911ebf37da31cc640d368540b914a5d5";
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
        return new Source("{{ content_navigation('navigation-social-links', 'footer-social-links') }}", "__string_template__e7b82d21c3c7d0ff44053d0acf989c49911ebf37da31cc640d368540b914a5d5", "");
    }
}
