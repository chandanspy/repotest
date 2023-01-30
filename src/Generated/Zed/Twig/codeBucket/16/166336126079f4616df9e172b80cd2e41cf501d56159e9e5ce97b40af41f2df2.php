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

/* button-dropdown.twig */
class __TwigTemplate_156ef6ab11f038f3db8eb87a42333dab5cd22bd41d71e85d772284c313a29f3a extends Template
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
        echo "<div class=\"btn-group dropdown\">
    <button data-toggle=\"dropdown\" class=\"btn btn-xs btn-outline ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 2, $this->source); })()), "html", null, true);
        echo " dropdown-toggle\" aria-expanded=\"true\" ";
        echo twig_escape_filter($this->env, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 2, $this->source); })()), "html", null, true);
        echo ">";
        echo (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 2, $this->source); })());
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })())), "html", null, true);
        echo "
        <span class=\"fa fa-angle-down\"></span>
    </button>
    <ul class=\"dropdown-menu\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nestedButtons"]) || array_key_exists("nestedButtons", $context) ? $context["nestedButtons"] : (function () { throw new RuntimeError('Variable "nestedButtons" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 7
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["button"], "needDivider", [], "any", false, false, false, 7)) {
                // line 8
                echo "                <li class=\"divider\"></li>
            ";
            }
            // line 10
            echo "            <li>
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "url", [], "any", false, false, false, 11), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "params", [], "any", false, false, false, 11), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["button"], "title", [], "any", false, false, false, 11)), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "button-dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 14,  67 => 11,  64 => 10,  60 => 8,  57 => 7,  53 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"btn-group dropdown\">
    <button data-toggle=\"dropdown\" class=\"btn btn-xs btn-outline {{ class }} dropdown-toggle\" aria-expanded=\"true\" {{ parameters }}>{{ icon | raw}} {{ title | trans }}
        <span class=\"fa fa-angle-down\"></span>
    </button>
    <ul class=\"dropdown-menu\">
        {% for button in nestedButtons %}
            {% if button.needDivider %}
                <li class=\"divider\"></li>
            {% endif %}
            <li>
                <a href=\"{{ button.url }}\" {{ button.params }}>{{ button.title | trans }}</a>
            </li>
        {% endfor %}
    </ul>
</div>
", "button-dropdown.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Table/button-dropdown.twig");
    }
}
