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

/* client/index.html.twig */
class __TwigTemplate_95dfc77f1aba1d9e2a195bca9306982b extends Template
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
            'main' => [$this, 'block_main'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 3
        yield "\t";
        // line 5
        yield "\t<div class=\"margin-auto mt-10 p-5\">
\t\t";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 6, $this->source); })()), "telephone", [], "any", false, false, false, 6), 'errors');
        yield "
\t\t<div class=\"flex flex-row justify-between px-5 mb-5\">
\t\t\t";
        // line 8
        yield         // line 9
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["class" => "w-fit border-collapse flex flex-row align-middle justify-center "]]);
        // line 15
        yield "
\t\t\t<div class=\"relative\">
\t\t\t\t<div class=\"absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-user-search\">
\t\t\t\t\t\t<circle cx=\"10\" cy=\"7\" r=\"4\"/>
\t\t\t\t\t\t<path d=\"M10.3 15H7a4 4 0 0 0-4 4v2\"/>
\t\t\t\t\t\t<circle cx=\"17\" cy=\"17\" r=\"3\"/>
\t\t\t\t\t\t<path d=\"m21 21-1.9-1.9\"/>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 25, $this->source); })()), "telephone", [], "any", false, false, false, 25), 'widget');
        yield "
\t\t\t</div>
\t\t\t";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 27, $this->source); })()), "search", [], "any", false, false, false, 27), 'widget');
        yield "
\t\t\t";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 28, $this->source); })()), 'form_end');
        yield "

\t\t\t<a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.create");
        yield "\" class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl font-medium rounded-lg text-sm text-center px-8 py-2\">
\t\t\t\tAdd client
\t\t\t</a>
\t\t</div>

\t\t";
        // line 36
        yield "\t\t<div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
\t\t\t<table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500\">
\t\t\t\t<thead class=\"text-sm text-white uppercase bg-gradient-to-br from-green-400 to-blue-600\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Surnom</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Prenom-Nom</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Telephone</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Adresse</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3 text-center\">
\t\t\t\t\t\t\t<p>Action</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
        // line 57
        if (((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 57, $this->source); })()) == null)) {
            // line 58
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\" class=\"text-center\">Aucun client trouvé</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 62
        yield "\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 64
            yield "\t\t\t\t\t\t<tr class=\"bg-white border-b hover:bg-blue-200\">
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "surnom", [], "any", false, false, false, 66), "html", null, true);
            yield "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t";
            // line 69
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["client"], "users", [], "any", false, false, false, 69) != null)) {
                // line 70
                yield "\t\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "users", [], "any", false, false, false, 70), "prenom", [], "any", false, false, false, 70), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "users", [], "any", false, false, false, 71), "nom", [], "any", false, false, false, 71), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t";
            }
            // line 73
            yield "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "telephone", [], "any", false, false, false, 75), "html", null, true);
            yield "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 78), "html", null, true);
            yield "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-6 py-4 m-auto flex flex-row align-middle justify-center\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 81)]), "html", null, true);
            yield "\" type=\"button\" class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">
\t\t\t\t\t\t\t\t\t<svg class=\"w-4 h-4 me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewbox=\"0 0 18 20\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\tDette
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            yield "\" type=\"button\" class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"w-5 h-5 me-2\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M3 6h18\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2\"/>
\t\t\t\t\t\t\t\t\t\t<line x1=\"10\" x2=\"10\" y1=\"11\" y2=\"17\"/>
\t\t\t\t\t\t\t\t\t\t<line x1=\"14\" x2=\"14\" y1=\"11\" y2=\"17\"/>
\t\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<!-- Pagination -->
\t\t\t<nav aria-label=\"Page navigation example\" class=\"mt-3 flex justify-end mb-5\">
\t\t\t\t<ul class=\"flex items-center -space-x-px h-8 text-sm\">
\t\t\t\t\t";
        // line 106
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 106, $this->source); })()) > 1)) {
            // line 107
            yield "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"?page=";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 108, $this->source); })()) - 1), "html", null, true);
            yield "\" class=\"flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t\t<svg class=\"w-2.5 h-2.5 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 6 10\">
\t\t\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 1 1 5l4 4\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 116
        yield "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 116, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 117
            yield "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"?page=";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" class=\"flex items-center justify-center px-3 h-8 leading-tight border ";
            if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 118, $this->source); })()))) {
                yield " z-10 text-white border-blue-300 bg-gradient-to-br from-green-400 to-blue-600 hover:bg-blue-200 hover:text-blue-300 ";
            } else {
                yield "text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 ";
            }
            yield "\">
