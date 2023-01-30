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

/* paragraph.twig */
class __TwigTemplate_90a6e47f4986d39df99b18dd17dab4f874ceebd1969dc23629fd6e58d8cfea35 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'label_widget' => [$this, 'block_label_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('label_widget', $context, $blocks);
    }

    public function block_label_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["css"] = "";
        // line 3
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 3), "attr", [], "any", false, true, false, 3), "class", [], "any", true, true, false, 3)) {
            // line 4
            echo "        ";
            $context["css"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "attr", [], "any", false, false, false, 4), "class", [], "any", false, false, false, 4);
            // line 5
            echo "    ";
        }
        // line 6
        echo "    <p class=\"";
        echo twig_escape_filter($this->env, (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "text", [], "any", false, false, false, 6);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "paragraph.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block label_widget %}
    {% set css = '' %}
    {% if form.vars.attr.class is defined %}
        {% set css =  form.vars.attr.class %}
    {% endif %}
    <p class=\"{{ css }}\">{{ form.vars.text | raw }}</p>
{% endblock label_widget %}", "paragraph.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Form/Type/paragraph.twig");
    }
}
