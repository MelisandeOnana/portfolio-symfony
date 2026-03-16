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

/* base.html.twig */
class __TwigTemplate_20bae11d1da1514acf326db9533e06b9 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body_attributes' => [$this, 'block_body_attributes'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    ";
        // line 6
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 12
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 16
        yield "</head>
<body class=\"bg-gray-50 min-h-screen font-sans\"
    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('body_attributes', $context, $blocks);
        yield ">
    ";
        // line 19
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 22
        yield "
    <main class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8\">
        ";
        // line 24
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 26
        yield "    </main>
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 30
        yield "</body>
</html>";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Portfolio";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "        <link href=\"https://fonts.googleapis.com/css2?family=Epilogue:wght@400;700&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        yield "\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
    ";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "        <script src=\"https://cdn.tailwindcss.com\"></script>
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap();
        yield "
    ";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "        ";
        try {
            $_v0 = $this->load("components/header.html.twig", 20);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v0 = null;
        }
        if ($_v0) {
            yield from $_v0->unwrap()->yield($context);
        }
        // line 21
        yield "    ";
        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 25
        yield "        ";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "        ";
        try {
            $_v1 = $this->load("components/footer.html.twig", 28);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v1 = null;
        }
        if ($_v1) {
            yield from $_v1->unwrap()->yield($context);
        }
        // line 29
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  201 => 29,  190 => 28,  183 => 27,  178 => 25,  171 => 24,  166 => 21,  155 => 20,  148 => 19,  138 => 18,  131 => 14,  128 => 13,  121 => 12,  113 => 9,  109 => 7,  102 => 6,  91 => 5,  85 => 30,  83 => 27,  80 => 26,  78 => 24,  74 => 22,  72 => 19,  68 => 18,  64 => 16,  61 => 12,  59 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/templates/base.html.twig");
    }
}
