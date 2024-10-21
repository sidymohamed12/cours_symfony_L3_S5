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

/* article/index.html.twig */
class __TwigTemplate_8a7658dd83b0d5073bd771a755add16f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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

    <div class=\"relative\">
     
    <a
      href=\"\"
      class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl font-medium rounded-lg text-sm text-center px-8 py-2\"
    >
      Add article
    </a>
  </div>

  ";
        // line 19
        yield "  <div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
    <table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500 \">
      <thead class=\"text-sm text-white uppercase bg-gradient-to-br from-green-400 to-blue-600\">
        <tr>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>libelle</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>qteStock</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Prix Unit</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Action</p>
          </th>
        </tr>
      </thead>
      
      <tbody>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 40
            yield "        <tr class=\"bg-white border-b hover:bg-blue-200\">
          <td class=\"px-6 py-4\">
            ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "libelle", [], "any", false, false, false, 42), "html", null, true);
            yield "
          </td>
          <td class=\"px-6 py-4\">
            ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "qteStock", [], "any", false, false, false, 45), "html", null, true);
            yield "
          </td>
          <td class=\"px-6 py-4\">
            ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 48), "html", null, true);
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
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "      </tbody>
    </table>
    <!-- Pagination -->
    <nav
      aria-label=\"Page navigation example\"
      class=\"mt-3 flex justify-end mb-5\"
    >
      <ul class=\"flex items-center -space-x-px h-8 text-sm\">
        ";
        // line 65
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 65, $this->source); })()) > 1)) {
            // line 66
            yield "        <li>
          <a
            href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 68, $this->source); })()) - 1)]), "html", null, true);
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
        // line 89
        yield " ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 89, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 90
            yield "        <li>
          <a
            href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.index", ["page" => $context["i"]]), "html", null, true);
            yield "\"
            class=\"flex items-center justify-center px-3 h-8 leading-tight border ";
            // line 93
            if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 93, $this->source); })()))) {
                yield " z-10 text-white border-blue-300 bg-gradient-to-br from-green-400 to-blue-600 hover:bg-blue-200 hover:text-blue-300 ";
            } else {
                yield "text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 ";
            }
            yield "\"
          >
            ";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
          </a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        yield " ";
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 98, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 98, $this->source); })()))) {
            // line 99
            yield "        <li>
          <a
            href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 101, $this->source); })()) + 1)]), "html", null, true);
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
        // line 123
        yield "      </ul>
    </nav>
  </div>
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
        return "article/index.html.twig";
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
        return array (  253 => 123,  228 => 101,  224 => 99,  221 => 98,  211 => 95,  202 => 93,  198 => 92,  194 => 90,  189 => 89,  164 => 68,  160 => 66,  158 => 65,  148 => 57,  133 => 48,  127 => 45,  121 => 42,  117 => 40,  113 => 39,  91 => 19,  77 => 6,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block main %} {#
-------------------------------- TABLEAU ----------------------- #}
<div class=\"margin-auto mt-10 p-5\">

    <div class=\"relative\">
     
    <a
      href=\"\"
      class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl font-medium rounded-lg text-sm text-center px-8 py-2\"
    >
      Add article
    </a>
  </div>

  {# --------------------------------- #}
  <div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
    <table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500 \">
      <thead class=\"text-sm text-white uppercase bg-gradient-to-br from-green-400 to-blue-600\">
        <tr>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>libelle</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>qteStock</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Prix Unit</p>
          </th>
          <th scope=\"col\" class=\"px-6 py-3\">
            <p>Action</p>
          </th>
        </tr>
      </thead>
      
      <tbody>
        {% for article in articles %}
        <tr class=\"bg-white border-b hover:bg-blue-200\">
          <td class=\"px-6 py-4\">
            {{ article.libelle }}
          </td>
          <td class=\"px-6 py-4\">
            {{ article.qteStock }}
          </td>
          <td class=\"px-6 py-4\">
            {{ article.prix }}
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
    <nav
      aria-label=\"Page navigation example\"
      class=\"mt-3 flex justify-end mb-5\"
    >
      <ul class=\"flex items-center -space-x-px h-8 text-sm\">
        {% if currentPage > 1 %}
        <li>
          <a
            href=\"{{ path('article.index', { page: currentPage - 1 }) }}\"
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
            href=\"{{ path('article.index', { page: i }) }}\"
            class=\"flex items-center justify-center px-3 h-8 leading-tight border {% if i == currentPage %} z-10 text-white border-blue-300 bg-gradient-to-br from-green-400 to-blue-600 hover:bg-blue-200 hover:text-blue-300 {% else %}text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 {% endif %}\"
          >
            {{ i }}
          </a>
        </li>
        {% endfor %} {% if currentPage < totalPages %}
        <li>
          <a
            href=\"{{ path('article.index', { page: currentPage + 1 }) }}\"
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
</div> {% endblock %}", "article/index.html.twig", "/home/sms_12/gestion_dette/templates/article/index.html.twig");
    }
}
