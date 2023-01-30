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

/* @HomePage/views/home/home.twig */
class __TwigTemplate_e141ed0ce0e8c48ae44b33f35d66987ce839304ccb1eb8ba8cd8964e4f240a66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contentTop' => [$this, 'block_contentTop'],
            'content' => [$this, 'block_content'],
            'contentBottom' => [$this, 'block_contentBottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('view')->getCallable(), ["home", "@SprykerShop:HomePage"]), "@HomePage/views/home/home.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contentTop($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("@HomePage/views/home/home.twig", "@HomePage/views/home/home.twig", 4, "1491316355")->display(twig_to_array(["class" => "spacing-bottom spacing-bottom--big", "modifiers" => [0 => "jumbotron"], "attributes" => ["slider-config" => "{
                \"slidesToShow\": 1,
                \"dots\": true,
                \"autoplay\": true,
                \"nextArrow\": false,
                \"prevArrow\": false,
                \"autoplaySpeed\": 4000,
                \"centerMode\": true,
                \"centerPadding\": \"240px\",
                \"responsive\": [{
                     \"breakpoint\": 1400,
                     \"settings\": {
                         \"centerPadding\": \"130px\"
                     }
                },
                {
                    \"breakpoint\": 1200,
                    \"settings\": {
                        \"centerPadding\": \"40px\"
                    }
                },
                {
                    \"breakpoint\": 768,
                    \"settings\": {
                        \"centerPadding\": \"12px\",
                        \"autoplay\": false
                    }
                },
                {
                    \"breakpoint\": 375,
                    \"settings\": {
                        \"centerMode\": false,
                        \"autoplay\": false
                    }
                }]
            }"]]));
    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "    ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-3')->setCmsSlotTemplatePath('@HomePage/views/home/home.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 54
        echo "
    ";
        // line 55
        $this->loadTemplate("@HomePage/views/home/home.twig", "@HomePage/views/home/home.twig", 55, "1536976836")->display(twig_to_array(["modifiers" => [0 => "secondary", 1 => "full-width"], "class" => "spacing-top spacing-top--inner spacing-top--big"]));
    }

    // line 67
    public function block_contentBottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "    ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-5')->setCmsSlotTemplatePath('@HomePage/views/home/home.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));    }

    public function getTemplateName()
    {
        return "@HomePage/views/home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 68,  104 => 67,  100 => 55,  97 => 54,  95 => 53,  91 => 52,  51 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('home', '@SprykerShop:HomePage') %}

{% block contentTop %}
    {% embed molecule('slick-carousel') with {
        class: 'spacing-bottom spacing-bottom--big',
        modifiers: ['jumbotron'],
        attributes: {
            'slider-config': '{
                \"slidesToShow\": 1,
                \"dots\": true,
                \"autoplay\": true,
                \"nextArrow\": false,
                \"prevArrow\": false,
                \"autoplaySpeed\": 4000,
                \"centerMode\": true,
                \"centerPadding\": \"240px\",
                \"responsive\": [{
                     \"breakpoint\": 1400,
                     \"settings\": {
                         \"centerPadding\": \"130px\"
                     }
                },
                {
                    \"breakpoint\": 1200,
                    \"settings\": {
                        \"centerPadding\": \"40px\"
                    }
                },
                {
                    \"breakpoint\": 768,
                    \"settings\": {
                        \"centerPadding\": \"12px\",
                        \"autoplay\": false
                    }
                },
                {
                    \"breakpoint\": 375,
                    \"settings\": {
                        \"centerMode\": false,
                        \"autoplay\": false
                    }
                }]
            }',
        },
    } only %}
        {% block slides %}
            {% cms_slot 'slt-2' %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% cms_slot 'slt-3' %}

    {% embed organism('section') with {
        modifiers: ['secondary', 'full-width'],
        class: 'spacing-top spacing-top--inner spacing-top--big',
    } only %}
        {% block inner %}
            <div class=\"grid grid--left grid--middle\">
                {% cms_slot 'slt-4' %}
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block contentBottom %}
    {% cms_slot 'slt-5' %}
{% endblock %}
", "@HomePage/views/home/home.twig", "/data/src/Pyz/Yves/HomePage/Theme/default/views/home/home.twig");
    }
}


/* @HomePage/views/home/home.twig */
class __TwigTemplate_e141ed0ce0e8c48ae44b33f35d66987ce839304ccb1eb8ba8cd8964e4f240a66___1491316355 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'slides' => [$this, 'block_slides'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["slick-carousel"]), "@HomePage/views/home/home.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_slides($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "            ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-2')->setCmsSlotTemplatePath('@HomePage/views/home/home.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 48
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@HomePage/views/home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 48,  236 => 47,  232 => 46,  222 => 4,  108 => 68,  104 => 67,  100 => 55,  97 => 54,  95 => 53,  91 => 52,  51 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('home', '@SprykerShop:HomePage') %}

