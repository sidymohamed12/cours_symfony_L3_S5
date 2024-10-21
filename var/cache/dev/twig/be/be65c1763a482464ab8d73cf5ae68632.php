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

/* dette/form.html.twig */
class __TwigTemplate_28cd9d83eeba6c8c7c8af0d5de4deb47 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dette/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dette/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dette/form.html.twig", 1);
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

        // line 2
        yield "
<div
  class=\"bg-gradient-to-br from-green-400 to-blue-600 px-6 py-5 mx-auto mt-14 my-5 box-shadow3\"
  style=\"width: 60%\"
>
  <h1 class=\"text-center text-3xl mb-8 font-semibold underline\">
    Nouvelle Ajout de Dette
  </h1>
  <form action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dette.create");
        yield "\" method=\"post\">
    <!-- Client -->
    <div>
      <label for=\"client\" class=\"block mb-2 text-sm font-medium text-slate-800\"
        >Client</label
      >
      <select
        name=\"client\"
        class=\"bg-gray-50 border border-slate-800 text-sm font-medium rounded-lg w-full p-2.5\"
      >
        <option selected>...</option>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 22
            yield "        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "surnom", [], "any", false, false, false, 22), "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "      </select>
    </div>

    <!-- DIV INLINE pour Article et Quantité -->
    <div class=\"flex flex-row mt-5 justify-between items-center m-auto mb-4\">
      <!-- Article -->
      <div>
        <label
          for=\"article\"
          class=\"block mb-2 text-sm font-medium text-slate-800\"
          >Article</label
        >
        <select
          name=\"article\"
          class=\"bg-gray-50 border border-slate-800 text-slate-800 text-sm font-medium rounded-lg w-full p-2.5\"
        >
          <option selected>...</option>
          ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 42
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "libelle", [], "any", false, false, false, 42), "html", null, true);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "        </select>
      </div>

      <!-- Quantité prise -->
      <div>
        <label
          for=\"quantity\"
          class=\"block mb-2 text-sm font-medium text-slate-800\"
          >Quantité prise</label
        >
        <input
          type=\"number\"
          name=\"quantity\"
          class=\"bg-gray-50 border w-full border-gray-300 text-slate-800 text-sm rounded-lg block p-2.5\"
        />
      </div>

      <button
        name=\"addArticle\"
        type=\"submit\"
        class=\"bg-green-400 text-slate-800 font-medium rounded px-5 py-2 text-center mt-6 w-1/5 hover:shadow-none\"
      >
        Ajouter
      </button>
    </div>
  </form>

  <!-- Tableau des articles ajoutés -->
  <div class=\"table-responsive\">
    <table
      class=\"box-shadow-black2 border-3 mx-auto text-center w-full text-slate-800 mt-16\"
    >
      <thead class=\"border-b-2 border-slate-800\">
        <tr class=\"bg-gray-50\">
          <th scope=\"col\">Article</th>
          <th scope=\"col\">Quantité</th>
          <th scope=\"col\">Prix</th>
          <th scope=\"col\">Montant</th>
        </tr>
      </thead>
      <tbody class=\"text-center divide-y divide-slate-800\">
        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 86
            yield "        <tr>
          <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "article", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
          <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
          <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 89), "html", null, true);
            yield "</td>
          <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "      </tbody>
    </table>
  </div>

  <!-- Bouton pour enregistrer la dette -->
  <form
    action=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dette.create");
        yield "\"
    method=\"post\"
    class=\"flex justify-center align-middle\"
  >
    <button
      name=\"saveDette\"
      type=\"submit\"
      class=\"text-slate-800 bg-green-400 font-medium rounded box-shadow px-5 py-3 text-center mt-8 mb-3 mx-auto w-1/2\"
    >
      Enregistrer
    </button>
  </form>
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
        return "dette/form.html.twig";
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
        return array (  227 => 99,  219 => 93,  210 => 90,  206 => 89,  202 => 88,  198 => 87,  195 => 86,  191 => 85,  148 => 44,  137 => 42,  133 => 41,  114 => 24,  103 => 22,  99 => 21,  85 => 10,  75 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %} {% block main %}

