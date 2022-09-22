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

/* sites/cidade-integrada/themes/rjgovconcessao/partials/header.html.twig */
class __TwigTemplate_f8da74d4721af4251d509fa1c8d66924ce0d9ddac7acd1bf59a8c4177bd100f8 extends \Twig\Template
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
        echo "<!-- Cabeçalho do site -->
<header class = \"cabecalho\">
    <div id = \"cabecalho\">
        <div class=\"menu-superior\">
            <div class=\"menusupi\">   
                <div class=\"esquerda-menu-superior\">
                    <ul>
                        <li style=\"font-weight:600; letter-spacing:0.8\" title=\"Portal do Governo do Rio de Janeiro\"><a href=\"http://www.rj.gov.br/\">rj.gov</a></li>
                    </ul>
                <!--    
                    <div class=\"social-midia-sup\" style=\"padding-left: 20px;\">
                        <ul>
                            <li title=\"Instagram\"><a class=\"icons instagram-sup\" href=\"https://instagram.com/govrj\" target=\"_blank\">Instagram</a></li>
                            <li title=\"Facebook\"><a class=\"icons facebook-sup\" href=\"https://facebook.com/governodorio\" target=\"_blank\">Facebook</a></li>
                            <li title=\"Twitter\"><a class=\"icons twitter-sup\" href=\"https://twitter.com/GovRJ\" target=\"_blank\">Twitter</a></li>
                            <li title=\"Youtube\"><a class=\"icons youtube-sup\" href=\"https://youtube.com/user/GovRJ\" target=\"_blank\">Youtube</a></li>
                            <li title=\"Flickr\"><a href=\"https://www.flickr.com/photos/governodorio/\" target=\"_blank\"><i class=\"fab fa-flickr fa-lg\"></i></a></li>
                        </ul>
                    </div>
                -->
                </div>
                <div class=\"infosup\">
                    ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuTopo", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
                </div>
                <div id=\"atl-player\">
                    <div style=\"height: 35px; \">                    
                    </div>
                </div>
            </div>
        </div><!-- #MENUSUPI -->  
        <div class = \"container cabecalho-branco\">
            <div class = \"cabecalho-branco-completo\">
                
                <div class = \"cabecalho-branco-logo\">
                    ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logoPortal", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "
                    <div class=\"tela-menor\"><div  style=\"float:left; width:55%; margin-left: 29.5px;\">";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "busca", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "</div> <div style=\"float:left; width:35%\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "redesSociaisPortal", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "</div></div>

                    <!-- <div class=\"logo-gov-cabecalho\">

\t\t\t\t        <a href=\"http://www.rj.gov.br/\">
\t\t\t\t\t        <img class=\"logo-gov-cabecalho-1\" src=\"/sites/cidade-integrada/themes/rjgovconcessao/partials/logo-gov-cabecalho.png\">
\t\t\t\t        </a>


\t\t\t\t        <a href=\"https://www.rio2030.org/\">
\t\t\t\t\t        <img class=\"logo-gov-cabecalho-2\" src=\"/sites/cidade-integrada/themes/rjgovconcessao/partials/Rio2030Azul.png\">
\t\t\t\t        </a>

\t\t\t        </div>
                    -->

                </div>
                
                

                <div class = \"navbar\">
                    <div style=\"float:left; width:50%\">";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuTopoConcessao", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "</div>
                      <div class = \"ingles\">
                    <div style=\"float:left; width:auto; margin-left: 28px;\">
                    </div>
                </div>
                    <div class=\"tela-normal sociais\">
                        ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "busca", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "
                        
                    </div>
                </div>
                
              

                <div id=\"menuArea\">
                    <input type=\"checkbox\" id=\"menuToggle\"></input>
                    
                <label for=\"menuToggle\" class=\"menuOpen\">
                    <div class=\"open\"></div>
                </label>
                    
                <div class=\"menu menuEffects\">
                    <label for=\"menuToggle\"></label>
                    <div class=\"menuContent\">
                        ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menuTopoConcessao", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "sites/cidade-integrada/themes/rjgovconcessao/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 80,  117 => 63,  108 => 57,  82 => 36,  78 => 35,  63 => 23,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/cidade-integrada/themes/rjgovconcessao/partials/header.html.twig", "/var/www/html/drupal/sites/cidade-integrada/themes/rjgovconcessao/partials/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 23);
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
