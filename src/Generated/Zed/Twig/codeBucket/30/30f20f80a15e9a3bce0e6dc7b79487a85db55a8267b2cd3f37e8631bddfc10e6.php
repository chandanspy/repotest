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

/* @CategoryImageGui/_partials/category-image-collection-theme.twig */
class __TwigTemplate_4e902133b9e6ca8928b61c26eec70c37401caac2b586ba58b70c1db78cc92b3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'category_image_collection_widget' => [$this, 'block_category_image_collection_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('category_image_collection_widget', $context, $blocks);
    }

    public function block_category_image_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"image-collection col-lg-12 row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                ";
        // line 5
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "externalUrlSmall", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5), false))) {
            // line 6
            echo "                    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "imagePreview", [], "any", false, false, false, 6), "setRendered", [], "any", false, false, false, 6);
            // line 7
            echo "                ";
        }
        // line 8
        echo "
                ";
        // line 9
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "imagePreview", [], "any", false, false, false, 9), "isRendered", [], "any", false, false, false, 9)) {
            // line 10
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "imagePreview", [], "any", false, false, false, 10), 'widget');
            echo "
                ";
        }
        // line 12
        echo "            </div>
            <div class=\"form-group\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "externalUrlSmall", [], "any", false, false, false, 14), 'row');
        echo "
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                ";
        // line 19
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "externalUrlLarge", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19), false))) {
            // line 20
            echo "                    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "imagePreviewLarge", [], "any", false, false, false, 20), "setRendered", [], "any", false, false, false, 20);
            // line 21
            echo "                ";
        }
        // line 22
        echo "
                ";
        // line 23
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "imagePreviewLarge", [], "any", false, false, false, 23), "isRendered", [], "any", false, false, false, 23)) {
            // line 24
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "imagePreviewLarge", [], "any", false, false, false, 24), 'widget');
            echo "
                ";
        }
        // line 26
        echo "            </div>
            <div class=\"form-group\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "externalUrlLarge", [], "any", false, false, false, 28), 'row');
        echo "
            </div>
        </div>
        <div class=\"col-lg-12\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'rest');
        echo "
        </div>
        <div class=\"col-lg-12\">
            ";
        // line 35
        echo call_user_func_array($this->env->getFunction('removeActionButton')->getCallable(), ["#", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete image"), ["class" => "remove-image-collection"]]);
        echo "
        </div>
        <div class=\"col-lg-12 image-collection-delimiter\">
            <hr>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@CategoryImageGui/_partials/category-image-collection-theme.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  111 => 32,  104 => 28,  100 => 26,  94 => 24,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  81 => 19,  73 => 14,  69 => 12,  63 => 10,  61 => 9,  58 => 8,  55 => 7,  52 => 6,  50 => 5,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block category_image_collection_widget %}
    <div class=\"image-collection col-lg-12 row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                {% if form.externalUrlSmall.vars.value == false %}
                    {% do form.imagePreview.setRendered %}
                {% endif %}

                {% if not form.imagePreview.isRendered %}
                    {{ form_widget(form.imagePreview) }}
                {% endif %}
            </div>
            <div class=\"form-group\">
                {{ form_row(form.externalUrlSmall) }}
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                {% if form.externalUrlLarge.vars.value == false %}
                    {% do form.imagePreviewLarge.setRendered %}
                {% endif %}

                {% if not form.imagePreviewLarge.isRendered %}
                    {{ form_widget(form.imagePreviewLarge) }}
                {% endif %}
            </div>
            <div class=\"form-group\">
                {{ form_row(form.externalUrlLarge) }}
            </div>
        </div>
        <div class=\"col-lg-12\">
            {{ form_rest(form) }}
        </div>
        <div class=\"col-lg-12\">
            {{ removeActionButton('#', 'Delete image' | trans, {'class': 'remove-image-collection'}) }}
        </div>
        <div class=\"col-lg-12 image-collection-delimiter\">
            <hr>
        </div>
    </div>
{% endblock %}
", "@CategoryImageGui/_partials/category-image-collection-theme.twig", "/data/vendor/spryker/category-image-gui/src/Spryker/Zed/CategoryImageGui/Presentation//_partials/category-image-collection-theme.twig");
    }
}
