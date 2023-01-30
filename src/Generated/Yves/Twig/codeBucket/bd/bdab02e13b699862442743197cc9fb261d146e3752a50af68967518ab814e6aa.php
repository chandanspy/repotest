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

/* @ShopUi/resources/form/form.twig */
class __TwigTemplate_3ab582d74cb9b7b268e1af39cde27bb3bc83d591f5b0f58e9940a4e01248ffde extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'textarea_widget' => [$this, 'block_textarea_widget'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'password_widget' => [$this, 'block_password_widget'],
            'form_row' => [$this, 'block_form_row'],
            'form_rows' => [$this, 'block_form_rows'],
            'checkbox_row' => [$this, 'block_checkbox_row'],
            'radio_row' => [$this, 'block_radio_row'],
            'form_label' => [$this, 'block_form_label'],
            'form_errors' => [$this, 'block_form_errors'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'date_widget' => [$this, 'block_date_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@ShopUi/resources/form/form.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 6, $this->source); })())) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\"";
        // line 8
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 8, $this->source); })())) {
            echo " disabled";
        }
        // line 9
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 9, $this->source); })())) {
            echo " required";
        }
        // line 10
        $this->displayBlock("attributes", $context, $blocks);
    }

    // line 13
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 14, $this->source); })()), "")) : ("")));
        // line 16
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 16, $this->source); })()), ["class" => twig_trim_filter((("input input--expand" . (( !twig_test_empty(        // line 17
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 17, $this->source); })()))) ? (" input--error") : (" "))) . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 17), "")) : ("")))), "type" => ((        // line 18
array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 18, $this->source); })()), "text")) : ("text")), "placeholder" => ((twig_get_attribute($this->env, $this->source,         // line 19
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 19), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 19, $this->source); })()))) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 19, $this->source); })())))]);
        // line 22
        echo "<input ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo " />";
    }

    // line 25
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 26, $this->source); })()), "")) : ("")));
        // line 28
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 28, $this->source); })()), ["class" => twig_trim_filter((("textarea textarea--expand" . (( !twig_test_empty(        // line 29
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 29, $this->source); })()))) ? (" textarea--error") : (" "))) . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 29), "")) : ("")))), "placeholder" => ((twig_get_attribute($this->env, $this->source,         // line 30
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 30), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 30, $this->source); })()))) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 30, $this->source); })())))]);
        // line 33
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 33, $this->source); })()))) {
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 33, $this->source); })()), "html", null, true);
        }
        echo "</textarea>";
    }

    // line 36
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 37, $this->source); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 37, $this->source); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new RuntimeError('Variable "placeholder_in_choices" does not exist.', 37, $this->source); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 37, $this->source); })())) && ( !twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "size", [], "any", true, true, false, 37) || (0 >= twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 37, $this->source); })()), "size", [], "any", false, false, false, 37), 1))))) {
            // line 38
            $context["required"] = false;
        }
        // line 41
        $context["modifiers"] = ((twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 41, $this->source); })()))) ? ([0 => "full-width"]) : ([0 => "full-width", 1 => "error"]));
        // line 43
        $this->loadTemplate("@ShopUi/resources/form/form.twig", "@ShopUi/resources/form/form.twig", 43, "865220080")->display(twig_to_array(["modifiers" =>         // line 44
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 44, $this->source); })()), "attributes" => ["multiple" =>         // line 46
(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 46, $this->source); })()), "placeholder" =>         // line 47
(isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 47, $this->source); })()), "required" =>         // line 48
(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 48, $this->source); })()), "config-width" => "100%"], "embed" => ["attributes" =>         $this->renderBlock("widget_attributes", $context, $blocks), "value" =>         // line 53
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 53, $this->source); })()), "translation_domain" =>         // line 54
(isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 54, $this->source); })()), "preferred_choices" =>         // line 55
(isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new RuntimeError('Variable "preferred_choices" does not exist.', 55, $this->source); })()), "choices" =>         // line 56
(isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 56, $this->source); })()), "separator" =>         // line 57
(isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new RuntimeError('Variable "separator" does not exist.', 57, $this->source); })()), "choice_translation_domain" =>         // line 58
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 58, $this->source); })()), "class" => (((twig_get_attribute($this->env, $this->source,         // line 59
($context["attr"] ?? null), "class", [], "any", true, true, false, 59) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 59)))) ? (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 59)) : (""))]]));
    }

    // line 108
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "<ul class=\"list ";
        echo ((twig_in_filter("--inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 109)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 109), "")) : ("")))) ? ("list--inline") : ("list--checkbox"));
        echo "\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 111
            echo "            <li class=\"list__item list__item--checkbox\">";
            // line 112
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,             // line 113
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 113)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 113), "")) : (""))]);
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,             // line 116
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 116)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 116), "")) : (""))]);
            // line 118
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "    </ul>";
    }

    // line 123
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 124, $this->source); })()), "checkbox")) : ("checkbox"));
        // line 125
        $context["component"] = ((array_key_exists("component", $context)) ? (_twig_default_filter((isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 125, $this->source); })()), call_user_func_array($this->env->getFunction('atom')->getCallable(), [(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 125, $this->source); })())]))) : (call_user_func_array($this->env->getFunction('atom')->getCallable(), [(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 125, $this->source); })())])));
        // line 126
        $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 126, $this->source); })()), $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 126, $this->source); })())))) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 126, $this->source); })())))));
        // line 127
        $context["modifiers"] = ((twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 127, $this->source); })()))) ? ([0 => "expand"]) : ([0 => "expand", 1 => "error"]));
        // line 128
        $context["inputClass"] = ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 128)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 128))) : (""));
        // line 130