<div
  class=\"bg-gradient-to-br from-green-400 to-blue-600 px-6 py-5 mx-auto mt-14 my-5 box-shadow3\"
  style=\"width: 60%\"
>
  <h1 class=\"text-center text-3xl mb-8 font-semibold underline\">
    Nouvelle Ajout de Dette
  </h1>
  <form action=\"{{ path('dette.create') }}\" method=\"post\">
    <!-- Client -->
    <div>
      <label for=\"client\" class=\"block mb-2 text-sm font-medium text-slate-800\"
        >Client</label
      >
      <select
        name=\"client\"
        class=\"bg-gray-50 border border-slate-800 text-sm font-medium rounded-lg w-full p-2.5\"
      >
        <option selected>...</option>
        {% for client in clients %}
        <option value=\"{{ client.id }}\">{{ client.surnom }}</option>
        {% endfor %}
      </select>
    </div>

    <!-- DIV INLINE pour Article et Quantité -->
    <div class=\"flex flex-row mt-5 justify-between items-center m-auto mb-4\">
      <!-- Article -->
      <div>
        <label
          for=\"article\"
          class=\"block mb-2 text-sm font-medium text-slate-800\"
          >Article</label
        >
        <select
          name=\"article\"
          class=\"bg-gray-50 border border-slate-800 text-slate-800 text-sm font-medium rounded-lg w-full p-2.5\"
        >
          <option selected>...</option>
          {% for article in articles %}
          <option value=\"{{ article.id }}\">{{ article.libelle }}</option>
          {% endfor %}
        </select>
      </div>

      <!-- Quantité prise -->
      <div>
        <label
          for=\"quantity\"
          class=\"block mb-2 text-sm font-medium text-slate-800\"
          >Quantité prise</label
        >
        <input
          type=\"number\"
          name=\"quantity\"
          class=\"bg-gray-50 border w-full border-gray-300 text-slate-800 text-sm rounded-lg block p-2.5\"
        />
      </div>

      <button
        name=\"addArticle\"
        type=\"submit\"
        class=\"bg-green-400 text-slate-800 font-medium rounded px-5 py-2 text-center mt-6 w-1/5 hover:shadow-none\"
      >
        Ajouter
      </button>
    </div>
  </form>

  <!-- Tableau des articles ajoutés -->
  <div class=\"table-responsive\">
    <table
      class=\"box-shadow-black2 border-3 mx-auto text-center w-full text-slate-800 mt-16\"
    >
      <thead class=\"border-b-2 border-slate-800\">
        <tr class=\"bg-gray-50\">
          <th scope=\"col\">Article</th>
          <th scope=\"col\">Quantité</th>
          <th scope=\"col\">Prix</th>
          <th scope=\"col\">Montant</th>
        </tr>
      </thead>
      <tbody class=\"text-center divide-y divide-slate-800\">
        {% for item in panier %}
        <tr>
          <td>{{ item.article }}</td>
          <td>{{ item.quantity }}</td>
          <td>{{ item.price }}</td>
          <td>{{ item.total }}</td>
        </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>

  <!-- Bouton pour enregistrer la dette -->
  <form
    action=\"{{ path('dette.create') }}\"
    method=\"post\"
    class=\"flex justify-center align-middle\"
  >
    <button
      name=\"saveDette\"
      type=\"submit\"
      class=\"text-slate-800 bg-green-400 font-medium rounded box-shadow px-5 py-3 text-center mt-8 mb-3 mx-auto w-1/2\"
    >
      Enregistrer
    </button>
  </form>
</div>

{% endblock %}
", "dette/form.html.twig", "/home/sms_12/gestion_dette/templates/dette/form.html.twig");
    }
}
