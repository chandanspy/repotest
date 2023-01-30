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

/* table-data-order.twig */
class __TwigTemplate_0a4fdb012430c40e4bed2ad9b905c06e021122c25913ea807a9baf6c1ffbeb9c extends Template
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
        echo "data-order='[";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 2, $this->source); })()), "order", [], "any", false, false, false, 2));
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
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 3
            echo "    [\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "column", [], "any", false, false, false, 3), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "dir", [], "any", false, false, false, 3), "html", null, true);
            echo "\"]
    ";
            // line 4
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 4)) {
                echo ",";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "]'
";
    }

    public function getTemplateName()
    {
        return "table-data-order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 6,  63 => 4,  56 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("data-order='[
{%- for order in config.order %}
    [\"{{ order.column }}\", \"{{ order.dir }}\"]
    {% if not loop.last %},{% endif %}
{% endfor -%}
]'
", "table-data-order.twig", "/data/vendor/spryker/gui/src/Spryker/Zed/Gui/Presentation/Table/table-data-order.twig");
    }
}
