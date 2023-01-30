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

/* @CmsSlotBlockGui/SlotBlock/form.twig */
class __TwigTemplate_bbb411f5b17bc12c96f304681a6fec61d5327a8a0c3d4738eb7f98b4fad5911a extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cmsSlotBlockCollectionForm"]) || array_key_exists("cmsSlotBlockCollectionForm", $context) ? $context["cmsSlotBlockCollectionForm"] : (function () { throw new RuntimeError('Variable "cmsSlotBlockCollectionForm" does not exist.', 1, $this->source); })()), "cmsSlotBlocks", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["slotBlockItemForm"]) {
            // line 2
            echo "    <div class=\"js-cms-slot-block-form-item\" id=\"js-cms-slot-block-form-item-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["slotBlockItemForm"], "idCmsBlock", [], "any", false, false, false, 2), "vars", [], "any", false, false, false, 2), "value", [], "any", false, false, false, 2), "html", null, true);
            echo "\">
        ";
            // line 3
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["slotBlockItemForm"], "idSlotTemplate", [], "any", false, false, false, 3), 'widget');
            echo "
        ";
            // line 4
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["slotBlockItemForm"], "idSlot", [], "any", false, false, false, 4), 'widget');
            echo "
        ";
            // line 5
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["slotBlockItemForm"], "idCmsBlock", [], "any", false, false, false, 5), 'widget');
            echo "
        ";
            // line 6
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["slotBlockItemForm"], "position", [], "any", false, false, false, 6), 'widget');
            echo "
        ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["slotBlockItemForm"], "conditions", [], "any", false, false, false, 7), 'widget');
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slotBlockItemForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@CmsSlotBlockGui/SlotBlock/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 7,  58 => 6,  54 => 5,  50 => 4,  46 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for slotBlockItemForm in cmsSlotBlockCollectionForm.cmsSlotBlocks %}
    <div class=\"js-cms-slot-block-form-item\" id=\"js-cms-slot-block-form-item-{{ slotBlockItemForm.idCmsBlock.vars.value }}\">
        {{ form_widget(slotBlockItemForm.idSlotTemplate) }}
        {{ form_widget(slotBlockItemForm.idSlot) }}
        {{ form_widget(slotBlockItemForm.idCmsBlock) }}
        {{ form_widget(slotBlockItemForm.position) }}
        {{ form_widget(slotBlockItemForm.conditions) }}
    </div>
{% endfor %}
", "@CmsSlotBlockGui/SlotBlock/form.twig", "/data/vendor/spryker/cms-slot-block-gui/src/Spryker/Zed/CmsSlotBlockGui/Presentation//SlotBlock/form.twig");
    }
}
