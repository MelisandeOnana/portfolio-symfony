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

/* admin/images/index.html.twig */
class __TwigTemplate_1d0a985927dfc608eb1652888e9a678a extends Template
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
        yield "Gestion des images de projet";
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
        <div>
            <h1 class=\"text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-violet-600 mb-2\">Gestion des images de projet</h1>
            <p class=\"text-gray-500 text-lg mb-2\">Consulte, ajoute ou supprime les images associées à tes projets.</p>
            <p class=\"text-purple-400 text-sm\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["images"] ?? null)), "html", null, true);
        yield " image(s) au total</p>
        </div>
        <div class=\"flex gap-2\">
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-violet-500 to-purple-600 text-white font-semibold rounded-full shadow hover:from-violet-600 hover:to-purple-700 transition-all duration-300\">
                <i class=\"fas fa-tachometer-alt\"></i>
                Tableau de bord
            </a>
        <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_create");
        yield "\" class=\"inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-purple-600 to-violet-600 text-white font-semibold rounded-full shadow hover:from-purple-700 hover:to-violet-700 transition-all duration-300\">
                <i class=\"fas fa-plus\"></i>
                Ajouter une image
            </a>
        </div>
    </div>

    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 29
            yield "        <div class=\"bg-white border-2 border-pink-100 rounded-2xl shadow-xl p-6 flex flex-col justify-between hover:shadow-2xl transition-all duration-500 hover:-translate-y-1\">
            <div>
                <img src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "imagePath", [], "any", false, false, false, 31))), "html", null, true);
            yield "\" alt=\"Image galerie\" class=\"w-full h-40 object-cover rounded-lg mb-4 border-2 border-pink-200\" />
                <h2 class=\"text-xl font-bold text-pink-700 mb-2\">";
            // line 32
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["image"], "projet", [], "any", false, false, false, 32))) {
                yield "Image orpheline";
            } else {
                yield "Image associée";
            }
            yield "</h2>
                <p class=\"text-gray-600 mb-2\">Fichier : ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "imagePath", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
                ";
            // line 34
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["image"], "projet", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "                    <p class=\"text-green-600 text-sm\">Projet : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "projet", [], "any", false, false, false, 35), "titre", [], "any", false, false, false, 35), "html", null, true);
                yield "</p>
                ";
            }
            // line 37
            yield "            </div>
            <div class=\"flex gap-2 mt-4\">
                <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "imagePath", [], "any", false, false, false, 39))), "html", null, true);
            yield "\" target=\"_blank\" class=\"flex-1 px-4 py-2 bg-gradient-to-r from-pink-500 to-purple-600 text-white rounded-full hover:from-pink-600 hover:to-purple-700 text-sm text-center font-semibold shadow\">Voir</a>
                <form method=\"post\" action=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_image_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"flex-1\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette image ?');\">
                    <button type=\"submit\" class=\"w-full px-4 py-2 bg-gradient-to-r from-pink-500 to-red-600 text-white rounded-full hover:from-pink-600 hover:to-red-700 text-sm text-center font-semibold shadow transition-all duration-300\">
                        <i class=\"fas fa-trash-alt mr-1\"></i>Supprimer
                    </button>
                </form>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 47
        if (!$context['_iterated']) {
            // line 48
            yield "        <div class=\"col-span-full text-center text-purple-400 py-12 text-lg font-semibold\">Aucune image trouvée.</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "    </div>

    ";
        // line 53
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/images/index.html.twig";
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
        return array (  178 => 53,  174 => 50,  167 => 48,  165 => 47,  153 => 40,  149 => 39,  145 => 37,  139 => 35,  137 => 34,  133 => 33,  125 => 32,  121 => 31,  117 => 29,  112 => 28,  101 => 20,  94 => 16,  88 => 13,  81 => 8,  74 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/images/index.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/admin/images/index.html.twig");
    }
}
