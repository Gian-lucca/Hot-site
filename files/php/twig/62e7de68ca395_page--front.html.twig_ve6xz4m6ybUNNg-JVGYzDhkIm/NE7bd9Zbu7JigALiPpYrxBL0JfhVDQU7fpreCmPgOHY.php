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

/* sites/cidade-integrada/themes/rjgovconcessao/page--front.html.twig */
class __TwigTemplate_b5538b646def5c43d37b5c83390aeb3841f8b66066bbd16b0b840b9f18841de0 extends \Twig\Template
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
        echo "<!--Arquivo de configurações básicas do tema, necessário-->
<!--para que o tema seja reconhecido pelo framework.-->
<!--author Gianlucca Augusto  <gianlucca.augusto@extreme.digital>-->
<!--version 1.1-->
<!--copyright Proderj 2022.-->

";
        // line 7
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/header.html.twig"), "sites/cidade-integrada/themes/rjgovconcessao/page--front.html.twig", 7)->display($context);
        // line 8
        echo "<!-- Conteúdo da página -->

\t<section class=\"index-corpo\"> <div class=\"index-corpo-imagem\">
\t\t";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderPrincipal", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
\t</div>
\t<div class=\"container\">
\t\t<div class=\"index-corpo-texto\">
\t\t\t";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "conteudoPrincipal", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t<hr class=\"gradiente\">

\t\t<div class=\"index-corpo-imagem\">
\t\t\t";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "SliderResultado", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
\t\t</div>

\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderBunner", [], "any", false, false, true, 23)) {
            // line 24
            echo "\t\t\t<div class=\"slider-fixo\" data-aos=\"zoom-in\" data-aos-duration=\"2000\">
\t\t\t\t";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliderBunner", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t\t<!-- /slider-fixo -->

\t\t";
        }
        // line 30
        echo "
\t\t";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "areadeatuacao", [], "any", false, false, true, 31)) {
            // line 32
            echo "\t\t\t\t<div class=\"hero-image\">
\t\t\t\t\t<div class=\"hero-text\">
\t\t\t\t\t\t";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "areadeatuacao", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "             
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<hr class=\"gradiente\">
\t\t";
        }
        // line 39
        echo "
\t\t";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "galeriaFotos", [], "any", false, false, true, 40)) {
            // line 41
            echo "\t\t\t<section data-aos=\"fade-left\" class=\"programas-acoes branco aos-init aos-animate\">
\t\t\t\t<div class=\"section-container\">
\t\t\t\t\t<div class=\"titulo-secao\">
\t\t\t\t\t\t<span>Galeria de Fotos</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "galeriaFotos", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- /Galeria de Fotos -->
\t\t";
        }
        // line 51
        echo "
\t\t";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "noticiasPrincipal", [], "any", false, false, true, 52)) {
            // line 53
            echo "\t\t\t<section class=\"banner branco noticias\" class=\"programas-acoes branco aos-init aos-animate\">
\t\t\t\t<div class=\"titulo\">
\t\t\t\t\t<span>Notícias</span>
\t\t\t\t</div>
\t\t\t\t";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "noticiasPrincipal", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
\t\t\t\t<div class=\"lista-noticias-line\">
\t\t\t\t\t<button class=\"lista-noticias\">
\t\t\t\t\t\t<a id=\"A3\" href=\"/noticias\">Veja a lista completa de notícias</a>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<hr class=\"gradiente\">
\t\t";
        }
        // line 66
        echo "

\t\t";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "videosPrincipal", [], "any", false, false, true, 68)) {
            // line 69
            echo "\t\t\t<section id=\"video\" data-aos=\"fade-right\" class=\"programas-acoes branco aos-init aos-animate\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\">
\t\t\t\t<div class=\"section-container\" id=\"video-section\">
\t\t\t\t\t<div class=\"titulo-secao\">
\t\t\t\t\t\t<span>Vídeos</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "videosPrincipal", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
            echo "
\t\t\t\t\t<div class=\"lista-noticias-line\">
\t\t\t\t\t\t<button class=\"lista-video\">
\t\t\t\t\t\t\t<a id=\"A3\" href=\"/video\">Veja a lista completa de vídeos</a>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t";
        }
        // line 83
        echo "

\t</div>
</section>
";
        // line 87
        $this->loadTemplate((($context["directory"] ?? null) . "/partials/footer.html.twig"), "sites/cidade-integrada/themes/rjgovconcessao/page--front.html.twig", 87)->display($context);
    }

    public function getTemplateName()
    {
        return "sites/cidade-integrada/themes/rjgovconcessao/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 87,  173 => 83,  161 => 74,  154 => 69,  152 => 68,  148 => 66,  136 => 57,  130 => 53,  128 => 52,  125 => 51,  117 => 46,  110 => 41,  108 => 40,  105 => 39,  97 => 34,  93 => 32,  91 => 31,  88 => 30,  80 => 25,  77 => 24,  75 => 23,  69 => 20,  61 => 15,  54 => 11,  49 => 8,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sites/cidade-integrada/themes/rjgovconcessao/page--front.html.twig", "/var/www/html/drupal/sites/cidade-integrada/themes/rjgovconcessao/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 7, "if" => 23);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
