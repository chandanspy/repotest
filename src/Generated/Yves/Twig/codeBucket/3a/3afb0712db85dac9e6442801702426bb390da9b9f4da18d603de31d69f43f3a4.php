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

/* @CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_4eb7ce58fecd6f9ae83f72efb2e19f049a6c6a229f3c448fcfc87c52a1aa28bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["sort", "@SprykerShop:CatalogPage"]), "@CatalogPage/components/molecules/sort/sort.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"grid grid--middle grid--justify\">
        <div class=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "__col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "__col--counter col\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 6, $this->source); })()), "pagination", [], "any", false, false, false, 6), "numFound", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.itemsFound"), "html", null, true);
        echo "
        </div>

        <div class=\"col ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "__col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "__col--filters is-hidden-sm-md\">
            <div class=\"grid grid--middle ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "__filter-grid ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 10, $this->source); })()), "jsName", [], "any", false, false, false, 10), "html", null, true);
        echo "__filter-grid\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"768\">
                <div class=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "__col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "__col col is-hidden-sm-md\">
                            ";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.per"), "html", null, true);
        echo ":
                        </div>

                        <div class=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "__col col col col--sm-12 col--lg-auto\">
                            ";
        // line 18
        $this->loadTemplate("@CatalogPage/components/molecules/sort/sort.twig", "@CatalogPage/components/molecules/sort/sort.twig", 18, "288562297")->display(twig_to_array(["modifiers" => [0 => "small", 1 => "light", 2 => "mobile-expand", 3 => "different-mob-caret"], "attributes" => ["name" => "ipp", "config-theme" => "small"], "embed" => ["pagination" => twig_get_attribute($this->env, $this->source,         // line 25
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 25, $this->source); })()), "pagination", [], "any", false, false, false, 25), "parentJsName" => twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "parentJsName", [], "any", false, false, false, 26)]]));
        // line 53
        echo "                        </div>
                    </div>
                </div>
                <div class=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), "html", null, true);
        echo "__col ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 56, $this->source); })()), "name", [], "any", false, false, false, 56), "html", null, true);
        echo "__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), "html", null, true);
        echo "__col col is-hidden-sm-md\">
                            ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.filter.sort"), "html", null, true);
        echo ":
                        </div>

                        <div class=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62), "html", null, true);
        echo "__col col col col--sm-12 col--lg-auto\">
                            ";
        // line 63
        $this->loadTemplate("@CatalogPage/components/molecules/sort/sort.twig", "@CatalogPage/components/molecules/sort/sort.twig", 63, "2039062542")->display(twig_to_array(["modifiers" => [0 => "small", 1 => "light", 2 => "mobile-expand", 3 => "different-mob-caret"], "attributes" => ["name" => "sort", "config-theme" => "small"], "embed" => ["sort" => twig_get_attribute($this->env, $this->source,         // line 70
(isset($context["_view"]) || array_key_exists("_view", $context) ? $context["_view"] : (function () { throw new RuntimeError('Variable "_view" does not exist.', 70, $this->source); })()), "sort", [], "any", false, false, false, 70), "parentJsName" => twig_get_attribute($this->env, $this->source,         // line 71
(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 71, $this->source); })()), "parentJsName", [], "any", false, false, false, 71)]]));
        // line 99
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 106
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["breakpoint-dependent-block-placer"]), "@CatalogPage/components/molecules/sort/sort.twig", 106)->display(twig_to_array(["attributes" => ["block-class-name" => (twig_get_attribute($this->env, $this->source,         // line 108
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 108, $this->source); })()), "jsName", [], "any", false, false, false, 108) . "__filter-grid")]]));
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/sort/sort.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 108,  142 => 106,  133 => 99,  131 => 71,  130 => 70,  129 => 63,  125 => 62,  119 => 59,  115 => 58,  108 => 56,  103 => 53,  101 => 26,  100 => 25,  99 => 18,  95 => 17,  89 => 14,  85 => 13,  78 => 11,  72 => 10,  66 => 9,  58 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('sort', '@SprykerShop:CatalogPage') %}

{% block body %}
    <div class=\"grid grid--middle grid--justify\">
        <div class=\"{{ config.name }}__col {{ config.name }}__col--counter col\">
            {{ _view.pagination.numFound }} {{ 'catalog.itemsFound' | trans }}
        </div>

        <div class=\"col {{ config.name }}__col {{ config.name }}__col--filters is-hidden-sm-md\">
            <div class=\"grid grid--middle {{ config.name }}__filter-grid {{ config.jsName }}__filter-grid\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"768\">
                <div class=\"{{ config.name }}__col {{ config.name }}__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"{{ config.name }}__col col is-hidden-sm-md\">
                            {{ 'catalog.filter.per' | trans }}:
                        </div>

                        <div class=\"{{ config.name }}__col col col col--sm-12 col--lg-auto\">
                            {% embed molecule('custom-select') with {
                                modifiers: ['small', 'light', 'mobile-expand', 'different-mob-caret'],
                                attributes: {
                                    name: 'ipp',
                                    'config-theme': 'small',
                                },
                                embed: {
                                    pagination: _view.pagination,
                                    parentJsName: data.parentJsName,
                                },
                            } only %}
                                {% block selectClass %}
                                    {{ parent() }} {{ embed.parentJsName }}__sort-trigger
                                {% endblock %}
                                {% block options %}
                                    {% for limit in embed.pagination.config.validItemsPerPageOptions %}
                                        <option value=\"{{ limit }}\" {% if limit == embed.pagination.currentItemsPerPage %}selected{% endif %}>{{ limit }}</option>
                                    {% endfor %}
                                {% endblock %}
                                {% block caret %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-sm-md',
                                        data: {
                                            name: 'caret-down',
                                        },
                                    } only %}

                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-lg-xxl',
                                        data: {
                                            name: 'double-chevrons',
                                        },
                                    } only %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    </div>
                </div>
                <div class=\"{{ config.name }}__col {{ config.name }}__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"{{ config.name }}__col col is-hidden-sm-md\">
                            {{ 'catalog.filter.sort' | trans }}:
                        </div>

                        <div class=\"{{ config.name }}__col col col col--sm-12 col--lg-auto\">
                            {% embed molecule('custom-select') with {
                                modifiers: ['small', 'light', 'mobile-expand', 'different-mob-caret'],
                                attributes: {
                                    name: 'sort',
                                    'config-theme': 'small',
                                },
                                embed: {
                                    sort: _view.sort,
                                    parentJsName: data.parentJsName,
                                },
                            } only %}
                                {% block selectClass %}
                                    {{ parent() }} {{ embed.parentJsName }}__sort-trigger
                                {% endblock %}
                                {% block options %}
                                    <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>
                                    {% for sortParamName in embed.sort.sortParamNames %}
                                        <option value=\"{{ sortParamName }}\" {% if sortParamName == embed.sort.currentSortParam %}selected{% endif %}>{{ ('catalog.sort.' ~ sortParamName) | trans }}</option>
                                    {% endfor %}
                                {% endblock %}
                                {% block caret %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-sm-md',
                                        data: {
                                            name: 'caret-down',
                                        },
                                    } only %}

                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-lg-xxl',
                                        data: {
                                            name: 'double-chevrons',
                                        },
                                    } only %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include molecule('breakpoint-dependent-block-placer') with {
        attributes: {
            'block-class-name': config.jsName ~ '__filter-grid',
        },
    } only %}
{% endblock %}
", "@CatalogPage/components/molecules/sort/sort.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}


/* @CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_4eb7ce58fecd6f9ae83f72efb2e19f049a6c6a229f3c448fcfc87c52a1aa28bb___288562297 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'selectClass' => [$this, 'block_selectClass'],
            'options' => [$this, 'block_options'],
            'caret' => [$this, 'block_caret'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 18
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["custom-select"]), "@CatalogPage/components/molecules/sort/sort.twig", 18);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_selectClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "                                    ";
        $this->displayParentBlock("selectClass", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 30, $this->source); })()), "parentJsName", [], "any", false, false, false, 30), "html", null, true);
        echo "__sort-trigger
                                ";
    }

    // line 32
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 33, $this->source); })()), "pagination", [], "any", false, false, false, 33), "config", [], "any", false, false, false, 33), "validItemsPerPageOptions", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["limit"]) {
            // line 34
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "\" ";
            if ((0 === twig_compare($context["limit"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 34, $this->source); })()), "pagination", [], "any", false, false, false, 34), "currentItemsPerPage", [], "any", false, false, false, 34)))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["limit"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                                ";
    }

    // line 37
    public function block_caret($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "                                    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@CatalogPage/components/molecules/sort/sort.twig", 38)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39) . "__caret is-hidden-sm-md"), "data" => ["name" => "caret-down"]]));
        // line 44
        echo "
                                    ";
        // line 45
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@CatalogPage/components/molecules/sort/sort.twig", 45)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 46
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46) . "__caret is-hidden-lg-xxl"), "data" => ["name" => "double-chevrons"]]));
        // line 51
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/sort/sort.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 51,  364 => 46,  363 => 45,  360 => 44,  358 => 39,  356 => 38,  352 => 37,  348 => 36,  333 => 34,  328 => 33,  324 => 32,  315 => 30,  311 => 29,  301 => 18,  143 => 108,  142 => 106,  133 => 99,  131 => 71,  130 => 70,  129 => 63,  125 => 62,  119 => 59,  115 => 58,  108 => 56,  103 => 53,  101 => 26,  100 => 25,  99 => 18,  95 => 17,  89 => 14,  85 => 13,  78 => 11,  72 => 10,  66 => 9,  58 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('sort', '@SprykerShop:CatalogPage') %}

{% block body %}
    <div class=\"grid grid--middle grid--justify\">
        <div class=\"{{ config.name }}__col {{ config.name }}__col--counter col\">
            {{ _view.pagination.numFound }} {{ 'catalog.itemsFound' | trans }}
        </div>

        <div class=\"col {{ config.name }}__col {{ config.name }}__col--filters is-hidden-sm-md\">
            <div class=\"grid grid--middle {{ config.name }}__filter-grid {{ config.jsName }}__filter-grid\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"768\">
                <div class=\"{{ config.name }}__col {{ config.name }}__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"{{ config.name }}__col col is-hidden-sm-md\">
                            {{ 'catalog.filter.per' | trans }}:
                        </div>

                        <div class=\"{{ config.name }}__col col col col--sm-12 col--lg-auto\">
                            {% embed molecule('custom-select') with {
                                modifiers: ['small', 'light', 'mobile-expand', 'different-mob-caret'],
                                attributes: {
                                    name: 'ipp',
                                    'config-theme': 'small',
                                },
                                embed: {
                                    pagination: _view.pagination,
                                    parentJsName: data.parentJsName,
                                },
                            } only %}
                                {% block selectClass %}
                                    {{ parent() }} {{ embed.parentJsName }}__sort-trigger
                                {% endblock %}
                                {% block options %}
                                    {% for limit in embed.pagination.config.validItemsPerPageOptions %}
                                        <option value=\"{{ limit }}\" {% if limit == embed.pagination.currentItemsPerPage %}selected{% endif %}>{{ limit }}</option>
                                    {% endfor %}
                                {% endblock %}
                                {% block caret %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-sm-md',
                                        data: {
                                            name: 'caret-down',
                                        },
                                    } only %}

                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-lg-xxl',
                                        data: {
                                            name: 'double-chevrons',
                                        },
                                    } only %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    </div>
                </div>
                <div class=\"{{ config.name }}__col {{ config.name }}__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"{{ config.name }}__col col is-hidden-sm-md\">
                            {{ 'catalog.filter.sort' | trans }}:
                        </div>

                        <div class=\"{{ config.name }}__col col col col--sm-12 col--lg-auto\">
                            {% embed molecule('custom-select') with {
                                modifiers: ['small', 'light', 'mobile-expand', 'different-mob-caret'],
                                attributes: {
                                    name: 'sort',
                                    'config-theme': 'small',
                                },
                                embed: {
                                    sort: _view.sort,
                                    parentJsName: data.parentJsName,
                                },
                            } only %}
                                {% block selectClass %}
                                    {{ parent() }} {{ embed.parentJsName }}__sort-trigger
                                {% endblock %}
                                {% block options %}
                                    <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>
                                    {% for sortParamName in embed.sort.sortParamNames %}
                                        <option value=\"{{ sortParamName }}\" {% if sortParamName == embed.sort.currentSortParam %}selected{% endif %}>{{ ('catalog.sort.' ~ sortParamName) | trans }}</option>
                                    {% endfor %}
                                {% endblock %}
                                {% block caret %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-sm-md',
                                        data: {
                                            name: 'caret-down',
                                        },
                                    } only %}

                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-lg-xxl',
                                        data: {
                                            name: 'double-chevrons',
                                        },
                                    } only %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include molecule('breakpoint-dependent-block-placer') with {
        attributes: {
            'block-class-name': config.jsName ~ '__filter-grid',
        },
    } only %}
{% endblock %}
", "@CatalogPage/components/molecules/sort/sort.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}


/* @CatalogPage/components/molecules/sort/sort.twig */
class __TwigTemplate_4eb7ce58fecd6f9ae83f72efb2e19f049a6c6a229f3c448fcfc87c52a1aa28bb___2039062542 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'selectClass' => [$this, 'block_selectClass'],
            'options' => [$this, 'block_options'],
            'caret' => [$this, 'block_caret'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 63
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["custom-select"]), "@CatalogPage/components/molecules/sort/sort.twig", 63);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 74
    public function block_selectClass($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                                    ";
        $this->displayParentBlock("selectClass", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 75, $this->source); })()), "parentJsName", [], "any", false, false, false, 75), "html", null, true);
        echo "__sort-trigger
                                ";
    }

    // line 77
    public function block_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                    <option value=\"\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("catalog.sort.relevance"), "html", null, true);
        echo "</option>
                                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 79, $this->source); })()), "sort", [], "any", false, false, false, 79), "sortParamNames", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["sortParamName"]) {
            // line 80
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["sortParamName"], "html", null, true);
            echo "\" ";
            if ((0 === twig_compare($context["sortParamName"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["embed"]) || array_key_exists("embed", $context) ? $context["embed"] : (function () { throw new RuntimeError('Variable "embed" does not exist.', 80, $this->source); })()), "sort", [], "any", false, false, false, 80), "currentSortParam", [], "any", false, false, false, 80)))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("catalog.sort." . $context["sortParamName"])), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sortParamName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                ";
    }

    // line 83
    public function block_caret($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "                                    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@CatalogPage/components/molecules/sort/sort.twig", 84)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 85
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85) . "__caret is-hidden-sm-md"), "data" => ["name" => "caret-down"]]));
        // line 90
        echo "
                                    ";
        // line 91
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@CatalogPage/components/molecules/sort/sort.twig", 91)->display(twig_to_array(["class" => (twig_get_attribute($this->env, $this->source,         // line 92
(isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 92, $this->source); })()), "name", [], "any", false, false, false, 92) . "__caret is-hidden-lg-xxl"), "data" => ["name" => "double-chevrons"]]));
        // line 97
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "@CatalogPage/components/molecules/sort/sort.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 97,  591 => 92,  590 => 91,  587 => 90,  585 => 85,  583 => 84,  579 => 83,  575 => 82,  560 => 80,  556 => 79,  551 => 78,  547 => 77,  538 => 75,  534 => 74,  524 => 63,  366 => 51,  364 => 46,  363 => 45,  360 => 44,  358 => 39,  356 => 38,  352 => 37,  348 => 36,  333 => 34,  328 => 33,  324 => 32,  315 => 30,  311 => 29,  301 => 18,  143 => 108,  142 => 106,  133 => 99,  131 => 71,  130 => 70,  129 => 63,  125 => 62,  119 => 59,  115 => 58,  108 => 56,  103 => 53,  101 => 26,  100 => 25,  99 => 18,  95 => 17,  89 => 14,  85 => 13,  78 => 11,  72 => 10,  66 => 9,  58 => 6,  52 => 5,  49 => 4,  45 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends molecule('sort', '@SprykerShop:CatalogPage') %}

