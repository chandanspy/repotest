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

/* @CmsBlock/template/banner_grid_column_block.twig */
class __TwigTemplate_388481188495b652334660c5132e32d825f0480e39e71660e5f51a4c507b392c extends Template
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
    <!-- CMS_BLOCK_PLACEHOLDER : \"link\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"imageUrl\" -->

    <div class=\"col col--sm-12 col--lg-4\">
        ";
        // line 8
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["banner"]), "@CmsBlock/template/banner_grid_column_block.twig", 8)->display(twig_to_array(["modifiers" => [0 => "small"], "data" => ["imageUrl" => call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "imageUrl"]), "clickUrl" => call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "link"]), "content" => (call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "title"]) . call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "content"]))]]));
        // line 16
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/banner_grid_column_block.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  53 => 8,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"link\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"imageUrl\" -->

    <div class=\"col col--sm-12 col--lg-4\">
        {% include molecule('banner') with {
            modifiers: ['small'],
            data: {
                imageUrl: spyCmsBlockPlaceholder('imageUrl'),
                clickUrl: spyCmsBlockPlaceholder('link'),
                content: spyCmsBlockPlaceholder('title') ~ spyCmsBlockPlaceholder('content'),
            },
        } only %}
    </div>
{% endblock %}
", "@CmsBlock/template/banner_grid_column_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/banner_grid_column_block.twig");
    }
}
