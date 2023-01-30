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

/* @cmsContentWidget/usageInformation/index.twig */
class __TwigTemplate_b1b4df465f2d245d7b69dd7ee534ee32d5acf21e8382cf389ce728349c189fa4 extends Template
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
        if ((array_key_exists("cmsContentWidgetTemplateList", $context) && (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cmsContentWidgetTemplateList"]) || array_key_exists("cmsContentWidgetTemplateList", $context) ? $context["cmsContentWidgetTemplateList"] : (function () { throw new RuntimeError('Variable "cmsContentWidgetTemplateList" does not exist.', 1, $this->source); })()), "cmsContentWidgetConfigurationList", [], "any", false, false, false, 1)), 0)))) {
            // line 2
            echo "    <div class=\"col-sm-12\">
        ";
            // line 3
            $this->loadTemplate("@cmsContentWidget/usageInformation/index.twig", "@cmsContentWidget/usageInformation/index.twig", 3, "1986266887")->display(twig_array_merge($context, ["collapsed" => true]));
            // line 23
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@cmsContentWidget/usageInformation/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 23,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if cmsContentWidgetTemplateList is defined and cmsContentWidgetTemplateList.cmsContentWidgetConfigurationList|length > 0 %}
    <div class=\"col-sm-12\">
        {% embed '@Gui/Partials/ibox.twig' with {'collapsed': true} %}
            {% block title %}
                {{ 'CMS content widgets usage information' | trans }}
            {% endblock %}

            {% block content %}
                {% for cmsWidgetConfiguration in cmsContentWidgetTemplateList.cmsContentWidgetConfigurationList %}
                    <strong>{{ cmsWidgetConfiguration.functionName }}</strong> <br />
                    {{ 'Usage information:' | trans }}
                    {{ cmsWidgetConfiguration.usageInformation }} <br />
                    {{ 'Available templates:' | trans }} <br />
                    <ul>
                        {% for templateName, templatePath in cmsWidgetConfiguration.templates %}
                            <li> <strong>{{ templateName }}</strong> ({{ templatePath }}) </li>
                        {% endfor %}
                    </ul>
                    <hr />
                {% endfor %}
            {% endblock %}
        {% endembed %}
    </div>
{% endif %}
", "@cmsContentWidget/usageInformation/index.twig", "/data/vendor/spryker/cms-content-widget/src/Spryker/Zed/CmsContentWidget/Presentation//UsageInformation/index.twig");
    }
}


/* @cmsContentWidget/usageInformation/index.twig */
class __TwigTemplate_b1b4df465f2d245d7b69dd7ee534ee32d5acf21e8382cf389ce728349c189fa4___1986266887 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "@Gui/Partials/ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/ibox.twig", "@cmsContentWidget/usageInformation/index.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "                ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CMS content widgets usage information"), "html", null, true);
        echo "
            ";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cmsContentWidgetTemplateList"]) || array_key_exists("cmsContentWidgetTemplateList", $context) ? $context["cmsContentWidgetTemplateList"] : (function () { throw new RuntimeError('Variable "cmsContentWidgetTemplateList" does not exist.', 9, $this->source); })()), "cmsContentWidgetConfigurationList", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["cmsWidgetConfiguration"]) {
            // line 10
            echo "                    <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmsWidgetConfiguration"], "functionName", [], "any", false, false, false, 10), "html", null, true);
            echo "</strong> <br />
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Usage information:"), "html", null, true);
            echo "
                    ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cmsWidgetConfiguration"], "usageInformation", [], "any", false, false, false, 12), "html", null, true);
            echo " <br />
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Available templates:"), "html", null, true);
            echo " <br />
                    <ul>
                        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["cmsWidgetConfiguration"], "templates", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["templateName"] => $context["templatePath"]) {
                // line 16
                echo "                            <li> <strong>";
                echo twig_escape_filter($this->env, $context["templateName"], "html", null, true);
                echo "</strong> (";
                echo twig_escape_filter($this->env, $context["templatePath"], "html", null, true);
                echo ") </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['templateName'], $context['templatePath'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                    </ul>
                    <hr />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmsWidgetConfiguration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@cmsContentWidget/usageInformation/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 21,  180 => 18,  169 => 16,  165 => 15,  160 => 13,  156 => 12,  152 => 11,  147 => 10,  142 => 9,  138 => 8,  131 => 5,  127 => 4,  116 => 3,  44 => 23,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if cmsContentWidgetTemplateList is defined and cmsContentWidgetTemplateList.cmsContentWidgetConfigurationList|length > 0 %}
    <div class=\"col-sm-12\">
        {% embed '@Gui/Partials/ibox.twig' with {'collapsed': true} %}
            {% block title %}
                {{ 'CMS content widgets usage information' | trans }}
            {% endblock %}

            {% block content %}
                {% for cmsWidgetConfiguration in cmsContentWidgetTemplateList.cmsContentWidgetConfigurationList %}
                    <strong>{{ cmsWidgetConfiguration.functionName }}</strong> <br />
                    {{ 'Usage information:' | trans }}
                    {{ cmsWidgetConfiguration.usageInformation }} <br />
                    {{ 'Available templates:' | trans }} <br />
                    <ul>
                        {% for templateName, templatePath in cmsWidgetConfiguration.templates %}
                            <li> <strong>{{ templateName }}</strong> ({{ templatePath }}) </li>
                        {% endfor %}
                    </ul>
                    <hr />
                {% endfor %}
            {% endblock %}
        {% endembed %}
    </div>
{% endif %}
", "@cmsContentWidget/usageInformation/index.twig", "/data/vendor/spryker/cms-content-widget/src/Spryker/Zed/CmsContentWidget/Presentation//UsageInformation/index.twig");
    }
}
