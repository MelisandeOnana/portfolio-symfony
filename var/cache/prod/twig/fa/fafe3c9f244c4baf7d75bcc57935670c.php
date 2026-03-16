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

/* projects/index.html.twig */
class __TwigTemplate_e1d1e585a440872a25b8c9f4a4451229 extends Template
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
            'body_attributes' => [$this, 'block_body_attributes'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        yield "Mes Projets - Portfolio Mélisande Onana";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "data-current-type=\"";
        yield (((array_key_exists("currentType", $context) && ($context["currentType"] ?? null))) ? ("true") : ("false"));
        yield "\" data-current-technology=\"";
        yield (((array_key_exists("currentTechnology", $context) && ($context["currentTechnology"] ?? null))) ? ("true") : ("false"));
        yield "\"";
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
        yield "<!-- Hero avec animation -->
<section class=\"relative bg-gradient-to-br from-indigo-900 via-slate-800 to-gray-900 py-20 overflow-hidden\">
    <!-- Grille de points animée -->
    
    <!-- Lignes géométriques -->
    <div class=\"absolute inset-0\">
        <svg class=\"w-full h-full opacity-5\" viewBox=\"0 0 1000 600\">
            <path d=\"M0,300 Q250,100 500,300 T1000,300\" stroke=\"white\" stroke-width=\"2\" fill=\"none\" class=\"animate-pulse\"/>
            <path d=\"M0,200 Q333,50 666,200 T1000,200\" stroke=\"white\" stroke-width=\"1\" fill=\"none\" style=\"animation-delay: 1s;\"/>
        </svg>
    </div>
    
    <div class=\"relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 md:gap-12 items-center min-h-[60vh] md:min-h-[70vh]\">
            
            <!-- Colonne gauche : Contenu principal -->
            <div class=\"space-y-6 md:space-y-8\">
                <div class=\"space-y-4\">
                    <div class=\"inline-flex items-center px-4 py-2 bg-purple-500/20 border border-purple-400/30 rounded-full text-purple-200 text-sm font-medium\">
                        <i class=\"fas fa-code mr-2\"></i>
                        Portfolio 2025
                    </div>
                    
                    <h1 class=\"text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight\">
                        Mes
                        <span class=\"text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-violet-400\">
                            Projets
                        </span>
                    </h1>
                    
                    <p class=\"text-base sm:text-lg text-gray-300 leading-relaxed max-w-lg\">
                        Une sélection de mes réalisations techniques, chacune racontant une histoire d'innovation et de créativité.
                    </p>
                </div>
                
                <!-- Bouton d'action principal -->
                <div class=\"flex flex-col sm:flex-row items-center gap-3 sm:gap-4\">
                    <a href=\"#projets-section\" 
                       class=\"group inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 to-violet-600 text-white font-semibold rounded-lg hover:from-purple-700 hover:to-violet-700 transition-all duration-300 transform hover:scale-105 shadow-lg\">
                        <span>Explorer les projets</span>
                        <i class=\"fas fa-arrow-down ml-2 group-hover:animate-bounce\"></i>
                    </a>
                </div>
            </div>
            
            <!-- Colonne droite : Statistiques modernes -->
            <div class=\"space-y-4 md:space-y-6\">
                <!-- Carte statistiques principales -->
                <div class=\"bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6\">
                    <div class=\"grid grid-cols-3 gap-2 md:gap-4\">
                        <div class=\"text-center\">
                            <div class=\"text-3xl font-bold text-white mb-1\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["projets"] ?? null)), "html", null, true);
        yield "</div>
                            <div class=\"text-xs text-gray-400 uppercase tracking-wide\">Projets</div>
                        </div>
                        <div class=\"text-center border-l border-r border-white/10\">
                            <div class=\"text-3xl font-bold text-purple-400 mb-1\">";
        // line 63
        yield (((($tmp = ($context["technologiesWithCount"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["technologiesWithCount"] ?? null)), "html", null, true)) : (0));
        yield "</div>
                            <div class=\"text-xs text-gray-400 uppercase tracking-wide\">Technologies</div>
                        </div>
                        <div class=\"text-center\">
                            <div class=\"text-3xl font-bold text-violet-400 mb-1\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") - 2023) + 1), "html", null, true);
        yield "</div>
                            <div class=\"text-xs text-gray-400 uppercase tracking-wide\">Années</div>
                        </div>
                    </div>
                </div>
                
                <!-- Mini aperçu des catégories -->
                <div class=\"grid grid-cols-2 gap-2 md:gap-4\">
                    <div class=\"bg-gradient-to-br from-purple-500/10 to-purple-600/10 border border-purple-500/20 rounded-xl p-4\">
                        <div class=\"flex items-center justify-between mb-2\">
                            <span class=\"text-purple-300 text-sm font-medium\">Professionnels</span>
                            <i class=\"fas fa-briefcase text-purple-400\"></i>
                        </div>
                        <div class=\"text-2xl font-bold text-white\">
                            ";
        // line 81
        $context["proProjets"] = Twig\Extension\CoreExtension::filter($this->env, ($context["projets"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "typeProjet", [], "any", false, false, false, 81) == "Pro"); });
        // line 82
        yield "                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["proProjets"] ?? null)), "html", null, true);
        yield "
                        </div>
                    </div>
                    
                    <div class=\"bg-gradient-to-br from-violet-500/10 to-violet-600/10 border border-violet-500/20 rounded-xl p-4\">
                        <div class=\"flex items-center justify-between mb-2\">
                            <span class=\"text-violet-300 text-sm font-medium\">Personnels</span>
                            <i class=\"fas fa-heart text-violet-400\"></i>
                        </div>
                        <div class=\"text-2xl font-bold text-white\">
                            ";
        // line 92
        $context["persoProjets"] = Twig\Extension\CoreExtension::filter($this->env, ($context["projets"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "typeProjet", [], "any", false, false, false, 92) == "Perso"); });
        // line 93
        yield "                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["persoProjets"] ?? null)), "html", null, true);
        yield "
                        </div>
                    </div>
                    <div class=\"bg-gradient-to-br from-indigo-500/10 to-indigo-600/10 border border-indigo-500/20 rounded-xl p-4\">
                        <div class=\"flex items-center justify-between mb-2\">
                            <span class=\"text-indigo-300 text-sm font-medium\">Scolaires</span>
                            <i class=\"fas fa-user text-indigo-400\"></i>
                        </div>
                        <div class=\"text-2xl font-bold text-white\">
                            ";
        // line 102
        $context["indProjets"] = Twig\Extension\CoreExtension::filter($this->env, ($context["projets"] ?? null), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "typeProjet", [], "any", false, false, false, 102) == "Scolaire"); });
        // line 103
        yield "                            ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["indProjets"] ?? null)), "html", null, true);
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Indicateur de scroll minimaliste -->
    <div class=\"absolute bottom-6 left-1/2 transform -translate-x-1/2\">
        <a href=\"#projets-section\" class=\"block text-white/50 hover:text-white transition-colors duration-300\">
            <i class=\"fas fa-chevron-down animate-bounce\"></i>
        </a>
    </div>
