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

/* @CmsBlockGui/_partial/_form-submit.twig */
class __TwigTemplate_1fe5310caf6ce8729beba5fc60ba8a0283edb0f5be38e6ac270d3ba80ae2df0d extends Template
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
        echo "<input type=\"submit\" id=\"submit-cms\" class=\"btn btn-create safe-submit\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "@CmsBlockGui/_partial/_form-submit.twig";
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
        return new Source("<input type=\"submit\" id=\"submit-cms\" class=\"btn btn-create safe-submit\" value=\"{{ 'Save' | trans }}\" />
", "@CmsBlockGui/_partial/_form-submit.twig", "/data/vendor/spryker/cms-block-gui/src/Spryker/Zed/CmsBlockGui/Presentation//_partial/_form-submit.twig");
    }
}
