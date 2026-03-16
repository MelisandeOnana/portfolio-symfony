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

/* pages/skills.html.twig */
class __TwigTemplate_26e407536156d7f52d76a2de108aff8b extends Template
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
        yield "Mes Compétences - Portfolio Mélisande Onana";
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
        yield "<!-- Skills Hero -->
<section class=\"bg-gradient-to-br from-purple-600 via-purple-700 to-violet-800 text-white py-16 sm:py-24\">
    <div class=\"max-w-7xl mx-auto px-2 xs:px-4 sm:px-6 lg:px-8 text-center\">
        <h1 class=\"text-3xl xs:text-4xl sm:text-5xl md:text-6xl font-light mb-4 sm:mb-6 leading-tight\">Mes Compétences</h1>
        <div class=\"w-16 xs:w-24 h-1 bg-gradient-to-r from-yellow-300 to-orange-300 mx-auto mt-6 sm:mt-8\"></div>
    </div>
</section>

<!-- Skills Grid -->
<section class=\"py-10 sm:py-16 bg-gray-50\">
    <div class=\"max-w-7xl mx-auto px-2 xs:px-4 sm:px-6 lg:px-8\">
        <div class=\"text-center mb-8 sm:mb-12\">
            <p class=\"text-base xs:text-lg text-gray-600 max-w-2xl mx-auto\">
                Découvrez l'ensemble des technologies que je maîtrise, acquises depuis ";
        // line 19
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["technologies"] ?? null)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), ($context["technologies"] ?? null)), "dateDebut", [], "any", false, false, false, 19), "Y"), "html", null, true)) : ("2023"));
        yield "
            </p>
        </div>
        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["technologies"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
            // line 24
            yield "                <div class=\"group bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden border border-gray-100 flex flex-col min-h-[320px] sm:min-h-[260px] md:min-h-[220px]\">
                    <!-- Header avec icône -->
                    <div class=\"bg-gradient-to-r from-purple-500 to-violet-600 p-3 sm:p-4 md:p-6 text-center\">
                        <div class=\"text-2xl sm:text-3xl md:text-4xl mb-1 sm:mb-2 md:mb-3 text-white\">
                            ";
            // line 28
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "nom", [], "any", false, false, false, 28)) == "html")) {
                // line 29
                yield "                                <i class=\"fab fa-html5\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 30
$context["tech"], "nom", [], "any", false, false, false, 30)) == "css")) {
                // line 31
                yield "                                <i class=\"fab fa-css3-alt\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 32
$context["tech"], "nom", [], "any", false, false, false, 32)) == "javascript")) {
                // line 33
                yield "                                <i class=\"fab fa-js-square\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 34
$context["tech"], "nom", [], "any", false, false, false, 34)) == "php")) {
                // line 35
                yield "                                <i class=\"fab fa-php\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 36
$context["tech"], "nom", [], "any", false, false, false, 36)) == "react")) {
                // line 37
                yield "                                <i class=\"fab fa-react\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 38
$context["tech"], "nom", [], "any", false, false, false, 38)) == "laravel")) {
                // line 39
                yield "                                <i class=\"fab fa-laravel\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 40
$context["tech"], "nom", [], "any", false, false, false, 40)) == "symfony")) {
                // line 41
                yield "                                <i class=\"fab fa-symfony\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 42
$context["tech"], "nom", [], "any", false, false, false, 42)) == "mysql")) {
                // line 43
                yield "                                <i class=\"fas fa-database\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 44
$context["tech"], "nom", [], "any", false, false, false, 44)) == "git")) {
                // line 45
                yield "                                <i class=\"fab fa-git-alt\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 46
$context["tech"], "nom", [], "any", false, false, false, 46)) == "docker")) {
                // line 47
                yield "                                <i class=\"fab fa-docker\"></i>
                            ";
            } elseif (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 48
$context["tech"], "nom", [], "any", false, false, false, 48)) == "node.js") || (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "nom", [], "any", false, false, false, 48)) == "nodejs"))) {
                // line 49
                yield "                                <i class=\"fab fa-node-js\"></i>
                            ";
            } elseif (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 50
$context["tech"], "nom", [], "any", false, false, false, 50)) == "vue.js") || (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "nom", [], "any", false, false, false, 50)) == "vue"))) {
                // line 51
                yield "                                <i class=\"fab fa-vuejs\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 52
$context["tech"], "nom", [], "any", false, false, false, 52)) == "angular")) {
                // line 53
                yield "                                <i class=\"fab fa-angular\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 54
$context["tech"], "nom", [], "any", false, false, false, 54)) == "python")) {
                // line 55
                yield "                                <i class=\"fab fa-python\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 56
$context["tech"], "nom", [], "any", false, false, false, 56)) == "bootstrap")) {
                // line 57
                yield "                                <i class=\"fab fa-bootstrap\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 58
$context["tech"], "nom", [], "any", false, false, false, 58)) == "sass")) {
                // line 59
                yield "                                <i class=\"fab fa-sass\"></i>
                            ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 60
$context["tech"], "nom", [], "any", false, false, false, 60)) == "aws")) {
                // line 61
                yield "                                <i class=\"fab fa-aws\"></i>
                            ";
            } elseif (CoreExtension::inFilter("pix", Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 62
$context["tech"], "nom", [], "any", false, false, false, 62)))) {
                // line 63
                yield "                                <i class=\"fas fa-certificate\"></i>
                            ";
            } elseif (CoreExtension::inFilter("tailwind", Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["tech"], "nom", [], "any", false, false, false, 64)))) {
                // line 65
                yield "                                <i class=\"fas fa-wind\"></i>
                            ";
            } else {
                // line 67
                yield "                                <i class=\"fas fa-code\"></i>
                            ";
            }
            // line 69
            yield "                        </div>
                        <h3 class=\"text-sm sm:text-base md:text-xl font-semibold text-white\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "nom", [], "any", false, false, false, 70), "html", null, true);
            yield "</h3>
                    </div>
                    
                    <!-- Contenu -->
                    <div class=\"p-3 sm:p-4 md:p-6 flex-1 flex flex-col\">
                        <p class=\"text-gray-600 text-xs sm:text-sm md:text-base leading-relaxed mb-2 sm:mb-3 md:mb-4\">
                            ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "description", [], "any", false, false, false, 76), "html", null, true);
            yield "
                        </p>
                        
                        <!-- Informations détaillées -->
                        <div class=\"space-y-1 sm:space-y-2 md:space-y-3\">
                            <div class=\"flex items-center justify-between text-xs sm:text-sm md:text-base\">
                                <span class=\"text-gray-500\">
                                    <i class=\"fas fa-calendar-alt mr-1 sm:mr-2\"></i>
                                    Depuis
                                </span>
                                <span class=\"font-medium text-gray-900\">
                                    ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "dateDebut", [], "any", false, false, false, 87), "M Y"), "html", null, true);
            yield "
                                </span>
                            </div>
                            
                            <!-- Badge de statut - Seulement si le statut n'est pas null -->
                            ";
            // line 92
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "statut", [], "any", false, false, false, 92))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 93
                yield "                                <div class=\"flex justify-center pt-1 sm:pt-2 md:pt-3\">
                                    ";
                // line 94
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "statut", [], "any", false, false, false, 94) == "termine")) {
                    // line 95
                    yield "                                        <span class=\"inline-flex items-center px-2 sm:px-3 md:px-4 py-1 rounded-full text-xs md:text-sm font-medium bg-green-100 text-green-800\">
                                            <i class=\"fas fa-check mr-1\"></i>
                                            Maîtrisé
                                        </span>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 99
$context["tech"], "statut", [], "any", false, false, false, 99) == "en_cours")) {
                    // line 100
                    yield "                                        <span class=\"inline-flex items-center px-2 sm:px-3 md:px-4 py-1 rounded-full text-xs md:text-sm font-medium bg-yellow-100 text-yellow-800\">
                                            <i class=\"fas fa-clock mr-1\"></i>
                                            En cours
                                        </span>
                                    ";
                }
                // line 105
                yield "                                </div>
                            ";
            }
            // line 107
            yield "                        </div>
                        
                        <!-- Certifications multiples -->
                        ";
            // line 110
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "certificationsPdf", [], "any", false, false, false, 110) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "certificationsPdf", [], "any", false, false, false, 110)) > 0))) {
                // line 111
                yield "                            <div class=\"mt-2 sm:mt-3 md:mt-4 pt-2 sm:pt-3 md:pt-4 border-t border-gray-200\">
                                <div class=\"text-xs sm:text-sm md:text-base font-medium text-gray-700 mb-1 sm:mb-2 md:mb-3\">
                                    <i class=\"fas fa-certificate text-blue-600 mr-1 sm:mr-2\"></i>
                                    ";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "certificationsPdf", [], "any", false, false, false, 114)), "html", null, true);
                yield " certification";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "certificationsPdf", [], "any", false, false, false, 114)) > 1)) {
                    yield "s";
                }
                // line 115
                yield "                                </div>
                                <div class=\"space-y-1 sm:space-y-2 md:space-y-3\">
                                    ";
                // line 117
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "certificationsPdf", [], "any", false, false, false, 117));
                foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
                    // line 118
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "filename", [], "any", false, false, false, 118))), "html", null, true);
                    yield "\" target=\"_blank\" 
                                           class=\"flex items-center justify-between p-2 bg-blue-50 hover:bg-blue-100 rounded-lg transition duration-200 group\">
                                            <div class=\"flex items-center flex-1\">
                                                <i class=\"fas fa-file-pdf text-red-500 mr-1 sm:mr-2\"></i>
                                                <span class=\"text-xs sm:text-sm md:text-base text-gray-700 truncate\" title=\"";
                    // line 122
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "title", [], "any", false, false, false, 122), "html", null, true);
                    yield "\">
                                                    ";
                    // line 123
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "title", [], "any", false, false, false, 123)) > 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "title", [], "any", false, false, false, 123), 0, 20) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "title", [], "any", false, false, false, 123), "html", null, true)));
                    yield "
                                                </span>
                                            </div>
                                            <i class=\"fas fa-external-link-alt text-blue-600 text-xs opacity-0 group-hover:opacity-100 transition-opacity\"></i>
                                        </a>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['certification'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                yield "                                </div>
                            </div>
                        ";
            }
            // line 132
            yield "                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 134
        if (!$context['_iterated']) {
            // line 135
            yield "                <div class=\"col-span-full\">
                    <div class=\"bg-yellow-50 border border-yellow-200 rounded-lg p-3 sm:p-4 md:p-8 text-center\">
                        <i class=\"fas fa-info-circle text-yellow-600 text-xl sm:text-2xl md:text-3xl mb-1 sm:mb-2 md:mb-4\"></i>
                        <h3 class=\"text-xs sm:text-base md:text-lg font-medium text-yellow-800 mb-1 sm:mb-2 md:mb-3\">Aucune compétence enregistrée</h3>
                        <p class=\"text-xs sm:text-base md:text-lg text-yellow-600\">Les compétences seront bientôt disponibles.</p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        yield "        </div>
    </div>
    <!-- Pagination controls with dots -->
    <div class=\"flex justify-center mt-6 sm:mt-8 space-x-1 sm:space-x-2\">
        ";
        // line 147
        $context["totalPages"] = Twig\Extension\CoreExtension::round((($context["total"] ?? null) / ($context["limit"] ?? null)), 0, "ceil");
        // line 148
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 149
            yield "            ";
            if (($context["i"] == ($context["page"] ?? null))) {
                // line 150
                yield "                <span class=\"w-3 h-3 sm:w-4 sm:h-4 rounded-full bg-purple-600 border-2 border-purple-300 flex items-center justify-center shadow-lg transition-all duration-300\"></span>
            ";
            } else {
                // line 152
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skills_list", ["page" => $context["i"]]), "html", null, true);
                yield "\" 
                   class=\"w-3 h-3 sm:w-4 sm:h-4 rounded-full bg-purple-200 border-2 border-purple-300 hover:bg-purple-400 transition-all duration-300 flex items-center justify-center\"
                   title=\"Page ";
                // line 154
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\">
                </a>
            ";
            }
            // line 157
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "    </div>
</section>

<!-- Statistiques -->
<section class=\"py-10 sm:py-16 bg-white\">
    <div class=\"max-w-7xl mx-auto px-2 xs:px-4 sm:px-6 lg:px-8\">
        <div class=\"text-center mb-8 sm:mb-12\">
            <h2 class=\"text-xl sm:text-3xl font-light text-gray-800 mb-2 sm:mb-4\">Statistiques de compétences</h2>
            <div class=\"w-10 sm:w-16 h-1 bg-violet-500 mx-auto\"></div>
        </div>
        <div class=\"grid grid-cols-2 xs:grid-cols-2 md:grid-cols-4 gap-4 sm:gap-8 max-w-5xl mx-auto\">
            <div class=\"text-center group\">
                <div class=\"bg-gradient-to-br from-purple-50 to-violet-50 rounded-xl p-4 sm:p-6 border border-purple-100 group-hover:shadow-lg transition-all duration-300\">
                    <div class=\"text-xl sm:text-3xl font-bold text-purple-600 mb-1 sm:mb-2\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield "</div>
                    <p class=\"text-xs sm:text-sm font-medium text-gray-600\">Technologies maîtrisées</p>
                </div>
            </div>
            <div class=\"text-center group\">
                <div class=\"bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-4 sm:p-6 border border-green-100 group-hover:shadow-lg transition-all duration-300\">
                    <div class=\"text-xl sm:text-3xl font-bold text-green-600 mb-1 sm:mb-2\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["completed"] ?? null), "html", null, true);
        yield "</div>
                    <p class=\"text-xs sm:text-sm font-medium text-gray-600\">Compétences maîtrisées</p>
                </div>
            </div>
            <div class=\"text-center group\">
                <div class=\"bg-gradient-to-br from-yellow-50 to-orange-50 rounded-xl p-4 sm:p-6 border border-yellow-100 group-hover:shadow-lg transition-all duration-300\">
                    <div class=\"text-xl sm:text-3xl font-bold text-yellow-600 mb-1 sm:mb-2\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["inProgress"] ?? null), "html", null, true);
        yield "</div>
                    <p class=\"text-xs sm:text-sm font-medium text-gray-600\">En cours d'apprentissage</p>
                </div>
            </div>
            <div class=\"text-center group\">
                <div class=\"bg-gradient-to-br from-indigo-50 to-blue-50 rounded-xl p-4 sm:p-6 border border-indigo-100 group-hover:shadow-lg transition-all duration-300\">
                    <div class=\"text-xl sm:text-3xl font-bold text-indigo-600 mb-1 sm:mb-2\">";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["certificationsPdf"] ?? null), "html", null, true);
        yield "</div>
                    <p class=\"text-xs sm:text-sm font-medium text-gray-600\">Certifications obtenues</p>
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
        return "pages/skills.html.twig";
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
        return array (  419 => 189,  410 => 183,  401 => 177,  392 => 171,  377 => 158,  371 => 157,  365 => 154,  359 => 152,  355 => 150,  352 => 149,  347 => 148,  345 => 147,  339 => 143,  326 => 135,  324 => 134,  318 => 132,  313 => 129,  301 => 123,  297 => 122,  289 => 118,  285 => 117,  281 => 115,  275 => 114,  270 => 111,  268 => 110,  263 => 107,  259 => 105,  252 => 100,  250 => 99,  244 => 95,  242 => 94,  239 => 93,  237 => 92,  229 => 87,  215 => 76,  206 => 70,  203 => 69,  199 => 67,  195 => 65,  193 => 64,  190 => 63,  188 => 62,  185 => 61,  183 => 60,  180 => 59,  178 => 58,  175 => 57,  173 => 56,  170 => 55,  168 => 54,  165 => 53,  163 => 52,  160 => 51,  158 => 50,  155 => 49,  153 => 48,  150 => 47,  148 => 46,  145 => 45,  143 => 44,  140 => 43,  138 => 42,  135 => 41,  133 => 40,  130 => 39,  128 => 38,  125 => 37,  123 => 36,  120 => 35,  118 => 34,  115 => 33,  113 => 32,  110 => 31,  108 => 30,  105 => 29,  103 => 28,  97 => 24,  92 => 23,  85 => 19,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/skills.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/pages/skills.html.twig");
    }
}
