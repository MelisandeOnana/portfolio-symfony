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

/* admin/projects/edit.html.twig */
class __TwigTemplate_e9d03ccc8cb465dcf6af94d193bbe2a2 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - Administration";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<section class=\"relative bg-gradient-to-r from-purple-500 via-violet-600 to-purple-800 text-white py-16 overflow-hidden\">
    <div class=\"absolute inset-0 pointer-events-none\">
        <svg class=\"w-full h-full opacity-20\" viewBox=\"0 0 1440 320\"><defs><linearGradient id=\"grad1\" x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"0%\"><stop offset=\"0%\" style=\"stop-color:#a78bfa;stop-opacity:1\" /><stop offset=\"100%\" style=\"stop-color:#7c3aed;stop-opacity:1\" /></linearGradient></defs><path fill=\"url(#grad1)\" fill-opacity=\"1\" d=\"M0,160L60,165.3C120,171,240,181,360,165.3C480,149,600,107,720,117.3C840,128,960,192,1080,186.7C1200,181,1320,107,1380,69.3L1440,32L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z\"></path></svg>
    </div>
    <div class=\"relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center\">
        <h1 class=\"text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-200 via-white to-violet-300 mb-4 drop-shadow-lg\">Modifier le projet</h1>
        <p class=\"text-lg font-semibold text-white/80 mb-2\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 13), "html", null, true);
        yield "</p>
        <div class=\"inline-block px-6 py-2 bg-white/10 rounded-full text-purple-100 font-medium shadow-lg backdrop-blur-sm\">
            <i class=\"fas fa-pen mr-2\"></i>Administration
        </div>
    </div>
</section>

