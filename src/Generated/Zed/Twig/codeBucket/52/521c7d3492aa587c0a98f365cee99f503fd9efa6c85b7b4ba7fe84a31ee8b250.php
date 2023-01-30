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

/* @ProductManagement/View/_partials/info-general.twig */
class __TwigTemplate_f4b9192f90477ec7fba090f583152589ec0b5f13d0e17fc1a462326ff2521709 extends Template
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
        $this->loadTemplate("@ProductManagement/View/_partials/info-general.twig", "@ProductManagement/View/_partials/info-general.twig", 1, "987365128")->display(twig_array_merge($context, ["widget_title" => "General Information"]));
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'General Information' } %}
    {% block widget_content %}
        {% if merchant is defined and merchant is not empty %}
            <div class=\"row\">
                <div class=\"col-xs-2\"><strong>{{ 'Merchant' | trans }}</strong></div>
                <div class=\"col-xs-10\">
                    <a target=\"_blank\" href=\"/merchant-gui/edit-merchant?id-merchant={{ merchant.idMerchant}}\">
                        {{ merchant.name }}
                    </a>
                </div>
            </div>
            <div class=\"hr-line-dashed\"></div>
        {% endif %}

        {% include '@ProductApprovalGui/Partials/approval_status_label.twig' ignore missing with {
            product: currentProduct,
        } only %}

        {% if relatedStoreNames is defined %}
            <div class=\"row\">
                <div class=\"col-xs-2\"><b>{{ 'Store relation' | trans }}</b></div>
                <div class=\"col-xs-10\">
                    {% for storeName in relatedStoreNames %}
                        <span class=\"label label-info\">{{ storeName }}</span>
                    {% endfor %}
                </div>
            </div>
            <div class=\"hr-line-dashed\"></div>
        {% endif %}

        {% set productType = 'Product' %}

        {% if isGiftCard == true %}
            {% set productType = 'Gift Card' %}
        {% endif %}

        {% if isProductBundle == true %}
            {% set productType = 'Product Bundle' %}
        {% endif %}

        <div class=\"row\">
            <div class=\"col-xs-2\"><b>{{ 'Sku' | trans }}</b></div>
            <div class=\"col-xs-10\">{{ currentProduct.sku }}</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-2\"><b>{{ 'Type' | trans }}</b></div>
            <div class=\"col-xs-10\">{{ productType | trans }}</div>
        </div>

        <div class=\"m-t\">
            {% for localeTransfer in localeCollection %}
                {% for localizedData in currentProduct.localized_attributes %}
                    {% if (localizedData.locale.locale_name == localeTransfer.localeName ) %}

                        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.parent.loop.first), 'localeName': localeTransfer.localeName} %}
                            {% block content %}
                                <div class=\"row\">
                                    <div class=\"col-xs-2\"><b>{{ 'Name' | trans }}</b></div>
                                    <div class=\"col-xs-10\">{{ localizedData.name }}</div>
                                </div>
                                <div class=\"hr-line-dashed\"></div>
                                <div class=\"row\">
                                    <div class=\"col-xs-2\"><b>{{ 'Description' | trans }}</b></div>
                                    <div class=\"col-xs-10\">
                                        {{ localizedData.description }}
                                    </div>
                                </div>
                            {% endblock %}
                        {% endembed %}

                    {% endif %}
                {% endfor %}
            {% endfor %}
        </div>

        {% if currentProduct.id_product_concrete is defined %}
            <div class=\"row\">
                <div class=\"col-xs-2\"><b>{{ 'Valid From' | trans }}</b></div>
                <div class=\"col-xs-4\">{{ currentProduct.valid_from }}</div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-2\"><b>{{ 'Valid To' | trans }}</b></div>
                <div class=\"col-xs-4\">{{ currentProduct.valid_to }}</div>
            </div>
        {% endif %}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-general.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-general.twig");
    }
}


