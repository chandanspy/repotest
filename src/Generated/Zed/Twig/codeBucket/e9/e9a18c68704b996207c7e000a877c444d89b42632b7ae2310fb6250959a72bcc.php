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

/* @ProductManagement/Product/_partials/EditVariant/tab-product-bundles.twig */
class __TwigTemplate_5e8462d3b069ee35e4de0a629122c1cdc345121f7d9e84dcde15a474c2717351 extends Template
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
        echo (isset($context["bundledProductTable"]) || array_key_exists("bundledProductTable", $context) ? $context["bundledProductTable"] : (function () { throw new RuntimeError('Variable "bundledProductTable" does not exist.', 1, $this->source); })());
        echo "

<strong>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bundle availability based on assigned products:"), "html", null, true);
        echo " </strong>
";
        // line 4
        if ((array_key_exists("currentProduct", $context) && twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 4, $this->source); })()), "product_bundle", [], "any", false, false, false, 4))) {
            // line 5
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 5, $this->source); })()), "product_bundle", [], "any", false, false, false, 5), "is_never_out_of_stock", [], "any", false, false, false, 5)) {
                // line 6
                echo "         ";
                echo "Is never out of stock";
                echo "
    ";
            } else {
                // line 8
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 8, $this->source); })()), "product_bundle", [], "any", false, false, false, 8), "availability", [], "any", false, false, false, 8), "html", null, true);
                echo "
    ";
            }
            // line 10
            echo "
";
        }
        // line 12
        echo "
<br />

<h4> ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assigned products"), "html", null, true);
        echo "</h4>

<div class=\"form-group\"
     id=\"assigned-product-template\"
     data-value-count=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "assigned_bundled_products", [], "any", false, false, false, 19)), "html", null, true);
        echo "\"
     data-prototype=\"
           ";
        // line 21
        ob_start();
        // line 22
        echo "               ";
        echo twig_include($this->env, $context, "@ProductManagement/_partials/assign-bundled-product-template.twig", ["bundledProductForm" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "assigned_bundled_products", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "prototype", [], "any", false, false, false, 22)]);
        echo "
           ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        echo twig_escape_filter($this->env, $___internal_parse_3_);
        // line 23
        echo "\">
</div>

<div id=\"bundled-products\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "assigned_bundled_products", [], "any", false, false, false, 27));
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
        foreach ($context['_seq'] as $context["_key"] => $context["bundledProductForm"]) {
            // line 28
            echo "        ";
            echo twig_include($this->env, $context, "@ProductManagement/_partials/assign-bundled-product-template.twig", ["bundledProductForm" => $context["bundledProductForm"]]);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bundledProductForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</div>

";
        // line 32
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "assigned_bundled_products", [], "any", false, false, false, 32), "setRendered", [], "any", false, false, false, 32);
        // line 33
        echo "



";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/EditVariant/tab-product-bundles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 33,  138 => 32,  134 => 30,  117 => 28,  100 => 27,  94 => 23,  92 => 21,  86 => 22,  84 => 21,  79 => 19,  72 => 15,  67 => 12,  63 => 10,  57 => 8,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ bundledProductTable | raw }}

<strong>{{ \"Bundle availability based on assigned products:\" | trans }} </strong>
{% if currentProduct is defined and currentProduct.product_bundle %}
    {% if currentProduct.product_bundle.is_never_out_of_stock %}
         {{ 'Is never out of stock' }}
    {% else %}
        {{ currentProduct.product_bundle.availability }}
    {% endif %}

{% endif %}

<br />

<h4> {{ \"Assigned products\" | trans }}</h4>

<div class=\"form-group\"
     id=\"assigned-product-template\"
     data-value-count=\"{{ form.assigned_bundled_products|length  }}\"
     data-prototype=\"
           {% apply escape %}
               {{ include ('@ProductManagement/_partials/assign-bundled-product-template.twig', { 'bundledProductForm': form.assigned_bundled_products.vars.prototype }) }}
           {% endapply %}\">
</div>

<div id=\"bundled-products\">
    {% for bundledProductForm in form.assigned_bundled_products %}
        {{ include ('@ProductManagement/_partials/assign-bundled-product-template.twig', { 'bundledProductForm': bundledProductForm }) }}
    {% endfor %}
</div>

{% do form.assigned_bundled_products.setRendered %}




", "@ProductManagement/Product/_partials/EditVariant/tab-product-bundles.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/EditVariant/tab-product-bundles.twig");
    }
}
