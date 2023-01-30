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

/* @Gui/Partials/ibox.twig */
class __TwigTemplate_2deb42b8ccece4224ffc97a8a72cf25c01ca28e40986c0d1dcd1a946b3ce206a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<div ";
        if (array_key_exists("id", $context)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo " class=\"ibox nested ";
        if ((array_key_exists("collapsed", $context) && (0 === twig_compare((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 21, $this->source); })()), true)))) {
            echo "collapsed";
        }
        echo " ";
        if ((array_key_exists("hasError", $context) && (isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 21, $this->source); })()))) {
            echo "error";
        }
        echo "\"
    data-auto-errors=\"";
        // line 22
        echo ((( !array_key_exists("autoErrors", $context) || (isset($context["autoErrors"]) || array_key_exists("autoErrors", $context) ? $context["autoErrors"] : (function () { throw new RuntimeError('Variable "autoErrors" does not exist.', 22, $this->source); })()))) ? ("true") : ("false"));
        echo "\">
    <div class=\"ibox-title\">
        <a class=\"collapse-link\">
            <h5>
                ";
        // line 26
        $this->displayBlock('title', $context, $blocks);
        // line 27
        echo "            </h5>
            <div class=\"ibox-tools\">
                <i class=\"fas ";
        // line 29
        if ((array_key_exists("collapsed", $context) && (0 === twig_compare((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 29, $this->source); })()), true)))) {
            echo "fa-plus";
        } else {
            echo "fa-minus";
        }
        echo "\"></i>
            </div>
        </a>
    </div>
    <div class=\"ibox-content\">
        ";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "    </div>
</div>
";
    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@Gui/Partials/ibox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  89 => 26,  83 => 35,  81 => 34,  69 => 29,  65 => 27,  63 => 26,  56 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
  Display collapsible ibox.

  Parameters:
    * collapsed: (optional) Set collapse state of the ibox. False by default, i.e. the ibox is expanded by default.
    * hasError: (optional) Set to \"true\" to mark the ibox as invalid. False by default.
    * autoErrors: (optional) Mark the ibox as invalid with javascript if there's any element inside it with \"has-error\" class. True by default.
    * id: (optional) Set ID for the ibox element.

  Example usage:

    {% embed '@Gui/Partials/ibox.twig' with {'collapsed': true, 'id': 'my-unique-id'} %}
        {% block title %}
            Ibox title
        {% endblock %}
        {% block content %}
            Ibox content
        {% endblock %}
    {% endembed %}
#}
<div {% if id is defined %}id=\"{{ id }}\"{% endif %} class=\"ibox nested {% if collapsed is defined and collapsed == true %}collapsed{% endif %} {% if hasError is defined and hasError %}error{% endif %}\"
    data-auto-errors=\"{{ autoErrors is not defined or autoErrors ? 'true' : 'false' }}\">
    <div class=\"ibox-title\">
        <a class=\"collapse-link\">
            <h5>
                {% block title %}{% endblock %}
            </h5>
            <div class=\"ibox-tools\">
                <i class=\"fas {% if collapsed is defined and collapsed == true %}fa-plus{% else %}fa-minus{% endif %}\"></i>
            </div>
        </a>
    </div>
    <div class=\"ibox-content\">
        {% block content %}{% endblock %}
    </div>
</div>
", "@Gui/Partials/ibox.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation//Partials/ibox.twig");
    }
}
