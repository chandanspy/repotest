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

/* @SecurityGui/Partial/form-message.twig */
class __TwigTemplate_f0e55479cf73fd440b415ae278850655799cf2d2a168f670145bc0d077702e37 extends Template
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
        if ( !array_key_exists("messageType", $context)) {
            // line 2
            $context["messageType"] = "error";
        }
        // line 4
        echo "
";
        // line 5
        if ((array_key_exists("message", $context) &&  !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 5, $this->source); })())))) {
            // line 6
            echo "    <div class=\"form-group has-";
            echo twig_escape_filter($this->env, (isset($context["messageType"]) || array_key_exists("messageType", $context) ? $context["messageType"] : (function () { throw new RuntimeError('Variable "messageType" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\">
        <span class=\"help-block\">
            <ul class=\"list-unstyled\">
                <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 9, $this->source); })())), "html", null, true);
            echo "</li>
            </ul>
        </span>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@SecurityGui/Partial/form-message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  47 => 6,  45 => 5,  42 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if messageType is not defined %}
{% set messageType = 'error' %}
{% endif %}

{% if message is defined and message is not empty %}
    <div class=\"form-group has-{{ messageType }}\">
        <span class=\"help-block\">
            <ul class=\"list-unstyled\">
                <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ message | trans }}</li>
            </ul>
        </span>
    </div>
{% endif %}
", "@SecurityGui/Partial/form-message.twig", "/data/vendor/spryker/security-gui/src/Spryker/Zed/SecurityGui/Presentation/Partial/form-message.twig");
    }
}
