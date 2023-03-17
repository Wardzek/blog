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

/* layout/footer.html.twig */
class __TwigTemplate_b1ad49069bdcac5e0876e2f3098530cf0b7924fccdbb4bbf1a7c5becbffcde0b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/footer.html.twig"));

        // line 1
        echo "<footer class=\"bg-dark text-center text-white\">
    <div class=\"container p-4\">
        <section class=\"footer\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/Logo.0247004d.png"), "html", null, true);
        echo "\" alt=\"logo\"><span class=\"p-3\">GRIND ACADEMY</span>
                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a class=\"btn text-light\" href=\"https://twitter.com/_GrindAcademy\" target=\"_blank\" role=\"button\"
                            ><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                    <path d=\"M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z\"/>
                                </svg></a>
                        </li>
                        <li>
                            <a class=\"btn text-light\" href=\"https://www.linkedin.com/company/grind-academy/\" target=\"_blank\" role=\"button\"
                            ><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-linkedin\" viewBox=\"0 0 16 16\">
                                    <path d=\"M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z\"/>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Menu</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formation");
        echo "\" class=\"text-white\">Formations</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_post");
        echo "\" class=\"text-white\">Articles</a>
                        </li>
                        <li>
                            <a href=\"#!\" class=\"text-white\">Contact</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Mentions Légales</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a href=\"#!\" class=\"text-white\">Cookies</a>
                        </li>
                        <li>
                            <a href=\"#!\" class=\"text-white\">Politique de confidentialité</a>
                        </li>
                        <li>
                            <a href=\"#!\" class=\"text-white\">Conditions générales d'utilisation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <div class=\"text-center p-3\">
        © 2023 Copyright : Grind Academy
    </div>

</footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layout/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 31,  75 => 28,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"bg-dark text-center text-white\">
    <div class=\"container p-4\">
        <section class=\"footer\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <img src=\"{{ asset('build/images/Logo.0247004d.png') }}\" alt=\"logo\"><span class=\"p-3\">GRIND ACADEMY</span>
                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a class=\"btn text-light\" href=\"https://twitter.com/_GrindAcademy\" target=\"_blank\" role=\"button\"
                            ><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\">
                                    <path d=\"M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z\"/>
                                </svg></a>
                        </li>
                        <li>
                            <a class=\"btn text-light\" href=\"https://www.linkedin.com/company/grind-academy/\" target=\"_blank\" role=\"button\"
                            ><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-linkedin\" viewBox=\"0 0 16 16\">
                                    <path d=\"M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z\"/>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Menu</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a href=\"{{ path('app_formation') }}\" class=\"text-white\">Formations</a>
                        </li>
                        <li>
                            <a href=\"{{ path('app_post') }}\" class=\"text-white\">Articles</a>
                        </li>
                        <li>
                            <a href=\"#!\" class=\"text-white\">Contact</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <div class=\"col-lg-3 col-md-6 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Mentions Légales</h5>

                    <ul class=\"list-unstyled mb-0\">
                        <li>
                            <a href=\"#!\" class=\"text-white\">Cookies</a>
                        </li>
                        <li>
                            <a href=\"#!\" class=\"text-white\">Politique de confidentialité</a>
                        </li>
                        <li>
                            <a href=\"#!\" class=\"text-white\">Conditions générales d'utilisation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <div class=\"text-center p-3\">
        © 2023 Copyright : Grind Academy
    </div>

</footer>", "layout/footer.html.twig", "/Users/tom/Desktop/project-ga/ga/templates/layout/footer.html.twig");
    }
}