if (!array_key_exists('attributes', $context)) {$context['attributes'] = [];}$context['attributes'] = array_replace_recursive(["id" =>         // line 131
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 131, $this->source); })()), "name" =>         // line 132
(isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 132, $this->source); })()), "checked" => ((        // line 133
array_key_exists("checked", $context)) ? (_twig_default_filter((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 133, $this->source); })()), false)) : (false)), "required" => ((        // line 134
array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 134, $this->source); })()), false)) : (false)), "disabled" => ((        // line 135
array_key_exists("disabled", $context)) ? (_twig_default_filter((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 135, $this->source); })()), false)) : (false)), "value" => ((        // line 136
array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 136, $this->source); })()))) : (""))], $context['attributes']);        // line 138
        echo "
    ";
        // line 139
        $this->loadTemplate((isset($context["component"]) || array_key_exists("component", $context) ? $context["component"] : (function () { throw new RuntimeError('Variable "component" does not exist.', 139, $this->source); })()), "@ShopUi/resources/form/form.twig", 139)->display(twig_to_array(["modifiers" =>         // line 140
(isset($context["modifiers"]) || array_key_exists("modifiers", $context) ? $context["modifiers"] : (function () { throw new RuntimeError('Variable "modifiers" does not exist.', 140, $this->source); })()), "data" => ["label" =>         // line 142
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 142, $this->source); })()), "inputClass" =>         // line 143
(isset($context["inputClass"]) || array_key_exists("inputClass", $context) ? $context["inputClass"] : (function () { throw new RuntimeError('Variable "inputClass" does not exist.', 143, $this->source); })())], "attributes" =>         // line 145
(isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 145, $this->source); })())]));
    }

    // line 149
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        $context["type"] = "radio";
        // line 151
        echo "    ";
        $this->displayBlock("checkbox_widget", $context, $blocks);
    }

    // line 154
    public function block_password_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 155, $this->source); })()), ["id" => ((        // line 156
array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 156, $this->source); })()), false)) : (false)), "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source,         // line 157
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 157)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 157), (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 157, $this->source); })()))) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 157, $this->source); })()))), (isset($context["attr_translation_parameters"]) || array_key_exists("attr_translation_parameters", $context) ? $context["attr_translation_parameters"] : (function () { throw new RuntimeError('Variable "attr_translation_parameters" does not exist.', 157, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 157, $this->source); })())), "name" =>         // line 158
(isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 158, $this->source); })()), "disabled" => ((        // line 159
array_key_exists("disabled", $context)) ? (_twig_default_filter((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 159, $this->source); })()), false)) : (false)), "required" => ((        // line 160
array_key_exists("required", $context)) ? (_twig_default_filter((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 160, $this->source); })()), false)) : (false))]);
        // line 163
        if (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "title", [], "any", true, true, false, 163)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "title", [], "any", false, false, false, 163))) : (""))) {
            // line 164
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 164, $this->source); })()), ["title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,             // line 165
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 165, $this->source); })()), "title", [], "any", false, false, false, 165), (isset($context["attr_translation_parameters"]) || array_key_exists("attr_translation_parameters", $context) ? $context["attr_translation_parameters"] : (function () { throw new RuntimeError('Variable "attr_translation_parameters" does not exist.', 165, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 165, $this->source); })()))]);
        }
        // line 168
        echo "
    ";
        // line 169
        $context["inputComplexityJsCLass"] = ("js-password-complexity-indicator__" . twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 169, $this->source); })()), "name", [], "any", false, false, false, 169));
        // line 170
        echo "
    ";
        // line 171
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["password-field"]), "@ShopUi/resources/form/form.twig", 171)->display(twig_to_array(["data" => ["inputAttributes" =>         // line 173
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 173, $this->source); })()), "inputExtraClasses" => twig_trim_filter(((("input input--expand " . (( !twig_test_empty(        // line 174
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 174, $this->source); })()))) ? (" input--error ") : (""))) . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 174)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 174))) : (""))) . (isset($context["inputComplexityJsCLass"]) || array_key_exists("inputComplexityJsCLass", $context) ? $context["inputComplexityJsCLass"] : (function () { throw new RuntimeError('Variable "inputComplexityJsCLass" does not exist.', 174, $this->source); })())))]]));
        // line 177
        echo "
    ";
        // line 178
        if (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "password_complexity_indicator", [], "any", true, true, false, 178)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "password_complexity_indicator", [], "any", false, false, false, 178))) : (""))) {
            // line 179
            echo "        ";
            $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["password-complexity-indicator"]), "@ShopUi/resources/form/form.twig", 179)->display(twig_to_array(["attributes" => ["input-class-name" =>             // line 181
(isset($context["inputComplexityJsCLass"]) || array_key_exists("inputComplexityJsCLass", $context) ? $context["inputComplexityJsCLass"] : (function () { throw new RuntimeError('Variable "inputComplexityJsCLass" does not exist.', 181, $this->source); })())]]));
            // line 184
            echo "    ";
        }
    }

    // line 189
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        $context["rowClass"] = ((twig_get_attribute($this->env, $this->source, ($context["rowAttr"] ?? null), "class", [], "any", true, true, false, 190)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["rowAttr"] ?? null), "class", [], "any", false, false, false, 190), "")) : (""));
        // line 192
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 192, $this->source); })()), "html", null, true);
        echo "\">";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), 'label');
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), 'errors');
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), 'widget');
        // line 196
        echo "</div>";
    }

    // line 199
    public function block_form_rows($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 201
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["child"], "isRendered", [], "any", false, false, false, 201)) {
                // line 202
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row', ["rowAttr" => ((                // line 203
array_key_exists("rowAttr", $context)) ? (_twig_default_filter((isset($context["rowAttr"]) || array_key_exists("rowAttr", $context) ? $context["rowAttr"] : (function () { throw new RuntimeError('Variable "rowAttr" does not exist.', 203, $this->source); })()), [])) : ([]))]);
            }
            // line 206
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 209
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 210
        $context["rowClass"] = ((twig_get_attribute($this->env, $this->source, ($context["rowAttr"] ?? null), "class", [], "any", true, true, false, 210)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["rowAttr"] ?? null), "class", [], "any", false, false, false, 210), "")) : (""));
        // line 212
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 212, $this->source); })()), "html", null, true);
        echo "\">";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), 'widget');
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), 'errors');
        // line 215
        echo "</div>";
    }

    // line 218
    public function block_radio_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 219
        $this->displayBlock("checkbox_row", $context, $blocks);
    }

    // line 224
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 225
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 225, $this->source); })()) === false)) {
            // line 226
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 226, $this->source); })())) {
                // line 227
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 227, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 227, $this->source); })()), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 227)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 227), "")) : ("")) . " label"))]);
                // line 228
                echo "        ";
            } else {
                // line 229
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 229, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 229, $this->source); })()), "class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 229)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 229), "")) : ("")) . " label label--title"))]);
            }
            // line 231
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 231, $this->source); })())) {
                // line 232
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 232, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 232)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 232), "")) : ("")) . " label--required"))]);
            }
            // line 234
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 234, $this->source); })()))) {
                // line 235
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 235, $this->source); })()))) {
                    // line 236
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 236, $this->source); })()), ["%name%" =>                     // line 237
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 237, $this->source); })()), "%id%" =>                     // line 238
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 238, $this->source); })())]);
                } else {
                    // line 241
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 241, $this->source); })()));
                }
            }
            // line 244
            echo "<label";
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 244, $this->source); })())) {
                $__internal_compile_0 = $context;
                $__internal_compile_1 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 244, $this->source); })())];
                if (!twig_test_iterable($__internal_compile_1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 244, $this->getSourceContext());
                }
                $__internal_compile_1 = twig_to_array($__internal_compile_1);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                $this->displayBlock("attributes", $context, $blocks);
                $context = $__internal_compile_0;
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 244, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 244, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 244, $this->source); })()), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 244, $this->source); })())))), "html", null, true);
            echo "</label>";
        }
    }

    // line 250
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 251
        echo "    ";
        ob_start();
        // line 252
        echo "        ";
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 252, $this->source); })())), 0))) {
            // line 253
            echo "            <ul class=\"list list--bullet list--alert\">
                ";
            // line 254
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 254, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 255
                echo "                    <li class=\"list__item\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 255)), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            echo "            </ul>
        ";
        }
        // line 259
        echo "    ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 251
        echo twig_spaceless($___internal_parse_1_);
    }

    // line 262
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 263
        if ((0 === twig_compare((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 263, $this->source); })()), "single_text"))) {
            // line 264
            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 264, $this->source); })()), "")) : ("")));
            // line 265
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 265, $this->source); })()), ["class" => twig_trim_filter((("input input--expand " . (( !twig_test_empty(            // line 266
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 266, $this->source); })()))) ? ("input--error ") : (""))) . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 266)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 266), "")) : ("")))), "type" => "text", "autocomplete" => "off", "placeholder" => ((twig_get_attribute($this->env, $this->source,             // line 269
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 269)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 269), "yyyy-mm-dd HH:mm")) : ("yyyy-mm-dd HH:mm"))]);
            // line 271
            echo "<input ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 271, $this->source); })())) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 271, $this->source); })()), "html", null, true);
                echo "\" ";
            }
            echo ">";
        } else {
            // line 273
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 274
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "date", [], "any", false, false, false, 274), 'errors');
            // line 275
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), "time", [], "any", false, false, false, 275), 'errors');
            // line 276
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "date", [], "any", false, false, false, 276), 'widget');
            // line 277
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 277, $this->source); })()), "time", [], "any", false, false, false, 277), 'widget');
            // line 278
            echo "</div>";
        }
    }

    // line 282
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 283
        if ((0 === twig_compare((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 283, $this->source); })()), "single_text"))) {
            // line 284
            $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 284, $this->source); })()), "")) : ("")));
            // line 285
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 285, $this->source); })()), ["class" => twig_trim_filter((("input input--expand " . (( !twig_test_empty(            // line 286
(isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 286, $this->source); })()))) ? ("input--error ") : (""))) . ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 286)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 286), "")) : ("")))), "type" => "text", "autocomplete" => "off", "placeholder" => ((twig_get_attribute($this->env, $this->source,             // line 289
($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 289)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", false, false, false, 289), "yyyy-mm-dd")) : ("yyyy-mm-dd"))]);
            // line 291
            echo "<input ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 291, $this->source); })())) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 291, $this->source); })()), "html", null, true);
                echo "\" ";
            }
            echo ">";
        } else {
            // line 293
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 294
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 294, $this->source); })()), ["{{ year }}" =>             // line 295
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "year", [], "any", false, false, false, 295), 'widget'), "{{ month }}" =>             // line 296
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), "month", [], "any", false, false, false, 296), 'widget'), "{{ day }}" =>             // line 297
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 297, $this->source); })()), "day", [], "any", false, false, false, 297), 'widget')]);
            // line 299
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "@ShopUi/resources/form/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 299,  506 => 297,  505 => 296,  504 => 295,  503 => 294,  499 => 293,  488 => 291,  486 => 289,  485 => 286,  484 => 285,  482 => 284,  480 => 283,  476 => 282,  471 => 278,  469 => 277,  467 => 276,  465 => 275,  463 => 274,  459 => 273,  448 => 271,  446 => 269,  445 => 266,  444 => 265,  442 => 264,  440 => 263,  436 => 262,  432 => 251,  429 => 259,  425 => 257,  416 => 255,  412 => 254,  409 => 253,  406 => 252,  403 => 251,  399 => 250,  380 => 244,  376 => 241,  373 => 238,  372 => 237,  371 => 236,  369 => 235,  367 => 234,  364 => 232,  362 => 231,  358 => 229,  355 => 228,  353 => 227,  351 => 226,  349 => 225,  345 => 224,  341 => 219,  337 => 218,  333 => 215,  331 => 214,  329 => 213,  325 => 212,  323 => 210,  319 => 209,  311 => 206,  308 => 203,  307 => 202,  304 => 201,  300 => 200,  296 => 199,  292 => 196,  290 => 195,  288 => 194,  286 => 193,  282 => 192,  280 => 190,  276 => 189,  271 => 184,  269 => 181,  267 => 179,  265 => 178,  262 => 177,  260 => 174,  259 => 173,  258 => 171,  255 => 170,  253 => 169,  250 => 168,  247 => 165,  246 => 164,  244 => 163,  242 => 160,  241 => 159,  240 => 158,  239 => 157,  238 => 156,  237 => 155,  233 => 154,  228 => 151,  226 => 150,  222 => 149,  218 => 145,  217 => 143,  216 => 142,  215 => 140,  214 => 139,  211 => 138,  210 => 136,  209 => 135,  208 => 134,  207 => 133,  206 => 132,  205 => 131,  204 => 130,  202 => 128,  200 => 127,  198 => 126,  196 => 125,  194 => 124,  190 => 123,  186 => 120,  179 => 118,  177 => 116,  176 => 115,  174 => 113,  173 => 112,  171 => 111,  167 => 110,  160 => 109,  156 => 108,  152 => 59,  151 => 58,  150 => 57,  149 => 56,  148 => 55,  147 => 54,  146 => 53,  145 => 48,  144 => 47,  143 => 46,  142 => 44,  141 => 43,  139 => 41,  136 => 38,  134 => 37,  130 => 36,  120 => 33,  118 => 30,  117 => 29,  116 => 28,  114 => 26,  110 => 25,  98 => 22,  96 => 19,  95 => 18,  94 => 17,  93 => 16,  91 => 14,  87 => 13,  83 => 10,  79 => 9,  75 => 8,  71 => 7,  65 => 6,  61 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'form_div_layout.html.twig' %}

