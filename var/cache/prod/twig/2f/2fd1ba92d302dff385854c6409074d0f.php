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

/* projects/gallery.html.twig */
class __TwigTemplate_fa83d5a619a85d9b6af197beeda8e657 extends Template
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
        yield "Galerie - ";
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
        yield "<!-- Gallery Hero -->
<section class=\"bg-gradient-to-br from-purple-600 via-purple-700 to-violet-800 text-white py-8\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <!-- Header Navigation -->
        <div class=\"flex items-center justify-between mb-6\">
            <div class=\"flex items-center space-x-4\">
                <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" 
                   class=\"inline-flex items-center text-purple-200 hover:text-white transition duration-300 group\">
                    <i class=\"fas fa-arrow-left mr-2 group-hover:-translate-x-1 transition-transform\"></i>
                    Retour au projet
                </a>
                <span class=\"text-purple-200\">•</span>
                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        yield "\" 
                   class=\"inline-flex items-center text-purple-200 hover:text-white transition duration-300\">
                    Tous les projets
                </a>
            </div>
            <div class=\"flex items-center space-x-3\">
                ";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "typeProjet", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "                    <span class=\"px-3 py-1 bg-white/20 backdrop-blur-sm text-white rounded-full text-xs font-medium border border-white/30\">
                        ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "typeProjet", [], "any", false, false, false, 26), "html", null, true);
            yield "
                    </span>
                ";
        }
        // line 29
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "etat", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "                    <span class=\"px-3 py-1 bg-green-500/30 backdrop-blur-sm text-white rounded-full text-xs font-medium border border-green-400/30\">
                        ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "etat", [], "any", false, false, false, 31), "html", null, true);
            yield "
                    </span>
                ";
        }
        // line 34
        yield "            </div>
        </div>

        <!-- Gallery Header -->
        <div class=\"text-center mb-8\">
            <h1 class=\"text-3xl lg:text-4xl font-light mb-2\">Galerie - ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 39), "html", null, true);
        yield "</h1>
            <p class=\"text-purple-200 text-sm\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "projetImages", [], "any", false, false, false, 40)) + 1), "html", null, true);
        yield " image";
        yield ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "projetImages", [], "any", false, false, false, 40)) + 1) > 1)) ? ("s") : (""));
        yield " disponible";
        yield ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "projetImages", [], "any", false, false, false, 40)) + 1) > 1)) ? ("s") : (""));
        yield "</p>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class=\"py-8 bg-gray-50\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
            <!-- Image principale du projet -->
            ";
        // line 50
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "image", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                <div class=\"group cursor-pointer gallery-item\" 
                     data-image=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "image", [], "any", false, false, false, 52))), "html", null, true);
            yield "\" 
                     data-caption=\"Image principale - ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 53), "html", null, true);
            yield "\">
                    <div class=\"relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300\">
                        <img src=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "image", [], "any", false, false, false, 55))), "html", null, true);
            yield "\" 
                             class=\"w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300\" 
                             alt=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 57), "html", null, true);
            yield " - Image principale\">
                        <div class=\"absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300\"></div>
                        <div class=\"absolute bottom-4 left-4 right-4\">
                            <div class=\"bg-white/90 backdrop-blur-sm rounded-lg p-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300\">
                                <h3 class=\"font-semibold text-gray-900 text-sm\">Image principale</h3>
                                <p class=\"text-gray-600 text-xs\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 62), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        <div class=\"absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300\">
                            <div class=\"w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center\">
                                <i class=\"fas fa-expand text-white text-xs\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 73
        yield "
            <!-- Images supplémentaires du projet -->
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "projetImages", [], "any", false, false, false, 75));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["projetImage"]) {
            // line 76
            yield "                <div class=\"group cursor-pointer gallery-item\" 
                     data-image=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["projetImage"], "imagePath", [], "any", false, false, false, 77)), "html", null, true);
            yield "\" 
                     data-caption=\"Image ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 78), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 78), "html", null, true);
            yield "\">
                    <div class=\"relative overflow-hidden rounded-xl shadow-lg hover:shadow-xl transition-all duration-300\">
                        <img src=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["projetImage"], "imagePath", [], "any", false, false, false, 80))), "html", null, true);
            yield "\" 
                             class=\"w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300\" 
                             alt=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 82), "html", null, true);
            yield " - Image ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 82), "html", null, true);
            yield "\">
                        <div class=\"absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300\"></div>
                        <div class=\"absolute bottom-4 left-4 right-4\">
                            <div class=\"bg-white/90 backdrop-blur-sm rounded-lg p-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300\">
                                <h3 class=\"font-semibold text-gray-900 text-sm\">Image ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 86), "html", null, true);
            yield "</h3>
                                <p class=\"text-gray-600 text-xs\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 87), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        <div class=\"absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300\">
                            <div class=\"w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center\">
                                <i class=\"fas fa-expand text-white text-xs\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['projetImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield "
            <!-- Message si pas d'images supplémentaires -->
            ";
        // line 100
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "projetImages", [], "any", false, false, false, 100)) == 0) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "image", [], "any", false, false, false, 100))) {
            // line 101
            yield "                <div class=\"col-span-full text-center py-12\">
                    <i class=\"fas fa-images text-gray-400 text-4xl mb-4\"></i>
                    <h3 class=\"text-lg font-medium text-gray-900 mb-2\">Aucune image disponible</h3>
                    <p class=\"text-gray-500\">Ce projet n'a pas encore d'images dans sa galerie.</p>
                </div>
            ";
        }
        // line 107
        yield "        </div>
    </div>
