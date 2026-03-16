<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* pages/home.html.twig */
class __TwigTemplate_e9385b414c6a168793a2607476085345 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Accueil - Portfolio Mélisande Onana";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<!-- Hero Section qui sort du conteneur pour prendre toute la largeur -->
<section class=\"relative bg-gradient-to-br from-purple-600 via-purple-700 to-violet-800 text-white overflow-hidden min-h-[86vh] flex items-center justify-center -mx-4 sm:-mx-6 lg:-mx-8 -my-8 mb-8\">
    <!-- Background minimaliste -->
    <div class=\"absolute inset-0\">
        <div class=\"absolute top-1/3 right-1/4 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-2xl opacity-10 animate-pulse\"></div>
        <div class=\"absolute bottom-1/3 left-1/4 w-96 h-96 bg-violet-500 rounded-full mix-blend-multiply filter blur-2xl opacity-10 animate-pulse\" style=\"animation-delay: 3s;\"></div>
    </div>
    
    <div class=\"relative z-10 mx-auto w-full\">
        <div class=\"text-center\">
            <!-- Nom Principal -->
            <h1 class=\"text-3xl xs:text-4xl sm:text-5xl md:text-7xl font-bold text-white mb-4 sm:mb-6 leading-tight\">
                Mélisande Onana Ngono
            </h1>
            <!-- Formation actuelle -->
            <div class=\"bg-white/15 backdrop-blur-sm rounded-full px-4 sm:px-6 py-2 sm:py-3 inline-block mb-6 sm:mb-8 border border-white/20\">
                <p class=\"text-base xs:text-lg sm:text-xl text-white font-medium\">
                    Étudiante en Bachelor • Coordinateur de projets informatiques 
                </p>
            </div>
            <!-- Description courte et efficace -->
            <p class=\"text-base xs:text-lg sm:text-xl text-purple-100 mb-8 sm:mb-12 max-w-3xl mx-auto leading-relaxed\">
                Passionnée par le développement web, je me spécialise dans la création d'applications modernes et la gestion de projets techniques.
            </p>
            <!-- Boutons d'action principaux -->
            <div class=\"flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center mb-10 sm:mb-16 w-full items-center\">
                <a href=\"/assets/cv/CV.pdf\" target=\"_blank\"
                   class=\"group inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-white text-purple-700 font-semibold rounded-full hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 shadow-lg w-full sm:w-auto\">
                    <i class=\"fas fa-download mr-2 sm:mr-3\"></i>
                    Mon CV
                </a>
                <a href=\"https://www.linkedin.com/in/mélisande-onana-ngono-7576512ba\" target=\"_blank\"
                   class=\"group inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 shadow-lg w-full sm:w-auto\">
                    <i class=\"fab fa-linkedin mr-2 sm:mr-3\"></i>
                    LinkedIn
                </a>
                <a href=\"https://github.com/MelisandeOnana\" target=\"_blank\"
                   class=\"group inline-flex items-center justify-center px-6 sm:px-8 py-3 sm:py-4 bg-gray-900 text-white font-semibold rounded-full hover:bg-gray-800 transition-all duration-300 transform hover:scale-105 shadow-lg w-full sm:w-auto\">
                    <i class=\"fab fa-github mr-2 sm:mr-3\"></i>
                    GitHub
                </a>
            </div>
            <!-- Statistiques dynamiques depuis la BD -->
            <div class=\"grid grid-cols-1 xs:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mx-auto w-full px-4\">
                <div class=\"bg-white/10 backdrop-blur-sm rounded-xl p-4 sm:p-6 border border-white/20 text-center flex flex-col items-center\">
                    <div class=\"text-2xl sm:text-3xl font-bold text-white mb-1 sm:mb-2\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalProjets"] ?? null), "html", null, true);
        yield "</div>
                    <div class=\"text-purple-200 font-medium text-xs sm:text-base\">Projets réalisés</div>
                </div>
                <div class=\"bg-white/10 backdrop-blur-sm rounded-xl p-4 sm:p-6 border border-white/20 text-center flex flex-col items-center\">
                    <div class=\"text-2xl sm:text-3xl font-bold text-white mb-1 sm:mb-2\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalTechnologies"] ?? null), "html", null, true);
        yield "</div>
                    <div class=\"text-purple-200 font-medium text-xs sm:text-base\">Technologies maîtrisées</div>
                </div>
                <div class=\"bg-white/10 backdrop-blur-sm rounded-xl p-4 sm:p-6 border border-white/20 text-center flex flex-col items-center\">
                    <div class=\"text-2xl sm:text-3xl font-bold text-white mb-1 sm:mb-2\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") - 2022), "html", null, true);
        yield "</div>
                    <div class=\"text-purple-200 font-medium text-xs sm:text-base\">Années d'expérience</div>
                </div>
                <div class=\"bg-white/10 backdrop-blur-sm rounded-xl p-4 sm:p-6 border border-white/20 text-center flex flex-col items-center\">
                    <div class=\"text-2xl sm:text-3xl font-bold text-white mb-1 sm:mb-2\">Bachelor</div>
                    <div class=\"text-purple-200 font-medium text-xs sm:text-base\">Niveau d'études</div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  131 => 59,  124 => 55,  117 => 51,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/home.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/pages/home.html.twig");
    }
}
