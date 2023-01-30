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

/* @NavigationGui/Node/_partials/navigation-node-form-content.twig */
class __TwigTemplate_5423145cffadc8b37244e51fa1f03e54342ab3afa2736b0b4992ccc2f2bb85c9 extends Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeForm"]) || array_key_exists("navigationNodeForm", $context) ? $context["navigationNodeForm"] : (function () { throw new RuntimeError('Variable "navigationNodeForm" does not exist.', 1, $this->source); })()), "node_type", [], "any", false, false, false, 1), 'row');
        echo "

<div class=\"form-group\">
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
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeForm"]) || array_key_exists("navigationNodeForm", $context) ? $context["navigationNodeForm"] : (function () { throw new RuntimeError('Variable "navigationNodeForm" does not exist.', 5, $this->source); })()), "navigation_node_localized_attributes", [], "any", false, false, false, 5));
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
            foreach ($context['_seq'] as $context["_key"] => $context["navigationNodeLocalizedAttributes"]) {
                // line 6
                echo "            ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "idLocale", [], "any", false, false, false, 6), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["navigationNodeLocalizedAttributes"], "fk_locale", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6)))) {
                    // line 7
                    echo "                ";
                    $this->loadTemplate("@NavigationGui/Node/_partials/navigation-node-form-content.twig", "@NavigationGui/Node/_partials/navigation-node-form-content.twig", 7, "1546924256")->display(twig_array_merge($context, ["id" => ("localized_attributes_container-" . twig_get_attribute($this->env, $this->source,                     // line 8
$context["localeTransfer"], "localeName", [], "any", false, false, false, 8)), "localeName" => twig_get_attribute($this->env, $this->source,                     // line 9
$context["localeTransfer"], "localeName", [], "any", false, false, false, 9), "collapsed" => false]));
                    // line 44
                    echo "            ";
                }
                // line 45
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navigationNodeLocalizedAttributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    ";
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
        // line 47
        echo "</div>

";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeForm"]) || array_key_exists("navigationNodeForm", $context) ? $context["navigationNodeForm"] : (function () { throw new RuntimeError('Variable "navigationNodeForm" does not exist.', 49, $this->source); })()), "valid_from", [], "any", false, false, false, 49), 'row');
        echo "
";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeForm"]) || array_key_exists("navigationNodeForm", $context) ? $context["navigationNodeForm"] : (function () { throw new RuntimeError('Variable "navigationNodeForm" does not exist.', 50, $this->source); })()), "valid_to", [], "any", false, false, false, 50), 'row');
        echo "

";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeForm"]) || array_key_exists("navigationNodeForm", $context) ? $context["navigationNodeForm"] : (function () { throw new RuntimeError('Variable "navigationNodeForm" does not exist.', 52, $this->source); })()), "is_active", [], "any", false, false, false, 52), 'widget');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Node/_partials/navigation-node-form-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 52,  125 => 50,  121 => 49,  117 => 47,  103 => 46,  89 => 45,  86 => 44,  84 => 9,  83 => 8,  81 => 7,  78 => 6,  60 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_row(navigationNodeForm.node_type) }}

