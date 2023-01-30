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

/* @ProductManagement/_partials/no-label-checkbox-theme.twig */
class __TwigTemplate_0beb527eeb1f59140f5ba9f07976a302fb9854a96ad523deb3b4dc33593d9d06 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('checkbox_widget', $context, $blocks);
    }

    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if (( !array_key_exists("no_label", $context) ||  !(isset($context["no_label"]) || array_key_exists("no_label", $context) ? $context["no_label"] : (function () { throw new RuntimeError('Variable "no_label" does not exist.', 3, $this->source); })()))) {
            // line 4
            echo "            <div class=\"checkbox\"><label for=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })()), "html", null, true);
            echo "\">
        ";
        }
        // line 6
        echo "
        <input type=\"checkbox\" ";
        // line 7
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo " ";
        if ((array_key_exists("checked", $context) && (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 7, $this->source); })()))) {
            echo " checked=\"";
            echo twig_escape_filter($this->env, (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 7, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo "/>

        ";
        // line 9
        if (( !array_key_exists("no_label", $context) ||  !(isset($context["no_label"]) || array_key_exists("no_label", $context) ? $context["no_label"] : (function () { throw new RuntimeError('Variable "no_label" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "</label></div>
        ";
        }
        // line 12
        echo "    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 2
        echo twig_spaceless($___internal_parse_0_);
    }

    public function getTemplateName()
    {
        return "@ProductManagement/_partials/no-label-checkbox-theme.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 2,  84 => 12,  78 => 10,  76 => 9,  60 => 7,  57 => 6,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block checkbox_widget %}
    {% apply spaceless %}
        {% if no_label is not defined or not no_label %}
            <div class=\"checkbox\"><label for=\"{{ id }}\">
        {% endif %}

        <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %} {% if checked is defined and checked %} checked=\"{{ checked }}\"{% endif %}/>

        {% if no_label is not defined or not no_label %}
            {{ label }}</label></div>
        {% endif %}
    {% endapply %}
{% endblock %}
", "@ProductManagement/_partials/no-label-checkbox-theme.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//_partials/no-label-checkbox-theme.twig");
    }
}
