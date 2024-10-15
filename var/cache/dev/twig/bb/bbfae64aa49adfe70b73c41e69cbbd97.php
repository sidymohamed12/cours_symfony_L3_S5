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

/* client/form.html.twig */
class __TwigTemplate_59d85d1bc4a33094626c806c41d5a900 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/form.html.twig", 1);
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
<div class=\"px-5 w-1/2 mt-5 mx-auto border-2 bg-blue-500 py-5\">
  <div class=\"titre\">
    <h1
      class=\"text-white mb-5 pb-3 text-4xl text-center font-bold border-b-2 border-stone-50\"
    >
      Ajouter un client
    </h1>
    <img src=\"\" alt=\"\" />
  </div>

  ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
  ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 14, $this->source); })()), "surnom", [], "any", false, false, false, 14), 'row');
        yield "
  ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 15, $this->source); })()), "adresse", [], "any", false, false, false, 15), 'row');
        yield "
  ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 16, $this->source); })()), "telephone", [], "any", false, false, false, 16), 'row');
        yield "
  <div class=\"flex items-center w-1/4 bg-black\">
    <h2 class=\"mr-5 text-black text-lg font-bold\">créer compte :</h2>
    <label class=\"switch mr-5\">
      <input type=\"checkbox\" class=\"checkbox\" id=\"toggleSwitch\"
      name=\"toggleSwitch\" ";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "get", ["toggleSwitch"], "method", false, false, false, 21) == "on")) {
            // line 22
            yield "      checked ";
        }
        yield ">
      <div class=\"slider\"></div>
    </label>
    <h2 class=\"mr-5 text-black text-lg font-bold\">oui</h2>
  </div>

  <div id=\"userSwitch\">
    <h2
      class=\"text-white mb-5 pb-3 mt-5 text-2xl border-b-2 border-neutral-50 font-bold text-center\"
    >
      création compte utilisateur :
    </h2>
    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'row');
        yield "
    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'row');
        yield "
    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 36, $this->source); })()), "login", [], "any", false, false, false, 36), 'row');
        yield "
    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formUser"]) || array_key_exists("formUser", $context) ? $context["formUser"] : (function () { throw new RuntimeError('Variable "formUser" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), 'row');
        yield "
  </div>

  <div class=\"flex justify-end\">
    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 41, $this->source); })()), "save", [], "any", false, false, false, 41), 'row');
        yield "
  </div>

  ";
        // line 44
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 44, $this->source); })()), 'form_end');
        yield "
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
        return "client/form.html.twig";
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
        return array (  151 => 44,  145 => 41,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  110 => 22,  108 => 21,  100 => 16,  96 => 15,  92 => 14,  88 => 13,  75 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %} {% block main %}

<div class=\"px-5 w-1/2 mt-5 mx-auto border-2 bg-blue-500 py-5\">
  <div class=\"titre\">
    <h1
      class=\"text-white mb-5 pb-3 text-4xl text-center font-bold border-b-2 border-stone-50\"
    >
      Ajouter un client
    </h1>
    <img src=\"\" alt=\"\" />
  </div>

  {{ form_start(formClient) }}
  {{ form_row(formClient.surnom) }}
  {{ form_row(formClient.adresse) }}
  {{ form_row(formClient.telephone) }}
  <div class=\"flex items-center w-1/4 bg-black\">
    <h2 class=\"mr-5 text-black text-lg font-bold\">créer compte :</h2>
    <label class=\"switch mr-5\">
      <input type=\"checkbox\" class=\"checkbox\" id=\"toggleSwitch\"
      name=\"toggleSwitch\" {% if app.request.get('toggleSwitch') == 'on' %}
      checked {% endif %}>
      <div class=\"slider\"></div>
    </label>
    <h2 class=\"mr-5 text-black text-lg font-bold\">oui</h2>
  </div>

  <div id=\"userSwitch\">
    <h2
      class=\"text-white mb-5 pb-3 mt-5 text-2xl border-b-2 border-neutral-50 font-bold text-center\"
    >
      création compte utilisateur :
    </h2>
    {{ form_row(formUser.nom) }}
    {{ form_row(formUser.prenom) }}
    {{ form_row(formUser.login) }}
    {{ form_row(formUser.password) }}
  </div>

  <div class=\"flex justify-end\">
    {{ form_row(formClient.save) }}
  </div>

  {{ form_end(formClient) }}
</div>

{% endblock %}
", "client/form.html.twig", "/home/sms_12/gestion_dette/templates/client/form.html.twig");
    }
}
