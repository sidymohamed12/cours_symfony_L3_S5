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

        yield " ";
        // line 3
        yield "<div class=\"margin-auto mt-10 p-5\">
  ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 4, $this->source); })()), "telephone", [], "any", false, false, false, 4), 'errors');
        yield "
  <div class=\"flex flex-row justify-between px-5 mb-5\">
    ";
        // line 6
        yield         // line 7
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["class" => "w-fit border-collapse flex flex-row align-middle justify-center "]]);
        // line 13
        yield "
    <div class=\"relative\">
      <div
        class=\"absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none\"
      >
        <svg
          xmlns=\"http://www.w3.org/2000/svg\"
          width=\"24\"
          height=\"24\"
          viewBox=\"0 0 24 24\"
          fill=\"none\"
          stroke=\"currentColor\"
          stroke-width=\"2\"
          stroke-linecap=\"round\"
          stroke-linejoin=\"round\"
          class=\"lucide lucide-user-search\"
        >
          <circle cx=\"10\" cy=\"7\" r=\"4\" />
          <path d=\"M10.3 15H7a4 4 0 0 0-4 4v2\" />
          <circle cx=\"17\" cy=\"17\" r=\"3\" />
          <path d=\"m21 21-1.9-1.9\" />
        </svg>
      </div>
      ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 36, $this->source); })()), "telephone", [], "any", false, false, false, 36), 'widget');
        yield "
    </div>
    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 38, $this->source); })()), "search", [], "any", false, false, false, 38), 'widget');
        yield "
    ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 39, $this->source); })()), 'form_end');
        yield "

    <a
      href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.create");
        yield "\"
      class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl font-medium rounded-lg text-sm text-center px-8 py-2\"
    >
      Add client
    </a>
  </div>

  ";
        // line 50
        yield "  <div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
    <table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500\">
      <thead class=\"text-sm text-white uppercase bg-gradient-to-br from-green-400 to-blue-600\">
        <tr>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Surnom</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Prenom-Nom</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Telephone</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Adresse</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3 text-center\">
            <p>Action</p>
          </th>
        </tr>
      </thead>
      ";
        // line 71
        if (((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 71, $this->source); })()) == null)) {
            // line 72
            yield "      <tr>
        <td colspan=\"5\" class=\"text-center\">Aucun client trouvé</td>
      </tr>
      ";
        }
        // line 76
        yield "      <tbody>
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 78
            yield "        <tr class=\"bg-white border-b hover:bg-blue-200\">
          <td class=\"px-6 py-4\">
            ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "surnom", [], "any", false, false, false, 80), "html", null, true);
            yield "
          </td>
          <td class=\"px-6 py-4\">
            ";
            // line 83
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["client"], "users", [], "any", false, false, false, 83) != null)) {
                // line 84
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "users", [], "any", false, false, false, 84), "prenom", [], "any", false, false, false, 84), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["client"], "users", [], "any", false, false, false, 84), "nom", [], "any", false, false, false, 84), "html", null, true);
                yield "
            ";
            }
            // line 86
            yield "          </td>
          <td class=\"px-6 py-4\">
            ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "telephone", [], "any", false, false, false, 88), "html", null, true);
            yield "
          </td>
          <td class=\"px-6 py-4\">
            ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "adresse", [], "any", false, false, false, 91), "html", null, true);
            yield "
          </td>
          <td
            class=\"px-6 py-4 m-auto flex flex-row align-middle justify-center\"
          >
            <a
              href=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            yield "\"
              type=\"button\"
              class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\"
            >
              <svg
                class=\"w-4 h-4 me-2\"
                aria-hidden=\"true\"
                xmlns=\"http://www.w3.org/2000/svg\"
                fill=\"currentColor\"
                viewBox=\"0 0 18 20\"
              >
                <path
                  d=\"M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z\"
                />
              </svg>
              Dette
            </a>
            <a
              href=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            yield "\"
              type=\"button\"
              class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\"
            >
              <svg
                xmlns=\"http://www.w3.org/2000/svg\"
                viewBox=\"0 0 24 24\"
                fill=\"none\"
                stroke=\"currentColor\"
                stroke-width=\"2\"
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                class=\"w-5 h-5 me-2\"
              >
                <path d=\"M3 6h18\" />
                <path d=\"M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6\" />
                <path d=\"M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2\" />
                <line x1=\"10\" x2=\"10\" y1=\"11\" y2=\"17\" />
                <line x1=\"14\" x2=\"14\" y1=\"11\" y2=\"17\" />
              </svg>

              Delete
            </a>
          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "      </tbody>
    </table>
    <!-- Pagination -->
    <nav
      aria-label=\"Page navigation example\"
      class=\"mt-3 flex justify-end mb-5\"
    >
      <ul class=\"flex items-center -space-x-px h-8 text-sm\">
        ";
        // line 149
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 149, $this->source); })()) > 1)) {
            // line 150
            yield "        <li>
          <a
            href=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 152, $this->source); })()) - 1)]), "html", null, true);
            yield "\"
            class=\"flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700\"
          >
            <span class=\"sr-only\">Previous</span>
            <svg
              class=\"w-2.5 h-2.5 rtl:rotate-180\"
              aria-hidden=\"true\"
              xmlns=\"http://www.w3.org/2000/svg\"
              fill=\"none\"
              viewBox=\"0 0 6 10\"
            >
              <path
                stroke=\"currentColor\"
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                stroke-width=\"2\"
                d=\"M5 1 1 5l4 4\"
              />
            </svg>
          </a>
        </li>
        ";
        }
        // line 173
        yield " ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 173, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 174
            yield "        <li>
          <a
            href=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.index", ["page" => $context["i"]]), "html", null, true);
            yield "\"
            class=\"flex items-center justify-center px-3 h-8 leading-tight border ";
            // line 177
            if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 177, $this->source); })()))) {
                yield " z-10 text-white border-blue-300 bg-gradient-to-br from-green-400 to-blue-600 hover:bg-blue-200 hover:text-blue-300 ";
            } else {
                yield "text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 ";
            }
            yield "\"
          >
            ";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
          </a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        yield " ";
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 182, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 182, $this->source); })()))) {
            // line 183
            yield "        <li>
          <a
            href=\"";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 185, $this->source); })()) + 1)]), "html", null, true);
            yield "\"
            class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700\"
          >
            <span class=\"sr-only\">Next</span>
            <svg
              class=\"w-2.5 h-2.5 rtl:rotate-180\"
              aria-hidden=\"true\"
              xmlns=\"http://www.w3.org/2000/svg\"
              fill=\"none\"
              viewBox=\"0 0 6 10\"
            >
              <path
                stroke=\"currentColor\"
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                stroke-width=\"2\"
                d=\"m1 9 4-4-4-4\"
              />
            </svg>
          </a>
        </li>
        ";
        }
        // line 207
        yield "      </ul>
    </nav>
  </div>
