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

/* @CmsBlock/template/banner_block.twig */
class __TwigTemplate_1a96ae16317e45e9017c24d19d8f5299163c53709fc00eaae4b0fa07e732f37c extends Template
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
        // line 35
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
    <!-- CMS_BLOCK_PLACEHOLDER : \"link\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"imageUrl\" -->

    ";
        // line 7
        $this->loadTemplate("@CmsBlock/template/banner_block.twig", "@CmsBlock/template/banner_block.twig", 7, "115754284")->display(twig_to_array(["modifiers" => [0 => "secondary", 1 => "full-width"], "class" => "spacing-top spacing-top--inner spacing-top--big", "data" => ["blockTitle" => call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "title"]), "blockContent" => call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "content"]), "imageUrl" => call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "imageUrl"]), "link" => call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "link"])]]));
    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/banner_block.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  49 => 2,  45 => 1,  40 => 35,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"link\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"imageUrl\" -->

    {% embed organism('section') with {
        modifiers: ['secondary', 'full-width'],
        class: 'spacing-top spacing-top--inner spacing-top--big',
        data: {
            blockTitle: spyCmsBlockPlaceholder('title'),
            blockContent: spyCmsBlockPlaceholder('content'),
            imageUrl: spyCmsBlockPlaceholder('imageUrl'),
            link: spyCmsBlockPlaceholder('link'),
        },
    } only %}
        {% block inner %}
            {{ data.blockTitle | raw }}

            <div class=\"grid grid--left grid--middle\">
                <div class=\"col col--sm-12\">
                    {% include molecule('banner') with {
                        modifiers: ['spacing-bottom-reset'],
                        data: {
                            imageUrl: data.imageUrl,
                            clickUrl: data.link,
                            content: data.blockContent,
                        },
                    } only %}
                </div>
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}

", "@CmsBlock/template/banner_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/banner_block.twig");
    }
}


/* @CmsBlock/template/banner_block.twig */
class __TwigTemplate_1a96ae16317e45e9017c24d19d8f5299163c53709fc00eaae4b0fa07e732f37c___115754284 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["section"]), "@CmsBlock/template/banner_block.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 18, $this->source); })()), "blockTitle", [], "any", false, false, false, 18);
        echo "

            <div class=\"grid grid--left grid--middle\">
                <div class=\"col col--sm-12\">
                    ";
        // line 22
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["banner"]), "@CmsBlock/template/banner_block.twig", 22)->display(twig_to_array(["modifiers" => [0 => "spacing-bottom-reset"], "data" => ["imageUrl" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 25, $this->source); })()), "imageUrl", [], "any", false, false, false, 25), "clickUrl" => twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "link", [], "any", false, false, false, 26), "content" => twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "blockContent", [], "any", false, false, false, 27)]]));
        // line 30
        echo "                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/banner_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 30,  155 => 27,  154 => 26,  153 => 25,  152 => 22,  144 => 18,  140 => 17,  56 => 7,  49 => 2,  45 => 1,  40 => 35,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content %}
    <!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"link\" -->
    <!-- CMS_BLOCK_PLACEHOLDER : \"imageUrl\" -->

    {% embed organism('section') with {
        modifiers: ['secondary', 'full-width'],
        class: 'spacing-top spacing-top--inner spacing-top--big',
        data: {
            blockTitle: spyCmsBlockPlaceholder('title'),
            blockContent: spyCmsBlockPlaceholder('content'),
            imageUrl: spyCmsBlockPlaceholder('imageUrl'),
            link: spyCmsBlockPlaceholder('link'),
        },
    } only %}
        {% block inner %}
            {{ data.blockTitle | raw }}

            <div class=\"grid grid--left grid--middle\">
                <div class=\"col col--sm-12\">
                    {% include molecule('banner') with {
                        modifiers: ['spacing-bottom-reset'],
                        data: {
                            imageUrl: data.imageUrl,
                            clickUrl: data.link,
                            content: data.blockContent,
                        },
                    } only %}
                </div>
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}

", "@CmsBlock/template/banner_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/banner_block.twig");
    }
}
