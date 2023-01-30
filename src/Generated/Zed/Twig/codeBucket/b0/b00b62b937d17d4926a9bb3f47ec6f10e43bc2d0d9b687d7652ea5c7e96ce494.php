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

/* @ProductManagement/Product/_partials/image-set-form.twig */
class __TwigTemplate_2062269ad2a43cf0d506828bec786e2b0d9295a5cc234b32ee24ec6adff1b56d extends Template
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 1, $this->source); })()), [], "array", false, false, false, 1), "vars", [], "any", false, false, false, 1), "prototype", [], "any", false, false, false, 1), "children", [], "any", false, false, false, 1), "product_images", [], "any", false, false, false, 1), "vars", [], "any", false, false, false, 1), "prototype", [], "any", false, false, false, 1), 'widget'));
        echo "\"
    data-image-set-prototype=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 2, $this->source); })()), [], "array", false, false, false, 2), "vars", [], "any", false, false, false, 2), "prototype", [], "any", false, false, false, 2), 'widget'));
        echo "\"
>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 4, $this->source); })()), [], "array", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["productImageSet"]) {
            // line 5
            echo "        ";
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productImageSet"], "vars", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5), "id_product_image_set", [], "any", false, false, false, 5) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productImageSet"], "parent", [], "any", false, false, false, 5), "parent", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "valid", [], "any", false, false, false, 5))) {
                // line 6
                echo "            ";
                twig_get_attribute($this->env, $this->source, $context["productImageSet"], "setRendered", [], "any", false, false, false, 6);
                // line 7
                echo "        ";
            }
            // line 8
            echo "
        ";
            // line 9
            if ( !twig_get_attribute($this->env, $this->source, $context["productImageSet"], "isRendered", [], "any", false, false, false, 9)) {
                // line 10
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["productImageSet"], 'widget');
                echo "
        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productImageSet'], $context['_parent'], $context['loop']);
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
        return "@ProductManagement/Product/_partials/image-set-form.twig";
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
        return new Source("<div class=\"image-set-container\" data-image-collection-prototype=\"{{ form_widget(form[formKey].vars.prototype.children.product_images.vars.prototype) | e }}\"
    data-image-set-prototype=\"{{ form_widget(form[formKey].vars.prototype) | e }}\"
>
    {% for productImageSet in form[formKey] %}
        {% if not productImageSet.vars.value.id_product_image_set and productImageSet.parent.parent.vars.valid %}
            {% do productImageSet.setRendered %}
        {% endif %}

        {% if not productImageSet.isRendered %}
            {{ form_widget(productImageSet) }}
        {% endif %}
    {% endfor %}

    <a href=\"#\" class=\"btn btn-outline btn-primary add-another-image-set m-t-md\">
        <i class=\"fa fa-files-o\"></i> {{ 'Add image set' | trans }}
    </a>
</div>
", "@ProductManagement/Product/_partials/image-set-form.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/image-set-form.twig");
    }
}
