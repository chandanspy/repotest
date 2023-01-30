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

/* @ProductAttributeGui/View/_partials/attribute-table.twig */
class __TwigTemplate_d38a5b205d84b06c6e1ae653a7a5f94a15178bb642b0591f49973bf4f027a842 extends Template
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
        echo "<div class=\"table-responsive\">
    <table class=\"table table-striped table-bordered table-hover gui-table-data\" id=\"productAttributesTable\"
           data-paging=\"false\">
        <form id=\"attribute_values_form\" method=\"post\" class=\"kv_autocomplete_form\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["formActionUrl"]) || array_key_exists("formActionUrl", $context) ? $context["formActionUrl"] : (function () { throw new RuntimeError('Variable "formActionUrl" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"attribute_values_form[hidden_product_abstract_id]\"
                   id=\"attribute_values_form_hidden_product_abstract_id\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["idProductAbstract"]) || array_key_exists("idProductAbstract", $context) ? $context["idProductAbstract"] : (function () { throw new RuntimeError('Variable "idProductAbstract" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\"/>
            <input type=\"hidden\" name=\"attribute_values_form[hidden_product_id]\"
                   id=\"attribute_values_form_hidden_product_id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["idProductConcrete"]) || array_key_exists("idProductConcrete", $context) ? $context["idProductConcrete"] : (function () { throw new RuntimeError('Variable "idProductConcrete" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\"/>
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["csrfForm"]) || array_key_exists("csrfForm", $context) ? $context["csrfForm"] : (function () { throw new RuntimeError('Variable "csrfForm" does not exist.', 9, $this->source); })()), 'widget');
        echo "
            <thead>
            <tr>
                <th>Key</th>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["localeCode"] => $context["localeData"]) {
            // line 14
            echo "                    ";
            if ((0 === twig_compare($context["localeCode"], "_"))) {
                // line 15
                echo "                        <th>";
                echo "Default";
                echo "</th>
                    ";
            } else {
                // line 17
                echo "                        <th>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeData"], "locale_name", [], "any", false, false, false, 17), "html", null, true);
                echo "</th>
                    ";
            }
            // line 19
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['localeCode'], $context['localeData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productAttributeKeys"]) || array_key_exists("productAttributeKeys", $context) ? $context["productAttributeKeys"] : (function () { throw new RuntimeError('Variable "productAttributeKeys" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 25
            echo "                    ";
            $context["idAttribute"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["metaAttributes"]) || array_key_exists("metaAttributes", $context) ? $context["metaAttributes"] : (function () { throw new RuntimeError('Variable "metaAttributes" does not exist.', 25, $this->source); })()), $context["key"], [], "array", false, false, false, 25), "attribute_id", [], "array", false, false, false, 25);
            // line 26
            echo "                    ";
            $context["allowInput"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["metaAttributes"]) || array_key_exists("metaAttributes", $context) ? $context["metaAttributes"] : (function () { throw new RuntimeError('Variable "metaAttributes" does not exist.', 26, $this->source); })()), $context["key"], [], "array", false, false, false, 26), "allow_input", [], "array", false, false, false, 26);
            // line 27
            echo "                    ";
            $context["isSuper"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["metaAttributes"]) || array_key_exists("metaAttributes", $context) ? $context["metaAttributes"] : (function () { throw new RuntimeError('Variable "metaAttributes" does not exist.', 27, $this->source); })()), $context["key"], [], "array", false, false, false, 27), "is_super", [], "array", false, false, false, 27);
            // line 28
            echo "
                    ";
            // line 29
            $context["isReadOnly"] = false;
            // line 30
            echo "                    ";
            if (((isset($context["isSuper"]) || array_key_exists("isSuper", $context) ? $context["isSuper"] : (function () { throw new RuntimeError('Variable "isSuper" does not exist.', 30, $this->source); })()) || twig_test_empty((isset($context["idAttribute"]) || array_key_exists("idAttribute", $context) ? $context["idAttribute"] : (function () { throw new RuntimeError('Variable "idAttribute" does not exist.', 30, $this->source); })())))) {
                // line 31
                echo "                        ";
                $context["isReadOnly"] = true;
                // line 32
                echo "                        ";
                $context["allowInput"] = false;
                // line 33
                echo "                    ";
            }
            // line 34
            echo "                    <tr ";
            if ((isset($context["isSuper"]) || array_key_exists("isSuper", $context) ? $context["isSuper"] : (function () { throw new RuntimeError('Variable "isSuper" does not exist.', 34, $this->source); })())) {
                echo " ";
                echo "style=\"display: none\"";
                echo " ";
            }
            echo ">
                        <td style=\"vertical-align: middle;\">
                            ";
            // line 36
            if ((isset($context["isSuper"]) || array_key_exists("isSuper", $context) ? $context["isSuper"] : (function () { throw new RuntimeError('Variable "isSuper" does not exist.', 36, $this->source); })())) {
                // line 37
                echo "                                <strong>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</strong>
                            ";
            } else {
                // line 39
                echo "                                ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "
                            ";
            }
            // line 41
            echo "                        </td>
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["localeData"]) {
                // line 43
                echo "                            ";
                $context["localeCode"] = twig_get_attribute($this->env, $this->source, $context["localeData"], "locale_name", [], "any", false, false, false, 43);
                // line 44
                echo "                            ";
                $context["name"] = (("[" . $context["key"]) . "]");
                // line 45
                echo "                            ";
                $context["id"] = $context["key"];
                // line 46
                echo "
                            ";
                // line 47
                if ((0 !== twig_compare((isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 47, $this->source); })()), "_"))) {
                    // line 48
                    echo "                                ";
                    $context["name"] = ((((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 48, $this->source); })()) . "[") . (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 48, $this->source); })())) . "]");
                    // line 49
                    echo "                                ";
                    $context["id"] = (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })()) . "_") . (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 49, $this->source); })()));
                    // line 50
                    echo "                            ";
                }
                // line 51
                echo "
                            ";
                // line 52
                $context["inputName"] = ("attribute_values_form" . (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 52, $this->source); })()));
                // line 53
                echo "                            ";
                $context["inputId"] = ("attribute_values_form_" . (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 53, $this->source); })()));
                // line 54
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["productAttributes"] ?? null), (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 54, $this->source); })()), [], "array", false, true, false, 54), $context["key"], [], "array", true, true, false, 54)) {
                    // line 55
                    echo "                                ";
                    $context["attributeValue"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["productAttributes"]) || array_key_exists("productAttributes", $context) ? $context["productAttributes"] : (function () { throw new RuntimeError('Variable "productAttributes" does not exist.', 55, $this->source); })()), (isset($context["localeCode"]) || array_key_exists("localeCode", $context) ? $context["localeCode"] : (function () { throw new RuntimeError('Variable "localeCode" does not exist.', 55, $this->source); })()), [], "array", false, false, false, 55), $context["key"], [], "array", false, false, false, 55);
                    // line 56
                    echo "                                <td>
                                    <input
                                            ";
                    // line 58
                    if ((isset($context["isReadOnly"]) || array_key_exists("isReadOnly", $context) ? $context["isReadOnly"] : (function () { throw new RuntimeError('Variable "isReadOnly" does not exist.', 58, $this->source); })())) {
                        // line 59
                        echo "                                                readonly=\"readonly\"
                                            ";
                    }
                    // line 61
                    echo "                                            id=\"";
                    echo twig_escape_filter($this->env, (isset($context["inputId"]) || array_key_exists("inputId", $context) ? $context["inputId"] : (function () { throw new RuntimeError('Variable "inputId" does not exist.', 61, $this->source); })()), "html", null, true);
                    echo "\"
                                            name=\"";
                    // line 62
                    echo twig_escape_filter($this->env, (isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 62, $this->source); })()), "html", null, true);
                    echo "\"
                                            type=\"text\"
                                            class=\"spryker-form-autocomplete form-control ui-autocomplete-input kv_attribute_autocomplete\"
                                            value=\"";
                    // line 65
                    echo twig_escape_filter($this->env, (isset($context["attributeValue"]) || array_key_exists("attributeValue", $context) ? $context["attributeValue"] : (function () { throw new RuntimeError('Variable "attributeValue" does not exist.', 65, $this->source); })()), "html", null, true);
                    echo "\"
                                            data-allow_input=\"";
                    // line 66
                    echo twig_escape_filter($this->env, (isset($context["allowInput"]) || array_key_exists("allowInput", $context) ? $context["allowInput"] : (function () { throw new RuntimeError('Variable "allowInput" does not exist.', 66, $this->source); })()), "html", null, true);
                    echo "\"
                                            data-is_super=\"";
                    // line 67
                    echo twig_escape_filter($this->env, (isset($context["isSuper"]) || array_key_exists("isSuper", $context) ? $context["isSuper"] : (function () { throw new RuntimeError('Variable "isSuper" does not exist.', 67, $this->source); })()), "html", null, true);
                    echo "\"
                                            data-is_read_only=\"";
                    // line 68
                    echo twig_escape_filter($this->env, (isset($context["isReadOnly"]) || array_key_exists("isReadOnly", $context) ? $context["isReadOnly"] : (function () { throw new RuntimeError('Variable "isReadOnly" does not exist.', 68, $this->source); })()), "html", null, true);
                    echo "\"
                                            data-attribute_key=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"
                                            data-is_attribute_input
                                            data-id_attribute=\"";
                    // line 71
                    echo twig_escape_filter($this->env, (isset($context["idAttribute"]) || array_key_exists("idAttribute", $context) ? $context["idAttribute"] : (function () { throw new RuntimeError('Variable "idAttribute" does not exist.', 71, $this->source); })()), "html", null, true);
                    echo "\"
                                            data-locale_code=\"";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeData"], "locale_name", [], "array", false, false, false, 72), "html", null, true);
                    echo "\"
                                    /><span style=\"display: none\">";
                    // line 73
                    echo twig_escape_filter($this->env, (isset($context["attributeValue"]) || array_key_exists("attributeValue", $context) ? $context["attributeValue"] : (function () { throw new RuntimeError('Variable "attributeValue" does not exist.', 73, $this->source); })()), "html", null, true);
                    echo "</span>
                                </td>
                            ";
                } else {
                    // line 76
                    echo "                                <td>
                                    <input
                                            ";
                    // line 78
                    if ((isset($context["isReadOnly"]) || array_key_exists("isReadOnly", $context) ? $context["isReadOnly"] : (function () { throw new RuntimeError('Variable "isReadOnly" does not exist.', 78, $this->source); })())) {
                        // line 79
                        echo "                                                readonly=\"readonly\"
                                            ";
                    }
                    // line 81
                    echo "                                            id=\"";
                    echo twig_escape_filter($this->env, (isset($context["inputId"]) || array_key_exists("inputId", $context) ? $context["inputId"] : (function () { throw new RuntimeError('Variable "inputId" does not exist.', 81, $this->source); })()), "html", null, true);
                    echo "\"
                                            name=\"";
                    // line 82
                    echo twig_escape_filter($this->env, (isset($context["inputName"]) || array_key_exists("inputName", $context) ? $context["inputName"] : (function () { throw new RuntimeError('Variable "inputName" does not exist.', 82, $this->source); })()), "html", null, true);
                    echo "\"
                                            type=\"text\"
                                            class=\"spryker-form-autocomplete form-control ui-autocomplete-input kv_attribute_autocomplete\"
                                            value=\"\"
                                            data-allow_input=\"";
                    // line 86
                    echo twig_escape_filter($this->env, (isset($context["allowInput"]) || array_key_exists("allowInput", $context) ? $context["allowInput"] : (function () { throw new RuntimeError('Variable "allowInput" does not exist.', 86, $this->source); })()), "html", null, true);
                    echo "\"
                                            data-is_super=\"";
                    // line 87
                    echo twig_escape_filter($this->env, (isset($context["isSuper"]) || array_key_exists("isSuper", $context) ? $context["isSuper"] : (function () { throw new RuntimeError('Variable "isSuper" does not exist.', 87, $this->source); })()), "html", null, true);
                    echo "\"
                                            data-is_read_only=\"";
                    // line 88
                    echo twig_escape_filter($this->env, (isset($context["isReadOnly"]) || array_key_exists("isReadOnly", $context) ? $context["isReadOnly"] : (function () { throw new RuntimeError('Variable "isReadOnly" does not exist.', 88, $this->source); })()), "html", null, true);
                    echo "\"
                                            data-attribute_key=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"
                                            data-is_attribute_input
                                            data-id_attribute=\"";
                    // line 91
                    echo twig_escape_filter($this->env, (isset($context["idAttribute"]) || array_key_exists("idAttribute", $context) ? $context["idAttribute"] : (function () { throw new RuntimeError('Variable "idAttribute" does not exist.', 91, $this->source); })()), "html", null, true);
                    echo "\"
                                            data-locale_code=\"";
                    // line 92
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localeData"], "locale_name", [], "array", false, false, false, 92), "html", null, true);
                    echo "\"
                                    />
                                    <span style=\"display: none\"></span>
                                </td>
                            ";
                }
                // line 97
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                        <td style=\"vertical-align: middle; text-align: left;\">
                            ";
            // line 99
            if ((0 === twig_compare((isset($context["isSuper"]) || array_key_exists("isSuper", $context) ? $context["isSuper"] : (function () { throw new RuntimeError('Variable "isSuper" does not exist.', 99, $this->source); })()), false))) {
                // line 100
                echo "                                <a data-key=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" href=\"#\"
                                   class=\"btn btn-xs btn-outline btn-danger remove-item\">";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove"), "html", null, true);
                echo "</a>
                            ";
            }
            // line 103
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "            </tbody>
        </form>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ProductAttributeGui/View/_partials/attribute-table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 106,  320 => 103,  315 => 101,  310 => 100,  308 => 99,  305 => 98,  299 => 97,  291 => 92,  287 => 91,  282 => 89,  278 => 88,  274 => 87,  270 => 86,  263 => 82,  258 => 81,  254 => 79,  252 => 78,  248 => 76,  242 => 73,  238 => 72,  234 => 71,  229 => 69,  225 => 68,  221 => 67,  217 => 66,  213 => 65,  207 => 62,  202 => 61,  198 => 59,  196 => 58,  192 => 56,  189 => 55,  186 => 54,  183 => 53,  181 => 52,  178 => 51,  175 => 50,  172 => 49,  169 => 48,  167 => 47,  164 => 46,  161 => 45,  158 => 44,  155 => 43,  151 => 42,  148 => 41,  142 => 39,  136 => 37,  134 => 36,  124 => 34,  121 => 33,  118 => 32,  115 => 31,  112 => 30,  110 => 29,  107 => 28,  104 => 27,  101 => 26,  98 => 25,  94 => 24,  88 => 20,  82 => 19,  76 => 17,  70 => 15,  67 => 14,  63 => 13,  56 => 9,  52 => 8,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"table-responsive\">
    <table class=\"table table-striped table-bordered table-hover gui-table-data\" id=\"productAttributesTable\"
           data-paging=\"false\">
        <form id=\"attribute_values_form\" method=\"post\" class=\"kv_autocomplete_form\" action=\"{{ formActionUrl }}\">
            <input type=\"hidden\" name=\"attribute_values_form[hidden_product_abstract_id]\"
                   id=\"attribute_values_form_hidden_product_abstract_id\" value=\"{{ idProductAbstract }}\"/>
            <input type=\"hidden\" name=\"attribute_values_form[hidden_product_id]\"
                   id=\"attribute_values_form_hidden_product_id\" value=\"{{ idProductConcrete }}\"/>
            {{ form_widget(csrfForm) }}
            <thead>
            <tr>
                <th>Key</th>
                {% for localeCode,localeData in locales %}
                    {% if localeCode == '_' %}
                        <th>{{ 'Default' }}</th>
                    {% else %}
                        <th>{{ localeData.locale_name }}</th>
                    {% endif %}
                {% endfor %}
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                {% for key in productAttributeKeys %}
                    {% set idAttribute = metaAttributes[key]['attribute_id'] %}
                    {% set allowInput = metaAttributes[key]['allow_input'] %}
                    {% set isSuper = metaAttributes[key]['is_super'] %}

                    {% set isReadOnly = false %}
                    {% if isSuper or idAttribute is empty %}
                        {% set isReadOnly = true %}
                        {% set allowInput = false %}
                    {% endif %}
                    <tr {% if isSuper %} {{ 'style=\"display: none\"' }} {% endif %}>
                        <td style=\"vertical-align: middle;\">
                            {% if isSuper %}
                                <strong>{{ key }}</strong>
                            {% else %}
                                {{ key }}
                            {% endif %}
                        </td>
                        {% for localeData in locales %}
                            {% set localeCode = localeData.locale_name %}
                            {% set name = '[' ~ key ~ ']' %}
                            {% set id = key %}

                            {% if localeCode != '_' %}
                                {% set name = name ~ '[' ~ localeCode ~ ']' %}
                                {% set id = id ~ '_' ~ localeCode %}
                            {% endif %}

                            {% set inputName = 'attribute_values_form' ~ name %}
                            {% set inputId = 'attribute_values_form_' ~ id %}
                            {% if productAttributes[localeCode][key] is defined %}
                                {% set attributeValue = productAttributes[localeCode][key] %}
                                <td>
                                    <input
                                            {% if isReadOnly %}
                                                readonly=\"readonly\"
                                            {% endif %}
                                            id=\"{{ inputId }}\"
                                            name=\"{{ inputName }}\"
                                            type=\"text\"
                                            class=\"spryker-form-autocomplete form-control ui-autocomplete-input kv_attribute_autocomplete\"
                                            value=\"{{ attributeValue }}\"
                                            data-allow_input=\"{{ allowInput }}\"
                                            data-is_super=\"{{ isSuper }}\"
                                            data-is_read_only=\"{{ isReadOnly }}\"
                                            data-attribute_key=\"{{ key }}\"
                                            data-is_attribute_input
                                            data-id_attribute=\"{{ idAttribute }}\"
                                            data-locale_code=\"{{ localeData['locale_name'] }}\"
                                    /><span style=\"display: none\">{{ attributeValue }}</span>
                                </td>
                            {% else %}
                                <td>
                                    <input
                                            {% if isReadOnly %}
                                                readonly=\"readonly\"
                                            {% endif %}
                                            id=\"{{ inputId }}\"
                                            name=\"{{ inputName }}\"
                                            type=\"text\"
                                            class=\"spryker-form-autocomplete form-control ui-autocomplete-input kv_attribute_autocomplete\"
                                            value=\"\"
                                            data-allow_input=\"{{ allowInput }}\"
                                            data-is_super=\"{{ isSuper }}\"
                                            data-is_read_only=\"{{ isReadOnly }}\"
                                            data-attribute_key=\"{{ key }}\"
                                            data-is_attribute_input
                                            data-id_attribute=\"{{ idAttribute }}\"
                                            data-locale_code=\"{{ localeData['locale_name'] }}\"
                                    />
                                    <span style=\"display: none\"></span>
                                </td>
                            {% endif %}
                        {% endfor %}
                        <td style=\"vertical-align: middle; text-align: left;\">
                            {% if isSuper == false %}
                                <a data-key=\"{{ key }}\" href=\"#\"
                                   class=\"btn btn-xs btn-outline btn-danger remove-item\">{{ 'Remove' | trans }}</a>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </form>
    </table>
</div>
", "@ProductAttributeGui/View/_partials/attribute-table.twig", "/data/vendor/spryker/product-attribute-gui/src/Spryker/Zed/ProductAttributeGui/Presentation//View/_partials/attribute-table.twig");
    }
}
