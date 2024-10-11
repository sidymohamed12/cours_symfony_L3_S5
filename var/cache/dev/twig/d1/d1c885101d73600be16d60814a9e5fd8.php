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
class __TwigTemplate_6ab95c603d79495b90b1210a896fbea3 extends Template
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
            'body' => [$this, 'block_body'],
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

        yield "Hello ClientController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<header>
        <nav class=\"bg-white border-gray-200 px-4 lg:px-6 py-2.5 \">
        ";
        // line 9
        yield "        <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
            <a href=\"https://flowbite.com/\" class=\"flex items-center space-x-3 rtl:space-x-reverse\">
                <img src=\"https://flowbite.com/docs/images/logo.svg\" class=\"h-8\" alt=\"Flowbite Logo\" />
                <span class=\"self-center text-2xl font-semibold whitespace-nowrap \">Flowbite</span>
            </a>
            <div class=\"flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse\">
                <button type=\"button\" class=\"flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600\" id=\"user-menu-button\" aria-expanded=\"false\" data-dropdown-toggle=\"user-dropdown\" data-dropdown-placement=\"bottom\">
                    <span class=\"sr-only\">Open user menu</span>
                    <img class=\"w-8 h-8 rounded-full\" src=\"/docs/images/people/profile-picture-3.jpg\" alt=\"user photo\">
                </button>
                <!-- Dropdown menu -->
                <div class=\"z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow  \" id=\"user-dropdown\">
                    <div class=\"px-4 py-3\">
                        <span class=\"block text-sm text-gray-900 \">Bonnie Green</span>
                        <span class=\"block text-sm  text-gray-500 truncate \">name@flowbite.com</span>
                    </div>
                    <ul class=\"py-2\" aria-labelledby=\"user-menu-button\">
                        <li>
                            <a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   \">Dashboard</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   \">Settings</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   \">Earnings</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   \">Sign out</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle=\"navbar-user\" type=\"button\" class=\"inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200   dark:focus:ring-gray-600\" aria-controls=\"navbar-user\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Open main menu</span>
                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 17 14\">
                        <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 1h15M1 7h15M1 13h15\"/>
                    </svg>
                </button>
            </div>
            <div class=\"items-center justify-between hidden w-full md:flex md:w-auto md:order-1\" id=\"navbar-user\">
                <ul class=\"flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white  md:dark:bg-gray-900 \">
                     <li>
            <a href=\"#\" class=\"flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group\">
               <svg class=\"w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 22 21\">
                  <path d=\"M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z\"/>
                  <path d=\"M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z\"/>
               </svg>
               <span class=\"ms-3\">Dashboard</span>
            </a>
         </li>
         <li>
            <a href=\"#\" class=\"flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group\">
               <svg class=\"flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 18 18\">
                  <path d=\"M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z\"/>
               </svg>
               <span class=\"flex-1 ms-3 whitespace-nowrap\">Kanban</span>
            </a>
         </li>
         <li>
            <a href=\"#\" class=\"flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group\">
               <svg class=\"flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                  <path d=\"m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z\"/>
               </svg>
               <span class=\"flex-1 ms-3 whitespace-nowrap\">Inbox</span>
            </a>
         </li>
         <li>
            <a href=\"#\" class=\"flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group\">
               <svg class=\"flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 18\">
                  <path d=\"M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z\"/>
               </svg>
               <span class=\"flex-1 ms-3 whitespace-nowrap\">Users</span>
            </a>
         </li>
         <li>
            <a href=\"#\" class=\"flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group\">
               <svg class=\"flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 18 20\">
                  <path d=\"M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z\"/>
               </svg>
               <span class=\"flex-1 ms-3 whitespace-nowrap\">Products</span>
            </a>
         </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
        ";
        // line 96
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
                                    Product name
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Color
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Category
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Price
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
                            <tr class=\"bg-white border-b hover:bg-green-200  \">
                                <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap \">
                                    Microsoft Surface Pro
                                </th>
                                <td class=\"px-6 py-4\">
                                    White
                                </td>
                                <td class=\"px-6 py-4\">
                                    Laptop PC
                                </td>
                                <td class=\"px-6 py-4\">
                                    \$1999
                                </td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"#\" class=\"font-medium text-green-500  hover:underline\">voir détail</a>
                                </td>
                            </tr>
                            <tr class=\"bg-white border-b hover:bg-green-200 \">
                                <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap \">
                                    Magic Mouse 2
                                </th>
                                <td class=\"px-6 py-4\">
                                    Black
                                </td>
                                <td class=\"px-6 py-4\">
                                    Accessories
                                </td>
                                <td class=\"px-6 py-4\">
                                    \$99
                                </td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"#\" class=\"font-medium text-green-500  hover:underline\">voir détail</a>
                                </td>
                            </tr>
                            <tr class=\"bg-white border-b hover:bg-green-200 \">
                                <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap \">
                                    Apple Watch
                                </th>
                                <td class=\"px-6 py-4\">
                                    Silver
                                </td>
                                <td class=\"px-6 py-4\">
                                    Accessories
                                </td>
                                <td class=\"px-6 py-4\">
                                    \$179
                                </td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"#\" class=\"font-medium text-green-500  hover:underline\">voir détail</a>
                                </td>
                            </tr>
                            <tr class=\"bg-white border-b hover:bg-green-200\">
                                <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap \">
                                    iPad
                                </th>
                                <td class=\"px-6 py-4\">
                                    Gold
                                </td>
                                <td class=\"px-6 py-4\">
                                    Tablet
                                </td>
                                <td class=\"px-6 py-4\">
                                    \$699
                                </td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"#\" class=\"font-medium text-green-500  hover:underline\">voir détail</a>
                                </td>
                            </tr>
                            <tr class=\"bg-white border-b hover:bg-green-200 \">
                                <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap \">
                                    Apple iMac 27\"
                                </th>
                                <td class=\"px-6 py-4\">
                                    Silver
                                </td>
                                <td class=\"px-6 py-4\">
                                    PC Desktop
                                </td>
                                <td class=\"px-6 py-4\">
                                    \$3999
                                </td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"#\" class=\"font-medium text-green-500 hover:underline\">voir détail</a>
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
        // line 309
        yield "

    ";
        // line 312
        yield "
 