</section>

<!-- Filtres avec sidebar sticky -->
<section id=\"projets-section\" class=\"relative bg-white\">
    <div class=\"max-w-7xl mx-auto px-2 xs:px-4 sm:px-6 lg:px-8 py-10 sm:py-16\">
        <div class=\"grid grid-cols-1 md:grid-cols-4 gap-6 md:gap-8\">
            
            <!-- Sidebar des filtres -->
            <div class=\"md:col-span-1\">
                <div class=\"sticky top-[6rem] space-y-4 md:space-y-6\">
                    <!-- Filtres par type -->
                    <div class=\"bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 shadow-lg border border-gray-100\">
                        <h3 class=\"text-lg font-semibold text-gray-900 mb-4 flex items-center\">
                            <div class=\"w-3 h-3 bg-purple-500 rounded-full mr-3\"></div>
                            <i class=\"fas fa-layer-group text-purple-400 mr-2\"></i>
                            Type de projet
                        </h3>
                        <div>
                            ";
        // line 135
        if (array_key_exists("projectTypes", $context)) {
            // line 136
            yield "                                <div class=\"flex flex-wrap gap-2 py-2 items-center\">
                                    <a href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list", (((($tmp = ($context["currentTechnology"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["technology" => ($context["currentTechnology"] ?? null)]) : ([]))), "html", null, true);
            yield "#projets-section\"
                                       class=\"inline-flex items-center px-4 py-2 rounded-full font-medium shadow transition-all duration-200
                                       ";
            // line 139
            if ((($tmp =  !($context["currentType"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 140
                yield "                                           bg-purple-500 text-white hover:bg-purple-600 ring-2 ring-purple-400
                                       ";
            } else {
                // line 142
                yield "                                           bg-gray-100 text-gray-500 hover:bg-gray-200
                                       ";
            }
            // line 143
            yield "\">
                                        Tous
                                    </a>
                                    ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["projectTypes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 147
                yield "                                        ";
                if ((($context["currentType"] ?? null) == $context["type"])) {
                    // line 148
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list", (((($tmp = ($context["currentTechnology"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["type" => $context["type"], "technology" => ($context["currentTechnology"] ?? null)]) : (["type" => $context["type"]]))), "html", null, true);
                    yield "#projets-section\" class=\"inline-flex items-center px-4 py-2 rounded-full ring-2 ring-purple-400 bg-purple-500 text-white font-medium shadow hover:bg-purple-600 transition-all duration-200\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                    yield "</a>
                                        ";
                } else {
                    // line 150
                    yield "                                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list", (((($tmp = ($context["currentTechnology"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["type" => $context["type"], "technology" => ($context["currentTechnology"] ?? null)]) : (["type" => $context["type"]]))), "html", null, true);
                    yield "#projets-section\" class=\"inline-flex items-center px-4 py-2 rounded-full bg-purple-50 border border-purple-200 text-purple-700 font-medium hover:bg-purple-100 transition-all duration-200\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                    yield "</a>
                                        ";
                }
                // line 152
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            yield "                                </div>
                            ";
        }
        // line 155
        yield "                        </div>
                    </div>
                    
                    <!-- Filtres par technologie -->
                    <div class=\"bg-gradient-to-br from-gray-50 to-white rounded-2xl p-6 shadow-lg border border-gray-100\">
                        <h3 class=\"text-lg font-semibold text-gray-900 mb-4 flex items-center\">
                            <div class=\"w-3 h-3 bg-violet-500 rounded-full mr-3\"></div>
                            <i class=\"fas fa-microchip text-violet-400 mr-2\"></i>
                            Technologies
                        </h3>
                        <div>
                            ";
        // line 166
        if (array_key_exists("technologiesWithCount", $context)) {
            // line 167
            yield "                                <div class=\"flex flex-wrap gap-2 py-2 items-center\">
                                    <a href=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list", (((($tmp = ($context["currentType"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["type" => ($context["currentType"] ?? null)]) : ([]))), "html", null, true);
            yield "#projets-section\"
                                       class=\"inline-flex items-center px-4 py-2 rounded-full font-medium shadow transition-all duration-200
                                       ";
            // line 170
            if ((($tmp =  !($context["currentTechnology"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 171
                yield "                                           bg-violet-500 text-white hover:bg-violet-600 ring-2 ring-violet-400
                                       ";
            } else {
                // line 173
                yield "                                           bg-gray-100 text-gray-500 hover:bg-gray-200
                                       ";
            }
            // line 174
            yield "\">
                                        Toutes
                                    </a>
                                    ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["technologiesWithCount"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 178
                yield "                                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["result"], "technologie", [], "any", true, true, false, 178)) {
                    // line 179
                    yield "                                            ";
                    if ((($context["currentTechnology"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["result"], "technologie", [], "any", false, false, false, 179), "id", [], "any", false, false, false, 179))) {
                        // line 180
                        yield "                                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list", (((($tmp = ($context["currentType"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["technology" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["result"], "technologie", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180), "type" => ($context["currentType"] ?? null)]) : (["technology" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["result"], "technologie", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180)]))), "html", null, true);
                        yield "#projets-section\" class=\"inline-flex items-center px-4 py-2 rounded-full ring-2 ring-violet-400 bg-violet-500 text-white font-medium shadow hover:bg-violet-600 transition-all duration-200\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["result"], "technologie", [], "any", false, false, false, 180), "nom", [], "any", false, false, false, 180), "html", null, true);
                        yield "</a>
                                            ";
                    } else {
                        // line 182
                        yield "                                                <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list", (((($tmp = ($context["currentType"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (["technology" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["result"], "technologie", [], "any", false, false, false, 182), "id", [], "any", false, false, false, 182), "type" => ($context["currentType"] ?? null)]) : (["technology" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["result"], "technologie", [], "any", false, false, false, 182), "id", [], "any", false, false, false, 182)]))), "html", null, true);
                        yield "#projets-section\" class=\"inline-flex items-center px-4 py-2 rounded-full bg-violet-50 border border-violet-200 text-violet-700 font-medium hover:bg-violet-100 transition-all duration-200\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["result"], "technologie", [], "any", false, false, false, 182), "nom", [], "any", false, false, false, 182), "html", null, true);
                        yield "</a>
                                            ";
                    }
                    // line 184
                    yield "                                        ";
                }
                // line 185
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['result'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            yield "                                </div>
                            ";
        }
        // line 188
        yield "                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Grille des projets -->
            ";
        // line 194
        $context["hasProjet"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["projets"] ?? null)) > 0);
        // line 195
        yield "
            <div class=\"md:col-span-3\">
                ";
        // line 197
        if ((($context["currentType"] ?? null) || ($context["currentTechnology"] ?? null))) {
            // line 198
            yield "                    <div class=\"mb-8 p-4 bg-blue-50 border border-blue-200 rounded-xl\">
                        <div class=\"flex items-center justify-between\">
                            <div class=\"flex items-center\">
                                <i class=\"fas fa-filter text-blue-600 mr-3\"></i>
                                <span class=\"text-blue-800 font-medium\">
                                    Filtrage actif
                                    ";
            // line 204
            if ((($tmp = ($context["currentType"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 205
                yield "                                        : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentType"] ?? null), "html", null, true);
                yield "
                                    ";
            }
            // line 207
            yield "                                    ";
            if ((($tmp = ($context["currentTechnology"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 208
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["technologiesWithCount"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                    // line 209
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["result"], "technologie", [], "any", false, false, false, 209), "id", [], "any", false, false, false, 209) == ($context["currentTechnology"] ?? null))) {
                        // line 210
                        yield "                                                , ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["result"], "technologie", [], "any", false, false, false, 210), "nom", [], "any", false, false, false, 210), "html", null, true);
                        yield "
                                            ";
                    }
                    // line 212
                    yield "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['result'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 213
                yield "                                    ";
            }
            // line 214
            yield "                                </span>
                            </div>
                            <a href=\"";
            // line 216
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
            yield "#projets-section\" class=\"text-blue-600 hover:text-blue-800 font-medium\">
                                <i class=\"fas fa-times mr-1\"></i>Réinitialiser
                            </a>
                        </div>
                    </div>
                ";
        }
        // line 222
        yield "
                ";
        // line 223
        if ((($tmp = ($context["hasProjet"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 224
            yield "                    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-8\">
                        ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["projets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
                // line 226
                yield "                            <article id=\"projet-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 226), "html", null, true);
                yield "\" class=\"group relative bg-white border-2 border-purple-100 rounded-2xl sm:rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 flex flex-col\">
                                <!-- Image avec overlay violet -->
                                <div class=\"relative h-48 sm:h-64 overflow-hidden\">
                                    ";
                // line 229
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "image", [], "any", false, false, false, 229)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 230
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "image", [], "any", false, false, false, 230))), "html", null, true);
                    yield "\"
                                             class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-700\"
                                             alt=\"";
                    // line 232
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "titre", [], "any", false, false, false, 232), "html", null, true);
                    yield "\">
                                        <div class=\"absolute inset-0 bg-gradient-to-t from-purple-700/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-between p-6\">
                                            <div class=\"flex space-x-3\">
                                                ";
                    // line 235
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "lien", [], "any", false, false, false, 235)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 236
                        yield "                                                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "lien", [], "any", false, false, false, 236), "html", null, true);
                        yield "\" target=\"_blank\"
                                                       class=\"w-12 h-12 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-purple-700 hover:bg-white/50 transition-colors duration-300\"
                                                       title=\"Voir le projet\">
                                                        <i class=\"fas fa-external-link-alt\"></i>
                                                    </a>
                                                ";
                    }
                    // line 242
                    yield "                                                ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "githubLinks", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 243
                        yield "                                                    ";
                        if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "githubLinks", [], "any", false, false, false, 243))) {
                            // line 244
                            yield "                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "githubLinks", [], "any", false, false, false, 244));
                            foreach ($context['_seq'] as $context["_key"] => $context["githubLink"]) {
                                // line 245
                                yield "                                                            <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["githubLink"], "html", null, true);
                                yield "\" target=\"_blank\"
                                                               class=\"w-12 h-12 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-purple-700 hover:bg-white/50 transition-colors duration-300\"
                                                               title=\"Code source\">
                                                                <i class=\"fab fa-github\"></i>
                                                            </a>
                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['githubLink'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 251
                            yield "                                                    ";
                        } else {
                            // line 252
                            yield "                                                        <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "githubLinks", [], "any", false, false, false, 252), "html", null, true);
                            yield "\" target=\"_blank\"
                                                           class=\"w-12 h-12 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-purple-700 hover:bg-white/50 transition-colors duration-300\"
                                                           title=\"Code source\">
                                                            <i class=\"fab fa-github\"></i>
                                                        </a>
                                                    ";
                        }
                        // line 258
                        yield "                                                ";
                    }
                    // line 259
                    yield "                                            </div>
                                            ";
                    // line 260
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "typeProjet", [], "any", false, false, false, 260)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 261
                        yield "                                                <span class=\"px-4 py-2 bg-purple-600/70 backdrop-blur-sm rounded-full text-white text-sm font-medium shadow-lg\">
                                                    ";
                        // line 262
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "typeProjet", [], "any", false, false, false, 262), "html", null, true);
                        yield "
                                                </span>
                                            ";
                    }
                    // line 265
                    yield "                                        </div>
                                    ";
                } else {
                    // line 267
                    yield "                                        ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "lien", [], "any", false, false, false, 267)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 268
                        yield "                                            <div class=\"relative overflow-hidden rounded-xl shadow-xl group h-48 sm:h-64 bg-white\" style=\"overflow: hidden;\">
                                                <iframe src=\"";
                        // line 269
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "lien", [], "any", false, false, false, 269), "html", null, true);
                        yield "\"
                                                        class=\"w-full h-full border-0 transform scale-90 origin-top-left\"
                                                        style=\"width: 120%; height: 120%; overflow: hidden;\"
                                                        title=\"Aperçu de ";
                        // line 272
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "titre", [], "any", false, false, false, 272), "html", null, true);
                        yield "\"
                                                        sandbox=\"allow-scripts allow-same-origin allow-forms\"
                                                        scrolling=\"no\">
                                                </iframe>
                                                <!-- Overlay au survol avec GitHub et type projet -->
                                                <div class=\"absolute inset-0 bg-gradient-to-t from-purple-700/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-between p-6\">
                                                    <div class=\"flex space-x-3\">
                                                        <a href=\"";
                        // line 279
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "lien", [], "any", false, false, false, 279), "html", null, true);
                        yield "\" target=\"_blank\"
                                                           class=\"w-12 h-12 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/50 transition-colors duration-300\"
                                                           title=\"Ouvrir le site\">
                                                            <i class=\"fas fa-external-link-alt\"></i>
                                                        </a>
                                                        ";
                        // line 284
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "githubLinks", [], "any", false, false, false, 284)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 285
                            yield "                                                            ";
                            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "githubLinks", [], "any", false, false, false, 285))) {
                                // line 286
                                yield "                                                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "githubLinks", [], "any", false, false, false, 286));
                                foreach ($context['_seq'] as $context["_key"] => $context["githubLink"]) {
                                    // line 287
                                    yield "                                                                    <a href=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["githubLink"], "html", null, true);
                                    yield "\" target=\"_blank\"
                                                                       class=\"w-12 h-12 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/50 transition-colors duration-300\"
                                                                       title=\"Code source\">
                                                                        <i class=\"fab fa-github\"></i>
                                                                    </a>
                                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['githubLink'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 293
                                yield "                                                            ";
                            } else {
                                // line 294
                                yield "                                                                <a href=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "githubLinks", [], "any", false, false, false, 294), "html", null, true);
                                yield "\" target=\"_blank\"
                                                                   class=\"w-12 h-12 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/50 transition-colors duration-300\"
                                                                   title=\"Code source\">
                                                                    <i class=\"fab fa-github\"></i>
                                                                </a>
                                                            ";
                            }
                            // line 300
                            yield "                                                        ";
                        }
                        // line 301
                        yield "                                                        <button type=\"button\" onclick=\"toggleFullscreen(this)\"
                                                                class=\"w-12 h-12 bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-300\"
                                                                title=\"Plein écran\">
                                                            <i class=\"fas fa-expand\"></i>
                                                        </button>
                                                    </div>
                                                    ";
                        // line 307
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "typeProjet", [], "any", false, false, false, 307)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 308
                            yield "                                                        <span class=\"px-4 py-2 bg-purple-600/70 backdrop-blur-sm rounded-full text-white text-sm font-medium shadow-lg\">
                                                            ";
                            // line 309
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "typeProjet", [], "any", false, false, false, 309), "html", null, true);
                            yield "
                                                        </span>
                                                    ";
                        }
                        // line 312
                        yield "                                                </div>
                                                <!-- Badge \"Site en direct\" -->
                                                <div class=\"absolute top-2 left-2\">
                                                    <span class=\"px-3 py-1 bg-green-500/80 backdrop-blur-sm text-white rounded-full text-xs font-medium border border-green-400/50 flex items-center\">
                                                        <span class=\"w-2 h-2 bg-green-300 rounded-full mr-2 animate-pulse\"></span>
                                                        Site en direct
                                                    </span>
                                                </div>
                                            </div>
                                        ";
                    } else {
                        // line 322
                        yield "                                            <div class=\"w-full h-full bg-gradient-to-br from-purple-400 via-violet-500 to-indigo-500 flex items-center justify-center\">
                                                <span class=\"text-white text-3xl font-black\">";
                        // line 323
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "titre", [], "any", false, false, false, 323), 0, 2)), "html", null, true);
                        yield "</span>
                                            </div>
                                        ";
                    }
                    // line 326
                    yield "                                    ";
                }
                // line 327
                yield "                                </div>
                                <!-- Contenu -->
                                <div class=\"p-4 sm:p-6 md:p-8 flex-1 flex flex-col\">
                                    <div class=\"flex flex-col sm:flex-row items-start sm:items-center justify-between mb-2 sm:mb-4 gap-2\">
                                        <h3 class=\"text-lg sm:text-xl md:text-2xl font-bold text-purple-700 group-hover:text-purple-900 transition-colors duration-300\">
                                            ";
                // line 332
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "titre", [], "any", false, false, false, 332), "html", null, true);
                yield "
                                        </h3>
                                            ";
                // line 334
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateDebut", [], "any", false, false, false, 334)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 335
                    yield "                                                <span class=\"text-sm text-purple-500 bg-purple-50 px-3 py-1 rounded-full\">
                                                    ";
                    // line 336
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "dateDebut", [], "any", false, false, false, 336), "Y"), "html", null, true);
                    yield "
                                                </span>
                                            ";
                }
                // line 339
                yield "                                    </div>
                                    <p class=\"text-gray-600 mb-4 sm:mb-6 leading-relaxed text-sm sm:text-base\">
                                        ";
                // line 341
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 341)) > 150)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 341), 0, 150) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "description", [], "any", false, false, false, 341), "html", null, true)));
                yield "
                                    </p>
                                    <!-- Technologies en pills violets -->
                                    <div class=\"flex flex-wrap gap-1 sm:gap-2 mb-4 sm:mb-6\">
                                        ";
                // line 345
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "technologies", [], "any", false, false, false, 345));
                foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                    // line 346
                    yield "                                            <span class=\"px-3 py-1 bg-gradient-to-r from-purple-100 to-violet-100 text-purple-800 rounded-full text-sm font-medium hover:from-purple-200 hover:to-violet-200 transition-colors duration-300 border border-purple-200\">
                                                ";
                    // line 347
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "nom", [], "any", false, false, false, 347), "html", null, true);
                    yield "
                                            </span>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 350
                yield "                                    </div>
                                    <!-- Actions -->
                                    <div class=\"flex flex-col sm:flex-row items-center justify-between gap-2\">
                                        <a href=\"";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 353), "anchor" => ("projet-" . CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 353))]), "html", null, true);
                yield "#projet-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "id", [], "any", false, false, false, 353), "html", null, true);
                yield "\"
                                           class=\"inline-flex items-center px-4 sm:px-6 py-2 sm:py-3 bg-gradient-to-r from-purple-600 to-violet-600 text-white font-semibold rounded-full hover:from-purple-700 hover:to-violet-700 transition-all duration-300 transform hover:scale-105 shadow-lg text-sm sm:text-base\">
                                            <span>Explorer</span>
                                            <i class=\"fas fa-arrow-right ml-2\"></i>
                                        </a>
                                        ";
                // line 358
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "etat", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 359
                    yield "                                            <span class=\"inline-flex items-center px-2 sm:px-3 py-1 bg-purple-100 text-purple-800 rounded-full text-xs sm:text-sm font-medium border border-purple-200\">
                                                <div class=\"w-2 h-2 bg-purple-400 rounded-full mr-2\"></div>
                                                ";
                    // line 361
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projet"], "etat", [], "any", false, false, false, 361), "html", null, true);
                    yield "
                                            </span>
                                        ";
                }
                // line 364
                yield "                                    </div>
                                </div>
                            </article>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['projet'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 368
            yield "                    </div>
                ";
        } else {
            // line 370
            yield "                    <div class=\"col-span-full\">
                        <div class=\"text-center py-10 sm:py-16\">
                            <div class=\"w-16 sm:w-24 h-16 sm:h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4 sm:mb-6\">
                                <i class=\"fas fa-search text-gray-400 text-xl sm:text-3xl\"></i>
                            </div>
                            <h3 class=\"text-base sm:text-xl font-semibold text-gray-900 mb-2 sm:mb-4\">
                                Aucun projet trouvé pour ces filtres
                            </h3>
                            <p class=\"text-xs sm:text-base text-gray-600 mb-4 sm:mb-6\">
                                Essayez de modifier vos filtres pour voir plus de projets.
                            </p>
                            <a href=\"";
            // line 381
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
            yield "#projets-section\" 
                               class=\"inline-flex items-center px-4 sm:px-6 py-2 sm:py-3 bg-purple-600 text-white font-semibold rounded-full hover:bg-purple-700 transition-colors duration-300 text-xs sm:text-base\">
                                Voir tous les projets
                            </a>
                        </div>
                    </div>
                ";
        }
        // line 388
        yield "            </div>
        </div>
    </div>
