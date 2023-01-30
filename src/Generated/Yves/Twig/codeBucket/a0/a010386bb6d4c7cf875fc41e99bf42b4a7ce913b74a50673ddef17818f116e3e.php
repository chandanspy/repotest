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

/* @CmsBlock/template/product-cms-block.twig */
class __TwigTemplate_5df6e9e816b3182058dbcb07d619ee68d2532f3e1ada8aee71a5f3601629fab1 extends Template
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
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "
";
    }

    // line 1
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

    <div class=\"product-cms\">
        <div class=\"container\">
            <h2 class=\"product-cms__title\">
                ";
        // line 8
        echo call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "title"]);
        echo "
            </h2>
            <div class=\"product-cms__text\">
                ";
        // line 11
        echo call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "content"]);
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/product-cms-block.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  57 => 8,  49 => 2,  45 => 1,  40 => 16,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

    <div class=\"product-cms\">
        <div class=\"container\">
            <h2 class=\"product-cms__title\">
                {{ spyCmsBlockPlaceholder('title') | raw }}
            </h2>
            <div class=\"product-cms__text\">
                {{ spyCmsBlockPlaceholder('content') | raw }}
            </div>
        </div>
    </div>
{% endblock %}

", "@CmsBlock/template/product-cms-block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/product-cms-block.twig");
    }
}