/* @ProductManagement/View/_partials/info-general.twig */
class __TwigTemplate_f4b9192f90477ec7fba090f583152589ec0b5f13d0e17fc1a462326ff2521709___987365128 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_content' => [$this, 'block_widget_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@Gui/Partials/widget.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/widget.twig", "@ProductManagement/View/_partials/info-general.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_widget_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        ";
        if ((array_key_exists("merchant", $context) &&  !twig_test_empty((isset($context["merchant"]) || array_key_exists("merchant", $context) ? $context["merchant"] : (function () { throw new RuntimeError('Variable "merchant" does not exist.', 3, $this->source); })())))) {
            // line 4
            echo "            <div class=\"row\">
                <div class=\"col-xs-2\"><strong>";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Merchant"), "html", null, true);
            echo "</strong></div>
                <div class=\"col-xs-10\">
                    <a target=\"_blank\" href=\"/merchant-gui/edit-merchant?id-merchant=";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["merchant"]) || array_key_exists("merchant", $context) ? $context["merchant"] : (function () { throw new RuntimeError('Variable "merchant" does not exist.', 7, $this->source); })()), "idMerchant", [], "any", false, false, false, 7), "html", null, true);
            echo "\">
                        ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["merchant"]) || array_key_exists("merchant", $context) ? $context["merchant"] : (function () { throw new RuntimeError('Variable "merchant" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "
                    </a>
                </div>
            </div>
            <div class=\"hr-line-dashed\"></div>
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("@ProductApprovalGui/Partials/approval_status_label.twig", "@ProductManagement/View/_partials/info-general.twig", 15);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display(twig_to_array(["product" =>             // line 16
(isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 16, $this->source); })())]));
        }
        // line 18
        echo "
        ";
        // line 19
        if (array_key_exists("relatedStoreNames", $context)) {
            // line 20
            echo "            <div class=\"row\">
                <div class=\"col-xs-2\"><b>";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store relation"), "html", null, true);
            echo "</b></div>
                <div class=\"col-xs-10\">
                    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["relatedStoreNames"]) || array_key_exists("relatedStoreNames", $context) ? $context["relatedStoreNames"] : (function () { throw new RuntimeError('Variable "relatedStoreNames" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["storeName"]) {
                // line 24
                echo "                        <span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $context["storeName"], "html", null, true);
                echo "</span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['storeName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                </div>
            </div>
            <div class=\"hr-line-dashed\"></div>
        ";
        }
        // line 30
        echo "
        ";
        // line 31
        $context["productType"] = "Product";
        // line 32
        echo "
        ";
        // line 33
        if ((0 === twig_compare((isset($context["isGiftCard"]) || array_key_exists("isGiftCard", $context) ? $context["isGiftCard"] : (function () { throw new RuntimeError('Variable "isGiftCard" does not exist.', 33, $this->source); })()), true))) {
            // line 34
            echo "            ";
            $context["productType"] = "Gift Card";
            // line 35
            echo "        ";
        }
        // line 36
        echo "
        ";
        // line 37
        if ((0 === twig_compare((isset($context["isProductBundle"]) || array_key_exists("isProductBundle", $context) ? $context["isProductBundle"] : (function () { throw new RuntimeError('Variable "isProductBundle" does not exist.', 37, $this->source); })()), true))) {
            // line 38
            echo "            ";
            $context["productType"] = "Product Bundle";
            // line 39
            echo "        ";
        }
        // line 40
        echo "
        <div class=\"row\">
            <div class=\"col-xs-2\"><b>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sku"), "html", null, true);
        echo "</b></div>
            <div class=\"col-xs-10\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 43, $this->source); })()), "sku", [], "any", false, false, false, 43), "html", null, true);
        echo "</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-2\"><b>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        echo "</b></div>
            <div class=\"col-xs-10\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 48, $this->source); })())), "html", null, true);
        echo "</div>
        </div>

        <div class=\"m-t\">
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localeCollection"]) || array_key_exists("localeCollection", $context) ? $context["localeCollection"] : (function () { throw new RuntimeError('Variable "localeCollection" does not exist.', 52, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["localeTransfer"]) {
            // line 53
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 53, $this->source); })()), "localized_attributes", [], "any", false, false, false, 53));
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
            foreach ($context['_seq'] as $context["_key"] => $context["localizedData"]) {
                // line 54
                echo "                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["localizedData"], "locale", [], "any", false, false, false, 54), "locale_name", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "localeName", [], "any", false, false, false, 54)))) {
                    // line 55
                    echo "
                        ";
                    // line 56
                    $this->loadTemplate("@ProductManagement/View/_partials/info-general.twig", "@ProductManagement/View/_partials/info-general.twig", 56, "1374593648")->display(twig_array_merge($context, ["collapsed" =>  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loop"], "parent", [], "any", false, false, false, 56), "loop", [], "any", false, false, false, 56), "first", [], "any", false, false, false, 56), "localeName" => twig_get_attribute($this->env, $this->source, $context["localeTransfer"], "localeName", [], "any", false, false, false, 56)]));
                    // line 71
                    echo "
                    ";
                }
                // line 73
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localizedData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localeTransfer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "        </div>

        ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, ($context["currentProduct"] ?? null), "id_product_concrete", [], "any", true, true, false, 77)) {
            // line 78
            echo "            <div class=\"row\">
                <div class=\"col-xs-2\"><b>";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Valid From"), "html", null, true);
            echo "</b></div>
                <div class=\"col-xs-4\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 80, $this->source); })()), "valid_from", [], "any", false, false, false, 80), "html", null, true);
            echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-2\"><b>";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Valid To"), "html", null, true);
            echo "</b></div>
                <div class=\"col-xs-4\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentProduct"]) || array_key_exists("currentProduct", $context) ? $context["currentProduct"] : (function () { throw new RuntimeError('Variable "currentProduct" does not exist.', 84, $this->source); })()), "valid_to", [], "any", false, false, false, 84), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 87
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 87,  406 => 84,  402 => 83,  396 => 80,  392 => 79,  389 => 78,  387 => 77,  383 => 75,  369 => 74,  355 => 73,  351 => 71,  349 => 56,  346 => 55,  343 => 54,  325 => 53,  308 => 52,  301 => 48,  297 => 47,  290 => 43,  286 => 42,  282 => 40,  279 => 39,  276 => 38,  274 => 37,  271 => 36,  268 => 35,  265 => 34,  263 => 33,  260 => 32,  258 => 31,  255 => 30,  249 => 26,  240 => 24,  236 => 23,  231 => 21,  228 => 20,  226 => 19,  223 => 18,  220 => 16,  212 => 15,  209 => 14,  200 => 8,  196 => 7,  191 => 5,  188 => 4,  185 => 3,  181 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'General Information' } %}
    {% block widget_content %}
        {% if merchant is defined and merchant is not empty %}
            <div class=\"row\">
                <div class=\"col-xs-2\"><strong>{{ 'Merchant' | trans }}</strong></div>
                <div class=\"col-xs-10\">
                    <a target=\"_blank\" href=\"/merchant-gui/edit-merchant?id-merchant={{ merchant.idMerchant}}\">
                        {{ merchant.name }}
                    </a>
                </div>
            </div>
            <div class=\"hr-line-dashed\"></div>
        {% endif %}

        {% include '@ProductApprovalGui/Partials/approval_status_label.twig' ignore missing with {
            product: currentProduct,
        } only %}

        {% if relatedStoreNames is defined %}
            <div class=\"row\">
                <div class=\"col-xs-2\"><b>{{ 'Store relation' | trans }}</b></div>
                <div class=\"col-xs-10\">
                    {% for storeName in relatedStoreNames %}
                        <span class=\"label label-info\">{{ storeName }}</span>
                    {% endfor %}
                </div>
            </div>
            <div class=\"hr-line-dashed\"></div>
        {% endif %}

        {% set productType = 'Product' %}

        {% if isGiftCard == true %}
            {% set productType = 'Gift Card' %}
        {% endif %}

        {% if isProductBundle == true %}
            {% set productType = 'Product Bundle' %}
        {% endif %}

        <div class=\"row\">
            <div class=\"col-xs-2\"><b>{{ 'Sku' | trans }}</b></div>
            <div class=\"col-xs-10\">{{ currentProduct.sku }}</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-2\"><b>{{ 'Type' | trans }}</b></div>
            <div class=\"col-xs-10\">{{ productType | trans }}</div>
        </div>

        <div class=\"m-t\">
            {% for localeTransfer in localeCollection %}
                {% for localizedData in currentProduct.localized_attributes %}
                    {% if (localizedData.locale.locale_name == localeTransfer.localeName ) %}

                        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.parent.loop.first), 'localeName': localeTransfer.localeName} %}
                            {% block content %}
                                <div class=\"row\">
                                    <div class=\"col-xs-2\"><b>{{ 'Name' | trans }}</b></div>
                                    <div class=\"col-xs-10\">{{ localizedData.name }}</div>
                                </div>
                                <div class=\"hr-line-dashed\"></div>
                                <div class=\"row\">
                                    <div class=\"col-xs-2\"><b>{{ 'Description' | trans }}</b></div>
                                    <div class=\"col-xs-10\">
                                        {{ localizedData.description }}
                                    </div>
                                </div>
                            {% endblock %}
                        {% endembed %}

                    {% endif %}
                {% endfor %}
            {% endfor %}
        </div>

        {% if currentProduct.id_product_concrete is defined %}
            <div class=\"row\">
                <div class=\"col-xs-2\"><b>{{ 'Valid From' | trans }}</b></div>
                <div class=\"col-xs-4\">{{ currentProduct.valid_from }}</div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-2\"><b>{{ 'Valid To' | trans }}</b></div>
                <div class=\"col-xs-4\">{{ currentProduct.valid_to }}</div>
            </div>
        {% endif %}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-general.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-general.twig");
    }
}


