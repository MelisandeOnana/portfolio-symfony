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

/* admin/technologies/index.html.twig */
class __TwigTemplate_504a82e90723fde76b3f487bb75e78f6 extends Template
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
        yield "Gestion des technologies - Administration";
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
        <div class=\"flex-1\">
            <h1 class=\"text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-pink-400 to-violet-700 mb-3 drop-shadow-lg\">Gestion des Technologies</h1>
            <p class=\"text-gray-400 text-lg mb-4 italic\">Retrouve ici toutes tes technologies, modifie-les, supprime-les ou ajoute-en de nouvelles facilement.</p>
        </div>
        <div class=\"flex gap-4 items-center\">
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"inline-flex items-center gap-2 px-7 py-3 bg-gradient-to-br from-violet-500 via-purple-500 to-pink-500 text-white font-bold rounded-full shadow-lg hover:scale-105 hover:from-violet-600 hover:to-pink-600 transition-all duration-300 border-2 border-white\">
                <i class=\"fas fa-tachometer-alt text-lg\"></i>
                <span class=\"hidden md:inline\">Tableau de bord</span>
            </a>
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_technology_new");
        yield "\" class=\"inline-flex items-center gap-2 px-7 py-3 bg-gradient-to-br from-pink-500 via-purple-600 to-violet-700 text-white font-bold rounded-full shadow-lg hover:scale-105 hover:from-pink-600 hover:to-violet-800 transition-all duration-300 border-2 border-white\">
                <i class=\"fas fa-plus text-lg\"></i>
                <span class=\"hidden md:inline\">Ajouter un projet</span>
            </a>
        </div>
    </div>

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            yield "        <div class=\"mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg\">
            <i class=\"fas fa-check-circle mr-2\"></i>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["info"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            yield "        <div class=\"mb-6 p-4 bg-blue-100 border border-blue-400 text-blue-700 rounded-lg\">
            <i class=\"fas fa-info-circle mr-2\"></i>";
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
        yield "
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            yield "        <div class=\"mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg\">
            <i class=\"fas fa-exclamation-circle mr-2\"></i>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8\">
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pagination"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["technologie"]) {
            // line 46
            yield "            <div class=\"bg-white border-2 border-purple-100 rounded-2xl shadow-xl p-6 flex flex-col justify-between hover:shadow-2xl transition-all duration-500 hover:-translate-y-1\">
                <div>
                    <h2 class=\"text-xl font-bold text-purple-700 mb-2\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "nom", [], "any", false, false, false, 48), "html", null, true);
            yield "</h2>
                    <p class=\"text-gray-600 mb-2\">";
            // line 49
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "description", [], "any", false, false, false, 49)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "description", [], "any", false, false, false, 49), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "description", [], "any", false, false, false, 49), "html", null, true)));
            yield "</p>
                    <div class=\"flex flex-wrap gap-2 mb-2\">
                        <span class=\"inline-block px-2 py-1 text-xs bg-purple-50 text-purple-700 rounded\">Depuis : ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "dateDebut", [], "any", false, false, false, 51), "M Y"), "html", null, true);
            yield "</span>
                        ";
            // line 52
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "statut", [], "any", false, false, false, 52))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 53
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "statut", [], "any", false, false, false, 53) == "en_cours")) {
                    // line 54
                    yield "                                <span class=\"inline-block px-2 py-1 text-xs bg-orange-100 text-orange-600 rounded-full\"><i class=\"fas fa-clock mr-1\"></i>En cours</span>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 55
$context["technologie"], "statut", [], "any", false, false, false, 55) == "termine")) {
                    // line 56
                    yield "                                <span class=\"inline-block px-2 py-1 text-xs bg-green-100 text-green-600 rounded-full\"><i class=\"fas fa-check-circle mr-1\"></i>Maîtrisé</span>
                            ";
                }
                // line 58
                yield "                        ";
            }
            // line 59
            yield "                    </div>
                    ";
            // line 60
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "certificationsPdf", [], "any", false, false, false, 60) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "certificationsPdf", [], "any", false, false, false, 60)) > 0))) {
                // line 61
                yield "                        <div class=\"pt-3 border-t border-gray-200\">
                            <div class=\"text-sm text-gray-700 font-medium mb-3\"><i class=\"fas fa-certificate text-blue-600 mr-2\"></i>";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "certificationsPdf", [], "any", false, false, false, 62)), "html", null, true);
                yield " certification";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "certificationsPdf", [], "any", false, false, false, 62)) > 1)) {
                    yield "s";
                }
                yield "</div>
                            <div class=\"space-y-2\">
                                ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "certificationsPdf", [], "any", false, false, false, 64));
                foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
                    // line 65
                    yield "                                    <div class=\"flex items-center justify-between bg-gray-50 rounded-lg p-2\">
                                        <div class=\"flex items-center flex-1\">
                                            <i class=\"fas fa-file-pdf text-red-500 mr-2\"></i>
                                            <span class=\"text-xs text-gray-700 truncate\" title=\"";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "title", [], "any", false, false, false, 68), "html", null, true);
                    yield "\">";
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "title", [], "any", false, false, false, 68)) > 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "title", [], "any", false, false, false, 68), 0, 25) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "title", [], "any", false, false, false, 68), "html", null, true)));
                    yield "</span>
                                        </div>
                                        <div class=\"flex space-x-1 ml-2\">
                                            <a href=\"";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "filename", [], "any", false, false, false, 71))), "html", null, true);
                    yield "\" target=\"_blank\" class=\"text-blue-600 hover:text-blue-800 p-1\" title=\"Ouvrir le PDF\"><i class=\"fas fa-external-link-alt text-xs\"></i></a>
                                            <a href=\"";
                    // line 72
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "filename", [], "any", false, false, false, 72))), "html", null, true);
                    yield "\" download class=\"text-green-600 hover:text-green-800 p-1\" title=\"Télécharger\"><i class=\"fas fa-download text-xs\"></i></a>
                                        </div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['certification'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                yield "                            </div>
                        </div>
                    ";
            }
            // line 79
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "certificationPdf", [], "any", false, false, false, 79) && ( !CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "certificationsPdf", [], "any", false, false, false, 79) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "certificationsPdf", [], "any", false, false, false, 79)) == 0)))) {
                // line 80
                yield "                        <div class=\"pt-3 border-t border-gray-200\">
                            <div class=\"text-sm text-gray-700 font-medium mb-2\"><i class=\"fas fa-certificate text-blue-600 mr-2\"></i>Certification</div>
                            <div class=\"flex items-center justify-between bg-gray-50 rounded-lg p-2\">
                                <div class=\"flex items-center\"><i class=\"fas fa-file-pdf text-red-500 mr-2\"></i><span class=\"text-xs text-gray-700\">Certification PDF</span></div>
                                <div class=\"flex space-x-1\"><a href=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "certificationPdf", [], "any", false, false, false, 84))), "html", null, true);
                yield "\" target=\"_blank\" class=\"text-blue-600 hover:text-blue-800 p-1\" title=\"Ouvrir le PDF\"><i class=\"fas fa-external-link-alt text-xs\"></i></a><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "certificationPdf", [], "any", false, false, false, 84))), "html", null, true);
                yield "\" download class=\"text-green-600 hover:text-green-800 p-1\" title=\"Télécharger\"><i class=\"fas fa-download text-xs\"></i></a></div>
                            </div>
                        </div>
                    ";
            }
            // line 88
            yield "                </div>
                <div class=\"flex gap-2 mt-4\">
                    <a href=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_technology_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\" class=\"flex-1 px-4 py-2 bg-gradient-to-r from-purple-600 to-violet-600 text-white rounded-full hover:from-purple-700 hover:to-violet-700 text-sm text-center font-semibold shadow\">Modifier</a>
                    <form method=\"post\" action=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_technology_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\" class=\"flex-1\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette technologie ?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["technologie"], "id", [], "any", false, false, false, 92))), "html", null, true);
            yield "\">
                        <button type=\"submit\" class=\"w-full px-4 py-2 bg-gradient-to-r from-pink-500 to-red-600 text-white rounded-full hover:from-pink-600 hover:to-red-700 text-sm text-center font-semibold shadow transition-all duration-300\"><i class=\"fas fa-trash-alt mr-1\"></i>Supprimer</button>
                    </form>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 97
        if (!$context['_iterated']) {
            // line 98
            yield "            <div class=\"col-span-full text-center text-purple-400 py-12 text-lg font-semibold\">Aucune technologie trouvée.</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['technologie'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "    </div>

    ";
        // line 103
        yield "    ";
        if ((array_key_exists("pagination", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pagination"] ?? null)) > 0))) {
            // line 104
            yield "        <div class=\"mt-8 flex justify-center\">
            <nav aria-label=\"Pagination\" class=\"inline-flex gap-2\">
                ";
            // line 106
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 106) > 1)) {
                // line 107
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 107), "attributes", [], "any", false, false, false, 107), "get", ["_route"], "method", false, false, false, 107), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 107), "query", [], "any", false, false, false, 107), "all", [], "any", false, false, false, 107), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 107) - 1)])), "html", null, true);
                yield "\"
                       class=\"px-4 py-2 rounded-full bg-gradient-to-r from-purple-100 to-violet-100 text-purple-700 font-semibold shadow hover:from-purple-200 hover:to-violet-200 transition-all duration-300\">
                        &laquo; Précédent
                    </a>
                ";
            }
            // line 112
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pageCount", [], "any", false, false, false, 112)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 113
                yield "                    ";
                if (($context["page"] == CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 113))) {
                    // line 114
                    yield "                        <span class=\"px-4 py-2 rounded-full bg-gradient-to-r from-purple-600 to-violet-600 text-white font-bold shadow\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
                    ";
                } else {
                    // line 116
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 116), "attributes", [], "any", false, false, false, 116), "get", ["_route"], "method", false, false, false, 116), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 116), "query", [], "any", false, false, false, 116), "all", [], "any", false, false, false, 116), ["page" => $context["page"]])), "html", null, true);
                    yield "\"
                           class=\"px-4 py-2 rounded-full bg-gradient-to-r from-purple-100 to-violet-100 text-purple-700 font-semibold shadow hover:from-purple-200 hover:to-violet-200 transition-all duration-300\">
                            ";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                        </a>
                    ";
                }
                // line 121
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 122) < CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "pageCount", [], "any", false, false, false, 122))) {
                // line 123
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 123), "attributes", [], "any", false, false, false, 123), "get", ["_route"], "method", false, false, false, 123), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 123), "query", [], "any", false, false, false, 123), "all", [], "any", false, false, false, 123), ["page" => (CoreExtension::getAttribute($this->env, $this->source, ($context["pagination"] ?? null), "currentPageNumber", [], "any", false, false, false, 123) + 1)])), "html", null, true);
                yield "\"
                       class=\"px-4 py-2 rounded-full bg-gradient-to-r from-purple-100 to-violet-100 text-purple-700 font-semibold shadow hover:from-purple-200 hover:to-violet-200 transition-all duration-300\">
                        Suivant &raquo;
                    </a>
                ";
            }
            // line 128
            yield "            </nav>
        </div>
    ";
        }
        // line 131
        yield "</div>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/technologies/index.html.twig";
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
        return array (  377 => 131,  372 => 128,  363 => 123,  360 => 122,  354 => 121,  348 => 118,  342 => 116,  336 => 114,  333 => 113,  328 => 112,  319 => 107,  317 => 106,  313 => 104,  310 => 103,  306 => 100,  299 => 98,  297 => 97,  287 => 92,  283 => 91,  279 => 90,  275 => 88,  266 => 84,  260 => 80,  257 => 79,  252 => 76,  242 => 72,  238 => 71,  230 => 68,  225 => 65,  221 => 64,  212 => 62,  209 => 61,  207 => 60,  204 => 59,  201 => 58,  197 => 56,  195 => 55,  192 => 54,  189 => 53,  187 => 52,  183 => 51,  178 => 49,  174 => 48,  170 => 46,  165 => 45,  161 => 43,  152 => 40,  149 => 39,  145 => 38,  142 => 37,  133 => 34,  130 => 33,  126 => 32,  123 => 31,  114 => 28,  111 => 27,  107 => 26,  97 => 19,  90 => 15,  81 => 8,  74 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/technologies/index.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/admin/technologies/index.html.twig");
    }
}
