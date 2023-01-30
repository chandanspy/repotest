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

/* @ProductManagement/_partials/product-image-collection-theme.twig */
class __TwigTemplate_ead86c91f55eba0d2164a7c436d5b34c057fa2fd74c311afc90e869ebcfc6eaa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_image_collection_widget' => [$this, 'block_product_image_collection_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('product_image_collection_widget', $context, $blocks);
    }

    public function block_product_image_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"image-collection col-lg-12 row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                ";
        // line 5
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "external_url_small", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5), false))) {
            // line 6
            echo "                    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "image_preview", [], "any", false, false, false, 6), "setRendered", [], "any", false, false, false, 6);
            // line 7
            echo "                ";
        }
        // line 8
        echo "
                ";
        // line 9
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "image_preview", [], "any", false, false, false, 9), "isRendered", [], "any", false, false, false, 9)) {
            // line 10
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "image_preview", [], "any", false, false, false, 10), 'widget');
            echo "
                ";
        }
        // line 12
        echo "            </div>
            <div class=\"form-group\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "external_url_small", [], "any", false, false, false, 14), 'row');
        echo "
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                ";
        // line 19
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "external_url_large", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19), false))) {
            // line 20
            echo "                    ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "image_preview_large_url", [], "any", false, false, false, 20), "setRendered", [], "any", false, false, false, 20);
            // line 21
            echo "                ";
        }
        // line 22
        echo "
                ";
        // line 23
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "image_preview_large_url", [], "any", false, false, false, 23), "isRendered", [], "any", false, false, false, 23)) {
            // line 24
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "image_preview_large_url", [], "any", false, false, false, 24), 'widget');
            echo "
                ";
        }
        // line 26
        echo "            </div>
            <div class=\"form-group\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "external_url_large", [], "any", false, false, false, 28), 'row');
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
        return "@ProductManagement/_partials/product-image-collection-theme.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 35,  111 => 32,  104 => 28,  100 => 26,  94 => 24,  92 => 23,  89 => 22,  86 => 21,  83 => 20,  81 => 19,  73 => 14,  69 => 12,  63 => 10,  61 => 9,  58 => 8,  55 => 7,  52 => 6,  50 => 5,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block product_image_collection_widget %}
    <div class=\"image-collection col-lg-12 row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                {% if form.external_url_small.vars.value == false %}
                    {% do form.image_preview.setRendered %}
                {% endif %}

                {% if not form.image_preview.isRendered %}
                    {{ form_widget(form.image_preview) }}
                {% endif %}
            </div>
            <div class=\"form-group\">
                {{ form_row(form.external_url_small) }}
            </div>
        </div>
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                {% if form.external_url_large.vars.value == false %}
                    {% do form.image_preview_large_url.setRendered %}
                {% endif %}

                {% if not form.image_preview_large_url.isRendered %}
                    {{ form_widget(form.image_preview_large_url) }}
                {% endif %}
            </div>
            <div class=\"form-group\">
                {{ form_row(form.external_url_large) }}
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
", "@ProductManagement/_partials/product-image-collection-theme.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//_partials/product-image-collection-theme.twig");
    }
}
