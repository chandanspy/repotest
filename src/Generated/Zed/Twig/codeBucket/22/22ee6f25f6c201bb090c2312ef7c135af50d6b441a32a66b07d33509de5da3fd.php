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

/* __string_template__350ba4dc8e2aa67542357938565b21c154c6c0cd114e0ef0b988c210fdcfff4d */
class __TwigTemplate_e3d0af5bf98420d06f6be39acf1102346688ed54af125b2efc7794fc1628083c extends Template
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
        echo call_user_func_array($this->env->getFunction('chart')->getCallable(), [$this->env, "top-orders", "top-orders"]);
    }

    public function getTemplateName()
    {
        return "__string_template__350ba4dc8e2aa67542357938565b21c154c6c0cd114e0ef0b988c210fdcfff4d";
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
        return new Source("{{ chart('top-orders','top-orders') }}", "__string_template__350ba4dc8e2aa67542357938565b21c154c6c0cd114e0ef0b988c210fdcfff4d", "");
    }
}
