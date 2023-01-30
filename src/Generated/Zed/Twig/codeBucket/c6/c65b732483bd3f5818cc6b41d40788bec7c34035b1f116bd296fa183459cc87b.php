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

/* @CompanyBusinessUnitGui/CompanyUser/company_business_unit.twig */
class __TwigTemplate_4ba05f26e66e731e1124652ef9959486c6e972f2a210e6e2bb4c7d5a27360182 extends Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'widget', ["id" => "company-user_fk_company_business_unit", "attr" => ["data-url" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "url", [], "any", false, false, false, 3)]]);
        // line 4
        echo "

<script src=\"";
        // line 6
        echo call_user_func_array($this->env->getFunction('assetsPath')->getCallable(), ["js/spryker-zed-company-user-business-unit-gui-main.js"]);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@CompanyBusinessUnitGui/CompanyUser/company_business_unit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  40 => 4,  38 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_widget(form, {
    'id': 'company-user_fk_company_business_unit',
    'attr': {'data-url':  form.vars.url}
}) }}

<script src=\"{{ assetsPath('js/spryker-zed-company-user-business-unit-gui-main.js') }}\"></script>
", "@CompanyBusinessUnitGui/CompanyUser/company_business_unit.twig", "/data/vendor/spryker/company-business-unit-gui/src/Spryker/Zed/CompanyBusinessUnitGui/Presentation/CompanyUser/company_business_unit.twig");
    }
}
