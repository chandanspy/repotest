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

/* @ProductSetGui/_partials/form/image-set-collection-form.twig */
class __TwigTemplate_c6d7600ee6d7ef89dbac1dbd2f28c36effedb71bdaa1882670108aa8c544df3b extends Template
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
        echo "<div class=\"image-set-container\" data-image-collection-prototype=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["imageSetCollectionForm"]) || array_key_exists("imageSetCollectionForm", $context) ? $context["imageSetCollectionForm"] : (function () { throw new RuntimeError('Variable "imageSetCollectionForm" does not exist.', 1, $this->source); })()), "vars", [], "any", false, false, false, 1), "prototype", [], "any", false, false, false, 1), "children", [], "any", false, false, false, 1), "product_image_collection", [], "any", false, false, false, 1), "vars", [], "any", false, false, false, 1), "prototype", [], "any", false, false, false, 1), 'widget'));
        echo "\"
    data-image-set-prototype=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["imageSetCollectionForm"]) || array_key_exists("imageSetCollectionForm", $context) ? $context["imageSetCollectionForm"] : (function () { throw new RuntimeError('Variable "imageSetCollectionForm" does not exist.', 2, $this->source); })()), "vars", [], "any", false, false, false, 2), "prototype", [], "any", false, false, false, 2), 'widget'));
        echo "\"
>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imageSetCollectionForm"]) || array_key_exists("imageSetCollectionForm", $context) ? $context["imageSetCollectionForm"] : (function () { throw new RuntimeError('Variable "imageSetCollectionForm" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["imageSetForm"]) {
            // line 5
            echo "        ";
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["imageSetForm"], "id_product_image_set", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "data", [], "any", false, false, false, 5) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rootForm"]) || array_key_exists("rootForm", $context) ? $context["rootForm"] : (function () { throw new RuntimeError('Variable "rootForm" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "valid", [], "any", false, false, false, 5))) {
                // line 6
                echo "            ";
                twig_get_attribute($this->env, $this->source, $context["imageSetForm"], "setRendered", [], "any", false, false, false, 6);
                // line 7
                echo "        ";
            }
            // line 8
            echo "
        ";
            // line 9
            if ( !twig_get_attribute($this->env, $this->source, $context["imageSetForm"], "isRendered", [], "any", false, false, false, 9)) {
                // line 10
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["imageSetForm"], 'widget');
                echo "
        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageSetForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
    <a href=\"#\" class=\"btn btn-outline btn-primary add-another-image-set m-t-md\">
        <i class=\"fa fa-files-o\"></i> ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add image set"), "html", null, true);
        echo "
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/_partials/form/image-set-collection-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 15,  77 => 13,  71 => 12,  65 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  51 => 5,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"image-set-container\" data-image-collection-prototype=\"{{ form_widget(imageSetCollectionForm.vars.prototype.children.product_image_collection.vars.prototype) | e }}\"
    data-image-set-prototype=\"{{ form_widget(imageSetCollectionForm.vars.prototype) | e }}\"
>
    {% for imageSetForm in imageSetCollectionForm %}
        {% if not imageSetForm.id_product_image_set.vars.data and rootForm.vars.valid %}
            {% do imageSetForm.setRendered %}
        {% endif %}

        {% if not imageSetForm.isRendered %}
            {{ form_widget(imageSetForm) }}
        {% endif %}
    {% endfor %}

    <a href=\"#\" class=\"btn btn-outline btn-primary add-another-image-set m-t-md\">
        <i class=\"fa fa-files-o\"></i> {{ 'Add image set' | trans }}
    </a>
</div>
", "@ProductSetGui/_partials/form/image-set-collection-form.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//_partials/form/image-set-collection-form.twig");
    }
}
