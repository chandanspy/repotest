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

/* @ProductManagement/_partials/product-image-set-theme.twig */
class __TwigTemplate_5d03041d6b62c66532be20d71e50b72a96bfa1998c9193c5e76d024e6fa7afbd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_image_set_widget' => [$this, 'block_product_image_set_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('product_image_set_widget', $context, $blocks);
    }

    public function block_product_image_set_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"panel panel-default image-set\">
        <div class=\"panel-heading\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Image Set"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "html", null, true);
        echo "</div>
        <div class=\"panel-body\">
            <div class=\"sep_down m-t-sm\">
                <div class=\"row\">
                    <div class=\"col-lg-11\">";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), 'row');
        echo "</div>
                </div>
                <h3>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Images"), "html", null, true);
        echo "</h3>
                <div class=\"image-collection-container\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "product_images", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["productImage"]) {
            // line 12
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["productImage"], 'widget');
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </div>

                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'rest');
        echo "

            </div>
        </div>
        <div class=\"panel-footer\">
            <a href=\"#\" class=\"btn btn-outline btn-primary add-another-image-collection m-b-sm\">
                <i class=\"fa fa-file-image-o\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add image"), "html", null, true);
        echo "
            </a>
            <a href=\"#\" class=\"btn btn-outline safe-submit btn-remove remove-image-set m-b-sm\">
                <i class=\"fa fa-trash\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete image set"), "html", null, true);
        echo "
            </a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/_partials/product-image-set-theme.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  93 => 22,  84 => 16,  80 => 14,  71 => 12,  67 => 11,  62 => 9,  57 => 7,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block product_image_set_widget %}
    <div class=\"panel panel-default image-set\">
        <div class=\"panel-heading\">{{ 'Image Set' | trans }}: {{ form.name.vars.value }}</div>
        <div class=\"panel-body\">
            <div class=\"sep_down m-t-sm\">
                <div class=\"row\">
                    <div class=\"col-lg-11\">{{ form_row(form.name) }}</div>
                </div>
                <h3>{{ 'Images' | trans }}</h3>
                <div class=\"image-collection-container\">
                    {% for productImage in form.product_images %}
                        {{ form_widget(productImage) }}
                    {% endfor %}
                </div>

                {{ form_rest(form) }}

            </div>
        </div>
        <div class=\"panel-footer\">
            <a href=\"#\" class=\"btn btn-outline btn-primary add-another-image-collection m-b-sm\">
                <i class=\"fa fa-file-image-o\"></i> {{ 'Add image' | trans }}
            </a>
            <a href=\"#\" class=\"btn btn-outline safe-submit btn-remove remove-image-set m-b-sm\">
                <i class=\"fa fa-trash\"></i> {{ 'Delete image set' | trans }}
            </a>
        </div>
    </div>
{% endblock %}", "@ProductManagement/_partials/product-image-set-theme.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//_partials/product-image-set-theme.twig");
    }
}
