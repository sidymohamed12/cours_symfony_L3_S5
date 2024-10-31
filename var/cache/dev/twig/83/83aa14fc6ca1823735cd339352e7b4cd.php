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

/* users/index.html.twig */
class __TwigTemplate_7df7865841c06dd086bcd61e784db984 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "\t";
        // line 7
        yield "\t<div class=\"margin-auto mt-10 p-5\">
\t\t";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 8, $this->source); })()), "login", [], "any", false, false, false, 8), 'errors');
        yield "
\t\t<div class=\"flex flex-row justify-between px-5 mb-5\">
\t\t\t";
        // line 10
        yield         // line 11
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "w-fit border-collapse flex flex-row align-middle justify-center "]]);
        // line 17
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
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 27, $this->source); })()), "login", [], "any", false, false, false, 27), 'widget');
        yield "
\t\t\t</div>
\t\t\t";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 29, $this->source); })()), "search", [], "any", false, false, false, 29), 'widget');
        yield "
\t\t\t";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 30, $this->source); })()), 'form_end');
        yield "

\t\t\t<a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.create");
        yield "\" class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl font-medium rounded-lg text-sm text-center px-8 py-2\">
\t\t\t\tAdd user
\t\t\t</a>
\t\t</div>

\t\t";
        // line 38
        yield "\t\t<div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
\t\t\t<table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500 \">
\t\t\t\t<thead class=\"text-sm text-white uppercase bg-gradient-to-br from-green-400 to-blue-600\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Prenom</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Nom</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Login</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Role</p>
\t\t\t\t\t\t</th>

\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Action</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t";
        // line 60
        if (((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 60, $this->source); })()) == null)) {
            // line 61
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\" class=\"text-center\">Aucun client trouvé</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 65
        yield "\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 67
            yield "\t\t\t\t\t\t<tr class=\"bg-white border-b hover:bg-blue-200\">
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 69), "html", null, true);
            yield "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 72), "html", null, true);
            yield "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "login", [], "any", false, false, false, 75), "html", null, true);
            yield "

\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"font-medium text-green-500 hover:underline\">voir détail</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<!-- Pagination -->
\t\t\t<nav aria-label=\"Page navigation example\" class=\"mt-3 flex justify-end mb-5\">
\t\t\t\t<ul class=\"flex items-center -space-x-px h-8 text-sm\">
\t\t\t\t\t";
        // line 89
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 89, $this->source); })()) > 1)) {
            // line 90
            yield "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 91, $this->source); })()) - 1)]), "html", null, true);
            yield "\" class=\"flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t\t<svg class=\"w-2.5 h-2.5 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 6 10\">
\t\t\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 1 1 5l4 4\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 99
        yield "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 99, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 100
            yield "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.index", ["page" => $context["i"]]), "html", null, true);
            yield "\" class=\"flex items-center justify-center px-3 h-8 leading-tight border ";
            if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 101, $this->source); })()))) {
                yield " z-10 text-blue-500 border-blue-300 bg-blue-100 hover:bg-blue-200 hover:text-blue-300 ";
            } else {
                yield "text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 ";
            }
            yield "\">
\t\t\t\t\t\t\t\t";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "\t\t\t\t\t";
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 106, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 106, $this->source); })()))) {
            // line 107
            yield "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users.index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 108, $this->source); })()) + 1)]), "html", null, true);
            yield "\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t\t<svg class=\"w-2.5 h-2.5 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 6 10\">
\t\t\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 9 4-4-4-4\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 116
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
        return "users/index.html.twig";
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
        return array (  261 => 116,  250 => 108,  247 => 107,  244 => 106,  234 => 102,  224 => 101,  221 => 100,  216 => 99,  205 => 91,  202 => 90,  200 => 89,  193 => 84,  178 => 75,  172 => 72,  166 => 69,  162 => 67,  158 => 66,  155 => 65,  149 => 61,  147 => 60,  123 => 38,  115 => 32,  110 => 30,  106 => 29,  101 => 27,  89 => 17,  87 => 11,  86 => 10,  81 => 8,  78 => 7,  76 => 5,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block main %}
\t{#
\t\t\t\t\t\t-------------------------------- TABLEAU ----------------------- #}
\t<div class=\"margin-auto mt-10 p-5\">
\t\t{{ form_errors(formSearch.login) }}
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
\t\t\t\t{{ form_widget(formSearch.login) }}
\t\t\t</div>
\t\t\t{{ form_widget(formSearch.search) }}
\t\t\t{{ form_end(formSearch) }}

\t\t\t<a href=\"{{ path('user.create') }}\" class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl font-medium rounded-lg text-sm text-center px-8 py-2\">
\t\t\t\tAdd user
\t\t\t</a>
\t\t</div>

\t\t{# --------------------------------- #}
\t\t<div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
\t\t\t<table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500 \">
\t\t\t\t<thead class=\"text-sm text-white uppercase bg-gradient-to-br from-green-400 to-blue-600\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Prenom</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Nom</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Login</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Role</p>
\t\t\t\t\t\t</th>

\t\t\t\t\t\t<th scope=\"col\" class=\"px-6 py-3\">
\t\t\t\t\t\t\t<p>Action</p>
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t{% if users == null %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\" class=\"text-center\">Aucun client trouvé</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endif %}
\t\t\t\t<tbody>
\t\t\t\t\t{% for user in users %}
\t\t\t\t\t\t<tr class=\"bg-white border-b hover:bg-blue-200\">
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t{{ user.prenom }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t{{ user.nom }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t{{ user.login }}

\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t<td class=\"px-6 py-4\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"font-medium text-green-500 hover:underline\">voir détail</a>
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
\t\t\t\t\t\t\t<a href=\"{{ path('users.index', { page: currentPage - 1 }) }}\" class=\"flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t\t<svg class=\"w-2.5 h-2.5 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewbox=\"0 0 6 10\">
\t\t\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 1 1 5l4 4\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% for i in 1..totalPages %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('users.index', { page: i }) }}\" class=\"flex items-center justify-center px-3 h-8 leading-tight border {% if i == currentPage %} z-10 text-blue-500 border-blue-300 bg-blue-100 hover:bg-blue-200 hover:text-blue-300 {% else %}text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 {% endif %}\">
\t\t\t\t\t\t\t\t{{ i }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% if currentPage < totalPages %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('users.index', { page: currentPage + 1 }) }}\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700\">
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
", "users/index.html.twig", "/home/sms_12/gestion_dette/templates/users/index.html.twig");
    }
}