</div>
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
        return array (  372 => 207,  347 => 185,  343 => 183,  340 => 182,  330 => 179,  321 => 177,  317 => 176,  313 => 174,  308 => 173,  283 => 152,  279 => 150,  277 => 149,  267 => 141,  235 => 115,  214 => 97,  205 => 91,  199 => 88,  195 => 86,  187 => 84,  185 => 83,  179 => 80,  175 => 78,  171 => 77,  168 => 76,  162 => 72,  160 => 71,  137 => 50,  127 => 42,  121 => 39,  117 => 38,  112 => 36,  87 => 13,  85 => 7,  84 => 6,  79 => 4,  76 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %} {% block main %} {#
-------------------------------- TABLEAU ----------------------- #}
<div class=\"margin-auto mt-10 p-5\">
  {{ form_errors(formSearch.telephone) }}
  <div class=\"flex flex-row justify-between px-5 mb-5\">
    {{
      form_start(formSearch, {
        attr: {
          class:
            \"w-fit border-collapse flex flex-row align-middle justify-center \"
        }
      })
    }}
    <div class=\"relative\">
      <div
        class=\"absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none\"
      >
        <svg
          xmlns=\"http://www.w3.org/2000/svg\"
          width=\"24\"
          height=\"24\"
          viewBox=\"0 0 24 24\"
          fill=\"none\"
          stroke=\"currentColor\"
          stroke-width=\"2\"
          stroke-linecap=\"round\"
          stroke-linejoin=\"round\"
          class=\"lucide lucide-user-search\"
        >
          <circle cx=\"10\" cy=\"7\" r=\"4\" />
          <path d=\"M10.3 15H7a4 4 0 0 0-4 4v2\" />
          <circle cx=\"17\" cy=\"17\" r=\"3\" />
          <path d=\"m21 21-1.9-1.9\" />
        </svg>
      </div>
      {{ form_widget(formSearch.telephone) }}
    </div>
    {{ form_widget(formSearch.search) }}
    {{ form_end(formSearch) }}

    <a
      href=\"{{ path('client.create') }}\"
      class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl font-medium rounded-lg text-sm text-center px-8 py-2\"
    >
      Add client
    </a>
  </div>

  {# --------------------------------- #}
  <div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
    <table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500\">
      <thead class=\"text-sm text-white uppercase bg-gradient-to-br from-green-400 to-blue-600\">
        <tr>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Surnom</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Prenom-Nom</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Telephone</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Adresse</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3 text-center\">
            <p>Action</p>
          </th>
        </tr>
      </thead>
      {% if clients == null %}
      <tr>
        <td colspan=\"5\" class=\"text-center\">Aucun client trouvé</td>
      </tr>
      {% endif %}
      <tbody>
        {% for client in clients %}
        <tr class=\"bg-white border-b hover:bg-blue-200\">
          <td class=\"px-6 py-4\">
            {{ client.surnom }}
          </td>
          <td class=\"px-6 py-4\">
            {% if client.users != null %}
            {{ client.users.prenom }} {{ client.users.nom }}
            {% endif %}
          </td>
          <td class=\"px-6 py-4\">
            {{ client.telephone }}
          </td>
          <td class=\"px-6 py-4\">
            {{ client.adresse }}
          </td>
          <td
            class=\"px-6 py-4 m-auto flex flex-row align-middle justify-center\"
          >
            <a
              href=\"{{ path('client.show', { id: client.id }) }}\"
              type=\"button\"
              class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\"
            >
              <svg
                class=\"w-4 h-4 me-2\"
                aria-hidden=\"true\"
                xmlns=\"http://www.w3.org/2000/svg\"
                fill=\"currentColor\"
                viewBox=\"0 0 18 20\"
              >
                <path
                  d=\"M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z\"
                />
              </svg>
              Dette
            </a>
            <a
              href=\"{{ path('client.show', { id: client.id }) }}\"
              type=\"button\"
              class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\"
            >
              <svg
                xmlns=\"http://www.w3.org/2000/svg\"
                viewBox=\"0 0 24 24\"
                fill=\"none\"
                stroke=\"currentColor\"
                stroke-width=\"2\"
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                class=\"w-5 h-5 me-2\"
              >
                <path d=\"M3 6h18\" />
                <path d=\"M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6\" />
                <path d=\"M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2\" />
                <line x1=\"10\" x2=\"10\" y1=\"11\" y2=\"17\" />
                <line x1=\"14\" x2=\"14\" y1=\"11\" y2=\"17\" />
              </svg>

              Delete
            </a>
          </td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
    <!-- Pagination -->
    <nav
      aria-label=\"Page navigation example\"
      class=\"mt-3 flex justify-end mb-5\"
    >
      <ul class=\"flex items-center -space-x-px h-8 text-sm\">
        {% if currentPage > 1 %}
        <li>
          <a
            href=\"{{ path('client.index', { page: currentPage - 1 }) }}\"
            class=\"flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700\"
          >
            <span class=\"sr-only\">Previous</span>
            <svg
              class=\"w-2.5 h-2.5 rtl:rotate-180\"
              aria-hidden=\"true\"
              xmlns=\"http://www.w3.org/2000/svg\"
              fill=\"none\"
              viewBox=\"0 0 6 10\"
            >
              <path
                stroke=\"currentColor\"
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                stroke-width=\"2\"
                d=\"M5 1 1 5l4 4\"
              />
            </svg>
          </a>
        </li>
        {% endif %} {% for i in 1..totalPages %}
        <li>
          <a
            href=\"{{ path('client.index', { page: i }) }}\"
            class=\"flex items-center justify-center px-3 h-8 leading-tight border {% if i == currentPage %} z-10 text-white border-blue-300 bg-gradient-to-br from-green-400 to-blue-600 hover:bg-blue-200 hover:text-blue-300 {% else %}text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 {% endif %}\"
          >
            {{ i }}
          </a>
        </li>
        {% endfor %} {% if currentPage < totalPages %}
        <li>
          <a
            href=\"{{ path('client.index', { page: currentPage + 1 }) }}\"
            class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700\"
          >
            <span class=\"sr-only\">Next</span>
            <svg
              class=\"w-2.5 h-2.5 rtl:rotate-180\"
              aria-hidden=\"true\"
              xmlns=\"http://www.w3.org/2000/svg\"
              fill=\"none\"
              viewBox=\"0 0 6 10\"
            >
              <path
                stroke=\"currentColor\"
                stroke-linecap=\"round\"
                stroke-linejoin=\"round\"
                stroke-width=\"2\"
                d=\"m1 9 4-4-4-4\"
              />
            </svg>
          </a>
        </li>
        {% endif %}
      </ul>
    </nav>
  </div>
</div>
{% endblock %}
", "client/index.html.twig", "/home/sms_12/gestion_dette/templates/client/index.html.twig");
    }
}
