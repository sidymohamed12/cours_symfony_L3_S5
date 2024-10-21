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

/* dette/index.html.twig */
class __TwigTemplate_638807d5736c1bb6fd011e021959dfea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dette/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dette/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dette/index.html.twig", 1);
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
  <div class=\"flex flex-row justify-end mr-8 mb-3\">
    <p class=\"text-white mr-3 mt-2\">filtrer :</p>
    <a
      href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dette.index", ["etat" => 2]);
        yield "\"
      type=\"button\"
      class=\"text-white bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2\"
    >
      Non-Soldé
    </a>
    <a
      href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dette.index", ["etat" => 1]);
        yield "\"
      type=\"button\"
      class=\"text-white bg-green-500 font-medium rounded-lg text-sm px-8 py-2.5 text-center me-2 mb-2\"
    >
      Soldé
    </a>
    <a
      href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dette.index");
        yield "\"
      type=\"button\"
      class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm px-8 py-2.5 text-center me-2 mb-2\"
    >
      Tout
    </a>
  </div>

  ";
        // line 30
        yield "  <div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
    <table class=\"w-full mb-5 text-sm text-center rtl:text-right text-gray-500\">
      <thead
        class=\"text-sm text-white uppercase bg-gradient-to-br from-green-400 to-blue-600\"
      >
        <tr>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Date</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Montant</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Verser</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Restant</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Client</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>status</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Action</p>
          </th>
        </tr>
      </thead>

      <tbody>
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dettes"]) || array_key_exists("dettes", $context) ? $context["dettes"] : (function () { throw new RuntimeError('Variable "dettes" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dette"]) {
            // line 62
            yield "        <tr class=\"bg-white border-b hover:bg-blue-200\">
          <td class=\"px-6 py-4\">
            ";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "createdAt", [], "any", false, false, false, 64), "Y-m-d H:i:s"), "html", null, true);
            yield "
          </td>

          <td class=\"px-6 py-4\">
            ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 68), "html", null, true);
            yield "
          </td>

          <td class=\"px-6 py-4\">
            ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 72), "html", null, true);
            yield "
          </td>

          <td class=\"px-6 py-4\">
            ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "getMontant", [], "method", false, false, false, 76) - CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "getMontantVerser", [], "method", false, false, false, 76)), "html", null, true);
            yield "
          </td>
          <td class=\"px-6 py-4\">
            ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "client", [], "any", false, false, false, 79), "surnom", [], "any", false, false, false, 79), "html", null, true);
            yield "
          </td>
          <td class=\"px-6 py-4\">
            ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "status", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
            yield "
          </td>
          <td class=\"px-6 py-4\">
            <a
              href=\"\"
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
              Details
            </a>
          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dette'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "      </tbody>
    </table>
    <!-- Pagination -->
    <nav
      aria-label=\"Page navigation example\"
      class=\"mt-3 flex justify-end mb-5\"
    >
      <ul class=\"flex items-center -space-x-px h-8 text-sm\">
        ";
        // line 114
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 114, $this->source); })()) > 1)) {
            // line 115
            yield "        <li>
          <a
            href=\"?page=";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 117, $this->source); })()) - 1), "html", null, true);
            yield "&etat=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 117, $this->source); })()), "html", null, true);
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
        // line 138
        yield " ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 138, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 139
            yield "        <li>
          <a
            href=\"?page=";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "&etat=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 141, $this->source); })()), "html", null, true);
            yield "\"
            class=\"flex items-center justify-center px-3 h-8 leading-tight border ";
            // line 142
            if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 142, $this->source); })()))) {
                yield " z-10 text-white border-blue-300 bg-gradient-to-br from-green-400 to-blue-600 hover:bg-blue-200 hover:text-blue-300 ";
            } else {
                yield "text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 ";
            }
            yield "\"
          >
            ";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
          </a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield " ";
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 147, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 147, $this->source); })()))) {
            // line 148
            yield "        <li>
          <a
            href=\"?page=";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 150, $this->source); })()) + 1), "html", null, true);
            yield "&etat=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["etat"]) || array_key_exists("etat", $context) ? $context["etat"] : (function () { throw new RuntimeError('Variable "etat" does not exist.', 150, $this->source); })()), "html", null, true);
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
        // line 172
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
        return "dette/index.html.twig";
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
        return array (  328 => 172,  301 => 150,  297 => 148,  294 => 147,  284 => 144,  275 => 142,  269 => 141,  265 => 139,  260 => 138,  233 => 117,  229 => 115,  227 => 114,  217 => 106,  187 => 82,  181 => 79,  175 => 76,  168 => 72,  161 => 68,  154 => 64,  150 => 62,  146 => 61,  113 => 30,  102 => 21,  92 => 14,  82 => 7,  76 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %} {% block main %} {#
-------------------------------- TABLEAU ----------------------- #}
<div class=\"margin-auto mt-10 p-5\">
  <div class=\"flex flex-row justify-end mr-8 mb-3\">
    <p class=\"text-white mr-3 mt-2\">filtrer :</p>
    <a
      href=\"{{ path('dette.index', { etat: 2 }) }}\"
      type=\"button\"
      class=\"text-white bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2\"
    >
      Non-Soldé
    </a>
    <a
      href=\"{{ path('dette.index', { etat: 1 }) }}\"
      type=\"button\"
      class=\"text-white bg-green-500 font-medium rounded-lg text-sm px-8 py-2.5 text-center me-2 mb-2\"
    >
      Soldé
    </a>
    <a
      href=\"{{ path('dette.index') }}\"
      type=\"button\"
      class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm px-8 py-2.5 text-center me-2 mb-2\"
    >
      Tout
    </a>
  </div>

  {# --------------------------------- #}
  <div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
    <table class=\"w-full mb-5 text-sm text-center rtl:text-right text-gray-500\">
      <thead
        class=\"text-sm text-white uppercase bg-gradient-to-br from-green-400 to-blue-600\"
      >
        <tr>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Date</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Montant</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Verser</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Restant</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Client</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>status</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Action</p>
          </th>
        </tr>
      </thead>

      <tbody>
        {% for dette in dettes %}
        <tr class=\"bg-white border-b hover:bg-blue-200\">
          <td class=\"px-6 py-4\">
            {{ dette.createdAt|date('Y-m-d H:i:s') }}
          </td>

          <td class=\"px-6 py-4\">
            {{ dette.montant }}
          </td>

          <td class=\"px-6 py-4\">
            {{ dette.montantVerser }}
          </td>

          <td class=\"px-6 py-4\">
            {{ dette.getMontant() - dette.getMontantVerser() }}
          </td>
          <td class=\"px-6 py-4\">
            {{ dette.client.surnom }}
          </td>
          <td class=\"px-6 py-4\">
            {{ dette.status.name }}
          </td>
          <td class=\"px-6 py-4\">
            <a
              href=\"\"
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
              Details
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
            href=\"?page={{ currentPage - 1 }}&etat={{ etat }}\"
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
            href=\"?page={{ i }}&etat={{ etat }}\"
            class=\"flex items-center justify-center px-3 h-8 leading-tight border {% if i == currentPage %} z-10 text-white border-blue-300 bg-gradient-to-br from-green-400 to-blue-600 hover:bg-blue-200 hover:text-blue-300 {% else %}text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 {% endif %}\"
          >
            {{ i }}
          </a>
        </li>
        {% endfor %} {% if currentPage < totalPages %}
        <li>
          <a
            href=\"?page={{ currentPage + 1 }}&etat={{ etat }}\"
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
", "dette/index.html.twig", "/home/sms_12/gestion_dette/templates/dette/index.html.twig");
    }
}