<div class=\"form-group\">
    {% for localeTransfer in localeCollection %}
        {% for navigationNodeLocalizedAttributes in navigationNodeForm.navigation_node_localized_attributes %}
            {% if localeTransfer.idLocale == navigationNodeLocalizedAttributes.fk_locale.vars.value %}
                {% embed '@Gui/Partials/localized-ibox.twig' with {
                    'id': 'localized_attributes_container-' ~ localeTransfer.localeName,
                    'localeName': localeTransfer.localeName,
                    'collapsed': false
                } %}
                    {% block content %}
                        <div class=\"form-group {% if navigationNodeLocalizedAttributes.title.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(navigationNodeLocalizedAttributes.title) }}
                            {{ form_widget(navigationNodeLocalizedAttributes.title, {'attr': {'class': 'name-translation', 'data-translation-key': navigationNodeLocalizedAttributes.title.vars.name}}) }}
                            {{ form_errors(navigationNodeLocalizedAttributes.title) }}
                        </div>

                        <div class=\"js-node-type-field hidden\" data-node-type=\"link\">
                            {{ form_row(navigationNodeLocalizedAttributes.link) }}
                        </div>

                        <div class=\"js-node-type-field hidden\" data-node-type=\"external_url\">
                            {{ form_row(navigationNodeLocalizedAttributes.external_url) }}
                        </div>

                        <div class=\"js-node-type-field hidden\" data-node-type=\"cms_page\">
                            {{ form_row(navigationNodeLocalizedAttributes.cms_page_url, {'url': url('/navigation-gui/url-suggestion/cms-page', {'id-locale': localeTransfer.idLocale})}) }}
                        </div>

                        <div class=\"js-node-type-field hidden\" data-node-type=\"category\">
                            {{ form_row(navigationNodeLocalizedAttributes.category_url, {'url': url('/navigation-gui/url-suggestion/category', {'id-locale': localeTransfer.idLocale})}) }}
                        </div>

                        <div class=\"form-group {% if navigationNodeLocalizedAttributes.css_class.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(navigationNodeLocalizedAttributes.css_class) }}
                            {{ form_widget(navigationNodeLocalizedAttributes.css_class, {'attr': {'data-translation-key': navigationNodeLocalizedAttributes.css_class.vars.name}}) }}
                            {{ form_errors(navigationNodeLocalizedAttributes.css_class) }}
                        </div>

                        {{ form_rest(navigationNodeLocalizedAttributes) }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endfor %}
    {% endfor %}
</div>

{{ form_row(navigationNodeForm.valid_from) }}
{{ form_row(navigationNodeForm.valid_to) }}

{{ form_widget(navigationNodeForm.is_active) }}
", "@NavigationGui/Node/_partials/navigation-node-form-content.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Node/_partials/navigation-node-form-content.twig");
    }
}


/* @NavigationGui/Node/_partials/navigation-node-form-content.twig */
class __TwigTemplate_5423145cffadc8b37244e51fa1f03e54342ab3afa2736b0b4992ccc2f2bb85c9___1546924256 extends Template
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
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@NavigationGui/Node/_partials/navigation-node-form-content.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                        <div class=\"form-group ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13))) {
            echo "has-error";
        }
        echo "\">
                            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), 'label');
        echo "
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "name-translation", "data-translation-key" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "name", [], "any", false, false, false, 15)]]);
        echo "
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), 'errors');
        echo "
                        </div>

                        <div class=\"js-node-type-field hidden\" data-node-type=\"link\">
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 20, $this->source); })()), "link", [], "any", false, false, false, 20), 'row');
        echo "
                        </div>

                        <div class=\"js-node-type-field hidden\" data-node-type=\"external_url\">
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 24, $this->source); })()), "external_url", [], "any", false, false, false, 24), 'row');
        echo "
                        </div>

                        <div class=\"js-node-type-field hidden\" data-node-type=\"cms_page\">
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 28, $this->source); })()), "cms_page_url", [], "any", false, false, false, 28), 'row', ["url" => call_user_func_array($this->env->getFunction('url')->getCallable(), ["/navigation-gui/url-suggestion/cms-page", ["id-locale" => twig_get_attribute($this->env, $this->source, (isset($context["localeTransfer"]) || array_key_exists("localeTransfer", $context) ? $context["localeTransfer"] : (function () { throw new RuntimeError('Variable "localeTransfer" does not exist.', 28, $this->source); })()), "idLocale", [], "any", false, false, false, 28)]])]);
        echo "
                        </div>

                        <div class=\"js-node-type-field hidden\" data-node-type=\"category\">
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 32, $this->source); })()), "category_url", [], "any", false, false, false, 32), 'row', ["url" => call_user_func_array($this->env->getFunction('url')->getCallable(), ["/navigation-gui/url-suggestion/category", ["id-locale" => twig_get_attribute($this->env, $this->source, (isset($context["localeTransfer"]) || array_key_exists("localeTransfer", $context) ? $context["localeTransfer"] : (function () { throw new RuntimeError('Variable "localeTransfer" does not exist.', 32, $this->source); })()), "idLocale", [], "any", false, false, false, 32)]])]);
        echo "
                        </div>

                        <div class=\"form-group ";
        // line 35
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 35, $this->source); })()), "css_class", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "errors", [], "any", false, false, false, 35))) {
            echo "has-error";
        }
        echo "\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 36, $this->source); })()), "css_class", [], "any", false, false, false, 36), 'label');
        echo "
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 37, $this->source); })()), "css_class", [], "any", false, false, false, 37), 'widget', ["attr" => ["data-translation-key" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 37, $this->source); })()), "css_class", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37)]]);
        echo "
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 38, $this->source); })()), "css_class", [], "any", false, false, false, 38), 'errors');
        echo "
                        </div>

                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["navigationNodeLocalizedAttributes"]) || array_key_exists("navigationNodeLocalizedAttributes", $context) ? $context["navigationNodeLocalizedAttributes"] : (function () { throw new RuntimeError('Variable "navigationNodeLocalizedAttributes" does not exist.', 41, $this->source); })()), 'rest');
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Node/_partials/navigation-node-form-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 41,  307 => 38,  303 => 37,  299 => 36,  293 => 35,  287 => 32,  280 => 28,  273 => 24,  266 => 20,  259 => 16,  255 => 15,  251 => 14,  244 => 13,  240 => 12,  229 => 7,  130 => 52,  125 => 50,  121 => 49,  117 => 47,  103 => 46,  89 => 45,  86 => 44,  84 => 9,  83 => 8,  81 => 7,  78 => 6,  60 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_row(navigationNodeForm.node_type) }}

