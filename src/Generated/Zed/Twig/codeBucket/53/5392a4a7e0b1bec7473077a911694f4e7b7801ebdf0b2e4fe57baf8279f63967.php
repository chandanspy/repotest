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

/* @StoreLocations/Store/addnewstore.twig */
class __TwigTemplate_b337add9f5cebab47cbdd3f1ad5561f553446ad4132325498df279f9d5c859bb extends Template
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
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@StoreLocations/Store/addnewstore.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
    ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["addnewstore"]) || array_key_exists("addnewstore", $context) ? $context["addnewstore"] : (function () { throw new RuntimeError('Variable "addnewstore" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "

";
        // line 6
        $this->loadTemplate("@StoreLocations/Store/Form/storeform.twig", "@StoreLocations/Store/addnewstore.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "@StoreLocations/Store/addnewstore.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  53 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends '@Gui/Layout/layout.twig' %}
{% block content %}

    {{ addnewstore }}

{% include \"@StoreLocations/Store/Form/storeform.twig\" %}
{% endblock %}
", "@StoreLocations/Store/addnewstore.twig", "/data/src/Pyz/Zed/StoreLocations/Presentation/Store/addnewstore.twig");
    }
}