\t\t\t\t\t\t\t\t";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "\t\t\t\t\t";
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 123, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 123, $this->source); })()))) {
            // line 124
            yield "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"?page=";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 125, $this->source); })()) + 1), "html", null, true);
            yield "\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t\t<svg class=\"w-2.5 h-2.5 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 6 10\">
\t\t\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 9 4-4-4-4\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 133
        yield "\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "client/index.html.twig";
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
        return array (  296 => 133,  285 => 125,  282 => 124,  279 => 123,  269 => 119,  259 => 118,  256 => 117,  251 => 116,  240 => 108,  237 => 107,  235 => 106,  228 => 101,  208 => 87,  199 => 81,  193 => 78,  187 => 75,  183 => 73,  178 => 71,  173 => 70,  171 => 69,  165 => 66,  161 => 64,  157 => 63,  154 => 62,  148 => 58,  146 => 57,  123 => 36,  115 => 30,  110 => 28,  106 => 27,  101 => 25,  89 => 15,  87 => 9,  86 => 8,  81 => 6,  78 => 5,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block main %}
\t{#
\t\t-------------------------------- TABLEAU ----------------------- #}
\t<div class=\"margin-auto mt-10 p-5\">
\t\t{{ form_errors(formSearch.telephone) }}
\t\t<div class=\"flex flex-row justify-between px-5 mb-5\">
\t\t\t{{
      form_start(formSearch, {
        attr: {
          class:
            \"w-fit border-collapse flex flex-row align-middle justify-center \"
        }
      })
    }}
\t\t\t<div class=\"relative\">
\t\t\t\t<div class=\"absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none\">
\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"lucide lucide-user-search\">
\t\t\t\t\t\t<circle cx=\"10\" cy=\"7\" r=\"4\"/>
\t\t\t\t\t\t<path d=\"M10.3 15H7a4 4 0 0 0-4 4v2\"/>
\t\t\t\t\t\t<circle cx=\"17\" cy=\"17\" r=\"3\"/>
\t\t\t\t\t\t<path d=\"m21 21-1.9-1.9\"/>
\t\t\t\t\t</svg>
\t\t\t\t</div>
\t\t\t\t{{ form_widget(formSearch.telephone) }}
\t\t\t</div>
\t\t\t{{ form_widget(formSearch.search) }}
\t\t\t{{ form_end(formSearch) }}

\t\t\t<a href=\"{{ path('client.create') }}\" class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl font-medium rounded-lg text-sm text-center px-8 py-2\">
\t\t\t\tAdd client
\t\t\t</a>
\t\t</div>

\t\t{# --------------------------------- #}
\t\t<div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
\t\t\t<table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500\">
\t\t\t\t<thead class=\"text-sm text-white uppercase bg-gradient-to-br from-green-400 to-blue-600\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Surnom</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Prenom-Nom</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Telephone</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Adresse</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3 text-center\">
\t\t\t\t\t\t\t<p>Action</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t{% if clients == null %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\" class=\"text-center\">Aucun client trouvé</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endif %}
\t\t\t\t<tbody>
\t\t\t\t\t{% for client in clients %}
\t\t\t\t\t\t<tr class=\"bg-white border-b hover:bg-blue-200\">
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t{{ client.surnom }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t{% if client.users != null %}
\t\t\t\t\t\t\t\t\t{{ client.users.prenom }}
\t\t\t\t\t\t\t\t\t{{ client.users.nom }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t{{ client.telephone }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t{{ client.adresse }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-6 py-4 m-auto flex flex-row align-middle justify-center\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('client.show', { id: client.id }) }}\" type=\"button\" class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">
\t\t\t\t\t\t\t\t\t<svg class=\"w-4 h-4 me-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewbox=\"0 0 18 20\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z\"/>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\tDette
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('client.show', { id: client.id }) }}\" type=\"button\" class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">
\t\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"w-5 h-5 me-2\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M3 6h18\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2\"/>
\t\t\t\t\t\t\t\t\t\t<line x1=\"10\" x2=\"10\" y1=\"11\" y2=\"17\"/>
\t\t\t\t\t\t\t\t\t\t<line x1=\"14\" x2=\"14\" y1=\"11\" y2=\"17\"/>
\t\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<!-- Pagination -->
\t\t\t<nav aria-label=\"Page navigation example\" class=\"mt-3 flex justify-end mb-5\">
\t\t\t\t<ul class=\"flex items-center -space-x-px h-8 text-sm\">
\t\t\t\t\t{% if currentPage > 1 %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"?page={{ currentPage - 1 }}\" class=\"flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t\t<svg class=\"w-2.5 h-2.5 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 6 10\">
\t\t\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 1 1 5l4 4\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% for i in 1..totalPages %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"?page={{ i }}\" class=\"flex items-center justify-center px-3 h-8 leading-tight border {% if i == currentPage %} z-10 text-white border-blue-300 bg-gradient-to-br from-green-400 to-blue-600 hover:bg-blue-200 hover:text-blue-300 {% else %}text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 {% endif %}\">
\t\t\t\t\t\t\t\t{{ i }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% if currentPage < totalPages %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"?page={{ currentPage + 1 }}\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t\t<svg class=\"w-2.5 h-2.5 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 6 10\">
\t\t\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 9 4-4-4-4\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>
\t</div>
{% endblock %}
", "client/index.html.twig", "/home/sms_12/gestion_dette/templates/client/index.html.twig");
    }
}
