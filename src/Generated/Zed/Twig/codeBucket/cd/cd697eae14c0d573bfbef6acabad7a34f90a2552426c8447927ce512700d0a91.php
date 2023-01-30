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

/* @PriceProductScheduleGui/Import/index.twig */
class __TwigTemplate_bec40681d22c5e270c76b1d816bbd3180614dda766b8eb81707d5f72bc087e76 extends Template
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
            'action' => [$this, 'block_action'],
            'content' => [$this, 'block_content'],
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
            $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Scheduled Prices");
        }
        // line 1
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@PriceProductScheduleGui/Import/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 8, $this->source); })()), "html", null, true);
    }

    // line 11
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 11, $this->source); })()), "html", null, true);
    }

    // line 13
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        $this->displayParentBlock("action", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
    ";
        // line 19
        $this->loadTemplate("@PriceProductScheduleGui/Import/index.twig", "@PriceProductScheduleGui/Import/index.twig", 19, "1348210661")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import new scheduled prices")]));
        // line 43
        echo "
    ";
        // line 44
        $this->loadTemplate("@PriceProductScheduleGui/Import/index.twig", "@PriceProductScheduleGui/Import/index.twig", 44, "376637921")->display(twig_array_merge($context, ["widget_title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Scheduled prices imported")]));
        // line 51
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PriceProductScheduleGui/Import/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 51,  93 => 44,  90 => 43,  88 => 19,  85 => 18,  81 => 17,  74 => 14,  70 => 13,  63 => 11,  59 => 8,  55 => 7,  50 => 1,  47 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% if widget_title is not defined %}
    {% set widget_title = 'Scheduled Prices' | trans %}
{% endif %}

{% block head_title -%}
    {{ widget_title }}
{%- endblock %}

{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ parent() }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with {widget_title: 'Import new scheduled prices' | trans} %}

        {% block widget_content %}
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 col-lg-3\">
                    <div class=\"m-b-sm\">
                        <a target=\"_blank\" href=\"https://documentation.spryker.com/tutorials/howtos/feature_howtos/ht-import-scheduled-prices-201907.htm\">{{ 'Learn about file format on our documentation' | trans }}</a>
                    </div>

                    {{ form_start(importForm, {'action': url('/price-product-schedule-gui/dry-run-import')}) }}

                    {{ form_row(importForm.priceProductScheduleName) }}
                    {{ form_row(importForm.fileUpload) }}

                    <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Import your CSV file' | trans }}\"/>
                    <div class=\"m-b-sm\">
                        {{ 'Importing a lot of scheduled prices can take some time.' | trans }}
                    </div>
                    {{ form_end(importForm) }}
                </div>
            </div>
        {% endblock %}

    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with {widget_title: 'Scheduled prices imported' | trans} %}

        {% block widget_content %}
            {{ priceProductScheduleListTableView | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@PriceProductScheduleGui/Import/index.twig", "/data/vendor/spryker/price-product-schedule-gui/src/Spryker/Zed/PriceProductScheduleGui/Presentation//Import/index.twig");
    }
}


/* @PriceProductScheduleGui/Import/index.twig */
class __TwigTemplate_bec40681d22c5e270c76b1d816bbd3180614dda766b8eb81707d5f72bc087e76___1348210661 extends Template
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
        // line 19
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@PriceProductScheduleGui/Import/index.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 col-lg-3\">
                    <div class=\"m-b-sm\">
                        <a target=\"_blank\" href=\"https://documentation.spryker.com/tutorials/howtos/feature_howtos/ht-import-scheduled-prices-201907.htm\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Learn about file format on our documentation"), "html", null, true);
        echo "</a>
                    </div>

                    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 28, $this->source); })()), 'form_start', ["action" => call_user_func_array($this->env->getFunction('url')->getCallable(), ["/price-product-schedule-gui/dry-run-import"])]);
        echo "

                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 30, $this->source); })()), "priceProductScheduleName", [], "any", false, false, false, 30), 'row');
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 31, $this->source); })()), "fileUpload", [], "any", false, false, false, 31), 'row');
        echo "

                    <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import your CSV file"), "html", null, true);
        echo "\"/>
                    <div class=\"m-b-sm\">
                        ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Importing a lot of scheduled prices can take some time."), "html", null, true);
        echo "
                    </div>
                    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@PriceProductScheduleGui/Import/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 37,  238 => 35,  233 => 33,  228 => 31,  224 => 30,  219 => 28,  213 => 25,  208 => 22,  204 => 21,  193 => 19,  95 => 51,  93 => 44,  90 => 43,  88 => 19,  85 => 18,  81 => 17,  74 => 14,  70 => 13,  63 => 11,  59 => 8,  55 => 7,  50 => 1,  47 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% if widget_title is not defined %}
    {% set widget_title = 'Scheduled Prices' | trans %}
{% endif %}

