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

/* @CmsBlock/template/jumbotron_block.twig */
class __TwigTemplate_649454996acd2e15564f6eac7f9b690159173d6d607d7ea70efbf39e4fe7e59c extends Template
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
        echo "    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

    ";
        // line 4
        echo call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "content"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/jumbotron_block.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

    {{ spyCmsBlockPlaceholder('content') | raw }}
{% endblock %}
", "@CmsBlock/template/jumbotron_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/jumbotron_block.twig");
    }
}
