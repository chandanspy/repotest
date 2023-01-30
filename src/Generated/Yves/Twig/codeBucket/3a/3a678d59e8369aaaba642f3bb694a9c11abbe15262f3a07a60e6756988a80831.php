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

/* __string_template__a09150f012b3d6249cdf699132ac6a42766fed424c81192c11bbc246f9bb69e3 */
class __TwigTemplate_3bd56cf69482bf1b428b246a33d905a23147d2cbff21583ef84eaed5f5151bac extends Template
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
        echo "<p class=\"section__sub-title\">See what other customers enjoy most from our wide selection of top quality furniture and supplies.</p>
";
        // line 2
        echo call_user_func_array($this->env->getFunction('content_product_abstract_list')->getCallable(), ["apl-2", "slider"]);
    }

    public function getTemplateName()
    {
        return "__string_template__a09150f012b3d6249cdf699132ac6a42766fed424c81192c11bbc246f9bb69e3";
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
        return new Source("<p class=\"section__sub-title\">See what other customers enjoy most from our wide selection of top quality furniture and supplies.</p>
{{ content_product_abstract_list('apl-2', 'slider') }}", "__string_template__a09150f012b3d6249cdf699132ac6a42766fed424c81192c11bbc246f9bb69e3", "");
    }
}
