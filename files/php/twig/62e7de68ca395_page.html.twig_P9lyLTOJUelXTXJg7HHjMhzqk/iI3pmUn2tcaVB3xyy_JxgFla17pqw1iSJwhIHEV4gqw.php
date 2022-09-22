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

/* sites/cidade-integrada/themes/rjgovconcessao/templates/layout/page.html.twig */
class __TwigTemplate_75d1ec14bc8691a29026eabe3e4d5b51be6a2a656a03577a4c82908521fb8d06 extends \Twig\Template
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
        // line 1
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "sites/cidade-integrada/themes/rjgovconcessao/templates/layout/page.html.twig", 1)->display($context);
        // line 2
        echo "<!-- Conteúdo da página -->
<section class = \"container corpo\">
    <div class = \"corpo-textos\">
        ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "  
    </div>
</section>
";
        // line 8
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "sites/cidade-integrada/themes/rjgovconcessao/templates/layout/page.html.twig", 8)->display($context);
    }

    public function getTemplateName()
    {
        return "sites/cidade-integrada/themes/rjgovconcessao/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  46 => 5,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/cidade-integrada/themes/rjgovconcessao/templates/layout/page.html.twig", "/var/www/html/drupal/sites/cidade-integrada/themes/rjgovconcessao/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 1);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
