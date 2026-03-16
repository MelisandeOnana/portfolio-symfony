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

/* admin/profile/edit.html.twig */
class __TwigTemplate_fd5d2a3a19a3e73310e7cba808e199c6 extends Template
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
        yield "Édition du profil";
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
        yield "<section class=\"max-w-xl mx-auto mt-12 p-8 bg-white rounded-2xl shadow-lg\">
    <h2 class=\"text-2xl font-bold mb-6 text-indigo-700\">Modifier mon profil</h2>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
        <div class=\"space-y-4\">
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "prenom", [], "any", false, false, false, 11), 'row');
        yield "
            ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 12), 'row');
        yield "
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 13), 'row');
        yield "
            
            <div class=\"bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4\">
                <div class=\"flex items-center\">
                    <svg class=\"w-4 h-4 text-blue-600 mr-2\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                        <path fill-rule=\"evenodd\" d=\"M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z\" clip-rule=\"evenodd\"></path>
                    </svg>
                    <span class=\"text-blue-800 text-sm font-medium\">
                        Laissez les champs mot de passe vides si vous ne souhaitez pas le modifier.
                    </span>
                </div>
            </div>
            
            <div class=\"space-y-4\">
                <div class=\"relative\">
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 28), "first", [], "any", false, false, false, 28), 'label');
        yield "
                    <div class=\"relative flex items-center w-full\">
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 30), "first", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "w-full h-12 pr-12 pl-4 py-3 border border-purple-400 text-purple-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 bg-purple-50 placeholder-purple-300", "autocomplete" => "new-password"]]);
        // line 35
        yield "
                        <button
                            type=\"button\"
                            class=\"absolute right-4 top-1/2 -translate-y-1/2 px-2 focus:outline-none toggle-password\"
                            data-target=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 39), "first", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
        yield "\"
                            aria-label=\"Afficher/Masquer le mot de passe\"
                            tabindex=\"-1\"
                            style=\"background:transparent;border:none;\"
                        >
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#bbb\" stroke=\"#bbb\" class=\"w-5 h-5\" viewBox=\"0 0 128 128\">
                                <path d=\"M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z\" data-original=\"#000000\"></path>
                            </svg>
                        </button>
                    </div>
                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 49), "first", [], "any", false, false, false, 49), 'errors');
        yield "
                </div>
                <div class=\"relative\">
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 52), "second", [], "any", false, false, false, 52), 'label');
        yield "
                    <div class=\"relative flex items-center w-full\">
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 54), "second", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "w-full h-12 pr-12 pl-4 py-3 border border-purple-400 text-purple-700 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 bg-purple-50 placeholder-purple-300", "autocomplete" => "new-password"]]);
        // line 59
        yield "
                        <button
                            type=\"button\"
                            class=\"absolute right-4 top-1/2 -translate-y-1/2 px-2 focus:outline-none toggle-password\"
                            data-target=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 63), "second", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
        yield "\"
                            aria-label=\"Afficher/Masquer le mot de passe\"
                            tabindex=\"-1\"
                            style=\"background:transparent;border:none;\"
                        >
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#bbb\" stroke=\"#bbb\" class=\"w-5 h-5\" viewBox=\"0 0 128 128\">
                                <path d=\"M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z\" data-original=\"#000000\"></path>
                            </svg>
                        </button>
                    </div>
                    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 73), "second", [], "any", false, false, false, 73), 'errors');
        yield "
                </div>
            </div>
        </div>
        <button type=\"submit\" class=\"mt-6 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-xl font-semibold transition-all duration-300\">Enregistrer</button>
        <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
        yield "\" class=\"inline-block mt-6 bg-gray-600 hover:bg-gray-700 text-white px-6 py-2 rounded-xl font-semibold transition-all duration-300 ml-4 text-decoration-none\">Retour</a>
    ";
        // line 79
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.toggle-password').forEach(function(btn) {
            btn.addEventListener('click', function () {
                const inputId = btn.getAttribute('data-target');
                const input = document.getElementById(inputId);
                if (input) {
                    const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                    input.setAttribute('type', type);
                }
            });
        });
    });
    </script>
</section>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/profile/edit.html.twig";
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
        return array (  176 => 79,  172 => 78,  164 => 73,  151 => 63,  145 => 59,  143 => 54,  138 => 52,  132 => 49,  119 => 39,  113 => 35,  111 => 30,  106 => 28,  88 => 13,  84 => 12,  80 => 11,  75 => 9,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/profile/edit.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/admin/profile/edit.html.twig");
    }
}
