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

/* @ProductAttributeGui/Attribute/partials/attribute-form.twig */
class __TwigTemplate_f6e11f443df19adc1bec8708710125d03d36b668e84a8c631d42688d09a97e37 extends Template
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
        echo "<div class=\"tabs-container\">
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1. General Information"), "html", null, true);
        echo "</a></li>
        <li class=\"disabled\"><a>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("2. Translations"), "html", null, true);
        echo "</a></li>
    </ul>

    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
        <div class=\"tab-content\">
            <div id=\"tab_general\" class=\"tab-pane active\">
                <div class=\"panel-body\">

                    ";
        // line 12
        $this->loadTemplate("@ProductAttributeGui/Attribute/partials/attribute-form-content.twig", "@ProductAttributeGui/Attribute/partials/attribute-form.twig", 12)->display($context);
        // line 13
        echo "
                </div>
            </div>
        </div>

        <div class=\"tabs-footer\">
            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo " \" />
        </div>
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/Attribute/partials/attribute-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  69 => 19,  61 => 13,  59 => 12,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tabs-container\">
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a>{{ '1. General Information' | trans }}</a></li>
        <li class=\"disabled\"><a>{{ '2. Translations' | trans }}</a></li>
    </ul>

    {{ form_start(form) }}
        <div class=\"tab-content\">
            <div id=\"tab_general\" class=\"tab-pane active\">
                <div class=\"panel-body\">

                    {% include '@ProductAttributeGui/Attribute/partials/attribute-form-content.twig' %}

                </div>
            </div>
        </div>

        <div class=\"tabs-footer\">
            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }} \" />
        </div>
    {{ form_end(form) }}
</div>
", "@ProductAttributeGui/Attribute/partials/attribute-form.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//Attribute/partials/attribute-form.twig");
    }
}