{% block contentTop %}
    {% embed molecule('slick-carousel') with {
        class: 'spacing-bottom spacing-bottom--big',
        modifiers: ['jumbotron'],
        attributes: {
            'slider-config': '{
                \"slidesToShow\": 1,
                \"dots\": true,
                \"autoplay\": true,
                \"nextArrow\": false,
                \"prevArrow\": false,
                \"autoplaySpeed\": 4000,
                \"centerMode\": true,
                \"centerPadding\": \"240px\",
                \"responsive\": [{
                     \"breakpoint\": 1400,
                     \"settings\": {
                         \"centerPadding\": \"130px\"
                     }
                },
                {
                    \"breakpoint\": 1200,
                    \"settings\": {
                        \"centerPadding\": \"40px\"
                    }
                },
                {
                    \"breakpoint\": 768,
                    \"settings\": {
                        \"centerPadding\": \"12px\",
                        \"autoplay\": false
                    }
                },
                {
                    \"breakpoint\": 375,
                    \"settings\": {
                        \"centerMode\": false,
                        \"autoplay\": false
                    }
                }]
            }',
        },
    } only %}
        {% block slides %}
            {% cms_slot 'slt-2' %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% cms_slot 'slt-3' %}

    {% embed organism('section') with {
        modifiers: ['secondary', 'full-width'],
        class: 'spacing-top spacing-top--inner spacing-top--big',
    } only %}
        {% block inner %}
            <div class=\"grid grid--left grid--middle\">
                {% cms_slot 'slt-4' %}
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block contentBottom %}
    {% cms_slot 'slt-5' %}
{% endblock %}
", "@HomePage/views/home/home.twig", "/data/src/Pyz/Yves/HomePage/Theme/default/views/home/home.twig");
    }
}


/* @HomePage/views/home/home.twig */
class __TwigTemplate_e141ed0ce0e8c48ae44b33f35d66987ce839304ccb1eb8ba8cd8964e4f240a66___1536976836 extends Template
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
        // line 55
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["section"]), "@HomePage/views/home/home.twig", 55);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 59
    public function block_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "            <div class=\"grid grid--left grid--middle\">
                ";
        // line 61
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-4')->setCmsSlotTemplatePath('@HomePage/views/home/home.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 62
        echo "            </div>
        ";
    }

    public function getTemplateName()
    {
        return "@HomePage/views/home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 62,  369 => 61,  366 => 60,  362 => 59,  352 => 55,  238 => 48,  236 => 47,  232 => 46,  222 => 4,  108 => 68,  104 => 67,  100 => 55,  97 => 54,  95 => 53,  91 => 52,  51 => 4,  47 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends view('home', '@SprykerShop:HomePage') %}

{% block contentTop %}
    {% embed molecule('slick-carousel') with {
        class: 'spacing-bottom spacing-bottom--big',
        modifiers: ['jumbotron'],
        attributes: {
            'slider-config': '{
                \"slidesToShow\": 1,
                \"dots\": true,
                \"autoplay\": true,
                \"nextArrow\": false,
                \"prevArrow\": false,
                \"autoplaySpeed\": 4000,
                \"centerMode\": true,
                \"centerPadding\": \"240px\",
                \"responsive\": [{
                     \"breakpoint\": 1400,
                     \"settings\": {
                         \"centerPadding\": \"130px\"
                     }
                },
                {
                    \"breakpoint\": 1200,
                    \"settings\": {
                        \"centerPadding\": \"40px\"
                    }
                },
                {
                    \"breakpoint\": 768,
                    \"settings\": {
                        \"centerPadding\": \"12px\",
                        \"autoplay\": false
                    }
                },
                {
                    \"breakpoint\": 375,
                    \"settings\": {
                        \"centerMode\": false,
                        \"autoplay\": false
                    }
                }]
            }',
        },
    } only %}
        {% block slides %}
            {% cms_slot 'slt-2' %}
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block content %}
    {% cms_slot 'slt-3' %}

    {% embed organism('section') with {
        modifiers: ['secondary', 'full-width'],
        class: 'spacing-top spacing-top--inner spacing-top--big',
    } only %}
        {% block inner %}
            <div class=\"grid grid--left grid--middle\">
                {% cms_slot 'slt-4' %}
            </div>
        {% endblock %}
    {% endembed %}
{% endblock %}

{% block contentBottom %}
    {% cms_slot 'slt-5' %}
{% endblock %}
", "@HomePage/views/home/home.twig", "/data/src/Pyz/Yves/HomePage/Theme/default/views/home/home.twig");
    }
}