<div class=\"flex justify-center items-center h-full w-full\">
  <div class=\"grid gap-8\">
    <section
      id=\"back-div\"
      class=\"bg-gradient-to-r from-blue-500 to-purple-500 rounded-3xl\"
    >
      <div
        class=\"border-8 border-transparent rounded-xl bg-white dark:bg-gray-900 shadow-xl p-8 m-2\"
      >
        <h1
          class=\"text-5xl font-bold text-center cursor-default dark:text-gray-300 text-gray-900\"
        >
          Log in
        </h1>
        <form action=\"#\" method=\"post\" class=\"space-y-6\">
          <div>
            <label for=\"email\" class=\"block mb-2 text-lg dark:text-gray-300\"
              >Email</label
            >
            <input
              id=\"email\"
              class=\"border p-3 shadow-md dark:bg-indigo-700 dark:text-gray-300 dark:border-gray-700 border-gray-300 rounded-lg w-full focus:ring-2 focus:ring-blue-500 transition transform hover:scale-105 duration-300\"
              type=\"email\"
              placeholder=\"Email\"
              required=\"\"
            />
          </div>
          <div>
            <label for=\"password\" class=\"block mb-2 text-lg dark:text-gray-300\"
              >Password</label
            >
            <input
              id=\"password\"
              class=\"border p-3 shadow-md dark:bg-indigo-700 dark:text-gray-300 dark:border-gray-700 border-gray-300 rounded-lg w-full focus:ring-2 focus:ring-blue-500 transition transform hover:scale-105 duration-300\"
              type=\"password\"
              placeholder=\"Password\"
              required=\"\"
            />
          </div>
          <a href=\"#\" class=\"text-blue-400 text-sm transition hover:underline\"
            >Forget your password?</a
          >
          <button
            class=\"w-full p-3 mt-4 text-white bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500\"
            type=\"submit\"
          >
            LOG IN
          </button>
        </form>
        <div class=\"flex flex-col mt-4 text-sm text-center dark:text-gray-300\">
          <p>
            Don't have an account?
            <a href=\"#\" class=\"text-blue-400 transition hover:underline\"
              >Sign Up</a
            >
          </p>
        </div>
        <div id=\"third-party-auth\" class=\"flex justify-center gap-4 mt-5\">
          <button
            class=\"p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg\"
          >
            <img
              class=\"w-6 h-6\"
              loading=\"lazy\"
              src=\"https://ucarecdn.com/8f25a2ba-bdcf-4ff1-b596-088f330416ef/\"
              alt=\"Google\"
            />
          </button>
          <button
            class=\"p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg\"
          >
            <img
              class=\"w-6 h-6\"
              loading=\"lazy\"
              src=\"https://ucarecdn.com/95eebb9c-85cf-4d12-942f-3c40d7044dc6/\"
              alt=\"LinkedIn\"
            />
          </button>
          <button
            class=\"p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg\"
          >
            <img
              class=\"w-6 h-6 dark:invert\"
              loading=\"lazy\"
              src=\"https://ucarecdn.com/be5b0ffd-85e8-4639-83a6-5162dfa15a16/\"
              alt=\"GitHub\"
            />
          </button>
          <button
            class=\"p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg\"
          >
            <img
              class=\"w-6 h-6\"
              loading=\"lazy\"
              src=\"https://ucarecdn.com/6f56c0f1-c9c0-4d72-b44d-51a79ff38ea9/\"
              alt=\"Facebook\"
            />
          </button>
          <button
            class=\"p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg\"
          >
            <img
              class=\"w-6 h-6\"
              loading=\"lazy\"
              src=\"https://ucarecdn.com/82d7ca0a-c380-44c4-ba24-658723e2ab07/\"
              alt=\"Twitter\"
            />
          </button>
          <button
            class=\"p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg\"
          >
            <img
              class=\"w-6 h-6\"
              loading=\"lazy\"
              src=\"https://ucarecdn.com/3277d952-8e21-4aad-a2b7-d484dad531fb/\"
              alt=\"Apple\"
            />
          </button>
        </div>
        <div class=\"mt-4 text-center text-sm text-gray-500\">
          <p>
            By signing in, you agree to our
            <a href=\"#\" class=\"text-blue-400 transition hover:underline\"
              >Terms</a
            >
            and
            <a href=\"#\" class=\"text-blue-400 transition hover:underline\"
              >Privacy Policy</a
            >.
          </p>
        </div>
      </div>
    </section>
  </div>