{# widgets #}

{%- block widget_attributes -%}
    {%- if id %}id=\"{{ id }}\"{% endif -%}
    name=\"{{ full_name }}\"
    {%- if disabled %} disabled{% endif -%}
    {%- if required %} required{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block form_widget_simple -%}
    {%- set label = (label | default('')) | trans -%}

    {%- set attr = attr | merge({
        class: ('input input--expand' ~ (errors is not empty ? ' input--error' : ' ') ~ (attr.class | default(''))) | trim,
        type: type | default('text'),
        placeholder: attr.placeholder | default(label)
    }) -%}

    <input {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} />
{%- endblock -%}

{%- block textarea_widget -%}
    {%- set label = (label | default('')) | trans -%}

    {%- set attr = attr | merge({
        class: ('textarea textarea--expand' ~ (errors is not empty ? ' textarea--error' : ' ') ~ (attr.class | default(''))) | trim,
        placeholder: attr.placeholder | default(label)
    }) -%}

    <textarea {{ block('widget_attributes') }}>{% if value is not empty %}{{ value }}{% endif %}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}

    {%- set modifiers = errors is empty ? ['full-width'] : ['full-width', 'error'] -%}

    {% embed molecule('custom-select') with {
        modifiers: modifiers,
        attributes: {
            multiple: multiple,
            placeholder: placeholder,
            required: required,
            'config-width': '100%'
        },
        embed: {
            attributes: block('widget_attributes'),
            value: value,
            translation_domain: translation_domain,
            preferred_choices: preferred_choices,
            choices: choices,
            separator: separator,
            choice_translation_domain: choice_translation_domain,
            class: attr.class ?? '',
        }
    } only %}
        {% block selectAttributes %}
            {{ parent() }}
            {{ embed.attributes | raw }}
        {% endblock %}

        {% block selectClass %}
            {{ parent() }} {{ embed.class }}
        {% endblock %}

        {% block options %}
            {%- if attributes.placeholder is not none -%}
                <option value=\"\"{% if attributes.required and embed.value is empty %} selected=\"selected\"{% endif %}>
                    {{ attributes.placeholder != '' ? (embed.translation_domain is same as(false) ? attributes.placeholder : attributes.placeholder|trans({}, embed.translation_domain)) }}
                </option>
            {%- endif -%}

            {%- if embed.preferred_choices|length > 0 -%}
                {% set options = embed.preferred_choices %}

                {{- block('renderOptions') -}}

                {%- if attributes.choices|length > 0 and embed.separator is not none -%}
                    <option disabled=\"disabled\">{{ embed.separator }}</option>
                {%- endif -%}
            {%- endif -%}

            {%- set options = embed.choices -%}

            {%- block renderOptions -%}
                {% for group_label, choice in options %}
                    {%- if choice is iterable -%}
                        <optgroup label=\"{{ embed.choice_translation_domain is same as(false) ? group_label : group_label|trans({}, embed.choice_translation_domain) }}\">
                            {% set options = choice %}
                            {{- block('renderOptions') -}}
                        </optgroup>
                    {%- else -%}
                        <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(embed.value) %} selected=\"selected\"{% endif %}>
                            {{ embed.choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, embed.choice_translation_domain) }}
                        </option>
                    {%- endif -%}
                {% endfor %}
            {%- endblock -%}
        {% endblock %}
    {% endembed %}
{%- endblock -%}

