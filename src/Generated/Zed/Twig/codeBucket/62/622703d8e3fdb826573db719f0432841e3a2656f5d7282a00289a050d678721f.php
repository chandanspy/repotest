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

/* @NavigationGui/Node/update.twig */
class __TwigTemplate_b99b7a0a1ac1e1e59b1caa8c5ac25e5c4170f94cd7d20402305c22727f5c3d36 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'head_css' => [$this, 'block_head_css'],
            'footer_js' => [$this, 'block_footer_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Gui/Layout/iframe-layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Layout/iframe-layout.twig", "@NavigationGui/Node/update.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"ibox float-e-margins\">
        ";
        // line 6
        if ((isset($context["idNavigationNode"]) || array_key_exists("idNavigationNode", $context) ? $context["idNavigationNode"] : (function () { throw new RuntimeError('Variable "idNavigationNode" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteNavigationNodeForm"]) || array_key_exists("deleteNavigationNodeForm", $context) ? $context["deleteNavigationNodeForm"] : (function () { throw new RuntimeError('Variable "deleteNavigationNodeForm" does not exist.', 7, $this->source); })()), 'form_start', ["action" => call_user_func_array($this->env->getFunction('url')->getCallable(), ["/navigation-gui/node/delete"])]);
            // line 9
            echo "
                <input type=\"hidden\" name=\"id-navigation\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["idNavigation"]) || array_key_exists("idNavigation", $context) ? $context["idNavigation"] : (function () { throw new RuntimeError('Variable "idNavigation" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" />
                <input type=\"hidden\" name=\"id-navigation-node\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["idNavigationNode"]) || array_key_exists("idNavigationNode", $context) ? $context["idNavigationNode"] : (function () { throw new RuntimeError('Variable "idNavigationNode" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "\" />
            ";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteNavigationNodeForm"]) || array_key_exists("deleteNavigationNodeForm", $context) ? $context["deleteNavigationNodeForm"] : (function () { throw new RuntimeError('Variable "deleteNavigationNodeForm" does not exist.', 12, $this->source); })()), 'form_end');
            echo "
        ";
        }
        // line 14
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["navigationNodeForm"]) || array_key_exists("navigationNodeForm", $context) ? $context["navigationNodeForm"] : (function () { throw new RuntimeError('Variable "navigationNodeForm" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

            <div class=\"ibox-title\">
                <h5>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit node"), "html", null, true);
        echo "</h5>

                <div class=\"pull-right\">
                    <a href=\"";
        // line 20
        echo call_user_func_array($this->env->getFunction('url')->getCallable(), ["/navigation-gui/node/create", ["id-navigation" => (isset($context["idNavigation"]) || array_key_exists("idNavigation", $context) ? $context["idNavigation"] : (function () { throw new RuntimeError('Variable "idNavigation" does not exist.', 20, $this->source); })()), "id-navigation-node" => (isset($context["idNavigationNode"]) || array_key_exists("idNavigationNode", $context) ? $context["idNavigationNode"] : (function () { throw new RuntimeError('Variable "idNavigationNode" does not exist.', 20, $this->source); })())]]);
        echo "\" id=\"add-child-node-btn\" class=\"btn btn-xs btn-primary\">
                        <i class=\"fa fa-pencil-square-o\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create child node"), "html", null, true);
        echo "
                    </a>

                    ";
        // line 24
        if ((isset($context["idNavigationNode"]) || array_key_exists("idNavigationNode", $context) ? $context["idNavigationNode"] : (function () { throw new RuntimeError('Variable "idNavigationNode" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                        <button id=\"remove-selected-node-btn\" class=\"btn btn-xs btn-danger\" data-confirm-message=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you remove the selected node and all its children?"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-trash\"></i>
                            ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete selected node"), "html", null, true);
            echo "
                        </button>
                    ";
        }
        // line 30
        echo "                </div>
            </div>

            <div class=\"ibox-content\">
                ";
        // line 34
        $this->loadTemplate("@NavigationGui/Node/_partials/navigation-node-form-content.twig", "@NavigationGui/Node/update.twig", 34)->display($context);
        // line 35
        echo "            </div>

            <div class=\"ibox-footer\">
                <input id=\"navigation-node-form-submit\" type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />
            </div>
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["navigationNodeForm"]) || array_key_exists("navigationNodeForm", $context) ? $context["navigationNodeForm"] : (function () { throw new RuntimeError('Variable "navigationNodeForm" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
    </div>

    ";
        // line 43
        $this->loadTemplate("@NavigationGui/Node/_partials/tree-reloader.twig", "@NavigationGui/Node/update.twig", 43)->display($context);
        // line 44
        echo "
";
    }

    // line 47
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 49
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-navigation.css"]);
        echo "\" />
";
    }

    // line 51
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 53
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-navigation-node-form.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Node/update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 53,  164 => 52,  160 => 51,  154 => 49,  149 => 48,  145 => 47,  140 => 44,  138 => 43,  132 => 40,  127 => 38,  122 => 35,  120 => 34,  114 => 30,  108 => 27,  102 => 25,  100 => 24,  94 => 21,  90 => 20,  84 => 17,  77 => 14,  72 => 12,  68 => 11,  64 => 10,  61 => 9,  58 => 7,  56 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/iframe-layout.twig' %}

{% block content %}

    <div class=\"ibox float-e-margins\">
        {% if idNavigationNode %}
            {{ form_start(deleteNavigationNodeForm, {
                action: url('/navigation-gui/node/delete')
            }) }}
                <input type=\"hidden\" name=\"id-navigation\" value=\"{{ idNavigation }}\" />
                <input type=\"hidden\" name=\"id-navigation-node\" value=\"{{ idNavigationNode }}\" />
            {{ form_end(deleteNavigationNodeForm) }}
        {% endif %}
        {{ form_start(navigationNodeForm) }}

            <div class=\"ibox-title\">
                <h5>{{ 'Edit node' | trans }}</h5>

                <div class=\"pull-right\">
                    <a href=\"{{ url('/navigation-gui/node/create', {'id-navigation': idNavigation, 'id-navigation-node': idNavigationNode}) }}\" id=\"add-child-node-btn\" class=\"btn btn-xs btn-primary\">
                        <i class=\"fa fa-pencil-square-o\"></i> {{ 'Create child node' | trans }}
                    </a>

                    {% if idNavigationNode %}
                        <button id=\"remove-selected-node-btn\" class=\"btn btn-xs btn-danger\" data-confirm-message=\"{{ 'Are you sure you remove the selected node and all its children?' | trans }}\">
                            <i class=\"fa fa-trash\"></i>
                            {{ 'Delete selected node' | trans }}
                        </button>
                    {% endif %}
                </div>
            </div>

            <div class=\"ibox-content\">
                {% include '@NavigationGui/Node/_partials/navigation-node-form-content.twig' %}
            </div>

            <div class=\"ibox-footer\">
                <input id=\"navigation-node-form-submit\" type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\" />
            </div>
        {{ form_end(navigationNodeForm) }}
    </div>

    {% include '@NavigationGui/Node/_partials/tree-reloader.twig' %}

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-navigation.css') }}\" />
{% endblock %}
{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-navigation-node-form.js') }}\"></script>
{% endblock %}
", "@NavigationGui/Node/update.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Node/update.twig");
    }
}
