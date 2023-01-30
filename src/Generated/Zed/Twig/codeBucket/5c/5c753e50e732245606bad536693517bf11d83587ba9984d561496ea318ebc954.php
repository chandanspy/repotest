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

/* @CmsSlotBlockGui/SlotBlock/index.twig */
class __TwigTemplate_e647989780ed3b9cc022b9ad8f91cd6528933d865b70c793ede38d6fbb025a0d extends Template
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
        ob_start();
        // line 2
        echo "    <a href=\"#\" class=\"btn btn-xs btn-outline btn-create\" data-direction=\"up\" onclick=\"return false;\">
        <i class=\"fa fa-arrow-up\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Move Up"), "html", null, true);
        echo "
    </a>
    <a href=\"#\" class=\"btn btn-xs btn-outline btn-create\" data-direction=\"down\" onclick=\"return false;\">
        <i class=\"fa fa-arrow-down\"></i>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Move Down"), "html", null, true);
        echo "
    </a>
    <a href=\"\" class=\"btn btn-xs btn-outline btn-view\" target=\"_blank\">
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View Block"), "html", null, true);
        echo "
    </a>
    <a href=\"#\" class=\"btn btn-xs btn-outline btn-danger js-slot-block-remove-button\" onclick=\"return false;\">
        <i class=\"fa fa-trash\"></i>
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        echo "
    </a>
";
        $context["actionsButtonsTemplate"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 18
        ob_start();
        // line 19
        echo "    <span class=\"label label-info\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active"), "html", null, true);
        echo "</span>
";
        $context["activeLabelTemplate"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        ob_start();
        // line 22
        echo "    <span class=\"label label-danger\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inactive"), "html", null, true);
        echo "</span>
