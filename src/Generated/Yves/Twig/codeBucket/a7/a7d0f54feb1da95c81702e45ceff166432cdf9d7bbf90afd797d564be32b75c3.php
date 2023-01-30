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

/* @Cms/templates/placeholders-title-content-slot/placeholders-title-content-slot.twig */
class __TwigTemplate_a31e064d100b9e55acba44b561b4a3c96563bcb5f9e074ce5fd31c20a474c9a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'title' => [$this, 'block_title'],
            'contentClass' => [$this, 'block_contentClass'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-main"]), "@Cms/templates/placeholders-title-content-slot/placeholders-title-content-slot.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["idCmsPage" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "idCmsPage", [], "any", false, false, false, 4), "title" => ((twig_get_attribute($this->env, $this->source,         // line 5
($context["_view"] ?? null), "pageTitle", [], "any", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "pageTitle", [], "any", false, false, false, 5), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.spryker.shop"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.spryker.shop"))), "metaTitle" => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["_view"] ?? null), "pageTitle", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "pageTitle", [], "any", false, false, false, 6), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.spryker.shop"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("global.spryker.shop"))), "metaDescription" => ((twig_get_attribute($this->env, $this->source,         // line 7
($context["_view"] ?? null), "pageDescription", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "pageDescription", [], "any", false, false, false, 7))) : ("")), "metaKeywords" => ((twig_get_attribute($this->env, $this->source,         // line 8
($context["_view"] ?? null), "pageKeywords", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["_view"] ?? null), "pageKeywords", [], "any", false, false, false, 8))) : (""))], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    <div class=\"cms-page-title\">
        <!-- CMS_PLACEHOLDER : \"title\" -->
        ";
        // line 15
        echo call_user_func_array($this->env->getFunction('spyCms')->getCallable(), [$context, "title"]);
        echo "
    </div>
";
    }

    // line 18
    public function block_contentClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "page-layout-main page-layout-main--cms-page";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <!-- CMS_PLACEHOLDER : \"content\" -->
    ";
        // line 21
        echo call_user_func_array($this->env->getFunction('spyCms')->getCallable(), [$context, "content"]);
        echo "

    ";
        // line 23
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-10')->setCmsSlotTemplatePath('@Cms/templates/placeholders-title-content-slot/placeholders-title-content-slot.twig')->setProvidedData(["idCmsPage" => twig_get_attribute($this->env, $this->source,         // line 24
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "idCmsPage", [], "any", false, false, false, 24)])->setRequiredKeys([0 => "idCmsPage"])->setAutoFilledKeys([]));    }

    public function getTemplateName()
    {
        return "@Cms/templates/placeholders-title-content-slot/placeholders-title-content-slot.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  95 => 23,  90 => 21,  87 => 20,  83 => 19,  76 => 18,  69 => 15,  65 => 13,  61 => 12,  55 => 11,  51 => 1,  50 => 8,  49 => 7,  48 => 6,  47 => 5,  46 => 4,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% define data = {
    idCmsPage: _view.idCmsPage,
    title: _view.pageTitle | default('global.spryker.shop' | trans),
    metaTitle: _view.pageTitle | default('global.spryker.shop' | trans),
    metaDescription: _view.pageDescription | default,
    metaKeywords: _view.pageKeywords | default,
} %}

{% block breadcrumbs %}{% endblock %}
{% block title %}
    <div class=\"cms-page-title\">
        <!-- CMS_PLACEHOLDER : \"title\" -->
        {{ spyCms('title') | raw }}
    </div>
{% endblock %}
{% block contentClass %}page-layout-main page-layout-main--cms-page{% endblock %}
{% block content %}
    <!-- CMS_PLACEHOLDER : \"content\" -->
    {{ spyCms('content') | raw }}

    {% cms_slot 'slt-10' required ['idCmsPage'] with {
        idCmsPage: data.idCmsPage,
    } %}
{% endblock %}
", "@Cms/templates/placeholders-title-content-slot/placeholders-title-content-slot.twig", "/data/src/Pyz/Shared/Cms/Theme/default/templates/placeholders-title-content-slot/placeholders-title-content-slot.twig");
    }
}
