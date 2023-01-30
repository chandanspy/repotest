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

/* @CategoryImageGui/_partials/image-set-form.twig */
class __TwigTemplate_296a98017c2d11dd00de833dabbd26c1dc0b928630aa224ccfb963dd02d4b48f extends Template
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 1, $this->source); })()), "imageSets", [], "any", false, false, false, 1), (isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 1, $this->source); })()), [], "array", false, false, false, 1), "vars", [], "any", false, false, false, 1), "prototype", [], "any", false, false, false, 1), "children", [], "any", false, false, false, 1), "categoryImages", [], "any", false, false, false, 1), "vars", [], "any", false, false, false, 1), "prototype", [], "any", false, false, false, 1), 'widget'));
        echo "\"
     data-image-set-prototype=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 2, $this->source); })()), "imageSets", [], "any", false, false, false, 2), (isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 2, $this->source); })()), [], "array", false, false, false, 2), "vars", [], "any", false, false, false, 2), "prototype", [], "any", false, false, false, 2), 'widget'));
        echo "\"
>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 4, $this->source); })()), "imageSets", [], "any", false, false, false, 4), (isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 4, $this->source); })()), [], "array", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["imageSet"]) {
            // line 5
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["imageSet"], "vars", [], "any", false, false, false, 5), "data", [], "any", false, false, false, 5), "locale", [], "any", false, false, false, 5), "localeName", [], "any", false, false, false, 5), (isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 5, $this->source); })())))) {
                // line 6
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["imageSet"], 'widget');
                echo "
        ";
            }
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    <a href=\"#\" class=\"btn btn-outline btn-primary add-another-image-set m-t-md\">
        <i class=\"fa fa-files-o\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add image set"), "html", null, true);
        echo "
    </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CategoryImageGui/_partials/image-set-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  66 => 9,  60 => 8,  54 => 6,  51 => 5,  47 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"image-set-container\" data-image-collection-prototype=\"{{ form_widget(categoryForm.imageSets[localeName].vars.prototype.children.categoryImages.vars.prototype) | e }}\"
     data-image-set-prototype=\"{{ form_widget(categoryForm.imageSets[localeName].vars.prototype) | e }}\"
>
    {% for imageSet in categoryForm.imageSets[localeName] %}
        {% if imageSet.vars.data.locale.localeName == localeName %}
            {{ form_widget(imageSet) }}
        {% endif %}
    {% endfor %}

    <a href=\"#\" class=\"btn btn-outline btn-primary add-another-image-set m-t-md\">
        <i class=\"fa fa-files-o\"></i> {{ 'Add image set' | trans }}
    </a>
</div>
", "@CategoryImageGui/_partials/image-set-form.twig", "/data/vendor/spryker/category-image-gui/src/Spryker/Zed/CategoryImageGui/Presentation//_partials/image-set-form.twig");
    }
}
