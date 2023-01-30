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

/* @CompanyUserGui/CreateCompanyUser/index.twig */
class __TwigTemplate_45951e503187bce182bb2184761600eb1e9313e0cfaf850c8842c8db70a510c1 extends Template
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
        return "@CompanyUserGui/_layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["widget_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Company User");
        // line 1
        $this->parent = $this->loadTemplate("@CompanyUserGui/_layout/layout.twig", "@CompanyUserGui/CreateCompanyUser/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 5, $this->source); })()), "html", null, true);
    }

    // line 6
    public function block_section_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["widget_title"]) || array_key_exists("widget_title", $context) ? $context["widget_title"] : (function () { throw new RuntimeError('Variable "widget_title" does not exist.', 6, $this->source); })()), "html", null, true);
    }

    // line 8
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo call_user_func_array($this->env->getFunction('backActionButton')->getCallable(), [call_user_func_array($this->env->getFunction('url')->getCallable(), [(isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 9, $this->source); })())]), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to Company Users")]);
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("@CompanyUserGui/CreateCompanyUser/index.twig", "@CompanyUserGui/CreateCompanyUser/index.twig", 14, "20325299")->display($context);
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CompanyUserGui/CreateCompanyUser/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 42,  84 => 14,  81 => 13,  77 => 12,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@CompanyUserGui/_layout/layout.twig' %}

{% set widget_title = 'Create Company User' | trans %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}
    {{ backActionButton(url(backButton), 'Back to Company Users' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ form_start(form) }}

            {% for child in form %}
                <div class=\"form-group\">

                    {% if \"hidden\" not in child.vars.block_prefixes %}
                        {{ form_label(child) }}
                        {{ form_errors(child) }}
                    {% endif %}

                    {% if child.vars.attr.template_path is defined %}
                        {% include child.vars.attr.template_path with {'form': child} %}
                    {% else %}
                        {{ form_widget(child) }}
                    {% endif %}
                </div>
            {% endfor %}

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\"/>
            {{ form_end(form) }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@CompanyUserGui/CreateCompanyUser/index.twig", "/data/vendor/spryker/company-user-gui/src/Spryker/Zed/CompanyUserGui/Presentation/CreateCompanyUser/index.twig");
    }
}


/* @CompanyUserGui/CreateCompanyUser/index.twig */
class __TwigTemplate_45951e503187bce182bb2184761600eb1e9313e0cfaf850c8842c8db70a510c1___20325299 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@CompanyUserGui/CreateCompanyUser/index.twig", 14);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "

            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 21
            echo "                <div class=\"form-group\">

                    ";
            // line 23
            if (!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 23), "block_prefixes", [], "any", false, false, false, 23))) {
                // line 24
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
                echo "
                        ";
                // line 25
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
                    ";
            }
            // line 27
            echo "
                    ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 28), "attr", [], "any", false, true, false, 28), "template_path", [], "any", true, true, false, 28)) {
                // line 29
                echo "                        ";
                $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 29), "attr", [], "any", false, false, false, 29), "template_path", [], "any", false, false, false, 29), "@CompanyUserGui/CreateCompanyUser/index.twig", 29)->display(twig_array_merge($context, ["form" => $context["child"]]));
                // line 30
                echo "                    ";
            } else {
                // line 31
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
                    ";
            }
            // line 33
            echo "                </div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "\"/>
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "@CompanyUserGui/CreateCompanyUser/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 37,  266 => 36,  263 => 35,  248 => 33,  242 => 31,  239 => 30,  236 => 29,  234 => 28,  231 => 27,  226 => 25,  221 => 24,  219 => 23,  215 => 21,  198 => 20,  193 => 18,  190 => 17,  186 => 16,  175 => 14,  86 => 42,  84 => 14,  81 => 13,  77 => 12,  70 => 9,  66 => 8,  59 => 6,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@CompanyUserGui/_layout/layout.twig' %}

{% set widget_title = 'Create Company User' | trans %}

{% block head_title widget_title %}
{% block section_title widget_title %}

{% block action %}
    {{ backActionButton(url(backButton), 'Back to Company Users' | trans) }}
{% endblock %}

{% block content %}

    {% embed '@Gui/Partials/widget.twig' %}

        {% block widget_content %}

            {{ form_start(form) }}

            {% for child in form %}
                <div class=\"form-group\">

                    {% if \"hidden\" not in child.vars.block_prefixes %}
                        {{ form_label(child) }}
                        {{ form_errors(child) }}
                    {% endif %}

                    {% if child.vars.attr.template_path is defined %}
                        {% include child.vars.attr.template_path with {'form': child} %}
                    {% else %}
                        {{ form_widget(child) }}
                    {% endif %}
                </div>
            {% endfor %}

            <input type=\"submit\" class=\"btn btn-primary safe-submit\" value=\"{{ 'Save' | trans }}\"/>
            {{ form_end(form) }}

        {% endblock %}

    {% endembed %}

{% endblock %}
", "@CompanyUserGui/CreateCompanyUser/index.twig", "/data/vendor/spryker/company-user-gui/src/Spryker/Zed/CompanyUserGui/Presentation/CreateCompanyUser/index.twig");
    }
}
