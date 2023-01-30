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

/* __string_template__71e67dc46b34e5f7224b0c54615c92f6b8951c7ef91328029303999022f6aa3f */
class __TwigTemplate_dfaf7dcf27f7a9cac52334b54a5d0b3925c9f69e650809fe9d49b3bc4929039e extends Template
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
        echo "<p class=\"section__sub-title\">Es ist zwar Arbeit, aber es muss sich nicht danach anfühlen. Sehen Sie sich unsere Produktangebote an.</p>";
        echo call_user_func_array($this->env->getFunction('content_product_abstract_list')->getCallable(), ["apl-1", "slider"]);
    }

    public function getTemplateName()
    {
        return "__string_template__71e67dc46b34e5f7224b0c54615c92f6b8951c7ef91328029303999022f6aa3f";
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
        return new Source("<p class=\"section__sub-title\">Es ist zwar Arbeit, aber es muss sich nicht danach anfühlen. Sehen Sie sich unsere Produktangebote an.</p>{{ content_product_abstract_list('apl-1', 'slider') }}", "__string_template__71e67dc46b34e5f7224b0c54615c92f6b8951c7ef91328029303999022f6aa3f", "");
    }
}