";
        $context["inactiveLabelTemplate"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 24
        $context["storeTemplate"] = ('' === $tmp = "    <span class=\"label label-info\"></span>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
";
        // line 28
        $this->loadTemplate("@CmsSlotBlockGui/SlotBlock/index.twig", "@CmsSlotBlockGui/SlotBlock/index.twig", 28, "274572263")->display(twig_array_merge($context, ["row_class" => "js-row-list-of-blocks-container"]));
    }

    public function getTemplateName()
    {
        return "@CmsSlotBlockGui/SlotBlock/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  88 => 27,  85 => 24,  79 => 22,  77 => 21,  71 => 19,  69 => 18,  63 => 15,  56 => 11,  50 => 8,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set actionsButtonsTemplate %}
    <a href=\"#\" class=\"btn btn-xs btn-outline btn-create\" data-direction=\"up\" onclick=\"return false;\">
        <i class=\"fa fa-arrow-up\"></i>
        {{ 'Move Up' | trans }}
    </a>
    <a href=\"#\" class=\"btn btn-xs btn-outline btn-create\" data-direction=\"down\" onclick=\"return false;\">
        <i class=\"fa fa-arrow-down\"></i>
        {{ 'Move Down' | trans }}
    </a>
    <a href=\"\" class=\"btn btn-xs btn-outline btn-view\" target=\"_blank\">
        {{ 'View Block' | trans }}
    </a>
    <a href=\"#\" class=\"btn btn-xs btn-outline btn-danger js-slot-block-remove-button\" onclick=\"return false;\">
        <i class=\"fa fa-trash\"></i>
        {{ 'Delete' | trans }}
    </a>
{% endset %}
{% set activeLabelTemplate %}
    <span class=\"label label-info\">{{ 'Active' | trans }}</span>
{% endset %}
{% set inactiveLabelTemplate %}
    <span class=\"label label-danger\">{{ 'Inactive' | trans }}</span>
{% endset %}
{% set storeTemplate %}
    <span class=\"label label-info\"></span>
{% endset %}

{% embed '@Gui/Partials/widget.twig' with {
    row_class: 'js-row-list-of-blocks-container',
} %}

    {% block widget_title -%}
        <h5>{{ 'List of Blocks for \"%SLOT_NAME%\" Slot' | trans({\"%SLOT_NAME%\": slotName}) }}</h5>
    {%- endblock %}

    {% block widget_content %}

        <div
            class=\"cms-slot-blocks js-cms-slot-blocks\"
            data-actions-buttons-template=\"{{ actionsButtonsTemplate | e }}\"
            data-active-label-template=\"{{ activeLabelTemplate | e }}\"
            data-inactive-label-template=\"{{ inactiveLabelTemplate | e }}\"
            data-store-template=\"{{ storeTemplate | e }}\"
            data-slot-block-item-form-template=\"{{ form_widget(cmsSlotBlockCollectionForm.cmsSlotBlocks.vars.prototype) | e }}\"
            data-alert-title=\"{{ 'There are unsaved changes' | trans }}\"
            data-alert-go-back-button=\"{{ 'Go Back' | trans }}\"
        >
            {{ form_start(cmsBlockChoiceForm) }}
                <div class=\"row\">
                    <div class=\"cms-slot-blocks__col col-sm-5 col-md-4\">
                        {{ form_widget(cmsBlockChoiceForm.cmsBlocks) }}
                    </div>
                    <div class=\"cms-slot-blocks__col col-sm-2 col-md-1\">
                        {{ form_widget(cmsBlockChoiceForm.add) }}
                    </div>
                    <div class=\"cms-slot-blocks__col col-sm-5 col-md-7\">
                    </div>
                </div>
            {{ form_end(cmsBlockChoiceForm) }}

            {{ slotBlockTable | raw }}

            {{ form_start(cmsSlotBlockCollectionForm, {'action': '/cms-slot-block-gui/slot-block/form?id-cms-slot-template='~idCmsSlotTemplate~'&id-cms-slot='~idCmsSlot}) }}

            <div id=\"js-cms-slot-block-form-inner-wrapper\">
                {% include '@CmsSlotBlockGui/SlotBlock/form.twig' %}
            </div>

            <div class=\"row\">
                <div class=\"cms-slot-blocks__col col-sm-2 col-md-1\">
                    <input type=\"submit\" class=\"btn btn-primary safe-submit js-slot-block-save-button\" value=\"{{ 'Save' | trans }}\">
                </div>
                <div class=\"cms-slot-blocks__col col-sm-10 col-md-11\">
                    <input type=\"reset\" class=\"btn btn-danger btn-outline js-slot-block-reset-button hidden\" value=\"{{ 'Cancel' | trans }}\">
                </div>
            </div>

            {{ form_end(cmsSlotBlockCollectionForm) }}
            <div class=\"cms-slot-blocks__overlay js-cms-slot-blocks__overlay\"></div>
        </div>
    {% endblock %}

{% endembed %}
", "@CmsSlotBlockGui/SlotBlock/index.twig", "/data/vendor/spryker/cms-slot-block-gui/src/Spryker/Zed/CmsSlotBlockGui/Presentation//SlotBlock/index.twig");
    }
}


/* @CmsSlotBlockGui/SlotBlock/index.twig */
class __TwigTemplate_e647989780ed3b9cc022b9ad8f91cd6528933d865b70c793ede38d6fbb025a0d___274572263 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_title' => [$this, 'block_widget_title'],
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CmsSlotBlockGui/SlotBlock/index.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 32
    public function block_widget_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "<h5>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of Blocks for \"%SLOT_NAME%\" Slot", ["%SLOT_NAME%" => (isset($context["slotName"]) || array_key_exists("slotName", $context) ? $context["slotName"] : (function () { throw new RuntimeError('Variable "slotName" does not exist.', 33, $this->source); })())]), "html", null, true);
        echo "</h5>";
    }

    // line 36
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "
        <div
            class=\"cms-slot-blocks js-cms-slot-blocks\"
            data-actions-buttons-template=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["actionsButtonsTemplate"]) || array_key_exists("actionsButtonsTemplate", $context) ? $context["actionsButtonsTemplate"] : (function () { throw new RuntimeError('Variable "actionsButtonsTemplate" does not exist.', 40, $this->source); })()));
        echo "\"
            data-active-label-template=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["activeLabelTemplate"]) || array_key_exists("activeLabelTemplate", $context) ? $context["activeLabelTemplate"] : (function () { throw new RuntimeError('Variable "activeLabelTemplate" does not exist.', 41, $this->source); })()));
        echo "\"
            data-inactive-label-template=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["inactiveLabelTemplate"]) || array_key_exists("inactiveLabelTemplate", $context) ? $context["inactiveLabelTemplate"] : (function () { throw new RuntimeError('Variable "inactiveLabelTemplate" does not exist.', 42, $this->source); })()));
        echo "\"
            data-store-template=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["storeTemplate"]) || array_key_exists("storeTemplate", $context) ? $context["storeTemplate"] : (function () { throw new RuntimeError('Variable "storeTemplate" does not exist.', 43, $this->source); })()));
        echo "\"
            data-slot-block-item-form-template=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cmsSlotBlockCollectionForm"]) || array_key_exists("cmsSlotBlockCollectionForm", $context) ? $context["cmsSlotBlockCollectionForm"] : (function () { throw new RuntimeError('Variable "cmsSlotBlockCollectionForm" does not exist.', 44, $this->source); })()), "cmsSlotBlocks", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "prototype", [], "any", false, false, false, 44), 'widget'));
        echo "\"
            data-alert-title=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are unsaved changes"), "html", null, true);
        echo "\"
            data-alert-go-back-button=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Go Back"), "html", null, true);
        echo "\"
        >
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cmsBlockChoiceForm"]) || array_key_exists("cmsBlockChoiceForm", $context) ? $context["cmsBlockChoiceForm"] : (function () { throw new RuntimeError('Variable "cmsBlockChoiceForm" does not exist.', 48, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"cms-slot-blocks__col col-sm-5 col-md-4\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cmsBlockChoiceForm"]) || array_key_exists("cmsBlockChoiceForm", $context) ? $context["cmsBlockChoiceForm"] : (function () { throw new RuntimeError('Variable "cmsBlockChoiceForm" does not exist.', 51, $this->source); })()), "cmsBlocks", [], "any", false, false, false, 51), 'widget');
        echo "
                    </div>
                    <div class=\"cms-slot-blocks__col col-sm-2 col-md-1\">
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["cmsBlockChoiceForm"]) || array_key_exists("cmsBlockChoiceForm", $context) ? $context["cmsBlockChoiceForm"] : (function () { throw new RuntimeError('Variable "cmsBlockChoiceForm" does not exist.', 54, $this->source); })()), "add", [], "any", false, false, false, 54), 'widget');
        echo "
                    </div>
                    <div class=\"cms-slot-blocks__col col-sm-5 col-md-7\">
                    </div>
                </div>
            ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cmsBlockChoiceForm"]) || array_key_exists("cmsBlockChoiceForm", $context) ? $context["cmsBlockChoiceForm"] : (function () { throw new RuntimeError('Variable "cmsBlockChoiceForm" does not exist.', 59, $this->source); })()), 'form_end');
        echo "

            ";
        // line 61
        echo (isset($context["slotBlockTable"]) || array_key_exists("slotBlockTable", $context) ? $context["slotBlockTable"] : (function () { throw new RuntimeError('Variable "slotBlockTable" does not exist.', 61, $this->source); })());
        echo "

            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cmsSlotBlockCollectionForm"]) || array_key_exists("cmsSlotBlockCollectionForm", $context) ? $context["cmsSlotBlockCollectionForm"] : (function () { throw new RuntimeError('Variable "cmsSlotBlockCollectionForm" does not exist.', 63, $this->source); })()), 'form_start', ["action" => ((("/cms-slot-block-gui/slot-block/form?id-cms-slot-template=" . (isset($context["idCmsSlotTemplate"]) || array_key_exists("idCmsSlotTemplate", $context) ? $context["idCmsSlotTemplate"] : (function () { throw new RuntimeError('Variable "idCmsSlotTemplate" does not exist.', 63, $this->source); })())) . "&id-cms-slot=") . (isset($context["idCmsSlot"]) || array_key_exists("idCmsSlot", $context) ? $context["idCmsSlot"] : (function () { throw new RuntimeError('Variable "idCmsSlot" does not exist.', 63, $this->source); })()))]);
        echo "

            <div id=\"js-cms-slot-block-form-inner-wrapper\">
                ";
        // line 66
        $this->loadTemplate("@CmsSlotBlockGui/SlotBlock/form.twig", "@CmsSlotBlockGui/SlotBlock/index.twig", 66)->display($context);
        // line 67
        echo "            </div>

            <div class=\"row\">
                <div class=\"cms-slot-blocks__col col-sm-2 col-md-1\">
                    <input type=\"submit\" class=\"btn btn-primary safe-submit js-slot-block-save-button\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\">
                </div>
                <div class=\"cms-slot-blocks__col col-sm-10 col-md-11\">
                    <input type=\"reset\" class=\"btn btn-danger btn-outline js-slot-block-reset-button hidden\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "\">
                </div>
            </div>

            ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cmsSlotBlockCollectionForm"]) || array_key_exists("cmsSlotBlockCollectionForm", $context) ? $context["cmsSlotBlockCollectionForm"] : (function () { throw new RuntimeError('Variable "cmsSlotBlockCollectionForm" does not exist.', 78, $this->source); })()), 'form_end');
        echo "
            <div class=\"cms-slot-blocks__overlay js-cms-slot-blocks__overlay\"></div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "@CmsSlotBlockGui/SlotBlock/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 78,  328 => 74,  322 => 71,  316 => 67,  314 => 66,  308 => 63,  303 => 61,  298 => 59,  290 => 54,  284 => 51,  278 => 48,  273 => 46,  269 => 45,  265 => 44,  261 => 43,  257 => 42,  253 => 41,  249 => 40,  244 => 37,  240 => 36,  234 => 33,  230 => 32,  91 => 28,  88 => 27,  85 => 24,  79 => 22,  77 => 21,  71 => 19,  69 => 18,  63 => 15,  56 => 11,  50 => 8,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set actionsButtonsTemplate %}
    <a href=\"#\" class=\"btn btn-xs btn-outline btn-create\" data-direction=\"up\" onclick=\"return false;\">
        <i class=\"fa fa-arrow-up\"></i>
        {{ 'Move Up' | trans }}
    </a>
    <a href=\"#\" class=\"btn btn-xs btn-outline btn-create\" data-direction=\"down\" onclick=\"return false;\">
        <i class=\"fa fa-arrow-down\"></i>
        {{ 'Move Down' | trans }}
    </a>
    <a href=\"\" class=\"btn btn-xs btn-outline btn-view\" target=\"_blank\">
        {{ 'View Block' | trans }}
    </a>
    <a href=\"#\" class=\"btn btn-xs btn-outline btn-danger js-slot-block-remove-button\" onclick=\"return false;\">
        <i class=\"fa fa-trash\"></i>
        {{ 'Delete' | trans }}
    </a>
{% endset %}
{% set activeLabelTemplate %}
    <span class=\"label label-info\">{{ 'Active' | trans }}</span>
{% endset %}
{% set inactiveLabelTemplate %}
    <span class=\"label label-danger\">{{ 'Inactive' | trans }}</span>
{% endset %}
{% set storeTemplate %}
    <span class=\"label label-info\"></span>
{% endset %}

