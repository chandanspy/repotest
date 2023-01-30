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

/* @CmsBlock/template/section_block.twig */
class __TwigTemplate_bf7dff25ef35c0941c433926584f7e927663dc33e50e208d1b085ee92debf461 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
<!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

";
        // line 4
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->loadTemplate("@CmsBlock/template/section_block.twig", "@CmsBlock/template/section_block.twig", 5, "906203006")->display(twig_to_array(["modifiers" => [0 => "secondary", 1 => "no-mobile-bottom-indent"], "class" => "spacing-top spacing-top--inner spacing-top--big", "data" => ["blockTitle" => call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "title"]), "blockContent" => call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "content"])]]));
    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/section_block.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
<!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

{% block content %}
    {% embed organism('section') with {
        modifiers: ['secondary', 'no-mobile-bottom-indent'],
        class: 'spacing-top spacing-top--inner spacing-top--big',
        data: {
            blockTitle: spyCmsBlockPlaceholder('title'),
            blockContent: spyCmsBlockPlaceholder('content'),
        },
    } only %}
        {% block inner %}
            {{ data.blockTitle | raw }}
            {{ data.blockContent | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CmsBlock/template/section_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/section_block.twig");
    }
}


/* @CmsBlock/template/section_block.twig */
class __TwigTemplate_bf7dff25ef35c0941c433926584f7e927663dc33e50e208d1b085ee92debf461___906203006 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'inner' => [$this, 'block_inner'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["section"]), "@CmsBlock/template/section_block.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "blockTitle", [], "any", false, false, false, 14);
        echo "
            ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "blockContent", [], "any", false, false, false, 15);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/section_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 15,  122 => 14,  118 => 13,  50 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
<!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

{% block content %}
    {% embed organism('section') with {
        modifiers: ['secondary', 'no-mobile-bottom-indent'],
        class: 'spacing-top spacing-top--inner spacing-top--big',
        data: {
            blockTitle: spyCmsBlockPlaceholder('title'),
            blockContent: spyCmsBlockPlaceholder('content'),
        },
    } only %}
        {% block inner %}
            {{ data.blockTitle | raw }}
            {{ data.blockContent | raw }}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CmsBlock/template/section_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/section_block.twig");
    }
}
