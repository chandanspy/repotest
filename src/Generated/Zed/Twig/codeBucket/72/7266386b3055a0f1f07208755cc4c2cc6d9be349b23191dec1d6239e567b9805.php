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

/* @Gui/Table/tfoot.twig */
class __TwigTemplate_4e11f98eedeb647a44d6170ec4ef72a333e7010d571b42c979eb33b7681f85db extends Template
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
        echo "<tfoot>";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "footer", [], "any", true, true, false, 2)) {
            // line 3
            echo "<tr>";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 4, $this->source); })()), "footer", [], "any", false, false, false, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 5
                echo "        <td>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["value"]), "html", null, true);
                echo "</td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</tr>
";
        }
        // line 9
        echo "</tfoot>
";
    }

    public function getTemplateName()
    {
        return "@Gui/Table/tfoot.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  56 => 7,  47 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tfoot>
{%- if config.footer is defined %}
<tr>
    {%- for value in config.footer %}
        <td>{{ value | trans }}</td>
    {% endfor -%}
</tr>
{%  endif -%}
</tfoot>
", "@Gui/Table/tfoot.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation//Table/tfoot.twig");
    }
}
