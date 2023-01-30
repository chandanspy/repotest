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

/* @ProductManagement/View/_partials/info-seo.twig */
class __TwigTemplate_d2b3c0a57d1dc7480f8960baeea13588d858fd6fbbbba239df8e54ecbdc66d90 extends Template
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
        $this->loadTemplate("@ProductManagement/View/_partials/info-seo.twig", "@ProductManagement/View/_partials/info-seo.twig", 1, "1390598206")->display(twig_array_merge($context, ["widget_title" => "SEO (Meta Information)"]));
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-seo.twig";
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
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'SEO (Meta Information)' } %}
    {% block widget_content %}

        {% for localeTransfer in localeCollection %}
            {% for localizedData in currentProduct.localized_attributes %}
                {% if (localizedData.locale.locale_name == localeTransfer.localeName ) %}
                    {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.parent.loop.first), 'localeName': localeTransfer.localeName} %}
                        {% block content %}
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>{{ 'Meta Title' | trans }}</b></div>
                                <div class=\"col-xs-10\">{{ localizedData.meta_title }}</div>
                            </div>
                            <div class=\"hr-line-dashed\"></div>
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>{{ 'Description' | trans }}</b></div>
                                <div class=\"col-xs-10\">
                                    {{ localizedData.meta_description }}
                                </div>
                            </div>
                            <div class=\"hr-line-dashed\"></div>
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>{{ 'Keywords' | trans }}</b></div>
                                <div class=\"col-xs-10\">
                                    {{ localizedData.meta_keywords }}
                                </div>
                            </div>
                        {% endblock %}
                    {% endembed %}
                {% endif %}
            {% endfor %}
        {% endfor %}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-seo.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-seo.twig");
    }
}


/* @ProductManagement/View/_partials/info-seo.twig */
class __TwigTemplate_d2b3c0a57d1dc7480f8960baeea13588d858fd6fbbbba239df8e54ecbdc66d90___1390598206 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductManagement/View/_partials/info-seo.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 4, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["localeTransfer"]) {
            // line 5
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 5, $this->source); })()), "localized_attributes", [], "any", false, false, false, 5));
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
            foreach ($context['_seq'] as $context["_key"] => $context["localizedData"]) {
                // line 6
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedData"], "locale", [], "any", false, false, false, 6), "locale_name", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "localeName", [], "any", false, false, false, 6)))) {
                    // line 7
                    echo "                    ";
                    $this->loadTemplate("@ProductManagement/View/_partials/info-seo.twig", "@ProductManagement/View/_partials/info-seo.twig", 7, "1379224492")->display(twig_array_merge($context, ["collapsed" =>  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 7), "loop", [], "any", false, false, false, 7), "first", [], "any", false, false, false, 7), "localeName" => twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "localeName", [], "any", false, false, false, 7)]));
                    // line 29
                    echo "                ";
                }
                // line 30
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localizedData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeTransfer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-seo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 32,  191 => 31,  177 => 30,  174 => 29,  171 => 7,  168 => 6,  150 => 5,  133 => 4,  130 => 3,  126 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'SEO (Meta Information)' } %}
    {% block widget_content %}

        {% for localeTransfer in localeCollection %}
            {% for localizedData in currentProduct.localized_attributes %}
                {% if (localizedData.locale.locale_name == localeTransfer.localeName ) %}
                    {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.parent.loop.first), 'localeName': localeTransfer.localeName} %}
                        {% block content %}
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>{{ 'Meta Title' | trans }}</b></div>
                                <div class=\"col-xs-10\">{{ localizedData.meta_title }}</div>
                            </div>
                            <div class=\"hr-line-dashed\"></div>
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>{{ 'Description' | trans }}</b></div>
                                <div class=\"col-xs-10\">
                                    {{ localizedData.meta_description }}
                                </div>
                            </div>
                            <div class=\"hr-line-dashed\"></div>
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>{{ 'Keywords' | trans }}</b></div>
                                <div class=\"col-xs-10\">
                                    {{ localizedData.meta_keywords }}
                                </div>
                            </div>
                        {% endblock %}
                    {% endembed %}
                {% endif %}
            {% endfor %}
        {% endfor %}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-seo.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-seo.twig");
    }
}


/* @ProductManagement/View/_partials/info-seo.twig */
class __TwigTemplate_d2b3c0a57d1dc7480f8960baeea13588d858fd6fbbbba239df8e54ecbdc66d90___1379224492 extends Template
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
        // line 7
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductManagement/View/_partials/info-seo.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta Title"), "html", null, true);
        echo "</b></div>
                                <div class=\"col-xs-10\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["localizedData"]) || array_key_exists("localizedData", $context) ? $context["localizedData"] : (function () { throw new RuntimeError('Variable "localizedData" does not exist.', 11, $this->source); })()), "meta_title", [], "any", false, false, false, 11), "html", null, true);
        echo "</div>
                            </div>
                            <div class=\"hr-line-dashed\"></div>
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        echo "</b></div>
                                <div class=\"col-xs-10\">
                                    ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["localizedData"]) || array_key_exists("localizedData", $context) ? $context["localizedData"] : (function () { throw new RuntimeError('Variable "localizedData" does not exist.', 17, $this->source); })()), "meta_description", [], "any", false, false, false, 17), "html", null, true);
        echo "
                                </div>
                            </div>
                            <div class=\"hr-line-dashed\"></div>
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Keywords"), "html", null, true);
        echo "</b></div>
                                <div class=\"col-xs-10\">
                                    ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["localizedData"]) || array_key_exists("localizedData", $context) ? $context["localizedData"] : (function () { throw new RuntimeError('Variable "localizedData" does not exist.', 24, $this->source); })()), "meta_keywords", [], "any", false, false, false, 24), "html", null, true);
        echo "
                                </div>
                            </div>
                        ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-seo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 24,  327 => 22,  319 => 17,  314 => 15,  307 => 11,  303 => 10,  300 => 9,  296 => 8,  285 => 7,  205 => 32,  191 => 31,  177 => 30,  174 => 29,  171 => 7,  168 => 6,  150 => 5,  133 => 4,  130 => 3,  126 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'SEO (Meta Information)' } %}
    {% block widget_content %}

        {% for localeTransfer in localeCollection %}
            {% for localizedData in currentProduct.localized_attributes %}
                {% if (localizedData.locale.locale_name == localeTransfer.localeName ) %}
                    {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.parent.loop.first), 'localeName': localeTransfer.localeName} %}
                        {% block content %}
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>{{ 'Meta Title' | trans }}</b></div>
                                <div class=\"col-xs-10\">{{ localizedData.meta_title }}</div>
                            </div>
                            <div class=\"hr-line-dashed\"></div>
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>{{ 'Description' | trans }}</b></div>
                                <div class=\"col-xs-10\">
                                    {{ localizedData.meta_description }}
                                </div>
                            </div>
                            <div class=\"hr-line-dashed\"></div>
                            <div class=\"row\">
                                <div class=\"col-xs-2\"><b>{{ 'Keywords' | trans }}</b></div>
                                <div class=\"col-xs-10\">
                                    {{ localizedData.meta_keywords }}
                                </div>
                            </div>
                        {% endblock %}
                    {% endembed %}
                {% endif %}
            {% endfor %}
        {% endfor %}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-seo.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-seo.twig");
    }
}
