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

/* sites/cidade-integrada/themes/rjgovconcessao/partials/footer.html.twig */
class __TwigTemplate_d954643c247eb01dfa7547cdab674921937d03a3888597b62c7b5b8066f75d60 extends \Twig\Template
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
        echo "<!-- Footer -->
<footer>
\t<div class=\"rodape\">
\t\t<div class=\"back-to-top\"></div>
\t\t<div class=\"rodape-completo\">

\t\t\t<ul class=\"menu-rodape\">
\t\t\t\t<li>
\t\t\t\t\t<a class=\"item-menu-rodape\" href=\"#\">Inicio</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"item-menu-rodape\" href=\"/projetos\">Projetos</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"item-menu-rodape\" href=\"/participacaoComunitaria\">Participação Comunitária</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"item-menu-rodape\" href=\"/governanca\">Governança</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a class=\"item-menu-rodape\" href=\"/ouvidoria\">Ouvidoria</a>
\t\t\t\t</li>
\t\t\t</ul>


\t\t\t
\t\t\t\t\t\t<div class=\"socia-media-ft\">
\t\t\t\t\t\t\t";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "redesSociaisPortal", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
<!--
\t\t\t<div class=\"social-midia-sup\" style=\"padding-left: 20px;\">
\t\t\t\t<ul>
\t\t\t\t\t<li title=\"Instagram\">
\t\t\t\t\t\t<a class=\"icons instagram-sup\" href=\"https://instagram.com/govrj\" target=\"_blank\">Instagram</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li title=\"Facebook\">
\t\t\t\t\t\t<a class=\"icons facebook-sup\" href=\"https://facebook.com/governodorio\" target=\"_blank\">Facebook</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li title=\"Twitter\">
\t\t\t\t\t\t<a class=\"icons twitter-sup\" href=\"https://twitter.com/GovRJ\" target=\"_blank\">Twitter</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li title=\"Youtube\">
\t\t\t\t\t\t<a class=\"icons youtube-sup\" href=\"https://youtube.com/user/GovRJ\" target=\"_blank\">Youtube</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li title=\"Flickr\">
\t\t\t\t\t\t<a href=\"https://www.flickr.com/photos/governodorio/\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-flickr fa-lg\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
-->
\t\t\t<div class=\"logo-rodape\">

\t\t\t\t<a href=\"http://www.rj.gov.br/\">
\t\t\t\t\t<img class=\"logo-rodape1\" src=\"/sites/cidade-integrada/themes/rjgovconcessao/partials/logo-governo-g13.png\">
\t\t\t\t</a>

\t\t\t\t<!--
\t\t\t\t<a href=\"https://www.rio2030.org/\">
\t\t\t\t\t<img class=\"logo-rodape2\" src=\"/sites/cidade-integrada/themes/rjgovconcessao/partials/rio 2030.png\">
\t\t\t\t</a>
\t\t\t\t-->

\t\t\t</div>


\t\t</div>
\t</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "sites/cidade-integrada/themes/rjgovconcessao/partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 28,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/cidade-integrada/themes/rjgovconcessao/partials/footer.html.twig", "/var/www/html/drupal/sites/cidade-integrada/themes/rjgovconcessao/partials/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
