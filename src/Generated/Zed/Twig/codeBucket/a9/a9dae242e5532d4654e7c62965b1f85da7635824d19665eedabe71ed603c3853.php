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

/* @NavigationGui/Index/_partials/navigation-tree.twig */
class __TwigTemplate_641714cc78e9fc88f80b413916f17c2bdbeb5088a81e189ff3e876387dfbe823 extends Template
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
        $this->loadTemplate("@NavigationGui/_partials/progressbar.twig", "@NavigationGui/Index/_partials/navigation-tree.twig", 1)->display(twig_array_merge($context, ["idProgressbar" => "navigation-tree-loader"]));
        // line 2
        echo "
<div id=\"navigation-tree-container\" class=\"ibox hidden\">

    <div class=\"ibox-title\">
        <h5>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Navigation tree"), "html", null, true);
        echo "</h5>
        <div class=\"pull-right\">
            <label>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo ": <input type=\"text\" id=\"navigation-tree-search-field\" class=\"input\" /></label>
        </div>
    </div>

    <div class=\"ibox-content\">
        <div class=\"alert alert-info alert-dismissable\">
            <button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
            ";
        // line 15
        ob_start();
        // line 16
        echo "                <ul>
                    <li>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If a navigation node is inactive, then this item and all navigation items under this one will not be visible."), "html", null, true);
        echo "</li>
                    <li>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can drag and drop to define item order."), "html", null, true);
        echo "</li>
                </ul>
            ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_0_);
        // line 21
        echo "        </div>

        <div id=\"navigation-tree-content\"></div>
    </div>

    <div class=\"ibox-footer clearfix\">
            <input type=\"button\" id=\"navigation-tree-save-btn\" class=\"btn btn-primary pull-left m-r-sm\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save order"), "html", null, true);
        echo "\" disabled=\"disabled\" />
            ";
        // line 28
        $this->loadTemplate("@NavigationGui/_partials/progressbar.twig", "@NavigationGui/Index/_partials/navigation-tree.twig", 28)->display(twig_array_merge($context, ["idProgressbar" => "navigation-tree-update-loader", "navigationProgressbarClass" => "progress-inline"]));
        // line 32
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@NavigationGui/Index/_partials/navigation-tree.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  89 => 28,  85 => 27,  77 => 21,  75 => 15,  69 => 18,  65 => 17,  62 => 16,  60 => 15,  50 => 8,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@NavigationGui/_partials/progressbar.twig' with {idProgressbar: 'navigation-tree-loader'} %}

<div id=\"navigation-tree-container\" class=\"ibox hidden\">

    <div class=\"ibox-title\">
        <h5>{{ 'Navigation tree' | trans }}</h5>
        <div class=\"pull-right\">
            <label>{{ 'Search' | trans }}: <input type=\"text\" id=\"navigation-tree-search-field\" class=\"input\" /></label>
        </div>
    </div>

    <div class=\"ibox-content\">
        <div class=\"alert alert-info alert-dismissable\">
            <button aria-hidden=\"true\" data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
            {% apply trans|raw %}
                <ul>
                    <li>{{ 'If a navigation node is inactive, then this item and all navigation items under this one will not be visible.' | trans }}</li>
                    <li>{{ 'You can drag and drop to define item order.' | trans }}</li>
                </ul>
            {% endapply %}
        </div>

        <div id=\"navigation-tree-content\"></div>
    </div>

    <div class=\"ibox-footer clearfix\">
            <input type=\"button\" id=\"navigation-tree-save-btn\" class=\"btn btn-primary pull-left m-r-sm\" value=\"{{ 'Save order' | trans }}\" disabled=\"disabled\" />
            {% include '@NavigationGui/_partials/progressbar.twig' with {
            idProgressbar: 'navigation-tree-update-loader',
            navigationProgressbarClass: 'progress-inline'
            } %}
    </div>
</div>
", "@NavigationGui/Index/_partials/navigation-tree.twig", "/data/vendor/spryker/navigation-gui/src/Spryker/Zed/NavigationGui/Presentation//Index/_partials/navigation-tree.twig");
    }
}
