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

/* @CategoryGui/Create/index.twig */
class __TwigTemplate_277c9dd2bdc172cf062de81e37af01dadb25d8a4bf18df55cf0764dc4226cfdb extends Template
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
        if ( !array_key_exists("widget_title", $context)) {
            // line 4
            $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create category");
        }
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@CategoryGui/Create/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 7, $this->source); })()), "html", null, true);
    }

    // line 9
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $this->loadTemplate("@CategoryGui/_partials/back-button.twig", "@CategoryGui/Create/index.twig", 10)->display($context);
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        $this->loadTemplate("@CategoryGui/Create/index.twig", "@CategoryGui/Create/index.twig", 14, "897332256")->display($context);
    }

    // line 27
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    ";
        $this->displayParentBlock("head_css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-category-gui-main.css"]);
        echo "\">
";
    }

    // line 32
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 34
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-category-gui-main.js"]);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-cms-block-category-connector-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@CategoryGui/Create/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  105 => 34,  100 => 33,  96 => 32,  90 => 29,  85 => 28,  81 => 27,  76 => 14,  72 => 13,  67 => 10,  63 => 9,  56 => 7,  51 => 1,  48 => 4,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% if widget_title is not defined %}
    {% set widget_title = 'Create category' | trans %}
{% endif %}

{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {% include '@CategoryGui/_partials/back-button.twig' %}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_content %}
            {{ form_start(categoryForm) }}
            {% do categoryForm.localized_attributes.setRendered %}
            {{ tabs(categoryFormTabs, {
                'categoryForm': categoryForm,
                'currentLocale': currentLocale,
            }) }}
            {{ form_end(categoryForm) }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-category-gui-main.css') }}\">
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-category-gui-main.js') }}\"></script>
    <script src=\"{{ assetsPath('js/spryker-zed-cms-block-category-connector-main.js') }}\"></script>
{% endblock %}
", "@CategoryGui/Create/index.twig", "/data/vendor/spryker/category-gui/src/Spryker/Zed/CategoryGui/Presentation//Create/index.twig");
    }
}


/* @CategoryGui/Create/index.twig */
class __TwigTemplate_277c9dd2bdc172cf062de81e37af01dadb25d8a4bf18df55cf0764dc4226cfdb___897332256 extends Template
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
        // line 14
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CategoryGui/Create/index.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
            ";
        // line 17
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 17, $this->source); })()), "localized_attributes", [], "any", false, false, false, 17), "setRendered", [], "any", false, false, false, 17);
        // line 18
        echo "            ";
        echo call_user_func_array($this->env->getFunction('tabs')->getCallable(), [$this->env, (isset($context["categoryFormTabs"]) || array_key_exists("categoryFormTabs", $context) ? $context["categoryFormTabs"] : (function () { throw new RuntimeError('Variable "categoryFormTabs" does not exist.', 18, $this->source); })()), ["categoryForm" =>         // line 19
(isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 19, $this->source); })()), "currentLocale" =>         // line 20
(isset($context["currentLocale"]) || array_key_exists("currentLocale", $context) ? $context["currentLocale"] : (function () { throw new RuntimeError('Variable "currentLocale" does not exist.', 20, $this->source); })())]]);
        // line 21
        echo "
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@CategoryGui/Create/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 22,  219 => 21,  217 => 20,  216 => 19,  214 => 18,  212 => 17,  207 => 16,  203 => 15,  192 => 14,  109 => 35,  105 => 34,  100 => 33,  96 => 32,  90 => 29,  85 => 28,  81 => 27,  76 => 14,  72 => 13,  67 => 10,  63 => 9,  56 => 7,  51 => 1,  48 => 4,  46 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% if widget_title is not defined %}
    {% set widget_title = 'Create category' | trans %}
{% endif %}

{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {% include '@CategoryGui/_partials/back-button.twig' %}
{% endblock %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' %}
        {% block widget_content %}
            {{ form_start(categoryForm) }}
            {% do categoryForm.localized_attributes.setRendered %}
            {{ tabs(categoryFormTabs, {
                'categoryForm': categoryForm,
                'currentLocale': currentLocale,
            }) }}
            {{ form_end(categoryForm) }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block head_css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-category-gui-main.css') }}\">
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-category-gui-main.js') }}\"></script>
    <script src=\"{{ assetsPath('js/spryker-zed-cms-block-category-connector-main.js') }}\"></script>
{% endblock %}
", "@CategoryGui/Create/index.twig", "/data/vendor/spryker/category-gui/src/Spryker/Zed/CategoryGui/Presentation//Create/index.twig");
    }
}
