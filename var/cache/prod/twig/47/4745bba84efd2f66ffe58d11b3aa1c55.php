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

/* admin/contacts/index.html.twig */
class __TwigTemplate_2349b78bc115ef4cae82e0e1703ed132 extends Template
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
        yield "Gestion des demandes de contact";
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
        yield "<div class=\"max-w-6xl mx-auto px-4 py-8\">
    <div class=\"flex flex-col md:flex-row md:items-center md:justify-between mb-8 gap-4\">
\t\t<div class=\"flex-1\">
\t\t\t<h1 class=\"text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-pink-400 to-violet-700 mb-3 drop-shadow-lg\">Gestion des demandes de contact</h1>
\t\t\t<p class=\"text-gray-400 text-lg mb-4 italic\">Retrouve ici toutes les demandes de contact, modifie-les, supprime-les ou ajoute-en de nouvelles facilement.</p>
\t\t</div>
\t\t<div class=\"flex gap-4 items-center\">
\t\t\t<a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"inline-flex items-center gap-2 px-7 py-3 bg-gradient-to-br from-violet-500 via-purple-500 to-pink-500 text-white font-bold rounded-full shadow-lg hover:scale-105 hover:from-violet-600 hover:to-pink-600 transition-all duration-300 border-2 border-white\">
\t\t\t\t<i class=\"fas fa-tachometer-alt text-lg\"></i>
\t\t\t\t<span class=\"hidden md:inline\">Tableau de bord</span>
\t\t\t</a>
\t\t</div>
   \t</div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 24
            yield "        <div class=\"bg-white border-2 border-purple-100 rounded-2xl shadow-xl p-6 flex flex-col justify-between hover:shadow-2xl transition-all duration-500 hover:-translate-y-1\">
            <div>
                <h2 class=\"text-xl font-bold text-purple-700 mb-2\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 26), "html", null, true);
            yield "</h2>
                <p class=\"text-gray-600 mb-2\"><i class=\"fas fa-envelope mr-1\"></i>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 27), "html", null, true);
            yield "</p>
                <p class=\"text-gray-500 text-sm mb-2\">Envoyé le ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "dateEnvoi", [], "any", false, false, false, 28), "d/m/Y à H:i"), "html", null, true);
            yield "</p>
                <p class=\"text-gray-700 mb-2\">";
            // line 29
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "message", [], "any", false, false, false, 29)) > 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "message", [], "any", false, false, false, 29), 0, 120) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "message", [], "any", false, false, false, 29), "html", null, true)));
            yield "</p>
            </div>
            <div class=\"flex gap-2 mt-4\">
                <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" class=\"flex-1 px-4 py-2 bg-gradient-to-r from-purple-600 to-violet-600 text-white rounded-full hover:from-purple-700 hover:to-violet-700 text-sm text-center font-semibold shadow\">Voir détail</a>
                <form method=\"post\" action=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"flex-1\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette demande ?');\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_contact_" . CoreExtension::getAttribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 34))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"w-full px-4 py-2 bg-gradient-to-r from-pink-500 to-red-600 text-white rounded-full hover:from-pink-600 hover:to-red-700 text-sm text-center font-semibold shadow transition-all duration-300\">
                        <i class=\"fas fa-trash-alt mr-1\"></i>Supprimer
                    </button>
                </form>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 41
        if (!$context['_iterated']) {
            // line 42
            yield "        <div class=\"col-span-full text-center text-purple-400 py-12 text-lg font-semibold\">Aucune demande trouvée.</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contact'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "    </div>

    ";
        // line 47
        yield "    ";
        if ((array_key_exists("pagination", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pagination"] ?? null)) > 0))) {
            // line 48
            yield "        <div class=\"mt-8 flex justify-center\">
            <nav aria-label=\"Pagination\" class=\"inline-flex gap-2\">
                ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 50) > 1)) {
                // line 51
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 51), "attributes", [], "any", false, false, false, 51), "get", ["_route"], "method", false, false, false, 51), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 51), "query", [], "any", false, false, false, 51), "all", [], "any", false, false, false, 51), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 51) - 1)])), "html", null, true);
                yield "\"
                       class=\"px-4 py-2 rounded-full bg-gradient-to-r from-purple-100 to-violet-100 text-purple-700 font-semibold shadow hover:from-purple-200 hover:to-violet-200 transition-all duration-300\">
                        &laquo; Précédent
                    </a>
                ";
            }
            // line 56
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pageCount", [], "any", false, false, false, 56)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 57
                yield "                    ";
                if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 57))) {
                    // line 58
                    yield "                        <span class=\"px-4 py-2 rounded-full bg-gradient-to-r from-purple-600 to-violet-600 text-white font-bold shadow\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
                    ";
                } else {
                    // line 60
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", ["_route"], "method", false, false, false, 60), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 60), "query", [], "any", false, false, false, 60), "all", [], "any", false, false, false, 60), ["page" => $context["page"]])), "html", null, true);
                    yield "\"
                           class=\"px-4 py-2 rounded-full bg-gradient-to-r from-purple-100 to-violet-100 text-purple-700 font-semibold shadow hover:from-purple-200 hover:to-violet-200 transition-all duration-300\">
                            ";
                    // line 62
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                        </a>
                    ";
                }
                // line 65
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 66) < CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pageCount", [], "any", false, false, false, 66))) {
                // line 67
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "attributes", [], "any", false, false, false, 67), "get", ["_route"], "method", false, false, false, 67), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "query", [], "any", false, false, false, 67), "all", [], "any", false, false, false, 67), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 67) + 1)])), "html", null, true);
                yield "\"
                       class=\"px-4 py-2 rounded-full bg-gradient-to-r from-purple-100 to-violet-100 text-purple-700 font-semibold shadow hover:from-purple-200 hover:to-violet-200 transition-all duration-300\">
                        Suivant &raquo;
                    </a>
                ";
            }
            // line 72
            yield "            </nav>
        </div>
    ";
        }
        // line 75
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/contacts/index.html.twig";
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
        return array (  228 => 75,  223 => 72,  214 => 67,  211 => 66,  205 => 65,  199 => 62,  193 => 60,  187 => 58,  184 => 57,  179 => 56,  170 => 51,  168 => 50,  164 => 48,  161 => 47,  157 => 44,  150 => 42,  148 => 41,  136 => 34,  132 => 33,  128 => 32,  122 => 29,  118 => 28,  114 => 27,  110 => 26,  106 => 24,  101 => 23,  90 => 15,  81 => 8,  74 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/contacts/index.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/admin/contacts/index.html.twig");
    }
}
