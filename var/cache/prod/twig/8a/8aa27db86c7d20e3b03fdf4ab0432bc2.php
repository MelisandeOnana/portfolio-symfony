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

/* admin/dashboard.html.twig */
class __TwigTemplate_7a2deb9d09df06e753aec00fa971d2aa extends Template
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
            'header' => [$this, 'block_header'],
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
        yield "Dashboard - Administration";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<section class=\"bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-800 text-white py-16 relative overflow-hidden\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10\">
        <div class=\"flex flex-col md:flex-row justify-between items-center mb-10\">
            <div class=\"flex items-center space-x-4\">
                <div class=\"w-16 h-16 rounded-full bg-gradient-to-br from-purple-400 to-pink-400 flex items-center justify-center shadow-lg\">
                    <i class=\"fas fa-user text-white text-3xl\"></i>
                </div>
                <div>
                    <h2 class=\"text-2xl font-bold\">";
        // line 16
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "prenom", [], "any", false, false, false, 16) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16), "nom", [], "any", false, false, false, 16)), "html", null, true)) : ("Guest"));
        yield "</h2>
                    <p class=\"text-xs text-purple-300\">Dernière connexion: ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "</p>
                </div>
            </div>
            <div class=\"flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 mt-6 md:mt-0\">
                <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profile_edit");
        yield "\" class=\"bg-indigo-500 hover:bg-indigo-600 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg flex items-center\">
                    <i class=\"fas fa-user-edit mr-2\"></i> Gérer mon profil
                </a>
                <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"bg-gradient-to-r from-purple-400 to-pink-500 hover:from-purple-500 hover:to-pink-600 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg flex items-center\">
                    <i class=\"fas fa-home mr-2\"></i> Retour au site
                </a>
                <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield "\" class=\"bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg flex items-center\">
                    <i class=\"fas fa-sign-out-alt mr-2\"></i> Déconnexion
                </a>
            </div>
        </div>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            yield "            <div class=\"mb-6 p-4 rounded-xl bg-purple-100 text-purple-800 border border-purple-300 shadow\">
                <i class=\"fas fa-check-circle mr-2\"></i>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12\">
            <div class=\"bg-white rounded-2xl shadow-lg p-8 border-l-4 border-blue-500 flex flex-col items-start group hover:-translate-y-1 transition\">
                <div class=\"flex items-center mb-4\">
                    <div class=\"bg-blue-100 p-3 rounded-xl mr-3\">
                        <i class=\"fas fa-folder-open text-blue-500 text-2xl\"></i>
                    </div>
                    <span class=\"text-lg font-semibold text-gray-700\">Projets</span>
                </div>
                <span class=\"text-4xl font-bold text-blue-600 mb-2\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["projets"] ?? null)), "html", null, true);
        yield "</span>
                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_list");
        yield "\" class=\"text-blue-600 hover:text-blue-800 font-medium mt-2 flex items-center group\">
                    Gérer <i class=\"fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform\"></i>
                </a>
            </div>
            <div class=\"bg-white rounded-2xl shadow-lg p-8 border-l-4 border-purple-500 flex flex-col items-start group hover:-translate-y-1 transition\">
                <div class=\"flex items-center mb-4\">
                    <div class=\"bg-purple-100 p-3 rounded-xl mr-3\">
                        <i class=\"fas fa-code text-purple-500 text-2xl\"></i>
                    </div>
                    <span class=\"text-lg font-semibold text-gray-700\">Technologies</span>
                </div>
                <span class=\"text-4xl font-bold text-purple-600 mb-2\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["technologies"] ?? null)), "html", null, true);
        yield "</span>
                <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_technology_list");
        yield "\" class=\"text-purple-600 hover:text-purple-800 font-medium mt-2 flex items-center group\">
                    Gérer <i class=\"fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform\"></i>
                </a>
            </div>
            <div class=\"bg-white rounded-2xl shadow-lg p-8 border-l-4 border-green-500 flex flex-col items-start group hover:-translate-y-1 transition\">
                <div class=\"flex items-center mb-4\">
                    <div class=\"bg-green-100 p-3 rounded-xl mr-3\">
                        <i class=\"fas fa-envelope text-green-500 text-2xl\"></i>
                    </div>
                    <span class=\"text-lg font-semibold text-gray-700\">Messages</span>
                </div>
                <span class=\"text-4xl font-bold text-green-600 mb-2\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["demandesContact"] ?? null)), "html", null, true);
        yield "</span>
                <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_list");
        yield "\" class=\"text-green-600 hover:text-green-800 font-medium mt-2 flex items-center group\">
                    Gérer <i class=\"fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform\"></i>
                </a>
            </div>
            <div class=\"bg-white rounded-2xl shadow-lg p-8 border-l-4 border-pink-500 flex flex-col items-start group hover:-translate-y-1 transition\">
                <div class=\"flex items-center mb-4\">
                    <div class=\"bg-pink-100 p-3 rounded-xl mr-3\">
                        <i class=\"fas fa-users text-pink-500 text-2xl\"></i>
                    </div>
                    <span class=\"text-lg font-semibold text-gray-700\">Images</span>
                </div>
                <span class=\"text-4xl font-bold text-pink-600 mb-2\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["images"] ?? null)), "html", null, true);
        yield "</span>
                <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_list");
        yield "\" class=\"text-pink-600 hover:text-pink-800 font-medium mt-2 flex items-center group\">
                    Gérer <i class=\"fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform\"></i>
                </a>
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
        return "admin/dashboard.html.twig";
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
        return array (  206 => 82,  202 => 81,  188 => 70,  184 => 69,  170 => 58,  166 => 57,  152 => 46,  148 => 45,  138 => 37,  129 => 34,  126 => 33,  122 => 32,  114 => 27,  108 => 24,  102 => 21,  95 => 17,  91 => 16,  81 => 8,  74 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/dashboard.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/admin/dashboard.html.twig");
    }
}
