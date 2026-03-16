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

/* admin/projects/index.html.twig */
class __TwigTemplate_cec1c78e581c6f093f47164a2e73fc07 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Gestion des Projets";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "<div class=\"max-w-7xl mx-auto px-4 py-10\">
\t<div class=\"flex flex-col md:flex-row md:items-center md:justify-between mb-10 gap-6\">
\t\t<div>
\t\t\t<h1 class=\"text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-pink-400 to-violet-700 mb-2 drop-shadow-lg\">Gestion des Projets</h1>
\t\t\t<p class=\"text-gray-400 text-lg mb-4 italic\">Retrouve tous tes projets, modifie-les, supprime-les ou ajoute-en de nouveaux facilement.</p>
\t\t</div>
\t\t<div class=\"flex gap-4 items-center\">
\t\t\t<a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"inline-flex items-center gap-2 px-7 py-3 bg-gradient-to-br from-violet-500 via-purple-500 to-pink-500 text-white font-bold rounded-full shadow-lg hover:scale-105 hover:from-violet-600 hover:to-pink-600 transition-all duration-300 border-2 border-white\">
\t\t\t\t<i class=\"fas fa-tachometer-alt text-lg\"></i>
\t\t\t\t<span class=\"hidden md:inline\">Tableau de bord</span>
\t\t\t</a>
\t\t\t<a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_create");
        yield "\" class=\"inline-flex items-center gap-2 px-7 py-3 bg-gradient-to-br from-pink-500 via-purple-600 to-violet-700 text-white font-bold rounded-full shadow-lg hover:scale-105 hover:from-pink-600 hover:to-violet-800 transition-all duration-300 border-2 border-white\">
\t\t\t\t<i class=\"fas fa-plus text-lg\"></i>
\t\t\t\t<span class=\"hidden md:inline\">Ajouter un projet</span>
\t\t\t</a>
\t\t</div>
\t</div>


\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            yield "\t\t<div class=\"mb-4 px-4 py-2 bg-green-100 text-green-800 rounded shadow\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["info"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            yield "\t\t<div class=\"mb-4 px-4 py-2 bg-blue-100 text-blue-800 rounded shadow\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            yield "\t\t<div class=\"mb-4 px-4 py-2 bg-red-100 text-red-800 rounded shadow\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "\t<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10\">
\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 40
            yield "\t\t<div class=\"bg-white border-2 border-purple-100 rounded-2xl shadow-xl p-7 flex flex-col justify-between hover:shadow-2xl transition-all duration-500 hover:-translate-y-1\">
\t\t\t";
            // line 41
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "image", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "\t\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "image", [], "any", false, false, false, 42))), "html", null, true);
                yield "\" alt=\"Image du projet ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "titre", [], "any", false, false, false, 42), "html", null, true);
                yield "\" class=\"w-full h-44 object-cover rounded-xl mb-5 border-2 border-purple-200\" />
\t\t\t";
            } else {
                // line 44
                yield "\t\t\t\t<div class=\"w-full h-44 flex items-center justify-center bg-gradient-to-br from-purple-400 via-violet-500 to-indigo-500 rounded-xl mb-5 border-2 border-purple-200\">
\t\t\t\t\t<span class=\"text-white text-3xl font-bold\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "titre", [], "any", false, false, false, 45), 0, 2)), "html", null, true);
                yield "</span>
\t\t\t\t</div>
\t\t\t";
            }
            // line 48
            yield "\t\t\t<div>
\t\t\t\t<h2 class=\"text-2xl font-bold text-purple-700 mb-2\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "titre", [], "any", false, false, false, 49), "html", null, true);
            yield "</h2>
\t\t\t\t<p class=\"text-gray-600 mb-3\">";
            // line 50
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 50)) > 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 50), 0, 120) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 50), "html", null, true)));
            yield "</p>
\t\t\t\t<div class=\"flex flex-wrap gap-2 mb-2\">
\t\t\t\t\t<span class=\"inline-block px-3 py-1 text-xs bg-purple-50 text-purple-700 rounded\">Début : ";
            // line 52
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateDebut", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateDebut", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</span>
\t\t\t\t\t<span class=\"inline-block px-3 py-1 text-xs bg-purple-50 text-purple-700 rounded\">Fin : ";
            // line 53
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateFin", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateFin", [], "any", false, false, false, 53), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex flex-wrap gap-2 mb-2\">
\t\t\t\t\t<span class=\"inline-block px-3 py-1 text-xs bg-gradient-to-r from-purple-100 to-violet-100 text-purple-800 rounded-full\">Type : ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "typeProjet", [], "any", false, false, false, 56), "html", null, true);
            yield "</span>
\t\t\t\t\t<span class=\"inline-block px-3 py-1 text-xs bg-purple-100 text-purple-800 rounded-full\">État : ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "etat", [], "any", false, false, false, 57), "html", null, true);
            yield "</span>
\t\t\t\t\t";
            // line 58
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "visible", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "\t\t\t\t\t\t<span class=\"inline-block px-3 py-1 text-xs bg-green-100 text-green-800 rounded-full\">Visible</span>
\t\t\t\t\t";
            } else {
                // line 61
                yield "\t\t\t\t\t\t<span class=\"inline-block px-3 py-1 text-xs bg-red-100 text-red-800 rounded-full\">Invisible</span>
\t\t\t\t\t";
            }
            // line 63
            yield "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex gap-2 mt-3 mb-1 items-center\">