{% block choice_widget_expanded -%}
    <ul class=\"list {{ '--inline' in label_attr.class|default('') ? 'list--inline' : 'list--checkbox' }}\" {{ block('widget_container_attributes') }}>
        {% for child in form %}
            <li class=\"list__item list__item--checkbox\">
                {{- form_errors(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            </li>
        {% endfor %}
    </ul>
{%- endblock choice_widget_expanded %}

{%- block checkbox_widget -%}
    {%- set type = type | default('checkbox') -%}
    {%- set component = component | default(atom(type)) -%}
    {%- set label = label | default(name | humanize) | trans -%}
    {%- set modifiers = errors is empty ? ['expand'] : ['expand', 'error'] -%}
    {%- set inputClass = attr.class | default -%}

    {% define attributes = {
        id: id,
        name: full_name,
        checked: checked | default(false),
        required: required | default(false),
        disabled: disabled | default(false),
        value: value | default()
    } %}

    {% include component with {
        modifiers: modifiers,
        data: {
            label: label,
            inputClass: inputClass,
        },
        attributes: attributes
    } only %}
{%- endblock -%}

{%- block radio_widget -%}
    {% set type = 'radio' %}
    {{block('checkbox_widget')}}
{%- endblock -%}

{%- block password_widget -%}
    {%- set attr = attr | merge({
        id: id | default(false),
        placeholder: attr.placeholder | default(label) | trans(attr_translation_parameters, translation_domain),
        name: full_name,
        disabled: disabled | default(false),
        required: required | default(false),
    }) -%}

    {% if attr.title | default %}
        {%- set attr = attr | merge({
            title: attr.title | trans(attr_translation_parameters, translation_domain),
        }) -%}
    {% endif %}

    {% set inputComplexityJsCLass = 'js-password-complexity-indicator__' ~ attr.name %}

    {% include molecule('password-field') with {
        data: {
            inputAttributes: attr,
            inputExtraClasses: ('input input--expand ' ~ (errors is not empty ? ' input--error ') ~ (attr.class | default) ~ inputComplexityJsCLass) | trim,
        },
    } only %}

    {% if attr.password_complexity_indicator | default %}
        {% include molecule('password-complexity-indicator') with {
            attributes: {
                'input-class-name': inputComplexityJsCLass,
            },
        } only %}
    {% endif %}
{%- endblock password_widget -%}

{# rows #}

{%- block form_row -%}
    {%- set rowClass = rowAttr.class | default('') -%}

    <div class=\"{{rowClass}}\">
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock -%}

{%- block form_rows -%}
    {% for child in form %}
        {% if not child.isRendered %}
            {{- form_row(child, {
                rowAttr: rowAttr | default({})
            }) -}}
        {% endif %}
    {% endfor %}
{%- endblock -%}

{%- block checkbox_row -%}
    {%- set rowClass = rowAttr.class | default('') -%}

    <div class=\"{{rowClass}}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock -%}

{%- block radio_row -%}
    {{- block('checkbox_row') -}}
{%- endblock -%}

{# labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id, 'class': (label_attr.class|default('') ~ ' label')|trim}) %}
        {% else %}
            {% set label_attr = label_attr|merge({'for': id, 'class': (label_attr.class|default('') ~ ' label label--title')|trim}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' label--required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock -%}

{# errors #}

{% block form_errors %}
    {% apply spaceless %}
        {% if errors | length > 0 %}
            <ul class=\"list list--bullet list--alert\">
                {% for error in errors %}
                    <li class=\"list__item\">{{ error.message | trans }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endapply %}
{% endblock %}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {%- set label = (label | default('')) | trans -%}
        {%- set attr = attr | merge({
            class: ('input input--expand ' ~ (errors is not empty ? 'input--error ') ~ (attr.class | default(''))) | trim,
            type: 'text',
            autocomplete: 'off',
            placeholder: attr.placeholder | default('yyyy-mm-dd HH:mm'),
        }) -%}
        <input {{ block('widget_attributes') }} {% if value %}value=\"{{ value }}\" {% endif %}>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {%- set label = (label | default('')) | trans -%}
        {%- set attr = attr | merge({
            class: ('input input--expand ' ~ (errors is not empty ? 'input--error ') ~ (attr.class | default(''))) | trim,
            type: 'text',
            autocomplete: 'off',
            placeholder: attr.placeholder | default('yyyy-mm-dd'),
        }) -%}
        <input {{ block('widget_attributes') }} {% if value %}value=\"{{ value }}\" {% endif %}>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}
", "@ShopUi/resources/form/form.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/resources/form/form.twig");
    }
}


/* @ShopUi/resources/form/form.twig */
class __TwigTemplate_3ab582d74cb9b7b268e1af39cde27bb3bc83d591f5b0f58e9940a4e01248ffde___865220080 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'selectAttributes' => [$this, 'block_selectAttributes'],
            'selectClass' => [$this, 'block_selectClass'],
            'options' => [$this, 'block_options'],
            'renderOptions' => [$this, 'block_renderOptions'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 43
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["custom-select"]), "@ShopUi/resources/form/form.twig", 43);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 62
    public function block_selectAttributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "            ";
        $this->displayParentBlock("selectAttributes", $context, $blocks);
        echo "
            ";
        // line 64
        echo twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 64, $this->source); })()), "attributes", [], "any", false, false, false, 64);
        echo "
        ";
    }

    // line 67
    public function block_selectClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "            ";
        $this->displayParentBlock("selectClass", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 68, $this->source); })()), "class", [], "any", false, false, false, 68), "html", null, true);
        echo "
        ";
    }

    // line 71
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 72, $this->source); })()), "placeholder", [], "any", false, false, false, 72))) {
            // line 73
            echo "<option value=\"\"";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 73, $this->source); })()), "required", [], "any", false, false, false, 73) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 73, $this->source); })()), "value", [], "any", false, false, false, 73)))) {
                echo " selected=\"selected\"";
            }
            echo ">
                    ";
            // line 74
            (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 74, $this->source); })()), "placeholder", [], "any", false, false, false, 74), ""))) ? (print (twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 74, $this->source); })()), "translation_domain", [], "any", false, false, false, 74) === false)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 74, $this->source); })()), "placeholder", [], "any", false, false, false, 74)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 74, $this->source); })()), "placeholder", [], "any", false, false, false, 74), [], twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 74, $this->source); })()), "translation_domain", [], "any", false, false, false, 74)))), "html", null, true))) : (print ("")));
            echo "
                </option>";
        }
        // line 78
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 78, $this->source); })()), "preferred_choices", [], "any", false, false, false, 78)), 0))) {
            // line 79
            $context["options"] = twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 79, $this->source); })()), "preferred_choices", [], "any", false, false, false, 79);
            // line 81
            $this->displayBlock("renderOptions", $context, $blocks);
            // line 83
            if (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 83, $this->source); })()), "choices", [], "any", false, false, false, 83)), 0)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 83, $this->source); })()), "separator", [], "any", false, false, false, 83)))) {
                // line 84
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 84, $this->source); })()), "separator", [], "any", false, false, false, 84), "html", null, true);
                echo "</option>";
            }
        }
        // line 88
        $context["options"] = twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 88, $this->source); })()), "choices", [], "any", false, false, false, 88);
        // line 90
        $this->displayBlock('renderOptions', $context, $blocks);
    }

    public function block_renderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 91, $this->source); })()));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 92
            if (twig_test_iterable($context["choice"])) {
                // line 93
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 93, $this->source); })()), "choice_translation_domain", [], "any", false, false, false, 93) === false)) ? ($context["group_label"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["group_label"], [], twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 93, $this->source); })()), "choice_translation_domain", [], "any", false, false, false, 93)))), "html", null, true);
                echo "\">
                            ";
                // line 94
                $context["options"] = $context["choice"];
                // line 95
                $this->displayBlock("renderOptions", $context, $blocks);
                // line 96
                echo "</optgroup>";
            } else {
                // line 98
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 98), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 98)) {
                    $__internal_compile_2 = $context;
                    $__internal_compile_3 = ["attr" => twig_get_attribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 98)];
                    if (!twig_test_iterable($__internal_compile_3)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 98, $this->getSourceContext());
                    }
                    $__internal_compile_3 = twig_to_array($__internal_compile_3);
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $__internal_compile_2;
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 98, $this->source); })()), "value", [], "any", false, false, false, 98))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                            ";
                // line 99
                echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 99, $this->source); })()), "choice_translation_domain", [], "any", false, false, false, 99) === false)) ? (twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 99)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 99), [], twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 99, $this->source); })()), "choice_translation_domain", [], "any", false, false, false, 99)))), "html", null, true);
                echo "
                        </option>";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@ShopUi/resources/form/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  988 => 99,  968 => 98,  965 => 96,  963 => 95,  961 => 94,  956 => 93,  954 => 92,  937 => 91,  930 => 90,  928 => 88,  922 => 84,  920 => 83,  918 => 81,  916 => 79,  914 => 78,  909 => 74,  902 => 73,  900 => 72,  896 => 71,  887 => 68,  883 => 67,  877 => 64,  872 => 63,  868 => 62,  858 => 43,  508 => 299,  506 => 297,  505 => 296,  504 => 295,  503 => 294,  499 => 293,  488 => 291,  486 => 289,  485 => 286,  484 => 285,  482 => 284,  480 => 283,  476 => 282,  471 => 278,  469 => 277,  467 => 276,  465 => 275,  463 => 274,  459 => 273,  448 => 271,  446 => 269,  445 => 266,  444 => 265,  442 => 264,  440 => 263,  436 => 262,  432 => 251,  429 => 259,  425 => 257,  416 => 255,  412 => 254,  409 => 253,  406 => 252,  403 => 251,  399 => 250,  380 => 244,  376 => 241,  373 => 238,  372 => 237,  371 => 236,  369 => 235,  367 => 234,  364 => 232,  362 => 231,  358 => 229,  355 => 228,  353 => 227,  351 => 226,  349 => 225,  345 => 224,  341 => 219,  337 => 218,  333 => 215,  331 => 214,  329 => 213,  325 => 212,  323 => 210,  319 => 209,  311 => 206,  308 => 203,  307 => 202,  304 => 201,  300 => 200,  296 => 199,  292 => 196,  290 => 195,  288 => 194,  286 => 193,  282 => 192,  280 => 190,  276 => 189,  271 => 184,  269 => 181,  267 => 179,  265 => 178,  262 => 177,  260 => 174,  259 => 173,  258 => 171,  255 => 170,  253 => 169,  250 => 168,  247 => 165,  246 => 164,  244 => 163,  242 => 160,  241 => 159,  240 => 158,  239 => 157,  238 => 156,  237 => 155,  233 => 154,  228 => 151,  226 => 150,  222 => 149,  218 => 145,  217 => 143,  216 => 142,  215 => 140,  214 => 139,  211 => 138,  210 => 136,  209 => 135,  208 => 134,  207 => 133,  206 => 132,  205 => 131,  204 => 130,  202 => 128,  200 => 127,  198 => 126,  196 => 125,  194 => 124,  190 => 123,  186 => 120,  179 => 118,  177 => 116,  176 => 115,  174 => 113,  173 => 112,  171 => 111,  167 => 110,  160 => 109,  156 => 108,  152 => 59,  151 => 58,  150 => 57,  149 => 56,  148 => 55,  147 => 54,  146 => 53,  145 => 48,  144 => 47,  143 => 46,  142 => 44,  141 => 43,  139 => 41,  136 => 38,  134 => 37,  130 => 36,  120 => 33,  118 => 30,  117 => 29,  116 => 28,  114 => 26,  110 => 25,  98 => 22,  96 => 19,  95 => 18,  94 => 17,  93 => 16,  91 => 14,  87 => 13,  83 => 10,  79 => 9,  75 => 8,  71 => 7,  65 => 6,  61 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'form_div_layout.html.twig' %}

