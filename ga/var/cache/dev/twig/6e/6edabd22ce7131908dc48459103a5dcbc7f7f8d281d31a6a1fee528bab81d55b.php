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

/* layout/header.html.twig */
class __TwigTemplate_3f237440d290a13486a0c9dfe5769b66c1e96a9fc4ddace03ecb1a8510cec479 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark static-top\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Logo.0247004d.png"), "html", null, true);
        echo "\" alt=\"logo\" height=\"36\"> GRIND ACADEMY
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation");
        echo "\">Formations</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post");
        echo "\">Articles</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Contact</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn-banniere\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Commencer <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right\" viewBox=\"0 0 16 16\">
                            <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z\"/>
                        </svg></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  68 => 15,  62 => 12,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark static-top\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('app_accueil') }}\">
            <img src=\"{{ asset('build/images/Logo.0247004d.png') }}\" alt=\"logo\" height=\"36\"> GRIND ACADEMY
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_formation') }}\">Formations</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_post') }}\">Articles</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Contact</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link btn-banniere\" href=\"{{ path('app_register') }}\">Commencer <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right\" viewBox=\"0 0 16 16\">
                            <path fill-rule=\"evenodd\" d=\"M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z\"/>
                        </svg></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

", "layout/header.html.twig", "/Users/tom/Desktop/project-ga/ga/templates/layout/header.html.twig");
    }
}