<section class=\"py-12 bg-gradient-to-br from-purple-100 to-white min-h-screen\">
    <div class=\"max-w-6xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"relative flex flex-col items-center justify-center gap-10\">
            ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "image", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                <div class=\"relative w-80 h-80 flex items-center justify-center mb-10\">
                    <span class=\"absolute inset-0 rounded-full border-8 border-purple-200 animate-spin-slow pointer-events-none\"></span>
                    <img src=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "image", [], "any", false, false, false, 26))), "html", null, true);
            yield "\" alt=\"Image du projet\" class=\"w-64 h-64 object-cover rounded-full shadow-2xl border-4 border-purple-400 transition-transform duration-500 hover:scale-105 hover:shadow-purple-500/50\" style=\"box-shadow:0 0 100px 20px #a78bfa55;\" />
                    <div class=\"absolute inset-0 rounded-full bg-gradient-to-br from-purple-400 via-violet-500 to-purple-800 opacity-40 blur-2xl\"></div>
                </div>
                <div class=\"text-center mb-8\">
                        <h2 class=\"text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-500 via-violet-600 to-purple-800 drop-shadow-lg mb-2\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "titre", [], "any", false, false, false, 30), "html", null, true);
            yield "</h2>
                        <p class=\"text-lg text-purple-700 font-semibold\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "typeProjet", [], "any", false, false, false, 31), "html", null, true);
            yield "
                                ";
            // line 32
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateDebut", [], "any", false, false, false, 32) || CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateFin", [], "any", false, false, false, 32))) {
                // line 33
                yield "                                    •
                                    ";
                // line 34
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateDebut", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateDebut", [], "any", false, false, false, 34), "d F Y"), ["January" => "janvier", "February" => "février", "March" => "mars", "April" => "avril", "May" => "mai", "June" => "juin", "July" => "juillet", "August" => "août", "September" => "septembre", "October" => "octobre", "November" => "novembre", "December" => "décembre"]), "html", null, true);
                }
                // line 35
                yield "                                    ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateFin", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " – ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "dateFin", [], "any", false, false, false, 35), "d F Y"), ["January" => "janvier", "February" => "février", "March" => "mars", "April" => "avril", "May" => "mai", "June" => "juin", "July" => "juillet", "August" => "août", "September" => "septembre", "October" => "octobre", "November" => "novembre", "December" => "décembre"]), "html", null, true);
                }
                // line 36
                yield "                                ";
            }
            // line 37
            yield "                        </p>
                </div>
            ";
        }
        // line 40
        yield "            <div class=\"w-full md:w-2/3 bg-white border-2 border-purple-100 rounded-2xl shadow-xl p-8 animate-fade-in relative z-20\">
                ";
        // line 41
        $context["page"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 41), "query", [], "any", false, false, false, 41), "get", ["page", 1], "method", false, false, false, 41);
        // line 42
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-8"]]);
        yield "
                <input type=\"hidden\" name=\"page\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page"] ?? null), "html", null, true);
        yield "\" />
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
                        <div>
                            <label class=\"flex items-center gap-2 text-purple-700 font-medium mb-2\"><i class=\"fas fa-heading\"></i>";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 47), 'label');
        yield "</label>
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 48), 'widget');
        yield "
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 49), 'errors');
        yield "
                        </div>
                        <div>
                            <label class=\"flex items-center gap-2 text-purple-700 font-medium mb-2\"><i class=\"fas fa-layer-group\"></i>";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typeProjet", [], "any", false, false, false, 52), 'label');
        yield "</label>
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typeProjet", [], "any", false, false, false, 53), 'widget');
        yield "
                            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typeProjet", [], "any", false, false, false, 54), 'errors');
        yield "
                        </div>
                        <div class=\"md:col-span-2\">
                            <label class=\"flex items-center gap-2 text-purple-700 font-medium mb-2\"><i class=\"fas fa-align-left\"></i>";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 57), 'label');
        yield "</label>
                            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 58), 'widget');
        yield "
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 59), 'errors');
        yield "
                        </div>
                        <div class=\"md:col-span-2\">
                                <label class=\"flex items-center gap-2 text-purple-700 font-medium mb-2\"><i class=\"fas fa-image\"></i>Image du projet</label>
                                ";
        // line 63
        if ((array_key_exists("projet", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "image", [], "any", false, false, false, 63))) {
            // line 64
            yield "                                    <div class=\"mb-4\">
                                        <span class=\"block text-xs text-purple-400 mb-1\">Image actuelle :</span>
                                        <img src=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . CoreExtension::getAttribute($this->env, $this->source, ($context["projet"] ?? null), "image", [], "any", false, false, false, 66))), "html", null, true);
            yield "\" alt=\"Image du projet\" class=\"max-h-40 rounded-lg border border-purple-200 shadow\" />
                                        <div class=\"mt-2\">
                                            <label class=\"inline-flex items-center gap-2 text-purple-700 font-medium\">
                                                <input type=\"checkbox\" name=\"delete_image\" value=\"1\" class=\"form-checkbox text-purple-600\" />
                                                <span>Supprimer l'image</span>
                                            </label>
                                        </div>
                                    </div>
                                ";
        }
        // line 75
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 75), 'widget', ["attr" => ["onchange" => "previewImage(event)"]]);
        yield "
                                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 76), 'errors');
        yield "
                                <div id=\"image-preview\" class=\"mt-4\"></div>
                        </div>
                        <div>
                            <label class=\"flex items-center gap-2 text-purple-700 font-medium mb-2\"><i class=\"fas fa-calendar-alt\"></i>";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateDebut", [], "any", false, false, false, 80), 'label');
        yield "</label>
                            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateDebut", [], "any", false, false, false, 81), 'widget');
        yield "
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateDebut", [], "any", false, false, false, 82), 'errors');
        yield "
                        </div>
                        <div>
                            <label class=\"flex items-center gap-2 text-purple-700 font-medium mb-2\"><i class=\"fas fa-calendar-check\"></i>";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateFin", [], "any", false, false, false, 85), 'label');
        yield "</label>
                            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateFin", [], "any", false, false, false, 86), 'widget');
        yield "
                            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateFin", [], "any", false, false, false, 87), 'errors');
        yield "
                        </div>
                        <div>
                            <label class=\"flex items-center gap-2 text-purple-700 font-medium mb-2\"><i class=\"fas fa-tasks\"></i>";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etat", [], "any", false, false, false, 90), 'label');
        yield "</label>
                            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etat", [], "any", false, false, false, 91), 'widget');
        yield "
                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etat", [], "any", false, false, false, 92), 'errors');
        yield "
                        </div>
                        <div>
                            <label class=\"flex items-center gap-2 text-purple-700 font-medium mb-2\"><i class=\"fas fa-eye\"></i>";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 95), 'label');
        yield "</label>
                            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 96), 'widget');
        yield "
                            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 97), 'errors');
        yield "
                        </div>
                        <div>
                            <label class=\"flex items-center gap-2 text-purple-700 font-medium mb-2\"><i class=\"fas fa-link\"></i>";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lien", [], "any", false, false, false, 100), 'label');
        yield "</label>
                            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lien", [], "any", false, false, false, 101), 'widget');
        yield "
                            ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lien", [], "any", false, false, false, 102), 'errors');
        yield "
                        </div>
                        <div>
                            <label class=\"flex items-center gap-2 text-purple-700 font-medium mb-2\"><i class=\"fab fa-github\"></i>";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "githubLinks", [], "any", false, false, false, 105), 'label');
        yield "</label>
                            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "githubLinks", [], "any", false, false, false, 106), 'widget');
        yield "
                            ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "githubLinks", [], "any", false, false, false, 107), 'errors');
        yield "
                        </div>
                        <div>
                            <label class=\"flex items-center gap-2 text-purple-700 font-medium mb-2\"><i class=\"fas fa-file-upload\"></i>";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "documents", [], "any", false, false, false, 110), 'label');
        yield "</label>
                            ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "documents", [], "any", false, false, false, 111), 'widget');
        yield "
                            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "documents", [], "any", false, false, false, 112), 'errors');
        yield "
                        </div>
                    </div>
                    <div>
                        <label class=\"flex items-center gap-2 text-purple-700 font-medium mb-2\"><i class=\"fas fa-microchip\"></i>";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "technologies", [], "any", false, false, false, 116), 'label');
        yield "</label>
                        <div class=\"flex flex-wrap gap-3 p-4 border border-purple-200 rounded-lg max-h-64 overflow-y-auto\">
                            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "technologies", [], "any", false, false, false, 118));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 119
            yield "                                <label class=\"cursor-pointer\">
                                    ";
            // line 120
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "hidden peer"]]);
            yield "
                                    <span class=\"px-4 py-2 rounded-full border border-purple-200 bg-purple-50 text-purple-700 font-medium transition
                                        peer-checked:bg-gradient-to-r peer-checked:from-purple-500 peer-checked:to-violet-500 peer-checked:text-white
                                        hover:bg-purple-100 hover:text-purple-900\">
                                        ";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 124), "label", [], "any", false, false, false, 124), "html", null, true);
            yield "
                                    </span>
                                </label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "                        </div>
                        ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "technologies", [], "any", false, false, false, 129), 'errors');
        yield "
                    </div>
                    <div class=\"flex justify-between items-center pt-8 border-t border-purple-100 mt-8\">
                        <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_list");
        yield "\"
                           class=\"inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-400 to-violet-500 text-white rounded-full hover:from-purple-500 hover:to-violet-600 transition-colors duration-300 font-semibold shadow-lg\">
                            <i class=\"fas fa-arrow-left mr-2\"></i>Annuler
                        </a>
                        ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "inline-flex items-center px-8 py-3 bg-gradient-to-r from-purple-600 to-violet-600 text-white rounded-full hover:from-purple-700 hover:to-violet-700 font-semibold transition-colors duration-300 shadow-lg"]]);
        yield "
                    </div>
                ";
        // line 138
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </div>
        </div>
    </div>
