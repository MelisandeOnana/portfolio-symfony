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

/* components/footer.html.twig */
class __TwigTemplate_271cb42e64ddec1f34a0cace0fb5fbce extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<footer class=\"bg-gray-800 text-white\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12\">
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
            <!-- Informations personnelles -->
            <div class=\"text-center md:text-left\">
                <h5 class=\"text-xl font-bold mb-2\">Mélisande Onana Ngono</h5>
                <p class=\"text-gray-300 mb-4\">Développeuse Web Full Stack</p>
                <p class=\"text-gray-400 text-sm\">
                    Passionnée par le développement web et les nouvelles technologies.
                    Toujours prête à relever de nouveaux défis techniques.
                </p>
            </div>
            
            <!-- Liens sociaux -->
            <div class=\"text-center md:text-right\">
                <h6 class=\"text-lg font-semibold mb-4\">Suivez-moi</h6>
                <div class=\"flex justify-center md:justify-end space-x-6\">
                    <a href=\"https://github.com/MelisandeOnana\" target=\"_blank\" 
                       class=\"text-gray-300 hover:text-white transform hover:scale-110 transition duration-300\"
                       title=\"GitHub\">
                        <i class=\"fab fa-github text-2xl\"></i>
                    </a>
                    <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\"
                       class=\"text-gray-300 hover:text-white transform hover:scale-110 transition duration-300\"
                       title=\"Email\">
                        <i class=\"fas fa-envelope text-2xl\"></i>
                    </a>
                    <a href=\"https://linkedin.com/in/melisande-onana\" target=\"_blank\" 
                       class=\"text-gray-300 hover:text-white transform hover:scale-110 transition duration-300\"
                       title=\"LinkedIn\">
                        <i class=\"fab fa-linkedin text-2xl\"></i>
                    </a>
                </div>
                
                <!-- Informations de contact rapide -->
                <div class=\"mt-6 space-y-2\">
                    <div class=\"flex items-center justify-center md:justify-end text-sm text-gray-400\">
                        <i class=\"fas fa-map-marker-alt mr-2\"></i>
                        <span>Senlis, Amiens, Paris, Chantilly, Compiègne</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Ligne de séparation -->
        <div class=\"border-t border-gray-700 mt-8 pt-8\">
            <div class=\"flex flex-col md:flex-row justify-between items-center\">
                <p class=\"text-gray-400 text-sm mb-4 md:mb-0\">
                    &copy; ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Mélisande Onana. Portfolio développé avec Symfony & Tailwind CSS.
                </p>
                
                <!-- Navigation rapide du footer -->
                <div class=\"flex space-x-4 text-sm\">
                    <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"text-gray-400 hover:text-white transition duration-300\">Accueil</a>
                    <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skills_list");
        yield "\" class=\"text-gray-400 hover:text-white transition duration-300\">Compétences</a>
                    <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        yield "\" class=\"text-gray-400 hover:text-white transition duration-300\">Projets</a>
                    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"text-gray-400 hover:text-white transition duration-300\">Contact</a>
                </div>
            </div>
        </div>
    </div>
</footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/footer.html.twig";
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
        return array (  115 => 57,  111 => 56,  107 => 55,  103 => 54,  95 => 49,  66 => 23,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/footer.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/components/footer.html.twig");
    }
}
