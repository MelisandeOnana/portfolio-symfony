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

/* pages/about.html.twig */
class __TwigTemplate_637d61193532343905948cfd48ffde81 extends Template
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
<section class=\"hero-gradient text-white py-24 text-center\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <h1 class=\"text-5xl md:text-6xl font-light mb-6\">Mes Compétences</h1>
        <p class=\"text-xl md:text-2xl text-blue-100\">Développement Web Full Stack & Technologies Modernes</p>
    </div>
</section>

<!-- Skills Overview -->
<section class=\"py-16\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"text-center mb-12\">
            <h2 class=\"text-4xl font-light text-gray-800 mb-4\">Domaines d'expertise</h2>
            <div class=\"w-16 h-1 bg-blue-500 mx-auto\"></div>
        </div>
        
        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
            <div class=\"text-center group\">
                <div class=\"mb-6\">
                    <i class=\"fas fa-code text-6xl text-blue-500 group-hover:text-blue-600 transition duration-300\"></i>
                </div>
                <h4 class=\"text-2xl font-semibold text-gray-800 mb-4\">Développement Backend</h4>
                <p class=\"text-gray-600 mb-4\">PHP, Symfony, Laravel, MySQL, Architecture MVC, API REST</p>
                <div class=\"w-full bg-gray-200 rounded-full h-2\">
                    <div class=\"bg-blue-500 h-2 rounded-full\" style=\"width: 85%\"></div>
                </div>
                <small class=\"text-gray-500 mt-2 block\">Niveau avancé</small>
            </div>
            
            <div class=\"text-center group\">
                <div class=\"mb-6\">
                    <i class=\"fas fa-paint-brush text-6xl text-green-500 group-hover:text-green-600 transition duration-300\"></i>
                </div>
                <h4 class=\"text-2xl font-semibold text-gray-800 mb-4\">Développement Frontend</h4>
                <p class=\"text-gray-600 mb-4\">HTML5, CSS3, JavaScript, Bootstrap, Design Responsive, UX/UI</p>
                <div class=\"w-full bg-gray-200 rounded-full h-2\">
                    <div class=\"bg-green-500 h-2 rounded-full\" style=\"width: 90%\"></div>
                </div>
                <small class=\"text-gray-500 mt-2 block\">Niveau expert</small>
            </div>
            
            <div class=\"text-center group\">
                <div class=\"mb-6\">
                    <i class=\"fas fa-tools text-6xl text-yellow-500 group-hover:text-yellow-600 transition duration-300\"></i>
                </div>
                <h4 class=\"text-2xl font-semibold text-gray-800 mb-4\">Outils & Méthodologie</h4>
                <p class=\"text-gray-600 mb-4\">Git/GitHub, VS Code, Figma, Méthodologie Agile, Travail en équipe</p>
                <div class=\"w-full bg-gray-200 rounded-full h-2\">
                    <div class=\"bg-yellow-500 h-2 rounded-full\" style=\"width: 80%\"></div>
                </div>
                <small class=\"text-gray-500 mt-2 block\">Niveau confirmé</small>
            </div>
        </div>
    </div>
</section>

