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

/* @CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig */
class __TwigTemplate_709a6fe8e1caa0fbf2fe8b780beeab15d861335bfbbee1a0db3aebe14ba0933d extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["product-cms-block", "@SprykerShop:CmsBlockWidget"]), "@CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $context["cmsContent"] = call_user_func_array($this->env->getFunction('spyCmsBlock')->getCallable(), [$this->env, $context, ["product" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "idProductAbstract", [], "any", false, false, false, 4)]]);
        // line 5
        echo "    ";
        if ( !twig_test_empty((isset($context["cmsContent"]) || array_key_exists("cmsContent", $context) ? $context["cmsContent"] : (function () { throw new RuntimeError('Variable "cmsContent" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "        ";
            $this->loadTemplate("@CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig", "@CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig", 6, "516257041")->display(twig_to_array(["class" => "container", "modifiers" => [0 => "with-background"], "embed" => ["content" =>             // line 10
(isset($context["cmsContent"]) || array_key_exists("cmsContent", $context) ? $context["cmsContent"] : (function () { throw new RuntimeError('Variable "cmsContent" does not exist.', 10, $this->source); })())]]));
            // line 17
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  57 => 10,  55 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('product-cms-block', '@SprykerShop:CmsBlockWidget') %}

{% block body %}
    {% set cmsContent = spyCmsBlock({ product: data.idProductAbstract }) %}
    {% if cmsContent is not empty %}
        {% embed molecule('content-collapser') with {
            class: 'container',
            modifiers: ['with-background'],
            embed: {
                content: cmsContent,
            },
        } only %}
            {% block content %}
                {{ embed.content | raw }}
            {% endblock %}
        {% endembed %}
    {% endif %}
{% endblock %}
", "@CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig", "/data/src/Pyz/Yves/CmsBlockWidget/Theme/default/components/molecules/product-cms-block/product-cms-block.twig");
    }
}


/* @CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig */
class __TwigTemplate_709a6fe8e1caa0fbf2fe8b780beeab15d861335bfbbee1a0db3aebe14ba0933d___516257041 extends Template
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
        // line 6
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["content-collapser"]), "@CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "                ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "@CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 14,  133 => 13,  123 => 6,  59 => 17,  57 => 10,  55 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('product-cms-block', '@SprykerShop:CmsBlockWidget') %}

{% block body %}
    {% set cmsContent = spyCmsBlock({ product: data.idProductAbstract }) %}
    {% if cmsContent is not empty %}
        {% embed molecule('content-collapser') with {
            class: 'container',
            modifiers: ['with-background'],
            embed: {
                content: cmsContent,
            },
        } only %}
            {% block content %}
                {{ embed.content | raw }}
            {% endblock %}
        {% endembed %}
    {% endif %}
{% endblock %}
", "@CmsBlockWidget/components/molecules/product-cms-block/product-cms-block.twig", "/data/src/Pyz/Yves/CmsBlockWidget/Theme/default/components/molecules/product-cms-block/product-cms-block.twig");
    }
}
