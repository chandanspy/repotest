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

/* @FileManagerGui/DirectoriesTree/_partials/directory-deleting-confirmation-modal.twig */
class __TwigTemplate_0dc321d07df749e6e18e1e1433c8276bff843aef054bd68316561aeecc7cefeb extends Template
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
        echo "<div id=\"directory-deleting-confirmation-modal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm deleting"), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Do you want to remove the folder with all files?"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteDirectoryForm"]) || array_key_exists("deleteDirectoryForm", $context) ? $context["deleteDirectoryForm"] : (function () { throw new RuntimeError('Variable "deleteDirectoryForm" does not exist.', 14, $this->source); })()), 'form_start', ["action" => "", "attr" => ["class" => "form-inline"]]);
        echo "
                    <button id=\"delete-directory-confirmation-button\" class=\"btn btn-primary\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Сonfirm"), "html", null, true);
        echo "</button>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteDirectoryForm"]) || array_key_exists("deleteDirectoryForm", $context) ? $context["deleteDirectoryForm"] : (function () { throw new RuntimeError('Variable "deleteDirectoryForm" does not exist.', 16, $this->source); })()), 'form_end');
        echo "
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@FileManagerGui/DirectoriesTree/_partials/directory-deleting-confirmation-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  66 => 16,  62 => 15,  58 => 14,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"directory-deleting-confirmation-modal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">{{ 'Confirm deleting' | trans }}</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>{{ 'Do you want to remove the folder with all files?' | trans }}</p>
            </div>
            <div class=\"modal-footer\">
                {{ form_start(deleteDirectoryForm, {action: '', attr: {class: 'form-inline'} }) }}
                    <button id=\"delete-directory-confirmation-button\" class=\"btn btn-primary\">{{ 'Сonfirm' | trans }}</button>
                {{ form_end(deleteDirectoryForm) }}
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">{{ 'Cancel' | trans }}</button>
            </div>
        </div>
    </div>
</div>
", "@FileManagerGui/DirectoriesTree/_partials/directory-deleting-confirmation-modal.twig", "/data/vendor/spryker/file-manager-gui/src/Spryker/Zed/FileManagerGui/Presentation//DirectoriesTree/_partials/directory-deleting-confirmation-modal.twig");
    }
}