{% block body %}
    <div class=\"grid grid--middle grid--justify\">
        <div class=\"{{ config.name }}__col {{ config.name }}__col--counter col\">
            {{ _view.pagination.numFound }} {{ 'catalog.itemsFound' | trans }}
        </div>

        <div class=\"col {{ config.name }}__col {{ config.name }}__col--filters is-hidden-sm-md\">
            <div class=\"grid grid--middle {{ config.name }}__filter-grid {{ config.jsName }}__filter-grid\" data-block-to=\"js-filter-section__sorting\" data-breakpoint=\"768\">
                <div class=\"{{ config.name }}__col {{ config.name }}__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"{{ config.name }}__col col is-hidden-sm-md\">
                            {{ 'catalog.filter.per' | trans }}:
                        </div>

                        <div class=\"{{ config.name }}__col col col col--sm-12 col--lg-auto\">
                            {% embed molecule('custom-select') with {
                                modifiers: ['small', 'light', 'mobile-expand', 'different-mob-caret'],
                                attributes: {
                                    name: 'ipp',
                                    'config-theme': 'small',
                                },
                                embed: {
                                    pagination: _view.pagination,
                                    parentJsName: data.parentJsName,
                                },
                            } only %}
                                {% block selectClass %}
                                    {{ parent() }} {{ embed.parentJsName }}__sort-trigger
                                {% endblock %}
                                {% block options %}
                                    {% for limit in embed.pagination.config.validItemsPerPageOptions %}
                                        <option value=\"{{ limit }}\" {% if limit == embed.pagination.currentItemsPerPage %}selected{% endif %}>{{ limit }}</option>
                                    {% endfor %}
                                {% endblock %}
                                {% block caret %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-sm-md',
                                        data: {
                                            name: 'caret-down',
                                        },
                                    } only %}

                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-lg-xxl',
                                        data: {
                                            name: 'double-chevrons',
                                        },
                                    } only %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    </div>
                </div>
                <div class=\"{{ config.name }}__col {{ config.name }}__col--select col col--sm-6 col--lg-auto\">
                    <div class=\"grid grid--middle\">
                        <div class=\"{{ config.name }}__col col is-hidden-sm-md\">
                            {{ 'catalog.filter.sort' | trans }}:
                        </div>

                        <div class=\"{{ config.name }}__col col col col--sm-12 col--lg-auto\">
                            {% embed molecule('custom-select') with {
                                modifiers: ['small', 'light', 'mobile-expand', 'different-mob-caret'],
                                attributes: {
                                    name: 'sort',
                                    'config-theme': 'small',
                                },
                                embed: {
                                    sort: _view.sort,
                                    parentJsName: data.parentJsName,
                                },
                            } only %}
                                {% block selectClass %}
                                    {{ parent() }} {{ embed.parentJsName }}__sort-trigger
                                {% endblock %}
                                {% block options %}
                                    <option value=\"\">{{ 'catalog.sort.relevance' | trans }}</option>
                                    {% for sortParamName in embed.sort.sortParamNames %}
                                        <option value=\"{{ sortParamName }}\" {% if sortParamName == embed.sort.currentSortParam %}selected{% endif %}>{{ ('catalog.sort.' ~ sortParamName) | trans }}</option>
                                    {% endfor %}
                                {% endblock %}
                                {% block caret %}
                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-sm-md',
                                        data: {
                                            name: 'caret-down',
                                        },
                                    } only %}

                                    {% include atom('icon') with {
                                        class: config.name ~ '__caret is-hidden-lg-xxl',
                                        data: {
                                            name: 'double-chevrons',
                                        },
                                    } only %}
                                {% endblock %}
                            {% endembed %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% include molecule('breakpoint-dependent-block-placer') with {
        attributes: {
            'block-class-name': config.jsName ~ '__filter-grid',
        },
    } only %}
{% endblock %}
", "@CatalogPage/components/molecules/sort/sort.twig", "/data/src/Pyz/Yves/CatalogPage/Theme/default/components/molecules/sort/sort.twig");
    }
}
