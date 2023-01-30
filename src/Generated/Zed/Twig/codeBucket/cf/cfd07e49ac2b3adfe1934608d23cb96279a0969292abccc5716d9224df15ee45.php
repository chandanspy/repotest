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

/* @ProductManagement/Product/_partials/variant-tab-adding.twig */
class __TwigTemplate_f0e1aacd97976243cae24ca45563c811a5e32a6ed21bc36e02ee11a924468699 extends Template
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
        if ((0 === twig_compare((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1, $this->source); })()), "bundle"))) {
            // line 2
            echo "
    <div class=\"well\">
        ";
            // line 4
            ob_start();
            // line 5
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product bundle does not have variants!"), "html", null, true);
            echo "</p>
        ";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 4
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_0_);
            // line 7
            echo "    </div>

    ";
            // line 9
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "attribute_super", [], "any", false, false, false, 9), "setRendered", [], "any", false, false, false, 9);
            // line 10
            echo "
";
        } else {
            // line 12
            echo "
    <div class=\"well\">
        ";
            // line 14
            $___internal_parse_1_ = ('' === $tmp = "            <h3>Manage product variants</h3>
            <p>For the creation of product variants, start by selecting attributes and values that define the difference between your variations. Below only those attributes are listed that are marked as being super attributes.</p>
            <p><i>Note: The super attributes that are assigned to a product variant when its created cannot be changed afterwards anymore.</i></p>
        ") ? '' : new Markup($tmp, $this->env->getCharset());
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($___internal_parse_1_);
            // line 19
            echo "    </div>

    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "attribute_super", [], "any", false, false, false, 21));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["inputGroup"]) {
                // line 22
                echo "        ";
                $this->loadTemplate("@ProductManagement/Product/_partials/input-group.twig", "@ProductManagement/Product/_partials/variant-tab-adding.twig", 22)->display($context);
                // line 23
                echo "    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 24
                echo "        <div class=\"alert alert-warning\">
            ";
                // line 25
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no super attribute defined. <a href=\"%url%\">Define super attributes</a> in order to be able to create variants.", ["%url%" => call_user_func_array($this->env->getFunction('url')->getCallable(), ["/product-management/attribute"])]);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inputGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@ProductManagement/Product/_partials/variant-tab-adding.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 28,  114 => 25,  111 => 24,  98 => 23,  95 => 22,  77 => 21,  73 => 19,  67 => 14,  63 => 12,  59 => 10,  57 => 9,  53 => 7,  51 => 4,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if type == \"bundle\" %}

    <div class=\"well\">
        {% apply trans|raw %}
            <p>{{ 'Product bundle does not have variants!' | trans }}</p>
        {% endapply %}
    </div>

    {% do form.attribute_super.setRendered %}

{% else %}

    <div class=\"well\">
        {% apply trans|raw %}
            <h3>Manage product variants</h3>
            <p>For the creation of product variants, start by selecting attributes and values that define the difference between your variations. Below only those attributes are listed that are marked as being super attributes.</p>
            <p><i>Note: The super attributes that are assigned to a product variant when its created cannot be changed afterwards anymore.</i></p>
        {% endapply %}
    </div>

    {% for inputGroup in form.attribute_super %}
        {% include '@ProductManagement/Product/_partials/input-group.twig' %}
    {% else %}
        <div class=\"alert alert-warning\">
            {{ ('There is no super attribute defined. <a href=\"%url%\">Define super attributes</a> in order to be able to create variants.' | trans({'%url%': url('/product-management/attribute')})) | raw }}
        </div>
    {% endfor %}

{% endif %}
", "@ProductManagement/Product/_partials/variant-tab-adding.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//Product/_partials/variant-tab-adding.twig");
    }
}