</div>


";
        // line 452
        yield "
";
        // line 454
        yield "

<div class=\"flex flex-col items-center justify-center h-screen dark\">
  <div class=\"w-full max-w-md bg-gray-800 rounded-lg shadow-md p-6\">
    <h2 class=\"text-2xl font-bold text-gray-200 mb-4\">Sign Up</h2>
    <form class=\"flex flex-col\">
      <div class=\"flex space-x-4 mb-4\">
        <input
          placeholder=\"First Name\"
          class=\"bg-gray-700 text-gray-200 border-0 rounded-md p-2 w-1/2 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150\"
          type=\"text\"
        />
        <input
          placeholder=\"Last Name\"
          class=\"bg-gray-700 text-gray-200 border-0 rounded-md p-2 w-1/2 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150\"
          type=\"text\"
        />
      </div>
      <input
        placeholder=\"Email\"
        class=\"bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150\"
        type=\"email\"
      />
      <input
        placeholder=\"Confirm Email\"
        class=\"bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150\"
        type=\"email\"
      /> 
        
      <input
        placeholder=\"Password\"
        class=\"bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150\"
        type=\"password\"
      />
      <input
        placeholder=\"Confirm Password\"
        class=\"bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150\"
        type=\"password\"
      />
     
      <button
        class=\"bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150\"
        type=\"submit\"
      >
        Sign Up
      </button>
    </form>
  </div>
</div>


<label class=\"switch\">
    <input type=\"checkbox\" class=\"checkbox\" id=\"toggleSwitch\">
    <div class=\"slider\"></div>
</label>

        ";
        // line 519
        yield "