</section>

<!-- Modal pour affichage plein écran -->
<div id=\"imageModal\" class=\"fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4\">
    <div class=\"relative max-w-7xl max-h-full\">
        <button onclick=\"closeModal()\" class=\"absolute top-4 right-4 text-white hover:text-gray-300 transition-colors z-10\">
            <i class=\"fas fa-times text-2xl\"></i>
        </button>
    <img id=\"modalImage\" src=\"\" alt=\"\" class=\"max-w-full max-h-[90vh] object-contain rounded-lg shadow-2xl\">
        <div id=\"modalCaption\" class=\"absolute bottom-4 left-4 right-4 text-center\">
            <div class=\"bg-black/50 backdrop-blur-sm rounded-lg p-3\">
                <p class=\"text-white font-medium\"></p>
            </div>
        </div>
    </div>
</div>

<script>
function handleImageError(img, text) {
    img.src = 'https://via.placeholder.com/400x300/8B5CF6/FFFFFF?text=' + encodeURIComponent(text);
}

function openModal(imageSrc, caption) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const modalCaption = document.getElementById('modalCaption').querySelector('p');
    modalImage.src = imageSrc.startsWith('/assets/') ? imageSrc : '/assets/' + imageSrc.replace(/^assets\\//, '');
    modalImage.alt = caption;
    modalCaption.textContent = caption;
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = 'auto';
}

// Empêcher la fermeture de la modal au clic sur le contenu
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('imageModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
});

// Initialiser les événements après le chargement du DOM
document.addEventListener('DOMContentLoaded', function() {
    // Gestion des clics sur les images de la galerie
    document.querySelectorAll('.gallery-item').forEach(function(item) {
        item.addEventListener('click', function() {
            const imageSrc = this.getAttribute('data-image');
            const caption = this.getAttribute('data-caption');
            openModal(imageSrc, caption);
        });
    });

    // Gestion des erreurs d'images
    document.querySelectorAll('.gallery-item img').forEach(function(img) {
        img.addEventListener('error', function() {
            const altText = this.getAttribute('alt');
            handleImageError(this, altText);
        });
    });
});

// Fermer avec Escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
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
        return "projects/gallery.html.twig";
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
        return array (  282 => 107,  274 => 101,  272 => 100,  268 => 98,  243 => 87,  239 => 86,  230 => 82,  225 => 80,  218 => 78,  214 => 77,  211 => 76,  194 => 75,  190 => 73,  176 => 62,  168 => 57,  163 => 55,  158 => 53,  154 => 52,  151 => 51,  149 => 50,  132 => 40,  128 => 39,  121 => 34,  115 => 31,  112 => 30,  109 => 29,  103 => 26,  100 => 25,  98 => 24,  89 => 18,  80 => 12,  72 => 6,  65 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "projects/gallery.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/projects/gallery.html.twig");
    }
}
