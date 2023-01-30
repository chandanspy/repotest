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

/* @SecurityGui/Login/index.twig */
class __TwigTemplate_96559abccc34e349b96b7d766b49e675fadedf4c11a20da35e7d30464743424a extends Template
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
        return "@SecurityGui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => "@SecurityGui/Layout/form.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@SecurityGui/Layout/layout.twig", "@SecurityGui/Login/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div>
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "

            ";
        // line 10
        $this->loadTemplate("@SecurityGui/Partial/form-message.twig", "@SecurityGui/Login/index.twig", 10)->display($context);
        // line 11
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'errors');
        echo "

            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "username", [], "any", false, false, false, 14), 'row');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "password", [], "any", false, false, false, 15), 'row');
        echo "

            <div class=\"form-group\"><button class=\"btn btn-block\" type=\"submit\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Login"), "html", null, true);
        echo "</button></div>
            <div class=\"form-group text-center\">
                <a href=\"/security-gui/password/reset-request\" class=\"login-box__link\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forgot password?"), "html", null, true);
        echo "</a>
            </div>

            ";
        // line 22
        $this->loadTemplate("@SecurityGui/Partial/authentication-links.twig", "@SecurityGui/Login/index.twig", 22)->display($context);
        // line 23
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'rest');
        echo "

        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@SecurityGui/Login/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  97 => 24,  94 => 23,  92 => 22,  86 => 19,  81 => 17,  76 => 15,  72 => 14,  67 => 12,  64 => 11,  62 => 10,  57 => 8,  53 => 6,  49 => 5,  44 => 1,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@SecurityGui/Layout/layout.twig' %}

{% form_theme form '@SecurityGui/Layout/form.twig' %}

{% block content %}

    <div>
        {{ form_start(form) }}

            {% include '@SecurityGui/Partial/form-message.twig' %}

            {{ form_errors(form) }}

            {{ form_row(form.username) }}
            {{ form_row(form.password) }}

            <div class=\"form-group\"><button class=\"btn btn-block\" type=\"submit\">{{ 'Login' | trans }}</button></div>
            <div class=\"form-group text-center\">
                <a href=\"/security-gui/password/reset-request\" class=\"login-box__link\">{{ 'Forgot password?' | trans }}</a>
            </div>

            {% include '@SecurityGui/Partial/authentication-links.twig' %}

            {{ form_rest(form) }}

        {{ form_end(form) }}
    </div>

{% endblock %}
", "@SecurityGui/Login/index.twig", "/data/vendor/spryker/security-gui/src/Spryker/Zed/SecurityGui/Presentation/Login/index.twig");
    }
}
