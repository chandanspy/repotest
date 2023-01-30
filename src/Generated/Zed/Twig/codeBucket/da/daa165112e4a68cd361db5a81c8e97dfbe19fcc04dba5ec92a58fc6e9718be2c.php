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

/* relationdropdowntype.twig */
class __TwigTemplate_f337b947a241c4cfc56981079b25d8c73bb27588861eb3ab5ba1520c186315c4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'relation_dropdown_widget' => [$this, 'block_relation_dropdown_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('relation_dropdown_widget', $context, $blocks);
    }

    public function block_relation_dropdown_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 3
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 3), "attr", [], "any", false, true, false, 3), "extended", [], "any", true, true, false, 3)) {
                // line 4
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
                echo "
            <div class=\"relation-selector-container\">
                ";
                // line 6
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["action-url" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 7
$context["child"], "vars", [], "any", false, true, false, 7), "attr", [], "any", false, true, false, 7), "action_url", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 7), "attr", [], "any", false, true, false, 7), "action_url", [], "any", false, false, false, 7))) : ("")), "action-event" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 8
$context["child"], "vars", [], "any", false, true, false, 8), "attr", [], "any", false, true, false, 8), "action_event", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 8), "attr", [], "any", false, true, false, 8), "action_event", [], "any", false, false, false, 8))) : ("")), "action-field" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 9
$context["child"], "vars", [], "any", false, true, false, 9), "attr", [], "any", false, true, false, 9), "action_field", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 9), "attr", [], "any", false, true, false, 9), "action_field", [], "any", false, false, false, 9))) : (""))]]);
                // line 10
                echo "

                <i class=\"relation-selector-loader fa fa-spinner\"></i>
            </div>
        ";
            } else {
                // line 15
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
        ";
            }
            // line 17
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "relationdropdowntype.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  71 => 15,  64 => 10,  62 => 9,  61 => 8,  60 => 7,  59 => 6,  53 => 4,  50 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block relation_dropdown_widget %}
    {% for child in form %}
        {% if child.vars.attr.extended is defined %}
            {{ form_label(child) }}
            <div class=\"relation-selector-container\">
                {{ form_widget(child, { 'attr': {
                    'action-url': child.vars.attr.action_url | default,
                    'action-event': child.vars.attr.action_event | default,
                    'action-field': child.vars.attr.action_field | default
                } }) }}

                <i class=\"relation-selector-loader fa fa-spinner\"></i>
            </div>
        {% else %}
            {{ form_row(child) }}
        {% endif %}
    {% endfor %}
{% endblock relation_dropdown_widget %}
", "relationdropdowntype.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Form/Type/relationdropdowntype.twig");
    }
}
