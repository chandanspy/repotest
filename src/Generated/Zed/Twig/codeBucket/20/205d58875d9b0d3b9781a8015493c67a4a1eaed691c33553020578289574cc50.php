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

/* @CmsBlockGui/_partial/activate-button.twig */
class __TwigTemplate_82e6ec5ab02ca4a7d2d34f57a82b7b99d2c953912ec4ce14ca18992e4494ec98 extends Template
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
        if ((isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            $context["actionUrl"] = call_user_func_array($this->env->getFunction('url')->getCallable(), ["/cms-block-gui/edit-block/deactivate", ["id-cms-block" => (isset($context["idCmsBlock"]) || array_key_exists("idCmsBlock", $context) ? $context["idCmsBlock"] : (function () { throw new RuntimeError('Variable "idCmsBlock" does not exist.', 2, $this->source); })()), "redirect-url" => (isset($context["redirectUrl"]) || array_key_exists("redirectUrl", $context) ? $context["redirectUrl"] : (function () { throw new RuntimeError('Variable "redirectUrl" does not exist.', 2, $this->source); })())]]);
            // line 3
            echo "    ";
            $context["buttonClass"] = "btn-remove";
            // line 4
            echo "    ";
            $context["iconClass"] = "fa-trash";
            // line 5
            echo "    ";
            $context["formLabel"] = "Deactivate";
        } else {
            // line 7
            echo "    ";
            $context["actionUrl"] = call_user_func_array($this->env->getFunction('url')->getCallable(), ["/cms-block-gui/edit-block/activate", ["id-cms-block" => (isset($context["idCmsBlock"]) || array_key_exists("idCmsBlock", $context) ? $context["idCmsBlock"] : (function () { throw new RuntimeError('Variable "idCmsBlock" does not exist.', 7, $this->source); })()), "redirect-url" => (isset($context["redirectUrl"]) || array_key_exists("redirectUrl", $context) ? $context["redirectUrl"] : (function () { throw new RuntimeError('Variable "redirectUrl" does not exist.', 7, $this->source); })())]]);
            // line 8
            echo "    ";
            $context["buttonClass"] = "btn-view";
            // line 9
            echo "    ";
            $context["iconClass"] = "fa-caret-right";
            // line 10
            echo "    ";
            $context["formLabel"] = "Activate";
        }
        // line 12
        echo "
";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["toggleActiveCmsBlockForm"]) || array_key_exists("toggleActiveCmsBlockForm", $context) ? $context["toggleActiveCmsBlockForm"] : (function () { throw new RuntimeError('Variable "toggleActiveCmsBlockForm" does not exist.', 13, $this->source); })()), 'form_start', ["action" =>         // line 14
(isset($context["actionUrl"]) || array_key_exists("actionUrl", $context) ? $context["actionUrl"] : (function () { throw new RuntimeError('Variable "actionUrl" does not exist.', 14, $this->source); })()), "attr" => ["class" => "form-inline"]]);
        // line 16
        echo "
    <button type=\"submit\" class=\"btn btn-sm btn-outline safe-submit ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["buttonClass"]) || array_key_exists("buttonClass", $context) ? $context["buttonClass"] : (function () { throw new RuntimeError('Variable "buttonClass" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\">
        <i class=\"fa ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\"></i>
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["formLabel"]) || array_key_exists("formLabel", $context) ? $context["formLabel"] : (function () { throw new RuntimeError('Variable "formLabel" does not exist.', 19, $this->source); })())), "html", null, true);
        echo "
    </button>
";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["toggleActiveCmsBlockForm"]) || array_key_exists("toggleActiveCmsBlockForm", $context) ? $context["toggleActiveCmsBlockForm"] : (function () { throw new RuntimeError('Variable "toggleActiveCmsBlockForm" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CmsBlockGui/_partial/activate-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  82 => 19,  78 => 18,  74 => 17,  71 => 16,  69 => 14,  68 => 13,  65 => 12,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if isActive %}
    {% set actionUrl = url('/cms-block-gui/edit-block/deactivate', {'id-cms-block': idCmsBlock, 'redirect-url' : redirectUrl}) %}
    {% set buttonClass = 'btn-remove' %}
    {% set iconClass = 'fa-trash' %}
    {% set formLabel = 'Deactivate' %}
{% else %}
    {% set actionUrl = url('/cms-block-gui/edit-block/activate', {'id-cms-block': idCmsBlock, 'redirect-url' : redirectUrl }) %}
    {% set buttonClass = 'btn-view' %}
    {% set iconClass = 'fa-caret-right' %}
    {% set formLabel = 'Activate' %}
{% endif %}

{{ form_start(toggleActiveCmsBlockForm, {
    'action': actionUrl,
    'attr': {'class': 'form-inline'},
}) }}
    <button type=\"submit\" class=\"btn btn-sm btn-outline safe-submit {{ buttonClass }}\">
        <i class=\"fa {{ iconClass }}\"></i>
        {{ formLabel | trans }}
    </button>
{{ form_end(toggleActiveCmsBlockForm) }}
", "@CmsBlockGui/_partial/activate-button.twig", "/data/vendor/spryker/cms-block-gui/src/Spryker/Zed/CmsBlockGui/Presentation//_partial/activate-button.twig");
    }
}
