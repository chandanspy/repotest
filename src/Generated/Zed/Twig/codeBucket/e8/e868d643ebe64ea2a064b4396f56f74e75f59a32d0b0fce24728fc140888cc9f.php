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

/* @NavigationGui/Node/create.twig */
class __TwigTemplate_6c3d2027527600a9b503236dfe25cfb6ddc2821e858937e6be7b0ad0c33f533f extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Layout/iframe-layout.twig", "@NavigationGui/Node/create.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"ibox float-e-margins\">
        ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["navigationNodeForm"]) || array_key_exists("navigationNodeForm", $context) ? $context["navigationNodeForm"] : (function () { throw new RuntimeError('Variable "navigationNodeForm" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
            <div class=\"ibox-title\">
                <h5>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create child node"), "html", null, true);
        echo "</h5>
            </div>

            <div class=\"ibox-content\">
                ";
        // line 11
        $this->loadTemplate("@NavigationGui/Node/_partials/navigation-node-form-content.twig", "@NavigationGui/Node/create.twig", 11)->display($context);
        // line 12
        echo "            </div>

            <div class=\"ibox-footer\">
                <input id=\"navigation-node-form-submit\" type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\" />
            </div>
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["navigationNodeForm"]) || array_key_exists("navigationNodeForm", $context) ? $context["navigationNodeForm"] : (function () { throw new RuntimeError('Variable "navigationNodeForm" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
    </div>

    ";
        // line 20
        $this->loadTemplate("@NavigationGui/Node/_partials/tree-reloader.twig", "@NavigationGui/Node/create.twig", 20)->display($context);
        // line 21
        echo "
";
    }

    // line 24
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-navigation.css"]);
        echo "\" />
";
    }

    // line 28
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 30
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-navigation-node-form.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Node/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  111 => 29,  107 => 28,  101 => 26,  96 => 25,  92 => 24,  87 => 21,  85 => 20,  79 => 17,  74 => 15,  69 => 12,  67 => 11,  60 => 7,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/iframe-layout.twig' %}

{% block content %}
    <div class=\"ibox float-e-margins\">
        {{ form_start(navigationNodeForm) }}
            <div class=\"ibox-title\">
                <h5>{{ 'Create child node' | trans }}</h5>
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

", "@NavigationGui/Node/create.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Node/create.twig");
    }
}
