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

/* client/dette.client.html.twig */
class __TwigTemplate_b3ec26412dfbe167fcb8452360e60657 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dette.client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/dette.client.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/dette.client.html.twig", 1);
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
        $context["montantTotal"] = 0;
        yield " ";
        $context["verser"] = 0;
        // line 2
        yield " ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dettes"]) || array_key_exists("dettes", $context) ? $context["dettes"] : (function () { throw new RuntimeError('Variable "dettes" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dette"]) {
            yield " ";
            $context["montantTotal"] = ((isset($context["montantTotal"]) || array_key_exists("montantTotal", $context) ? $context["montantTotal"] : (function () { throw new RuntimeError('Variable "montantTotal" does not exist.', 2, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source,             // line 3
$context["dette"], "getMontant", [], "method", false, false, false, 3));
            yield " ";
            $context["verser"] = ((isset($context["verser"]) || array_key_exists("verser", $context) ? $context["verser"] : (function () { throw new RuntimeError('Variable "verser" does not exist.', 3, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "getMontantVerser", [], "method", false, false, false, 3));
            yield " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dette'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        yield "
<div class=\"p-4 sm:p-6 md:p-8 my-6\">
  <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6\">
    <!-- Carte Total des Dettes -->
    <div
      class=\"rounded-lg text-white font-semibold text-lg sm:text-xl md:text-2xl flex flex-col justify-between bg-gray-900\"
    >
      <div class=\"flex flex-col justify-center\">
        <div
          class=\"flex flex-row justify-center align-middle bg-gradient-to-br from-green-400 to-blue-600\"
        >
          <h1 class=\"mb-3 mt-2 text-2xl underline\">Infos Client</h1>
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
            class=\"ml-3 mb-3 mt-4\"
          >
            <path d=\"M14 2v4a2 2 0 0 0 2 2h4\" />
            <path d=\"M15 18a3 3 0 1 0-6 0\" />
            <path
              d=\"M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z\"
            />
            <circle cx=\"12\" cy=\"13\" r=\"2\" />
          </svg>
        </div>
        <div class=\"flex flex-row m-auto mt-3 mb-3 items-center justify-center\">
          <img
            src=\"https://i.pinimg.com/enabled_lo/564x/7c/bb/5c/7cbb5c5ac31d7b981bb303ad30bc6992.jpg\"
            alt=\"User Photo\"
            class=\"w-24 h-24 sm:w-32 sm:h-32 md:w-36 md:h-36 rounded-full mr-8\"
          />
          <div class=\"text-left flex flex-col justify-center\">
            <p class=\"mb-3 text-green-400\">Surnom: ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 44, $this->source); })()), "surnom", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
            <p class=\"text-green-400\">Tel: ";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 45, $this->source); })()), "telephone", [], "any", false, false, false, 45), "html", null, true);
        yield "</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Carte Demandes en Cours -->
    <div
      class=\"rounded-md font-semibold text-center text-white text-lg sm:text-xl md:text-3xl flex flex-col justify-between bg-gray-900\"
    >
      <div
        class=\"flex flex-row justify-center align-middle bg-gradient-to-br from-green-400 to-blue-600\"
      >
        <h1 class=\"mb-3 mt-2 text-2xl underline\">Infos Dette</h1>
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
          class=\"ml-3 mb-3 mt-3\"
        >
          <path d=\"M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17\" />
          <path
            d=\"m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9\"
          />
          <path d=\"m2 16 6 6\" />
          <circle cx=\"16\" cy=\"9\" r=\"2.9\" />
          <circle cx=\"6\" cy=\"5\" r=\"3\" />
        </svg>
      </div>
      <p class=\"text-green-400 mt-2\">Montant Total: ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["montantTotal"]) || array_key_exists("montantTotal", $context) ? $context["montantTotal"] : (function () { throw new RuntimeError('Variable "montantTotal" does not exist.', 80, $this->source); })()), "html", null, true);
        yield " FCFA</p>
      <p class=\"text-green-400\">Montant Versé: ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["verser"]) || array_key_exists("verser", $context) ? $context["verser"] : (function () { throw new RuntimeError('Variable "verser" does not exist.', 81, $this->source); })()), "html", null, true);
        yield " FCFA</p>
      <p class=\"text-green-400 mb-5\">
        Montant Restant: ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["montantTotal"]) || array_key_exists("montantTotal", $context) ? $context["montantTotal"] : (function () { throw new RuntimeError('Variable "montantTotal" does not exist.', 83, $this->source); })()) - (isset($context["verser"]) || array_key_exists("verser", $context) ? $context["verser"] : (function () { throw new RuntimeError('Variable "verser" does not exist.', 83, $this->source); })())), "html", null, true);
        yield " FCFA
      </p>
    </div>
  </div>
</div>

<div class=\"flex flex-row justify-end mr-8 mb-3\">
  <a
    href=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
        yield "\"
    type=\"button\"
    class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm px-8 py-2.5 text-center me-2 mb-2\"
  >
    Tout
  </a>
  <a
    href=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.showDette", ["etat" => 1, "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98)]), "html", null, true);
        yield "\"
    type=\"button\"
    class=\"text-white bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2\"
  >
    Non-Soldé
  </a>
  <a
    href=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client.showDette", ["etat" => 2, "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105)]), "html", null, true);
        yield "\"
    type=\"button\"
    class=\"text-white bg-green-500 font-medium rounded-lg text-sm px-8 py-2.5 text-center me-2 mb-2\"
  >
    Soldé
  </a>
