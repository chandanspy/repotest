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

/* @ProductManagement/View/_partials/info-image.twig */
class __TwigTemplate_15b5154d020cbb78be0b1282fc785d271008c6fa68b13882b0344f9c79ffcfee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->loadTemplate("@ProductManagement/View/_partials/info-image.twig", "@ProductManagement/View/_partials/info-image.twig", 1, "988750527")->display(twig_array_merge($context, ["widget_title" => "Image Sets"]));
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Image Sets' } %}
    {% block widget_content %}

        {% for localeName,imageSets in imageSetCollection %}
            {% for imageSet in imageSets %}
                {% if imageSet.name %}
                    {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.parent.loop.first)} %}

                        {% block title %}
                            {% if localeName == 'default' %}
                                {{ 'Default' | trans }}
                            {% else %}
                                {{ parent() }}
                            {% endif %}
                        {% endblock %}

                        {% block content %}
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>{{ 'Name' | trans }}</b></div>
                                <div class=\"col-xs-10\">{{ imageSet.name }}</div>
                            </div>
                            <div class=\"hr-line-dashed\"></div>
                            <div class=\"row\">
                                {% for image in imageSet.product_images %}
                                    <div class=\"col-lg-3\">
                                        <img src=\"{{ image.image_preview }}\" style=\"max-width: 100px; max-height: 100px\">
                                    </div>
                                {% endfor %}
                            </div>
                        {% endblock %}

                    {% endembed %}
                {% endif %}
            {% endfor %}
        {% endfor %}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-image.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-image.twig");
    }
}


/* @ProductManagement/View/_partials/info-image.twig */
class __TwigTemplate_15b5154d020cbb78be0b1282fc785d271008c6fa68b13882b0344f9c79ffcfee___988750527 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductManagement/View/_partials/info-image.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imageSetCollection"]) || array_key_exists("imageSetCollection", $context) ? $context["imageSetCollection"] : (function () { throw new RuntimeError('Variable "imageSetCollection" does not exist.', 4, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["localeName"] => $context["imageSets"]) {
            // line 5
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["imageSets"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["imageSet"]) {
                // line 6
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["imageSet"], "name", [], "any", false, false, false, 6)) {
                    // line 7
                    echo "                    ";
                    $this->loadTemplate("@ProductManagement/View/_partials/info-image.twig", "@ProductManagement/View/_partials/info-image.twig", 7, "1268147129")->display(twig_array_merge($context, ["collapsed" =>  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 7), "loop", [], "any", false, false, false, 7), "first", [], "any", false, false, false, 7)]));
                    // line 33
                    echo "                ";
                }
                // line 34
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageSet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['localeName'], $context['imageSets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 36,  195 => 35,  181 => 34,  178 => 33,  175 => 7,  172 => 6,  154 => 5,  137 => 4,  134 => 3,  130 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Image Sets' } %}
    {% block widget_content %}

        {% for localeName,imageSets in imageSetCollection %}
            {% for imageSet in imageSets %}
                {% if imageSet.name %}
                    {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.parent.loop.first)} %}

                        {% block title %}
                            {% if localeName == 'default' %}
                                {{ 'Default' | trans }}
                            {% else %}
                                {{ parent() }}
                            {% endif %}
                        {% endblock %}

                        {% block content %}
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>{{ 'Name' | trans }}</b></div>
                                <div class=\"col-xs-10\">{{ imageSet.name }}</div>
                            </div>
                            <div class=\"hr-line-dashed\"></div>
                            <div class=\"row\">
                                {% for image in imageSet.product_images %}
                                    <div class=\"col-lg-3\">
                                        <img src=\"{{ image.image_preview }}\" style=\"max-width: 100px; max-height: 100px\">
                                    </div>
                                {% endfor %}
                            </div>
                        {% endblock %}

                    {% endembed %}
                {% endif %}
            {% endfor %}
        {% endfor %}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-image.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-image.twig");
    }
}


/* @ProductManagement/View/_partials/info-image.twig */
class __TwigTemplate_15b5154d020cbb78be0b1282fc785d271008c6fa68b13882b0344f9c79ffcfee___1268147129 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductManagement/View/_partials/info-image.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                            ";
        if ((0 === twig_compare((isset($context["localeName"]) || array_key_exists("localeName", $context) ? $context["localeName"] : (function () { throw new RuntimeError('Variable "localeName" does not exist.', 10, $this->source); })()), "default"))) {
            // line 11
            echo "                                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Default"), "html", null, true);
            echo "
                            ";
        } else {
            // line 13
            echo "                                ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
                            ";
        }
        // line 15
        echo "                        ";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</b></div>
                                <div class=\"col-xs-10\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["imageSet"]) || array_key_exists("imageSet", $context) ? $context["imageSet"] : (function () { throw new RuntimeError('Variable "imageSet" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"hr-line-dashed\"></div>
                            <div class=\"row\">
                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["imageSet"]) || array_key_exists("imageSet", $context) ? $context["imageSet"] : (function () { throw new RuntimeError('Variable "imageSet" does not exist.', 24, $this->source); })()), "product_images", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 25
            echo "                                    <div class=\"col-lg-3\">
                                        <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image_preview", [], "any", false, false, false, 26), "html", null, true);
            echo "\" style=\"max-width: 100px; max-height: 100px\">
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                            </div>
                        ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 29,  353 => 26,  350 => 25,  346 => 24,  339 => 20,  335 => 19,  332 => 18,  328 => 17,  324 => 15,  318 => 13,  312 => 11,  309 => 10,  305 => 9,  294 => 7,  209 => 36,  195 => 35,  181 => 34,  178 => 33,  175 => 7,  172 => 6,  154 => 5,  137 => 4,  134 => 3,  130 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'Image Sets' } %}
    {% block widget_content %}

        {% for localeName,imageSets in imageSetCollection %}
            {% for imageSet in imageSets %}
                {% if imageSet.name %}
                    {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.parent.loop.first)} %}

                        {% block title %}
                            {% if localeName == 'default' %}
                                {{ 'Default' | trans }}
                            {% else %}
                                {{ parent() }}
                            {% endif %}
                        {% endblock %}

                        {% block content %}
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>{{ 'Name' | trans }}</b></div>
                                <div class=\"col-xs-10\">{{ imageSet.name }}</div>
                            </div>
                            <div class=\"hr-line-dashed\"></div>
                            <div class=\"row\">
                                {% for image in imageSet.product_images %}
                                    <div class=\"col-lg-3\">
                                        <img src=\"{{ image.image_preview }}\" style=\"max-width: 100px; max-height: 100px\">
                                    </div>
                                {% endfor %}
                            </div>
                        {% endblock %}

                    {% endembed %}
                {% endif %}
            {% endfor %}
        {% endfor %}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-image.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-image.twig");
    }
}
