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

/* @ShopUi/templates/page-critical-path/page-critical-path.twig */
class __TwigTemplate_99b376c7407a46c3fb061aea5bc6685633741550c04c0540be226dc8a8b6bb58 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nonCriticalStyles' => [$this, 'block_nonCriticalStyles'],
            'styleLazyLoader' => [$this, 'block_styleLazyLoader'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-main"]), "@ShopUi/templates/page-critical-path/page-critical-path.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_nonCriticalStyles($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), "hasCookies", [], "any", false, false, false, 4)) {
            // line 5
            echo "        ";
            $this->displayParentBlock("nonCriticalStyles", $context, $blocks);
            echo "
    ";
        } else {
            // line 7
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["css/yves_default.util.css"]), "html", null, true);
            echo "\">
    ";
        }
    }

    // line 11
    public function block_styleLazyLoader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 12, $this->source); })()), "hasCookies", [], "any", false, false, false, 12)) {
            // line 13
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["style-loader"]), "@ShopUi/templates/page-critical-path/page-critical-path.twig", 13)->display(twig_to_array(["attributes" => ["path-to-css" => call_user_func_array($this->env->getFunction('publicPath')->getCallable(), ["css/yves_default.non-critical.css"])]]));
            // line 18
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "@ShopUi/templates/page-critical-path/page-critical-path.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  74 => 13,  71 => 12,  67 => 11,  59 => 7,  53 => 5,  50 => 4,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-layout-main') %}

{% block nonCriticalStyles %}
    {% if data.hasCookies %}
        {{ parent() }}
    {% else %}
        <link rel=\"stylesheet\" href=\"{{ publicPath('css/yves_default.util.css') }}\">
    {% endif %}
{% endblock %}

{% block styleLazyLoader %}
    {% if not data.hasCookies %}
        {% include molecule('style-loader') with {
            attributes: {
                'path-to-css': publicPath('css/yves_default.non-critical.css'),
            },
        } only %}
    {% endif %}
{% endblock %}
", "@ShopUi/templates/page-critical-path/page-critical-path.twig", "/data/vendor/spryker-shop/shop-ui/src/SprykerShop/Yves/ShopUi/Theme/default/templates/page-critical-path/page-critical-path.twig");
    }
}
