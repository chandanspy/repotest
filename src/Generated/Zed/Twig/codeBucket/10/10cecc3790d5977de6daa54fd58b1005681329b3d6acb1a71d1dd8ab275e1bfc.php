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

/* @StoreLocations/Store/Form/storeform.twig */
class __TwigTemplate_536c35a2cb844339cfdd062661783e8ee8f754ba0062b88b77c53225006b9bb3 extends Template
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
        echo "<form method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["actionurl"]) || array_key_exists("actionurl", $context) ? $context["actionurl"] : (function () { throw new RuntimeError('Variable "actionurl" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
    <div class=\"form-row\">
        <div class=\"form-group col-md-12\">
            <label for=\"storename\">Store Name</label>
            <input type=\"text\" class=\"form-control\" id=\"storename\" name=\"storename\" placeholder=\"Store Name\"
                ";
        // line 7
        if (array_key_exists("storedata", $context)) {
            // line 8
            echo "                    value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["storedata"]) || array_key_exists("storedata", $context) ? $context["storedata"] : (function () { throw new RuntimeError('Variable "storedata" does not exist.', 8, $this->source); })()), "storename", [], "any", false, false, false, 8), "html", null, true);
            echo "\"
                ";
        }
        // line 10
        echo "                   required>
        </div>
    </div>
    <div class=\"form-row\">
        <h3>Address Details</h3>
        <div class=\"form-group col-md-6\">
            <label for=\"city\">City</label>
            <input type=\"text\" class=\"form-control\" id=\"city\" placeholder=\"City/Area/Locality\" name=\"city\"
                ";
        // line 18
        if (array_key_exists("storedata", $context)) {
            // line 19
            echo "                    value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["storedata"]) || array_key_exists("storedata", $context) ? $context["storedata"] : (function () { throw new RuntimeError('Variable "storedata" does not exist.', 19, $this->source); })()), "city", [], "any", false, false, false, 19), "html", null, true);
            echo "\"
                ";
        }
        // line 21
        echo "                   required>
        </div>
        <div class=\"form-group col-md-6\">
            <label for=\"street\">Street No.</label>
            <input type=\"text\" class=\"form-control\" id=\"street\" placeholder=\"Street No.\" name=\"street\"
                ";
        // line 26
        if (array_key_exists("storedata", $context)) {
            // line 27
            echo "                    value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["storedata"]) || array_key_exists("storedata", $context) ? $context["storedata"] : (function () { throw new RuntimeError('Variable "storedata" does not exist.', 27, $this->source); })()), "street", [], "any", false, false, false, 27), "html", null, true);
            echo "\"
                ";
        }
        // line 29
        echo "                   required>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
            <label for=\"region\">Region/State</label>
            <input type=\"text\" class=\"form-control\" id=\"region\" name=\"region\"
                ";
        // line 36
        if (array_key_exists("storedata", $context)) {
            // line 37
            echo "                    value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["storedata"]) || array_key_exists("storedata", $context) ? $context["storedata"] : (function () { throw new RuntimeError('Variable "storedata" does not exist.', 37, $this->source); })()), "region", [], "any", false, false, false, 37), "html", null, true);
            echo "\"
                ";
        }
        // line 39
        echo "                   required>
        </div>
        <div class=\"form-group col-md-4\">
            <label for=\"country\">Country</label>
            <select id=\"country\" class=\"form-control\" name=\"country\" required>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["country"]) || array_key_exists("country", $context) ? $context["country"] : (function () { throw new RuntimeError('Variable "country" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["countryname"]) {
            // line 45
            echo "                    ";
            if ((array_key_exists("storedata", $context) && (0 === twig_compare($context["countryname"], twig_get_attribute($this->env, $this->source, (isset($context["storedata"]) || array_key_exists("storedata", $context) ? $context["storedata"] : (function () { throw new RuntimeError('Variable "storedata" does not exist.', 45, $this->source); })()), "country", [], "any", false, false, false, 45))))) {
                // line 46
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["storedata"]) || array_key_exists("storedata", $context) ? $context["storedata"] : (function () { throw new RuntimeError('Variable "storedata" does not exist.', 46, $this->source); })()), "country", [], "any", false, false, false, 46), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["storedata"]) || array_key_exists("storedata", $context) ? $context["storedata"] : (function () { throw new RuntimeError('Variable "storedata" does not exist.', 46, $this->source); })()), "country", [], "any", false, false, false, 46), "html", null, true);
                echo "</option>
                    ";
            } else {
                // line 48
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $context["countryname"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["countryname"], "html", null, true);
                echo "</option>
                    ";
            }
            // line 50
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['countryname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </select>
        </div>
        <div class=\"form-group col-md-2\">
            <label for=\"inputZip\">Zip</label>
            <input type=\"number\" class=\"form-control\" id=\"inputZip\" name=\"zipcode\"
                ";
        // line 56
        if (array_key_exists("storedata", $context)) {
            // line 57
            echo "                    value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["storedata"]) || array_key_exists("storedata", $context) ? $context["storedata"] : (function () { throw new RuntimeError('Variable "storedata" does not exist.', 57, $this->source); })()), "zipcode", [], "any", false, false, false, 57), "html", null, true);
            echo "\"
                ";
        }
        // line 59
        echo "                   required>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"form-group col-md-4\">
            <label for=\"region\">Latitude</label>
            <input type=\"number\" class=\"form-control\" id=\"latitude\" name=\"latitude\"
                ";
        // line 66
        if (array_key_exists("storedata", $context)) {
            // line 67
            echo "                    value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["storedata"]) || array_key_exists("storedata", $context) ? $context["storedata"] : (function () { throw new RuntimeError('Variable "storedata" does not exist.', 67, $this->source); })()), "latitude", [], "any", false, false, false, 67), "html", null, true);
            echo "\"
                ";
        }
        // line 69
        echo "                   required>
        </div>
        <div class=\"form-group col-md-4\">
            <label for=\"region\">Longitude</label>
            <input type=\"number\" class=\"form-control\" id=\"longitude\" name=\"longitude\"
                ";
        // line 74
        if (array_key_exists("storedata", $context)) {
            // line 75
            echo "                    value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["storedata"]) || array_key_exists("storedata", $context) ? $context["storedata"] : (function () { throw new RuntimeError('Variable "storedata" does not exist.', 75, $this->source); })()), "longitude", [], "any", false, false, false, 75), "html", null, true);
            echo "\"
                ";
        }
        // line 77
        echo "                   required>
        </div>
        <div class=\"form-group col-md-4\">
            <label for=\"region\">Store Image</label>
            <input type=\"file\" class=\"form-control\" id=\"image\" accept=\"image/*\" name=\"storeimage\"

                ";
        // line 83
        if (array_key_exists("storedata", $context)) {
            // line 84
            echo "            >
            ";
        } else {
            // line 86
            echo "                required >
            ";
        }
        // line 88
        echo "
        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-success\">Submit</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "@StoreLocations/Store/Form/storeform.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 88,  201 => 86,  197 => 84,  195 => 83,  187 => 77,  181 => 75,  179 => 74,  172 => 69,  166 => 67,  164 => 66,  155 => 59,  149 => 57,  147 => 56,  140 => 51,  134 => 50,  126 => 48,  118 => 46,  115 => 45,  111 => 44,  104 => 39,  98 => 37,  96 => 36,  87 => 29,  81 => 27,  79 => 26,  72 => 21,  66 => 19,  64 => 18,  54 => 10,  48 => 8,  46 => 7,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# storeform.twig #}
<form method=\"POST\" action=\"{{ actionurl }}\" enctype=\"multipart/form-data\">
    <div class=\"form-row\">
        <div class=\"form-group col-md-12\">
            <label for=\"storename\">Store Name</label>
            <input type=\"text\" class=\"form-control\" id=\"storename\" name=\"storename\" placeholder=\"Store Name\"
                {% if storedata is defined %}
                    value=\"{{ storedata.storename }}\"
                {% endif %}
                   required>
        </div>
    </div>
    <div class=\"form-row\">
        <h3>Address Details</h3>
        <div class=\"form-group col-md-6\">
            <label for=\"city\">City</label>
            <input type=\"text\" class=\"form-control\" id=\"city\" placeholder=\"City/Area/Locality\" name=\"city\"
                {% if storedata is defined %}
                    value=\"{{ storedata.city }}\"
                {% endif %}
                   required>
        </div>
        <div class=\"form-group col-md-6\">
            <label for=\"street\">Street No.</label>
            <input type=\"text\" class=\"form-control\" id=\"street\" placeholder=\"Street No.\" name=\"street\"
                {% if storedata is defined %}
                    value=\"{{ storedata.street }}\"
                {% endif %}
                   required>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"form-group col-md-6\">
            <label for=\"region\">Region/State</label>
            <input type=\"text\" class=\"form-control\" id=\"region\" name=\"region\"
                {% if storedata is defined %}
                    value=\"{{ storedata.region }}\"
                {% endif %}
                   required>
        </div>
        <div class=\"form-group col-md-4\">
            <label for=\"country\">Country</label>
            <select id=\"country\" class=\"form-control\" name=\"country\" required>
                {% for countryname in country %}
                    {% if storedata is defined and countryname == storedata.country %}
                        <option value=\"{{ storedata.country }}\" selected>{{ storedata.country }}</option>
                    {% else %}
                        <option value=\"{{ countryname }}\">{{ countryname }}</option>
                    {% endif %}
                {% endfor %}
            </select>
        </div>
        <div class=\"form-group col-md-2\">
            <label for=\"inputZip\">Zip</label>
            <input type=\"number\" class=\"form-control\" id=\"inputZip\" name=\"zipcode\"
                {% if storedata is defined %}
                    value=\"{{ storedata.zipcode }}\"
                {% endif %}
                   required>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"form-group col-md-4\">
            <label for=\"region\">Latitude</label>
            <input type=\"number\" class=\"form-control\" id=\"latitude\" name=\"latitude\"
                {% if storedata is defined %}
                    value=\"{{ storedata.latitude }}\"
                {% endif %}
                   required>
        </div>
        <div class=\"form-group col-md-4\">
            <label for=\"region\">Longitude</label>
            <input type=\"number\" class=\"form-control\" id=\"longitude\" name=\"longitude\"
                {% if storedata is defined %}
                    value=\"{{ storedata.longitude }}\"
                {% endif %}
                   required>
        </div>
        <div class=\"form-group col-md-4\">
            <label for=\"region\">Store Image</label>
            <input type=\"file\" class=\"form-control\" id=\"image\" accept=\"image/*\" name=\"storeimage\"

                {% if storedata is defined %}
            >
            {% else %}
                required >
            {% endif %}

        </div>
    </div>
    <button type=\"submit\" class=\"btn btn-success\">Submit</button>
</form>
", "@StoreLocations/Store/Form/storeform.twig", "/data/src/Pyz/Zed/StoreLocations/Presentation//Store/Form/storeform.twig");
    }
}
