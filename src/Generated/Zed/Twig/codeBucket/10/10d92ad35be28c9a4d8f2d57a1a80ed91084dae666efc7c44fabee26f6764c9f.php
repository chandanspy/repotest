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

/* @Messenger/Partials/flash-messages.twig */
class __TwigTemplate_56b9c5cc54e188c3aa523d56859743f3d5ed03a9d5d4f6e3970b5293917bc24f extends Template
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
        echo "<div class=\"flash-messages\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "session", [], "any", false, false, false, 2), "flashbag", [], "any", false, false, false, 2), "get", [0 => "flash.messages.success"], "method", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 3
            echo "        <div class=\"alert alert-success\">
            <i class=\"far fa-check-circle alert__icon\"></i>
            <div class=\"alert__text\">
                ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "flashbag", [], "any", false, false, false, 10), "get", [0 => "flash.messages.info"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        <div class=\"alert alert-info\">
            <i class=\"fas fa-info-circle alert__icon\"></i>
            <div class=\"alert__text\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "flashbag", [], "any", false, false, false, 18), "get", [0 => "flash.messages.error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "        <div class=\"alert alert-danger\">
            <i class=\"fas fa-ban alert__icon\"></i>
            <div class=\"alert__text\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"]), "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@Messenger/Partials/flash-messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  89 => 22,  84 => 19,  79 => 18,  69 => 14,  64 => 11,  59 => 10,  49 => 6,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flash-messages\">
    {% for message in app.session.flashbag.get('flash.messages.success') %}
        <div class=\"alert alert-success\">
            <i class=\"far fa-check-circle alert__icon\"></i>
            <div class=\"alert__text\">
                {{ message | trans }}
            </div>
        </div>
    {% endfor %}
    {% for message in app.session.flashbag.get('flash.messages.info') %}
        <div class=\"alert alert-info\">
            <i class=\"fas fa-info-circle alert__icon\"></i>
            <div class=\"alert__text\">
                {{ message | trans }}
            </div>
        </div>
    {% endfor %}
    {% for message in app.session.flashbag.get('flash.messages.error') %}
        <div class=\"alert alert-danger\">
            <i class=\"fas fa-ban alert__icon\"></i>
            <div class=\"alert__text\">
                {{ message | trans }}
            </div>
        </div>
    {% endfor %}
</div>
", "@Messenger/Partials/flash-messages.twig", "/data/vendor/spryker/messenger/src/Spryker/Zed/Messenger/Presentation//Partials/flash-messages.twig");
    }
}