</section>
";
        yield from [];
    }

    // line 394
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 395
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
    // Si l'URL contient un hash (#projet-...), scroller automatiquement vers l'ancre au chargement
    document.addEventListener('DOMContentLoaded', function() {
        if(window.location.hash && window.location.hash.startsWith('#projet-')) {
            var el = document.querySelector(window.location.hash);
            if(el) {
                el.scrollIntoView({behavior: 'smooth', block: 'center'});
            }
        }
    });
    </script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "projects/index.html.twig";
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
        return array (  790 => 395,  783 => 394,  774 => 388,  764 => 381,  751 => 370,  747 => 368,  738 => 364,  732 => 361,  728 => 359,  726 => 358,  716 => 353,  711 => 350,  702 => 347,  699 => 346,  695 => 345,  688 => 341,  684 => 339,  678 => 336,  675 => 335,  673 => 334,  668 => 332,  661 => 327,  658 => 326,  652 => 323,  649 => 322,  637 => 312,  631 => 309,  628 => 308,  626 => 307,  618 => 301,  615 => 300,  605 => 294,  602 => 293,  589 => 287,  584 => 286,  581 => 285,  579 => 284,  571 => 279,  561 => 272,  555 => 269,  552 => 268,  549 => 267,  545 => 265,  539 => 262,  536 => 261,  534 => 260,  531 => 259,  528 => 258,  518 => 252,  515 => 251,  502 => 245,  497 => 244,  494 => 243,  491 => 242,  481 => 236,  479 => 235,  473 => 232,  467 => 230,  465 => 229,  458 => 226,  454 => 225,  451 => 224,  449 => 223,  446 => 222,  437 => 216,  433 => 214,  430 => 213,  424 => 212,  418 => 210,  415 => 209,  410 => 208,  407 => 207,  401 => 205,  399 => 204,  391 => 198,  389 => 197,  385 => 195,  383 => 194,  375 => 188,  371 => 186,  365 => 185,  362 => 184,  354 => 182,  346 => 180,  343 => 179,  340 => 178,  336 => 177,  331 => 174,  327 => 173,  323 => 171,  321 => 170,  316 => 168,  313 => 167,  311 => 166,  298 => 155,  294 => 153,  288 => 152,  280 => 150,  272 => 148,  269 => 147,  265 => 146,  260 => 143,  256 => 142,  252 => 140,  250 => 139,  245 => 137,  242 => 136,  240 => 135,  204 => 103,  202 => 102,  189 => 93,  187 => 92,  173 => 82,  171 => 81,  154 => 67,  147 => 63,  140 => 59,  87 => 8,  80 => 7,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "projects/index.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/projects/index.html.twig");
    }
}
