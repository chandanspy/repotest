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

/* @SecurityGui/Layout/layout.twig */
class __TwigTemplate_18ac1441e1a6172074fd266470cf618003d0cce2b231efd3b9eae1141a77385d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_title' => [$this, 'block_head_title'],
            'head_css' => [$this, 'block_head_css'],
            'login_heading' => [$this, 'block_login_heading'],
            'content' => [$this, 'block_content'],
            'footer_js' => [$this, 'block_footer_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>";
        // line 8
        $this->displayBlock('head_title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('head_css', $context, $blocks);
        // line 14
        echo "
</head>
<body class=\"login\">

<div class=\"login__wrapper\">
    <div class=\"login__container\">
        <div class=\"login__logo zed-logo\"></div>

        ";
        // line 22
        $this->loadTemplate("@Messenger/Partials/flash-messages.twig", "@SecurityGui/Layout/layout.twig", 22)->display($context);
        // line 23
        echo "
        <div class=\"login-box\">
            ";
        // line 25
        $this->displayBlock('login_heading', $context, $blocks);
        // line 30
        echo "            <div class=\"login-box__content\">
                ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "            </div>
        </div>
    </div>
</div>

";
        // line 37
        $this->displayBlock('footer_js', $context, $blocks);
        // line 40
        echo "
</body>
</html>
";
    }

    // line 8
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })())), "html", null, true);
        }
    }

    // line 10
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-gui-commons.css"]);
        echo "\">
        <link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Montserrat:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    ";
    }

    // line 25
    public function block_login_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                <div class=\"login-box__heading\">
                    <h1 class=\"login-box__title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Login"), "html", null, true);
        echo "</h1>
                </div>
            ";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 37
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    <script src=\"";
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-gui-commons.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@SecurityGui/Layout/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 38,  138 => 37,  132 => 31,  125 => 27,  122 => 26,  118 => 25,  110 => 11,  106 => 10,  97 => 8,  90 => 40,  88 => 37,  81 => 32,  79 => 31,  76 => 30,  74 => 25,  70 => 23,  68 => 22,  58 => 14,  56 => 10,  51 => 8,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>{% block head_title %}{% if title is defined %}{{ title | trans }}{% endif %}{% endblock %}</title>

    {% block head_css %}
        <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-gui-commons.css') }}\">
        <link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Montserrat:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    {% endblock %}

</head>
<body class=\"login\">

<div class=\"login__wrapper\">
    <div class=\"login__container\">
        <div class=\"login__logo zed-logo\"></div>

        {% include '@Messenger/Partials/flash-messages.twig' %}

        <div class=\"login-box\">
            {% block login_heading %}
                <div class=\"login-box__heading\">
                    <h1 class=\"login-box__title\">{{ 'Login' | trans }}</h1>
                </div>
            {% endblock %}
            <div class=\"login-box__content\">
                {% block content %}{% endblock %}
            </div>
        </div>
    </div>
</div>

{% block footer_js %}
    <script src=\"{{ assetsPath('js/spryker-zed-gui-commons.js') }}\"></script>
{% endblock %}

</body>
</html>
", "@SecurityGui/Layout/layout.twig", "/data/vendor/spryker/security-gui/src/Spryker/Zed/SecurityGui/Presentation/Layout/layout.twig");
    }
}
