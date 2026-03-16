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

/* security/register.html.twig */
class __TwigTemplate_209a4d287e2240c46230828e58028149 extends Template
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
        yield "Créer un utilisateur";
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
        yield "<div class=\"min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-900 via-purple-800 to-violet-900 py-12 px-4 sm:px-6 lg:px-8\">
    <div class=\"max-w-md w-full space-y-8 relative z-10\">
        <h2 class=\"mt-6 text-center text-3xl font-bold text-white\">Créer un utilisateur</h2>
        <div class=\"bg-white/80 backdrop-blur-md shadow-xl rounded-2xl px-8 py-8 mt-8 border border-gray-200\">
            ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
                ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 11), 'row');
        yield "
                ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 12), 'row');
        yield "
                ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 13), 'row');
        yield "
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "motDePasse", [], "any", false, false, false, 14), 'row');
        yield "
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "roles", [], "any", false, false, false, 15), 'row');
        yield "
                <button type=\"submit\" class=\"bg-violet-700 hover:bg-violet-800 text-white text-base font-semibold px-4 py-3 rounded-lg w-full mt-2 shadow transition-all duration-200\">Créer l'utilisateur</button>
            ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            ";
        // line 18
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "                <div class=\"mt-4 text-green-700 bg-green-100 border border-green-300 rounded-lg px-4 py-2 text-sm font-medium shadow\">Utilisateur créé avec succès !</div>
            ";
        }
        // line 21
        yield "        </div>
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
        return "security/register.html.twig";
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
        return array (  111 => 21,  107 => 19,  105 => 18,  101 => 17,  96 => 15,  92 => 14,  88 => 13,  84 => 12,  80 => 11,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/register.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/security/register.html.twig");
    }
}
