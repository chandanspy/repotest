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

/* @Gui/Layout/iframe-layout.twig */
class __TwigTemplate_e8c9872cd90ff61062db8dea36d1736a206517a6fb9f63775f43635a4feee8dc extends Template
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
        // line 13
        echo "
</head>
<body style=\"background: transparent\">

    ";
        // line 17
        $this->loadTemplate("@Messenger/Partials/flash-messages.twig", "@Gui/Layout/iframe-layout.twig", 17)->display($context);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "

    ";
        // line 22
        $this->displayBlock('footer_js', $context, $blocks);
        // line 25
        echo "
</body>
</html>
";
    }

    // line 8
    public function block_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })())), "html", null, true);
    }

    // line 10
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-gui-commons.css"]);
        echo "\">
    ";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 22
    public function block_footer_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "        <script src=\"";
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-gui-commons.js"]);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "@Gui/Layout/iframe-layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 23,  107 => 22,  101 => 19,  94 => 11,  90 => 10,  83 => 8,  76 => 25,  74 => 22,  70 => 20,  68 => 19,  65 => 18,  63 => 17,  57 => 13,  55 => 10,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>{% block head_title %}{{ title | trans }}{% endblock %}</title>

    {% block head_css %}
        <link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-gui-commons.css') }}\">
    {% endblock %}

</head>
<body style=\"background: transparent\">

    {% include '@Messenger/Partials/flash-messages.twig' %}

    {% block content -%}{%- endblock %}


    {% block footer_js %}
        <script src=\"{{ assetsPath('js/spryker-zed-gui-commons.js') }}\"></script>
    {% endblock %}

</body>
</html>
", "@Gui/Layout/iframe-layout.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation//Layout/iframe-layout.twig");
    }
}