/* @ProductManagement/View/_partials/info-general.twig */
class __TwigTemplate_f4b9192f90477ec7fba090f583152589ec0b5f13d0e17fc1a462326ff2521709___1374593648 extends Template
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
        // line 56
        return "@Gui/Partials/localized-ibox.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Gui/Partials/localized-ibox.twig", "@ProductManagement/View/_partials/info-general.twig", 56);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 57
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "                                <div class=\"row\">
                                    <div class=\"col-xs-2\"><b>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</b></div>
                                    <div class=\"col-xs-10\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["localizedData"]) || array_key_exists("localizedData", $context) ? $context["localizedData"] : (function () { throw new RuntimeError('Variable "localizedData" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60), "html", null, true);
        echo "</div>
                                </div>
                                <div class=\"hr-line-dashed\"></div>
                                <div class=\"row\">
                                    <div class=\"col-xs-2\"><b>";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        echo "</b></div>
                                    <div class=\"col-xs-10\">
                                        ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["localizedData"]) || array_key_exists("localizedData", $context) ? $context["localizedData"] : (function () { throw new RuntimeError('Variable "localizedData" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), "html", null, true);
        echo "
                                    </div>
                                </div>
                            ";
    }

    public function getTemplateName()
    {
        return "@ProductManagement/View/_partials/info-general.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  581 => 66,  576 => 64,  569 => 60,  565 => 59,  562 => 58,  558 => 57,  547 => 56,  412 => 87,  406 => 84,  402 => 83,  396 => 80,  392 => 79,  389 => 78,  387 => 77,  383 => 75,  369 => 74,  355 => 73,  351 => 71,  349 => 56,  346 => 55,  343 => 54,  325 => 53,  308 => 52,  301 => 48,  297 => 47,  290 => 43,  286 => 42,  282 => 40,  279 => 39,  276 => 38,  274 => 37,  271 => 36,  268 => 35,  265 => 34,  263 => 33,  260 => 32,  258 => 31,  255 => 30,  249 => 26,  240 => 24,  236 => 23,  231 => 21,  228 => 20,  226 => 19,  223 => 18,  220 => 16,  212 => 15,  209 => 14,  200 => 8,  196 => 7,  191 => 5,  188 => 4,  185 => 3,  181 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% embed '@Gui/Partials/widget.twig' with { widget_title: 'General Information' } %}
    {% block widget_content %}
        {% if merchant is defined and merchant is not empty %}
            <div class=\"row\">
                <div class=\"col-xs-2\"><strong>{{ 'Merchant' | trans }}</strong></div>
                <div class=\"col-xs-10\">
                    <a target=\"_blank\" href=\"/merchant-gui/edit-merchant?id-merchant={{ merchant.idMerchant}}\">
                        {{ merchant.name }}
                    </a>
                </div>
            </div>
            <div class=\"hr-line-dashed\"></div>
        {% endif %}

        {% include '@ProductApprovalGui/Partials/approval_status_label.twig' ignore missing with {
            product: currentProduct,
        } only %}

        {% if relatedStoreNames is defined %}
            <div class=\"row\">
                <div class=\"col-xs-2\"><b>{{ 'Store relation' | trans }}</b></div>
                <div class=\"col-xs-10\">
                    {% for storeName in relatedStoreNames %}
                        <span class=\"label label-info\">{{ storeName }}</span>
                    {% endfor %}
                </div>
            </div>
            <div class=\"hr-line-dashed\"></div>
        {% endif %}

        {% set productType = 'Product' %}

        {% if isGiftCard == true %}
            {% set productType = 'Gift Card' %}
        {% endif %}

        {% if isProductBundle == true %}
            {% set productType = 'Product Bundle' %}
        {% endif %}

        <div class=\"row\">
            <div class=\"col-xs-2\"><b>{{ 'Sku' | trans }}</b></div>
            <div class=\"col-xs-10\">{{ currentProduct.sku }}</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-2\"><b>{{ 'Type' | trans }}</b></div>
            <div class=\"col-xs-10\">{{ productType | trans }}</div>
        </div>

        <div class=\"m-t\">
            {% for localeTransfer in localeCollection %}
                {% for localizedData in currentProduct.localized_attributes %}
                    {% if (localizedData.locale.locale_name == localeTransfer.localeName ) %}

                        {% embed '@Gui/Partials/localized-ibox.twig' with {'collapsed': (not loop.parent.loop.first), 'localeName': localeTransfer.localeName} %}
                            {% block content %}
                                <div class=\"row\">
                                    <div class=\"col-xs-2\"><b>{{ 'Name' | trans }}</b></div>
                                    <div class=\"col-xs-10\">{{ localizedData.name }}</div>
                                </div>
                                <div class=\"hr-line-dashed\"></div>
                                <div class=\"row\">
                                    <div class=\"col-xs-2\"><b>{{ 'Description' | trans }}</b></div>
                                    <div class=\"col-xs-10\">
                                        {{ localizedData.description }}
                                    </div>
                                </div>
                            {% endblock %}
                        {% endembed %}

                    {% endif %}
                {% endfor %}
            {% endfor %}
        </div>

        {% if currentProduct.id_product_concrete is defined %}
            <div class=\"row\">
                <div class=\"col-xs-2\"><b>{{ 'Valid From' | trans }}</b></div>
                <div class=\"col-xs-4\">{{ currentProduct.valid_from }}</div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-2\"><b>{{ 'Valid To' | trans }}</b></div>
                <div class=\"col-xs-4\">{{ currentProduct.valid_to }}</div>
            </div>
        {% endif %}

    {% endblock %}
{% endembed %}
", "@ProductManagement/View/_partials/info-general.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//View/_partials/info-general.twig");
    }
}
