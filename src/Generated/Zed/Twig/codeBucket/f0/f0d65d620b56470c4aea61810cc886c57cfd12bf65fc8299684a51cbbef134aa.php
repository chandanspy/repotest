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

/* button.twig */
class __TwigTemplate_d17e378622826b6d486645ff9fde46d67a4d31fff62afa3424fe403aea6b82f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-xs btn-outline ";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" ";
        echo (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new RuntimeError('Variable "parameters" does not exist.', 1, $this->source); })());
        echo ">
    ";
        // line 2
        echo (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 2, $this->source); })());
        echo " ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 2, $this->source); })()));
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{ url }}\" class=\"btn btn-xs btn-outline {{ class }}\" {{ parameters | raw }}>
    {{ icon | raw}} {{ title | trans | raw }}
</a>
", "button.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Table/button.twig");
    }
}
