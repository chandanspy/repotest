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

/* @CmsBlock/template/navigation_block.twig */
class __TwigTemplate_661b2bdf21ec2711d7becb22943890f0361d915c80f167a2c08d2629cfcff718 extends Template
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
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->
    ";
        // line 4
        echo call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "title"]);
        echo "
    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "content"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/navigation_block.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->
    {{ spyCmsBlockPlaceholder('title') | raw }}
    {{ spyCmsBlockPlaceholder('content') | raw }}
{% endblock %}
", "@CmsBlock/template/navigation_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/navigation_block.twig");
    }
}