</div>
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
      <th scope=\"col\" class=\"px-6 py-3 text-center\">
        <p>Détail</p>
      </th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dettes"]) || array_key_exists("dettes", $context) ? $context["dettes"] : (function () { throw new RuntimeError('Variable "dettes" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dette"]) {
            // line 136
            yield "    <tr class=\"bg-white border-b hover:bg-blue-200\">
      <td class=\"px-6 py-4\">
        ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "createdAt", [], "any", false, false, false, 138), "Y-m-d H:i:s"), "html", null, true);
            yield "
      </td>

      <td class=\"px-6 py-4\">
        ";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montant", [], "any", false, false, false, 142), "html", null, true);
            yield "
      </td>

      <td class=\"px-6 py-4\">
        ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "montantVerser", [], "any", false, false, false, 146), "html", null, true);
            yield "
      </td>

      <td class=\"px-6 py-4\">
        ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "getMontant", [], "method", false, false, false, 150) - CoreExtension::getAttribute($this->env, $this->source, $context["dette"], "getMontantVerser", [], "method", false, false, false, 150)), "html", null, true);
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
        // line 175
        yield "  </tbody>
</table>

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
        return "client/dette.client.html.twig";
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
        return array (  310 => 175,  279 => 150,  272 => 146,  265 => 142,  258 => 138,  254 => 136,  250 => 135,  217 => 105,  207 => 98,  197 => 91,  186 => 83,  181 => 81,  177 => 80,  139 => 45,  135 => 44,  94 => 5,  85 => 3,  79 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %} {% block main %} {% set montantTotal = 0 %} {%set
verser = 0 %} {% for dette in dettes %} {% set montantTotal = montantTotal +
dette.getMontant() %} {% set verser = verser + dette.getMontantVerser() %} {%
endfor %}

<div class=\"p-4 sm:p-6 md:p-8 my-6\">
  <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6\">
    <!-- Carte Total des Dettes -->
    <div
      class=\"rounded-lg text-white font-semibold text-lg sm:text-xl md:text-2xl flex flex-col justify-between bg-gray-900\"
    >
      <div class=\"flex flex-col justify-center\">
        <div
          class=\"flex flex-row justify-center align-middle bg-gradient-to-br from-green-400 to-blue-600\"
        >
          <h1 class=\"mb-3 mt-2 text-2xl underline\">Infos Client</h1>
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
            class=\"ml-3 mb-3 mt-4\"
          >
            <path d=\"M14 2v4a2 2 0 0 0 2 2h4\" />
            <path d=\"M15 18a3 3 0 1 0-6 0\" />
            <path
              d=\"M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7z\"
            />
            <circle cx=\"12\" cy=\"13\" r=\"2\" />
          </svg>
        </div>
        <div class=\"flex flex-row m-auto mt-3 mb-3 items-center justify-center\">
          <img
            src=\"https://i.pinimg.com/enabled_lo/564x/7c/bb/5c/7cbb5c5ac31d7b981bb303ad30bc6992.jpg\"
            alt=\"User Photo\"
            class=\"w-24 h-24 sm:w-32 sm:h-32 md:w-36 md:h-36 rounded-full mr-8\"
          />
          <div class=\"text-left flex flex-col justify-center\">
            <p class=\"mb-3 text-green-400\">Surnom: {{ client.surnom }}</p>
            <p class=\"text-green-400\">Tel: {{ client.telephone }}</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Carte Demandes en Cours -->
    <div
      class=\"rounded-md font-semibold text-center text-white text-lg sm:text-xl md:text-3xl flex flex-col justify-between bg-gray-900\"
    >
      <div
        class=\"flex flex-row justify-center align-middle bg-gradient-to-br from-green-400 to-blue-600\"
      >
        <h1 class=\"mb-3 mt-2 text-2xl underline\">Infos Dette</h1>
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
          class=\"ml-3 mb-3 mt-3\"
        >
          <path d=\"M11 15h2a2 2 0 1 0 0-4h-3c-.6 0-1.1.2-1.4.6L3 17\" />
          <path
            d=\"m7 21 1.6-1.4c.3-.4.8-.6 1.4-.6h4c1.1 0 2.1-.4 2.8-1.2l4.6-4.4a2 2 0 0 0-2.75-2.91l-4.2 3.9\"
          />
          <path d=\"m2 16 6 6\" />
          <circle cx=\"16\" cy=\"9\" r=\"2.9\" />
          <circle cx=\"6\" cy=\"5\" r=\"3\" />
        </svg>
      </div>
      <p class=\"text-green-400 mt-2\">Montant Total: {{ montantTotal }} FCFA</p>
      <p class=\"text-green-400\">Montant Versé: {{ verser }} FCFA</p>
      <p class=\"text-green-400 mb-5\">
        Montant Restant: {{ montantTotal - verser }} FCFA
      </p>
    </div>
  </div>
</div>

<div class=\"flex flex-row justify-end mr-8 mb-3\">
  <a
    href=\"{{ path('client.show', { id: client.id }) }}\"
    type=\"button\"
    class=\"text-white bg-gradient-to-br from-green-400 to-blue-600 font-medium rounded-lg text-sm px-8 py-2.5 text-center me-2 mb-2\"
  >
    Tout
  </a>
  <a
    href=\"{{ path('client.showDette', { etat: 1, id: client.id }) }}\"
    type=\"button\"
    class=\"text-white bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2\"
  >
    Non-Soldé
  </a>
  <a
    href=\"{{ path('client.showDette', { etat: 2, id: client.id }) }}\"
    type=\"button\"
    class=\"text-white bg-green-500 font-medium rounded-lg text-sm px-8 py-2.5 text-center me-2 mb-2\"
  >
    Soldé
  </a>
</div>
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
      <th scope=\"col\" class=\"px-6 py-3 text-center\">
        <p>Détail</p>
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

{% endblock %}
", "client/dette.client.html.twig", "/home/sms_12/gestion_dette/templates/client/dette.client.html.twig");
    }
}
