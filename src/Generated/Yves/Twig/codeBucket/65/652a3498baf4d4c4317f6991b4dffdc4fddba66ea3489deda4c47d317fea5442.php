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

/* @customerPage/views/password-forgotten/password-forgotten.twig */
class __TwigTemplate_6936ec432d3507ab6d3eef8d889d829d8e5a1f7244be6fe560a5dfa2fe18ebb1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-main"]), "@customerPage/views/password-forgotten/password-forgotten.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.forgotten-password.title")], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["breadcrumb"]), "@customerPage/views/password-forgotten/password-forgotten.twig", 8)->display(twig_to_array(["data" => ["steps" => [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.login"), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login")]]]]));
    }

    // line 18
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    ";
        $this->loadTemplate("@customerPage/views/password-forgotten/password-forgotten.twig", "@customerPage/views/password-forgotten/password-forgotten.twig", 21, "1187627924")->display(twig_to_array(["data" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.forgotten-password.title"), "innerClass" => "col col--sm-12 col--md-9 col--lg-8 col--xl-6"], "modifiers" => [0 => "center", 1 => "last", 2 => "mobile-center"]]));
    }

    public function getTemplateName()
    {
        return "@customerPage/views/password-forgotten/password-forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  64 => 20,  58 => 18,  53 => 8,  49 => 7,  45 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    title: 'customer.forgotten-password.title' | trans,
} %}

{% block breadcrumbs %}
    {% include molecule('breadcrumb') with {
        data: {
            steps: [{
                label: 'customer.login' | trans,
                url: url('login'),
            }],
        },
    } only %}
{% endblock %}

{% block title %}{% endblock %}

{% block content %}
    {% embed organism('section') with {
        data: {
            title: 'customer.forgotten-password.title' | trans,
            innerClass: 'col col--sm-12 col--md-9 col--lg-8 col--xl-6'
        },
        modifiers: ['center', 'last', 'mobile-center'],
    } only %}
        {% block inner %}
            {% include molecule('form') with {
                class: 'box',
                data: {
                    form: _view.form,
                    shouldRequireMessage: true,
                    submit: {
                        enable: true,
                        class: 'button button--big form__action--sm-lg-first',
                    },
                    cancel: {
                        enable: true,
                        url: url('login'),
                        class: 'button button--hollow button--medium',
                        text: 'general.cancel.button' | trans,
                        icon: null,
                    }
                }
            } only %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@customerPage/views/password-forgotten/password-forgotten.twig", "/data/src/Pyz/Yves/CustomerPage/Theme/default/views/password-forgotten/password-forgotten.twig");
    }
}


/* @customerPage/views/password-forgotten/password-forgotten.twig */
class __TwigTemplate_6936ec432d3507ab6d3eef8d889d829d8e5a1f7244be6fe560a5dfa2fe18ebb1___1187627924 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'inner' => [$this, 'block_inner'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["section"]), "@customerPage/views/password-forgotten/password-forgotten.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form"]), "@customerPage/views/password-forgotten/password-forgotten.twig", 29)->display(twig_to_array(["class" => "box", "data" => ["form" => twig_get_attribute($this->env, $this->source,         // line 32
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 32, $this->source); })()), "form", [], "any", false, false, false, 32), "shouldRequireMessage" => true, "submit" => ["enable" => true, "class" => "button button--big form__action--sm-lg-first"], "cancel" => ["enable" => true, "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("login"), "class" => "button button--hollow button--medium", "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.cancel.button"), "icon" => null]]]));
        // line 47
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@customerPage/views/password-forgotten/password-forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 47,  178 => 32,  176 => 29,  172 => 28,  68 => 21,  64 => 20,  58 => 18,  53 => 8,  49 => 7,  45 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    title: 'customer.forgotten-password.title' | trans,
} %}

{% block breadcrumbs %}
    {% include molecule('breadcrumb') with {
        data: {
            steps: [{
                label: 'customer.login' | trans,
                url: url('login'),
            }],
        },
    } only %}
{% endblock %}

{% block title %}{% endblock %}

{% block content %}
    {% embed organism('section') with {
        data: {
            title: 'customer.forgotten-password.title' | trans,
            innerClass: 'col col--sm-12 col--md-9 col--lg-8 col--xl-6'
        },
        modifiers: ['center', 'last', 'mobile-center'],
    } only %}
        {% block inner %}
            {% include molecule('form') with {
                class: 'box',
                data: {
                    form: _view.form,
                    shouldRequireMessage: true,
                    submit: {
                        enable: true,
                        class: 'button button--big form__action--sm-lg-first',
                    },
                    cancel: {
                        enable: true,
                        url: url('login'),
                        class: 'button button--hollow button--medium',
                        text: 'general.cancel.button' | trans,
                        icon: null,
                    }
                }
            } only %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@customerPage/views/password-forgotten/password-forgotten.twig", "/data/src/Pyz/Yves/CustomerPage/Theme/default/views/password-forgotten/password-forgotten.twig");
    }
}
