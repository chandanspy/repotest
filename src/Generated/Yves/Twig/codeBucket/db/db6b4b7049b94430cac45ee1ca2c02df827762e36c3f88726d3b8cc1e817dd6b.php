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

/* __string_template__36ded4398595187935f5dbf06203ff7314bbe85d20e50bf0f0d5255181369ff1 */
class __TwigTemplate_6ef71b837093190a2ce2a4c7659a5e5c12d4d33777915249ec4c4f768d9c307b extends Template
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
        echo "<div style=\"text-align: center;\"><img src=\"http://d2s0ynfc62ej12.cloudfront.net/image/demo-page-image.png\" style=\"width: 100%; float: none;\"/><br></div><div style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Lato, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 13px;=\"\" font-variant-ligatures:=\"\" normal;=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" padding:=\"\" text-align:=\"\" justify;=\"\" margin-top:=\"\" 1em;=\"\" margin-bottom:=\"\" 1em;\"=\"\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Lato, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 13px;=\"\" font-variant-ligatures:=\"\" normal;=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" 0px;-en-paragraph:true;\"=\"\"><div style=\"-en-clipboard:true;\"><br></div>Offices are not just a place to work, but an extension of your companies personal style. Find quality designed items that are beautiful and comfortable so your team can focus on what they do best. We work around the clock to procure the most creative and functional pieces in an effort to make your company look and feel like the success we know it is. Feel free to browse our newest finds we believe will improve the aesthetics of any office space.&nbsp;</span></div><div style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Lato, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 13px;=\"\" font-variant-ligatures:=\"\" normal;=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" padding:=\"\" text-align:=\"\" justify;=\"\" margin-top:=\"\" 1em;=\"\" margin-bottom:=\"\" 1em;\"=\"\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Lato, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 13px;=\"\" font-variant-ligatures:=\"\" normal;=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" 0px;-en-paragraph:true;\"=\"\"><br></span></div><div><p><b><span style=\"font-size: 18px;\">Best Selling Items:</span></b><br></p>";
        echo call_user_func_array($this->env->getFunction('content_product_abstract_list')->getCallable(), ["apl-3", "slider"]);
        echo "</div><p><br></p><p>Build an environment which inspires engaged, productive employees. Explore our best selling items which have helped countless office spaces create environments which instill collaboration and innovation.&nbsp;</p><p><br></p><p>";
        echo call_user_func_array($this->env->getFunction('content_product_set')->getCallable(), [$context, "ps-1", "landing-page"]);
        echo "</p><p>Office equipment and furniture shouldn’t drain your budget. Explore our newest, on-sale items below.&nbsp;</p><p><br></p><p><span style=\"font-size: 18px; font-weight: bold;\">Newest sale items:</span></p><p></p><div>";
        echo call_user_func_array($this->env->getFunction('content_product_abstract_list')->getCallable(), ["apl-4", "slider"]);
        echo "</div><div><br></div><p><br></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__36ded4398595187935f5dbf06203ff7314bbe85d20e50bf0f0d5255181369ff1";
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
        return new Source("<div style=\"text-align: center;\"><img src=\"http://d2s0ynfc62ej12.cloudfront.net/image/demo-page-image.png\" style=\"width: 100%; float: none;\"/><br></div><div style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Lato, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 13px;=\"\" font-variant-ligatures:=\"\" normal;=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" padding:=\"\" text-align:=\"\" justify;=\"\" margin-top:=\"\" 1em;=\"\" margin-bottom:=\"\" 1em;\"=\"\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Lato, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 13px;=\"\" font-variant-ligatures:=\"\" normal;=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" 0px;-en-paragraph:true;\"=\"\"><div style=\"-en-clipboard:true;\"><br></div>Offices are not just a place to work, but an extension of your companies personal style. Find quality designed items that are beautiful and comfortable so your team can focus on what they do best. We work around the clock to procure the most creative and functional pieces in an effort to make your company look and feel like the success we know it is. Feel free to browse our newest finds we believe will improve the aesthetics of any office space.&nbsp;</span></div><div style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Lato, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 13px;=\"\" font-variant-ligatures:=\"\" normal;=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" padding:=\"\" text-align:=\"\" justify;=\"\" margin-top:=\"\" 1em;=\"\" margin-bottom:=\"\" 1em;\"=\"\"><span style=\"box-sizing: border-box; color: rgb(0, 0, 0); font-family: Lato, \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 13px;=\"\" font-variant-ligatures:=\"\" normal;=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" 0px;-en-paragraph:true;\"=\"\"><br></span></div><div><p><b><span style=\"font-size: 18px;\">Best Selling Items:</span></b><br></p>{{ content_product_abstract_list('apl-3', 'slider') }}</div><p><br></p><p>Build an environment which inspires engaged, productive employees. Explore our best selling items which have helped countless office spaces create environments which instill collaboration and innovation.&nbsp;</p><p><br></p><p>{{ content_product_set('ps-1', 'landing-page') }}</p><p>Office equipment and furniture shouldn’t drain your budget. Explore our newest, on-sale items below.&nbsp;</p><p><br></p><p><span style=\"font-size: 18px; font-weight: bold;\">Newest sale items:</span></p><p></p><div>{{ content_product_abstract_list('apl-4', 'slider') }}</div><div><br></div><p><br></p>", "__string_template__36ded4398595187935f5dbf06203ff7314bbe85d20e50bf0f0d5255181369ff1", "");
    }
}
