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

/* security/login.html.twig */
class __TwigTemplate_b89430cca748b62b3d3e48076db203a5 extends Template
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
        yield "Connexion - Administration";
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
    <!-- Background animé -->
    <div class=\"absolute inset-0 overflow-hidden\">
        <div class=\"absolute inset-0\">
            <div class=\"absolute top-0 -left-4 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob\"></div>
            <div class=\"absolute top-0 -right-4 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000\"></div>
            <div class=\"absolute -bottom-8 left-20 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000\"></div>
        </div>
    </div>

    <div class=\"max-w-md w-full space-y-8 relative z-10\">
        <div>
            <!-- Logo -->
            <div class=\"flex justify-center\">
                <div class=\"w-20 h-20 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center border border-white/30 shadow-2xl\">
                    <i class=\"fas fa-user-shield text-white text-3xl\"></i>
                </div>
            </div>
            <h2 class=\"mt-6 text-center text-4xl font-bold text-white\">
                Administration
            </h2>
            <p class=\"mt-2 text-center text-lg text-purple-100\">
                Connectez-vous à votre espace d'administration
            </p>
        </div>
        ";
        // line 32
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 33
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 34
                yield "                <div class=\"mb-4 px-4 py-2 rounded-lg shadow text-sm font-medium
                    ";
                // line 35
                if (($context["type"] == "success")) {
                    yield "bg-green-100 text-green-800 border border-green-300";
                }
                // line 36
                yield "                    ";
                if (($context["type"] == "error")) {
                    yield "bg-red-100 text-red-800 border border-red-300";
                }
                // line 37
                yield "                    ";
                if (($context["type"] == "warning")) {
                    yield "bg-yellow-100 text-yellow-800 border border-yellow-300";
                }
                // line 38
                yield "                    ";
                if (($context["type"] == "info")) {
                    yield "bg-blue-100 text-blue-800 border border-blue-300";
                }
                yield "\">
                    ";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "
        <form action=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" method=\"post\" class=\"space-y-6 font-inter text-gray-800 bg-white/80 backdrop-blur-md shadow-xl rounded-2xl px-8 py-8 max-w-md mt-8 mx-auto md:mx-0 border border-gray-200\">
            <div class=\"relative flex flex-col\">
                <label for=\"email\" class=\"block text-sm font-semibold text-gray-700 mb-2\">Adresse Mail</label>
                <input type=\"email\" id=\"email\" name=\"_username\"
                    class=\"pl-12 pr-4 py-3 text-gray-700 w-full h-12 text-base border border-gray-300 focus:border-violet-500 focus:ring-2 focus:ring-violet-200 rounded-lg transition-all duration-200 bg-white placeholder-gray-400 shadow-sm\"
                    pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\"
                    required value=\"";
        // line 50
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, true, false, 50), "get", ["_username"], "method", true, true, false, 50) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 50), "get", ["_username"], "method", false, false, false, 50)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 50), "get", ["_username"], "method", false, false, false, 50), "html", null, true)) : (""));
        yield "\" />
                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#bbb\" stroke=\"#bbb\" class=\"w-5 h-5 absolute left-4 top-10 pointer-events-none\"
                    viewBox=\"0 0 682.667 682.667\">
                    <defs>
                        <clipPath id=\"a\" clipPathUnits=\"userSpaceOnUse\">
                            <path d=\"M0 512h512V0H0Z\" data-original=\"#000000\"></path>
                        </clipPath>
                    </defs>
                    <g clip-path=\"url(#a)\" transform=\"matrix(1.33 0 0 -1.33 0 682.667)\">
                        <path fill=\"none\" stroke-miterlimit=\"10\" stroke-width=\"40\"
                            d=\"M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z\"
                            data-original=\"#000000\"></path>
                        <path
                            d=\"M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z\"
                            data-original=\"#000000\"></path>
                    </g>
                </svg>
            </div>
            <div class=\"relative flex flex-col\">
                <label for=\"password\" class=\"block text-sm font-semibold text-gray-700 mb-2\">Mot de passe</label>
                <div class=\"flex items-center border border-gray-300 rounded-lg w-full h-12 bg-white shadow-sm focus-within:border-violet-500 focus-within:ring-2 focus-within:ring-violet-200 transition-all duration-200\">
                    <input type=\"password\" id=\"password\" name=\"_password\" required
                        class=\"px-4 py-3 text-gray-700 text-base flex-grow bg-transparent outline-none placeholder-gray-400\" />
                    <button type=\"button\" class=\"px-3 focus:outline-none toggle-password\" data-target=\"password\" aria-label=\"Afficher/Masquer le mot de passe\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"#bbb\" stroke=\"#bbb\" class=\"w-5 h-5\"
                            viewBox=\"0 0 128 128\">
                            <path
                                d=\"M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z\"
                                data-original=\"#000000\"></path>
                        </svg>
                    </button>
                </div>
            </div>
            ";
        // line 83
        if ((($tmp = ($context["error"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "                <div class=\"text-red-600 bg-red-100 border border-red-300 rounded-lg px-4 py-2 mb-2 text-sm font-medium shadow\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "</div>
            ";
        }
        // line 86
        yield "            <button type=\"submit\" class=\"bg-violet-700 hover:bg-violet-800 text-white text-base font-semibold px-4 py-3 rounded-lg w-full mt-2 shadow transition-all duration-200\">Connexion au portail</button>
        </form>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleBtn = document.querySelector('.toggle-password');
            const passwordInput = document.getElementById('password');
            if (toggleBtn && passwordInput) {
                toggleBtn.addEventListener('click', function () {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
                    // Optionnel : changer l'icône selon l'état
                });
            }
        });
        </script>
        <div class=\"text-center mt-6\">
            <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\" class=\"inline-flex items-center text-violet-400 hover:text-violet-700 font-medium transition-colors duration-200\">
                <i class=\"fas fa-arrow-left mr-2\"></i>
                Retour au site
            </a>
        </div>
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
        return "security/login.html.twig";
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
        return array (  220 => 102,  202 => 86,  196 => 84,  194 => 83,  158 => 50,  149 => 44,  146 => 43,  140 => 42,  131 => 39,  124 => 38,  119 => 37,  114 => 36,  110 => 35,  107 => 34,  102 => 33,  97 => 32,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/login.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/security/login.html.twig");
    }
}
