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
            'title' => [$this, 'block_title'],
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

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello ArticleController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "        ";
        // line 7
        yield "        <div class=\"margin-auto mt-10 p-5\">
            <label for=\"table-search\" class=\"sr-only\">Search</label>
            <div class=\"relative\">
                <div class=\"absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none\">
                    <svg class=\"w-5 h-5 text-gray-500 \" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\" clip-rule=\"evenodd\"></path></svg>
                </div>
                <input type=\"text\" id=\"table-search\" class=\"block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500      \" placeholder=\"Search for items\">
            </div>

            <div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
                <div class=\"flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4\">
                    <div>
                        <div id=\"dropdownRadio\" class=\"z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow  \" data-popper-reference-hidden=\"\" data-popper-escaped=\"\" data-popper-placement=\"top\" style=\"position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);\">
                            <ul class=\"p-3 space-y-1 text-sm text-gray-700 \" aria-labelledby=\"dropdownRadioButton\">
                                <li>
                                    <div class=\"flex items-center p-2 rounded hover:bg-gray-100 \">
                                        <input id=\"filter-radio-example-1\" type=\"radio\" value=\"\" name=\"filter-radio\" class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2  \">
                                        <label for=\"filter-radio-example-1\" class=\"w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300\">Last day</label>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"flex items-center p-2 rounded hover:bg-gray-100 \">
                                        <input checked=\"\" id=\"filter-radio-example-2\" type=\"radio\" value=\"\" name=\"filter-radio\" class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2  \">
                                        <label for=\"filter-radio-example-2\" class=\"w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300\">Last 7 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"flex items-center p-2 rounded hover:bg-gray-100 \">
                                        <input id=\"filter-radio-example-3\" type=\"radio\" value=\"\" name=\"filter-radio\" class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2  \">
                                        <label for=\"filter-radio-example-3\" class=\"w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300\">Last 30 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"flex items-center p-2 rounded hover:bg-gray-100 \">
                                        <input id=\"filter-radio-example-4\" type=\"radio\" value=\"\" name=\"filter-radio\" class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2  \">
                                        <label for=\"filter-radio-example-4\" class=\"w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300\">Last month</label>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"flex items-center p-2 rounded hover:bg-gray-100 \">
                                        <input id=\"filter-radio-example-5\" type=\"radio\" value=\"\" name=\"filter-radio\" class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2  \">
                                        <label for=\"filter-radio-example-5\" class=\"w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300\">Last year</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                    <table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500\">
                        <thead class=\"text-sm text-white uppercase bg-green-500 \">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Ref
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Livelle
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Prix
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Quantité
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=\"bg-white border-b hover:bg-green-200\">

                                <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap \">
                                    Apple MacBook Pro 17\"
                                </th>
                                <td class=\"px-6 py-4\">
                                    Silver
                                </td>
                                <td class=\"px-6 py-4\">
                                    Laptop
                                </td>
                                <td class=\"px-6 py-4\">
                                    \$2999
                                </td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"#\" class=\"font-medium text-green-500  hover:underline\">voir détail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <nav aria-label=\"Page navigation example\" class=\"mt-3 flex justify-end mb-5\">
                    <ul class=\"flex items-center -space-x-px h-8 text-sm\">
                        <li>
                            <a href=\"#\" class=\"flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700     \">
                                <span class=\"sr-only\">Previous</span>
                                <svg class=\"w-2.5 h-2.5 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 6 10\">
                                <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 1 1 5l4 4\"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700     \">1</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700     \">2</a>
                        </li>
                        <li>
                            <a href=\"#\" aria-current=\"page\" class=\"z-10 flex items-center justify-center px-3 h-8 leading-tight text-green-500 border border-green-300 bg-green-100 hover:bg-green-200 hover:text-green-400   \">3</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700     \">4</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700     \">5</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700     \">
                                <span class=\"sr-only\">Next</span>
                                <svg class=\"w-2.5 h-2.5 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 6 10\">
                                <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 9 4-4-4-4\"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
            </nav>
        </div>

        </div>
        ";
        // line 135
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
        return array (  231 => 135,  102 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ArticleController!{% endblock %}

{% block main %}
        {# -------------------------------- TABLEAU ----------------------- #}
        <div class=\"margin-auto mt-10 p-5\">
            <label for=\"table-search\" class=\"sr-only\">Search</label>
            <div class=\"relative\">
                <div class=\"absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none\">
                    <svg class=\"w-5 h-5 text-gray-500 \" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z\" clip-rule=\"evenodd\"></path></svg>
                </div>
                <input type=\"text\" id=\"table-search\" class=\"block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500      \" placeholder=\"Search for items\">
            </div>

            <div class=\"relative overflow-x-auto sm:rounded-lg shadow-xl\">
                <div class=\"flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4\">
                    <div>
                        <div id=\"dropdownRadio\" class=\"z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow  \" data-popper-reference-hidden=\"\" data-popper-escaped=\"\" data-popper-placement=\"top\" style=\"position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);\">
                            <ul class=\"p-3 space-y-1 text-sm text-gray-700 \" aria-labelledby=\"dropdownRadioButton\">
                                <li>
                                    <div class=\"flex items-center p-2 rounded hover:bg-gray-100 \">
                                        <input id=\"filter-radio-example-1\" type=\"radio\" value=\"\" name=\"filter-radio\" class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2  \">
                                        <label for=\"filter-radio-example-1\" class=\"w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300\">Last day</label>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"flex items-center p-2 rounded hover:bg-gray-100 \">
                                        <input checked=\"\" id=\"filter-radio-example-2\" type=\"radio\" value=\"\" name=\"filter-radio\" class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2  \">
                                        <label for=\"filter-radio-example-2\" class=\"w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300\">Last 7 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"flex items-center p-2 rounded hover:bg-gray-100 \">
                                        <input id=\"filter-radio-example-3\" type=\"radio\" value=\"\" name=\"filter-radio\" class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2  \">
                                        <label for=\"filter-radio-example-3\" class=\"w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300\">Last 30 days</label>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"flex items-center p-2 rounded hover:bg-gray-100 \">
                                        <input id=\"filter-radio-example-4\" type=\"radio\" value=\"\" name=\"filter-radio\" class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2  \">
                                        <label for=\"filter-radio-example-4\" class=\"w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300\">Last month</label>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"flex items-center p-2 rounded hover:bg-gray-100 \">
                                        <input id=\"filter-radio-example-5\" type=\"radio\" value=\"\" name=\"filter-radio\" class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500   focus:ring-2  \">
                                        <label for=\"filter-radio-example-5\" class=\"w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300\">Last year</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                    <table class=\"w-full mb-5 text-sm text-left rtl:text-right text-gray-500\">
                        <thead class=\"text-sm text-white uppercase bg-green-500 \">
                            <tr>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Ref
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Livelle
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Prix
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Quantité
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=\"bg-white border-b hover:bg-green-200\">

                                <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap \">
                                    Apple MacBook Pro 17\"
                                </th>
                                <td class=\"px-6 py-4\">
                                    Silver
                                </td>
                                <td class=\"px-6 py-4\">
                                    Laptop
                                </td>
                                <td class=\"px-6 py-4\">
                                    \$2999
                                </td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"#\" class=\"font-medium text-green-500  hover:underline\">voir détail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <nav aria-label=\"Page navigation example\" class=\"mt-3 flex justify-end mb-5\">
                    <ul class=\"flex items-center -space-x-px h-8 text-sm\">
                        <li>
                            <a href=\"#\" class=\"flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700     \">
                                <span class=\"sr-only\">Previous</span>
                                <svg class=\"w-2.5 h-2.5 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 6 10\">
                                <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 1 1 5l4 4\"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700     \">1</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700     \">2</a>
                        </li>
                        <li>
                            <a href=\"#\" aria-current=\"page\" class=\"z-10 flex items-center justify-center px-3 h-8 leading-tight text-green-500 border border-green-300 bg-green-100 hover:bg-green-200 hover:text-green-400   \">3</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700     \">4</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700     \">5</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700     \">
                                <span class=\"sr-only\">Next</span>
                                <svg class=\"w-2.5 h-2.5 rtl:rotate-180\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 6 10\">
                                <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m1 9 4-4-4-4\"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
            </nav>
        </div>

        </div>
        {# --------------------------------------------------- #}

</div>
{% endblock %}
", "article/index.html.twig", "/home/sms_12/gestion_dette/templates/article/index.html.twig");
    }
}
