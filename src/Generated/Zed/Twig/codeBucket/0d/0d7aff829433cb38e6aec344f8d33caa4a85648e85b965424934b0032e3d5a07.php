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

/* @PriceProductVolumeGui/PriceVolume/add.twig */
class __TwigTemplate_14adaef8cfd66c58741e80f67db5a42e41c0c78f8d4ae532a8a0d7c2dff0d48b extends Template
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
        $this->loadTemplate("@PriceProductVolumeGui/PriceVolume/template/price-volume-form.twig", "@PriceProductVolumeGui/PriceVolume/add.twig", 1)->display(twig_array_merge($context, ["data" => ["title" => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add volume prices for product") . ": ") .         // line 3
(isset($context["product_sku"]) || array_key_exists("product_sku", $context) ? $context["product_sku"] : (function () { throw new RuntimeError('Variable "product_sku" does not exist.', 3, $this->source); })()))]]));
    }

    public function getTemplateName()
    {
        return "@PriceProductVolumeGui/PriceVolume/add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include('@PriceProductVolumeGui/PriceVolume/template/price-volume-form.twig') with {
    data: {
        title: 'Add volume prices for product' | trans  ~ ': ' ~ product_sku
    }
}%}
", "@PriceProductVolumeGui/PriceVolume/add.twig", "/data/vendor/spryker/price-product-volume-gui/src/Spryker/Zed/PriceProductVolumeGui/Presentation//PriceVolume/add.twig");
    }
}
