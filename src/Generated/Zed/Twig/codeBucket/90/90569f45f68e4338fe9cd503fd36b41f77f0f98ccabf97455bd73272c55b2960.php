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

/* @CategoryImageGui/_partials/category-image-set-theme.twig */
class __TwigTemplate_b6f79aff34ffa412f8820455aaf6b591cb6c4af9bc6043f0ce16af2f7beeeae2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'category_image_set_widget' => [$this, 'block_category_image_set_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('category_image_set_widget', $context, $blocks);
    }

    public function block_category_image_set_widget($context, array $blocks = [])
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "categoryImages", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryImage"]) {
            // line 12
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["categoryImage"], 'widget');
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryImage'], $context['_parent'], $context['loop']);
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
        return "@CategoryImageGui/_partials/category-image-set-theme.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  93 => 22,  84 => 16,  80 => 14,  71 => 12,  67 => 11,  62 => 9,  57 => 7,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block category_image_set_widget %}
    <div class=\"panel panel-default image-set\">
        <div class=\"panel-heading\">{{ 'Image Set' | trans }}: {{ form.name.vars.value }}</div>
        <div class=\"panel-body\">
            <div class=\"sep_down m-t-sm\">
                <div class=\"row\">
                    <div class=\"col-lg-11\">{{ form_row(form.name) }}</div>
                </div>
                <h3>{{ 'Images' | trans }}</h3>
                <div class=\"image-collection-container\">
                    {% for categoryImage in form.categoryImages %}
                        {{ form_widget(categoryImage) }}
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
{% endblock %}
", "@CategoryImageGui/_partials/category-image-set-theme.twig", "/data/vendor/spryker/category-image-gui/src/Spryker/Zed/CategoryImageGui/Presentation//_partials/category-image-set-theme.twig");
    }
}