{% embed '@Gui/Partials/widget.twig' with {
    row_class: 'js-row-list-of-blocks-container',
} %}

    {% block widget_title -%}
        <h5>{{ 'List of Blocks for \"%SLOT_NAME%\" Slot' | trans({\"%SLOT_NAME%\": slotName}) }}</h5>
    {%- endblock %}

    {% block widget_content %}

        <div
            class=\"cms-slot-blocks js-cms-slot-blocks\"
            data-actions-buttons-template=\"{{ actionsButtonsTemplate | e }}\"
            data-active-label-template=\"{{ activeLabelTemplate | e }}\"
            data-inactive-label-template=\"{{ inactiveLabelTemplate | e }}\"
            data-store-template=\"{{ storeTemplate | e }}\"
            data-slot-block-item-form-template=\"{{ form_widget(cmsSlotBlockCollectionForm.cmsSlotBlocks.vars.prototype) | e }}\"
            data-alert-title=\"{{ 'There are unsaved changes' | trans }}\"
            data-alert-go-back-button=\"{{ 'Go Back' | trans }}\"
        >
            {{ form_start(cmsBlockChoiceForm) }}
                <div class=\"row\">
                    <div class=\"cms-slot-blocks__col col-sm-5 col-md-4\">
                        {{ form_widget(cmsBlockChoiceForm.cmsBlocks) }}
                    </div>
                    <div class=\"cms-slot-blocks__col col-sm-2 col-md-1\">
                        {{ form_widget(cmsBlockChoiceForm.add) }}
                    </div>
                    <div class=\"cms-slot-blocks__col col-sm-5 col-md-7\">
                    </div>
                </div>
            {{ form_end(cmsBlockChoiceForm) }}

            {{ slotBlockTable | raw }}

            {{ form_start(cmsSlotBlockCollectionForm, {'action': '/cms-slot-block-gui/slot-block/form?id-cms-slot-template='~idCmsSlotTemplate~'&id-cms-slot='~idCmsSlot}) }}

            <div id=\"js-cms-slot-block-form-inner-wrapper\">
                {% include '@CmsSlotBlockGui/SlotBlock/form.twig' %}
            </div>

            <div class=\"row\">
                <div class=\"cms-slot-blocks__col col-sm-2 col-md-1\">
                    <input type=\"submit\" class=\"btn btn-primary safe-submit js-slot-block-save-button\" value=\"{{ 'Save' | trans }}\">
                </div>
                <div class=\"cms-slot-blocks__col col-sm-10 col-md-11\">
                    <input type=\"reset\" class=\"btn btn-danger btn-outline js-slot-block-reset-button hidden\" value=\"{{ 'Cancel' | trans }}\">
                </div>
            </div>

            {{ form_end(cmsSlotBlockCollectionForm) }}
            <div class=\"cms-slot-blocks__overlay js-cms-slot-blocks__overlay\"></div>
        </div>
    {% endblock %}

{% endembed %}
", "@CmsSlotBlockGui/SlotBlock/index.twig", "/data/vendor/spryker/cms-slot-block-gui/src/Spryker/Zed/CmsSlotBlockGui/Presentation//SlotBlock/index.twig");
    }
}
