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

/* admin/projects/create.html.twig */
class __TwigTemplate_21aeedbf514c5e4a896b8e18fa62feaa extends Template
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
        yield "Nouveau projet - Administration";
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
        yield "<section class=\"bg-gradient-to-r from-purple-700 via-purple-500 to-pink-500 text-white py-16 shadow-lg relative overflow-hidden\">
    <div class=\"absolute inset-0 opacity-10 pointer-events-none\">
        <div class=\"absolute top-10 left-10 w-32 h-32 bg-white rounded-full animate-pulse\"></div>
        <div class=\"absolute top-40 right-20 w-24 h-24 bg-white rounded-full animate-bounce\"></div>
        <div class=\"absolute bottom-20 left-1/4 w-16 h-16 bg-white rounded-full animate-ping\"></div>
        <div class=\"absolute bottom-40 right-1/3 w-12 h-12 bg-white rounded-full animate-pulse\"></div>
    </div>
    <div class=\"relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <h1 class=\"text-5xl font-extrabold mb-2 tracking-tight drop-shadow-lg\">Nouveau projet</h1>
        <p class=\"text-purple-100 text-lg\">Ajoutez un nouveau projet à votre portfolio</p>
    </div>
</section>

<section class=\"py-12 bg-gray-50\">
    <div class=\"max-w-4xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"bg-white rounded-2xl shadow-2xl p-10 border border-gray-100\">
            ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-8"]]);
        yield "
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        yield "
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
                    <div>
                        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 27), 'label');
        yield "
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 28), 'widget');
        yield "
                        ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 29), 'errors');
        yield "
                    </div>
                    <div>
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typeProjet", [], "any", false, false, false, 32), 'label');
        yield "
                        ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typeProjet", [], "any", false, false, false, 33), 'widget');
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "typeProjet", [], "any", false, false, false, 34), 'errors');
        yield "
                    </div>
                </div>
                <div>
                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 38), 'label');
        yield "
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 39), 'widget');
        yield "
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 40), 'errors');
        yield "
                </div>
                <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
                    <div>
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateDebut", [], "any", false, false, false, 44), 'label');
        yield "
                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateDebut", [], "any", false, false, false, 45), 'widget', ["attr" => ["id" => "dateDebut"]]);
        yield "
                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateDebut", [], "any", false, false, false, 46), 'errors');
        yield "
                    </div>
                    <div>
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateFin", [], "any", false, false, false, 49), 'label');
        yield "
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateFin", [], "any", false, false, false, 50), 'widget', ["attr" => ["id" => "dateFin"]]);
        yield "
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dateFin", [], "any", false, false, false, 51), 'errors');
        yield "
                    </div>
                    <!-- Champ durée supprimé -->
                </div>
                <!-- Script durée supprimé -->
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
                    <div>
                        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etat", [], "any", false, false, false, 58), 'label');
        yield "
                        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etat", [], "any", false, false, false, 59), 'widget');
        yield "
                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "etat", [], "any", false, false, false, 60), 'errors');
        yield "
                    </div>
                    <div>
                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 63), 'label');
        yield "
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 64), 'widget');
        yield "
                        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 65), 'errors');
        yield "
                    </div>
                </div>
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
                    <div>
                        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lien", [], "any", false, false, false, 70), 'label');
        yield "
                        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lien", [], "any", false, false, false, 71), 'widget');
        yield "
                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lien", [], "any", false, false, false, 72), 'errors');
        yield "
                    </div>
                    <div>
                        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "githubLinks", [], "any", false, false, false, 75), 'label');
        yield "
                        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "githubLinks", [], "any", false, false, false, 76), 'widget');
        yield "
                        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "githubLinks", [], "any", false, false, false, 77), 'errors');
        yield "
                    </div>
                </div>
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
                    <div>
                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 82), 'label');
        yield "
                        ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 83), 'widget');
        yield "
                        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image", [], "any", false, false, false, 84), 'errors');
        yield "
                    </div>
                    <div>
                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "documents", [], "any", false, false, false, 87), 'label');
        yield "
                        ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "documents", [], "any", false, false, false, 88), 'widget');
        yield "
                        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "documents", [], "any", false, false, false, 89), 'errors');
        yield "
                    </div>
                </div>
                <div>
                    ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "technologies", [], "any", false, false, false, 93), 'label');
        yield "
                    <div class=\"grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 p-4 border border-gray-200 rounded-xl max-h-64 overflow-y-auto bg-gray-50\">
                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "technologies", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 96
            yield "                            <label class=\"flex items-center space-x-2 cursor-pointer hover:bg-purple-50 rounded px-2 py-1 transition\">
                                ";
            // line 97
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "rounded border-gray-300 text-purple-600 focus:ring-purple-500"]]);
            yield "
                                <span class=\"text-sm text-gray-700\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 98), "label", [], "any", false, false, false, 98), "html", null, true);
            yield "</span>
                            </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "                    </div>
                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "technologies", [], "any", false, false, false, 102), 'errors');
        yield "
                </div>
                <div class=\"flex justify-between items-center pt-8 border-t border-gray-200\">
                    <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_project_list");
        yield "\" 
                       class=\"inline-flex items-center px-6 py-3 bg-gray-600 text-white rounded-xl hover:bg-gray-700 transition-colors duration-300 shadow\">
                        <i class=\"fas fa-arrow-left mr-2\"></i>Annuler
                    </a>
                    ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "save", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "inline-flex items-center px-8 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-xl hover:from-purple-700 hover:to-pink-700 transition-all duration-300 shadow-lg font-semibold text-lg"]]);
        yield "
                </div>
            ";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
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
        return "admin/projects/create.html.twig";
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
        return array (  320 => 111,  315 => 109,  308 => 105,  302 => 102,  299 => 101,  290 => 98,  286 => 97,  283 => 96,  279 => 95,  274 => 93,  267 => 89,  263 => 88,  259 => 87,  253 => 84,  249 => 83,  245 => 82,  237 => 77,  233 => 76,  229 => 75,  223 => 72,  219 => 71,  215 => 70,  207 => 65,  203 => 64,  199 => 63,  193 => 60,  189 => 59,  185 => 58,  175 => 51,  171 => 50,  167 => 49,  161 => 46,  157 => 45,  153 => 44,  146 => 40,  142 => 39,  138 => 38,  131 => 34,  127 => 33,  123 => 32,  117 => 29,  113 => 28,  109 => 27,  103 => 24,  99 => 23,  81 => 7,  74 => 6,  64 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/projects/create.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/admin/projects/create.html.twig");
    }
}
