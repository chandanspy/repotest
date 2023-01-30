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

/* __string_template__7047629678d491ba71786c3134910015f4a06d5046818359c09f8803e8296dad */
class __TwigTemplate_9498a1d79394245ef4bd788e3c8e462a4fab7fbab7aef0323f3f2dff5f0ca6b4 extends Template
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
        echo "<p class=\"section__sub-title\">Sehen Sie sich die beliebtesten Büromöbel und Schreibwaren unseres Stores an.</p>";
        echo call_user_func_array($this->env->getFunction('content_product_abstract_list')->getCallable(), ["apl-2", "slider"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__7047629678d491ba71786c3134910015f4a06d5046818359c09f8803e8296dad";
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
        return new Source("<p class=\"section__sub-title\">Sehen Sie sich die beliebtesten Büromöbel und Schreibwaren unseres Stores an.</p>{{ content_product_abstract_list('apl-2', 'slider') }}
", "__string_template__7047629678d491ba71786c3134910015f4a06d5046818359c09f8803e8296dad", "");
    }
}