\t\t\t\t<a href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\"
\t\t\t\t   class=\"flex-1 px-5 py-2 bg-gradient-to-r from-purple-600 to-violet-600 text-white rounded-full shadow-lg text-base text-center font-semibold transition-all duration-300 hover:scale-105 hover:from-purple-700 hover:to-violet-800 hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-purple-400\">
\t\t\t\t\t<i class=\"fas fa-edit mr-2\"></i>Modifier
\t\t\t\t</a>
\t\t\t\t<form method=\"post\" action=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" class=\"flex-1\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce projet ?');\">
\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 71))), "html", null, true);
            yield "\">
\t\t\t\t\t<button type=\"submit\"
\t\t\t\t\t\t\tclass=\"w-full px-5 py-2 bg-gradient-to-r from-pink-500 to-red-600 text-white rounded-full shadow-lg text-base text-center font-semibold transition-all duration-300 hover:scale-105 hover:from-pink-600 hover:to-red-700 hover:shadow-2xl focus:outline-none focus:ring-2 focus:ring-pink-400\">
\t\t\t\t\t\t<i class=\"fas fa-trash-alt mr-2\"></i>Supprimer
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t";
            $context['_iterated'] = true;
        }
        // line 79
        if (!$context['_iterated']) {
            // line 80
            yield "\t\t<div class=\"col-span-full text-center text-purple-400 py-16 text-xl font-semibold\">Aucun projet trouvé.</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['projet'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "\t</div>

\t";
        // line 85
        yield "\t<div class=\"flex justify-center mt-10\">
\t\t<nav class=\"inline-flex rounded-md shadow-sm\" aria-label=\"Pagination\">
\t\t\t";
        // line 87
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 87) > 1)) {
            // line 88
            yield "\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 88), "attributes", [], "any", false, false, false, 88), "get", ["_route"], "method", false, false, false, 88), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 88), "query", [], "any", false, false, false, 88), "all", [], "any", false, false, false, 88), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 88) - 1)])), "html", null, true);
            yield "\"
\t\t\t\t   class=\"px-4 py-2 bg-purple-100 text-purple-700 rounded-l hover:bg-purple-200 font-semibold\">&laquo; Précédent</a>
\t\t\t";
        } else {
            // line 91
            yield "\t\t\t\t<span class=\"px-4 py-2 bg-gray-100 text-gray-400 rounded-l cursor-not-allowed\">&laquo; Précédent</span>
\t\t\t";
        }
        // line 93
        yield "
\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pageCount", [], "any", false, false, false, 94)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 95
            yield "\t\t\t\t";
            if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 95))) {
                // line 96
                yield "\t\t\t\t\t<span class=\"px-4 py-2 bg-purple-500 text-white font-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</span>
\t\t\t\t";
            } else {
                // line 98
                yield "\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 98), "attributes", [], "any", false, false, false, 98), "get", ["_route"], "method", false, false, false, 98), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 98), "query", [], "any", false, false, false, 98), "all", [], "any", false, false, false, 98), ["page" => $context["page"]])), "html", null, true);
                yield "\"
\t\t\t\t\t   class=\"px-4 py-2 bg-purple-100 text-purple-700 hover:bg-purple-200 font-semibold\">";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
\t\t\t\t";
            }
            // line 101
            yield "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "
\t\t\t";
        // line 103
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 103) < CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pageCount", [], "any", false, false, false, 103))) {
            // line 104
            yield "\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 104), "attributes", [], "any", false, false, false, 104), "get", ["_route"], "method", false, false, false, 104), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 104), "query", [], "any", false, false, false, 104), "all", [], "any", false, false, false, 104), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 104) + 1)])), "html", null, true);
            yield "\"
\t\t\t\t   class=\"px-4 py-2 bg-purple-100 text-purple-700 rounded-r hover:bg-purple-200 font-semibold\">Suivant &raquo;</a>
\t\t\t";
        } else {
            // line 107
            yield "\t\t\t\t<span class=\"px-4 py-2 bg-gray-100 text-gray-400 rounded-r cursor-not-allowed\">Suivant &raquo;</span>
\t\t\t";
        }
        // line 109
        yield "\t\t</nav>
\t</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/projects/index.html.twig";
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
        return array (  326 => 109,  322 => 107,  315 => 104,  313 => 103,  310 => 102,  304 => 101,  299 => 99,  294 => 98,  288 => 96,  285 => 95,  281 => 94,  278 => 93,  274 => 91,  267 => 88,  265 => 87,  261 => 85,  257 => 82,  250 => 80,  248 => 79,  235 => 71,  231 => 70,  224 => 66,  219 => 63,  215 => 61,  211 => 59,  209 => 58,  205 => 57,  201 => 56,  195 => 53,  191 => 52,  186 => 50,  182 => 49,  179 => 48,  173 => 45,  170 => 44,  162 => 42,  160 => 41,  157 => 40,  152 => 39,  149 => 38,  140 => 36,  135 => 35,  126 => 33,  121 => 32,  112 => 30,  108 => 29,  97 => 21,  90 => 17,  81 => 10,  74 => 9,  64 => 6,  53 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/projects/index.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/admin/projects/index.html.twig");
    }
}
