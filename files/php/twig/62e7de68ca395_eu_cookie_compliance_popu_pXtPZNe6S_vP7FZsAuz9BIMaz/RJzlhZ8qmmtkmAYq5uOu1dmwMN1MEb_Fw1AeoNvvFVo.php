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

/* sites/cidade-integrada/modules/eu_cookie_compliance/templates/eu_cookie_compliance_popup_agreed.html.twig */
class __TwigTemplate_706110682fd86100da202c4c6952b39f625b1c957c443b7d5c9dba6b62c9d809 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "
<div role=\"alertdialog\" aria-labelledby=\"popup-text\" class=\"eu-cookie-compliance-banner eu-cookie-compliance-banner-thank-you\">
  <div class=\"popup-content agreed eu-cookie-compliance-content\">
    <div id=\"popup-text\" class=\"eu-cookie-compliance-message\">
      ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 23, $this->source), "html", null, true);
        echo "
    </div>
    <div id=\"popup-buttons\" class=\"eu-cookie-compliance-buttons\">
      <button type=\"button\" class=\"hide-popup-button eu-cookie-compliance-hide-button\">";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["hide_button"] ?? null), 26, $this->source), "html", null, true);
        echo "</button>
      ";
        // line 27
        if (($context["find_more_button"] ?? null)) {
            // line 28
            echo "        <button type=\"button\" class=\"find-more-button eu-cookie-compliance-more-button-thank-you\" >";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["find_more_button"] ?? null), 28, $this->source), "html", null, true);
            echo "</button>
      ";
        }
        // line 30
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sites/cidade-integrada/modules/eu_cookie_compliance/templates/eu_cookie_compliance_popup_agreed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 30,  57 => 28,  55 => 27,  51 => 26,  45 => 23,  39 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/cidade-integrada/modules/eu_cookie_compliance/templates/eu_cookie_compliance_popup_agreed.html.twig", "/var/www/html/drupal/sites/cidade-integrada/modules/eu_cookie_compliance/templates/eu_cookie_compliance_popup_agreed.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 27);
        static $filters = array("escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
