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

/* @ProductAlternativeGui/ProductAlternative/blocks/product-alternatives-table.twig */
class __TwigTemplate_13aeed586092462f94dc3896eec45a1e2a5d14508e9aa9734cf1b50a51a0b32b extends Template
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
        if ( !twig_test_empty((isset($context["productAlternatives"]) || array_key_exists("productAlternatives", $context) ? $context["productAlternatives"] : (function () { throw new RuntimeError('Variable "productAlternatives" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "    <table class=\"table table-bordered table-striped table-sm\">
        ";
            // line 3
            ob_start();
            // line 4
            echo "            <thead>
            <tr>
                <th colspan=\"7\">List of Alternative products</th>
            </tr>
            </thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>SKU</th>
                <th>Categories</th>
                <th>Product Type</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productAlternatives"]) || array_key_exists("productAlternatives", $context) ? $context["productAlternatives"] : (function () { throw new RuntimeError('Variable "productAlternatives" does not exist.', 18, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["productAlternative"]) {
                // line 19
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["productAlternative"], "type", [], "any", false, false, false, 19), "Abstract"))) {
                    // line 20
                    echo "                <tr>
                    ";
                    // line 21
                    $this->loadTemplate("@ProductAlternativeGui/ProductAlternative/blocks/product-alternatives-table-item.twig", "@ProductAlternativeGui/ProductAlternative/blocks/product-alternatives-table.twig", 21)->display($context);
                    // line 22
                    echo "                </tr>
                ";
                }
                // line 24
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productAlternative'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productAlternatives"]) || array_key_exists("productAlternatives", $context) ? $context["productAlternatives"] : (function () { throw new RuntimeError('Variable "productAlternatives" does not exist.', 25, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["productAlternative"]) {
                // line 26
                echo "                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["productAlternative"], "type", [], "any", false, false, false, 26), "Concrete"))) {
                    // line 27
                    echo "                <tr>
                    ";
                    // line 28
                    $this->loadTemplate("@ProductAlternativeGui/ProductAlternative/blocks/product-alternatives-table-item.twig", "@ProductAlternativeGui/ProductAlternative/blocks/product-alternatives-table.twig", 28)->display($context);
                    // line 29
                    echo "                </tr>
                ";
                }
                // line 31
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productAlternative'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
            $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 3
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_4_);
            // line 33
            echo "    </table>
";
        }
    }

    public function getTemplateName()
    {
        return "@ProductAlternativeGui/ProductAlternative/blocks/product-alternatives-table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 33,  150 => 3,  147 => 32,  133 => 31,  129 => 29,  127 => 28,  124 => 27,  121 => 26,  103 => 25,  89 => 24,  85 => 22,  83 => 21,  80 => 20,  77 => 19,  60 => 18,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if productAlternatives is not empty %}
    <table class=\"table table-bordered table-striped table-sm\">
        {% apply trans|raw %}
            <thead>
            <tr>
                <th colspan=\"7\">List of Alternative products</th>
            </tr>
            </thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>SKU</th>
                <th>Categories</th>
                <th>Product Type</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            {% for productAlternative in productAlternatives %}
                {% if productAlternative.type == 'Abstract' %}
                <tr>
                    {% include '@ProductAlternativeGui/ProductAlternative/blocks/product-alternatives-table-item.twig' %}
                </tr>
                {% endif %}
            {% endfor %}
            {% for productAlternative in productAlternatives %}
                {% if productAlternative.type == 'Concrete' %}
                <tr>
                    {% include '@ProductAlternativeGui/ProductAlternative/blocks/product-alternatives-table-item.twig' %}
                </tr>
                {% endif %}
            {% endfor %}
        {% endapply %}
    </table>
{% endif %}
", "@ProductAlternativeGui/ProductAlternative/blocks/product-alternatives-table.twig", "/data/vendor/spryker/product-alternative-gui/src/Spryker/Zed/ProductAlternativeGui/Presentation//ProductAlternative/blocks/product-alternatives-table.twig");
    }
}