</section>

<script>
function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('image-preview');
    preview.innerHTML = '';
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.innerHTML = '<img src=\"' + e.target.result + '\" class=\"max-h-40 rounded-lg border border-purple-200 shadow mt-2\" />';
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/projects/edit.html.twig";
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
        return array (  390 => 138,  385 => 136,  378 => 132,  372 => 129,  369 => 128,  359 => 124,  352 => 120,  349 => 119,  345 => 118,  340 => 116,  333 => 112,  329 => 111,  325 => 110,  319 => 107,  315 => 106,  311 => 105,  305 => 102,  301 => 101,  297 => 100,  291 => 97,  287 => 96,  283 => 95,  277 => 92,  273 => 91,  269 => 90,  263 => 87,  259 => 86,  255 => 85,  249 => 82,  245 => 81,  241 => 80,  234 => 76,  229 => 75,  217 => 66,  213 => 64,  211 => 63,  204 => 59,  200 => 58,  196 => 57,  190 => 54,  186 => 53,  182 => 52,  176 => 49,  172 => 48,  168 => 47,  162 => 44,  158 => 43,  153 => 42,  151 => 41,  148 => 40,  143 => 37,  140 => 36,  134 => 35,  130 => 34,  127 => 33,  125 => 32,  121 => 31,  117 => 30,  110 => 26,  106 => 24,  104 => 23,  91 => 13,  83 => 7,  76 => 6,  66 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/projects/edit.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/admin/projects/edit.html.twig");
    }
}
