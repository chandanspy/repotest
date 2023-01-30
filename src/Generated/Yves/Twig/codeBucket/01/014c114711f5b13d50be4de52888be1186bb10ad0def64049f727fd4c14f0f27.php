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

/* @ContentBannerWidget/views/banner-home-page/banner-home-page.twig */
class __TwigTemplate_331b1b4a94e936cfa7bd29098ad950f2325bcc02dc5a0265635c376b4493dd2b extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["widget"]), "@ContentBannerWidget/views/banner-home-page/banner-home-page.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('data', $context)) {$context['data'] = [];}$context['data'] = array_replace_recursive(["banner" =>         // line 4
(isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 4, $this->source); })())], $context['data']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["jumbotron"]), "@ContentBannerWidget/views/banner-home-page/banner-home-page.twig", 8)->display(twig_to_array(["data" => ["imageUrl" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "banner", [], "any", false, false, false, 10), "imageUrl", [], "any", false, false, false, 10), "link" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "banner", [], "any", false, false, false, 11), "clickUrl", [], "any", false, false, false, 11), "headline" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "banner", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "subHeadline" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "banner", [], "any", false, false, false, 13), "subtitle", [], "any", false, false, false, 13), "btnTitle" => "main_slider.btn.title"]]));
    }

    public function getTemplateName()
    {
        return "@ContentBannerWidget/views/banner-home-page/banner-home-page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  56 => 12,  55 => 11,  54 => 10,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('widget') %}

{% define data = {
    banner: banner,
} %}

{% block body %}
    {% include molecule('jumbotron') with {
        data: {
            imageUrl: data.banner.imageUrl,
            link: data.banner.clickUrl,
            headline: data.banner.title,
            subHeadline: data.banner.subtitle,
            btnTitle: 'main_slider.btn.title',
        },
    } only %}
{% endblock %}
", "@ContentBannerWidget/views/banner-home-page/banner-home-page.twig", "/data/src/Pyz/Yves/ContentBannerWidget/Theme/default/views/banner-home-page/banner-home-page.twig");
    }
}
