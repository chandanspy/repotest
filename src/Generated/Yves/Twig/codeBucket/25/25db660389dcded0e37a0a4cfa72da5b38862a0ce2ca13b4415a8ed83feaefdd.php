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

/* @CmsBlock/template/title_and_content_block.twig */
class __TwigTemplate_9b6e4311086dbddb2420c610ba48c7438c9c637e049a7e4c7ad3dbfb4c4e117b extends Template
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
        // line 5
        echo call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "title"]);
        echo "

    ";
        // line 7
        echo call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "content"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/title_and_content_block.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  50 => 5,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

    {{ spyCmsBlockPlaceholder('title') | raw }}

    {{ spyCmsBlockPlaceholder('content') | raw }}
{% endblock %}
", "@CmsBlock/template/title_and_content_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/title_and_content_block.twig");
    }
}
