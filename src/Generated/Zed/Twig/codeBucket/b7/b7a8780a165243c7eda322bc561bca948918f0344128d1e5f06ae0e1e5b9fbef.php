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

/* @NavigationGui/Index/index.twig */
class __TwigTemplate_da1fa657be1117ca087a08dd8d0f67eee07f414992bc1e908ba23842a19f1887 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_title' => [$this, 'block_section_title'],
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
            'head_css' => [$this, 'block_head_css'],
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
        $context["widget_title"] = "Navigation";
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@NavigationGui/Index/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview of Navigation Elements"), "html", null, true);
    }

    // line 6
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        echo call_user_func_array($this->env->getFunction('createActionButton')->getCallable(), ["/navigation-gui/create", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Navigation Element")]);
        echo "
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    ";
        // line 12
        $this->loadTemplate("@NavigationGui/Index/index.twig", "@NavigationGui/Index/index.twig", 12, "1543066324")->display(twig_array_merge($context, ["widget_title" => "List of navigation elements"]));
        // line 19
        echo "
    <div class=\"row\">
        <div class=\"col-lg-6\">
            ";
        // line 22
        $this->loadTemplate("@NavigationGui/Index/_partials/navigation-tree.twig", "@NavigationGui/Index/index.twig", 22)->display($context);
        // line 23
        echo "        </div>

        <div class=\"col-lg-6\">
            ";
        // line 26
        $this->loadTemplate("@NavigationGui/Index/_partials/navigation-tree-form-container.twig", "@NavigationGui/Index/index.twig", 26)->display($context);
        // line 27
        echo "        </div>
    </div>

";
    }

    // line 32
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-navigation.css"]);
        echo "\" />
";
    }

    // line 37
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 39
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-navigation.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  120 => 38,  116 => 37,  110 => 34,  105 => 33,  101 => 32,  94 => 27,  92 => 26,  87 => 23,  85 => 22,  80 => 19,  78 => 12,  75 => 11,  71 => 10,  64 => 7,  60 => 6,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Navigation' %}
{% block section_title 'Overview of Navigation Elements' | trans %}

{% block action %}
    {{ createActionButton('/navigation-gui/create', 'Create Navigation Element' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'List of navigation elements' } %}

        {% block widget_content %}
            {{ navigationTable | raw }}
        {% endblock %}

    {% endembed %}

    <div class=\"row\">
        <div class=\"col-lg-6\">
            {% include '@NavigationGui/Index/_partials/navigation-tree.twig' %}
        </div>

        <div class=\"col-lg-6\">
            {% include '@NavigationGui/Index/_partials/navigation-tree-form-container.twig' %}
        </div>
    </div>

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-navigation.css') }}\" />
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-navigation.js') }}\"></script>
{% endblock %}

", "@NavigationGui/Index/index.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Index/index.twig");
    }
}


/* @NavigationGui/Index/index.twig */
class __TwigTemplate_da1fa657be1117ca087a08dd8d0f67eee07f414992bc1e908ba23842a19f1887___1543066324 extends Template
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
        // line 12
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@NavigationGui/Index/index.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "            ";
        echo (isset($context["navigationTable"]) || array_key_exists("navigationTable", $context) ? $context["navigationTable"] : (function () { throw new RuntimeError('Variable "navigationTable" does not exist.', 15, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 15,  224 => 14,  213 => 12,  125 => 39,  120 => 38,  116 => 37,  110 => 34,  105 => 33,  101 => 32,  94 => 27,  92 => 26,  87 => 23,  85 => 22,  80 => 19,  78 => 12,  75 => 11,  71 => 10,  64 => 7,  60 => 6,  53 => 4,  48 => 1,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% set widget_title = 'Navigation' %}
{% block section_title 'Overview of Navigation Elements' | trans %}

{% block action %}
    {{ createActionButton('/navigation-gui/create', 'Create Navigation Element' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with { widget_title: 'List of navigation elements' } %}

        {% block widget_content %}
            {{ navigationTable | raw }}
        {% endblock %}

    {% endembed %}

    <div class=\"row\">
        <div class=\"col-lg-6\">
            {% include '@NavigationGui/Index/_partials/navigation-tree.twig' %}
        </div>

        <div class=\"col-lg-6\">
            {% include '@NavigationGui/Index/_partials/navigation-tree-form-container.twig' %}
        </div>
    </div>

{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-navigation.css') }}\" />
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-navigation.js') }}\"></script>
{% endblock %}

", "@NavigationGui/Index/index.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Index/index.twig");
    }
}
