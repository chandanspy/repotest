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

/* @ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_149ecd77285534c591ae87de613a4a429aed410e26072e0e9cd5f278332abf55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'class' => [$this, 'block_class'],
            'body' => [$this, 'block_body'],
            'notifications' => [$this, 'block_notifications'],
            'sidebar' => [$this, 'block_sidebar'],
            'outside' => [$this, 'block_outside'],
            'header' => [$this, 'block_header'],
            'pageInfo' => [$this, 'block_pageInfo'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'title' => [$this, 'block_title'],
            'contentClass' => [$this, 'block_contentClass'],
            'contentTop' => [$this, 'block_contentTop'],
            'contentWrap' => [$this, 'block_contentWrap'],
            'content' => [$this, 'block_content'],
            'contentBottom' => [$this, 'block_contentBottom'],
            'footer' => [$this, 'block_footer'],
            'globalComponents' => [$this, 'block_globalComponents'],
            'icons' => [$this, 'block_icons'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('template')->getCallable(), ["page-blank"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("meta", $context, $blocks);
        echo "
    <meta name=\"format-detection\" content=\"telephone=no\">
";
    }

    // line 8
    public function block_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "js-page-layout-main__side-drawer-container";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        $this->displayBlock('notifications', $context, $blocks);
        // line 14
        echo "    <div class=\"page-layout page-layout--preload\">
        ";
        // line 15
        if ($widget = $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->openWidgetContext("AgentControlBarWidget")) {
            $this->loadTemplate("@ShopUi/templates/page-layout-main/page-layout-main.twig", "@ShopUi/templates/page-layout-main/page-layout-main.twig", 15, 1119969363)->display(array("_widget" => $widget, "_widgetTemplatePath" => $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->getTemplatePath($widget)));
            $this->env->getExtension('SprykerShop\Yves\ShopApplication\Plugin\Twig\WidgetTagTwigPlugin')->closeWidgetContext();
        }        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('sidebar', $context, $blocks);
        // line 146
        echo "
        ";
        // line 147
        $this->displayBlock('outside', $context, $blocks);
        // line 148
        echo "
        ";
        // line 149
        $this->displayBlock('header', $context, $blocks);
        // line 167
        echo "
        <div itemscope itemtype=\"https://schema.org/Product\" class=\"content-wrap\">
            ";
        // line 169
        $this->displayBlock('pageInfo', $context, $blocks);
        // line 182
        echo "
            <main class=\"";
        // line 183
        $this->displayBlock('contentClass', $context, $blocks);
        echo "\">
                ";
        // line 184
        $this->displayBlock('contentTop', $context, $blocks);
        // line 185
        echo "
                ";
        // line 186
        $this->displayBlock('contentWrap', $context, $blocks);
        // line 191
        echo "
                ";
        // line 192
        $this->displayBlock('contentBottom', $context, $blocks);
        // line 193
        echo "            </main>
        </div>

        ";
        // line 196
        $this->displayBlock('footer', $context, $blocks);
        // line 215
        echo "    </div>

    ";
        // line 217
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["overlay-block"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 217)->display([]);
        // line 218
        echo "    ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["touch-checker"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 218)->display([]);
        // line 219
        echo "
    ";
        // line 220
        $this->displayBlock('globalComponents', $context, $blocks);
        // line 244
        echo "
    ";
        // line 245
        $this->displayBlock('icons', $context, $blocks);
    }

    // line 11
    public function block_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["notification-area"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 12)->display([]);
        // line 13
        echo "    ";
    }

    // line 17
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "            ";
        $this->loadTemplate("@ShopUi/templates/page-layout-main/page-layout-main.twig", "@ShopUi/templates/page-layout-main/page-layout-main.twig", 18, "363326418")->display(twig_to_array(["attributes" => ["container-class-name" => "js-page-layout-main__side-drawer-container", "trigger-class-name" => "js-page-layout-main__side-drawer-trigger", "locked-body-class-name" => "is-locked-tablet"]]));
        // line 29
        echo "
            ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 31
            echo "                ";
            $context["customerFullNameWidget"] = call_user_func_array($this->env->getFunction('findWidget')->getCallable(), ["CustomerFullNameWidget"]);
            // line 32
            echo "                ";
            $context["customerFullName"] = twig_get_attribute($this->env, $this->source, (isset($context["customerFullNameWidget"]) || array_key_exists("customerFullNameWidget", $context) ? $context["customerFullNameWidget"] : (function () { throw new RuntimeError('Variable "customerFullNameWidget" does not exist.', 32, $this->source); })()), "customerFullName", [], "any", false, false, false, 32);
            // line 33
            echo "
                ";
            // line 34
            $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["account-navigation"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 34)->display(twig_to_array(["attributes" => ["container-class-name" => "js-page-layout-main__side-drawer-container", "trigger-class-name" => "js-page-layout-main__user-account-navigation-trigger", "locked-body-class-name" => "is-locked-mobile"], "data" => ["title" =>             // line 41
(isset($context["customerFullName"]) || array_key_exists("customerFullName", $context) ? $context["customerFullName"] : (function () { throw new RuntimeError('Variable "customerFullName" does not exist.', 41, $this->source); })()), "items" => [0 => ["name" => "overview", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer/overview"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.account.overview"), "icon" => "page"], 1 => ["name" => "profile", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer/profile"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.account.profile_data"), "icon" => "user"], 2 => ["name" => "address", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer/address"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.account.address"), "icon" => "marker"], 3 => ["name" => "order", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer/order"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.account.order_history"), "icon" => "history"], 4 => ["name" => "returns", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("return/list"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("return_page.default_title"), "icon" => "return-arrow"], 5 => ["name" => "newsletter", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customer/newsletter"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.account.newsletter"), "icon" => "envelopes"], 6 => ["name" => "shopping-list", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shopping-list"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customer.account.shopping_list"), "icon" => "shopping-list"], 7 => ["name" => "shopping-cart", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("multi-cart"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("page.multi_cart.shopping_cart.list.title"), "icon" => "cart"], 8 => ["name" => "quote-request", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quote-request"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("quote_request_widget.request_for_quote.list.title"), "icon" => "message"]]]]));
            // line 100
            echo "
                ";
            // line 101
            if ($this->extensions['SprykerShop\Yves\ShopPermission\Plugin\Twig\PermissionTwigExtensionPlugin']->can("SeeCompanyMenuPermissionPlugin")) {
                // line 102
                echo "                    ";
                $context["menuItemCompanyWidget"] = call_user_func_array($this->env->getFunction('findWidget')->getCallable(), ["MenuItemCompanyWidget"]);
                // line 103
                echo "                    ";
                $context["companyName"] = twig_get_attribute($this->env, $this->source, (isset($context["menuItemCompanyWidget"]) || array_key_exists("menuItemCompanyWidget", $context) ? $context["menuItemCompanyWidget"] : (function () { throw new RuntimeError('Variable "menuItemCompanyWidget" does not exist.', 103, $this->source); })()), "companyName", [], "any", false, false, false, 103);
                // line 104
                echo "
                    ";
                // line 105
                $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["account-navigation"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 105)->display(twig_to_array(["modifiers" => [0 => "company"], "attributes" => ["container-class-name" => "js-page-layout-main__side-drawer-container", "trigger-class-name" => "js-page-layout-main__company-account-navigation-trigger", "locked-body-class-name" => "is-locked-mobile"], "data" => ["introIcon" => "office", "title" =>                 // line 114
(isset($context["companyName"]) || array_key_exists("companyName", $context) ? $context["companyName"] : (function () { throw new RuntimeError('Variable "companyName" does not exist.', 114, $this->source); })()), "items" => [0 => ["name" => "overview", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company/overview"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("company.account.overview"), "icon" => "shopping-list"], 1 => ["name" => "users", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company/user"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("company.account.company_user"), "icon" => "users"], 2 => ["name" => "business-unit", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company/business-unit"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("company.account.business_unit"), "icon" => "office"], 3 => ["name" => "role", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("company/company-role"), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("company.account.company_role"), "icon" => "user"]]]]));
                // line 143
                echo "                ";
            }
            // line 144
            echo "            ";
        }
        // line 145
        echo "        ";
    }

    // line 147
    public function block_outside($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 149
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 150
        echo "            ";
        $this->loadTemplate("@ShopUi/templates/page-layout-main/page-layout-main.twig", "@ShopUi/templates/page-layout-main/page-layout-main.twig", 150, "665460352")->display([]);
        // line 166
        echo "        ";
    }

    // line 169
    public function block_pageInfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 170
        echo "                <div class=\"page-info\">
                    <div class=\"container\">
                        ";
        // line 172
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 175
        echo "
                        ";
        // line 176
        $this->displayBlock('title', $context, $blocks);
        // line 179
        echo "                    </div>
                </div>
            ";
    }

    // line 172
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        echo "                            ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["breadcrumb"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 173)->display([]);
        // line 174
        echo "                        ";
    }

    // line 176
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "                            <h1 class=\"page-info__title title title--h3 \">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 177, $this->source); })()), "title", [], "any", false, false, false, 177), "html", null, true);
        echo "</h1>
                        ";
    }

    // line 183
    public function block_contentClass($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 184
    public function block_contentTop($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 186
    public function block_contentWrap($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "                    <div class=\"container\">
                        ";
        // line 188
        $this->displayBlock('content', $context, $blocks);
        // line 189
        echo "                    </div>
                ";
    }

    // line 188
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 192
    public function block_contentBottom($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 196
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 197
        echo "            ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-1')->setCmsSlotTemplatePath('@ShopUi/templates/page-layout-main/page-layout-main.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 198
        echo "
            ";
        // line 199
        $this->loadTemplate("@ShopUi/templates/page-layout-main/page-layout-main.twig", "@ShopUi/templates/page-layout-main/page-layout-main.twig", 199, "1752004281")->display([]);
        // line 214
        echo "        ";
    }

    // line 220
    public function block_globalComponents($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 221
        echo "        ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["action-single-click-enforcer"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 221)->display(twig_to_array(["attributes" => ["target-selector" => "[data-init-single-click]"]]));
        // line 226
        echo "
        ";
        // line 227
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["form-submitter"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 227)->display(twig_to_array(["attributes" => ["trigger-selector" => "[data-form-submitter]"]]));
        // line 232
        echo "
        ";
        // line 233
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["viewport-intersection-observer"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 233)->display([]);
        // line 234
        echo "
        ";
        // line 235
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["node-animator"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 235)->display([]);
        // line 236
        echo "
        ";
        // line 237
        $this->loadTemplate(call_user_func_array($this->env->getFunction('molecule')->getCallable(), ["window-load-class-remover"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 237)->display(twig_to_array(["attributes" => ["target-class-name" => "page-layout", "trigger-class-name" => "page-layout--preload"]]));
        // line 243
        echo "    ";
    }

    // line 245
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 246
        echo "        ";
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon-sprite"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 246)->display([]);
        // line 247
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/templates/page-layout-main/page-layout-main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 247,  373 => 246,  369 => 245,  365 => 243,  363 => 237,  360 => 236,  358 => 235,  355 => 234,  353 => 233,  350 => 232,  348 => 227,  345 => 226,  342 => 221,  338 => 220,  334 => 214,  332 => 199,  329 => 198,  327 => 197,  323 => 196,  317 => 192,  311 => 188,  306 => 189,  304 => 188,  301 => 187,  297 => 186,  291 => 184,  285 => 183,  278 => 177,  274 => 176,  270 => 174,  267 => 173,  263 => 172,  257 => 179,  255 => 176,  252 => 175,  250 => 172,  246 => 170,  242 => 169,  238 => 166,  235 => 150,  231 => 149,  225 => 147,  221 => 145,  218 => 144,  215 => 143,  213 => 114,  212 => 105,  209 => 104,  206 => 103,  203 => 102,  201 => 101,  198 => 100,  196 => 41,  195 => 34,  192 => 33,  189 => 32,  186 => 31,  184 => 30,  181 => 29,  178 => 18,  174 => 17,  170 => 13,  167 => 12,  163 => 11,  159 => 245,  156 => 244,  154 => 220,  151 => 219,  148 => 218,  146 => 217,  142 => 215,  140 => 196,  135 => 193,  133 => 192,  130 => 191,  128 => 186,  125 => 185,  123 => 184,  119 => 183,  116 => 182,  114 => 169,  110 => 167,  108 => 149,  105 => 148,  103 => 147,  100 => 146,  98 => 17,  95 => 16,  91 => 15,  88 => 14,  85 => 11,  81 => 10,  74 => 8,  66 => 4,  62 => 3,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-blank') %}

{% block meta %}
    {{ parent() }}
    <meta name=\"format-detection\" content=\"telephone=no\">
{% endblock %}

{%- block class -%}js-page-layout-main__side-drawer-container{%- endblock -%}

{% block body %}
    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}
    <div class=\"page-layout page-layout--preload\">
        {% widget 'AgentControlBarWidget' only %}{% endwidget %}

        {% block sidebar %}
            {% embed organism('side-drawer') with {
                attributes: {
                    'container-class-name': 'js-page-layout-main__side-drawer-container',
                    'trigger-class-name': 'js-page-layout-main__side-drawer-trigger',
                    'locked-body-class-name': 'is-locked-tablet',
                },
            } only %}
                {% block navigation %}
                    {% cms_slot 'slt-mobile-header' %}
                {% endblock %}
            {% endembed %}

            {% if is_granted('ROLE_USER') %}
                {% set customerFullNameWidget = findWidget('CustomerFullNameWidget') %}
                {% set customerFullName = customerFullNameWidget.customerFullName %}

                {% include organism('account-navigation') with {
                    attributes: {
                        'container-class-name': 'js-page-layout-main__side-drawer-container',
                        'trigger-class-name': 'js-page-layout-main__user-account-navigation-trigger',
                        'locked-body-class-name': 'is-locked-mobile',
                    },
                    data: {
                        title: customerFullName,
                        items: [
                            {
                                name: 'overview',
                                url: path('customer/overview'),
                                label: 'customer.account.overview' | trans,
                                icon: 'page'
                            },
                            {
                                name: 'profile',
                                url: path('customer/profile'),
                                label: 'customer.account.profile_data' | trans,
                                icon: 'user'
                            },
                            {
                                name: 'address',
                                url: path('customer/address'),
                                label: 'customer.account.address' | trans,
                                icon: 'marker'
                            },
                            {
                                name: 'order',
                                url: path('customer/order'),
                                label: 'customer.account.order_history' | trans,
                                icon: 'history'
                            },
                            {
                                name: 'returns',
                                url: path('return/list'),
                                label: 'return_page.default_title' | trans,
                                icon: 'return-arrow'
                            },
                            {
                                name: 'newsletter',
                                url: path('customer/newsletter'),
                                label: 'customer.account.newsletter' | trans,
                                icon: 'envelopes'
                            },
                            {
                                name: 'shopping-list',
                                url: path('shopping-list'),
                                label: 'customer.account.shopping_list' | trans,
                                icon: 'shopping-list'
                            },
                            {
                                name: 'shopping-cart',
                                url: path('multi-cart'),
                                label: 'page.multi_cart.shopping_cart.list.title' | trans,
                                icon: 'cart'
                            },
                            {
                                name: 'quote-request',
                                url: path('quote-request'),
                                label: 'quote_request_widget.request_for_quote.list.title' | trans,
                                icon: 'message',
                            },
                        ],
                    }
                } only %}

                {% if can('SeeCompanyMenuPermissionPlugin') %}
                    {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
                    {% set companyName = menuItemCompanyWidget.companyName %}

                    {% include organism('account-navigation') with {
                        modifiers: ['company'],
                        attributes: {
                            'container-class-name': 'js-page-layout-main__side-drawer-container',
                            'trigger-class-name': 'js-page-layout-main__company-account-navigation-trigger',
                            'locked-body-class-name': 'is-locked-mobile',
                        },
                        data: {
                            introIcon: 'office',
                            title: companyName,
                            items: [
                                {
                                    name: 'overview',
                                    url: path('company/overview'),
                                    label: 'company.account.overview' | trans,
                                    icon: 'shopping-list'
                                },
                                {
                                    name: 'users',
                                    url: path('company/user'),
                                    label: 'company.account.company_user' | trans,
                                    icon: 'users'
                                },
                                {
                                    name: 'business-unit',
                                    url: path('company/business-unit'),
                                    label: 'company.account.business_unit' | trans,
                                    icon: 'office'
                                },
                                {
                                    name: 'role',
                                    url: path('company/company-role'),
                                    label: 'company.account.company_role' | trans,
                                    icon: 'user'
                                }
                            ]
                        }
                    } only %}
                {% endif %}
            {% endif %}
        {% endblock %}

        {% block outside %}{% endblock %}

        {% block header %}
            {% embed organism('header') only %}
                {% block navigation %}
                    {% cms_slot 'slt-desktop-header' %}
                {% endblock %}

                {% block mobile %}
                    <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                        {% include atom('icon') with {
                            modifiers: ['big'],
                            data: {
                                name: 'bars',
                            },
                        } only %}
                    </a>
                {% endblock %}
            {% endembed %}
        {% endblock %}

        <div itemscope itemtype=\"https://schema.org/Product\" class=\"content-wrap\">
            {% block pageInfo %}
                <div class=\"page-info\">
                    <div class=\"container\">
                        {% block breadcrumbs %}
                            {% include molecule('breadcrumb') only %}
                        {% endblock %}

                        {% block title %}
                            <h1 class=\"page-info__title title title--h3 \">{{ data.title }}</h1>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}

            <main class=\"{% block contentClass %}{% endblock %}\">
                {% block contentTop %}{% endblock %}

                {% block contentWrap %}
                    <div class=\"container\">
                        {% block content %}{% endblock %}
                    </div>
                {% endblock %}

                {% block contentBottom %}{% endblock %}
            </main>
        </div>

        {% block footer %}
            {% cms_slot 'slt-1' %}

            {% embed organism('footer') only %}
                {% block logosInner %}
                    {% cms_slot 'slt-footer-partners' %}
                {% endblock %}

                {% block navigationInner %}
                    <div class=\"grid grid--gap\">
                        {% cms_slot 'slt-footer-navigation' %}
                    </div>
                {% endblock %}

                {% block socialLinks %}
                    {% cms_slot 'slt-footer-social-links' %}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    </div>

    {% include atom('overlay-block') only %}
    {% include atom('touch-checker') only %}

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('node-animator') only %}

        {% include molecule('window-load-class-remover') with {
            attributes: {
                'target-class-name': 'page-layout',
                'trigger-class-name': 'page-layout--preload',
            },
        } only %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}


/* @ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_149ecd77285534c591ae87de613a4a429aed410e26072e0e9cd5f278332abf55___1119969363 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 15
        return $this->loadTemplate((isset($context["_widgetTemplatePath"]) || array_key_exists("_widgetTemplatePath", $context) ? $context["_widgetTemplatePath"] : (function () { throw new RuntimeError('Variable "_widgetTemplatePath" does not exist.', 15, $this->source); })()), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 15);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@ShopUi/templates/page-layout-main/page-layout-main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  668 => 15,  376 => 247,  373 => 246,  369 => 245,  365 => 243,  363 => 237,  360 => 236,  358 => 235,  355 => 234,  353 => 233,  350 => 232,  348 => 227,  345 => 226,  342 => 221,  338 => 220,  334 => 214,  332 => 199,  329 => 198,  327 => 197,  323 => 196,  317 => 192,  311 => 188,  306 => 189,  304 => 188,  301 => 187,  297 => 186,  291 => 184,  285 => 183,  278 => 177,  274 => 176,  270 => 174,  267 => 173,  263 => 172,  257 => 179,  255 => 176,  252 => 175,  250 => 172,  246 => 170,  242 => 169,  238 => 166,  235 => 150,  231 => 149,  225 => 147,  221 => 145,  218 => 144,  215 => 143,  213 => 114,  212 => 105,  209 => 104,  206 => 103,  203 => 102,  201 => 101,  198 => 100,  196 => 41,  195 => 34,  192 => 33,  189 => 32,  186 => 31,  184 => 30,  181 => 29,  178 => 18,  174 => 17,  170 => 13,  167 => 12,  163 => 11,  159 => 245,  156 => 244,  154 => 220,  151 => 219,  148 => 218,  146 => 217,  142 => 215,  140 => 196,  135 => 193,  133 => 192,  130 => 191,  128 => 186,  125 => 185,  123 => 184,  119 => 183,  116 => 182,  114 => 169,  110 => 167,  108 => 149,  105 => 148,  103 => 147,  100 => 146,  98 => 17,  95 => 16,  91 => 15,  88 => 14,  85 => 11,  81 => 10,  74 => 8,  66 => 4,  62 => 3,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-blank') %}

{% block meta %}
    {{ parent() }}
    <meta name=\"format-detection\" content=\"telephone=no\">
{% endblock %}

{%- block class -%}js-page-layout-main__side-drawer-container{%- endblock -%}

{% block body %}
    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}
    <div class=\"page-layout page-layout--preload\">
        {% widget 'AgentControlBarWidget' only %}{% endwidget %}

        {% block sidebar %}
            {% embed organism('side-drawer') with {
                attributes: {
                    'container-class-name': 'js-page-layout-main__side-drawer-container',
                    'trigger-class-name': 'js-page-layout-main__side-drawer-trigger',
                    'locked-body-class-name': 'is-locked-tablet',
                },
            } only %}
                {% block navigation %}
                    {% cms_slot 'slt-mobile-header' %}
                {% endblock %}
            {% endembed %}

            {% if is_granted('ROLE_USER') %}
                {% set customerFullNameWidget = findWidget('CustomerFullNameWidget') %}
                {% set customerFullName = customerFullNameWidget.customerFullName %}

                {% include organism('account-navigation') with {
                    attributes: {
                        'container-class-name': 'js-page-layout-main__side-drawer-container',
                        'trigger-class-name': 'js-page-layout-main__user-account-navigation-trigger',
                        'locked-body-class-name': 'is-locked-mobile',
                    },
                    data: {
                        title: customerFullName,
                        items: [
                            {
                                name: 'overview',
                                url: path('customer/overview'),
                                label: 'customer.account.overview' | trans,
                                icon: 'page'
                            },
                            {
                                name: 'profile',
                                url: path('customer/profile'),
                                label: 'customer.account.profile_data' | trans,
                                icon: 'user'
                            },
                            {
                                name: 'address',
                                url: path('customer/address'),
                                label: 'customer.account.address' | trans,
                                icon: 'marker'
                            },
                            {
                                name: 'order',
                                url: path('customer/order'),
                                label: 'customer.account.order_history' | trans,
                                icon: 'history'
                            },
                            {
                                name: 'returns',
                                url: path('return/list'),
                                label: 'return_page.default_title' | trans,
                                icon: 'return-arrow'
                            },
                            {
                                name: 'newsletter',
                                url: path('customer/newsletter'),
                                label: 'customer.account.newsletter' | trans,
                                icon: 'envelopes'
                            },
                            {
                                name: 'shopping-list',
                                url: path('shopping-list'),
                                label: 'customer.account.shopping_list' | trans,
                                icon: 'shopping-list'
                            },
                            {
                                name: 'shopping-cart',
                                url: path('multi-cart'),
                                label: 'page.multi_cart.shopping_cart.list.title' | trans,
                                icon: 'cart'
                            },
                            {
                                name: 'quote-request',
                                url: path('quote-request'),
                                label: 'quote_request_widget.request_for_quote.list.title' | trans,
                                icon: 'message',
                            },
                        ],
                    }
                } only %}

                {% if can('SeeCompanyMenuPermissionPlugin') %}
                    {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
                    {% set companyName = menuItemCompanyWidget.companyName %}

                    {% include organism('account-navigation') with {
                        modifiers: ['company'],
                        attributes: {
                            'container-class-name': 'js-page-layout-main__side-drawer-container',
                            'trigger-class-name': 'js-page-layout-main__company-account-navigation-trigger',
                            'locked-body-class-name': 'is-locked-mobile',
                        },
                        data: {
                            introIcon: 'office',
                            title: companyName,
                            items: [
                                {
                                    name: 'overview',
                                    url: path('company/overview'),
                                    label: 'company.account.overview' | trans,
                                    icon: 'shopping-list'
                                },
                                {
                                    name: 'users',
                                    url: path('company/user'),
                                    label: 'company.account.company_user' | trans,
                                    icon: 'users'
                                },
                                {
                                    name: 'business-unit',
                                    url: path('company/business-unit'),
                                    label: 'company.account.business_unit' | trans,
                                    icon: 'office'
                                },
                                {
                                    name: 'role',
                                    url: path('company/company-role'),
                                    label: 'company.account.company_role' | trans,
                                    icon: 'user'
                                }
                            ]
                        }
                    } only %}
                {% endif %}
            {% endif %}
        {% endblock %}

        {% block outside %}{% endblock %}

        {% block header %}
            {% embed organism('header') only %}
                {% block navigation %}
                    {% cms_slot 'slt-desktop-header' %}
                {% endblock %}

                {% block mobile %}
                    <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                        {% include atom('icon') with {
                            modifiers: ['big'],
                            data: {
                                name: 'bars',
                            },
                        } only %}
                    </a>
                {% endblock %}
            {% endembed %}
        {% endblock %}

        <div itemscope itemtype=\"https://schema.org/Product\" class=\"content-wrap\">
            {% block pageInfo %}
                <div class=\"page-info\">
                    <div class=\"container\">
                        {% block breadcrumbs %}
                            {% include molecule('breadcrumb') only %}
                        {% endblock %}

                        {% block title %}
                            <h1 class=\"page-info__title title title--h3 \">{{ data.title }}</h1>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}

            <main class=\"{% block contentClass %}{% endblock %}\">
                {% block contentTop %}{% endblock %}

                {% block contentWrap %}
                    <div class=\"container\">
                        {% block content %}{% endblock %}
                    </div>
                {% endblock %}

                {% block contentBottom %}{% endblock %}
            </main>
        </div>

        {% block footer %}
            {% cms_slot 'slt-1' %}

            {% embed organism('footer') only %}
                {% block logosInner %}
                    {% cms_slot 'slt-footer-partners' %}
                {% endblock %}

                {% block navigationInner %}
                    <div class=\"grid grid--gap\">
                        {% cms_slot 'slt-footer-navigation' %}
                    </div>
                {% endblock %}

                {% block socialLinks %}
                    {% cms_slot 'slt-footer-social-links' %}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    </div>

    {% include atom('overlay-block') only %}
    {% include atom('touch-checker') only %}

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('node-animator') only %}

        {% include molecule('window-load-class-remover') with {
            attributes: {
                'target-class-name': 'page-layout',
                'trigger-class-name': 'page-layout--preload',
            },
        } only %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}


/* @ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_149ecd77285534c591ae87de613a4a429aed410e26072e0e9cd5f278332abf55___363326418 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 18
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["side-drawer"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 18);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                    ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-mobile-header')->setCmsSlotTemplatePath('@ShopUi/templates/page-layout-main/page-layout-main.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 27
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/templates/page-layout-main/page-layout-main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  983 => 27,  981 => 26,  977 => 25,  967 => 18,  668 => 15,  376 => 247,  373 => 246,  369 => 245,  365 => 243,  363 => 237,  360 => 236,  358 => 235,  355 => 234,  353 => 233,  350 => 232,  348 => 227,  345 => 226,  342 => 221,  338 => 220,  334 => 214,  332 => 199,  329 => 198,  327 => 197,  323 => 196,  317 => 192,  311 => 188,  306 => 189,  304 => 188,  301 => 187,  297 => 186,  291 => 184,  285 => 183,  278 => 177,  274 => 176,  270 => 174,  267 => 173,  263 => 172,  257 => 179,  255 => 176,  252 => 175,  250 => 172,  246 => 170,  242 => 169,  238 => 166,  235 => 150,  231 => 149,  225 => 147,  221 => 145,  218 => 144,  215 => 143,  213 => 114,  212 => 105,  209 => 104,  206 => 103,  203 => 102,  201 => 101,  198 => 100,  196 => 41,  195 => 34,  192 => 33,  189 => 32,  186 => 31,  184 => 30,  181 => 29,  178 => 18,  174 => 17,  170 => 13,  167 => 12,  163 => 11,  159 => 245,  156 => 244,  154 => 220,  151 => 219,  148 => 218,  146 => 217,  142 => 215,  140 => 196,  135 => 193,  133 => 192,  130 => 191,  128 => 186,  125 => 185,  123 => 184,  119 => 183,  116 => 182,  114 => 169,  110 => 167,  108 => 149,  105 => 148,  103 => 147,  100 => 146,  98 => 17,  95 => 16,  91 => 15,  88 => 14,  85 => 11,  81 => 10,  74 => 8,  66 => 4,  62 => 3,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-blank') %}

{% block meta %}
    {{ parent() }}
    <meta name=\"format-detection\" content=\"telephone=no\">
{% endblock %}

{%- block class -%}js-page-layout-main__side-drawer-container{%- endblock -%}

{% block body %}
    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}
    <div class=\"page-layout page-layout--preload\">
        {% widget 'AgentControlBarWidget' only %}{% endwidget %}

        {% block sidebar %}
            {% embed organism('side-drawer') with {
                attributes: {
                    'container-class-name': 'js-page-layout-main__side-drawer-container',
                    'trigger-class-name': 'js-page-layout-main__side-drawer-trigger',
                    'locked-body-class-name': 'is-locked-tablet',
                },
            } only %}
                {% block navigation %}
                    {% cms_slot 'slt-mobile-header' %}
                {% endblock %}
            {% endembed %}

            {% if is_granted('ROLE_USER') %}
                {% set customerFullNameWidget = findWidget('CustomerFullNameWidget') %}
                {% set customerFullName = customerFullNameWidget.customerFullName %}

                {% include organism('account-navigation') with {
                    attributes: {
                        'container-class-name': 'js-page-layout-main__side-drawer-container',
                        'trigger-class-name': 'js-page-layout-main__user-account-navigation-trigger',
                        'locked-body-class-name': 'is-locked-mobile',
                    },
                    data: {
                        title: customerFullName,
                        items: [
                            {
                                name: 'overview',
                                url: path('customer/overview'),
                                label: 'customer.account.overview' | trans,
                                icon: 'page'
                            },
                            {
                                name: 'profile',
                                url: path('customer/profile'),
                                label: 'customer.account.profile_data' | trans,
                                icon: 'user'
                            },
                            {
                                name: 'address',
                                url: path('customer/address'),
                                label: 'customer.account.address' | trans,
                                icon: 'marker'
                            },
                            {
                                name: 'order',
                                url: path('customer/order'),
                                label: 'customer.account.order_history' | trans,
                                icon: 'history'
                            },
                            {
                                name: 'returns',
                                url: path('return/list'),
                                label: 'return_page.default_title' | trans,
                                icon: 'return-arrow'
                            },
                            {
                                name: 'newsletter',
                                url: path('customer/newsletter'),
                                label: 'customer.account.newsletter' | trans,
                                icon: 'envelopes'
                            },
                            {
                                name: 'shopping-list',
                                url: path('shopping-list'),
                                label: 'customer.account.shopping_list' | trans,
                                icon: 'shopping-list'
                            },
                            {
                                name: 'shopping-cart',
                                url: path('multi-cart'),
                                label: 'page.multi_cart.shopping_cart.list.title' | trans,
                                icon: 'cart'
                            },
                            {
                                name: 'quote-request',
                                url: path('quote-request'),
                                label: 'quote_request_widget.request_for_quote.list.title' | trans,
                                icon: 'message',
                            },
                        ],
                    }
                } only %}

                {% if can('SeeCompanyMenuPermissionPlugin') %}
                    {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
                    {% set companyName = menuItemCompanyWidget.companyName %}

                    {% include organism('account-navigation') with {
                        modifiers: ['company'],
                        attributes: {
                            'container-class-name': 'js-page-layout-main__side-drawer-container',
                            'trigger-class-name': 'js-page-layout-main__company-account-navigation-trigger',
                            'locked-body-class-name': 'is-locked-mobile',
                        },
                        data: {
                            introIcon: 'office',
                            title: companyName,
                            items: [
                                {
                                    name: 'overview',
                                    url: path('company/overview'),
                                    label: 'company.account.overview' | trans,
                                    icon: 'shopping-list'
                                },
                                {
                                    name: 'users',
                                    url: path('company/user'),
                                    label: 'company.account.company_user' | trans,
                                    icon: 'users'
                                },
                                {
                                    name: 'business-unit',
                                    url: path('company/business-unit'),
                                    label: 'company.account.business_unit' | trans,
                                    icon: 'office'
                                },
                                {
                                    name: 'role',
                                    url: path('company/company-role'),
                                    label: 'company.account.company_role' | trans,
                                    icon: 'user'
                                }
                            ]
                        }
                    } only %}
                {% endif %}
            {% endif %}
        {% endblock %}

        {% block outside %}{% endblock %}

        {% block header %}
            {% embed organism('header') only %}
                {% block navigation %}
                    {% cms_slot 'slt-desktop-header' %}
                {% endblock %}

                {% block mobile %}
                    <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                        {% include atom('icon') with {
                            modifiers: ['big'],
                            data: {
                                name: 'bars',
                            },
                        } only %}
                    </a>
                {% endblock %}
            {% endembed %}
        {% endblock %}

        <div itemscope itemtype=\"https://schema.org/Product\" class=\"content-wrap\">
            {% block pageInfo %}
                <div class=\"page-info\">
                    <div class=\"container\">
                        {% block breadcrumbs %}
                            {% include molecule('breadcrumb') only %}
                        {% endblock %}

                        {% block title %}
                            <h1 class=\"page-info__title title title--h3 \">{{ data.title }}</h1>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}

            <main class=\"{% block contentClass %}{% endblock %}\">
                {% block contentTop %}{% endblock %}

                {% block contentWrap %}
                    <div class=\"container\">
                        {% block content %}{% endblock %}
                    </div>
                {% endblock %}

                {% block contentBottom %}{% endblock %}
            </main>
        </div>

        {% block footer %}
            {% cms_slot 'slt-1' %}

            {% embed organism('footer') only %}
                {% block logosInner %}
                    {% cms_slot 'slt-footer-partners' %}
                {% endblock %}

                {% block navigationInner %}
                    <div class=\"grid grid--gap\">
                        {% cms_slot 'slt-footer-navigation' %}
                    </div>
                {% endblock %}

                {% block socialLinks %}
                    {% cms_slot 'slt-footer-social-links' %}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    </div>

    {% include atom('overlay-block') only %}
    {% include atom('touch-checker') only %}

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('node-animator') only %}

        {% include molecule('window-load-class-remover') with {
            attributes: {
                'target-class-name': 'page-layout',
                'trigger-class-name': 'page-layout--preload',
            },
        } only %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}


/* @ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_149ecd77285534c591ae87de613a4a429aed410e26072e0e9cd5f278332abf55___665460352 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navigation' => [$this, 'block_navigation'],
            'mobile' => [$this, 'block_mobile'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 150
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["header"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 150);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 151
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "                    ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-desktop-header')->setCmsSlotTemplatePath('@ShopUi/templates/page-layout-main/page-layout-main.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 153
        echo "                ";
    }

    // line 155
    public function block_mobile($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "                    <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                        ";
        // line 157
        $this->loadTemplate(call_user_func_array($this->env->getFunction('atom')->getCallable(), ["icon"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 157)->display(twig_to_array(["modifiers" => [0 => "big"], "data" => ["name" => "bars"]]));
        // line 163
        echo "                    </a>
                ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/templates/page-layout-main/page-layout-main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1306 => 163,  1304 => 157,  1301 => 156,  1297 => 155,  1293 => 153,  1291 => 152,  1287 => 151,  1277 => 150,  983 => 27,  981 => 26,  977 => 25,  967 => 18,  668 => 15,  376 => 247,  373 => 246,  369 => 245,  365 => 243,  363 => 237,  360 => 236,  358 => 235,  355 => 234,  353 => 233,  350 => 232,  348 => 227,  345 => 226,  342 => 221,  338 => 220,  334 => 214,  332 => 199,  329 => 198,  327 => 197,  323 => 196,  317 => 192,  311 => 188,  306 => 189,  304 => 188,  301 => 187,  297 => 186,  291 => 184,  285 => 183,  278 => 177,  274 => 176,  270 => 174,  267 => 173,  263 => 172,  257 => 179,  255 => 176,  252 => 175,  250 => 172,  246 => 170,  242 => 169,  238 => 166,  235 => 150,  231 => 149,  225 => 147,  221 => 145,  218 => 144,  215 => 143,  213 => 114,  212 => 105,  209 => 104,  206 => 103,  203 => 102,  201 => 101,  198 => 100,  196 => 41,  195 => 34,  192 => 33,  189 => 32,  186 => 31,  184 => 30,  181 => 29,  178 => 18,  174 => 17,  170 => 13,  167 => 12,  163 => 11,  159 => 245,  156 => 244,  154 => 220,  151 => 219,  148 => 218,  146 => 217,  142 => 215,  140 => 196,  135 => 193,  133 => 192,  130 => 191,  128 => 186,  125 => 185,  123 => 184,  119 => 183,  116 => 182,  114 => 169,  110 => 167,  108 => 149,  105 => 148,  103 => 147,  100 => 146,  98 => 17,  95 => 16,  91 => 15,  88 => 14,  85 => 11,  81 => 10,  74 => 8,  66 => 4,  62 => 3,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-blank') %}

{% block meta %}
    {{ parent() }}
    <meta name=\"format-detection\" content=\"telephone=no\">
{% endblock %}

{%- block class -%}js-page-layout-main__side-drawer-container{%- endblock -%}

{% block body %}
    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}
    <div class=\"page-layout page-layout--preload\">
        {% widget 'AgentControlBarWidget' only %}{% endwidget %}

        {% block sidebar %}
            {% embed organism('side-drawer') with {
                attributes: {
                    'container-class-name': 'js-page-layout-main__side-drawer-container',
                    'trigger-class-name': 'js-page-layout-main__side-drawer-trigger',
                    'locked-body-class-name': 'is-locked-tablet',
                },
            } only %}
                {% block navigation %}
                    {% cms_slot 'slt-mobile-header' %}
                {% endblock %}
            {% endembed %}

            {% if is_granted('ROLE_USER') %}
                {% set customerFullNameWidget = findWidget('CustomerFullNameWidget') %}
                {% set customerFullName = customerFullNameWidget.customerFullName %}

                {% include organism('account-navigation') with {
                    attributes: {
                        'container-class-name': 'js-page-layout-main__side-drawer-container',
                        'trigger-class-name': 'js-page-layout-main__user-account-navigation-trigger',
                        'locked-body-class-name': 'is-locked-mobile',
                    },
                    data: {
                        title: customerFullName,
                        items: [
                            {
                                name: 'overview',
                                url: path('customer/overview'),
                                label: 'customer.account.overview' | trans,
                                icon: 'page'
                            },
                            {
                                name: 'profile',
                                url: path('customer/profile'),
                                label: 'customer.account.profile_data' | trans,
                                icon: 'user'
                            },
                            {
                                name: 'address',
                                url: path('customer/address'),
                                label: 'customer.account.address' | trans,
                                icon: 'marker'
                            },
                            {
                                name: 'order',
                                url: path('customer/order'),
                                label: 'customer.account.order_history' | trans,
                                icon: 'history'
                            },
                            {
                                name: 'returns',
                                url: path('return/list'),
                                label: 'return_page.default_title' | trans,
                                icon: 'return-arrow'
                            },
                            {
                                name: 'newsletter',
                                url: path('customer/newsletter'),
                                label: 'customer.account.newsletter' | trans,
                                icon: 'envelopes'
                            },
                            {
                                name: 'shopping-list',
                                url: path('shopping-list'),
                                label: 'customer.account.shopping_list' | trans,
                                icon: 'shopping-list'
                            },
                            {
                                name: 'shopping-cart',
                                url: path('multi-cart'),
                                label: 'page.multi_cart.shopping_cart.list.title' | trans,
                                icon: 'cart'
                            },
                            {
                                name: 'quote-request',
                                url: path('quote-request'),
                                label: 'quote_request_widget.request_for_quote.list.title' | trans,
                                icon: 'message',
                            },
                        ],
                    }
                } only %}

                {% if can('SeeCompanyMenuPermissionPlugin') %}
                    {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
                    {% set companyName = menuItemCompanyWidget.companyName %}

                    {% include organism('account-navigation') with {
                        modifiers: ['company'],
                        attributes: {
                            'container-class-name': 'js-page-layout-main__side-drawer-container',
                            'trigger-class-name': 'js-page-layout-main__company-account-navigation-trigger',
                            'locked-body-class-name': 'is-locked-mobile',
                        },
                        data: {
                            introIcon: 'office',
                            title: companyName,
                            items: [
                                {
                                    name: 'overview',
                                    url: path('company/overview'),
                                    label: 'company.account.overview' | trans,
                                    icon: 'shopping-list'
                                },
                                {
                                    name: 'users',
                                    url: path('company/user'),
                                    label: 'company.account.company_user' | trans,
                                    icon: 'users'
                                },
                                {
                                    name: 'business-unit',
                                    url: path('company/business-unit'),
                                    label: 'company.account.business_unit' | trans,
                                    icon: 'office'
                                },
                                {
                                    name: 'role',
                                    url: path('company/company-role'),
                                    label: 'company.account.company_role' | trans,
                                    icon: 'user'
                                }
                            ]
                        }
                    } only %}
                {% endif %}
            {% endif %}
        {% endblock %}

        {% block outside %}{% endblock %}

        {% block header %}
            {% embed organism('header') only %}
                {% block navigation %}
                    {% cms_slot 'slt-desktop-header' %}
                {% endblock %}

                {% block mobile %}
                    <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                        {% include atom('icon') with {
                            modifiers: ['big'],
                            data: {
                                name: 'bars',
                            },
                        } only %}
                    </a>
                {% endblock %}
            {% endembed %}
        {% endblock %}

        <div itemscope itemtype=\"https://schema.org/Product\" class=\"content-wrap\">
            {% block pageInfo %}
                <div class=\"page-info\">
                    <div class=\"container\">
                        {% block breadcrumbs %}
                            {% include molecule('breadcrumb') only %}
                        {% endblock %}

                        {% block title %}
                            <h1 class=\"page-info__title title title--h3 \">{{ data.title }}</h1>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}

            <main class=\"{% block contentClass %}{% endblock %}\">
                {% block contentTop %}{% endblock %}

                {% block contentWrap %}
                    <div class=\"container\">
                        {% block content %}{% endblock %}
                    </div>
                {% endblock %}

                {% block contentBottom %}{% endblock %}
            </main>
        </div>

        {% block footer %}
            {% cms_slot 'slt-1' %}

            {% embed organism('footer') only %}
                {% block logosInner %}
                    {% cms_slot 'slt-footer-partners' %}
                {% endblock %}

                {% block navigationInner %}
                    <div class=\"grid grid--gap\">
                        {% cms_slot 'slt-footer-navigation' %}
                    </div>
                {% endblock %}

                {% block socialLinks %}
                    {% cms_slot 'slt-footer-social-links' %}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    </div>

    {% include atom('overlay-block') only %}
    {% include atom('touch-checker') only %}

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('node-animator') only %}

        {% include molecule('window-load-class-remover') with {
            attributes: {
                'target-class-name': 'page-layout',
                'trigger-class-name': 'page-layout--preload',
            },
        } only %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}


/* @ShopUi/templates/page-layout-main/page-layout-main.twig */
class __TwigTemplate_149ecd77285534c591ae87de613a4a429aed410e26072e0e9cd5f278332abf55___1752004281 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'logosInner' => [$this, 'block_logosInner'],
            'navigationInner' => [$this, 'block_navigationInner'],
            'socialLinks' => [$this, 'block_socialLinks'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 199
        return $this->loadTemplate(call_user_func_array($this->env->getFunction('organism')->getCallable(), ["footer"]), "@ShopUi/templates/page-layout-main/page-layout-main.twig", 199);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 200
    public function block_logosInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "                    ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-footer-partners')->setCmsSlotTemplatePath('@ShopUi/templates/page-layout-main/page-layout-main.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 202
        echo "                ";
    }

    // line 204
    public function block_navigationInner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 205
        echo "                    <div class=\"grid grid--gap\">
                        ";
        // line 206
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-footer-navigation')->setCmsSlotTemplatePath('@ShopUi/templates/page-layout-main/page-layout-main.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 207
        echo "                    </div>
                ";
    }

    // line 210
    public function block_socialLinks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 211
        echo "                    ";
