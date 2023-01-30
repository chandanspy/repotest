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

/* @SprykGui/List/index.twig */
class __TwigTemplate_40b3d7ea2bd5f62a448a4b55331624fbb8c6c35dc61d9b32fb582cdedb541fd3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'section_title' => [$this, 'block_section_title'],
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
            'footer_js' => [$this, 'block_footer_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["page_title"] = "Spryk";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@SprykGui/List/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 4, $this->source); })()), "html", null, true);
    }

    // line 5
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 5, $this->source); })()), "html", null, true);
    }

    // line 7
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sprykDefinitions"]) || array_key_exists("sprykDefinitions", $context) ? $context["sprykDefinitions"] : (function () { throw new RuntimeError('Variable "sprykDefinitions" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["application"] => $context["spryks"]) {
            // line 12
            echo "        <h2>";
            echo twig_escape_filter($this->env, $context["application"], "html", null, true);
            echo "</h2>
        <table class=\"table\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["spryks"]);
            foreach ($context['_seq'] as $context["spryk"] => $context["sprykInfo"]) {
                // line 15
                echo "            <tr";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["sprykInfo"], "priority", [], "any", false, false, false, 15), 1))) {
                    echo " class=\"bg-info\"";
                }
                echo ">
                <td style=\"width: 40%;\"><a href=\"/spryk-gui/build?spryk=";
                // line 16
                echo twig_escape_filter($this->env, $context["spryk"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sprykInfo"], "humanized", [], "any", false, false, false, 16), "html", null, true);
                echo "</a></td>
                <td style=\"width: 50%;\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sprykInfo"], "description", [], "any", false, false, false, 17), "html", null, true);
                echo "</td>
                <td><a href=\"/spryk-gui/graph?spryk=";
                // line 18
                echo twig_escape_filter($this->env, $context["spryk"], "html", null, true);
                echo "\">Show graph</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['spryk'], $context['sprykInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['application'], $context['spryks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 25
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 27
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-spryk-gui-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@SprykGui/List/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 27,  131 => 26,  127 => 25,  118 => 21,  109 => 18,  105 => 17,  99 => 16,  92 => 15,  88 => 14,  82 => 12,  77 => 11,  73 => 10,  67 => 7,  60 => 5,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set page_title = 'Spryk' %}
{% block head_title page_title %}
{% block section_title page_title %}

{% block action %}
{% endblock %}

{% block content %}
    {% for application, spryks in sprykDefinitions %}
        <h2>{{ application }}</h2>
        <table class=\"table\">
        {% for spryk, sprykInfo in spryks %}
            <tr{% if sprykInfo.priority == 1 %} class=\"bg-info\"{% endif %}>
                <td style=\"width: 40%;\"><a href=\"/spryk-gui/build?spryk={{ spryk }}\">{{ sprykInfo.humanized }}</a></td>
                <td style=\"width: 50%;\">{{ sprykInfo.description }}</td>
                <td><a href=\"/spryk-gui/graph?spryk={{ spryk }}\">Show graph</a></td>
            </tr>
        {% endfor %}
        </table>
    {% endfor %}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-spryk-gui-main.js') }}\"></script>
{% endblock %}
", "@SprykGui/List/index.twig", "/data/vendor/spryker-sdk/spryk-gui/src/SprykerSdk/Zed/SprykGui/Presentation/List/index.twig");
    }
}
