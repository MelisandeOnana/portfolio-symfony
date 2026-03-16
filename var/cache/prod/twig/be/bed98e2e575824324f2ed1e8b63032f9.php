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

/* admin/contacts/show.html.twig */
class __TwigTemplate_1133279ddd8cad71e26b3cc2fecf9241 extends Template
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
        yield "Détail de la demande de contact";
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
        yield "<div class=\"max-w-2xl mx-auto px-4 py-8\">
    <div class=\"bg-white border-2 border-purple-100 rounded-2xl shadow-xl p-8\">
        <h1 class=\"text-3xl font-bold text-purple-700 mb-6\">Détail de la demande de contact</h1>
        <ul class=\"space-y-4\">
            <li><span class=\"font-semibold text-gray-700\">Nom :</span> ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "nom", [], "any", false, false, false, 10), "html", null, true);
        yield "</li>
            <li><span class=\"font-semibold text-gray-700\">Email :</span> <a href=\"mailto:";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 11), "html", null, true);
        yield "\" class=\"text-blue-600 underline\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 11), "html", null, true);
        yield "</a></li>
            <li><span class=\"font-semibold text-gray-700\">Date d'envoi :</span> ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "dateEnvoi", [], "any", false, false, false, 12), "d/m/Y à H:i"), "html", null, true);
        yield "</li>
            <li><span class=\"font-semibold text-gray-700\">Message :</span><br><span class=\"block mt-2 text-gray-800\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 13), "html", null, true);
        yield "</span></li>
        </ul>
        <div class=\"mt-8 flex gap-4\">
            <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_list");
        yield "\" class=\"px-6 py-2 bg-gradient-to-r from-purple-600 to-violet-600 text-white rounded-full font-semibold shadow hover:from-purple-700 hover:to-violet-700 transition-all duration-300\">Retour à la liste</a>
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
        return "admin/contacts/show.html.twig";
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
        return array (  96 => 16,  90 => 13,  86 => 12,  80 => 11,  76 => 10,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/contacts/show.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/admin/contacts/show.html.twig");
    }
}
