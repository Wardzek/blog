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

/* accueil/index.html.twig */
class __TwigTemplate_14683a81986f9a23b0bf325c6b64a147d113ef245d968301c76fcb960982331d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "            <div>
                <video autoplay loop muted playsinline class=\"video\">
                    <source src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Séquence 05.2970613a.mp4"), "html", null, true);
        echo "\">
                </video>
                <div class=\"accueil\">
                    <h1>Découvrez l’univers Web3 <br> grâce à <span class=\"ga\">Grind Academy</span></h1>
                    <button class=\"btn-banniere\">Démarrer ici <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right\" viewBox=\"0 0 16 16\">
                            <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z\"/>
                        </svg></button>
                </div>
            </div>

        <div>
            <div class=\"row align-items-center justify-content-center\">
                <h2 class=\"text-center mt-3\">Ils sont passés par là</h2>
                <img class=\"col-md-2\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/starknet.1d16f757.png"), "html", null, true);
        echo "\" alt=\"logo-starknet\">
                <img class=\"col-md-2\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/PenguinFinance.9efdd954.png"), "html", null, true);
        echo "\" alt=\"logo-penguinFinance\">
                <img class=\"col-md-2\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/landx.537db584.png"), "html", null, true);
        echo "\" alt=\"logo-landX\">
                <img class=\"col-md-2\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/traderjoe.e471f110.png"), "html", null, true);
        echo "\" alt=\"logo-traderJoe\">
                <img class=\"col-md-2\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/nftperp.72e6e2ab.png"), "html", null, true);
        echo "\" alt=\"logo-nftPerp\">
            </div>
        </div>

        <div>
            <h2 class=\"h2 text-center\">Approfondissez vos compétences</h2>
        </div>

        <div>
            <a class=\"title1\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post");
        echo "\">
                <h3>Articles</h3>
            </a>
            <a class=\"title2\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation");
        echo "\">
                <h3>Formations</h3>
            </a>
        </div>
        <div class=\"container\">
            <div class=\"row justify-content-center m-5\">
                <img class=\"col-4\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Image Card Articles.3996dd2c.svg"), "html", null, true);
        echo "\" alt=\"image-article\">
                <img class=\"col-4\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Image Card Formations.f48bc054.svg"), "html", null, true);
        echo "\" alt=\"image-formation\">
            </div>
        </div>

        <div>
            <h4 class=\"text-center\">Farming, Dex, Liquidity Pool, DAO, Lending,  NFTs, Play2Earn, Borrowing, Risk2Earn, Proof of Work, Blockchains, Staking </h4>
        </div>
                <h2 class=\"h2 text-center m-5\">Notre histoire</h2>
                <p class=\"text-justify m-5\">La Grind Academy a une vocation purement pédagogique et éducative.<br>
                    Majoritairement centré sur la DeFi et l’écosystème crypto, vous y trouverez un large panel de ressources partagées et/ou <br> rédigées par la communauté appuyant l’aspect participatif.<br>
                    <br>
                    Au-delà des ressources, vous pourrez également échanger au sujet des divers projets et protocoles crypto présents sur les <br> différentes blockchains dans des channels dédiés.<br>
                    <br>
                    Parmi les membres, certains sont intervenants. Ils couvrent chacun une spécialité parmi les principaux domaines étudiés sur <br> le Discord.<br>
                    <br>
                    Au-delà de l’univers crypto, des channels sont prévus pour d’autres domaines d’investissement pour les membres voulant <br> partager leurs connaissances ou voulant se diversifier. L’objectif de fond est que chaque membre puisse se développer sur les <br> différents domaines étudiés et partagés.<br>
                    <br>
                    Tous ces domaines et ressources constituent ainsi un grand nombre de channels et sections sur un seul discord, cependant, <br> ils n’intéressent pas la totalité des membres, c’est pour cela que nous avons pallié ce problème.
                </p>
                <div class=\"pos\">
                    <img class=\"img\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Vector 3.c3cfca88.png"), "html", null, true);
        echo "\">
                </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 64,  155 => 44,  151 => 43,  142 => 37,  136 => 34,  124 => 25,  120 => 24,  116 => 23,  112 => 22,  108 => 21,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block main %}
            <div>
                <video autoplay loop muted playsinline class=\"video\">
                    <source src=\"{{ asset('build/images/Séquence 05.2970613a.mp4') }}\">
                </video>
                <div class=\"accueil\">
                    <h1>Découvrez l’univers Web3 <br> grâce à <span class=\"ga\">Grind Academy</span></h1>
                    <button class=\"btn-banniere\">Démarrer ici <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right\" viewBox=\"0 0 16 16\">
                            <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z\"/>
                        </svg></button>
                </div>
            </div>

        <div>
            <div class=\"row align-items-center justify-content-center\">
                <h2 class=\"text-center mt-3\">Ils sont passés par là</h2>
                <img class=\"col-md-2\" src=\"{{ asset('build/images/starknet.1d16f757.png') }}\" alt=\"logo-starknet\">
                <img class=\"col-md-2\" src=\"{{ asset('build/images/PenguinFinance.9efdd954.png') }}\" alt=\"logo-penguinFinance\">
                <img class=\"col-md-2\" src=\"{{ asset('build/images/landx.537db584.png') }}\" alt=\"logo-landX\">
                <img class=\"col-md-2\" src=\"{{ asset('build/images/traderjoe.e471f110.png') }}\" alt=\"logo-traderJoe\">
                <img class=\"col-md-2\" src=\"{{ asset('build/images/nftperp.72e6e2ab.png') }}\" alt=\"logo-nftPerp\">
            </div>
        </div>

        <div>
            <h2 class=\"h2 text-center\">Approfondissez vos compétences</h2>
        </div>

        <div>
            <a class=\"title1\" href=\"{{ path('app_post') }}\">
                <h3>Articles</h3>
            </a>
            <a class=\"title2\" href=\"{{ path('app_formation') }}\">
                <h3>Formations</h3>
            </a>
        </div>
        <div class=\"container\">
            <div class=\"row justify-content-center m-5\">
                <img class=\"col-4\" src=\"{{ asset('build/images/Image Card Articles.3996dd2c.svg') }}\" alt=\"image-article\">
                <img class=\"col-4\" src=\"{{ asset('build/images/Image Card Formations.f48bc054.svg') }}\" alt=\"image-formation\">
            </div>
        </div>

        <div>
            <h4 class=\"text-center\">Farming, Dex, Liquidity Pool, DAO, Lending,  NFTs, Play2Earn, Borrowing, Risk2Earn, Proof of Work, Blockchains, Staking </h4>
        </div>
                <h2 class=\"h2 text-center m-5\">Notre histoire</h2>
                <p class=\"text-justify m-5\">La Grind Academy a une vocation purement pédagogique et éducative.<br>
                    Majoritairement centré sur la DeFi et l’écosystème crypto, vous y trouverez un large panel de ressources partagées et/ou <br> rédigées par la communauté appuyant l’aspect participatif.<br>
                    <br>
                    Au-delà des ressources, vous pourrez également échanger au sujet des divers projets et protocoles crypto présents sur les <br> différentes blockchains dans des channels dédiés.<br>
                    <br>
                    Parmi les membres, certains sont intervenants. Ils couvrent chacun une spécialité parmi les principaux domaines étudiés sur <br> le Discord.<br>
                    <br>
                    Au-delà de l’univers crypto, des channels sont prévus pour d’autres domaines d’investissement pour les membres voulant <br> partager leurs connaissances ou voulant se diversifier. L’objectif de fond est que chaque membre puisse se développer sur les <br> différents domaines étudiés et partagés.<br>
                    <br>
                    Tous ces domaines et ressources constituent ainsi un grand nombre de channels et sections sur un seul discord, cependant, <br> ils n’intéressent pas la totalité des membres, c’est pour cela que nous avons pallié ce problème.
                </p>
                <div class=\"pos\">
                    <img class=\"img\" src=\"{{ asset('build/images/Vector 3.c3cfca88.png') }}\">
                </div>
{% endblock %}
", "accueil/index.html.twig", "/Users/tom/Desktop/project-ga/ga/templates/accueil/index.html.twig");
    }
}