<div class=\"form-group\">
    {% for localeTransfer in localeCollection %}
        {% for navigationNodeLocalizedAttributes in navigationNodeForm.navigation_node_localized_attributes %}
            {% if localeTransfer.idLocale == navigationNodeLocalizedAttributes.fk_locale.vars.value %}
                {% embed '@Gui/Partials/localized-ibox.twig' with {
                    'id': 'localized_attributes_container-' ~ localeTransfer.localeName,
                    'localeName': localeTransfer.localeName,
                    'collapsed': false
                } %}
                    {% block content %}
                        <div class=\"form-group {% if navigationNodeLocalizedAttributes.title.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(navigationNodeLocalizedAttributes.title) }}
                            {{ form_widget(navigationNodeLocalizedAttributes.title, {'attr': {'class': 'name-translation', 'data-translation-key': navigationNodeLocalizedAttributes.title.vars.name}}) }}
                            {{ form_errors(navigationNodeLocalizedAttributes.title) }}
                        </div>

                        <div class=\"js-node-type-field hidden\" data-node-type=\"link\">
                            {{ form_row(navigationNodeLocalizedAttributes.link) }}
                        </div>

                        <div class=\"js-node-type-field hidden\" data-node-type=\"external_url\">
                            {{ form_row(navigationNodeLocalizedAttributes.external_url) }}
                        </div>

                        <div class=\"js-node-type-field hidden\" data-node-type=\"cms_page\">
                            {{ form_row(navigationNodeLocalizedAttributes.cms_page_url, {'url': url('/navigation-gui/url-suggestion/cms-page', {'id-locale': localeTransfer.idLocale})}) }}
                        </div>

                        <div class=\"js-node-type-field hidden\" data-node-type=\"category\">
                            {{ form_row(navigationNodeLocalizedAttributes.category_url, {'url': url('/navigation-gui/url-suggestion/category', {'id-locale': localeTransfer.idLocale})}) }}
                        </div>

                        <div class=\"form-group {% if navigationNodeLocalizedAttributes.css_class.vars.errors|length %}has-error{% endif %}\">
                            {{ form_label(navigationNodeLocalizedAttributes.css_class) }}
                            {{ form_widget(navigationNodeLocalizedAttributes.css_class, {'attr': {'data-translation-key': navigationNodeLocalizedAttributes.css_class.vars.name}}) }}
                            {{ form_errors(navigationNodeLocalizedAttributes.css_class) }}
                        </div>

                        {{ form_rest(navigationNodeLocalizedAttributes) }}
                    {% endblock %}
                {% endembed %}
            {% endif %}
        {% endfor %}
    {% endfor %}
</div>

{{ form_row(navigationNodeForm.valid_from) }}
{{ form_row(navigationNodeForm.valid_to) }}

{{ form_widget(navigationNodeForm.is_active) }}
", "@NavigationGui/Node/_partials/navigation-node-form-content.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Node/_partials/navigation-node-form-content.twig");
    }
}
