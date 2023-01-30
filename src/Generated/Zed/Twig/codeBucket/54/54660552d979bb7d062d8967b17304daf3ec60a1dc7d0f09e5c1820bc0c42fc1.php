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

/* @CompanyRoleGui/CompanyUser/company_role.twig */
class __TwigTemplate_7daed84dd2113f12f8144a4b936222c579c8334f006ff09d4f32c498ac12bcd1 extends Template
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
        echo "<div id=\"company-user_company_role_collection\">
    <div class=\"form-group\">
        <label>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assigned Roles"), "html", null, true);
        echo " *</label>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 5
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 5), "data", [], "any", false, false, false, 5)) {
                // line 6
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
            ";
            }
            // line 8
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </div>
    <div class=\"form-group\">
        <label>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unassigned Roles"), "html", null, true);
        echo "</label>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 13
            echo "            ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 13), "data", [], "any", false, false, false, 13)) {
                // line 14
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
            ";
            }
            // line 16
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </div>
</div>

<script src=\"";
        // line 20
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-company-user-role-gui-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@CompanyRoleGui/CompanyUser/company_role.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 20,  91 => 17,  85 => 16,  79 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 9,  58 => 8,  52 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"company-user_company_role_collection\">
    <div class=\"form-group\">
        <label>{{ 'Assigned Roles' | trans }} *</label>
        {% for child in form %}
            {% if child.vars.data %}
                {{ form_widget(child) }}
            {% endif %}
        {% endfor %}
    </div>
    <div class=\"form-group\">
        <label>{{ 'Unassigned Roles' | trans }}</label>
        {% for child in form %}
            {% if not child.vars.data %}
                {{ form_widget(child) }}
            {% endif %}
        {% endfor %}
    </div>
</div>

<script src=\"{{ assetsPath('js/spryker-zed-company-user-role-gui-main.js') }}\"></script>
", "@CompanyRoleGui/CompanyUser/company_role.twig", "/data/vendor/spryker/company-role-gui/src/Spryker/Zed/CompanyRoleGui/Presentation/CompanyUser/company_role.twig");
    }
}
