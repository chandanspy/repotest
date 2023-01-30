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

/* @CmsBlock/template/section_content-collapser_block.twig */
class __TwigTemplate_f05a7666c99e1b9c1b6bb6e8097e1dc24f2ba7fd0d3c7ef574c1e7db8664b45d extends Template
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
        $this->loadTemplate("@CmsBlock/template/section_content-collapser_block.twig", "@CmsBlock/template/section_content-collapser_block.twig", 5, "548582692")->display(twig_to_array(["modifiers" => [0 => "secondary"], "data" => ["blockTitle" => call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "title"]), "blockContent" => call_user_func_array($this->env->getFunction('spyCmsBlockPlaceholder')->getCallable(), [$context, "content"]), "innerClass" => "container"]]));
    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/section_content-collapser_block.twig";
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
        modifiers: ['secondary'],
        data: {
            blockTitle: spyCmsBlockPlaceholder('title'),
            blockContent: spyCmsBlockPlaceholder('content'),
            innerClass: 'container',
        },
    } only %}
        {% block inner %}
            {% embed molecule('content-collapser') with {
                data: {
                    blockTitle: data.blockTitle,
                    blockContent: data.blockContent,
                },
            } only %}
                {% block content %}
                    {{ data.blockTitle | raw }}
                    {{ data.blockContent | raw }}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CmsBlock/template/section_content-collapser_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/section_content-collapser_block.twig");
    }
}


/* @CmsBlock/template/section_content-collapser_block.twig */
class __TwigTemplate_f05a7666c99e1b9c1b6bb6e8097e1dc24f2ba7fd0d3c7ef574c1e7db8664b45d___548582692 extends Template
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
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["section"]), "@CmsBlock/template/section_content-collapser_block.twig", 5);
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
        $this->loadTemplate("@CmsBlock/template/section_content-collapser_block.twig", "@CmsBlock/template/section_content-collapser_block.twig", 14, "1471399798")->display(twig_to_array(["data" => ["blockTitle" => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "blockTitle", [], "any", false, false, false, 16), "blockContent" => twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "blockContent", [], "any", false, false, false, 17)]]));
        // line 25
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/section_content-collapser_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 25,  134 => 17,  133 => 16,  131 => 14,  127 => 13,  50 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
<!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

{% block content %}
    {% embed organism('section') with {
        modifiers: ['secondary'],
        data: {
            blockTitle: spyCmsBlockPlaceholder('title'),
            blockContent: spyCmsBlockPlaceholder('content'),
            innerClass: 'container',
        },
    } only %}
        {% block inner %}
            {% embed molecule('content-collapser') with {
                data: {
                    blockTitle: data.blockTitle,
                    blockContent: data.blockContent,
                },
            } only %}
                {% block content %}
                    {{ data.blockTitle | raw }}
                    {{ data.blockContent | raw }}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CmsBlock/template/section_content-collapser_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/section_content-collapser_block.twig");
    }
}


/* @CmsBlock/template/section_content-collapser_block.twig */
class __TwigTemplate_f05a7666c99e1b9c1b6bb6e8097e1dc24f2ba7fd0d3c7ef574c1e7db8664b45d___1471399798 extends Template
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
        // line 14
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["content-collapser"]), "@CmsBlock/template/section_content-collapser_block.twig", 14);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 21, $this->source); })()), "blockTitle", [], "any", false, false, false, 21);
        echo "
                    ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 22, $this->source); })()), "blockContent", [], "any", false, false, false, 22);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "@CmsBlock/template/section_content-collapser_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 22,  222 => 21,  218 => 20,  208 => 14,  136 => 25,  134 => 17,  133 => 16,  131 => 14,  127 => 13,  50 => 5,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- CMS_BLOCK_PLACEHOLDER : \"title\" -->
<!-- CMS_BLOCK_PLACEHOLDER : \"content\" -->

{% block content %}
    {% embed organism('section') with {
        modifiers: ['secondary'],
        data: {
            blockTitle: spyCmsBlockPlaceholder('title'),
            blockContent: spyCmsBlockPlaceholder('content'),
            innerClass: 'container',
        },
    } only %}
        {% block inner %}
            {% embed molecule('content-collapser') with {
                data: {
                    blockTitle: data.blockTitle,
                    blockContent: data.blockContent,
                },
            } only %}
                {% block content %}
                    {{ data.blockTitle | raw }}
                    {{ data.blockContent | raw }}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    {% endembed %}
{% endblock %}
", "@CmsBlock/template/section_content-collapser_block.twig", "/data/src/Pyz/Shared/CmsBlock/Theme/default/template/section_content-collapser_block.twig");
    }
}
