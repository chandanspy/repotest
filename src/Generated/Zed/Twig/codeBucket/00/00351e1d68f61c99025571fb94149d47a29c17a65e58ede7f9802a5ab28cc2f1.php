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

/* @ProductManagement/_partials/product_price_collection.twig */
class __TwigTemplate_738ac67484290be3bc313683569e1a801c1777d60eb38c33cf28be01882c70cc extends Template
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
        $context["currencies"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 1, $this->source); })()), "vars", [], "any", false, false, false, 1), "currencies", [], "any", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $context["priceModeGross"] = "GROSS_MODE";
        // line 4
        $context["priceModeNet"] = "NET_MODE";
        // line 5
        $context["priceModeBoth"] = "BOTH";
        // line 6
        echo "
";
        // line 7
        $context["priceModeCollection"] = twig_first($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "priceTable", [], "any", false, false, false, 7)));
        // line 8
        $context["priceTypeNames"] = twig_get_array_keys_filter(twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 8, $this->source); })()), "vars", [], "any", false, false, false, 8), "priceTypes", [], "any", false, false, false, 8)));
        // line 9
        echo "
";
        // line 10
        $context["hasPriceFieldsError"] = false;
        // line 11
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 11, $this->source); })()), "parent", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "errors", [], "any", false, false, false, 11))) {
            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 12, $this->source); })()), "parent", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 13
                echo "        ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 13), "getName", [], "any", false, false, false, 13), "prices"))) {
                    // line 14
                    echo "            ";
                    $context["hasPriceFieldsError"] = true;
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        echo "
<table id=\"price-table-collection\" class=\"table table-bordered\">
    <thead class=\"";
        // line 20
        if ((isset($context["hasPriceFieldsError"]) || array_key_exists("hasPriceFieldsError", $context) ? $context["hasPriceFieldsError"] : (function () { throw new RuntimeError('Variable "hasPriceFieldsError" does not exist.', 20, $this->source); })())) {
            echo "has-error";
        }
        echo "\">
        <tr>
            <th style=\"width: 50px; background-color:#FFF; border-top: 1px solid #FFF; border-bottom: 1px solid #FFF; border-left:1px solid #FFF; border-right:1px solid #FFF;\"></th>
            <th style=\"width: 50px; background-color:#FFF; border-top: 1px solid #FFF;  border-bottom: 1px solid #FFF;border-left:1px solid #FFF;\"></th>

            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["priceModeCollection"]) || array_key_exists("priceModeCollection", $context) ? $context["priceModeCollection"] : (function () { throw new RuntimeError('Variable "priceModeCollection" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["priceMode"] => $context["priceTypes"]) {
            // line 26
            echo "                ";
            $context["priceTypesLength"] = twig_length_filter($this->env, $context["priceTypes"]);
            // line 27
            echo "
                ";
            // line 28
            if ((1 === twig_compare((isset($context["priceTypesLength"]) || array_key_exists("priceTypesLength", $context) ? $context["priceTypesLength"] : (function () { throw new RuntimeError('Variable "priceTypesLength" does not exist.', 28, $this->source); })()), 0))) {
                // line 29
                echo "                    <th colspan=\"";
                echo twig_escape_filter($this->env, (isset($context["priceTypesLength"]) || array_key_exists("priceTypesLength", $context) ? $context["priceTypesLength"] : (function () { throw new RuntimeError('Variable "priceTypesLength" does not exist.', 29, $this->source); })()), "html", null, true);
                echo "\" style=\"text-align:center;\">
                        ";
                // line 30
                if ((0 === twig_compare((isset($context["priceModeGross"]) || array_key_exists("priceModeGross", $context) ? $context["priceModeGross"] : (function () { throw new RuntimeError('Variable "priceModeGross" does not exist.', 30, $this->source); })()), $context["priceMode"]))) {
                    // line 31
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gross price"), "html", null, true);
                    echo "
                        ";
                }
                // line 33
                echo "
                        ";
                // line 34
                if ((0 === twig_compare((isset($context["priceModeNet"]) || array_key_exists("priceModeNet", $context) ? $context["priceModeNet"] : (function () { throw new RuntimeError('Variable "priceModeNet" does not exist.', 34, $this->source); })()), $context["priceMode"]))) {
                    // line 35
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Net price"), "html", null, true);
                    echo "
                        ";
                }
                // line 37
                echo "                    </th>
                ";
            }
            // line 39
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['priceMode'], $context['priceTypes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tr>
        <tr>
            <td style=\"width: 50px; background-color:#FFF; border-top: 1px solid #FFF; border-left:1px solid #FFF; border-right:1px solid #FFF;\"></td>
            <td style=\"width: 50px; background-color:#FFF; border-top: 1px solid #FFF; border-left:1px solid #FFF;;\"></td>

            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["priceModeCollection"]) || array_key_exists("priceModeCollection", $context) ? $context["priceModeCollection"] : (function () { throw new RuntimeError('Variable "priceModeCollection" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["priceTypes"]) {
            // line 46
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($context["priceTypes"]));
            foreach ($context['_seq'] as $context["_key"] => $context["priceType"]) {
                // line 47
                echo "                    <td>";
                echo twig_escape_filter($this->env, $context["priceType"], "html", null, true);
                echo "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceTypes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tr>
    </thead>

    <tbody>
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "priceTable", [], "any", false, false, false, 54));
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
        foreach ($context['_seq'] as $context["storeName"] => $context["storeCurrencies"]) {
            // line 55
            echo "
        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["storeCurrencies"]);
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
            foreach ($context['_seq'] as $context["currencyIsoCode"] => $context["priceModes"]) {
                // line 57
                echo "            <tr>
                ";
                // line 58
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 58)) {
                    // line 59
                    echo "                    <td style=\"background-color:#F5F5F6; text-align: center; vertical-align: middle; font-weight:bold\" rowspan=\"";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["storeCurrencies"]), "html", null, true);
                    echo "\">
                        ";
                    // line 60
                    echo twig_escape_filter($this->env, $context["storeName"], "html", null, true);
                    echo "
                    </td>
                ";
                }
                // line 63
                echo "
                <td style=\"background-color:#F5F5F6; text-align: center; vertical-align: middle; font-weight:bold\">
                    <div>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new RuntimeError('Variable "currencies" does not exist.', 65, $this->source); })()), $context["currencyIsoCode"], [], "array", false, false, false, 65), "symbol", [], "any", false, false, false, 65), "html", null, true);
                echo "</div>

                    ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["priceTypeNames"]) || array_key_exists("priceTypeNames", $context) ? $context["priceTypeNames"] : (function () { throw new RuntimeError('Variable "priceTypeNames" does not exist.', 67, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["priceTypeName"]) {
                    // line 68
                    echo "                        <div style=\"padding-top: 5px;\">
                            ";
                    // line 69
                    $this->loadTemplate("@ProductManagement/_partials/product_volume_price_action_button.twig", "@ProductManagement/_partials/product_price_collection.twig", 69)->display(twig_array_merge($context, ["moneyValueFormViewCollection" =>                     // line 70
(isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 70, $this->source); })()), "priceType" =>                     // line 71
$context["priceTypeName"]]));
                    // line 73
                    echo "                        </div>
                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceTypeName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "
                </td>

               ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["priceModes"]);
                foreach ($context['_seq'] as $context["priceMode"] => $context["priceTypes"]) {
                    // line 79
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["priceTypes"]);
                    foreach ($context['_seq'] as $context["priceType"] => $context["productMoneyValueForView"]) {
                        // line 80
                        echo "
                        ";
                        // line 81
                        $context["moneyValue"] = twig_get_attribute($this->env, $this->source, $context["productMoneyValueForView"], "moneyValue", [], "any", false, false, false, 81);
                        // line 82
                        echo "                        ";
                        $context["priceTypeTransfer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMoneyValueForView"], "vars", [], "any", false, false, false, 82), "price_type", [], "any", false, false, false, 82);
                        // line 83
                        echo "
                        ";
                        // line 84
                        if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["priceTypeTransfer"]) || array_key_exists("priceTypeTransfer", $context) ? $context["priceTypeTransfer"] : (function () { throw new RuntimeError('Variable "priceTypeTransfer" does not exist.', 84, $this->source); })()), "priceModeConfiguration", [], "any", false, false, false, 84), (isset($context["priceModeGross"]) || array_key_exists("priceModeGross", $context) ? $context["priceModeGross"] : (function () { throw new RuntimeError('Variable "priceModeGross" does not exist.', 84, $this->source); })()))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["priceTypeTransfer"]) || array_key_exists("priceTypeTransfer", $context) ? $context["priceTypeTransfer"] : (function () { throw new RuntimeError('Variable "priceTypeTransfer" does not exist.', 84, $this->source); })()), "priceModeConfiguration", [], "any", false, false, false, 84), (isset($context["priceModeBoth"]) || array_key_exists("priceModeBoth", $context) ? $context["priceModeBoth"] : (function () { throw new RuntimeError('Variable "priceModeBoth" does not exist.', 84, $this->source); })())))) && (0 === twig_compare($context["priceMode"], (isset($context["priceModeGross"]) || array_key_exists("priceModeGross", $context) ? $context["priceModeGross"] : (function () { throw new RuntimeError('Variable "priceModeGross" does not exist.', 84, $this->source); })()))))) {
                            // line 85
                            echo "                            <td class=\"";
                            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValue"]) || array_key_exists("moneyValue", $context) ? $context["moneyValue"] : (function () { throw new RuntimeError('Variable "moneyValue" does not exist.', 85, $this->source); })()), "gross_amount", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "errors", [], "any", false, false, false, 85)), 0))) {
                                echo "has-error";
                            }
                            echo "\">
                                ";
                            // line 86
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["moneyValue"]) || array_key_exists("moneyValue", $context) ? $context["moneyValue"] : (function () { throw new RuntimeError('Variable "moneyValue" does not exist.', 86, $this->source); })()), "gross_amount", [], "any", false, false, false, 86), 'widget');
                            echo "
                                <div class=\"";
                            // line 87
                            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValue"]) || array_key_exists("moneyValue", $context) ? $context["moneyValue"] : (function () { throw new RuntimeError('Variable "moneyValue" does not exist.', 87, $this->source); })()), "gross_amount", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "errors", [], "any", false, false, false, 87)), 0))) {
                                echo "has-error";
                            }
                            echo "\">
                                    ";
                            // line 88
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["moneyValue"]) || array_key_exists("moneyValue", $context) ? $context["moneyValue"] : (function () { throw new RuntimeError('Variable "moneyValue" does not exist.', 88, $this->source); })()), "gross_amount", [], "any", false, false, false, 88), 'errors');
                            echo "
                                </div>
                            </td>
                        ";
                        }
                        // line 92
                        echo "
                        ";
                        // line 93
                        if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["priceTypeTransfer"]) || array_key_exists("priceTypeTransfer", $context) ? $context["priceTypeTransfer"] : (function () { throw new RuntimeError('Variable "priceTypeTransfer" does not exist.', 93, $this->source); })()), "priceModeConfiguration", [], "any", false, false, false, 93), (isset($context["priceModeNet"]) || array_key_exists("priceModeNet", $context) ? $context["priceModeNet"] : (function () { throw new RuntimeError('Variable "priceModeNet" does not exist.', 93, $this->source); })()))) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["priceTypeTransfer"]) || array_key_exists("priceTypeTransfer", $context) ? $context["priceTypeTransfer"] : (function () { throw new RuntimeError('Variable "priceTypeTransfer" does not exist.', 93, $this->source); })()), "priceModeConfiguration", [], "any", false, false, false, 93), (isset($context["priceModeBoth"]) || array_key_exists("priceModeBoth", $context) ? $context["priceModeBoth"] : (function () { throw new RuntimeError('Variable "priceModeBoth" does not exist.', 93, $this->source); })())))) && (0 === twig_compare($context["priceMode"], (isset($context["priceModeNet"]) || array_key_exists("priceModeNet", $context) ? $context["priceModeNet"] : (function () { throw new RuntimeError('Variable "priceModeNet" does not exist.', 93, $this->source); })()))))) {
                            // line 94
                            echo "                            <td class=\"";
                            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValue"]) || array_key_exists("moneyValue", $context) ? $context["moneyValue"] : (function () { throw new RuntimeError('Variable "moneyValue" does not exist.', 94, $this->source); })()), "net_amount", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "errors", [], "any", false, false, false, 94)), 0))) {
                                echo "has-error";
                            }
                            echo "\">
                                ";
                            // line 95
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["moneyValue"]) || array_key_exists("moneyValue", $context) ? $context["moneyValue"] : (function () { throw new RuntimeError('Variable "moneyValue" does not exist.', 95, $this->source); })()), "net_amount", [], "any", false, false, false, 95), 'widget');
                            echo "
                                <div class=\"";
                            // line 96
                            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValue"]) || array_key_exists("moneyValue", $context) ? $context["moneyValue"] : (function () { throw new RuntimeError('Variable "moneyValue" does not exist.', 96, $this->source); })()), "net_amount", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "errors", [], "any", false, false, false, 96)), 0))) {
                                echo "has-error";
                            }
                            echo "\">
                                    ";
                            // line 97
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["moneyValue"]) || array_key_exists("moneyValue", $context) ? $context["moneyValue"] : (function () { throw new RuntimeError('Variable "moneyValue" does not exist.', 97, $this->source); })()), "net_amount", [], "any", false, false, false, 97), 'errors');
                            echo "
                                </div>
                            </td>
                         ";
                        }
                        // line 101
                        echo "
                        ";
                        // line 102
                        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValue"]) || array_key_exists("moneyValue", $context) ? $context["moneyValue"] : (function () { throw new RuntimeError('Variable "moneyValue" does not exist.', 102, $this->source); })()), "fk_currency", [], "any", false, false, false, 102), "isRendered", [], "any", false, false, false, 102)) {
                            // line 103
                            echo "                            ";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["moneyValue"]) || array_key_exists("moneyValue", $context) ? $context["moneyValue"] : (function () { throw new RuntimeError('Variable "moneyValue" does not exist.', 103, $this->source); })()), "fk_currency", [], "any", false, false, false, 103), 'row');
                            echo "
                        ";
                        }
                        // line 105
                        echo "
                        ";
                        // line 106
                        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["moneyValue"]) || array_key_exists("moneyValue", $context) ? $context["moneyValue"] : (function () { throw new RuntimeError('Variable "moneyValue" does not exist.', 106, $this->source); })()), "fk_store", [], "any", false, false, false, 106), "isRendered", [], "any", false, false, false, 106)) {
                            // line 107
                            echo "                            ";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["moneyValue"]) || array_key_exists("moneyValue", $context) ? $context["moneyValue"] : (function () { throw new RuntimeError('Variable "moneyValue" does not exist.', 107, $this->source); })()), "fk_store", [], "any", false, false, false, 107), 'row');
                            echo "
                        ";
                        }
                        // line 109
                        echo "
                        ";
                        // line 110
                        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["productMoneyValueForView"], "fk_price_type", [], "any", false, false, false, 110), "isRendered", [], "any", false, false, false, 110)) {
                            // line 111
                            echo "                            ";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["productMoneyValueForView"], "fk_price_type", [], "any", false, false, false, 111), 'row');
                            echo "
                        ";
                        }
                        // line 113
                        echo "                   ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['priceType'], $context['productMoneyValueForView'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['priceMode'], $context['priceTypes'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "         </tr>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['currencyIsoCode'], $context['priceModes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['storeName'], $context['storeCurrencies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "    </tbody>
</table>

";
        // line 121
        twig_get_attribute($this->env, $this->source, (isset($context["moneyValueFormViewCollection"]) || array_key_exists("moneyValueFormViewCollection", $context) ? $context["moneyValueFormViewCollection"] : (function () { throw new RuntimeError('Variable "moneyValueFormViewCollection" does not exist.', 121, $this->source); })()), "setRendered", [], "any", false, false, false, 121);
    }

    public function getTemplateName()
    {
        return "@ProductManagement/_partials/product_price_collection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 121,  435 => 118,  421 => 117,  406 => 115,  400 => 114,  394 => 113,  388 => 111,  386 => 110,  383 => 109,  377 => 107,  375 => 106,  372 => 105,  366 => 103,  364 => 102,  361 => 101,  354 => 97,  348 => 96,  344 => 95,  337 => 94,  335 => 93,  332 => 92,  325 => 88,  319 => 87,  315 => 86,  308 => 85,  306 => 84,  303 => 83,  300 => 82,  298 => 81,  295 => 80,  290 => 79,  286 => 78,  281 => 75,  266 => 73,  264 => 71,  263 => 70,  262 => 69,  259 => 68,  242 => 67,  237 => 65,  233 => 63,  227 => 60,  222 => 59,  220 => 58,  217 => 57,  200 => 56,  197 => 55,  180 => 54,  174 => 50,  168 => 49,  159 => 47,  154 => 46,  150 => 45,  143 => 40,  137 => 39,  133 => 37,  127 => 35,  125 => 34,  122 => 33,  116 => 31,  114 => 30,  109 => 29,  107 => 28,  104 => 27,  101 => 26,  97 => 25,  87 => 20,  83 => 18,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  62 => 12,  60 => 11,  58 => 10,  55 => 9,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currencies = moneyValueFormViewCollection.vars.currencies %}

{% set priceModeGross = 'GROSS_MODE' %}
{% set priceModeNet = 'NET_MODE' %}
{% set priceModeBoth = 'BOTH' %}

{% set priceModeCollection = moneyValueFormViewCollection.vars.priceTable | first | first %}
{% set priceTypeNames = moneyValueFormViewCollection.vars.priceTypes | first | keys %}

{% set hasPriceFieldsError = false %}
{% if moneyValueFormViewCollection.parent.vars.errors|length %}
    {% for error in moneyValueFormViewCollection.parent.vars.errors %}
        {% if error.origin.getName == 'prices' %}
            {% set hasPriceFieldsError = true %}
        {% endif %}
    {% endfor %}
{% endif %}

<table id=\"price-table-collection\" class=\"table table-bordered\">
    <thead class=\"{% if hasPriceFieldsError %}has-error{% endif %}\">
        <tr>
            <th style=\"width: 50px; background-color:#FFF; border-top: 1px solid #FFF; border-bottom: 1px solid #FFF; border-left:1px solid #FFF; border-right:1px solid #FFF;\"></th>
            <th style=\"width: 50px; background-color:#FFF; border-top: 1px solid #FFF;  border-bottom: 1px solid #FFF;border-left:1px solid #FFF;\"></th>

            {% for priceMode, priceTypes in priceModeCollection %}
                {% set priceTypesLength = priceTypes|length %}

                {% if priceTypesLength > 0 %}
                    <th colspan=\"{{ priceTypesLength }}\" style=\"text-align:center;\">
                        {% if priceModeGross == priceMode %}
                            {{ 'Gross price' | trans }}
                        {% endif %}

                        {% if priceModeNet == priceMode %}
                            {{ 'Net price' | trans }}
                        {% endif %}
                    </th>
                {% endif %}
            {% endfor %}
        </tr>
        <tr>
            <td style=\"width: 50px; background-color:#FFF; border-top: 1px solid #FFF; border-left:1px solid #FFF; border-right:1px solid #FFF;\"></td>
            <td style=\"width: 50px; background-color:#FFF; border-top: 1px solid #FFF; border-left:1px solid #FFF;;\"></td>

            {% for priceTypes in priceModeCollection %}
                {% for priceType in priceTypes | keys %}
                    <td>{{ priceType }}</td>
                {% endfor %}
            {% endfor %}
        </tr>
    </thead>

    <tbody>
    {% for storeName, storeCurrencies in moneyValueFormViewCollection.vars.priceTable %}

        {% for currencyIsoCode, priceModes in storeCurrencies %}
            <tr>
                {% if loop.first %}
                    <td style=\"background-color:#F5F5F6; text-align: center; vertical-align: middle; font-weight:bold\" rowspan=\"{{ storeCurrencies|length }}\">
                        {{ storeName }}
                    </td>
                {% endif %}

                <td style=\"background-color:#F5F5F6; text-align: center; vertical-align: middle; font-weight:bold\">
                    <div>{{ currencies[currencyIsoCode].symbol }}</div>

                    {% for priceTypeName in priceTypeNames %}
                        <div style=\"padding-top: 5px;\">
                            {% include '@ProductManagement/_partials/product_volume_price_action_button.twig' with {
                                moneyValueFormViewCollection: moneyValueFormViewCollection,
                                priceType: priceTypeName,
                            } %}
                        </div>
                    {% endfor %}

                </td>

               {% for priceMode, priceTypes in priceModes %}
                    {% for priceType, productMoneyValueForView in priceTypes %}

                        {% set moneyValue = productMoneyValueForView.moneyValue %}
                        {% set priceTypeTransfer = productMoneyValueForView.vars.price_type %}

                        {% if (priceTypeTransfer.priceModeConfiguration == priceModeGross or priceTypeTransfer.priceModeConfiguration == priceModeBoth) and priceMode == priceModeGross %}
                            <td class=\"{% if moneyValue.gross_amount.vars.errors|length > 0 %}has-error{% endif %}\">
                                {{ form_widget(moneyValue.gross_amount) }}
                                <div class=\"{% if moneyValue.gross_amount.vars.errors|length > 0 %}has-error{% endif %}\">
                                    {{ form_errors(moneyValue.gross_amount) }}
                                </div>
                            </td>
                        {%  endif %}

                        {%  if (priceTypeTransfer.priceModeConfiguration == priceModeNet or priceTypeTransfer.priceModeConfiguration == priceModeBoth) and priceMode == priceModeNet %}
                            <td class=\"{% if moneyValue.net_amount.vars.errors|length > 0 %}has-error{% endif %}\">
                                {{ form_widget(moneyValue.net_amount) }}
                                <div class=\"{% if moneyValue.net_amount.vars.errors|length > 0 %}has-error{% endif %}\">
                                    {{ form_errors(moneyValue.net_amount) }}
                                </div>
                            </td>
                         {%  endif %}

                        {% if not moneyValue.fk_currency.isRendered %}
                            {{ form_row(moneyValue.fk_currency) }}
                        {% endif %}

                        {% if not moneyValue.fk_store.isRendered %}
                            {{ form_row(moneyValue.fk_store) }}
                        {% endif %}

                        {% if not productMoneyValueForView.fk_price_type.isRendered %}
                            {{ form_row(productMoneyValueForView.fk_price_type) }}
                        {% endif %}
                   {% endfor %}
                {% endfor %}
         </tr>
        {% endfor %}
    {% endfor %}
    </tbody>
</table>

{% do moneyValueFormViewCollection.setRendered %}
", "@ProductManagement/_partials/product_price_collection.twig", "/data/vendor/spryker/product-management/src/Spryker/Zed/ProductManagement/Presentation//_partials/product_price_collection.twig");
    }
}
