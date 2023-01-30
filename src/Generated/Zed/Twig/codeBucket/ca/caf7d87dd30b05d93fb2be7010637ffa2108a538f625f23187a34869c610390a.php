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

/* @ProductManagement/View/_partials/info-plugins.twig */
class __TwigTemplate_eb9cb21ca0573fd3912727782c64ca0f24f8e8c0a3f95401be4ba7d5dfed7b54 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["renderedPlugins"]) || array_key_exists("renderedPlugins", $context) ? $context["renderedPlugins"] : (function () { throw new RuntimeError('Variable "renderedPlugins" does not exist.', 1, $this->source); })()));
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
        foreach ($context['_seq'] as $context["pluginName"] => $context["renderedPlugin"]) {
            // line 2
            echo "    ";
            $this->loadTemplate("@ProductManagement/View/_partials/info-plugins.twig", "@ProductManagement/View/_partials/info-plugins.twig", 2, "1187137913")->display(twig_array_merge($context, ["widget_title" => $context["pluginName"]]));
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
        unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['renderedPlugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-plugins.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for pluginName, renderedPlugin in renderedPlugins %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: pluginName } %}
        {% block widget_content %}
            {% if renderedPlugin %}
                {% for renderedContent in renderedPlugin %}
                    <p>{{ renderedContent }}</p>
                {% endfor %}
            {% else %}
                <p>{{ 'No records' | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endembed %}
{% endfor %}", "@ProductManagement/View/_partials/info-plugins.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-plugins.twig");
    }
}


/* @ProductManagement/View/_partials/info-plugins.twig */
class __TwigTemplate_eb9cb21ca0573fd3912727782c64ca0f24f8e8c0a3f95401be4ba7d5dfed7b54___1187137913 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductManagement/View/_partials/info-plugins.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            ";
        if ((isset($context["renderedPlugin"]) || array_key_exists("renderedPlugin", $context) ? $context["renderedPlugin"] : (function () { throw new RuntimeError('Variable "renderedPlugin" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["renderedPlugin"]) || array_key_exists("renderedPlugin", $context) ? $context["renderedPlugin"] : (function () { throw new RuntimeError('Variable "renderedPlugin" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["renderedContent"]) {
                // line 6
                echo "                    <p>";
                echo twig_escape_filter($this->env, $context["renderedContent"], "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['renderedContent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "            ";
        } else {
            // line 9
            echo "                <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No records"), "html", null, true);
            echo "</p>
            ";
        }
        // line 11
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-plugins.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 11,  158 => 9,  155 => 8,  146 => 6,  141 => 5,  138 => 4,  134 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for pluginName, renderedPlugin in renderedPlugins %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: pluginName } %}
        {% block widget_content %}
            {% if renderedPlugin %}
                {% for renderedContent in renderedPlugin %}
                    <p>{{ renderedContent }}</p>
                {% endfor %}
            {% else %}
                <p>{{ 'No records' | trans }}</p>
            {% endif %}
        {% endblock %}
    {% endembed %}
{% endfor %}", "@ProductManagement/View/_partials/info-plugins.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-plugins.twig");
    }
}
