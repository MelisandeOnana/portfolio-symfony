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

/* @KnpPaginator/Pagination/foundation_v6_pagination.html.twig */
class __TwigTemplate_fc278ab2679d4d713aa766fc1cd4ce97 extends Template
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
        // line 1
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 2
            yield "    <nav aria-label=\"Pagination\">
        ";
            // line 3
            $context["classAlign"] = ((array_key_exists("align", $context)) ? ((" text-" . ($context["align"] ?? null))) : (""));
            // line 4
            yield "        <ul class=\"pagination";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classAlign"] ?? null), "html", null, true);
            yield "\">
            ";
            // line 5
            if (array_key_exists("previous", $context)) {
                // line 6
                yield "                <li class=\"pagination-previous\">
                    <a rel=\"prev\" href=\"";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["previous"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">
                        ";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            } else {
                // line 12
                yield "                <li class=\"pagination-previous disabled\">
                    ";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                </li>
            ";
            }
            // line 16
            yield "
            ";
            // line 17
            if ((($context["startPage"] ?? null) > 1)) {
                // line 18
                yield "                <li>
                    <a href=\"";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), 1, ($context["options"] ?? null))), "html", null, true);
                yield "\">1</a>
                </li>
                ";
                // line 21
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 22
                    yield "                    <li>
                        <a href=\"";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), 2, ($context["options"] ?? null))), "html", null, true);
                    yield "\">2</a>
                    </li>
                ";
                } elseif ((                // line 25
($context["startPage"] ?? null) != 2)) {
                    // line 26
                    yield "                    <li class=\"ellipsis\"></li>
                ";
                }
                // line 28
                yield "            ";
            }
            // line 29
            yield "
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                yield "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 32
                    yield "                    <li>
                        <a href=\"";
                    // line 33
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), $context["page"], ($context["options"] ?? null))), "html", null, true);
                    yield "\">
                            ";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                        </a>
                    </li>
                ";
                } else {
                    // line 38
                    yield "                    <li class=\"current\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</li>
                ";
                }
                // line 40
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "
            ";
            // line 42
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 43
                yield "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 44
                    yield "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 45
                        yield "                        <li class=\"ellipsis\"></li>
                    ";
                    } else {
                        // line 47
                        yield "                        <li>
                            <a href=\"";
                        // line 48
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), (($context["pageCount"] ?? null) - 1), ($context["options"] ?? null))), "html", null, true);
                        yield "\">
                                ";
                        // line 49
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["pageCount"] ?? null) - 1), "html", null, true);
                        yield "
                            </a>
                        </li>
                    ";
                    }
                    // line 53
                    yield "                ";
                }
                // line 54
                yield "                <li>
                    <a href=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["pageCount"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pageCount"] ?? null), "html", null, true);
                yield "</a>
                </li>
            ";
            }
            // line 58
            yield "
            ";
            // line 59
            if (array_key_exists("next", $context)) {
                // line 60
                yield "                <li class=\"pagination-next\">
                    <a rel=\"next\" href=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->getQueryParams(($context["query"] ?? null), ($context["next"] ?? null), ($context["options"] ?? null))), "html", null, true);
                yield "\">
                        ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                    </a>
                </li>
            ";
            } else {
                // line 66
                yield "                <li class=\"pagination-next disabled\">
                    ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "
                </li>
            ";
            }
            // line 70
            yield "        </ul>
    </nav>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig";
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
        return array (  218 => 70,  212 => 67,  209 => 66,  202 => 62,  198 => 61,  195 => 60,  193 => 59,  190 => 58,  182 => 55,  179 => 54,  176 => 53,  169 => 49,  165 => 48,  162 => 47,  158 => 45,  155 => 44,  152 => 43,  150 => 42,  147 => 41,  141 => 40,  135 => 38,  128 => 34,  124 => 33,  121 => 32,  118 => 31,  114 => 30,  111 => 29,  108 => 28,  104 => 26,  102 => 25,  97 => 23,  94 => 22,  92 => 21,  87 => 19,  84 => 18,  82 => 17,  79 => 16,  73 => 13,  70 => 12,  63 => 8,  59 => 7,  56 => 6,  54 => 5,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@KnpPaginator/Pagination/foundation_v6_pagination.html.twig", "/Applications/MAMP/htdocs/portfolio-symfony/vendor/knplabs/knp-paginator-bundle/templates/Pagination/foundation_v6_pagination.html.twig");
    }
}
