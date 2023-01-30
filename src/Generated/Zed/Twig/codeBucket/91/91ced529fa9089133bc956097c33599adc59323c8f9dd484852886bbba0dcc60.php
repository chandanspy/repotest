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

/* delete-form.twig */
class __TwigTemplate_838e50746bc7ea6d105a27463b0b0f3e32ce171a9ea4eedd34fd2bab98215779 extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 3
            echo "        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "_token"))) {
                // line 4
                echo "            ";
                if ( !twig_get_attribute($this->env, $this->source, $context["field"], "isRendered", [], "any", false, false, false, 4)) {
                    // line 5
                    echo "                <input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 5), "data", [], "any", false, false, false, 5), "html", null, true);
                    echo "\" />
                ";
                    // line 6
                    twig_get_attribute($this->env, $this->source, $context["field"], "setRendered", [], "any", false, false, false, 6);
                    // line 7
                    echo "            ";
                }
                // line 8
                echo "        ";
            }
            // line 9
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", true, true, false, 10)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "_token", [], "any", false, false, false, 11), 'widget');
            echo "
    ";
        }
        // line 13
        echo "    <button type=\"submit\" class=\"safe-submit btn btn-xs btn-outline btn-danger\"><i class=\"fa fa-trash\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })())), "html", null, true);
        echo "</button>
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "delete-form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  81 => 13,  75 => 11,  72 => 10,  66 => 9,  63 => 8,  60 => 7,  58 => 6,  51 => 5,  48 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    {% for field in form %}
        {% if field.vars.name != '_token' %}
            {% if not field.isRendered %}
                <input type=\"hidden\" name=\"{{ field.vars.name }}\" value=\"{{ field.vars.data }}\" />
                {% do field.setRendered %}
            {% endif %}
        {% endif %}
    {% endfor %}
    {% if form._token is defined %}
        {{ form_widget(form._token) }}
    {% endif %}
    <button type=\"submit\" class=\"safe-submit btn btn-xs btn-outline btn-danger\"><i class=\"fa fa-trash\"></i> {{ title | trans }}</button>
{{ form_end(form) }}
", "delete-form.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Table/delete-form.twig");
    }
}
