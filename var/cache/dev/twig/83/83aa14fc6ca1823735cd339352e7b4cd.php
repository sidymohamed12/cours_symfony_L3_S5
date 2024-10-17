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

        yield " ";
        // line 6
        yield "<div class=\"margin-auto mt-10 p-5\">
  ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 7, $this->source); })()), "login", [], "any", false, false, false, 7), 'errors');
        yield "
  <div class=\"flex flex-row justify-between px-5 mb-5\">
    ";
        // line 9
        yield         // line 10
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "w-fit border-collapse flex flex-row align-middle justify-center "]]);
        // line 16
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
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 39, $this->source); })()), "login", [], "any", false, false, false, 39), 'widget');
        yield "
    </div>
    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 41, $this->source); })()), "search", [], "any", false, false, false, 41), 'widget');
        yield "
    ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formSearch"]) || array_key_exists("formSearch", $context) ? $context["formSearch"] : (function () { throw new RuntimeError('Variable "formSearch" does not exist.', 42, $this->source); })()), 'form_end');
        yield "

    <a
      href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.create");
        yield "\"
      class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl font-medium rounded-lg text-sm text-center px-8 py-2\"
    >
      Add user
    </a>
  </div>

  ";
        // line 53
        yield "  <div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
    <table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500 \">
      <thead class=\"text-sm text-white uppercase bg-gradient-to-br from-green-400 to-blue-600\">
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
        // line 71
        if (((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 71, $this->source); })()) == null)) {
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 78
            yield "        <tr class=\"bg-white border-b hover:bg-blue-200\">
          <td class=\"px-6 py-4\">
            ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 80), "html", null, true);
            yield "
          </td>
          <td class=\"px-6 py-4\">
            ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 83), "html", null, true);
            yield "
          </td>
          <td class=\"px-6 py-4\">
            ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "login", [], "any", false, false, false, 86), "html", null, true);
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
        // line 95
        yield "      </tbody>
    </table>
    <!-- Pagination -->
    ";
        // line 163
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
        return array (  209 => 163,  204 => 95,  189 => 86,  183 => 83,  177 => 80,  173 => 78,  169 => 77,  166 => 76,  160 => 72,  158 => 71,  138 => 53,  128 => 45,  122 => 42,  118 => 41,  113 => 39,  88 => 16,  86 => 10,  85 => 9,  80 => 7,  77 => 6,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block main %} {#
-------------------------------- TABLEAU ----------------------- #}
<div class=\"margin-auto mt-10 p-5\">
  {{ form_errors(formSearch.login) }}
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
      {{ form_widget(formSearch.login) }}
    </div>
    {{ form_widget(formSearch.search) }}
    {{ form_end(formSearch) }}

    <a
      href=\"{{ path('user.create') }}\"
      class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl font-medium rounded-lg text-sm text-center px-8 py-2\"
    >
      Add user
    </a>
  </div>

  {# --------------------------------- #}
  <div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
    <table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500 \">
      <thead class=\"text-sm text-white uppercase bg-gradient-to-br from-green-400 to-blue-600\">
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