<!-- Technical Skills Details -->
<section class=\"py-16 bg-gray-100\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"text-center mb-12\">
            <h2 class=\"text-4xl font-light text-gray-800 mb-4\">Compétences techniques détaillées</h2>
            <div class=\"w-16 h-1 bg-blue-500 mx-auto\"></div>
        </div>
        
        <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-8\">
            <div class=\"bg-white rounded-lg shadow-lg overflow-hidden card-hover\">
                <div class=\"bg-blue-500 text-white px-6 py-4\">
                    <h5 class=\"text-xl font-semibold flex items-center\">
                        <i class=\"fas fa-server mr-3\"></i>Technologies Backend
                    </h5>
                </div>
                <div class=\"p-6\">
                    <div class=\"space-y-4\">
                        <div>
                            <div class=\"flex justify-between items-center mb-2\">
                                <span class=\"text-gray-700 font-medium\">PHP</span>
                                <span class=\"text-gray-500 text-sm\">90%</span>
                            </div>
                            <div class=\"w-full bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-blue-500 h-2 rounded-full\" style=\"width: 90%\"></div>
                            </div>
                        </div>
                        <div>
                            <div class=\"flex justify-between items-center mb-2\">
                                <span class=\"text-gray-700 font-medium\">Symfony</span>
                                <span class=\"text-gray-500 text-sm\">85%</span>
                            </div>
                            <div class=\"w-full bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-blue-500 h-2 rounded-full\" style=\"width: 85%\"></div>
                            </div>
                        </div>
                        <div>
                            <div class=\"flex justify-between items-center mb-2\">
                                <span class=\"text-gray-700 font-medium\">MySQL</span>
                                <span class=\"text-gray-500 text-sm\">80%</span>
                            </div>
                            <div class=\"w-full bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-blue-500 h-2 rounded-full\" style=\"width: 80%\"></div>
                            </div>
                        </div>
                        <div>
                            <div class=\"flex justify-between items-center mb-2\">
                                <span class=\"text-gray-700 font-medium\">Laravel</span>
                                <span class=\"text-gray-500 text-sm\">75%</span>
                            </div>
                            <div class=\"w-full bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-blue-500 h-2 rounded-full\" style=\"width: 75%\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"bg-white rounded-lg shadow-lg overflow-hidden card-hover\">
                <div class=\"bg-green-500 text-white px-6 py-4\">
                    <h5 class=\"text-xl font-semibold flex items-center\">
                        <i class=\"fas fa-laptop-code mr-3\"></i>Technologies Frontend
                    </h5>
                </div>
                <div class=\"p-6\">
                    <div class=\"space-y-4\">
                        <div>
                            <div class=\"flex justify-between items-center mb-2\">
                                <span class=\"text-gray-700 font-medium\">HTML5 / CSS3</span>
                                <span class=\"text-gray-500 text-sm\">95%</span>
                            </div>
                            <div class=\"w-full bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-green-500 h-2 rounded-full\" style=\"width: 95%\"></div>
                            </div>
                        </div>
                        <div>
                            <div class=\"flex justify-between items-center mb-2\">
                                <span class=\"text-gray-700 font-medium\">JavaScript</span>
                                <span class=\"text-gray-500 text-sm\">80%</span>
                            </div>
                            <div class=\"w-full bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-green-500 h-2 rounded-full\" style=\"width: 80%\"></div>
                            </div>
                        </div>
                        <div>
                            <div class=\"flex justify-between items-center mb-2\">
                                <span class=\"text-gray-700 font-medium\">Bootstrap</span>
                                <span class=\"text-gray-500 text-sm\">90%</span>
                            </div>
                            <div class=\"w-full bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-green-500 h-2 rounded-full\" style=\"width: 90%\"></div>
                            </div>
                        </div>
                        <div>
                            <div class=\"flex justify-between items-center mb-2\">
                                <span class=\"text-gray-700 font-medium\">Twig</span>
                                <span class=\"text-gray-500 text-sm\">85%</span>
                            </div>
                            <div class=\"w-full bg-gray-200 rounded-full h-2\">
                                <div class=\"bg-green-500 h-2 rounded-full\" style=\"width: 85%\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"mt-8\">
            <div class=\"bg-white rounded-lg shadow-lg overflow-hidden card-hover\">
                <div class=\"bg-yellow-500 text-white px-6 py-4\">
                    <h5 class=\"text-xl font-semibold flex items-center\">
                        <i class=\"fas fa-cogs mr-3\"></i>Outils & Environnement de développement
                    </h5>
                </div>
                <div class=\"p-6\">
                    <div class=\"grid grid-cols-2 md:grid-cols-4 gap-4\">
                        <div class=\"text-center\">
                            <span class=\"inline-block bg-gray-500 text-white px-3 py-1 rounded-full text-sm mr-2 mb-2\">Git</span>
                            <span class=\"inline-block bg-gray-500 text-white px-3 py-1 rounded-full text-sm\">GitHub</span>
                        </div>
                        <div class=\"text-center\">
                            <span class=\"inline-block bg-blue-500 text-white px-3 py-1 rounded-full text-sm mr-2 mb-2\">VS Code</span>
                            <span class=\"inline-block bg-blue-500 text-white px-3 py-1 rounded-full text-sm\">PHPStorm</span>
                        </div>
                        <div class=\"text-center\">
                            <span class=\"inline-block bg-green-500 text-white px-3 py-1 rounded-full text-sm mr-2 mb-2\">Composer</span>
                            <span class=\"inline-block bg-green-500 text-white px-3 py-1 rounded-full text-sm\">NPM</span>
                        </div>
                        <div class=\"text-center\">
                            <span class=\"inline-block bg-purple-500 text-white px-3 py-1 rounded-full text-sm mr-2 mb-2\">Docker</span>
                            <span class=\"inline-block bg-purple-500 text-white px-3 py-1 rounded-full text-sm\">XAMPP</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certifications & Learning -->
