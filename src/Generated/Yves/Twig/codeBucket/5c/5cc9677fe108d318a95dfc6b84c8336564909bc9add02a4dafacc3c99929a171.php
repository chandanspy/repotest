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

/* @CustomerPage/views/login/login.twig */
class __TwigTemplate_b3ac8e9f149133efdc1a2d0b58cd2e9bb0388e2287667b101dfadc99c3cd98f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageInfo' => [$this, 'block_pageInfo'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-main"]), "@CustomerPage/views/login/login.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageInfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"page-info\">
        <div class=\"container\">
            ";
        // line 6
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 15
        echo "        </div>
    </div>
";
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "                ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["breadcrumb"]), "@CustomerPage/views/login/login.twig", 7)->display(twig_to_array(["data" => ["steps" => [0 => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.login")]]]]));
        // line 14
        echo "            ";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    ";
        $this->loadTemplate("@CustomerPage/views/login/login.twig", "@CustomerPage/views/login/login.twig", 20, "538971196")->display(twig_to_array(["data" => ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.login.title"), "innerClass" => "col col--sm-12 col--md-9 col--lg-8 col--xl-6"], "modifiers" => [0 => "center", 1 => "last", 2 => "mobile-center"]]));
    }

    public function getTemplateName()
    {
        return "@CustomerPage/views/login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  74 => 19,  70 => 14,  67 => 7,  63 => 6,  57 => 15,  55 => 6,  51 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% block pageInfo %}
    <div class=\"page-info\">
        <div class=\"container\">
            {% block breadcrumbs %}
                {% include molecule('breadcrumb') with {
                    data: {
                        steps: [{
                            label: 'customer.login' | trans
                        }],
                    },
                } only %}
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block content %}
    {% embed organism('section') with {
        data: {
            title: 'customer.login.title' | trans,
            innerClass: 'col col--sm-12 col--md-9 col--lg-8 col--xl-6',
        },
        modifiers: ['center', 'last', 'mobile-center'],
    } only %}
        {% block inner %}
            {% include molecule('form') with {
                class: 'box',
                data: {
                    form: _view.loginForm,
                    shouldRequireMessage: true,
                    submit: {
                        enable: true,
                        class: 'button button--big form__action--primary',
                        text: 'forms.submit.login' | trans,
                    },
                    cancel: {
                        enable: true,
                        url: url('password/forgotten'),
                        text: 'forms.forgot-password' | trans,
                        icon: null,
                        class: 'link link--action form__action--link',
                        qa: 'customer-forgot-password-link',
                    },
                },
            } only %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CustomerPage/views/login/login.twig", "/data/src/Pyz/Yves/CustomerPage/Theme/default/views/login/login.twig");
    }
}


/* @CustomerPage/views/login/login.twig */
class __TwigTemplate_b3ac8e9f149133efdc1a2d0b58cd2e9bb0388e2287667b101dfadc99c3cd98f5___538971196 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["section"]), "@CustomerPage/views/login/login.twig", 20);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "            ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form"]), "@CustomerPage/views/login/login.twig", 28)->display(twig_to_array(["class" => "box", "data" => ["form" => twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 31, $this->source); })()), "loginForm", [], "any", false, false, false, 31), "shouldRequireMessage" => true, "submit" => ["enable" => true, "class" => "button button--big form__action--primary", "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forms.submit.login")], "cancel" => ["enable" => true, "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("password/forgotten"), "text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forms.forgot-password"), "icon" => null, "class" => "link link--action form__action--link", "qa" => "customer-forgot-password-link"]]]));
        // line 48
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@CustomerPage/views/login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 48,  189 => 31,  187 => 28,  183 => 27,  78 => 20,  74 => 19,  70 => 14,  67 => 7,  63 => 6,  57 => 15,  55 => 6,  51 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% block pageInfo %}
    <div class=\"page-info\">
        <div class=\"container\">
            {% block breadcrumbs %}
                {% include molecule('breadcrumb') with {
                    data: {
                        steps: [{
                            label: 'customer.login' | trans
                        }],
                    },
                } only %}
            {% endblock %}
        </div>
    </div>
{% endblock %}

{% block content %}
    {% embed organism('section') with {
        data: {
            title: 'customer.login.title' | trans,
            innerClass: 'col col--sm-12 col--md-9 col--lg-8 col--xl-6',
        },
        modifiers: ['center', 'last', 'mobile-center'],
    } only %}
        {% block inner %}
            {% include molecule('form') with {
                class: 'box',
                data: {
                    form: _view.loginForm,
                    shouldRequireMessage: true,
                    submit: {
                        enable: true,
                        class: 'button button--big form__action--primary',
                        text: 'forms.submit.login' | trans,
                    },
                    cancel: {
                        enable: true,
                        url: url('password/forgotten'),
                        text: 'forms.forgot-password' | trans,
                        icon: null,
                        class: 'link link--action form__action--link',
                        qa: 'customer-forgot-password-link',
                    },
                },
            } only %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CustomerPage/views/login/login.twig", "/data/src/Pyz/Yves/CustomerPage/Theme/default/views/login/login.twig");
    }
}
