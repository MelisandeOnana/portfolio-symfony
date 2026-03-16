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

/* projects/show.html.twig */
class __TwigTemplate_a0b6eb05c86c4a96d1a04d1eae2bc0a8 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - Portfolio Mélisande Onana";
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
        yield "<!-- Project Hero -->
<section class=\"bg-gradient-to-br from-purple-600 via-purple-700 to-violet-800 text-white py-8\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <!-- Header Navigation -->
        <div class=\"flex items-center justify-between mb-6\">
                <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        yield "#projet-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        yield "\" 
               class=\"inline-flex items-center text-purple-200 hover:text-white transition duration-300 group\">
                <i class=\"fas fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform\"></i>
                Retour aux projets
            </a>
        </div>

        <!-- Main Content Grid -->
        <div class=\"grid grid-cols-1 lg:grid-cols-5 gap-6 items-start\">
            <!-- Left Column: Project Info -->
            <div class=\"lg:col-span-2 space-y-4\">
                <div>
                    <div class=\"flex items-center gap-3 mb-3\">
                        <h1 class=\"text-2xl lg:text-3xl font-light leading-tight\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 24), "html", null, true);
        yield "</h1>
                        ";
        // line 25
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "etat", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "                            <span class=\"px-3 py-1 bg-green-500/30 backdrop-blur-sm text-white rounded-full text-xs font-medium border border-green-400/30\">
                                ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "etat", [], "any", false, false, false, 27), "html", null, true);
            yield "
                            </span>
                        ";
        }
        // line 30
        yield "                        ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "typeProjet", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "                            <span class=\"px-3 py-1 bg-white/20 backdrop-blur-sm text-white rounded-full text-xs font-medium border border-white/30\">
                                ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "typeProjet", [], "any", false, false, false, 32), "html", null, true);
            yield "
                            </span>
                        ";
        }
        // line 35
        yield "                    </div>
                    <div class=\"bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20\">
                        <p class=\"text-sm text-purple-100 leading-relaxed\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "description", [], "any", false, false, false, 37), "html", null, true);
        yield "</p>
                    </div>
                </div>

                <!-- Technologies -->
                ";
        // line 42
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "technologies", [], "any", false, false, false, 42)) > 0)) {
            // line 43
            yield "                    <div>
                        <h3 class=\"text-sm font-semibold mb-2 flex items-center\">
                            <i class=\"fas fa-code mr-2 text-xs\"></i>Technologies
                        </h3>
                        <div class=\"flex flex-wrap gap-1\">
                            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "technologies", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                // line 49
                yield "                                <span class=\"px-2 py-1 bg-white/20 backdrop-blur-sm text-white rounded text-xs font-medium border border-white/30 hover:bg-white/30 transition-colors\">
                                    ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "nom", [], "any", false, false, false, 50), "html", null, true);
                yield "
                                </span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "                        </div>
                    </div>
                ";
        }
        // line 56
        yield "
                <!-- Project Details -->
                <div class=\"bg-white/10 backdrop-blur-sm rounded-lg p-4 border border-white/20\">
                    <h3 class=\"text-sm font-semibold text-white mb-3 flex items-center\">
                        <i class=\"fas fa-info-circle mr-2 text-xs\"></i>Détails
                    </h3>
                    <div class=\"grid grid-cols-2 gap-3 text-xs\">
                        ";
        // line 63
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateDebut", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "                            <div>
                                <div class=\"text-purple-200 mb-1\">Début</div>
                                <div class=\"text-white font-medium\">
                                    ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateDebut", [], "any", false, false, false, 67), "m"), ["01" => "janvier", "02" => "février", "03" => "mars", "04" => "avril", "05" => "mai", "06" => "juin", "07" => "juillet", "08" => "août", "09" => "septembre", "10" => "octobre", "11" => "novembre", "12" => "décembre"]), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateDebut", [], "any", false, false, false, 67), "Y"), "html", null, true);
            yield "
                                    ";
            // line 68
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateFin", [], "any", false, false, false, 68) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateDebut", [], "any", false, false, false, 68), "Y-m-d") == $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateFin", [], "any", false, false, false, 68), "Y-m-d")))) {
                // line 69
                yield "                                        <span class=\"ml-2 text-purple-400\">(1 mois)</span>
                                    ";
            }
            // line 71
            yield "                                </div>
                            </div>
                        ";
        }
        // line 74
        yield "                        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateFin", [], "any", false, false, false, 74) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateFin", [], "any", false, false, false, 74), "Y-m-d") != "0000-00-00")) && ($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateDebut", [], "any", false, false, false, 74), "Y-m-d") != $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateFin", [], "any", false, false, false, 74), "Y-m-d")))) {
            // line 75
            yield "                            <div>
                                <div class=\"text-purple-200 mb-1\">Fin</div>
                                <div class=\"text-white font-medium\">
                                    ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateFin", [], "any", false, false, false, 78), "m"), ["01" => "janvier", "02" => "février", "03" => "mars", "04" => "avril", "05" => "mai", "06" => "juin", "07" => "juillet", "08" => "août", "09" => "septembre", "10" => "octobre", "11" => "novembre", "12" => "décembre"]), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateFin", [], "any", false, false, false, 78), "Y"), "html", null, true);
            yield "
                                </div>
                            </div>
                        ";
        }
        // line 82
        yield "                    </div>
                </div>

                <!-- Action Buttons -->
                <div class=\"space-y-2\">
                    ";
        // line 87
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "lien", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "lien", [], "any", false, false, false, 88), "html", null, true);
            yield "\" target=\"_blank\" 
                           class=\"flex items-center justify-center w-full px-4 py-2 bg-white text-purple-700 font-semibold rounded-lg hover:bg-gray-50 transition duration-300 text-sm\">
                            <i class=\"fas fa-external-link-alt mr-2 text-xs\"></i>
                            Voir le projet
                        </a>
                    ";
        } else {
            // line 94
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "id", [], "any", false, false, false, 94)]), "html", null, true);
            yield "\" 
                           class=\"flex items-center justify-center w-full px-4 py-2 bg-white text-purple-700 font-semibold rounded-lg hover:bg-gray-50 transition duration-300 text-sm\">
                            <i class=\"fas fa-images mr-2 text-xs\"></i>
                            Voir galerie du projet
                        </a>
                    ";
        }
        // line 100
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "githubLinks", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "githubLinks", [], "any", false, false, false, 101), "html", null, true);
            yield "\" target=\"_blank\" 
                           class=\"flex items-center justify-center w-full px-4 py-2 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-purple-700 transition duration-300 text-sm\">
                            <i class=\"fab fa-github mr-2 text-xs\"></i>
                            Code source
                        </a>
                    ";
        }
        // line 107
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "documents", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "documents", [], "any", false, false, false, 108))), "html", null, true);
            yield "\" target=\"_blank\" 
                           class=\"flex items-center justify-center w-full px-4 py-2 bg-blue-500/40 backdrop-blur-sm text-white font-semibold rounded-lg hover:bg-blue-500/50 transition duration-300 border border-blue-400/30 text-sm\">
                            <i class=\"fas fa-file-pdf mr-2 text-xs\"></i>
                            Documentation
                        </a>
                    ";
        }
        // line 114
        yield "                </div>
            </div>

            <!-- Right Column: Site Preview ou Image -->
            <div class=\"lg:col-span-3\">
                ";
        // line 119
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "lien", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield "                    <!-- Aperçu direct du site -->
                    <div class=\"relative overflow-hidden rounded-xl shadow-xl group h-64 lg:h-80 bg-white\">
                        <iframe src=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "lien", [], "any", false, false, false, 122), "html", null, true);
            yield "\" 
                                class=\"w-full h-full border-0 transform scale-75 origin-top-left\"
                                style=\"width: 150.33%; height: 133.33%;\"
                                title=\"Aperçu de ";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 125), "html", null, true);
            yield "\"
                                sandbox=\"allow-scripts allow-same-origin allow-forms\">
                        </iframe>
                        
                        <!-- Overlay avec boutons d'action -->
                        <div class=\"absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300\"></div>
                        
                        <!-- Boutons d'action sur l'aperçu -->
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300\">
                            <div class=\"flex space-x-4\">
                                <a href=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "lien", [], "any", false, false, false, 135), "html", null, true);
            yield "\" target=\"_blank\" 
                                   class=\"w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-300\" 
                                   title=\"Ouvrir le site\">
                                    <i class=\"fas fa-external-link-alt text-sm\"></i>
                                </a>
                                <button onclick=\"toggleFullscreen(this)\" 
                                        class=\"w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors duration-300\" 
                                        title=\"Plein écran\">
                                    <i class=\"fas fa-expand text-sm\"></i>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Badge \"Site en direct\" -->
                        <div class=\"absolute top-4 left-4\">
                            <span class=\"px-3 py-1 bg-green-500/80 backdrop-blur-sm text-white rounded-full text-xs font-medium border border-green-400/50 flex items-center\">
                                <span class=\"w-2 h-2 bg-green-300 rounded-full mr-2 animate-pulse\"></span>
                                Site en direct
                            </span>
                        </div>
                    </div>
                ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 156
