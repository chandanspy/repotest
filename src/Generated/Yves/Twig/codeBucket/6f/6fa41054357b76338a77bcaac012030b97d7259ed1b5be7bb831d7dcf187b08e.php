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

/* @CatalogPage/components/organisms/filter-section/filter-section.twig */
class __TwigTemplate_e8e4f72731fd2db8ce7e6077fdc811784bdfef9676eb060822f3c26a42f30413 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'extraClass' => [$this, 'block_extraClass'],
            'body' => [$this, 'block_body'],
            'filters' => [$this, 'block_filters'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["filter-section", "@SprykerShop:CatalogPage"]), "@CatalogPage/components/organisms/filter-section/filter-section.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $context["isContentPresent"] = (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "facets", [], "any", false, false, false, 3)), 0));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_extraClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 6, $this->source); })()), "jsName", [], "any", false, false, false, 6), "html", null, true);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        $context["triggerButtonJsName"] = ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "parentJsName", [], "any", false, false, false, 10)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "parentJsName", [], "any", false, false, false, 10) . "__trigger")) : (""));
        // line 11
        echo "
    ";
        // line 12
        if ((isset($context["isContentPresent"]) || array_key_exists("isContentPresent", $context) ? $context["isContentPresent"] : (function () { throw new RuntimeError('Variable "isContentPresent" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "        <h3 class=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13) . "__title"), "html", null, true);
            echo " is-hidden-lg-xxl\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.and.sorting.button"), "html", null, true);
            echo "</h3>
        <button class=\"";
            // line 14
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14) . "__close"), "html", null, true);
            echo " is-hidden-lg-xxl js-catalog-filters-trigger\">
            ";
            // line 15
            $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@CatalogPage/components/organisms/filter-section/filter-section.twig", 15)->display(twig_to_array(["data" => ["name" => "cross"]]));
            // line 20
            echo "        </button>

        <div class=\"";
            // line 22
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22) . "__sorting ") . twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 22, $this->source); })()), "jsName", [], "any", false, false, false, 22)) . "__sorting"), "html", null, true);
            echo " is-hidden-lg-xxl\"></div>
        <div class=\"";
            // line 23
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23) . "__holder ") . twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 23, $this->source); })()), "jsName", [], "any", false, false, false, 23)) . "__holder"), "html", null, true);
            echo "\">
            ";
            // line 24
            $context["facets"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "filteredFacets", [], "any", false, false, false, 24))) ? (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "filteredFacets", [], "any", false, false, false, 24)) : (twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "facets", [], "any", false, false, false, 24)));
            // line 25
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["facets"]) || array_key_exists("facets", $context) ? $context["facets"] : (function () { throw new RuntimeError('Variable "facets" does not exist.', 25, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 26
                echo "                ";
                $context["filterHasValues"] = ( !twig_get_attribute($this->env, $this->source, $context["filter"], "values", [], "any", true, true, false, 26) || (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["filter"], "values", [], "any", false, false, false, 26)), 0)));
                // line 27
                echo "                ";
                $context["togglerClass"] = "";
                // line 28
                echo "
                ";
                // line 29
                if ((isset($context["filterHasValues"]) || array_key_exists("filterHasValues", $context) ? $context["filterHasValues"] : (function () { throw new RuntimeError('Variable "filterHasValues" does not exist.', 29, $this->source); })())) {
                    // line 30
                    echo "                    ";
                    $this->displayBlock('filters', $context, $blocks);
                    // line 79
                    echo "                ";
                }
                // line 80
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "        </div>

        <button type=\"button\" class=\"button button--expand button--big ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 83, $this->source); })()), "name", [], "any", false, false, false, 83), "html", null, true);
            echo "__button ";
            echo twig_escape_filter($this->env, (isset($context["triggerButtonJsName"]) || array_key_exists("triggerButtonJsName", $context) ? $context["triggerButtonJsName"] : (function () { throw new RuntimeError('Variable "triggerButtonJsName" does not exist.', 83, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.button"), "html", null, true);
            echo "</button>
    ";
        }
    }

    // line 30
    public function block_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "                        ";
        $context["isFilterCategory"] = (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "category"));
        // line 32
        echo "                        ";
        $context["itemClass"] = (((isset($context["isFilterCategory"]) || array_key_exists("isFilterCategory", $context) ? $context["isFilterCategory"] : (function () { throw new RuntimeError('Variable "isFilterCategory" does not exist.', 32, $this->source); })())) ? ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32) . "__item--hollow")) : (""));
        // line 33
        echo "                        ";
        $context["itemTitleClass"] = (((isset($context["isFilterCategory"]) || array_key_exists("isFilterCategory", $context) ? $context["isFilterCategory"] : (function () { throw new RuntimeError('Variable "isFilterCategory" does not exist.', 33, $this->source); })())) ? ("is-hidden-lg-xxl") : (""));
        // line 34
        echo "
                        <div class=\"";
        // line 35
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35) . "__item"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["itemClass"]) || array_key_exists("itemClass", $context) ? $context["itemClass"] : (function () { throw new RuntimeError('Variable "itemClass" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\">
                            <h2 class=\"title title--h6 ";
        // line 36
        echo twig_escape_filter($this->env, (((((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36) . "__item-title toggler-accordion__item ") . twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 36, $this->source); })()), "jsName", [], "any", false, false, false, 36)) . "__trigger") . "-") . twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["itemTitleClass"]) || array_key_exists("itemTitleClass", $context) ? $context["itemTitleClass"] : (function () { throw new RuntimeError('Variable "itemTitleClass" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\"
                                data-toggle-target=\".";
        // line 37
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 37, $this->source); })()), "jsName", [], "any", false, false, false, 37) . "__") . twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37)), "html", null, true);
        echo "\">
                                ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("product.filter." . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38)))), "html", null, true);
        echo "
                                ";
        // line 39
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@CatalogPage/components/organisms/filter-section/filter-section.twig", 39)->display(twig_to_array(["class" => "toggler-accordion__icon", "modifiers" => [0 => "small"], "data" => ["name" => "caret-down"]]));
        // line 46
        echo "                            </h2>
                            ";
        // line 47
        $context["contentModifier"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "category"))) ? ((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47) . "__item-content--hollow")) : (""));
        // line 48
        echo "                            ";
        $context["hiddenClassToToggleSections"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "category"))) ? ("is-hidden-sm-md") : ("is-hidden"));
        // line 49
        echo "                            ";
        $context["togglerClass"] = ((((((((twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49) . "__item-content ") . twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 49, $this->source); })()), "jsName", [], "any", false, false, false, 49)) . "__") . twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49)) . " ") . (isset($context["hiddenClassToToggleSections"]) || array_key_exists("hiddenClassToToggleSections", $context) ? $context["hiddenClassToToggleSections"] : (function () { throw new RuntimeError('Variable "hiddenClassToToggleSections" does not exist.', 49, $this->source); })())) . " ") . (isset($context["contentModifier"]) || array_key_exists("contentModifier", $context) ? $context["contentModifier"] : (function () { throw new RuntimeError('Variable "contentModifier" does not exist.', 49, $this->source); })()));
        // line 50
        echo "
                            ";
        // line 51
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate([0 => call_user_func_array($this->env->getFunction('molecule')->getCallable(), [("filter-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 52
(isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 52, $this->source); })()), "config", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52)), "CatalogPage"]), 1 => call_user_func_array($this->env->getFunction('molecule')->getCallable(), [("filter-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 53
(isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 53, $this->source); })()), "config", [], "any", false, false, false, 53), "type", [], "any", false, false, false, 53)), "CatalogPage"])], "@CatalogPage/components/organisms/filter-section/filter-section.twig", 51);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display(twig_to_array(["data" => ["filterPath" => twig_get_attribute($this->env, $this->source,             // line 56
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "filterPath", [], "any", false, false, false, 56), "categories" => twig_get_attribute($this->env, $this->source,             // line 57
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()), "categories", [], "any", false, false, false, 57), "filter" =>             // line 58
(isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 58, $this->source); })()), "parameter" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 59
($context["filter"] ?? null), "config", [], "any", false, true, false, 59), "parameterName", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "config", [], "any", false, true, false, 59), "parameterName", [], "any", false, false, false, 59))) : ("")), "min" => ((twig_get_attribute($this->env, $this->source,             // line 60
($context["filter"] ?? null), "min", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "min", [], "any", false, false, false, 60), 0)) : (0)), "max" => ((twig_get_attribute($this->env, $this->source,             // line 61
($context["filter"] ?? null), "max", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "max", [], "any", false, false, false, 61), 0)) : (0)), "activeMin" => ((twig_get_attribute($this->env, $this->source,             // line 62
($context["filter"] ?? null), "activeMin", [], "any", true, true, false, 62)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "activeMin", [], "any", false, false, false, 62), 0)) : (0)), "activeMax" => ((twig_get_attribute($this->env, $this->source,             // line 63
($context["filter"] ?? null), "activeMax", [], "any", true, true, false, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "activeMax", [], "any", false, false, false, 63), 0)) : (0)), "isEmptyCategoryFilterValueVisible" => twig_get_attribute($this->env, $this->source,             // line 64
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 64, $this->source); })()), "isEmptyCategoryFilterValueVisible", [], "any", false, false, false, 64), "parentJsName" => twig_get_attribute($this->env, $this->source,             // line 65
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 65, $this->source); })()), "parentJsName", [], "any", false, false, false, 65)], "class" =>             // line 67
(isset($context["togglerClass"]) || array_key_exists("togglerClass", $context) ? $context["togglerClass"] : (function () { throw new RuntimeError('Variable "togglerClass" does not exist.', 67, $this->source); })())]));
        }
        // line 69
        echo "
                            ";
        // line 70
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["toggler-accordion"]), "@CatalogPage/components/organisms/filter-section/filter-section.twig", 70)->display(twig_to_array(["attributes" => ["wrap-class-name" => (twig_get_attribute($this->env, $this->source,         // line 72
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 72, $this->source); })()), "jsName", [], "any", false, false, false, 72) . "__holder"), "trigger-class-name" => ((twig_get_attribute($this->env, $this->source,         // line 73
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 73, $this->source); })()), "jsName", [], "any", false, false, false, 73) . "__trigger-") . twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73)), "class-to-toggle" =>         // line 74
(isset($context["hiddenClassToToggleSections"]) || array_key_exists("hiddenClassToToggleSections", $context) ? $context["hiddenClassToToggleSections"] : (function () { throw new RuntimeError('Variable "hiddenClassToToggleSections" does not exist.', 74, $this->source); })())]]));
        // line 77
        echo "                        </div>
                    ";
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/organisms/filter-section/filter-section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 77,  245 => 74,  244 => 73,  243 => 72,  242 => 70,  239 => 69,  236 => 67,  235 => 65,  234 => 64,  233 => 63,  232 => 62,  231 => 61,  230 => 60,  229 => 59,  228 => 58,  227 => 57,  226 => 56,  220 => 53,  219 => 52,  216 => 51,  213 => 50,  210 => 49,  207 => 48,  205 => 47,  202 => 46,  200 => 39,  196 => 38,  192 => 37,  186 => 36,  180 => 35,  177 => 34,  174 => 33,  171 => 32,  168 => 31,  164 => 30,  153 => 83,  149 => 81,  135 => 80,  132 => 79,  129 => 30,  127 => 29,  124 => 28,  121 => 27,  118 => 26,  100 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 20,  84 => 15,  80 => 14,  73 => 13,  71 => 12,  68 => 11,  65 => 10,  61 => 9,  54 => 6,  50 => 5,  46 => 1,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends organism('filter-section', '@SprykerShop:CatalogPage') %}

