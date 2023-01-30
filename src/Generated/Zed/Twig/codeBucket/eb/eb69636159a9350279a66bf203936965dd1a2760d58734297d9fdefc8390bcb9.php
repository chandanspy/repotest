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

/* @ProductManagement/View/_partials/info-attribute.twig */
class __TwigTemplate_38a701318f90a4d40bc7399dd4d8e838e760519d4ffc19da888c3b84b9c4716c extends Template
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
        $this->loadTemplate("@ProductManagement/View/_partials/info-attribute.twig", "@ProductManagement/View/_partials/info-attribute.twig", 1, "1494909441")->display(twig_array_merge($context, ["widget_title" => "Attributes"]));
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-attribute.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Attributes' } %}
    {% block widget_content %}

        {% for localeName,attributes in productAttributes %}
            {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first)} %}
                {% block title %}
                    {% if localeName == 'default' %}
                        {{ 'Default' | trans }}
                    {% else %}
                        {{ parent() }}
                    {% endif %}
                {% endblock %}

                {% block content %}

                    {% for name,value in attributes %}
                        <div class=\"row\">
                            <div class=\"col-xs-4\"><b>{{ name }}</b></div>
                            <div class=\"col-xs-8\">{{ value }}</div>
                        </div>
                        {% if not loop.last %}
                            <div class=\"hr-line-dashed\"></div>
                        {% endif %}
                    {% endfor %}

                {% endblock %}
            {% endembed %}
        {% endfor %}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-attribute.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-attribute.twig");
    }
}


/* @ProductManagement/View/_partials/info-attribute.twig */
class __TwigTemplate_38a701318f90a4d40bc7399dd4d8e838e760519d4ffc19da888c3b84b9c4716c___1494909441 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductManagement/View/_partials/info-attribute.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productAttributes"]) || array_key_exists("productAttributes", $context) ? $context["productAttributes"] : (function () { throw new RuntimeError('Variable "productAttributes" does not exist.', 4, $this->source); })()));
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
        foreach ($context['_seq'] as $context["localeName"] => $context["attributes"]) {
            // line 5
            echo "            ";
            $this->loadTemplate("@ProductManagement/View/_partials/info-attribute.twig", "@ProductManagement/View/_partials/info-attribute.twig", 5, "2040263582")->display(twig_array_merge($context, ["collapsed" =>  !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5)]));
            // line 28
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['localeName'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-attribute.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 29,  150 => 28,  147 => 5,  130 => 4,  127 => 3,  123 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Attributes' } %}
    {% block widget_content %}

        {% for localeName,attributes in productAttributes %}
            {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first)} %}
                {% block title %}
                    {% if localeName == 'default' %}
                        {{ 'Default' | trans }}
                    {% else %}
                        {{ parent() }}
                    {% endif %}
                {% endblock %}

                {% block content %}

                    {% for name,value in attributes %}
                        <div class=\"row\">
                            <div class=\"col-xs-4\"><b>{{ name }}</b></div>
                            <div class=\"col-xs-8\">{{ value }}</div>
                        </div>
                        {% if not loop.last %}
                            <div class=\"hr-line-dashed\"></div>
                        {% endif %}
                    {% endfor %}

                {% endblock %}
            {% endembed %}
        {% endfor %}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-attribute.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-attribute.twig");
    }
}


/* @ProductManagement/View/_partials/info-attribute.twig */
class __TwigTemplate_38a701318f90a4d40bc7399dd4d8e838e760519d4ffc19da888c3b84b9c4716c___2040263582 extends Template
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
        // line 5
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductManagement/View/_partials/info-attribute.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                    ";
        if ((0 === twig_compare((isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 7, $this->source); })()), "default"))) {
            // line 8
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Default"), "html", null, true);
            echo "
                    ";
        } else {
            // line 10
            echo "                        ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
                    ";
        }
        // line 12
        echo "                ";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 16, $this->source); })()));
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
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 17
            echo "                        <div class=\"row\">
                            <div class=\"col-xs-4\"><b>";
            // line 18
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</b></div>
                            <div class=\"col-xs-8\">";
            // line 19
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</div>
                        </div>
                        ";
            // line 21
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 21)) {
                // line 22
                echo "                            <div class=\"hr-line-dashed\"></div>
                        ";
            }
            // line 24
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-attribute.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 25,  318 => 24,  314 => 22,  312 => 21,  307 => 19,  303 => 18,  300 => 17,  283 => 16,  280 => 15,  276 => 14,  272 => 12,  266 => 10,  260 => 8,  257 => 7,  253 => 6,  242 => 5,  164 => 29,  150 => 28,  147 => 5,  130 => 4,  127 => 3,  123 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Attributes' } %}
    {% block widget_content %}

        {% for localeName,attributes in productAttributes %}
            {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.first)} %}
                {% block title %}
                    {% if localeName == 'default' %}
                        {{ 'Default' | trans }}
                    {% else %}
                        {{ parent() }}
                    {% endif %}
                {% endblock %}

                {% block content %}

                    {% for name,value in attributes %}
                        <div class=\"row\">
                            <div class=\"col-xs-4\"><b>{{ name }}</b></div>
                            <div class=\"col-xs-8\">{{ value }}</div>
                        </div>
                        {% if not loop.last %}
                            <div class=\"hr-line-dashed\"></div>
                        {% endif %}
                    {% endfor %}

                {% endblock %}
            {% endembed %}
        {% endfor %}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-attribute.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-attribute.twig");
    }
}