{% block head_title -%}
    {{ widget_title }}
{%- endblock %}

{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ parent() }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with {widget_title: 'Import new scheduled prices' | trans} %}

        {% block widget_content %}
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 col-lg-3\">
                    <div class=\"m-b-sm\">
                        <a target=\"_blank\" href=\"https://documentation.spryker.com/tutorials/howtos/feature_howtos/ht-import-scheduled-prices-201907.htm\">{{ 'Learn about file format on our documentation' | trans }}</a>
                    </div>

                    {{ form_start(importForm, {'action': url('/price-product-schedule-gui/dry-run-import')}) }}

                    {{ form_row(importForm.priceProductScheduleName) }}
                    {{ form_row(importForm.fileUpload) }}

                    <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Import your CSV file' | trans }}\"/>
                    <div class=\"m-b-sm\">
                        {{ 'Importing a lot of scheduled prices can take some time.' | trans }}
                    </div>
                    {{ form_end(importForm) }}
                </div>
            </div>
        {% endblock %}

    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with {widget_title: 'Scheduled prices imported' | trans} %}

        {% block widget_content %}
            {{ priceProductScheduleListTableView | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@PriceProductScheduleGui/Import/index.twig", "/data/vendor/spryker/price-product-schedule-gui/src/Spryker/Zed/PriceProductScheduleGui/Presentation//Import/index.twig");
    }
}


/* @PriceProductScheduleGui/Import/index.twig */
class __TwigTemplate_bec40681d22c5e270c76b1d816bbd3180614dda766b8eb81707d5f72bc087e76___376637921 extends Template
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
        // line 44
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@PriceProductScheduleGui/Import/index.twig", 44);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "            ";
        echo (isset($context["priceProductScheduleListTableView"]) || array_key_exists("priceProductScheduleListTableView", $context) ? $context["priceProductScheduleListTableView"] : (function () { throw new RuntimeError('Variable "priceProductScheduleListTableView" does not exist.', 47, $this->source); })());
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PriceProductScheduleGui/Import/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 47,  355 => 46,  344 => 44,  243 => 37,  238 => 35,  233 => 33,  228 => 31,  224 => 30,  219 => 28,  213 => 25,  208 => 22,  204 => 21,  193 => 19,  95 => 51,  93 => 44,  90 => 43,  88 => 19,  85 => 18,  81 => 17,  74 => 14,  70 => 13,  63 => 11,  59 => 8,  55 => 7,  50 => 1,  47 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Gui/Layout/layout.twig' %}

{% if widget_title is not defined %}
    {% set widget_title = 'Scheduled Prices' | trans %}
{% endif %}

{% block head_title -%}
    {{ widget_title }}
{%- endblock %}

{% block section_title %}{{ widget_title }}{% endblock %}

{% block action %}
    {{ parent() }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' with {widget_title: 'Import new scheduled prices' | trans} %}

        {% block widget_content %}
            <div class=\"row\">
                <div class=\"col-xs-12 col-md-6 col-lg-3\">
                    <div class=\"m-b-sm\">
                        <a target=\"_blank\" href=\"https://documentation.spryker.com/tutorials/howtos/feature_howtos/ht-import-scheduled-prices-201907.htm\">{{ 'Learn about file format on our documentation' | trans }}</a>
                    </div>

                    {{ form_start(importForm, {'action': url('/price-product-schedule-gui/dry-run-import')}) }}

                    {{ form_row(importForm.priceProductScheduleName) }}
                    {{ form_row(importForm.fileUpload) }}

                    <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Import your CSV file' | trans }}\"/>
                    <div class=\"m-b-sm\">
                        {{ 'Importing a lot of scheduled prices can take some time.' | trans }}
                    </div>
                    {{ form_end(importForm) }}
                </div>
            </div>
        {% endblock %}

    {% endembed %}

    {% embed '@Gui/Partials/widget.twig' with {widget_title: 'Scheduled prices imported' | trans} %}

        {% block widget_content %}
            {{ priceProductScheduleListTableView | raw }}
        {% endblock %}

    {% endembed %}

{% endblock %}
", "@PriceProductScheduleGui/Import/index.twig", "/data/vendor/spryker/price-product-schedule-gui/src/Spryker/Zed/PriceProductScheduleGui/Presentation//Import/index.twig");
    }
}
