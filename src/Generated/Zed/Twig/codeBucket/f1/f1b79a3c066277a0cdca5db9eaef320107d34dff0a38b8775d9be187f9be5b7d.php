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

/* @ProductSetGui/_partials/tabs/images.twig */
class __TwigTemplate_87c2b663a38c3fc8708ceabb5f759c6400c878de1f79a9b494905f579517b4a1 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 1, $this->source); })()), "images_form", [], "any", false, false, false, 1));
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
        foreach ($context['_seq'] as $context["_key"] => $context["imageSetCollectionForm"]) {
            // line 2
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["imageSetCollectionForm"], "vars", [], "any", false, false, false, 2), "attr", [], "any", false, false, false, 2), "localeName", [], "any", false, false, false, 2)) {
                // line 3
                echo "
        ";
                // line 4
                $this->loadTemplate("@ProductSetGui/_partials/tabs/images.twig", "@ProductSetGui/_partials/tabs/images.twig", 4, "1762206664")->display(twig_array_merge($context, ["collapsed" => false]));
                // line 16
                echo "    ";
            } else {
                // line 17
                echo "
        ";
                // line 18
                $this->loadTemplate("@ProductSetGui/_partials/tabs/images.twig", "@ProductSetGui/_partials/tabs/images.twig", 18, "1087136445")->display(twig_array_merge($context, ["collapsed" => true, "localeName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["imageSetCollectionForm"], "vars", [], "any", false, false, false, 18), "attr", [], "any", false, false, false, 18), "localeName", [], "any", false, false, false, 18)]));
                // line 27
                echo "    ";
            }
            // line 28
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imageSetCollectionForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 31, $this->source); })()), "images_form", [], "any", false, false, false, 31), 'rest');
        echo "

";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/_partials/tabs/images.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 31,  88 => 30,  73 => 28,  70 => 27,  68 => 18,  65 => 17,  62 => 16,  60 => 4,  57 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for imageSetCollectionForm in productSetForm.images_form %}
    {% if not imageSetCollectionForm.vars.attr.localeName %}

        {% embed '@Gui/Partials/ibox.twig' with {'collapsed': false} %}
            {% block title %}
                {{ 'Default' | trans }}
            {% endblock %}
            {% block content %}

                {% include '@ProductSetGui/_partials/form/image-set-collection-form.twig' with {
                    imageSetCollectionForm: imageSetCollectionForm,
                    rootForm: productSetForm
                } %}
            {% endblock %}
        {% endembed %}
    {% else %}

        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': true, 'localeName': imageSetCollectionForm.vars.attr.localeName} %}
            {% block content %}

                {% include '@ProductSetGui/_partials/form/image-set-collection-form.twig' with {
                    imageSetCollectionForm: imageSetCollectionForm,
                    rootForm: productSetForm
                } %}
            {% endblock %}
        {% endembed %}
    {% endif %}

{% endfor %}

{{ form_rest(productSetForm.images_form) }}

", "@ProductSetGui/_partials/tabs/images.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//_partials/tabs/images.twig");
    }
}