echo $this->env->getExtension('SprykerShop\Yves\ShopCmsSlot\Plugin\Twig\ShopCmsSlotTwigPlugin')->getSlotContent((new Generated\Shared\Transfer\CmsSlotContextTransfer())->setCmsSlotKey('slt-footer-social-links')->setCmsSlotTemplatePath('@ShopUi/templates/page-layout-main/page-layout-main.twig')->setProvidedData([])->setRequiredKeys([])->setAutoFilledKeys([]));        // line 212
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@ShopUi/templates/page-layout-main/page-layout-main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1641 => 212,  1639 => 211,  1635 => 210,  1630 => 207,  1629 => 206,  1626 => 205,  1622 => 204,  1618 => 202,  1616 => 201,  1612 => 200,  1602 => 199,  1306 => 163,  1304 => 157,  1301 => 156,  1297 => 155,  1293 => 153,  1291 => 152,  1287 => 151,  1277 => 150,  983 => 27,  981 => 26,  977 => 25,  967 => 18,  668 => 15,  376 => 247,  373 => 246,  369 => 245,  365 => 243,  363 => 237,  360 => 236,  358 => 235,  355 => 234,  353 => 233,  350 => 232,  348 => 227,  345 => 226,  342 => 221,  338 => 220,  334 => 214,  332 => 199,  329 => 198,  327 => 197,  323 => 196,  317 => 192,  311 => 188,  306 => 189,  304 => 188,  301 => 187,  297 => 186,  291 => 184,  285 => 183,  278 => 177,  274 => 176,  270 => 174,  267 => 173,  263 => 172,  257 => 179,  255 => 176,  252 => 175,  250 => 172,  246 => 170,  242 => 169,  238 => 166,  235 => 150,  231 => 149,  225 => 147,  221 => 145,  218 => 144,  215 => 143,  213 => 114,  212 => 105,  209 => 104,  206 => 103,  203 => 102,  201 => 101,  198 => 100,  196 => 41,  195 => 34,  192 => 33,  189 => 32,  186 => 31,  184 => 30,  181 => 29,  178 => 18,  174 => 17,  170 => 13,  167 => 12,  163 => 11,  159 => 245,  156 => 244,  154 => 220,  151 => 219,  148 => 218,  146 => 217,  142 => 215,  140 => 196,  135 => 193,  133 => 192,  130 => 191,  128 => 186,  125 => 185,  123 => 184,  119 => 183,  116 => 182,  114 => 169,  110 => 167,  108 => 149,  105 => 148,  103 => 147,  100 => 146,  98 => 17,  95 => 16,  91 => 15,  88 => 14,  85 => 11,  81 => 10,  74 => 8,  66 => 4,  62 => 3,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends template('page-blank') %}

