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
class __TwigTemplate_da98a63bfbcbdb270bf7c90d23a03f3a extends Template
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

        yield " ";
        // line 6
        yield "<div class=\"margin-auto mt-10 p-5\">
  <div class=\"flex flex-row justify-between px-5 mb-5\">
    <form
      action=\"\"
      class=\"w-fit border-collapse flex flex-row align-middle justify-center\"
    >
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
        <input
          type=\"text\"
          id=\"table-search\"
          name=\"recherche\"
          class=\"block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500\"
          placeholder=\"Search an user by login\"
        />
      </div>
      <button
        type=\"submit\"
        class=\"text-white ml-3 bg-blue-700 font-medium rounded-lg text-sm px-6 py-1 text-center mb-1\"
      >
        search
      </button>
    </form>

    <a
      href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.create");
        yield "\"
      class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl font-medium rounded-lg text-sm text-center px-8 py-2\"
    >
      Add user
    </a>
  </div>

  ";
        // line 59
        yield "  <div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
    <table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500\">
      <thead class=\"text-sm text-white uppercase bg-blue-500\">
        <tr>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Prenom</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Nom</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Login</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Action</p>
          </th>
        </tr>
      </thead>
      ";
        // line 77
        if (((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 77, $this->source); })()) == null)) {
            // line 78
            yield "      <tr>
        <td colspan=\"5\" class=\"text-center\">Aucun client trouvé</td>
      </tr>
      ";
        }
        // line 82
        yield "      <tbody>
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 84
            yield "        <tr class=\"bg-white border-b hover:bg-blue-200\">
          <td class=\"px-6 py-4\">
            ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 86), "html", null, true);
            yield "
          </td>
          <td class=\"px-6 py-4\">
            ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 89), "html", null, true);
            yield "
          </td>
          <td class=\"px-6 py-4\">
            ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "login", [], "any", false, false, false, 92), "html", null, true);
            yield "
          </td>
          <td class=\"px-6 py-4\">
            <a href=\"#\" class=\"font-medium text-green-500 hover:underline\"
              >voir détail</a
            >
          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "      </tbody>
    </table>
    <!-- Pagination -->
    ";
        // line 169
        yield "  </div>
</div> ";
        
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
        return array (  205 => 169,  200 => 101,  185 => 92,  179 => 89,  173 => 86,  169 => 84,  165 => 83,  162 => 82,  156 => 78,  154 => 77,  134 => 59,  124 => 51,  77 => 6,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block main %} {#
-------------------------------- TABLEAU ----------------------- #}
<div class=\"margin-auto mt-10 p-5\">
  <div class=\"flex flex-row justify-between px-5 mb-5\">
    <form
      action=\"\"
      class=\"w-fit border-collapse flex flex-row align-middle justify-center\"
    >
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
        <input
          type=\"text\"
          id=\"table-search\"
          name=\"recherche\"
          class=\"block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500\"
          placeholder=\"Search an user by login\"
        />
      </div>
      <button
        type=\"submit\"
        class=\"text-white ml-3 bg-blue-700 font-medium rounded-lg text-sm px-6 py-1 text-center mb-1\"
      >
        search
      </button>
    </form>

    <a
      href=\"{{ path('user.create') }}\"
      class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl font-medium rounded-lg text-sm text-center px-8 py-2\"
    >
      Add user
    </a>
  </div>

  {# --------------------------------- #}
  <div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
    <table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500\">
      <thead class=\"text-sm text-white uppercase bg-blue-500\">
        <tr>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Prenom</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Nom</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Login</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Action</p>
          </th>
        </tr>
      </thead>
      {% if users == null %}
      <tr>
        <td colspan=\"5\" class=\"text-center\">Aucun client trouvé</td>
      </tr>
      {% endif %}
      <tbody>
        {% for user in users %}
        <tr class=\"bg-white border-b hover:bg-blue-200\">
          <td class=\"px-6 py-4\">
            {{ user.prenom }}
          </td>
          <td class=\"px-6 py-4\">
            {{ user.nom }}
          </td>
          <td class=\"px-6 py-4\">
            {{ user.login }}
          </td>
          <td class=\"px-6 py-4\">
            <a href=\"#\" class=\"font-medium text-green-500 hover:underline\"
              >voir détail</a
            >
          </td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
    <!-- Pagination -->
    {# <nav
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
            class=\"flex items-center justify-center px-3 h-8 leading-tight border {% if i == currentPage %} z-10 text-blue-500 border-blue-300 bg-blue-100 hover:bg-blue-200 hover:text-blue-300 {% else %}text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 {% endif %}\"
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
    </nav> #}
  </div>
</div> {% endblock %}

", "users/index.html.twig", "/home/sms_12/gestion_dette/templates/users/index.html.twig");
    }
}
