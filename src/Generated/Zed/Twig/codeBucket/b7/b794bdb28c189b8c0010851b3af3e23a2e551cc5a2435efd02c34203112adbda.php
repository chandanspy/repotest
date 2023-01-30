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

/* @CmsSlotGui/TemplateList/index.twig */
class __TwigTemplate_ca0e30bd34316a014c29313196e1d58e0df6a4d2b76e572a8188e038affb0197 extends Template
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
        if ( !array_key_exists("widget_title", $context)) {
            // line 4
            $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview of Slots");
        }
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@CmsSlotGui/TemplateList/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 7, $this->source); })()), "html", null, true);
    }

    // line 8
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 8, $this->source); })()), "html", null, true);
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $this->loadTemplate("@CmsSlotGui/TemplateList/index.twig", "@CmsSlotGui/TemplateList/index.twig", 11, "1275013726")->display(twig_array_merge($context, ["row_class" => "js-row-unsaved-overlay"]));
        // line 21
        echo "
    ";
        // line 22
        $this->loadTemplate("@CmsSlotGui/TemplateList/index.twig", "@CmsSlotGui/TemplateList/index.twig", 22, "2031259124")->display(twig_array_merge($context, ["row_class" => "js-row-list-of-slots js-row-unsaved-overlay"]));
    }

    // line 34
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    ";
        $this->displayParentBlock("footer_js", $context, $blocks);
        echo "
    <script src=\"";
        // line 36
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-cms-slot-gui-main.js"]);
        echo "\"></script>
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("/cms-slot-block-gui/assets/index"), ["ignore_errors" => true]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CmsSlotGui/TemplateList/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  92 => 36,  87 => 35,  83 => 34,  79 => 22,  76 => 21,  73 => 11,  69 => 10,  62 => 8,  55 => 7,  50 => 1,  47 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% if widget_title is not defined %}
    {% set widget_title = 'Overview of Slots' | trans %}
{% endif %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with {
        row_class: 'js-row-unsaved-overlay',
    } %}
        {% block widget_title -%}
            <h5>{{ 'List of Templates' | trans }}</h5>
        {%- endblock %}
        {% block widget_content %}
            {{ templateListTable | raw }}
        {% endblock %}
    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with {
        row_class: 'js-row-list-of-slots js-row-unsaved-overlay',
    } %}
        {% block widget_title -%}
            <h5>{{ 'List of Slots for' | trans }} <span class=\"js-slot-template-name\"></span> {{ 'Template' | trans }}</h5>
        {%- endblock %}
        {% block widget_content %}
            {{ slotListTable | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-cms-slot-gui-main.js') }}\"></script>
    {{ render(controller('/cms-slot-block-gui/assets/index'), {'ignore_errors':true}) }}
{% endblock %}
", "@CmsSlotGui/TemplateList/index.twig", "/data/vendor/spryker/cms-slot-gui/src/Spryker/Zed/CmsSlotGui/Presentation//TemplateList/index.twig");
    }
}


/* @CmsSlotGui/TemplateList/index.twig */
class __TwigTemplate_ca0e30bd34316a014c29313196e1d58e0df6a4d2b76e572a8188e038affb0197___1275013726 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_title' => [$this, 'block_widget_title'],
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CmsSlotGui/TemplateList/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_widget_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<h5>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of Templates"), "html", null, true);
        echo "</h5>";
    }

    // line 17
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        echo (isset($context["templateListTable"]) || array_key_exists("templateListTable", $context) ? $context["templateListTable"] : (function () { throw new RuntimeError('Variable "templateListTable" does not exist.', 18, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@CmsSlotGui/TemplateList/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 18,  203 => 17,  197 => 15,  193 => 14,  182 => 11,  96 => 37,  92 => 36,  87 => 35,  83 => 34,  79 => 22,  76 => 21,  73 => 11,  69 => 10,  62 => 8,  55 => 7,  50 => 1,  47 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% if widget_title is not defined %}
    {% set widget_title = 'Overview of Slots' | trans %}
{% endif %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with {
        row_class: 'js-row-unsaved-overlay',
    } %}
        {% block widget_title -%}
            <h5>{{ 'List of Templates' | trans }}</h5>
        {%- endblock %}
        {% block widget_content %}
            {{ templateListTable | raw }}
        {% endblock %}
    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with {
        row_class: 'js-row-list-of-slots js-row-unsaved-overlay',
    } %}
        {% block widget_title -%}
            <h5>{{ 'List of Slots for' | trans }} <span class=\"js-slot-template-name\"></span> {{ 'Template' | trans }}</h5>
        {%- endblock %}
        {% block widget_content %}
            {{ slotListTable | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-cms-slot-gui-main.js') }}\"></script>
    {{ render(controller('/cms-slot-block-gui/assets/index'), {'ignore_errors':true}) }}
{% endblock %}
", "@CmsSlotGui/TemplateList/index.twig", "/data/vendor/spryker/cms-slot-gui/src/Spryker/Zed/CmsSlotGui/Presentation//TemplateList/index.twig");
    }
}


/* @CmsSlotGui/TemplateList/index.twig */
class __TwigTemplate_ca0e30bd34316a014c29313196e1d58e0df6a4d2b76e572a8188e038affb0197___2031259124 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_title' => [$this, 'block_widget_title'],
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 22
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CmsSlotGui/TemplateList/index.twig", 22);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_widget_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "<h5>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of Slots for"), "html", null, true);
        echo " <span class=\"js-slot-template-name\"></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Template"), "html", null, true);
        echo "</h5>";
    }

    // line 28
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            ";
        echo (isset($context["slotListTable"]) || array_key_exists("slotListTable", $context) ? $context["slotListTable"] : (function () { throw new RuntimeError('Variable "slotListTable" does not exist.', 29, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@CmsSlotGui/TemplateList/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 29,  317 => 28,  309 => 26,  305 => 25,  294 => 22,  207 => 18,  203 => 17,  197 => 15,  193 => 14,  182 => 11,  96 => 37,  92 => 36,  87 => 35,  83 => 34,  79 => 22,  76 => 21,  73 => 11,  69 => 10,  62 => 8,  55 => 7,  50 => 1,  47 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% if widget_title is not defined %}
    {% set widget_title = 'Overview of Slots' | trans %}
{% endif %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block content %}
    {% embed '@Gui/Partials/widget.twig' with {
        row_class: 'js-row-unsaved-overlay',
    } %}
        {% block widget_title -%}
            <h5>{{ 'List of Templates' | trans }}</h5>
        {%- endblock %}
        {% block widget_content %}
            {{ templateListTable | raw }}
        {% endblock %}
    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with {
        row_class: 'js-row-list-of-slots js-row-unsaved-overlay',
    } %}
        {% block widget_title -%}
            <h5>{{ 'List of Slots for' | trans }} <span class=\"js-slot-template-name\"></span> {{ 'Template' | trans }}</h5>
        {%- endblock %}
        {% block widget_content %}
            {{ slotListTable | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block footer_js %}
    {{ parent() }}
    <script src=\"{{ assetsPath('js/spryker-zed-cms-slot-gui-main.js') }}\"></script>
    {{ render(controller('/cms-slot-block-gui/assets/index'), {'ignore_errors':true}) }}
{% endblock %}
", "@CmsSlotGui/TemplateList/index.twig", "/data/vendor/spryker/cms-slot-gui/src/Spryker/Zed/CmsSlotGui/Presentation//TemplateList/index.twig");
    }
}
