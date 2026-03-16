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

/* admin/technologies/edit.html.twig */
class __TwigTemplate_7a6147f8ca2d3ec8cca1a0364bebec0a extends Template
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
        yield "Modifier ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["technologie"] ?? null), "nom", [], "any", false, false, false, 3), "html", null, true);
        yield " - Administration";
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
        <h1 class=\"text-4xl font-bold mb-2\">Modifier la technologie</h1>
        <p class=\"text-purple-100\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["technologie"] ?? null), "nom", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
    </div>
</section>

<section class=\"py-12 bg-white\">
    <div class=\"max-w-2xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"bg-gradient-to-br from-purple-50 to-white rounded-xl shadow-lg p-8 border border-purple-100\">
            ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "class" => "space-y-6"]]);
        yield "

                ";
        // line 21
        yield "                <div>
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-purple-700 mb-2"], "label" => "Nom de la technologie *"]);
        yield "
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-purple-50 text-purple-900 placeholder-purple-300", "placeholder" => "Ex: PHP, React, MySQL..."]]);
        // line 26
        yield "
                </div>

                <div>
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-purple-700 mb-2"], "label" => "Description *"]);
        yield "
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-purple-50 text-purple-900 placeholder-purple-300", "placeholder" => "Décrivez vos compétences dans cette technologie, vos expériences, projets réalisés..."]]);
        // line 34
        yield "
                </div>

                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                    <div>
                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateDebut", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-purple-700 mb-2"], "label" => "Date de début d'apprentissage *"]);
        yield "
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateDebut", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-purple-50 text-purple-900 placeholder-purple-300"]]);
        // line 42
        yield "
                    </div>
                    <div>
                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-purple-700 mb-2"], "label" => "Niveau de maîtrise"]);
        yield "
                        <select id=\"statut\" name=\"statut\" class=\"w-full px-4 py-3 border border-purple-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent bg-purple-50 text-purple-900\">
                            <option value=\"\">Aucun niveau</option>
                            <option value=\"en_cours\" ";
        // line 48
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48) == "en_cours")) {
            yield "selected";
        }
        yield ">En cours d'apprentissage</option>
                            <option value=\"termine\" ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "statut", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "value", [], "any", false, false, false, 49) == "termine")) {
            yield "selected";
        }
        yield ">Maîtrisé</option>
                        </select>
                    </div>
                </div>

                ";
        // line 55
        yield "                <div>
                    <label class=\"block text-sm font-medium text-purple-700 mb-2\">Certifications PDF</label>
                    ";
        // line 57
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["technologie"] ?? null), "certificationsPdf", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "                        <div class=\"mb-4\">
                            <h4 class=\"text-sm font-medium text-purple-700 mb-3\">Certifications actuelles</h4>
                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["technologie"] ?? null), "certificationsPdf", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["key"] => $context["certification"]) {
                // line 61
                yield "                                <div class=\"mb-3 p-4 bg-purple-50 border border-purple-200 rounded-lg\">
                                    <div class=\"flex items-center justify-between\">
                                        <div class=\"flex items-center\">
                                            <i class=\"fas fa-file-pdf text-purple-600 mr-3\"></i>
                                            <div>
                                                <span class=\"text-sm font-medium text-purple-900\">";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "title", [], "any", false, false, false, 66), "html", null, true);
                yield "</span>
                                                <div class=\"text-xs text-purple-400\">
                                                    Ajouté le ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "uploaded_at", [], "any", false, false, false, 68), "d/m/Y à H:i"), "html", null, true);
                yield "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex space-x-2\">
                                            <a href=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["certification"], "filename", [], "any", false, false, false, 73))), "html", null, true);
                yield "\" target=\"_blank\"
                                               class=\"text-purple-600 hover:text-purple-800 text-sm\">
                                                <i class=\"fas fa-external-link-alt mr-1\"></i>Voir
                                            </a>
                                            <label class=\"text-pink-600 hover:text-pink-800 text-sm cursor-pointer\">
                                                <input type=\"checkbox\" name=\"supprimer_certifications[]\" value=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\" class=\"mr-1\">Supprimer
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['certification'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "                        </div>
                    ";
        }
        // line 86
        yield "
                    ";
        // line 88
        yield "                    <div id=\"certifications-container\">
                        <div class=\"certification-item mb-4\">
                            <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4\">
                                <div class=\"md:col-span-1\">
                                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "certification_titles", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-purple-200 rounded-md focus:ring-2 focus:ring-purple-500 bg-purple-50 text-purple-900 placeholder-purple-300", "placeholder" => "Titre (optionnel - nom du fichier par défaut)"]]);
        // line 95
        yield "
                                </div>
                                <div class=\"md:col-span-2\">
                                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "certification_files", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-purple-200 rounded-md file:mr-4 file:py-1 file:px-2 file:rounded file:border-0 file:text-sm file:bg-purple-50 file:text-purple-700"]]);
        // line 100
        yield "
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
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_technology_list");
        yield "\" 
                       class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-400 to-violet-500 text-white rounded-lg hover:from-purple-500 hover:to-violet-600 transition-colors duration-300\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>Annuler
                    </a>
                    <button type=\"submit\" 
                            class=\"inline-flex items-center px-8 py-3 bg-gradient-to-r from-purple-600 to-violet-600 text-white rounded-lg hover:from-purple-700 hover:to-violet-700 transition-colors duration-300\">
                        <i class=\"fas fa-save mr-2\"></i>Sauvegarder
                    </button>
                </div>

            ";
        // line 128
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
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
        return "admin/technologies/edit.html.twig";
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
        return array (  273 => 128,  260 => 118,  240 => 100,  238 => 98,  233 => 95,  231 => 92,  225 => 88,  222 => 86,  218 => 84,  206 => 78,  198 => 73,  190 => 68,  185 => 66,  178 => 61,  174 => 60,  170 => 58,  168 => 57,  164 => 55,  154 => 49,  148 => 48,  142 => 45,  137 => 42,  135 => 40,  131 => 39,  124 => 34,  122 => 31,  118 => 30,  112 => 26,  110 => 23,  106 => 22,  103 => 21,  98 => 18,  88 => 11,  83 => 8,  76 => 7,  66 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/technologies/edit.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/admin/technologies/edit.html.twig");
    }
}