";
        // line 521
        yield "
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
        return array (  615 => 521,  612 => 519,  554 => 454,  551 => 452,  410 => 312,  406 => 309,  192 => 96,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ClientController!{% endblock %}

{% block body %}
<header>
        <nav class=\"bg-white border-gray-200 px-4 lg:px-6 py-2.5 \">
        {# -------------------------- #}
        <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
            <a href=\"https://flowbite.com/\" class=\"flex items-center space-x-3 rtl:space-x-reverse\">
                <img src=\"https://flowbite.com/docs/images/logo.svg\" class=\"h-8\" alt=\"Flowbite Logo\" />
                <span class=\"self-center text-2xl font-semibold whitespace-nowrap \">Flowbite</span>
            </a>
            <div class=\"flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse\">
                <button type=\"button\" class=\"flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600\" id=\"user-menu-button\" aria-expanded=\"false\" data-dropdown-toggle=\"user-dropdown\" data-dropdown-placement=\"bottom\">
                    <span class=\"sr-only\">Open user menu</span>
                    <img class=\"w-8 h-8 rounded-full\" src=\"/docs/images/people/profile-picture-3.jpg\" alt=\"user photo\">
                </button>
                <!-- Dropdown menu -->
                <div class=\"z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow  \" id=\"user-dropdown\">
                    <div class=\"px-4 py-3\">
                        <span class=\"block text-sm text-gray-900 \">Bonnie Green</span>
                        <span class=\"block text-sm  text-gray-500 truncate \">name@flowbite.com</span>
                    </div>
                    <ul class=\"py-2\" aria-labelledby=\"user-menu-button\">
                        <li>
                            <a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   \">Dashboard</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   \">Settings</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   \">Earnings</a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100   \">Sign out</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle=\"navbar-user\" type=\"button\" class=\"inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200   dark:focus:ring-gray-600\" aria-controls=\"navbar-user\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Open main menu</span>
                    <svg class=\"w-5 h-5\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 17 14\">
                        <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 1h15M1 7h15M1 13h15\"/>
                    </svg>
                </button>
            </div>
            <div class=\"items-center justify-between hidden w-full md:flex md:w-auto md:order-1\" id=\"navbar-user\">
                <ul class=\"flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white  md:dark:bg-gray-900 \">
                     <li>
            <a href=\"#\" class=\"flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group\">
               <svg class=\"w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 22 21\">
                  <path d=\"M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z\"/>
                  <path d=\"M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z\"/>
               </svg>
               <span class=\"ms-3\">Dashboard</span>
            </a>
         </li>
         <li>
            <a href=\"#\" class=\"flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group\">
               <svg class=\"flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 18 18\">
                  <path d=\"M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z\"/>
               </svg>
               <span class=\"flex-1 ms-3 whitespace-nowrap\">Kanban</span>
            </a>
         </li>
         <li>
            <a href=\"#\" class=\"flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group\">
               <svg class=\"flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 20\">
                  <path d=\"m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z\"/>
               </svg>
               <span class=\"flex-1 ms-3 whitespace-nowrap\">Inbox</span>
            </a>
         </li>
         <li>
            <a href=\"#\" class=\"flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group\">
               <svg class=\"flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 20 18\">
                  <path d=\"M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z\"/>
               </svg>
               <span class=\"flex-1 ms-3 whitespace-nowrap\">Users</span>
            </a>
         </li>
         <li>
            <a href=\"#\" class=\"flex items-center p-2 text-gray-900 rounded-lg  hover:bg-gray-100  group\">
               <svg class=\"flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 18 20\">
                  <path d=\"M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z\"/>
               </svg>
               <span class=\"flex-1 ms-3 whitespace-nowrap\">Products</span>
            </a>
         </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
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
                                    Product name
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Color
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Category
                                </th>
                                <th scope=\"col\" class=\"px-6 py-3\">
                                    Price
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
                            <tr class=\"bg-white border-b hover:bg-green-200  \">
                                <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap \">
                                    Microsoft Surface Pro
                                </th>
                                <td class=\"px-6 py-4\">
                                    White
                                </td>
                                <td class=\"px-6 py-4\">
                                    Laptop PC
                                </td>
                                <td class=\"px-6 py-4\">
                                    \$1999
                                </td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"#\" class=\"font-medium text-green-500  hover:underline\">voir détail</a>
                                </td>
                            </tr>
                            <tr class=\"bg-white border-b hover:bg-green-200 \">
                                <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap \">
                                    Magic Mouse 2
                                </th>
                                <td class=\"px-6 py-4\">
                                    Black
                                </td>
                                <td class=\"px-6 py-4\">
                                    Accessories
                                </td>
                                <td class=\"px-6 py-4\">
                                    \$99
                                </td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"#\" class=\"font-medium text-green-500  hover:underline\">voir détail</a>
                                </td>
                            </tr>
                            <tr class=\"bg-white border-b hover:bg-green-200 \">
                                <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap \">
                                    Apple Watch
                                </th>
                                <td class=\"px-6 py-4\">
                                    Silver
                                </td>
                                <td class=\"px-6 py-4\">
                                    Accessories
                                </td>
                                <td class=\"px-6 py-4\">
                                    \$179
                                </td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"#\" class=\"font-medium text-green-500  hover:underline\">voir détail</a>
                                </td>
                            </tr>
                            <tr class=\"bg-white border-b hover:bg-green-200\">
                                <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap \">
                                    iPad
                                </th>
                                <td class=\"px-6 py-4\">
                                    Gold
                                </td>
                                <td class=\"px-6 py-4\">
                                    Tablet
                                </td>
                                <td class=\"px-6 py-4\">
                                    \$699
                                </td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"#\" class=\"font-medium text-green-500  hover:underline\">voir détail</a>
                                </td>
                            </tr>
                            <tr class=\"bg-white border-b hover:bg-green-200 \">
                                <th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap \">
                                    Apple iMac 27\"
                                </th>
                                <td class=\"px-6 py-4\">
                                    Silver
                                </td>
                                <td class=\"px-6 py-4\">
                                    PC Desktop
                                </td>
                                <td class=\"px-6 py-4\">
                                    \$3999
                                </td>
                                <td class=\"px-6 py-4\">
                                    <a href=\"#\" class=\"font-medium text-green-500 hover:underline\">voir détail</a>
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


    {# -------------------------------- FORMULAIRE -------------------------------- #}

 
<div class=\"flex justify-center items-center h-full w-full\">
  <div class=\"grid gap-8\">
    <section
      id=\"back-div\"
      class=\"bg-gradient-to-r from-blue-500 to-purple-500 rounded-3xl\"
    >
      <div
        class=\"border-8 border-transparent rounded-xl bg-white dark:bg-gray-900 shadow-xl p-8 m-2\"
      >
        <h1
          class=\"text-5xl font-bold text-center cursor-default dark:text-gray-300 text-gray-900\"
        >
          Log in
        </h1>
        <form action=\"#\" method=\"post\" class=\"space-y-6\">
          <div>
            <label for=\"email\" class=\"block mb-2 text-lg dark:text-gray-300\"
              >Email</label
            >
            <input
              id=\"email\"
              class=\"border p-3 shadow-md dark:bg-indigo-700 dark:text-gray-300 dark:border-gray-700 border-gray-300 rounded-lg w-full focus:ring-2 focus:ring-blue-500 transition transform hover:scale-105 duration-300\"
              type=\"email\"
              placeholder=\"Email\"
              required=\"\"
            />
          </div>
          <div>
            <label for=\"password\" class=\"block mb-2 text-lg dark:text-gray-300\"
              >Password</label
            >
            <input
              id=\"password\"
              class=\"border p-3 shadow-md dark:bg-indigo-700 dark:text-gray-300 dark:border-gray-700 border-gray-300 rounded-lg w-full focus:ring-2 focus:ring-blue-500 transition transform hover:scale-105 duration-300\"
              type=\"password\"
              placeholder=\"Password\"
              required=\"\"
            />
          </div>
          <a href=\"#\" class=\"text-blue-400 text-sm transition hover:underline\"
            >Forget your password?</a
          >
          <button
            class=\"w-full p-3 mt-4 text-white bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500\"
            type=\"submit\"
          >
            LOG IN
          </button>
        </form>
        <div class=\"flex flex-col mt-4 text-sm text-center dark:text-gray-300\">
          <p>
            Don't have an account?
            <a href=\"#\" class=\"text-blue-400 transition hover:underline\"
              >Sign Up</a
            >
          </p>
        </div>
        <div id=\"third-party-auth\" class=\"flex justify-center gap-4 mt-5\">
          <button
            class=\"p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg\"
          >
            <img
              class=\"w-6 h-6\"
              loading=\"lazy\"
              src=\"https://ucarecdn.com/8f25a2ba-bdcf-4ff1-b596-088f330416ef/\"
              alt=\"Google\"
            />
          </button>
          <button
            class=\"p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg\"
          >
            <img
              class=\"w-6 h-6\"
              loading=\"lazy\"
              src=\"https://ucarecdn.com/95eebb9c-85cf-4d12-942f-3c40d7044dc6/\"
              alt=\"LinkedIn\"
            />
          </button>
          <button
            class=\"p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg\"
          >
            <img
              class=\"w-6 h-6 dark:invert\"
              loading=\"lazy\"
              src=\"https://ucarecdn.com/be5b0ffd-85e8-4639-83a6-5162dfa15a16/\"
              alt=\"GitHub\"
            />
          </button>
          <button
            class=\"p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg\"
          >
            <img
              class=\"w-6 h-6\"
              loading=\"lazy\"
              src=\"https://ucarecdn.com/6f56c0f1-c9c0-4d72-b44d-51a79ff38ea9/\"
              alt=\"Facebook\"
            />
          </button>
          <button
            class=\"p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg\"
          >
            <img
              class=\"w-6 h-6\"
              loading=\"lazy\"
              src=\"https://ucarecdn.com/82d7ca0a-c380-44c4-ba24-658723e2ab07/\"
              alt=\"Twitter\"
            />
          </button>
          <button
            class=\"p-2 rounded-lg hover:scale-105 transition transform duration-300 shadow-lg\"
          >
            <img
              class=\"w-6 h-6\"
              loading=\"lazy\"
              src=\"https://ucarecdn.com/3277d952-8e21-4aad-a2b7-d484dad531fb/\"
              alt=\"Apple\"
            />
          </button>
        </div>
        <div class=\"mt-4 text-center text-sm text-gray-500\">
          <p>
            By signing in, you agree to our
            <a href=\"#\" class=\"text-blue-400 transition hover:underline\"
              >Terms</a
            >
            and
            <a href=\"#\" class=\"text-blue-400 transition hover:underline\"
              >Privacy Policy</a
            >.
          </p>
        </div>
      </div>
    </section>
  </div>
</div>


{# ---------------------------------------------------------------------- #}

{# ----------------------------------- ENREGISTREMENT ------------------------- #}


<div class=\"flex flex-col items-center justify-center h-screen dark\">
  <div class=\"w-full max-w-md bg-gray-800 rounded-lg shadow-md p-6\">
    <h2 class=\"text-2xl font-bold text-gray-200 mb-4\">Sign Up</h2>
    <form class=\"flex flex-col\">
      <div class=\"flex space-x-4 mb-4\">
        <input
          placeholder=\"First Name\"
          class=\"bg-gray-700 text-gray-200 border-0 rounded-md p-2 w-1/2 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150\"
          type=\"text\"
        />
        <input
          placeholder=\"Last Name\"
          class=\"bg-gray-700 text-gray-200 border-0 rounded-md p-2 w-1/2 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150\"
          type=\"text\"
        />
      </div>
      <input
        placeholder=\"Email\"
        class=\"bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150\"
        type=\"email\"
      />
      <input
        placeholder=\"Confirm Email\"
        class=\"bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150\"
        type=\"email\"
      /> 
        
      <input
        placeholder=\"Password\"
        class=\"bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150\"
        type=\"password\"
      />
      <input
        placeholder=\"Confirm Password\"
        class=\"bg-gray-700 text-gray-200 border-0 rounded-md p-2 mb-4 focus:bg-gray-600 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150\"
        type=\"password\"
      />
     
      <button
        class=\"bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150\"
        type=\"submit\"
      >
        Sign Up
      </button>
    </form>
  </div>
</div>


<label class=\"switch\">
    <input type=\"checkbox\" class=\"checkbox\" id=\"toggleSwitch\">
    <div class=\"slider\"></div>
</label>

        {# <script>
        document.getElementById('toggleSwitch').addEventListener('change', function() {
            if (this.checked) {
                console.log('Le switch est activé');
            } else {
                console.log('Le switch est désactivé');
            }
        });
        </script> #}

{# ------------------------------------------------------------------------- #}

{% endblock %}
", "client/index.html.twig", "/home/sms_12/gestion_dette/templates/client/index.html.twig");
    }
}
