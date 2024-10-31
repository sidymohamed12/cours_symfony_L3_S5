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
class __TwigTemplate_64cc1ad594184eeab5d8b5ea5b66816c extends Template
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
        yield "
\t<div class=\"px-5 w-1/2 mt-5 mb-5 mx-auto border-2 bg-blue-500 py-5\">
\t\t<div class=\"titre\">
\t\t\t<h1 class=\"text-white mb-5 pb-3 text-4xl text-center font-bold border-b-2 border-stone-50\">
\t\t\t\tAjouter un client
\t\t\t</h1>
\t\t\t<img src=\"\" alt=\"\"/>
\t\t</div>

\t\t";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 12, $this->source); })()), 'form_start');
        yield "
\t\t";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 13, $this->source); })()), "surnom", [], "any", false, false, false, 13), 'row');
        yield "
\t\t";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 14, $this->source); })()), "adresse", [], "any", false, false, false, 14), 'row');
        yield "
\t\t";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 15, $this->source); })()), "telephone", [], "any", false, false, false, 15), 'row');
        yield "
\t\t<div class=\"flex items-center w-1/4 bg-black\">
\t\t\t<h2 class=\"mr-5 text-black text-lg font-bold\">créer compte :</h2>
\t\t\t<label class=\"switch mr-5\">
\t\t\t\t<input type=\"checkbox\" class=\"checkbox\" id=\"toggleSwitch\" name=\"toggleSwitch\" ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "get", ["toggleSwitch"], "method", false, false, false, 19) == "on")) {
            yield " checked ";
        }
        yield ">
\t\t\t\t<div class=\"slider\"></div>
\t\t\t</label>
\t\t\t<h2 class=\"mr-5 text-black text-lg font-bold\">oui</h2>
\t\t</div>

\t\t<div id=\"userSwitch\">
\t\t\t<h2 class=\"text-white mb-5 pb-3 mt-5 text-2xl border-b-2 border-neutral-50 font-bold text-center\">
\t\t\t\tcréation compte utilisateur :
\t\t\t</h2>
\t\t\t";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 29, $this->source); })()), "users", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29), 'row');
        yield "

\t\t\t";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 31, $this->source); })()), "users", [], "any", false, false, false, 31), "prenom", [], "any", false, false, false, 31), 'row');
        yield "

\t\t\t";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 33, $this->source); })()), "users", [], "any", false, false, false, 33), "login", [], "any", false, false, false, 33), 'row');
        yield "

\t\t\t";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 35, $this->source); })()), "users", [], "any", false, false, false, 35), "password", [], "any", false, false, false, 35), 'row');
        yield "

\t\t\t<div class=\"hidden\">
\t\t\t\t";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 38, $this->source); })()), "users", [], "any", false, false, false, 38), "save", [], "any", false, false, false, 38), 'row');
        yield "
\t\t\t</div>


\t\t\t<div class=\"grid w-full max-w-xs items-center gap-1.5\">
\t\t\t\t";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 43, $this->source); })()), "users", [], "any", false, false, false, 43), "brochure", [], "any", false, false, false, 43), 'row');
        yield "

\t\t\t</div>

\t\t</div>

\t\t<div class=\"flex justify-end\">
\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 50, $this->source); })()), "save", [], "any", false, false, false, 50), 'row');
        yield "
\t\t</div>

\t\t";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formClient"]) || array_key_exists("formClient", $context) ? $context["formClient"] : (function () { throw new RuntimeError('Variable "formClient" does not exist.', 53, $this->source); })()), 'form_end');
        yield "
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
        return array (  166 => 53,  160 => 50,  150 => 43,  142 => 38,  136 => 35,  131 => 33,  126 => 31,  121 => 29,  106 => 19,  99 => 15,  95 => 14,  91 => 13,  87 => 12,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block main %}

\t<div class=\"px-5 w-1/2 mt-5 mb-5 mx-auto border-2 bg-blue-500 py-5\">
\t\t<div class=\"titre\">
\t\t\t<h1 class=\"text-white mb-5 pb-3 text-4xl text-center font-bold border-b-2 border-stone-50\">
\t\t\t\tAjouter un client
\t\t\t</h1>
\t\t\t<img src=\"\" alt=\"\"/>
\t\t</div>

\t\t{{ form_start(formClient) }}
\t\t{{ form_row(formClient.surnom) }}
\t\t{{ form_row(formClient.adresse) }}
\t\t{{ form_row(formClient.telephone) }}
\t\t<div class=\"flex items-center w-1/4 bg-black\">
\t\t\t<h2 class=\"mr-5 text-black text-lg font-bold\">créer compte :</h2>
\t\t\t<label class=\"switch mr-5\">
\t\t\t\t<input type=\"checkbox\" class=\"checkbox\" id=\"toggleSwitch\" name=\"toggleSwitch\" {% if app.request.get('toggleSwitch') == 'on' %} checked {% endif %}>
\t\t\t\t<div class=\"slider\"></div>
\t\t\t</label>
\t\t\t<h2 class=\"mr-5 text-black text-lg font-bold\">oui</h2>
\t\t</div>

\t\t<div id=\"userSwitch\">
\t\t\t<h2 class=\"text-white mb-5 pb-3 mt-5 text-2xl border-b-2 border-neutral-50 font-bold text-center\">
\t\t\t\tcréation compte utilisateur :
\t\t\t</h2>
\t\t\t{{ form_row(formClient.users.nom) }}

\t\t\t{{ form_row(formClient.users.prenom) }}

\t\t\t{{ form_row(formClient.users.login) }}

\t\t\t{{ form_row(formClient.users.password) }}

\t\t\t<div class=\"hidden\">
\t\t\t\t{{ form_row(formClient.users.save) }}
\t\t\t</div>


\t\t\t<div class=\"grid w-full max-w-xs items-center gap-1.5\">
\t\t\t\t{{ form_row(formClient.users.brochure) }}

\t\t\t</div>

\t\t</div>

\t\t<div class=\"flex justify-end\">
\t\t\t{{ form_row(formClient.save) }}
\t\t</div>

\t\t{{ form_end(formClient) }}
\t</div>

{% endblock %}
", "client/form.html.twig", "/home/sms_12/gestion_dette/templates/client/form.html.twig");
    }
}
