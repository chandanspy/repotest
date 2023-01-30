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

/* @StateMachine/List/index.twig */
class __TwigTemplate_ecc1791ffd9418c630e1229515abee9d772178482344c53c615cd3620279ccdd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Application/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Application/Layout/layout.twig", "@StateMachine/List/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@StateMachine/List/index.twig", "@StateMachine/List/index.twig", 4, "1220170661")->display(twig_array_merge($context, ["widget_title" => "State machines"]));
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "@StateMachine/List/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 23,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Application/Layout/layout.twig' %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'State machines' } %}

        {% block widget_content %}

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>{{ 'State machines' | trans }}</h1>
                </div>

                <ul>
                {% for stateMachineName in stateMachines %}
                    <li><a href=\"{{ url('/state-machine/list/process', {'state-machine': stateMachineName}) }}\" >{{ stateMachineName }}</a></li>
                {% endfor %}
                </ul>
            </div>

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@StateMachine/List/index.twig", "/data/vendor/spryker/state-machine/src/Spryker/Zed/StateMachine/Presentation/List/index.twig");
    }
}


/* @StateMachine/List/index.twig */
class __TwigTemplate_ecc1791ffd9418c630e1229515abee9d772178482344c53c615cd3620279ccdd___1220170661 extends Template
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
        // line 4
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@StateMachine/List/index.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("State machines"), "html", null, true);
        echo "</h1>
                </div>

                <ul>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stateMachines"]) || array_key_exists("stateMachines", $context) ? $context["stateMachines"] : (function () { throw new RuntimeError('Variable "stateMachines" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stateMachineName"]) {
            // line 15
            echo "                    <li><a href=\"";
            echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/state-machine/list/process", ["state-machine" => $context["stateMachineName"]]]);
            echo "\" >";
            echo twig_escape_filter($this->env, $context["stateMachineName"], "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stateMachineName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </ul>
            </div>

        ";
    }

    public function getTemplateName()
    {
        return "@StateMachine/List/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 17,  154 => 15,  150 => 14,  143 => 10,  138 => 7,  134 => 6,  123 => 4,  53 => 23,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Application/Layout/layout.twig' %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'State machines' } %}

        {% block widget_content %}

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>{{ 'State machines' | trans }}</h1>
                </div>

                <ul>
                {% for stateMachineName in stateMachines %}
                    <li><a href=\"{{ url('/state-machine/list/process', {'state-machine': stateMachineName}) }}\" >{{ stateMachineName }}</a></li>
                {% endfor %}
                </ul>
            </div>

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@StateMachine/List/index.twig", "/data/vendor/spryker/state-machine/src/Spryker/Zed/StateMachine/Presentation/List/index.twig");
    }
}
