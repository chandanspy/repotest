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

/* @CategoryImageGui/_partials/image-tab.twig */
class __TwigTemplate_b7f3ed133aabeb3e4c5f45e013f936eb50d354faefcb1d92e8822db2067e17e7 extends Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 1, $this->source); })()), [0 => "@CategoryImageGui/_partials/category-image-set-theme.twig", 1 => "@CategoryImageGui/_partials/category-image-collection-theme.twig"], true);
        // line 5
        echo "
<div class=\"well\">
    ";
        // line 7
        ob_start();
        // line 8
        echo "        <h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category Image(s)"), "html", null, true);
        echo "</h3>
        <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Multiple images can be grouped to an image set. An image set has a name for identification and may contain a small and a large version of each image."), "html", null, true);
        echo "</p>
        <p><i>";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note: Image sets can be used for different purposes."), "html", null, true);
        echo "</i></p>
    ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_0_);
        // line 12
        echo "</div>

";
        // line 14
        $context["localeCollection"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 14, $this->source); })()), "imageSets", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "locales", [], "any", false, false, false, 14);
        // line 15
        echo "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 16, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["localeName"]) {
            // line 17
            echo "    ";
            $this->loadTemplate("@CategoryImageGui/_partials/image-tab.twig", "@CategoryImageGui/_partials/image-tab.twig", 17, "100555008")->display(twig_to_array(["collapsed" =>  !twig_get_attribute($this->env, $this->source,             // line 18
$context["loop"], "first", [], "any", false, false, false, 18), "localeName" =>             // line 19
$context["localeName"], "categoryForm" =>             // line 20
(isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 20, $this->source); })())]));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
<script src=\"";
        // line 28
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-category-image-main.js"]);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 29
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-category-image-main.css"]);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "@CategoryImageGui/_partials/image-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  108 => 28,  105 => 27,  91 => 20,  90 => 19,  89 => 18,  87 => 17,  70 => 16,  67 => 15,  65 => 14,  61 => 12,  59 => 7,  54 => 10,  50 => 9,  45 => 8,  43 => 7,  39 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme categoryForm with [
    '@CategoryImageGui/_partials/category-image-set-theme.twig',
    '@CategoryImageGui/_partials/category-image-collection-theme.twig',
]%}

<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'Category Image(s)' | trans }}</h3>
        <p>{{ 'Multiple images can be grouped to an image set. An image set has a name for identification and may contain a small and a large version of each image.' | trans }}</p>
        <p><i>{{ 'Note: Image sets can be used for different purposes.' | trans }}</i></p>
    {% endapply %}
</div>

{% set localeCollection = categoryForm.imageSets.vars.locales %}

{% for localeName in localeCollection %}
    {% embed '@Gui/Partials/localized-ibox.twig' with {
        'collapsed': not loop.first,
        'localeName': localeName,
        'categoryForm': categoryForm
    } only %}
        {% block content %}
            {% include '@CategoryImageGui/_partials/image-set-form.twig' %}
        {% endblock %}
    {% endembed %}
{% endfor %}

<script src=\"{{ assetsPath('js/spryker-zed-category-image-main.js') }}\"></script>
<link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-category-image-main.css') }}\" />
", "@CategoryImageGui/_partials/image-tab.twig", "/data/vendor/spryker/category-image-gui/src/Spryker/Zed/CategoryImageGui/Presentation//_partials/image-tab.twig");
    }
}


/* @CategoryImageGui/_partials/image-tab.twig */
class __TwigTemplate_b7f3ed133aabeb3e4c5f45e013f936eb50d354faefcb1d92e8822db2067e17e7___100555008 extends Template
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
        // line 17
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@CategoryImageGui/_partials/image-tab.twig", 17);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            ";
        $this->loadTemplate("@CategoryImageGui/_partials/image-set-form.twig", "@CategoryImageGui/_partials/image-tab.twig", 23)->display($context);
        // line 24
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@CategoryImageGui/_partials/image-tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 24,  203 => 23,  199 => 22,  188 => 17,  112 => 29,  108 => 28,  105 => 27,  91 => 20,  90 => 19,  89 => 18,  87 => 17,  70 => 16,  67 => 15,  65 => 14,  61 => 12,  59 => 7,  54 => 10,  50 => 9,  45 => 8,  43 => 7,  39 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme categoryForm with [
    '@CategoryImageGui/_partials/category-image-set-theme.twig',
    '@CategoryImageGui/_partials/category-image-collection-theme.twig',
]%}

<div class=\"well\">
    {% apply trans|raw %}
        <h3>{{ 'Category Image(s)' | trans }}</h3>
        <p>{{ 'Multiple images can be grouped to an image set. An image set has a name for identification and may contain a small and a large version of each image.' | trans }}</p>
        <p><i>{{ 'Note: Image sets can be used for different purposes.' | trans }}</i></p>
    {% endapply %}
</div>

{% set localeCollection = categoryForm.imageSets.vars.locales %}

{% for localeName in localeCollection %}
    {% embed '@Gui/Partials/localized-ibox.twig' with {
        'collapsed': not loop.first,
        'localeName': localeName,
        'categoryForm': categoryForm
    } only %}
        {% block content %}
            {% include '@CategoryImageGui/_partials/image-set-form.twig' %}
        {% endblock %}
    {% endembed %}
{% endfor %}

<script src=\"{{ assetsPath('js/spryker-zed-category-image-main.js') }}\"></script>
<link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-category-image-main.css') }}\" />
", "@CategoryImageGui/_partials/image-tab.twig", "/data/vendor/spryker/category-image-gui/src/Spryker/Zed/CategoryImageGui/Presentation//_partials/image-tab.twig");
    }
}
