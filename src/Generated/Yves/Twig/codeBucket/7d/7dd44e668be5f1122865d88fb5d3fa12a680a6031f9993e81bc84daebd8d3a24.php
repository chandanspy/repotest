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

/* @HelloWorld/views/subscription/index.twig */
class __TwigTemplate_f46fc85828ce35d677699081c7a149c5ffe26af17d5cf1a6ba81c6e191ddf137 extends Template
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
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-layout-main"]), "@HelloWorld/views/subscription/index.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
if (!array_key_exists('formdata', $context)) {$context['formdata'] = [];}$context['formdata'] = array_replace_recursive(["subscriptionform" => twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 4, $this->source); })()), "formdata", [], "any", false, false, false, 4)], $context['formdata']);        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"col col--right\">
  ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formdata"]) || array_key_exists("formdata", $context) ? $context["formdata"] : (function () { throw new RuntimeError('Variable "formdata" does not exist.', 9, $this->source); })()), "subscriptionform", [], "any", false, false, false, 9), 'form_start');
        echo "    
  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formdata"]) || array_key_exists("formdata", $context) ? $context["formdata"] : (function () { throw new RuntimeError('Variable "formdata" does not exist.', 10, $this->source); })()), "subscriptionform", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), 'row');
        echo "
  ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formdata"]) || array_key_exists("formdata", $context) ? $context["formdata"] : (function () { throw new RuntimeError('Variable "formdata" does not exist.', 11, $this->source); })()), "subscriptionform", [], "any", false, false, false, 11), "message", [], "any", false, false, false, 11), 'row');
        echo "
  



<button type=\"submit\" class=\"btn btn-success button button--tight button--medium header__login\" style = \"margin:20px\">Submit</button>
</div>
";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formdata"]) || array_key_exists("formdata", $context) ? $context["formdata"] : (function () { throw new RuntimeError('Variable "formdata" does not exist.', 18, $this->source); })()), "subscriptionform", [], "any", false, false, false, 18), 'errors');
        echo "
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formdata"]) || array_key_exists("formdata", $context) ? $context["formdata"] : (function () { throw new RuntimeError('Variable "formdata" does not exist.', 19, $this->source); })()), "subscriptionform", [], "any", false, false, false, 19), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "@HelloWorld/views/subscription/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  73 => 18,  63 => 11,  59 => 10,  55 => 9,  52 => 8,  48 => 7,  44 => 1,  43 => 4,  42 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template(\"page-layout-main\") %}

{% define formdata={
  subscriptionform:_view.formdata,
} %}

{% block content %}
<div class=\"col col--right\">
  {{form_start(formdata.subscriptionform)}}    
  {{form_row(formdata.subscriptionform.name)}}
  {{form_row(formdata.subscriptionform.message)}}
  



<button type=\"submit\" class=\"btn btn-success button button--tight button--medium header__login\" style = \"margin:20px\">Submit</button>
</div>
{{form_errors(formdata.subscriptionform)}}
{{form_end(formdata.subscriptionform)}}

{% endblock %}
", "@HelloWorld/views/subscription/index.twig", "/data/src/Pyz/Yves/HelloWorld/Theme/default/views/subscription/index.twig");
    }
}
