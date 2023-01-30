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

/* @StoreLocations/Store/storeform.twig */
class __TwigTemplate_2588ba2f7f309c50ada594c922d299b460c9129bb9ac8f32d58024df9f5fb3a1 extends Template
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
        // line 2
        echo "<form method=\"POST\" action=\"/store-locations/store/addnewstore?type=Add\" enctype=\"multipart/form-data\">
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
</form>";
    }

    public function getTemplateName()
    {
        return "@StoreLocations/Store/storeform.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# storeform.twig #}
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
</form>", "@StoreLocations/Store/storeform.twig", "/data/src/Pyz/Zed/StoreLocations/Presentation//Store/storeform.twig");
    }
}
