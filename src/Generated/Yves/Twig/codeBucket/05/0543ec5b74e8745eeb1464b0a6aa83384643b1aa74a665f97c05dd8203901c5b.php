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

/* @AssetWidget/views/asset/asset.twig */
class __TwigTemplate_f03b0a4de3bb1520738027a2665ec08ef1cacc2601d8c612e7cbb9a2e131d82e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@AssetWidget/views/asset/asset.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["assetSlotContent" => ((twig_get_attribute($this->env, $this->source,         // line 4
($context["_widget"] ?? null), "assetSlotContent", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_widget"] ?? null), "assetSlotContent", [], "any", false, false, false, 4), "")) : (""))], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()), "assetSlotContent", [], "any", false, false, false, 8);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@AssetWidget/views/asset/asset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    assetSlotContent: _widget.assetSlotContent | default('')
} %}

{% block body %}
    {{ data.assetSlotContent | raw }}
{% endblock %}
", "@AssetWidget/views/asset/asset.twig", "/data/vendor/spryker-shop/asset-widget/src/SprykerShop/Yves/AssetWidget/Theme/default/views/asset/asset.twig");
    }
}
