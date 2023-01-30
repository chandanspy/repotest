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

/* __string_template__ceb9972ed9a8029cc27f4dda1ca5c55ef0e517edd18ee9a03c2fda708aa4a77d */
class __TwigTemplate_51931e2e37abf5dc35f2e04e6862e129418a99f7fb8197a67c1176596d7a6d3b extends Template
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
        echo "<p class=\"section__sub-title\">It might be work, but it doesn't have to feel like it. Explore some of our featured items.</p>
";
        // line 2
        echo call_user_func_array($this->env->getFunction('content_product_abstract_list')->getCallable(), ["apl-1", "slider"]);
    }

    public function getTemplateName()
    {
        return "__string_template__ceb9972ed9a8029cc27f4dda1ca5c55ef0e517edd18ee9a03c2fda708aa4a77d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p class=\"section__sub-title\">It might be work, but it doesn't have to feel like it. Explore some of our featured items.</p>
{{ content_product_abstract_list('apl-1', 'slider') }}", "__string_template__ceb9972ed9a8029cc27f4dda1ca5c55ef0e517edd18ee9a03c2fda708aa4a77d", "");
    }
}
