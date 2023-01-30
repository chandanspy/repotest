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

/* @ProductManagement/Product/_partials/image-tab.twig */
class __TwigTemplate_6fbc0b750d41d66ce6d6a714d2002bc5db70ea74dd58640e7aa6c184d7704e3c extends Template
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
        // line 2
        echo "
<div class=\"well\">
    ";
        // line 4
        ob_start();
        // line 5
        echo "        <h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product Image(s)"), "html", null, true);
        echo "</h3>
        <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Multiple images can be grouped to an image set. An image set has a name for identification and may contain a small and a large version of each image"), "html", null, true);
        echo ".</p>
        <p><i>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note: Image sets can be used for different purposes such as being displayed in the catalog or the product detail page or elsewhere."), "html", null, true);
        echo "</i></p>
    ";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_5_);
        // line 9
        echo "</div>

";
        // line 11
        $context["formKey"] = "image_set_default";
        // line 12
        $this->loadTemplate("@ProductManagement/Product/_partials/image-tab.twig", "@ProductManagement/Product/_partials/image-tab.twig", 12, "344061298")->display(twig_array_merge($context, ["collapsed" => false]));
        // line 21
        echo "
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 22, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 23
            echo "    ";
            $context["formKey"] = ("image_set_" . twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 23));
            // line 24
            echo "
    ";
            // line 25
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), (isset($context["formKey"]) || array_key_exists("formKey", $context) ? $context["formKey"] : (function () { throw new RuntimeError('Variable "formKey" does not exist.', 25, $this->source); })()), [], "array", true, true, false, 25)) {
                // line 26
                echo "        ";
                $this->loadTemplate("@ProductManagement/Product/_partials/image-tab.twig", "@ProductManagement/Product/_partials/image-tab.twig", 26, "1183160637")->display(twig_array_merge($context, ["collapsed" => true, "localeName" => twig_get_attribute($this->env, $this->source, $context["locale"], "localeName", [], "any", false, false, false, 26)]));
                // line 31
                echo "    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/image-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  95 => 26,  93 => 25,  90 => 24,  87 => 23,  70 => 22,  67 => 21,  65 => 12,  63 => 11,  59 => 9,  57 => 4,  52 => 7,  48 => 6,  43 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var locale \\Generated\\Shared\\Transfer\\LocaleTransfer #}

<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'Product Image(s)' | trans }}</h3>
        <p>{{ 'Multiple images can be grouped to an image set. An image set has a name for identification and may contain a small and a large version of each image' | trans }}.</p>
        <p><i>{{ 'Note: Image sets can be used for different purposes such as being displayed in the catalog or the product detail page or elsewhere.' | trans }}</i></p>
    {% endapply %}
</div>

{% set formKey = 'image_set_default' %}
{% embed '@Gui/Partials/ibox.twig' with {'collapsed': false} %}
    {% block title %}
        {{ 'Default' | trans }}
    {% endblock %}

    {% block content %}
        {% include '@ProductManagement/Product/_partials/image-set-form.twig' %}
    {% endblock %}
{% endembed %}

{% for locale in localeCollection %}
    {% set formKey = 'image_set_' ~ locale.localeName %}

    {% if form[formKey] is defined %}
        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': true, 'localeName': locale.localeName} %}
            {% block content %}
                {% include '@ProductManagement/Product/_partials/image-set-form.twig' %}
            {% endblock %}
        {% endembed %}
    {% endif %}
{% endfor %}
", "@ProductManagement/Product/_partials/image-tab.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/image-tab.twig");
    }
}