($context["projet"] ?? null), "image", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 157
            yield "                    <!-- Image classique si pas de lien -->
                    <div class=\"relative overflow-hidden rounded-xl shadow-xl group h-64 lg:h-80\">
                        <img src=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "image", [], "any", false, false, false, 159))), "html", null, true);
            yield "\" 
                             class=\"w-full h-full object-cover group-hover:scale-105 transition-transform duration-700\" 
                             alt=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 161), "html", null, true);
            yield "\" 
                             onerror=\"this.src='https://via.placeholder.com/800x400/8B5CF6/FFFFFF?text=";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 162)), "html", null, true);
            yield "'\">
                        <div class=\"absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300\"></div>
                        <div class=\"absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300\">
                            <a href=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gallery", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "id", [], "any", false, false, false, 165)]), "html", null, true);
            yield "\" 
                               class=\"w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white/30 transition-colors duration-300\">
                                <i class=\"fas fa-images text-sm text-white\"></i>
                            </a>
                        </div>
                    </div>
                ";
        } else {
            // line 172
            yield "                    <!-- Placeholder si ni lien ni image -->
                    <div class=\"relative overflow-hidden rounded-xl shadow-xl h-64 lg:h-80 bg-gradient-to-br from-purple-500/20 to-violet-600/20 border border-white/20 flex items-center justify-center\">
                        <div class=\"text-center\">
                            <i class=\"fas fa-code text-4xl text-white/50 mb-4\"></i>
                            <p class=\"text-white/70 text-sm\">Aperçu non disponible</p>
                        </div>
                    </div>
                ";
        }
        // line 180
        yield "            </div>
        </div>
    </div>
