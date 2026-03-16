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

/* pages/contact.html.twig */
class __TwigTemplate_fb52e018f48e5a67adfe3e24fb687c8c extends Template
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
        yield "Contact - Portfolio Mélisande Onana";
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
        yield "<!-- Hero avec animation -->
<section class=\"relative min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 overflow-hidden\">
    <!-- Particules animées -->
    <div class=\"absolute inset-0\">
        <div class=\"absolute top-1/4 left-1/4 w-72 h-72 bg-purple-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse\"></div>
        <div class=\"absolute top-3/4 right-1/4 w-72 h-72 bg-violet-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse\" style=\"animation-delay: 2s;\"></div>
        <div class=\"absolute bottom-1/4 left-1/3 w-72 h-72 bg-indigo-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse\" style=\"animation-delay: 4s;\"></div>
    </div>
    
    <div class=\"relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-16\">
        <div class=\"text-center mb-16\">
            <h1 class=\"text-6xl md:text-8xl font-black text-transparent bg-clip-text bg-gradient-to-r from-white via-purple-200 to-violet-200 mb-8 animate-fade-in\">
                CONTACT
            </h1>
            <p class=\"text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto leading-relaxed\">
                Transformons vos idées en réalité digitale
            </p>
        </div>

        <!-- Formulaire de contact moderne -->
        <div class=\"max-w-4xl mx-auto\">
            <div class=\"bg-white/10 backdrop-blur-lg rounded-3xl p-8 md:p-12 border border-white/20 shadow-2xl\">
                <div class=\"text-center mb-8\">
                    <h2 class=\"text-3xl font-bold text-white mb-4\">Parlons de votre projet</h2>
                    <p class=\"text-purple-100\">Chaque grand projet commence par une conversation</p>
                </div>

                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 34
            yield "                    <div class=\"mb-6 p-4 bg-green-500/20 border border-green-400/30 rounded-xl text-green-100 text-center\">
                        <i class=\"fas fa-check-circle mr-2\"></i>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 40
            yield "                    <div class=\"mb-6 p-4 bg-red-500/20 border border-red-400/30 rounded-xl text-red-100 text-center\">
                        <i class=\"fas fa-exclamation-circle mr-2\"></i>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
                ";
        // line 45
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
                    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition-all duration-300 backdrop-blur-sm"]]);
        yield "
                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition-all duration-300 backdrop-blur-sm"]]);
        yield "
                    </div>
                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 50), 'row', ["attr" => ["class" => "w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent transition-all duration-300 backdrop-blur-sm"]]);
        yield "
                    <div class=\"text-center pt-4\">
                        <button type=\"submit\" class=\"group inline-flex items-center px-8 py-4 bg-gradient-to-r from-purple-600 to-violet-600 text-white font-bold rounded-full hover:from-purple-700 hover:to-violet-700 transition-all duration-300 transform hover:scale-105 shadow-2xl\">
                            <i class=\"fas fa-rocket mr-3 group-hover:animate-bounce\"></i>
                            Lancer la discussion
                        </button>
                    </div>
                ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </div>
        </div>
    </div>
</section>

<!-- Informations de contact -->
<section class=\"py-20 bg-gradient-to-br from-gray-50 to-white\">
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
        <div class=\"text-center mb-16\">
            <h2 class=\"text-4xl font-bold text-gray-900 mb-4\">Restons connectés</h2>
            <div class=\"w-16 h-1 bg-purple-500 mx-auto\"></div>
        </div>

        <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8 mb-16\">
            <!-- Email -->
            <div class=\"group text-center\">
                <div class=\"relative bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100\">
                    <div class=\"absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-r from-purple-500 to-violet-500 rounded-full flex items-center justify-center shadow-lg\">
                        <i class=\"fas fa-envelope text-white text-xl\"></i>
                    </div>
                    <div class=\"pt-6\">
                        <h3 class=\"text-xl font-semibold text-gray-900 mb-4\">Email</h3>
                        <p class=\"text-gray-600 mb-4\">Réponse sous 24-48h</p>
                        <a href=\"mailto:melisande.onana@orange.fr\" 
                           class=\"inline-flex items-center text-purple-600 hover:text-purple-700 font-medium transition-colors duration-300\">
                            melisande.onana@orange.fr
                            <i class=\"fas fa-external-link-alt ml-2 text-sm\"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- GitHub -->
            <div class=\"group text-center\">
                <div class=\"relative bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100\">
                    <div class=\"absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-r from-gray-700 to-gray-900 rounded-full flex items-center justify-center shadow-lg\">
                        <i class=\"fab fa-github text-white text-xl\"></i>
                    </div>
                    <div class=\"pt-6\">
                        <h3 class=\"text-xl font-semibold text-gray-900 mb-4\">GitHub</h3>
                        <p class=\"text-gray-600 mb-4\">Découvrez mon code</p>
                        <a href=\"https://github.com/MelisandeOnana\" 
                           target=\"_blank\"
                           class=\"inline-flex items-center text-gray-700 hover:text-gray-900 font-medium transition-colors duration-300\">
                            @MelisandeOnana
                            <i class=\"fas fa-external-link-alt ml-2 text-sm\"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- LinkedIn -->
            <div class=\"group text-center\">
                <div class=\"relative bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100\">
                    <div class=\"absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-r from-blue-600 to-blue-700 rounded-full flex items-center justify-center shadow-lg\">
                        <i class=\"fab fa-linkedin text-white text-xl\"></i>
                    </div>
                    <div class=\"pt-6\">
                        <h3 class=\"text-xl font-semibold text-gray-900 mb-4\">LinkedIn</h3>
                        <p class=\"text-gray-600 mb-4\">Réseau professionnel</p>
                        <a href=\"https://linkedin.com/in/melisande-onana\" 
                           target=\"_blank\"
                           class=\"inline-flex items-center text-blue-600 hover:text-blue-700 font-medium transition-colors duration-300\">
                            Mélisande Onana
                            <i class=\"fas fa-external-link-alt ml-2 text-sm\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Animation fade-in Tailwind -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.animate-fade-in').forEach(function(el) {
        el.classList.add('transition', 'duration-1000', 'ease-out');
        el.style.opacity = 0;
        el.style.transform = 'translateY(30px)';
        setTimeout(function() {
            el.style.opacity = 1;
            el.style.transform = 'translateY(0)';
        }, 100);
    });
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
        return "pages/contact.html.twig";
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
        return array (  161 => 57,  151 => 50,  146 => 48,  142 => 47,  137 => 45,  134 => 44,  125 => 41,  122 => 40,  118 => 39,  115 => 38,  106 => 35,  103 => 34,  99 => 33,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/contact.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/pages/contact.html.twig");
    }
}