/* @ProductManagement/Product/_partials/image-tab.twig */
class __TwigTemplate_6fbc0b750d41d66ce6d6a714d2002bc5db70ea74dd58640e7aa6c184d7704e3c___344061298 extends Template
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
        // line 12
        return "@Gui/Partials/ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/ibox.twig", "@ProductManagement/Product/_partials/image-tab.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Default"), "html", null, true);
        echo "
    ";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        ";
        $this->loadTemplate("@ProductManagement/Product/_partials/image-set-form.twig", "@ProductManagement/Product/_partials/image-tab.twig", 18)->display($context);
        // line 19
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/image-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 19,  215 => 18,  211 => 17,  204 => 14,  200 => 13,  189 => 12,  98 => 31,  95 => 26,  93 => 25,  90 => 24,  87 => 23,  70 => 22,  67 => 21,  65 => 12,  63 => 11,  59 => 9,  57 => 4,  52 => 7,  48 => 6,  43 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var locale \\Generated\\Shared\\Transfer\\LocaleTransfer #}

<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'Product Image(s)' | trans }}</h3>
        <p>{{ 'Multiple images can be grouped to an image set. An image set has a name for identification and may contain a small and a large version of each image' | trans }}.</p>
        <p><i>{{ 'Note: Image sets can be used for different purposes such as being displayed in the catalog or the product detail page or elsewhere.' | trans }}</i></p>
    {% endapply %}
</div>

{% set formKey = 'image_set_default' %}
{% embed '@Gui/Partials/ibox.twig' with {'collapsed': false} %}
    {% block title %}
        {{ 'Default' | trans }}
    {% endblock %}

    {% block content %}
        {% include '@ProductManagement/Product/_partials/image-set-form.twig' %}
    {% endblock %}
{% endembed %}

{% for locale in localeCollection %}
    {% set formKey = 'image_set_' ~ locale.localeName %}

    {% if form[formKey] is defined %}
        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': true, 'localeName': locale.localeName} %}
            {% block content %}
                {% include '@ProductManagement/Product/_partials/image-set-form.twig' %}
            {% endblock %}
        {% endembed %}
    {% endif %}
{% endfor %}
", "@ProductManagement/Product/_partials/image-tab.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/image-tab.twig");
    }
}


/* @ProductManagement/Product/_partials/image-tab.twig */
class __TwigTemplate_6fbc0b750d41d66ce6d6a714d2002bc5db70ea74dd58640e7aa6c184d7704e3c___1183160637 extends Template
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
        // line 26
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductManagement/Product/_partials/image-tab.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                ";
        $this->loadTemplate("@ProductManagement/Product/_partials/image-set-form.twig", "@ProductManagement/Product/_partials/image-tab.twig", 28)->display($context);
        // line 29
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/image-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 29,  310 => 28,  306 => 27,  295 => 26,  218 => 19,  215 => 18,  211 => 17,  204 => 14,  200 => 13,  189 => 12,  98 => 31,  95 => 26,  93 => 25,  90 => 24,  87 => 23,  70 => 22,  67 => 21,  65 => 12,  63 => 11,  59 => 9,  57 => 4,  52 => 7,  48 => 6,  43 => 5,  41 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var locale \\Generated\\Shared\\Transfer\\LocaleTransfer #}

<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'Product Image(s)' | trans }}</h3>
        <p>{{ 'Multiple images can be grouped to an image set. An image set has a name for identification and may contain a small and a large version of each image' | trans }}.</p>
        <p><i>{{ 'Note: Image sets can be used for different purposes such as being displayed in the catalog or the product detail page or elsewhere.' | trans }}</i></p>
    {% endapply %}
</div>

{% set formKey = 'image_set_default' %}
{% embed '@Gui/Partials/ibox.twig' with {'collapsed': false} %}
    {% block title %}
        {{ 'Default' | trans }}
    {% endblock %}

    {% block content %}
        {% include '@ProductManagement/Product/_partials/image-set-form.twig' %}
    {% endblock %}
{% endembed %}

{% for locale in localeCollection %}
    {% set formKey = 'image_set_' ~ locale.localeName %}

    {% if form[formKey] is defined %}
        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': true, 'localeName': locale.localeName} %}
            {% block content %}
                {% include '@ProductManagement/Product/_partials/image-set-form.twig' %}
            {% endblock %}
        {% endembed %}
    {% endif %}
{% endfor %}
", "@ProductManagement/Product/_partials/image-tab.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/image-tab.twig");
    }
}