</section>

<script>
function toggleFullscreen(button) {
    const iframe = button.closest('.relative').querySelector('iframe');
    const container = button.closest('.relative');
    
    if (!document.fullscreenElement) {
        container.requestFullscreen().then(() => {
            iframe.style.transform = 'scale(1)';
            iframe.style.width = '100%';
            iframe.style.height = '100%';
            button.querySelector('i').className = 'fas fa-compress text-sm';
        });
    } else {
        document.exitFullscreen().then(() => {
            iframe.style.transform = 'scale(0.75)';
            iframe.style.width = '133.33%';
            iframe.style.height = '133.33%';
            button.querySelector('i').className = 'fas fa-expand text-sm';
        });
    }
}

// Gérer le changement de plein écran
document.addEventListener('fullscreenchange', function() {
    if (!document.fullscreenElement) {
        const iframes = document.querySelectorAll('iframe');
        iframes.forEach(iframe => {
            iframe.style.transform = 'scale(0.75)';
            iframe.style.width = '133.33%';
            iframe.style.height = '133.33%';
        });
        const buttons = document.querySelectorAll('button[onclick*=\"toggleFullscreen\"] i');
        buttons.forEach(icon => {
            icon.className = 'fas fa-expand text-sm';
        });
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
        return "projects/show.html.twig";
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
        return array (  367 => 180,  357 => 172,  347 => 165,  341 => 162,  337 => 161,  332 => 159,  328 => 157,  326 => 156,  302 => 135,  289 => 125,  283 => 122,  279 => 120,  277 => 119,  270 => 114,  260 => 108,  257 => 107,  247 => 101,  244 => 100,  234 => 94,  224 => 88,  222 => 87,  215 => 82,  206 => 78,  201 => 75,  198 => 74,  193 => 71,  189 => 69,  187 => 68,  181 => 67,  176 => 64,  174 => 63,  165 => 56,  160 => 53,  151 => 50,  148 => 49,  144 => 48,  137 => 43,  135 => 42,  127 => 37,  123 => 35,  117 => 32,  114 => 31,  111 => 30,  105 => 27,  102 => 26,  100 => 25,  96 => 24,  78 => 11,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "projects/show.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/projects/show.html.twig");
    }
}
