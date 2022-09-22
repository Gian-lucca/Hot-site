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

/* sites/cidade-integrada/themes/rjgovconcessao/templates/layout/block/block--views-block--redes-sociais-portal-block.html.twig */
class __TwigTemplate_f33512637eed249efaa0a82bed33331607ca3ff95c353c7664b25ba1c7e65ab7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 2, $this->source), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "sites/cidade-integrada/themes/rjgovconcessao/templates/layout/block/block--views-block--redes-sociais-portal-block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/cidade-integrada/themes/rjgovconcessao/templates/layout/block/block--views-block--redes-sociais-portal-block.html.twig", "/var/www/html/drupal/sites/cidade-integrada/themes/rjgovconcessao/templates/layout/block/block--views-block--redes-sociais-portal-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 1);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
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
