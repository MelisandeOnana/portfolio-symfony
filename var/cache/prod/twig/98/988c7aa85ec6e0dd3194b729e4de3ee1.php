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

/* @KnpPaginator/Pagination/uikit_v3_pagination.html.twig */
class __TwigTemplate_52f47676d86b986f6247c5f165b81cbd extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 15
            yield "    <ul class=\"uk-pagination uk-flex-center uk-margin-medium-top\">
        ";
            // line 16
            if (array_key_exists("previous", $context)) {
                // line 17
                yield "            <li>
                <a rel=\"prev\" href=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["previous"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">&laquo;&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
            </li>
        ";
            } else {
                // line 21
                yield "            <li class=\"uk-disabled\">
                <span>&laquo;&nbsp;";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</span>
            </li>
        ";
            }
            // line 25
            yield "
        ";
            // line 26
            if ((($context["startPage"] ?? null) > 1)) {
                // line 27
                yield "            <li>
                <a href=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), 1, ($context["options"] ?? null))), "html", null, true);
                yield "\">1</a>
            </li>
            ";
                // line 30
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 31
                    yield "                <li>
                    <a href=\"";
                    // line 32
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), 2, ($context["options"] ?? null))), "html", null, true);
                    yield "\">2</a>
                </li>
            ";
                } elseif ((                // line 34
($context["startPage"] ?? null) != 2)) {
                    // line 35
                    yield "                <li class=\"uk-disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                }
                // line 39
                yield "        ";
            }
            // line 40
            yield "
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                yield "            ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 43
                    yield "                <li>
                    <a href=\"";
                    // line 44
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), $context["page"], ($context["options"] ?? null))), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                </li>
            ";
                } else {
                    // line 47
                    yield "                <li class=\"uk-active\">
                    <span>";
                    // line 48
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
                </li>
            ";
                }
                // line 51
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "
        ";
            // line 54
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 55
                yield "            ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 56
                    yield "                ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 57
                        yield "                    <li class=\"uk-disabled\">
                        <span>&hellip;</span>
                    </li>
                ";
                    } else {
                        // line 61
                        yield "                    <li>
                        <a href=\"";
                        // line 62
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), (($context["pageCount"] ?? null) - 1), ($context["options"] ?? null))), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["pageCount"] ?? null) - 1), "html", null, true);
                        yield "</a>
                    </li>
                ";
                    }
                    // line 65
                    yield "            ";
                }
                // line 66
                yield "            <li>
                <a href=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["pageCount"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pageCount"] ?? null), "html", null, true);
                yield "</a>
            </li>
        ";
            }
            // line 70
            yield "
        ";
            // line 71
            if (array_key_exists("next", $context)) {
                // line 72
                yield "            <li>
                <a rel=\"next\" href=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["next"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</a>
            </li>
        ";
            } else {
                // line 76
                yield "            <li class=\"uk-disabled\">
                <span>";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "&nbsp;&raquo;</span>
            </li>
        ";
            }
            // line 80
            yield "    </ul>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@KnpPaginator/Pagination/uikit_v3_pagination.html.twig";
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
        return array (  207 => 80,  201 => 77,  198 => 76,  190 => 73,  187 => 72,  185 => 71,  182 => 70,  174 => 67,  171 => 66,  168 => 65,  160 => 62,  157 => 61,  151 => 57,  148 => 56,  145 => 55,  143 => 54,  140 => 53,  133 => 51,  127 => 48,  124 => 47,  116 => 44,  113 => 43,  110 => 42,  106 => 41,  103 => 40,  100 => 39,  94 => 35,  92 => 34,  87 => 32,  84 => 31,  82 => 30,  77 => 28,  74 => 27,  72 => 26,  69 => 25,  63 => 22,  60 => 21,  52 => 18,  49 => 17,  47 => 16,  44 => 15,  42 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KnpPaginator/Pagination/uikit_v3_pagination.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/vendor/knplabs/knp-paginator-bundle/templates/Pagination/uikit_v3_pagination.html.twig");
    }
}