<section class=\"py-16\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"text-center mb-12\">
            <h2 class=\"text-4xl font-light text-gray-800 mb-4\">Certifications & Apprentissage continu</h2>
            <div class=\"w-16 h-1 bg-blue-500 mx-auto\"></div>
        </div>
        
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
            ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["technologies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
            // line 210
            yield "                <div class=\"bg-white rounded-lg shadow-lg overflow-hidden card-hover\">
                    <div class=\"p-6\">
                        <div class=\"flex justify-between items-start mb-4\">
                            <h5 class=\"text-xl font-semibold text-gray-800\">";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "nom", [], "any", false, false, false, 213), "html", null, true);
            yield "</h5>
                            ";
            // line 214
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "statut", [], "any", false, false, false, 214) == "termine")) {
                // line 215
                yield "                                <span class=\"bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium\">Maîtrisé</span>
                            ";
            } else {
                // line 217
                yield "                                <span class=\"bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium\">En cours</span>
                            ";
            }
            // line 219
            yield "                        </div>
                        
                        <p class=\"text-gray-600 mb-4\">";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "description", [], "any", false, false, false, 221), "html", null, true);
            yield "</p>
                        
                        <div class=\"flex justify-between items-center\">
                            <small class=\"text-gray-500 flex items-center\">
                                <i class=\"fas fa-calendar-alt mr-2\"></i>
                                Depuis ";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "dateDebut", [], "any", false, false, false, 226), "m/Y"), "html", null, true);
            yield "
                            </small>
                            
                            ";
            // line 229
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "certificationPdf", [], "any", false, false, false, 229)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 230
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["tech"], "certificationPdf", [], "any", false, false, false, 230))), "html", null, true);
                yield "\" target=\"_blank\" 
                                   class=\"inline-flex items-center px-3 py-2 border border-blue-300 text-sm font-medium rounded-md text-blue-700 bg-blue-50 hover:bg-blue-100 transition duration-300\">
                                    <i class=\"fas fa-certificate mr-2\"></i>Certification
                                </a>
                            ";
            }
            // line 235
            yield "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        yield "        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class=\"py-16 bg-gray-100\">
    <div class=\"max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center\">
        <h2 class=\"text-4xl font-light text-gray-800 mb-4\">Besoin de ces compétences pour votre projet ?</h2>
        <p class=\"text-xl text-gray-600 mb-8\">Contactez-moi pour discuter de vos besoins techniques.</p>
        <div class=\"space-x-4\">
            <a href=\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\" 
               class=\"inline-flex items-center px-6 py-3 border border-transparent text-lg font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-300 transform hover:scale-105\">
                <i class=\"fas fa-envelope mr-2\"></i>Me contacter
            </a>
            <a href=\"";
        // line 253
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects");
        yield "\" 
               class=\"inline-flex items-center px-6 py-3 border border-blue-300 text-lg font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50 transition duration-300 transform hover:scale-105\">
                <i class=\"fas fa-folder-open mr-2\"></i>Voir mes réalisations
            </a>
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
        return "pages/about.html.twig";
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
        return array (  355 => 253,  348 => 249,  336 => 239,  327 => 235,  318 => 230,  316 => 229,  310 => 226,  302 => 221,  298 => 219,  294 => 217,  290 => 215,  288 => 214,  284 => 213,  279 => 210,  275 => 209,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/about.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/pages/about.html.twig");
    }
}
