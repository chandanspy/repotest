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

/* @Gui/Tabs/tabs.twig */
class __TwigTemplate_d158981684aa6c65fe2ba2e3efa393a061cb283781ad219a338da07cfd673648 extends Template
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
        // line 8
        echo "<div class=\"tabs-container\"
     data-is-navigable=\"";
        // line 9
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["tabsViewTransfer"]) || array_key_exists("tabsViewTransfer", $context) ? $context["tabsViewTransfer"] : (function () { throw new RuntimeError('Variable "tabsViewTransfer" does not exist.', 9, $this->source); })()), "isNavigable", [], "any", false, false, false, 9)) ? ("true") : ("false"));
        echo "\"
     data-auto-errors=\"";
        // line 10
        echo ((((null === twig_get_attribute($this->env, $this->source, (isset($context["tabsViewTransfer"]) || array_key_exists("tabsViewTransfer", $context) ? $context["tabsViewTransfer"] : (function () { throw new RuntimeError('Variable "tabsViewTransfer" does not exist.', 10, $this->source); })()), "autoErrors", [], "any", false, false, false, 10)) || twig_get_attribute($this->env, $this->source, (isset($context["tabsViewTransfer"]) || array_key_exists("tabsViewTransfer", $context) ? $context["tabsViewTransfer"] : (function () { throw new RuntimeError('Variable "tabsViewTransfer" does not exist.', 10, $this->source); })()), "autoErrors", [], "any", false, false, false, 10))) ? ("true") : ("false"));
        echo "\">
    <ul class=\"nav nav-tabs\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tabsViewTransfer"]) || array_key_exists("tabsViewTransfer", $context) ? $context["tabsViewTransfer"] : (function () { throw new RuntimeError('Variable "tabsViewTransfer" does not exist.', 12, $this->source); })()), "tabs", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 13
            echo "            <li class=\"";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["tabsViewTransfer"]) || array_key_exists("tabsViewTransfer", $context) ? $context["tabsViewTransfer"] : (function () { throw new RuntimeError('Variable "tabsViewTransfer" does not exist.', 13, $this->source); })()), "activeTabName", [], "any", false, false, false, 13), twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 13)))) {
                echo "active";
            }
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["tab"], "hasError", [], "any", false, false, false, 13)) {
                echo "error";
            }
            echo "\" data-tab-content-id=\"tab-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
                <a href=\"#tab-content-";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 14), "html", null, true);
            echo "\" data-toggle=\"tab\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 14)), "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>

    <div class=\"tab-content\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tabsViewTransfer"]) || array_key_exists("tabsViewTransfer", $context) ? $context["tabsViewTransfer"] : (function () { throw new RuntimeError('Variable "tabsViewTransfer" does not exist.', 20, $this->source); })()), "tabs", [], "any", false, false, false, 20));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 21
            echo "            <div id=\"tab-content-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "\" class=\"tab-pane ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["tabsViewTransfer"]) || array_key_exists("tabsViewTransfer", $context) ? $context["tabsViewTransfer"] : (function () { throw new RuntimeError('Variable "tabsViewTransfer" does not exist.', 21, $this->source); })()), "activeTabName", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 21)))) {
                echo "active";
            }
            echo "\">
                <div class=\"panel-body\">
                    ";
            // line 23
            $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["tab"], "template", [], "any", false, false, false, 23), "@Gui/Tabs/tabs.twig", 23)->display($context);
            // line 24
            echo "                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>

    ";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["tabsViewTransfer"]) || array_key_exists("tabsViewTransfer", $context) ? $context["tabsViewTransfer"] : (function () { throw new RuntimeError('Variable "tabsViewTransfer" does not exist.', 29, $this->source); })()), "footerTemplate", [], "any", false, false, false, 29) || twig_get_attribute($this->env, $this->source, (isset($context["tabsViewTransfer"]) || array_key_exists("tabsViewTransfer", $context) ? $context["tabsViewTransfer"] : (function () { throw new RuntimeError('Variable "tabsViewTransfer" does not exist.', 29, $this->source); })()), "isNavigable", [], "any", false, false, false, 29))) {
            // line 30
            echo "        <div class=\"tabs-footer\">
            ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, (isset($context["tabsViewTransfer"]) || array_key_exists("tabsViewTransfer", $context) ? $context["tabsViewTransfer"] : (function () { throw new RuntimeError('Variable "tabsViewTransfer" does not exist.', 31, $this->source); })()), "footerTemplate", [], "any", false, false, false, 31)) {
                // line 32
                echo "                ";
                $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["tabsViewTransfer"]) || array_key_exists("tabsViewTransfer", $context) ? $context["tabsViewTransfer"] : (function () { throw new RuntimeError('Variable "tabsViewTransfer" does not exist.', 32, $this->source); })()), "footerTemplate", [], "any", false, false, false, 32), "@Gui/Tabs/tabs.twig", 32)->display($context);
                // line 33
                echo "            ";
            }
            // line 34
            echo "
            ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, (isset($context["tabsViewTransfer"]) || array_key_exists("tabsViewTransfer", $context) ? $context["tabsViewTransfer"] : (function () { throw new RuntimeError('Variable "tabsViewTransfer" does not exist.', 35, $this->source); })()), "isNavigable", [], "any", false, false, false, 35)) {
                // line 36
                echo "                <span class=\"tabs-navigation pull-right\">
                    <a href=\"#\" class=\"btn btn-tab-previous btn-outline btn-view\"><i class=\"fa fa-angle-left\"></i> ";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous"), "html", null, true);
                echo "</a>
                    <a href=\"#\" class=\"btn btn-tab-next btn-outline btn-view\">";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i></a>
                </span>
            ";
            }
            // line 41
            echo "        </div>
    ";
        }
        // line 43
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@Gui/Tabs/tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 43,  162 => 41,  156 => 38,  152 => 37,  149 => 36,  147 => 35,  144 => 34,  141 => 33,  138 => 32,  136 => 31,  133 => 30,  131 => 29,  127 => 27,  111 => 24,  109 => 23,  99 => 21,  82 => 20,  77 => 17,  66 => 14,  53 => 13,  49 => 12,  44 => 10,  40 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("{#
  Render tabs in Zed UI. The `tabs()` twig function is registered globaly with `\\Spryker\\Zed\\Gui\\Communication\\Plugin\\Twig\\TabsFunction`.

  Parameters:
    * tabsViewTransfer (`\\Generated\\Shared\\Transfer\\TabsViewTransfer`): transfer object that contains all information of the tabs (required).
    * context (array):  Context variables that will be available in included templates (optional).
#}
<div class=\"tabs-container\"
     data-is-navigable=\"{{ tabsViewTransfer.isNavigable ? 'true' : 'false' }}\"
     data-auto-errors=\"{{ tabsViewTransfer.autoErrors is null or tabsViewTransfer.autoErrors ? 'true' : 'false' }}\">
    <ul class=\"nav nav-tabs\">
        {% for tab in tabsViewTransfer.tabs %}
            <li class=\"{% if tabsViewTransfer.activeTabName == tab.name %}active{% endif %} {% if tab.hasError %}error{% endif %}\" data-tab-content-id=\"tab-content-{{ tab.name }}\">
                <a href=\"#tab-content-{{ tab.name }}\" data-toggle=\"tab\">{{ tab.title | trans }}</a>
            </li>
        {% endfor %}
    </ul>

    <div class=\"tab-content\">
        {% for tab in tabsViewTransfer.tabs %}
            <div id=\"tab-content-{{ tab.name }}\" class=\"tab-pane {% if tabsViewTransfer.activeTabName == tab.name %}active{% endif %}\">
                <div class=\"panel-body\">
                    {% include tab.template %}
                </div>
            </div>
        {% endfor %}
    </div>

    {% if tabsViewTransfer.footerTemplate or tabsViewTransfer.isNavigable %}
        <div class=\"tabs-footer\">
            {% if tabsViewTransfer.footerTemplate %}
                {% include tabsViewTransfer.footerTemplate %}
            {% endif %}

            {% if tabsViewTransfer.isNavigable %}
                <span class=\"tabs-navigation pull-right\">
                    <a href=\"#\" class=\"btn btn-tab-previous btn-outline btn-view\"><i class=\"fa fa-angle-left\"></i> {{ 'Previous' | trans }}</a>
                    <a href=\"#\" class=\"btn btn-tab-next btn-outline btn-view\">{{ 'Next' | trans }} <i class=\"fa fa-angle-right\"></i></a>
                </span>
            {% endif %}
        </div>
    {% endif %}
</div>
", "@Gui/Tabs/tabs.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation//Tabs/tabs.twig");
    }
}