{# widgets #}

{%- block widget_attributes -%}
    {%- if id %}id=\"{{ id }}\"{% endif -%}
    name=\"{{ full_name }}\"
    {%- if disabled %} disabled{% endif -%}
    {%- if required %} required{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block form_widget_simple -%}
    {%- set label = (label | default('')) | trans -%}

    {%- set attr = attr | merge({
        class: ('input input--expand' ~ (errors is not empty ? ' input--error' : ' ') ~ (attr.class | default(''))) | trim,
        type: type | default('text'),
        placeholder: attr.placeholder | default(label)
    }) -%}

    <input {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %} />
{%- endblock -%}

{%- block textarea_widget -%}
    {%- set label = (label | default('')) | trans -%}

    {%- set attr = attr | merge({
        class: ('textarea textarea--expand' ~ (errors is not empty ? ' textarea--error' : ' ') ~ (attr.class | default(''))) | trim,
        placeholder: attr.placeholder | default(label)
    }) -%}

    <textarea {{ block('widget_attributes') }}>{% if value is not empty %}{{ value }}{% endif %}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}

    {%- set modifiers = errors is empty ? ['full-width'] : ['full-width', 'error'] -%}

    {% embed molecule('custom-select') with {
        modifiers: modifiers,
        attributes: {
            multiple: multiple,
            placeholder: placeholder,
            required: required,
            'config-width': '100%'
        },
        embed: {
            attributes: block('widget_attributes'),
            value: value,
            translation_domain: translation_domain,
            preferred_choices: preferred_choices,
            choices: choices,
            separator: separator,
            choice_translation_domain: choice_translation_domain,
            class: attr.class ?? '',
        }
    } only %}
        {% block selectAttributes %}
            {{ parent() }}
            {{ embed.attributes | raw }}
        {% endblock %}

        {% block selectClass %}
            {{ parent() }} {{ embed.class }}
        {% endblock %}

        {% block options %}
            {%- if attributes.placeholder is not none -%}
                <option value=\"\"{% if attributes.required and embed.value is empty %} selected=\"selected\"{% endif %}>
                    {{ attributes.placeholder != '' ? (embed.translation_domain is same as(false) ? attributes.placeholder : attributes.placeholder|trans({}, embed.translation_domain)) }}
                </option>
            {%- endif -%}

            {%- if embed.preferred_choices|length > 0 -%}
                {% set options = embed.preferred_choices %}

                {{- block('renderOptions') -}}

                {%- if attributes.choices|length > 0 and embed.separator is not none -%}
                    <option disabled=\"disabled\">{{ embed.separator }}</option>
                {%- endif -%}
            {%- endif -%}

            {%- set options = embed.choices -%}

            {%- block renderOptions -%}
                {% for group_label, choice in options %}
                    {%- if choice is iterable -%}
                        <optgroup label=\"{{ embed.choice_translation_domain is same as(false) ? group_label : group_label|trans({}, embed.choice_translation_domain) }}\">
                            {% set options = choice %}
                            {{- block('renderOptions') -}}
                        </optgroup>
                    {%- else -%}
                        <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(embed.value) %} selected=\"selected\"{% endif %}>
                            {{ embed.choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, embed.choice_translation_domain) }}
                        </option>
                    {%- endif -%}
                {% endfor %}
            {%- endblock -%}
        {% endblock %}
    {% endembed %}
{%- endblock -%}

