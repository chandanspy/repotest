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

/* @ProductListGui/_partials/confirmation-modal-window.twig */
class __TwigTemplate_1d4ae15970e2bb551c9e6fe3966125f224ebeb72f18824649aecd349014e0dc1 extends Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("modalId", $context)) ? (_twig_default_filter((isset($context["modalId"]) || array_key_exists("modalId", $context) ? $context["modalId"] : (function () { throw new RuntimeError('Variable "modalId" does not exist.', 1, $this->source); })()), "confirmation-modal-window")) : ("confirmation-modal-window")), "html", null, true);
        echo "\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("modalTitle", $context)) ? (_twig_default_filter((isset($context["modalTitle"]) || array_key_exists("modalTitle", $context) ? $context["modalTitle"] : (function () { throw new RuntimeError('Variable "modalTitle" does not exist.', 5, $this->source); })()), "Confirm action")) : ("Confirm action"))), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["modalMessage"]) || array_key_exists("modalMessage", $context) ? $context["modalMessage"] : (function () { throw new RuntimeError('Variable "modalMessage" does not exist.', 11, $this->source); })())), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary js-btn-confirm\">
                    ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("confirmButtonText", $context)) ? (_twig_default_filter((isset($context["confirmButtonText"]) || array_key_exists("confirmButtonText", $context) ? $context["confirmButtonText"] : (function () { throw new RuntimeError('Variable "confirmButtonText" does not exist.', 15, $this->source); })()), "Сonfirm")) : ("Сonfirm"))), "html", null, true);
        echo "
                </button>
                <button type=\"button\" class=\"btn btn-danger js-btn-cancel\" data-dismiss=\"modal\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("cancelButtonText", $context)) ? (_twig_default_filter((isset($context["cancelButtonText"]) || array_key_exists("cancelButtonText", $context) ? $context["cancelButtonText"] : (function () { throw new RuntimeError('Variable "cancelButtonText" does not exist.', 18, $this->source); })()), "Cancel")) : ("Cancel"))), "html", null, true);
        echo "
                </button>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "@ProductListGui/_partials/confirmation-modal-window.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  61 => 15,  54 => 11,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"{{ modalId | default('confirmation-modal-window') }}\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ modalTitle | default('Confirm action') | trans }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>{{ modalMessage | trans }}</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary js-btn-confirm\">
                    {{ confirmButtonText | default('Сonfirm') | trans }}
                </button>
                <button type=\"button\" class=\"btn btn-danger js-btn-cancel\" data-dismiss=\"modal\">
                    {{ cancelButtonText | default('Cancel') | trans }}
                </button>
            </div>
        </div>
    </div>
</div>

", "@ProductListGui/_partials/confirmation-modal-window.twig", "/data/vendor/spryker/product-list-gui/src/Spryker/Zed/ProductListGui/Presentation//_partials/confirmation-modal-window.twig");
    }
}