/* @ProductSetGui/_partials/tabs/images.twig */
class __TwigTemplate_87c2b663a38c3fc8708ceabb5f759c6400c878de1f79a9b494905f579517b4a1___1762206664 extends Template
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
        // line 4
        return "@Gui/Partials/ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/ibox.twig", "@ProductSetGui/_partials/tabs/images.twig", 4);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "                ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Default"), "html", null, true);
        echo "
            ";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
                ";
        // line 10
        $this->loadTemplate("@ProductSetGui/_partials/form/image-set-collection-form.twig", "@ProductSetGui/_partials/tabs/images.twig", 10)->display(twig_array_merge($context, ["imageSetCollectionForm" =>         // line 11
(isset($context["imageSetCollectionForm"]) || array_key_exists("imageSetCollectionForm", $context) ? $context["imageSetCollectionForm"] : (function () { throw new RuntimeError('Variable "imageSetCollectionForm" does not exist.', 11, $this->source); })()), "rootForm" =>         // line 12
(isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 12, $this->source); })())]));
        // line 14
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/_partials/tabs/images.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 14,  203 => 12,  202 => 11,  201 => 10,  198 => 9,  194 => 8,  187 => 6,  183 => 5,  172 => 4,  91 => 31,  88 => 30,  73 => 28,  70 => 27,  68 => 18,  65 => 17,  62 => 16,  60 => 4,  57 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for imageSetCollectionForm in productSetForm.images_form %}
    {% if not imageSetCollectionForm.vars.attr.localeName %}

        {% embed '@Gui/Partials/ibox.twig' with {'collapsed': false} %}
            {% block title %}
                {{ 'Default' | trans }}
            {% endblock %}
            {% block content %}

                {% include '@ProductSetGui/_partials/form/image-set-collection-form.twig' with {
                    imageSetCollectionForm: imageSetCollectionForm,
                    rootForm: productSetForm
                } %}
            {% endblock %}
        {% endembed %}
    {% else %}

        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': true, 'localeName': imageSetCollectionForm.vars.attr.localeName} %}
            {% block content %}

                {% include '@ProductSetGui/_partials/form/image-set-collection-form.twig' with {
                    imageSetCollectionForm: imageSetCollectionForm,
                    rootForm: productSetForm
                } %}
            {% endblock %}
        {% endembed %}
    {% endif %}

{% endfor %}

{{ form_rest(productSetForm.images_form) }}

", "@ProductSetGui/_partials/tabs/images.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//_partials/tabs/images.twig");
    }
}


/* @ProductSetGui/_partials/tabs/images.twig */
class __TwigTemplate_87c2b663a38c3fc8708ceabb5f759c6400c878de1f79a9b494905f579517b4a1___1087136445 extends Template
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
        // line 18
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductSetGui/_partials/tabs/images.twig", 18);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
                ";
        // line 21
        $this->loadTemplate("@ProductSetGui/_partials/form/image-set-collection-form.twig", "@ProductSetGui/_partials/tabs/images.twig", 21)->display(twig_array_merge($context, ["imageSetCollectionForm" =>         // line 22
(isset($context["imageSetCollectionForm"]) || array_key_exists("imageSetCollectionForm", $context) ? $context["imageSetCollectionForm"] : (function () { throw new RuntimeError('Variable "imageSetCollectionForm" does not exist.', 22, $this->source); })()), "rootForm" =>         // line 23
(isset($context["productSetForm"]) || array_key_exists("productSetForm", $context) ? $context["productSetForm"] : (function () { throw new RuntimeError('Variable "productSetForm" does not exist.', 23, $this->source); })())]));
        // line 25
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@ProductSetGui/_partials/tabs/images.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 25,  302 => 23,  301 => 22,  300 => 21,  297 => 20,  293 => 19,  282 => 18,  205 => 14,  203 => 12,  202 => 11,  201 => 10,  198 => 9,  194 => 8,  187 => 6,  183 => 5,  172 => 4,  91 => 31,  88 => 30,  73 => 28,  70 => 27,  68 => 18,  65 => 17,  62 => 16,  60 => 4,  57 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for imageSetCollectionForm in productSetForm.images_form %}
    {% if not imageSetCollectionForm.vars.attr.localeName %}

        {% embed '@Gui/Partials/ibox.twig' with {'collapsed': false} %}
            {% block title %}
                {{ 'Default' | trans }}
            {% endblock %}
            {% block content %}

                {% include '@ProductSetGui/_partials/form/image-set-collection-form.twig' with {
                    imageSetCollectionForm: imageSetCollectionForm,
                    rootForm: productSetForm
                } %}
            {% endblock %}
        {% endembed %}
    {% else %}

        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': true, 'localeName': imageSetCollectionForm.vars.attr.localeName} %}
            {% block content %}

                {% include '@ProductSetGui/_partials/form/image-set-collection-form.twig' with {
                    imageSetCollectionForm: imageSetCollectionForm,
                    rootForm: productSetForm
                } %}
            {% endblock %}
        {% endembed %}
    {% endif %}

{% endfor %}

{{ form_rest(productSetForm.images_form) }}

", "@ProductSetGui/_partials/tabs/images.twig", "/data/vendor/spryker/product-set-gui/src/Spryker/Zed/ProductSetGui/Presentation//_partials/tabs/images.twig");
    }
}