{% set isContentPresent = data.facets | length > 0 %}

{% block extraClass %}
    {{ config.jsName }}
{% endblock %}

{% block body %}
    {% set triggerButtonJsName = data.parentJsName ? data.parentJsName ~ '__trigger' %}

    {% if isContentPresent %}
        <h3 class=\"{{ config.name ~ '__title' }} is-hidden-lg-xxl\">{{ 'catalog.filter.and.sorting.button' | trans }}</h3>
        <button class=\"{{ config.name ~ '__close' }} is-hidden-lg-xxl js-catalog-filters-trigger\">
            {% include atom('icon') with {
                data: {
                    name: 'cross',
                },
            } only %}
        </button>

        <div class=\"{{ config.name ~ '__sorting ' ~ config.jsName ~ '__sorting' }} is-hidden-lg-xxl\"></div>
        <div class=\"{{ config.name ~ '__holder ' ~ config.jsName ~ '__holder' }}\">
            {% set facets = data.filteredFacets is not empty ? data.filteredFacets : data.facets %}
            {% for filter in facets %}
                {% set filterHasValues = filter.values is not defined or filter.values | length > 0 %}
                {% set togglerClass = '' %}

                {% if filterHasValues %}
                    {% block filters %}
                        {% set isFilterCategory = filter.name == 'category' %}
                        {% set itemClass = isFilterCategory ? config.name ~ '__item--hollow' %}
                        {% set itemTitleClass = isFilterCategory ? 'is-hidden-lg-xxl' %}

                        <div class=\"{{ config.name ~ '__item' }} {{ itemClass }}\">
                            <h2 class=\"title title--h6 {{ config.name ~ '__item-title toggler-accordion__item ' ~ config.jsName ~ '__trigger' ~ '-' ~ filter.name }} {{ itemTitleClass }}\"
                                data-toggle-target=\".{{ config.jsName ~ '__' ~ filter.name }}\">
                                {{ ('product.filter.' ~ filter.name | lower) | trans }}
                                {% include atom('icon') with {
                                    class: 'toggler-accordion__icon',
                                    modifiers: ['small'],
                                    data: {
                                        name: 'caret-down',
                                    },
                                } only %}
                            </h2>
                            {% set contentModifier = filter.name == 'category' ? config.name ~ '__item-content--hollow' : '' %}
                            {% set hiddenClassToToggleSections = filter.name == 'category' ? 'is-hidden-sm-md' : 'is-hidden' %}
                            {% set togglerClass = config.name ~ '__item-content ' ~ config.jsName ~ '__' ~ filter.name ~ ' ' ~ hiddenClassToToggleSections ~ ' ' ~ contentModifier %}

                            {% include [
                                molecule('filter-' ~ filter.config.name, 'CatalogPage'),
                                molecule('filter-' ~ filter.config.type, 'CatalogPage'),
                                ] ignore missing with {
                                data: {
                                    filterPath: data.filterPath,
                                    categories: data.categories,
                                    filter: filter,
                                    parameter: filter.config.parameterName | default,
                                    min: filter.min | default(0),
                                    max: filter.max | default(0),
                                    activeMin: filter.activeMin | default(0),
                                    activeMax: filter.activeMax | default(0),
                                    isEmptyCategoryFilterValueVisible: data.isEmptyCategoryFilterValueVisible,
                                    parentJsName: data.parentJsName,
                                },
                                class: togglerClass,
                            } only %}

                            {% include molecule('toggler-accordion') with {
                                attributes: {
                                    'wrap-class-name': config.jsName ~ '__holder',
                                    'trigger-class-name': config.jsName ~ '__trigger-' ~ filter.name,
                                    'class-to-toggle': hiddenClassToToggleSections,
                                },
                            } only %}
                        </div>
                    {% endblock %}
                {% endif %}
            {% endfor %}
        </div>

        <button type=\"button\" class=\"button button--expand button--big {{ config.name }}__button {{ triggerButtonJsName }}\">{{ 'catalog.filter.button' | trans }}</button>
    {% endif %}
{% endblock %}
", "@CatalogPage/components/organisms/filter-section/filter-section.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/organisms/filter-section/filter-section.twig");
    }
}
