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

/* components/header.html.twig */
class __TwigTemplate_fed85f6c32476d8c1fa781737ba2ceed extends Template
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
        yield "<div id=\"scroll-progress-bar\" style=\"height: 4px; background: linear-gradient(to right, #a78bfa, #8b5cf6); width: 0%; position: fixed; top: 0; left: 0; z-index: 9999; transition: width 0.2s;\"></div>

<nav class=\"bg-white/95 backdrop-blur-md border-b border-purple-100 sticky top-0 z-50 shadow-sm\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"flex justify-between items-center h-16 sm:h-20\">
            <!-- Logo ou titre (optionnel) -->
            <div class=\"flex items-center\">
                <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"text-xl font-bold text-purple-700 sm:hidden\">Portfolio</a>
            </div>
            <!-- Bouton hamburger mobile -->
            <button id=\"menu-toggle\" class=\"sm:hidden flex items-center px-3 py-2 border rounded text-purple-700 border-purple-300 focus:outline-none\" aria-label=\"Ouvrir le menu\">
                <svg class=\"h-6 w-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 6h16M4 12h16M4 18h16\"/></svg>
            </button>
            <!-- Menu principal -->
            <div id=\"main-menu\" class=\"hidden sm:flex items-center space-x-1\">
                <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"group flex items-center px-4 py-2 rounded-xl text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition font-medium\">
                    <i class=\"fas fa-home mr-2\"></i>Accueil
                </a>
                <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skills_list");
        yield "\" class=\"group flex items-center px-4 py-2 rounded-xl text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition font-medium\">
                    <i class=\"fas fa-cogs mr-2\"></i>Compétences
                </a>
                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        yield "\" class=\"group flex items-center px-4 py-2 rounded-xl text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition font-medium\">
                    <i class=\"fas fa-folder-open mr-2\"></i>Projets
                </a>
                <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"group flex items-center px-4 py-2 rounded-xl text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition font-medium\">
                    <i class=\"fas fa-envelope mr-2\"></i>Contact
                </a>
                ";
        // line 28
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\" class=\"group flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 to-violet-600 text-white rounded-xl hover:from-purple-700 hover:to-violet-700 transition font-medium shadow-lg ml-2\">
                        <i class=\"fas fa-cog mr-2\"></i>Admin
                    </a>
                ";
        }
        // line 33
        yield "            </div>
        </div>
        <!-- Menu mobile -->
        <div id=\"mobile-menu\" class=\"sm:hidden hidden flex-col space-y-1 py-2\">
            <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"group flex items-center px-4 py-2 rounded-xl text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition font-medium\">
                <i class=\"fas fa-home mr-2\"></i>Accueil
            </a>
            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skills_list");
        yield "\" class=\"group flex items-center px-4 py-2 rounded-xl text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition font-medium\">
                <i class=\"fas fa-cogs mr-2\"></i>Compétences
            </a>
            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        yield "\" class=\"group flex items-center px-4 py-2 rounded-xl text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition font-medium\">
                <i class=\"fas fa-folder-open mr-2\"></i>Projets
            </a>
            <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" class=\"group flex items-center px-4 py-2 rounded-xl text-gray-600 hover:text-purple-600 hover:bg-purple-50 transition font-medium\">
                <i class=\"fas fa-envelope mr-2\"></i>Contact
            </a>
            ";
        // line 49
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\" class=\"group flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 to-violet-600 text-white rounded-xl hover:from-purple-700 hover:to-violet-700 transition font-medium shadow-lg ml-2\">
                    <i class=\"fas fa-cog mr-2\"></i>Admin
                </a>
            ";
        }
        // line 54
        yield "        </div>
    </div>
</nav>
<script>
        if (!window.menuToggleInitialized) {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const mainMenu = document.getElementById('main-menu');
            menuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
            window.menuToggleInitialized = true;
        }
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/header.html.twig";
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
        return array (  136 => 54,  128 => 50,  126 => 49,  120 => 46,  114 => 43,  108 => 40,  102 => 37,  96 => 33,  88 => 29,  86 => 28,  80 => 25,  74 => 22,  68 => 19,  62 => 16,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "components/header.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/components/header.html.twig");
    }
}