{% block choice_widget_expanded -%}
    <ul class=\"list {{ '--inline' in label_attr.class|default('') ? 'list--inline' : 'list--checkbox' }}\" {{ block('widget_container_attributes') }}>
        {% for child in form %}
            <li class=\"list__item list__item--checkbox\">
                {{- form_errors(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            </li>
        {% endfor %}
    </ul>
{%- endblock choice_widget_expanded %}

{%- block checkbox_widget -%}
    {%- set type = type | default('checkbox') -%}
    {%- set component = component | default(atom(type)) -%}
    {%- set label = label | default(name | humanize) | trans -%}
    {%- set modifiers = errors is empty ? ['expand'] : ['expand', 'error'] -%}
    {%- set inputClass = attr.class | default -%}

    {% define attributes = {
        id: id,
        name: full_name,
        checked: checked | default(false),
        required: required | default(false),
        disabled: disabled | default(false),
        value: value | default()
    } %}

    {% include component with {
        modifiers: modifiers,
        data: {
            label: label,
            inputClass: inputClass,
        },
        attributes: attributes
    } only %}
{%- endblock -%}

{%- block radio_widget -%}
    {% set type = 'radio' %}
    {{block('checkbox_widget')}}
{%- endblock -%}

{%- block password_widget -%}
    {%- set attr = attr | merge({
        id: id | default(false),
        placeholder: attr.placeholder | default(label) | trans(attr_translation_parameters, translation_domain),
        name: full_name,
        disabled: disabled | default(false),
        required: required | default(false),
    }) -%}

    {% if attr.title | default %}
        {%- set attr = attr | merge({
            title: attr.title | trans(attr_translation_parameters, translation_domain),
        }) -%}
    {% endif %}

    {% set inputComplexityJsCLass = 'js-password-complexity-indicator__' ~ attr.name %}

    {% include molecule('password-field') with {
        data: {
            inputAttributes: attr,
            inputExtraClasses: ('input input--expand ' ~ (errors is not empty ? ' input--error ') ~ (attr.class | default) ~ inputComplexityJsCLass) | trim,
        },
    } only %}

    {% if attr.password_complexity_indicator | default %}
        {% include molecule('password-complexity-indicator') with {
            attributes: {
                'input-class-name': inputComplexityJsCLass,
            },
        } only %}
    {% endif %}
{%- endblock password_widget -%}

{# rows #}

{%- block form_row -%}
    {%- set rowClass = rowAttr.class | default('') -%}

    <div class=\"{{rowClass}}\">
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock -%}

{%- block form_rows -%}
    {% for child in form %}
        {% if not child.isRendered %}
            {{- form_row(child, {
                rowAttr: rowAttr | default({})
            }) -}}
        {% endif %}
    {% endfor %}
{%- endblock -%}

{%- block checkbox_row -%}
    {%- set rowClass = rowAttr.class | default('') -%}

    <div class=\"{{rowClass}}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock -%}

{%- block radio_row -%}
    {{- block('checkbox_row') -}}
{%- endblock -%}

{# labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id, 'class': (label_attr.class|default('') ~ ' label')|trim}) %}
        {% else %}
            {% set label_attr = label_attr|merge({'for': id, 'class': (label_attr.class|default('') ~ ' label label--title')|trim}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' label--required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock -%}

{# errors #}

{% block form_errors %}
    {% apply spaceless %}
        {% if errors | length > 0 %}
            <ul class=\"list list--bullet list--alert\">
                {% for error in errors %}
                    <li class=\"list__item\">{{ error.message | trans }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endapply %}
{% endblock %}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {%- set label = (label | default('')) | trans -%}
        {%- set attr = attr | merge({
            class: ('input input--expand ' ~ (errors is not empty ? 'input--error ') ~ (attr.class | default(''))) | trim,
            type: 'text',
            autocomplete: 'off',
            placeholder: attr.placeholder | default('yyyy-mm-dd HH:mm'),
        }) -%}
        <input {{ block('widget_attributes') }} {% if value %}value=\"{{ value }}\" {% endif %}>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {%- set label = (label | default('')) | trans -%}
        {%- set attr = attr | merge({
            class: ('input input--expand ' ~ (errors is not empty ? 'input--error ') ~ (attr.class | default(''))) | trim,
            type: 'text',
            autocomplete: 'off',
            placeholder: attr.placeholder | default('yyyy-mm-dd'),
        }) -%}
        <input {{ block('widget_attributes') }} {% if value %}value=\"{{ value }}\" {% endif %}>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}
", "@ShopUi/resources/form/form.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/resources/form/form.twig");
    }
}
