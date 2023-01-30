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

/* __string_template__6345433f82debd3f5729e37a1d7818da0c30fdbc6c92ab4e0c4e61632cd62897 */
class __TwigTemplate_a9d7be5fac4467a11a1e137923d450f191df3d265a41115b5b8564fde25322e1 extends Template
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
        echo call_user_func_array($this->env->getFunction('chart')->getCallable(), [$this->env, "count-orders", "count-orders"]);
    }

    public function getTemplateName()
    {
        return "__string_template__6345433f82debd3f5729e37a1d7818da0c30fdbc6c92ab4e0c4e61632cd62897";
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
        return new Source("{{ chart('count-orders','count-orders') }}", "__string_template__6345433f82debd3f5729e37a1d7818da0c30fdbc6c92ab4e0c4e61632cd62897", "");
    }
}
