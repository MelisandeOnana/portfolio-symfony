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

/* admin/technologies/create.html.twig */
class __TwigTemplate_70a960ce72c830c294ff56d72d318e8b extends Template
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
        yield "Nouvelle technologie - Administration";
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
        yield "<section class=\"bg-gradient-to-r from-purple-500 to-violet-600 text-white py-16\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <h1 class=\"text-4xl font-bold mb-2\">Ajouter une technologie</h1>
        <p class=\"text-purple-100\">Crée une nouvelle technologie pour ton portfolio.</p>
    </div>
</section>

<section class=\"py-12 bg-white\">
    <div class=\"max-w-2xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"bg-gradient-to-br from-purple-50 to-white rounded-xl shadow-lg p-8 border border-purple-100\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "                <div class=\"mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg\">
                    <i class=\"fas fa-check-circle mr-2\"></i>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            yield "                <div class=\"mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg\">
                    <i class=\"fas fa-exclamation-circle mr-2\"></i>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["info"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "                <div class=\"mb-6 p-4 bg-purple-100 border border-purple-400 text-purple-700 rounded-lg\">
                    <i class=\"fas fa-info-circle mr-2\"></i>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "
            <form method=\"post\" enctype=\"multipart/form-data\" class=\"space-y-6\">
                <div>
                    <label for=\"nom\" class=\"block text-sm font-medium text-purple-700 mb-2\">Nom de la technologie *</label>
                    <input type=\"text\" id=\"nom\" name=\"nom\" required
                           class=\"w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-purple-50 text-purple-900 placeholder-purple-300\"
                           placeholder=\"Ex: PHP, React, MySQL...\">
                </div>

                <div>
                    <label for=\"description\" class=\"block text-sm font-medium text-purple-700 mb-2\">Description *</label>
                    <textarea id=\"description\" name=\"description\" rows=\"4\" required
                              class=\"w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-purple-50 text-purple-900 placeholder-purple-300\"
                              placeholder=\"Décrivez vos compétences dans cette technologie, vos expériences, projets réalisés...\"></textarea>
                </div>

                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        <label for=\"dateDebut\" class=\"block text-sm font-medium text-purple-700 mb-2\">Date de début d'apprentissage *</label>
                        <input type=\"date\" id=\"dateDebut\" name=\"dateDebut\" required
                               class=\"w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-purple-50 text-purple-900 placeholder-purple-300\">
                    </div>
                    <div>
                        <label for=\"statut\" class=\"block text-sm font-medium text-purple-700 mb-2\">Niveau de maîtrise *</label>
                        <select id=\"statut\" name=\"statut\"
                                class=\"w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-purple-50 text-purple-900\">
                            <option value=\"\">Aucun niveau</option>
                            <option value=\"en_cours\">En cours d'apprentissage</option>
                            <option value=\"termine\">Maîtrisé</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class=\"block text-sm font-medium text-purple-700 mb-2\">Certifications PDF</label>
                    <div id=\"certifications-container\">
                        <div class=\"certification-item mb-4\">
                            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
                                <div class=\"md:col-span-1\">
                                    <input type=\"text\" name=\"certification_titles[]\" 
                                           class=\"w-full px-3 py-2 border border-purple-200 rounded-md focus:ring-2 focus:ring-purple-500 bg-purple-50 text-purple-900 placeholder-purple-300\"
                                           placeholder=\"Titre (optionnel - nom du fichier par défaut)\">
                                </div>
                                <div class=\"md:col-span-2\">
                                    <input type=\"file\" name=\"certification_files[]\" accept=\".pdf\"
                                           class=\"w-full px-3 py-2 border border-purple-200 rounded-md file:mr-4 file:py-1 file:px-2 file:rounded file:border-0 file:text-sm file:bg-purple-50 file:text-purple-700\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type=\"button\" id=\"add-certification\" 
                            class=\"mt-2 px-4 py-2 bg-purple-100 text-purple-700 rounded-md hover:bg-purple-200 transition-colors\">
                        <i class=\"fas fa-plus mr-2\"></i>Ajouter une certification
                    </button>
                    <p class=\"mt-2 text-sm text-purple-400\">
                        <i class=\"fas fa-info-circle mr-1\"></i>
                        Seuls les fichiers PDF sont acceptés (max 5MB par fichier). Si aucun titre n'est saisi, le nom du fichier sera utilisé automatiquement.
                    </p>
                </div>

                <div class=\"flex justify-between items-center pt-6 border-t border-purple-100\">
                                        <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_technology_list");
        yield "\" 
                       class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-400 to-violet-500 text-white rounded-lg hover:from-purple-500 hover:to-violet-600 transition-colors duration-300\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>Annuler
                    </a>
                    <button type=\"submit\" 
                            class=\"inline-flex items-center px-8 py-3 bg-gradient-to-r from-purple-600 to-violet-600 text-white rounded-lg hover:from-purple-700 hover:to-violet-700 transition-colors duration-300\">
                        <i class=\"fas fa-save mr-2\"></i>Créer
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    document.getElementById('add-certification').addEventListener('click', function() {
        const container = document.getElementById('certifications-container');
        const newCertification = document.createElement('div');
        newCertification.classList.add('certification-item', 'mb-4');
        newCertification.innerHTML = `
            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
                <div class=\"md:col-span-1\">
                    <input type=\"text\" name=\"certification_titles[]\" 
                           class=\"w-full px-3 py-2 border border-purple-200 rounded-md focus:ring-2 focus:ring-purple-500 bg-purple-50 text-purple-900 placeholder-purple-300\"
                           placeholder=\"Titre (optionnel - nom du fichier par défaut)\">
                </div>
                <div class=\"md:col-span-2\">
                    <input type=\"file\" name=\"certification_files[]\" accept=\".pdf\"
                           class=\"w-full px-3 py-2 border border-purple-200 rounded-md file:mr-4 file:py-1 file:px-2 file:rounded file:border-0 file:text-sm file:bg-purple-50 file:text-purple-700\">
                </div>
            </div>
        `;
        container.appendChild(newCertification);
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
        return "admin/technologies/create.html.twig";
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
        return array (  206 => 94,  143 => 33,  134 => 30,  131 => 29,  126 => 28,  117 => 25,  114 => 24,  109 => 23,  100 => 20,  97 => 19,  93 => 18,  81 => 8,  74 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/technologies/create.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/admin/technologies/create.html.twig");
    }
}
