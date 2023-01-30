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

/* @StoreLocations/Store/addnewstore.twig */
class __TwigTemplate_7b2c4e613b39c17a7b9179caf7475aeae7e7174acac244add498393e6dd8e730 extends Template
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
        // line 10
        return "@Gui/Layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Layout/layout.twig", "@StoreLocations/Store/addnewstore.twig", 10);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
    ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["addnewstore"]) || array_key_exists("addnewstore", $context) ? $context["addnewstore"] : (function () { throw new RuntimeError('Variable "addnewstore" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "

";
        // line 15
        $this->loadTemplate("@StoreLocations/Store/Form/storeform.twig", "@StoreLocations/Store/addnewstore.twig", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "@StoreLocations/Store/addnewstore.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  53 => 13,  50 => 12,  46 => 11,  35 => 10,);
    }

    public function getSourceContext()
    {
        return new Source(" {# {% extends '@Gui/Layout/layout.twig' %}
{% block content %}
{{ form_start(storelocationForm) }}
 
{{ form_end(storelocationForm) }}
 <input type=\"submit\" class=\"btn btn-success\" value=\"Add Store\" />
{% endblock %} #}
 

{% extends '@Gui/Layout/layout.twig' %}
{% block content %}

    {{ addnewstore }}

{% include \"@StoreLocations/Store/Form/storeform.twig\" %}
{% endblock %}

{# {% block content %}

    {{ addnewstore }}
<form method=\"POST\" action=\"/store-locations/store/addnewstore?type=Add\" enctype=\"multipart/form-data\">
  <div class=\"form-row\">
    <div class=\"form-group col-md-12\">
      <label for=\"storename\">Store Name</label>
      <input type=\"text\" class=\"form-control\" id=\"storename\" name=\"storename\" placeholder=\"Store Name\" required>
    </div>
  </div>
  <div class=\"form-row\">
  <h3>Address Details</h3>
  <div class=\"form-group col-md-6\">
    <label for=\"city\">City</label>
    <input type=\"text\" class=\"form-control\" id=\"city\" placeholder=\"City/Area/Locality\" name=\"city\" required>
  </div>
  <div class=\"form-group col-md-6\">
    <label for=\"street\">Street No.</label>
    <input type=\"text\" class=\"form-control\" id=\"street\" placeholder=\"Street No.\" name=\"street\" required>
  </div>
  </div>
  <div class=\"form-row\">
    <div class=\"form-group col-md-6\">
      <label for=\"region\">Region/State</label>
      <input type=\"text\" class=\"form-control\" id=\"region\" name=\"region\" required>
    </div>
    <div class=\"form-group col-md-4\">
      <label for=\"country\">Country</label>
      <select id=\"country\" class=\"form-control\" name=\"country\" required>
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class=\"form-group col-md-2\">
      <label for=\"inputZip\">Zip</label>
      <input type=\"number\" class=\"form-control\" id=\"inputZip\" name=\"zip\" required>
    </div>
  </div>
  <div class=\"form-row\">
    <div class=\"form-group col-md-4\">
      <label for=\"region\">Latitude</label>
      <input type=\"number\" class=\"form-control\" id=\"latitude\" name=\"latitude\" required>
    </div>
      <div class=\"form-group col-md-4\">
      <label for=\"region\">Longitude</label>
      <input type=\"number\" class=\"form-control\" id=\"longitude\" name=\"longitude\" required>
    </div>
      <div class=\"form-group col-md-4\">
      <label for=\"region\">Store Image</label>
      <input type=\"file\" class=\"form-control\" id=\"image\" accept=\"image/*\" name=\"storeimage\" required>
    </div>
  </div>
  <button type=\"submit\" class=\"btn btn-success\">Submit</button>
</form>
{% endblock %} #}

", "@StoreLocations/Store/addnewstore.twig", "/data/src/Pyz/Zed/StoreLocations/Presentation//Store/addnewstore.twig");
    }
}
