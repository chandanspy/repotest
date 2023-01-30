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

/* select2comboboxtype.twig */
class __TwigTemplate_58e4a460e54e706dcc4011b2873416147ed78466a70543074333bb362251b369 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'select2_widget' => [$this, 'block_select2_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('select2_widget', $context, $blocks);
    }

    public function block_select2_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["css"] = "spryker-form-select2combobox";
        // line 3
        echo "    ";
        $context["tags"] = false;
        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 4), "attr", [], "any", false, true, false, 4), "class", [], "any", true, true, false, 4)) {
            // line 5
            echo "        ";
            $context["css"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "attr", [], "any", false, false, false, 5), "class", [], "any", false, false, false, 5) . " spryker-form-select2combobox");
            // line 6
            echo "    ";
        }
        // line 7
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 7), "attr", [], "any", false, true, false, 7), "tags", [], "any", true, true, false, 7) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "attr", [], "any", false, false, false, 7), "tags", [], "any", false, false, false, 7))) {
            // line 8
            echo "        ";
            $context["css"] = ((isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 8, $this->source); })()) . " tags");
            // line 9
            echo "    ";
        }
        // line 10
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'widget', ["attr" => ["class" => (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 10, $this->source); })())]]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "select2comboboxtype.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block select2_widget %}
    {% set css = 'spryker-form-select2combobox' %}
    {% set tags = false %}
    {% if form.vars.attr.class is defined %}
        {% set css = form.vars.attr.class ~ ' spryker-form-select2combobox' %}
    {% endif %}
    {% if form.vars.attr.tags is defined and form.vars.attr.tags %}
        {% set css = css ~ ' tags' %}
    {% endif %}
    {{ form_widget(form, { 'attr': {'class': css } }) }}
{% endblock select2_widget %}
", "select2comboboxtype.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Form/Type/select2comboboxtype.twig");
    }
}
