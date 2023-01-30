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

/* @ProductManagement/View/_partials/info-variant.twig */
class __TwigTemplate_4c87a4354a50bfedadc6d235b9327fef24ec84853833a64d46d0b160ec86c8e1 extends Template
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
        $this->loadTemplate("@ProductManagement/View/_partials/info-variant.twig", "@ProductManagement/View/_partials/info-variant.twig", 1, "813186388")->display(twig_array_merge($context, ["widget_title" => "Variants"]));
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-variant.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Variants' } %}
    {% block widget_content %}

        {{ variantTable | raw }}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-variant.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-variant.twig");
    }
}


/* @ProductManagement/View/_partials/info-variant.twig */
class __TwigTemplate_4c87a4354a50bfedadc6d235b9327fef24ec84853833a64d46d0b160ec86c8e1___813186388 extends Template
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
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductManagement/View/_partials/info-variant.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
        ";
        // line 4
        echo (isset($context["variantTable"]) || array_key_exists("variantTable", $context) ? $context["variantTable"] : (function () { throw new RuntimeError('Variable "variantTable" does not exist.', 4, $this->source); })());
        echo "

    ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-variant.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 4,  103 => 3,  99 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Variants' } %}
    {% block widget_content %}

        {{ variantTable | raw }}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-variant.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-variant.twig");
    }
}