{% block meta %}
    {{ parent() }}
    <meta name=\"format-detection\" content=\"telephone=no\">
{% endblock %}

{%- block class -%}js-page-layout-main__side-drawer-container{%- endblock -%}

{% block body %}
    {% block notifications %}
        {% include organism('notification-area') only %}
    {% endblock %}
    <div class=\"page-layout page-layout--preload\">
        {% widget 'AgentControlBarWidget' only %}{% endwidget %}

        {% block sidebar %}
            {% embed organism('side-drawer') with {
                attributes: {
                    'container-class-name': 'js-page-layout-main__side-drawer-container',
                    'trigger-class-name': 'js-page-layout-main__side-drawer-trigger',
                    'locked-body-class-name': 'is-locked-tablet',
                },
            } only %}
                {% block navigation %}
                    {% cms_slot 'slt-mobile-header' %}
                {% endblock %}
            {% endembed %}

            {% if is_granted('ROLE_USER') %}
                {% set customerFullNameWidget = findWidget('CustomerFullNameWidget') %}
                {% set customerFullName = customerFullNameWidget.customerFullName %}

                {% include organism('account-navigation') with {
                    attributes: {
                        'container-class-name': 'js-page-layout-main__side-drawer-container',
                        'trigger-class-name': 'js-page-layout-main__user-account-navigation-trigger',
                        'locked-body-class-name': 'is-locked-mobile',
                    },
                    data: {
                        title: customerFullName,
                        items: [
                            {
                                name: 'overview',
                                url: path('customer/overview'),
                                label: 'customer.account.overview' | trans,
                                icon: 'page'
                            },
                            {
                                name: 'profile',
                                url: path('customer/profile'),
                                label: 'customer.account.profile_data' | trans,
                                icon: 'user'
                            },
                            {
                                name: 'address',
                                url: path('customer/address'),
                                label: 'customer.account.address' | trans,
                                icon: 'marker'
                            },
                            {
                                name: 'order',
                                url: path('customer/order'),
                                label: 'customer.account.order_history' | trans,
                                icon: 'history'
                            },
                            {
                                name: 'returns',
                                url: path('return/list'),
                                label: 'return_page.default_title' | trans,
                                icon: 'return-arrow'
                            },
                            {
                                name: 'newsletter',
                                url: path('customer/newsletter'),
                                label: 'customer.account.newsletter' | trans,
                                icon: 'envelopes'
                            },
                            {
                                name: 'shopping-list',
                                url: path('shopping-list'),
                                label: 'customer.account.shopping_list' | trans,
                                icon: 'shopping-list'
                            },
                            {
                                name: 'shopping-cart',
                                url: path('multi-cart'),
                                label: 'page.multi_cart.shopping_cart.list.title' | trans,
                                icon: 'cart'
                            },
                            {
                                name: 'quote-request',
                                url: path('quote-request'),
                                label: 'quote_request_widget.request_for_quote.list.title' | trans,
                                icon: 'message',
                            },
                        ],
                    }
                } only %}

                {% if can('SeeCompanyMenuPermissionPlugin') %}
                    {% set menuItemCompanyWidget = findWidget('MenuItemCompanyWidget') %}
                    {% set companyName = menuItemCompanyWidget.companyName %}

                    {% include organism('account-navigation') with {
                        modifiers: ['company'],
                        attributes: {
                            'container-class-name': 'js-page-layout-main__side-drawer-container',
                            'trigger-class-name': 'js-page-layout-main__company-account-navigation-trigger',
                            'locked-body-class-name': 'is-locked-mobile',
                        },
                        data: {
                            introIcon: 'office',
                            title: companyName,
                            items: [
                                {
                                    name: 'overview',
                                    url: path('company/overview'),
                                    label: 'company.account.overview' | trans,
                                    icon: 'shopping-list'
                                },
                                {
                                    name: 'users',
                                    url: path('company/user'),
                                    label: 'company.account.company_user' | trans,
                                    icon: 'users'
                                },
                                {
                                    name: 'business-unit',
                                    url: path('company/business-unit'),
                                    label: 'company.account.business_unit' | trans,
                                    icon: 'office'
                                },
                                {
                                    name: 'role',
                                    url: path('company/company-role'),
                                    label: 'company.account.company_role' | trans,
                                    icon: 'user'
                                }
                            ]
                        }
                    } only %}
                {% endif %}
            {% endif %}
        {% endblock %}

        {% block outside %}{% endblock %}

        {% block header %}
            {% embed organism('header') only %}
                {% block navigation %}
                    {% cms_slot 'slt-desktop-header' %}
                {% endblock %}

                {% block mobile %}
                    <a href=\"#\" class=\"link link--alt js-page-layout-main__side-drawer-trigger\">
                        {% include atom('icon') with {
                            modifiers: ['big'],
                            data: {
                                name: 'bars',
                            },
                        } only %}
                    </a>
                {% endblock %}
            {% endembed %}
        {% endblock %}

        <div itemscope itemtype=\"https://schema.org/Product\" class=\"content-wrap\">
            {% block pageInfo %}
                <div class=\"page-info\">
                    <div class=\"container\">
                        {% block breadcrumbs %}
                            {% include molecule('breadcrumb') only %}
                        {% endblock %}

                        {% block title %}
                            <h1 class=\"page-info__title title title--h3 \">{{ data.title }}</h1>
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}

            <main class=\"{% block contentClass %}{% endblock %}\">
                {% block contentTop %}{% endblock %}

                {% block contentWrap %}
                    <div class=\"container\">
                        {% block content %}{% endblock %}
                    </div>
                {% endblock %}

                {% block contentBottom %}{% endblock %}
            </main>
        </div>

        {% block footer %}
            {% cms_slot 'slt-1' %}

            {% embed organism('footer') only %}
                {% block logosInner %}
                    {% cms_slot 'slt-footer-partners' %}
                {% endblock %}

                {% block navigationInner %}
                    <div class=\"grid grid--gap\">
                        {% cms_slot 'slt-footer-navigation' %}
                    </div>
                {% endblock %}

                {% block socialLinks %}
                    {% cms_slot 'slt-footer-social-links' %}
                {% endblock %}
            {% endembed %}
        {% endblock %}
    </div>

    {% include atom('overlay-block') only %}
    {% include atom('touch-checker') only %}

    {% block globalComponents %}
        {% include molecule('action-single-click-enforcer') with {
            attributes: {
                'target-selector': '[data-init-single-click]',
            },
        } only %}

        {% include molecule('form-submitter') with {
            attributes: {
                'trigger-selector': '[data-form-submitter]',
            },
        } only %}

        {% include molecule('viewport-intersection-observer') only %}

        {% include molecule('node-animator') only %}

        {% include molecule('window-load-class-remover') with {
            attributes: {
                'target-class-name': 'page-layout',
                'trigger-class-name': 'page-layout--preload',
            },
        } only %}
    {% endblock %}

    {% block icons %}
        {% include atom('icon-sprite') only %}
    {% endblock %}
{% endblock %}
", "@ShopUi/templates/page-layout-main/page-layout-main.twig", "/data/src/Pyz/Yves/ShopUi/Theme/default/templates/page-layout-main/page-layout-main.twig");
    }
}
