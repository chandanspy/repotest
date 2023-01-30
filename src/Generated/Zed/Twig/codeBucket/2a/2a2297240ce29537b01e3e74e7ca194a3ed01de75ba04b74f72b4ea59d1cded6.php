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

/* @contentGui/assets/index.twig */
class __TwigTemplate_cb020498f983040181e71cfd486f00d2ccbd2586c98fe665de869aba0067f0d2 extends Template
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
        $context["dropdownItems"] = [];
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["editorContentTypes"]) || array_key_exists("editorContentTypes", $context) ? $context["editorContentTypes"] : (function () { throw new RuntimeError('Variable "editorContentTypes" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["editorContentType"]) {
            // line 3
            echo "    ";
            $context["dropdownItems"] = twig_array_merge((isset($context["dropdownItems"]) || array_key_exists("dropdownItems", $context) ? $context["dropdownItems"] : (function () { throw new RuntimeError('Variable "dropdownItems" does not exist.', 3, $this->source); })()), [0 => ["name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 4
$context["editorContentType"]), "type" =>             // line 5
$context["editorContentType"]]]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['editorContentType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "<script>
    window.editorConfiguration = window.editorConfiguration || {};

    window.editorConfiguration.contentGuiConfigData = {
        dropDownItems: ";
        // line 12
        echo json_encode((isset($context["dropdownItems"]) || array_key_exists("dropdownItems", $context) ? $context["dropdownItems"] : (function () { throw new RuntimeError('Variable "dropdownItems" does not exist.', 12, $this->source); })()));
        echo ",
        dialogContentUrl: '/content-gui/list-content-by-type',
        contentItemUrl: '/content-gui/edit-content',
        buttonTitle: '";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Content Item"), "html", null, true);
        echo "',
        title: '";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Insert a Content Item"), "html", null, true);
        echo "',
        insertButtonTitle: '";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Insert"), "html", null, true);
        echo "',
        editorContentWidgetTemplate: '";
        // line 18
        echo (isset($context["editorContentWidgetTemplate"]) || array_key_exists("editorContentWidgetTemplate", $context) ? $context["editorContentWidgetTemplate"] : (function () { throw new RuntimeError('Variable "editorContentWidgetTemplate" does not exist.', 18, $this->source); })());
        echo "',
        popoverButtons: {
            editWidget: {
                icon: '<i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>',
                title: '";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Widget"), "html", null, true);
        echo "'
            },
            editContentItem: {
                icon: '<i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>',
                title: '";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Content Item"), "html", null, true);
        echo "'
            },
            removeContentItem: {
                icon: '<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>',
                title: ''
            }
        },
        maxWidgetNumber: ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["maxWidgetNumber"]) || array_key_exists("maxWidgetNumber", $context) ? $context["maxWidgetNumber"] : (function () { throw new RuntimeError('Variable "maxWidgetNumber" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "
    };
</script>

<script src=\"";
        // line 37
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-content-item.js"]);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 38
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["css/spryker-zed-content-item.css"]);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "@contentGui/assets/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 38,  107 => 37,  100 => 33,  90 => 26,  83 => 22,  76 => 18,  72 => 17,  68 => 16,  64 => 15,  58 => 12,  52 => 8,  46 => 5,  45 => 4,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set dropdownItems = [] %}
{% for editorContentType in editorContentTypes %}
    {% set dropdownItems = dropdownItems | merge([{
        name: editorContentType | trans,
        type: editorContentType
    }]) %}
{% endfor %}
<script>
    window.editorConfiguration = window.editorConfiguration || {};

    window.editorConfiguration.contentGuiConfigData = {
        dropDownItems: {{ dropdownItems | json_encode | raw }},
        dialogContentUrl: '/content-gui/list-content-by-type',
        contentItemUrl: '/content-gui/edit-content',
        buttonTitle: '{{ 'Content Item' | trans }}',
        title: '{{ 'Insert a Content Item' | trans }}',
        insertButtonTitle: '{{ 'Insert' | trans }}',
        editorContentWidgetTemplate: '{{ editorContentWidgetTemplate | raw }}',
        popoverButtons: {
            editWidget: {
                icon: '<i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>',
                title: '{{ 'Edit Widget' | trans }}'
            },
            editContentItem: {
                icon: '<i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>',
                title: '{{ 'Edit Content Item' | trans }}'
            },
            removeContentItem: {
                icon: '<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>',
                title: ''
            }
        },
        maxWidgetNumber: {{ maxWidgetNumber }}
    };
</script>

<script src=\"{{ assetsPath('js/spryker-zed-content-item.js') }}\"></script>
<link rel=\"stylesheet\" href=\"{{ assetsPath('css/spryker-zed-content-item.css') }}\" />
", "@contentGui/assets/index.twig", "/data/vendor/spryker/content-gui/src/Spryker/Zed/ContentGui/Presentation//Assets/index.twig");
    }
}
