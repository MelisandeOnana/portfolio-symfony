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

/* admin/images/gallery.html.twig */
class __TwigTemplate_d9492dfe70e092833f58e7774257c09d extends Template
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
        yield "Galerie d’images du projet";
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
        yield "<div class=\"max-w-4xl mx-auto px-4 py-8\">
    <h1 class=\"text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-violet-600 mb-6\">Galerie d’images pour : ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>

    <form method=\"post\" enctype=\"multipart/form-data\" class=\"mb-8 flex flex-col md:flex-row items-center gap-4 bg-purple-50 p-6 rounded-xl shadow\">
        <label class=\"block text-purple-700 font-semibold\">Ajouter une image au projet :</label>
        <input type=\"file\" name=\"image\" accept=\"image/*\" required class=\"block w-full md:w-auto px-4 py-2 border border-purple-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-400\" />
        <button type=\"submit\" class=\"px-6 py-2 bg-gradient-to-r from-purple-500 to-pink-600 text-white font-bold rounded-full shadow hover:from-purple-600 hover:to-pink-700 transition-all duration-300\">Uploader</button>
    </form>
    <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 18
            yield "            <div class=\"bg-white border-2 border-pink-100 rounded-2xl shadow-xl p-6 flex flex-col justify-between hover:shadow-2xl transition-all duration-500 hover:-translate-y-1\">
                <img src=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "imagePath", [], "any", false, false, false, 19))), "html", null, true);
            yield "\" alt=\"Image projet\" class=\"w-full h-40 object-cover rounded-lg mb-4 border-2 border-pink-200\" />
                <p class=\"text-gray-600 mb-2\">Fichier : ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "imagePath", [], "any", false, false, false, 20), "html", null, true);
            yield "</p>
                ";
            // line 21
            if ((null === CoreExtension::getAttribute($this->env, $this->source, $context["image"], "projet", [], "any", false, false, false, 21))) {
                // line 22
                yield "                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_images_associer", ["imageId" => CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 22), "projetId" => CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "id", [], "any", false, false, false, 22)]), "html", null, true);
                yield "\">
                        <button type=\"submit\" class=\"w-full px-4 py-2 bg-gradient-to-r from-purple-500 to-pink-600 text-white rounded-full font-semibold shadow hover:from-purple-600 hover:to-pink-700 transition-all duration-300\">Associer à ce projet</button>
                    </form>
                ";
            } else {
                // line 26
                yield "                    <span class=\"inline-block px-4 py-2 bg-gradient-to-r from-green-400 to-green-600 text-white rounded-full font-semibold shadow\">Déjà associé</span>
                ";
            }
            // line 28
            yield "            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 29
        if (!$context['_iterated']) {
            // line 30
            yield "            <div class=\"col-span-full text-center text-purple-400 py-12 text-lg font-semibold\">Aucune image disponible.</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "    </div>
    <div class=\"mt-8 flex justify-center\">
        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_list");
        yield "\" class=\"px-6 py-3 bg-gradient-to-r from-violet-500 to-purple-600 text-white font-semibold rounded-full shadow hover:from-violet-600 hover:to-purple-700 transition-all duration-300\">Retour aux projets</a>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/images/gallery.html.twig";
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
        return array (  143 => 34,  139 => 32,  132 => 30,  130 => 29,  125 => 28,  121 => 26,  113 => 22,  111 => 21,  107 => 20,  103 => 19,  100 => 18,  95 => 17,  84 => 9,  81 => 8,  74 => 7,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/images/gallery.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/admin/images/gallery.html.twig");
    }
}
