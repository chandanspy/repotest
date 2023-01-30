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

/* @Gui/Table/thead.twig */
class __TwigTemplate_e54611f076c85df7579a9649784b79076701a3b4733ad77a5b34c890d2f09836 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "header", [], "any", true, true, false, 1)) {
            // line 2
            echo "<thead>
    <tr>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "header", [], "any", false, false, false, 4));
            foreach ($context['_seq'] as $context["id"] => $context["value"]) {
                // line 5
                echo "        <th id=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\">
            ";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"]), "html", null, true);
                echo "
        </th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </tr>
</thead>
";
        }
    }

    public function getTemplateName()
    {
        return "@Gui/Table/thead.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  52 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if config.header is defined %}
<thead>
    <tr>
        {% for id, value in config.header %}
        <th id=\"{{ id }}\">
            {{ value | trans }}
        </th>
        {% endfor %}
    </tr>
</thead>
{%  endif %}
", "@Gui/Table/thead.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Table/thead.twig");
    }
}
